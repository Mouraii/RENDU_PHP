-- Database Creation
CREATE DATABASE IF NOT EXISTS `Projets`;
USE `Projets`;
DROP TABLE users;
CREATE TABLE IF NOT EXISTS `projets` (
    `projet_id` INT AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `competence` VARCHAR(255) NOT NULL,
    `duree` VARCHAR(50) NOT NULL,
    `description` TEXT NOT NULL,
    `dates` VARCHAR(100) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`projet_id`)
);
CREATE TABLE IF NOT EXISTS `users` (
    `user_id` INT AUTO_INCREMENT,
    `nom` VARCHAR(255),
    `prenom` VARCHAR(255) NOT NULL,
    `nom_utilisateur` VARCHAR(255) NOT NULL,
    `mdp` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`user_id`)
);
-- Removing Old Data
DELETE FROM `projets`;
-- Data Insertion
INSERT INTO `projets` (`name`, `competence`, `duree`, `description`, `dates`,`image`) VALUES 

('Animalerie', 'Création de site web', '20h', "Ce projet consistait en la création d`un site web d`une animalerie indépendente afin d`améliorer leur visibilité et de leur donner une plateforme de vente de produits ce qui à étendu leur surface de vente.", '6 janvier 2016-14 Février 2016', 'https://images01.nicepagecdn.com/page/54/93/html-template-preview-54937.webp'),
("Securistation d`un site aux Etats Unis", "Securistation de site web", "45h", "Au cours de mes expériences à l`étranger, j`ai eu l`occasion de travailler sur un projet assez particulier, où j`ai contribué au développement et à la sécurisation d`une plateforme de revente de chaussures en ligne très populaire. Ce projet impliquait de travailler avec une équipe internationale pour mettre en place des fonctionnalités de gestion des stocks en temps réel, de traitement des paiements et de suivi des commandes. Mon rôle principal était de garantir la sécurité du site, en mettant en place des protocoles de chiffrement avancés, en protégeant contre les cyberattaques telles que les injections SQL et les attaques XSS, et en renforçant les mécanismes d`authentification pour prévenir toute fuite de données sensibles. De plus, j`ai collaboré avec les équipes backend et frontend pour optimiser la performance du site, tout en assurant une expérience utilisateur fluide et sécurisée, essentielle pour le succès de la plateforme dans un marché hautement concurrentiel.", "14 Juillet 2018 - 20 Aout 2018","https://uxdt.nic.in/wp-content/uploads/2020/02/loginform3_p-3.png"),
("Stylisation d`un site Anglais", "Amélioration de site web", "12h", "J`ai amélioré la qualité visuelle du site en optimisant les transitions des slides et les boutons interactifs pour rendre l`expérience utilisateur plus fluide. J`ai ajouté des animations subtiles aux slides, comme des fondus et des effets de défilement, pour rendre leur changement plus naturel et dynamique. Concernant les boutons, j`ai ajusté leur taille, forme et couleur pour les rendre plus visibles et intuitifs, tout en intégrant des effets de survol pour offrir un retour visuel immédiat à l`utilisateur. Enfin, j`ai optimisé la réactivité du site pour garantir une expérience fluide sur tous les appareils, tout en veillant à la rapidité de chargement en réduisant le poids des images et animations. Ces améliorations ont renforcé l`esthétique du site tout en rendant la navigation plus agréable et interactive.", "22 Septembre 2020 - 31 Octobre 2020", "images/Capture d'écran 2024-11-20 170119.png"),
("Site Immobilier", "Création de site web", "17h", "Au cours de mes expériences à l`étranger, j`ai eu l`opportunité de participer à un projet de développement et de sécurisation d`un site de vente immobilière en ligne. Travaillant avec une équipe internationale, j`étais responsable de l`intégration de mesures de sécurité pour protéger les données sensibles des utilisateurs et garantir la fiabilité des transactions. J`ai mis en place des solutions de chiffrement des informations personnelles, des protocoles de sécurité pour prévenir les attaques courantes, et optimisé les performances du site pour offrir une navigation fluide. Mon rôle a été crucial dans la création d`un environnement sécurisé et performant, permettant aux utilisateurs d`acheter, vendre et consulter des biens immobiliers en toute confiance.", "3 Décembre 2022 - 12 Janvier 2023", "https://images-wixmp-530a50041672c69d335ba4cf.wixmp.com/templates/image/0221720df7030f436831645e3e4e2f6a48aae2a68ac54981dd6a2e5fc744a76e.jpg"),
("Sécurisation d`un site post-attaque", "Sécurisation de site web", "26h", "Lors de mes expériences à l`étranger, j`ai eu l`opportunité de participer au développement et à la sécurisation d`une plateforme de réservation en ligne pour des services de transport. Ce projet m`a permis de collaborer avec une équipe internationale, où nous avons travaillé sur des fonctionnalités avancées telles que la gestion en temps réel des réservations, l`intégration de systèmes de géolocalisation, et le suivi dynamique des trajets. Mon rôle principal était de m`assurer que la plateforme soit sécurisée contre les menaces externes en appliquant des techniques de chiffrement des données sensibles, en implémentant des mécanismes de prévention des attaques par déni de service (DDoS) et en mettant en place des vérifications d`authentification rigoureuses. Parallèlement, j`ai collaboré avec les équipes backend et frontend pour optimiser les performances du site et garantir une expérience utilisateur fluide, même lors des pics de trafic. Grâce à cette approche, nous avons pu offrir une solution fiable et sécurisée, contribuant à la croissance rapide de la plateforme dans un secteur hautement compétitif.", "7 Novembre 2023 - 24 Décembre 2023", "images/Capture d'écran 2024-11-20 190423.png"),
("Service de lavage auto", "Sécurisation de site web", "21h", "J`ai optimisé l`esthétique et l`expérience utilisateur en travaillant sur les transitions des slides et les boutons interactifs. Les slides bénéficient désormais d`animations subtiles, comme des fondus élégants et des effets de défilement fluides, offrant une présentation visuelle plus naturelle et dynamique. Les boutons ont été redessinés pour une meilleure accessibilité : une taille ajustée, des couleurs plus vives et un design épuré. Ces ajustements augmentent non seulement l`attrait visuel du site, mais aussi son efficacité, rendant chaque interaction plus agréable et intuitive.", "28 Mars 2024 - 2 Mai 2024", "images/Capture d’écran_20-11-2024_18724_.jpeg");

INSERT INTO `users` (`nom`,`prenom`,`nom_utilisateur`,`mdp`) VALUES
('Leo','Cross','Leo_login','Cross_mdp'),
('andré','Dufon','andré_login','Dufron_mdp'),
('Leopold','huet','Leopold_login','Huet_mdp');