<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
    <head>
        <?php print $head; ?>
        <!-- Enable IE9 Standards mode -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php print $head_title; ?></title>
        <?php print $styles; ?>
        <?php print $scripts; ?>
        <!-- iPhone support -->
            <link rel="apple-touch-icon" href="<?php global $theme_path; print $theme_path; ?>/iphone_icon.png" />
        <!-- Opera support-->
             <link rel="icon" type="image/png" href="<?php global $theme_path; print $theme_path; ?>/opera-speeddial.png">
        <!-- IE Fix for HTML5 Tags -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
    </body>

</html>
