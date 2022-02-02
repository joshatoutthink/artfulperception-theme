<?php
/**
 * Smash Balloon Instagram Feed Main Template
 * Creates the wrapping HTML and adds settings as attributes
 *
 * @version 2.9 Instagram Feed by Smash Balloon
 *
 */
// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$feed_styles = SB_Instagram_Display_Elements::get_feed_style( $settings ); // already escaped
$sb_images_style = SB_Instagram_Display_Elements::get_sbi_images_style( $settings ); // already escaped
$image_resolution_setting = $settings['imageres'];
$cols_setting = $settings['cols'];
$num_setting = $settings['num'];
$icon_type = 'svg';

/**
 * Add HTML or execute code before the feed displays.
 * sbi_after_feed works the same way but executes
 * after the feed
 *
 * @param array $posts Instagram posts in feed
 * @param array $settings settings specific to this feed
 *
 * @since 2.2
 */
do_action( 'sbi_before_feed', $posts, $settings );

if ( ! empty( $header_data ) && $settings['showheader'] && $settings['headeroutside'] ) {
	include sbi_get_feed_template_part( 'header', $settings );
}
?>

<div id="sb_instagram" class="sbi sbi_col_<?php echo esc_attr( $cols_setting ); ?> <?php echo esc_attr( $additional_classes ); ?>"<?php echo $feed_styles; ?> data-feedid="<?php echo esc_attr( $feed_id ); ?>" data-res="<?php echo esc_attr( $image_resolution_setting ); ?>" data-cols="<?php echo esc_attr( $cols_setting ); ?>" data-num="<?php echo esc_attr( $num_setting ); ?>" data-shortcode-atts="<?php echo esc_attr( $shortcode_atts ); ?>" <?php echo $other_atts; ?>>
<style>
.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond, .ast-separate-container .comments-area .ast-comment-list li, .ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container.ast-two-container #secondary .widget, .ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content, .ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title{
background:none!important;
}
</style>
<style>
	
#primary{
  width:100% !important;
}
</style>
	<?php
	if ( ! empty( $header_data ) && $settings['showheader'] && !$settings['headeroutside'] ) {
		include sbi_get_feed_template_part( 'header', $settings );
	}
	?>

    <div id="sc-grid" <?php echo $sb_images_style; ?>>
		<?php
		if ( ! in_array( 'ajaxPostLoad', $flags, true ) ) {
			$this->posts_loop( $posts, $settings );
		}
		?>
    </div>

	<?php include sbi_get_feed_template_part( 'footer', $settings ); ?>

	<?php
	/**
	 * Things to add before the closing "div" tag for the main feed element. Several
	 * features rely on this hook such as local images and some error messages
	 *
	 * @param object SB_Instagram_Feed
	 * @param string $feed_id
	 *
	 * @since 2.1/5.2
	 */
	do_action( 'sbi_before_feed_end', $this, $feed_id ); ?>
</div>

<?php do_action( 'sbi_after_feed', $posts, $settings );?>
