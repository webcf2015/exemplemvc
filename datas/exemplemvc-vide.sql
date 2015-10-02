-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema exemplemvc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema exemplemvc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `exemplemvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `exemplemvc` ;

-- -----------------------------------------------------
-- Table `exemplemvc`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exemplemvc`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lelogin` VARCHAR(45) NULL,
  `lepass` VARCHAR(45) NULL,
  `ledroit` SMALLINT UNSIGNED NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `lelogin_UNIQUE` (`lelogin` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exemplemvc`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exemplemvc`.`comment` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lenom` VARCHAR(100) NULL,
  `letexte` VARCHAR(500) NULL,
  `ladate` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
