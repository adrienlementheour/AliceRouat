///////////////
// variables //
///////////////

/*$(function(){
	// survol du logo de la home
	$(".home .header-logo").hover(
		function() {
			console.log("aze");
		}, function() {
			
		}
	);
});*/

var publicVars = publicVars || {},
	//bgColors = ["#fffcee", "#eef7f7", "#fbf1f8", "#f4f4f4", "#f5f7fd"],
	bgColors = ["#fffcee", "#e8f7f7", "#f3eaea", "#f5f7fd"],
	txtColors = ["#fef5ce", "#cbf7f7", "#f8d5ec", "#f0caca", "#d6dffb"];



;(function($, window, undefined)
{
	"use strict";

	function changeBgBody(currentBg){
		TweenMax.to($("#main-wrapper"), 5, {backgroundColor: bgColors[currentBg], ease:Power0.easeNone, onComplete: changeNextBgBody, onCompleteParams: [currentBg]});
	}

	function changeNextBgBody(currentBg){
		if(bgColors[currentBg+1] != undefined){
			changeBgBody(currentBg+1);
		}else{
			changeBgBody(0);
		}
	}

	function changeBorder(currentBg){
		//TweenMax.to($(".page-border > div"), 5, {backgroundColor: txtColors[currentBg], ease:Power0.easeNone, onComplete: changeNextBorder, onCompleteParams: [currentBg]});
	}

	function changeNextBorder(currentBg){
		if(txtColors[currentBg+1] != undefined){
			changeBorder(currentBg+1);
		}else{
			changeBorder(0);
		}
	}

	$(document).ready(function()
	{
		// survol du logo de la home
		$(".home .header-logo").hover(
			function() {
				TweenMax.to($("#cat"), 0.4, {display: "block", opacity: "1", ease:Cubic.easeInOut});
			}, function() {
				TweenMax.to($("#cat"), 0.4, {display: "none", opacity: "0", ease:Cubic.easeInOut});
			}
		);

		// animation du changement de bgcolor du body
		changeBgBody(0);
		changeBorder(0);
	});

})(jQuery, window);