/*

My Custom JS
============

Author:  Brad Hussey
Updated: August 2013
Notes:	 Hand coded for Udemy.com

*/

var dispaySignup;
var signform;
//as soon as the page loads
window.onload= function(){
document.getElementById("newAcc").style.display ="block";
document.getElementById("existingAcc").style.display ="none";
dispaySignup = document.getElementById("forExist");
	dispaySignup.onclick = function(){
		document.getElementById("existingAcc").style.display ="block";
		document.getElementById("newAcc").style.display ="none";
	}
	
	
}