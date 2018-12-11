<?
$sql = array();
$sql["1.0.1"] = array();

if("1.0.1" == $version){

	$sql[] = "CREATE TABLE `Role` (
				  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
				  `RoleName` VARCHAR(15) NOT NULL,
				  `RoleCode` VARCHAR(15) NOT NULL,
				  `CDate` datetime(3) NOT NULL,
				  `CUser` varchar(50) NOT NULL,
				  `LastEditDate` datetime(3) DEFAULT NULL,
				  `LastEditUser` varchar(50) DEFAULT NULL,
				  `Remarks` VARCHAR(50) DEFAULT NULL,
				  PRIMARY KEY (`ser_no`),
				  UNIQUE KEY(`RoleCode`)
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			  ";

	$sql[] = "CREATE TABLE `keysquence` (
			  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
			  `ModuleName` varchar(5) NOT NULL,
			  `PreWord` varchar(5) NOT NULL,
			  `KeySquence` int(15) NOT NULL,
			  `Digits` int(10) NOT NULL,
			  `Status` varchar(10) NOT NULL,
			  `CDate` datetime(3) NOT NULL,
			  `CUser` varchar(50) NOT NULL,
			  `LastEditDate` datetime(3) DEFAULT NULL,
			  `LastEditUser` varchar(50) DEFAULT NULL,
			  PRIMARY KEY (`ser_no`)
			) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

		  ";

	$sql[] = "CREATE TABLE `user` (
				`ser_no` int(11) NOT NULL AUTO_INCREMENT,
				`UserID` varchar(50) NOT NULL,
				`Account` varchar(100) NOT NULL,
				`password` varchar(50) NOT NULL,
				`FirstName` varchar(50) NOT NULL,
				`LastName` varchar(50) NOT NULL,
				`Email` varchar(100) DEFAULT NULL,
				`Phone` varchar(50) DEFAULT NULL,
				`Region` varchar(300) NOT NULL,
				`BirthDay` date NOT NULL,
				`IDF` varchar(10) NOT NULL,
				`Status` varchar(10) NOT NULL,
				`CDate` datetime(3) NOT NULL,
				`CUser` varchar(50) NOT NULL,
				`LastEditDate` datetime(3) DEFAULT NULL,
				`LastEditUser` varchar(50) DEFAULT NULL,
				`RoleCode` VARCHAR(15) NOT NULL,
				PRIMARY KEY (`ser_no`),
				FOREIGN KEY(`RoleCode`) REFERENCES `Role`(`RoleCode`)
			) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
		  ";

	$sql[] = "CREATE TABLE `RoleACL` (
				`ser_no` int(11) NOT NULL AUTO_INCREMENT,
				`ACLCode` varchar(50) NOT NULL,
				`ModuleName` varchar(50) NOT NULL,
				`ReferenceFile` varchar(50) NOT NULL,
				`Remarks` varchar(500) NOT NULL,
				`CDate` datetime(3) NOT NULL,
				`CUser` varchar(50) NOT NULL,
				`LastEditDate` datetime(3) DEFAULT NULL,
				`LastEditUser` varchar(50) DEFAULT NULL,
				PRIMARY KEY (`ser_no`),
				UNIQUE KEY(`ACLCode`)
			) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
		  ";
	$sql[] = "CREATE TABLE `ACLFunction` (
				`ser_no` int(11) NOT NULL AUTO_INCREMENT,
				`ACLFunctionCode` varchar(50) NOT NULL,
				`FunctionName` varchar(50) NOT NULL,
				`Remarks` varchar(500) NOT NULL,
				`CDate` datetime(3) NOT NULL,
				`CUser` varchar(50) NOT NULL,
				`LastEditDate` datetime(3) DEFAULT NULL,
				`LastEditUser` varchar(50) DEFAULT NULL,
				`RoleCode` VARCHAR(15) NOT NULL,
				`ACLCode` varchar(50) NOT NULL,
				PRIMARY KEY (`ser_no`),
				UNIQUE KEY(`ACLFunctionCode`),
				FOREIGN KEY(`RoleCode`) REFERENCES `Role`(`RoleCode`),
				FOREIGN KEY(`ACLCode`) REFERENCES `RoleACL`(`ACLCode`)
			) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
		  ";


}

?>