CREATE DATABASE IF NOT EXISTS sendmarc;

USE sendmarc;

CREATE TABLE IF NOT EXISTS users
(
    id       INT UNSIGNED                NOT NULL AUTO_INCREMENT,
    username VARCHAR(100)                NOT NULL,
    status   ENUM ('active', 'inactive') NOT NULL DEFAULT 'inactive',
    PRIMARY KEY (id),
    UNIQUE KEY uq_username (username)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS messages
(
    id         INT UNSIGNED                    NOT NULL AUTO_INCREMENT,
    user_id    INT UNSIGNED                    NOT NULL,
    name       VARCHAR(120)                    NOT NULL,
    email      VARCHAR(254)                    NOT NULL,
    phone      VARCHAR(32)                     NOT NULL,
    message    TEXT                            NOT NULL,
    query_type ENUM ('billing', 'maintenance') NOT NULL,
    status     ENUM ('open', 'closed')         NOT NULL DEFAULT 'open',
    created_at TIMESTAMP                       NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    KEY idx_user_id (user_id),
    CONSTRAINT fk_messages_user FOREIGN KEY (user_id)
        REFERENCES users (id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;