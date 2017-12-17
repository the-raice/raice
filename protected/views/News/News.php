        <div class="content__news">
            <h1 class="news__title">All the news</h1>
<?php foreach ( $data as $article ): ?>
            <article class="content__article">
                <h3 class="article__title"><?=$article['title'] ?></h3>
                <br>
                <h3 class="article__text"><?=$article['lead'] ?> <a class="article__link" href="/article/<?=$article['url'] ?>">More...</a></h3>
            </article>
            <div class="content_metabar">
                <ul class="metabar__list">
                    <li>
                       <h3><?=$article['date'] ?></h3>
                    </li>
                    <li>
                        <img class="author__image" src="<?=Models\User::getUserInfo( $article['author_id'] )[0]['image'] ?>">
                        <a class="metabar__option" href="/user/<?=Models\User::getUserInfo( $article['author_id'] )[0]['username'] ?>"><h3><?=Models\User::getUserInfo( $article['author_id'] )[0]['username'] ?></h3>
                    </li>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $article['author_id'] ) ): ?>
                    <li>
                        <a class="metabar__option" href="/article/<?=$article['url'] ?>/edit"><h3>Edit</h3></a>
                    </li>
                    <li>
                        <a class="metabar__option" href="/article/<?=$article['url'] ?>/delete"><h3>Delete</h3></a>
                    </li>
<?php endif; ?>                   
                </ul>
            </div>
<?php endforeach; ?>
        </div>
