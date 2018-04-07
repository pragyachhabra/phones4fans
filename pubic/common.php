<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
  //DB Code Begins here
        include_once  '../ajax/db_connection.php';

        $query = "SELECT * FROM Language WHERE LastUsed IS NULL";

        if (!$result = mysql_query($query)) {
              exit(mysql_error());
          }

          // if query results contains rows then featch those rows 
          if(mysql_num_rows($result) > 0)
          {
            while($row = mysql_fetch_assoc($result, MYSQL_ASSOC))
            {
              $currentLangCode[] =  $row['Code'];
            }
          }
    //DB Code ends here
$lang = $currentLangCode[0];
}

switch ($lang) {
  case 'sw':
  $lang_file = 'lang.sw.php';
  break;

  case 'da':
  $lang_file = 'lang.da.php';
  break;

  case 'en':
  $lang_file = 'lang.en.php';
  break;

  default:
  $lang_file = 'lang.sw.php';

}

include_once 'languages/'.$lang_file;
?>