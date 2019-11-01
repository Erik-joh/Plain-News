<?php

declare(strict_types=1);

?>
<!--This file loops out all articles from a query variable named articles -->

<article class="midFeed">
    <?php foreach($articles as $article):?>
        <div class="article">
            <h2><?php echo $article['title'] ?></h2>
            <div class ="ADLContainer">
                <p>by <a href="authorsArticles.php?authorId=<?php echo $article['author_id']; ?>"><?php echo $article['name'] ?></a></p>
                <p>Published: <?php echo getDMY($article['date']) ?></p>
                <p>Likes: <?php echo $article['likes'] ?></p>
            </div>
            <img src="/img/<?php echo $article['image'] ?>" class="articleImage">
            <p><?php echo $article['content'] ?></p>
        </div>
    <?php endforeach; ?>
</article>
