<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Старница не найдена</title>
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
                    Кажется, мы забрели куда-то не туда! 
                    <br>
                    Давайте попробуем ещё раз!
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
        let imgs = ['img/error/error_0.png',
        'img/error/error_1.png',
        'img/error/error_2.png',
        'img/error/error_3.png',
        'img/error/error_4.png',
        'img/error/error_5.png']; //   Добавьте свои картинки через запятую
        let i = Math.floor(Math.random() * imgs.length);
        let not__found = document.getElementById("mailPhoto");
        imgsrc('img/error/'); // Первоначальное заполнение картинки
        not__found.window.onload = imgsrc;
        function imgsrc() {
            not__found.src = imgs[i]; // Увеличить индекс лучше потом
            if (++i === imgs.length) i = 0;
        }
    </script>
        <script>
            // window.history.replaceState({}, null, '/');
        </script>
</body>
</html>