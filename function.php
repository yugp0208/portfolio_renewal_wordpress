<?php

//bodyのidにスラッグ・カテゴリ名を付与
$body_id ="";
if (is_page()) {
  $body_id = ' id="'.$post->post_name.'" ';
} else if ( is_category() ) {
  $category = get_the_category();
  $body_id = ' id="category_'.$category[0]->category_nicename.'" ';
}


?>