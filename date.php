<?php
    $today1 = date("Y년 n월 j일 (요일 : D)");
    $today2 = date("I / d / F / Y");
    echo "오늘의 날짜 ... {$today1} <br/>";
    echo "영문의 표기 ... {$today2} <br/>";
    $now = date("h시 i분 s초 (A)");
    echo "지금의 시각 ... {$now} <br/>";
?>