<?php



if($_SERVER['SERVER_NAME'] =='localhost')
{
    // use this when the app is offline
    define("ROOT","http://localhost/www/apps/Agrocrown-system-apps/public");
}else
{
    // use this when the app is online
    define("ROOT","https://www.yourwebsite.com");

}