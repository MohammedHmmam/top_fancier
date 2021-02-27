-- Create fancier table
CREATE TABLE fancier (
    `id`            BIGINT(20)      NOT NULL AUTO_INCREMENT,
    `username`      VARCHAR(50)     CHARACTER SET utf8 COLLATE utf8_general_ci UNIQUE NOT NULL,
    `email`         VARCHAR(35)     CHARACTER SET utf8 COLLATE utf8_general_ci UNIQUE NOT NULL,
    `password`      VARCHAR(255)    CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    `joined_at`     DATETIME        DEFAULT CURRENT_TIMESTAMP NOT NULL,
    `mobile`        VARCHAR(20)     CHARACTER SET utf8  COLLATE utf8_general_ci DEFAULT NULL,
    `reset_token`   VARCHAR(255)    CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
    PRIMARY KEY(`id`),
    UNIQUE INDEX `id_index` (`id` ASC)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET utf8;