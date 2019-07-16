<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
          integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/my.css') }}">
     <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Katya Perrot</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="social-icons">
                <a href="#" class="social-icons-unit social-icons-unit1"></a>
                <a href="#" class="social-icons-unit social-icons-unit2"></a>
                <a href="#" class="social-icons-unit social-icons-unit3"></a>
                <a href="#" class="social-icons-unit social-icons-unit4"></a>
            </div> 
            <div class="clear-fix"></div>
            <img src="/site_img/logo.png" class="header-logo">
        </header>
        <footer>
             <form  action="{{ route('login') }}" method="post" role="form" class="form">
                <div class="form-title">Вход и покупка</div>
                {{ csrf_field() }}
                <div class="form-item">
                    <div class="form-label">Ваша почта</div>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @if($errors->has('email'))  <div class="validate-error">{{ $errors->first('email') }}</div> @endif
                </div>
                 <div class="form-item">
                    <div class="form-label">Ваш пароль</div>
                    <input type="password" class="form-control" id="password" name="password">
                    @if($errors->has('password'))  <div class="validate-error">{{ $errors->first('password') }}</div> @endif
                </div>
                <div class="form-group">
                    <a  href="/password/reset" class="validate-error">Восстановить пароль по email</a>
                    <a  href="{{route('before_buy')}}" class="validate-error">Регистрация и покупка</a>
                 </div>
                <button type="submit" class="btn-submit">Войти и купить</button>    
            </form>
        </footer>
    </div>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>

