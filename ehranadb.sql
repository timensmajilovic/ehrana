CREATE TABLE `carts` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`jed_id` INT NOT NULL,
	`uporabnik_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `uporabniki` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`uid` varchar(20) NOT NULL UNIQUE,
	`pass` varchar(40) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `jedi` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`ime` varchar(30) NOT NULL,
	`ponudnik_id` INT NOT NULL,
	`kategorija_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ponudniki` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`ime` varchar(20) NOT NULL,
	`uid` varchar(40) NOT NULL,
	`pass` varchar(40) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `kategorije` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`ime` varchar(40) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `carts` ADD CONSTRAINT `carts_fk0` FOREIGN KEY (`jed_id`) REFERENCES `jedi`(`id`);

ALTER TABLE `carts` ADD CONSTRAINT `carts_fk1` FOREIGN KEY (`uporabnik_id`) REFERENCES `uporabniki`(`id`);

ALTER TABLE `jedi` ADD CONSTRAINT `jedi_fk0` FOREIGN KEY (`ponudnik_id`) REFERENCES `ponudniki`(`id`);

ALTER TABLE `jedi` ADD CONSTRAINT `jedi_fk1` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorije`(`id`);

