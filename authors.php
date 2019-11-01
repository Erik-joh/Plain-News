<?php

declare(strict_types=1);

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.


// This file selects all authors from the database and then loop them out one by one.

$fileName = __DIR__ . "/plainNews.db";
$db = new PDO("sqlite:$fileName");
$query = $db->query('SELECT * FROM authors');
$authorsQuery = $query->fetchAll(PDO::FETCH_ASSOC);

require __DIR__.'/header.php';
?>

<article class="midFeed">
    <?php foreach($authorsQuery as $author):?>
        <a class="authorName" href="authorsArticles.php?authorId=<?php echo $author['id'] ?>">
            <?php echo $author['name'] ?>
        </a>
    <?php endforeach; ?>
</article>

<?php require __DIR__.'/footer.php' ?>
