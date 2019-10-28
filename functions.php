<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

function getAuthor(array $article, array $authors):string{
    foreach ($authors as $author){
        if($article['authorId'] === $author['id']){
            return $author['name'];
        }
    }
}
function sortArticles(array $articles){
    usort($articles, function (array $first, array $second){
        return strtotime($second['date']) - strtotime($first['date']);
    });
    return $articles;
}
function getDMY(string $date){
    return explode(" ",$date)[0];
}
