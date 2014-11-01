<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <!--mainslider-->
    <div class="main-slider">
			<p>フロントページ！</p>
    </div>
    <!--mainsliderEND--> 
    <section id="main">
			<?php get_template_part( 'content', 'home' ); ?>
    
      
      <!--whybrandon-->
      <div class="why-row">
        <div class="container row clear">
          <h4 class="main-heading"><span>Why choose Brandon College?</span></h4>
          <div class="  col-7 left mobile-full"><img src="images/top/topwhy.jpg"></div>
          <div class=" col-5 right  mobile-full">
            <div class="whychoose-wrap">
              <h5>There are many reasons you choose us</h5>
              <p>Temporibus autem quibusdam et aut officiis<br> debitis aut rerum necessitatibus saepe</p>
              <ul class="why-list  list-unstyled">
                <li><span class="icon-checkmark"></span>debitis aut rerum necessitatibus saepe hug</li>
                <li><span class="icon-checkmark"></span>debitis aut rerum necessitatibus saepe hug</li>
                <li><span class="icon-checkmark"></span>debitis aut rerum necessitatibus saepe hug</li>
                <li><span class="icon-checkmark"></span>debitis aut rerum necessitatibus saepe hug</li>
                <li><span class="icon-checkmark"></span>debitis aut rerum necessitatibus saepe hug</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--whybrandon END-->
      
      <!--news and testimonials-->
      <div class="newstest-row"> 
        <div class="container row clear">
          <div class="col-6 left mobile-full"><h4 class="main-heading"><span>Latest News</span></h4>
            <article class="news-post clear">
              <div class="news-date-wrap left">
                <span class="news-date">16</span>
                <span class="news-month">JAN</span>
              </div>
              <dl class="news-cont col-10 right">
                <dt><a href="">This is standert post</a></dt>
                <dd><p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</p><p><a href="" class="readmore2">Read More&gt;&gt;</a></p></dd>
              </dl>
            </article>
            
          </div>
          <div class="col-5 right mobile-full"><h4 class="main-heading"><span>Testimonials</span></h4>
            <div class="testimonials-slider-wrap">
            
              <div class="testimonials-slide">
                <div class="testimonials-box-wrap">
                  <div class="testimonials-slide-box">
                    <p>I found it not only delightful to stuty at Brandon College,
        but also pleasure to make friends from all over the world.
        I will never forget this experience.</p>
                  </div>
                </div>
                <div class="testimonials-slide-name"><span class="icon-user person"></span>－Araki Japan</div>
              </div>
            </div>
          </div>        
        </div>
      </div>
      <!--news and testimonials END-->    
    </section>
    <section class="apply-bottom">
      <div class="container">
        <a href="#">ENROLL IN A COURSE AT BRANDON COLLEGE⇒</a>
      </div>
    </section>
    <!--applybottomEND-->
    
    
		<?php get_footer(); ?>
    
    
    
    

