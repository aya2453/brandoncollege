<?php
/*
Template Name: トップページ
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
        <div class="container">
          <h4 class="main-heading"><span>Why choose Brandon College?</span></h4>
          <div class="row clear">
            <div class="  col-7 col mobile-full"><img src="<?php echo get_template_directory_uri(); ?>/images/top/topwhy.jpg"></div>
            <div class=" col-5 col  mobile-full">
              <div class="whychoose-wrap">
                <h5>There are many reasons you choose us</h5>
                <p>Temporibus autem quibusdam et aut officiis<br> debitis aut rerum necessitatibus saepe</p>
                <ul class="why-list  list-unstyled">
                  <li><span class="fa fa-check-circle"></span>Classes start every Monday</li>
                  <li><span class="fa fa-check-circle"></span>All levels - Beginner to Advanced</li>
                  <li><span class="fa fa-check-circle"></span>Small Classes</li>
                  <li><span class="fa fa-check-circle"></span>Certified Teachers & Courses</li>
                  <li><span class="fa fa-check-circle"></span>Popular Activity Program</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--whybrandon END-->
      
      <!--news and testimonials-->
      <div class="newstest-row"> 
        <div class="container">
        <div class="row clear">
            <div class="col-7 col mobile-full"><h4 class="main-heading"><span>Latest News</span></h4>
            
  <?php
  $posts = get_posts(array(
    'posts_per_page' => 2, // 1ページあたりの取得件数
    'category' => 1        // カテゴリID = 3 の記事のみを取り出す
  ));
  ?>
    <?php foreach ($posts as $post): setup_postdata($post); ?>
              <article class="news-post clear">
                <div class="news-date-wrap left">
                  <span class="news-date"><?php echo get_post_time('d'); ?></span>
                  <span class="news-month"><?php echo get_post_time('M'); ?></span>
                </div>
                <dl class="news-cont col-10 right">
                  <dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?>t</a></dt>
                  <dd><p><?php the_excerpt(); ?></p><p><a href="<?php the_permalink(); ?>" class="readmore2">Read More&gt;&gt;</a></p></dd>
                </dl>
              </article>
    <?php endforeach; ?>
            </div>
            <div class="col-5 col mobile-full"><h4 class="main-heading"><span>Testimonials</span></h4>
              <div class="testimonials-slider-wrap">
              
                <div class="testimonials-slide">
                  <div class="testimonials-box-wrap">
                    <div class="testimonials-slide-box">
                      <p>I found it not only delightful to stuty at Brandon College,
          but also pleasure to make friends from all over the world.
          I will never forget this experience.</p>
                    </div>
                  </div>
                  <div class="testimonials-slide-name"><span class="fa fa-user"></span>－Araki Japan</div>
                </div>
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
    
    
    
    

