-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Jan 2021 um 14:26
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `5100_custom_cms`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `gallerys`
--

INSERT INTO `gallerys` (`id`, `image`) VALUES
(1, 9),
(6, 11),
(4, 13),
(3, 16),
(8, 17),
(2, 40),
(10, 47),
(9, 48),
(5, 49),
(7, 53);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `alt` varchar(250) NOT NULL DEFAULT 'eine Abbildung',
  `filename` varchar(250) NOT NULL,
  `id_folder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `images`
--

INSERT INTO `images` (`id`, `alt`, `filename`, `id_folder`) VALUES
(1, 'katzenkopf zeichnung', 'cat_logo.png', 1),
(2, 'verschlungene linien', 'linien_leder.png', 1),
(3, 'Eine Pfote', 'paw_dunkel.png', 1),
(4, 'Eine Pfote', 'paw_hell.png', 1),
(5, 'Eine Pfote', 'paw_mittel.png', 1),
(6, 'Eine Pfote', 'paw_mittel_border.png', 1),
(7, 'favicon', 'favicon-32x32.png', 2),
(8, 'Gurt spitze', 'AA.jpg', 3),
(9, 'Armband mir blauem Stein', 'armband_blau.jpg', 3),
(10, 'Armband mir braunem Stein', 'armband_braun.jpg', 3),
(11, 'Frau im Lederrüstung', 'armor_front.jpg', 3),
(12, 'Armschiene aus Leder', 'armschiene.jpg', 3),
(13, 'Armschienen', 'armschienen.jpg', 3),
(14, 'Beinschiene', 'beinschine.jpg', 3),
(15, 'Beinschienen', 'beinschinen.jpg', 3),
(16, 'Beinschienen', 'beinschinen_spin.jpg', 3),
(17, 'Brustplatte', 'brust.jpg', 3),
(18, 'Buch aus Leder', 'buch.jpg', 3),
(19, 'Buch aus Leder, rückseite', 'buch_back.jpg', 3),
(20, 'Buch', 'buch_top.jpg', 3),
(21, 'Gurt mit schnalle', 'gurt_AA.jpg', 3),
(22, 'Gürtel', 'gurt_alex.jpg', 3),
(23, 'Gürtel Blau', 'gurt_blau.jpg', 3),
(40, 'Gurt Blau ', 'gurt_blau_schnalle.jpg', 3),
(41, 'Gurt Blau ', 'gurt_blau_schnalle_hinten.jpg', 3),
(42, 'Gurt Braun', 'gurt_e_erich.jpg', 3),
(43, 'Gurt Braun', 'gurt_e_schnalle_hinten.jpg', 3),
(44, 'Gurt Braun', 'gurt_e_schnalle.jpg', 3),
(45, 'Gurt Braun', 'gurt_erich.jpg', 3),
(46, 'Gurt Braun', 'gurt_spitze.jpg', 3),
(47, 'Gurt Braun', 'gurt_tatze.jpg', 3),
(48, 'Kopfband', 'kopfschmuck.jpg', 3),
(49, 'Lederschmuck', 'lederschmuck.jpg', 3),
(50, 'Rüstung', 'pencile_armor.jpg', 3),
(51, 'Rüstung', 'pencile_armor_spin.jpg', 3),
(52, 'Rückenplatte', 'ruecken.jpg', 3),
(53, 'Buch aus Leder', 'ruecken_buch.jpg', 3),
(54, 'Tasche', 'tasche_gruen.jpg', 3),
(55, 'Tasche', 'tasche_g_r.jpg', 3),
(56, 'Leder', 'abpausen_bereitmachen.jpg', 4),
(57, 'verschlus Armschiene', 'armschine_verschluss.jpg', 4),
(58, 'Papier mit skizze', 'artwork_beinschienen_beginn.jpg', 4),
(59, 'Papier mit skizze', 'artwork_beinschinen.jpg', 4),
(60, 'Papier mit skizze', 'artwork_cat_beginn.jpg', 4),
(61, 'Leder mit abgepauster zeichnung', 'artwort_abgepaust.jpg', 4),
(62, 'Pauspapier', 'atrwork_pauspapier.jpg', 4),
(63, 'Leder gefärbt', 'aufsaetze_gefaerbt.jpg', 4),
(64, 'Leder gefärbt', 'aufsaetze_gefaerbt_antik.jpg', 4),
(65, 'Leder punziert', 'aug_faerben.jpg', 4),
(66, 'Leder gefärbt', 'ausgeschnitten_gefaerbt.jpg', 4),
(67, 'Leder gefärbt', 'bearbeitetes_leder_muster.jpg', 4),
(68, 'Leder gefärbt', 'beinschiene_faeben.jpg', 4),
(69, 'Leder gefärbt', 'beinschine_gefaerbt.jpg', 4),
(70, 'Leder Punziert', 'beinschine_punzieren.jpg', 4),
(71, 'Rüstung von hinten', 'brust_hinten.jpg', 4),
(72, 'Nath', 'brust_nath_rand.jpg', 4),
(73, 'Leder Punziert', 'brusteinsatz_punzieren.jpg', 4),
(74, 'Leder Punziert', 'brusteinsatz_punziert.jpg', 4),
(75, 'Leder Punziert', 'brustruestung_gefaerbt.jpg', 4),
(76, 'Leder', 'bruststueck_ausgeschnitten.jpg', 4),
(77, 'Zeichnung', 'cat_artwort.jpg', 4),
(78, 'Verschluss Beinschiene', 'front_schnalle_bein.jpg', 4),
(79, 'colage', 'idee_colage_lederruestung.jpg', 4),
(80, 'Lerderrüstung', 'idee_lederruestung.jpg', 4),
(81, 'Lerderrüstung hinten', 'idee_lederruestung_ruecken.jpg', 4),
(82, 'Schnittmuster', 'kleiderbueste_klebeband.jpg', 4),
(83, 'Leder', 'leder_brust_anpassung.jpg', 4),
(84, 'Leder Muster', 'leder_punzier_musterung_test.jpg', 4),
(85, 'Brustplatte', 'lederruestung_brustteil.jpg', 4),
(86, 'Brustplatte', 'ledrruestung_front_fertig.jpg', 4),
(87, 'Brustplatte Blau', 'nath_brust_gefaerbt_leder.jpg', 4),
(88, 'Brustplatte Naht', 'nath_brust_rohleder.jpg', 4),
(89, 'Brustplatte Naht', 'nath_hinten.jpg', 4),
(90, 'Nieten', 'nieten.jpg', 4),
(91, 'Brustplatte', 'rand_niete.jpg', 4),
(92, 'Brustplatte', 'rand_schnalle.jpg', 4),
(93, 'Brustplatte', 'rand_schnalle_niete.jpg', 4),
(94, 'Brustplatte hinten', 'ruestung_hinten.jpg', 4),
(95, 'Leder Blau', 'ruestung_leder_ruecken_gefaerbt.jpg', 4),
(96, 'Schnalle', 'schnalle_front_beinschine.jpg', 4),
(97, 'Schnalle', 'schnalle_niete.jpg', 4),
(98, 'Schnalle', 'schnalle_oben_beinschine.jpg', 4),
(99, 'Schnallen', 'Schnallen.jpg', 4),
(100, 'Schnittmuster', 'schnittmuster.jpg', 4),
(101, 'Schnittmuster', 'schnittmuster_klebeband.jpg', 4),
(102, 'Leder', 'slider_cut.jpg', 4),
(103, 'Leder', 'slider_punzieren.jpg', 4),
(104, 'Leder', 'tatze_1.jpg', 4),
(105, 'Leder', 'tatze_2.jpg', 4),
(106, 'Leder', 'tatze_3.jpg', 4),
(107, 'Abstandrädchen', 'abstandraedchen.jpg', 5),
(108, 'Ale', 'ale.jpg', 5),
(109, 'Druckstift', 'druckstift.jpg', 5),
(110, 'Faden', 'faden.jpg', 5),
(111, 'Farbe', 'farbe.jpg', 5),
(112, 'Granit', 'granit.jpg', 5),
(113, 'Hammer', 'hammer.jpg', 5),
(114, 'Kantenpolierer', 'kantenpolierer.jpg', 5),
(115, 'Kanterfraeser', 'kanterfraeser.jpg', 5),
(116, 'Locheisen', 'locheisen.jpg', 5),
(117, 'Lochzange', 'lochzange.jpg', 5),
(118, 'Messer', 'messer.jpg', 5),
(119, 'Nadeln', 'nadeln.jpg', 5),
(120, 'Nietenschlagsatz', 'nietenschlagsatz.jpg', 5),
(121, 'Pauspapier', 'pauspapier.jpg', 5),
(122, 'Pinsel', 'pinsel.jpg', 5),
(123, 'Punzier Stäpfel', 'punzier_muster.jpg', 5),
(124, 'Punzier Stäpfel', 'punzier_stempel_linien.jpg', 5),
(125, 'Rillenzieher', 'rillenzieher.jpg', 5),
(126, 'Rundmesser', 'rundmesser.jpg', 5),
(127, 'Schneidematte', 'schneidematte.jpg', 5),
(128, 'Wollpinsel', 'wollpinsel.jpg', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `image_folder`
--

CREATE TABLE `image_folder` (
  `id` int(11) NOT NULL,
  `folder` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `image_folder`
--

INSERT INTO `image_folder` (`id`, `folder`) VALUES
(1, 'logo_patterns'),
(2, 'favicon'),
(3, 'new'),
(4, 'work'),
(5, 'tools');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(250) NOT NULL,
  `bg_image` int(150) NOT NULL,
  `top_image` int(150) NOT NULL,
  `mid_image` int(150) NOT NULL,
  `bot_image` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `bg_image`, `top_image`, `mid_image`, `bot_image`) VALUES
(1, 'Leder Brustplatte', 'Eine Lederbrustplatte für das DF LARP.', 85, 17, 11, 52),
(2, 'Armschiene', 'Armschiene passen zur plattenrüstung.', 12, 13, 57, 51),
(4, 'Beinschienen', 'Beinschienen passend zur Brustplatte', 14, 68, 15, 16),
(5, 'Ledergurt', 'Blauer Ledergurt mit Punzierten Federn und Pfoten. Angefertigt nach Auftrag.', 23, 40, 23, 41),
(6, 'Gebundenes Buch', 'Lederbuch Komplett selbst gemacht, mit Papier färben und Binden.', 18, 20, 19, 53),
(7, 'Gürtel', 'Brauner Gürtel mit Spezifischen logo angefertigt.', 46, 47, 21, 22),
(8, 'Gürtel', 'Gürtel Braun und schlicht.', 42, 43, 44, 45),
(9, 'Ledertasche', 'Ledertasche aus dünnem Leder genäht. Auf Wunsch in Farbe und Form.', 54, 55, 54, 55);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `text` varchar(350) NOT NULL,
  `image_id` int(150) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tools`
