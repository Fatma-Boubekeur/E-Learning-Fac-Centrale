-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 03 juil. 2018 à 19:27
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_administrateur` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id_user` int(100) NOT NULL,
  `id_formation` int(100) NOT NULL,
  `id_niveau_formation` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`id_user`, `id_formation`, `id_niveau_formation`) VALUES
(360, 1, 19),
(376, 1, 19);

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE `chapitre` (
  `id_chapitre` int(100) NOT NULL,
  `nom_chapitre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `id_formateur` int(100) NOT NULL,
  `id_module` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapitre`
--

INSERT INTO `chapitre` (`id_chapitre`, `nom_chapitre`, `description`, `id_formateur`, `id_module`) VALUES
(1, 'CHAPITRE 1  INTÉGRITÉ DES BASES DE DONNÉES', 'Ce  chapitre  illustre  les  systèmes  de  gestion  pour  l’assurance  de  l’intégrité  de \r\nl’information. Notamment, les contraintes d’intégrité, les déclencheurs et les vues .', 372, 17),
(4, 'CHAPITRE 1  INTÉGRITÉ DES BASES DE DONNÉES', 'Ce  chapitre  illustre  les  systèmes  de  gestion  pour  l’assurance  de  l’intégrité  de \r\nl’information. Notamment, les contraintes d’intégrité, les déclencheurs et les vues.', 372, 77);

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

CREATE TABLE `enseigner` (
  `id_module` int(100) NOT NULL,
  `id_formateur` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseigner`
--

INSERT INTO `enseigner` (`id_module`, `id_formateur`) VALUES
(77, 372);

-- --------------------------------------------------------

--
-- Structure de la table `faire_quiz`
--

CREATE TABLE `faire_quiz` (
  `id_quiz` int(100) NOT NULL,
  `id_apprenant` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE `formateur` (
  `id_user` int(100) NOT NULL,
  `grade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`id_user`, `grade`) VALUES
(372, 'MCB');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(100) NOT NULL,
  `nom_formation` varchar(100) NOT NULL,
  `objet` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `nom_formation`, `objet`) VALUES
(1, 'Math et informatique', 'Cette formation a pour objectif de donner aux étudiants de solides bases en mathématiques et en informatique. elle offre une formation bi-disciplinaire qui intègre mathématiques appliquées et informatique.');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` int(100) NOT NULL,
  `id_niveau_formation` int(100) NOT NULL,
  `nom` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_module`, `id_niveau_formation`, `nom`) VALUES
