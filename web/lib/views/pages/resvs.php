<div id="stat_left">
		<span id="short_stat_name">Total Parties:</span><br> 
		4 Parties
        </div>
        <div id="stat_waitime" >
        <p class="calendar"><span id="day"> </span><em><span id="month"></span> <span id="year"></span></em></p>
        </div>
        
        
      <div id="stat_right">
        <span id="short_stat_name">Covers:</span><br> 
        23 People
        </div>
        
<div id="date_drums" class="mobiscroll" style="display: none; position: absolute; z-index: 100; left: 50%; width: 200px; margin-left: -130px; margin-top: -35px; padding: 10px 30px; background:#ededef;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededef), to(#ccc)); 
	background: -moz-linear-gradient(top,  #ededef,  #ccc); border-radius: 10px; text-align:center;">
<div id="cls" class="close_x" style="left: -25px; top: -15px">&times;</div>    
<strong>Select a New Date</strong>:<br>
<input type="text" name="date1" id="date1" class="mobiscroll text" />
</div>

<script>
$("date_drums").hide();

//Datapicker Setup functions:
if(navigator.platform.indexOf("iPhone") != -1) {
var theme = "ios";
var mode = "scroller";	
}else if(navigator.platform.indexOf("android") != -1) {
var theme = "android";
var mode = "clickpick";	
} else {
var theme = "default";
var mode = "clickpick";	
}
//Calendar Functions
var monthNames = [ "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC" ];
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

var newDate = new Date();
newDate.setDate(newDate.getDate() + 1);    
//$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
$("#day").html(newDate.getDay());
$("#month").html(monthNames[newDate.getMonth()]);
$("#year").html(newDate.getFullYear());


//When the Calendar is clicked:
$(".calendar").click(function(){
$("#date_drums").show();
$('#date1').scroller('destroy').scroller({ theme: theme, mode: mode, dateFormat : "mm/dd/yyyy", startYear: newDate.getFullYear(), onClose: function(){
	$("#date_drums").hide();
	var selected_date = $("#date1").val();
	    if (selected_date != ""){
	    var selected_day = selected_date.substr(3,2);
		$("#day").html(selected_day);
		var selected_month = selected_date.substr(0, 2);
		if (selected_month.substr(0,1) == "0"){
			selected_month =  selected_month.substr(1,1) -1;
		} else {
			selected_month =  selected_month -1;
		}
		$("#month").html(monthNames[selected_month]);
		//alert(selected_month+"Month Name: "+monthNames[selected_month]);
		var selected_year = selected_date.substr(6,4);
		$("#year").html(selected_year);
		}
	} });

});


$("#cls").click(function(){
	$("#date_drums").hide();
	var selected_date = $("#date1").val();
	    if (selected_date != ""){
	    var selected_day = selected_date.substr(3,2);
		$("#day").html(selected_day);
		var selected_month = selected_date.substr(0, 2);
		if (selected_month.substr(0,1) == "0"){
			selected_month =  selected_month.substr(1,1) -1;
		} else {
			selected_month =  selected_month -1;
		}
		$("#month").html(monthNames[selected_month]);
		//alert(selected_month+"Month Name: "+monthNames[selected_month]);
		var selected_year = selected_date.substr(6,4);
		$("#year").html(selected_year);
		}
});
</script>