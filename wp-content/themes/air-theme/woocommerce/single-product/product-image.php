<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     3.5.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

$attachment_ids = $product->get_gallery_image_ids(); ?>

<div class="images flex-slider-wrap col-md-6 col-sm-6">

    <?php woocommerce_show_product_sale_flash(); ?>
    
    <?php $flexslider = $attachment_ids ? 'flexslider' : false; ?>
    
    <div id="product-img-slider" class="<?php echo esc_attr($flexslider); ?>">
    
        <ul class="slides">
        
			<?php if($attachment_ids){
                
                if($product->get_image_id()){ ?>
					<li><?php echo get_the_post_thumbnail(get_the_ID(), 'airtheme-standard-thumb-medium', array('class' => 'product-slider-image')); ?></li>
				<?php
                }
				
				//** Do Woocommerce product thumbnails
				do_action('woocommerce_product_thumbnails');
                
            }elseif($product->get_image_id()){ ?>
            
                <li><?php echo get_the_post_thumbnail(get_the_ID(), 'airtheme-standard-thumb-medium', array('class' => 'product-slider-image')); ?></li>
                
            <?php }elseif(wc_placeholder_img_src()){
                
                echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<li><img src="%s" alt="%s" class="product-slider-image" /></li>', wc_placeholder_img_src(), esc_html__( 'Placeholder', 'air-theme' ) ), $post->ID );
                
            } ?>
        
        </ul>
        
    </div>
    
</div>