(9, 14, 'Architecture des ordinateurs'),
(10, 14, 'Algorithmique et structures de  données '),
(11, 14, 'Logique mathématique '),
(12, 14, 'Programmation orienté objet '),
(13, 14, 'Systèmes d’information '),
(14, 14, 'Théorie des langages '),
(16, 14, 'Anglaise 2 '),
(17, 14, 'Bases de données'),
(18, 14, 'Systèmes d’exploitation 1 '),
(19, 14, 'Génie logiciel 1 '),
(20, 14, 'Théorie des graphes '),
(21, 14, 'Réseaux de communication '),
(22, 14, 'Développement d’applications  Web '),
(23, 14, 'Aspects juridiques et  économiques des logiciels '),
(24, 14, 'Langue anglaise 3 '),
(25, 13, 'Algébre 3'),
(26, 13, 'Analyse 3'),
(27, 13, 'Introduction à la topologie'),
(28, 13, 'Analyse numérique 1'),
(29, 13, 'Logique mathématique'),
(30, 13, 'Outils de programmation 2'),
(31, 13, 'Histoire des mathématiques'),
(32, 13, 'Analyse 4'),
(33, 13, 'Analyse 4'),
(34, 13, 'Analyse complexe'),
(35, 13, 'Analyse numérique 2'),
(36, 13, 'Probabilité'),
(37, 13, 'Géométrie'),
(38, 13, 'Application des mathématique aux autre science'),
(39, 12, 'Analyse 1'),
(40, 12, 'Algébre 1'),
(43, 12, 'Initiation à l\'algorithmique'),
(44, 12, 'Terminologie scientifique et expression ecrite et orale'),
(45, 12, 'Tp bureatique'),
(46, 12, 'Codage et représentation de l\'information\r\n'),
(47, 12, 'Électronique et composants des systèmes'),
(48, 12, 'anglais 1'),
(49, 12, 'Analyse 2'),
(50, 12, 'Algèbre 2'),
(51, 12, 'Introduction aux probabilités et statistique descriptive '),
(52, 12, 'Programmation et structure de données  '),
(53, 12, 'structure de données '),
(54, 12, 'Technique de l\'information et de la communication '),
(55, 12, 'Introduction à la programmation orienté objets '),
(56, 12, 'physique 2'),
(57, 12, 'Histoire des sciences '),
(58, 15, 'Introduction à l\'analyse Hibertienne'),
(59, 15, 'Mesure et intégration'),
(60, 15, 'Équations Différentielles  '),
(61, 15, 'Équation de la physique mathématique '),
(62, 15, 'Optimisation sans contraintes'),
(63, 15, 'Initiation à la didactique des mathématique '),
(64, 18, 'Système d’exploitation 2 '),
(65, 18, 'Compilation '),
(66, 18, 'Programmation logique '),
(67, 18, 'Génie Logiciel 2'),
(68, 18, 'IHM '),
(69, 18, 'Paradigmes de \r\nprogrammation '),
(70, 18, 'Intelligence artificielle '),
(71, 18, 'Anglais '),
(72, 19, 'Outil de modélisation des SI'),
(73, 19, 'Organisation et Management'),
(74, 19, 'Systèmes d’aide à la décision'),
(75, 19, 'Analyse et conception orienté  Objet'),
(76, 19, 'Gestion de projet Logiciel'),
(77, 19, 'BD Avancées'),
(79, 19, 'Programmation  avancée  pour  le  web'),
(80, 19, 'Anglais 4'),
(81, 19, 'Test et qualité de logiciel'),
(82, 19, 'Recherche d’information'),
(83, 19, 'Sécurité des SI'),
(84, 19, 'Rédaction scientifique'),
(85, 19, 'Interaction Homme-Machine');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_question` int(100) NOT NULL,
  `contenue_question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` int(100) NOT NULL,
  `id_quiz` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_question`, `contenue_question`, `note`, `id_quiz`) VALUES
(1, 'Les contraintes \"unique\" et \"primaryKey\" jouent le même rôle ?', 3, 1),
(2, 'Que veut dire l\'acronyme ACID associé aux transactions ?', 3, 2),
(3, 'les contraintes \"unique\" et \"primaryKey\" jouent le même rôle ?', 3, 3),
(4, 'Que veut dire l\'acronyme ACID associé aux transactions ?', 3, 4),
(5, 'Que veut dire l\'acronyme ACID associé aux transactions ?', 3, 5),
(6, 'A quoi sert une contrainte d\'intégrité ?', 3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(100) NOT NULL,
  `nom_quiz` varchar(100) NOT NULL,
  `id_module` int(100) NOT NULL,
  `id_chapitre` int(100) NOT NULL,
  `id_formateur` int(100) NOT NULL,
  `type_quiz` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `nom_quiz`, `id_module`, `id_chapitre`, `id_formateur`, `type_quiz`) VALUES
