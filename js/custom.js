(function($) {

    $(document).ready(function() {

		$('#apply-now-button').on('click', function() {
            $('#hidden-application-form').slideToggle();
        });

        // var homeFilterOptions = $('#home-filter-options');

        // $(homeFilterOptions).hide();
        //
        // $('.home-location-option-boxes').on('click', function() {
        // 	$(homeFilterOptions).slideToggle();
        // });


		//
        // $("#bookmarkme").click(function(e) {
        //     e.preventDefault(); // this will prevent the anchor tag from going the user off to the link
        //     var bookmarkUrl = this.href;
        //     var bookmarkTitle = this.title;
		//
        //     if (window.sidebar) { // For Mozilla Firefox Bookmark
        //         window.sidebar.addPanel(bookmarkTitle, bookmarkUrl, "");
        //     } else if (window.external || document.all) { // For IE Favorite
        //         window.external.AddFavorite(bookmarkUrl, bookmarkTitle);
        //     } else if (window.opera) { // For Opera Browsers
        //         $("a.jQueryBookmark").attr("href", bookmarkUrl);
        //         $("a.jQueryBookmark").attr("title", bookmarkTitle);
        //         $("a.jQueryBookmark").attr("rel", "sidebar");
        //     } else { // for other browsers which does not support
        //         alert('Your browser does not support this bookmark action');
        //         return false;
        //     }
        // });

    });

})(jQuery);
