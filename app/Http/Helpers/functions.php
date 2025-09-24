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
            return 'ارسال شده';
            break;
        case 'waiting':
            return 'در انتظار';
            break;
        case 'checked':
            return 'بررسی شده';
    }
}

function characterّIndexing($text, $character = 10) {
    $html = '';
    $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    $chunks = array_chunk($words, $character);
    $separator = ' ';
    $result = array_map(function($sub) use ($separator) {
        return implode($separator, $sub);
    }, $chunks);
    foreach ($result as $value) {
        $html .= '<span>' . $value . '</span>';
    }
    return $html;
}
