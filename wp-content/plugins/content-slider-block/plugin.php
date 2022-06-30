<?php
/**
 * Plugin Name: Content Slider Block
 * Description: Display your goal to your visitor in bountiful way with content slider block.
 * Version: 3.0.8
 * Author: bPlugins LLC
 * Author URI: http://bplugins.com
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: content-slider-block
 */

// ABS PATH
if ( !defined( 'ABSPATH' ) ) { exit; }

// Constant
define( 'CSB_PLUGIN_VERSION', isset($_SERVER['HTTP_HOST']) && 'localhost' === $_SERVER['HTTP_HOST'] ? time() : '3.0.8' );
define( 'CSB_ASSETS_DIR', plugin_dir_url( __FILE__ ) . 'assets/' );

// Content Slider
class CSBContentSliderBlock {
	function __construct(){
		add_action( 'enqueue_block_assets', [$this, 'enqueueBlockAssets'] );
		if ( version_compare( $GLOBALS['wp_version'], '5.8-alpha-1', '<' ) ) {
			add_filter( 'block_categories', [$this, 'blockCategories'] );
		} else { add_filter( 'block_categories_all', [$this, 'blockCategories'] ); }
		add_action( 'init', [$this, 'onInit'] );
	}

	function has_reusable_block( $block_name ){
		if( get_the_ID() ){
			if ( has_block( 'block', get_the_ID() ) ){
				// Check reusable blocks
				$content = get_post_field( 'post_content', get_the_ID() );
				$blocks = parse_blocks( $content );
	
				if ( !is_array( $blocks ) || empty( $blocks ) ) {
					return false;
				}
	
				foreach ( $blocks as $block ) {
					if ( $block['blockName'] === 'core/block' && ! empty( $block['attrs']['ref'] ) ) {
						if( has_block( $block_name, $block['attrs']['ref'] ) ){
							return true;
						}
					}
				}
			}
		}
		return false;
	}

	function enqueueBlockAssets() {
		if ( is_admin() || $this->has_reusable_block( 'csb/content-slider-block' ) || has_block( 'csb/content-slider-block', get_the_ID() ) ) {
			wp_enqueue_script( 'swiperJS', CSB_ASSETS_DIR . 'js/swiper.min.js', [], '8.0.7', true );

			wp_register_style( 'csb-content-slider-block-style', plugins_url( 'dist/style.css', __FILE__ ), [ 'wp-editor' ], CSB_PLUGIN_VERSION ); // Frontend Style
		}

		if( !is_admin() && !$this->has_reusable_block( 'csb/content-slider-block' ) || !has_block( 'csb/content-slider-block', get_the_ID() ) ){
			wp_dequeue_script('csb-content-slider-block-script');
		}
	}

	function blockCategories( $categories ){
		return array_merge( [[
			'slug'	=> 'CSBlock',
			'title'	=> 'Content Slider Block',
		] ], $categories );
	} // Categories
	
	function onInit() {
		wp_register_style( 'csb-content-slider-block-editor-style', plugins_url( 'dist/editor.css', __FILE__ ), [ 'wp-edit-blocks' ], CSB_PLUGIN_VERSION ); // Backend Style

		register_block_type( __DIR__, [
			'editor_style'		=> 'csb-content-slider-block-editor-style',
			'style'				=> 'csb-content-slider-block-style',
			'render_callback'	=> [$this, 'render']
		] ); // Register Block

		wp_set_script_translations( 'csb-content-slider-block-editor-script', 'content-slider-block', plugin_dir_path( __FILE__ ) . 'languages' ); // Translate
	}
	
	// Render
	function render( $attributes ){
		extract( $attributes );

		$className = $className ?? '';
		$csbBlockClassName = 'wp-block-csb-content-slider-block ' . $className . ' align' . $align;

		ob_start(); ?>
		<div class='<?php echo esc_attr( $csbBlockClassName ); ?>' id='csbContentSlider-<?php echo esc_attr( $cId ); ?>' data-attributes='<?php echo esc_attr( wp_json_encode( $attributes ) ); ?>'>
			<div class='csbContentSliderStyle'></div>

			<div class='csbSliderWrapper'></div>
		</div>

		<?php return ob_get_clean();
	}
}
new CSBContentSliderBlock;