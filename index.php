<?php
get_header();
get_template_part('templates/home', 'feature');
?>
<img src="<?php echo get_template_directory_uri();?>/assest/img/house.jpg"><br/>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title();?>
</br>
<?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

get_sidebar();
get_footer();

?>