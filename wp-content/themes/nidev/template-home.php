<?php
/* Template Name: Template Home */

get_header();



?>

<?php

if( have_rows('layouts') ):

    while ( have_rows('layouts') ) : the_row();

?>

<?php if( get_row_layout() == 'hero' ):
    $background_image = get_sub_field('background_image');
    $text = get_sub_field('text');
?>
<section class="section section--hero">
    <div class="full-bleed image bg--cover" style="background-image: url('<?php echo $background_image['url']; ?>');">
        <div class="display-table"><div class="display-table-cell">
        <div class="container">
            <div class="text">
                <?php echo $text; ?>
                <a class="btn btn--secondary" href="#">Find out more</a>
            </div>
        </div>
    </div></div>
    </div>
</section>
<?php endif; ?>

<?php
    if( get_row_layout() == 'featured_posts' ):
        $padding = get_sub_field('padding');
        $posts = get_sub_field('posts');

        wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0', TRUE );
?>

        <section class="section section--featured-posts <?php echo ($padding) ? $padding : 'no-top-padding'; ?> bg--white">
            <div class="container">
                <div class="col-wrapper clearfix">
                    <div class="owl-carousel">

                <?php foreach( $posts as $p ):
                    $link = get_permalink( $p->ID );
                    $image = get_the_post_thumbnail_url( $p->ID, 'full-bleed');
                    $logo_type = get_field('logo_type', $p->ID);
                    $logo_svg = get_field('logo_svg', $p->ID);
                    $logo_png = get_field('logo_png', $p->ID);
                    ?>
                        <div class="portfolio-item col--33">
                        <a href="<?php echo $link ?>">
                            <div class="image-wrapper">
                                <div class="image bg--cover" style="background-image: url('<?php echo $image; ?>');">
                                </div>
                                <div class="logo">
                                    <?php
                                    if($logo_svg) :
                                        echo $logo_svg;
                                    else :
                                        echo '<img src="' . $logo_png['url'] . '" />';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php

    endwhile;

endif;
?>




<section class="section section--intro">
    <div class="container">
        <div class="col-wrapper clearfix">
            <div class="col--50">
                <div class="text">
                    <h1>Services</h1>
                    <h4></h4>
                </div>
            </div>
            <div class="col--50">
                <div class="text">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--intro">
    <div class="container">
        <div class="col-wrapper clearfix">
            <div class="col--50">
                <div class="text">
                    <h1>About</h1>
                    <h4></h4>
                </div>
            </div>
            <div class="col--50">
                <div class="text">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--intro">
    <div class="container">
        <div class="col-wrapper clearfix">
            <div class="col--50">
                <div class="text">
                    <h1>Portfolio</h1>
                    <h4>w/ Filter</h4>
                </div>
            </div>
            <div class="col--50">
                <div class="text">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--intro">
    <div class="container">
        <div class="col-wrapper clearfix">
            <div class="col--50">
                <div class="text">
                    <h1>Social Media</h1>
                    <h4>IG teasers</h4>
                </div>
            </div>
            <div class="col--50">
                <div class="text">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
