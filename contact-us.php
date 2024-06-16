<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="profile" href="//gmpg.org/xfn/11">
    <title>Contacts &#8211; Goldish</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="stylesheet"
        href="//fonts.googleapis.com/css?family=Jost%3A200%2Cregular%2Citalic%2C500%2C600%2C700%2C900%26subset%3Dlatin%2Clatin-ext&#038;display=swap">
    <link rel="stylesheet" href="<?php echo $domain;?>asset/goldish/demo/wp-content/themes/goldish/assets/font/theme-icons.css">

    </style>
 <style id='wp-emoji-styles-inline-css' type='text/css'>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css'
        media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }
    </style>
    <link rel='stylesheet' id='woo-variation-swatches-css'
        href='<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woo-variation-swatches/assets/css/frontend.min.css' type='text/css'
        media='all' />
    <style id='woo-variation-swatches-inline-css' type='text/css'>
    :root {
        --wvs-tick: url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 2px rgb(0 0 0 / .8))' xmlns='http://www.w3.org/2000/svg'  viewBox='0 0 30 30'%3E%3Cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M4 16L11 23 27 7'/%3E%3C/svg%3E");

        --wvs-cross: url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 5px rgb(255 255 255 / .6))' xmlns='http://www.w3.org/2000/svg' width='72px' height='72px' viewBox='0 0 24 24'%3E%3Cpath fill='none' stroke='%23ff0000' stroke-linecap='round' stroke-width='0.6' d='M5 5L19 19M19 5L5 19'/%3E%3C/svg%3E");
        --wvs-single-product-item-width: 54px;
        --wvs-single-product-item-height: 54px;
        --wvs-single-product-item-font-size: 14px
    }
    </style>
    <link rel='stylesheet' id='elementor-frontend-css'
        href='<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/elementor/css/custom-frontend-lite.min.css' type='text/css'
        media='all' />
    <style id='elementor-frontend-inline-css' type='text/css'>
    .elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated,
    .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
        padding: 0;
    }

    .e-con {
        --container-default-padding-top: 0;
        --container-default-padding-bottom: 0;
        --container-default-padding-left: 0;
        --container-default-padding-right: 0;
    }
    </style>
    <link rel='stylesheet' id='swiper-css'
        href='<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-12-css'
        href='<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/elementor/css/post-12.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-216-css'
        href='<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/elementor/css/post-216.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ideapark_fonts-icons-css'
        href='<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/ideapark_fonts/font-style-c6af5625.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='ideapark-core-css' href='<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/goldish/min.css'
        type='text/css' media='all' />
    <style id='ideapark-core-inline-css' type='text/css'>
    @font-face {
        font-family: 'star';
        src: url('//parkofideas.com/goldish/demo/wp-content/plugins/woocommerce/assets/fonts/star.eot');
        src: url('//parkofideas.com/goldish/demo/wp-content/plugins/woocommerce/assets/fonts/star.eot?#iefix') format('embedded-opentype'),
            url('//parkofideas.com/goldish/demo/wp-content/plugins/woocommerce/assets/fonts/star.woff') format('woff'),
            url('//parkofideas.com/goldish/demo/wp-content/plugins/woocommerce/assets/fonts/star.ttf') format('truetype'),
            url('//parkofideas.com/goldish/demo/wp-content/plugins/woocommerce/assets/fonts/star.svg#star') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    .ip-buy-now {
        position: fixed;
        z-index: 100001;
        -webkit-transform-origin: right center;
        transform-origin: right center;
    }

    .ip-buy-now.loading {
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }

    .ip-buy-now {
        right: 0;
        bottom: 205px;
        transition: transform 0.3s linear, box-shadow 0.3s linear
    }

    .ip-buy-now:hover {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
        box-shadow: 10px 5px 12px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 767px) {
        .ip-buy-now {
            display: none
        }
    }

    @media (max-width: 1189px) {
        ul.c-lang-demo {
            display: none;
        }
    }
    </style>
    <link rel="stylesheet" id="elementor-post-4619-css"
        href="<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/elementor/css/post-4619.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' id='elementor-post-1664-css'
        href='<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/elementor/css/post-1664.css' type='text/css' media='all' />
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
    <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js">
    </script>
    <script type="text/javascript"
        src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js"
        id="jquery-blockui-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/goldish\/demo\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/goldish\/demo\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/parkofideas.com\/goldish\/demo\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
    </script>
    <script type="text/javascript"
        src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js" id="js-cookie-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/goldish\/demo\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/goldish\/demo\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
    </script>
    <script type="text/javascript"
        src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/underscore.min.js" id="underscore-js">
    </script>
    <script type="text/javascript" id="wp-util-js-extra">
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/goldish\/demo\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/wp-util.min.js" id="wp-util-js"></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/goldish\/demo\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/goldish\/demo\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_2bfaa0db018ed7d4de7313c6cef366a0",
        "fragment_name": "wc_fragments_2bfaa0db018ed7d4de7313c6cef366a0",
        "request_timeout": "5000"
    };
    /* ]]> */
    </script>
    <script type="text/javascript"
        src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js"
        id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
   <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.21.8; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <link rel="icon" href="<?php echo $domain;?>asset/images/favicon/favicon-32x32.ico?c=<?php echo uniqid();?>"
        sizes="32x32" />
    <link rel="icon"
        href="<?php echo $domain;?>asset/images/favicon/favicon-192x192.ico?c=<?php echo uniqid();?>"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="<?php echo $domain;?>asset/images/favicon/favicon-192x192.ico?c=<?php echo uniqid();?>" />

