<?php get_header();?>


<section>
   <div class="banner">
     <div class="container">
       <h1 class="text-center" style="background-color:gray; width:100%; height:300px;"><?php wp_title('||');?></h1>
     </div>
   </div>
 </section>
 <section>
   <div class="container">
     
     <?php
        if(have_posts()){

          the_post();
          ?>
            <a href="<?php the_permalink();?>"><h2 class="text-center text-warning"><?php the_title();?></h4></a>

              <hr class="w-25 bg-warning">
              <p class="font-weight-bold text-info" style="font-size:12px;">Posted In<?php the_category(',');?>| Posted on <?php the_time('M d, Y');?>|<?php comments_popup_link('no comment','1 comment','% comments');?></p>
               <?php the_post_thumbnail();?>
              <?php the_content();?>


       <?php

        }

     ?>

   </div>
 </section>
<?php get_footer();?>