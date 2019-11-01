<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.


/**
 * getDMY
 *
 * takes a string whith a dateTime and only returns the date.
 *
 * @param string $date
 * @return string
 */
function getDMY(string $dateTime):string{
    return explode(" ",$dateTime)[0];
}
