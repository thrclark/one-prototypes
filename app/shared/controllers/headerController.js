/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
var HeaderController = function($scope) {
	$scope.menuOpen = false;
	$scope.toggleMenu = function(open) {
		if (typeof open == 'undefined') {
			open = !$scope.menuOpen;
		}
		if (open) {
			$('#sidebar_menu').css({right: 0, visibility:'visible'});
			setTimeout(function() {
				$('#menuCloseButton').focus();
			}, 300);
		} else {
			$('#menu_button').focus();
			$('#sidebar_menu').css({right: -227});
			setTimeout(function() {
				$('#sidebar_menu').css({visibility:'hidden'});
			}, 400);
		}
		$scope.menuOpen = open;
	};
};