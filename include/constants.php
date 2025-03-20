<?php
/**
 * Constants.php
 *
 * This file is intended to group all constants to
 * make it easier for the site administrator to tweak
 * the login script.
 *
 */

/**
 * Database Constants - these constants are required
 * in order for there to be a successful connection
 * to the mysql database.
 * Make sure the information is
 * correct.
 */
define("DB_SERVER", "67.220.85.36");
define("DB_USER", "root");
define("DB_PASS", "nR6KRQG8BtMHUzSD");
define("DB_NAME", "foxbridge");


/**
 * Database Table Constants - these constants
 * hold the names of all the database tables used
 * in the script.
 */
define("TBL_USERS", "users");
define("TBL_ACTIVE_USERS", "active_users");
define("TBL_ACTIVE_GUESTS", "active_guests");
define("TBL_BANNED_USERS", "banned_users");

/**
 * Special Names and Level Constants - the admin
 * page will only be accessible to the user with
 * the admin name and also to those users at the
 * admin user level.
 * Feel free to change the names
 * and level constants as you see fit, you may
 * also add additional level specifications.
 * Levels must be digits between 0-9.
 */
define("ADMIN_NAME", "admin");
define("GUEST_NAME", "Guest");
define("ADMIN_LEVEL", 9);
define("USER_LEVEL", 1);
define("GUEST_LEVEL", 0);

/**
 * This boolean constant controls whether or
 * not the script keeps track of active users
 * and active guests who are visiting the site.
 */
define("TRACK_VISITORS", true);

/**
 * Timeout Constants - these constants refer to
 * the maximum amount of time (in minutes) after
 * their last page fresh that a user and guest
 * are still considered active visitors.
 */
define("USER_TIMEOUT", 900);
define("GUEST_TIMEOUT", 5);

/**
 * Cookie Constants - these are the parameters
 * to the setcookie function call, change them
 * if necessary to fit your website.
 * If you need
 * help, visit www.php.net for more info.
 * <http://www.php.net/manual/en/function.setcookie.php>
 */
define("COOKIE_EXPIRE", 60 * 60 * 24 * 100); // 100 days by default
define("COOKIE_PATH", "/booking"); // Avaible in whole domain

/**
 * Email Constants - these specify what goes in
 * the from field in the emails that the script
 * sends to users, and whether to send a
 * welcome email to newly registered users.
 */
define("EMAIL_FROM_NAME", "YourName");
define("EMAIL_FROM_ADDR", "youremail@address.com");
define("EMAIL_WELCOME", false);

/**
 * This constant forces all users to have
 * lowercase usernames, capital letters are
 * converted automatically.
 */
define("ALL_LOWERCASE", false);



// day names
$dayNames = array(
    "0" => "Sunday",
    "1" => "Monday",
    "2" => "Tuesday",
    "3" => "Wednesday",
    "4" => "Thursday",
    "5" => "Friday",
    "6" => "Saturday"
);

// month names
$monthNames = array(
    "january" => "January",
    "february" => "February",
    "march" => "March",
    "april" => "April",
    "may" => "May",
    "june" => "June",
    "july" => "July",
    "august" => "August",
    "september" => "September",
    "october" => "October",
    "november" => "November",
    "December" => "December"
);

$monthNumbers = array(
    'JAN' => "January",
    'FEB' => "February",
    'MAR' => "March",
    'APR' => "April",
    'MAY' => "May",
    'JUN' => "June",
    'JUL' => "July",
    'AUG' => "August",
    'SEP' => "September",
    'OCT' => "October",
    'NOV' => "November",
    'DEC' => "December"
);


define('DOMAIN','http://www.foxbridge.ca');
define('DOMAIN_SSL','https://www.foxbridge.ca');
 
define('DOMAIN_NAME','Foxbridge');
 

define('SUPPORT','service@skybooker.com');
define('HEADER_LOGO','https://www.destinatravel.com/images/logo_small.png');
define('BCC_CONFIRMATION','service@skybooker.com,easyfares@gmail.com,nishant.dhulipala@gmail.com');
define('BCC_FAILED','service@skybooker.com,easyfares@gmail.com,nishant.dhulipala@gmail.com');


 
define('DOMAIN_SHORT','destinatravel.com');
define('SITE_PIWIK_ID',1);
define('ADDRESS','Suite 650, One Glenlake Parkway, Atlanta, GA 30328');
 
define('PHONE_INT','+1-718-360-0660');
define('PHONE_LOCAL','1-888-591-5929');

define('ENCODE_KEY', '#&$sdfdfs789fs7d');
?>