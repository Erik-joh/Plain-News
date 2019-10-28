<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/functions.php';

$fileName = __DIR__ . "/plainNews.db";
$db = new PDO("sqlite:$fileName");
$query = $db->query('SELECT * FROM articles INNER JOIN authors ON articles.author_id = authors.id ORDER BY date DESC');
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

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
            <?php foreach($articles as $article):?>
                <div class="article">
                    <h2><?php echo $article['title'] ?></h2>
                    <div class ="ADLContainer">
                        <p>by <?php echo $article['name'] ?></p>
                        <p>Published: <?php echo getDMY($article['date']) ?></p>
                        <p>Likes: <?php echo $article['likes'] ?></p>
                    </div>
                    <img src="/img/<?php echo $article['image'] ?>" class="articleImage">
                    <p><?php echo $article['content'] ?></p>
                </div>
            <?php endforeach; ?>
        </article>
    </body>
</html>
