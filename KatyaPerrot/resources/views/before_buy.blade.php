<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('robots')
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
             <form action="/buy" method="post" role="form" class="form">
                <div class="form-title">Покупка</div>
                {{ csrf_field() }}
                <div class="form-item">
                    <div class="form-label">Ваш логин</div>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @if($errors->has('name'))  <div class="validate-error">{{ $errors->first('name') }}</div> @endif
                </div>
                <div class="form-item">
                    <div class="form-label">Ваша почта</div>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @if($errors->has('email'))  <div class="validate-error">{{ $errors->first('email') }}</div> @endif
                </div>
                <div class="form-group" id="captcha-wrap">
                    <img src="{{ captcha_src('flat') }}" alt="captcha" class="captcha-img" data-refresh-config="flat">
                    <div class="captcha-refresh" href="#" id="refresh"><img src="{{ asset('site_img/captcha_refresh.png') }}"  class="captcha-refresh"></div>
                </div>
                <div class="form-item">
                    <div class="form-label">Подтверждение</div>
                    <input class="form-control" type="text" name="captcha"/>
                    @if($errors->has('captcha'))  <div class="validate-error">{{ $errors->first('captcha') }}</div> @endif
                </div>
                <button type="submit" class="btn-submit">Купить</button>    
            </form>
        </footer>
    </div>
<script src="{{ asset('/js/app.js') }}"></script>
<script>
    console.log('1');
    $('#refresh').on('click',function(){
        console.log('2');
        var captcha = $('img.captcha-img');
        var config = captcha.data('refresh-config');
        $.ajax({
            method: 'GET',
            url: '/get_captcha/' + config,
        }).done(function (response) {
            captcha.prop('src', response);
            console.log('3');
        });
    });
</script>
</body>
</html>