</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-216 theme-goldish woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-goldish wvs-tooltip elementor-default elementor-template-full-width elementor-kit-12 elementor-page elementor-page-216 h-preload woocommerce-on h-ltr h-wpml">
    <div class="l-wrap">
        <?php include 'c-header.php'?>
        <div class="l-inner">
            <div data-elementor-type="wp-page" data-elementor-id="216" class="elementor elementor-216">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-58f78f2 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="58f78f2" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2cd606f"
                            data-id="2cd606f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-18ef02d elementor-widget elementor-widget-ideapark-page-header"
                                    data-id="18ef02d" data-element_type="widget"
                                    data-widget_type="ideapark-page-header.default">
                                    <div class="elementor-widget-container">
                                        <header class="l-section c-page-header">
                                            <div class="c-page-header__top-row">
                                                <nav class="c-breadcrumbs">
                                                    <ol class="c-breadcrumbs__list c-breadcrumbs__list--default"
                                                        itemscope itemtype="http://schema.org/BreadcrumbList">
                                                        <li class="c-breadcrumbs__item c-breadcrumbs__item--first"
                                                            itemprop="itemListElement" itemscope
                                                            itemtype="http://schema.org/ListItem"> <a itemprop="item"
                                                                title="Home"
                                                                href="<?php echo $domain;?>"><span
                                                                    itemprop="name">Home</span></a> 
                                                                    <i class="fa fa-angle-right"></i>&nbsp;
                                                            <meta itemprop="position" content="1">
                                                        </li>
                                                        <li class="c-breadcrumbs__item c-breadcrumbs__item--first"
                                                            itemprop="itemListElement" itemscope
                                                            itemtype="http://schema.org/ListItem"> <a itemprop="item"
                                                                title="Home"
                                                                href="<?php echo $domain;?>help/"><span
                                                                    itemprop="name">Help</span></a> 
                                                                    <i class="fa fa-angle-right"></i>&nbsp;
                                                            <meta itemprop="position" content="1">
                                                        </li>
                                                        <li class="c-breadcrumbs__item c-breadcrumbs__item--last"
                                                            itemprop="itemListElement" itemscope
                                                            itemtype="http://schema.org/ListItem"> <span
                                                                itemprop="name">Contacts</span>
                                                            <meta itemprop="position" content="2">
                                                        </li>
                                                    </ol>
                                                </nav>
                                            </div>
                                            <h1 class="c-page-header__title">Contacts</h1>
                                        </header>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-d9eae05 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="d9eae05" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f8a03f9"
                            data-id="f8a03f9" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-91d7521 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                    data-id="91d7521" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5793eca"
                                            data-id="5793eca" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5952ad3 elementor-widget elementor-widget-ideapark-heading"
                                                    data-id="5952ad3" data-element_type="widget"
                                                    data-widget_type="ideapark-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="c-ip-heading c-ip-heading--large c-ip-heading--left c-ip-heading--bullet-hide">
                                                            <div class="c-ip-heading__inner">Address</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c0b5aba elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="c0b5aba" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item"> <span
                                                                    class="elementor-icon-list-icon"> <i
                                                                        aria-hidden="true"
                                                                        class="fibd21- fa fa-map-marker"></i> </span>
                                                                <span class="elementor-icon-list-text">725 5th Ave, New
                                                                    York, NY 10022, USA</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9b8a4a1 elementor-widget elementor-widget-ideapark-heading"
                                                    data-id="9b8a4a1" data-element_type="widget"
                                                    data-widget_type="ideapark-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="c-ip-heading c-ip-heading--large c-ip-heading--left c-ip-heading--bullet-hide">
                                                            <div class="c-ip-heading__inner">Phones</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-766ce75 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="766ce75" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item"> <a
                                                                    href="https://parkofideas.com/tel:7123399294"> <span
                                                                        class="elementor-icon-list-icon"> <i
                                                                            aria-hidden="true"
                                                                            class="fibd21- fa fa-phone"></i> </span>
                                                                    <span
                                                                        class="elementor-icon-list-text">712-339-9294</span>
                                                                </a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-85a7672 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="85a7672" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item"> <a
                                                                    href="https://parkofideas.com/tel:7123399295"> <span
                                                                        class="elementor-icon-list-icon"> <i
                                                                            aria-hidden="true"
                                                                            class="fibd21- fa fa-phone"></i> </span>
                                                                    <span
                                                                        class="elementor-icon-list-text">712-339-9295</span>
                                                                </a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-03d9807 elementor-widget elementor-widget-ideapark-heading"
                                                    data-id="03d9807" data-element_type="widget"
                                                    data-widget_type="ideapark-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="c-ip-heading c-ip-heading--large c-ip-heading--left c-ip-heading--bullet-hide">
                                                            <div class="c-ip-heading__inner">Email</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-868d3cb elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="868d3cb" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item"> <a
                                                                    href="https://parkofideas.com/mailto:info@goldish-jew.com">
                                                                    <span class="elementor-icon-list-icon"> <i
                                                                            aria-hidden="true"
                                                                            class="fibd21- fa fa-envelope-o"></i>
                                                                    </span> <span
                                                                        class="elementor-icon-list-text">info@goldish-jew.com</span>
                                                                </a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e3ca417 elementor-widget elementor-widget-ideapark-heading"
                                                    data-id="e3ca417" data-element_type="widget"
                                                    data-widget_type="ideapark-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="c-ip-heading c-ip-heading--large c-ip-heading--left c-ip-heading--bullet-hide">
                                                            <div class="c-ip-heading__inner">Working Hours</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8088f74 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="8088f74" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item"> <span
                                                                    class="elementor-icon-list-icon"> <i
                                                                        aria-hidden="true"
                                                                        class="fibd21- fa fa-clock-o"></i> </span> <span
                                                                    class="elementor-icon-list-text">Mon-Fri: 10:00 -
                                                                    18:00</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-b6bf2ec elementor-widget elementor-widget-ideapark-heading"
                                                    data-id="b6bf2ec" data-element_type="widget"
                                                    data-widget_type="ideapark-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="c-ip-heading c-ip-heading--large c-ip-heading--left c-ip-heading--bullet-hide">
                                                            <div class="c-ip-heading__inner">Follow Us</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-314e81a elementor-widget elementor-widget-ideapark-social"
                                                    data-id="314e81a" data-element_type="widget"
                                                    data-widget_type="ideapark-social.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="c-ip-social"> <a href="https://parkofideas.com/#"
                                                                class="c-ip-social__link c-ip-social__link--filled"
                                                                aria-label="Facebook"><i
                                                                    class="fa fa-facebook c-ip-social__icon c-ip-social__icon--facebook">
                                                                </i></a> <a href="https://parkofideas.com/#"
                                                                class="c-ip-social__link c-ip-social__link--filled"
                                                                aria-label="Instagram"><i
                                                                    class="fa fa-instagram c-ip-social__icon c-ip-social__icon--instagram">
                                                                </i></a> <a href="https://parkofideas.com/#"
                                                                class="c-ip-social__link c-ip-social__link--filled"
                                                                aria-label="Whatsapp"><i
                                                                    class="fa fa-whatsapp c-ip-social__icon c-ip-social__icon--whatsapp">
                                                                </i></a> <a href="https://parkofideas.com/#"
                                                                class="c-ip-social__link c-ip-social__link--filled"
                                                                aria-label="YouTube"><i
                                                                    class="fa fa-youtube-play c-ip-social__icon c-ip-social__icon--youtube">
                                                                </i></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dc41b63"
                                            data-id="dc41b63" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-8366496 elementor-widget elementor-widget-ideapark-heading"
                                                    data-id="8366496" data-element_type="widget"
                                                    data-widget_type="ideapark-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="c-ip-heading c-ip-heading--large c-ip-heading--left c-ip-heading--bullet-hide">
                                                            <div class="c-ip-heading__inner">Send Your Question</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5759a9c elementor-widget elementor-widget-shortcode"
                                                    data-id="5759a9c" data-element_type="widget"
                                                    data-widget_type="shortcode.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-shortcode">
                                                            <div class="wpcf7 no-js" id="wpcf7-f13-p216-o1" lang="3.30"
                                                                dir="ltr">
                                                                <div class="screen-reader-response">
                                                                    <p role="status" aria-live="polite"
                                                                        aria-atomic="true"></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form action="/goldish/demo/contacts/#wpcf7-f13-p216-o1"
                                                                    method="post" class="wpcf7-form init"
                                                                    aria-label="Contact form" novalidate="novalidate"
                                                                    data-status="init">
                                                                    <div style="display: none;"> <input type="hidden"
                                                                            name="_wpcf7" value="13" /> <input
                                                                            type="hidden" name="_wpcf7_version"
                                                                            value="5.9.5" /> <input type="hidden"
                                                                            name="_wpcf7_locale" value="" /> <input
                                                                            type="hidden" name="_wpcf7_unit_tag"
                                                                            value="wpcf7-f13-p216-o1" /> <input
                                                                            type="hidden" name="_wpcf7_container_post"
                                                                            value="216" /> <input type="hidden"
                                                                            name="_wpcf7_posted_data_hash" value="" />
                                                                    </div> <label> Your name <span
                                                                            class="wpcf7-form-control-wrap"
                                                                            data-name="your-name"><input size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false" value=""
                                                                                type="text" name="your-name" /></span>
                                                                    </label> <label> Your email <span
                                                                            class="wpcf7-form-control-wrap"
                                                                            data-name="your-email"><input size="40"
                                                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                aria-required="true"
                                                                                aria-invalid="false" value=""
                                                                                type="email" name="your-email" /></span>
                                                                    </label> <label> Your message <span
                                                                            class="wpcf7-form-control-wrap"
                                                                            data-name="your-message"><textarea cols="40"
                                                                                rows="7"
                                                                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                name="your-message"></textarea></span>
                                                                    </label> <input
                                                                        class="wpcf7-form-control wpcf7-submit has-spinner c-button--full"
                                                                        type="submit" value="Send" />
                                                                    <div class="wpcf7-response-output"
                                                                        aria-hidden="true"></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
        <?php include 'footer.php' ?>
        <div class="woocommerce-notices-wrapper woocommerce-notices-wrapper--ajax"></div>
        <div class="c-header__callback-popup c-header__callback-popup--disabled js-callback-popup js-quickview-popup">
            <div class="c-header__callback-bg js-callback-close"></div>
            <div class="c-header__callback-wrap c-header__callback-wrap--quickview">
                <div class="js-quickview-container"></div> <button type="button"
                    class="h-cb h-cb--svg c-header__callback-close js-callback-close"><i
                        class="ip-close-rect"></i></button>
            </div>
        </div>
        <div
            class="c-header__callback-popup c-header__callback-popup--disabled js-callback-popup js-attribute-hint-popup">
            <div class="c-header__callback-wrap c-header__callback-wrap--hint">
                <div class="c-header__callback-content c-header__callback-content--hint js-attribute-hint-container">
                </div> <button type="button" class="h-cb h-cb--svg c-header__callback-close js-callback-close"><i
                        class="ip-close-rect"></i></button>
            </div>
        </div>
        <div class="pswp js-fixed" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div> <button class="h-cb pswp__button--close" title="Close (Esc)">
                            <i class="ip-close pswp__button-svg pswp__button-svg--close"></i> </button> <button
                            class="h-cb pswp__button--zoom" title="Zoom in/out"> <i
                                class="ip-zoom pswp__button-svg pswp__button-svg--zoom"></i> </button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div> <button class="h-cb pswp__button--arrow--left" title="Previous (arrow left)"> <i
                            class="ip-right pswp__button-svg pswp__button-svg--left"></i> </button> <button
                        class="h-cb pswp__button--arrow--right" title="Next (arrow right)"> <i
                            class="ip-right pswp__button-svg pswp__button-svg--right"></i> </button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript'>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
        </script>
        <link rel='stylesheet' id='wc-blocks-style-css'
            href='<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='elementor-post-2225-css'
            href='<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/elementor/css/post-2225.css' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-post-2297-css'
            href='<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/elementor/css/post-2297.css' type='text/css' media='all' />
        <script type="text/javascript"
            src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/contact-form-7/includes/swv/js/index.js" id="swv-js"></script>
        <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/parkofideas.com\/goldish\/demo\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            },
            "cached": "1"
        };
        /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/contact-form-7/includes/js/index.js"
            id="contact-form-7-js"></script>
        <script type="text/javascript"
            src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js"
            id="sourcebuster-js-js"></script>
        <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "ajaxurl": "https:\/\/parkofideas.com\/goldish\/demo\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
        /* ]]> */
        </script>
        <script type="text/javascript"
            src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js"
            id="wc-order-attribution-js"></script>
        <script type="text/javascript" id="wp-api-request-js-extra">
        /* <![CDATA[ */
        var wpApiSettings = {
            "root": "https:\/\/parkofideas.com\/goldish\/demo\/wp-json\/",
            "nonce": "e93d5860a6",
            "versionString": "wp\/v2\/"
        };
        /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/api-request.min.js"
            id="wp-api-request-js"></script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js"
            id="wp-polyfill-inert-js"></script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/dist/vendor/regenerator-runtime.min.js"
            id="regenerator-runtime-js"></script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/dist/vendor/wp-polyfill.min.js"
            id="wp-polyfill-js"></script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/dist/hooks.min.js" id="wp-hooks-js">
        </script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/dist/i18n.min.js" id="wp-i18n-js">
        </script>
        <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/dist/url.min.js" id="wp-url-js"></script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/dist/api-fetch.min.js"
            id="wp-api-fetch-js"></script>
        <script type="text/javascript" id="wp-api-fetch-js-after">

        </script>
        <script type="text/javascript" id="woo-variation-swatches-js-extra">
        /* <![CDATA[ */
        var woo_variation_swatches_options = {
            "show_variation_label": "",
            "clear_on_reselect": "",
            "variation_label_separator": ":",
            "is_mobile": "",
            "show_variation_stock": "",
            "stock_label_threshold": "5",
            "cart_redirect_after_add": "no",
            "enable_ajax_add_to_cart": "yes",
            "cart_url": "https:\/\/parkofideas.com\/goldish\/demo\/cart\/",
            "is_cart": ""
        };
        /* ]]> */
        </script>
        <script type="text/javascript"
            src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js"
            id="woo-variation-swatches-js"></script>
        <script type="text/javascript" id="ideapark-core-js-extra">
        /* <![CDATA[ */
        var ideapark_wp_vars = {
            "themeDir": "\/usr\/www\/parkofideas.com\/goldish\/demo\/wp-content\/themes\/goldish",
            "themeUri": "https:\/\/parkofideas.com\/goldish\/demo\/wp-content\/themes\/goldish",
            "ajaxUrl": "https:\/\/parkofideas.com\/goldish\/demo\/wp-admin\/admin-ajax.php",
            "searchUrl": "https:\/\/parkofideas.com\/goldish\/demo\/?s=",
            "lazyload": "1",
            "isRtl": "",
            "stickySidebar": "1",
            "stickyMenuDesktop": "1",
            "stickyMenuMobile": "1",
            "headerType": "header-type-1",
            "popupCartLayout": "default",
            "popupCartOpenMobile": "",
            "popupCartOpenDesktop": "",
            "viewMore": "View More",
            "imagesloadedUrl": "https:\/\/parkofideas.com\/goldish\/demo\/wp-includes\/js\/imagesloaded.min.js?v=5.0.0",
            "scriptsHash": "79b929e8",
            "stylesHash": "01e92212",
            "cookiePath": "\/goldish\/demo\/",
            "cookieDomain": "",
            "cookieHash": "7fcb66746431f61f68b05a36e3e170ba",
            "locale": "en_US",
            "masonryUrl": "https:\/\/parkofideas.com\/goldish\/demo\/wp-includes\/js\/masonry.min.js?v=4.2.2",
            "elementorPreview": "",
            "jsDelay": "1",
            "withButtons": "1",
            "hideButtons": "",
            "ajaxAddToCart": "1",
            "menuItemSpace": "20",
            "wishlistCookieName": "ip-wishlist-items",
            "wishlistTitleAdd": "Add to Wishlist",
            "wishlistTitleRemove": "Remove from Wishlist"
        };
        /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-content/uploads/goldish/min.js" id="ideapark-core-js">
        </script>
        <script type="text/javascript" id="ideapark-core-js-after">
        /* 
        </script>
        <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/goldish\/demo\/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
            "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
        };
        /* ]]> */
        </script>
        <script type="text/javascript"
            src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js"
            id="wc-add-to-cart-variation-js" data-wp-strategy="defer"></script>
        <script type="text/javascript"
            src="<?php echo $domain;?>asset/goldish/demo/wp-content/themes/goldish/assets/js/add-to-cart-variation-fix.js"
            id="wc-add-to-cart-variation-fix-js"></script>
        <script type="text/javascript"
            src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js"
            id="elementor-webpack-runtime-js"></script>
        <script type="text/javascript"
            src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/elementor/assets/js/frontend-modules.min.js"
            id="elementor-frontend-modules-js"></script>
        <script type="text/javascript"
            src="<?php echo $domain;?>asset/goldish/demo/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js"
            id="elementor-waypoints-js"></script>
        <script type="text/javascript" src="<?php echo $domain;?>asset/goldish/demo/wp-includes/js/jquery/ui/core.min.js"
            id="jquery-ui-core-js"></script> <input type="hidden" id="js-elementor-defer"
            value="{&quot;code&quot;:&quot;&lt;script type=\&quot;text\/javascript\&quot; id=\&quot;elementor-frontend-js-before\&quot;&gt;\n\/* &lt;![CDATA[ *\/\nvar elementorFrontendConfig = {\&quot;environmentMode\&quot;:{\&quot;edit\&quot;:false,\&quot;wpPreview\&quot;:false,\&quot;isScriptDebug\&quot;:false},\&quot;i18n\&quot;:{\&quot;shareOnFacebook\&quot;:\&quot;Share on Facebook\&quot;,\&quot;shareOnTwitter\&quot;:\&quot;Share on Twitter\&quot;,\&quot;pinIt\&quot;:\&quot;Pin it\&quot;,\&quot;download\&quot;:\&quot;Download\&quot;,\&quot;downloadImage\&quot;:\&quot;Download image\&quot;,\&quot;fullscreen\&quot;:\&quot;Fullscreen\&quot;,\&quot;zoom\&quot;:\&quot;Zoom\&quot;,\&quot;share\&quot;:\&quot;Share\&quot;,\&quot;playVideo\&quot;:\&quot;Play Video\&quot;,\&quot;previous\&quot;:\&quot;Previous\&quot;,\&quot;next\&quot;:\&quot;Next\&quot;,\&quot;close\&quot;:\&quot;Close\&quot;,\&quot;a11yCarouselWrapperAriaLabel\&quot;:\&quot;Carousel | Horizontal scrolling: Arrow Left &amp; Right\&quot;,\&quot;a11yCarouselPrevSlideMessage\&quot;:\&quot;Previous slide\&quot;,\&quot;a11yCarouselNextSlideMessage\&quot;:\&quot;Next slide\&quot;,\&quot;a11yCarouselFirstSlideMessage\&quot;:\&quot;This is the first slide\&quot;,\&quot;a11yCarouselLastSlideMessage\&quot;:\&quot;This is the last slide\&quot;,\&quot;a11yCarouselPaginationBulletMessage\&quot;:\&quot;Go to slide\&quot;},\&quot;is_rtl\&quot;:false,\&quot;breakpoints\&quot;:{\&quot;xs\&quot;:0,\&quot;sm\&quot;:480,\&quot;md\&quot;:768,\&quot;lg\&quot;:1190,\&quot;xl\&quot;:1440,\&quot;xxl\&quot;:1600},\&quot;responsive\&quot;:{\&quot;breakpoints\&quot;:{\&quot;mobile\&quot;:{\&quot;label\&quot;:\&quot;Mobile Portrait\&quot;,\&quot;value\&quot;:767,\&quot;default_value\&quot;:767,\&quot;direction\&quot;:\&quot;max\&quot;,\&quot;is_enabled\&quot;:true},\&quot;mobile_extra\&quot;:{\&quot;label\&quot;:\&quot;Mobile Landscape\&quot;,\&quot;value\&quot;:880,\&quot;default_value\&quot;:880,\&quot;direction\&quot;:\&quot;max\&quot;,\&quot;is_enabled\&quot;:false},\&quot;tablet\&quot;:{\&quot;label\&quot;:\&quot;Tablet Portrait\&quot;,\&quot;value\&quot;:1189,\&quot;default_value\&quot;:1024,\&quot;direction\&quot;:\&quot;max\&quot;,\&quot;is_enabled\&quot;:true},\&quot;tablet_extra\&quot;:{\&quot;label\&quot;:\&quot;Tablet Landscape\&quot;,\&quot;value\&quot;:1200,\&quot;default_value\&quot;:1200,\&quot;direction\&quot;:\&quot;max\&quot;,\&quot;is_enabled\&quot;:false},\&quot;laptop\&quot;:{\&quot;label\&quot;:\&quot;Laptop\&quot;,\&quot;value\&quot;:1366,\&quot;default_value\&quot;:1366,\&quot;direction\&quot;:\&quot;max\&quot;,\&quot;is_enabled\&quot;:false},\&quot;widescreen\&quot;:{\&quot;label\&quot;:\&quot;Widescreen\&quot;,\&quot;value\&quot;:2400,\&quot;default_value\&quot;:2400,\&quot;direction\&quot;:\&quot;min\&quot;,\&quot;is_enabled\&quot;:false}}},\&quot;version\&quot;:\&quot;3.21.8\&quot;,\&quot;is_static\&quot;:false,\&quot;experimentalFeatures\&quot;:{\&quot;e_optimized_assets_loading\&quot;:true,\&quot;e_optimized_css_loading\&quot;:true,\&quot;additional_custom_breakpoints\&quot;:true,\&quot;e_swiper_latest\&quot;:true,\&quot;container_grid\&quot;:true,\&quot;home_screen\&quot;:true,\&quot;ai-layout\&quot;:true,\&quot;landing-pages\&quot;:true},\&quot;urls\&quot;:{\&quot;assets\&quot;:\&quot;https:\\\/\\\/parkofideas.com\\\/goldish\\\/demo\\\/wp-content\\\/plugins\\\/elementor\\\/assets\\\/\&quot;},\&quot;swiperClass\&quot;:\&quot;swiper\&quot;,\&quot;settings\&quot;:{\&quot;page\&quot;:[],\&quot;editorPreferences\&quot;:[]},\&quot;kit\&quot;:{\&quot;viewport_tablet\&quot;:1189,\&quot;active_breakpoints\&quot;:[\&quot;viewport_mobile\&quot;,\&quot;viewport_tablet\&quot;],\&quot;global_image_lightbox\&quot;:\&quot;yes\&quot;,\&quot;lightbox_enable_counter\&quot;:\&quot;yes\&quot;,\&quot;lightbox_enable_fullscreen\&quot;:\&quot;yes\&quot;,\&quot;lightbox_enable_zoom\&quot;:\&quot;yes\&quot;,\&quot;lightbox_enable_share\&quot;:\&quot;yes\&quot;,\&quot;lightbox_title_src\&quot;:\&quot;title\&quot;,\&quot;lightbox_description_src\&quot;:\&quot;description\&quot;},\&quot;post\&quot;:{\&quot;id\&quot;:216,\&quot;title\&quot;:\&quot;Contacts%20%E2%80%93%20Goldish\&quot;,\&quot;excerpt\&quot;:\&quot;\&quot;,\&quot;featuredImage\&quot;:false}};\n\/* ]]&gt; *\/\n&lt;\/script&gt;\n&lt;script type=\&quot;text\/javascript\&quot; src=\&quot;https:\/\/parkofideas.com\/goldish\/demo\/wp-content\/plugins\/elementor\/assets\/js\/frontend.min.js?ver=3.21.8\&quot; id=\&quot;elementor-frontend-js\&quot;&gt;&lt;\/script&gt;\n&quot;}">
        <script>
        ideapark_defer_action_add(function() {
            var elementor_defer = jQuery('#js-elementor-defer');
            if (elementor_defer.length) {
                var a = JSON.parse(elementor_defer.val());
                jQuery('body').append(a.code);
                elementor_defer.remove();
            }
        });
        </script>
    </div>
</body>

</html> <!-- Cache Enabler by KeyCDN @ Thu, 06 Jun 2024 08:21:46 GMT (https-index.html.gz) -->