<?php
$page_introduction = get_post_meta(get_the_ID(), 'theme_meta_page_introduction', true);

if($page_introduction){
	echo do_shortcode(wpautop($page_introduction));
}
