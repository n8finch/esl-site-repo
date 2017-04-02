(function($) {

	$(document).ready( function() {

		var homeFilterOptions = $('#home-filter-options');

		$(homeFilterOptions).hide();

		$('.home-location-option-boxes').on('click', function() {
			$(homeFilterOptions).slideToggle();
		});


	});

})(jQuery);
