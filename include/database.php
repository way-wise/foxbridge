<?php
/**
 * Database.php
 *
 * The Database class is meant to simplify the task of accessing
 * information from the website's database.
 *
 */
include("constants.php");

class mysqlDB
{
    var $connection;         //The mysql database connection
    var $num_active_users;   //Number of active users viewing site
    var $num_active_guests;  //Number of active guests viewing site
    var $num_members;        //Number of signed-up users
    var $mc;
    var $atlasConnection;
    /* Note: call getNumMembers() to access $num_members! */

    /* Class constructor */
    function __construct()
    {   /* Make connection to database */
        $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        // $this->globalAPIConnection = mysqli_connect(DB_SERVER,DB_USER, DB_PASS,'global-api');
        //  $this->globalAPIConnection->set_charset("utf8");

 



 
       
        /**
         * Only query database to find out number of members
         * when getNumMembers() is called for the first time,
         * until then, default value set.
         */
        $this->num_members = -1;

//        if (TRACK_VISITORS) {
//            /* Calculate number of users at site */
//            $this->calcNumActiveUsers();
//
////            /* Calculate number of guests at site */
//            $this->calcNumActiveGuests();
//        }
    }

    

    /**
     * confirmUserPass - Checks whether or not the given
     * username is in the database, if so it checks if the
     * given password is the same password in the database
     * for that user. If the user doesn't exist or if the
     * passwords don't match up, it returns an error code
     * (1 or 2). On success it returns 0.
     */
    function confirmUserPass($username, $password)
    {
        /* Add slashes if necessary (for query) */
      
      

        /* Verify that user is in database */
        $q = "SELECT password FROM " . TBL_USERS . " WHERE username = '$username'";
        $result = mysqli_query($this->connection, $q);
        if (!$result || (mysqli_num_rows($result) < 1)) {
            return 1; //Indicates username failure
        }

        /* Retrieve password from result, strip slashes */
        $dbarray = mysqli_fetch_array($result);
        $dbarray['password'] = stripslashes($dbarray['password']);
        $password = stripslashes($password);

        /* Validate that password is correct */
        if ($password == $dbarray['password']) {
            return 0; //Success! Username and password confirmed
        } else {
            return 2; //Indicates password failure
        }
    }


    function globalQuery($query)
    {
        return mysqli_query($this->globalAPIConnection, $query);
    }



    
    /**
     * confirmUserID - Checks whether or not the given
     * username is in the database, if so it checks if the
     * given userid is the same userid in the database
     * for that user. If the user doesn't exist or if the
     * userids don't match up, it returns an error code
     * (1 or 2). On success it returns 0.
     */
    function confirmUserID($username, $userid)
    {
         

        /* Verify that user is in database */
        $q = "SELECT userid FROM " . TBL_USERS . " WHERE username = '$username'";
        $result = mysqli_query($this->connection, $q);
        if (!$result || (mysqli_num_rows($result) < 1)) {
            return 1; //Indicates username failure
        }

        /* Retrieve userid from result, strip slashes */
        $dbarray = mysqli_fetch_array($result);
        $dbarray['userid'] = stripslashes($dbarray['userid']);
        $userid = stripslashes($userid);

        /* Validate that userid is correct */
        if ($userid == $dbarray['userid']) {
            return 0; //Success! Username and userid confirmed
        } else {
            return 2; //Indicates userid invalid
        }
    }



    /**
     * usernameTaken - Returns true if the username has
     * been taken by another user, false otherwise.
     */
    function usernameTaken($username)
    {
         
        $q = "SELECT username FROM " . TBL_USERS . " WHERE username = '$username'";
        $result = mysqli_query($this->connection, $q);
        return (mysqli_num_rows($result) > 0);
    }

    /**
     * usernameBanned - Returns true if the username has
     * been banned by the administrator.
     */
    function usernameBanned($username)
    {
        
        $q = "SELECT username FROM " . TBL_BANNED_USERS . " WHERE username = '$username'";
        $result = mysqli_query($this->connection, $q);
        return (mysqli_num_rows($result) > 0);
    }