--

INSERT INTO `tools` (`id`, `title`, `subtitle`, `text`, `image_id`) VALUES
(16, 'Messer', 'zum schneiden', 'Ein gutes Messer ist wichtig, um das Leder schön schneiden zu können. Ich würde sowas wie ein Teppichmesser empfehlen. Für gerade Linien kann es helfen, an einem Massstab entlang zu schneiden. ', 118),
(22, 'Schneidematte', 'Schützt den Tisch', 'Eine Schneidematte ist sinnvoll, damit der Arbeitstisch, der Boden und alles andere ganz bleibt. Karton würde ich nicht empfehlen, da schneidet man schnell durch. Ich spreche aus Erfahrung. Die Schneidematte legt man unter das Leder. Darauf achten, dass wirklich alles Leder auf der Matte liegt.', 127),
(23, 'Hammer', 'Zum Hämmern', 'Braucht man, wenn man das Leder punzieren will, um die Stempel in das Leder zu hämmern. Ich empfehle, einen Gummihammer zu verwenden, um die Stempel und Setter in einem guten Zustand zu halten. Und um weniger Ärger mit den Nachbarn zu haben.', 113),
(24, 'Granitplatte', 'solider Untergrund', 'Ist nicht zwingend nötig. Der harte Untergrund hilft, um das Leder gleichmässig bearbeiten zu können, ohne Verlust des Musters durch zu weichen Untergrund. Die Platte beim Punzieren unter das Leder legen.', 112),
(25, 'Punzier Stempel', 'Linien definieren', 'Benötigt man sobald man Linien auf dem Leder definieren will. man hält sie an die richtige Stelle auf dem Leder und schlägt mit dem Hammer darauf.', 124),
(26, 'Punzier Stempel', 'schöne Musterung', 'Benötigt man sobald man «art-work» oder eine Musterung auf dem Leder haben will, oder einfach eine schöne Struktur. man hält sie an die richtige Stelle auf dem Leder und schlägt mit dem Hammer darauf.', 123),
(27, 'Kantenfräser', 'Kante abrunden', 'Kantenfräser haben eine geschliffene Kerbe, mit der ein Teil der Kanten entfernt und abgerundet werden kann. Im Allgemeinen werden sie nur bei dickeren Ledern verwendet. Das Umbiegen von Kanten ist ein häufiges Problem, wenn keine Kantenfräsen verwendet werden. Und es sieht hübscher aus.', 115),
(28, 'Kantenpolierer', 'Geschmeidige Kanten', 'Man reibt damit über die kanten des Leders, dadurch franst es nicht auch, die kanten werden glatt/ glänzend. Unter Verwendung von Reibung schmilzt der Kantenglätter die Fasern an der Lederkante zusammen und erzeugt eine glatte Oberfläche, die nicht ausfranst.', 114),
(29, 'Rundmesser', 'Fürs «art-work»', 'Wenn man spezifische Bilder auf dem Leder haben will, schneidet man das Leder an den Kanten der Bilder mit diesem Messer ein. Hilft, das Punzieren sowie auch das Färben genauer machen zu können.', 126),
(30, 'Druckstift', 'Fürs «art-work»', 'Lege das Papier mit deiner Zeichnung auf das nasse Leder und fahre mit diesem Werkzeug den Linien entlang. Durch den Druck übertragen sich die Linien auf das Leder. Man kann auch ein Falzbein benutzen.', 109),
(31, 'Pauspapier', 'Für schönes übertrag', 'Ist nicht unbedingt nötig. Hilft, die Zeichnungen schöner auf das Leder zu übertragen, da sich das Papier weniger schnell mit Wasser vollsaugt.', 121),
(32, 'Rillenzieher', 'für den Abstand', 'Wird auch Nahtversenker genannt. Am Rand des Leders ansetzen und darüber ziehen. Schneidet einen kleinen Kanal im genauen Abstand zum Lederrand ein. Dadurch liegen die Nähte nicht frei und werden daher bei reibung weniger belastet. Die Linie dient auch als allgemeine Orientierungshilfe.', 125),
(33, 'Abstandrädchen', 'Nathabstand', 'Wird auch Nahtversenker genannt. Am Rand des Leders ansetzen und darüber ziehen. Schneidet einen kleinen Kanal im genauen Abstand zum Lederrand ein. Dadurch liegen die Nähte nicht frei und werden daher bei reibung weniger belastet. Die Linie dient auch als allgemeine Orientierungshilfe.', 107),
(34, 'Locheisen', 'für kleine Löcher', 'Wird auch Nahtversenker genannt. Am Rand des Leders ansetzen und darüber ziehen. Schneidet einen kleinen Kanal im genauen Abstand zum Lederrand ein. Dadurch liegen die Nähte nicht frei und werden daher bei reibung weniger belastet. Die Linie dient auch als allgemeine Orientierungshilfe.', 116),
(35, 'Ahle/ Nähale', 'für Löcher', 'Vor dem Nähen ist es sinnvoll, Löcher zu machen und auszudehnen, wofür eine Ahle sehr gut geeignet ist. Eine Nähahle hat eine Klinge, die gegen oben breiter wird. Je weiter die Klinge in das Leder gedrückt wird, desto größer wird das Loch.', 108),
(36, 'Ledernadeln', 'zum Nähen', 'Ledernadeln sind stabiler als normale Nadeln und brechen somit nicht so schnell. Die Spitze ist schärfer, was es einfacher macht, durch Leder zu stecken. Auch gibt es gekrümmte Nadeln, die je nach Lage der Naht sehr praktisch sein können.', 119),
(37, 'Faden', 'zum Nähen', 'Ein guter, stabiler Faden lohnt sich. Diese gibt es in verschiedenen Farben, sodass Nähte entweder unsichtbar oder als Dekorationselement verwendet werden können. Die Fäden gibt es gewachst oder ungewachst. Gewachste Fäden eigenen sich besonders für Nähte, welche nass werden.', 110),
(38, 'Wollpinsel', 'zum Färben', 'Für gleichmässiges Färben der Flächen ohne Pinselstriche. In die Farbe tunken und das Leder damit bemalen. Der Farbeffekt ist abhängig von der Farbmenge.', 128),
(39, 'Lederfarbe', 'zum Färben', 'Lederfarbe benötigt man für jegliche Färbung des Leders. Unbedingt eine Farbprobe auf einem Lederabschnitt (desselben Leders) durchführen. Für kräftigere Farbe mehrere schichten auftragen.', 111),
(40, 'Pinsel', 'genaues Färben', 'Für kleine Dinge in unterschiedlichen Farben können Pinsel sehr hilfreich sein.', 122),
(41, 'Lochzange', 'für grössere Löcher', 'Wenn man beabsichtigt, Nieten anzuschlagen, benötigt man saubere Löcher im Leder in der richtigen Grösse, damit auch alles sicher hält. Eine Revolverlochzange bietet die Auswahl verschiedener Stanzgrössen in einer Zange.', 117),
(42, 'Handschlagsatz', 'um Nieten Einzuschla', 'Verhindern Kratzer auf den Nieten beim Einschlagen. zu haben und um die Nieten in der richtigen Form zu lassen. Allerdings tut es auch ein Hammer. Nur bei Verwendung einer einseitig gewölbten Niete wird eine gewölbte Setzstange benötigt, sonst sehen die Nieten nachher zertrümmert aus.', 120);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `login_try` int(3) NOT NULL DEFAULT 0,
  `banned_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `password`, `role`, `login_try`, `banned_at`) VALUES
(1, 'lauralea@ledertatze.com', 'Laura Lea', 'Mueller', '$2y$10$kvesD0pTOWo.VrCHiQykJuvETvM.rz2SbkgXoa0TgXFEUlSfDfOpi', 'admin', 0, NULL),
(2, 'cmsuser@ledertatze.com', 'cms', 'user', '$2y$10$MqH88V9.SN2qG1OYegKkDeFQX.Siu8W1Lr9aA7WLe9jO7LclhM7Wq', 'user', 0, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `text` varchar(500) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `sub_text` varchar(1500) NOT NULL,
  `image_1` int(150) NOT NULL DEFAULT 5,
  `image_2` int(150) NOT NULL DEFAULT 5,
  `image_3` int(150) NOT NULL DEFAULT 5,
  `image_4` int(150) NOT NULL DEFAULT 5,
  `image_5` int(150) NOT NULL DEFAULT 5,
  `image_6` int(150) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `works`
--

INSERT INTO `works` (`id`, `title`, `text`, `subtitle`, `sub_text`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`) VALUES
(1, 'Vorstellung', 'Bevor man beginnt, sollte man genau wissen, was man überhaupt machen will. Es hilft, wenn man vor dem Start eine klare Vorstellung vom Ergebnis hat.', 'Eine Genaue Vorstellung Vom Ziel', 'So besorgt man von den Materialien nicht unnötig zu viel oder zu wenig.\r\n\r\nZur Inspiration habe ich es so gelöst, dass ich alle Rüstungen, die mir gefielen, zusammengetragen und dann eine Skizze von meinem Wunschprodukt gemacht habe. Hier ist es auch wichtig, realistisch zu bleiben. Bei ersten Projekten eignet sich eine Armschiene besser als eine ganze Rüstung. Oder ihr macht es wie ich und beginnt bei der Rüstung.', 80, 79, 81, 80, 79, 17),
(3, 'Farben, Schnallen, Nieten', 'Zur Definition der Farben und Schnallen: Wenn man diese Dinge Anfangs entscheidet, muss man, wenn das Produkt beinahe fertig ist, nicht warten, bis die richtigen Schnallen, Nieten etc. eintreffen', 'Definition der Farben, Schnallen, Nieten und Verschlüssen', 'Meine Lösung dazu war, von allen Schnallen, welche in Frage kamen, eine zu bestellen und zu schauen, welche davon wirklich passt. Gleich ging ich auch bei den Nieten und der Farbe vor. Ich bestellte meine Schnallen und Nieten von Lederhaus.de. Die Farbe sowie Leder holte ich bei ryffel-felle.ch.', 90, 99, 96, 97, 98, 57),
(4, 'Artwork', 'Was soll auf eurer Rüstung dargestellt sein? Nur Musterung oder etwas Konkretes?', 'Artwork erschaffen, Kreieren, Zeichnen', 'Es ist jedem selbst überlassen, wie man das macht. Ich persönlich finde es toll, wenn man diese Sachen selbst zeichnet. Man kann aber auch etwas aus dem Internet nehmen oder einfach mit Struktur eine Musterung erschaffen ohne konkrete Darstellung.', 77, 60, 59, 58, 62, 1),
(5, 'Ausprobieren und üben', 'Bevor man richtig startet, macht es Sinn auszuprobieren und zu üben.', 'Ausprobieren / üben / Umgang Werkzeug / färben', 'Punzieren kann je nach Wunsch des Endresultats schwierig sein. Besonders wenn man Punzier-Stempel hat, welche genau ineinanderpassen und man diese Musterung über eine grosse Fläche haben will. Z.B. Schuppen oder gerade Linien. Beim Üben merkt man auch schnell, wie nass oder wie trocken das Leder sein muss, um einen schönen Abdruck zu erhalten. Beim Färben ist es wichtig zu lernen, wie sich die Lederfarbe verhält. Gibt es Linien am Aussenrand, oder wie viele Schichten benötigt man, um den korrekten Farbton zu erhalten.\r\n\r\nIch selbst mag das Leder zum Punzieren lieber zu nass, unter anderem auch, da ich einige Punzier-Stempel habe, welche sehr tief geschlagen werden müssen, um den kompletten Abdruck zu erhalten. Zum Färben habe ich teils für grosse Flächen das Leder zuerst nass gemacht. Die Farbe verteilt sich so schneller und gleichmässiger. Auch wird die Farbe schneller mit weniger Schichten dunkler. Diese Methode kann ich nicht bei den punzierten Stellen empfehlen, da es sein kann, dass sich die Färbung in die Punzierung zieht.\r\n\r\nWenn man es beherrscht, ist es hilfreich ein kleines Muster anzufertigen, wie die Rüstung am Schluss aussehen soll.', 84, 65, 84, 65, 67, 84),
(6, 'Schnittmuster', 'Das Schnittmuster sollte so gemacht sein, dass die Rüstung nicht zu eng wird. Damit man Kleidung darunter anziehen kann und sie nicht scheuert.', 'Schnittmuster', 'Als Mann würde ich einfach ein Massband nehmen und den Oberkörper ausmessen. Als Frau ist dies etwas schwieriger wegen den Brüsten. Hier meine Empfehlung: Ziehe einen BH an, der gut passt oder evtl. eher etwas zu gross ist, damit die Rüstung auch nicht zu eng ist, falls du etwas wächst. Hol dir jemanden zur Hilfe. Lass dich in Klarsichtfolie einpacken. Vorsicht! Nicht zu eng, atme ein und halte die Luft an. Wenn deine ganze Haut abgedeckt ist, soll dein Helfer dich mit Klebeband einwickeln. Auch hier Vorsicht das es dir nicht die Luft abschneidet. Ist dies getan, nimm einen Stift und zeichne genau ein wie breit, hoch, lang die Rüstung werden soll. Schneide dich so frei, dass du ein Rücken- und ein Brustteil hast.\r\n\r\nSo hast du ein perfekt angepasstes Schnittmuster. Schneide um die Brüste danach die Stücke so, dass du einerseits die Stücke möglichst flach hinlegen kannst und andererseits so, dass es möglichst wenige sind und du nicht zu viel nähen musst.', 100, 81, 82, 100, 82, 101),
(7, 'Teile', 'Lege das Schnittmuster auf das Leder. Zeichne es ab und schneide es aus.', 'Teile zuschneiden', 'Für gerade Linien kann es hilfreich sein, ein Lineal zur Führung des Messers zu benutzen. Ich habe ein Teppichmesser benutz und eine ganz gewöhnliche Schnittunterlage. Vorsicht: Karton wird leicht durchschnitten.', 83, 73, 118, 76, 70, 65),
(8, 'Punzieren', 'Punziere dein gewünschtes Muster auf dein Leder.', 'Punzieren', 'Das Leder muss zum Punzieren nass sein, ansonsten funktioniert es nicht richtig. Pause deine Zeichnung mit einen Druckstift auf das nasse Leder ab. Schneide die Linien mit dem Rundmesser nach. Es geht auch ohne dass es nachgeschnitten wird, allerdings läuft dann die Farbe eher in die Musterung und es ist schwieriger, die Ränder genau zu punzieren.\r\nIst das gemacht, nimm den gewünschten (am besten einen relativ neutralen) Punzier-Stempel und punziere dem Rand entlang.\r\nZum Schluss punziere die freien Flächen mit der gewünschten Musterung.', 73, 74, 56, 61, 73, 74),
(9, 'Färben', 'Färbe das Leder in der gewünschten Farbe ein.', 'Färben', 'Zum Färben der kleinen Dinge würde ich einen kleinen Pinsel empfehlen, da die Farbe nicht an Orte läuft, wo man sie nicht haben will. Für Flächen empfehle ich einen Wollpinsel. Er kann eine grosse Menge an Farbe gleichzeitig aufnehmen und verteilt sie schön.', 66, 75, 75, 63, 68, 67),
(10, 'Finischer', 'Wenn man es wünscht, kann man Finischer benutzen, muss man aber nicht.', 'Finischer', 'Für meine Rüstung habe ich Antikfinisher benutz. Er macht das Leder etwas dunkler, dadurch wirkt es älter. Es gibt auch Pflegeprodukte, welche speziell für Glanz sind, oder welche, die das Leder matt machen.\r\nWenn man das Leder härten will, kann man es in heissem Wachs baden und danach trocknen lassen. Dies habe ich allerdings noch nie probiert.', 68, 85, 68, 85, 67, 64),
(11, 'Ränder', 'Um die Ränder schön hinzubekommen, müssen sie mit dem Kantenpoliererer abgeschliffen werden.', 'Ränder Polieren und schleifen', 'Es gibt spezielle Mittel, welche man verwenden kann, damit die Ränder nicht ausfransen. Ich habe dazu immer Bienenwachs verwendet. Mit dem Bienenwachs die Ränder abreiben und dann mit dem Kantenpolierer darüberfahren, bis die Ränder schön und glatt sind.', 91, 114, 67, 114, 91, 93),
(12, 'Schnallen Nieten Kleben', 'Zum Schluss werden die Schnallen befestigt und die Nieten eingeschlagen, geklebt oder genäht.', 'Schnallen /Nieten / Nähte / Kleben', 'Hinweis zum Kleben: wenn das Leder gefärbt und evtl. schon behandelt ist, ist es glatt. Verwendet man einen Kontaktkleber, wird er nicht auf dem Leder haften. Wenn dieser Fall eintrifft, kann man vorher das Leder mit einem Schleifpapier aufrauen, sodass der Kleber hält.\r\n\r\nZum Nieten einschlagen ist es empfehlenswert, ein Nietenschlagset zu verwenden, damit die Nieten nicht zerkratzt oder zerbeult sind.\r\nSo wie bei der Rüstung bei mir XD.', 99, 120, 90, 99, 93, 78),
(13, 'Nähen', 'Wann der richtige Zeitpunkt zum Nähen ist, ist von Rüstung zu Rüstung unterschiedlich.', 'Nähen', 'Es kommt darauf an, welche Teile wie zugänglich sind. Da das Leder zum Punzieren jedoch flach liegen muss und das auch beim Färben hilft, würde ich erst ganz am Schluss nähen.\r\n\r\nJe nachdem wie die Naht ist, kann man zuerst mit dem Rillenzieher eine Bahn ziehen, in der man die Naht versenken kann. Danach entweder mit dem Locheisen gleichmässige Löcher schlagen oder mit dem Abstandrädchen den Abstand messen und die Löcher mit der Ahle einstechen.\r\n\r\nDann nur noch nähen. Es ist empfehlenswert Ledernadeln zu verwenden, da diese wesentlich stabiler sind und zum Teil extra so geformt, dass man das Leder besser durchstechen kann.\r\nAls Faden kann ich Sattelgarn empfehlen, es ist sehr stabil.', 110, 88, 107, 110, 119, 108);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gallery_img` (`image`);

--
-- Indizes für die Tabelle `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_folder` (`id_folder`);

--
-- Indizes für die Tabelle `image_folder`
--
ALTER TABLE `image_folder`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_bg` (`bg_image`),
  ADD KEY `fk_images_top` (`top_image`),
  ADD KEY `fk_images_mid` (`mid_image`),
  ADD KEY `fk_images_bot` (`bot_image`);

