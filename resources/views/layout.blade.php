<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        
        .form-control {
            height: 41px;
            background: #f2f2f2;
            box-shadow: none !important;
            border: none;
        }
        .form-control:focus {
            background: #e2e2e2;
        }
        .form-control, .btn {        
            border-radius: 3px;
        }
        .signup-form {
            width: 400px;
            margin: 30px auto;
        }
        .signup-form form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .signup-form h2  {
            color: #333;
            font-weight: bold;
            margin-top: 0;
        }
        .signup-form hr  {
            margin: 0 -30px 20px;
        }    
        .signup-form .form-group {
            margin-bottom: 20px;
        }
        .signup-form input[type="checkbox"] {
            margin-top: 3px;
        }
        .signup-form .row div:first-child {
            padding-right: 10px;
        }
        .signup-form .row div:last-child {
            padding-left: 10px;
        }
        .signup-form .btn {        
            font-size: 16px;
            font-weight: bold;
            background: #3598dc;
            border: none;
            min-width: 140px;
        }
        .signup-form .btn:hover, .signup-form .btn:focus {
            background: #2389cd !important;
            outline: none;
        }
        .signup-form a {
            color: #fff;
            text-decoration: underline;
        }
        .signup-form a:hover {
            text-decoration: none;
        }
        .signup-form form a {
            color: #3598dc;
            text-decoration: none;
        }	
        .signup-form form a:hover {
            text-decoration: underline;
        }
        .signup-form .hint-text  {
            padding-bottom: 15px;
            text-align: center;
        }
        </style>

    <title>@yield('title')</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        <div class="row">
            @yield('contents')
        </div>
    </div>
</body>
</html>
