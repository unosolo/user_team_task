CREATE TABLE `my_db`.`teams` ( 
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
  `name` VARCHAR(50) NOT NULL , 
  `created_at` DATETIME NOT NULL , 
  UNIQUE `i_team_id` (`id`)
) ENGINE = InnoDB;