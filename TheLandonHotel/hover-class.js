// JavaScript Document
$(function() {
        $("div.event").hover(highlight);    
    });
    
    function highlight() {
        $(this).toggleClass("highlightEvent");
    }