<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__.'/functions.php';
require __DIR__.'/data.php';
// sortArticles($articles);
usort($articles,"compareDates");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="style.css" rel="stylesheet">
        <title>Plain News</title>
    </head>
    <body>
        <article class="midFeed">
            <?php foreach($articles as $article): ?>
                <div class="article">
                    <img src="/img/<?php echo $article['image'] ?>" class="articleImage">
                    <h2><?php echo $article['title'] ?></h2>
                    <p><?php echo $article['content'] ?></p>
                    <div class ="articleFooter">
                        <p>by <?php echo getAuthor($article,$authors) ?></p>
                        <p>published <?php echo $article['date'] ?></p>
                        <p>likes <?php echo $article['likeCounter'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </article>
    </body>
</html>
