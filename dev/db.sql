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