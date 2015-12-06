<?php get_header(); ?>

  <div id="content" class="front-page">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <div class="hero">
              <div class="wrap">
                <div class="hero-content">
                  <h2>Michigan Mars Rover Team</h2>
    <p>We are a student-run organization at the University of Michigan in Ann Arbor. Our goal as an organization to is to, each year, design, build, and test a  mars rover to compete at the NASA sponsored University Rover Challenge. Our members consist of everyone from freshman to graduate students and everything in between. Keap reading to learn more about organization.</p>
                </div>
              </div>
            </div>

            <div class="row-container one">
              <div class="wrap">
                <div class="row-content text-content">
                  <h4>Who we are</h4>
    <p>We are a student-run, multidisciplinary organization whose mission is to design, build, and test a rover for the exploration of extraterrestrial environments and to assist astronauts on a mission to mars.</p>
                </div>
                <div class="row-content">
                  <div class="block one"></div>
                </div>
              </div>
            </div>

            <div class="row-container two">
              <div class="wrap">
                <div class="row-content">
                  <div class="block two"></div>
                </div>
                <div class="row-content text-content">
                  <h4>What we do</h4>
                  <p>We are a competition oriented team whose goal is to win the University Rover Challenge that takes place every year at NASA's Mars Desert Research Station near Hanksville, Utah. We bring all our team members together to make the best rover possible every year.</p>
                </div>
              </div>
            </div>

            <div class="row-container three">
              <div class="wrap">
                <div class="row-content text-content">
                  <h4>Where we are</h4>
                  <p>As a University of Michigan project team, we meet in the Wilson Student Team Project Center on North Campus. More specifically, our weekly team meetings are at noon in room 107 GFL every sunday. Feel free to stop by and see what we are up to.</p>
                </div>
                <div class="row-content">
                  <div class="block three"></div>
                </div>
              </div>
            </div>

            <div class="join-donate-cta wrap">
              <div class="cta">
                <h6>Join?</h6>
                <p>Interested in joining MRover? It probably couldn't be any easier. Just show up to our sunday meeting at noon in 107 GFL (right behind the FXB) on north campus. If you want some more information from us, just click below.</p>
                <button class="button-example">Contact Us</button>
              </div>
              <div class="cta">
                <h6>Donate?</h6>
                <p>Interested in helping us win the University Rover Challenge? Any little bit helps and we would greatly appreciate your support! Just click below and we would to talk about it.</p>
                <button class="button-example">Contact Us</button>
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
