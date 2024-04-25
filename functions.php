<?php
/**
 * Display a list of random posts
 * on single post page in WordPress
 * @param int $post_count
 * @return string $data
 */
function get_random_posts($post_count) {
    if (is_numeric($post_count)) {
        global $post;
        // variable for string
        $data = '';
        // arguments
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $post_count,
            'orderby' => 'rand'
        );
        // query posts
        $random_posts = get_posts($args);
        $data = '<ul>';
        foreach ($random_posts as $post) {
            $data .= '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
        }
        $data .= '</ul>';
        return $data;
    }
}
?>