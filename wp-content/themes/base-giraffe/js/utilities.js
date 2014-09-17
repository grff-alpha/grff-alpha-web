	
	/*** Tabs ***/
	$( document ).ready( function() {

		tabs( '.tabs-menu a', '.tab-content' );

		function tabs ( menuList, content ) {		

		    $( menuList ).click( function( event ) {

		        event.preventDefault();

		        $( this ).parent().addClass( 'current' );
		        $( this ).parent().siblings().removeClass( 'current' );

		        var tab = $( this ).attr( 'href' );

		        $( content ).not( tab ).css( 'display', 'none');
		        $( tab ).fadeIn();

		    });

		}

		$( '.btn-float' ).click( function( event ) {

			console.log( 'pasa' );

			event.preventDefault();

      		$( '.main-float' ).addClass( 'modal-all-page' );
			$( '.main-float .btn-float' ).hide();
			$( '.btn-close' ).show();
			
		});

		$( '.btn-close' ).click( function( event ) {

			event.preventDefault();

			$( '.main-float' ).removeClass( 'modal-all-page' );
			$( '.main-float .btn-float' ).show();
			$( '.btn-close' ).hide();
			
		});

	});