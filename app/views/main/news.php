<?php
?>
<main>
    <article class="news_article">
        <!-- Заголовок -->
        <h1 class="title">
            Название новости: Заголовок, который привлекает внимание
        </h1>

        <!-- Мета-информация -->
        <div class="meta">
            <div class="item">
                <span class="category_badge">Технологии</span>
            </div>
            <div class="item">
                <i class="far fa-calendar-alt"></i>
                <time datetime="2026-08-22">22 августа 2026</time>
            </div>
            <div class="item">
                <i class="far fa-clock"></i>
                <span>15:30</span>
            </div>
            <div class="item">
                <i class="far fa-eye"></i>
                <span>1 234 просмотра</span>
            </div>
            <div class="item">
                <i class="far fa-comment"></i>
                <span>56 комментариев</span>
            </div>
        </div>

        <div class="image">
            <img src="" alt=" ">
        </div>

        <div class="content">
            <p class="lead">
                Вводный абзац (лид) — краткое описание самой важной информации новости.
                Он отвечает на главные вопросы: что, где, когда и почему это важно.
            </p>

            <p>
                Основной текст новости. Здесь раскрываются детали события, приводятся
                факты, цитаты и дополнительная информация. Текст структурируется на
                абзацы для удобства чтения.
            </p>

            <p>
                Второй абзац содержит более подробное описание события.
                Можно добавить цитаты экспертов или очевидцев.
            </p>

            <blockquote>
                <p>
                    «Это важное событие, которое повлияет на развитие отрасли
                    в ближайшие годы», — заявил представитель компании.
                </p>
            </blockquote>

            <p>
                Продолжение новости с дополнительными деталями.
                Здесь может быть статистика, исторический контекст или
                прогнозы развития ситуации.
            </p>

            <p>
                Заключительный абзац подводит итог или содержит информацию
                о том, где можно получить больше сведений.
            </p>
        </div>
    </article>

    <section class="comments">
        <h2 class="title">
            <i class="far fa-comment-dots"></i>
            Комментарии <span class="count">(56)</span>
        </h2>

        <!-- Форма добавления комментария -->
        <form class="form">
            <div class="avatar">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="body">
                <textarea
                        placeholder="Напишите ваш комментарий..."
                        rows="3"
                        class="input"
                ></textarea>
                <div class="actions">
                    <button type="submit" class="btn active">
                        <i class="fas fa-paper-plane"></i>
                        Отправить
                    </button>
                    <span class="hint">
                        <i class="fas fa-info-circle"></i>
                        Будьте вежливы и соблюдайте правила
                    </span>
                </div>
            </div>
        </form>

        <div class="list">
            <div class="comment">
                <div class="avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="body">
                    <div class="header">
                        <span class="author">Алексей Петров</span>
                        <span class="date">22 августа 2026, 14:30</span>
                    </div>
                    <p class="text">
                        Отличная статья! Очень интересно и познавательно.
                        Жду продолжения.
                    </p>

                </div>
            </div>
            <div class="comment">
                <div class="avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="body">
                    <div class="header">
                        <span class="author">Сергей Козлов</span>
                        <span class="date">22 августа 2026, 13:45</span>
                    </div>
                    <p class="text">
                        Интересная точка зрения. Хотелось бы больше подробностей
                        о практическом применении.
                    </p>

                </div>
            </div>
            <div class="comment">
                <div class="avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="body">
                    <div class="header">
                        <span class="author">Елена Смирнова</span>
                        <span class="date">22 августа 2026, 12:20</span>
                    </div>
                    <p class="text">
                        Спасибо за статью! Очень актуально в наше время.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>