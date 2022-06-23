<?php
//about theme info
add_action( 'admin_menu', 'skt_karate_abouttheme' );
function skt_karate_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-karate'), esc_html__('About Theme', 'skt-karate'), 'edit_theme_options', 'skt_karate_guide', 'skt_karate_mostrar_guide');   
} 
//guidline for about theme
function skt_karate_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-karate'); ?>
		   </div>
          <p><?php esc_html_e('SKT Karate is a martial arts, taekwondo, kung fu, MMA type of theme. Responsive, WooCommerce friendly. Comes with 150+ other design alternatives. Inner pages compatible with Gutenberg editor. Other industries which can use this template are fitness, sports, gym, body building, instructor, activity, health experts, bootcamp, diet planner, yoga, workout, power crossfit, physiotherapy, wellness, aerobics, kick boxing, cardio etc. It is a core web vitals optimized theme. Works well with cache and SEO plugins.','skt-karate'); ?></p>
          <a href="<?php echo esc_url(SKT_KARATE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_KARATE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-karate'); ?></a> | 
				<a href="<?php echo esc_url(SKT_KARATE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-karate'); ?></a> | 
				<a href="<?php echo esc_url(SKT_KARATE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-karate'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_KARATE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>