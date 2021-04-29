/* global nirman_constructionScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
	});
});

function nirman_construction_open() {
	document.getElementById("sidelong-menu").style.width = "250px";
}
function nirman_construction_close() {
	document.getElementById("sidelong-menu").style.width = "0";
}