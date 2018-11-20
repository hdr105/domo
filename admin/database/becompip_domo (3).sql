-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 03:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `becompip_domo`
--

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `badge_id` int(11) NOT NULL,
  `badge_name` varchar(200) NOT NULL,
  `badge_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`badge_id`, `badge_name`, `badge_image`) VALUES
(2, 'test badge', '2041611292Capture.PNG'),
(3, 'test 1', '1775867405view_in_new_tab.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `parent_category` int(11) NOT NULL,
  `category_scope` int(11) NOT NULL,
  `category_image` longtext NOT NULL,
  `category_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_name`, `parent_category`, `category_scope`, `category_image`, `category_description`) VALUES
(13, 'Relva', 0, 1, '576973512WWW.YIFY-TORRENTS.COM.jpg', 'Especialistas em relva sintética de alta performance.'),
(15, 'Futebol', 13, 1, '339007189futhead.jpg', 'test'),
(17, 'Projetos de referência', 0, 2, '1044010354destaque-duraforce-xl.jpg', 'Especialistas em relva sintética de alta performance.'),
(18, 'Jardim & Lazer', 17, 2, '23884217relva-de-jardim.jpg', 'Category Description'),
(20, 'Equipamentos desportivos', 0, 1, '989634155lote-plano-de-equipamento-desportivo-sutia-de-esporte-rosa-tenis-sobre-fundo-branco-desporto-vista-superior_1428-594.jpg', 'Tudo para a prática desportiva'),
(24, 'Golfe', 17, 2, '1318290640golfe-1.jpg', 'teste'),
(25, 'Ténis', 13, 1, '756536039tiebreak3.jpg', 'test'),
(26, 'Hóquei', 13, 1, '1776832277hockeyhead.jpg', 'test'),
(27, 'Padel', 13, 1, '2046968689padel.jpg', 'test'),
(28, 'Rugby', 13, 1, '554819410rugbyhead.png', 'test'),
(29, 'Golfe', 13, 1, '2121914891golfehead.jpg', 'test'),
(30, 'Multidesporto', 13, 1, '489530832multidesportohead.jpg', 'test'),
(31, 'Jardim & Lazer', 13, 1, '1077450510jardimhead.jpg', 'test'),
(32, 'Balizas', 20, 1, '337763305sobreAdomo.jpg', 'test'),
(33, 'Bancos de Suplentes', 20, 1, '1115228482sobreAdomo.jpg', 'test'),
(34, 'Bandeirolas', 20, 1, '829480602sobreAdomo.jpg', 'test'),
(35, 'Redes', 20, 1, '551992831sobreAdomo.jpg', 'test'),
(36, 'Base Amortecedora - SHOCKPAD', 0, 1, '1977362898ProPlay3.jpg', 'test'),
(37, 'Enchimento', 0, 1, '380922206cortiça.jpg', 'test'),
(38, 'Consumíveis', 0, 1, '95600839sobreAdomo.jpg', 'jdfhfjfdjfdk'),
(39, 'Acessórios', 0, 1, '1781999982sobreAdomo.jpg', 'test'),
(40, 'Futebol', 17, 2, '334640937sobreAdomo.jpg', 'test1'),
(41, 'Multidesportivos', 17, 2, '139298591sobreAdomo.jpg', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_subcategory` int(11) NOT NULL,
  `product_image` longtext NOT NULL,
  `product_description` longtext NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `other_image` longtext NOT NULL,
  `description` longtext NOT NULL,
  `related_projects` longtext NOT NULL,
  `product_badges` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_subcategory`, `product_image`, `product_description`, `title`, `subtitle`, `other_image`, `description`, `related_projects`, `product_badges`) VALUES
(4, 'DOMO® Varioslide S PRO', 13, 15, '1088743842main-varioslide-spro.jpg', '<p>A DOMO<sup>®</sup> VarioSlide tem um revestimento sintético revolucionário resistente ao uso e apresenta um aspeto visual muito natural. </p>  <p>Do ponto de vista de conforto de jogo, é uma relva artificial de qualidade muito alta. Utiliza o sistema Duo Yarn System, uma combinação de dois tipos de fibras, conceito único patenteado pela DOMO<sup>®</sup>. Trata-se de um revestimento composto por fibras monofilamentares ao qual juntámos um segundo tipo de fibra que trará uma vantagem adicional.</p>  <p>\r\nAlém disso, a nova geração de VarioSlide, a S Pro, integra a tecnologia Heliflex completada por um perfil de alta tecnologia que se considera uma mais valia para o campo de futebol.</p>', 'Sed eu', 'Sub Título', '', '', '[\"2\",\"1\",5,8]', '[\"2\"]'),
(7, 'DOMO® Slide DS', 13, 15, '1296998320destaque-slide-ds.jpg', '<p>Relva sintética especialmente concebida para a prática de futebol, com enorme resistência ao desgaste, e com uma textura confortável para os jogadores.</p><h3><b>Excelente conforto de jogo</b></h3><p>Os fios mantêm-se sempre retos graças ao preenchimento de areia e granulado de borracha ou cortiça (DOMO<sup>®</sup>Naturafill). O tapete de relva suporta literalmente a bola de tal forma que, o pé do jogador pode facilmente deslizar de encontro à bola. Isto permite aproximar, ou mesmo igualar as características de rolamento da bola na relva natural. Graças ao seu perfil único em diamante e à sua elasticidade, os fios regressam imediatamente à sua forma reta após cada salto de bola ou compressão.</p><h3><b>Excelente durabilidade</b></h3>  <p>O perfil em diamante da fibra garante uma excelente durabilidade. Através do teste LISPORT, um teste destinado a controlar a resistência ao desgaste, os fios mantêm-se intactos após 30.000 ciclos, ou seja, 15 anos de jogo dentro de condições normais.</p><h3><b>Alta estabilidade aos raios UV</b></h3><p>A DOMO<sup style=\"font-size: 9.75px;\">®</sup> Slide DS é recomendada em regiões ensolaradas. Esta relva sintética é extremamente resistente aos raios UV graças à forma particular da fibra,</p>', '', '', '', '', '[\"2\",10,13]', ''),
(10, 'Bike 1', 20, 21, '1266733642bike.jpeg', '<p>This is a simple bike</p>', '', 'teste2', '1992696759bike.jpeg', '<p>teste&nbsp;</p>', '[]', ''),
(12, 'Bolas de Golfe', 20, 21, '1447876126golfe-1.jpg', '<p>teste</p>', '', '', '', '', '[]', ''),
(15, 'Rede Pára-Bolas', 20, 35, '1146853877RedesPara.jpg', '<p>Redes em polietileno com proteção UV, o que confere ao produto uma excelente durabilidade, mesmo que exposto às condições climatéricas mais adversas.</p><p>Indicadas para:</p><ul><li>Vedação de Campos de Golfe</li><li>Vedação de Campos de Futebol</li><li>Balizas</li><li>Campos de Voleibol</li><li>Campos de Ténis</li><li>Varandas</li></ul><p>Amparam melhor a velocidade das bolas, sem ruídos, sem se deformarem, com maior suavidade e resistência.<br></p>', '', '', '', '', '[11,12]', ''),
(16, 'Rede de Ténis', 20, 35, '1127783508RedeTénis.jpg', '<ul><li>Tratamento Anti-UV</li><li>Não oxida</li><li>Proteção contra mau tempo até 24 meses</li><li>Versátil e Reciclável</li><li>Fácil de instalar</li></ul>', '', '', '', '', '[]', ''),
(17, 'Rede de Vólei', 20, 35, '1573985745RedeVolei.jpg', '<ul><li>Malha de 100mm x 100mm em fio de polietileno de 2,0mm</li><li>Banda superior em tela de PVC branco de 50mm</li><li>Medidas regulamentares (9,50m x 1,00m)</li><li>Tensão feita através de cabo de polietileno de 5mm - recomendada para postes sem guincho</li></ul>', '', '', '', '', '[]', ''),
(18, 'DOMO® Duraforce XSL', 13, 15, '1394891067DuraForce_XSL.jpg', '<p>Relva sintética especialmente concebida para a prática de Futebol, Futebol Americano e Rugby. É feita de uma fibra excecionalmente forte, o que garante a melhor resistência ao desgaste possível. Graças à escolha específica de polímeros, também pode ser garantida uma superfície de jogo de toque suave, o que é excecional, tal como qualquer relva de elevada qualidade.</p><h3><b>Resistência máxima ao desgaste</b></h3><p>A 400 microns, a fibra Duraforce é extremamente forte. Graças à sua robustez, este tipo de relva pode desaparecer ou envelhecer a um ritmo mais lento e tem excelentes propriedades de resistência ao desgaste.</p><h3><b>Composição do polímero</b></h3><p>A Duraforce é concebida com uma fibra de uma nova composição de polímero de PE. A divisão DOMO®\'s R &amp; D desenvolveu um fio extremamente resistente e, ao mesmo tempo, de toque suave, devido ao equilíbrio perfeito de vários elementos, tais como a espessura da fibra, a textura do polímero e a sua natureza.</p><h3><b>Fibra Resistente, mas suave ao toque</b></h3><p>Os jogadores tocam regularmente no tapete da relva com as mãos, braços, joelhos e até mesmo o rosto. A Duraforce é feita a partir de uma fibra muito resistente que garante maior durabilidade. Os tapetes de relva com esta espessura de fibra, tornam~se rapidamente muito rígidos e duros, com uma combinação de fibra com um toque macio, graças a uma composição de polímero inovador.</p>', '', '', '', '', '[]', ''),
(19, 'DOMO® Slide RS', 13, 15, '1390605875Slide_RS.jpg', '<p>Relva sintética especialmente concebida para a prática de futebol, com enorme resistência ao desgaste, e com uma textura confortável para os jogadores.</p><h3 style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: 700;\">Excelente conforto de jogo</span></h3><p>Os fios mantêm-se sempre retos graças ao preenchimento de areia e granulado de borracha ou cortiça (DOMO<sup style=\"font-size: 9.75px;\">®</sup>Naturafill). O tapete de relva suporta literalmente a bola de tal forma que, o pé do jogador pode facilmente deslizar de encontro à bola. Isto permite aproximar, ou mesmo igualar as características de rolamento da bola na relva natural. Graças ao seu perfil único em diamante e à sua elasticidade, os fios regressam imediatamente à sua forma reta após cada salto de bola ou compressão.</p><h3 style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: 700;\">Excelente durabilidade</span></h3><p>O perfil em diamante da fibra garante uma excelente durabilidade. Através do teste LISPORT, um teste destinado a controlar a resistência ao desgaste, os fios mantêm-se intactos após 30.000 ciclos, ou seja, 15 anos de jogo dentro de condições normais.</p><h3 style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: 700;\">Alta estabilidade aos raios UV</span></h3><p>A DOMO<sup style=\"font-size: 9.75px;\">®</sup>&nbsp;Slide RS é recomendada em regiões ensolaradas. Esta relva sintética é extremamente resistente aos raios UV graças à forma particular da fibra,</p>', '', '', '', '', '[]', ''),
(20, 'DOMO® Duraforce XQ', 13, 15, '1693814614DuraForce_XQ.jpg', '<p>sds</p>', '', '', '', '', '[]', ''),
(21, 'DOMO® Duraforce XT', 13, 15, '1183738883DuraForce_XT.jpg', '<p>sds</p>', '', '', '', '', '[]', ''),
(22, 'DOMO® Smash', 13, 25, '2092751904Smash.JPG', '<p>Relva sintética especialmente concebida para a prática de desporto</p><p><b>Altura da Fibra    </b><span style=\"font-weight: 700;\">   </span><span style=\"font-weight: 700;\"> </span><b>Número de Tufos</b><span style=\"font-weight: 700;\">   </span><span style=\"font-weight: 700;\"> </span><b>    Peso Total</b><span style=\"font-weight: 700;\">   </span><span style=\"font-weight: 700;\"> </span><b>    Cores disponíveis</b></p><p>         22mm                 22.047 / m<sup>2</sup>             1.830gr / m<sup>2</sup>        <font color=\"#397b21\">Verde</font>/<span style=\"background-color: rgb(247, 247, 247);\"><font color=\"#ff0000\">Vermelho</font></span><b><br></b></p>', 'Sed eu', 'Sub Título', '', '', '[]', ''),
(23, 'DOMO® Top Court', 13, 25, '174523027Top_Court.jpg', '<p>Relva sintética especialmente concebida para a prática de desporto</p><p><span style=\"font-weight: 700;\">Altura da Fibra&nbsp; &nbsp;&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">Número de Tufos</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Peso Total</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Cores disponíveis</span></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13mm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;65.100/ m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.210gr / m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=\"#397b21\">Verde</font>/<span style=\"background-color: rgb(247, 247, 247);\"><font color=\"#ff0000\">Vermelho</font></span></p>', '', '', '', '', '[]', ''),
(24, 'DOMO® Smash Court', 13, 25, '327953476Smash_Court.jpg', '<p>Relva sintética especialmente concebida para a prática de desporto.</p><p><span style=\"font-weight: 700;\">Altura da Fibra&nbsp; &nbsp;&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">Número de Tufos</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Peso Total</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Cores disponíveis</span></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12mm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;67.200 / m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.262gr / m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp; &nbsp; &nbsp; &nbsp; <font color=\"#e79439\">Cascalho</font></p>', '', '', '', '', '[]', ''),
(25, 'DOMO® Tiebreak 20PE', 13, 25, '992780307Tie_Break.jpg', '<p>Relva sintética especialmente concebida para a prática de desporto</p><p><span style=\"font-weight: 700;\">Altura da Fibra&nbsp; &nbsp;&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">Número de Tufos</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Peso Total</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Cores disponíveis</span></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20mm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;23.307 / m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2.164gr / m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=\"#397b21\">Verde</font>/<span style=\"background-color: rgb(247, 247, 247);\"><font color=\"#ff0000\">Vermelho</font></span></p>', '', '', '', '', '[]', ''),
(26, 'DOMO® Avantage', 13, 25, '1925153611Avantage.jpg', '<p>Relva sintética especialmente concebida para a prática de desporto</p><p><span style=\"font-weight: 700;\">Altura da Fibra&nbsp; &nbsp;&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">Número de Tufos</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Peso Total</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Cores disponíveis</span></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15mm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;50.400 / m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.760gr / m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=\"#397b21\">Verde</font>/<span style=\"background-color: rgb(247, 247, 247);\"><font color=\"#ff0000\">Vermelho</font></span></p>', '', '', '', '', '[]', ''),
(27, 'DOMO® Stroke', 13, 26, '1242406259Stroke.jpg', '<p>Os campos com preenchimento de areia apresentam uma estrutura aberta e a superfície da relva tem menos densidade. Os fios da relva mantêm-se erguidos graças ao preenchimento de areia, o que assegura uma grande estabilidade e resistência ao desgaste elevado. Este campo garante um rolamento de bola uniforme e previsível. São multifuncionais e, por isso, adequados para escolas e também para projetos de câmaras municipais.</p><h3><b>Económico</b></h3><p>Um campo feito com DOMO® Stroke é um campo 100% polipropileno, completamente preenchido com areia. A fibra da relva é uma fita de fios fibrilados. O preço total da colocação deste terreno é muito económico.</p><h3><b>Estável e Uniforme</b></h3><p>Este modelo de relva é constituído por fios erguidos, dos quais 90% se encontram inseridos na areia, o que resulta num tapete de relva muito estável com a mínima possibilidade de expansão/contração.</p><h3><b>Multifuncional</b></h3><p>Sendo um produto desenvolvimento para o hóquei, é também possível ser utilizado para a prática desportiva de outras disciplinas como o futebol. São campos multifuncionais que podem ser utilizados por qualquer câmara municipal ou clubes desportivos. </p>', '', '', '1967557859head-stroke.jpg', '', '[]', ''),
(28, 'DOMO® Fast Play', 13, 26, '1677453448FastPlay.jpg', '<p>Produto topo de gama na faixa de hóquei e golfe&nbsp;DOMO® Sports Grass.</p><h3><b>Campo à base de água</b></h3><p>O campo é completamente irrigado com uma camada de água, que garante um jogo profissional, extremamente rápido e de alta qualidade e assegura a segurança dos jogadores. Todos os movimentos do jogador e da bola são perfeitamente absorvidos pelo campo. Isso resulta em excelentes propriedades técnicas de jogo.</p><h3><b>Deslizamento da bola extremamente rápido</b></h3><p>Esta relva foi concebida em colaboração com jogadores de hóquei profissional, a fim de gerar uma jogada de bola extremamente rápida e um consumo de água inferior. Este campo de hóquei garante um jogo técnico e rápido.</p><h3><b>Características</b></h3><ul><li>Campo à base de água -&gt; Jogo Profissional</li><li>Certificação Global FIH</li><li>Disponível em múltiplas alturas e cores</li><li>Perfeitamente estável e superfície de jogo regular</li><li>Deslizamento de bola consistente</li><li>Velocidade extremamente alta de bola, sem saltar</li><li>Desvio mínimo da bola</li><li>Baixo coeficiente de atrito</li><li>Alta estabilidade UV</li><li>Excelente resistência ao desgaste</li><li>Fabricação própria -&gt; Controlo de qualidade de A a Z</li></ul><p><br></p>', '', '', '', '', '[]', ''),
(29, 'DOMO® Padel Court', 13, 27, '130627955Padel2.jpg', '<p>teste</p>', '', '', '', '', '[]', ''),
(30, 'DOMO® Malibu', 13, 30, '83568871Malibu.jpg', '<p>testge</p>', '', '', '', '', '[]', ''),
(31, 'DOMO® Smash', 13, 30, '549102531Smash.jpg', '<p>Relva sintética especialmente concebida para a prática de desporto</p><p><span style=\"font-weight: 700;\">Altura da Fibra&nbsp; &nbsp;&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">Número de Tufos</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Peso Total</span><span style=\"font-weight: 700;\">&nbsp; &nbsp;</span><span style=\"font-weight: 700;\">&nbsp;</span><span style=\"font-weight: 700;\">&nbsp; &nbsp; Cores disponíveis</span></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;22mm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22.047 / m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.830gr / m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=\"#397b21\">Verde</font>/<span style=\"background-color: rgb(247, 247, 247);\"><font color=\"#ff0000\">Vermelho</font></span></p>', '', '', '', '', '[]', ''),
(32, 'DOMO® Play Court', 13, 30, '1338096725PlayCourtP.jpg', '<p>teste</p>', '', '', '', '', '[]', ''),
(33, 'DOMO® Champion Ascari S PRO', 13, 30, '885603392Ascari_SPROP.jpg', '<p><span style=\"font-family: arial, &quot;?? ?????&quot;, &quot;ms pgothic&quot;, ??, dotum, helvetica, sans-serif; text-align: justify;\">A Domo® Champion Ascari conduz a uma nova geração de campos de relva artificial: os sistemas de relva artificial sem enchimento. Estas construções assentam na nova tecnologia SRN. O Sistema de Resiliência Natural tem todas as vantagens de gerações anteriores de relva artificial.</span></p><h3><b>Cores e Formas Inspiradas na Natureza</b></h3><p>O Sistema de Resiliência Natural, um filamento de relva desenvolvido em exclusivo, garante que a Champion Ascari possua uma apresentação muito natural. O perfil do filamento é inspirado por lâminas naturais de relva: uma estrutura em veia com outra mais espessa no meio. A vasta gama de lâminas de cor verde das fibras confere à Champion Ascari S PRO uma qualidade natural inigualável.</p><h3><b>Conforto Desportivo Excecional</b></h3><p>Graças ao SRN, a bola rola como na relva natural. O filamento de relva destaca-se na perfeição, graças ao seu perfil específico e à construção densa da superfície da relva e apresenta, entre outras, as seguintes vantagens:</p><ul><li>Um rolar de bola consistente e natural</li><li>Sem aquecimento</li><li>Sem material de enchimento deslocado</li><li>Sem odores de material de enchimento</li></ul>', '', '', '', '', '[]', ''),
(34, 'DOMO® Tackle XL', 13, 30, '802342311Tackle_XL.jpg', '<p>TESTE</p>', '', '', '', '', '[]', ''),
(35, 'DOMO® Nero', 13, 31, '166557980Nero.jpg', '<p><b>Altura</b> - 40mm</p><p><b>Tufos</b> - 15.120 / m<sup>2</sup></p><p><b>Peso Total</b> - 3.510gr / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><b>Dimensões dos Rolos</b> - 50m<sup style=\"font-size: 9.75px;\">2&nbsp; </sup>/ 100m<sup style=\"font-size: 9.75px;\">2</sup></p><p><b>Largura Disponível</b> - 2 metros / 4 metros</p>', '', '', '', '', '[]', ''),
(36, 'DOMO® Scala (Phili)', 13, 31, '663567602Scala_(Phili).jpg', '<p><span style=\"font-weight: 700;\">Altura</span>&nbsp;- 32mm</p><p><span style=\"font-weight: 700;\">Tufos</span>&nbsp;- 18.900 / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Peso Total</span>&nbsp;- 3.154gr / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Dimensões dos Rolos</span>&nbsp;- 25m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;/ 50m<sup style=\"font-size: 9.75px;\">2&nbsp;</sup>/ 75m<sup style=\"font-size: 9.75px;\">2&nbsp;&nbsp;</sup>/ 100m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Largura Disponível</span>&nbsp;- 2 metros / 4 metros</p>', '', '', '', '', '[]', ''),
(37, 'DOMO® Eden', 13, 31, '437086843Eden.jpg', '<p><b>Altura</b> - 38mm</p><p><b>Tufos</b>&nbsp;- 19.950 / m<sup>2</sup></p><p><b>Peso Total </b>- 3.015gr / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><b>Dimensões dos Rolos</b>&nbsp;- 50m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;/ 100m<sup style=\"font-size: 9.75px;\">2</sup></p><p><b>Largura Disponível</b>&nbsp;- 2 metros / 4 metros</p>', '', '', '', '', '[]', ''),
(38, 'DOMO® Viano', 13, 31, '483160686Viano.jpg', '<p><span style=\"font-weight: 700;\">Altura</span>&nbsp;- 38mm</p><p><span style=\"font-weight: 700;\">Tufos</span>&nbsp;- 19.950 / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Peso Total&nbsp;</span>- 3.015gr / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Dimensões dos Rolos</span>&nbsp;- 50m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;/ 100m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Largura Disponível</span>&nbsp;- 2 metros / 4 metros</p>', '', '', '', '', '[]', ''),
(39, 'DOMO® Stella', 13, 31, '61463600Stella.jpg', '<p><span style=\"font-weight: 700;\">Altura</span>&nbsp;- 35mm</p><p><span style=\"font-weight: 700;\">Tufos</span>&nbsp;- 20.160 / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Peso Total&nbsp;</span>- 2.325gr / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Dimensões dos Rolos</span>&nbsp;- 50m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;/ 100m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Largura Disponível</span>&nbsp;- 2 metros / 4 metros</p>', '', '', '', '', '[]', ''),
(40, 'DOMO® Sunset', 13, 31, '1663498028Sunset.jpg', '<p><span style=\"font-weight: 700;\">Altura</span>&nbsp;- 40mm</p><p><span style=\"font-weight: 700;\">Tufos</span>&nbsp;- 16.380 / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Peso Total&nbsp;</span>- 2.100gr / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Dimensões dos Rolos</span>&nbsp;- 50m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;/ 100m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Largura Disponível</span>&nbsp;- 2 metros / 4 metros</p>', '', '', '', '', '[]', ''),
(41, 'DOMO® Fleur', 13, 31, '1798677158Fleur.jpg', '<p><span style=\"font-weight: 700;\">Altura</span>&nbsp;- 50mm</p><p><span style=\"font-weight: 700;\">Tufos</span>&nbsp;- 9.450 / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Peso Total&nbsp;</span>- 2.335gr / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Dimensões dos Rolos</span>&nbsp;- 50m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;/ 100m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Largura Disponível</span>&nbsp;- 2 metros / 4 metros</p>', '', '', '', '', '[]', ''),
(42, 'DOMO® Monza', 13, 31, '185423176Monza.jpg', '<p><span style=\"font-weight: 700;\">Altura</span>&nbsp;- 19mm</p><p><span style=\"font-weight: 700;\">Tufos</span>&nbsp;- 12.600 / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Peso Total&nbsp;</span>- 1.665gr / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Dimensões dos Rolos</span>&nbsp;- 50m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;/ 100m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Largura Disponível</span>&nbsp;- 2 metros / 4 metros</p>', '', '', '', '', '[]', ''),
(43, 'DOMO® Silverstone', 13, 31, '1060190958Silverstone.jpg', '<p><span style=\"font-weight: 700;\">Altura</span>&nbsp;- 15mm</p><p><span style=\"font-weight: 700;\">Tufos</span>&nbsp;- 12.600 / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Peso Total&nbsp;</span>- 1.455gr / m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Dimensões dos Rolos</span>&nbsp;- 50m<sup style=\"font-size: 9.75px;\">2</sup>&nbsp;/ 100m<sup style=\"font-size: 9.75px;\">2</sup></p><p><span style=\"font-weight: 700;\">Largura Disponível</span>&nbsp;- 2 metros / 4 metros</p>', '', '', '', '', '[]', ''),
(44, 'DOMO® Varioslide S PRO', 13, 28, '524450797VarioSlide_SPRO.jpg', '<p>A DOMO<sup style=\"font-size: 9.75px;\">®</sup>&nbsp;VarioSlide tem um revestimento sintético revolucionário resistente ao uso e apresenta um aspeto visual muito natural.</p><p>Do ponto de vista de conforto de jogo, é uma relva artificial de qualidade muito alta. Utiliza o sistema Duo Yarn System, uma combinação de dois tipos de fibras, conceito único patenteado pela DOMO<sup style=\"font-size: 9.75px;\">®</sup>. Trata-se de um revestimento composto por fibras monofilamentares ao qual juntámos um segundo tipo de fibra que trará uma vantagem adicional.</p><p>Além disso, a nova geração de VarioSlide, a S Pro, integra a tecnologia Heliflex completada por um perfil de alta tecnologia que se considera uma mais valia para o campo de futebol.</p>', '', '', '', '', '[]', ''),
(45, 'DOMO® Duraforce XSL', 13, 28, '980003138DuraForce_XSL.jpg', '<p>Relva sintética especialmente concebida para a prática de Futebol, Futebol Americano e Rugby. É feita de uma fibra excecionalmente forte, o que garante a melhor resistência ao desgaste possível. Graças à escolha específica de polímeros, também pode ser garantida uma superfície de jogo de toque suave, o que é excecional, tal como qualquer relva de elevada qualidade.</p><h3 style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: 700;\">Resistência máxima ao desgaste</span></h3><p>A 400 microns, a fibra Duraforce é extremamente forte. Graças à sua robustez, este tipo de relva pode desaparecer ou envelhecer a um ritmo mais lento e tem excelentes propriedades de resistência ao desgaste.</p><h3 style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: 700;\">Composição do polímero</span></h3><p>A Duraforce é concebida com uma fibra de uma nova composição de polímero de PE. A divisão DOMO®\'s R &amp; D desenvolveu um fio extremamente resistente e, ao mesmo tempo, de toque suave, devido ao equilíbrio perfeito de vários elementos, tais como a espessura da fibra, a textura do polímero e a sua natureza.</p><h3 style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: 700;\">Fibra Resistente, mas suave ao toque</span></h3><p>Os jogadores tocam regularmente no tapete da relva com as mãos, braços, joelhos e até mesmo o rosto. A Duraforce é feita a partir de uma fibra muito resistente que garante maior durabilidade. Os tapetes de relva com esta espessura de fibra, tornam~se rapidamente muito rígidos e duros, com uma combinação de fibra com um toque macio, graças a uma composição de polímero inovador.</p>', '', '', '', '', '[]', ''),
(46, 'DOMO® Ultimate', 13, 29, '1971070438Ultimate.jpg', '<p>Dotado do nosso <i>Aqua Saving System</i>, este campo oferece conforto de jogo inigualável.</p><h3><b>Um campo de água inovador a nível mundial</b></h3><p>A única combinação de fibra PA/ASBF (pendente de patente) garante o controlo de humidade auto-reguladora. O resultado? Um rolo de bola excecionalmente rápido e consistente, acrescido de características de jogo técnico inigualáveis. E isso não é tudo, pois o DOMO® Ultimate é excecional, também, em termos de durabilidade devido ao seu baixo consumo de água.</p><p>O sistema de apoio de água único suporta a água mais tempo nas fibras. Como resultado, não é necessário tantos aspersores, permitindo obter-se uma economia de água substancial. Isto beneficia não só o comprador, mas também o ambiente.</p><h3><b>Sistema de economia de água: revolucionário</b></h3><p>O sistema de água exclusivo permite que o campo controle autonomamente o seu conteúdo de humidade. O campo permanece húmido de forma perfeita ao longo do jogo, independentemente das condições meteorológicas. A combinação exclusiva com a PA/ASBF detém a água mais tempo na fibra e, como tal, reduz drasticamente o consumo de água.</p><h3><b>Características</b></h3><ul><li>Campo de água de topo para um nível profissional elevado</li><li>Regula autonomamente o conteúdo de humidade</li><li>Consumo de água reduzido</li></ul>', '', '', '', '', '[]', ''),
(47, 'DOMO® Fast Play', 13, 29, '1247683292FastPlay.jpg', '<p>Produto topo de gama na faixa de hóquei e golfe&nbsp;DOMO® Sports Grass.</p><h3 style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: 700;\">Campo à base de água</span></h3><p>O campo é completamente irrigado com uma camada de água, que garante um jogo profissional, extremamente rápido e de alta qualidade e assegura a segurança dos jogadores. Todos os movimentos do jogador e da bola são perfeitamente absorvidos pelo campo. Isso resulta em excelentes propriedades técnicas de jogo.</p><h3 style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: 700;\">Deslizamento da bola extremamente rápido</span></h3><p>Esta relva foi concebida em colaboração com jogadores de hóquei profissional, a fim de gerar uma jogada de bola extremamente rápida e um consumo de água inferior. Este campo de hóquei garante um jogo técnico e rápido.</p><h3 style=\"color: rgb(0, 0, 0);\"><span style=\"font-weight: 700;\">Características</span></h3><ul><li>Campo à base de água -&gt; Jogo Profissional</li><li>Certificação Global FIH</li><li>Disponível em múltiplas alturas e cores</li><li>Perfeitamente estável e superfície de jogo regular</li><li>Deslizamento de bola consistente</li><li>Velocidade extremamente alta de bola, sem saltar</li><li>Desvio mínimo da bola</li><li>Baixo coeficiente de atrito</li><li>Alta estabilidade UV</li><li>Excelente resistência ao desgaste</li><li>Fabricação própria -&gt; Controlo de qualidade de A a Z</li></ul>', '', '', '', '', '[]', ''),
(48, 'DOMO® Allround', 13, 29, '1270907673Allround.jpg', '<p>A procura de campos onde se possa jogar todo o ano aumenta cada vez mais. Bases tradicionais como relva natural, terra batida, betão, entre outras, por vezes têm de deixar lugar para outras alternativas.</p><h3><b>Multifuncional</b></h3><p>A DOMO® Allround é um produto multifuncional que pode ser utilizado por qualquer município ou clube.</p><h3><b>Económico</b></h3><p>Produto 100% polipropileno, preenchido com areia e a fibra de relva é fibrilada. Trata-se de um produto bastante económico.</p><h3><b>Superfície de jogo uniforme</b></h3><p>A DOMO® Allround tem uma superfície de jogo especialmente uniforme e é concebida com fios de relva 100% fibrilados e encaraculados. O constante rolamento e salto da bola são garantidos por 4 fatores:</p><ul><li>Superfície com alta densidade</li><li>Fibra da relva resistente</li><li>Textura específica da fibra da relva</li><li>Carácter multidirecional da fibra da relva</li></ul>', '', '', '', '', '[]', ''),
(49, 'Banco de Suplentes de 11', 20, 33, '1499006727Banco_de_suplentes2.jpg', '<p>Disponível com 4, 6, 8, 10 e 12 lugares.</p><p><br></p>', 'Vertente Móvel', 'Disponível', '1363253289bc.jpg', '<p>Também disponível com um sistema de rodas para que tenha a vertente móvel.<br></p>', '[]', ''),
(50, 'Baliza de Futebol de 11', 20, 32, '234199702Baliza_de_Futebol_de_11.jpg', '<p>Baliza em alumínio para futebol de 11, com postes e trave de secção redonda (120mm). Reforçada interiormente e com uma ranhura para fixação dos ganchos em PVC, incluindo os mesmos e base metálica para fixação das redes à superfície de jogo.</p><div><br></div>', 'Baliza de Futebol de 11 ', 'Amovível', '1873298425Baliza Amovível de futebol de 11.jpg', '<p>Baliza em alumínio portátil, para futebol de 7, com postes e trave de secção redonda (120mm).<br></p>', '[]', ''),
(52, 'Baliza de Futebol de 7', 20, 32, '1027280496Baliza_De_Futebol_de_7.jpg', '<p>Baliza em alumínio para futebol de 7, com postes e trave de secção redonda (90mm). Reforçada interiormente e com uma ranhura para fixação dos ganchos em PVC, incluindo os mesmos e base metálica para fixação das redes à superfície de jogo.</p>', '', '', '1444317144Baliza Amovível de futebol de 7.jpg', '<p><br></p>', '[]', ''),
(53, 'Baliza de Futebol de 7 Amovível', 20, 32, '1423009743Baliza_Amovível_de_futebol_de_7.jpg', '<p>Baliza em alumínio, para futebol de 7, com postes e trace de secção redonda (90mm).<br></p>', 'Baliza de Futebol de 7', 'Rebatível', '289529199BalizaRebfut7.jpg', '<p>Baliza em alumínio, para futebol de 7, rebatível lateralmente, com postes e trace de secção redonda (90mm).</p>', '[]', ''),
(54, 'Mini-balizas', 20, 32, '627503654Mini_Baliza_de_perfil_retangular.jpg', '<p>Mini-baliza em perfil retangular de alumínio 80 x 40 mm.</p><p>Disponível nas dimensões: 120 x 80 cm e 200 x 100 cm</p>', 'Mini-baliza ', 'Perfil redondo', '890140991Mini Baliza de perfil redondo.jpg', '<p>Mini-baliza em perfil de alumínio, secção redonda (90mm).</p><p>Disponível nas dimensões : 120 x 80 cm e 200 x 100 cm.</p>', '[]', '');

-- --------------------------------------------------------

--
-- Table structure for table `prod_badge`
--

CREATE TABLE `prod_badge` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `badge_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_category` int(11) NOT NULL,
  `project_subcategory` int(11) NOT NULL,
  `project_image` longtext NOT NULL,
  `project_description` longtext NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `other_image` longtext NOT NULL,
  `description` longtext NOT NULL,
  `related_products` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_category`, `project_subcategory`, `project_image`, `project_description`, `title`, `subtitle`, `other_image`, `description`, `related_products`) VALUES
