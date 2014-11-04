<?php
/*
Template Name: About
*/

get_header(); ?>

		<!--page-main-->
    <section id="main">
    	<header class="page-header" style="margin-bottom:2em;">
<?php while ( have_posts() ) : the_post(); ?>      	
			<div class="container">
      	<h1 class="header-title"><?php the_title(); ?></h1>
        </div>
      </header>
      <!--pagewrap-->
      <div class="page-wrap">
        <!--container-->
				<div class="container clear">
        	<section class="bd-section">
          	<div class="row clear">
            	<div class="col-6 col mobile-full"><div class="entry-thumbnail"><?php the_post_thumbnail('full'); ?></div>
              
                <!--assosi-->
                <div class="assosinations">
                  <span class="aso"><em>Approved by:</em></span>
                    <div class="wrap">
                      <div class="row-2 clear">
                        <div class="col-3 img-list"><a href="http://accet.org/" target="_blank"><img src="../images/assosiation/accet.gif" alt="ACCET"></a>
        </div>
                        <div class="col-3 img-list"><a href="http://www.tesol.org/" target="_blank"><img src="../images/assosiation/tesol.gif" alt="TESOL"></a></div>
                        <div class="col-3 img-list"><a href="http://www.englishusa.org/" target="_blank"><img src="../images/assosiation/englishusa.png" alt="ENGLISH USA"></a></div>
                        <div class="col-3 img-list"><a href="http://www.nafsa.org/" target="_blank"><img src="../images/assosiation/nafsa.jpg" alt="NAFSA"></a></div>


                      </div>
                    </div>
                </div>
              	<!--assonsiEND-->
                
              </div>
              <div class="col-6 col mobile-full">
              	<div class="bd-wrap"><?php the_content(); ?></div>
            	</p>
              
              </div>
            </div>
            
          </section>
        	<!--sectionEND-->

          
          <section class="bd-section">
            <div class="row clear">
						<div class="col-6 col mobile-full"><h4 class="main-heading"><span>Welcome from director</span></h4>
              <div class="about-director-int"><p>Welcome from the direcor
  
  Brandon College was established in 1938 and we are proud to be one of the
  oldest private language schools in the beautiful San Francisco Bay Area.
  Thousands have learned to read, write and speak English at Brandon College,
  where we offer Intensive English language programs to students, professionals,
  and visitors of all ages and from all over the world.
  </p>				</div>
						<div class="about-director col-3">
				<?php
          $attachment_id = get_field('image-director');
          $size = "full"; // (thumbnail, medium, large, full or custom size)
          $image = wp_get_attachment_image_src( $attachment_id, $size );
          $attachment = get_post( get_field('image-director') );
          $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
          $image_title = $attachment->post_title;
        ?>

            <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>"></div>
						<div class="about-director-name">Res Helfer,Director</div>
            </div> 
              <div class="col-6 col mobile-full"><h4 class="main-heading"><span>Our Missions</span></h4>
                <ul class="list-style-number">
                  <li><span>1</span>provide students with a quality English language and cultural immersion program, in which students will increase their confidence in using the language in professional and social situations.</li>
                  <li><span>2</span>provide outstanding support services to both students and agents/representatives, while maintaining ethical and professional operating practices.</li>
                  <li><span>3</span>provide a work environment which encourages and rewards team spirit, innovation, and a commitment to professional responsibility at all levels of the organization.</li>
                  <li><span>4</span>ensure that the programs and services we offer are economically competitive in the current market.</li>
                  
                  
                </ul>
              </div> 
            </div>
          </section>
        </div>
        <!--containerEND-->
      </div>
      <!--pagewrapEND-->
    </section>
    <!--page-mainEND-->
<?php endwhile; ?>



<?php get_footer(); ?>