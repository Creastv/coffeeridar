  <h1 class="page-title">
      <?php if ( is_category() ) :
	  single_cat_title();	
		// the_title();					
	elseif (is_404()) :
		_e( '404', 'dse');
	elseif (is_page() ) :
		the_title();
	elseif ( is_tag() ) :
		single_tag_title();
	elseif ( is_author() ) :
		the_post();
		printf( __( '%s', 'dse' ), get_the_author() );
		rewind_posts();
	elseif ( is_day() ) :
		printf( __( 'Dzień: %s', 'dse' ), '<span>' . get_the_date() . '</span>' );
	elseif ( is_month() ) :
		printf( __( 'Miesiąc: %s', 'dse' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
	elseif ( is_year() ) :
		printf( __( 'Rok: %s', 'dse' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
	elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
		_e( 'Asides', 'dse' );
	elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
		_e( 'Images', 'dse');
	elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
		_e( 'Videos', 'dse' );
	elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
		_e( 'Quotes', 'dse' );
	elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
		_e( 'Links', 'dse' );
	else :
		_e( 'Blog', 'dse' );
    endif; ?>
  </h1>
