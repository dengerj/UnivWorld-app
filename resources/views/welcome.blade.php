<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Simply Amazed HTML Template by Tooplate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="C:/Users/junio\Documents/laravel Projet mamah/UnivWorld-app/resources/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="C:/Users/junio\Documents/laravel Projet mamah/UnivWorld-app/resources/css/all.min.css" type="text/css" /> 
    <link rel="stylesheet" href="C:/Users/junio\Documents/laravel Projet mamah/UnivWorld-app/resources/css/slick.css" type="text/css" />   
    <link rel="stylesheet" href="C:/Users/junio\Documents/laravel Projet mamah/UnivWorld-app/resources/css/tooplate-simply-amazed.css" type="text/css" />
<!--

Tooplate 2123 Simply Amazed

https://www.tooplate.com/view/2123-simply-amazed

-->

    <style>

                /* Slick Slider */
        .slick-slider {
            position: relative;
            display: block;
            -webkit-box-sizing: border-box;
                    box-sizing: border-box;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }
        
        .slick-list {
            position: relative;
            overflow: hidden;
            display: block;
            margin: 0;
            padding: 0;
        }
        
        .slick-list:focus {
            outline: none;
        }
        
        .slick-list.dragging {
            cursor: move;
            cursor: grab;
            cursor: -webkit-grab;
        }
        
        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        
        .slick-track {
            position: relative;
            left: 0;
            top: 0;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        
        .slick-track:before, .slick-track:after {
            content: "";
            display: table;
        }
        
        .slick-track:after {
            clear: both;
        }
        
        .slick-loading .slick-track {
            visibility: hidden;
        }
        
        .slick-slide {
            float: left;
            height: 100%;
            min-height: 1px;
            outline: 0;
            display: none;
        }
        
        [dir="rtl"] .slick-slide {
            float: right;
        }
        
        .slick-slide.slick-loading img {
            display: none;
        }
        
        .slick-slide.dragging img {
            pointer-events: none;
        }
        
        .slick-initialized .slick-slide {
            display: block;
        }
        
        .slick-loading .slick-slide {
            visibility: hidden;
        }
        
        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }
        
        .slick-arrow.slick-hidden {
            display: none;
        }
        
        /* Arrows */
        .slick-prev,
        .slick-next {
            position: absolute;
            display: block;
            font-size: 0px;
            cursor: pointer;
            background-color: transparent;
            color: transparent;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
            padding: 0;
            border: none;
            outline: none;
            z-index: 1;
        }
        
        .slick-prev:hover, .slick-prev:focus,
        .slick-next:hover,
        .slick-next:focus {
            outline: none;
            background-color: transparent;
            color: transparent;
        }
        
        .slick-prev:hover:before, .slick-prev:focus:before,
        .slick-next:hover:before,
        .slick-next:focus:before {
            opacity: 1;
        }
        
        .slick-prev.slick-disabled:before,
        .slick-next.slick-disabled:before {
            opacity: 1;
        }
        
        .slick-prev:before,
        .slick-next:before {
            font-family: fontawesome;
            font-size: 30px;
            line-height: 1;
            color: #000;
            opacity: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        .slick-prev {
            left: -20px;
        }
        
        [dir="rtl"] .slick-prev {
            left: auto;
            right: -25px;
        }
        
        .slick-prev:before {
            content: '\f104';
        }
        
        [dir="rtl"] .slick-prev:before {
            content: '';
        }
        
        .slick-next {
            right: -20px;
        }
        
        [dir="rtl"] .slick-next {
            left: -25px;
            right: auto;
        }
        
        .slick-next:before {
            content: '\f105';
        }
        
        [dir="rtl"] .slick-next:before {
            content: '';
        }
        
        /* Dots */
        .slick-dotted.slick-slider {
            margin-bottom: 30px;
        }
        
        .slick-dots {
            position: absolute;
            bottom: -25px;
            list-style: none;
            display: block;
            text-align: center;
            padding: 0;
            margin: 0;
            width: 100%;
        }
        
        .slick-dots li {
            position: relative;
            display: inline-block;
            margin: 0 5px;
            padding: 0;
            cursor: pointer;
        }
        
        .slick-dots li button {
            border: 0;
            background-color: transparent;
            outline: none;
            font-size: 0px;
            color: transparent;
            padding: 0;
            cursor: pointer;
        }
        
        .slick-dots li button:hover, .slick-dots li button:focus {
            outline: none;
        }
        
        .slick-dots li button:hover:before, .slick-dots li button:focus:before {
            opacity: 1;
        }
        
        .slick-dots li button:before {
            content: '\f111';
            font-family: fontawesome;
            font-size: 18px;
            text-align: center;
            color: #000;
            opacity: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        .slick-dots li.slick-active button:before {
            color: red;
            opacity: 1;
            content: '\f192';
        }

                ::after, ::before { line-height: normal; }

        /* <<< Reset CSS >>> */
        body {
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        color: #6c757d;
        line-height: 1.5;
        background-color: #fff;
        -webkit-font-smoothing: antialiased;
        -webkit-text-size-adjust: 100%;
        }

        ol:after,
        ul:after {
        content: "";
        display: block;
        line-height: 0;
        clear: both;
        overflow: hidden;
        height: 0;
        }

        pre {
        border-left: 10px solid #ccc;
        max-width: 500px;
        }

        /* <<< Headings >>> */
        h1 { font-size: 40px; }
        h2 { font-size: 32px; }
        h3 { font-size: 28px; }
        h4 { font-size: 24px; }
        h5 { font-size: 20px; }
        h6 { font-size: 16px; }
        p, .font-weight-light { font-weight: 300; }

        /* <<< WP-Image Hack >>> */
        img {
        border: 0;
        height: auto;
        max-width: 100%;
        }

        /* <<< anchor >>> */
        a {
        color: #99ccff;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        }

        a:hover {
        color: green;
        text-decoration: none;
        }

        a:focus {
        outline: 0;
        color: green;
        }

        /* <<< btn override >>> */
        .btn {
        white-space: normal;
        cursor: pointer;
        font-size: 18px;
        padding: 12px 35px;
        border-radius: 0;
        }

        /* <<< btn-primary >>> */
        .btn-primary {
        color: #fff;
        background-color: #356ba2;
        border-color: transparent;
        }

        .btn-primary.active, .btn-primary:active, .btn-primary.focus, .btn-primary:focus, .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .btn-primary:hover {
        color: #fff;
        background-color: #99ccff;
        border-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none;
        }

        .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active {
        background-color: #99ccff;
        border-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none;
        }

        .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        }

        .form-control {
        width: 100%;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0;
        -webkit-background-clip: padding-box;
        height: 50px;
        background-color: transparent;
        border: 0;
        border-bottom: 1px solid #fff;
        font-size: 18px;
        color: #fff;
        padding-left: 15px;
        padding-right: 15px;
        }

        .form-control::-webkit-input-placeholder { color: white; }
        .form-control:-moz-placeholder { color: white; }
        .form-control::-moz-placeholder { color: white; }
        .form-control:-ms-input-placeholder { color: white; }

        .form-control:focus {
        border-bottom: 1px solid #356ba2;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: transparent;
        color: #fff;
        }

        textarea.form-control {
        min-height: 150px;
        padding: 10px 10px 10px 10px;
        }

        /* <<< Global >>> */
        .container { max-width: 1150px; }
        .container-2 { max-width: 1250px; }

        /* <<< outer >>> */
        #outer {
        position: relative;
        width: 100%;
        min-height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        @media (max-width: 991px) {
        #outer { display: block; }
        }

        /* <<< Header >>> */
        .header {
        position: fixed;
        right: 0;
        width: 26%;
        height: 100%;
        background-color: #356ba2;
        overflow-y: auto;
        z-index: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        }

        @media (max-width: 991px) {
        .header {
            position: fixed;
            right: -100%;
            top: 0;
            bottom: 0;
            width: 300px;
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        }

        @media (max-width: 575px) {
        .header { width: 100%; }
        }

        .header.open { right: 0; }
        .design { color: #fff; }

        .design a {
        color: #fff;
        text-decoration: none;
        }

        .design a:hover { color: #99ccff; }

        /* <<< Mobile Menu button >>> */
        .navbar-button {
        width: 50px;
        height: 47px;  
        padding: 0;
        margin: 0;
        outline: 0;
        border: 0;
        z-index: 9;
        -webkit-box-shadow: none;
        box-shadow: none;
        position: fixed;
        top: 0px;
        right: 0px;
        background-color: #fff;
        padding: 10px;
        border-radius: 0;
        display: none;
        -webkit-box-shadow: 0px 5px 10px 0px rgba(50, 50, 50, 0.3);
        box-shadow: 0px 5px 10px 0px rgba(50, 50, 50, 0.3);
        }

        @media (max-width: 991px) {
        .navbar-button {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        }

        .navbar-button:focus {
        border: 0;
        outline: 0;
        -webkit-box-shadow: 0px 5px 10px 0px rgba(50, 50, 50, 0.3);
        box-shadow: 0px 5px 10px 0px rgba(50, 50, 50, 0.3);
        }

        .navbar-button .menu_icon {
        margin: 0;
        padding-top: 1px;
        float: left;
        width: 25px;
        height: 22px;
        position: relative;
        cursor: pointer;
        }

        .navbar-button .menu_icon .icon-bar {
        display: block;
        position: absolute;
        opacity: 1;
        width: 25px;
        height: 3px;
        background-color: #6699cc;
        margin: 0 auto;
        left: 0;
        -webkit-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
        }

        .navbar-button .menu_icon .icon-bar:nth-child(1) {
        top: 10px;
        -webkit-transform: rotate(145deg);
        /* WebKit */
        /* Mozilla */
        /* Opera */
        /* Internet Explorer */
        transform: rotate(140deg);
        /* CSS3 */
        }

        .navbar-button .menu_icon .icon-bar:nth-child(2) {
        top: 8px;
        opacity: 0;
        left: -10px;
        }

        .navbar-button .menu_icon .icon-bar:nth-child(3) {
        top: 10px;
        -webkit-transform: rotate(-145deg);
        /* WebKit */
        /* Mozilla */
        /* Opera */
        /* Internet Explorer */
        transform: rotate(-140deg);
        /* CSS3 */
        }

        .navbar-button.collapsed .icon-bar {
        -webkit-transform: rotate(0deg);
        /* WebKit */
        /* Mozilla */
        /* Opera */
        /* Internet Explorer */
        transform: rotate(0deg);
        /* CSS3 */
        }

        .navbar-button.collapsed .icon-bar:nth-child(1) {
        top: 0;
        -webkit-transform: rotate(0deg);
        /* WebKit */
        /* Mozilla */
        /* Opera */
        /* Internet Explorer */
        transform: rotate(0deg);
        /* CSS3 */
        }

        .navbar-button.collapsed .icon-bar:nth-child(2) {
        top: 10px;
        left: 0;
        opacity: 1;
        }

        .navbar-button.collapsed .icon-bar:nth-child(3) {
        top: 20px;
        -webkit-transform: rotate(0deg);
        /* WebKit */
        /* Mozilla */
        /* Opera */
        /* Internet Explorer */
        transform: rotate(0deg);
        /* CSS3 */
        }

        /* <<< Navigation >>> */
        .navbar {
        padding: 0;
        margin-bottom: 0;
        }

        .navbar .navbar-collapse {
        display: flex;
        height: 100% !important;
        padding-left: 61px;
        padding-right: 61px;
        }

        @media (max-width: 1366px) {
        .navbar .navbar-collapse {
            padding-left: 31px;
            padding-right: 21px;
        }
        }

        .navbar .navbar-nav { position: relative; }

        @media (max-height: 580px) {
        .navbar .navbar-nav { padding-top: 30px; }
        }

        .navbar .navbar-collapse::before {
        content: '';
        position: absolute;
        width: 1px;
        background-color: #fff;
        height: 100%;
        top: 0;
        }

        .navbar .navbar-nav > .nav-item {
        font-weight: 500;
        font-size: 18px;
        background-image: url(../img/menu-item-bg.png);
        background-position: left center;
        background-repeat: no-repeat;
        min-height: 82px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        padding-left: 66px;
        margin-bottom: 38px;
        }

        @media (max-width: 1366px) {
        .navbar .navbar-nav > .nav-item {
            font-size: 16px;
            padding-left: 53px;
        }
        }

        .navbar .navbar-nav > .nav-item .icn {
        padding-right: 20px;
        display: inline-block;
        }

        @media (max-width: 1366px) {
        .navbar .navbar-nav > .nav-item .icn { padding-right: 10px; }
        }

        .navbar .navbar-nav > .nav-item:last-child { margin-bottom: 0; }

        .navbar .navbar-nav > .nav-item:hover > a.nav-link,
        .navbar .navbar-nav > .nav-item.active > a.nav-link,
        .navbar .navbar-nav > .nav-item.current-menu-ancestor > a.dropdown-toggle {
        background-color: transparent;
        outline: 0;
        color: #99ccff;
        transition: all 0.3s ease;
        }

        .navbar .navbar-nav > .nav-item > a.nav-link {
        color: #fff;
        -webkit-transition: all 0s ease-in-out;
        transition: all 0s ease-in-out;
        padding: 0;
        }

        .navbar .navbar-nav > .nav-item > a.nav-link.current { color: #99ccff; }

        .navbar .navbar-nav > .nav-item > a.nav-link.dropdown-toggle::after {
        content: '';
        vertical-align: middle;
        }

        @media (max-width: 767px) {
        .navbar .navbar-nav > .nav-item > a.nav-link.dropdown-toggle::after { display: none; }
        }

        @media (max-width: 767px) {
        .navbar .navbar-nav > .nav-item > a.nav-link {
            padding: 10px;
            color: #fff;
        }
        }

        .navbar .navbar-nav > .nav-item ul.dropdown-menu {
        padding: 0;
        width: auto;
        border-radius: 0;
        border: 0;
        margin: 0;
        }

        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item {
        font-size: 16px;
        font-weight: 300;
        }

        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item > a.dropdown-item {
        border-bottom: 0;
        color: #fff;
        padding: 5px;
        }

        @media (max-width: 767px) {
        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item > a.dropdown-item {
            padding-left: 20px;
        }
        }

        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item > a.dropdown-item.dropdown-toggle {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -webkit-box-align: center;
                align-items: center;
        }

        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item > a.dropdown-item.dropdown-toggle::after {
        height: 2px !important;
        background-color: cyan;
        opacity: 1;
        -webkit-box-flex: 1;
            -ms-flex: 1;
                flex: 1;
        border: 0;
        margin-left: 10px;
        display: block;
        }

        @media (max-width: 767px) {
        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item > a.dropdown-item.dropdown-toggle::after {
            display: none;
        }
        }

        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item:hover > a,
        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item.active > a,
        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item.current-menu-ancestor > a.dropdown-toggle {
        font-weight: 500;
        color: #fff;
        background-color: lightblue;
        }

        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item:hover > a.dropdown-toggle::after {
        opacity: 1;
        }

        .navbar .navbar-nav > .nav-item ul.dropdown-menu .nav-item ul.dropdown-menu {
        padding: 0;
        }

        @media (max-width: 767px) {
        .navbar .navbar-nav .caret::before {
            margin-left: 10px;
            font-size: 26px;
            content: '\f107';
            font-family: "fontawesome";
            vertical-align: middle;
        }
        .navbar .navbar-nav .caret.caret-open::before {
            content: '\f106';
        }
        }

        @media only screen and (min-width: 768px) {
        /**:: First Dropdown ::**/
        .navbar .navbar-collapse ul li {
            position: relative;
        }
        .navbar .navbar-collapse ul li:hover > ul {
            display: block;
        }
        .navbar .navbar-collapse ul ul {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 250px;
            display: none;
            background-color: dodgerblue;
        }
        /**:: Second Dropdown ::**/
        .navbar .navbar-collapse ul ul li {
            position: relative;
        }
        .navbar .navbar-collapse ul ul li:hover > ul {
            display: block;
        }
        .navbar .navbar-collapse ul ul ul {
            position: absolute;
            top: 0;
            left: 100%;
            min-width: 250px;
            display: none;
            background-color: aqua;
        }
        /**:: Third Dropdown ::**/
        .navbar .navbar-collapse ul ul ul li {
            position: relative;
        }
        .navbar .navbar-collapse ul ul ul li:hover ul {
            display: block;
        }
        .navbar .navbar-collapse ul ul ul ul {
            position: absolute;
            top: 0;
            left: -100%;
            min-width: 250px;
            display: none;
            z-index: 1;
            background-color: bisque;
        }
        /**:: Fourth Dropdown ::**/
        .navbar .navbar-collapse ul ul ul ul li {
            position: relative;
        }
        .navbar .navbar-collapse ul ul ul ul li:hover ul {
            display: block;
        }
        .navbar .navbar-collapse ul ul ul ul ul {
            position: absolute;
            top: 0;
            left: -100%;
            min-width: 250px;
            display: none;
            z-index: 1;
            background-color: fuchsia;
        }
        }

        @media (max-width: 991px) {
        .navbar .navbar-nav {
            padding-top: 5px;
            margin-bottom: 0;
        }

        .navbar .navbar-collapse { padding-left: 0; }
        .navbar .navbar-collapse::before { height: 0; }

        .navbar .navbar-nav > .nav-item {
            min-height: 45px;
            margin-bottom: 10px;
            background-size: contain;
        }

        .navbar .navbar-nav > .nav-item { padding-left: 30px; }
        .nav-link .fa-2x { font-size: 1.2em; }  
        }

        /* <<< content-box >>> */
        #content-box {
        overflow: hidden;
        width: calc(74% + 1px);
        }

        @media (max-width: 991px) {
        #content-box { width: 100%; }
        }

        .section {
        height: 100vh;
        min-height: 700px;
        display: flex;
        align-items: center;
        }

        /* <<< Banner side >>> */
        .banner-section {
        position: relative;
        text-align: center;
        background-color: #99ccff;
        padding-top: 121px;
        align-items: flex-start;
        }

        .bg-blue-transparent { background-color: rgb(102 153 204 / 0.8); }

        .banner-section .logo-fa {  
        color: #fff;
        max-width: 400px;
        margin-left: 5px;
        padding-top: 43px;
        padding-bottom: 35px;
        font-size: 32px;
        margin-bottom: 60px;
        }

        @media (max-width: 991px) {
        .banner-section .logo-fa { margin: 0 auto 30px; }
        }

        @media (max-width: 767px) {
        .banner-section .logo-fa {
            font-size: 28px;
            padding-top: 20px;
            padding-bottom: 15px;
        }
        }

        .banner-section .logo-fa span {
        font-size: 38px;
        display: block;
        text-transform: uppercase;
        margin-bottom: 17px;
        }

        @media (max-width: 767px) {
        .banner-section .logo-fa span {
            font-size: 32px;
            margin-bottom: 10px;
        }
        }

        .banner-section .simple {
        color: #fff;
        display: inline-block;
        margin: auto;
        margin-left: 97px;
        padding: 33px 68px 34px 68px;
        }

        @media (max-width: 991px) {
        .banner-section .simple { margin-left: 0; }
        }

        @media (max-width: 767px) {
        .banner-section .simple { padding: 16px 34px 17px 34px; }
        }

        .banner-section .simple p {
        margin-bottom: 0;
        font-size: 22px;
        }

        @media (max-width: 991px) {
        .banner-section .simple p { font-size: 20px; }
        }

        @media (max-width: 575px) {
        .banner-section .simple p { font-size: 18px; }
        }

        /* <<< Work Side >>> */
        .work-section {
        padding-top: 90px!important;
        padding-bottom: 90px!important;
        min-height: 850px;
        background-color: #6699cc;
        }

        .work-section .container { max-width: 1242px; }

        .tm-work-item-inner {
        max-width: 360px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 30px;
        }

        @media (max-width: 767px) {
        .work-section .item {
            text-align: center;
            margin-bottom: 30px;
        }
        }

        .work-section .item.one { margin-top: 80px; }

        @media (max-width: 767px) {
        .work-section .item.one { margin-top: 0;}
        }

        .work-section .item.two { margin-top: 161px; }

        @media (max-width: 767px) {
        .work-section .item.two { margin-top: 0; }
        }

        .work-section .item .icn {
        width: 119px;
        height: 119px;
        display: block;
        border: 1px solid #fff;
        border-radius: 100%;
        color: #fff;
        font-size: 32px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        text-transform: uppercase;
        margin-bottom: 30px;
        }

        @media (max-width: 767px) {
        .work-section .item .icn { margin: 0 auto 20px; }
        }

        .work-section .item h3 {
        color: #ffccff;
        text-transform: uppercase;
        font-size: 27px;
        letter-spacing: -1px;
        margin-bottom: 9px;
        }

        .work-section .item p {
        color: #fff;
        line-height: 31px;
        margin-bottom: 0;
        }

        .work-section .title {
        margin-top: 5px;
        margin-left: 1px;
        border-bottom: 1px solid #fff;
        }

        .work-section .title h2 {
        color: #fff;
        font-size: 32px;
        margin-bottom: 12px;
        }

        /* <<< Gallery section >>> */
        .gallery-slider figure {
            position: relative;
            float: left;
        overflow: hidden;
        margin: 0;
        max-width: 200px;
            height: auto;
            background: #3085a3;
            text-align: center;
            cursor: pointer;
        }

        .gallery-slider figure img {
            position: relative;
            display: block;
            min-height: 100%;
            max-width: 100%;
            opacity: 0.8;
        }

        .gallery-slider figure figcaption {
            padding: 1em;
            color: #fff;
            text-transform: uppercase;
            font-size: 1.25em;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .gallery-slider figure figcaption::before,
        .gallery-slider figure figcaption::after {
            pointer-events: none;
        }

        .gallery-slider figure figcaption,
        .gallery-slider figure figcaption > a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Anchor will cover the whole item by default */
        /* For some effects it will show as a button */
        .gallery-slider figure figcaption > a {
            z-index: 1000;
            text-indent: 200%;
            white-space: nowrap;
            font-size: 0;
            opacity: 0;
        }

        .gallery-slider figure h2 {
            word-spacing: -0.15em;
        font-weight: 300;
        font-size: 28px;
        }

        .gallery-slider figure h2 span {
            font-weight: 800;
        }

        .gallery-slider figure h2,
        .gallery-slider figure p {
            margin: 0;
        }

        .gallery-slider figure p {
            letter-spacing: 1px;
            font-size: 68.5%;
        }

        .gallery-section {
        background-color: #99ccff;
        }

        .gallery-section .title {
        padding-right: 13px;
        margin-bottom: 80px;
        }

        /*---------------*/
        /***** Julia *****/
        /*---------------*/

        figure.effect-julia {
            background: #2f3238;
        }

        figure.effect-julia img {
            -webkit-transition: opacity 1s, -webkit-transform 1s;
            transition: opacity 1s, transform 1s;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        figure.effect-julia figcaption {
            display: flex;
        align-items: center;
        }

        figure.effect-julia h2 {
            position: relative;
            padding: 0.5em 0;
        }

        figure.effect-julia p {
            display: inline-block;
            margin: 0 0 0.25em;
            padding: 0.4em 1em;
            background: rgba(255,255,255,0.9);
            color: #2f3238;
            text-transform: none;
            font-weight: 500;
            font-size: 75%;
            -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
            transition: opacity 0.35s, transform 0.35s;
            -webkit-transform: translate3d(-360px,0,0);
            transform: translate3d(-360px,0,0);
        }

        figure.effect-julia p:first-child {
            -webkit-transition-delay: 0.15s;
            transition-delay: 0.15s;
        }

        figure.effect-julia p:nth-of-type(2) {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        figure.effect-julia p:nth-of-type(3) {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
        }

        figure.effect-julia:hover p:first-child {
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
        }

        figure.effect-julia:hover p:nth-of-type(2) {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
        }

        figure.effect-julia:hover p:nth-of-type(3) {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        figure.effect-julia:hover img {
            opacity: 0.4;
            -webkit-transform: scale3d(1.1,1.1,1);
            transform: scale3d(1.1,1.1,1);
        }

        figure.effect-julia:hover p {
            opacity: 1;
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }

        @media (max-width: 767px) {
        .gallery-section .title { margin-bottom: 40px; }
        }

        .gallery-section .title h2 { color: #006699; }
        .gallery-section .slick-list { margin-bottom: 40px; }

        .gallery-section .item {
        text-align: center;
        margin: 5px;
        }

        .gallery-section .slick-dots {
        position: unset;
        bottom: 0;
        }

        .gallery-section .slick-dots li {
        background-color: #6699cc;
        width: 20px;
        height: 20px;
        border-radius: 100%;
        margin: 0 10px;
        transition: all 0.3s ease;
        }

        .gallery-section .slick-dots li.slick-active,
        .gallery-section .slick-dots li:hover {
        background-color: #006699;
        }

        .gallery-section .slick-dots li button { display: none; }

        .contact-section {
        background-color: #6699cc;
        flex-direction: column;
        justify-content: center;
        }

        .contact-section .title { margin-bottom: 50px; }

        .contact-section .title h3 {
        color: #fff;
        font-size: 34px;
        }

        .contact-section .contact-form .form-group { margin-bottom: 24px; }
        .tm-contact-item-inner { max-width: 360px; }
        .tm-contact-item-inner-2 { max-width: 330px; }

        .tm-contact-item-inner,
        .tm-contact-item-inner-2 {
        margin-left: auto;
        margin-right: auto;
        }

        @media (max-width: 767px) {
        .contact-section .contact-details { margin-bottom: 30px; }
        }

        .contact-section .contact-details p {
        color: #fff;
        line-height: 31px;
        margin-bottom: 38px;
        }

        .contact-section .contact-details ul {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
        }

        .contact-section .contact-details ul li {
        color: #fff;
        margin-bottom: 4px;
        }

        .contact-section .contact-details ul li .icn {
        margin-right: 10px;
        display: inline-block;
        width: 30px;
        text-align: center;
        }

        .contact-section .contact-details ul li .lbl {
        display: inline-block;
        max-width: 55px;
        width: 100%;
        }

        .contact-section .contact-details ul li a {
        color: #fff;
        text-decoration: none;
        }

        .contact-section .contact-details ul li a:hover { color: #99ccff; }
        .contact-section .map { text-align: center; }

        .map-outer{
        position:relative;
        height:400px;
        width:100%;
        }

        .gmap-canvas {
        overflow:hidden;
        background:none!important;
        height:400px;
        width:100%;
        }

        /* <<< footer >>> */
        .footer {
        position: relative;
        background-color: #6699cc;
        color: #fff;
        padding-top: 15px;
        padding-bottom: 15px;
        position: static;
        margin-top: 30px;
        /* <<< Dummy Side >>> */
        }

        @media (min-height: 600px){  
        .contact-section { position: relative; }

        .footer {
            position: absolute;
            bottom: 0;
            left: 60px;
        }
        }

        @media (max-width: 1300px) {
        .contact-section {
            height: auto;
            min-height: 100vh;
            padding-top: 50px;
        }

        .contact-form,
        .contact-details {
            width: 50%;
        }

        .map { width: 100%; }
        }

        .container {
        padding-left: 50px;
        padding-right: 50px;
        }
        .container-2 { max-width: 1250px; }

        @media (max-width: 1800px) {
        .footer { left: 15px; }
        .container-2 { max-width: 1150px; }
        }

        @media (max-width: 1733px) {
        .footer {
            left: 0;
            padding-top: 30px;
        }
        }

        .parallax-window { background: transparent; }

        @media (max-width: 991px) {
        .section {
            height: auto;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .banner-section { padding-top: 0; }
        .contact-section { padding-bottom: 0; }
        }

        @media (max-width: 620px) {
        .contact-form, .contact-details { width: 100%; }

        .contact-details { margin-bottom: 50px!important; }
        }
    </style>
</head>

<body>
    <div id="outer">
        <header class="header order-last" id="tm-header">
            <nav class="navbar">
                <div class="collapse navbar-collapse single-page-nav">
                    <ul class="navbar-nav">
                    <li>
                                                
                                                @auth('web')
                                                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                                                @else
                                                    <a href="{{ route('login') }}">Log in</a>
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}">Register</a>
                                                    @endif
                                                @endauth
                                            
                                            </li>
                                                <li>
                                                    
                                                
                                                @auth('admin')
                                                    <a href="{{ url('/admin/dashboard') }}">Admin Dashboard</a>
                                                @else
                                                    <a href="{{ route('admin.login') }}">Admin Log in</a>
                                                    @if (Route::has('admin.register'))
                                                        <a href="{{ route('admin.register') }}">Admin Register</a>
                                                    @endif
                                                @endauth
                                            
                                            
                                            </li>
                                                <li>
                                                    
                                                @auth('university')
                                                    <a href="{{ url('/university/dashboard') }}">University Dashboard</a>
                                                @else
                                                    <a href="{{ route('university.login') }}">University Log in</a>
                                                    @if (Route::has('university.register'))
                                                        <a href="{{ route('university.register') }}">University Register</a>
                                                    @endif
                                                @endauth
    
                                                </i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="404.html">404 Error</a></li>
                                                    </ul>
                                                </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <button class="navbar-button collapsed" type="button">
            <span class="menu_icon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </span>
        </button>
        
        <main id="content-box" class="order-first">
            <div class="banner-section section parallax-window" data-parallax="scroll" data-image-src="resources/img/section-1-bg.jpg" id="section-1">
                <div class="container">
                    <div class="item">
                        <div class="bg-blue-transparent logo-fa"><span><i class="fas fa-2x fa-atom"></i></span> Simply Amazed</div>
                        <div class="bg-blue-transparent simple"><p>!</p></div>
                    </div>
                </div>
            </div>
        
            <section class="work-section section" id="section-2">
                <div class="container">
                    <div class="row">
                        <div class="item col-md-4">
                            <div class="tm-work-item-inner">
                                <div class="icn"><i class="fas fa-2x fa-icons"></i></div>
                                <h3>.Nous avons besoins de vous !</h3>
                                <p>Consulter et noter vos universitées préféré !</p>
                            </div>                        
                        </div>
                        <div class="item col-md-4 one">
                            <div class="tm-work-item-inner">
                                <div class="icn"><i class="fas fa-2x fa-tools"></i></div>
                                <h3>.satisfaction</h3>
                                <p>explorer chaque secteurs et trouver ce dont vous avez besoins</p>
                            </div>
                        </div>
                        <div class="item col-md-4 two">
                            <div class="tm-work-item-inner">
                                <div class="icn"><i class="fab fa-2x fa-phoenix-framework"></i></div>
                                <h3>.faites vous connaitres</h3>
                                <p>Universitées!! faites vous connaitres et augmentez votre notoriété !</p>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <h2>Nos services</h2>
                    </div>
                </div>
            </section>

            <section class="gallery-section section parallax-window" data-parallax="scroll" data-image-src="img/section-3-bg.jpg" id="section-3">
                <div class="container">
                    <div class="title text-right">
                        <h2>list des universitées</h2>
                    </div>
                    <div class="mx-auto gallery-slider">
                        @foreach(App\Models\University::all() as $university)
                            <figure class="effect-julia item">
                                <img src="{{ $university->image }}" alt="{{ $university->name }} Image">
                                <figcaption>
                                    <div>
                                        <p>{{ $university->name }}</p>
                                    </div>
                                    <a href="{{ route('university.dashboard', ['id' => $university->id]) }}">View more</a>
                                </figcaption>
                            </figure>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="contact-section section" id="section-4">
                <div class="container">
                    <div class="title">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 mb-4 contact-form">
                            <div class="form tm-contact-item-inner">
                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="textarea form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="submit" class="btn btn-primary" value="Send it">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 contact-details">
                            <div class="tm-contact-item-inner-2">
                                <p>Nam mollis felis elementum, placerat dolor id, vehicula libero. Etiam dui nisl, mattis ut rhoncus et, cursus ut diam.</p>
                                <ul class="font-weight-light">
                                    <li>
                                        <span class="icn"><i class="fas fa-mobile-alt"></i></span>
                                        <span class="lbl">Tel:</span> <a href="#">010-020-0340</a>
                                    </li>
                                    <li>
                                        <span class="icn"><i class="fas fa-at"></i></span>
                                        <span class="lbl">Email:</span> <a href="#">info@company.com</a>
                                    </li>
                                    <li>
                                        <span class="icn"><i class="fas fa-globe-asia"></i></span>
                                        <span class="lbl">URL:</span> <a href="#">www.company.com</a>
                                    </li>
                                </ul>
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-12 map">
                            <!-- Map -->
                            <div class="map-outer tm-mb-40">
                                <div class="gmap-canvas">
                                    <iframe width="100%" height="400" id="gmap-canvas"
                                        src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <footer class="footer container container-2">
                    <div class="row"> 
                        <p class="col-sm-7">Copyright UnivWorld-app.</p>
                    </div>
                </footer>
            </section>
        </main>
    </div>
    <script >

jQuery(document).ready(function() {
  "use strict";
    $('.gallery-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 3,
        autoplay: false,
        dots: true,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
    });
    
    $(".navbar-button").click(function(e){
        e.stopPropagation();
        $(".header").toggleClass("open");
        $(".navbar-button").toggleClass("collapsed");
    });

    function closeMenu() {
      $(".header").removeClass("open");
      $(".navbar-button").addClass("collapsed"); 
    }

    $(".navbar .navbar-nav > .nav-item > a.nav-link").click(function(e){
      e.stopPropagation();
      closeMenu();     
    });

    $("html").click(function(e) {
      closeMenu();
    });

    $('.single-page-nav').singlePageNav({
        filter: ':not(.external)',
        updateHash: true
    });
});


    </script>
</body>
</html>