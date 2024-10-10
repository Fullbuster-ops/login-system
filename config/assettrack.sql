

CREATE TABLE `assetsmovements` (
  `asset_id` int(11) DEFAULT NULL,
  `previous_location` varchar(50) DEFAULT NULL,
  `new_location` varchar(50) DEFAULT NULL,
  `movement_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO assetsmovements VALUES("1","Lr4","Lr1","2023-12-05");
INSERT INTO assetsmovements VALUES("1","Lr1","Lr4","2023-12-05");
INSERT INTO assetsmovements VALUES("3","Lr4","Lr1","2023-12-05");
INSERT INTO assetsmovements VALUES("0","","","2024-01-12");
INSERT INTO assetsmovements VALUES("0","","","2024-01-12");
INSERT INTO assetsmovements VALUES("0","","","2024-01-12");
INSERT INTO assetsmovements VALUES("0","","","2024-01-12");
INSERT INTO assetsmovements VALUES("0","","","2024-01-12");
INSERT INTO assetsmovements VALUES("11","","","2024-01-18");



CREATE TABLE `checkinout` (
  `checkinout_id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `checkin_date` datetime DEFAULT NULL,
  `checkout_date` datetime DEFAULT NULL,
  `expected_return_date` date DEFAULT NULL,
  PRIMARY KEY (`checkinout_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;




CREATE TABLE `hardwareassets` (
  `asset_id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_type` varchar(255) DEFAULT NULL,
  `maker` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `assigned_location` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `unit` varchar(255) NOT NULL,
  PRIMARY KEY (`asset_id`)
) ENGINE=InnoDB AUTO_INCREMENT=487 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO hardwareassets VALUES("1","DESKTOP","","","","0000-00-00","Lr4","In Use","SRV001");
INSERT INTO hardwareassets VALUES("2","MOBO","Asus","B150 PRO GAMING(LGA1151)","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("3","PROCESSOR","Intel","Core i7-6700","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("4","RAM","Kingston","8GB DDR4","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("5","RAM","Kingston","8GB DDR4","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("6","HDD","Hitachi","465GB","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("7","HDD","Seagate","465GB","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("8","HDD","Seagate","1TB","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("9","MONITOR","ViewSonic","VS15449","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("10","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("11","MOUSE","A4Tech","OP-330","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("12","AVR","Eco Power","","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("13","CD/DVD","ATAPI","iHas 124","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("14","PSU","Corsair","Gs800","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("15","GPU","NVIDIA","GT 730","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("16","SSD","Kingston","480GB","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("17","CAMERA","RAPOO","","","0000-00-00","Lr4","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("18","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK001");
INSERT INTO hardwareassets VALUES("19","MOBO","Asus","H510M-V3","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("20","PROCESSOR","Intel","Core i7-10700","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("21","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("22","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("23","SSD","Faspeed","111GB K5-120G","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("24","MONITOR","Samsung","S20D300NH","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("25","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("26","MOUSE","A4Tech","OP-330","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("27","AVR","EuroPower","","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("28","PSU","Corsair ","Gs800","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("29","GPU","Intel","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("30","HDD","TOSHIBA","931GB","","0000-00-00","Lr4","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("31","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK002");
INSERT INTO hardwareassets VALUES("32","MOBO","Asus","EX-H510M-V3 (LGA1200)","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("33","PROCESSOR","Intel","Core i7-10700","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("34","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("35","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("36","HDD","Toshiba","1TB","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("37","MONITOR","Samsung","","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("38","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("39","MOUSE","A4Tech","OP-330","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("40","AVR","Protec","","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("41","PSU","Powerlogic","ATX 700W","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("42","GPU","Intel","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("43","SSD","Faspeed","111GB K5-120G","","0000-00-00","Lr4","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("44","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK003");
INSERT INTO hardwareassets VALUES("45","MOBO","Intel","EX-H510M-V3 (LGA1200)","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("46","PROCESSOR","Intel","Core i7-10700","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("47","RAM","","8GB","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("48","RAM","","8GB","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("49","HDD","Toshiba","931GB HDWD110","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("50","MONITOR","Samsung","S20D300NH","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("51","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("52","MOUSE","A4Tech","OP-330","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("53","AVR","Protec","","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("54","PSU","Powerlogic","ATX 700W","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("55","GPU","Intel","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("56","SSD","Faspeed","111GB K5-120G","","0000-00-00","Lr4","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("57","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK004");
INSERT INTO hardwareassets VALUES("58","MOBO","Asus","EX-H510M-V3 (LGA1200)","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("59","PROCESSOR","Intel"," Core i7-10700","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("60","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("61","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("62","HDD","","931GB HDWD110","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("63","MONITOR","Samsung","S20D300NH","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("64","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("65","MOUSE","A4Tech","OP-330","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("66","AVR","EuroPower","","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("67","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("68","GPU","Intel","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("69","SSD","Faspeed","111GB K5-120G","","0000-00-00","Lr4","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("70","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK005");
INSERT INTO hardwareassets VALUES("71","MOBO","Asus","EX-H510M-V3(LGA1200)","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("72","PROCESSOR","Intel ","Core i7-10700","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("73","RAM","","8GB DDR4 @ 1463MHz","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("74","RAM","","8GB DDR4 @ 1463MHz","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("75","HDD","Toshiba","931GB HDWD110 ","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("76","MONITOR","Samsung","S20D300NH","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("77","KEYBOARD","Delux","KA150","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("78","MOUSE","GENIUS","","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("79","AVR","Protec","","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("80","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("81","GPU","Intel","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("82","SSD","Faspeed","111GB K5-120G","","0000-00-00","Lr4","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("83","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK006");
INSERT INTO hardwareassets VALUES("84","MOBO","Asus","EX-H510M-V3(LGA1200)","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("85","PROCESSOR","Intel","Core i7-10700","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("86","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("87","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("88","HDD","Toshiba","931GB HDWD110 ","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("89","MONITOR","Samsung","","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("90","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("91","MOUSE","GENIUS","","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("92","AVR","SECURE","","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("93","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("94","GPU","Intel ","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("95","SSD","Faspeed","111GB K5-120G","","0000-00-00","Lr4","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("96","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK007");
INSERT INTO hardwareassets VALUES("97","MOBO","Asus","EX-H510M-V3(LGA1200)","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("98","PROCESSOR","Intel","Core i7-10700","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("99","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("100","RAM","","8GB DDR4","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("101","HDD","Toshiba","931GB HDWD110 ","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("102","MONITOR","Samsung","S20D300NH","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("103","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("104","MOUSE","GENIUS","","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("105","AVR","Protec","","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("106","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("107","GPU","Intel","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("108","SSD","Faspeed","111GB K5-120G","","0000-00-00","Lr4","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("109","DESKTOP","","","","0000-00-00","Lr4","Unavailable","DSK008");
INSERT INTO hardwareassets VALUES("110","DESKTOP","","","","0000-00-00","Lr4","Unavailable","DSK009");
INSERT INTO hardwareassets VALUES("111","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK010");
INSERT INTO hardwareassets VALUES("112","MOBO","Asus","Pending","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("113","PROCESSOR","Intel ","Core i5-4460","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("114","RAM","","4GB","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("115","RAM","","4GB","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("116","HDD","Toshiba","465GB DT01ACA050 ","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("117","MONITOR","Samsung","","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("118","KEYBOARD","GENIUS","","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("119","MOUSE","GENIUS","","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("120","AVR","Euro Power","","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("121","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("122","GPU","Intel","HD Graphics 4600","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("123","SSD","Western Digital","111GB WDS100T2G0A","","0000-00-00","Lr4","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("124","DESKTOP","","","","0000-00-00","Lr4","Unavailable","DSK011");
INSERT INTO hardwareassets VALUES("125","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK012");
INSERT INTO hardwareassets VALUES("126","MOBO","Biostar","A55MH (P0)","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("127","PROCESSOR","AMD","A4-3300 ","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("128","RAM","","8.00GB DDR3 @ 798MHz","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("129","HDD","Toshiba","465GB DT01ACA050 ","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("130","MONITOR","View Sonic","VS15449","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("131","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("132","MOUSE","A4Tech","","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("134","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("135","GPU","AMD","Radeon HD 6410D","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("136","SSD","Western Digital","111GB WDS100T2G0A","","0000-00-00","Lr4","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("137","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK013");
INSERT INTO hardwareassets VALUES("138","MOBO","Asus","H81M-K Pro","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("139","PROCESSOR","Intel","Core i5-4460","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("140","RAM","","8.00GB DDR3 @ 799MHz","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("141","HDD","Toshiba","465GB DT01ACA050 ","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("142","MONITOR","View Sonic","VS15449","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("143","KEYBOARD","A4Tech","KK-3","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("144","MOUSE","Delux","","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("146","PSU","Trigon ","ATX 600W","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("147","GPU","Intel","HD Graphics 4600","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("148","SSD","Western Digital","111GB WDS100T2G0A","","0000-00-00","Lr4","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("149","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK014");
INSERT INTO hardwareassets VALUES("150","MOBO","Biostar","A55MH (P0)","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("151","PROCESSOR","AMD","A4-3300 ","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("152","RAM","","8.00GB DDR3 @ 798MHz","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("153","HDD","Toshiba","465GB DT01ACA050 ","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("154","MONITOR","LG","","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("155","KEYBOARD","A4Tech","","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("156","MOUSE","GENIUS","","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("158","PSU","Delkin","ATX 600W","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("159","GPU","AMD","Radeon HD 6410D","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("160","SSD","Western Digital","111GB WDS100T2G0A","","0000-00-00","Lr4","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("161","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK015");
INSERT INTO hardwareassets VALUES("162","MOBO","MSI","H81M-P33 (MS-7817)","","0000-00-00","Lr4","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("163","PROCESSOR","Intel","","","0000-00-00","Lr4","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("164","RAM","","4.00GB DDR3 @ 799MHz","","0000-00-00","Lr4","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("165","HDD","Toshiba","465GB DT01ACA050","","0000-00-00","Lr4","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("166","MONITOR","LG","","","0000-00-00","Lr4","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("167","KEYBOARD","A4Tech","","","0000-00-00","Lr4","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("168","MOUSE","A4Tech","","","0000-00-00","Lr4","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("170","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("171","GPU","Intel","HD Graphics 4400 (MSI)","","0000-00-00","Lr4","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("173","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK016");
INSERT INTO hardwareassets VALUES("174","MOBO","Asus","H81M-K","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("175","PROCESSOR","Intel","Core i5-4460","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("176","RAM","","8.00GB DDR3 @ 799MHz","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("177","HDD","Seagate","465GB ST500DM002-1BD142 ","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("178","MONITOR","ViewSonic","VS15449","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("179","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("180","MOUSE","A4Tech","","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("181","AVR","SECURE","","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("182","PSU","Delkin","ATX 600W","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("183","GPU","Intel","HD Graphics 4600","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("184","SSD","Western Digital","111GB WDS100T2G0A","","0000-00-00","Lr4","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("185","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK017");
INSERT INTO hardwareassets VALUES("186","MOBO","Asus","H81M-K","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("187","PROCESSOR","Intel","Core i5-4460","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("188","RAM","","8.00GB DDR3 @ 798MHz","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("189","HDD","Toshiba","456 DT01ACA050","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("190","MONITOR","","VA2046 SERIES","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("191","KEYBOARD","A4Tech","","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("192","MOUSE","A4Tech","OP-720","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("194","PSU","Electron ","ATX 800W","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("195","GPU","Intel","HD Graphics 4600","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("196","SSD","Western Digital","111GB WDS100T2G0A","","0000-00-00","Lr4","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("197","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK018");
INSERT INTO hardwareassets VALUES("198","MOBO","MSI","H81M-P33 (MS-7817)","","0000-00-00","Lr4","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("199","PROCESSOR","Intel","Core i3-4170","","0000-00-00","Lr4","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("200","RAM","","4.00GB DDR3 @ 799MHz","","0000-00-00","Lr4","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("201","HDD","Hitachi ","465GB HDS721050DLE630","","0000-00-00","Lr4","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("203","KEYBOARD","A4Tech","","","0000-00-00","Lr4","In Use","DSK018");
INSERT INTO hardwareassets VALUES("204","MOUSE","A4Tech","OP-720","","0000-00-00","Lr4","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("206","PSU","Trigon ","ATX 600W","","0000-00-00","Lr4","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("207","GPU","Intel ","HD Graphics 4400","","0000-00-00","Lr4","In Use","DSKc019");
INSERT INTO hardwareassets VALUES("209","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK020");
INSERT INTO hardwareassets VALUES("210","MOBO","Biostar","A55MH ","","0000-00-00","Lr4","In Use","DSKc020");
INSERT INTO hardwareassets VALUES("211","PROCESSOR","AMD","A4-3300","","0000-00-00","Lr4","In Use","DSKc019");
INSERT INTO hardwareassets VALUES("212","RAM","","8.00GB DDR3 @ 798MHz","","0000-00-00","Lr4","In Use","DSKc020");
INSERT INTO hardwareassets VALUES("213","HDD","Western Digital","456GB WD5000AZLX-00CL5A0","","0000-00-00","Lr4","In Use","DSKc020");
INSERT INTO hardwareassets VALUES("214","MONITOR","BenQ","G610HDAL","","0000-00-00","Lr4","In Use","DSKc019");
INSERT INTO hardwareassets VALUES("215","KEYBOARD","GENIUS","","","0000-00-00","Lr4","In Use","DSKc020");
INSERT INTO hardwareassets VALUES("216","MOUSE","A4Tech","OP-720","","0000-00-00","Lr4","In Use","DSKc020");
INSERT INTO hardwareassets VALUES("218","PSU","Delkin ","ATX 600W","","0000-00-00","Lr4","In Use","DSKc020");
INSERT INTO hardwareassets VALUES("219","GPU","AMD","Radeon HD 6410D","","0000-00-00","Lr4","In Use","DSKc020");
INSERT INTO hardwareassets VALUES("220","SSD","Western Digital","111GB WDS100T2G0A","","0000-00-00","Lr4","In Use","DSKc020");
INSERT INTO hardwareassets VALUES("221","DESKTOP","","","","0000-00-00","Lr4","Unavailable","DSK021");
INSERT INTO hardwareassets VALUES("222","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK022");
INSERT INTO hardwareassets VALUES("223","MOBO","Asus","EX-H510M-V3(LGA1200)","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("224","PROCESSOR","Intel","Core i7-10700","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("225","RAM","","8GB","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("226","RAM","","8GB","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("227","HDD","Toshiba","931GB HDWD110","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("228","MONITOR","Samsung","S20D300NH","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("229","KEYBOARD","Genius","","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("230","MOUSE","A4Tech","OP-720","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("231","AVR","EuroPower","","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("232","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("233","GPU","Intel","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("234","SSD","Faspeed","111GB K5-120G ","","0000-00-00","Lr4","In Use","DSKc022");
INSERT INTO hardwareassets VALUES("235","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK023");
INSERT INTO hardwareassets VALUES("236","MOBO","Asus","EX-H510M-V3(LGA1200)","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("237","PROCESSOR","Intel","Core i7-10700","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("238","RAM","","8GB","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("239","RAM","","8GB","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("240","HDD","Toshiba","931GB HDWD110","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("241","MONITOR","Samsung","S20D300NH","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("242","KEYBOARD","Genius","","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("243","MOUSE","XTYLE","","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("244","AVR","SECURE","","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("245","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("246","GPU","Intel ","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("247","SSD","Faspeed ","111GB K5-120G","","0000-00-00","Lr4","In Use","DSKc023");
INSERT INTO hardwareassets VALUES("248","DESKTOP","","","","0000-00-00","Lr4","In Use","DSK024");
INSERT INTO hardwareassets VALUES("249","MOBO","Asus","EX-H510M-V3(LGA1200)","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("250","PROCESSOR","Intel","Core i7-10700","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("251","RAM","","8GB @ 1463MHz","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("252","RAM","","8GB @ 1463MHz","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("253","HDD","Toshiba","931GB HDWD110 ","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("254","MONITOR","Samsung","S20D300NH","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("255","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("256","MOUSE","A4Tech","","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("258","PSU","Powerlogic ","ATX 700W","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("259","GPU","Intel ","UHD Graphics 630","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("260","SSD","Faspeed ","111GB K5-120G","","0000-00-00","Lr4","In Use","DSKc024");
INSERT INTO hardwareassets VALUES("261","DESKTOP","","","","0000-00-00","Lr1","In Use","SRV001");
INSERT INTO hardwareassets VALUES("262","MOBO","MSI","Z97 PCMATE MS - 7850","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("263","PROCESSOR","Intel","Core i5 459 @ 3.30GHz","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("264","RAM","","8GB DDR3","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("265","HDD","Toshiba","1TB DT01ACA100","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("266","MONITOR","AOC","","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("267","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("268","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("269","PSU","Bysuo","230W","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("270","GPU","NVIDIA","2048MB GeForce GT 710","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("271","SSD","Hitachi","128GB","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("272","CAMERA","Rapoo","","","0000-00-00","Lr1","In Use","SRVc001");
INSERT INTO hardwareassets VALUES("273","DESKTOP","","","","0000-00-00","Lr1","Under Maintenance","DSK001");
INSERT INTO hardwareassets VALUES("274","MOBO","Biostar","GROUP A75MG (P0)","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("275","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("276","RAM","","8GB DDR3","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("277","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("278","MONITOR","LG ","LED 16EN33","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("279","KEYBOARD","Genius","","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("280","MOUSE","A4Tech","OP-330","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("281","AVR","Euro Power","","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("282","CD/DVD","Asus","","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("283","PSU","Supercool","600W","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("284","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc001");
INSERT INTO hardwareassets VALUES("285","DESKTOP","","","","0000-00-00","Lr1","Under Maintenance","DSK002");
INSERT INTO hardwareassets VALUES("286","MOBO","Biostar","GROUP A75MG (P0)","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("287","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("288","RAM","","8GB DDR3","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("289","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("290","MONITOR","LG ","LED 16EN33","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("291","KEYBOARD","CD-R KING","","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("292","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("293","AVR","Euro Power","","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("294","CD/DVD","Asus","","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("295","PSU","Supercool","600W","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("296","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc002");
INSERT INTO hardwareassets VALUES("297","DESKTOP","","","","0000-00-00","Lr1","Under Maintenance","DSK003");
INSERT INTO hardwareassets VALUES("298","MOBO","Biostar","GROUP A75MG (P0)","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("299","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("300","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("301","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("302","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("303","MONITOR","LG ","LED 16EN33","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("304","KEYBOARD","GENIUS","","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("305","MOUSE","GENIUS","","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("306","AVR","Secure","","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("307","CD/DVD","Asus","","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("308","PSU","G-Force","600W","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("309","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc003");
INSERT INTO hardwareassets VALUES("310","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK004");
INSERT INTO hardwareassets VALUES("311","MOBO","Biostar","GROUP A75MG (P0)","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("312","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("313","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("314","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("315","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("316","MONITOR","LG ","LED 16EN33","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("317","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("318","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("319","AVR","Intex","","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("320","CD/DVD","Asus","","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("321","PSU","Supercool","600W","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("322","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc004");
INSERT INTO hardwareassets VALUES("323","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK005");
INSERT INTO hardwareassets VALUES("324","MOBO","Biostar","GROUP A75MG (P0)","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("325","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("326","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("327","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("328","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("329","MONITOR","LG ","LED 16EN33","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("330","KEYBOARD","GENIUS","KRS-85","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("331","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("332","AVR","Secure","","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("333","PSU","Supercool","600W","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("334","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc005");
INSERT INTO hardwareassets VALUES("335","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK006");
INSERT INTO hardwareassets VALUES("336","MOBO","Biostar","GROUP A75MG (P0)","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("337","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("340","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("341","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("342","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("343","MONITOR","BENQ","G610HDAL","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("344","KEYBOARD","DELKIN","","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("345","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("346","AVR","Intex","","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("347","CD/DVD","ASUS","","","0000-00-00","Lr1","Under Maintenance","DSKc006");
INSERT INTO hardwareassets VALUES("348","PSU","Supercool","600W","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("349","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc006");
INSERT INTO hardwareassets VALUES("350","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK007");
INSERT INTO hardwareassets VALUES("351","MOBO","Biostar","A75MG","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("352","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("353","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("354","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("355","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("356","MONITOR","ACER","P166HQL","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("357","KEYBOARD","DELL","","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("358","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("359","AVR","Intex","","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("360","CD/DVD","ASUS","","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("361","PSU","Supercool","600W","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("362","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc007");
INSERT INTO hardwareassets VALUES("363","DESKTOP","","","","0000-00-00","Lr1","Under Maintenance","DSK008");
INSERT INTO hardwareassets VALUES("364","MOBO","Biostar","A75MG","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("365","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("366","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("367","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("368","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("369","MONITOR","LG","LED 16EN33","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("370","KEYBOARD","A4Tech","","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("371","MOUSE","Genius","","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("372","AVR","Secure","","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("373","CD/DVD","ASUS","","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("374","PSU","Supercool","600W","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("375","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc008");
INSERT INTO hardwareassets VALUES("376","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK009");
INSERT INTO hardwareassets VALUES("377","MOBO","Biostar","A75MG","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("378","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("379","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("380","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("381","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("382","MONITOR","Acer","P166HQL","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("383","KEYBOARD","DELL","","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("384","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("385","AVR","Intex","","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("386","CD/DVD","ASUS","","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("387","PSU","Supercool","600W","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("388","GPU","AMD","Radeon HD Graphics","","0000-00-00","Lr1","In Use","DSKc009");
INSERT INTO hardwareassets VALUES("389","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK010");
INSERT INTO hardwareassets VALUES("390","MOBO","Biostar","A75MG","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("391","PROCESSOR","AMD","A4-4000 @ 3.0GHz","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("392","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("393","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("394","HDD","Toshiba","465GB DT01ACA050","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("395","MONITOR","BENQ","G610HDAL","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("396","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("397","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("398","CD/DVD","Samsung","","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("399","PSU","Supercool","600W","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("400","GPU","AMD","Radeon HD Graphics","","0000-00-00","Lr1","In Use","DSKc010");
INSERT INTO hardwareassets VALUES("401","DESKTOP","","","","0000-00-00","Lr1","Under Maintenance","DSK011");
INSERT INTO hardwareassets VALUES("402","MOBO","ECS","MCP61M-M3","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("403","PROCESSOR","AMD","SEMPRON 140 @2.70GHz","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("404","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("405","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("406","HDD","Samsung","465GB HJ502J","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("407","MONITOR","NEC","LCD1717NX","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("408","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("409","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("410","PSU","TOMMADE","500W","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("411","GPU","NVIDIA","6150SE nForce430","","0000-00-00","Lr1","In Use","DSKc011");
INSERT INTO hardwareassets VALUES("412","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK012");
INSERT INTO hardwareassets VALUES("413","MOBO","ECS","MCP61M-M3","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("414","PROCESSOR","AMD","SEMPRON 140 @2.70GHz","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("415","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("416","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("417","HDD","Samsung","465GB HJ502J","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("418","MONITOR","Chimei","655A","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("419","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("420","MOUSE","Genius","","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("421","PSU","TOMMADE","500W","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("422","GPU","NVIDIA","6150SE nForce430","","0000-00-00","Lr1","In Use","DSKc012");
INSERT INTO hardwareassets VALUES("423","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK013");
INSERT INTO hardwareassets VALUES("424","MOBO","ECS","MCP61M-M3","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("425","PROCESSOR","AMD","SEMPRON 140 @2.70GHz","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("426","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("427","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("428","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("429","MONITOR","BenQ","G610HDAL","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("430","KEYBOARD","A4Tech","KRS-85","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("431","MOUSE","Genius","","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("432","PSU","TOMMADE","500W","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("433","GPU","NVIDIA","6150SE nForce430","","0000-00-00","Lr1","In Use","DSKc013");
INSERT INTO hardwareassets VALUES("434","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK014");
INSERT INTO hardwareassets VALUES("435","MOBO","ECS","MCP61M-M3","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("436","PROCESSOR","AMD","SEMPRON 140 @2.70GHz","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("437","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("438","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("439","HDD","Samsung","465GB HD502HJ","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("440","MONITOR","BenQ","G610HDAL","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("441","KEYBOARD","Delkin","","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("442","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("443","PSU","TOMMADE","500W","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("444","GPU","NVIDIA","6150SE nForce430","","0000-00-00","Lr1","In Use","DSKc014");
INSERT INTO hardwareassets VALUES("445","DESKTOP","","","","0000-00-00","Lr1","Under Maintenance","DSK015");
INSERT INTO hardwareassets VALUES("446","MOBO","Biostar","A75MG","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("447","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("448","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("449","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("450","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("451","MONITOR","NEC","LCD1717NX","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("452","KEYBOARD","ACER","","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("453","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("454","PSU","TOMMADE","500W","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("455","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc015");
INSERT INTO hardwareassets VALUES("456","DESKTOP","","","","0000-00-00","Lr1","Under Maintenance","DSK016");
INSERT INTO hardwareassets VALUES("457","MOBO","Biostar","A75MG","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("458","PROCESSOR","AMD","A4-3300 @ 2.50GHz","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("459","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("460","RAM","","1GB DDR3","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("461","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("462","MONITOR","BenQ","G610HDAL","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("463","KEYBOARD","COMPAQ","","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("464","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("465","PSU","TOMMADE","500W","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("466","GPU","AMD","Radeon HD6410D","","0000-00-00","Lr1","In Use","DSKc016");
INSERT INTO hardwareassets VALUES("467","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK017");
INSERT INTO hardwareassets VALUES("468","MOBO","ECS","MCP61M - M3","","0000-00-00","Lr1","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("469","PROCESSOR","AMD","SEMPRON 140 @2.70GHz","","0000-00-00","Lr1","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("470","RAM","","2GB DDR3","","0000-00-00","Lr1","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("471","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("472","MONITOR","BenQ","G610HDAL","","0000-00-00","Lr1","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("473","KEYBOARD","COMPAQ","","","0000-00-00","Lr1","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("474","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("475","PSU","TOMMADE","500W","","0000-00-00","Lr1","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("476","GPU","NVIDIA","6150SE nForce430","","0000-00-00","Lr1","In Use","DSKc017");
INSERT INTO hardwareassets VALUES("477","DESKTOP","","","","0000-00-00","Lr1","In Use","DSK018");
INSERT INTO hardwareassets VALUES("478","MOBO","Biostar","A75MG","","0000-00-00","Lr1","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("479","PROCESSOR","AMD","SEMPRON 145 @2.80GHz","","0000-00-00","Lr1","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("480","RAM","","2GB DDR3","","0000-00-00","Lr1","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("481","HDD","Samsung","465GB ST500DM005","","0000-00-00","Lr1","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("482","MONITOR","BenQ","G610HDAL","","0000-00-00","Lr1","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("483","KEYBOARD","Delkin","","","0000-00-00","Lr1","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("484","MOUSE","A4Tech","","","0000-00-00","Lr1","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("485","PSU","TOMMADE","500W","","0000-00-00","Lr1","In Use","DSKc018");
INSERT INTO hardwareassets VALUES("486","GPU","NVIDIA","6150SE nForce430","","0000-00-00","Lr1","In Use","DSKc018");



CREATE TABLE `login_audit` (
  `user_name` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `success` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO login_audit VALUES("admin","2023-12-05 12:15:20","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 12:15:24","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 12:16:15","0");
INSERT INTO login_audit VALUES("user","2023-12-05 12:16:20","1");
INSERT INTO login_audit VALUES("user","2023-12-05 12:16:52","0");
INSERT INTO login_audit VALUES("user","2023-12-05 12:23:00","1");
INSERT INTO login_audit VALUES("user","2023-12-05 12:23:06","1");
INSERT INTO login_audit VALUES("user","2023-12-05 12:23:13","1");
INSERT INTO login_audit VALUES("user","2023-12-05 12:23:18","1");
INSERT INTO login_audit VALUES("user","2023-12-05 12:23:28","1");
INSERT INTO login_audit VALUES("user","2023-12-05 12:23:37","1");
INSERT INTO login_audit VALUES("user","2023-12-05 12:23:53","0");
INSERT INTO login_audit VALUES("admin","2023-12-05 12:24:05","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 12:38:48","0");
INSERT INTO login_audit VALUES("Technician","2023-12-05 12:38:53","1");
INSERT INTO login_audit VALUES("technician","2023-12-05 13:20:55","1");
INSERT INTO login_audit VALUES("technician","2023-12-05 13:21:11","1");
INSERT INTO login_audit VALUES("technician","2023-12-05 13:21:23","1");
INSERT INTO login_audit VALUES("technician","2023-12-05 13:21:40","1");
INSERT INTO login_audit VALUES("Technician","2023-12-05 13:21:46","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 13:21:57","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 13:24:18","0");
INSERT INTO login_audit VALUES("admin","2023-12-05 13:26:46","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 14:21:46","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 14:21:51","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 14:21:56","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 15:34:42","0");
INSERT INTO login_audit VALUES("admin","2023-12-05 16:09:29","1");
INSERT INTO login_audit VALUES("admin","2023-12-05 16:39:49","0");
INSERT INTO login_audit VALUES("admin","2023-12-09 10:00:10","1");
INSERT INTO login_audit VALUES("admin","2023-12-09 12:56:37","1");
INSERT INTO login_audit VALUES("admin","2023-12-09 14:19:30","1");
INSERT INTO login_audit VALUES("admin","2023-12-11 22:32:04","0");
INSERT INTO login_audit VALUES("admin","2023-12-11 22:32:18","1");
INSERT INTO login_audit VALUES("admin","2023-12-15 21:27:50","1");
INSERT INTO login_audit VALUES("admin","2023-12-15 21:33:57","0");
INSERT INTO login_audit VALUES("admin","2024-01-03 11:33:12","1");
INSERT INTO login_audit VALUES("admin","2024-01-03 11:34:42","0");
INSERT INTO login_audit VALUES("admin","2024-01-04 17:59:00","1");
INSERT INTO login_audit VALUES("admin","2024-01-04 17:59:10","1");
INSERT INTO login_audit VALUES("admin","2024-01-09 09:57:42","1");
INSERT INTO login_audit VALUES("admin","2024-01-10 10:37:00","1");
INSERT INTO login_audit VALUES("admin","2024-01-12 20:41:49","1");
INSERT INTO login_audit VALUES("admin","2024-01-12 20:45:36","1");
INSERT INTO login_audit VALUES("admin","2024-01-12 20:50:09","1");
INSERT INTO login_audit VALUES("admin","2024-01-12 22:14:07","0");
INSERT INTO login_audit VALUES("admin","2024-01-12 22:15:54","1");
INSERT INTO login_audit VALUES("admin","2024-01-12 22:16:08","0");
INSERT INTO login_audit VALUES("admin","2024-01-12 22:18:38","1");
INSERT INTO login_audit VALUES("admin","2024-01-12 22:37:11","0");
INSERT INTO login_audit VALUES("admin","2024-01-12 22:40:23","1");
INSERT INTO login_audit VALUES("admin","2024-01-12 22:42:08","0");
INSERT INTO login_audit VALUES("admin","2024-01-13 10:45:03","1");
INSERT INTO login_audit VALUES("admin","2024-01-13 10:47:27","0");
INSERT INTO login_audit VALUES("admin","2024-01-14 11:10:40","1");
INSERT INTO login_audit VALUES("admin","2024-01-14 11:57:20","0");
INSERT INTO login_audit VALUES("admin","2024-01-15 21:18:22","1");
INSERT INTO login_audit VALUES("admin","2024-01-15 22:19:07","0");
INSERT INTO login_audit VALUES("admin","2024-01-15 22:28:31","1");
INSERT INTO login_audit VALUES("admin","2024-01-15 22:30:02","0");
INSERT INTO login_audit VALUES("admin","2024-01-18 08:45:03","1");
INSERT INTO login_audit VALUES("admin","2024-01-18 09:24:19","0");
INSERT INTO login_audit VALUES("admin","2024-01-18 17:49:05","1");
INSERT INTO login_audit VALUES("admin","2024-01-18 20:51:48","1");
INSERT INTO login_audit VALUES("admin","2024-01-18 22:43:30","0");
INSERT INTO login_audit VALUES("admin","2024-01-19 10:25:52","1");
INSERT INTO login_audit VALUES("admin","2024-01-19 10:49:48","1");
INSERT INTO login_audit VALUES("admin","2024-01-19 14:11:47","1");
INSERT INTO login_audit VALUES("admin","2024-01-19 14:38:31","0");
INSERT INTO login_audit VALUES("admin","2024-01-19 14:38:34","1");
INSERT INTO login_audit VALUES("admin","2024-01-19 14:38:35","1");
INSERT INTO login_audit VALUES("admin","2024-01-19 21:17:25","1");
INSERT INTO login_audit VALUES("admin","2024-01-19 22:12:19","1");
INSERT INTO login_audit VALUES("admin","2024-01-20 10:59:45","1");
INSERT INTO login_audit VALUES("admin","2024-01-20 18:12:14","1");
INSERT INTO login_audit VALUES("admin","2024-01-25 12:09:14","0");
INSERT INTO login_audit VALUES("admin","2024-01-25 12:09:21","1");



CREATE TABLE `maintenancetasks` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_id` int(11) DEFAULT NULL,
  `task_type` enum('Repair','Maintenance','Software Update') NOT NULL,
  `task_description` varchar(200) DEFAULT NULL,
  `task_date` date DEFAULT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;




CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `report_name` varchar(300) DEFAULT NULL,
  `report_path` varchar(300) NOT NULL DEFAULT 'D:\\Downloads',
  `generated_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;




CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` enum('Admin','Technician','Guest User') NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO roles VALUES("1","Admin");
INSERT INTO roles VALUES("2","Technician");
INSERT INTO roles VALUES("3","Guest User");



CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO users VALUES("1","admin","$2y$10$Qs/Hjgtzq2CqWqgmOLYnluNa52Tt.8s9tBqYpaCIbn4vIURTT.4ga","admin","admin@yahoo.com","1");
INSERT INTO users VALUES("2","technician","$2y$10$IeZHoJ6RPTUaTTvl.Z4/.O0rfr.wqTGA7vBUoNY4z.AsgOwsex5Me","technician","trishakimxx7@gmail.com","2");
INSERT INTO users VALUES("3","user","$2y$10$dIIiL7zeqTIhuP5jPYqbR.UPmVOGMhfU6MPmuSMmtVgCUhDDWukFG","user","user@yahoo.com","3");

