<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DUNYO.INFO | SIGN IN TO ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .body-content{
            background-color:#f9f9f9;
            height: 100%;
            width: 100%;
            position: absolute;
        }
        .body-content .wrapper{
            border-radius: 5px;
            background-color: #ffffff;
            margin: 10em auto;
            padding-top: 7px;
            max-width: 50em;
            height: 20.5em;
            box-shadow: 0 0 20px 1px grey;
        }
        .user-avatar{
            background: url("../../../backend/img/admin-icon.png") center;
            border: 2px solid grey;
            border-radius: 50%;
            width: 12em;
            height: 12em;
            margin: 2em auto;
        }
    </style>
</head>
<body>
    <div id="app" class="body-content">
        <div class="container">
            <div class="wrapper">
                <div class="user-avatar"></div>
                <form method="POST" action="{{ route('login') }}" class="px-5">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <img src="{{ asset('backend/img/user.png') }}" style="width: 23px; padding:0" alt="" srcset="">
                                </span>
                            </div>
                            <input type="text" name="email" class="form-control  shadow-none  @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" autocomplete="email">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <img src="{{ asset('backend/img/pwd.png') }}" style="width: 23px; padding:0" alt="" srcset="">
                                </span>
                            </div>
                            <input type="password" name="password" class="form-control  shadow-none  @error('password') is-invalid @enderror" placeholder="Password" autocomplete="current-password">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text">Отправить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
