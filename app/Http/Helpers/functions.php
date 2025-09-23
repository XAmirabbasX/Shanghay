<?php

use App\Models\Cart;

function generateTrackingCode($lentgh = 15) {
    $chars = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
    shuffle($chars);
    $string_version = implode($chars);
    $text2 = substr($string_version, 0, $lentgh);

    return $text2;
}

function statusFormater($status) {
    switch ($status) {
        case 'registered':
            return 'registered';
            break;
        case 'waiting':
            return 'waiting';
            break;
        case 'checked':
            return 'checked';
    }
}
