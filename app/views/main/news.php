<?php
/** @var array $news */
?>
<main>
    <article class="news_article">
        <!-- Заголовок -->
        <h1 class="title">
            <?= $news["title"]; ?>
        </h1>

        <!-- Мета-информация -->
        <div class="meta">
            <div class="item">
                <i class="far fa-calendar-alt"></i>
                <time datetime="2026-08-22"><?= date_create($news['create_at'])->format('d.M.Y') ?></time>
            </div>
        </div>

        <div class="image">
            <img src="" alt=" ">
        </div>

        <div class="content">
            <p>
                <?= $news["description"]; ?>
            </p>
        </div>
    </article>

<!--    <section class="comments">-->
<!--        <h2 class="title">-->
<!--            <i class="far fa-comment-dots"></i>-->
<!--            Комментарии <span class="count">(56)</span>-->
<!--        </h2>-->
<!---->
<!--         Форма добавления комментария -->
<!--        <form class="form">-->
<!--            <div class="avatar">-->
<!--                <i class="fas fa-user-circle"></i>-->
<!--            </div>-->
<!--            <div class="body">-->
<!--                <textarea-->
<!--                        placeholder="Напишите ваш комментарий..."-->
<!--                        rows="3"-->
<!--                        class="input"-->
<!--                ></textarea>-->
<!--                <div class="actions">-->
<!--                    <button type="submit" class="btn active">-->
<!--                        <i class="fas fa-paper-plane"></i>-->
<!--                        Отправить-->
<!--                    </button>-->
<!--                    <span class="hint">-->
<!--                        <i class="fas fa-info-circle"></i>-->
<!--                        Будьте вежливы и соблюдайте правила-->
<!--                    </span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
<!---->
<!--        <div class="list">-->
<!--            <div class="comment">-->
<!--                <div class="avatar">-->
<!--                    <i class="fas fa-user-circle"></i>-->
<!--                </div>-->
<!--                <div class="body">-->
<!--                    <div class="header">-->
<!--                        <span class="author">Алексей Петров</span>-->
<!--                        <span class="date">22 августа 2026, 14:30</span>-->
<!--                    </div>-->
<!--                    <p class="text">-->
<!--                        Отличная статья! Очень интересно и познавательно.-->
<!--                        Жду продолжения.-->
<!--                    </p>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="comment">-->
<!--                <div class="avatar">-->
<!--                    <i class="fas fa-user-circle"></i>-->
<!--                </div>-->
<!--                <div class="body">-->
<!--                    <div class="header">-->
<!--                        <span class="author">Сергей Козлов</span>-->
<!--                        <span class="date">22 августа 2026, 13:45</span>-->
<!--                    </div>-->
<!--                    <p class="text">-->
<!--                        Интересная точка зрения. Хотелось бы больше подробностей-->
<!--                        о практическом применении.-->
<!--                    </p>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="comment">-->
<!--                <div class="avatar">-->
<!--                    <i class="fas fa-user-circle"></i>-->
<!--                </div>-->
<!--                <div class="body">-->
<!--                    <div class="header">-->
<!--                        <span class="author">Елена Смирнова</span>-->
<!--                        <span class="date">22 августа 2026, 12:20</span>-->
<!--                    </div>-->
<!--                    <p class="text">-->
<!--                        Спасибо за статью! Очень актуально в наше время.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
</main>