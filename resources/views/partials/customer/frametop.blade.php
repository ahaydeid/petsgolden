<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/golden-title.ico') }}"/>
        <title>PETSGOLDEN</title>
        <style>

            body {
            position: relative;
            margin: 0;
            z-index: 0;
            }

            body::before {
            content: "";
            background-image: url('{{ asset('assets/img/bgbody.jpg') }}');
            background-position: center;
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            opacity: 0.02;
            z-index: -1;
            }

            @keyframes slide-left {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
            }

            .testi-wrapper {
            overflow: hidden;
            position: relative;
            width: 100%;
            }

            .animation-slide {
            display: flex;
            width: max-content;
            animation: slide-left 30s linear infinite;
            }
            .card-testimoni {
            flex: 0 0 auto;
            padding: 18px;
            height: 135px;
            width: 650px;
            background-color: white;
            box-shadow: 0px 2px 4px rgba(0,0,0,0.75);
            border-radius: 100px 20px 20px 100px;
            margin-left: 1.5rem;
            display: flex;
            }
        </style>


    </head>
    <body>