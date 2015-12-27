<?php
/*
 Template Name: About Page
*/
?>
<?php get_header(); ?>

  <div id="content" class="about-page">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <div class="hero">
              <div class="wrap">
                <div class="hero-content">
                  <h2>What are we about?</h2>
                  <p>We like to build rovers.</p>
                </div>
              </div>
            </div>

            <div class="section-divider"><h3>The Challenge</h3></div>

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

            <div class="section-divider"><h3>Mechanical Subteam</h3></div>

            <div class="row-container info-row-container">
              <div class="wrap">
                <div class="info-section">
                  <div class="info-block"></div>
                  <div class="info-content">
                    <h4>Chassis and Suspension</h4>
                    <p>Modern rovers, including all of NASA’s, rely upon a rocker-bogie suspension and an in-hub drive system. This project uses in-hub motors which maximize ground  clearance and provides independent 6-wheel drive..</p>
                  </div>
                </div>
                <div class="info-section">
                  <div class="info-block"></div>
                  <div class="info-content">
                    <h4>Robotic Arm</h4>
                    <p>One of the most versatile components of the rover is the mechanical arm. The arm needs to bedexterous enough to operate switches, hold and turn a knob, while being strong enough to lift 5 kg worth of tools and assist packages.</p>
                  </div>
                </div>
                <div class="info-section">
                  <div class="info-block"></div>
                  <div class="info-content">
                    <h4>Soil Sample Return</h4>
                    <p>Opposite directions relative to the rover tospin the rover in place. This type of steering is used in tight spaces, on rough or steep terrain (stairs, for example), or to free the rover should it get stuck in loose, flour-like soil.</p>
                  </div>
                </div>
                <div class="info-section">
                  <div class="info-block"></div>
                  <div class="info-content">
                    <h4>Steering and Drive</h4>
                    <p>In order to navigate the rover to its destination, we utilize skid steering. Skid steering is achieved bysimply slowing 3 wheels on one side of the rover relative to the others and is used for standard course corrections.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="section-divider"><h3>Electrical Subteam</h3></div>

            <div class="row-container info-row-container">
              <div class="wrap">
                <div class="info-section">
                  <div class="info-block"></div>
                  <div class="info-content">
                    <h4>Computer Vision</h4>
                    <p>The vision system that will be integrated on the rover consists of stereo vision and driving/hazard cameras. The first system will be used when depth perception is required, the driving cameras will be used whenever the robot is moving.</p>
                  </div>
                </div>
                <div class="info-section">
                  <div class="info-block"></div>
                  <div class="info-content">
                    <h4>Command and Data</h4>
                    <p>The Command and Data Handling (C&DH) sub-team of MRover has the responsibility of setting up how the main processor receives data from the sensors, the transmission of commands from the base station, and the signals from the microcontroller to the different components in the robot.</p>
                  </div>
                </div>
                <div class="info-section">
                  <div class="info-block"></div>
                  <div class="info-content">
                    <h4>Communication</h4>
                    <p>The communications subsystem is responsible for establishing all wireless communication between the rover and base station. Commands, sensor data, and video will all be transmitted through this communication link.</p>
                  </div>
                </div>
                <div class="info-section">
                  <div class="info-block"></div>
                  <div class="info-content">
                    <h4>Electronic Power System</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                  </div>
                </div>
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
