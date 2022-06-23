<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Karate
 */
$footer_text = get_theme_mod('footer_text');

$footerlogo = get_theme_mod('footer_logo_image'); 
$footerlogo_link = get_theme_mod('footer_logo_url'); 
$fb_link = get_theme_mod('fb_link'); 
$twitt_link = get_theme_mod('twitt_link');
$linked_link = get_theme_mod('linked_link');
$youtube_link = get_theme_mod('youtube_link');
$insta_link = get_theme_mod('insta_link');
$hidefooterbox = get_theme_mod('hide_footer_bar', 1);
?>
<div id="footer">
<?php if( $hidefooterbox == '') { ?>
<div id="footer-wrapper" class="ft-infobox">
		<div class="footerarea">
            <div class="container footerinfobox">
                <?php 
				if (!empty($footerlogo)) { ?>
                <div class="footer-logo">
                	<?php if (!empty($footerlogo_link)) { ?>
                	<a href="<?php echo esc_url($footerlogo_link); ?>">
                    <?php
					}
					?>
                    <img src="<?php echo esc_url($footerlogo); ?>" />
                    <?php 
					if (!empty($footerlogo_link)) { ?>
                    </a>
                    <?php } ?>
                 </div>
                 <?php } ?>
    <div class="footer-social">           
    <div class="social-icons">
		<?php 
		if (!empty($fb_link)) { ?>
        <a title="<?php echo esc_attr__('Facebook','skt-karate'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a> 
        <?php } 		
		if (!empty($twitt_link)) { ?>
        <a title="<?php echo esc_attr__('Twitter','skt-karate'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a>
        <?php } 
		 if (!empty($linked_link)) { ?> 
        <a title="<?php echo esc_attr__('Linkedin','skt-karate'); ?>" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a>
        <?php } ?> 
        <?php
		if (!empty($youtube_link)) { ?> 
        <a title="<?php echo esc_attr__('Youtube','skt-karate'); ?>" class="yt" target="_blank" href="<?php echo esc_url($youtube_link); ?>"></a>
        <?php } ?>          
        <?php
		if (!empty($insta_link)) { ?> 
        <a title="<?php echo esc_attr__('Instagram','skt-karate'); ?>" class="insta" target="_blank" href="<?php echo esc_url($insta_link); ?>"></a>
        <?php } ?>                   
      </div>
      </div> 
                <div class="clear"></div>
            </div>
        </div>
</div>
<?php } ?>
<div class="copyright-area">
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt">
     	<?php wp_nav_menu( array('theme_location' => 'footer', 'container' => 'ul', 'menu_id' => 'footermenu', 'fallback_cb' => false) ); ?>
     	<?php if (!empty($footer_text)) { ?>
	 		<?php echo esc_html($footer_text); ?>
		<?php } else { ?>
			<?php esc_html_e('© Copyright 2022 SKT Karate. All Rights Reserved','skt-karate'); ?>
        <?php } ?>
        </div>
     <div class="clear"></div>
</div>           
</div>
</div><!--end #copyright-area-->
</div>
<?php wp_footer(); ?>
</body>
</html>