(1, 'Quiz  1 :  chapitre 1 intégrité des bdd', 17, 1, 372, 'Vrai ou Faux'),
(2, 'Quiz  2 :  chapitre 1 intégrité des bdd', 17, 1, 372, 'Choix multiple'),
(3, 'Quiz  1 :  chapitre 1 intégrité des bdd', 17, 1, 372, 'Vrai ou Faux'),
(4, 'Quiz  2 :  chapitre 1 intégrité des bdd', 17, 1, 372, 'Choix multiple'),
(5, 'Quiz  2 :  chapitre 1 intégrité des bdd', 77, 4, 372, 'Choix multiple');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id_reponses` int(100) NOT NULL,
  `reponse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` tinyint(2) NOT NULL DEFAULT '0',
  `id_question` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id_reponses`, `reponse`, `correct`, `id_question`) VALUES
(1, 'Vrai', 1, 1),
(2, 'Faux', 0, 1),
(3, 'Actif, Combatif, Intrépide, Déterminé', 0, 2),
(4, 'Atomicity, Consistency, Isolation, Durability', 1, 2),
(5, 'Anatole Conrad  et Isidore Dubay, les inventeurs de la notion de transaction', 0, 2),
(6, 'Vrai', 1, 3),
(7, 'Faux', 0, 3),
(8, 'Actif, Combatif, Intrépide, Déterminé', 0, 4),
(9, 'Atomicity, Consistency, Isolation, Durability', 1, 4),
(10, 'Anatole Conrad  et Isidore Dubay, les inventeurs de la notion de transaction', 0, 4),
(11, 'Actif, Combatif, Intrépide, Déterminé', 0, 5),
(12, 'Atomicity, Consistency, Isolation, Durability', 1, 5),
(13, 'Anatole Conrad  et Isidore Dubay, les inventeurs de la notion de transaction', 0, 5),
(14, 'à garder les bdd cohérentes', 1, 6),
(15, 'à  intégrer des applications existantes', 0, 6),
(16, 'à la création du shéma relationnel', 0, 6);

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

CREATE TABLE `ressource` (
  `id_ressource` int(11) NOT NULL,
  `nom_ressource` varchar(100) NOT NULL,
  `contenue` varchar(100) NOT NULL,
  `id_chapitre` int(11) NOT NULL,
  `id_formateur` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`id_ressource`, `nom_ressource`, `contenue`, `id_chapitre`, `id_formateur`) VALUES
(1, 'Cours chapitre 1', 'BDA-Polycopié__ DrAoudia_chapitre 1.pdf', 1, 372),
(4, 'Cours chapitre 1', 'BDA-Polycopié__ DrAoudia_chapitre 1.pdf', 4, 372);

-- --------------------------------------------------------

--
-- Structure de la table `table_niveau`
--

