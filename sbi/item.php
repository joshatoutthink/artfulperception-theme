<?php
/* THIS IS THE SETUP CODE (VARIABLES AND FUNCTIONS FROM SBI */
/**
 * Smash Balloon Instagram Feed Item Template
 * Adds an image, link, and other data for each post in the feed
 *
 * @version 2.9 Instagram Feed by Smash Balloon
 *
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$classes = SB_Instagram_Display_Elements::get_item_classes( $settings, $post );
$post_id = SB_Instagram_Parse::get_post_id( $post );
$timestamp = SB_Instagram_Parse::get_timestamp( $post );
$media_type = SB_Instagram_Parse::get_media_type( $post );
$permalink = SB_Instagram_Parse::get_permalink( $post );
$maybe_carousel_icon = $media_type === 'carousel' ? SB_Instagram_Display_Elements::get_icon( 'carousel', $icon_type ) : '';
$maybe_video_icon = $media_type === 'video' ? SB_Instagram_Display_Elements::get_icon( 'video', $icon_type ) : '';
$media_url = SB_Instagram_Display_Elements::get_optimum_media_url( $post, $settings, $resized_images );
$media_full_res = SB_Instagram_Parse::get_media_url( $post );
$sbi_photo_style_element = SB_Instagram_Display_Elements::get_sbi_photo_style_element( $post, $settings ); // has already been escaped
$media_all_sizes_json = SB_Instagram_Parse::get_media_src_set( $post, $resized_images );

/**
 * Text that appears in the "alt" attribute for this image
 *
 * @param string $img_alt full caption for post
 * @param array $post api data for the post
 *
 * @since 2.1.5
 */

$img_alt = SB_Instagram_Parse::get_caption( $post, sprintf( __( 'Instagram post %s', 'instagram-feed' ), $post_id ) );
$img_alt = apply_filters( 'sbi_img_alt', $img_alt, $post );

/**
 * Text that appears in the visually hidden screen reader element
 *
 * @param string $img_screenreader first 50 characters for post
 * @param array $post api data for the post
 *
 * @since 2.1.5
 */
$img_screenreader = substr( SB_Instagram_Parse::get_caption( $post, sprintf( __( 'Instagram post %s', 'instagram-feed' ), $post_id ) ), 0, 50 );
$img_screenreader = apply_filters( 'sbi_img_screenreader', $img_screenreader, $post );

$caption =  substr( SB_Instagram_Parse::get_caption( $post, sprintf( __( 'Instagram post %s', 'instagram-feed' ), $post_id ) ), 0, 80 );
if(strlen($img_alt) > 80){
    $caption = $caption . "...";
}

?>


<div class="sc-social-item" id="sbi_<?php echo esc_html( $post_id ); ?>" data-date="<?php echo esc_html( $timestamp ); ?>">
    <div class="sc-social-card">
            <a
                class="sc-social-photo-link" 
                href="<?php echo esc_url( $permalink ); ?>" target="_blank" rel="noopener nofollow" 
                data-full-res="<?php echo esc_url( $media_full_res ); ?>" 
                data-img-src-set="<?php echo esc_attr( sbi_json_encode( $media_all_sizes_json ) ); ?>"
            >
                    <span class="sbi-screenreader"><?php echo esc_html( $img_screenreader ); ?></span>
                    <svg class="svg-inline--fa fa-instagram fa-w-14" aria-hidden="true" data-fa-processed="" aria-label="Instagram" data-prefix="fab" data-icon="instagram" role="img" viewBox="0 0 448 512"> <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path> </svg>
                    <img src="<?php echo esc_url( $media_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>">
            </a>
        <div class="sc-social-photo-desc">
            <div class="sc-social-date">
                <?php echo date("M j",$timestamp); ?>
            </div>
            <div class="sc-social-caption">
                <?php echo $caption;?>
            </div>               
            <a href="<?php echo esc_url( $permalink ); ?>" target="_blank" rel="noopener nofollow" >— view on instagram</a>
        </div>
    </div>
</div>
