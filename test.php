<?php


for ($i = 1; $i <= 100; $i++) {
    if ($i == 63 || $i == 70 || $i == 90) {
        continue;
    }

    if ($i % 7 == 0 || $i % 9 == 0) {
        echo $i . "\n";
    }
} 