#
# TABLE STRUCTURE FOR: appel_offre
#

DROP TABLE IF EXISTS `appel_offre`;

CREATE TABLE `appel_offre` (
  `ida` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `appel_offre` (`ida`, `nom`, `description`, `created_at`, `image`) VALUES (1, 'MIse en place d\'une application web a l\'ONG medair connceter sur la base de donnees mongo DB. ', 'Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.', '2021-01-26 15:52:26', '64600145.png');
INSERT INTO `appel_offre` (`ida`, `nom`, `description`, `created_at`, `image`) VALUES (2, 'Appel a l\'entreprise TECH pour la conception d;une base donne pour collecter les donneepie tshibanda', 'Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.', '2021-01-26 15:53:42', '1741761157.png');
INSERT INTO `appel_offre` (`ida`, `nom`, `description`, `created_at`, `image`) VALUES (3, 'Un Manager en charge des Ressources Humaines pour la ville de Kinshasa', 'Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.', '2021-01-26 15:54:16', '1940729887.png');
INSERT INTO `appel_offre` (`ida`, `nom`, `description`, `created_at`, `image`) VALUES (4, 'Le développement de technologie js', 'Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.', '2021-01-26 16:01:57', '367825209.jpg');
INSERT INTO `appel_offre` (`ida`, `nom`, `description`, `created_at`, `image`) VALUES (5, 'Le développement de technologie js avec nodejs', 'Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.', '2021-01-26 16:02:41', '1023295912.JPG');
INSERT INTO `appel_offre` (`ida`, `nom`, `description`, `created_at`, `image`) VALUES (6, 'Devenir swagga en symphony', 'Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.', '2021-01-26 16:03:56', '1492529260.jpg');
INSERT INTO `appel_offre` (`ida`, `nom`, `description`, `created_at`, `image`) VALUES (7, 'la création de robot intelligent dans la technologie actuelle', 'Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam.', '2021-01-26 16:05:40', '1094574055.jpg');
INSERT INTO `appel_offre` (`ida`, `nom`, `description`, `created_at`, `image`) VALUES (8, 'la formation en vue js et différentes technologies js se livre ce jeudi...', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '2021-01-26 16:07:40', '1975995909.png');


#
# TABLE STRUCTURE FOR: article
#

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `idart` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `description` text,
  `lien` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(300) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  PRIMARY KEY (`idart`),
  KEY `idcat` (`idcat`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `category` (`idcat`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (1, 'Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.', 'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.', '', '2021-01-25 07:08:48', '1259151316.jpg', 'texte', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (2, 'les cyclistes', 'Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada', '', '2021-01-25 07:48:26', '611462585.jpg', 'texte', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (3, 'le tenis en ende est surpris par un marabou', 'Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada', '', '2021-01-25 07:50:18', '1872221948.jpg', 'texte', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (4, 'Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.', 'Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.\r\n\r\nSuspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.', 'https://unikin.org', '2021-01-25 07:59:27', '49048966.jpg', 'video', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (5, 'Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.', 'Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada.', '', '2021-01-25 08:04:35', '153541880.jpg', 'texte', 4);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (6, 'Meilleure santé garantie lula le boss', '   cool ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-27 16:34:10', '2004758736.jpg', 'texte', 1);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (7, 'ma mifa est en danger pour le moment', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-27 16:37:42', '1111623679.jpg', 'texte', 6);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (8, 'je me retrouve un peu isolé de mes coéquipiers à cause de l\'égoïsme', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.youtube.com/watch?v=no35TFWg0CU&list=PL0TnHYy48T2zwGWVTcRFAbKpxCM-66F4p&index=3', '2021-01-27 16:37:42', '934132063.jpg', 'video', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (9, 'la rdc s\'est imposé face aux Nigers moyennant un score de 2 buts à 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ' https://www.youtube.com/watch?v=wgGkF4k9c7A', '2021-01-27 16:37:42', '1592474412.jpg', 'video', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (10, 'Sport Phasellus ultrices nulla quis nibh. Quisque a lectus. ', 'Sport\r\nPhasellus ultrices nulla quis nibh. Quisque a lectus. ', '', '2021-01-27 16:37:43', '48562828.jpg', 'texte', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (11, 'le sport de la mer est vivement cool', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '2021-01-27 16:57:44', '1872770310.jpg', 'texte', 1);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (12, 'les nageurs du lac kivu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '2021-01-27 16:57:44', '1929057932.jpg', 'texte', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (13, 'utilisation de qrcode bet', 'cool le boss', '', '2021-01-28 17:25:52', '1095126010.jpg', 'texte', 7);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (14, 'entrepreneuriat n\'est pas facile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', '2021-01-28 17:27:57', '720904270.jpg', 'video', 7);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (15, 'le plus beau momment en entreprenaria est proche', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', '2021-01-28 17:28:39', '469350786.jpg', 'video', 7);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (16, 'Entreprendre c\'est risqué', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:29:19', '656333887.jpg', 'texte', 7);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (17, 'la meilleure facon d\'apprendre est de vouloir travailler', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:30:17', '894158273.jpg', 'texte', 7);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (18, 'je suisun entrepreneur en temps plein!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', '2021-01-28 17:32:36', '781705702.jpg', 'video', 7);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (19, 'la santé est indispansable dans la vie de tout himain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:33:52', '139682878.png', 'texte', 6);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (20, 'la malaria est devenue un danger pour les enfants', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:34:51', '74654028.jpg', 'texte', 6);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (21, ';a cpn pour la femme anceinte est indispansable', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:35:36', '1050162844.jpg', 'texte', 6);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (22, 'le covid19 s\'est évanué  en afrique', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', '2021-01-28 17:40:33', '498406782.jpg', 'video', 6);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (23, 'la malaria est devenue un obstacle pour l\'emergence de la population', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:42:58', '1985677735.jpg', 'texte', 6);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (24, 'le volume de la croissance évolue de manière cool', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:46:19', '1708556988.png', 'texte', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (25, 'le button de la revolution de c3 en python', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:47:10', '1520921562.jpg', 'texte', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (26, 'la technologie thensor flow js est adapté pour l\'intelligence artificiale', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:49:11', '664702000.jpg', 'texte', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (27, 'la technologie de vpn est pour le mo,ent vide', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 17:50:29', '94678394.png', 'texte', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (28, 'heath malamu', '                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n                  ', '', '2021-01-28 17:52:38', '833774965.jpg', 'texte', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (29, 'l\'économie est en baisse', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 18:00:53', '1112273971.jpg', 'texte', 4);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (30, 'le choix choix d\'une meilleure gestion est à vous', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 18:03:41', '13488270.jpg', 'texte', 4);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (31, 'le prix  n\'est pas facile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 18:07:55', '1526661656.jpg', 'texte', 4);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (32, 'le volume de la croissance évolue de manière cool', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 18:11:50', '768662766.jpg', 'texte', 4);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (33, 'jojo le volume de la croissance évolue de manière cool', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 18:12:51', '775571175.jpg', 'texte', 4);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (34, 'le bilan provisoire de la communication', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', '2021-01-28 18:16:10', '1657234175.jpg', 'texte', 1);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (35, 'mon agriculture n\'est pas tout affait simple comme tel', '                                                                        <div style=\"text-align: center;\"><b style=\"font-size: 0.875rem;\">mon agriculture n\'est pas tout affait simple à voir</b></div><div style=\"text-align: left;\"><span style=\"font-size: 0.875rem;\"><div style=\"\">   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div style=\"\">    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div style=\"\">    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div style=\"\">    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div style=\"\">    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div style=\"\">    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></span></div>\r\n              \r\n              \r\n              \r\n              ', 'https://www.youtube.com/watch?v=no35TFWg0CU&list=PL0TnHYy48T2zwGWVTcRFAbKpxCM-66F4p&index=3', '2021-02-05 11:19:21', '2116540385.jpg', 'video', 4);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (37, 'joue comme jamais', '                                            &lt;b&gt;                      Lorem ipsum dolor sit amet,&lt;/b&gt; consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit &lt;span style=&quot;color: rgb(0, 0, 255);&quot;&gt;anim id est laborum.\r\n                  \r\n                  &lt;/span&gt;\r\n                  ', '', '2021-02-05 11:21:18', '2034243819.jpg', 'texte', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (38, 'jour et jour  est plus dans la vie', '                      &lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;text-align: left;&quot;&gt;&lt;b&gt;jour et jour&amp;nbsp;&lt;/b&gt;&lt;/span&gt;&lt;b&gt;la formation ainsi que toutes les instructions dont j\'ai apprises au de \r\nla formation&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;\r\n                  \r\n                  \r\n                  \r\n                  ', '', '2021-02-05 11:41:40', '1958409107.jpg', 'texte', 1);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (39, 'Le développement de technologie qrcode ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '2021-02-05 11:41:40', '1904057878.jpg', 'texte', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (40, 'Hook en react js fait trembler le monde', 'cool', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', '2021-02-05 11:52:48', '2018907131.jpg', 'video', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (41, 'pie tshibanda', '&lt;p&gt;&lt;b&gt;Cool le boss!&lt;/b&gt;&lt;/p&gt;&lt;p&gt;cool le plus beau de la planette&lt;/p&gt;', '', '2021-02-05 13:59:50', '609501475.jpg', 'texte', 2);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (42, 'cool', '&lt;div&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;', '', '2021-02-06 12:56:30', '518524426.jpg', 'texte', 4);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (43, 'afia bora', '&lt;b&gt;Afia bora&lt;/b&gt; est une plateforme web de suivi électronique de dossier de malade par la technologie QR code...', '', '2021-03-22 12:16:17', '784122067.jpg', 'texte', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (44, 'sifa bule', 'cool', '', '2021-03-23 11:00:18', '1833100525.jpg', 'texte', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (45, 'vendu esimbi', '                      &lt;div class=&quot;col-md-12 mb-2&quot; style=&quot;width: 447.547px; color: rgb(82, 100, 132);&quot;&gt;&lt;div class=&quot;nk-block-head-content text-center&quot;&gt;&lt;h4 class=&quot;nk-block-title fw-normal&quot;&gt;Qui sommes-nous au juste?&lt;/h4&gt;&lt;div class=&quot;nk-block-des&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;ul class=&quot;list list-lg list-checked-circle list-success&quot;&gt;&lt;li&gt;Il est hélas devenu évident aujourd\'hui que notre technologie a dépassé notre humanité.&lt;/li&gt;&lt;li&gt;Ne te sers pas de la technologie comme d’un substitut à la chaleur humaine.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;ol&gt;&lt;li style=&quot;width: 447.547px; color: rgb(82, 100, 132);&quot;&gt;&lt;b&gt;Devetech &lt;/b&gt;est une startup qui vise à promouvoir l\'intégrité des jeunes en appliquant la technologie pour permettre l\'avancement de la société.&lt;br&gt;Notre contribution dans la société est le faite de voir comment la jeunesse progresse mieux en contribuant aux différents aspects qui aident la société à s\'en sortir dans le Cao.&lt;br&gt;La technologie dont nous parlons fera en sorte de contribuer à l\'émergence de toute la jeunesse et la société en particulier.&lt;br&gt;Nous devons considérer la technologie actuelle comme une arme efficace pour changer le monde.&lt;br&gt;&lt;/li&gt;&lt;/ol&gt;\r\n                            \r\n                  ', '', '2021-03-23 11:02:03', '1314135589.jpg', 'texte', 5);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES (47, 'petit mais je pique', '                  <p>                      <span style=\"background-color: rgb(247, 247, 247); color: rgb(0, 0, 255);\">petit mais je pique</span> est une chanson de  jérémie<b> joh sumbu</b> dans son album intitulé  <b>ESIMBI </b></p><p>ce beau!</p>\r\n              ', '', '2021-03-26 11:44:32', '453153648.jpg', 'texte', 5);


#
# TABLE STRUCTURE FOR: category
#

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES (1, 'politique', '2021-01-24 12:34:18');
INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES (2, 'sport', '2021-01-24 12:34:42');
INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES (4, 'économique', '2021-01-24 14:36:21');
INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES (5, 'technologique', '2021-01-24 14:36:31');
INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES (6, 'santé', '2021-01-24 14:36:38');
INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES (7, 'entrepreneuriat  ', '2021-01-28 14:42:50');


#
# TABLE STRUCTURE FOR: contact
#

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `sujet` varchar(700) DEFAULT NULL,
  `message` text,
  `fichier` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`, `fichier`, `created_at`) VALUES (4, 'pascale tumba', 'pascale@gmail.com', 'information personnele en rapport avec le corona virus', 'je suis pascale depuis butembo ...', '1224128450.txt', '2020-09-06 20:03:18');
INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`, `fichier`, `created_at`) VALUES (5, 'yuma kayanda françois', 'yuma@gmail.com', 'savoir plus sur vous le sport', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '721465673.JPG', '2020-09-07 19:39:30');
INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`, `fichier`, `created_at`) VALUES (6, 'yuma kayanda françois', 'yuma@gmail.com', 'information personnele', 'je suis yuma kayanda depuis goma je voulais savoir les informations', NULL, '2020-09-07 19:41:01');
INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`, `fichier`, `created_at`) VALUES (7, 'kasumba kipindula bertin', 'kasumba@gmail.com', 'information personnele sur le podcast', 'bonjour le doyen! ', '851559741.jpg', '2021-02-07 17:28:00');


#
# TABLE STRUCTURE FOR: contrat
#

DROP TABLE IF EXISTS `contrat`;

CREATE TABLE `contrat` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `nomc` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `contrat` (`idc`, `nomc`, `created_at`) VALUES (1, 'CDD', '2020-08-08 13:24:21');
INSERT INTO `contrat` (`idc`, `nomc`, `created_at`) VALUES (2, 'CDI', '2020-08-08 13:29:26');


#
# TABLE STRUCTURE FOR: demandejob
#

DROP TABLE IF EXISTS `demandejob`;

CREATE TABLE `demandejob` (
  `idd` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `idjob` int(11) DEFAULT NULL,
  `codejob` varchar(300) DEFAULT NULL,
  `motivation` text,
  `fichier` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `experienceP` varchar(300) DEFAULT NULL,
  `niveau` varchar(300) DEFAULT NULL,
  `langue` varchar(300) DEFAULT NULL,
  `formation` varchar(300) DEFAULT NULL,
  `etat` int(11) DEFAULT '0',
  PRIMARY KEY (`idd`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `demandejob_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `experienceP`, `niveau`, `langue`, `formation`, `etat`) VALUES (1, 5, 10, '117052625', 'je suis une personne qui travaille avec rigueur et la sérosité', '237195598.pdf', '2021-04-02 13:10:02', '< 5 ans', 'Licencié', 'Français courant', 'Oui j\'en ai plus suivi', 1);
INSERT INTO `demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `experienceP`, `niveau`, `langue`, `formation`, `etat`) VALUES (2, 3, 10, '117052625', 'Perspicace, apte, créative, patient, analyste, ingénieux', '1274674772.pdf', '2021-04-02 13:17:35', '< 1 ans', 'Gradué', 'Français courant', 'Oui j\'en ai plus suivi', 1);
INSERT INTO `demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `experienceP`, `niveau`, `langue`, `formation`, `etat`) VALUES (3, 8, 10, '117052625', 'Connaissance en Word et Excel, j\'ai le sens de leadership visionnaire\r\n\r\n', '725452879.pdf', '2021-04-02 13:25:32', '< 10 ans', 'Licencié', 'Français courant', 'Non pas encore !', 0);
INSERT INTO `demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `experienceP`, `niveau`, `langue`, `formation`, `etat`) VALUES (4, 4, 10, '117052625', 'Capacité d\'adaptation, maîtrise de l\'outil informatique, travail en équipe', '1085767464.pdf', '2021-04-02 13:28:38', '< 1 ans', 'Dimplômé', 'Français courant', 'Non pas encore !', 0);
INSERT INTO `demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `experienceP`, `niveau`, `langue`, `formation`, `etat`) VALUES (5, 5, 4, '225175515', '- Assurer la sécurité de données\r\n- Garder  les informations secrètes de l\'entreprise\r\n- Bonne maitrise en unix, linix, windows ...', '1191270670.pdf', '2021-04-05 13:05:04', '< 5 ans', 'Licencié', 'Français courant', 'Oui j\'en ai plus suivi', 0);
INSERT INTO `demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `experienceP`, `niveau`, `langue`, `formation`, `etat`) VALUES (6, 5, 3, '699086254', 'Prêt pour toute chose!', '1562911993.pdf', '2021-04-05 16:12:40', '< 10 ans', 'Licencié', 'Français courant', 'Oui j\'en ai plus suivi', 0);
INSERT INTO `demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `experienceP`, `niveau`, `langue`, `formation`, `etat`) VALUES (7, 8, 3, '699086254', 'Je suis prêt en tout!', '1241191522.pdf', '2021-04-05 17:48:26', '< 1 ans', 'Gradué', 'Français courant', 'Oui j\'en ai plus suivi', 0);
INSERT INTO `demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `experienceP`, `niveau`, `langue`, `formation`, `etat`) VALUES (8, 23, 11, '148922420', 'Je suis prêt à tout:.', '1659019724.pdf', '2021-04-05 23:44:18', '< 1 ans', 'Dimplômé', 'Français courant', 'Oui j\'en ai plus suivi', 0);


#
# TABLE STRUCTURE FOR: education
#

DROP TABLE IF EXISTS `education`;

CREATE TABLE `education` (
  `idedic` int(11) NOT NULL AUTO_INCREMENT,
  `nom_univ` varchar(400) DEFAULT NULL,
  `gradeobtenu` varchar(400) DEFAULT NULL,
  `localisation` varchar(400) DEFAULT NULL,
  `annee_obt` date DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `description` text,
  PRIMARY KEY (`idedic`),
  KEY `id` (`id`),
  CONSTRAINT `education_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `education` (`idedic`, `nom_univ`, `gradeobtenu`, `localisation`, `annee_obt`, `id`, `created_at`, `description`) VALUES (1, 'ISIG-GOMA', 'gradué  en informatique de gestion', 'RDC nord-kivu goma centre ville', '2020-12-17', 3, '2021-03-31 00:33:43', 'Excepteur sint occaecat cupidatat non proident sunt ien culpa officia deserunt mollitie anim idest laborum sed ut perspiciatis unde omnis......');
INSERT INTO `education` (`idedic`, `nom_univ`, `gradeobtenu`, `localisation`, `annee_obt`, `id`, `created_at`, `description`) VALUES (3, 'INPP goma', 'brevé de formation informatique appliqué', 'RDC nord-kivu goma centre ville', '2019-03-31', 3, '2021-03-31 00:38:16', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend...');
INSERT INTO `education` (`idedic`, `nom_univ`, `gradeobtenu`, `localisation`, `annee_obt`, `id`, `created_at`, `description`) VALUES (4, 'Institut tabernacle', 'Diplômé d\'état en biologie chimie', 'RDC maniema kindu centre ville', '2017-03-17', 3, '2021-03-31 00:39:01', 'Excepteur sint occaecat cupidatat non proident sunt ien culpa officia deserunt mollitie anim idest laborum sed ut perspiciatis unde omnis......');
INSERT INTO `education` (`idedic`, `nom_univ`, `gradeobtenu`, `localisation`, `annee_obt`, `id`, `created_at`, `description`) VALUES (5, 'ISIG-GOMA', 'Gradouate in it software computer  science', 'RDC nord-kivu goma centre ville', '2020-04-03', 5, '2021-04-03 08:35:17', 'isig goma promotion 2019-2020');
INSERT INTO `education` (`idedic`, `nom_univ`, `gradeobtenu`, `localisation`, `annee_obt`, `id`, `created_at`, `description`) VALUES (6, 'université wiliam boom', 'licenciée  en informatique des affaires', 'RDC kinshasa', '2020-04-10', 6, '2021-04-03 08:43:35', 'promotion 2019-2020');
INSERT INTO `education` (`idedic`, `nom_univ`, `gradeobtenu`, `localisation`, `annee_obt`, `id`, `created_at`, `description`) VALUES (7, 'université de kindu', 'licenciée  en économie monétaire', 'RDC maniema kindu centre ville', '2020-04-03', 16, '2021-04-03 09:05:16', '                        \r\n                      ');
INSERT INTO `education` (`idedic`, `nom_univ`, `gradeobtenu`, `localisation`, `annee_obt`, `id`, `created_at`, `description`) VALUES (8, 'ISIG-GOMA', 'Gradouate in it software computer  science', 'RDC nord-kivu goma centre ville', '2019-12-12', 23, '2021-04-05 23:41:44', 'Promotion 2019');


#
# TABLE STRUCTURE FOR: entreprise
#

DROP TABLE IF EXISTS `entreprise`;

CREATE TABLE `entreprise` (
  `identrep` int(11) NOT NULL AUTO_INCREMENT,
  `ceo` int(11) DEFAULT NULL,
  `nom` varchar(700) DEFAULT NULL,
  `description` text,
  `idPays` int(11) DEFAULT NULL,
  `idp` int(11) DEFAULT NULL,
  `idv` int(11) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  `typeEntrep` varchar(300) DEFAULT NULL,
  `nombreEmploye` varchar(300) DEFAULT NULL,
  `siteweb` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `logo` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`identrep`),
  KEY `ceo` (`ceo`),
  KEY `idPays` (`idPays`),
  KEY `idp` (`idp`),
  KEY `idv` (`idv`),
  KEY `idcat` (`idcat`),
  CONSTRAINT `entreprise_ibfk_1` FOREIGN KEY (`ceo`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `entreprise_ibfk_2` FOREIGN KEY (`idPays`) REFERENCES `tbl_pays` (`idPays`) ON DELETE CASCADE,
  CONSTRAINT `entreprise_ibfk_3` FOREIGN KEY (`idp`) REFERENCES `province` (`idp`) ON DELETE CASCADE,
  CONSTRAINT `entreprise_ibfk_4` FOREIGN KEY (`idv`) REFERENCES `ville` (`idv`) ON DELETE CASCADE,
  CONSTRAINT `entreprise_ibfk_5` FOREIGN KEY (`idcat`) REFERENCES `tbl_category` (`idcat`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (1, 13, 'Databank mjn', '	        			        		une startup s\'occupant de la technologie en rdc précisément dans la ville de Goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://localhost/devtechMedia/entreprise/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1252107077.jpg');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (2, 12, 'White fondation', 'White-fondation est un centre de formation Moderne spécialisé uniquement pour l’analyse des informations, programmation Informatique et Pour le système d’administration de base de donnée Relationnelle.', 1, 19, 19, 2, 'public', '50-100', 'http://whitefondation.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '51969925.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (3, 14, 'web lessons', 'est une startup de la technologie', 1, 17, 17, 4, 'privée', '10-50', 'http://webslesson.info/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '872413610.jpg');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (5, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (6, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (7, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (8, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (9, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (10, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (11, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (12, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (13, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (14, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (15, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (16, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (17, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (18, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (19, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (20, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (21, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (22, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (23, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (24, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');
INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES (25, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png');


#
# TABLE STRUCTURE FOR: evenement
#

DROP TABLE IF EXISTS `evenement`;

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text,
  `debit_event` date DEFAULT NULL,
  `fin_event` date DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: galery
#

DROP TABLE IF EXISTS `galery`;

CREATE TABLE `galery` (
  `idg` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(700) DEFAULT NULL,
  PRIMARY KEY (`idg`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `galery` (`idg`, `image`, `created_at`, `url`) VALUES (2, '1011765692.jpg', '2021-02-18 13:26:59', 'https://www.linkedin.com/psettings/?trk=help_settings');
INSERT INTO `galery` (`idg`, `image`, `created_at`, `url`) VALUES (5, '106744769.jpg', '2021-02-18 13:34:05', 'https://www.linkedin.com/psettings/?trk=help_settings');
INSERT INTO `galery` (`idg`, `image`, `created_at`, `url`) VALUES (6, '1260225615.jpg', '2021-02-18 13:34:29', 'https://getbootstrap.com/docs/4.0/components/card/#header-and-footer');
INSERT INTO `galery` (`idg`, `image`, `created_at`, `url`) VALUES (7, '1247634331.jpg', '2021-03-22 11:08:38', 'https://getbootstrap.com/docs/4.0/components/card/#header-and-footer');


#
# TABLE STRUCTURE FOR: galery2
#

DROP TABLE IF EXISTS `galery2`;

CREATE TABLE `galery2` (
  `idg` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(700) DEFAULT NULL,
  PRIMARY KEY (`idg`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `galery2` (`idg`, `image`, `created_at`, `url`) VALUES (10, '1236976819.PNG', '2021-03-01 16:29:38', 'https://getbootstrap.com/docs/4.0/components/card/#header-and-footer');
INSERT INTO `galery2` (`idg`, `image`, `created_at`, `url`) VALUES (11, '2111723120.jpg', '2021-03-01 16:29:38', NULL);
INSERT INTO `galery2` (`idg`, `image`, `created_at`, `url`) VALUES (14, '151144836.jpg', '2021-03-22 11:19:14', NULL);


#
# TABLE STRUCTURE FOR: job
#

DROP TABLE IF EXISTS `job`;

CREATE TABLE `job` (
  `idjob` int(11) NOT NULL AUTO_INCREMENT,
  `ids` int(11) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `nombre_post` int(11) DEFAULT NULL,
  `experience` varchar(300) DEFAULT NULL,
  `idcontrat` int(11) DEFAULT NULL,
  `grade` varchar(300) DEFAULT NULL,
  `idsalaire` int(11) DEFAULT NULL,
  `date_fin_depot` date DEFAULT NULL,
  `localisation` varchar(300) DEFAULT NULL,
  `qualification` varchar(300) DEFAULT NULL,
  `fichier_job` varchar(300) DEFAULT NULL,
  `description_job` text,
  `connaissance` text,
  `identrep` int(11) DEFAULT NULL,
  `codejob` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idjob`),
  KEY `idcat` (`idcat`),
  KEY `ids` (`ids`),
  KEY `idcontrat` (`idcontrat`),
  KEY `idsalaire` (`idsalaire`),
  KEY `identrep` (`identrep`),
  CONSTRAINT `job_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `tbl_category` (`idcat`) ON DELETE CASCADE,
  CONSTRAINT `job_ibfk_2` FOREIGN KEY (`ids`) REFERENCES `service` (`ids`) ON DELETE CASCADE,
  CONSTRAINT `job_ibfk_3` FOREIGN KEY (`idcontrat`) REFERENCES `contrat` (`idc`) ON DELETE CASCADE,
  CONSTRAINT `job_ibfk_4` FOREIGN KEY (`idsalaire`) REFERENCES `tbl_salaire` (`idsalaire`) ON DELETE CASCADE,
  CONSTRAINT `job_ibfk_5` FOREIGN KEY (`identrep`) REFERENCES `entreprise` (`identrep`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (2, 1, 4, 'administration s i', 1, '2 mois au plus', 1, 'gestion système d\'information', 6, '2021-04-03', 'RDC nord-kivu goma centre ville', 'Licencié ', '1314792351.pdf', 'Poste proposé : Administrateur Système\r\nNous recherchons des profils et des CV d’Administrateurs Système que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement.\r\n\r\nMissions :\r\n\r\nEffectuer les tests sur les systèmes mis en place\r\nRépondre aux normes et contraintes de sécurité\r\nInstaller et paramétrer le réseau informatique\r\nAssurer une veille technologique\r\nMettre à jour les systèmes.', 'Profil recherché pour le poste : Administrateur Système\r\nDe formation Bac+5 en informatique ou autres ;\r\n5 ans d’expérience au minimum ;\r\nMaîtrise des logiciels de l’infrastructure technique des systèmes d’exploitation : UNIX, LINUX, MVS, Windows… ;\r\nRigueur ;\r\nSens de l’analyse.', 1, '1054121914');
INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (3, 1, 10, 'Développeur PHP Full Stack Senior', 5, '2 mois au plus', 1, 'maitrise en leader ship', 3, '2021-04-25', 'RDC nord-kivu goma centre ville', 'Licencié ', '1196635145.pdf', 'Nous recherchons des profils et des CV de  Développeurs PHP Full Stack Seniors (H/F) que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement. Missions: Écrire un code de haute qualité avec une bonne couverture de test et b ...', 'connaissance en html5, css3, php et technologie js', 1, '699086254');
INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (4, 1, 4, 'Développeurs Full Stack Java Seniors', 3, '3 ans deplus', 1, 'gestion système d\'information', 7, '2021-04-29', 'RDC nord-kivu goma centre ville', 'Licencié ', '286832462.pdf', 'Nous recherchons des profils et des CV de  Développeurs Full Stack Java Seniors  que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement.- 5 ans d\'expérience- Bonne maîtrise des frameworks Spring & Angular. Inform ...', 'Maîtrise des logiciels de l’infrastructure technique des systèmes d’exploitation : UNIX, LINUX, MVS, Windows… ;\r\nRigueur ;\r\nSens de l’analyse.', 1, '225175515');
INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (5, 1, 3, 'Football Data Scout- Lubumbashi', 6, '3 ans deplus', 1, 'maitrise en leader ship', 2, '2021-04-05', 'RDC nord-kivu goma centre ville', 'Diplômé', '891435469.pdf', 'SportsModule is looking for Football Data Scouts in Lubumbashi, Democratic Republic of the Congo. SportsModule Sports Scouts are responsible for attending sports events and reporting all the key events as they happen through a specially designed mobile in ...', 'maitrise de football', 1, '372884255');
INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (6, 1, 4, 'ABT ASSOCIATES', 2, '3 ans deplus', 2, 'gestion système d\'information', 9, '2021-04-03', 'RDC nord-kivu goma centre ville', 'Licencié ', '1424783165.pdf', 'The International Development Division focuses on improving the lives and economic well-being of people in lower and middle-income countries. We command technical expertise in health, agriculture, climate change, food security and governance€”as well as in international evaluation. Our multi-layered health portfolio includes policy, health promotion and disease prevention, health finance, and health systems management. In partnership with government clients and local experts, our high-quality programs in Africa, Asia, Latin America, and the Middle East are known for impact and innovation.\r\nAperçu de l\'organisation\r\nAbt Associates (Abt) est un leader mondial motivé par le sens de sa mission dans la recherche, l\'évaluation et la mise en œuvre de programmes dans les domaines du développement international, de la santé, des politiques sociales et environnementales. Reconnue pour sa rigueur dans la résolution de défis complexes, Abt est régulièrement classée parmi les 20 premières sociétés de recherche mondiales et parmi les 40 premiers innovateurs en développement international. L\'entreprise possède de multiples bureaux aux États-Unis et des bureaux de programme dans plus de 40 pays, y compris en Haïti. Au service des secteurs public et privé, Abt soutient les processus de gouvernance participative qui responsabilisent les citoyens et favorisent la responsabilisation et la transparence entre les secteurs. Notre impact se fait sentir dans des institutions réactives et inclusives, des communautés autonomisées, un accès équitable aux services publics, une mobilisation et une gestion améliorées des ressources financières et un environnement plus propice à la croissance économique et aux opportunités.\r\nOpportunité\r\nLe Programme de Santé intégré de l\'USAID (USAID IHP) soutient la stratégie de l\'USAID sur le renforcement des systèmes de santé en RDC. L\'USAID cherche à renforcer la capacité des institutions et des communautés congolaises à fournir des services de santé intégrés et de qualité pour améliorer durablement l\'état de santé de la population congolaise.\r\nPrincipaux rôles et responsabilités sont\r\nL\'assistant aux  Operations  répondra  au EEI/HSS Specialist  et participera dans le processus d’acquisition, systèmes d’enregistrement et de contrôle, processus de stockage, de sortie et réapprovisionnement.', 'Connaissance dans la logistique des voyages, processus d’obtention des visas  et l’appui logistique des ateliers souhaitée\r\nExcellente connaissance et expérience de Windows, Word, Excel, PowerPoint et d\'autres logiciels de traitement de données requis.\r\nExpérience Quick Books souhaitée.\r\nCapacité de planifier et d\'exécuter de façon autonome des tâches complexes tout en tenant compte des détails de la gestion quotidienne\r\n Avoir un sens d’organisation élevé et du respect des deadlines.\r\nCapacité d\'évaluer les problèmes et d\'élaborer des solutions.\r\nExcellentes aptitudes à la communication interpersonnelle et à l\'organisation.\r\nMaîtrise du français et  des compétences en communication verbale et écrite en anglais sont souhaitables', 2, '655150429');
INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (7, 1, 1, 'Superviseur Protection et Autonomisation de la femme ', 3, '7 mois au plus', 2, 'gestion système d\'information', 8, '2021-04-24', 'RDC nord-kivu goma centre ville', 'Gradué  ', '1541333659.pdf', '																		Requête nº: req12424 Intitulé de poste: Superviseur Protection et Autonomisation de la femme (Superviseur PAF) Secteur d’activité: Protection et autonomisation des femmes Type de contrat: Régulier Taux d’occupation: Plein temps Ouvert aux expatriés: Non L ...\r\nRégion de : Kananga															', '																		(1) year of experience and high school diploma OR the equivalent combination of education and experience. \r\nAbt Associates is an Affirmative Action/Equal Opportunity employer committed to fostering a diverse workforce.  Abt Associates provides market-competitive salaries and comprehensive employee benefits.															', 2, '1525866664');
INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (8, 1, 4, 'Administrateur Système', 2, '8 ans deplus', 1, 'gestion système d\'information', 9, '2021-04-22', 'RDC maniema kindu centre ville', 'Licencié ', '546844553.pdf', '											 Nous recherchons des profils et des CV d’Administrateurs Système que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement.\r\n\r\nMissions :\r\n\r\nEffectuer les tests sur les systèmes mis en place\r\nRépondre aux normes et contraintes de sécurité\r\nInstaller et paramétrer le réseau informatique\r\nAssurer une veille technologique\r\nMettre à jour les systèmes.										', '												Profil recherché pour le poste : Administrateur Système\r\nDe formation Bac+5 en informatique ou autres ;\r\n5 ans d’expérience au minimum ;\r\nMaîtrise des logiciels de l’infrastructure technique des systèmes d’exploitation : UNIX, LINUX, MVS, Windows… ;\r\nRigueur ;\r\nSens de l’analyse.										', 3, '1104163385');
INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (9, 1, 2, 'Digital Marketing Specialist', 1, '3 ans deplus', 1, 'maitrise en neuro marketing', 3, '2021-04-30', 'RDC maniema kindu centre ville', 'Licencié ', '1073914806.pdf', 'Missions :Plan and execute all digital marketing, including SEO/SEM, marketing database, email, social media and display advertising...\r\nRégion de : Kinshasa', 'stratégie en marketing digital', 3, '1955862089');
INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (10, 1, 3, 'Spécialiste en Electrification Solaire', 1, '3 ans deplus', 1, 'maitrise en électricité générale', 3, '2021-04-27', 'RDC nord-kivu goma centre ville', 'Licencié ', '823868097.pdf', 'Nous recherchons un Spécialiste en Electrification Solaire.', 'électricité générale', 2, '117052625');
INSERT INTO `job` (`idjob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `codejob`) VALUES (11, 1, 4, 'Développement des applications informatiques', 2, '4 ans deplus', 1, 'gestion système d\'information', 8, '2021-04-15', 'RDC nord-kivu goma centre ville', 'Licencié ', '1087776685.pdf', 'connaissance en html5, css3, nodejs,  vuejs,reactjs et ttoute technologie js actuelle', 'Nous recherchons des profils et des CV de Développeurs JAVASCRIPT Full Stack Seniors (H/F) que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement. Missions: Écrire un code de haute qualité avec une bonne couverture de test et b ...', 25, '148922420');


#
# TABLE STRUCTURE FOR: maison
#

DROP TABLE IF EXISTS `maison`;

CREATE TABLE `maison` (
  `idm` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `description` text,
  `adresse` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(300) DEFAULT NULL,
  `auteur` varchar(300) DEFAULT NULL,
  `telephone` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idm`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (1, 'boutique tukoo tuu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'quartier Tmk  goma ', '2021-01-26 00:33:44', '1851866687.jpg', NULL, NULL);
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (2, 'Maison noir', 'quartier', 'quartier offiche  goma ', '2021-01-26 00:34:53', '826175757.jpg', NULL, NULL);
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (3, 'Maison coco', '	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'quartier Tmk  goma ', '2021-01-26 00:35:28', '2008908078.jpg', NULL, NULL);
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (4, 'Maison  blanche moderne', '	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'office 1', '2021-01-26 00:35:55', '660183779.jpg', 'honoré hounuanu', '081989152');
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (6, 'Coucou maison', '	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'quartier birere', '2021-01-26 00:36:41', '60453773.jpg', NULL, NULL);
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (7, 'super marquet', '	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'quartier Tmk  goma ', '2021-01-26 00:37:04', '535563827.jpg', NULL, NULL);
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (8, 'maison kasavubu', '	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Kinshasa quartier  kasavubu', '2021-01-26 00:37:44', '163155972.jpg', NULL, NULL);
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (9, 'Ce nous le boss maison', '	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'quartier offiche  goma ', '2021-01-26 00:38:11', '1497775866.jpg', NULL, NULL);
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (10, 'kozua nice house', '	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'quartier birere', '2021-01-26 00:38:43', '180665281.jpg', NULL, NULL);
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (11, 'locale rencontre', 'coool', 'quartier  des volcans goma ', '2021-01-26 13:34:40', '246460497.jpg', 'john smith', '081989152');
INSERT INTO `maison` (`idm`, `nom`, `description`, `adresse`, `created_at`, `image`, `auteur`, `telephone`) VALUES (12, 'secure plus', 'est une maison de 8 chambres plus une douche et 2 debot.', 'quartier Tmk  goma ', '2021-02-17 21:21:40', '492644552.jpg', 'sumaili shabani', '+243817883541');


#
# TABLE STRUCTURE FOR: messagerie
#

DROP TABLE IF EXISTS `messagerie`;

CREATE TABLE `messagerie` (
  `idmessage` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_recever` int(11) DEFAULT NULL,
  `message` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `code` longtext,
  `fichier` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idmessage`),
  KEY `id_user` (`id_user`),
  KEY `id_recever` (`id_recever`),
  CONSTRAINT `messagerie_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `messagerie_ibfk_2` FOREIGN KEY (`id_recever`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (1, 8, 2, 'bonjour boss!', '2021-03-24 12:41:11', '795220876b', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (2, 2, 8, 'ça va boss?', '2021-03-24 12:42:48', '93c6668cb0', '92876249410d8e79446455aa5cdcc25dimages(3).jfif');
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (3, 2, 8, 'bonjour!', '2021-03-24 13:34:51', '4310aada8a', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (4, 2, 11, 'Bonjour bro!', '2021-03-24 13:49:09', '18a90091c4', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (5, 11, 2, 'ça va!', '2021-03-24 13:49:30', '96059b0ee7', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (6, 8, 11, 'bonjour boss!', '2021-03-26 13:25:32', '880fad2073', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (7, 8, 11, 'ça va?', '2021-03-26 13:26:32', '4cc18318ae', '5787399c9e539c67e99b29d55ef15195cool2.jpg');
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (8, 2, 5, 'Bonjour boss!', '2021-03-26 14:05:36', NULL, NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (9, 5, 2, 'oui Bonjour boss!', '2021-03-26 14:06:37', NULL, NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (10, 2, 5, 'mois aussi!', '2021-03-26 14:07:04', NULL, NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (11, 5, 11, 'bonjour!', '2021-03-26 17:53:09', '0b46354420', '9052fb951708559caf2509f26b86ffd0bertin.JPG');
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (12, 5, 2, 'ce bon!', '2021-03-26 17:54:16', '1cb0b6d893', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (13, 5, 7, 'bonjour!', '2021-03-26 17:55:42', '0758a84a5b', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (14, 5, 7, '???? ok', '2021-03-26 17:56:01', '1dae329a7e', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (15, 2, 10, 'bonsoir!', '2021-03-29 21:00:56', '8f1e5d1397', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (16, 3, 2, 'bonsoir!', '2021-03-30 23:48:22', 'f321a7b214', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (17, 3, 8, 'bonsoir boss!', '2021-03-30 23:48:54', '4c7efe7014', '40a6b63b3feca74829bb49cede45f29cavatar.png');
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (18, 3, 10, 'salut!', '2021-03-30 23:50:19', 'b1a8eda560', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (19, 13, 2, 'bonjour monsieur!', '2021-03-31 11:02:51', '0c75fb1f41', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (20, 13, 2, 'ça va?', '2021-03-31 11:03:18', 'f1f47d4692', '8c9d2f881090d87c5cfab1682223d601590.jpg');
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (21, 13, 4, 'salut!', '2021-03-31 11:09:17', '4d660924a8', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (22, 8, 13, 'bonjour mr!', '2021-03-31 11:23:35', '2c83b2dddf', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (23, 8, 2, 'merci!', '2021-03-31 11:23:57', 'f608113634', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (24, 3, 13, 'bonjour!', '2021-03-31 11:25:12', '960bb19df6', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (25, 3, 5, 'bonjour boss!', '2021-03-31 11:26:56', 'ebf3fde217', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (26, 13, 8, 'oui bonjour ça va?', '2021-03-31 11:31:03', 'cf6f08c41c', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (27, 13, 6, 'salut!', '2021-03-31 11:32:07', '560a12b394', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (28, 12, 2, 'bonsoir!', '2021-04-01 00:30:06', 'e5ed809fd9', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (29, 2, 13, 'ça va bien!', '2021-04-01 10:34:57', 'e5c75e53c0', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (30, 12, 5, 'bonjour!', '2021-04-02 00:26:12', 'b5f6f30c7b', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (31, 12, 3, 'bonsoir!', '2021-04-02 00:26:24', '6ea5e1ee02', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (32, 12, 14, 'bonjour!', '2021-04-02 14:37:41', 'de46bc52df', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (33, 12, 6, 'salut!', '2021-04-02 14:38:00', 'a1d1a246d2', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (34, 3, 12, 'oui bonjour!', '2021-04-02 16:55:19', '38588537a8', NULL);
INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES (35, 12, 9, 'salut!', '2021-04-04 11:58:46', 'a37c293a62', NULL);


#
# TABLE STRUCTURE FOR: notification
#

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(800) DEFAULT NULL,
  `url` varchar(800) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `icone` varchar(300) DEFAULT NULL,
  `titre` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (5, 'madeleine stephanie Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-01-23 17:09:27', 'fa fa-bell', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (6, 'jolie piana Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-01-23 19:04:50', 'fa fa-bell', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (7, 'madeleine stephanie Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-01-23 19:05:20', 'fa fa-bell', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (14, 'kasumba kipundula votre article ma mifa est en danger pour le moment', 'user/article', 5, '2021-01-27 16:37:42', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (18, 'kasumba kipundula Vient d\'ajouter un article video', 'admin/padding_article', 2, '2021-01-27 16:51:45', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (21, 'kasumba kipundula votre article video a été rejeté suite à une cause valable. pour plus d\'informations d\'invalidité de votre article, veillez contacter l\'administrateur du site par son compte mail', 'user/article', 5, '2021-01-27 16:53:20', 'fa fa-close', 'Salut');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (23, 'yuma kayanda votre article coucou le boss a été rejeté suite à une cause valable. pour plus d\'informations d\'invalidité de votre article, veillez contacter l\'administrateur du site par son compte mail', 'user/article', 3, '2021-01-27 16:57:32', 'fa fa-close', 'Salut');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (28, 'yuma kayanda Vient d\'ajouter un article Cool le boss', 'admin/padding_article', 2, '2021-02-05 10:27:21', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (30, 'yuma kayanda Vient d\'ajouter un article mon agriculture n\'est pas tout affait simple', 'admin/padding_article', 2, '2021-02-05 10:29:04', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (34, 'yuma kayanda votre article mon agriculture n\'est pas tout affait simple comme tel', 'user/article', 3, '2021-02-05 11:19:21', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (36, 'yuma kayanda votre article joue comme jamais', 'user/article', 3, '2021-02-05 11:21:18', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (37, 'yuma kayanda votre article ce bon a été rejeté suite à une cause valable. pour plus d\'informations d\'invalidité de votre article, veillez contacter l\'administrateur du site par son compte mail', 'user/article', 3, '2021-02-05 11:21:30', 'fa fa-close', 'Salut');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (38, 'yuma kayanda votre article jour et jour  est plus dans la vie', 'user/article', 3, '2021-02-05 11:41:40', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (39, 'kasumba kipundula votre article Le développement de technologie qrcode ', 'user/article', 5, '2021-02-05 11:41:40', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (41, 'kasumba kipundula Vient d\'ajouter un article pie tshibanda', 'journaliste/padding_article', 8, '2021-02-05 16:49:48', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (42, 'joh sumbu Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-03-23 10:31:28', 'fa fa-bell', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (43, 'joh sumbu Vient d\'ajouter un article vendu esimbi', 'admin/padding_article', 2, '2021-03-23 10:53:09', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (44, 'joh sumbu Vient d\'ajouter un article vendu esimbi', 'journaliste/padding_article', 8, '2021-03-23 10:53:09', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (45, 'joh sumbu Vient d\'ajouter un article petit mais je pique', 'admin/padding_article', 2, '2021-03-23 10:56:18', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (46, 'joh sumbu Vient d\'ajouter un article petit mais je pique', 'journaliste/padding_article', 8, '2021-03-23 10:56:18', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (47, 'joh sumbu Vient d\'ajouter un article sifa bule', 'admin/padding_article', 2, '2021-03-23 10:57:54', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (48, 'joh sumbu Vient d\'ajouter un article sifa bule', 'journaliste/padding_article', 8, '2021-03-23 10:57:54', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (49, 'joh sumbu votre article sifa bule', 'user/article', 9, '2021-03-23 11:00:18', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (50, 'joh sumbu votre article vendu esimbi', 'user/article', 9, '2021-03-23 11:02:03', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (51, 'sifa abeli deborah Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-03-24 11:06:49', 'fa fa-bell', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (52, 'michael joffrey Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-03-24 11:08:51', 'fa fa-bell', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (53, 'joh sumbu votre article petit mais je pique', 'user/article', 9, '2021-03-26 11:44:32', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (54, 'yuma kayanda Vient d\'ajouter un article coucou le boss', 'admin/padding_article', 2, '2021-03-26 11:45:55', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (55, 'yuma kayanda Vient d\'ajouter un article coucou le boss', 'journaliste/padding_article', 7, '2021-03-26 11:45:56', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (56, 'yuma kayanda Vient d\'ajouter un article coucou le boss', 'journaliste/padding_article', 8, '2021-03-26 11:45:56', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (57, 'yuma kayanda Vient d\'ajouter un article coucou le boss', 'journaliste/padding_article', 10, '2021-03-26 11:45:56', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (58, 'yuma kayanda Vient d\'ajouter un article coucou le boss', 'journaliste/padding_article', 11, '2021-03-26 11:45:56', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (59, 'kasumba kipundula Vient d\'ajouter un article mama miya', 'admin/padding_article', 2, '2021-03-26 14:32:06', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (60, 'kasumba kipundula Vient d\'ajouter un article mama miya', 'journaliste/padding_article', 7, '2021-03-26 14:32:07', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (61, 'kasumba kipundula Vient d\'ajouter un article mama miya', 'journaliste/padding_article', 8, '2021-03-26 14:32:07', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (62, 'kasumba kipundula Vient d\'ajouter un article mama miya', 'journaliste/padding_article', 10, '2021-03-26 14:32:07', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (63, 'kasumba kipundula Vient d\'ajouter un article mama miya', 'journaliste/padding_article', 11, '2021-03-26 14:32:07', 'fa fa-newspaper-o', 'Nouveau article');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (64, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'admin/nouveau_job/1955862089', 2, '2021-04-01 21:42:24', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (65, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'user/nouveau_job/1955862089', 3, '2021-04-01 21:42:24', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (66, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'user/nouveau_job/1955862089', 4, '2021-04-01 21:42:24', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (67, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'user/nouveau_job/1955862089', 5, '2021-04-01 21:42:24', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (68, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'user/nouveau_job/1955862089', 6, '2021-04-01 21:42:24', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (69, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'journaliste/nouveau_job/1955862089', 7, '2021-04-01 21:42:24', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (70, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'journaliste/nouveau_job/1955862089', 8, '2021-04-01 21:42:24', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (71, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'user/nouveau_job/1955862089', 9, '2021-04-01 21:42:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (72, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'journaliste/nouveau_job/1955862089', 10, '2021-04-01 21:42:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (73, 'Nouvelle offre Digital Marketing Specialist vient d\'entre publiée', 'journaliste/nouveau_job/1955862089', 11, '2021-04-01 21:42:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (74, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'admin/nouveau_job/117052625', 2, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Offre d\'emploi');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (75, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'user/nouveau_job/117052625', 3, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (76, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'user/nouveau_job/117052625', 4, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (77, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'user/nouveau_job/117052625', 5, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (78, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'user/nouveau_job/117052625', 6, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (79, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'journaliste/nouveau_job/117052625', 7, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (80, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'journaliste/nouveau_job/117052625', 8, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (81, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'user/nouveau_job/117052625', 9, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (82, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'journaliste/nouveau_job/117052625', 10, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (83, 'Nouvelle offre Spécialiste en Electrification Solaire vient d\'entre publiée', 'journaliste/nouveau_job/117052625', 11, '2021-04-01 21:52:25', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (84, ' kasumba kipundula vient de répondre à votre offre Ingénierie civile en bâtiment Spécialiste en Electrification Solaire', 'entreprise/reply_to_our_job/117052625', 12, '2021-04-02 13:10:02', 'fa fa-user', 'Réponse à l\'offre');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (85, ' yuma kayanda vient de répondre à votre offre Ingénierie civile en bâtiment Spécialiste en Electrification Solaire', 'entreprise/reply_to_our_job/117052625', 12, '2021-04-02 13:17:35', 'fa fa-user', 'Réponse à l\'offre');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (86, ' gulain badesi vient de répondre à votre offre Ingénierie civile en bâtiment Spécialiste en Electrification Solaire', 'entreprise/reply_to_our_job/117052625', 12, '2021-04-02 13:25:32', 'fa fa-user', 'Réponse à l\'offre');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (88, 'Salut kasumba kipundula votre demande d\'emplois a été approuvé avec succès????!!!! vous recevrez d\'avance toute information pour l\'intervieuw dans votre courier électronique mail', 'user/nouveau_job/117052625', 5, '2021-04-02 15:49:28', 'fa fa-graduation-cap', 'Félictation plus à vous!');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (89, 'Salut yuma kayanda votre demande d\'emplois a été approuvé avec succès????!!!! vous recevrez d\'avance toute information pour l\'intervieuw dans votre courier électronique mail', 'user/nouveau_job/117052625', 3, '2021-04-02 15:50:32', 'fa fa-graduation-cap', 'Félictation plus à vous!');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (90, 'Den birindwa Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-04-03 08:52:59', 'fa fa-user', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (91, 'Deny tchituka Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-04-03 08:53:30', 'fa fa-user', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (92, 'kumba jean-prierre Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-04-03 08:54:15', 'fa fa-user', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (97, 'Bonjour isaac muhyana votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/851188161', 13, '2021-04-04 15:43:01', 'fa fa-check', '???? Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (99, 'Bonjour isaac muhyana votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/1379464422', 13, '2021-04-04 16:18:54', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (100, 'Bonjour honoré mugisa votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/702152599', 12, '2021-04-04 16:18:54', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (101, 'Nouvelle tentative de paiement john smith vient de tenter de vérifier son paiement', 'admin/paiement_pading', 2, '2021-04-04 16:36:49', 'fa fa-money', 'Tentative de paiement');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (102, 'Bonjour john smith votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/1961689768', 14, '2021-04-04 18:05:59', 'fa fa-check', 'Félicitation');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (103, 'Bonjour john smith votre paiement a été invalidé suite à une cause valide. prière de vérifier la cause d\'invalidité de votre paiement au près de l\'administrateur du système ????', 'entreprise/facturePaiement/1961689768', 14, '2021-04-04 18:52:27', 'fa fa-check', 'Désolé votre paiement a été invalide');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (104, 'Nouvelle tentative de paiement john smith vient de tenter de vérifier son paiement', 'admin/paiement_pading', 2, '2021-04-05 11:27:40', 'fa fa-money', 'Tentative de paiement');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (105, ' kasumba kipundula vient de répondre à votre offre IT soft ware Développeurs Full Stack Java Seniors', 'entreprise/reply_to_our_job/225175515', 13, '2021-04-05 13:05:04', 'fa fa-user', 'Réponse à l\'offre');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (106, ' kasumba kipundula vient de répondre à votre offre Société Sans but lucratif  Développeur PHP Full Stack Senior', 'entreprise/reply_to_our_job/699086254', 13, '2021-04-05 16:12:41', 'fa fa-user', 'Réponse à l\'offre');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (107, ' gulain badesi vient de répondre à votre offre Société Sans but lucratif  Développeur PHP Full Stack Senior', 'entreprise/reply_to_our_job/699086254', 13, '2021-04-05 17:48:26', 'fa fa-user', 'Réponse à l\'offre');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (110, 'salomon escadel Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-04-05 22:56:21', 'fa fa-user', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (111, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'admin/nouveau_job/148922420', 2, '2021-04-05 23:30:40', 'fa fa-briefcase', 'Offre d\'emploi');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (112, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 3, '2021-04-05 23:30:40', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (113, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 4, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (114, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 5, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (115, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 6, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (116, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'journaliste/nouveau_job/148922420', 7, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (117, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'journaliste/nouveau_job/148922420', 8, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (118, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 9, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (119, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'journaliste/nouveau_job/148922420', 10, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (120, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'journaliste/nouveau_job/148922420', 11, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (121, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 15, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (122, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 16, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (123, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 17, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (124, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 18, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (125, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 19, '2021-04-05 23:30:41', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (126, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 20, '2021-04-05 23:30:42', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (127, 'Nouvelle offre Développement des applications informatiques vient d\'entre publiée', 'user/nouveau_job/148922420', 21, '2021-04-05 23:30:42', 'fa fa-briefcase', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (128, 'cubaka mulume Vient de rejoindre la plateforme ', 'admin/users', 2, '2021-04-05 23:32:58', 'fa fa-user', 'Nouvelle inscription');
INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES (129, ' cubaka mulume vient de répondre à votre offre IT soft ware Développement des applications informatiques', 'entreprise/reply_to_our_job/148922420', 22, '2021-04-05 23:44:18', 'fa fa-user', 'Réponse à l\'offre');


#
# TABLE STRUCTURE FOR: offre
#

DROP TABLE IF EXISTS `offre`;

CREATE TABLE `offre` (
  `ido` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(300) DEFAULT NULL,
  `fichier` varchar(300) DEFAULT NULL,
  `societe` varchar(300) DEFAULT NULL,
  `lieu` varchar(300) DEFAULT NULL,
  `date_debit` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  PRIMARY KEY (`ido`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (1, 'Donec consectetuer ligula vulputate sem tristique cursus. ', 'Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.', '2021-01-26 14:50:54', '340837679.jpg', '491992972.pdf', 'Softech', 'Goma', '2021-01-20', '2021-01-30');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (2, 'MIse en place d\'une application web a l\'ONG medair connceter sur la base de donnees mongo DB. ', 'MIse en place d\'une application web a l\'ONG medair connceter sur la base de donnees mongo DB. ', '2021-01-26 14:54:56', '799240946.jpg', '1177424587.pdf', 'Softech', 'Goma', '2021-01-20', '2021-01-30');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (3, 'Health-malamu : chef de projet sante ', 'Health-malamu : chef de projet sante ', '2021-01-26 14:57:11', '1871143004.png', '1100171291.pdf', 'Softech', 'Goma', '2021-01-20', '2021-03-25');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (4, 'Un Manager en charge des Ressources Humaines pour la ville de Kinshasa ', 'Un Manager en charge des Ressources Humaines pour la ville de Kinshasa ', '2021-01-26 14:59:53', '867593910.JPG', '1459259978.pdf', 'Softech', 'Goma', '2021-01-20', '2021-01-30');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (6, 'Un Manager en charge des Ressources Humaines pour la ville de Kinshasa ', 'Un Manager en charge des Ressources Humaines pour la ville de Kinshasa ', '2021-01-26 15:08:16', '938056147.jpg', '759321242.pdf', 'Softech', 'Goma', '2021-01-20', '2021-01-30');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (7, 'Pellentesque odio nisi, euismod in, pharetra a, ', 'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu.', '2021-01-26 15:09:40', '1111191839.jpg', '1891738342.pdf', 'Softech', 'Goma', '2021-01-20', '2021-01-30');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (8, 'La startup devtech', 'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu.', '2021-01-26 15:11:17', '120836615.jpg', '1490428000.pdf', 'Softech', 'Goma', '2021-01-20', '2021-01-30');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (9, 'la startup hopedev', 'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu.', '2021-01-26 15:12:00', '1693926498.jpg', '1355595733.pdf', 'Softech', 'Goma', '2021-01-20', '2021-01-30');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (10, 'kozua nice', 'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu.', '2021-01-26 15:14:25', '1169726167.jpg', '95857848.pdf', 'Softech', 'Goma', '2021-01-20', '2021-01-30');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (11, 'la startup jojo path', 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.\r\n\r\nMorbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu.', '2021-01-26 15:15:57', '382127670.jpg', '1743183237.pdf', 'Softech', 'Goma', '2021-01-20', '2021-01-30');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (13, 'kozua nice', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-02-06 12:49:13', '2005219061.jpg', '588033807.pdf', 'devtechnology', 'Nord-kivu Goma', '2021-02-05', '2021-02-08');
INSERT INTO `offre` (`ido`, `nom`, `description`, `created_at`, `image`, `fichier`, `societe`, `lieu`, `date_debit`, `date_fin`) VALUES (14, 'commission de code', 'nous cherchons les gars sérieux en code', '2021-03-22 10:49:40', '60033867.jpg', '2037907480.pdf', 'hode dev', 'Nord-kivu Goma', '2021-03-22', '2021-04-22');


#
# TABLE STRUCTURE FOR: online
#

DROP TABLE IF EXISTS `online`;

CREATE TABLE `online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `online_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES (4, 11, '2021-03-24 11:10:42');
INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES (12, 13, '2021-03-30 20:52:46');
INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES (15, 12, '2021-04-01 00:29:36');
INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES (17, 14, '2021-04-01 00:43:28');
INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES (22, 8, '2021-04-05 16:56:19');
INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES (24, 22, '2021-04-05 22:56:31');
INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES (26, 2, '2021-04-05 23:49:36');


#
# TABLE STRUCTURE FOR: padding_article
#

DROP TABLE IF EXISTS `padding_article`;

CREATE TABLE `padding_article` (
  `idart` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `description` text,
  `lien` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(300) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`idart`),
  KEY `idcat` (`idcat`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `padding_article_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `category` (`idcat`) ON DELETE CASCADE,
  CONSTRAINT `padding_article_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `padding_article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`, `id_user`) VALUES (1, 'Cool le boss', '                                                                  supeur! le boss\r\n                  ', '', '2021-02-05 16:49:48', '879565834.jpg', 'texte', 4, 3);
INSERT INTO `padding_article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`, `id_user`) VALUES (4, 'coucou le boss', '&lt;b&gt;cool le boss&lt;/b&gt;', '', '2021-03-26 11:45:56', '1497961092.jpg', 'texte', 2, 3);
INSERT INTO `padding_article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`, `id_user`) VALUES (5, 'mama miya ok', '                                                                  cool le boss miya ok', '', '2021-03-26 14:32:07', '433090337.jpg', 'texte', 5, 5);


#
# TABLE STRUCTURE FOR: paiement
#

DROP TABLE IF EXISTS `paiement`;

CREATE TABLE `paiement` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonne` int(11) DEFAULT NULL,
  `date_paie` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `motif` text,
  `token` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `codeFacture` varchar(300) DEFAULT NULL,
  `etat_paiement` int(11) DEFAULT '0',
  PRIMARY KEY (`idp`),
  KEY `idpersonne` (`idpersonne`),
  CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`idpersonne`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `token`, `created_at`, `codeFacture`, `etat_paiement`) VALUES (1, 13, '2021-04-04', '10', 'm-pesa', '445T71234SG', '2021-04-04 16:18:54', '1379464422', 1);
INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `token`, `created_at`, `codeFacture`, `etat_paiement`) VALUES (2, 12, '2021-04-03', '30', 'airtel money', '123web145', '2021-04-04 16:18:54', '702152599', 0);


#
# TABLE STRUCTURE FOR: paiement_pading
#

DROP TABLE IF EXISTS `paiement_pading`;

CREATE TABLE `paiement_pading` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonne` int(11) DEFAULT NULL,
  `date_paie` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `motif` text,
  `token` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idp`),
  KEY `idpersonne` (`idpersonne`),
  CONSTRAINT `paiement_pading_ibfk_1` FOREIGN KEY (`idpersonne`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `paiement_pading` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `token`, `created_at`) VALUES (1, 14, '2021-04-05', '30', 'm-pesa', '233545gtr2w', '2021-04-05 11:27:40');


#
# TABLE STRUCTURE FOR: paquet
#

DROP TABLE IF EXISTS `paquet`;

CREATE TABLE `paquet` (
  `idpaquet` int(11) NOT NULL AUTO_INCREMENT,
  `nompaquet` varchar(300) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `nombre_jour` int(11) DEFAULT NULL,
  `nombre_pub` int(11) DEFAULT NULL,
  `ids` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpaquet`),
  KEY `ids` (`ids`),
  CONSTRAINT `paquet_ibfk_1` FOREIGN KEY (`ids`) REFERENCES `service` (`ids`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: profile_article
#

DROP TABLE IF EXISTS `profile_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_article` AS select `article`.`idart` AS `idart`,`article`.`nom` AS `nom`,`article`.`description` AS `description`,`article`.`lien` AS `lien`,`article`.`type` AS `type`,`article`.`image` AS `image`,`article`.`created_at` AS `created_at`,`article`.`idcat` AS `idcat`,`category`.`nom` AS `nom_cat` from (`article` join `category` on((`article`.`idcat` = `category`.`idcat`)));

utf8mb4_general_ci;

INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (6, 'Meilleure santé garantie lula le boss', '   cool ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '2004758736.jpg', '2021-01-27 16:34:10', 1, 'politique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (11, 'le sport de la mer est vivement cool', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'texte', '1872770310.jpg', '2021-01-27 16:57:44', 1, 'politique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (34, 'le bilan provisoire de la communication', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '1657234175.jpg', '2021-01-28 18:16:10', 1, 'politique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (38, 'jour et jour  est plus dans la vie', '                      &lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;text-align: left;&quot;&gt;&lt;b&gt;jour et jour&amp;nbsp;&lt;/b&gt;&lt;/span&gt;&lt;b&gt;la formation ainsi que toutes les instructions dont j\'ai apprises au de \r\nla formation&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;\r\n                  \r\n                  \r\n                  \r\n                  ', '', 'texte', '1958409107.jpg', '2021-02-05 11:41:40', 1, 'politique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (1, 'Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.', 'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.', '', 'texte', '1259151316.jpg', '2021-01-25 07:08:48', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (2, 'les cyclistes', 'Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada', '', 'texte', '611462585.jpg', '2021-01-25 07:48:26', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (3, 'le tenis en ende est surpris par un marabou', 'Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada', '', 'texte', '1872221948.jpg', '2021-01-25 07:50:18', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (4, 'Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.', 'Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.\r\n\r\nSuspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.', 'https://unikin.org', 'video', '49048966.jpg', '2021-01-25 07:59:27', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (8, 'je me retrouve un peu isolé de mes coéquipiers à cause de l\'égoïsme', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.youtube.com/watch?v=no35TFWg0CU&list=PL0TnHYy48T2zwGWVTcRFAbKpxCM-66F4p&index=3', 'video', '934132063.jpg', '2021-01-27 16:37:42', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (9, 'la rdc s\'est imposé face aux Nigers moyennant un score de 2 buts à 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ' https://www.youtube.com/watch?v=wgGkF4k9c7A', 'video', '1592474412.jpg', '2021-01-27 16:37:42', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (10, 'Sport Phasellus ultrices nulla quis nibh. Quisque a lectus. ', 'Sport\r\nPhasellus ultrices nulla quis nibh. Quisque a lectus. ', '', 'texte', '48562828.jpg', '2021-01-27 16:37:43', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (12, 'les nageurs du lac kivu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'texte', '1929057932.jpg', '2021-01-27 16:57:44', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (37, 'joue comme jamais', '                                            &lt;b&gt;                      Lorem ipsum dolor sit amet,&lt;/b&gt; consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit &lt;span style=&quot;color: rgb(0, 0, 255);&quot;&gt;anim id est laborum.\r\n                  \r\n                  &lt;/span&gt;\r\n                  ', '', 'texte', '2034243819.jpg', '2021-02-05 11:21:18', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (41, 'pie tshibanda', '&lt;p&gt;&lt;b&gt;Cool le boss!&lt;/b&gt;&lt;/p&gt;&lt;p&gt;cool le plus beau de la planette&lt;/p&gt;', '', 'texte', '609501475.jpg', '2021-02-05 13:59:50', 2, 'sport');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (5, 'Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.', 'Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada.', '', 'texte', '153541880.jpg', '2021-01-25 08:04:35', 4, 'économique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (29, 'l\'économie est en baisse', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '1112273971.jpg', '2021-01-28 18:00:53', 4, 'économique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (30, 'le choix choix d\'une meilleure gestion est à vous', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '13488270.jpg', '2021-01-28 18:03:41', 4, 'économique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (31, 'le prix  n\'est pas facile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '1526661656.jpg', '2021-01-28 18:07:55', 4, 'économique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (32, 'le volume de la croissance évolue de manière cool', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '768662766.jpg', '2021-01-28 18:11:50', 4, 'économique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (33, 'jojo le volume de la croissance évolue de manière cool', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '775571175.jpg', '2021-01-28 18:12:51', 4, 'économique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (35, 'mon agriculture n\'est pas tout affait simple comme tel', '                                                                        <div style=\"text-align: center;\"><b style=\"font-size: 0.875rem;\">mon agriculture n\'est pas tout affait simple à voir</b></div><div style=\"text-align: left;\"><span style=\"font-size: 0.875rem;\"><div style=\"\">   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div style=\"\">    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div style=\"\">    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div style=\"\">    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div style=\"\">    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div style=\"\">    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></span></div>\r\n              \r\n              \r\n              \r\n              ', 'https://www.youtube.com/watch?v=no35TFWg0CU&list=PL0TnHYy48T2zwGWVTcRFAbKpxCM-66F4p&index=3', 'video', '2116540385.jpg', '2021-02-05 11:19:21', 4, 'économique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (42, 'cool', '&lt;div&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;white-space:pre&quot;&gt;						&lt;/span&gt;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;', '', 'texte', '518524426.jpg', '2021-02-06 12:56:30', 4, 'économique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (24, 'le volume de la croissance évolue de manière cool', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '1708556988.png', '2021-01-28 17:46:19', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (25, 'le button de la revolution de c3 en python', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '1520921562.jpg', '2021-01-28 17:47:10', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (26, 'la technologie thensor flow js est adapté pour l\'intelligence artificiale', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '664702000.jpg', '2021-01-28 17:49:11', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (27, 'la technologie de vpn est pour le mo,ent vide', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '94678394.png', '2021-01-28 17:50:29', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (28, 'heath malamu', '                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n                  ', '', 'texte', '833774965.jpg', '2021-01-28 17:52:38', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (39, 'Le développement de technologie qrcode ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'texte', '1904057878.jpg', '2021-02-05 11:41:40', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (40, 'Hook en react js fait trembler le monde', 'cool', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', 'video', '2018907131.jpg', '2021-02-05 11:52:48', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (43, 'afia bora', '&lt;b&gt;Afia bora&lt;/b&gt; est une plateforme web de suivi électronique de dossier de malade par la technologie QR code...', '', 'texte', '784122067.jpg', '2021-03-22 12:16:17', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (44, 'sifa bule', 'cool', '', 'texte', '1833100525.jpg', '2021-03-23 11:00:18', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (45, 'vendu esimbi', '                      &lt;div class=&quot;col-md-12 mb-2&quot; style=&quot;width: 447.547px; color: rgb(82, 100, 132);&quot;&gt;&lt;div class=&quot;nk-block-head-content text-center&quot;&gt;&lt;h4 class=&quot;nk-block-title fw-normal&quot;&gt;Qui sommes-nous au juste?&lt;/h4&gt;&lt;div class=&quot;nk-block-des&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;ul class=&quot;list list-lg list-checked-circle list-success&quot;&gt;&lt;li&gt;Il est hélas devenu évident aujourd\'hui que notre technologie a dépassé notre humanité.&lt;/li&gt;&lt;li&gt;Ne te sers pas de la technologie comme d’un substitut à la chaleur humaine.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;ol&gt;&lt;li style=&quot;width: 447.547px; color: rgb(82, 100, 132);&quot;&gt;&lt;b&gt;Devetech &lt;/b&gt;est une startup qui vise à promouvoir l\'intégrité des jeunes en appliquant la technologie pour permettre l\'avancement de la société.&lt;br&gt;Notre contribution dans la société est le faite de voir comment la jeunesse progresse mieux en contribuant aux différents aspects qui aident la société à s\'en sortir dans le Cao.&lt;br&gt;La technologie dont nous parlons fera en sorte de contribuer à l\'émergence de toute la jeunesse et la société en particulier.&lt;br&gt;Nous devons considérer la technologie actuelle comme une arme efficace pour changer le monde.&lt;br&gt;&lt;/li&gt;&lt;/ol&gt;\r\n                            \r\n                  ', '', 'texte', '1314135589.jpg', '2021-03-23 11:02:03', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (47, 'petit mais je pique', '                  <p>                      <span style=\"background-color: rgb(247, 247, 247); color: rgb(0, 0, 255);\">petit mais je pique</span> est une chanson de  jérémie<b> joh sumbu</b> dans son album intitulé  <b>ESIMBI </b></p><p>ce beau!</p>\r\n              ', '', 'texte', '453153648.jpg', '2021-03-26 11:44:32', 5, 'technologique');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (7, 'ma mifa est en danger pour le moment', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '1111623679.jpg', '2021-01-27 16:37:42', 6, 'santé');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (19, 'la santé est indispansable dans la vie de tout himain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '139682878.png', '2021-01-28 17:33:52', 6, 'santé');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (20, 'la malaria est devenue un danger pour les enfants', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '74654028.jpg', '2021-01-28 17:34:51', 6, 'santé');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (21, ';a cpn pour la femme anceinte est indispansable', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '1050162844.jpg', '2021-01-28 17:35:36', 6, 'santé');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (22, 'le covid19 s\'est évanué  en afrique', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', 'video', '498406782.jpg', '2021-01-28 17:40:33', 6, 'santé');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (23, 'la malaria est devenue un obstacle pour l\'emergence de la population', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '1985677735.jpg', '2021-01-28 17:42:58', 6, 'santé');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (13, 'utilisation de qrcode bet', 'cool le boss', '', 'texte', '1095126010.jpg', '2021-01-28 17:25:52', 7, 'entrepreneuriat  ');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (14, 'entrepreneuriat n\'est pas facile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', 'video', '720904270.jpg', '2021-01-28 17:27:57', 7, 'entrepreneuriat  ');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (15, 'le plus beau momment en entreprenaria est proche', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', 'video', '469350786.jpg', '2021-01-28 17:28:39', 7, 'entrepreneuriat  ');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (16, 'Entreprendre c\'est risqué', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '656333887.jpg', '2021-01-28 17:29:19', 7, 'entrepreneuriat  ');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (17, 'la meilleure facon d\'apprendre est de vouloir travailler', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '', 'texte', '894158273.jpg', '2021-01-28 17:30:17', 7, 'entrepreneuriat  ');
INSERT INTO `profile_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (18, 'je suisun entrepreneur en temps plein!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', 'video', '781705702.jpg', '2021-01-28 17:32:36', 7, 'entrepreneuriat  ');


#
# TABLE STRUCTURE FOR: profile_candidat
#

DROP TABLE IF EXISTS `profile_candidat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_candidat` AS select `users`.`id` AS `id`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`users`.`full_adresse` AS `full_adresse`,`users`.`biographie` AS `biographie`,`users`.`date_nais` AS `date_nais`,`users`.`passwords` AS `passwords`,`users`.`idrole` AS `idrole`,`users`.`sexe` AS `sexe`,`users`.`facebook` AS `facebook`,`users`.`linkedin` AS `linkedin`,`users`.`twitter` AS `twitter`,`users`.`idPays` AS `idPays`,`users`.`idv` AS `idv`,`users`.`idp` AS `idp`,`users`.`cv` AS `cv`,`tbl_pays`.`nompays` AS `nompays`,`province`.`nomp` AS `nomp`,`ville`.`nomv` AS `nomv` from (((`users` join `tbl_pays` on((`users`.`idPays` = `tbl_pays`.`idPays`))) join `province` on((`users`.`idp` = `province`.`idp`))) join `ville` on((`users`.`idv` = `ville`.`idv`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (3, 'yuma kayanda', 'françois', 'yuma@gmail.com', '1119846465.JPG', '081989152', 'quartier katoyi avenue konde', 'Si Dieu est à mon côté qui sera contre moi!                                                                                                                                                                                                      ', '1995-01-09', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, '1426085365.pdf', 'RDC', 'Nord-Kivu', 'Goma');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (4, 'kakese pandamiti', 'patrick', 'kakese@gmail.com', '743472493.jpg', '081989152', 'Cool les gars', 'senior developer', '1997-01-24', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, 'RDC', 'Nord-Kivu', 'Goma');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (5, 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '933959030.JPG', '+243993315152', 'Apple est mon préférée', '                  	                  	                  	Apple est mon préféré!                                                      ', '2021-01-24', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, 'RDC', 'Nord-Kivu', 'Goma');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (6, 'jolie piana', 'lola', 'jolie@gmail.com', '142889861.jpg', '081989152', 'My life it never be slowly', 'Développeuse web', '2000-01-24', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 10, 10, NULL, 'RDC', 'Kinshasa', 'Kinshasa');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (9, 'joh sumbu', '', 'joh@gmail.com', '1468841609.jpg', '', '', 'Artiste chanteur', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, 'RDC', 'Nord-Kivu', 'Goma');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (12, 'honoré mugisa', 'hono', 'whitefondation@gmail.com', '599940694.jpg', '+243810409151', 'Goma quartier 3 paillottes', 'Développeur en temps plein!', '1996-03-30', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, 'RDC', 'Nord-Kivu', 'Goma');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (13, 'isaac muhyana', 'isaac', 'isaac@gmail.com', '1843359905.jpg', '+243993315152', 'Gomq quartier tmk', 'Databank drc est notre produit', '1993-03-30', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, 'RDC', 'Nord-Kivu', 'Goma');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (14, 'john smith', 'smith', 'johnsmith@gmail.com', '1231698896.jpg', '+243990084881', 'Goma quartier himbi', 'développeur web', '2000-03-16', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 17, 17, NULL, 'RDC', 'Maniema', 'Kindu');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (15, 'Den birindwa', '', 'dan@gmail.com', '124561731.jpg', '', '', 'Ma vie est christ', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 11, 11, NULL, 'RDC', 'Kongo-Central', 'Matadi');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (16, 'Deny tchituka', '', 'dany@gmail.com', '1841044671.jpg', '', '', 'Maitre d\'école', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 11, 11, NULL, 'RDC', 'Kongo-Central', 'Matadi');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (17, 'kumba jean-prierre', '', 'kumba@gmail.com', '968548502.jpg', '', '', 'Etudiant chef de promotion', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 6, 6, NULL, 'RDC', 'Ituri', 'Bunia');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (18, 'pionde bin sefu', '', 'pionde@gmail.com', '277378976.jpg', '', '', 'Chambion', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, 'RDC', 'Nord-Kivu', 'Goma');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (19, 'sifa abeli deborah', '', 'sifaabedi@gmail.com', '1882836577.jpg', '', '', 'meckup', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, 'RDC', 'Nord-Kivu', 'Goma');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (20, 'rachel mputu', '', 'rachel@gmail.com', '1524677507.jpg', '', '', 'Développeuse entrepreneur ', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 10, 10, NULL, 'RDC', 'Kinshasa', 'Kinshasa');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (22, 'salomon escadel', '', 'salomon@gmail.com', '1798753487.jpg', '', '', 'Développeur chez un jour nouveau!', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', '', '', '', 1, 19, 19, NULL, 'RDC', 'Nord-Kivu', 'Goma');
INSERT INTO `profile_candidat` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `nompays`, `nomp`, `nomv`) VALUES (23, 'cubaka mulume', 'alpha', 'alpha@gmail.com', '783341919.jpg', '+243810409151', 'quartier katoyi avenue konde', 'Informaticien sans frontière ', '1993-04-06', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, '279899743.pdf', 'RDC', 'Nord-Kivu', 'Goma');


#
# TABLE STRUCTURE FOR: profile_demandejob
#

DROP TABLE IF EXISTS `profile_demandejob`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_demandejob` AS select `demandejob`.`idd` AS `idd`,`demandejob`.`id_user` AS `id_user`,`demandejob`.`idjob` AS `idjob`,`demandejob`.`codejob` AS `codejob`,`demandejob`.`motivation` AS `motivation`,`demandejob`.`fichier` AS `fichier`,`demandejob`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`job`.`titre` AS `titre`,`demandejob`.`experienceP` AS `experienceP`,`demandejob`.`niveau` AS `niveau`,`demandejob`.`langue` AS `langue`,`demandejob`.`formation` AS `formation`,`users`.`sexe` AS `sexe`,`demandejob`.`etat` AS `etat` from ((`demandejob` join `users` on((`demandejob`.`id_user` = `users`.`id`))) join `job` on((`demandejob`.`idjob` = `job`.`idjob`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `titre`, `experienceP`, `niveau`, `langue`, `formation`, `sexe`, `etat`) VALUES (1, 5, 10, '117052625', 'je suis une personne qui travaille avec rigueur et la sérosité', '237195598.pdf', '2021-04-02 13:10:02', 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '933959030.JPG', '+243993315152', 'Spécialiste en Electrification Solaire', '< 5 ans', 'Licencié', 'Français courant', 'Oui j\'en ai plus suivi', 'M', 1);
INSERT INTO `profile_demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `titre`, `experienceP`, `niveau`, `langue`, `formation`, `sexe`, `etat`) VALUES (2, 3, 10, '117052625', 'Perspicace, apte, créative, patient, analyste, ingénieux', '1274674772.pdf', '2021-04-02 13:17:35', 'yuma kayanda', 'françois', 'yuma@gmail.com', '1119846465.JPG', '081989152', 'Spécialiste en Electrification Solaire', '< 1 ans', 'Gradué', 'Français courant', 'Oui j\'en ai plus suivi', 'M', 1);
INSERT INTO `profile_demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `titre`, `experienceP`, `niveau`, `langue`, `formation`, `sexe`, `etat`) VALUES (3, 8, 10, '117052625', 'Connaissance en Word et Excel, j\'ai le sens de leadership visionnaire\r\n\r\n', '725452879.pdf', '2021-04-02 13:25:32', 'gulain badesi', 'gulain soft', 'gulain@gmail.com', '924243565.jpg', '081989152', 'Spécialiste en Electrification Solaire', '< 10 ans', 'Licencié', 'Français courant', 'Non pas encore !', 'M', 0);
INSERT INTO `profile_demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `titre`, `experienceP`, `niveau`, `langue`, `formation`, `sexe`, `etat`) VALUES (4, 4, 10, '117052625', 'Capacité d\'adaptation, maîtrise de l\'outil informatique, travail en équipe', '1085767464.pdf', '2021-04-02 13:28:38', 'kakese pandamiti', 'patrick', 'kakese@gmail.com', '743472493.jpg', '081989152', 'Spécialiste en Electrification Solaire', '< 1 ans', 'Dimplômé', 'Français courant', 'Non pas encore !', 'M', 0);
INSERT INTO `profile_demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `titre`, `experienceP`, `niveau`, `langue`, `formation`, `sexe`, `etat`) VALUES (5, 5, 4, '225175515', '- Assurer la sécurité de données\r\n- Garder  les informations secrètes de l\'entreprise\r\n- Bonne maitrise en unix, linix, windows ...', '1191270670.pdf', '2021-04-05 13:05:04', 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '933959030.JPG', '+243993315152', 'Développeurs Full Stack Java Seniors', '< 5 ans', 'Licencié', 'Français courant', 'Oui j\'en ai plus suivi', 'M', 0);
INSERT INTO `profile_demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `titre`, `experienceP`, `niveau`, `langue`, `formation`, `sexe`, `etat`) VALUES (6, 5, 3, '699086254', 'Prêt pour toute chose!', '1562911993.pdf', '2021-04-05 16:12:40', 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '933959030.JPG', '+243993315152', 'Développeur PHP Full Stack Senior', '< 10 ans', 'Licencié', 'Français courant', 'Oui j\'en ai plus suivi', 'M', 0);
INSERT INTO `profile_demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `titre`, `experienceP`, `niveau`, `langue`, `formation`, `sexe`, `etat`) VALUES (7, 8, 3, '699086254', 'Je suis prêt en tout!', '1241191522.pdf', '2021-04-05 17:48:26', 'gulain badesi', 'gulain soft', 'gulain@gmail.com', '924243565.jpg', '081989152', 'Développeur PHP Full Stack Senior', '< 1 ans', 'Gradué', 'Français courant', 'Oui j\'en ai plus suivi', 'M', 0);
INSERT INTO `profile_demandejob` (`idd`, `id_user`, `idjob`, `codejob`, `motivation`, `fichier`, `created_at`, `first_name`, `last_name`, `email`, `image`, `telephone`, `titre`, `experienceP`, `niveau`, `langue`, `formation`, `sexe`, `etat`) VALUES (8, 23, 11, '148922420', 'Je suis prêt à tout:.', '1659019724.pdf', '2021-04-05 23:44:18', 'cubaka mulume', 'alpha', 'alpha@gmail.com', '783341919.jpg', '+243810409151', 'Développement des applications informatiques', '< 1 ans', 'Dimplômé', 'Français courant', 'Oui j\'en ai plus suivi', 'M', 0);


#
# TABLE STRUCTURE FOR: profile_entreprise
#

DROP TABLE IF EXISTS `profile_entreprise`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_entreprise` AS select `entreprise`.`identrep` AS `identrep`,`entreprise`.`ceo` AS `ceo`,`entreprise`.`nom` AS `nom`,`entreprise`.`description` AS `description`,`entreprise`.`idPays` AS `idPays`,`entreprise`.`idp` AS `idp`,`entreprise`.`idv` AS `idv`,`entreprise`.`idcat` AS `idcat`,`entreprise`.`typeEntrep` AS `typeEntrep`,`entreprise`.`nombreEmploye` AS `nombreEmploye`,`entreprise`.`siteweb` AS `siteweb`,`entreprise`.`facebook` AS `facebook`,`entreprise`.`twitter` AS `twitter`,`entreprise`.`linkedin` AS `linkedin`,`entreprise`.`logo` AS `logo`,`tbl_category`.`nomcat` AS `nomcat`,`tbl_pays`.`nompays` AS `nompays`,`province`.`nomp` AS `nomp`,`ville`.`nomv` AS `nomv`,`users`.`image` AS `image`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`telephone` AS `telephone` from (((((`entreprise` join `tbl_pays` on((`entreprise`.`idPays` = `tbl_pays`.`idPays`))) join `province` on((`entreprise`.`idp` = `province`.`idp`))) join `ville` on((`entreprise`.`idv` = `ville`.`idv`))) join `users` on((`entreprise`.`ceo` = `users`.`id`))) join `tbl_category` on((`entreprise`.`idcat` = `tbl_category`.`idcat`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (1, 13, 'Databank mjn', '	        			        		une startup s\'occupant de la technologie en rdc précisément dans la ville de Goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://localhost/devtechMedia/entreprise/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1252107077.jpg', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1843359905.jpg', 'isaac muhyana', 'isaac', 'isaac@gmail.com', '+243993315152');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (2, 12, 'White fondation', 'White-fondation est un centre de formation Moderne spécialisé uniquement pour l’analyse des informations, programmation Informatique et Pour le système d’administration de base de donnée Relationnelle.', 1, 19, 19, 2, 'public', '50-100', 'http://whitefondation.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '51969925.png', 'Marketing', 'RDC', 'Nord-Kivu', 'Goma', '599940694.jpg', 'honoré mugisa', 'hono', 'whitefondation@gmail.com', '+243810409151');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (3, 14, 'web lessons', 'est une startup de la technologie', 1, 17, 17, 4, 'privée', '10-50', 'http://webslesson.info/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '872413610.jpg', 'IT soft ware', 'RDC', 'Maniema', 'Kindu', '1231698896.jpg', 'john smith', 'smith', 'johnsmith@gmail.com', '+243990084881');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (5, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (6, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (7, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (8, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (9, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (10, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (11, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (12, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (13, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (14, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (15, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (16, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (17, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (18, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (19, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (20, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (21, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (22, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (23, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (24, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');
INSERT INTO `profile_entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`, `nomcat`, `nompays`, `nomp`, `nomv`, `image`, `first_name`, `last_name`, `email`, `telephone`) VALUES (25, 22, 'Neotec', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 1, 19, 19, 5, 'privée', '10-50', 'http://neotec.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1788640987.png', 'Entreprise commerciale', 'RDC', 'Nord-Kivu', 'Goma', '1798753487.jpg', 'salomon escadel', '', 'salomon@gmail.com', '');


#
# TABLE STRUCTURE FOR: profile_job
#

DROP TABLE IF EXISTS `profile_job`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_job` AS select `job`.`idjob` AS `idjob`,`job`.`codejob` AS `codejob`,`job`.`ids` AS `ids`,`job`.`idcat` AS `idcat`,`job`.`titre` AS `titre`,`job`.`nombre_post` AS `nombre_post`,`job`.`experience` AS `experience`,`job`.`idcontrat` AS `idcontrat`,`job`.`grade` AS `grade`,`job`.`idsalaire` AS `idsalaire`,`job`.`date_fin_depot` AS `date_fin_depot`,`job`.`localisation` AS `localisation`,`job`.`qualification` AS `qualification`,`job`.`fichier_job` AS `fichier_job`,`job`.`description_job` AS `description_job`,`job`.`connaissance` AS `connaissance`,`job`.`identrep` AS `identrep`,`service`.`noms` AS `noms`,`tbl_category`.`nomcat` AS `nomcat`,`contrat`.`nomc` AS `nomc`,`tbl_salaire`.`nomsalaire` AS `nomsalaire`,`entreprise`.`nom` AS `nom`,`entreprise`.`logo` AS `logo`,`entreprise`.`description` AS `description`,`entreprise`.`ceo` AS `ceo` from (((((`job` join `service` on((`job`.`ids` = `service`.`ids`))) join `tbl_category` on((`job`.`idcat` = `tbl_category`.`idcat`))) join `contrat` on((`job`.`idcontrat` = `contrat`.`idc`))) join `tbl_salaire` on((`job`.`idsalaire` = `tbl_salaire`.`idsalaire`))) join `entreprise` on((`job`.`identrep` = `entreprise`.`identrep`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (2, '1054121914', 1, 4, 'administration s i', 1, '2 mois au plus', 1, 'gestion système d\'information', 6, '2021-04-03', 'RDC nord-kivu goma centre ville', 'Licencié ', '1314792351.pdf', 'Poste proposé : Administrateur Système\r\nNous recherchons des profils et des CV d’Administrateurs Système que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement.\r\n\r\nMissions :\r\n\r\nEffectuer les tests sur les systèmes mis en place\r\nRépondre aux normes et contraintes de sécurité\r\nInstaller et paramétrer le réseau informatique\r\nAssurer une veille technologique\r\nMettre à jour les systèmes.', 'Profil recherché pour le poste : Administrateur Système\r\nDe formation Bac+5 en informatique ou autres ;\r\n5 ans d’expérience au minimum ;\r\nMaîtrise des logiciels de l’infrastructure technique des systèmes d’exploitation : UNIX, LINUX, MVS, Windows… ;\r\nRigueur ;\r\nSens de l’analyse.', 1, 'Offre d\'emploi', 'IT soft ware', 'CDD', '200 - 250 $', 'Databank mjn', '1252107077.jpg', '	        			        		une startup s\'occupant de la technologie en rdc précisément dans la ville de Goma	        		        	', 13);
INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (3, '699086254', 1, 10, 'Développeur PHP Full Stack Senior', 5, '2 mois au plus', 1, 'maitrise en leader ship', 3, '2021-04-25', 'RDC nord-kivu goma centre ville', 'Licencié ', '1196635145.pdf', 'Nous recherchons des profils et des CV de  Développeurs PHP Full Stack Seniors (H/F) que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement. Missions: Écrire un code de haute qualité avec une bonne couverture de test et b ...', 'connaissance en html5, css3, php et technologie js', 1, 'Offre d\'emploi', 'Société Sans but lucratif ', 'CDD', '500 - 1000 $', 'Databank mjn', '1252107077.jpg', '	        			        		une startup s\'occupant de la technologie en rdc précisément dans la ville de Goma	        		        	', 13);
INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (4, '225175515', 1, 4, 'Développeurs Full Stack Java Seniors', 3, '3 ans deplus', 1, 'gestion système d\'information', 7, '2021-04-29', 'RDC nord-kivu goma centre ville', 'Licencié ', '286832462.pdf', 'Nous recherchons des profils et des CV de  Développeurs Full Stack Java Seniors  que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement.- 5 ans d\'expérience- Bonne maîtrise des frameworks Spring & Angular. Inform ...', 'Maîtrise des logiciels de l’infrastructure technique des systèmes d’exploitation : UNIX, LINUX, MVS, Windows… ;\r\nRigueur ;\r\nSens de l’analyse.', 1, 'Offre d\'emploi', 'IT soft ware', 'CDD', '250 - 350 $', 'Databank mjn', '1252107077.jpg', '	        			        		une startup s\'occupant de la technologie en rdc précisément dans la ville de Goma	        		        	', 13);
INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (5, '372884255', 1, 3, 'Football Data Scout- Lubumbashi', 6, '3 ans deplus', 1, 'maitrise en leader ship', 2, '2021-04-05', 'RDC nord-kivu goma centre ville', 'Diplômé', '891435469.pdf', 'SportsModule is looking for Football Data Scouts in Lubumbashi, Democratic Republic of the Congo. SportsModule Sports Scouts are responsible for attending sports events and reporting all the key events as they happen through a specially designed mobile in ...', 'maitrise de football', 1, 'Offre d\'emploi', 'Ingénierie civile en bâtiment', 'CDD', '50 - 100 $', 'Databank mjn', '1252107077.jpg', '	        			        		une startup s\'occupant de la technologie en rdc précisément dans la ville de Goma	        		        	', 13);
INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (8, '1104163385', 1, 4, 'Administrateur Système', 2, '8 ans deplus', 1, 'gestion système d\'information', 9, '2021-04-22', 'RDC maniema kindu centre ville', 'Licencié ', '546844553.pdf', '											 Nous recherchons des profils et des CV d’Administrateurs Système que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement.\r\n\r\nMissions :\r\n\r\nEffectuer les tests sur les systèmes mis en place\r\nRépondre aux normes et contraintes de sécurité\r\nInstaller et paramétrer le réseau informatique\r\nAssurer une veille technologique\r\nMettre à jour les systèmes.										', '												Profil recherché pour le poste : Administrateur Système\r\nDe formation Bac+5 en informatique ou autres ;\r\n5 ans d’expérience au minimum ;\r\nMaîtrise des logiciels de l’infrastructure technique des systèmes d’exploitation : UNIX, LINUX, MVS, Windows… ;\r\nRigueur ;\r\nSens de l’analyse.										', 3, 'Offre d\'emploi', 'IT soft ware', 'CDD', '500 - 800 $', 'web lessons', '872413610.jpg', 'est une startup de la technologie', 14);
INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (9, '1955862089', 1, 2, 'Digital Marketing Specialist', 1, '3 ans deplus', 1, 'maitrise en neuro marketing', 3, '2021-04-30', 'RDC maniema kindu centre ville', 'Licencié ', '1073914806.pdf', 'Missions :Plan and execute all digital marketing, including SEO/SEM, marketing database, email, social media and display advertising...\r\nRégion de : Kinshasa', 'stratégie en marketing digital', 3, 'Offre d\'emploi', 'Marketing', 'CDD', '500 - 1000 $', 'web lessons', '872413610.jpg', 'est une startup de la technologie', 14);
INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (10, '117052625', 1, 3, 'Spécialiste en Electrification Solaire', 1, '3 ans deplus', 1, 'maitrise en électricité générale', 3, '2021-04-27', 'RDC nord-kivu goma centre ville', 'Licencié ', '823868097.pdf', 'Nous recherchons un Spécialiste en Electrification Solaire.', 'électricité générale', 2, 'Offre d\'emploi', 'Ingénierie civile en bâtiment', 'CDD', '500 - 1000 $', 'White fondation', '51969925.png', 'White-fondation est un centre de formation Moderne spécialisé uniquement pour l’analyse des informations, programmation Informatique et Pour le système d’administration de base de donnée Relationnelle.', 12);
INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (11, '148922420', 1, 4, 'Développement des applications informatiques', 2, '4 ans deplus', 1, 'gestion système d\'information', 8, '2021-04-15', 'RDC nord-kivu goma centre ville', 'Licencié ', '1087776685.pdf', 'connaissance en html5, css3, nodejs,  vuejs,reactjs et ttoute technologie js actuelle', 'Nous recherchons des profils et des CV de Développeurs JAVASCRIPT Full Stack Seniors (H/F) que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement. Missions: Écrire un code de haute qualité avec une bonne couverture de test et b ...', 25, 'Offre d\'emploi', 'IT soft ware', 'CDD', '350 - 500 $', 'Neotec', '1788640987.png', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 22);
INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (6, '655150429', 1, 4, 'ABT ASSOCIATES', 2, '3 ans deplus', 2, 'gestion système d\'information', 9, '2021-04-03', 'RDC nord-kivu goma centre ville', 'Licencié ', '1424783165.pdf', 'The International Development Division focuses on improving the lives and economic well-being of people in lower and middle-income countries. We command technical expertise in health, agriculture, climate change, food security and governance€”as well as in international evaluation. Our multi-layered health portfolio includes policy, health promotion and disease prevention, health finance, and health systems management. In partnership with government clients and local experts, our high-quality programs in Africa, Asia, Latin America, and the Middle East are known for impact and innovation.\r\nAperçu de l\'organisation\r\nAbt Associates (Abt) est un leader mondial motivé par le sens de sa mission dans la recherche, l\'évaluation et la mise en œuvre de programmes dans les domaines du développement international, de la santé, des politiques sociales et environnementales. Reconnue pour sa rigueur dans la résolution de défis complexes, Abt est régulièrement classée parmi les 20 premières sociétés de recherche mondiales et parmi les 40 premiers innovateurs en développement international. L\'entreprise possède de multiples bureaux aux États-Unis et des bureaux de programme dans plus de 40 pays, y compris en Haïti. Au service des secteurs public et privé, Abt soutient les processus de gouvernance participative qui responsabilisent les citoyens et favorisent la responsabilisation et la transparence entre les secteurs. Notre impact se fait sentir dans des institutions réactives et inclusives, des communautés autonomisées, un accès équitable aux services publics, une mobilisation et une gestion améliorées des ressources financières et un environnement plus propice à la croissance économique et aux opportunités.\r\nOpportunité\r\nLe Programme de Santé intégré de l\'USAID (USAID IHP) soutient la stratégie de l\'USAID sur le renforcement des systèmes de santé en RDC. L\'USAID cherche à renforcer la capacité des institutions et des communautés congolaises à fournir des services de santé intégrés et de qualité pour améliorer durablement l\'état de santé de la population congolaise.\r\nPrincipaux rôles et responsabilités sont\r\nL\'assistant aux  Operations  répondra  au EEI/HSS Specialist  et participera dans le processus d’acquisition, systèmes d’enregistrement et de contrôle, processus de stockage, de sortie et réapprovisionnement.', 'Connaissance dans la logistique des voyages, processus d’obtention des visas  et l’appui logistique des ateliers souhaitée\r\nExcellente connaissance et expérience de Windows, Word, Excel, PowerPoint et d\'autres logiciels de traitement de données requis.\r\nExpérience Quick Books souhaitée.\r\nCapacité de planifier et d\'exécuter de façon autonome des tâches complexes tout en tenant compte des détails de la gestion quotidienne\r\n Avoir un sens d’organisation élevé et du respect des deadlines.\r\nCapacité d\'évaluer les problèmes et d\'élaborer des solutions.\r\nExcellentes aptitudes à la communication interpersonnelle et à l\'organisation.\r\nMaîtrise du français et  des compétences en communication verbale et écrite en anglais sont souhaitables', 2, 'Offre d\'emploi', 'IT soft ware', 'CDI', '500 - 800 $', 'White fondation', '51969925.png', 'White-fondation est un centre de formation Moderne spécialisé uniquement pour l’analyse des informations, programmation Informatique et Pour le système d’administration de base de donnée Relationnelle.', 12);
INSERT INTO `profile_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`) VALUES (7, '1525866664', 1, 1, 'Superviseur Protection et Autonomisation de la femme ', 3, '7 mois au plus', 2, 'gestion système d\'information', 8, '2021-04-24', 'RDC nord-kivu goma centre ville', 'Gradué  ', '1541333659.pdf', '																		Requête nº: req12424 Intitulé de poste: Superviseur Protection et Autonomisation de la femme (Superviseur PAF) Secteur d’activité: Protection et autonomisation des femmes Type de contrat: Régulier Taux d’occupation: Plein temps Ouvert aux expatriés: Non L ...\r\nRégion de : Kananga															', '																		(1) year of experience and high school diploma OR the equivalent combination of education and experience. \r\nAbt Associates is an Affirmative Action/Equal Opportunity employer committed to fostering a diverse workforce.  Abt Associates provides market-competitive salaries and comprehensive employee benefits.															', 2, 'Offre d\'emploi', 'Service client ', 'CDI', '350 - 500 $', 'White fondation', '51969925.png', 'White-fondation est un centre de formation Moderne spécialisé uniquement pour l’analyse des informations, programmation Informatique et Pour le système d’administration de base de donnée Relationnelle.', 12);


#
# TABLE STRUCTURE FOR: profile_padding_article
#

DROP TABLE IF EXISTS `profile_padding_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_padding_article` AS select `padding_article`.`idart` AS `idart`,`padding_article`.`nom` AS `nom`,`padding_article`.`description` AS `description`,`padding_article`.`lien` AS `lien`,`padding_article`.`type` AS `type`,`padding_article`.`image` AS `image`,`padding_article`.`created_at` AS `created_at`,`padding_article`.`idcat` AS `idcat`,`category`.`nom` AS `nom_cat`,`padding_article`.`id_user` AS `id_user`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`image` AS `photo` from ((`padding_article` join `category` on((`padding_article`.`idcat` = `category`.`idcat`))) join `users` on((`padding_article`.`id_user` = `users`.`id`)));

utf8mb4_general_ci;

INSERT INTO `profile_padding_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`, `id_user`, `first_name`, `last_name`, `photo`) VALUES (1, 'Cool le boss', '                                                                  supeur! le boss\r\n                  ', '', 'texte', '879565834.jpg', '2021-02-05 16:49:48', 4, 'économique', 3, 'yuma kayanda', 'françois', '1119846465.JPG');
INSERT INTO `profile_padding_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`, `id_user`, `first_name`, `last_name`, `photo`) VALUES (4, 'coucou le boss', '&lt;b&gt;cool le boss&lt;/b&gt;', '', 'texte', '1497961092.jpg', '2021-03-26 11:45:56', 2, 'sport', 3, 'yuma kayanda', 'françois', '1119846465.JPG');
INSERT INTO `profile_padding_article` (`idart`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`, `id_user`, `first_name`, `last_name`, `photo`) VALUES (5, 'mama miya ok', '                                                                  cool le boss miya ok', '', 'texte', '433090337.jpg', '2021-03-26 14:32:07', 5, 'technologique', 5, 'kasumba kipundula', 'bertin', '933959030.JPG');


#
# TABLE STRUCTURE FOR: profile_paiement
#

DROP TABLE IF EXISTS `profile_paiement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement` AS select `paiement`.`idp` AS `idp`,`paiement`.`idpersonne` AS `idpersonne`,`paiement`.`date_paie` AS `date_paie`,`paiement`.`montant` AS `montant`,`paiement`.`motif` AS `motif`,`paiement`.`token` AS `token`,`paiement`.`created_at` AS `created_at`,`paiement`.`codeFacture` AS `codeFacture`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`idrole` AS `idrole`,`users`.`telephone` AS `telephone`,`users`.`image` AS `image`,`entreprise`.`nom` AS `nom`,`entreprise`.`logo` AS `logo`,`paiement`.`etat_paiement` AS `etat_paiement` from ((`paiement` join `users` on((`paiement`.`idpersonne` = `users`.`id`))) join `entreprise` on((`users`.`id` = `entreprise`.`ceo`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `token`, `created_at`, `codeFacture`, `first_name`, `last_name`, `idrole`, `telephone`, `image`, `nom`, `logo`, `etat_paiement`) VALUES (1, 13, '2021-04-04', '10', 'm-pesa', '445T71234SG', '2021-04-04 16:18:54', '1379464422', 'isaac muhyana', 'isaac', 4, '+243993315152', '1843359905.jpg', 'Databank mjn', '1252107077.jpg', 1);
INSERT INTO `profile_paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `token`, `created_at`, `codeFacture`, `first_name`, `last_name`, `idrole`, `telephone`, `image`, `nom`, `logo`, `etat_paiement`) VALUES (2, 12, '2021-04-03', '30', 'airtel money', '123web145', '2021-04-04 16:18:54', '702152599', 'honoré mugisa', 'hono', 4, '+243810409151', '599940694.jpg', 'White fondation', '51969925.png', 0);


#
# TABLE STRUCTURE FOR: profile_paiement_padding
#

DROP TABLE IF EXISTS `profile_paiement_padding`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement_padding` AS select `paiement_pading`.`idp` AS `idp`,`paiement_pading`.`idpersonne` AS `idpersonne`,`paiement_pading`.`date_paie` AS `date_paie`,`paiement_pading`.`montant` AS `montant`,`paiement_pading`.`token` AS `token`,`paiement_pading`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`entreprise`.`nom` AS `nom`,`entreprise`.`logo` AS `logo`,`paiement_pading`.`motif` AS `motif` from ((`paiement_pading` join `users` on((`paiement_pading`.`idpersonne` = `users`.`id`))) join `entreprise` on((`paiement_pading`.`idpersonne` = `entreprise`.`ceo`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_paiement_padding` (`idp`, `idpersonne`, `date_paie`, `montant`, `token`, `created_at`, `first_name`, `last_name`, `image`, `telephone`, `nom`, `logo`, `motif`) VALUES (1, 14, '2021-04-05', '30', '233545gtr2w', '2021-04-05 11:27:40', 'john smith', 'smith', '1231698896.jpg', '+243990084881', 'web lessons', '872413610.jpg', 'm-pesa');


#
# TABLE STRUCTURE FOR: profile_paquet
#

DROP TABLE IF EXISTS `profile_paquet`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paquet` AS select `paquet`.`idpaquet` AS `idpaquet`,`paquet`.`nompaquet` AS `nompaquet`,`paquet`.`prix` AS `prix`,`paquet`.`nombre_jour` AS `nombre_jour`,`paquet`.`nombre_pub` AS `nombre_pub`,`paquet`.`ids` AS `ids`,`paquet`.`created_at` AS `created_at`,`service`.`noms` AS `noms` from (`paquet` join `service` on((`paquet`.`ids` = `service`.`ids`)));

utf8mb4_unicode_ci;

#
# TABLE STRUCTURE FOR: profile_publicite
#

DROP TABLE IF EXISTS `profile_publicite`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_publicite` AS select `publicite`.`idp` AS `idp`,`publicite`.`idart` AS `idart`,`publicite`.`etat` AS `etat`,`article`.`nom` AS `nom`,`article`.`description` AS `description`,`article`.`lien` AS `lien`,`article`.`type` AS `type`,`article`.`image` AS `image`,`article`.`created_at` AS `created_at`,`article`.`idcat` AS `idcat`,`category`.`nom` AS `nom_cat` from ((`publicite` join `article` on((`publicite`.`idart` = `article`.`idart`))) join `category` on((`article`.`idcat` = `category`.`idcat`)));

utf8mb4_general_ci;

INSERT INTO `profile_publicite` (`idp`, `idart`, `etat`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (3, 4, 1, 'Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.', 'Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.\r\n\r\nSuspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.', 'https://unikin.org', 'video', '49048966.jpg', '2021-01-25 07:59:27', 2, 'sport');
INSERT INTO `profile_publicite` (`idp`, `idart`, `etat`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (4, 2, 1, 'les cyclistes', 'Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada', '', 'texte', '611462585.jpg', '2021-01-25 07:48:26', 2, 'sport');
INSERT INTO `profile_publicite` (`idp`, `idart`, `etat`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (5, 3, 1, 'le tenis en ende est surpris par un marabou', 'Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada', '', 'texte', '1872221948.jpg', '2021-01-25 07:50:18', 2, 'sport');
INSERT INTO `profile_publicite` (`idp`, `idart`, `etat`, `nom`, `description`, `lien`, `type`, `image`, `created_at`, `idcat`, `nom_cat`) VALUES (6, 43, 1, 'afia bora', '&lt;b&gt;Afia bora&lt;/b&gt; est une plateforme web de suivi électronique de dossier de malade par la technologie QR code...', '', 'texte', '784122067.jpg', '2021-03-22 12:16:17', 5, 'technologique');


#
# TABLE STRUCTURE FOR: profile_reply_job
#

DROP TABLE IF EXISTS `profile_reply_job`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_reply_job` AS select `job`.`idjob` AS `idjob`,`job`.`codejob` AS `codejob`,`job`.`ids` AS `ids`,`job`.`idcat` AS `idcat`,`job`.`titre` AS `titre`,`job`.`nombre_post` AS `nombre_post`,`job`.`experience` AS `experience`,`job`.`idcontrat` AS `idcontrat`,`job`.`grade` AS `grade`,`job`.`idsalaire` AS `idsalaire`,`job`.`date_fin_depot` AS `date_fin_depot`,`job`.`localisation` AS `localisation`,`job`.`qualification` AS `qualification`,`job`.`fichier_job` AS `fichier_job`,`job`.`description_job` AS `description_job`,`job`.`connaissance` AS `connaissance`,`job`.`identrep` AS `identrep`,`service`.`noms` AS `noms`,`tbl_category`.`nomcat` AS `nomcat`,`contrat`.`nomc` AS `nomc`,`tbl_salaire`.`nomsalaire` AS `nomsalaire`,`entreprise`.`nom` AS `nom`,`entreprise`.`logo` AS `logo`,`entreprise`.`description` AS `description`,`entreprise`.`ceo` AS `ceo`,`demandejob`.`id_user` AS `id_user` from ((((((`job` join `service` on((`job`.`ids` = `service`.`ids`))) join `tbl_category` on((`job`.`idcat` = `tbl_category`.`idcat`))) join `contrat` on((`job`.`idcontrat` = `contrat`.`idc`))) join `tbl_salaire` on((`job`.`idsalaire` = `tbl_salaire`.`idsalaire`))) join `entreprise` on((`job`.`identrep` = `entreprise`.`identrep`))) join `demandejob` on((`job`.`idjob` = `demandejob`.`idjob`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_reply_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`, `id_user`) VALUES (10, '117052625', 1, 3, 'Spécialiste en Electrification Solaire', 1, '3 ans deplus', 1, 'maitrise en électricité générale', 3, '2021-04-27', 'RDC nord-kivu goma centre ville', 'Licencié ', '823868097.pdf', 'Nous recherchons un Spécialiste en Electrification Solaire.', 'électricité générale', 2, 'Offre d\'emploi', 'Ingénierie civile en bâtiment', 'CDD', '500 - 1000 $', 'White fondation', '51969925.png', 'White-fondation est un centre de formation Moderne spécialisé uniquement pour l’analyse des informations, programmation Informatique et Pour le système d’administration de base de donnée Relationnelle.', 12, 5);
INSERT INTO `profile_reply_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`, `id_user`) VALUES (10, '117052625', 1, 3, 'Spécialiste en Electrification Solaire', 1, '3 ans deplus', 1, 'maitrise en électricité générale', 3, '2021-04-27', 'RDC nord-kivu goma centre ville', 'Licencié ', '823868097.pdf', 'Nous recherchons un Spécialiste en Electrification Solaire.', 'électricité générale', 2, 'Offre d\'emploi', 'Ingénierie civile en bâtiment', 'CDD', '500 - 1000 $', 'White fondation', '51969925.png', 'White-fondation est un centre de formation Moderne spécialisé uniquement pour l’analyse des informations, programmation Informatique et Pour le système d’administration de base de donnée Relationnelle.', 12, 3);
INSERT INTO `profile_reply_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`, `id_user`) VALUES (10, '117052625', 1, 3, 'Spécialiste en Electrification Solaire', 1, '3 ans deplus', 1, 'maitrise en électricité générale', 3, '2021-04-27', 'RDC nord-kivu goma centre ville', 'Licencié ', '823868097.pdf', 'Nous recherchons un Spécialiste en Electrification Solaire.', 'électricité générale', 2, 'Offre d\'emploi', 'Ingénierie civile en bâtiment', 'CDD', '500 - 1000 $', 'White fondation', '51969925.png', 'White-fondation est un centre de formation Moderne spécialisé uniquement pour l’analyse des informations, programmation Informatique et Pour le système d’administration de base de donnée Relationnelle.', 12, 8);
INSERT INTO `profile_reply_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`, `id_user`) VALUES (10, '117052625', 1, 3, 'Spécialiste en Electrification Solaire', 1, '3 ans deplus', 1, 'maitrise en électricité générale', 3, '2021-04-27', 'RDC nord-kivu goma centre ville', 'Licencié ', '823868097.pdf', 'Nous recherchons un Spécialiste en Electrification Solaire.', 'électricité générale', 2, 'Offre d\'emploi', 'Ingénierie civile en bâtiment', 'CDD', '500 - 1000 $', 'White fondation', '51969925.png', 'White-fondation est un centre de formation Moderne spécialisé uniquement pour l’analyse des informations, programmation Informatique et Pour le système d’administration de base de donnée Relationnelle.', 12, 4);
INSERT INTO `profile_reply_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`, `id_user`) VALUES (4, '225175515', 1, 4, 'Développeurs Full Stack Java Seniors', 3, '3 ans deplus', 1, 'gestion système d\'information', 7, '2021-04-29', 'RDC nord-kivu goma centre ville', 'Licencié ', '286832462.pdf', 'Nous recherchons des profils et des CV de  Développeurs Full Stack Java Seniors  que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement.- 5 ans d\'expérience- Bonne maîtrise des frameworks Spring & Angular. Inform ...', 'Maîtrise des logiciels de l’infrastructure technique des systèmes d’exploitation : UNIX, LINUX, MVS, Windows… ;\r\nRigueur ;\r\nSens de l’analyse.', 1, 'Offre d\'emploi', 'IT soft ware', 'CDD', '250 - 350 $', 'Databank mjn', '1252107077.jpg', '	        			        		une startup s\'occupant de la technologie en rdc précisément dans la ville de Goma	        		        	', 13, 5);
INSERT INTO `profile_reply_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`, `id_user`) VALUES (3, '699086254', 1, 10, 'Développeur PHP Full Stack Senior', 5, '2 mois au plus', 1, 'maitrise en leader ship', 3, '2021-04-25', 'RDC nord-kivu goma centre ville', 'Licencié ', '1196635145.pdf', 'Nous recherchons des profils et des CV de  Développeurs PHP Full Stack Seniors (H/F) que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement. Missions: Écrire un code de haute qualité avec une bonne couverture de test et b ...', 'connaissance en html5, css3, php et technologie js', 1, 'Offre d\'emploi', 'Société Sans but lucratif ', 'CDD', '500 - 1000 $', 'Databank mjn', '1252107077.jpg', '	        			        		une startup s\'occupant de la technologie en rdc précisément dans la ville de Goma	        		        	', 13, 5);
INSERT INTO `profile_reply_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`, `id_user`) VALUES (3, '699086254', 1, 10, 'Développeur PHP Full Stack Senior', 5, '2 mois au plus', 1, 'maitrise en leader ship', 3, '2021-04-25', 'RDC nord-kivu goma centre ville', 'Licencié ', '1196635145.pdf', 'Nous recherchons des profils et des CV de  Développeurs PHP Full Stack Seniors (H/F) que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement. Missions: Écrire un code de haute qualité avec une bonne couverture de test et b ...', 'connaissance en html5, css3, php et technologie js', 1, 'Offre d\'emploi', 'Société Sans but lucratif ', 'CDD', '500 - 1000 $', 'Databank mjn', '1252107077.jpg', '	        			        		une startup s\'occupant de la technologie en rdc précisément dans la ville de Goma	        		        	', 13, 8);
INSERT INTO `profile_reply_job` (`idjob`, `codejob`, `ids`, `idcat`, `titre`, `nombre_post`, `experience`, `idcontrat`, `grade`, `idsalaire`, `date_fin_depot`, `localisation`, `qualification`, `fichier_job`, `description_job`, `connaissance`, `identrep`, `noms`, `nomcat`, `nomc`, `nomsalaire`, `nom`, `logo`, `description`, `ceo`, `id_user`) VALUES (11, '148922420', 1, 4, 'Développement des applications informatiques', 2, '4 ans deplus', 1, 'gestion système d\'information', 8, '2021-04-15', 'RDC nord-kivu goma centre ville', 'Licencié ', '1087776685.pdf', 'connaissance en html5, css3, nodejs,  vuejs,reactjs et ttoute technologie js actuelle', 'Nous recherchons des profils et des CV de Développeurs JAVASCRIPT Full Stack Seniors (H/F) que nous enverrons à nos clients grands comptes pour leurs futurs besoins de recrutement. Missions: Écrire un code de haute qualité avec une bonne couverture de test et b ...', 25, 'Offre d\'emploi', 'IT soft ware', 'CDD', '350 - 500 $', 'Neotec', '1788640987.png', '	        			        		Est une startup technologique se plaçant dans la ville de goma	        		        	', 22, 23);


#
# TABLE STRUCTURE FOR: profile_users
#

DROP TABLE IF EXISTS `profile_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_users` AS select `users`.`id` AS `id`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`users`.`full_adresse` AS `full_adresse`,`users`.`biographie` AS `biographie`,`users`.`date_nais` AS `date_nais`,`users`.`passwords` AS `passwords`,`users`.`idrole` AS `idrole`,`users`.`sexe` AS `sexe`,`users`.`facebook` AS `facebook`,`users`.`linkedin` AS `linkedin`,`users`.`twitter` AS `twitter`,`users`.`idPays` AS `idPays`,`users`.`idv` AS `idv`,`users`.`idp` AS `idp`,`users`.`cv` AS `cv` from `users`;

utf8mb4_unicode_ci;

INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (2, 'patrona shabani', 'sumaili', 'sumailiroger681@gmail.com', '516787062.jpg', '+243817883541', 'tmk goma avenue mushanganya n°59', '                  	Développeur et entrepreneur en temps plein!                               ', '1998-08-12', '9db09d6ae665e42340ef0b1ef1eb95b4', 1, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', NULL, NULL, NULL, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (3, 'yuma kayanda', 'françois', 'yuma@gmail.com', '1119846465.JPG', '081989152', 'quartier katoyi avenue konde', 'Si Dieu est à mon côté qui sera contre moi!                                                                                                                                                                                                      ', '1995-01-09', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, '1426085365.pdf');
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (4, 'kakese pandamiti', 'patrick', 'kakese@gmail.com', '743472493.jpg', '081989152', 'Cool les gars', 'senior developer', '1997-01-24', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (5, 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '933959030.JPG', '+243993315152', 'Apple est mon préférée', '                  	                  	                  	Apple est mon préféré!                                                      ', '2021-01-24', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (6, 'jolie piana', 'lola', 'jolie@gmail.com', '142889861.jpg', '081989152', 'My life it never be slowly', 'Développeuse web', '2000-01-24', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 10, 10, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (7, 'madeleine stephanie', 'lola', 'madeleine@gmail.com', '1050787597.jpeg', '0998765432', 'Never give up', NULL, '2000-01-05', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', NULL, NULL, NULL, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (8, 'gulain badesi', 'gulain soft', 'gulain@gmail.com', '924243565.jpg', '081989152', 'Nord kivu gome quartier himbi Himbi ', '                  	                  	                  	<p>                  	                  	ma vie et l\'entrepreneuriat margent toujours bien</p>                                                      ', '1997-02-04', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', NULL, NULL, NULL, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (9, 'joh sumbu', '', 'joh@gmail.com', '1468841609.jpg', '', '', 'Artiste chanteur', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (10, 'sifa abeli deborah', 'blessing', 'sifa@gmail.com', 'icone-user.png', '', '', NULL, '2000-03-30', 'e10adc3949ba59abbe56e057f20f883e', 3, 'F', '', '', '', NULL, NULL, NULL, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (11, 'michael joffrey', 'lula', 'joffrey@gmail.com', '1822244436.jpg', '', '', NULL, '1992-03-30', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', '', '', '', NULL, NULL, NULL, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (12, 'honoré mugisa', 'hono', 'whitefondation@gmail.com', '599940694.jpg', '+243810409151', 'Goma quartier 3 paillottes', 'Développeur en temps plein!', '1996-03-30', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (13, 'isaac muhyana', 'isaac', 'isaac@gmail.com', '1843359905.jpg', '+243993315152', 'Gomq quartier tmk', 'Databank drc est notre produit', '1993-03-30', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (14, 'john smith', 'smith', 'johnsmith@gmail.com', '1231698896.jpg', '+243990084881', 'Goma quartier himbi', 'développeur web', '2000-03-16', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 17, 17, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (15, 'Den birindwa', '', 'dan@gmail.com', '124561731.jpg', '', '', 'Ma vie est christ', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 11, 11, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (16, 'Deny tchituka', '', 'dany@gmail.com', '1841044671.jpg', '', '', 'Maitre d\'école', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 11, 11, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (17, 'kumba jean-prierre', '', 'kumba@gmail.com', '968548502.jpg', '', '', 'Etudiant chef de promotion', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 6, 6, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (18, 'pionde bin sefu', '', 'pionde@gmail.com', '277378976.jpg', '', '', 'Chambion', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (19, 'sifa abeli deborah', '', 'sifaabedi@gmail.com', '1882836577.jpg', '', '', 'meckup', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (20, 'rachel mputu', '', 'rachel@gmail.com', '1524677507.jpg', '', '', 'Développeuse entrepreneur ', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 10, 10, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (21, 'salomon mputu', NULL, 'salomon12@gmail.com', 'icone-user.png', NULL, NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (22, 'salomon escadel', '', 'salomon@gmail.com', '1798753487.jpg', '', '', 'Développeur chez un jour nouveau!', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', '', '', '', 1, 19, 19, NULL);
INSERT INTO `profile_users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`) VALUES (23, 'cubaka mulume', 'alpha', 'alpha@gmail.com', '783341919.jpg', '+243810409151', 'quartier katoyi avenue konde', 'Informaticien sans frontière ', '1993-04-06', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, '279899743.pdf');


#
# TABLE STRUCTURE FOR: profile_ville
#

DROP TABLE IF EXISTS `profile_ville`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_ville` AS select `ville`.`idv` AS `idv`,`ville`.`nomv` AS `nomv`,`province`.`nomp` AS `nomp`,`ville`.`created_at` AS `created_at`,`ville`.`idp` AS `idp` from (`ville` join `province` on((`ville`.`idp` = `province`.`idp`)));

utf8mb4_unicode_ci;

INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (1, 'Buta', 'Bas-Uele', '2020-07-14 17:11:54', 1);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (2, 'Mbandaka', 'Équateur', '2020-07-14 17:14:00', 2);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (3, 'Lubumbashi', 'Haut-Katanga', '2020-07-14 17:14:17', 3);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (4, 'Kamina', 'Haut-Lomami', '2020-07-14 17:14:37', 4);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (5, 'Isiro', 'Haut-Uele', '2020-07-14 17:15:00', 5);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (6, 'Bunia', 'Ituri', '2020-07-14 17:15:20', 6);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (7, 'Luebo', 'Kasaï', '2020-07-14 17:15:37', 7);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (8, 'Kananga', 'Kasaï-Central', '2020-07-14 17:15:58', 8);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (9, 'Mbuji-Mayi', 'Kasaï-Oriental', '2020-07-14 17:16:29', 9);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (10, 'Kinshasa', 'Kinshasa', '2020-07-14 17:16:52', 10);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (11, 'Matadi', 'Kongo-Central', '2020-07-14 17:17:30', 11);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (12, 'Kenge', 'Kwango', '2020-07-14 17:17:50', 12);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (13, 'Bandundu', 'Kwilu', '2020-07-14 17:20:12', 13);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (14, 'Kabinda', 'Lomami', '2020-07-14 17:20:32', 14);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (15, 'Kolwezi', 'Lualaba', '2020-07-14 17:20:51', 15);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (16, 'Inongo', 'Mai-Ndombe', '2020-07-14 17:21:23', 16);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (17, 'Kindu', 'Maniema', '2020-07-14 17:21:41', 17);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (18, 'Lisala', 'Mongala', '2020-07-14 17:22:07', 18);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (19, 'Goma', 'Nord-Kivu', '2020-07-14 17:22:32', 19);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (20, 'Gbadolite', 'Nord-Ubangi', '2020-07-14 17:22:50', 20);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (21, 'Lusambo', 'Sankuru', '2020-07-14 17:23:07', 21);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (22, 'Bukavu', 'Sud-Kivu', '2020-07-14 17:23:23', 22);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (23, 'Gemena', 'Sud-Ubangi', '2020-07-14 17:23:42', 23);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (24, 'Kalemie', 'Tanganyika', '2020-07-14 17:24:02', 24);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (25, 'Kisangani', 'Tshopo', '2020-07-14 17:24:22', 25);
INSERT INTO `profile_ville` (`idv`, `nomv`, `nomp`, `created_at`, `idp`) VALUES (26, 'Boende', 'Tshuapa', '2020-07-14 17:24:45', 26);


#
# TABLE STRUCTURE FOR: province
#

DROP TABLE IF EXISTS `province`;

CREATE TABLE `province` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `nomp` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (1, 'Bas-Uele', '2020-07-14 15:02:45');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (2, 'Équateur', '2020-07-14 15:23:05');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (3, 'Haut-Katanga', '2020-07-14 15:26:03');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (4, 'Haut-Lomami', '2020-07-14 15:26:45');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (5, 'Haut-Uele', '2020-07-14 15:27:02');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (6, 'Ituri', '2020-07-14 15:27:16');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (7, 'Kasaï', '2020-07-14 15:27:47');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (8, 'Kasaï-Central', '2020-07-14 15:27:59');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (9, 'Kasaï-Oriental', '2020-07-14 15:28:29');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (10, 'Kinshasa', '2020-07-14 15:28:43');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (11, 'Kongo-Central', '2020-07-14 15:28:57');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (12, 'Kwango', '2020-07-14 15:29:08');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (13, 'Kwilu', '2020-07-14 15:29:20');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (14, 'Lomami', '2020-07-14 15:29:30');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (15, 'Lualaba', '2020-07-14 15:29:42');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (16, 'Mai-Ndombe', '2020-07-14 15:29:52');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (17, 'Maniema', '2020-07-14 15:30:03');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (18, 'Mongala', '2020-07-14 15:30:14');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (19, 'Nord-Kivu', '2020-07-14 15:30:30');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (20, 'Nord-Ubangi', '2020-07-14 15:30:46');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (21, 'Sankuru', '2020-07-14 15:31:05');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (22, 'Sud-Kivu', '2020-07-14 15:31:15');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (23, 'Sud-Ubangi', '2020-07-14 15:31:27');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (24, 'Tanganyika', '2020-07-14 15:31:40');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (25, 'Tshopo', '2020-07-14 15:31:53');
INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES (26, 'Tshuapa', '2020-07-14 15:32:02');


#
# TABLE STRUCTURE FOR: publicite
#

DROP TABLE IF EXISTS `publicite`;

CREATE TABLE `publicite` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `idart` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT '1',
  PRIMARY KEY (`idp`),
  UNIQUE KEY `unique_pub` (`idart`),
  CONSTRAINT `publicite_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `publicite` (`idp`, `idart`, `etat`) VALUES (3, 4, 1);
INSERT INTO `publicite` (`idp`, `idart`, `etat`) VALUES (4, 2, 1);
INSERT INTO `publicite` (`idp`, `idart`, `etat`) VALUES (5, 3, 1);
INSERT INTO `publicite` (`idp`, `idart`, `etat`) VALUES (6, 43, 1);


#
# TABLE STRUCTURE FOR: recupere
#

DROP TABLE IF EXISTS `recupere`;

CREATE TABLE `recupere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `verification_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (1, 'sumailiroger681@gmail.com', '3999736824e6b44e6015ebb76fd74f14');
INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (2, 'sumailiroger681@gmail.com', '55990471ac0322790b440904965d71a7');
INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (3, 'sumailiroger681@gmail.com', 'e28ce38aed9456068456a8563d062f02');
INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (4, 'sumailiroger681@gmail.com', 'b631a73f23fb1e479621d9d3e5dc2b8c');
INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (5, 'sumailiroger681@gmail.com', 'dfd7db7548cebf23efe3b88441837c2b');
INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (6, 'sumailiroger681@gmail.com', '540ae44b8273c60d27e4ee7ae2027c7d');
INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES (7, 'sumailiroger681@gmail.com', '201fb9199dd7a02fc9dcf72f5ed7a589');


#
# TABLE STRUCTURE FOR: role
#

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrole`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES (1, 'admin', '2021-01-23 14:55:38');
INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES (2, 'user ', '2021-01-23 14:55:38');
INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES (3, 'journaliste', '2021-02-05 08:13:03');
INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES (4, 'entreprise', '2021-03-27 13:50:18');


#
# TABLE STRUCTURE FOR: service
#

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `noms` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ids`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `service` (`ids`, `noms`, `created_at`) VALUES (1, 'Offre d\'emploi', '2021-04-01 13:00:54');


#
# TABLE STRUCTURE FOR: tbl_calification
#

DROP TABLE IF EXISTS `tbl_calification`;

CREATE TABLE `tbl_calification` (
  `idcalification` int(11) NOT NULL AUTO_INCREMENT,
  `nomcalification` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcalification`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_calification` (`idcalification`, `nomcalification`, `created_at`) VALUES (1, 'Diplômé', '2020-08-08 16:22:06');
INSERT INTO `tbl_calification` (`idcalification`, `nomcalification`, `created_at`) VALUES (2, 'Licencié ', '2020-08-08 16:22:45');
INSERT INTO `tbl_calification` (`idcalification`, `nomcalification`, `created_at`) VALUES (3, 'Gradué  ', '2020-08-08 16:23:42');
INSERT INTO `tbl_calification` (`idcalification`, `nomcalification`, `created_at`) VALUES (4, 'D4', '2020-08-08 16:24:13');
INSERT INTO `tbl_calification` (`idcalification`, `nomcalification`, `created_at`) VALUES (5, 'Docteur ', '2020-08-08 16:24:27');


#
# TABLE STRUCTURE FOR: tbl_category
#

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `nomcat` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES (1, 'Service client ', '2021-03-08 15:46:09');
INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES (2, 'Marketing', '2021-03-08 15:46:51');
INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES (3, 'Ingénierie civile en bâtiment', '2020-08-08 15:48:14');
INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES (4, 'IT soft ware', '2021-03-08 15:48:58');
INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES (5, 'Entreprise commerciale', '2021-03-08 15:49:25');
INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES (6, 'Société d\'action à responsabilité limité ', '2021-03-08 15:50:14');
INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES (7, 'Société à commandite simple', '2021-03-08 15:51:17');
INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES (10, 'Société Sans but lucratif ', '2021-03-30 11:53:22');


#
# TABLE STRUCTURE FOR: tbl_competense
#

DROP TABLE IF EXISTS `tbl_competense`;

CREATE TABLE `tbl_competense` (
  `idcompetense` int(11) NOT NULL AUTO_INCREMENT,
  `nomcompetense` varchar(600) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcompetense`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (1, 'HTML5', '2020-08-08 17:11:41');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (2, 'CSS 3', '2020-08-08 17:11:51');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (3, 'JAVASCRIPT', '2020-08-08 17:12:04');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (4, 'JQUERY', '2020-08-08 17:12:16');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (5, 'AJAX', '2020-08-08 17:12:30');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (6, 'PHP', '2020-08-08 17:13:09');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (7, 'MYSQL', '2020-08-08 17:13:21');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (8, 'NODE JS', '2020-08-08 17:13:37');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (9, 'REACT JS', '2020-08-08 17:13:50');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (10, 'REACT NATIVE', '2020-08-08 17:14:02');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (11, 'VUE JS', '2020-08-08 17:14:12');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (12, 'CODEIGNITER', '2020-08-08 17:14:29');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (13, 'LARAVEL', '2020-08-08 17:14:39');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (14, 'Droits des affaires', '2021-03-30 12:24:24');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (15, 'Gestion de projet', '2021-03-30 12:24:43');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (16, 'Administration réseau', '2021-03-30 12:26:37');
INSERT INTO `tbl_competense` (`idcompetense`, `nomcompetense`, `created_at`) VALUES (17, 'Administration base de données', '2021-03-30 12:27:04');


#
# TABLE STRUCTURE FOR: tbl_info
#

DROP TABLE IF EXISTS `tbl_info`;

CREATE TABLE `tbl_info` (
  `idinfo` int(11) NOT NULL,
  `nom_site` varchar(300) DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `tel1` varchar(300) DEFAULT NULL,
  `tel2` varchar(300) DEFAULT NULL,
  `adresse` text,
  `facebook` varchar(600) DEFAULT NULL,
  `twitter` varchar(600) DEFAULT NULL,
  `linkedin` varchar(600) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `termes` text,
  `confidentialite` text,
  `description` text,
  `mission` text,
  `objectif` text,
  `blog` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_info` (`idinfo`, `nom_site`, `icone`, `tel1`, `tel2`, `adresse`, `facebook`, `twitter`, `linkedin`, `email`, `termes`, `confidentialite`, `description`, `mission`, `objectif`, `blog`) VALUES (1, 'media', '1336403592.png', '+243817883541', '+243970524665', 'RDC Nord-kivu goma quartier  7 bougies', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', 'info.devtech@gmail.com', 'Notre Politique de protection des données personnelles décrit la manière dont #devtech traite les données à caractère personnel des visiteurs et des utilisateurs (ci- après les « Utilisateurs ») lors de leur navigation sur notre site. La Politique de protection des données personnelles fait partie intégrante des Conditions Générales d\'Utilisation du Site.\r\n#devtech accorde en permanence une attention aux données de nos Utilisateurs. Nous pouvons ainsi être amenés à modifier, compléter ou mettre à jour périodiquement la Politique de protection des données personnelles. Nous pourrons aussi apporter des modifications nécessaires afin de respecter les changements de la législation et règlementation en vigueur. Dans la mesure du possible, nous vous notifierons tout changement important. Nous vous encourageons toutefois à consulter régulièrement la dernière version en vigueur, accessible sur notre Site.\r\n', 'Conditions Générales d\'Utilisation\r\nDéfinitions\r\nLes Parties conviennent et acceptent que les termes suivants utilisés avec une majuscule, au singulier et/ou au pluriel, auront, dans le cadre des présentes Conditions Générales d\'Utilisation, la signification définie ci-après :\r\n•	« Contrat » : désigne les présentes Conditions Générales d\'Utilisation ainsi que la Politique de protection des données personnelles ;\r\n•	« Membre » : désigne indifféremment le Membre Freemium et le Membre Premium ;\r\n•	« Membre Freemium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux fonctionnalités gratuites de notre Plateforme ;\r\n•	« Membre Premium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux services Premium Solo ou Plus ;\r\n•	« Plateforme » : plateforme numérique de type site Web et/ou application mobile permettant l\'accès au Service ainsi que son utilisation ;\r\n•	« Utilisateur » : désigne toute personne qui utilise la Plateforme, qu\'elle soit un Visiteur ou un Membre ;\r\n•	« Visiteur » : désigne toute personne, internaute, naviguant sur la Plateforme sans création de compte associé.\r\nLes présentes Conditions Générales d\'Utilisation (ci-après les \"CGU\") régissent nos rapports avec vous, personne accédant à la Plateforme, applicables durant votre utilisation de la Plateforme et, si vous êtes un Membre jusqu\'à désactivation de votre compte. Si vous n\'êtes pas d\'accord avec les termes des CGU il vous est vivement recommandé de ne pas utiliser notre Plateforme et nos services.\r\nEn naviguant sur la Plateforme, si vous êtes un Visiteur, vous reconnaissez avoir pris connaissance et accepté l\'intégralité des présentes CGU et notre Politique de protection des données personnelles.\r\nEn créant un compte en cliquant sur le bouton « S\'inscrire avec Facebook » ou « Inscription avec un email » ou « S\'inscrire avec Google » pour devenir Membre, vous êtes invité à lire et accepter les présentes CGU et la Politique de protection des données personnelles, en cochant la case prévue à cet effet.\r\nNous vous encourageons à consulter les « Conditions Générales d\'Utilisation et la Politique de protection des données personnelles » avant votre première utilisation de notre Plateforme et régulièrement lors de leurs mises à jour. Nous pouvons en effet être amenés à modifier les présentes CGU. Si des modifications sont apportées, nous vous informerons par email ou via notre Plateforme pour vous permettre d\'examiner les modifications avant qu\'elles ne prennent effet. Si vous continuez à utiliser notre Plateforme après la publication ou l\'envoi d\'un avis concernant les modifications apportées aux présentes conditions, cela signifie que vous acceptez les mises à jour. Les CGU qui vous seront opposables seront celles en vigueur lors de votre utilisation de la Plateforme.\r\nArticle 1. Inscription au service\r\n1.1 Conditions d\'inscription à la Plateforme\r\nCertaines fonctionnalités de la Plateforme nécessitent d\'être inscrit et d\'obtenir un compte. Avant de pouvoir vous inscrire sur la Plateforme vous devez avoir lu et accepté les présentes CGU et la Politique de protection des données personnelles.\r\nVous déclarez avoir la capacité d\'accepter les présentes conditions générales d\'utilisation, c\'est-à-dire avoir plus de 16 ans et ne pas faire l\'objet d\'une mesure de protection juridique des majeurs (mise sous sauvegarde de justice, sous tutelle ou sous curatelle).\r\nAvant d\'accéder à notre Plateforme, le consentement des mineurs de moins de 16 ans doit être donné par le titulaire de l\'autorité parentale.\r\nNotre Plateforme ne prévoit aucunement l\'inscription, la collecte ou le stockage de renseignement relatifs à toute personne âgée de 15 ans ou moins.\r\n1.2 Création de compte\r\nVous pourrez créer un compte des deux manières suivantes :\r\n•	Soit remplir manuellement, sur notre Plateforme, les champs obligatoires figurant sur le formulaire d\'inscription, à l\'aide d\'informations complètes et exactes. ', 'Développeurs des technologies(#devtech) est une startup qui vise à promouvoir l\'intégrité de la jeunesse en appliquant la technologie afin de permettre  l\'émergence  de la société.', 'la startup devetech vise à apporter des solutions efficaces grâce à la nouvelle  technologie pour palier contre les différents  problèmes que rencontre la société  suite au manquement d\'une meilleure technologie adaptée à leur besoin.', 'Réduire le taux des difficultés que rencontre  la société suite au manquement d\'une  meilleure solution technologique appropriée à leur problématique au pourcentage le plus bas possible jamais atteint!', 'Devetech est une  startup qui vise à promouvoir  l\'intégrité des jeunes en appliquant la technologie  pour permettre l\'avancement de la société.\r\nNotre contribution dans la société est le faite de voir comment la jeunesse progresse  mieux  en contribuant  aux différents aspects qui aident la société  à s\'en sortir dans le Cao.\r\nLa technologie dont nous parlons fera en sorte de contribuer  à l\'émergence de toute la jeunesse et la société en particulier.\r\nNous devons considérer la technologie actuelle comme une arme  efficace pour changer le monde.\r\n \r\n');


#
# TABLE STRUCTURE FOR: tbl_pays
#

DROP TABLE IF EXISTS `tbl_pays`;

CREATE TABLE `tbl_pays` (
  `idPays` int(11) NOT NULL AUTO_INCREMENT,
  `nompays` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idPays`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_pays` (`idPays`, `nompays`, `created_at`) VALUES (1, 'RDC', '2021-03-30 11:25:53');


#
# TABLE STRUCTURE FOR: tbl_salaire
#

DROP TABLE IF EXISTS `tbl_salaire`;

CREATE TABLE `tbl_salaire` (
  `idsalaire` int(11) NOT NULL AUTO_INCREMENT,
  `nomsalaire` varchar(600) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idsalaire`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (1, '10 - 50 $', '2020-08-08 17:54:55');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (2, '50 - 100 $', '2020-08-08 17:55:20');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (3, '500 - 1000 $', '2020-08-08 17:55:35');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (4, '100 - 150 $', '2020-08-08 17:56:07');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (5, '150 - 200 $', '2020-08-08 17:56:27');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (6, '200 - 250 $', '2020-08-08 17:57:03');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (7, '250 - 350 $', '2020-08-08 17:57:26');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (8, '350 - 500 $', '2020-08-08 17:57:49');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (9, '500 - 800 $', '2020-08-08 17:58:12');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (10, '800 - 1000 $', '2020-08-08 17:58:36');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (11, '1000 - 1500 $', '2021-03-30 12:48:03');
INSERT INTO `tbl_salaire` (`idsalaire`, `nomsalaire`, `created_at`) VALUES (12, '1500 - 2000 $', '2021-03-30 12:48:15');


#
# TABLE STRUCTURE FOR: user_interese
#

DROP TABLE IF EXISTS `user_interese`;

CREATE TABLE `user_interese` (
  `idintersse` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `nom` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idintersse`),
  KEY `id` (`id`),
  CONSTRAINT `user_interese_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (1, 3, 'Entrepreneuriat', '2021-03-31 00:50:49');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (2, 3, 'vodacom congo', '2021-03-31 00:50:49');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (4, 3, 'chance beeting', '2021-03-31 00:54:58');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (5, 5, 'facebook dev', '2021-04-03 08:34:24');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (6, 5, 'chance beeting', '2021-04-03 08:34:24');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (7, 6, 'lara news', '2021-04-03 08:41:49');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (8, 6, 'laravel comunuty', '2021-04-03 08:41:49');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (9, 6, 'angular matriel', '2021-04-03 08:41:49');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (10, 16, 'finance', '2021-04-03 09:06:19');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (11, 16, 'Entrepreneuriat', '2021-04-03 09:06:19');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (12, 23, 'facebook dev', '2021-04-05 23:42:10');
INSERT INTO `user_interese` (`idintersse`, `id`, `nom`, `created_at`) VALUES (13, 23, 'REACT devtools', '2021-04-05 23:42:10');


#
# TABLE STRUCTURE FOR: user_skills
#

DROP TABLE IF EXISTS `user_skills`;

CREATE TABLE `user_skills` (
  `idskills` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `nomskills` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idskills`),
  KEY `id` (`id`),
  CONSTRAINT `user_skills_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (1, 3, 'Marketing digital', '2021-03-31 01:05:11');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (2, 3, 'neuro marketing', '2021-03-31 01:05:11');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (3, 3, 'administration de base de données', '2021-03-31 01:07:08');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (4, 5, 'REACT JS', '2021-04-03 08:34:09');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (5, 5, 'Entrepreneuriat', '2021-04-03 08:34:09');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (6, 5, 'Marketing digital', '2021-04-03 08:34:09');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (7, 6, 'php', '2021-04-03 08:36:57');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (8, 6, 'vuejs', '2021-04-03 08:36:57');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (9, 6, 'REACT JS', '2021-04-03 08:36:57');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (15, 16, 'Economie monétaire', '2021-04-03 09:03:37');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (18, 16, 'Entrepreneuriat', '2021-04-03 09:07:05');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (19, 23, 'html', '2021-04-05 23:42:55');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (20, 23, 'css', '2021-04-05 23:42:55');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (21, 23, 'php', '2021-04-05 23:42:55');
INSERT INTO `user_skills` (`idskills`, `id`, `nomskills`, `created_at`) VALUES (22, 23, 'javascript', '2021-04-05 23:42:55');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `telephone` varchar(300) DEFAULT NULL,
  `full_adresse` text,
  `biographie` text,
  `date_nais` date DEFAULT NULL,
  `passwords` varchar(300) DEFAULT NULL,
  `idrole` int(11) NOT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `facebook` varchar(900) DEFAULT NULL,
  `linkedin` varchar(900) DEFAULT NULL,
  `twitter` varchar(900) DEFAULT NULL,
  `idPays` int(11) DEFAULT NULL,
  `idv` int(11) DEFAULT NULL,
  `idp` int(11) DEFAULT NULL,
  `cv` varchar(300) DEFAULT NULL,
  `debit_event` date DEFAULT NULL,
  `fin_event` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idrole` (`idrole`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (2, 'patrona shabani', 'sumaili', 'sumailiroger681@gmail.com', '516787062.jpg', '+243817883541', 'tmk goma avenue mushanganya n°59', '                  	Développeur et entrepreneur en temps plein!                               ', '1998-08-12', '9db09d6ae665e42340ef0b1ef1eb95b4', 1, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', NULL, NULL, NULL, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (3, 'yuma kayanda', 'françois', 'yuma@gmail.com', '1119846465.JPG', '081989152', 'quartier katoyi avenue konde', 'Si Dieu est à mon côté qui sera contre moi!                                                                                                                                                                                                      ', '1995-01-09', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, '1426085365.pdf', '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (4, 'kakese pandamiti', 'patrick', 'kakese@gmail.com', '743472493.jpg', '081989152', 'Cool les gars', 'senior developer', '1997-01-24', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (5, 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '933959030.JPG', '+243993315152', 'Apple est mon préférée', '                  	                  	                  	Apple est mon préféré!                                                      ', '2021-01-24', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (6, 'jolie piana', 'lola', 'jolie@gmail.com', '142889861.jpg', '081989152', 'My life it never be slowly', 'Développeuse web', '2000-01-24', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 10, 10, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (7, 'madeleine stephanie', 'lola', 'madeleine@gmail.com', '1050787597.jpeg', '0998765432', 'Never give up', NULL, '2000-01-05', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', NULL, NULL, NULL, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (8, 'gulain badesi', 'gulain soft', 'gulain@gmail.com', '924243565.jpg', '081989152', 'Nord kivu gome quartier himbi Himbi ', '                  	                  	                  	<p>                  	                  	ma vie et l\'entrepreneuriat margent toujours bien</p>                                                      ', '1997-02-04', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', NULL, NULL, NULL, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (9, 'joh sumbu', '', 'joh@gmail.com', '1468841609.jpg', '', '', 'Artiste chanteur', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (10, 'sifa abeli deborah', 'blessing', 'sifa@gmail.com', 'icone-user.png', '', '', NULL, '2000-03-30', 'e10adc3949ba59abbe56e057f20f883e', 3, 'F', '', '', '', NULL, NULL, NULL, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (11, 'michael joffrey', 'lula', 'joffrey@gmail.com', '1822244436.jpg', '', '', NULL, '1992-03-30', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', '', '', '', NULL, NULL, NULL, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (12, 'honoré mugisa', 'hono', 'whitefondation@gmail.com', '599940694.jpg', '+243810409151', 'Goma quartier 3 paillottes', 'Développeur en temps plein!', '1996-03-30', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, '2021-04-02', '2021-05-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (13, 'isaac muhyana', 'isaac', 'isaac@gmail.com', '1843359905.jpg', '+243993315152', 'Gomq quartier tmk', 'Databank drc est notre produit', '1993-03-30', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, '2021-04-02', '2021-05-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (14, 'john smith', 'smith', 'johnsmith@gmail.com', '1231698896.jpg', '+243990084881', 'Goma quartier himbi', 'développeur web', '2000-03-16', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 17, 17, NULL, '2021-04-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (15, 'Den birindwa', '', 'dan@gmail.com', '124561731.jpg', '', '', 'Ma vie est christ', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 11, 11, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (16, 'Deny tchituka', '', 'dany@gmail.com', '1841044671.jpg', '', '', 'Maitre d\'école', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 11, 11, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (17, 'kumba jean-prierre', '', 'kumba@gmail.com', '968548502.jpg', '', '', 'Etudiant chef de promotion', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 6, 6, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (18, 'pionde bin sefu', '', 'pionde@gmail.com', '277378976.jpg', '', '', 'Chambion', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (19, 'sifa abeli deborah', '', 'sifaabedi@gmail.com', '1882836577.jpg', '', '', 'meckup', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (20, 'rachel mputu', '', 'rachel@gmail.com', '1524677507.jpg', '', '', 'Développeuse entrepreneur ', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 10, 10, NULL, '2021-03-02', '2021-04-02');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (21, 'salomon mputu', NULL, 'salomon12@gmail.com', 'icone-user.png', NULL, NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (22, 'salomon escadel', '', 'salomon@gmail.com', '1798753487.jpg', '', '', 'Développeur chez un jour nouveau!', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', '', '', '', 1, 19, 19, NULL, '2021-04-05', '2021-05-05');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idPays`, `idv`, `idp`, `cv`, `debit_event`, `fin_event`) VALUES (23, 'cubaka mulume', 'alpha', 'alpha@gmail.com', '783341919.jpg', '+243810409151', 'quartier katoyi avenue konde', 'Informaticien sans frontière ', '1993-04-06', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, 19, 19, '279899743.pdf', NULL, NULL);


#
# TABLE STRUCTURE FOR: video
#

DROP TABLE IF EXISTS `video`;

CREATE TABLE `video` (
  `idv` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) DEFAULT NULL,
  `description` text,
  `lien` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idv`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `video` (`idv`, `nom`, `description`, `lien`, `created_at`, `image`) VALUES (1, 'Comment utiliser l\'application samsung ranger', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://unikin.org', '2021-01-24 14:28:55', '144720142.jpg');
INSERT INTO `video` (`idv`, `nom`, `description`, `lien`, `created_at`, `image`) VALUES (2, 'suivez la video kozua ', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://ulpgl.org', '2021-01-24 14:31:25', '752237371.jpg');
INSERT INTO `video` (`idv`, `nom`, `description`, `lien`, `created_at`, `image`) VALUES (4, 'communiqué', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://unikin.org', '2021-01-24 14:33:03', '226092828.jpg');
INSERT INTO `video` (`idv`, `nom`, `description`, `lien`, `created_at`, `image`) VALUES (6, 'le plus beau de la gestion', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'https://www.youtube.com/watch?v=no35TFWg0CU&list=PL0TnHYy48T2zwGWVTcRFAbKpxCM-66F4p&index=3', '2021-01-24 14:34:27', '743131560.jpg');
INSERT INTO `video` (`idv`, `nom`, `description`, `lien`, `created_at`, `image`) VALUES (10, 'Notre prestation', 'Notre présentation n\'a pas été tout à fait lol !', 'https://www.youtube.com/watch?v=no35TFWg0CU&list=PL0TnHYy48T2zwGWVTcRFAbKpxCM-66F4p&index=3', '2021-03-22 12:32:27', '505713954.jpg');


#
# TABLE STRUCTURE FOR: ville
#

DROP TABLE IF EXISTS `ville`;

CREATE TABLE `ville` (
  `idv` int(11) NOT NULL AUTO_INCREMENT,
  `nomv` varchar(300) DEFAULT NULL,
  `idp` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idv`),
  KEY `idp` (`idp`),
  CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `province` (`idp`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (1, 'Buta', 1, '2020-07-14 17:11:54');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (2, 'Mbandaka', 2, '2020-07-14 17:14:00');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (3, 'Lubumbashi', 3, '2020-07-14 17:14:17');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (4, 'Kamina', 4, '2020-07-14 17:14:37');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (5, 'Isiro', 5, '2020-07-14 17:15:00');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (6, 'Bunia', 6, '2020-07-14 17:15:20');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (7, 'Luebo', 7, '2020-07-14 17:15:37');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (8, 'Kananga', 8, '2020-07-14 17:15:58');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (9, 'Mbuji-Mayi', 9, '2020-07-14 17:16:29');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (10, 'Kinshasa', 10, '2020-07-14 17:16:52');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (11, 'Matadi', 11, '2020-07-14 17:17:30');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (12, 'Kenge', 12, '2020-07-14 17:17:50');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (13, 'Bandundu', 13, '2020-07-14 17:20:12');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (14, 'Kabinda', 14, '2020-07-14 17:20:32');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (15, 'Kolwezi', 15, '2020-07-14 17:20:51');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (16, 'Inongo', 16, '2020-07-14 17:21:23');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (17, 'Kindu', 17, '2020-07-14 17:21:41');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (18, 'Lisala', 18, '2020-07-14 17:22:07');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (19, 'Goma', 19, '2020-07-14 17:22:32');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (20, 'Gbadolite', 20, '2020-07-14 17:22:50');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (21, 'Lusambo', 21, '2020-07-14 17:23:07');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (22, 'Bukavu', 22, '2020-07-14 17:23:23');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (23, 'Gemena', 23, '2020-07-14 17:23:42');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (24, 'Kalemie', 24, '2020-07-14 17:24:02');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (25, 'Kisangani', 25, '2020-07-14 17:24:22');
INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES (26, 'Boende', 26, '2020-07-14 17:24:45');


#
# TABLE STRUCTURE FOR: vues
#

DROP TABLE IF EXISTS `vues`;

CREATE TABLE `vues` (
  `idv` int(11) NOT NULL AUTO_INCREMENT,
  `idart` int(11) DEFAULT NULL,
  `machine` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idv`),
  KEY `idart` (`idart`),
  CONSTRAINT `vues_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (1, 16, '192.168.12.5', '2021-01-28 18:28:21');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (2, 3, '169.159.215.21', '2021-02-07 10:04:18');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (3, 41, '169.159.215.21', '2021-02-07 10:06:29');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (4, 15, '169.159.215.21', '2021-02-07 10:10:25');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (5, NULL, '169.159.215.21', '2021-02-07 10:20:34');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (6, 12, '169.159.215.21', '2021-02-07 10:21:19');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (7, 14, '169.159.215.21', '2021-02-07 12:28:42');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (8, 5, '169.159.215.21', '2021-02-07 14:13:47');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (9, 24, '169.159.215.21', '2021-02-07 14:24:59');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (10, 27, '169.159.215.21', '2021-02-07 15:07:42');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (11, 39, '169.159.215.21', '2021-02-17 16:53:21');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (12, 42, '169.159.215.21', '2021-03-05 14:18:52');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (13, 38, '169.159.215.21', '2021-03-09 18:38:26');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (14, 16, '169.159.215.21', '2021-03-13 13:19:04');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (15, 4, '169.159.215.21', '2021-03-13 13:50:38');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (16, 6, '169.159.215.21', '2021-03-13 14:24:23');
INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES (17, 19, '169.159.215.21', '2021-03-13 14:28:59');


