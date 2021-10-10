<?php
/*
this tempalte is used for header
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo get_the_title();?>|
        <?php bloginfo('name');?>
    </title>
<?php
wp_head();
?>
