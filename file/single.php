<?php
  $id = get_the_id();
  $kv_array = wp_get_attachment_image_src( get_post_thumbnail_id(), true );
  $_kv_src = ( $kv_src[0] ) ? $k_src[0] : 'img/common/thumb_default.jpg';

  $meta_path = get_the_permalink();
  $meta_title = get_the_title();
  $meta_description = get_the_excerpt();
  $meta_keywords = '';
  $meta_ogp_type = 'article';
  $meta_ogp_image = $kv_array[0];

  include 'header.php';

 ?>

 <?php
   get_footer();
 ?>
