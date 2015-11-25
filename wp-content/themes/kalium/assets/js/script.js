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

var publicVars = publicVars || {};

;(function($, window, undefined)
{
	"use strict";

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
	});

})(jQuery, window);