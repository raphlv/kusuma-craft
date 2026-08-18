<?php
/*
Plugin Name: Kusuma Theme Auto Installer
Description: Automatically extracts and activates kusuma-theme from uploaded zip.
Version: 1.0
Author: Antigravity
*/

add_action('admin_init', 'kusuma_auto_install_theme');
function kusuma_auto_install_theme() {
    if (get_option('kusuma_theme_installed_flag')) {
        return;
    }

    $zip_path = WP_CONTENT_DIR . '/uploads/2026/07/kusuma-theme-2.zip';
    if (!file_exists($zip_path)) {
        $uploads = wp_upload_dir();
        $files = glob($uploads['basedir'] . '/*/*/kusuma-theme*.zip');
        if (!empty($files)) {
            $zip_path = $files[0];
        }
    }
    
    if (file_exists($zip_path)) {
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        WP_Filesystem();
        $target_dir = WP_CONTENT_DIR . '/themes/';
        $result = unzip_file($zip_path, $target_dir);
        if (!is_wp_error($result)) {
            update_option('kusuma_theme_installed_flag', 1);
            switch_theme('kusuma-theme');
            deactivate_plugins(plugin_basename(__FILE__));
        }
    }
}
