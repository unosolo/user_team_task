CREATE TABLE `my_db`.`teams_users` ( 
  `id` INT NOT NULL AUTO_INCREMENT , 
  `team_id` INT NOT NULL , 
  `user_id` INT NOT NULL , 
  UNIQUE `i_teams_users_id` (`id`)
) ENGINE = InnoDB;

/* Adding some index for improving performance when consulting user's team */
ALTER TABLE `my_db`.`teams_users` 
  ADD INDEX `i_tu_user_id` (`user_id`);