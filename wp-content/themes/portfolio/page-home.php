<?php get_header( 'home' ); ?>

<div class="profile-image">
  <img src="<?php bloginfo( 'template_directory' ); ?>/img/profile.jpg" alt="Josiah Schaefer">
</div>

<div id="home-page" class="content-area">
  <div class="main-wrapper">
    <main>

      <p>I’m a web developer living in Indianapolis with my wife and two kids, soon to be three!

      I’ve been designing and developing websites for 3 years now, mostly WordPress sites, with a little bit of Ruby on Rails thrown in there to keep it interesting.

      I’m passionate about clean design, a good workflow, and learning new things!</p>

      <div class="navigation-links">
        <div class="flip">
          <div class="card">
            <div class="face front">
              <a class="navigation-link" href="/work" ontouchstart="this.classList.toggle('hover');">My Work</a>
            </div>
            <div class="face back">
              <a class="navigation-link" href="/work" ontouchstart="this.classList.toggle('hover');">My Work</a>
            </div>
          </div>
        </div>
        <div class="flip">
          <div class="card">
            <div class="face front">
              <a class="navigation-link" href="/about" ontouchstart="this.classList.toggle('hover');">About Me</a>
            </div>
            <div class="face back">
              <a class="navigation-link" href="/about" ontouchstart="this.classList.toggle('hover');">About Me</a>
            </div>
          </div>
        </div>
        <div class="flip">
          <div class="card">
            <div class="face front">
              <a class="navigation-link" href="/contact" ontouchstart="this.classList.toggle('hover');">Contact Me</a>
            </div>
            <div class="face back">
              <a class="navigation-link" href="/contact" ontouchstart="this.classList.toggle('hover');">Contact Me</a>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>
</div>

<?php get_footer(); ?>
