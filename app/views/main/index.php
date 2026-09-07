<?php

/** @var array $sidebar */
/** @var string $role */
/** @var array $news */

?>

<main>
    <?php if (empty($news)): ?>
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
    <?php else: ?>
        <section class="news_page">
            <?php foreach ($news as $newsItem): ?>
                <article class="news">
                    <a href="/main/news?id=<?= $newsItem['id'] ?>">
                        <div class="img_wrapper">
                            <img src="" alt=" ">
                        </div>
                        <div class="info">
                            <h3><?= $newsItem['title'] ?></h3>
                            <p class="news_time">
                                <i class="far fa-clock"></i>
                                <?= date_create($newsItem['create_at'])->format('d.M.Y') ?>
                            </p>
                        </div>
                    </a>
                </article>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>
</main>