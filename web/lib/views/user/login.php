    <?php if($user->is_logged){ ?>
    <script>
	document.location.href='<?php echo BASE_URL; ?>';
	</script>
    <?php }else{ ?>
	<h2>Client Login</h2>
	
	<form method="post" action="login">
		<div data-role="fieldcontain">
			<label for="email" class="ui-input-text">Client Code:</label>
			<input type="text" name="email" class="text" id="email" value="apgs" maxlength="4" style="text-align:center; text-transform:uppercase;"/>
		</div>
		<div data-role="fieldcontain">
			<label for="password">Client Pin:</label>
			<input type="text" name="password" class="text" id="password" maxlength="4" value="0246" style="text-align:center; text-transform:uppercase;"/>
		</div>
		<div data-role="fieldcontain">
			<input type="hidden" name="task" value="login" />
			<input type="hidden" name="return_to" value="" />
			<!--<input type="submit" class="button submit" value="Login">-->
            <button class="button blue large"><span class="content glass">LOGIN</span></button>
		</div>
	</form>
    <?php } ?>