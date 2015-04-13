	
	<div class="content left page" style="margin-right: 8px; margin-left: 8px;">
		<h1><?php echo APP_NAME;?> :: Error</h1>
		<p><?php echo APP_NAME;?> Application has thrown an error. This could be due to Several reasons:</p>
        <ul>
        <li>The Link you clicked does not exist</li>
        <li>The Link you clicked is not an active service to your Subscription</li>
        <li>The System is currently lagging, and your process may have terminated unexpectantly</li>
        </ul>
        <p>If you clicked a link to a new Service recently added to your subscription, please go back and give the system a few minutes to check that the new service is active.</p>
        <p>If you clicked a link to a main Feature of the <?php echo APP_NAME;?> App, and this page is being shown, please go back and try the link again shortly.</p>
        
        <p align="center"><a href="<?php echo BASE_URL;?>home">PLEASE CLICK HERE TO GO BACK</a></p>
	</div>
    
    
<script>
$(document).live('pageinit',function(event){
$("#page_title").html('HCMini&trade; Error');
});
</script>