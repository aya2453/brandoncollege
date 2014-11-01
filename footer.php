<?php

?>

    <!-- footer-->
    <footer id="main-footer">
        <div class="container">
          <div class="footer-top clear">
            <?php dynamic_sidebar('footer-1'); ?>
            <div class="footer-cont col-4 col mobile-full"><h6 class="footer">Latest Tweets</h6>
              <ul class="footer-tweets">
                <li><i class="icon-twitter"></i>I found it not only delightful to stuty at Brandon College.</li>
                <li><i class="icon-twitter"></i>I found it not only delightful to stuty at Brandon College,</li>
                <li><i class="icon-twitter"></i>I found it not only delightful to stuty at Brandon College,</li>
              </ul>
            </div>
            <div class="footer-cont col-4 col mobile-full"><h6 class="footer">Contact Us</h6>
              <ul class="footer-contact">
                <li><i class="icon-location"></i>944 Market Street,2nd Floor<br>
San Fransisco,CA 94102 U.S.</li>
                <li><i class="icon-phone"></i>(415)-391-5711</li>
                <li><i class="icon-envelope"></i>info@brandoncollege</li>
              </ul>
              <div class="footer-sns-icon clear">
                <a href="" target="_blank" class="icon-twitter"></a>
                <a href="" target="_blank" class="icon-facebook"></a>
                <a href="" target="_blank" class="icon-flickr"></a>
                <a href="" target="_blank" class="icon-google"></a>
              </div>
            </div>    
          </div>
          
          <div class="copyright">
            <small>Copyright&nbsp; &copy;&nbsp;1997-<?php echo date('Y');?> &nbsp;<a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a> &nbsp;All Rights Reserved.</small>
          </div>
        </div>
    </footer>
    <!--footer END-->
  </div>
  <!--pageEND-->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/default.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to your website's ID. -->
<!--
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
-->

	<?php wp_footer(); ?>
</body>
</html>