--
-- Indizes für die Tabelle `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_image_tools` (`image_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_1` (`image_1`),
  ADD KEY `fk_images_2` (`image_2`),
  ADD KEY `fk_images_3` (`image_3`),
  ADD KEY `fk_images_4` (`image_4`),
  ADD KEY `fk_images_5` (`image_5`),
  ADD KEY `fk_images_6` (`image_6`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT für Tabelle `image_folder`
--
ALTER TABLE `image_folder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `gallerys`
--
ALTER TABLE `gallerys`
  ADD CONSTRAINT `fk_gallery_img` FOREIGN KEY (`image`) REFERENCES `images` (`id`);

--
-- Constraints der Tabelle `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_folder` FOREIGN KEY (`id_folder`) REFERENCES `image_folder` (`id`);

--
-- Constraints der Tabelle `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_images_bg` FOREIGN KEY (`bg_image`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_bot` FOREIGN KEY (`bot_image`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_mid` FOREIGN KEY (`mid_image`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_top` FOREIGN KEY (`top_image`) REFERENCES `images` (`id`);

--
-- Constraints der Tabelle `tools`
--
ALTER TABLE `tools`
  ADD CONSTRAINT `fk_image_tools` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Constraints der Tabelle `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `fk_images_1` FOREIGN KEY (`image_1`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_2` FOREIGN KEY (`image_2`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_3` FOREIGN KEY (`image_3`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_4` FOREIGN KEY (`image_4`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_5` FOREIGN KEY (`image_5`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_6` FOREIGN KEY (`image_6`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