    /**
     * addNewUser - Inserts the given (username, password, email)
     * info into the database. Appropriate user level is set.
     * Returns true on success, false otherwise.
     */
    function addNewUser($username, $password, $email)
    {
        $time = time();
        /* If admin sign up, give admin user level */
        if (strcasecmp($username, ADMIN_NAME) == 0) {
            $ulevel = ADMIN_LEVEL;
        } else {
            $ulevel = USER_LEVEL;
        }
        $q = "INSERT INTO " . TBL_USERS . " VALUES ('$username', '$password', '0', $ulevel, '$email', $time)";
        return mysqli_query($this->connection, $q);
    }

    /**
     * updateUserField - Updates a field, specified by the field
     * parameter, in the user's row of the database.
     */
    function updateUserField($username, $field, $value)
    {
        $q = "UPDATE " . TBL_USERS . " SET " . $field . " = '$value' WHERE username = '$username'";
        return mysqli_query($this->connection, $q);
    }

    /**
     * getUserInfo - Returns the result array from a mysql
     * query asking for all information stored regarding
     * the given username. If query fails, NULL is returned.
     */
    function getUserInfo($username)
    {
        $q = "SELECT * FROM " . TBL_USERS . " WHERE username = '$username'";
        $result = mysqli_query($this->connection, $q);
        /* Error occurred, return given name by default */
        if (!$result || (mysqli_num_rows($result) < 1)) {
            return NULL;
        }
        /* Return result array */
        $dbarray = mysqli_fetch_array($result);
        return $dbarray;
    }

    /**
     * getNumMembers - Returns the number of signed-up users
     * of the website, banned members not included. The first
     * time the function is called on page load, the database
     * is queried, on subsequent calls, the stored result
     * is returned. This is to improve efficiency, effectively
     * not querying the database when no call is made.
     */
    function getNumMembers()
    {
        if ($this->num_members < 0) {
            $q = "SELECT * FROM " . TBL_USERS;
            $result = mysqli_query($this->connection, $q);
            $this->num_members = mysqli_num_rows($result);
        }
        return $this->num_members;
    }

    /**
     * calcNumActiveUsers - Finds out how many active users
     * are viewing site and sets class variable accordingly.
     */
    function calcNumActiveUsers()
    {
        /* Calculate number of users at site */
        $q = "SELECT * FROM " . TBL_ACTIVE_USERS;
        $result = mysqli_query($this->connection, $q);
        $this->num_active_users = mysqli_num_rows($result);
    }

    /**
     * calcNumActiveGuests - Finds out how many active guests
     * are viewing site and sets class variable accordingly.
     */
    function calcNumActiveGuests()
    {
        /* Calculate number of guests at site */
        $q = "SELECT * FROM " . TBL_ACTIVE_GUESTS;
        $result = mysqli_query($this->connection, $q);
        $this->num_active_guests = mysqli_num_rows($result);
    }

    /**
     * addActiveUser - Updates username's last active timestamp
     * in the database, and also adds him to the table of
     * active users, or updates timestamp if already there.
     */
    function addActiveUser($username, $time)
    {
        $q = "UPDATE " . TBL_USERS . " SET timestamp = '$time' WHERE username = '$username'";
        mysqli_query($this->connection, $q);

        if (!TRACK_VISITORS) return;
        $q = "REPLACE INTO " . TBL_ACTIVE_USERS . " VALUES ('$username', '$time')";
        mysqli_query($this->connection, $q);
        $this->calcNumActiveUsers();
    }

    /* addActiveGuest - Adds guest to active guests table */
    function addActiveGuest($ip, $time)
    {
        if (!TRACK_VISITORS) return;
        $q = "REPLACE INTO " . TBL_ACTIVE_GUESTS . " VALUES ('$ip', '$time')";
        mysqli_query($this->connection, $q);
        $this->calcNumActiveGuests();
    }

    /* These functions are self explanatory, no need for comments */