(2, 'Project Name', 17, 18, '1909066301destaque-varioslide-spro.jpg', '<p><label>Project Description</label><br></p>', 'Title', 'Sub Title', '531151057relva-de-hoquei.jpg', '<p>Description<br></p>', '[\"4\",\"7\",\"9\"]'),
(5, 'Project Name', 17, 18, '394967354equipamentos-desportivos.jpg', '<p><label>Project Description</label><br></p>', 'Title', 'Sub Title', '1973878458relva-de-hoquei.jpg', '<p><label>Description</label><br></p>', '[\"4\",\"9\"]'),
(6, 'Solverde', 17, 24, '1843267243golfe-1.jpg', '<p style=\"margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">A <b>Solverde</b>, também conhecida como <b>Solverde Casinos & Hotéis</b>, é um grupo português fundado em 1972 por Manuel de Oliveira Violas, sob a designação social Solverde - Sociedade de Investimentos Turísticos da Costa Verde S.A. Atualmente detém a concessão de cinco <a href=\"https://pt.wikipedia.org/wiki/Casino\" title=\"Casino\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">casinos</a> em Espinho, Algarve e Chaves e explora quatro unidades <a href=\"https://pt.wikipedia.org/wiki/Hotel\" title=\"Hotel\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">hoteleiras</a> em Portugal.</p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Em Março de 2007, o Grupo Violas SGPS, maior acionista, lançou com sucesso uma <a href=\"https://pt.wikipedia.org/wiki/Oferta_P%C3%BAblica_de_Aquisi%C3%A7%C3%A3o\" class=\"mw-redirect\" title=\"Oferta Pública de Aquisição\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Oferta Pública de Aquisição (OPA)</a>sobre a Solverde, a 17,50 euros por cada acção, com o objetivo de controlar o restante capital e retirar a empresa turística da bolsa de valores.<sup id=\"cite_ref-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap;\"><a href=\"https://pt.wikipedia.org/wiki/Solverde#cite_note-2\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[2]</a></sup></p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Em Setembro de 2017, a Solverde abriu ao público o seu «sexto casino» do grupo no endereço <a rel=\"nofollow\" class=\"external text\" href=\"http://www.casinosolverde.pt/\" style=\"color: rgb(102, 51, 102); background-image: linear-gradient(transparent, transparent), url(\"data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22%3E %3Cpath fill=%22%23fff%22 stroke=%22%2336c%22 d=%22M1.5 4.518h5.982V10.5H1.5z%22/%3E %3Cpath fill=%22%2336c%22 d=%22M5.765 1H11v5.39L9.427 7.937l-1.31-1.31L5.393 9.35l-2.69-2.688 2.81-2.808L4.2 2.544z%22/%3E %3Cpath fill=%22%23fff%22 d=%22M9.995 2.004l.022 4.885L8.2 5.07 5.32 7.95 4.09 6.723l2.882-2.88-1.85-1.852z%22/%3E %3C/svg%3E\"); background-position: right center; background-size: initial, initial; background-repeat: no-repeat, repeat; background-attachment: initial, initial; background-origin: initial, initial; background-clip: initial, initial; padding-right: 13px;\">www.casinosolverde.pt</a><sup id=\"cite_ref-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap;\"><a href=\"https://pt.wikipedia.org/wiki/Solverde#cite_note-3\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[3]</a></sup>, um investimento que terá rondado os 2 Milhões de Euros, criando cerca de 40 postos de trabalho na cidade de Espinho, sede do Grupo.<sup id=\"cite_ref-4\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap;\"><a href=\"https://pt.wikipedia.org/wiki/Solverde#cite_note-4\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[4]</a></sup></p>', '', '', '', '', '[\"13\"]'),
(7, 'teste', 17, 40, '1028559784logo_sports_labs.png', '<p>rere</p>', '', '', '430319079WP_20160720_10_56_55_Pro.jpg', '', ''),
(8, 'polidesportivo teste', 17, 41, '1110091726WP_20160803_16_13_15_Pro.jpg', '<p>polidesportivo de teste</p>', 'isto é um tesge', 'teste2', '1969202530WP_20160805_15_18_55_Pro.jpg', '<p>isto é um teste 3</p>', '[\"4\"]'),
(9, 'Parque Florestal', 17, 41, '1972859660WP_20160715_12_42_53_Pro.jpg', '<p>Domo Slide X - Vila Real</p>', '', '', '', '', ''),
(10, 'gdfg', 17, 24, '', '<p>fdsfsdffd</p>', 'Dolor sit dolor illo facilis facere dolorum quos veniam et veritatis atque autem iste quisquam ad co', 'Sub Título', '905397633Capture.PNG', '<p>fdsfdfsd</p>', '[\"7\"]'),
(11, 'testing', 17, 24, '[\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(1).png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(2).png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(3)5.png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(4)5.png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(5)5.png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(6).png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(7).png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(8)6.png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(9)6.png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(10)6.png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(11).png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(12).png\",\"E:/xampp7/htdocs/domo_2/admin/assets/images/projects/Screenshot_(13)5.png\"]', '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Theas</font></font></p>', '12 image', 'Sub Título', '264294512Screenshot (10).png', '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">sdas</font></font></p>', '[\"15\"]'),
(12, 'gdfg', 17, 24, '[\"Screenshot_(1)2.png\",\"Screenshot_(2)2.png\",\"Screenshot_(3)7.png\",\"Screenshot_(4)7.png\",\"Screenshot_(5)7.png\",\"Screenshot_(6)2.png\",\"Screenshot_(7)2.png\",\"Screenshot_(8)8.png\",\"Screenshot_(9)8.png\",\"Screenshot_(10)8.png\",\"Screenshot_(11)2.png\",\"Screenshot_(12)2.png\",\"Screenshot_(13)7.png\"]', '<p>dsdasda</p>', 'Sed eu', 'Sub Título', '1078903137Screenshot (4).png', '<p>dfgdfgdf</p>', '[\"15\"]'),
(13, 'new testing', 17, 40, '[\"Screenshot_(1)4.png\",\"Screenshot_(2)4.png\",\"Screenshot_(3)9.png\",\"Screenshot_(4)9.png\",\"Screenshot_(6)4.png\",\"Screenshot_(7)4.png\",\"Screenshot_(8)11.png\",\"Screenshot_(9)11.png\",\"Screenshot_(11)4.png\",\"Screenshot_(12)4.png\",\"Screenshot_(13)10.png\"]', '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ss</font></font></p>', 'Dolor sit dolor illo facilis facere dolorum quos veniam et veritatis atque autem iste quisquam ad co', 'Sub Título', '1242005865Screenshot (10).png', '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">sasdas</font></font></p>', '[\"7\"]');

