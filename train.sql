SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `trains` (
  `Id_train` int (6) NOT NULL,
  `heure_depart` datetime NOT NULL,
  `heure_arriver` datetime NOT NULL);

CREATE TABLE `trajets` (
  `gare_depart` varchar (30) NOT NULL,
  `gare_arriver` varchar(30) NOT NULL,    
  `durée de trajet` int (6) NOT NULL,
  `Id_train` int (6) NOT NULL,
  `Id_gare` int (6) NOT NULL);

CREATE TABLE `gares` (
  `Id_gare` int (6) NOT NULL,
  `gare` varchar (30) NOT NULL);

ALTER TABLE `trains` ADD PRIMARY KEY (`Id_train`);
ALTER TABLE `gares` ADD PRIMARY KEY (`Id_gare`);

ALTER TABLE `trajets` ADD FOREIGN KEY (`Id_train`) REFERENCES `trains`(`Id_train`);
ALTER TABLE `trajets` ADD FOREIGN KEY (`Id_gare`) REFERENCES `gares`(`Id_gare`);


