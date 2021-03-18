<?php get_header();?>
 <section>
   <div class="container">
    <h1 class="search-title text-center text-primary well">
      <?php echo $wp_query->found_posts; ?> <?php _e('Search Tag Results', 'locale' ); ?>: "<?php the_search_query(); ?>"
</h1>
     <?php
        if(have_posts()){

          the_post();
          ?>
            <h2 class="text-center text-warning"><?php the_title();?></h4>

              <hr class="w-25 bg-warning">
              <p class="font-weight-bold text-info" style="font-size:12px;">Posted In<?php the_category(',');?>| Posted on <?php the_time('M d, Y');?>|<?php comments_popup_link('no comment','1 comment','% comments');?></p>
               <?php the_post_thumbnail();?>
              <?php the_content();?>
              <p><?php the_tags();?></p>

       <?php

        }

     ?>

   </div>
 </section>
 <?php get_footer();?>