        <h1 class="content__title">All the news</h1>
<?php foreach ( $data as $article ): ?>
        <article class="content__article">
            <h1 class="article__title"><?=$article['title'] ?></h1>
            <br>
            <p class="atricle__text"><?=$article['content'] ?></p>
        </article>
        <div class="content_metabar">
            <ul class="metabar__list">
                <li>
                   <b><?=$article['date'] ?></b>
                </li>
                <li>
                    <h3><?=$article['author_id'] ?></h3>
                </li>
            </ul>
        </div>
<?php endforeach; ?>
