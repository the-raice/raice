        <div class="content__news">
            <h1 class="news__title"><?=$data['title'] ?></h1>
            <article class="content__article">
                <br>
                <h3 class="article__text"><?=$data['content'] ?></h3>
            </article>
            <div class="content_metabar">
                <ul class="metabar__list">
                    <li>
                       <h3><?=$data['date'] ?></h3>
                    </li>
                    <li>
                        <img class="author__image" src="<?=Models\User::getUserInfo( $data['author_id'] )[0]['image'] ?>">
                        <a class="metabar__option" href="/user/<?=Models\User::getUserInfo( $data['author_id'] )[0]['username'] ?>"><h3><?=Models\User::getUserInfo( $data['author_id'] )[0]['username'] ?></h3>
                    </li>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $data['author_id'] ) ): ?>
                    <li>
                        <a class="metabar__option" href="/article/<?=$data['url'] ?>/edit"><h3>Edit</h3></a>
                    </li>
                    <li>
                        <a class="metabar__option" href="/article/<?=$data['url'] ?>/delete"><h3>Delete</h3></a>
                    </li>
<?php endif; ?>                   
                </ul>
            </div>
        </div>
