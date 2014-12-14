DROP TABLE IF EXISTS `#__companyprofile`;

CREATE TABLE `#__companyprofile` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`company`  VARCHAR(25) NOT NULL,
	`adress`   VARCHAR(25) NOT NULL,
	`city`     VARCHAR(25) NOT NULL,
	`phone`    VARCHAR(16) NOT NULL,

	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__companyprofile` 
(`company`,`adress`,`city`,`phone`) VALUES
("Doña Elisa","Presbítero Moraga 906","Curacaví","(2)2835 2626"),
("Parcela La Barrica","Parcela H1 - El Naranjo","Curacaví", "98220345");