$(document).ready(function(){
	$('#submitcontent').hide();
	$('#submit').show();
	
	$('#submit').click(function(){
	$('#submitcontent').slideToggle();
});
});
 
$(document).ready(function(){
    $('[id^=postholder]').children('[id^=title]').click(function(){
		$(this).parent('[id^=postholder]').children('#content').slideToggle('fast');
    });
 });