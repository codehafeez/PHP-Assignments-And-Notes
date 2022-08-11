DROP TABLE language;

CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` varchar(250) DEFAULT NULL,
  `English` varchar(255) DEFAULT NULL,
  `Urdu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO language VALUES("1","about","Tell Me About Your Self","مجھے اپنی ذات کے بارے میں بتائیں");
INSERT INTO language VALUES("2","name","Enter Full Name","پورا نام درج کریں۔");
INSERT INTO language VALUES("3","gender","Enter Gender","جنس درج کریں۔");
INSERT INTO language VALUES("4","age","Enter Age","عمر درج کریں۔");



DROP TABLE members;

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `authtoken` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO members VALUES("1","test","test@gmail.com","test@gmail.com","91e8cc3c6bc400c70fd17c3836e01287");



DROP TABLE persons;

CREATE TABLE `persons` (
  `PersonID` int(11) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




