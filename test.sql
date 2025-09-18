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
    `students`.`id` = 2 -- 刪除 id = 5 的資料
DELETE FROM
    students
WHERE
    `students`.`id` = 5 CREATE TABLE `laravel_20250917`.`students` (
        `id` INT(10) NULL AUTO_INCREMENT COMMENT 'id',
        `name` VARCHAR(20) NULL COMMENT '姓名',
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `laravel_0910`.`cars` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `color` INT NULL DEFAULT '0' COMMENT 'color 代號',
    `date` DATETIME NULL DEFAULT '2020-01-01' COMMENT '出廠日期',
,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `laravel_0910`.`cars` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `name` VARCHAR NULL DEFAULT '' COMMENT '姓名',
    `color` VA NULL DEFAULT '0' COMMENT 'color 代號',
    `color` VA NULL DEFAULT '0' COMMENT 'color 代號',
    `color` VA NULL DEFAULT '0' COMMENT 'color 代號',
    `date` VATETIME NULL DEFAULT '2020-01-01' COMMENT '出廠日期',
    `date` VATETIME NULL DEFAULT '2020-01-01' COMMENT '出廠日期',
    `date` VATETIME NULL DEFAULT '2020-01-01' COMMENT '出廠日期',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 新增 
INSERT INTO
    `students` (`id`, `name`, `created_at`, `updated_at`)
VALUES
    (NULL, 'bob', NULL, NULL),
    (NULL, 'cat', NULL, NULL);

SELECT
    ProductID,
    ProductName,
    CategoryName
FROM
    Products
    INNER JOIN Categories ON Products.CategoryID = Categories.CategoryID;

SELECT
    students.id,
    students.name,
    phones.phone
FROM
    students
    LEFT JOIN phones ON students.id = phones.student_id;

INSERT INTO
    `phones` (
        `id`,
        `student_id`,
        `phone`,
        `created_at`,
        `updated_at`
    )
VALUES
    (NULL, '1', '0911', NULL, NULL),
    (NULL, '2', '0922', NULL, NULL),
    (NULL, '3', '0933', NULL, NULL)