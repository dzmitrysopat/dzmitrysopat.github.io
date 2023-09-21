<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="shortcut icon" href="../img/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/wrapper.css">
    <link rel="stylesheet" href="../style/mobile.css">
    <script src="../script/wrapper.js"></script>
</head>
<body class="body_hide">
    <div w3-include-html="../pages/wrapper/header.php"></div>
    <main id="main" class="page-main">
    <div class="main-container header-container">
        <article class="page-header">
            <h1 class="page-title">Контакты</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb"><a href="../index.php">Главная</a></li>
                <li class="breadcrumb"></li>
            </ul>
        </article>
    </div>
    <article class="page-container contact-page element-animation">
        <section class="contact-cards">
            <div class="contact-card">
                <p class="information no-border">Телефон (Life):</p>
                <div class="contact-icons">
                    <img src="../img/icons/phone.svg" alt="">
                    <a href="https://viber.click/375296525073"><img src="../img/icons/viber.svg" alt=""></a>
                    <a href="https://t.me/Hannet_M"><img src="../img/icons/telegram.svg" alt=""></a>
                    <a href="https://wa.me/375296525073"><img src="../img/icons/whatsapp.svg" alt=""></a>
                </div>
                <a href="tel:+375296525073" class="orange contact-link">+375 (29) 652-50-73</a>
            </div>
            <div class="contact-card">
                <p class="information no-border">Email:</p>
                    <img src="../img/icons/mail.svg" alt="">
                <a href="mailto:snezhanna88@gmail.com" class="orange contact-link">snezhanna88@gmail.com</a>
            </div>
            <div class="contact-card">
                <p class="information no-border">Адрес консультаций:</p>
                    <img src="../img/icons/location.svg" alt="">
                <a href="https://yandex.by/maps/org/psikholog_manko_anna/103503798131/?ll=30.943396%2C52.420821&z=17" target="_blank" class="orange contact-link">г. Гомель, ул. Сосновая,18 каб. 6.2</a>
            </div>
            <div class="contact-card">
                <p class="information no-border">График консультаций:</p>
                    <img src="../img/icons/clock.svg" alt="">
                <a href="#" class="orange contact-link">По предварительной записи</a>
            </div>
        </section>
        <section class="map">
            <script type="text/javascript" class="map" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A67d1e092523e53c38dd1c98d154298ef7fa58b4ca3be46853dd99d27c06a4fbe&amp;width=600&amp;height=370&amp;lang=ru_RU&amp;scroll=true"></script>
        </section>
    </article>
    <button id="consultation" class="green-btn btn contact-btn element-animation">Получить консультацию</button>

    <div class="container">
        <div class="modal-wrapper" id="modalWrapper">
            <div class="modal">
                <button id="close-btn" class="close orange">&times;</button>
                <form action="https://formsubmit.co/d78ab57f4bc631a343e894d1dc4bbb76" method="POST">
                    <fieldset class="fieldset" id="fieldset">
                        <div class="input-section">
                        <section class="input__contact">
                            <label for="" style="padding: 0; background-color: inherit;">Ваше Имя:</label>
                            <input type="text" id="formName" name="Имя" class="text lil-input" placeholder="Как к вам обращаться" required>
                        </section>
                        <section class="input__contact">
                            <label for="" style="padding: 0; background-color: inherit;">Телефон для связи*:</label>
                            <input type="tel" id="formTel" name="Телефон" class="text lil-input" placeholder="Контактный номер" required>
                        </section>

                    <section class="input__contact">
                        <label for="" style="padding: 0; background-color: inherit;">Психологический запрос :</label>
                        <input type="text" id="formAbout" name="Психологический запрос" class="text" placeholder="Ваш вопрос (тема/проблема)" required>
                    </section>
    
                    <section class="input__contact">
                        <label for="" style="padding: 0; background-color: inherit;">Желаемое время и формат:</label>
                        <textarea class="text" id="formOptions" name="Желаемое время и формат:" placeholder="Индивидуальная/ семейная/ в паре/ групповая/ онлайн" cols="30" rows="10"></textarea>
                    </section>
    
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_next" value="https://dzmitrysopat.github.io/sent.php">
    
                    <button type="submit" id="consultation" class="green-btn btn form-btn">Отправить запрос</button>
                    </div>           
                    <img src="../img/form/messaging-1-animate-green.svg" alt="" class="form-img error-img">
                </fieldset>
                </form>
            </div>
        </div>             
    </div>
    </main>

    <div w3-include-html="../pages/wrapper/footer.php"></div>
    <script>includeHTML();</script>
    <script src="../script/script.js"></script>
</body>
</html>