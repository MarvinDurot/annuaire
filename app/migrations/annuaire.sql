-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 18 Octobre 2015 à 11:52
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `annuaire`
--

CREATE TABLE IF NOT EXISTS `annuaire` (
  `login` varchar(8) NOT NULL DEFAULT '',
  `nom` varchar(32) DEFAULT NULL,
  `prenom` varchar(32) DEFAULT NULL,
  `commentaire` text,
  `bureau` varchar(16) DEFAULT NULL,
  `telephone` varchar(16) DEFAULT NULL,
  `courriel` varchar(128) DEFAULT NULL,
  `photo` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annuaire`
--

INSERT INTO `annuaire` (`login`, `nom`, `prenom`, `commentaire`, `bureau`, `telephone`, `courriel`, `photo`) VALUES
('ageronb', 'AGERON', 'Blandine', 'Responsable LP Logistique', '822', 'B 006', 'Blandine.Ageron@iut-valence.fr', ''),
('amblamar', 'AMBLARD', 'Marion', 'INFO', '865', 'C 105', 'Marion.Amblard@iut-valence.fr', ''),
('anselinv', 'ANSELIN', 'Véronique', 'GEA', '823', 'B 015', 'Veronique.Anselin@iut-valence.fr', ''),
('arouim', 'AROUI', 'Mounir', 'GEA', '874', 'C 002', 'Mounir.Aroui@iut-valence.fr', ''),
('arshakir', 'ARSHAKIAN', 'Robik', 'Scolarité centrale', '846', 'A 109', 'Robik.Arshakian@iut-valence.fr', ''),
('aznarce', 'AZNAR', 'Céline', 'Secrétariat GEA', '819', 'A 111', 'Celine.Aznar@iut-valence.fr', ''),
('baillesp', 'BAILLEST', 'Pascale', 'GEA, Directrice des Études 2èmes années', '817', 'A 110', 'Pascale.Baillest@iut-valence.fr', ''),
('barbotg', 'BARBOT', 'Gildas', 'TC', '867', 'D 012', 'Gildas.Barbot@iut-valence.fr', ''),
('beneficc', 'BENEFICE', 'Claire', 'IAE, Responsable des Relations Internationales', '855', 'E 006', 'Claire.Benefice@iut-valence.fr', ''),
('benyellc', 'BEN YELLES', 'Choukri Bey', 'GEA, Chargé de mission', '809', 'D 003', 'Choukri-Bey.Ben-Yelles@iut-valence.fr', ''),
('bergeron', 'BERGERON', 'Karine', 'INFO', '828', 'B 120', 'Karine.Bergeron@iut-valence.fr', ''),
('bernardi', 'BERNARDI', 'Dominique', 'CRI / Maintenance éléctronique', '852/853', 'C 109/C 111', 'Dominique.Bernardi@iut-valence.fr', ''),
('berthozm', 'BERTHOZ', 'Marion', 'Gestion des charges d''enseignement (HC)', '860', 'A 116', 'Marion.Berthoz@iut-valence.fr', ''),
('bessobea', 'BESSON', 'Béatrice', 'Secrétariat TC', '830', 'A 114', 'Beatrice.Besson@iut-valence.fr', ''),
('bonnefo1', 'BONNEFOND', 'Céline', 'GEA', '885', 'D 011', 'Celine.Bonnefond@iut-valence.fr', ''),
('bossanm', 'BOSSAN', 'Marie-Pierre', 'TC, Responsable des Relations Internationales / Responsable L3 Management  et Gestion des Entreprises', '855', 'E 006', 'Marie-Pierre.Bossan@iut-valence.fr', ''),
('boulled', 'BOULLE', 'Didier', 'INFO, Directeur des Études 1ères années', '818', 'B 115', 'Didier.Boulle@iut-valence.fr', ''),
('bregiers', 'BREGIER', 'Sandrine', 'Responsable Scolarité centrale', '806', 'A 109', 'Sandrine.Bregier@iut-valence.fr', ''),
('brunetb', 'BRUNET', 'Bernard', 'TC, Directeur des Études 1ères années / Responsable des stages TC1', '824', 'A 113', 'Bernard.Brunet@iut-valence.fr', ''),
('cascalej', 'CASCALES', 'Jean-Pierre', 'TC', '874', 'C 002', 'Jean-Pierre.Cascales@iut-valence.fr', ''),
('ceyssonc', 'CEYSSON', 'Christelle', 'Secrétariat IAE, M1 et M2 Finance', '870', 'E 011', 'Christelle.Ceysson@iut-valence.fr', ''),
('charenss', 'CHARENSOL', 'Sylvain', 'INFO', '828', 'B 120', 'Sylvain.Charensol@iut-valence.fr', ''),
('cogneuif', 'COGNE-UILLIER', 'Françoise', 'Secrétariat Relations Internationales', '861', 'E 005', 'Francoise.Cogne-Uillier@iut-valence.fr', ''),
('constabl', 'CONSTANT', 'Blandine', 'INFO', '836', 'B 114', 'Blandine.Constant@iut-valence.fr', ''),
('cornuch', 'CORNU', 'Christelle', 'GEA', '875', 'D 001', 'Christelle.Cornu@iut-valence.fr', ''),
('cretonl', 'CRETON', 'Laurence', 'R&T, Responsable Bibliothèque', '865', 'C 105', 'Laurence.Creton@iut-valence.fr', ''),
('cvarin', 'VARIN', 'Christelle', 'TC, Responsable Année Spéciale', '877', 'C 003', 'Christelle.Varin@iut-valence.fr', ''),
('dchechat', 'CHECHAT', 'David', 'CRI', '837', 'B 109', 'david.chechat@iut-valence.fr', ''),
('deguilha', 'DEGUILHEM', 'Anne', 'Pôle Licences et IAE, Responsable Administratif', '810/873', 'B 008 / E 012', 'anne.deguilhem@iut-valence.fr', ''),
('delabalg', 'DELABALLE', 'Grégory', 'Relations entreprises. Secrétariat LP Métiers de la Compta / Club passerelle', '813', 'B 007 / D 104', 'Gregory.Delaballe@iut-valence.fr', ''),
('desauzag', 'DE SAUZA', 'Guillaume', 'INFO', '828', 'B 120', 'Guillaume.Desauza@iut-valence.fr', ''),
('dexpertm', 'DEXPERT', 'Magali', 'TC', '859', 'A 205', 'Magali.Dexpert@iut-valence.fr', ''),
('didellol', 'CARSANA', 'Laurence', 'IAE - Responsable M1 & M2 Com-Marketing', '876', 'E 009', 'Laurence.Carsana@iut-valence.fr', ''),
('disle', 'DISLE', 'Charlotte', 'IAE', '878', 'E 007', 'Charlotte.Disle@iut-valence.fr', ''),
('dremonta', 'DREMONT', 'Arnaud', 'Service Interne - Logistique', '864', 'Atelier', 'Arnaud.Dremont@iut-valence.fr', ''),
('drexlera', 'DREXLER', 'Anouk', 'GEA, Responsable Projets tuteurés / Responsable LP métiers de la comptabilité', '897', 'D 002', 'Anouk.Drexler@iut-valence.fr', ''),
('droito', 'DROIT', 'Olivier', 'TC, Chargé de mission Entreprenariat', '867', 'D 012', 'Olivier.Droit@iut-valence.fr', ''),
('duccinic', 'DUCCINI', 'Christian', 'R&T, Directeur des Études 1ères années / Responsable LP CASIR', '862', 'C 106', 'Christian.Duccini@iut-valence.fr', ''),
('duflota', 'DUFLOT', 'Annie', 'GEA', '836', 'B 114', 'Annie.Duflot@iut-valence.fr', ''),
('durandmi', 'DURAND', 'Michelle', 'Secrétariat de Direction - GRH IATOS, enseignants', '802', 'A 121', 'Michelle.Durand@iut-valence.fr', ''),
('elhadjs', 'EL-HADJ', 'Sébastien', 'LOV ENTREPRENDRE', '811', 'A 211', 'Sebastien.El-hadj@iut-valence.fr', ''),
('fortins', 'FORTIN', 'Sophie', 'R&T', '865', 'C 105', 'Sophie.Fortin@iut-valence.fr', ''),
('fougairc', 'FOUGAIROLLE', 'Carole', 'TC, Responsable des stages TC2', '833', 'B 009', 'Carole.Fougairolle@iut-valence.fr', ''),
('fourtyn', 'FOURTY', 'Nicolas', 'R&T, Directeur des Études 2èmes années et projets 2èmes années', '863', 'C 103', 'Nicolas.Fourty@iut-valence.fr', ''),
('galdonc', 'GALDON', 'Christine', 'Secrétariat R&T+ LP ASUR', '850', 'C 108', 'Christine.Galdon@iut-valence.fr', ''),
('galdons', 'GALDON', 'Serge', 'GEA, Directeur des Études 1ères années', '817', 'A 110', 'Serge.Galdon@iut-valence.fr', ''),
('geindres', 'GEINDRE', 'Sébastien', 'Directeur site IAE Valence / Responsable M1 Finance', '871', 'E 008', 'sebastien.geindre@iut-valence.fr', ''),
('genoncad', 'GENON-CATALOT', 'Denis', 'R&T, Responsable LP ASUR', '863', 'C 103', 'Denis.Genon-Catalot@iut-valence.fr', ''),
('genthial', 'GENTHIAL', 'Damien', 'INFO, Responsable CRI / Directeur des Études 2èmes années', '812', 'B 108', 'Damien.Genthial@iut-valence.fr', ''),
('giacomon', 'GIACOMONI', 'Jessica', 'TC', '825', 'A 017', 'Jessica.Giacomoni@iut-valence.fr', ''),
('giordank', 'GIORDANO', 'Karine', 'Secrétariat INFO + LP CASIR', '840', 'B 112', 'Karine.Giordano@iut-valence.fr', ''),
('goryb', 'GORY', 'Béatrice', 'Secrétariat GEA', '820', 'A 111', 'Beatrice.Gory@iut-valence.fr', ''),
('gouteroc', 'GOUTERON', 'Caroline', 'Secrétariat DU ACP, LP ABF, LP Logistique, LP PME-PMI (Alternance)', '815', 'B 005', 'Caroline.Gouteron@iut-valence.fr', ''),
('granoulf', 'GRANOULHAC', 'Françoise', 'GEA', '825', 'A 017', 'Francoise.Granoulhac@iut-valence.fr', ''),
('guicharl', 'GUICHARD', 'Laurence', 'Accueil', '800', 'A 002', 'Laurence.Guichard@iut-valence.fr', ''),
('jarniass', 'JARNIAS', 'Sylvie', 'GEA, Responsable LP PME-MPI', '832', 'A 212', 'Sylvie.Jarnias@iut-valence.fr', ''),
('jauffrev', 'JAUFFRET', 'Violet', 'GEA', '825', 'A 017', 'Violet.Jauffret@iut-valence.fr', ''),
('jean', 'JEAN', 'Sebastien', 'INFO, Chef de Département', '841', 'B 113', 'Sebastien.Jean@iut-valence.fr', ''),
('jolyc', 'JOLY', 'Catherine', 'Scolarité centrale. Pilotage. Secrétariat LP Suze-la-Rousse', '847', 'A109', 'Catherine.Joly@iut-valence.fr', ''),
('jonvall', 'JONVAL', 'Laurette', 'Accueil', '800', 'A 002', 'Laurette.Jonval@iut-valence.fr', ''),
('jpjamont', 'JAMONT', 'Jean-Paul', 'R&T, Chef de Département', '851', 'C 107', 'Jean-Paul.Jamont@iut-valence.fr', ''),
('jubanj', 'JUBAN', 'Jean-Yves', 'GEA, Chargé de mission Développement durable', '885', 'D 011', 'Jean-Yves.Juban@iut-valence.fr', ''),
('junekf', 'JUNEK', 'Françoise', 'Communication', '869', 'A 004', 'Francoise.Junek@iut-valence.fr', ''),
('lagrezea', 'LAGREZE', 'André', 'INFO', '835', 'B 119', 'Andre.Lagreze@iut-valence.fr', ''),
('lievinro', 'LIEVIN', 'Romain', 'R&T, Responsable des stages', '862', 'C 106', 'Romain.Lievin@iut-valence.fr', ''),
('lorrainn', 'LORRAIN', 'Nathalie', 'TC', '833', 'B 009', 'Nathalie.Lorrain@iut-valence.fr', ''),
('luccia', 'LUCCI', 'Alain', 'INFO', '834', 'B 111', 'Alain.Lucci@iut-valence.fr', ''),
('l_vallot', 'VALLOT', 'Lugdivine', 'TC, Directrice des Études 2èmes années', '826', 'A 113', 'Ludivine.Vallot@iut-valence.fr', ''),
('mabeda', 'MABED', 'Abdelmalek', 'Secrétaire général', '803', 'A 122', 'Abdelmalek.Mabed@iut-valence.fr', ''),
('madiesca', 'MADIES', 'Anne', 'GEA, Respnsable AS', '832', 'A 212', 'Anne.Madies@iut-valence.fr', ''),
('madiesp', 'MADIES', 'Philippe', 'GEA, Responsable M2 Finance', '878', 'E 007', 'Philippe.Madies@iut-valence.fr', ''),
('martinsg', 'MARTINS', 'Geneviève', 'Secrétariat TC', '829', 'A 114', 'Genevieve.Martins@iut-valence.fr', ''),
('maupetis', 'MAUPETIT', 'Séverine', 'TC', '859', 'A 205', 'Severine.Maupetit@iut-valence.fr', ''),
('merciera', 'MERCIER', 'Annabelle', 'GEA', '835', 'B 119', 'Annabelle.Mercier@iut-valence.fr', ''),
('metgec', 'METGE', 'Cécile', 'INFO, Responsable des projets', '834', 'B 111', 'Cecile.Metge@iut-valence.fr', ''),
('michefre', 'MICHEL', 'Frédéric', 'R&T', '851', 'C 107', 'Frederic.Michel@iut-valence.fr', ''),
('michelm', 'MICHEL', 'Michaël', 'Secrétariat Service Financier', '805', 'A 118', 'Mickael.Michel@iut-valence.fr', ''),
('mollierj', 'MOLLIER', 'Jean-Pierre', 'Reprographie', '808', 'A 008', 'Jean-Pierre.Mollier@iut-valence.fr', ''),
('nouyrigg', 'NOUYRIGAT', 'Geneviève', 'GEA, Responsable LP ABF', '845', 'B 016', 'Genevieve.Nouyrigat@iut-valence.fr', ''),
('objois', 'OBJOIS', 'Philippe', 'INFO, Responsable des stages', '818', 'B 115', 'Philippe.Objois@iut-valence.fr', ''),
('occellom', 'OCCELLO', 'Michel', 'INFO, Chargé des relations Inter-universitaires', '868', 'B 107', 'Michel.Occello@iut-valence.fr', ''),
('panicor', 'PANICO', 'Robert', 'TC', '845', 'B 016', 'Robert.Panico@iut-valence.fr', ''),
('pelursor', 'PELURSON', 'Roland', 'Directeur de l''IUT / Responsable LP Suze-la-Rousse', '801', 'A 120', 'Roland.Pelurson@iut-valence.fr', ''),
('peyremoe', 'PEYREMORTE', 'Eric', 'CRI', '837', 'B 109', 'eric.peyremorte@iut-valence.fr', ''),
('prott', 'ROTTELEUR', 'Pierre', 'INFO', '836', 'B 114', 'Pierre.Rotteleur@iut-valence.fr', ''),
('provillp', 'PROVILLARD', 'Patrick', 'GEA', '897', 'D 002', 'Patrick.Provillard@iut-valence.fr', ''),
('raievskc', 'RAIEVSKY', 'Clément', 'INFO', '835', 'B 119', 'Clement.Raievsky@iut-valence.fr', ''),
('renaudes', 'RENAUDET', 'Stéphane', 'CRI', '812', 'B 108', 'Stephane.Renaudet@iut-valence.fr', ''),
('reydets', 'REYDET', 'Sabine', 'TC, Chef de Département / Responsable des projets', '831', 'A 115', 'Sabine.Reydet@iut-valence.fr', ''),
('rherradn', 'M''KHANTAR', 'Nabila', 'Secrétariat IAE/IUT, L3 Gestion MGE, CF et MAE Esisar', '887', 'E 012', 'nabila.mkhantar@iut-valence.fr', ''),
('robertn', 'ROBERT', 'Nicolas', 'GEA, Responsable des stages', '832', 'A 212', 'Nicolas.Robert@iut-valence.fr', ''),
('roszaka', 'ROSZAK', 'Anne', 'Formation Continue, Alternance, contrats pro. et Pilotage', '816', 'B 007', 'Anne.Roszak@iut-valence.fr', ''),
('roumeasf', 'ROUMEAS', 'Fabienne', 'TC', '859', 'A 205', 'Fabienne.Roumeas@iut-valence.fr', ''),
('sassolad', 'SASSOLAS', 'Delphine', 'GEA', '823', 'B 015', 'Delphine.Sassolas@iut-valence.fr', ''),
('saurelm', 'SAUREL', 'Marik', 'Bibliothèque', '890', 'A 010', 'Marik.Saurel@iut-valence.fr', ''),
('skarcher', 'KARCHER', 'Stéphanie', 'TC, Responsable DU ACP', '877', 'C 003', 'Stephanie.Karcher@iut-valence.fr', ''),
('slorre', 'LORRE', 'Soukina', 'GEA, Responsable LP ABF', '875', 'D 001', 'Soukina.Lorre@iut-valence.fr', ''),
('tremouic', 'TREMOUILHAC', 'Cédric', 'GEA, Chef de Département', '821', 'A 112', 'Cedric.Tremouilhac@iut-valence.fr', ''),
('vauxc', 'VAUX', 'Cécile', 'Responsable Service Financier', '804', 'A 117', 'Cecile.Vaux@iut-valence.fr', ''),
('vermottl', 'VERMOTE', 'Laure', 'Secrétariat IAE, LP PME-PMI Formation Continue, M1 et M2 Marketing', '872', 'E 011', 'Laure.Vermote@iut-valence.fr', ''),
('vincentt', 'VINCENT', 'Thierry', 'Directeur Adjoint, Responsable L3 Compta Finance', '807', 'A 119', 'Thierry.Vincent@iut-valence.fr', ''),
('wilhelmm', 'WILHELM', 'Marie-Claire', 'IAE, MCF Marketing, Responsable MAE Esisar', '876', 'E 009', 'Marie-claire.Wilhelm@iut-valence.fr', ''),
('zouarido', 'ZOUARI', 'Dorsaf', 'GEA', '822', 'B 006', 'Dorsaf.Zouari@iut-valence.fr', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annuaire`
--
ALTER TABLE `annuaire`
  ADD PRIMARY KEY (`login`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;