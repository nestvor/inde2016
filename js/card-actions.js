(function($) {
	
	function expandCard(card, content) {
		var parentSection = $(card).parents('.section');
		var cards = $(parentSection).find('.front-page-card');
		
		$(parentSection).html(content);                                                       
		$(parentSection).append('<div class="col-md-4">');
		$(parentSection).find('.col-md-4').append(cards);
	}
	
	function minimizeCard(e) {
		var parentSection = $(e.target).parents('.section');
		var cards = $(parentSection).find('.front-page-card');
		
		$(parentSection).empty();
		$(parentSection).append(cards);
		$(cards).wrap('<div class="col-md-4">');
	}
	
    /** jQuery Document Ready */
    $(document).ready(function(){

        $( '.front-page-card .entry-title' ).live( 'click', function( e ) {

            /** Prevent Default Behaviour */
            e.preventDefault();

			var currentCard = $(this).parents('.front-page-card');
			var parentSection = $(this).parents('.section');
			var cards = $(parentSection).find('.front-page-card');

            /** Get Post ID */
            var post_id = $(currentCard).attr( 'id' ).split("-")[1];

            /** Ajax Call */
            $.ajax({
                cache: false,
                timeout: 30000,
                url: php_array.admin_ajax,
                type: "POST",
                data: ({ action:'get_inde_post', post_id: post_id }),

                beforeSend: function() {
                    $( '#ajax-response' ).html( 'Loading' );
                },

                success: function( data, textStatus, jqXHR ){

                    var $ajax_response = $( data );
                    expandCard(currentCard, $ajax_response);
                },

                error: function( jqXHR, textStatus, errorThrown ){
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
                },

                complete: function( jqXHR, textStatus ){
                }

            });

        });

		$('.card-minimizer').live('click', minimizeCard);

    });

})(jQuery);