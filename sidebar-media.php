		<aside id="media" class="span2 sidebar">
	      <a href="https://www.facebook.com/RoboJackets/photos_stream?tab=photos_albums"><img src="<?php echo THEME_IMAGES; ?>/collage.jpg" alt="Photo Gallery" /></a>
	      <p><strong>Check out our photo gallery!</strong></p>
	      <p>See photos of our robots, events, and competitions.</p>
	      <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php echo THEME_IMAGES; ?>/Feed_512x512.png" alt="RSS Feed" width="48" height="48" /></a>
	      <a href="https://www.facebook.com/RoboJackets"><img src="<?php echo THEME_IMAGES; ?>/FaceBook_512x512.png" alt="Facebook" width="48" height="48" /></a>
	      <a href="http://twitter.com/#!/RoboJackets"><img src="<?php echo THEME_IMAGES; ?>/Twitter_512x512.png" alt="Twitter" width="48" height="48" /></a>
	      <a href="http://www.youtube.com/user/RoboJackets"><img src="<?php echo THEME_IMAGES; ?>/Youtube_512x512.png" alt="YouTube" width="48" height="48" /></a>

      		<?php if ( function_exists ( dynamic_sidebar("media") ) ) : dynamic_sidebar ("media");
	      		endif;
			?>
        </aside>
