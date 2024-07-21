

DROP TABLE IF EXISTS `FarazsFashionCategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FarazsFashionCategories` (
  `FashionCategoryID` int NOT NULL AUTO_INCREMENT,
  `FashionCategoryName` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL,
  PRIMARY KEY (`FashionCategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `FarazsFashionCategories` WRITE;
/*!40000 ALTER TABLE `FarazsFashionCategories` DISABLE KEYS */;
INSERT INTO `FarazsFashionCategories` VALUES (1,'Mens Watches','2024-02-20 20:54:37'),(2,'Designer Handbag','2024-02-20 20:57:42'),(3,'Sunglasses','2024-02-20 20:57:51'),(4,'Leather Jacket','2024-02-20 20:58:08'),(5,'Sneakers','2024-02-20 20:58:12');
/*!40000 ALTER TABLE `FarazsFashionCategories` ENABLE KEYS */;
UNLOCK TABLES;


DROP TABLE IF EXISTS `FarazsFashionManagers`;

CREATE TABLE `FarazsFashionManagers` (
  `FashionManagerID` int NOT NULL AUTO_INCREMENT,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `dateCreated` datetime NOT NULL,
  PRIMARY KEY (`FashionManagerID`),
  UNIQUE KEY `emailAddress` (`emailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `FarazsFashionManagers` WRITE;
/*!40000 ALTER TABLE `FarazsFashionManagers` DISABLE KEYS */;
/*!40000 ALTER TABLE `FarazsFashionManagers` ENABLE KEYS */;
UNLOCK TABLES;


DROP TABLE IF EXISTS `FarazsFashionProducts`;

CREATE TABLE `FarazsFashionProducts` (
  `FashionID` int NOT NULL AUTO_INCREMENT,
  `FashionCategoryID` int NOT NULL,
  `FashionProductCode` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `FashionProductName` varchar(255) NOT NULL,
  `FashionDescription` text NOT NULL,
  `FashionProductColor` varchar(255) NOT NULL,
  `FashionPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL,
  PRIMARY KEY (`FashionID`),
  UNIQUE KEY `FashionProductCode` (`FashionProductCode`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `FarazsFashionProducts` WRITE;
/*!40000 ALTER TABLE `FarazsFashionProducts` DISABLE KEYS */;
INSERT INTO `FarazsFashionProducts` VALUES (1,1,'rolex','Rolex President','The Rolex President Day-Date, with its iconic features like the full date and day display, exclusive use of precious metals, and the distinctive Presidential bracelet, stands as an enduring symbol of success and luxury. ','ChampagneGold',16499.00,'2024-02-20 21:05:09'),(2,1,'mille','RM66','Measuring 42mm, The Richard Mille RM66 Flying Tourbillon boasts a wealth of impressive features. The iconic heavy metal devil horn gesture takes centre stage bearing resemblance to an X-ray hand design. ','Black',1095000.00,'2024-02-20 21:09:25'),(3,1,'bulova','Sutton','Sophisticated design with full exhibition dial and case-back. Stainless steel screw-back case, skeletonized black three-hand dial revealing the intricate workings of the self-winding 21-jewel movement, domed mineral crystal, stainless steel bracelet with push-button deployant clasp, and water resistance to 30 meters.\r\n\r\n','Silver',260.00,'2024-02-20 21:10:11'),(6,2,'michaelkors','Jet Set Travel Large Saffiano Leather Tote Bag','Our Jet Set Travel tote is a timeless style for every season. Crafted from Saffiano leather accented with a top-stitch trim, it opens to a spacious interior with plenty of room to store all your essentials—be it for a day or for an entire weekend. Use the inside slip pocket to stow small items that require easy access','Light Pink',498.00,'2024-02-25 13:50:32'),(8,2,'michaelkors2','Mercer Medium Logo and Leather Accordion Crossbody Bag','Crafted from signature-print canvas and leather, our two-tone Mercer crossbody bag is updated with accordion side gussets. Its streamlined design features structured top handles and a removable shoulder strap for added versatility, while a median zippered compartment promises safekeeping for smaller items.','Brown',448.00,'2024-02-25 13:58:50'),(9,2,'louisvuitton','CarryAll PM','Combining allure with body-friendly design, the CarryAll PM handbag in Monogram canvas with natural leather trim is a go-everywhere city bag. Great storage capacity and a smartly designed interior, with two large inside pockets, makes it practical. A detachable zipped pouch, also in Monogram canvas, is attached to the bag by a leather strap.','Brown',2450.00,'2024-02-25 13:59:45'),(10,2,'coach','Zip Top Tote','Designed to be the perfect work or school essential, our medium sized Zip Top Tote secures your everyday items with ease. Plus, inside cell phone and multifunction pockets provide extra organization.','Black',298.00,'2024-02-25 14:02:00'),(11,2,'hermes','2022 Epsom Birkin 30','This is an authentic HERMES Epsom Birkin 30 in Rouge Casaque. This stylish Birkin handbag is crafted of luxurious calfskin stamped leather in red. This features looping leather top handles, a cross over flap with strap closure and a plated gold turn lock, and a hanging clochette with keys. This opens to a matching matte goatskin leather interior with zipper and patch pockets.','Light Pink',17000.00,'2024-02-25 14:02:59'),(12,3,'fendi','Roma 50mm Square Sunglasses','Polished logos accent the temples of Italian-made square sunglasses fitted with UV-protective lenses.','Tan',380.00,'2024-02-25 14:14:21'),(13,3,'celine','Triomphe 52mm Oval Sunglasses','A sleek oval silhouette elevates Italian-made sunglasses fitted with scratch-resistant CR-39 lenses.','Black',510.00,'2024-02-25 14:14:21'),(14,3,'prada','55mm Square Sunglasses','Wide square frame add chic appeal to sleek Italian-crafted sunglasses complete with prominent logo branding at the temples.','White',377.00,'2024-02-25 14:14:21'),(15,3,'gucci','55 mm Square Sunglasses','Angular square frames enhance the glam vibe of these Italian-made sunglasses with signature logo hardware gleaming at the temples','Black',405.00,'2024-02-25 14:14:21'),(16,3,'givenchy','GVDAY 54mm Square Sunglasses','Indelible design elevates head-turning fashion sunglasses that are sure to turn heads.','Off-White',260.00,'2024-02-25 14:14:21'),(17,4,'levis','Faux Leather Moto Jacket','You can\'t help but swagger when you\'re wearing a faux-leather moto jacket with unmistakable edge, but shiver you won\'t, thanks to the insulated lining.','Frappe',150.00,'2024-02-27 09:43:56'),(18,4,'topshop','Faux Leather Biker Jacket','Excel at layering with casual options like quilted bomber jackets and perennial moto-inspired biker designs. A tailored blazer will work tirelessly season after season to imbue your look with 24/7 appeal, while fringed suede Western styles add tactility and interest to every look. When the weather cools, look to both real and faux shearling coats that will keep you cosy in the depths of fall.','Black',93.00,'2024-02-27 13:26:44'),(19,4,'edikted','Mori Oversize Faux Leather Jacket','This oversized jacket made from soft faux leather is sure to be a go-to style for layering over wardrobe favorites.','Brown',118.00,'2024-02-27 13:26:44'),(20,4,'stevemadden','Vinka Faux Leather Moto Jacket','Bring a bit of edge to any look in this buttery-soft faux-leather jacket complete with all the classic hardware for authentic moto style.','Cognac',99.00,'2024-02-27 13:26:44'),(21,4,'allsaints','Dalby Leather Moto Jacket','This contemporary take on a classic leather moto jacket is just the ticket for effortlessly chic everyday style.','Deep Sage Green',529.00,'2024-02-27 13:26:44'),(22,5,'newbalance','550 Basketball Sneaker','A sporty reissue of an \'89 basketball icon, this off-court street sneaker keeps the heritage vibes scoring with the clean, classic details of the original.','White',110.00,'2024-02-27 14:37:33'),(23,5,'nike','Blazer Low Platform','Old-school b-ball gets a modern kick in a \'70s-reissue sneaker sporting a streamlined profile and low platform sole that keep the vintage vibes hustling.','White',100.00,'2024-02-27 14:37:33'),(24,5,'vans','Sport Low Sneaker','The brand\'s signature V-shaped logo brings heritage style to a skate-inspired sneaker crafted from richly textured leather.','White',75.00,'2024-02-27 14:37:33'),(25,5,'adidas','Gender Inclusive Samba OG Sneaker','From the soccer field to the streets, this always-original sneaker maintains its legacy with premium materials and iconic 3-Stripes at the sides.','White/Black',100.00,'2024-02-27 14:37:33'),(26,5,'reebok','Club C 85 Sneaker','A terry-cloth lining offers plush steps in a heritage sneaker detailed with perforations on the toe for enhanced breathability and comfort.','Glen Green',90.00,'2024-02-27 14:37:33'),(105,1,'mvmt','Legacy Slim','the Panther Black balances the sophistication ot a dress watch with the soul ot tomorrow\'s entrepreneur Featuring a striking all-black colorway.','Black',148.00,'2024-04-15 13:50:36'),(106,1,'fossil','Multifunction','Case size is 44mm. the platiorm is BANNON. the strap material is stainless steel. and the watch is water resistant un to b ATM','Silver',68.00,'2024-04-15 13:51:13'),(108,3,'diortwo','Dior Glasses','These contemporary glasses show off a modernistic style with a vintage flair','Pink',400.00,'2024-04-17 19:10:54');
