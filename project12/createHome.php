<?php
    $navIteams = [
        "GIỚI THIỆU",
        "TIN TỨC & THÔNG BÁO",
        "TUYỂN SINH",
        "ĐÀO TẠO",
        "NGHIÊN CỨU",
        "ĐỐI NGOẠI",
        "VĂN BẢN",
        "SINH VIÊN",
        "LIÊN HỆ"
    ];

    echo '<nav><ul>';
    foreach ($navIteams as $item) {
        echo "<li>$item</li>";
    }
    echo '</ul></nav>';