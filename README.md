# test-FireGroup

Mô tả cách setup:

Bước 1: bỏ folder test_intern vào bên trong folder htdoc của xampp
Bước 2: Bật xampp lên chạy Apache và MySQL
Bước 3: Vào MySQL tạo database tên = test_intern  , chọn utf32_unicode_ci
Bước 4: Từ database = test_intern, vào SQL gõ câu tạo table:
    CREATE TABLE `contact` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255)  NOT NULL,
        `email` varchar(255)  NOT NULL,
        `phone` varchar(255)  NOT NULL,
        `note` varchar(255)  NOT NULL,
        PRIMARY KEY (`id`)
    ) 

Bước 5: chọn từng bài và chạy
