SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `bookstore` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `bookstore` ;

-- -----------------------------------------------------
-- Table `bookstore`.`autores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookstore`.`autores` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `apellidos` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookstore`.`editoriales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookstore`.`editoriales` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `sede` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookstore`.`libros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookstore`.`libros` (
  `ISBN` INT(13) NOT NULL,
  `editoriales_id` INT(10) NOT NULL,
  `titulo` VARCHAR(45) NULL,
  `sinopsis` TEXT NULL,
  `n_paginas` VARCHAR(45) NULL,
  PRIMARY KEY (`ISBN`),
  INDEX `fk_libros_editoriales1_idx` (`editoriales_id` ASC),
  CONSTRAINT `fk_libros_editoriales1`
    FOREIGN KEY (`editoriales_id`)
    REFERENCES `bookstore`.`editoriales` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bookstore`.`autores_has_libros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookstore`.`autores_has_libros` (
  `autores_id` INT(10) NOT NULL,
  `libros_ISBN` INT(13) NOT NULL,
  PRIMARY KEY (`autores_id`, `libros_ISBN`),
  INDEX `fk_autores_has_libros_libros1_idx` (`libros_ISBN` ASC),
  INDEX `fk_autores_has_libros_autores1_idx` (`autores_id` ASC),
  CONSTRAINT `fk_autores_has_libros_autores1`
    FOREIGN KEY (`autores_id`)
    REFERENCES `bookstore`.`autores` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_autores_has_libros_libros1`
    FOREIGN KEY (`libros_ISBN`)
    REFERENCES `bookstore`.`libros` (`ISBN`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
