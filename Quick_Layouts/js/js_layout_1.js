/**
 * Created by intern on 8/6/16.
 */
$(document).ready(function(){
	function init() {
		prepAdminButtons()
	}

	function prepAdminButtons() {

	}

	init();
});

function call_a_function() {
	if(this.hasClass("hide-text")) {
		$('.admin-text').show();
	} else {
		$('.admin-text').hide();
	}
}

function remove_admin() {
	$( '.trickery' ).remove();
}
