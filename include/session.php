<?php
/**
 * Session.php
 *
 * The Session class is meant to simplify the task of keeping
 * track of logged in users and also guests.
 *
 */



include("database.php");
include("mailer.php");
include("form.php");
 
include('array2xml.php');
    


//include(DIRECTORY."/data/data.php");

class Session
{
    var $username;     //Username given on sign-up
    var $userid;       //Random value generated on current login
    var $userlevel;    //The level to which the user pertains
    var $time;         //Time user was last active (page loaded)
    var $logged_in;    //True if user is logged in, false otherwise
    var $userinfo = array();  //The array holding all user info
    var $url;          //The page url current being viewed
    var $referrer;     //Last recorded site page viewed
    var $airportCache = [];
    var $encodeKey = 're45s';
    var $captchaSiteKey = '6LfGiiwpAAAAAGL9aUibMzPcNz3toxijUcQY_hRE';
    var $captchaSecretKey = '6LfGiiwpAAAAABGK2FGIBfw0_TI1UCsYykWFM6Hw';
    /**
     * Note: referrer should really only be considered the actual
     * page referrer in process.php, any other time it may be
     * inaccurate.
     */

    /* Class constructor */
    function __construct()
    {
        $this->time = time();
        putenv("TZ=Canada/Eastern");
        $this->startSession();


    }

    /**
     * startSession - Performs all the actions necessary to
     * initialize this session object. Tries to determine if the
     * the user has logged in already, and sets the variables
     * accordingly. Also takes advantage of this page load to
     * update the active visitors tables.
     */
    function startSession()
    {
        global $database;  //The database connection
        session_start();   //Tell PHP to start the session

        /* Determine if user is logged in */
        // $this->logged_in = $this->checkLogin();

        /**
         * Set guest value to users not logged in, and update
         * active guests table accordingly.
         */
        if (!$this->logged_in) {
            $this->username = $_SESSION['username'] = GUEST_NAME;
            $this->userlevel = GUEST_LEVEL;
            // $database->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);
        } /* Update users last active timestamp */
        else {
            // $database->addActiveUser($this->username, $this->time);
        }

        /* Remove inactive visitors from database */
        // $database->removeInactiveUsers();
        // $database->removeInactiveGuests();

        /* Set referrer page */
        if (isset($_SESSION['url'])) {
            $this->referrer = $_SESSION['url'];
        } else {
            $this->referrer = "/";
        }

        /* Set current url */
        $this->url = $_SESSION['url'] = $_SERVER['PHP_SELF'];
    }

