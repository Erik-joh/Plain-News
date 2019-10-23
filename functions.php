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
