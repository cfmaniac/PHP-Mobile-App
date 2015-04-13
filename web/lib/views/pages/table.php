<div id="stat_left_tbl">
		<span id="short_stat_name">Table Status:</span><br> <span style="color:#060; font-weight:bold;">AVAILABLE</span>
        </div>
      <div id="stat_num_tbl" >602</div>  
      <div id="stat_right_tbl">
        <span id="short_stat_name">Covers:</span><br> 0 People
        </div>
        
		<div style="width: 320px; margin: 0px; display: inline-block; background-color:#CCC; height: 1px;"></div>
        <table width="240" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
    <td height="50" align="center" valign="middle"><button class="keypad glass" id="7"><span class="content"><span class="num">7</span></span></button></td>
    <td height="50" align="center" valign="middle"><button class="keypad glass" id="8"><span class="content"><span class="num">8</span></span></button></td>
    <td height="50" align="center" valign="middle"><button class="keypad glass" id="9"><span class="content"><span class="num">9</span></span></span></button></td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><button class="keypad glass" id="4"><span class="content"><span class="num">4</span></span></button></td>
    <td height="50" align="center" valign="middle"><button class="keypad glass" id="5"><span class="content"><span class="num">5</span></span></button></td>
    <td height="50" align="center" valign="middle"><button class="keypad glass" id="6"><span class="content"><span class="num">6</span></span></button></td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><button class="keypad glass" id="1"><span class="content"><span class="num">1</span></span></button></td>
    <td height="50" align="center" valign="middle"><button class="keypad glass" id="2"><span class="content"><span class="num">2</span></span></button></td>
    <td height="50" align="center" valign="middle"><button class="keypad glass" id="3"><span class="content"><span class="num">3</span></span></button></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><button class="keypad glass red" id="clr"><span class="content"><span class="num">&times;</span></span></button></td>
    <td align="center" valign="middle"><button class="keypad glass" id="0"><span class="content"><span class="num">0</span></span></button></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<div id="actions_panel" style="width: 110px; padding-left: 7px; text-align:left; position:relative; top: -343px; left: 330px; zindex: 50; background: #f5f5f5; height: 340px; border: 1px solid #000; border-radius: 10px;"><div id="cls" class="close_x">&times;</div>
<button class="button glass blue" style="width: 73px; height: 35px;"><span class="content">EVT</span></button>
<button class="button glass gray" style="width: 73px; height: 35px;"><span class="content">BLK</span></button>
<button class="button glass red" style="width: 73px; height: 35px;"><span class="content">BRK</span></button>
<button class="button glass green" style="width: 73px; height: 35px;"><span class="content">OPEN</span></button>
<button class="button glass gold" style="width: 73px; height: 35px;"><span class="content">SEAT</span></button><br>
<button class="button glass purple" style="width: 73px; height: 35px;"><span class="content">PAGE SVR</span></button>
<button class="button glass black" style="width: 73px; height: 35px;"><span class="content">PAGE MGR</span></button>
</div>

<script>

$('#9, #8, #7, #6, #5, #4,#3, #2, #1, #0').click(function(){
  /*$("#actions_panel").css('left', function(){ return $(this).offset().left; }).animate({"left":"300px"}, "slow"); */
    var left = $('#actions_panel').offset().left;  // Get the calculated left position

$("#actions_panel").css({left:left})  // Set the left to its calculated position
             .animate({"left":"210px"}, "slow");
		 

  });

$('#clr, #cls').click(function(){
	var left = $('#actions_panel').offset().left;  // Get the calculated left position
$("#actions_panel").css({left:left})  // Set the left to its calculated position
             .animate({"left":"330px"}, "slow");
	
});
</script>