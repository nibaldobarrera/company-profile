DROP TABLE IF EXISTS `#__companyprofile`;

CREATE TABLE `#__companyprofile` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`greeting` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__companyprofile` (`greeting`) VALUES
('Company Profile!'),
('Good bye Profile!');
