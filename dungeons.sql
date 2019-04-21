-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 03:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dungeons`
--
CREATE DATABASE IF NOT EXISTS `dungeons` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dungeons`;

-- --------------------------------------------------------

--
-- Table structure for table `povestiri`
--

CREATE TABLE `povestiri` (
  `id` int(15) NOT NULL,
  `titlu` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `nume` varchar(255) NOT NULL,
  `sticky` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `povestiri`
--

INSERT INTO `povestiri` (`id`, `titlu`, `content`, `nume`, `sticky`) VALUES
(1, '[Sticky] Modul de redactare al campaniilor', 'Salutare! Aceasta postare are rolul de a ajuta persoanele care vor sa contribuie la pagina de idei pentru campanii, cu niste mici mentiuni legate de redactare.<br>\r\n<h2>1. Se pot folosi taguri HTML</h2> pentru infrumusetare si adaugare de imagini, linkuri si media. <font color=\"red\">Tineti minte ca trebuie adaugat un backslash (\\) inaintea ghilimelelor (\" sau \'). </font> Poti crea tabele, div-uri, poti imparti articolul cum vrei, sa-l administrezi dupa bunul plac. Este bucatica ta de site, iti dam libertatea sa te bucuri de ea!<br>\r\n<h2>2. Ofera titluri sugestive.</h2> Este prima impresie pe care cineva si-o creeaza despre campanie. Preview-ul din pagina principala este modul in care oamenii decid daca merita articolul citit sau nu, deci fa-l sa merite!<br>\r\n<h2>3. O poza face cat o mie de cuvinte, </h2> atunci de ce sa ne racim gura degeaba? Poti pune o poza cu o schita a hartii locatiei actiunii, poti pune cu taguri <img> si parametrii clasici precum width si height, pentru a te asigura ca oamenii inteleg ceea ce ai de sput\r\n<h2>3. Totul este despre imaginatie, </h2> deci ideea ta trebuie nu trebuie sa fie una rigida, canonica. Trebuie sa fie ceva dupa care oamenii sa se ghideze, sa completeze cu propriile idei si sa ajunga la cea mai tare campanie de Dungeons and Dragons!<br>\r\n<h2>4. Hai sa fim organizati.</h2> Folositi taguri inaintea titlurilor. un tag poate sa fie \'[Campanie]\' daca postul tau prezinta o idee de campanie, [Mecanica] daca postul prezinta o idee de mecanica ce consideri ca ar trebui introdusa ca regula in campanii, [Misc] pentru arta si materiale auxiliare, ajutatoare. Postarile [Sticky] sunt puse de admini si sunt aici sa ajute utilizatorii site-ului, nu folositi acest tag.<br>\r\nSucces, lasati ideile bune sa curga!<br>\r\n-Admin\r\n<img src=\"http://dnd.wizards.com/sites/default/files/media/styles/inline_blocks/public/images/inline-block/InlineR_Ampersand.jpg?itok=v8_w9WXL\" width=\"100%\";>', 'Admin', 'd'),
(3, '[Campanie] Coiful pierdut din Wreagolar', 'Elfii sunt o rasa respectata de creaturi. Abilitatile lor magice le-au adus nenumarate infrangeri in situatii ce pareau imposibile de-a lungul istoriei, dar nu a fost mereu asa. E timpul sa privim inapoi, cu 3000 de ani in urma in <b>Forgotten Realms</b><br>\r\n\r\n<img src=\"https://www.geek.com/wp-content/uploads/2015/11/forgotten-realms.jpg\" width=\"500\">\r\nElfii nu se bucura de acelasi prestigiu pe care il au acum, ci din contra, sunt oprimati, luati drept sclavi si folositi ca obiect de negot. Situatia era inacceptabila, trebuia facut ceva, iar in centrul actiunii se afla <b>Hagluin Trazeiros</b>, unul dintre cei mai inzestrati elfi. El a faurit un <b>coif magic</b> care ii potenta magia purtatorului, crescandu-i exponential sansele intr-o lupta corp la corp cu orice inamic. Aceste arme magice au constituit inceputul revolutiei, elfii si-au dobandit un loc in partea superioara a ierarhiei superioare, si totul a fost bine, dar acum tot acest echilibru este pus sub semnul intrebarii, deoarece coiful a fost furat, si trebuie gasit si recuperat pana nu ajunge in mainile cui nu trebuie.<br>\r\nAduna-ti echipa si mergeti in cautarea artefactului magic. Restul detaliilor raman la imaginatia jucatorilor, distractie placuta!', 'Mihai', NULL),
(5, '[Mecanica] Mai mare, mai tare -> pentru zaruri', 'Salut! Vin cu o idee de mecanica similara cu stilul jocului de noroc \"Barbut\". Cu totii stim modul in care decurge o batalie in Dungeons and Dragons, dar eu va propun urmatoarea schimbare: <br>\r\n<ul>\r\n<li>Atunci cand playerul ataca, va alege unul din inamici, si va initia combatul. Acum el va arunca un zar clasic D20, si apoi acelasi tip de zar va fi aruncat de catre Dungeon Master. Doar cel cu valoarea de pe zar mai mare va avea succes in atac.</li>\r\n<li>Daca este un spell AoE (Area of Effect, adica vraja cu raza de actiune ridicata), atunci toti cei implicati vor arunca zarul si se vor lua doi cate doi perechi personaj-inamic, si va reusi atacul daca suma de pe zar este maxima pentru player, iar daca nu, inamicul va contraataca.</li>\r\nAstfel se adauga mai multa presiune pe batalii, jucatorii sunt fortati sa atace doar daca pot indura un contraatac, si pana la urma si intr-o situatie reala, atacul poate fi blocat si inamicul poate contraataca. Efectele pot fi influentate de statusurile caracterelor, acest lucru ramanand la latitudinea jucatorilor. Spor!\r\n</ul>\r\n<center><img src=\"https://cdn11.bigcommerce.com/s-or8twbmc41/images/stencil/1280x1280/products/429/2103/Steel_Goliath_2__23382.1541556285.jpg?c=2&imbypass=on\" width=\"200\">\r\n</center>', 'Cosmin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `povestiri`
--
ALTER TABLE `povestiri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `povestiri`
--
ALTER TABLE `povestiri`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
