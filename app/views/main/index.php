<?php

/** @var array $sidebar */
/** @var string $role */
/** @var array $news */

?>

<main>
    <section class="no_news">
        <div class="no_news_content">
            <div class="no_news_icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <h2 class="no_news_title">Новостей пока нет</h2>
            <p class="no_news_description">
                На сайте еще нет опубликованных новостей.
            </p>
        </div>
    </section>
    <section class="news_page">
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">0</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">1</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости Заголовок новости Заголовок новости Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">2</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">5</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости Заголовок новости Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">11</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">21</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">32</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">43</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">50</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">55</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
        <article class="news">
            <a href="">
                <div class="img_wrapper">
                    <img src="" alt=" ">
                </div>
                <div class="info">
                    <h3>Заголовок новости</h3>
                    <span class="news_category">Категория</span>
                    <p class="news_time"><i class="far fa-clock"></i><span class="time">60</span></p>
                    <p class="news_comments"><i class="far fa-comment"></i>0</p>
                </div>
            </a>
        </article>
    </section>
</main>

<script>
    function getMinutesAgo(number) {
        if (number === 0) {
            return "Только что";
        }
        let minutesText = "";
        const num = number;
        if (num === 1) {
            minutesText = "Минуту назад";
        } else if (num === 2 || num === 3) {
            minutesText = `${number} минуты назад`;
        } else if ((num % 10 === 1 && !(num % 100 < 2))) {
            minutesText = `${number} минуту назад`;
        } else if ((num % 10 >= 2 && num % 10 <= 4)) {
            minutesText = `${number} минуты назад`;
        } else {
            minutesText = `${number} минут назад`;
        }
        return minutesText;
    }

    function processNewsTimes() {
        const timeElements = document.querySelectorAll('.time');

        if (timeElements.length === 0) {
            console.log("Элементы с классом .time не найдены.");
            return;
        }
        timeElements.forEach(element => {
            const numberStr = element.textContent.trim();

            if (!numberStr || isNaN(parseInt(numberStr))) {
                console.warn("Пропущено время, так как оно не является числом.", element);
                return;
            }
            const number = parseInt(numberStr);
            const resultText = getMinutesAgo(number);
            element.textContent = resultText;
        });
    }

    document.addEventListener('DOMContentLoaded', processNewsTimes);

</script>
