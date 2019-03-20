Create TABLE dw_users (
    `id` int NOT NULL AUTO_INCREMENT,
    `username` varchar(64) DEFAULT NULL,
    `email` varchar(64) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL,
    `salt` varchar(255) DEFAULT NULL,
    `UUID` INT(64),
    `status` bool DEFAULT 0,
    `joined` TIMESTAMP,
    PRIMARY KEY (`id`)
    );


    Create TABLE sg-salesmen (
    `id` int NOT NULL AUTO_INCREMENT,
    `saleman` varchar(64) DEFAULT NULL,
    `email` varchar(64) DEFAULT NULL,
    `status` bool DEFAULT 0,
    `joined` TIMESTAMP,
    PRIMARY KEY (`id`)
    );


        Create TABLE sg-salesmen (
    id int
    [ AUTO_INCREMENT ]
    [ DEFAULT NOT NULL ]
    [ PRIMARY KEY ],

    saleman varchar(64)
    [ DEFAULT NULL ]
   

    );

CREATE SCHEMA IF NOT EXISTS `sgdb` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `salesmen` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `salemanid` VARCHAR(45) NULL,

  PRIMARY KEY (`id`))
ENGINE = InnoDB;


ALTER TABLE salesmen
  ADD email varchar(40) NOT NULL
    AFTER salemanid;


ALTER TABLE salesmen
  ADD salemanpwd varchar(40) NOT NULL
    AFTER email;


ALTER TABLE salesmen
  ADD hashedPwd varchar(40) NOT NULL
    AFTER email;

drop TABLE salesmen;


CREATE TABLE IF NOT EXISTS `salesmen` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `salemanname` VARCHAR(45) NULL,
  `salemanid` INT(4) NULL,
  `dep` VARCHAR(45) NULL,
  `jtitle` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phonenumber` INT(10) NULL,
  `hashedPwd` VARCHAR(45) NULL,
  `salt` VARCHAR(45) NULL,
  `created_on` INT(11) UNSIGNED )
ENGINE = InnoDB;



INSERT INTO salesmen (salemanname, salemanid, dep, jtitle, email, hashedPwd, salt) Value ('Ahmed Sulaimani', '5355', 'Sales', 'Mgr', 'ads@sunbulahgroup.com', 'Qcard420', 'okDoSk3sLh94');


GRANT ALL PRIVILEGES ON *.* TO 'root'@'%.ies.com' 
    IDENTIFIED BY 'Qcard420' 
    WITH GRANT OPTION;
FLUSH PRIVILEGES;

GRANT ALL ON SGDB.* TO root@0x01.ies.com IDENTIFIED BY 'Qcard420';




CREATE USER 'ads'@'192.168.100.77' IDENTIFIED BY 'Qcard420';
GRANT ALL PRIVILEGES ON *.* TO 'ads'@'192.168.100.77'
WITH GRANT OPTION;
FLUSH PRIVILEGES;









INSERT INTO salesmen (salemanid, email) Value ('111000', 'ads@sunbulahgroup.com');
INSERT INTO salesmen (salemanid, email, salemanpwd) Value ('5355', 'ads@sunbulahgroup.com', 'Qcard420');


    CREATE TABLE sg-salesmen (id int DEFAULT AUTO_INCREMENT, saleman varchar(64) DEFAULT NULL);

    `email` varchar(64) DEFAULT NULL,
    `status` bool DEFAULT 0,
    `joined` TIMESTAMP,
    PRIMARY KEY (`id`)
    );



CREATE TABLE IF NOT EXISTS `salesmen` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `salemanname` VARCHAR(45) NULL,
  `salemanid` INT(4) NULL,
  `dep` VARCHAR(45) NULL,
  `jtitle` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phonenumber` INT(10) NULL,
  `hashedPwd` VARCHAR(45) NULL,
  `salt` VARCHAR(45) NULL,
  `created_on` INT(11) UNSIGNED )
ENGINE = InnoDB;

    CREATE TABLE IF NOT EXISTS `salesmen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `salemanname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salemanid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jtitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hashedPwd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;


INSERT INTO `salesmen` (`salemanname`, `salemanid`, `dep`, `jtitle`, `email`, `phonenumber`, `hashedPwd`, `salt`) VALUES
 ('AhmedSulaimani', '1234', 'Mgmnt', 'mgr', 'exploi8@hotmail.com', '0562204816', '123456', 'pgXbP8GwZeI2BiwWFuBJqmZBZWnaePfWuDnzTk7zEIfjIVoVMrLWzd96RCi9');


(2, 'root', 'tor@tor.tor', '$2y$10$tFHyUmQ.BKPKjKa3HbN56uaYl07TN4hPD5yBSIW1/bZlhQOhViEuq', NULL, NULL, NULL, NULL, '2018-05-20 08:49:52', '2018-05-20 08:49:52'),
(3, 'pingall', 'pin9.in9@gmail.com', '$2y$10$CFLpCenyJnCa73p8rszzYOeHyNYZerO.jscsPPN.IkhQhwXzTheRS', 'aaa', NULL, 'RUH, SA', NULL, '2018-05-20 09:13:01', '2018-05-20 09:13:01'),
(4, 'admin', 'new@new.com', '$2y$10$eZHTSJiskR4hqSvbYROBLu2HNJ0ec78bajyycmqraTa8tr5xOZsB6', NULL, NULL, NULL, NULL, '2018-05-20 09:47:25', '2018-05-20 09:47:25'),
(5, 'asul', 'a.sul@live.ca', '$2y$10$c1JEOQHmOv7u/vm8JMzMK.c3mLJG9HMbEMkItx6wXekjv4HK7RqGa', NULL, NULL, NULL, '9gU5TxDBjtPlwedbEiHs5WbL5lSe89jT3LdD6fOQpjxXFsKEXr3OIeldylvS', '2018-05-20 10:12:53', '2018-05-21 06:08:00'),
(6, 'anonymous4444', 'sss9@gmail.com', '$2y$10$1ZbUcxQ6qJyZqYImQCC61.JeRtNq/uuhPneJndE9dWB9WOrkrbUOC', 'aaa', 'bbb', NULL, 'FNLYINPA9u3wM8VkfNKq2x7SDLiLbnDCNd2S1ziYRtlqdSb1fE1RmgPIoToj', '2018-05-20 11:17:47', '2018-05-20 11:21:22'),
(7, 'johnny', 'johnny@j.c', '$2y$10$LNE41i.Kew3M7QNRgxfnTOFyvU8/QRUo0/pMav2zxWevzrrgP0sKe', 'Master', 'Coin', 'WWW', NULL, '2018-05-21 09:26:13', '2018-05-21 09:27:27');
