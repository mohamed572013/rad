<?php

    if (!empty($_GET)) {
        $page = $_GET['page'];
    } else {
        $page = 'index';
    }
    switch ($page) {
        case 'index':
            $main_content = 'index';
            include 'layout.php';
            break;
        case 'index_en':
            $main_content = 'index_en';
            include 'layout_en.php';
            break;
/***********************************************************/
        case 'about':
            $main_content = 'about';
            include 'layout.php';
            break;
        case 'about_en':
            $main_content = 'about_en';
            include 'layout_en.php';
            break;
/***********************************************************/
        case 'services':
            $main_content = 'services';
            include 'layout.php';
            break;
        case 'services_en':
            $main_content = 'services_en';
            include 'layout_en.php';
            break;
        case 'service_det':
            $main_content = 'service_det';
            include 'layout.php';
            break;
        case 'service_det_en':
            $main_content = 'service_det_en';
            include 'layout_en.php';
            break;
/***********************************************************/
        case 'products':
            $main_content = 'products';
            include 'layout.php';
            break;
        case 'products_en':
            $main_content = 'products_en';
            include 'layout_en.php';
            break;
        case 'products_det':
            $main_content = 'products_det';
            include 'layout.php';
            break;
        case 'products_det_en':
            $main_content = 'products_det_en';
            include 'layout_en.php';
            break;
        case 'products_booking':
            $main_content = 'products_booking';
            include 'layout.php';
            break;
        case 'products_booking_en':
            $main_content = 'products_booking_en';
            include 'layout_en.php';
            break;
/***********************************************************/
        case 'partners':
            $main_content = 'partners';
            include 'layout.php';
            break;
        case 'partners_en':
            $main_content = 'partners_en';
            include 'layout_en.php';
            break;
/***********************************************************/
        case 'contact_us':
            $main_content = 'contact_us';
            include 'layout.php';
            break;
        case 'contact_us_en':
            $main_content = 'contact_us_en';
            include 'layout_en.php';
            break;
/***********************************************************/
        case 'error':
            $main_content = 'error';
            include 'layout.php';
            break;
        case 'error_en':
            $main_content = 'error_en';
            include 'layout_en.php';
            break;
/***********************************************************/
    }
?>