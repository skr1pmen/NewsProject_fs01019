<?php
/** @var array $news */
?>
<section class="admin_dashboard">
    <div class="admin_stats">
        <div class="stat_card">
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <div class="info">
                <span class="value"><?= count($news) ?></span>
                <span class="label">Всего новостей</span>
            </div>
        </div>
    </div>

    <div class="admin_list_header">
        <h2 class="title">
            <i class="fas fa-list"></i>
            Все новости
            <span class="count">(<?= count($news) ?>)</span>
        </h2>
        <a href="/admin/create" class="btn">Создать новость</a>
    </div>

    <div class="admin_news_list">
        <?php foreach ($news as $newsItem): ?>
            <div class="admin_news_item">
                <div class="image">
                    <img src="" alt=" ">
                </div>
                <div class="content">
                    <h3 class="title">
                        <a href="/main/news?id=<?= $newsItem['id'] ?>"><?= $newsItem['title'] ?></a>
                    </h3>
                    <div class="meta">
                        <span>
                            <i class="far fa-calendar-alt"></i>
                            <?= date_create($newsItem['create_at'])->format('d.M.Y') ?>
                        </span>

                    </div>
                </div>
                <div class="actions">
                    <a href="/admin/edit?id=<?= $newsItem['id'] ?>" class="btn edit" title="Редактировать">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="/main/news?id=<?= $newsItem['id'] ?>" class="btn view" title="Просмотреть" target="_blank">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="/admin/delete?id=<?= $newsItem['id'] ?>" class="btn delete" title="Удалить">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>
        <?php endforeach;?>
    </div>

</section>
