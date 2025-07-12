<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/golden-title.ico') }}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rancho&display=swap" rel="stylesheet">
        <title>PETSGOLDEN</title>
        <style>

            body {
            font-family: poppins;
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

            .animation-slide {
            display: flex;
            width: max-content;
            animation: slide-left linear infinite;
            animation-duration: var(--slide-duration, 300s);
            }

            

            @keyframes slide-right {
            0% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(0);
            }
            }

            .animation-slide2 {
            display: flex;
            width: max-content;
            animation: slide-right linear infinite;
            animation-duration: var(--slide-duration, 300s);
            }

            .testi-wrapper {
            overflow: hidden;
            position: relative;
            width: 100%;
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