-- --------------------------------------------------------

--
-- Table structure for table `project_img`
--

CREATE TABLE `project_img` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `slide_id` int(11) NOT NULL,
  `text_1` varchar(100) NOT NULL,
  `text_2` varchar(100) NOT NULL,
  `text_3` varchar(100) NOT NULL,
  `text_link` varchar(255) NOT NULL,
  `slide_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`slide_id`, `text_1`, `text_2`, `text_3`, `text_link`, `slide_image`) VALUES
(2, 'O produtor/instalador com mais campos certificados', 'Campos certificados', '11 campos certificados FIFA<sup>®</sup>em Portugal', 'http://bitsclan.com', '127028991slider2.jpg'),
(3, 'QUALIDADE!', 'DOMO<sup>®</sup> Varioslide S Pro ', 'Centro de Formação do SC Braga', 'http://google.com', '1643083273slider1.jpg'),
(5, 'INOVAÇÃO!', 'Campo do Calvário - S.C. Vila Real', 'FIFA QUALITY PRO - Naturafill<sup>®<sup>', 'www.google.com', '1447893310slideCalvario.jpg'),
(6, 'Relvado sem enchimento', 'DOMO<sup>®</sup> Ascari 25nf', 'Ideal para escolas e polivalentes recreativos', '#teste 2', '2105709571WP_20160504_12_45_54_Pro.jpg'),
(7, 'Enchimento de cortiça', 'DOMO<sup>®</sup> NATURAFILL', 'Mais fresco. Maior drenagem. Absorção de impactos.', 'www.google.com', '140877750dcd.png'),
(8, 'NOVIDADE! ', 'DOMO<sup>®</sup> Fleur', 'Jardim e Lazer', 'www.google.com', '2077418288slideFLEUR.jpg'),
(9, 'Assistência', 'Manutenção', 'Todo o tipo de manutenções e reparações', 'www.google.com', '765994738Manutenção.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`badge_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `prod_badge`
--
ALTER TABLE `prod_badge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_img`
--
ALTER TABLE `project_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `badge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `prod_badge`
--
ALTER TABLE `prod_badge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project_img`
--
ALTER TABLE `project_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
