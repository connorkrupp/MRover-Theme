<?php
/*
 Template Name: Contact Page
*/
?>
<?php get_header(); ?>

  <div id="content" class="contact-page">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <div class="hero">
              <div class="wrap">
                <div class="hero-content">
                  <h2>Title Here</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
              </div>
            </div>

            <div class="contact-info wrap">

              <h4>The Team</h4>
              <a href="mailto:rover@umich.edu">rover@umich.edu</a>
              <p>University of Michigan</p>
              <p>Wilson Student Team Project Center</p>
              <p>2603 Draper, Ann Arbor, MI 48109-2101</p>

              <h4>Executive Board</h4>
              <h6>President</h6>
              <p>Scott Briggs</p>
              <a href="mailto:sdbriggs@umich.edu">sdbriggs@umich.edu</a>
              <h6>Vice President</h6>
              <p>Nick Wurtz</p>
              <a href="mailto:sdbriggs@umich.edu">sdbriggs@umich.edu</a>
              <h6>Chief Engineer</h6>
              <p>Joe Yanos<p>
              <a href="mailto:sdbriggs@umich.edu">sdbriggs@umich.edu</a>
              <h6>Treasurer</h6>
              <p>Sam Rumack<p>
              <a href="mailto:sdbriggs@umich.edu">sdbriggs@umich.edu</a>
              <h6>Information Services Officer</h6>
              <p>Connor Krupp</p>
              <a href="mailto:sdbriggs@umich.edu">sdbriggs@umich.edu</a>
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
