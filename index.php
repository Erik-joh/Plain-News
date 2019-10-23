<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__.'/functions.php';
require __DIR__.'/data.php';
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

        <?php foreach($articles as $article): ?>
            <div class="article">
                <h2><?php echo $article['title'] ?></h2>
                <p><?php echo $article['content'] ?></p>
                <div class ="articleFooter">
                    <p><?php echo $article['date'] ?></p>
                    <p><?php echo getAuthor($article,$authors) ?></p>
                    <p><?php echo $article['likeCounter'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>

    </body>
</html>
