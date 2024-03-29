<?php

//bodyのidにスラッグ・カテゴリ名を付与
$body_id ="";
if (is_page()) {
  $body_id = ' id="'.$post->post_name.'" ';
} else if ( is_category() ) {
  $category = get_the_category();
  $body_id = ' id="category_'.$category[0]->category_nicename.'" ';
}

//投稿のurlから子カテゴリーを削除
add_filter('post_link_category', function ($category) {
	while ($category->parent) {
		$category = get_term($category->parent, 'category');
	}
	return $category;
}, 10, 3);


?>