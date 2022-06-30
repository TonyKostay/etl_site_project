<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.min.css">
    <script src="src/scripts/script.js"></script>
    <title>ETL</title>
</head>
<body>
    <header class="main-header">
        <div class="main-header__wrapper wrapper">
            <img class="main-header___logo" src="src/img/icons/logo.svg">
            <nav class="main-header__nav-bar">
                <div class="main-header__nav-mobile">
                    <img src="src/img/icons/menu-mobile.svg" alt="">
                </div>
                <ul class="main-header__nav-bar_items">
                    <li><img src="src/img/icons/phone-icon.svg" id='phoneIcon'><a href="tel:+78142332211">+7 800-555-35-35</a></li>
                    <li> <a href="">Преимущества</a></li>
                    <li><a href="">О продукте</a></li>
                    <li><a href="">Фото-портфолио</a></li>
                    <li><a href=""><button class='main-header__nav-bar-button button'>Написать в WhatsApp</button></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="mainScreen">
        <div class="mainScreen__wrapper wrapper">
            <div class="mainScreen__wrapper-content">
                <h1 class='mainScreen__header header'>Умная подсветка<br>лестницы Волгоград</h1>
                <p>Легкий монтаж на готовую лестницу</p>
                <a href=""><button class='mainScreen__button button'>Написать в WhatsApp</button></a>
            </div>
        </div>
    </div>
    <section class="advantages">
        <div class="advantages__wrapper wrapper">
            <div class="advantages__item" id="interface">
                <div class="advantages__item-desc">
                    <h3 class="advantages__item-subheader">Интерфейс</h3 >
                    <p>Основа системы, отвечает за настройки включения, работы и выключения подсветки. Задает время и интенсивность свечения</p>
                    <ul>
                        <li>Количество ступеней</li>
                        <li>Яркость общая</li>
                        <li>Яркость первой и последней ступеней</li>
                        <li>Время розжига</li>
                        <li>Время затухания</li>
                        <li>Ожидание подъема человека </li>
                        <li>Длина первой ступени </li>
                        <li>Длина последней ступени </li>
                        <li>увствительность датчика</li>
                    </ul>
                </div>
            </div>
            <div class="advantages__item">
                <div class="advantages__item-image" id="item-2"></div>
                <div class="advantages__item-desc">
                    <h3 class="advantages__item-subheader">Легкая настройка</h3>
                    <p>Настраивайте подсветку под себя с помощью любого смартфона — просто подключитесь к контроллеру по Wi-Fi</p>
                </div>
            </div>
            <div class="advantages__item">
                <div class="advantages__item-image" id="item-3"></div>
                <div class="advantages__item-desc">
                    <h3 class="advantages__item-subheader">Безопасность</h3>
                    <p>Система защищена от короткого замыкания, а все кабели и контроллер спрятаны вглубь лестницы от детей или домашних животных</p>
                </div>
            </div>
            <div class="advantages__item" id='instruction'>
                <div class="advantages__item-desc">
                    <h3 class="advantages__item-subheader">Инструкция</h3>
                    <p>Основа системы, отвечает за настройки включения, работы и выключения подсветки. Задает время и интенсивность свечения</p>
                    <a href=""><button class='advantages__item-button button'>Скачать инструкцию</button></a>
                </div>
            </div>
            <div class="advantages__item">
                <div class="advantages__item-image" id="item-5"></div>
                <div class="advantages__item-desc">
                    <h3 class="advantages__item-subheader">Автономная работа</h3>
                    <p>Подсветка загорается автоматически при вашем приближении, ее не нужно включать или выключать</p>
                </div>
            </div>
            <div class="advantages__item">
                <div class="advantages__item-image" id="item-6"></div>
                <div class="advantages__item-desc">
                    <h3 class="advantages__item-subheader">Монтаж за 1 час</h3>
                    <p>Подсветка ETL - это конструктор, который легко монтируется даже на готовую лестницу. Легко, безопасно и эстетично</p>
                </div>
            </div>
        </div>
    </section>
    <section class='about'>
        <div class="about__wrapper wrapper">
            <div class="about__description-wrapper">
                <h2>О продукте</h2>
                <p>Собственное производство.
                    Полный набор для быстрого, легкого и качественного монтажа.
                    Светильники пониженного энергопотребления, уже нанесён качественный 3М скотч, для надёжного крепежа на деревянные, стеклянные, пластиковые и прочие поверхности. Так же в комплекте имеются клипсы для крепления на бетонные поверхности.
                    Провода с коннекторами в комплекте.
                    Лента уже вклеена в алюминиевый профиль и распаяна проводами оснащенными коннекторами и закрыта рассеивателем.
                    Поддержка до 24 ступеней.
                    Настройка плавности работы подсветки.
                    Точка доступа прямо на контроллере.
                    Настройка по WiFi без приложений.
                    WiFi автоматически отключается через 30 минут (не загрязняет сеть лишней точкой доступа).
                    Автоотключение системы при наличии достаточного освещения (отключаемая функция).
                    Возможность долговременной работы от автономного источника питания, за счёт низкого энергопотребления.
                    Стильный дизайн, без видимых болтов\саморезов.
                </p>
                <p>Остерегайтесь подделок светодиодной ленты. Используйте только оригинальную ленту ETL</p>
            </div>
            <div class="about__video">
                <video autoplay muted loop controls >
                    <source src="src/video/etl.mp4" type="video/mp4" />
                </video>
            </div>
            
        </div>
    </section>
</body>
</html>