    /**
     * checkLogin - Checks if the user has already previously
     * logged in, and a session with the user has already been
     * established. Definitions to see if user has been remembered.
     * If so, the database is queried to make sure of the user's
     * authenticity. Returns true if the user has logged in.
     */
    function checkLogin()
    {
        global $database;  //The database connection
        /* Check if user has been remembered */
        if (isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])) {
            $this->username = $_SESSION['username'] = $_COOKIE['cookname'];
            $this->userid = $_SESSION['userid'] = $_COOKIE['cookid'];
        }

        /* Username and userid have been set and not guest */
        if (isset($_SESSION['username']) && isset($_SESSION['userid']) &&
            $_SESSION['username'] != GUEST_NAME
        ) {
            /* Confirm that username and userid are valid */
            if ($database->confirmUserID($_SESSION['username'], $_SESSION['userid']) != 0) {
                /* Variables are incorrect, user not logged in */
                unset($_SESSION['username']);
                unset($_SESSION['userid']);
                return false;
            }

            /* User is logged in, set class variables */
            $this->userinfo = $database->getUserInfo($_SESSION['username']);
            $this->username = $this->userinfo['username'];
            $this->userid = $this->userinfo['userid'];
            $this->userlevel = $this->userinfo['userlevel'];
            return true;
        } /* User not logged in */
        else {
            return false;
        }
    }

    /**
     * login - The user has submitted his username and password
     * through the login form, this function checks the authenticity
     * of that information in the database and creates the session.
     * Effectively logging in the user if all goes well.
     */
    function login($subuser, $subpass, $subremember)
    {
        global $database, $form;  //The database and form object

        /* Username error checking */
        $field = "user";  //Use field name for username
        if (!$subuser || strlen($subuser = trim($subuser)) == 0) {
            $form->setError($field, "* Username not entered");
        }


        /* Password error checking */
        $field = "pass";  //Use field name for password
        if (!$subpass) {
            $form->setError($field, "* Password not entered");
        }

        /* Return if form errors exist */
        if ($form->num_errors > 0) {
            return false;
        }

        /* Checks that username is in database and password is correct */
        $subuser = stripslashes($subuser);
        $response = $database->confirmUserPass($subuser, $subpass);

        /* Check error codes */
        if ($response == 1) {
            $field = "user";
            $form->setError($field, "* Username not found");
        } else if ($response == 2) {
            $field = "pass";
            $form->setError($field, "* Invalid password");
        }

        /* Return if form errors exist */
        if ($form->num_errors > 0) {
            return false;
        }

        /* Username and password correct, register session variables */
        $this->userinfo = $database->getUserInfo($subuser);
        $this->username = $_SESSION['username'] = $this->userinfo['username'];
        $this->userid = $_SESSION['userid'] = $this->generateRandID();
        $this->userlevel = $this->userinfo['userlevel'];

        /* Insert userid into database and update active users table */
        $database->updateUserField($this->username, "userid", $this->userid);
        $database->addActiveUser($this->username, $this->time);
        $database->removeActiveGuest($_SERVER['REMOTE_ADDR']);

        /**
         * This is the cool part: the user has requested that we remember that
         * he's logged in, so we set two cookies. One to hold his username,
         * and one to hold his random value userid. It expires by the time
         * specified in constants.php. Now, next time he comes to our site, we will
         * log him in automatically, but only if he didn't log out before he left.
         */
        if ($subremember) {
            setcookie("cookname", $this->username, time() + COOKIE_EXPIRE, COOKIE_PATH);
            setcookie("cookid", $this->userid, time() + COOKIE_EXPIRE, COOKIE_PATH);
        }

        /* Login completed successfully */
        return true;
    }

    /**
     * generateRandID - Generates a string made up of randomized
     * letters (lower and upper case) and digits and returns
     * the md5 hash of it to be used as a userid.
     */
    function generateRandID()
    {
        return md5($this->generateRandStr(16));
    }

    /**
     * generateRandStr - Generates a string made up of randomized
     * letters (lower and upper case) and digits, the length
     * is a specified parameter.
     */
    function generateRandStr($length)
    {
        $randstr = "";
        for ($i = 0; $i < $length; $i++) {
            $randnum = mt_rand(0, 61);
            if ($randnum < 10) {
                $randstr .= chr($randnum + 48);
            } else if ($randnum < 36) {
                $randstr .= chr($randnum + 55);
            } else {
                $randstr .= chr($randnum + 61);
            }
        }
        return $randstr;
    }

    /**
     * logout - Gets called when the user wants to be logged out of the
     * website. It deletes any cookies that were stored on the users
     * computer as a result of him wanting to be remembered, and also
     * unsets session variables and demotes his user level to guest.
     */
    function logout()
    {
        global $database;  //The database connection
        /**
         * Delete cookies - the time must be in the past,
         * so just negate what you added when creating the
         * cookie.
         */
        if (isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])) {
            setcookie("cookname", "", time() - COOKIE_EXPIRE, COOKIE_PATH);
            setcookie("cookid", "", time() - COOKIE_EXPIRE, COOKIE_PATH);
        }

        /* Unset PHP session variables */
        unset($_SESSION['username']);
        unset($_SESSION['userid']);

        /* Reflect fact that user has logged out */
        $this->logged_in = false;

        /**
         * Remove from active users table and add to
         * active guests tables.
         */
        $database->removeActiveUser($this->username);
        $database->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);

        /* Set user level to guest */
        $this->username = GUEST_NAME;
        $this->userlevel = GUEST_LEVEL;
    }

    /**
     * register - Gets called when the user has just submitted the
     * registration form. Determines if there were any errors with
     * the entry fields, if so, it records the errors and returns
     * 1. If no errors were found, it registers the new user and
     * returns 0. Returns 2 if registration failed.
     */
    function register($subuser, $subpass, $subemail)
    {
        global $database, $form, $mailer;  //The database, form and mailer object

        /* Username error checking */
        $field = "user";  //Use field name for username
        if (!$subuser || strlen($subuser = trim($subuser)) == 0) {
            $form->setError($field, "* Username not entered");
        } else {
            /* Spruce up username, check length */
            $subuser = stripslashes($subuser);
            if (strlen($subuser) < 5) {
                $form->setError($field, "* Username below 5 characters");
            } else if (strlen($subuser) > 30) {
                $form->setError($field, "* Username above 30 characters");
            }  
             /* Check if username is reserved */
            else if (strcasecmp($subuser, GUEST_NAME) == 0) {
                $form->setError($field, "* Username reserved word");
            } /* Check if username is already in use */
            else if ($database->usernameTaken($subuser)) {
                $form->setError($field, "* Username already in use");
            } /* Check if username is banned */
            else if ($database->usernameBanned($subuser)) {
                $form->setError($field, "* Username banned");
            }
        }

        /* Password error checking */
        $field = "pass";  //Use field name for password
        if (!$subpass) {
            $form->setError($field, "* Password not entered");
        } else {
            /* Spruce up password and check length*/
            $subpass = stripslashes($subpass);
            if (strlen($subpass) < 4) {
                $form->setError($field, "* Password too short");
            } /* Check if password is not alphanumeric */
            
            /**
             * Note: I trimmed the password only after I checked the length
             * because if you fill the password field up with spaces
             * it looks like a lot more characters than 4, so it looks
             * kind of stupid to report "password too short".
             */
        }

        /* Email error checking */
        $field = "email";  //Use field name for email
        if (!$subemail || strlen($subemail = trim($subemail)) == 0) {
            $form->setError($field, "* Email not entered");
        } else {
            /* Check if valid email address */
            $regex = "^[_+a-z0-9-]+(\.[_+a-z0-9-]+)*"
                . "@[a-z0-9-]+(\.[a-z0-9-]{1,})*"
                . "\.([a-z]{2,}){1}$";
            if (!$this->isValidEmail($subemail)) {
                $form->setError($field, "* Email invalid");
            }
            $subemail = stripslashes($subemail);
        }

        /* Errors exist, have user correct them */
        if ($form->num_errors > 0) {
            return 1;  //Errors with form
        } /* No errors, add the new account to the */
        else {
            if ($database->addNewUser($subuser, $subpass, $subemail)) {
                if (EMAIL_WELCOME) {
                    $mailer->sendWelcome($subuser, $subemail, $subpass);
                }
                return 0;  //New user added succesfully
            } else {
                return 2;  //Registration attempt failed
            }
        }
    }

    function isValidEmail($email){ 
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    function getAge($iTimestamp)
    {
        $iAge = date('Y') - date('Y', $iTimestamp);

        if (date('n') < date('n', $iTimestamp)) {
            return --$iAge;
        } elseif (date('n') == date('n', $iTimestamp)) {
            if (date('j') < date('j', $iTimestamp)) {
                return $iAge - 1;
            } else {
                return $iAge;
            }
        } else {
            return $iAge;
        }
    }

    /**
     * isAdmin - Returns true if currently logged in user is
     * an administrator, false otherwise.
     */
    function isAdmin()
    {
        return ($this->userlevel == ADMIN_LEVEL ||
            $this->username == ADMIN_NAME);
    }
    function getIP(){

        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    
            $ip  = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
    
            $ip = $_SERVER['REMOTE_ADDR'];
        }
    
            $ip = explode(' ',$this->clean($ip));
    
            return end($ip);
    
        }

    function clean($string,$start=0,$length=100) {
        //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        $string =  preg_replace('/[^A-Za-z0-9\-.@ ]/', '', $string); // Removes special chars.

        return substr($string, $start,$length); 
    }

    function changetimeformat($time, $def = 0)
    {
        if (strlen($time) == 4) {
            $hour = substr($time, 0, 2);
            $min = substr($time, 2, 2);

            if ($def == 1) {
                return $hour . 'h ' . $min . 'm';
            } else
                return date("g:i A", mktime($hour, $min, 0, 0, 0, 0));

        } else
            return false;
    }

    function secondsToHours($seconds)
    {

        /*** return value ***/
        $ret = "";

        /*** get the hours ***/
        $hours = intval(intval($seconds) / 3600);
        if ($hours > 0) {
            $ret .= $hours . 'h ';
        }
        /*** get the minutes ***/
        $minutes = bcmod((intval($seconds) / 60), 60);
        if ($hours > 0 || $minutes > 0) {

            if ($minutes > 0)
                $ret .= $minutes . 'm';
        }

        /*** get the seconds ***/


        return $ret;
    }


    function hoursToSeconds($hrs1)
    {


        $ret = '';


        $hrs = intval(substr($hrs1, 0, 2));


        $hrs = ($hrs * 60);


        $hrs = ($hrs + intval(substr($hrs1, 2, 2)));


        $hrs = ($hrs * 60);


        $hrs = ($hrs + (mktime(0, 0, 0, 1, 1, 2015)));


        return date('h:i a', $hrs);


    }


    function changedateformat($time, $type = 0)
    {
        if (strlen($time) == 6) {
            $date = substr($time, 0, 2);
            $month = substr($time, 2, 2);
            $year = "20" . substr($time, 4, 2);

            if ($type == 1)
                return date('D M d', mktime(0, 0, 0, $month, $date, $year));
            else if ($type == 2)
                return date('d-M-y (D)', mktime(0, 0, 0, $month, $date, $year));
            else if ($type == 3)
                return date('D, d M y', mktime(0, 0, 0, $month, $date, $year));
            else if ($type == 4)
                return date('d-M-Y(D)', mktime(0, 0, 0, $month, $date, $year));
            else
                return $date . "-" . $month . "-" . $year;

        } else
            return false;
    }


    function diffDays($day, $day2 = NULL)
    {

        if (strlen($day2) > 0) {
            $today = new DateTime($day2);
        } else
            $today = new DateTime("now");
        $expecteday = new DateTime($day);
        $interval = $expecteday->diff($today);

        $newinterval = $interval->format('%m month,%d day');


// While %d will only output the number of days not already covered by the
// month.


        $ex = explode(',', $newinterval);

        $explode = explode(' ', $ex[0]);

        $explode2 = explode(' ', $ex[1]);

        if ($explode[0] > 0 && $explode2[0] > 0) {
            $return[0] = $newinterval;
            $return[1] = 5;

        } else if ($explode[0] > 0 && $explode2[0] == 0) {

            $return[0] = $ex[0];
            $return[1] = 5;

        } else {

            $return[0] = $ex[1];

            $return[1] = $explode2[0];
        }
// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.


        return $return;


    }

    function to_xml(SimpleXMLElement $object, array $data)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $new_object = $object->addChild($key);
                $this->to_xml($new_object, $value);
            } else {
                $object->addChild($key, $value);
            }
        }
    }

    function array_sort($array, $on, $order = SORT_ASC)
    {


        $new_array = array();
        $sortable_array = array();

        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    arsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }

        return $new_array;
    }
 

 
    function curlcall($url, $params)
    {
        $ch = curl_init();
        $curlConfig = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HEADER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "gzip"
        );
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);

        // testing purposes
        //	file_put_contents('cc-req.xml', print_r($params,1),FILE_APPEND);
        //file_put_contents('cc-resp.xml', print_r($response,1),FILE_APPEND);

        return $response;

    }
 function removeSpecialChars($string){
    // $newString = preg_replace('/[^a-z0-9]/i', '_', $string);
    return $this->encode($string);
 }


 public function encode($string)
 {

    

     $hash = '';
     $key = $this->encodeKey;
     $key = sha1($key);

     $strLen = strlen($string);
     $keyLen = strlen($key);
     $j = 0;
     for ($i = 0; $i < $strLen; $i++) {
         $ordStr = ord(substr($string, $i, 1));
         if ($j == $keyLen) {
             $j = 0;
         }
         $ordKey = ord(substr($key, $j, 1));
         $j++;
         $hash .= strrev(base_convert(dechex($ordStr + $ordKey), 16, 36));
     }

     return $hash;
 }

 public function decode($string)
 {
     $hash = '';

 
     $key = $this->encodeKey;

     $key = sha1($key);
     $strLen = strlen($string);
     $keyLen = strlen($key);
     $j = 0;
     for ($i = 0; $i < $strLen; $i += 2) {
         $ordStr = hexdec(base_convert(strrev(substr($string, $i, 2)), 36, 16));
         if ($j == $keyLen) {
             $j = 0;
         }
         $ordKey = ord(substr($key, $j, 1));
         $j++;
         $hash .= chr($ordStr - $ordKey);
     }

     return $hash;
 }



};

/**
 * Initialize session object - This must be initialized before
 * the form object because the form uses session variables,
 * which cannot be accessed unless the session has started.
 */
$session = new Session;

/* Initialize form object */
$form = new Form;


?>
