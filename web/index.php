<?php
/***********************************************************************************
HCMini V.2.5.2 Build 0.0.3 Written by James Harvey <jharvey@hostconcepts.com>

HCMini follows the architecture of an MVC-Framework, and therefore adheres to
this architecture. the file .htaccess is Required, otherwise the application
will fail to launch successfully with the url-rewritting.

All Items displayed on the Screen are controlled via the "Views" Folder.
the Pages/ folder contains all contents that are viewed, such as waitlists, 
reservations, etc.

The Home screen is in the Views folder itself.

Virtually all items rendered are rendered through CSS except the page's Back-
ground. 

************************************************************************************

Written and Developed by James Harvey jharvey@hostconcepts.com, jchharvey@gmail.com

************************************************************************************/
//Loads the Configurables
require_once('lib/config.php');
//Initializes the APP
$app = new App;