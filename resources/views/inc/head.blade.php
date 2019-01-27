<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kil\'matic') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>        
        a,
        a:focus,
        a:hover {
            color: #fff;
        }

        /* Custom default button */
        .btn-default,
        .btn-default:hover,
        .btn-default:focus {
            color: #333;
            text-shadow: none; /* Prevent inheritence from `body` */
            background-color: #fff;
            border: 1px solid #fff;
        }

        /*
        * Base structure
        */

        html,
        body {
            min-height: 100%;
            background-color: rgba(51, 51, 51, 0.75);
            background-image: url('https://ik.imagekit.io/83dhckxhugrjz/hall_H13Q3ismV.jpg'); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; 
        }
        body {
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 3px rgba(0,0,0,.5);
        }

        /* Extra markup and styles for table-esque vertical and horizontal centering */
        .site-wrapper {
            display: table;
            width: 100%;
            background-color: rgba(51, 51, 51, 0.75);
            /*height: 100%; */
            /*min-height: 100%;*/
        }
        .site-wrapper-inner {
            display: table-cell;
            vertical-align: top;
        }
        .cover-container {
            margin-right: auto;
            margin-left: auto;
        }

        /* Padding for spacing */
        .inner {
            padding: 30px;
        }


        /*
        * Header
        */
        .masthead-brand {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .masthead-nav > li {
            display: inline-block;
        }
        .masthead-nav > li + li {
            margin-left: 20px;
        }
        .masthead-nav > li > a {
            padding-right: 0;
            padding-left: 0;
            font-size: 16px;
            font-weight: bold;
            color: #fff; /* IE8 proofing */
            color: rgba(255,255,255,.75);
            border-bottom: 2px solid transparent;
        }
        .masthead-nav > li > a:hover,
        .masthead-nav > li > a:focus {
            background-color: transparent;
            border-bottom-color: #a9a9a9;
            border-bottom-color: rgba(255,255,255,.25);
        }
        .masthead-nav > .active > a,
        .masthead-nav > .active > a:hover,
        .masthead-nav > .active > a:focus {
            color: #fff;
            border-bottom-color: #fff;
        }

        .logo_image {
            width: 3em;
            height: 3em;
        }

        @media (min-width: 768px) {
            .masthead-brand {
                float: left;
            }
            .masthead-nav {
                float: right;
            }
        }


        /*
        * Cover
        */

        .cover {
            padding: 0 20px;
        }
        .cover .btn-lg {
            padding: 10px 20px;
            font-weight: bold;
        }

        /*
        * Affix and center
        */

        @media (min-width: 768px) {
            /* Pull out the header and footer */
            .masthead {
                position: fixed;
                top: 0;
            }
            /* Start the vertical centering */
            .site-wrapper-inner {
                vertical-align: middle;
            }

        }

    </style>
</head>
<body>


    