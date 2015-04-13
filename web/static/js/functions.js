/*$(document).ready(function() {        
	// Enter necessary functions here
});*/

$(document).bind("mobileinit", function(){
  //apply overrides here
  $(document).bind("keypress", function(e) { if (e.keyCode == 13) return false; });
  
  $.mobile.loadingMessage = "Please Wait";
  $.mobile.ajaxFormsEnabled = false;
  $.mobile.defaultTransition = 'slide';
  $.mobile.touchOverflowEnabled = true;
  $.mobile.pageLoadErrorMessage = 'Failed to retrieve Page. Please Try Again';
  $.mobile.orientationChangeEnabled = false;
  
  //alert ("HCMini 2.5.2 - Mobile Initialization Loaded"); 
  
});