<?php
/* Template Name: demo1 */
global $wpdb;
// echo "<pre>";
// print_r($_FILES['file']['name']);
$wpdb->insert('wp_users',array('file'=>$_FILES['file']['name']),array('%s'));

?>