-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 06 Mars 2016 à 20:49
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `idAuthor` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` bigint(20) NOT NULL,
  `idCat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `author`, `idAuthor`, `content`, `date`, `idCat`) VALUES
(7, '&quot;Le Blob fish&quot;', 'Sylvain le boss', 1, 'On trouve le blobfish &agrave; des profondeurs o&ugrave; la pression est pr&egrave;s de cent fois sup&eacute;rieure &agrave; celle de la surface. Pour y r&eacute;sister, la chair du poisson est principalement constitu&eacute;e d&rsquo;une masse g&eacute;latineuse3 dont la densit&eacute; est plus faible que celle de l&rsquo;eau, ce qui lui permet de flotter un peu au-dessus du plancher oc&eacute;anique sans avoir &agrave; d&eacute;penser sa pr&eacute;cieuse &eacute;nergie en nageant. Cette chair de faible densit&eacute; est une alternative &agrave; la vessie natatoire pr&eacute;sente chez la plupart des poissons de surface, la trop grande variation de flottabilit&eacute; selon la pression des abysses associ&eacute;e &agrave; sa faible constitution mettrait le poisson en danger. Le blobfish a donc peu de muscles, mais cela ne l&rsquo;incommode pas dans la mesure o&ugrave; il se nourrit exclusivement de neige marine provenant des couches sup&eacute;rieures de la tranche d&rsquo;eau. Il mesure tout au plus 30 cm de long2.', 1457116531, 1),
(8, '&quot;Le cochon de mer&quot;', 'Jean jaqcue', 1, 'Le genre a &eacute;t&eacute; d&eacute;crit par le naturaliste Johan Hjalmar Th&eacute;el en 1882, &agrave; l''occasion d''une exp&eacute;dition du c&eacute;l&egrave;bre HMS Challenger1.\r\n\r\nCes holothuries sont caract&eacute;ris&eacute;es par leurs 7 paires de gros pieds (&laquo; podia &raquo;), leur corps gonfl&eacute;, ros&acirc;tre p&acirc;le et presque translucide, et leurs quatre longues papilles dorsales1.\r\n\r\nL''esp&egrave;ce Scotoplanes globosa semble &ecirc;tre la plus r&eacute;pandue, trouv&eacute;e dans tous les principaux bassins oc&eacute;aniques du globe en de multiples endroits1.\r\n\r\nCe sont toutes des esp&egrave;ces abyssales, vivant &agrave; des profondeurs extr&ecirc;mes (&laquo; zone hadale &raquo;) : elles sont abondantes &agrave; plus de 6 000 m&egrave;tres de profondeur, et ont &eacute;t&eacute; observ&eacute;es jusqu''&agrave; plus de 9 500 m2. Ils vivent g&eacute;n&eacute;ralement en groupes tr&egrave;s denses de plusieurs centaines d''individus, arpentant lentement le fond dans la m&ecirc;me direction, en sens contraire au courant. Ce sont des d&eacute;positivores, qui se nourrissent en ing&eacute;rant la couche sup&eacute;rieure du s&eacute;diment, pr&eacute;f&eacute;rentiellement le s&eacute;diment &laquo; frais &raquo; (tomb&eacute; de la colonne d''eau il y a moins de 100 jours). Ils trient et portent ce s&eacute;diment &agrave; leur bouche au moyen de leurs tentacules pelt&eacute;s1.\r\n\r\nCes esp&egrave;ces peuvent &ecirc;tre parasit&eacute;es par divers animaux, comme de petits mollusques gast&eacute;ropodes du genre Stilapex ou des crustac&eacute;s du genre Mirandotanais1. Ils sont aussi souvent entour&eacute;s de petits commensaux (crevettes, poissons...).', 1457116684, 1),
(9, '&quot;Le crabe y&eacute;ti&quot;', 'Xxkikoo69xX', 1, 'La Galath&eacute;e y&eacute;ti (Kiwa hirsuta) ou crabe y&eacute;ti1 est un crustac&eacute; d&eacute;capode habitant dans les profondeurs abyssales de l''oc&eacute;an Pacifique sud. Elle mesure 15 centim&egrave;tres de long. Ses yeux tr&egrave;s atrophi&eacute;s et sans pigmentation laissent supposer qu''elle est aveugle. Elle est reconnaissable aux soies abondantes qui couvrent ses pattes, &agrave; l''origine de la deuxi&egrave;me partie de son nom. Ces soies semblent abriter des bact&eacute;ries.\r\n\r\nVivant aupr&egrave;s des sources hydrothermales &agrave; 2 500 m&egrave;tres de profondeur, ce crustac&eacute; des grandes profondeurs est probablement carnivore et n&eacute;crophage.\r\n\r\nLe premier sp&eacute;cimen a &eacute;t&eacute; d&eacute;couvert en avril 2005 &agrave; 1 500 km au sud de l''&icirc;le de P&acirc;ques, &agrave; l&rsquo;occasion d&rsquo;une mission organis&eacute;e par Robert Vrijenhoek, du centre de recherche de l&rsquo;Aquarium de Monterey Bay, en Californie, et par Michel Segonzac, biologiste de l''Ifremer. Il est le premier repr&eacute;sentant d''une nouvelle famille, les Kiwaidae (de Kiwa, divinit&eacute; des nacres et crustac&eacute;s, dans la mythologie polyn&eacute;sienne).\r\n\r\nDe nouveaux sp&eacute;cimens ont &eacute;t&eacute; observ&eacute;s dans les profondeurs de l''Oc&eacute;an Antarctique en 20102.', 1457116901, 1),
(10, '&quot;Pelochelys cantorii&quot;', 'Sylvain', 1, 'Cette tortue a une t&ecirc;te large et de petits yeux pr&egrave;s du bout de son museau. Elle se distingue par sa carapace lisse et molle, de couleur olive sombre. Les juv&eacute;niles peuvent avoir la carapace et la t&ecirc;te tachet&eacute;es de noir, avec du jaune sur le pourtour de la carapace.\r\n\r\nLes tortues g&eacute;antes &agrave; coquille molle peuvent mesurer jusqu''&agrave; 2 m de longueur. P. cantorii est un pr&eacute;dateur d''affut principalement carnivore, se nourrissant de crustac&eacute;s, des mollusques et de poisson (bien que quelques plantes aquatiques puissent aussi figurer &agrave; son menu). La tortue passe 95 % de sa vie enterr&eacute;e et immobile, laissant seulement d&eacute;passer du sable ses yeux et le bout de sa bouche. Il fait surface seulement deux fois par jour pour respirer.\r\n\r\nCette tortue pond 20-28 &oelig;ufs d''environ 3cm de diam&egrave;tre, en f&eacute;vrier ou mars sur des berges.', 1457116942, 1),
(11, '&quot;Le Fossa&quot;', 'randomMan', 1, 'e fossa (Cryptoprocta ferox), aussi appel&eacute; cryptoprocte f&eacute;roce et unique repr&eacute;sentant actuel du genre Cryptoprocta, est une esp&egrave;ce de mammif&egrave;re f&eacute;liforme de la famille des Eupleridae, end&eacute;mique de Madagascar. Il est le plus gros mammif&egrave;re carnivore de l''&icirc;le et est parfois compar&eacute; &agrave; un petit puma. Les adultes mesurent 70 &agrave; 80 cm de long du museau &agrave; la base de la queue, et p&egrave;sent de 5,5 &agrave; 8,6 kg, les m&acirc;les &eacute;tant plus lourds que les femelles. Ses griffes semi-r&eacute;tractiles permettent au fossa de grimper et de descendre des arbres la t&ecirc;te en avant, et l''animal peut aussi sauter d''arbre en arbre. Le fossa est un repr&eacute;sentant tr&egrave;s particulier dans sa famille, ses organes g&eacute;nitaux partageant certains caract&egrave;res avec les f&eacute;lins et les hy&egrave;nes.\r\n\r\nLe fossa a une aire de r&eacute;partition r&eacute;pandue sur Madagascar, mais les densit&eacute;s de peuplement sont g&eacute;n&eacute;ralement faibles. Il vit uniquement en habitat forestier, et chasse activement la nuit comme le jour. Plus de la moiti&eacute; de son r&eacute;gime alimentaire se compose de l&eacute;muriens, les primates &eacute;galement end&eacute;miques de l''&icirc;le ; les autres proies connues sont repr&eacute;sent&eacute;es par des tenrecs, des rongeurs, des l&eacute;zards, des oiseaux et divers autres animaux. L''accouplement a habituellement lieu dans des arbres, sur des branches horizontales, et peut durer plusieurs heures. La port&eacute;e compte un &agrave; six petits, qui naissent aveugles et sans dents. Les jeunes sont sevr&eacute;s au bout de quatre mois et demi, et sont ind&eacute;pendants au bout d''un an. Ils atteignent la maturit&eacute; sexuelle &agrave; l''&acirc;ge de deux ans, et la long&eacute;vit&eacute; mesur&eacute;e en captivit&eacute; est de vingt ans.\r\n\r\nSa classification a &eacute;t&eacute; sujette &agrave; d&eacute;bats, l''animal partageant des traits avec les f&eacute;lins, d''autres sugg&eacute;rant une relation &eacute;troite avec les viverrid&eacute;s. Sa position phylog&eacute;n&eacute;tique, avec celles des autres carnivores malgaches, a influenc&eacute; les hypoth&egrave;ses sur le nombre de colonisations de l''&icirc;le par les mammif&egrave;res carnivores. Les &eacute;tudes g&eacute;n&eacute;tiques ayant montr&eacute; que le fossa et tous les autres carnivores de Madagascar &eacute;tant plus proches entre eux, formant le clade qu''est la famille des Eupleridae, on sait aujourd''hui que les carnivores ont colonis&eacute; l''&icirc;le en une seule arriv&eacute;e, remontant &agrave; 18 ou 20 millions d''ann&eacute;es. Le fossa est consid&eacute;r&eacute; comme &laquo; vuln&eacute;rable &raquo; par l''Union internationale pour la conservation de la nature, ses effectifs sont jug&eacute;s en d&eacute;clin et principalement menac&eacute;s par la destruction de l''habitat. Il est g&eacute;n&eacute;ralement craint par le peuple malgache et est souvent prot&eacute;g&eacute; par un tabou (fady en malgache) qui le pr&eacute;serve de la chasse.', 1457117234, 2),
(12, '&quot;Cerf hupp&eacute;&quot;', 'frank', 1, 'En anglais, on l''appelle tufted deer (cerf hupp&eacute;) parce qu''il a des poils sur le cr&acirc;ne qui d&eacute;passent 12 cm.', 1457117374, 2),
(13, '&quot;Le Babiroussa&quot;', 'azer123', 1, 'Le babiroussa dispose de deux choses semblables &agrave; des d&eacute;fenses situ&eacute;es sur le museau. Ce sont en r&eacute;alit&eacute; les dents de l''animal, dont l''implantation les incitent &agrave; se diriger vers le haut jusqu''&agrave; transpercer la peau et sortir. Chez le m&acirc;le, la paire sup&eacute;rieure est plus d&eacute;velopp&eacute;e (jusqu''&agrave; 30 cm) et recourb&eacute;e vers l''arri&egrave;re jusqu''&agrave; p&eacute;n&eacute;trer dans la peau, pouvant provoquer des infections, alors que chez la femelle elle est atrophi&eacute;e voire inexistante1.', 1457117497, 2),
(14, '&quot;Le condylure &agrave; nez &eacute;toil&eacute;&quot;', 'wTf', 1, 'Le Condylure &eacute;toil&eacute; (Condylura cristata) est une petite esp&egrave;ce de taupes nord-am&eacute;ricaines, la seule du genre Condylura. Ce mammif&egrave;re fouisseur vit dans l''Est du Canada et dans l''extr&ecirc;me Nord-Est des &Eacute;tats-Unis, jusqu''au nord de la baie James. Sa longueur atteint environ 20 centim&egrave;tres, la queue totalisant un tiers. Il doit son &eacute;pith&egrave;te d''&laquo; &eacute;toil&eacute; &raquo; &agrave; la forme tr&egrave;s caract&eacute;ristique de son museau.', 1457117642, 2),
(15, '&quot;Weta g&eacute;ant&quot;', 'Kha''zix', 1, 'Les wetas g&eacute;ants regroupent plusieurs esp&egrave;ces d''insectes orthopt&egrave;res de la famille des Anostostomatidae, des wetas du genre Deinacrida. Ils sont end&eacute;miques &agrave; la Nouvelle-Z&eacute;lande et repr&eacute;sentent un exemple de gigantisme insulaire.\r\n\r\n\r\nDeinacrida rugosa\r\n11 esp&egrave;ces de wetas g&eacute;ants ont &eacute;t&eacute; recens&eacute;es et la plupart d''entre elles sont plus grosses que les autres weta, qui font d&eacute;j&agrave; partie des gros insectes. Les plus grosses esp&egrave;ces peuvent atteindre 10 cm (sans compter les pattes et les antennes) pour une masse ne d&eacute;passant g&eacute;n&eacute;ralement pas 35 g. Les wetas g&eacute;ants sont g&eacute;n&eacute;ralement moins sociaux et plus passifs que les autres wetas. On les retrouve g&eacute;n&eacute;ralement sur les &icirc;les outre-mer de Nouvelle-Z&eacute;lande, ayant &eacute;t&eacute; presque extermin&eacute;s sur les &icirc;les principales.\r\nL''esp&egrave;ce pr&eacute;sentant les individus les plus gros est le Little Barrier Island giant weta (en)1, &eacute;galement connu sous le nom de wetapunga. En 2011, un weta g&eacute;ant femelle de cette esp&egrave;ce et ayant une masse d''environ 70 g a &eacute;t&eacute; captur&eacute;, ce qui en fait l''un des insectes le plus lourd recens&eacute; au monde2.', 1457117738, 3),
(16, '&quot;Sauterelle &agrave; &eacute;pine&quot;', 'markZ', 1, 'Cette esp&egrave;ce se rencontre de l''Europe &agrave; la Mongolie. C''est la plus grande sauterelle que l''on peut voir presque partout en France, o&ugrave; elle &eacute;tait autrefois tr&egrave;s courante. Elle a fortement r&eacute;gress&eacute; ou disparu des zones d''agriculture intensive, surtout dans la partie nord du pays et au-del&agrave; des fronti&egrave;res, mais est toujours bien pr&eacute;sente dans les lieux incultes enherb&eacute;s ou buissonnants, m&ecirc;me le long des autoroutes. Les puissantes stridulations des m&acirc;les, &eacute;mises d&egrave;s juillet par temps assez chaud, sont caract&eacute;ristiques.', 1457117780, 3),
(17, '&quot;Fourmi-lion&quot;', 'okiasl', 1, 'Les Myrmeleontidae forment une famille d''insectes n&eacute;vropt&egrave;res dont les repr&eacute;sentants sont g&eacute;n&eacute;ralement appel&eacute;s fourmilions ou fourmis-lions. L''aspect de l''adulte rappelle les libellules. Certaines esp&egrave;ces sont connues pour le pi&egrave;ge en forme de c&ocirc;ne invers&eacute; que leur larve creuse dans la terre meuble, afin de capturer les petites proies (notamment des fourmis) qui tombent dans ce trou. Selon une r&eacute;vision de 2004, un peu plus de 1 500 esp&egrave;ces actuelles sont reconnues.', 1457117835, 3),
(19, '&quot;Chenille Brahmim&quot;', 'Caz_s', 1, 'Les Myrmeleontidae forment une famille d''insectes n&eacute;vropt&egrave;res dont les repr&eacute;sentants sont g&eacute;n&eacute;ralement appel&eacute;s fourmilions ou fourmis-lions. L''aspect de l''adulte rappelle les libellules. Certaines esp&egrave;ces sont connues pour le pi&egrave;ge en forme de c&ocirc;ne invers&eacute; que leur larve creuse dans la terre meuble, afin de capturer les petites proies (notamment des fourmis) qui tombent dans ce trou. Selon une r&eacute;vision de 2004, un peu plus de 1 500 esp&egrave;ces actuelles sont reconnues.', 1457118034, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Poissons', 'Retrouvez tous les poissons &eacute;tranges'),
(2, 'Mammif&egrave;re', 'Trouvez tous les mammif&egrave;res &eacute;tranges de notre plan&egrave;te'),
(3, 'Insectes', 'Ici les insectes les plus &eacute;tranges qui peuplent notre Terre');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `idAuthor` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` bigint(20) NOT NULL,
  `idArticles` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `author`, `idAuthor`, `content`, `date`, `idArticles`) VALUES
(6, 'noobz', 1, 'il est kawaiiii', 1457117256, 11),
(7, 'masterCard', 1, 'Votre blog est vrt fat gg', 1457118154, 14),
(8, 'judg', 1, 'bonne article thx', 1457118194, 19),
(9, 'fran&ccedil;ois', 1, 'assez &eacute;trange', 1457118214, 15),
(10, 'Rayan', 1, '70g c''est l&eacute;ger', 1457118238, 15),
(11, 'Lucatorz Le Roi', 1, 'merci Markz pour cette article  !', 1457118266, 16),
(12, 'Zidan', 1, 'c''est son vrai nom ou c''est un jeu de mot moisi ?', 1457118299, 17),
(13, 'okiasl', 1, 'c''est son vrai nom -_-''', 1457118311, 17),
(14, 'markZ', 1, '&lt;3', 1457118332, 16),
(15, 'Gramm', 1, 'je crois il y a une faute sur le nom', 1457118368, 19),
(16, 'Azertyuiop', 1, 'dat description merci c''&eacute;tait extr&ecirc;ment convaincant et int&eacute;ressant', 1457118423, 12),
(17, 'frank', 1, '#frank', 1457118436, 12),
(18, 'uhio', 1, 'lol', 1457118467, 13),
(19, 'azer123', 1, '???', 1457118473, 13),
(21, 'Test1', 1, 'first no raj', 1457118516, 7),
(22, 'jean jaqcue', 1, 'merci pour cette article', 1457118537, 8),
(23, 'Yui', 1, 'mon ajax bug', 1457118575, 9),
(24, 'LeBongars', 1, 'cool merci pour l''article', 1457118606, 10),
(25, '', 1, 'Cyka BLYAT MARKZ !', 1457118793, 16);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '1',
  `date` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `nickname`, `email`, `password`, `rank`, `date`) VALUES
(1, 'Administrateur', 'Administrateur', 'admin123', 'admin@admin.com', 'b2b2bc7a43a98a5bc449b5d78891f43da1544793', 2, 1457293292);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
