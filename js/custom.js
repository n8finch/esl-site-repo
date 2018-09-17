(function($) {

    $(document).ready(function() {

		$('#apply-now-button').on('click', function() {
            $(this).hide();
            $('#hidden-application-form').slideDown();
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

        // POSITION DROP DOWN
        $('li.gfield.position-dropdown select').on('change', function( e ) {

            var value = $(this).val();
            console.log(value);
            if( value === 'University Professor' ) {
                value = 197;
            } else if( value === 'High School Teacher' ) {
                value = 198;
            } else if( value === 'Elementary/Middle School Teacher' ) {
                value = 199;
            } else if( value === 'Private Academy Teacher' ) {
                value = 200;
            } else if( value === 'Translator' ) {
                value = 201;
            } else if( value === 'Other' ) {
                value = 202;
            }

            $('li.gfield.taxonomy-position-field select').val(value);
        });

        // SALARY RANGE DROP DOWN
        $('li.gfield.salary-range-dropdown select').on('change', function( e ) {

            var value = $(this).val();

            if (value === '0  - 2 mil KRW' ) {
                value = 236;
            } else if (value === '2 - 3 mil KRW' ) {
                value = 235;
            } else if (value === '3 mil KRW or more' ) {
                value = 234;
            }

            $('li.gfield.salary-taxonomy-field select').val(value);
        });

        // LOCAION DROPDOWN
        $('li.gfield.country-location-dropdown select').on('change', function( e ) {

            var value = $(this).val();

            if( value === 'South Korea' ) {
                value = 203;
            } else if( value === 'China' ) {
                value = 204;
            } else if( value === 'Japan' ) {
                value = 205;
            } else if( value === 'Other' ) {
                value = 206;
            }

            $('li.gfield.taxonomy-location-field select').val(value);
        });

        // CITY DROPDOWN
        $(document).on('change', function( e ) {

            var cityDrop = document.querySelector('li.gfield.city-location-dropdown select');
            var reqCheckVal = '';
            var reqIsChecked = '';
            if ( 'checkbox' === e.target.type) {
                reqCheckVal = e.target.value;
                if( e.target.checked ) {
                    reqIsChecked = 'checked';
                }
            }

            cityDrop.addEventListener('change', function( e ) {

                var value = (this.value);
                if( value === 'Busan' ) {
                    value = 208;
                } else if( value === 'Daegu' ) {
                    value = 209;
                } else if( value === 'Daejeon' ) {
                    value = 210;
                } else if( value === 'Gwangju' ) {
                    value = 213;
                } else if( value === 'Gyeonggi' ) {
                    value = 237;
                } else if( value === 'Incheon' ) {
                    value = 211;
                } else if( value === 'Jeju' ) {
                    value = 212;
                } else if( value === 'Other' ) {
                    value = 214;
                } else if( value === 'Seoul' ) {
                    value = 207;
                } else if( value === 'Shanghai' ) {
                    value = 215;
                }

                $('li.gfield.taxonomy-city-field select').val(value);
            });

            // REQUIREMENTS CHECKBOXES
            if( reqCheckVal === 'B.A.' ) {
                $('#choice_4_61_1').prop( { 'checked' : reqIsChecked } );
            } else if( reqCheckVal === 'M.A.' ) {
                $('#choice_4_61_4').prop( { 'checked' : reqIsChecked } );
            } else if( reqCheckVal === 'Ph.D.' ) {
                $('#choice_4_61_6').prop( { 'checked' : reqIsChecked } );
            } else if( reqCheckVal === 'Certifications' ) {
                $('#choice_4_61_2').prop( { 'checked' : reqIsChecked } );
            } else if( reqCheckVal === 'Experience' ) {
                $('#choice_4_61_3').prop( { 'checked' : reqIsChecked } );
            } else if( reqCheckVal === 'Other' ) {
                $('#choice_4_61_5').prop( { 'checked' : reqIsChecked } );
            }
        });

    });

})(jQuery);
