<?php if($user->is_logged){ ?>
<div id="wait_time">
<div id="wait_time_pads">
<a class="hours_top" id="hours_top" ></a><a class="hours_bot" id="hours_bot" ></a>
<span class="separator">:</span>
<a class="tens_top" id="tens_top" ></a><a class="tens_bot" id="tens_bot" ></a>
<a class="mins_top" id="mins_top" ></a><a class="mins_bot" id="mins_bot" ></a>
<ul id="wait_paddles" class="mgn-tn6">
<li class="hours mgn-r-3" id="hours">0</li>
<li class="tens mgn-r-3" id="tens">0</li>
<li class="mins" id="mins">0</li></ul></div>
</div>

<div id="stats_display" class="mgn-8">
<div id="stats_bar_wrap">
<div class="ui-progress-bar ui-container transition" id="progress_bar">

          <span class="output" id="output1jq"></span>
            <div class="ui-progress" id="stat1jq" style="height: 0; position: absolute; bottom: 0; "></div>
          </div>
          <div id="stat_text_occ">Current Occupancy</div>

          

          <div class="ui-progress-bar ui-container transition" id="progress_bar">
          <span class="output" id="output2jq"></span>
            <div class="ui-progress" id="stat2jq" style="height: 0; position: absolute; bottom: 0; "></div>
          </div>
          <div id="stat_text_parties">Parties Waiting</div>

          

          <div class="ui-progress-bar ui-container transition" id="progress_bar">
          <span class="output" id="output3jq"></span>
            <div class="ui-progress" id="stat3jq" style="height: 0; position: absolute; bottom: 0; "></div>
          </div>
          <div id="stat_text_waittime">Average Wait Time</div>

          

          <div class="ui-progress-bar ui-container transition" id="progress_bar">
          <span class="output" id="output4jq"></span>
            <div class="ui-progress" id="stat4jq" style="height: 0; position: absolute; bottom: 0; "></div>
          </div>
          <div id="stat_text_resv">Reservations Pend.</div>
</div>
<div id="sms_delay">
<span style="width: 105px; height: 25px; padding-top:10px; vertical-align:top;">
Current SMS Delay:
</span>
<div class="ui-progress-bar2" id="progress_bar2">
       <span class="output2" id="output5"></span>
<div class="ui-progress2" id="stat5" style="width: 0; position: absolute; left: 0; "></div>
</div>
</div>

</div>

<!---\\Now We will Start our Navigational Buttons//--->
<ul id="nav">
	<li><a href="<?php echo BASE_URL;?>table"><div class="icon icon-paper">
 <div class="icon-paper-line-1">
 <div class="icon-paper-inner-1"></div>
 </div>
 <div class="icon-paper-line-2">
 <div class="icon-paper-inner-2"></div>
 </div>
 <div class="icon-paper-line-3">
 <div class="icon-paper-inner-3"></div>
 </div>
</div>
Tables</a></li>
	<li><a href="<?php echo BASE_URL;?>waitl">
    <div class="notifications">7</div>
    <div class="icon icon-clock">
 <div class="icon-clock-circle"></div>
 <div class="icon-clock-line-1"></div>
 <div class="icon-clock-line-2"></div>
</div>
    Wait List</a></li>
	<li><a href="<?php echo BASE_URL;?>resvs">
    <div class="notifications">10</div>
    <div class="icon icon-resvs">

 <div class="icon-resvs-line-1">
 <div class="icon-resvs-line-3"></div>
 <div class="icon-resvs-line-4"></div>
 <div class="icon-resvs-line-5"></div>
 </div>
 <div class="icon-resvs-line-2">
 <div class="icon-resvs-line-3"></div>
 <div class="icon-resvs-line-4"></div>
 <div class="icon-resvs-line-5"></div>
 </div>
 </div>
Reservations</a></li>
    <?php if($user->is_admin()){ ?>
    <li>
    <a href="<?php echo BASE_URL;?>managers">
    <div class="notifications">3</div>
    <div class="icon icon-profile">

 <div class="icon-profile-circle"></div>
 <div class="icon-profile-rectangle"></div>

 
</div>
Managers</a></li>
<?php } ?>
</ul>
<!---\\End//--->

<script>

$("#hours_top").click(function(){
			 var current_hours = $("#hours").html();
			 if(current_hours == "0"){
				var hours = parseInt(current_hours) + parseInt('1');
			 }else if (current_hours == "9"){
				 var hours = "0";
			 }else{
			 var hours = parseInt(current_hours) + parseInt('1');
			 }
			 $("#hours").html(hours);
});

$("#hours_bot").click(function(){
			 var current_hours = $("#hours").html();
			 if(current_hours == "0"){
				var hours="9"
			 }else if (current_hours == "9"){
				var hours = parseInt(current_hours) - parseInt('1');
			 }else{
			 var hours = parseInt(current_hours) - parseInt('1');
			 }
			 
			 $("#hours").html(hours);
});

//Adjust the Tens
$("#tens_top").click(function(){
			 var current_tens = $("#tens").html();
			 if(current_tens == "0"){
				var tens = parseInt(current_tens) + parseInt('1');
			 }else if (current_tens == "5"){
				 var tens = "0";
			 }else{
			 var tens = parseInt(current_tens) + parseInt('1');
			 }
			 $("#tens").html(tens);
});
$("#tens_bot").click(function(){
			 var current_tens = $("#tens").html();
			 if(current_tens == "0"){
				var tens = "5";
			 }else{
			 var tens = parseInt(current_tens) - parseInt('1');
			 }
			 
			 $("#tens").html(tens);
});
//Adjust the Mins
$("#mins_top, #mins_bot").click(function(){
			 var current_mins = $("#mins").html();
			 if(current_mins == "0"){
				var mins = "5"
			 }else if (current_mins == "5"){
				 var mins = "0";
			 }else{
			 var mins = parseInt(current_mins) + parseInt('1');
			 }
			 $("#mins").html(mins);
});

//Animate the Progress Bars:
	$("#stat1jq").animate({
    opacity: 1.0,
    height: '53'
  }, 1500, function(){
	var full_bar = $(this).height();
	if (full_bar == "100"){
	$(this).css({'border-top-left-radius' : '10px', 'border-top-right-radius' : '10px'});
	

	}
$("#output1jq").html($(this).height()+'%');	
  });	

	//StatsBar2
	$("#stat2jq").animate({
    opacity: 1.0,
    height: '30'
  }, 1500, function(){
	var full_bar = $(this).height();
	if (full_bar == "100"){
	$(this).css({'border-top-left-radius' : '10px', 'border-top-right-radius' : '10px'});

	}
	$("#output2jq").html($(this).height());
	});	
  //StatsBar3
	$("#stat3jq").animate({
    opacity: 1.0,
    height: '25'
  }, 1500, function(){
	var full_bar = $(this).height();
	if (full_bar == "100"){
	$(this).css({'border-top-left-radius' : '10px', 'border-top-right-radius' : '10px'});
	}
$("#output3jq").html($(this).height()+' Mins');
	});	

  //StatsBar4
	$("#stat4jq").animate({
    opacity: 1.0,
    height: '7'
  }, 1500, function(){
	var full_bar = $(this).height();
	if (full_bar >= "100"){
	$(this).css({'border-top-left-radius' : '10px', 'border-top-right-radius' : '10px'});
	}
$("#output4jq").html($(this).height());
	});	
	
	 //StatsBar5
	$("#stat5").animate({
    opacity: 1.0,
    width: '10'
  }, 1500, function(){
	var full_bar = $(this).width();
	if (full_bar >= "100"){
	$(this).css({'border-top-left-radius' : '10px', 'border-top-right-radius' : '10px'});
	}
$("#output5").html($(this).width()+' Seconds');
	});	


</script>
<?php }else{ ?>
<script>
	document.location.href='<?php echo BASE_URL;?>user/login';
</script>
<?php } ?>