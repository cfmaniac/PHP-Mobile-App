	</div>
	<div data-role="footer">
    
		<!---<p class="left p10">&copy; 2010 <?PHP echo APP_NAME; ?></p>
		<ul class="right simplenav p10">
			<li><a href="<?php echo BASE_URL;?>about" data-icon="info" class="ui-btn-right">About</a></li>
			<li><a href="<?php echo BASE_URL;?>terms" data-icon="add">Terms of Service</a></li>
		</ul>--->
    <?php if($user->is_logged){?>    
    <div class="grid-l" id="header_left"><a href="<?php echo BASE_URL;?>user/logout"><div class="icon_sm icon-lock" style="margin-top: -8px; display: inline-block;">
 <div class="icon-lock-line"></div>
 <div class="icon-lock-circle-1"></div>
</div></a></div>
    <div class="grid-c"><span style="font-size: 10px;"><?php echo APP_COPY;?></span></div>
    <div class="grid-r" id="header_right">
	<?php } ?>
    </div>

</div>
</body>
</html>