-- 建立 students 資料表
-- id 欄位為主鍵且自動遞增
CREATE TABLE `laravel20250917`.`students` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- 修改 name 欄位允許 NULL
ALTER TABLE
    `students` CHANGE `name` `name` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;

-- 新增資料
INSERT INTO
    `students` (`id`, `name`)
VALUES
    (NULL, 'cat'),
    (NULL, 'dog'),
    (NULL, 'egg');

-- 修改 id = 2 的 name 欄位
UPDATE
    `students`
SET
    `name` = 'bob-change'
WHERE
    `students`.`id` = 2 

-- 刪除 id = 5 的資料
DELETE FROM
    students
WHERE
    `students`.`id` = 5