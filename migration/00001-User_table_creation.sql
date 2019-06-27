CREATE TABLE `my_db`.`users` ( 
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
  `first_name` VARCHAR(50) NOT NULL , 
  `last_name` VARCHAR(50) NOT NULL , 
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
  UNIQUE `i_user_id` (`id`)
) ENGINE = InnoDB;