<?php
/**
 * Plugin Name: Contributors Plugin
 * Plugin URI:  https://github.com/mukeshoad
 * Description: Allows multiple contributors to be added to posts.
 * Version:     1.0
 * Author:      Mukesh Kumar
 * Author URI:  https://github.com/mukeshoad
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Metabox add karna
function cp_add_contributors_metabox() {
    add_meta_box(
        'cp_contributors',
        'Contributors',
        'cp_contributors_metabox_callback',
        'post',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'cp_add_contributors_metabox');

// Metabox content show karna
function cp_contributors_metabox_callback($post) {
    $users = get_users(['role__in' => ['administrator', 'editor', 'author']]);
    $selected_users = get_post_meta($post->ID, '_cp_contributors', true) ?: [];

    echo '<ul>';
    foreach ($users as $user) {
        $checked = in_array($user->ID, $selected_users) ? 'checked' : '';
        echo '<li><input type="checkbox" name="cp_contributors[]" value="' . esc_attr($user->ID) . '" ' . $checked . '> ' . esc_html($user->display_name) . '</li>';
    }
    echo '</ul>';
}

// Data save karna
function cp_save_contributors($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $contributors = isset($_POST['cp_contributors']) ? array_map('intval', $_POST['cp_contributors']) : [];
    update_post_meta($post_id, '_cp_contributors', $contributors);
}
add_action('save_post', 'cp_save_contributors');

// Frontend pe show karna
function cp_display_contributors($content) {
    if (is_single()) {
        $post_id = get_the_ID();
        $contributors = get_post_meta($post_id, '_cp_contributors', true);
        
        if (!empty($contributors)) {
            $output = '<div class="cp-contributors"><h3>Contributors:</h3><ul>';
            foreach ($contributors as $contributor_id) {
                $user_info = get_userdata($contributor_id);
                $avatar = get_avatar($contributor_id, 32);
                $profile_url = get_author_posts_url($contributor_id);
                $output .= '<li>' . $avatar . ' <a href="' . esc_url($profile_url) . '">' . esc_html($user_info->display_name) . '</a></li>';
            }
            $output .= '</ul></div>';
            $content .= $output;
        }
    }
    return $content;
}
add_filter('the_content', 'cp_display_contributors');

// CSS add karna
function cp_enqueue_styles() {
    echo '<style>
        .cp-contributors { border: 1px solid #ddd; padding: 10px; margin-top: 20px; }
        .cp-contributors h3 { margin: 0 0 10px; }
        .cp-contributors ul { list-style: none; padding: 0; }
        .cp-contributors li { display: flex; align-items: center; gap: 8px; }
    </style>';
}
add_action('wp_head', 'cp_enqueue_styles');
?>
