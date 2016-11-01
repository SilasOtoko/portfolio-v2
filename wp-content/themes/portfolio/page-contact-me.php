<?php get_header(); ?>

<?php
/*
  Template Name: Contact Me
*/
?>

<div id="sub-page" class="content-area">
  <div class="medium-wrapper">
    <main class="contact-page">

      <h3>Send me an email.</h3>

      <div class="contact-form">

        <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', 'page' );

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

        endwhile; // End of the loop.
        ?>

      </div>

      <h3>Call me.</h3>
      <h2>(574) 306-0155</h2>

    </main>
  </div>
</div>

<?php get_footer(); ?>
