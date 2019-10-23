<?php
declare(strict_types=1);
$articles = [
    [
        'id'          => 1,
        'title'       => 'Forest fire',
        'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'authorId'    => 1,
        'date'        => 20191028,
        'likeCounter' => 45
    ],
    [
        'id'          => 2,
        'title'       => 'Climate change',
        'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'authorId'    => 3,
        'date'        => 20191029,
        'likeCounter' => 89
    ],
    [
        'id'          => 3,
        'title'       => 'Climbing',
        'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'authorId'    => 2,
        'date'        => 20191024,
        'likeCounter' => 105
    ],
    [
        'id'          => 4,
        'title'       => 'Football',
        'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'authorId'    => 1,
        'date'        => 20191026,
        'likeCounter' => 337
    ]
];
$authors = [
    [
        'id'   => 1,
        'name' => 'Tony Blair'
    ],
    [
        'id'   => 2,
        'name' => 'Simon Harris'
    ],
    [
        'id'   => 3,
        'name' => 'Kent Andersson'
    ]
];
// This is the file where you can keep your data arrays such as articles and
// authors.