    /* removeActiveUser */
    function removeActiveUser($username)
    {
        if (!TRACK_VISITORS) return;
        $q = "DELETE FROM " . TBL_ACTIVE_USERS . " WHERE username = '$username'";
        mysqli_query($this->connection, $q);
        $this->calcNumActiveUsers();
    }

    /* removeActiveGuest */
    function removeActiveGuest($ip)
    {
        if (!TRACK_VISITORS) return;
        $q = "DELETE FROM " . TBL_ACTIVE_GUESTS . " WHERE ip = '$ip'";
        mysqli_query($this->connection, $q);
        $this->calcNumActiveGuests();
    }

    /* removeInactiveUsers */
    function removeInactiveUsers()
    {
        if (!TRACK_VISITORS) return;
        $timeout = time() - USER_TIMEOUT * 60;
        $q = "DELETE FROM " . TBL_ACTIVE_USERS . " WHERE timestamp < $timeout";
        mysqli_query($this->connection, $q);
        $this->calcNumActiveUsers();
    }

    /* removeInactiveGuests */
    function removeInactiveGuests()
    {
        if (!TRACK_VISITORS) return;
        $timeout = time() - GUEST_TIMEOUT * 60;
        $q = "DELETE FROM " . TBL_ACTIVE_GUESTS . " WHERE timestamp < $timeout";
        mysqli_query($this->connection, $q);
        $this->calcNumActiveGuests();
    }

    /**
     * query - Performs the given query on the database and
     * returns the result, which may be false, true or a
     * resource identifier.
     */
    function query($query)
    {
        return mysqli_query($this->connection, $query);
    }


    // function for getting hotel address based on hotel name
    function getHotelAddress($hname, $citycode = NULL, $countrycode = NULL)
    {

        if (!empty($citycode)) {
            $q = "select * from `hotelcode` where `hotelname`='" . $hname . "' and `citycode` like '$citycode' and `countrycode` like '$countrycode'";
        } else
            $q = "select * from `hotelcode` where `hotelname`='" . $hname . "'";
        $data = $this->query($q);
        if (mysqli_num_rows($data) > 0) {
            $rec = mysqli_fetch_array($data);
            return $rec['address'] . ", " . ucwords($rec['cityname']) . ", " . ucwords($rec['countryname']);
        } else {
            return false;
        }
    }


    function datepicDate($date) // input date format (dd-mm-yyyy)
    {
        $monthNumbers = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December");
        return substr($date, 0, 2) . "-" . substr($monthNumbers[round(substr($date, 2, 2))], 0, 3) . "-20" . substr($date, -2);
    }


    function getStarRating($val)
    {
        return ($val / 5) * 100;
    }



    function atlasBulkInsert($db,$query){
    
        $bulk = new MongoDB\Driver\BulkWrite;

        $bulk->insert($query);
        
     

    try {
        return $this->atlasConnection->executeBulkWrite($db, $bulk);
    }
    catch(MongoDB\Driver\Exception\Exception $e){
        
        return false;
            }
        
}

function mongoQuery($db,$query,$limit = 0){

        
    if(is_array($limit)){

        $options = $limit;
    }
    else{

        $options = ['limit' => $limit];
    }


    return $this->atlasConnection->executeQuery($db, new MongoDB\Driver\Query($query,$options));
}



    


    /**
     * cache - Performs the given data on the memcache and
     * returns result, which may be false, true or a
     * resource identifier.
     */



    function cache($key, $value, $time = 10800)
    {

        $this->mc1->set($key, serialize($value), $time);
        $this->mc2->set($key, serialize($value), $time);

        // hardcoding true enable multiple servers
        return true;
    }

    function retrieve($key)
    {

        $r = $this->mc2->get($key);


            if(!empty($r)){
                return  unserialize($r);
            }
            else{
              return   unserialize($this->mc1->get($key));
            }



    }

    function deleteCache($key)
    {

          // hardcoding true enable multiple servers

       $this->mc1->delete($key);
       $this->mc2->delete($key);

       return true;
    }




}

;

/* Create database connection */
$database = new mysqlDB;

?>
