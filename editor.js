//Na stronie edytora (w wp-adminie), w konsoli przeglądarki wpisz: wp.data.select('core/blocks').getBlockTypes();

wp.domReady( function () {

	/**
	 * Register/ unregister block styles
	 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/#register_block_style
	 */
    // wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );
    // wp.blocks.unregisterBlockStyle( 'core/image', 'rounded' );
    // wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );
    // wp.blocks.unregisterBlockStyle( 'core/separator', 'wide' );
    // wp.blocks.unregisterBlockStyle( 'core/separator', 'dots' );
    //ZADANIE: odrejestruj styl paski (stripes) z bloku tabela

 //    wp.blocks.registerBlockStyle( 'core/cover', {
	//     name: 'curved',
	//     label: 'Curved',
	// } );

    /**
	 * Unregister block variations
	 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
	 */
	// wp.blocks.unregisterBlockVariation( 'core/social-link', 'yelp' );
	// wp.blocks.unregisterBlockVariation( 'core/embed', 'animoto' );
	//ZADANIE: odrejestruj warianty smugmug i amazon-kindle z bloku embed

	/**
	 * Unregister blocks
	 * @see https://developer.wordpress.org/block-editor/reference-guides/filters/block-filters/#using-a-deny-list
	 */
	// wp.blocks.unregisterBlockType( 'core/verse' );
	//ZADANIE: odrejestruj blok cytat wyróżniony (pullquote)
} );