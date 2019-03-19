<?php
$tel = get_field('tel', 'option');
$facebook = get_field('tel', 'facebook_link');
$instagram = get_field('tel', 'instagram_link');
$twitter = get_field('tel', 'twitter_link');
?>
<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?php wp_title(''); ?></title>

    <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    <?php wp_head(); ?>
    <script type="text/javascript">
        var site_url = '<?php echo bloginfo('url'); ?>';
        var theme_url = '<?php echo bloginfo('template_url'); ?>';
    </script>

</head>
<body <?php body_class(); ?>>

<!-- Site Wrapper -->
<main class="site-wrapper">

<!-- Header -->
<header class="header">
    <div class="container">
        <div class="flex-wrapper">
        <div class="logo">
            <h1>NIDEV</h1>
            <h4>WEB.</h4>
        </div>
        <div class="nav">
            <ul>
                <li>About</li>
                <li>Services</li>
                <li>Portfolio</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    </div>
</header>
