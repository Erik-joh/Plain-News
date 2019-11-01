<?php

declare(strict_types=1);

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/functions.php';

$fileName = __DIR__ . "/plainNews.db";
$db = new PDO("sqlite:$fileName");
$query = $db->query('SELECT * FROM articles
                    INNER JOIN authors ON articles.author_id = authors.id
                    ORDER BY date DESC');
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

require __DIR__.'/header.php';
require __DIR__.'/articles.php';
require __DIR__.'/footer.php';
