<?php

// Global Variables
define("APP_NAME","HCMini&trade;");
define("APP_VERSION","2.5.2");
define("APP_BUILD","0.0.3");
define("APP_DESCRIPTION","This is a companion mobile app for the Host Concepts Hospitality Solution. This app allows restaurant staff to manage table availability, wait lists and reservations right from their mobile device. Data is instantly synced with the Host Concepts Tablet devices at the Host stand.");
define("APP_VIEWPORT", '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />');
define("APP_COPY", "&copy; 2010-2012 HostConcepts, LLC.");
define("APP_DEVELOPER", "James Harvey <jharvey@hostconcepts.com, webdevsourcerer@gmail.com>");
define("APP_KEYWORDS","host concepts, hcmini");
define("PASSWORD_SALT","HCMINI-252");
define("CACHE_ENABLE",false); //True or False
define("BASE_DIR",dirname(dirname(__FILE__)));
define("LIB_DIR",dirname(__FILE__));

// Be sure to set these!
// BASE URL for Production Server:
define("BASE_URL","http://hostconcepts.com/jh/hcmini_2.5.2/");

define("COOKIE_DOMAIN","HCMini.com");

// Database Config

$database = array (
	"user"  => "hostconc_jh",
	"pass"  => "jhar808_13",
	"host"  => "localhost",
	"dbname" => "hostconc_20"
);

// The following controllers/actions will not be cached:
$do_not_cache = array("user","home", "tables", "waitl", "resvs", "managers");

require_once(LIB_DIR."/functions.php");
require_once(LIB_DIR."/models/cache.php");
require_once(LIB_DIR."/models/database.php");
require_once(LIB_DIR."/models/user.php");
require_once(LIB_DIR."/models/template.php");