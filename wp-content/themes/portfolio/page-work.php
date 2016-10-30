<?php get_header(); ?>

<?php
/*
  Template Name: Work
*/
?>

<div id="sub-page" class="content-area">
  <div class="main-wrapper">
    <main>

      <div class="projects">
        <div class="project">
          <h3>Basic Websites</h3>
          <div class="project-item">
            <div class="project-thumbnail">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/woodstockarc.jpg" alt="Woodstock ARC">
            </div>
            <div class="project-info">
              <h4>Woodstock American Reformed Church</h4>
              <p>This is the project that started my career. It’s the church where my dad works. It was my first website and my first real client. What you see here is actually the third iteration of their site; I would update it through my first year as I learned more.</p>
              <a href="/basic-websites" class="button button-blue-gray">View More</a>
            </div>
          </div>
        </div>

        <div class="project">
          <h3>WordPress Sites</h3>
          <div class="project-item">
            <div class="project-thumbnail">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/centertitle.png" alt="Center Title Services">
            </div>
            <div class="project-info">
              <h4>Center Title Services</h4>
              <p>In this website I tried to pay attention to matching the website colors with the business. The greenish color on the website is the same green as the front of the building. I took the main photo myself and touched up the paint job on the building in Photoshop.</p>
              <a href="/wordpress-websites" class="button button-blue-gray">View More</a>
            </div>
          </div>
        </div>

        <div class="project">
          <h3>Ruby on Rails Websites</h3>
          <div class="project-item">
            <div class="project-thumbnail">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/libraryshare.png" alt="Library Share App">
            </div>
            <div class="project-info">
              <h4>Library Sharing App</h4>
              <p>I’m always finding myself looking for new books, movies, food recipes, etc., so I wanted to make an app for my friends and family to use to share recommendations and to see everyone’s favorites from each category.</p>
              <a href="/rails-websites" class="button button-blue-gray">View More</a>
            </div>
          </div>
        </div>

        <div class="project">
          <h3>Artwork</h3>
          <div class="project-item">
            <div class="project-thumbnail">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/ClassCards2.png" alt="Reverie Class Cards">
            </div>
            <div class="project-info">
              <h4>Reverie Class Cards</h4>
              <p>I couldn’t decide how I wanted the class cards to look, so I made several versions and asked some friends for some input.</p>
              <a href="/artwork" class="button button-blue-gray">View More</a>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>
</div>

<?php get_footer(); ?>
