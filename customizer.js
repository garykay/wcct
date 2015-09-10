(function( $ ) {

    wp.customize( 'wcct_facebook_url', function( value ) {
        value.bind( function( to ) {

            var $a = $( '#wcct-facebook' );

            if ( '' == to ){
                $a.fadeOut();
            } else {
                $a.fadeIn()
            }

            $a.attr( 'href', to );
        } );
    });

    wp.customize( 'wcct_twitter_url', function( value ) {
        value.bind( function( to ) {

            var $a = $( '#wcct-twitter' );

            if ( '' == to ){
                $a.fadeOut();
            } else {
                $a.fadeIn()
            }

            $a.attr( 'href', to );
        } );
    });

    wp.customize( 'wcct_pinterest_url', function( value ) {
        value.bind( function( to ) {

            var $a = $( '#wcct-pinterest' );

            if ( '' == to ){
                $a.fadeOut();
            } else {
                $a.fadeIn()
            }

            $a.attr( 'href', to );
        } );
    });

})( jQuery );