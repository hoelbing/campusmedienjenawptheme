<!DOCTYPE html>
<html lang="de">

<?php
  get_template_part( 'partials/header/head');
?>

<?php

$blog_array = array(
    array ('title' => 'campusMedien', 'url' => 'https://www.campusmedien-jena.de', 'blogID' => '6', 'slug' => 'cm'),
    array ('title' => 'Campusradio Jena', 'url' => 'https://www.campusradio-jena.de', 'blogID' => '5', 'slug' => 'cr'),
    array ('title' => 'CampusTV Jena', 'url' => 'https://www.campustv-jena.de', 'blogID' => '4', 'slug' => 'ctv'),
    array ('title' => 'Akruetzel', 'url' => 'https://www.akruetzel.de', 'blogID' => '2', 'slug' => 'ak')
);

$currentBlogID = get_current_blog_id();
//$blogArray = wp_get_sites();

?>

<body <?php body_class([ 'blog-' . $currentBlogID]); ?> >

<?php
  get_template_part( 'partials/header/topNavbar');
?>
