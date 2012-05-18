<?php get_header(); ?>

        <?php include("nav.php") ; ?>

      </header> <!-- /siteheader -->
      <!-- Carousel for featured news items -->

        <?php if ( is_front_page() ) { include("carousel.php"); } ?>

      <!-- Main content (posts, info, etc) -->
      <section id="content" class="row">

      <!-- Info about joining the club -->
      <?php get_sidebar(clubinfo); ?>

        <!-- News items -->
        <section id="posts" class="span7">

        <?php include("posts.php"); ?>

        </section> <!-- /posts -->

        <!-- Media items (photo gallery, social media, etc.) -->
        <?php get_sidebar(media); ?>
        
      </section> <!-- /content -->

      <hr>
<?php get_footer(); ?>
