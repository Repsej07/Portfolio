create database if not exists jesper_portfolio;
use jesper_portfolio;
DROP TABLE IF EXISTS `Contact_form`;
CREATE TABLE `Contact_form` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`Id`)
);

INSERT INTO `Contact_form` VALUES (1,'Sonarr','jespermeuzelaar@gmail.com','HI\r\n'),(2,'Sonarr','jespermeuzelaar@gmail.com','HI\r\n'),(3,'Sonarr','jespermeuzelaar@gmail.com','HI\r\n'),(4,'Jesper Meuzelaar','jespermeuzelaar@gmail.com','Hi, this is one of the First messages i will be sending to de DB'),(5,'Jesper Meuzelaar','jespermeuzelaar@gmail.com','Hi, this is one of the First messages i will be sending to de DB'),(6,'Sonarr','jespermeuzelaar@gmail.com','Hi\r\n'),(7,'Sonarr','jespermeuzelaar@gmail.com','Hi\r\n'),(8,'Sonarr','jespermeuzelaar@gmail.com','Hi\r\n'),(9,'Sonarr','jespermeuzelaar@gmail.com','Hi\r\n'),(10,'1234','jespermeuzelaar@gmail.com','HI'),(11,'1234','jespermeuzelaar@gmail.com','HI'),(12,'2134213','jespermeuzelaar@gmail.com','hi\r\n'),(13,'2134213','jespermeuzelaar@gmail.com','hi\r\n'),(14,'1234232134','jespermeuzelaar@gmail.com','hi\r\n'),(15,'Jesper','jespermeuzelaar@gmail.com','hi\r\n'),(16,'Jesper','jespermeuzelaar@gmail.com','hi\r\n'),(17,'hi','jespermeuzelaar@gmail.com','hi'),(18,'Jesper','jespermeuzelaar@gmail.com','This is the First test message after i hope to have created some good name validation'),(19,'Sonarr','Hi@hi.com','Test Message');

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) 
;


INSERT INTO `pages` VALUES (1,'home','Homepage'),(2,'about_me',NULL);


DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page_id` int DEFAULT NULL,
  `home_image` varchar(255) DEFAULT NULL,
  `title` text,
  `title_line` varchar(255) DEFAULT NULL,
  `skills` longtext,
  `blocks` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `About_me` longtext,
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`),
  CONSTRAINT `content_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE
)

INSERT INTO `content` VALUES (1,1,'views/assets/Jesper/Home.main.image.png','Home','Creating and selling content','HTML5|CSS|JavaScript|PHP|Adobe|Retail|MySQL ','views/assets/Jesper/blocks/Project.1.block.png|views/assets/Jesper/blocks/Project.2.block.png|views/assets/Jesper/blocks/Project.3.block.png|views/assets/Jesper/blocks/Project.4.block.png','2024-10-20 21:35:57',NULL),(2,2,'views/assets/Jesper/About.main.image.png','About me','About me ',NULL,NULL,'2024-11-04 18:30:09','Hello! I’m Jesper, and I am currently studying Software Development. I am also a Shop Manager at Sony, where I focus on selling televisions. My passion for the latest TV technology motivates me to help customers find the best options for their home entertainment.\n\nIn my job at Sony, I enjoy working with people and making sure they have a great shopping experience. I guide customers through our wide selection of TVs, explaining the features and helping them choose the right model for their needs. Keeping up with the newest trends in TV technology allows me to give useful advice and answer any questions.\n\nCombining my studies with my work in retail helps me grow my technical skills and develop important communication and leadership abilities. I am excited to continue my journey in software development while sharing my love for TVs with others!');


DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `sub_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


INSERT INTO `projects` VALUES (1,'Sony','views/assets/Jesper/blocks/Project.1/Project.1.main.image.png','views/assets/Jesper/blocks/Project.1/project.1.sub-image.sony.svg'),(2,'Mediamarkt','views/assets/Jesper/blocks/Project.2/Project.2.main.image.png','views/assets/Jesper/blocks/Project.2/Project.2.sub-image.svg'),(3,'Code','','views/assets/Jesper/blocks/Project.3/Project.3.sub-image.svg'),(4,'Bmd',NULL,'views/assets/Jesper/blocks/Project.4/Project.4.sub-image.svg');


DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `header` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE
);
INSERT INTO `articles` VALUES (1,1,'My role in Sony','At Sony Benelux i am a Shop in Shop manager, i am fully responsible\nfor the sales and the stock inside my store, I have worked in 4\ndifferent stores since march 2024. I make sure that the store \nemployees have all the information they need to sell  my products.\nThese products can range from small bluetooth speakers \nall the way to enormous televisions. '),(2,1,'The challenges','In my Field of work there are a lot of different challenges, in my work\nat Sony its my responsibility to come up with the quickest and \ncheapest solution to the diverse challenges. \n\nFor example in July we had a major stock issue at Sony, but \ncustomers still wanted the products. The big problem was at the\nHolding company which distributes the stock to the different stores\nso the problem was thaxt I did not have the stock in store for the \ncustomers. So I Figured out a way to create backorders \nand force Holding to send stock to my store. the biggest problem\nwas thinking of a way that was cheap, and still in agreement \nwith the regulations i had to follow.  \n\nThis is a example of a challenge I have to go up against during my\nwork.'),(3,2,'Mediamarkt','My salesman work at the Mediamarkt started on January 2022, \nwhere I had the pleasure to work at one of the biggest and maybe\nthe most respected Consumer electronics store in the \nNetherlands. \n\nI worked on the KTV department, where i have specialized \nin selling Televisions and Soundbars. during my time at the Store\ni had the pleasure of learning a lot. I have learned about all the \ndifferent brands of televisions. it was also a great honor to be \nable to work in a top 6 store of the 52 stores in the Netherlands.\n\nduring my time at the Mediamarkt i have also specialized in \nthe sales and information of Square-trade. which is a insurance \nagency. so i could inform people about the best ways in \nkeeping their investments safe. I have achieved a certiFicate \nin this.\n\n\nI also learned the different business models which are applied in \nsuch a store, and was able to specialize in the different kind \nof systems. \n\n\nto conclude, I have worked with big economic cases. \nand specialized in a great variety of sales techniques, i have\nalso had the pleasure to work with some really amazing and\nwise people. '),(4,1,'Achievements','I have achieved quite a lot during my time at Sony, as of writing this \ni have achieved the title of Salesman of the month twice. And i have \nhad the pleasure of a visit from the Managing partners of Sony \nEurope in my most successful store. This was because of my \nexcellent IHS(In house share), Which was very consistent by being\nbetween the 25 and 30% for months. While other stores had a \nIHS being more in the Neighborhood of 5-10%. '),(5,1,'Conclusion','I am always learning and still learning, the goal for me at Sony is \nto be able to become an all round sales man. This means that i can\nsell in the east of the country just as good as i could do in the West \nor the South. This is a complicated thing because of the diverse \nset of people in the Netherlands. After i have achieved this \nI am planning to move up in the company. '),(6,3,'Software','I am currently studying Software Development at Windesheim University of Applied Sciences at the HBO level. Alongside my studies, I’ve developed a strong foundation in web development, particularly in web design with PHP. Through various projects, including building this website from scratch, I\'ve gained practical experience in PHP to create dynamic, responsive, and user-friendly web applications. Working with PHP has strengthened my understanding of backend development, server-side scripting, and database integration, allowing me to build more interactive and efficient websites. I’m always eager to expand my knowledge and refine my skills, continually seeking new challenges to further my expertise in software development and web design.'),(7,3,'Future','As my experience will progress, I will continue to add different new projects to this page :)'),(9,4,'Black-Magic-Design','I have built up a specialization in the Blackmagicdesign products and \ntheir software. i have worked profoundly with the mixer line of \nproducts, and the studio cameras and cinema pocket camera’s. \nI have done this while i was live-streaming for the OSG Hengelo \norganization. I have done streams ranging from simple concerts to \ncomplete open day’s, At these events i was the technical director \nor the producer'),(10,4,'Content','During my time at the MCT - Videoteam. I did livestreams with the streamlabs software and Twitch. I Have also used the Blackmagic cinema pocket, during these events. The location was primarily Metropool in Hengelo. I have also built up a proficient ability in using the Adobe suite and the Davinci suite');




-- Dump completed on 2024-11-03  0:52:56
