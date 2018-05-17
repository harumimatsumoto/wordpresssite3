<?php /* Template Name:トップページTPL */?>
<?php get_header(); ?>
  <?php
  if (is_front_page() && get_option('fit_function_pickup') == 'value2') :
	  $args = array(
	      'numberposts' => '3',
  		  'post_type'   => 'post',
	      'post_status' => 'publish'
	  );
    $new_meta = wp_get_recent_posts($args);
	  if ( get_option('fit_function_pickup_id01') ) {
		  $post_id01 = get_option('fit_function_pickup_id01');
	  }else{
		  $post_id01 = $new_meta[0]['ID'];
	  }
	  if ( get_option('fit_function_pickup_id02') ) {
		  $post_id02 = get_option('fit_function_pickup_id02');
	  }else{
		  $post_id02 = $new_meta[1]['ID'];
	  }
	  if ( get_option('fit_function_pickup_id03') ) {
		  $post_id03 = get_option('fit_function_pickup_id03');
	  }else{
		  $post_id03 = $new_meta[2]['ID'];
	  }	  
	  $cat_meta = get_option('cat_meta_data');
	  $cat_01 = get_the_category($post_id01);
	  $cat_02 = get_the_category($post_id02); 
	  $cat_03 = get_the_category($post_id03); 
	  $cat_id01 = $cat_01[0]->term_id ;
	  $cat_id02 = $cat_02[0]->term_id ;
    $cat_id03 = $cat_03[0]->term_id ;
  ?>
  <div class="key<?php if(get_option('fit_function_pickupSp')): ?> u-none-sp<?php endif; ?>">
    <ul class="key__list">
      <li class="key__item key__item-first">
        <span class="key__cat bgc<?php if (isset($cat_meta[$cat_id01])) { echo esc_html($cat_meta[$cat_id01]);} ?> u-txtShdw"><?php the_category(' ' ,'' ,$post_id01); ?></span>
        <a class="key__link" href="<?php echo get_permalink($post_id01); ?>">
        <h2 class="key__title u-txtShdw"><?php echo get_post($post_id01)->post_title; ?></h2>
        </a>
      </li>
      <li class="key__item key__item-second">
        <span class="key__cat bgc<?php if (isset($cat_meta[$cat_id02])) { echo esc_html($cat_meta[$cat_id02]);} ?> u-txtShdw"><?php the_category(' ' ,'' ,$post_id02); ?></span>
        <a class="key__link" href="<?php echo get_permalink($post_id02); ?>">
        <h2 class="key__title u-txtShdw"><?php echo get_post($post_id02)->post_title; ?></h2>
        </a>
      </li>
      <li class="key__item key__item-third">
        <span class="key__cat bgc<?php if (isset($cat_meta[$cat_id03])) { echo esc_html($cat_meta[$cat_id03]);} ?> u-txtShdw"><?php the_category(' ' ,'' ,$post_id03); ?></span>
        <a class="key__link" href="<?php echo get_permalink($post_id03); ?>">
        <h2 class="key__title u-txtShdw"><?php echo get_post($post_id03)->post_title; ?></h2>
        </a>
      </li>
    </ul>
  </div>
  <?php endif; ?>

  <!-- l-wrapper -->
  <div class="l-wrapper">
	
    <!-- l-main -->
    <main class="l-main<?php if ( get_option('fit_theme_pageLayout') == 'value2' ):?> l-main-single
    <?php if ( get_option('fit_theme_singleWidth') == 'value2' ):?> l-main-w740<?php endif; ?>
    <?php if ( get_option('fit_theme_singleWidth') == 'value3' ):?> l-main-w900<?php endif; ?>
    <?php if ( get_option('fit_theme_singleWidth') == 'value4' ):?> l-main-w100<?php endif; ?>
    <?php endif; ?>">
      
    <article>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <section class="content content-page">
      <?php the_content(); ?>
      </section>
      <?php endwhile; endif; ?>
        </article> 
      
      <?php if (is_active_sidebar('toppage-bottom')) : ?>
          <?php dynamic_sidebar( 'toppage-bottom' ); ?>
      <?php endif; ?>
      <a href="https://www.instagram.com/harumi_matsumot?ref=badge" class="insta_btn2">
        <span>Follow Me</span>
      </a>
      <a href="https://twitter.com/matumoto_harumi?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @matumoto_harumi</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      <a href ="https://www.facebook.com/profile.php?id=100026025484977" class="fb_btn">
        <span>Follow Me</span>
      </a>
      </article>
    </main>
    <!-- /l-main -->
    
    <?php if ( get_option('fit_theme_pageLayout') != 'value2' ):?>
    <!-- l-sidebar -->
      <?php dynamic_sidebar('toppage-sidebar'); ?>
    <!-- /l-sidebar -->
	
  <?php endif; ?>
  
  </div>
  <!-- /l-wrapper -->

<?php get_footer(); ?>