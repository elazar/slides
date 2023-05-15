<?php
$present = preg_match(
    '/^(?P<area>[0-9]{3})'
        . '-(?P<prefix>[0-9]{3})'
        . '-(?P<line>[0-9]{4})$/',
    '123-456-7890',
    $match
);
print_r($match);