CREATE TABLE `table_niveau` (
  `id_niveau` int(100) NOT NULL,
  `niveau_etude` varchar(200) NOT NULL,
  `id_formation` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_niveau`
--

INSERT INTO `table_niveau` (`id_niveau`, `niveau_etude`, `id_formation`) VALUES
(12, 'L1  mathématique et informatique', 1),
(13, 'L2 mathématique', 1),
(14, 'L2 informatique', 1),
(15, 'L3 mathématique', 1),
(18, 'L3 spécialisé SI', 1),
(19, 'L3 spécialisé  ISIL', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(100) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mot_de_passe` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `profile` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `numero_tel` varchar(60) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `username`, `mot_de_passe`, `nom`, `prenom`, `email`, `profile`, `image`, `numero_tel`) VALUES
(353, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Boubekeur', 'Fatma', 'fatma_admin@gmail.com', 'Administrateur', 'images.png', '024054697'),
(360, 'Ameur_nadra1234', '25d55ad283aa400af464c76d713c07ad', 'Ameur', 'Nadra', 'ameur.nadra@yahoo.com', 'Apprenant', 'apprenant.PNG', ''),
(372, 'Aoudia_formateur1235', 'f872abbb2b456d3063b931ece6d19ced', 'Aiouez', 'Chafika', 'cha_aoudia@yahoo.fr', 'Formateur', '108284-200.png', ''),
(376, 'Fatma_boubekeur1234', 'db138b700db32386178e6864ca6ab8ee', 'Boubekeur', 'Fatma', 'fatma.exempl18@gmail.com', 'Apprenant', 'apprenant.PNG', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_administrateur`),
  ADD UNIQUE KEY `id_administrateur` (`id_administrateur`);

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD KEY `id_formation` (`id_formation`) USING BTREE,
  ADD KEY `id_niveau_formation` (`id_niveau_formation`) USING BTREE;

--
-- Index pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD PRIMARY KEY (`id_chapitre`),
  ADD KEY `id_formateur` (`id_formateur`) USING BTREE,
  ADD KEY `cours_ibfk_2` (`id_module`);

--
-- Index pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD PRIMARY KEY (`id_module`,`id_formateur`),
  ADD KEY `enseigner_ibfk_1` (`id_formateur`);

--
-- Index pour la table `faire_quiz`
--
ALTER TABLE `faire_quiz`
  ADD KEY `id_apprenant` (`id_apprenant`),
  ADD KEY `id_quiz` (`id_quiz`);

--
-- Index pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`),
  ADD KEY `module_ibfk_1` (`id_niveau_formation`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_quiz` (`id_quiz`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`),
  ADD KEY `id_chapitre` (`id_chapitre`),
  ADD KEY `quiz_ibfk_3` (`id_module`),
  ADD KEY `quiz_ibfk_4` (`id_formateur`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id_reponses`),
  ADD KEY `reponses_ibfk_1` (`id_question`);

--
-- Index pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD PRIMARY KEY (`id_ressource`),
  ADD KEY `ressource_ibfk_1` (`id_chapitre`),
  ADD KEY `ressource_ibfk_2` (`id_formateur`);

--
-- Index pour la table `table_niveau`
--
ALTER TABLE `table_niveau`
  ADD PRIMARY KEY (`id_niveau`),
  ADD KEY `id_formation` (`id_formation`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chapitre`
--
ALTER TABLE `chapitre`
  MODIFY `id_chapitre` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id_reponses` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `ressource`
--
ALTER TABLE `ressource`
  MODIFY `id_ressource` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `table_niveau`
--
ALTER TABLE `table_niveau`
  MODIFY `id_niveau` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`id_administrateur`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD CONSTRAINT `apprenant_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apprenant_ibfk_2` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`),
  ADD CONSTRAINT `apprenant_ibfk_3` FOREIGN KEY (`id_niveau_formation`) REFERENCES `table_niveau` (`id_niveau`);

--
-- Contraintes pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD CONSTRAINT `chapitre_ibfk_2` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `chapitre_ibfk_3` FOREIGN KEY (`id_formateur`) REFERENCES `formateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD CONSTRAINT `enseigner_ibfk_1` FOREIGN KEY (`id_formateur`) REFERENCES `formateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enseigner_ibfk_2` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `faire_quiz`
--
ALTER TABLE `faire_quiz`
  ADD CONSTRAINT `faire_quiz_ibfk_1` FOREIGN KEY (`id_apprenant`) REFERENCES `apprenant` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faire_quiz_ibfk_2` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_quiz`);

--
-- Contraintes pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD CONSTRAINT `formateur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`id_niveau_formation`) REFERENCES `table_niveau` (`id_niveau`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_quiz`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_2` FOREIGN KEY (`id_chapitre`) REFERENCES `chapitre` (`id_chapitre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quiz_ibfk_3` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quiz_ibfk_4` FOREIGN KEY (`id_formateur`) REFERENCES `formateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `reponses_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD CONSTRAINT `ressource_ibfk_1` FOREIGN KEY (`id_chapitre`) REFERENCES `chapitre` (`id_chapitre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ressource_ibfk_2` FOREIGN KEY (`id_formateur`) REFERENCES `formateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `table_niveau`
--
ALTER TABLE `table_niveau`
  ADD CONSTRAINT `table_niveau_ibfk_1` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
