<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title><?php $template->page_title(); ?></title>
<?php echo APP_VIEWPORT; ?>
<base href='<?php echo BASE_URL; ?>' /> 

<!-- Stylesheets + Favicon: -->
<link rel="stylesheet" href="<?php echo BASE_URL;?>static/css/main.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo BASE_URL;?>static/css/mobile.css" />
<link rel="stylesheet" href="<?php echo BASE_URL;?>static/css/mobiscroll-1.5.3.css" type="text/css" />
<link rel="shortcut icon" href="<?php echo BASE_URL;?>static/images/favicon.ico" /> 
<!-- /Stylesheets + Favicon: -->

<!-- JavaScript: -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>static/js/functions.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>static/js/mobiscroll-1.5.3.js" ></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>static/js/mobile.js"></script>
<!-- /JavaScript -->


    
<!-- SEO: -->
<meta name="description" content="<?php echo APP_DESCRIPTION; ?>" /> 
<meta name="keywords" content="<?php echo APP_KEYWORDS; ?>" />
<meta name="generator" content="<?php echo APP_NAME ." V.".APP_VERSION." BUILD:".APP_BUILD;?>"> 
<meta name="author" content="<?php echo APP_DEVELOPER; ?>">
<link rel="canonical" href="<?php echo BASE_URL; ?>" /> 
<!-- /SEO -->

</head>

<body>
<div data-role="page">
	<div data-role="header">
	    <?php if($user->is_logged){?>    
    <div class="grid-l" id="header_left"><a href="<?php echo BASE_URL;?>home" ><div class="icon_sm icon-home" style="margin-top: 8px;">
 <div class="icon-home-triangle"></div>
 <div class="icon-home-rectangle">
 <div class="icon-home-rectangle2"></div>
 </div>
 <div class="icon-home-line"></div>
 
</div></a></div>
<div class="grid-c" id="page_title">The Tiki Hut</div>
<div class="grid-r" id="header_right"></div>

    <?php }else{ ?>
    <div class="grid-l" id="header_left"></div>
    <div class="grid-c" id="page_title"><?php echo APP_NAME . APP_VERSION;?></div>
    <div class="grid-r" id="header_right">
    </div>
	<?php } ?>
    </div>
    
	<div data-role="content" role="main">
		<?php $template->get_msg(); ?>