<?php get_header();?>
 <section>
   <div class="container">
    <h1 class="search-title text-center text-primary well">
      <?php echo $wp_query->found_posts; ?> <?php _e('Search Category Results', 'locale' ); ?>: "<?php the_search_query(); ?>"
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

 <!-- Dynamic Related Post-->
 <section>
    <div class="container">
      <h1 class="text-center text-primary well">Related Posts</h1>
      <hr class="w-25 text-center bg-warning">
      <div class="row">

        <?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
//echo 'Related Posts';
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>3,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>

  <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                </div>
              <div class="member-info">
                <h4><?php the_title();?></h4>
                <?php the_excerpt();?>
                 
                <a href="<?php the_permalink();?>"><button type="text" class="btn btn-warning mt-2">Learn More</button></a>
              </div>
            </div>
          </div> 
<?php
endwhile;
}
wp_reset_query();
}else{
  echo 'Sorry No Related Post Found.';
}
?>
        
      </div>
    </div>
 </section>

 <!---Author Information-->
 <section>
   <div class="container">
    <div class="row">
      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-10 col-10">
        <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'author_bio_avatar_size', 60 ) ); ?>
         <h2><span class="text-primary font-weight-bold">Author Name :: </span><?php the_author_posts_link(); ?></h2>
         <h6 class=""><span class="text-success font-weight-bold">Total Posts :: </span><?php echo get_the_author_posts();?></h6>
        <h5 class="text-primary">User Name::<?php the_author_meta( 'user_login' ); ?></h5>
        <h5 class="text-primary">Author ID :: <?php the_author_meta( 'ID' ); ?></h5>
        <a href="<?php the_author_meta('facebook');?>"><input type="button" class="btn btn-primary" name="btn" value="Facebook"></a>
        <a href="<?php the_author_meta('twitter');?>"><input type="button" class="btn btn-secondary" name="btn" value="Twitter"></a>
        <a href="<?php the_author_meta('instagram');?>"><input type="button" class="btn btn-warning" name="btn" value="Instagram"></a>
       
      </div>
      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-10 col-10">
        <h2 class="text-success">Author Description:</h2>
        <hr class="w-50 bg-warning ml-1">
        <p><?php the_author_meta( 'description' ); ?></p>
      </div>
      
    </div>
     
   </div>
 </section>
<?php get_footer();?>



