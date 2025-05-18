<!DOCTYPE html>
<html lang="en">

<?php
$titles = array('home.php' => 'Homepage', 'about.php' => 'About Me', 'works.php' => 'My Works');
$currentPage = basename($_SERVER['PHP_SELF']);
$title = $titles[$currentPage];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>@import url('https://fonts.googleapis.com/css2?family=Akshar:wght@300..700&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap');</style>
    <link rel="stylesheet" href="./css/styles.css">
</head>