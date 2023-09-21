<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Психолог рядом с Вами</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/wrapper.css">
    <link rel="shortcut icon" href="./img/icons/favicon.ico" type="image/x-icon">
    <script src="./script/wrapper.js"></script>
</head>
    
<body class="body_hide">
    <div w3-include-html="./pages/wrapper/header.php"></div>
    <main class="main" id="main">
        
        <article class="site-info element-animation" id="test-preview">
            <section class="psy-info">
                <h1 class="site-name">
                    Ваш запрос отправлен! 😊 
                    <br>
                    Скоро я свяжусь с Вами для уточнения времени и формата встречи! 
                </h1>
                    <a href="./index.php" class="green-btn btn" id="testBtn">На главную</a>
            </section>
                <img alt="Моё фото" class="test-photo" id="mailPhoto">
        </article>

    </main>
    <div w3-include-html="./pages/wrapper/footer.php"></div>
    <script>includeHTML();</script>
    <script src="./script/script.js"></script>
    <script>
        let imgs = ['img/mail/mail01-green.png', 
        'img/mail/mail01-orange.png', 
        'img/mail/mail02-green.png', 
        'img/mail/mail02-orange.png',
        'img/mail/mail03-green.png', 
        'img/mail/mail03-orange.png',
        'img/mail/mail04-green.png', 
        'img/mail/mail04-orange.png',
        'img/mail/mail05-green.png', 
        'img/mail/mail05-orange.png',
        'img/mail/mail06-green.png', 
        'img/mail/mail06-orange.png',
        'img/mail/mail07-green.png', 
        'img/mail/mail07-orange.png',
        'img/mail/mail08-green.png', 
        'img/mail/mail08-orange.png',
        'img/mail/mail09-green.png', 
        'img/mail/mail09-orange.png',
        'img/mail/mail010-green.png', 
        'img/mail/mail010-orange.png',
        'img/mail/mail011-green.png', 
        'img/mail/mail011-orange.png',
        'img/mail/mail012-green.png', 
        'img/mail/mail012-orange.png',
        'img/mail/mail013-green.png', 
        'img/mail/mail013-orange.png',
        'img/mail/mail014-green.png', 
        'img/mail/mail014-orange.png',
        'img/mail/mail015-green.png', 
        'img/mail/mail015-orange.png',
        'img/mail/mail016-green.png', 
        'img/mail/mail016-orange.png',
        'img/mail/mail017-green.png', 
        'img/mail/mail017-orange.png',
        'img/mail/mail018-green.png', 
        'img/mail/mail018-orange.png',
        'img/mail/mail019-green.png', 
        'img/mail/mail019-orange.png',
        'img/mail/mail020-green.png', 
        'img/mail/mail020-orange.png',
        'img/mail/mail021-green.png', 
        'img/mail/mail021-orange.png',
        'img/mail/mail022-green.png', 
        'img/mail/mail022-orange.png',
        'img/mail/mail023-green.png', 
        'img/mail/mail023-orange.png']; //   Добавьте свои картинки через запятую
        let i = Math.floor(Math.random() * imgs.length);
        let not__found = document.getElementById("mailPhoto");
        imgsrc('img/mail/'); // Первоначальное заполнение картинки
        not__found.window.onload = imgsrc;
        function imgsrc() {
            not__found.src = imgs[i]; // Увеличить индекс лучше потом
            if (++i === imgs.length) i = 0;
        }
    </script>
        <script src="./script/script.js"></script>
        <script>
            // window.history.replaceState({}, null, '/');
        </script>
</body>
</html>