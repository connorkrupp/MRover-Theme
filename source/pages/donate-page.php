<?php
/*
 Template Name: Donate Page
*/
?>
<?php get_header(); ?>

  <div id="content" class="donate-page">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <div class="hero">
              <div class="wrap">
                <div class="hero-content">
                  <h2>Support Us</h2>
                  <p>Lorem ipsum el funyon Lorem ipsum el funyon Lorem ipsum el funyon Lorem ipsum el funyon Lorem ipsum el funyon Lorem ipsum el funyon </p>
                </div>
              </div>
            </div>

            <div class="section-divider"><h3>U of M College of Engineering</h3></div>

            <div class="row-container one">
              <div class="wrap">
                <div class="row-content text-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                </div>
                <div class="row-content">
                  <div class="block"></div>
                </div>
              </div>
            </div>

            <div class="section-divider"><h3>Want to Help?</h3></div>

            <div class="contact-info wrap">
              <h3 class="contact">Contact us at</h3>
              <div class="underline"></div>
              <h3 class="email">mrover@umich.edu</h2>

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
