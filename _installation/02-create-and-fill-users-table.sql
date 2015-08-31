CREATE TABLE IF NOT EXISTS `login`.`users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `sf_legacy_account` BOOLEAN NOT NULL DEFAULT FALSE COMMENT 'designates if the corresponding account has been imported from sourceforge',
  `registered_on` DATETIME NOT NULL COMMENT 'when was the account created',
  `last_login` DATETIME NOT NULL COMMENT 'when did the user login the last time',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';
