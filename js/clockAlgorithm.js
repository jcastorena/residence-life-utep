// JavaScript Document
function UR_Start() 
{
	UR_Nu = new Date;
    var hours = UR_Nu.getHours();
    var minutes = UR_Nu.getMinutes();
	var dayofTheWeek = UR_Nu.getDay()
    
	var suffix = "AM";
    if (hours >= 12) {
    suffix = "PM";
    hours = hours - 12;
    }
    if (hours == 0) {
    hours = 12;
    }

    if (minutes < 10) {
    minutes = "0" + minutes
	}
	
	UR_Indhold = hours + ":" + minutes + " " + suffix;
	
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);

  switch (dayofTheWeek)
{
case 0:
  document.getElementById("dayDiv").innerHTML = 'SUNDAY';
  break;
case 1:
  document.getElementById("dayDiv").innerHTML = 'MONDAY';
  break;
case 2:
  document.getElementById("dayDiv").innerHTML = 'TUESDAY';
    break;
case 3:
  document.getElementById("dayDiv").innerHTML = 'WEDNESDAY';
  break;
case 4:
  document.getElementById("dayDiv").innerHTML = 'THURSDAY';
  break;
case 5:
 document.getElementById("dayDiv").innerHTML = 'FRIDAY';
  break;
case 6:
  document.getElementById("dayDiv").innerHTML = 'SATURDAY';
  break;
default:
  document.getElementById("dayDiv").innerHTML = 'N/A';
}
	
}
function showFilled(Value) 
{
	return (Value > 9) ? "" + Value : "0" + Value;
}