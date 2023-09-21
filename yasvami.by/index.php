<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Психолог рядом с Вами</title>
    <link rel="shortcut icon" href="./img/icons/favicon.ico" type="image/x-icon">
    <script src="./script/wrapper.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/mobile.css">
    <link rel="stylesheet" href="./style/wrapper.css">
    <script src="./script/itc-slider.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
          // инициализация слайдера
          var slider = new ItcSimpleSlider('.itcss', {
            loop: true,
            autoplay: true,
            swipe: true
          });
        });
      </script>
</head>
<body class="body_hide">
    <div w3-include-html="./pages/wrapper/header.php"></div>
    <main>
        <article class="site-info">
            <img src="./img/photo/Hanna04.png" alt="Моё фото" class="my-photo" id="me">

            <section class="psy-info">
                <!-- <h1 class="site-name">Психолог рядом с Вами</h1> -->
                <p class="information" id="info">
                    Я профессиональный психолог и моя цель - помочь Вам в кризисах, сложных жизненных ситуациях, ситуациях неопределенности и неустойчивости психоэмоциональных состояний.  
                    <br><br>Искренне надеюсь, что наше взаимодействие позволит Вам понять и принять себя, и, если потребуется, изменить свою жизнь в лучшую сторону.
                </p>

                <ul class="check-list">
                    <li class="check-item">
                        <img src="./img/icons/check-orange.svg" alt="">
                        Индивидуальные консультации
                    </li>
                    <li class="check-item">
                        <img src="./img/icons/check-orange.svg" alt="">
                        Семейные консультации
                    </li>
                    <li class="check-item">
                        <img src="./img/icons/check-orange.svg" alt="">
                        Онлайн и очный формат встреч
                    </li>
                    <li class="check-item">
                        <img src="./img/icons/check-orange.svg" alt="">
                        Интегративный подход в работе с клиентами
                    </li>
                </ul>

                <div class="btns">
                    <button id="consultation" class="green-btn btn link-btn">Получить консультацию</button>
                    <a href="./pages/about.php" id="aboutBtn" class="link-btn orange-btn btn test-btn none">Узнать больше</a>
                    <a href="./index.php#help" class="link-btn orange-btn btn test-btn hide">Узнать больше</a>
                </div>
            </section>
        </article>

        <div id="help"></div>

        <div class="main-container element-animation hide">
                <article class="container-title">
                    <h2 class="container-name orange">Чем я могу Вам помочь</h2>
                    <p class="container-description">Я провожу консультации по следующим вопросам:</p>
                </article>
                <article class="offers">
                <section class="offer">
                    <img src="./img/help/depression.svg" class="offer-img" alt="">
                    <h3 class="offer-name">Внутренние конфликты</h3>
                    <p class="container-description">Помощь в осознании собственных мотивов, порой противоречивых, с целью дальнейшей реализации своих потребностей</p>
                </section>
                <section class="offer">
                    <img src="./img/help/conflicting.svg" class="offer-img" alt="">
                    <h3 class="offer-name">Кризисы</h3>
                    <p class="container-description">Помощь в преодолении кризисов личности или кризисов семейной структуры</p>
                </section>
                <section class="offer">
                    <img src="./img/help/feelings.svg" class="offer-img" alt="">
                    <h3 class="offer-name">Отношения</h3>
                    <p class="container-description">Осознание себя как личности, участвующей в системе межличностных связей (макро и микро социум) и создание наиболее продуктивных форм взаимодействия в них</p>
                </section>
                <section class="offer">
                    <img src="./img/help/relaxation.svg" class="offer-img" alt="">
                    <h3 class="offer-name">Стрессовые ситуации</h3>
                    <p class="container-description">Помощь в формировании  опыта преодоления ситуаций, вызывающих затруднения</p>
                </section>
                <section class="offer">
                    <img src="./img/help/meditation.svg" class="offer-img" alt="">
                    <h3 class="offer-name">Эмоции и чувства</h3>
                    <p class="container-description">Помощь в саморегуляции <br> «не удобных» психоэмоциональных состояний  и осознания их первопричин</p>
                </section>
            </article>
        </div>

        <div class="main-container element-animation none">
            <article class="container-title">
                <h2 class="container-name orange">Чем я могу Вам помочь</h2>
                <p class="container-description">Я провожу консультации по следующим вопросам:</p>
            </article>
            
            <div class="itc-slider test-slider" data-autoplay="true" data-interval="7000" data-loop="true" data-slider="itc-slider">
                <div class="itc-slider-wrapper">
                    <div class="itc-slider-items offer-slider-items">

                        <section class="itc-slider-item offer-slider-item">
                            <img src="./img/help/depression.svg" class="offer-img" alt="">
                            <h3 class="offer-name">Внутренние конфликты</h3>
                            <p class="container-description">Помощь в осознании собственных мотивов, порой противоречивых, с целью дальнейшей реализации своих потребностей</p>
                        </section>

                        <section class="itc-slider-item offer-slider-item">
                            <img src="./img/help/conflicting.svg" class="offer-img" alt="">
                            <h3 class="offer-name">Кризисы</h3>
                            <p class="container-description">Помощь в преодолении кризисов личности или кризисов семейной структуры</p>
                        </section>

                        <section class="itc-slider-item offer-slider-item">
                            <img src="./img/help/feelings.svg" class="offer-img" alt="">
                            <h3 class="offer-name">Отношения</h3>
                            <p class="container-description">Осознание себя как личности, участвующей в системе межличностных связей (макро и микро социум) и создание наиболее продуктивных форм взаимодействия в них</p>
                        </section>

                        <section class="itc-slider-item offer-slider-item">
                            <img src="./img/help/relaxation.svg" class="offer-img" alt="">
                            <h3 class="offer-name">Стрессовые ситуации</h3>
                            <p class="container-description">Помощь в формировании  опыта преодоления ситуаций, вызывающих затруднения</p>
                        </section>

                        <section class="itc-slider-item offer-slider-item">
                            <img src="./img/help/meditation.svg" class="offer-img" alt="">
                            <h3 class="offer-name">Эмоции и чувства</h3>
                            <p class="container-description">Помощь в саморегуляции <br> «не удобных» психоэмоциональных состояний  и осознания их первопричин</p>
                        </section>
                    </div>
                    <i class="itc-slider-btn itc-slider-btn-prev fa-solid fa-angle-left"></i>
                    <i class="itc-slider-btn itc-slider-btn-next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>

        <div class="main-container element-animation inherit-fill">
            <h2 class="container-name green">Обучающие курсы и курсы повышения квалификации</h2>
            <div class="itc-slider" data-autoplay="true" data-interval="7000" data-loop="true" data-slider="itc-slider">
                <div class="itc-slider-wrapper">
                    <div class="itc-slider-items">
                        <img src="./img/diplomas/art_therapy.webp" alt="" class="itc-slider-item" onclick="openModal();currentSlide(1)"> 
                        <img src="./img/diplomas/art_therapy_02.webp" alt="" class="itc-slider-item" onclick="openModal();currentSlide(2)">
                        <img src="./img/diplomas/centr_metafora.webp" alt="" class="itc-slider-item" onclick="openModal();currentSlide(3)">
                        <img src="./img/diplomas/Cognitive_therapy.webp" alt="" class="itc-slider-item" onclick="openModal();currentSlide(4)">
                        <img src="./img/diplomas/fairytale_therapy.webp" alt="" class="itc-slider-item" onclick="openModal();currentSlide(5)">
                        <img src="img/diplomas/Positive_psychology.webp" alt="" class="itc-slider-item" onclick="openModal();currentSlide(6)">
                        <img src="./img/diplomas/Lomonosow_MGU.webp" alt="" class="itc-slider-item" onclick="openModal();currentSlide(7)">
                        <img src="img/diplomas/Psyhological_first_aid.webp" alt="" class="itc-slider-item" onclick="openModal();currentSlide(8)">
                        <img src="./img/diplomas/sport_support.webp" alt="" class="itc-slider-item" onclick="openModal();currentSlide(9)">
                    </div>
                    <i class="itc-slider-btn itc-slider-btn-prev fa-solid fa-angle-left"></i>
                    <i class="itc-slider-btn itc-slider-btn-next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal0">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

            <figure class="mySlides">
                <img src="./img/diplomas/art_therapy.webp" style="width:100%">
                <figcaption>"Healing with the Arts"</figcaption>
            </figure>
        
            <figure class="mySlides">
                <img src="./img/diplomas/art_therapy_02.webp" style="width:100%">
                <figcaption>"Art Therapy Course"</figcaption>
            </figure>

            <figure class="mySlides">
                <img src="./img/diplomas/centr_metafora.webp" style="width:100%">
                <figcaption>"Практические методы в работе с психологической травмой"</figcaption>
            </figure>

            <figure class="mySlides">
                <img src="./img/diplomas/Cognitive_therapy.webp" style="width:100%">
                <figcaption>"Когнитивно-поведенческая терапия"</figcaption>
            </figure>

            <figure class="mySlides">
                <img src="./img/diplomas/fairytale_therapy.webp" style="width:100%">
                <figcaption>"Прикладная сказкотерапия..."</figcaption>
            </figure>
        
            <figure class="mySlides">
                <img src="./img/diplomas/Positive_psychology.webp" style="width:100%">
                <figcaption>"Positive Psychology"</figcaption>
            </figure>
        
            <figure class="mySlides">
                <img src="./img/diplomas/Lomonosow_MGU.webp" style="width:100%">
                <figcaption>"Нейрофизиология поведения"</figcaption>
            </figure>
        
            <figure class="mySlides">
                <img src="./img/diplomas/Psyhological_first_aid.webp" style="width:100%">
                <figcaption>"Psychological First Aid"</figcaption>
            </figure>
        
            <figure class="mySlides">
                <img src="./img/diplomas/sport_support.webp" style="width:100%">
                <figcaption>"Психологическое сопровождение юных спортсменов"</figcaption>
            </figure>
        
            </div>
            <a class="left" onclick="plusSlides(-1)">&#10094;</a>
            <a class="right" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="main-container element-animation">
            <h2 class="container-name orange">Участие в профессиональных конференциях</h2>
            <div class="itc-slider" data-autoplay="true" data-interval="7000" data-loop="true" data-slider="itc-slider">
                <div class="itc-slider-wrapper">
                <div class="itc-slider-items">           
                    <img src="./img/conferentions/FUN-sertificate.webp" alt="" class="itc-slider-item" onclick="openModal01();currentSlide01(1)">
                    <img src="./img/conferentions/metafora-conferention.webp" alt="" class="itc-slider-item" onclick="openModal01();currentSlide01(2)">
                    <img src="./img/conferentions/mgafk.webp" alt="" class="itc-slider-item" onclick="openModal01();currentSlide01(3)">
                    <img src="./img/conferentions/pre-cbt-forum.webp" alt="" class="itc-slider-item" onclick="openModal01();currentSlide01(4)">
                    <img src="./img/conferentions/sport-psychology-seminar.webp" alt="" class="itc-slider-item" onclick="openModal01();currentSlide01(5)">
                    <img src="./img/conferentions/suicide-conferention.webp" alt="" class="itc-slider-item" onclick="openModal01();currentSlide01(6)">
                </div>
                <i class="itc-slider-btn itc-slider-btn-prev fa-solid fa-angle-left"></i>
                <i class="itc-slider-btn itc-slider-btn-next fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>

        <div id="myModal01" class="modal01">
            <span class="close cursor" onclick="closeModal01()">&times;</span>
            <div class="modal-content01">
            <figure class="mySlides01">
                <img src="./img/conferentions/FUN-sertificate.webp" style="width:100%">
                <figcaption>"Семинар по спортивной психологии"</figcaption>
            </figure>

            <figure class="mySlides01">
                <img src="./img/conferentions/metafora-conferention.webp" style="width:70%" class="centered">
                <figcaption>"Практические методы в работе с психологической травмой"</figcaption>
            </figure>

            <figure class="mySlides01">
                <img src="./img/conferentions/mgafk.webp" style="width:100%">
                <figcaption>"Психолого-педагогическое обеспечение спортсменов"</figcaption>
            </figure>

            <figure class="mySlides01">
                <img src="./img/conferentions/pre-cbt-forum.webp" style="width:100%">
                <figcaption>"Онлайн-форум для специалистов в области КПТ"</figcaption>
            </figure>

            <figure class="mySlides01">
                <img src="./img/conferentions/sport-psychology-seminar.webp" style="width:100%">
                <figcaption>"Семинар по спортивной психологии"</figcaption>
            </figure>
            <figure class="mySlides01">
                <img src="./img/conferentions/suicide-conferention.webp" style="width:100%">
                <figcaption>"Сцицидология - актуальные пробелмы, вызовы и современные решения"</figcaption>
            </figure>
            </div>
            <a class="left" onclick="plusSlides01(-1)">&#10094;</a>
            <a class="right" onclick="plusSlides01(1)">&#10095;</a>
        </div>

        <div class="main-container inherit-fill">
            <h2 class="container-name green element-animation">Стоимость консультаций</h2>
            <article class="consultations">    
                <div class="consultation element-animation">
                    <h2 class="consultation-name offer-name green">Индивидуальная</h2>
                    <img src="./img/personal-therapy-orange-02.png" class="price-img" alt="">
                    <h2 class="price green">50 руб.</h2>
                    <button id="personalConsultation" class="green-btn btn">Получить консультацию</button>
                </div>
                <div class="consultation element-animation">
                    <h2 class="consultation-name offer-name green">Семейная</h2>
                    <img src="./img/family-therapy-orange-02.png" class="price-img" alt="">
                    <h2 class="price green">60 руб.</h2>
                    <button id="familyConsultation" class="green-btn btn">Получить консультацию</button>
                </div>
            </article>
        </div>

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
                        <img src="./img/form/messaging-1-animate-green.svg" alt="" class="form-img error-img">
                    </fieldset>
                    </form>
                </div>
            </div>             
        </div>
        <a href="#" class="top element-animation"><i class="fa-solid fa-angle-up"></i></a>
    </main>
    <div w3-include-html="./pages/wrapper/footer.php"></div>
    <script src="./script/photos.js"></script>
    <script src="./script/script.js"></script>
    <script>includeHTML();</script>
</body>
</html>