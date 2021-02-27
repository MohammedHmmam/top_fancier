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

--Create Fancier profile table
CREATE TABLE fancier_profile(
    `id`            BIGINT(20)      NOT NULL AUTO_INCREMENT,
    `first_name`    VARCHAR(20)     CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    `last_name`     VARCHAR(20)     CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    `state`         VARCHAR(20)     CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    `city`          VARCHAR(20)     CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    `region`        VARCHAR(20)     CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    `coord_N`       VARCHAR(15)     CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
    `coord_E`       VARCHAR(15)     CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
    `profile_pic`   VARCHAR(255)    CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
     PRIMARY KEY(`id`),
     UNIQUE INDEX `id_index` (`id` ASC),
     FOREIGN KEY(`id`) REFERENCES `fancier`(`id`) ON DELETE CASCADE

)ENGINE = InnoDB
DEFAULT CHARACTER SET utf8;