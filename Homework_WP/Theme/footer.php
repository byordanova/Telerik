<?php

?>

    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt="top" /></a>
    </div>
    <footer>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter" />&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook" />&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" alt="rss" /></p>
      
      <?php wp_nav_menu( array('menu' => 'Footer Menu')); ?>

      <p>Copyright &copy; CSS3_bokeh | <a href="http://www.heartinternet.co.uk/domain-names/">Heart Internet Domain Names</a> | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>

  <?php wp_footer(); ?>
</body>
</html>
