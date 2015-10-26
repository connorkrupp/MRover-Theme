<?php get_header(); ?>

  <div id="content">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <div class="home-hero">
              <div class="wrap">
                <div class="hero-content">
                  <h2>Title Here</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
              </div>
            </div>

            <div class="row-container one">
              <div class="wrap">
                <div class="row-content text-content">
                  <h4>Title Here</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                </div>
                <div class="row-content">
                  <div class="block"></div>
                </div>
              </div>
            </div>

            <div class="row-container two">
              <div class="wrap">
                <div class="row-content">
                  <div class="block"></div>
                </div>
                <div class="row-content text-content">
                  <h4>Title Here</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                </div>
              </div>
            </div>

            <div class="row-container three">
              <div class="wrap">
                <div class="row-content text-content">
                  <h4>Title Here</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                </div>
                <div class="row-content">
                  <div class="block"></div>
                </div>
              </div>
            </div>

            <div class="join-donate-cta wrap">
              <div class="cta">
                <h6>Join?</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button>Contact Us</button>
              </div>
              <div class="cta">
                <h6>Donate?</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button>Contact Us</button>
              </div>
            </div>

          </article>

        <?php endwhile; else : ?>

          <article id="post-not-found" class="hentry cf">
              <header class="article-header">
                <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
            </header>
              <section class="entry-content">
                <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
            </section>
            <footer class="article-footer">
                <p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
            </footer>
          </article>

        <?php endif; ?>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
