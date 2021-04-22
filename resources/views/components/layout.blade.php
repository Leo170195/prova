<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>
        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <livewire:styles />
        <!-- Alpine  -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
       <!-- tags script --> 
        <script src="https://unpkg.com/taggle/src/taggle.js"></script>
        <style>
            body {
                font-family: 'Nunito';
            }
            .margin{
                margin: 100px;
                margin-left: 500px;
            }
            table, th, td {
                border: 1px solid black;
                text-align: center;
            }
            input{
                margin-bottom: 50px;
            }
            .freccia{
                height: 80px;
                weight: 80px;
            }


            /* tag */

            .textarea {
            width: 100%;
            height: 300px;
            border: 1px solid red;
            padding: 8px;
            }

            .taggle_list {
            padding: 0;
            margin: 0;
            line-height: 2.5;
            width: 100%;
            }

            .taggle_input {
            border: none;
            outline: none;
            font-size: 16px;
            font-weight: 300;
            }

            .taggle_list li {
            display: inline;
            vertical-align: baseline;
            white-space: nowrap;
            font-weight: 500;
            margin-bottom: 5px;
            }

            .taggle_list .taggle {
            margin-right: 8px;
            background: #E2E1DF;
            padding: 5px 10px;
            border-radius: 3px;
            position: relative;
            cursor: pointer;
            transition: all .3s;
            -webkit-animation-duration: 1s;
                    animation-duration: 1s;
            -webkit-animation-fill-mode: both;
                    animation-fill-mode: both;
            }

            .taggle_list .taggle_hot {
            background: #cac8c4;
            }

            .taggle_list .taggle .close {
            font-size: 1.1rem;
            position: absolute;
            top: 10px;
            right: 3px;
            text-decoration: none;
            padding: 0;
            line-height: 0.5;
            color: #ccc;
            color: rgba(0, 0, 0, 0.2);
            padding-bottom: 4px;
            display: inline-block;
            opacity: 0;
            pointer-events: none;
            border: 0;
            background: none;
            cursor: pointer;
            }

            .taggle_list .taggle:hover {
            padding: 5px;
            padding-right: 15px;
            background: #ccc;
            transition: all .3s;
            }

            .taggle_list .taggle:hover > .close {
            opacity: 1;
            pointer-events: auto;
            }

            .taggle_list .taggle .close:hover {
            color: #990033;
            }

            .taggle_placeholder {
            position: absolute;
            color: #CCC;
            top: 24px;
            left: 16px;
            transition: opacity, .25s;
            -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                    user-select: none;
            }

            .taggle_input {
            padding: 8px;
            padding-left: 0;
            margin-top: -5px;
            background: none;
            max-width: 100%;
            }

            .taggle_sizer {
            padding: 0;
            margin: 0;
            position: absolute;
            top: -500px;
            z-index: -1;
            visibility: hidden;
            }
        </style>
    </head>
    <body class="mt-5 bg-warning">

        {{ $slot }}

        <livewire:scripts />
        {{-- bootstrap --}}
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
