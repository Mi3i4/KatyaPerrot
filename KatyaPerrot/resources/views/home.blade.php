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
                <a href="https://www.facebook.com/katyaperrottFITNESS/" class="social-icons-unit social-icons-unit1"></a>
                <a href="https://www.youtube.com/channel/UCYzrZTkPSPYpf8aSGBNYKhg" class="social-icons-unit social-icons-unit2"></a>
                <a href="https://instagram.com/perrott.fit" class="social-icons-unit social-icons-unit3"></a>
                <a href="#" class="social-icons-unit social-icons-unit4"></a>
            </div> 
            <div class="clear-fix"></div>
            <img src="/site_img/logo.png" class="header-logo">
            <div class="header-title header-title-first">
                Не жди Понедельника!<br>Начни сегодня!
            </div>
            <div class="header-title header-title-second">
                Хочешь трансформацию тела и сознания?<br>Присоединяйся к моей команде <a href="#">#FITWITH<wbr>PERROTT</a>
            </div>
            <div class="header-main row">
                <div class="header-main-first col-sm-12 col-md-6">
                    <img src="/site_img/header-photo.png" class="header-main-img" height="auto">
                </div>
                <div class="header-main-second col-sm-12 col-md-6">
                    <p>Любая диета не даст долгосрочного результата, а внимательное отношение к тому, что ты ешь должно стать образом жизни, такой же естественной вещью, как душ по утрам.</p>
                    <p> Поэтому мой подход основан на идее вдумчивого и сбалансированного питания без ограничений и страха срывов и переедания.</p>
                    <p> Только пройдя свой собственный путь от простых утренних пробежек и сложных диет до продуманных тренировок в зале и правильного питания я наконец поняла, сколько людей делает такие же ошибки. </p>
                    <p>Моя цель – помочь тебе найти баланс в питании и тренировках без вреда для здоровья, и жить более счастливой и полноценной жизнью.</p>
                </div>
            </div>
            <div class="header-slogan">
                <span>Моя цель – помочь</span>
                <span> тебе найти баланс</span>
                <span> в питании и</span><br>
                <span> тренировках</span>
                <span> без вреда</span>
                <span> для здоровья,</span>
                <span> и жить</span><br>
                <span> более счастливой</span>
                <span> и полно<wbr>ценной жизнью.</span>
            </div>
        </header>
        <main role="main">
            <article class="target-diets row">
                <div class="target-diets-first col-sm-12 col-md-6">
                    <p>Помнишь все эти диеты, где надо сутками сидеть на кефире и яблоке или жевать исключительно салат?</p>
                    <p>Дело в том, что мы отказываем себе в любимой еде и доводим организм до стресса такими голодовками, а потом срываемся и бросаем начатое.</p>
                    <p>Или же сидим на диете до конца, но как только возвращаемся к обычному питанию вес возвращается.</p>
                    <p> А может быть ты отрабатываешь любимую еду часами кардио?</p>
                    <p class="bright">Мой подход кардинально отличается!</p>
                    <p>Я хочу помочь тебе разорвать этот порочный круг и навсегда поменять твое пищевое поведение и вкусовые привычки.</p>
                </div>
                <div class="target-diets-second col-sm-12 col-md-6">
                    <img src="/site_img/diets.png" class="target-diets-img" height="auto">
                </div>
            </article>
            <article class="target-ideas row">
                <div class="target-ideas-first col-sm-12 col-md-6">
                    <img src="/site_img/ideas.jpg" class="target-ideas-img" height="auto">
                </div>
                <div class="target-ideas-second col-sm-12 col-md-6">
                     <p class="title">Вот что мы сделаем:</p>
                    <p>• научу тебя <span class="bright">грамотно сочетать продукты</span>, питаться вкусно, разнообразно и с пользой для организма.</p>
                    <p>• научу тебя тренироваться везде - где удобно тебе и тогда, когда удобно тебе. <span class="bright">Больше никаких оправданий!</span></p>
                    <p>• научу чувствовать себя и свое тело, <span class="bright">будешь нравиться себе</span> каждый раз смотрясь в зеркало!</p>
                    <p>• подарю тебе необходимый заряд энергии, который поможет продолжать тренироваться и идти к <span class="bright">телу твоей мечты.</span></p>
                    <p>• лично займусь процессом твоей трансформации и доведу тебя до результата <span class="bright">без вреда для твоего здоровья.</span></p>
                    <p class="title-big">Вот что мы сделаем:</p>
                    <p class="cursive">Помочь тебе чувствовать себя комфортно и уверенно в своем теле, без жестких диет, ограничений и риска для здоровья.</p>
                </div>
            </article>
            <article class="program21">
                <div class="program21-main row">
                    <div class="program21-first col-sm-12 col-md-6">
                        <img src="/site_img/program21-1.jpeg" class="program21-img" height="auto">
                    </div>

                    <div class="program21-second col-sm-12 col-md-6">
                        <p class="title">ПРОГРАММА “21 ДЕНЬ”</p>
                        <p>Если повторять какое-то действие в течение 21 дня, то это становится твоей привычкой.</p>
                        <p>Таким образом, правильно питаясь и тренируясь в течение 21 дня, ты выработаешь новые полезные привычки.</p>
                        <p>Для занятий по программе, нет необходимости в доступе к тренажерному залу.</p>
                        <p>Ты сможешь выполнять тренировки там, где удобно тебе – дома, на улице, в отпуске, в командировке.</p>
                        <p>Выполнив дополнительное задание, ты сможешь получить доступ к программе на дополнительные 21 день.</p>
                    </div>
                </div>
                <div class="program21-main row">
                    <div class="program21-third col-sm-12 col-md-6">
                        <p class="title">Что ты получишь?</p>
                        <p>• Доступ к видео – тренировкам в течение 21 дня</p>
                        <p>• 2 тренировки в день – одна на укрепление мышечного корсета, другая для интенсивного жиросжигания</p>
                        <p>• 6 тренировок в неделю по 25 минут – ты сама выбираешь, когда тебе тренироваться</p>
                        <p>• Меню с рецептами на 21 день</p>
                        <p>• Питание без расчета калорий</p>
                        <p>• Полезные статьи</p>
                        <p>• Индивидуальное сопровождение</p>
                        <p>• Еженедельные отчеты</p>
                        <p>• Общий чат для общения с другими участницами</p>
                        <p>• Мотивация каждый день</p>
                        <p class="title">Оборудование</p>
                        <p>• Фитнес резинки, утяжелители (гантели или бутылки с водой)</p>
                        <p class="title-big">СТОИМОСТЬ <span class="bright">1190 руб.</span></p>
                        <a href="#" class="button">Купить программу</a>
                    </div>
                    <div class="program21-fourth col-sm-12 col-md-6">
                        <img src="/site_img/program21-2.png" class="program21-img" height="auto">
                    </div>
                </div>
            </article>
            <article class="questions">
                <div class="questions-title-first questions-title">Остались вопросы?</div>
                <div class="questions-title-second questions-title">Возможно, ты найдешь ответы в этом разделе:</div>
                <div class="questions-main row">
                    <article class="questions-main-1 questions-main-item col-sm-12 col-md-6">
                        <div class="questions-main-title">Почему программа рассчитана на 21 день?</div>
                        <div class="questions-main-text">Если повторять какое-то действие в течение 21 дня, то это становится твоей привычкой. Таким образом, правильно питаясь и тренируясь в течение 21 дня, ты выработаешь новые полезные привычки.</div>
                    </article>
                    <article class="questions-main-2 questions-main-item col-sm-12 col-md-6">
                        <div class="questions-main-title">Нужен ли мне доступ в тренажерный зал?</div>
                        <div class="questions-main-text">Нет, в тренажерном зале нет необходимости, если у тебя нет к нему доступа. Ты сможешь выполнять тренировки там, где удобно тебе – дома, на улице, в отпуске, в командировке и тд.</div>
                    </article>
                    <article class="questions-main-3 questions-main-item col-sm-12 col-md-6">
                        <div class="questions-main-title">Смогу ли я питаться по меню, если я вегетарианец?</div>
                        <div class="questions-main-text">Да, я могу предоставить вариант вегетарианского меню по запросу.</div>
                    </article>
                    <article class="questions-main-4 questions-main-item col-sm-12 col-md-6">
                        <div class="questions-main-title">Действительно ли эта программа работает?</div>
                        <div class="questions-main-text">Я написала эту программу и занималась по ней лично. Увидев результат, я протестировала ее на нескольких фокус-группах и у всех участниц были отличные результаты – потеря веса, больше энергии, лучше сон, изменение пищевых привычек.</div>
                    </article>
                    <article class="questions-main-5 questions-main-item col-sm-12 col-md-6">
                        <div class="questions-main-title">Как долго у меня будет доступ к программе?</div>
                        <div class="questions-main-text">Доступ к курсу закроется по окончании курса. Чтобы получить бесплатный доступ на дополнительный месяц, необходимо выполнить задание.</div>
                    </article>
                </div>
                <div class="questions-title-third questions-title">Если у тебя еще остались вопросы:</div>
                <div class="questions-title-fourth questions-title">Пожалуйста, напиши мне <span class="bright">katya.perrott.<wbr>fitness@gmail.com</span> и я отвечу в ближайшее время.</div>
            </article>
            <article class="comments">
                <div class="comments-title">Отзывы тех, кто уже попробовал</div>
                
                
                
                <div id="carousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active row">
                        <div class="carousel-insight-1 col-sm-12 col-md-6"><div class="carousel-text-wrap"><div class="carousel-text"><p>...“ Привет всем, у меня за неделю минус 2.4, что-то маловато, но чувствую себя хорошо, стало легче. Есть хотелось, но не всегда.</p><p>Хочу придерживаться правильного питания и физических нагрузок, так как хочется достигнуть большего!</p><p>Катюша, огромное тебе спасибо! Мне очень понравился марафон!</p><p> Думаю, в следующих буду с самого начала!...”</p></div></div></div>
                        <div class="carousel-insight-2 col-sm-12 col-md-6"><div class="carousel-text-wrap"><div class="carousel-text">...” Я реально кайфую от того, что смогла лишние кг. Еще муж так же начал питаться, ему очень нравится! Времени не так много, что бы готовить на 2-х разное меню...”</div></div></div>
                    </div>
                    
                  </div>
                  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </article>
            <article class="results">
                <div class="results-title">Фотографии с результатами</div>
                <div id="carousel1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active row">
                        <div class="carousel-insight-1 col-sm-12 col-md-6">
                            <img src="/site_img/result1.png" class="carousel-img">
                        </div>
                        <div class="carousel-insight-2 col-sm-12 col-md-6">
                            <img src="/site_img/result2.jpeg" class="carousel-img">
                        </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </article>
            <article class="garantee">
                <div class="garantee-title">Ты готова увидеть <span class="bright">РЕАЛЬНЫЙ</span> результат?</div>
                <img src="/site_img/garantee.png" class="garantee-img">
                <div class="garantee-buy">
                    <div class="garantee-hr"></div>
                    <a href="#" class="garantee-button">Купить программу</a>
                    <div class="garantee-hr"></div>
                    <div class="clear-fix"></div>
                </div>
                <div class="garantee-social">
                    <a href="https://www.facebook.com/katyaperrottFITNESS/" class="garantee-social-unit garantee-social-unit1"></a>
                    <a href="https://www.youtube.com/channel/UCYzrZTkPSPYpf8aSGBNYKhg" class="garantee-social-unit garantee-social-unit2"></a>
                    <a href="https://instagram.com/perrott.fit" class="garantee-social-unit garantee-social-unit3"></a>
                    <a href="#" class="garantee-social-unit garantee-social-unit4"></a>
                </div> 
            </article>
        </main>


        <footer>
             <form action="#" method="get" role="form" class="form" id="form">
                <div class="form-title">Напиши мне</div>
                {{ csrf_field() }}
                <div class="form-item">
                    <div class="form-label">Ваше имя</div>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @if($errors->has('name'))  <div class="validate-error">{{ $errors->first('name') }}</div> @endif
                </div>
                <div class="form-item">
                    <div class="form-label">Ваша почта</div>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @if($errors->has('email'))  <div class="validate-error">{{ $errors->first('email') }}</div> @endif
                </div>
                <div class="form-item">
                    <div class="form-label">Ваш вопрос</div>
                    <textarea class="form-control" id="text" name="text" rows="6">{{ old('text') }}</textarea>
                    @if($errors->has('text'))  <div class="validate-error">{{ $errors->first('text') }}</div> @endif
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
                <button type="submit" class="btn-submit">Отправить</button>    
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