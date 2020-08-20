<?php declare(strict_types=1);

function isValidTriangle(int $a, int $b, int $c): bool {

    if ((($a - $b - $c) >= 0) || (($b - $c - $a) >= 0 ) || (($c - $a - $b) >= 0)) {
        return false;
    }
    return true;
}