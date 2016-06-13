SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `crms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `crms` ;

-- -----------------------------------------------------
-- Table `crms`.`vehicle`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`vehicle` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(128) NOT NULL ,
  `type` VARCHAR(45) NOT NULL ,
  `plate` VARCHAR(10) NOT NULL ,
  `fuel` VARCHAR(15) NOT NULL ,
  `transmission` VARCHAR(10) NOT NULL ,
  `description` VARCHAR(600) NULL ,
  `status` TINYINT(1) NOT NULL ,
  `image` BLOB NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crms`.`customer`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`customer` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  `nic` VARCHAR(10) NOT NULL ,
  `contact_number` VARCHAR(10) NOT NULL ,
  `address` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crms`.`admin`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`admin` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crms`.`feedback`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`feedback` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `description` VARCHAR(2000) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crms`.`time_slot`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`time_slot` (
  `id` INT NOT NULL ,
  `start_date` DATE NOT NULL ,
  `end_date` DATE NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crms`.`customer_reserve_vehicle`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`customer_reserve_vehicle` (
  `customer_id` INT NOT NULL ,
  `vehicle_id` INT NOT NULL ,
  `id` INT NOT NULL AUTO_INCREMENT ,
  `start_date` DATE NOT NULL ,
  `end_date` DATE NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_customer_has_vehicle_vehicle1_idx` (`vehicle_id` ASC) ,
  INDEX `fk_customer_has_vehicle_customer_idx` (`customer_id` ASC) ,
  CONSTRAINT `fk_customer_has_vehicle_customer`
    FOREIGN KEY (`customer_id` )
    REFERENCES `crms`.`customer` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_customer_has_vehicle_vehicle1`
    FOREIGN KEY (`vehicle_id` )
    REFERENCES `crms`.`vehicle` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crms`.`customer_reserve_vehicle`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`customer_reserve_vehicle` (
  `customer_id` INT NOT NULL ,
  `vehicle_id` INT NOT NULL ,
  `id` INT NOT NULL AUTO_INCREMENT ,
  `start_date` DATE NOT NULL ,
  `end_date` DATE NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_customer_has_vehicle_vehicle1_idx` (`vehicle_id` ASC) ,
  INDEX `fk_customer_has_vehicle_customer_idx` (`customer_id` ASC) ,
  CONSTRAINT `fk_customer_has_vehicle_customer`
    FOREIGN KEY (`customer_id` )
    REFERENCES `crms`.`customer` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_customer_has_vehicle_vehicle1`
    FOREIGN KEY (`vehicle_id` )
    REFERENCES `crms`.`vehicle` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crms`.`customer_request_details_vehicle`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`customer_request_details_vehicle` (
  `customer_id` INT NOT NULL ,
  `vehicle_id` INT NOT NULL ,
  `start_date` DATE NULL ,
  `end_date` DATE NULL ,
  `id` INT NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_customer_has_vehicle_vehicle2_idx` (`vehicle_id` ASC) ,
  INDEX `fk_customer_has_vehicle_customer1_idx` (`customer_id` ASC) ,
  CONSTRAINT `fk_customer_has_vehicle_customer1`
    FOREIGN KEY (`customer_id` )
    REFERENCES `crms`.`customer` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_customer_has_vehicle_vehicle2`
    FOREIGN KEY (`vehicle_id` )
    REFERENCES `crms`.`vehicle` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crms`.`customer_feedback_vehicle`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`customer_feedback_vehicle` (
  `customer_id` INT NOT NULL ,
  `vehicle_id` INT NOT NULL ,
  `description` VARCHAR(2000) NULL ,
  `id` INT NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_customer_has_vehicle_vehicle3_idx` (`vehicle_id` ASC) ,
  INDEX `fk_customer_has_vehicle_customer2_idx` (`customer_id` ASC) ,
  CONSTRAINT `fk_customer_has_vehicle_customer2`
    FOREIGN KEY (`customer_id` )
    REFERENCES `crms`.`customer` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_customer_has_vehicle_vehicle3`
    FOREIGN KEY (`vehicle_id` )
    REFERENCES `crms`.`vehicle` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crms`.`table1`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `crms`.`table1` (
)
ENGINE = InnoDB;

USE `crms` ;

-- -----------------------------------------------------
-- Placeholder table for view `crms`.`view1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `crms`.`view1` (`id` INT);

-- -----------------------------------------------------
-- View `crms`.`view1`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crms`.`view1`;
USE `crms`;
;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
