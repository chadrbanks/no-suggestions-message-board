


CREATE TABLE IF NOT EXISTS `19F_Posts`
(
    `post_id` BIGINT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(64) NOT NULL,
    `content` LONGTEXT NOT NULL,
    `author` LONGTEXT NOT NULL,
    `created_date` DATETIME NOT NULL,
    `updated_date` DATETIME DEFAULT NULL,
    `removed_date` DATETIME DEFAULT NULL,
    primary key(`post_id`)
);


CREATE TABLE IF NOT EXISTS `19F_Comments`
(
    `comment_id` BIGINT NOT NULL AUTO_INCREMENT,
    `post_id` BIGINT NOT NULL,
    `comment` LONGTEXT NOT NULL,
    `author` LONGTEXT NOT NULL,
    `created_date` DATETIME NOT NULL,
    `updated_date` DATETIME DEFAULT NULL,
    `removed_date` DATETIME DEFAULT NULL,
    primary key(`comment_id`)
);