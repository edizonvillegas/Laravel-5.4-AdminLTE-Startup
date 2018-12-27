-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 04:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice01_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `userRandomId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `userRandomId`, `firstname`, `lastname`, `gender`, `email`, `birthday`, `address`, `phone`, `photo`, `status`) VALUES
(4, 'FYyScRhpH3wUkTxzGkbQgwU0iSiEB6kaXcrx2m6vw1EKVUPCl6Rykbf7TYxG', 'Rick', 'Binsl', 'male', 'hagenes.eino@harber.com', '2001-08-07', '42487 Fadel Ways\r\nMosciskiberg, IL 47209', '579.228.4168 x2717', 'storage/uploads/employees/default/1545882849.jpg', 1),
(5, 'vEqoWllTG8aCqrH4W4NNmjwJB8dYurkJolC26DVypt3ixd4VRNunFbJyUFCw', 'Elouise', 'Johnson', 'female', 'danika.leffler@gmail.com', '1978-09-28', '4472 Juanita Views\r\nPort Rodberg, CA 87110!', '393-734-8904', 'storage/uploads/employees/default/1545880817.jpg', 1),
(6, 'zGlNqMNOw7D0uZZmXSakSaa0FRmC7URDInMpA3qIq6kaykqZyZ8EVz2Sd3ly', 'Helen', 'Jast', 'female', 'oconner.maryam@hotmail.com', '2012-08-04', '3533 Blake Park Apt. 138\r\nMertiemouth, MI 80324-6630', '(583) 337-2864 x52907', 'storage/uploads/employees/default/1545880895.jpg', 1),
(7, 'LGbZY9hKaKWN07MbsdVLBlLYcOFx3N6BL2gzyBKdAbA9rVK9txsjBvO2WrqE', 'Myrtis', 'Gaylord', 'female', 'adelle.roberts@kessler.com', '2000-03-18', '62021 Carissa Row Apt. 997\nLake Jaquelin, UT 28437', '724-933-4502', '', 1),
(8, 'J8IyesemQRMNwZB4V2CKMaUVO72ixtHPj7Ez8PTTYNyn73HUDqkSEa0zkfbl', 'Marcelino', 'Howe', 'male', 'mkassulke@hotmail.com', '1979-12-22', '286 Hauck Green Suite 227\nNew Dewayneburgh, AL 79773-0654', '719.890.8176 x8566', '', 1),
(9, '6w4UtgfDs82O7Hs8q118sZ5LBkFdmyiQrpdpcTdZakyksEdqavw6v3tHEWwT', 'Bernita', 'Durgan', 'female', 'antonia.murazik@auer.com', '1991-07-01', '740 David Union\nGrantport, ME 27146-5316', '(912) 521-8833', '', 1),
(10, '5RUiwuxywDqEymzpzAXXyCEv6Abb50dFrRWB6uCStFmhIq0mghcO7y4UQoSK', 'Garry', 'Dach', 'male', 'fay05@hotmail.com', '1981-07-11', '2514 Daugherty Wall\nSouth Hester, NC 80697', '+1-620-677-9166', '', 1),
(11, 'Yc4iiQckB3GlhQqva67wQGqNh8gTAfq898jaQn37p1EI9NP4ochAF5ekhqU4', 'Eldon', 'White', 'male', 'hermann.leuschke@yahoo.com', '1974-06-28', '205 Leif Parks\nWatersstad, TX 03200', '1-825-972-4042 x3929', '', 1),
(12, 'TjB8d8guZs81bNTlhLYwgVQ6u3eZuMtSJdxv1LqkSJI2PvmCoCKvO6Ty9NBY', 'Keshawn', 'Predovic', 'male', 'hauck.thurman@kohler.com', '2006-05-17', '531 Crona Pass\nEast Susie, MO 69448-3640', '848-755-6361 x73494', '', 1),
(13, 'bPmxCEBhzVmTgcPf1zOmVwZ87pMLiwk1NA4Ro2MvbO8CrZc31qrIoEPFWSuR', 'Bette', 'Roberts', 'female', 'tressa20@von.com', '1976-12-13', '17682 Mosciski Ridges\nMertzmouth, ME 86391-0107', '825.586.4870 x9815', '', 1),
(14, 'FTv1aKU2hoh19xd1pZmbmwPbHtyM1QVgw46HcPQxA7lScQBLg5Tqp4jHFB6L', 'Mertie', 'Russel', 'female', 'vkoelpin@hagenes.com', '2006-04-24', '40265 Auer Stream Apt. 589\nCamillefurt, TX 65221', '338.576.4225 x7192', '', 1),
(15, 'Hhh9mq26Yyx69t7LX7Ip7QybpaThQA6W6K35U1NRWFRFscT2Jc7Vc8UcrIPL', 'Coy', 'Heidenreich', 'male', 'hamill.hettie@gmail.com', '2009-06-11', '805 Fahey Lake Suite 152\nDanielaland, WA 25922-3494', '1-639-810-6597 x3792', '', 1),
(16, 'V9yWHZQHcMmQDYnHRmIc7K6mdtPchpFp3H7GTUzUZa9D58XIF7feSmfw6wae', 'Alivia', 'Douglas', 'female', 'ellie.lueilwitz@klein.biz', '2003-06-18', '6715 Mae Wells Suite 040\nSouth Horaceland, TX 74859-7481', '947.236.9202 x913', '', 1),
(17, '8PayHCL14nkKK62OHTEX9xb1s6OaIjgPv3Sy9wnoM264F0cvUuZihIIuPWEm', 'Ronaldo', 'Bayer', 'male', 'patrick.pollich@hotmail.com', '1979-12-26', '51105 Elsa Squares\nSouth Malvina, OR 10989-7392', '+1 (836) 545-0924', '', 1),
(18, '4p0keXWJI1VY2KxP60Z5SAoM7SqYHZaQSQmNTjFbODntcYkG7MTJCzadxp1s', 'Davonte', 'Parker', 'male', 'brice@yahoo.com', '2000-01-14', '704 Oberbrunner Viaduct Suite 831\nPort Kamille, MD 11684-4818', '+1-387-712-9151', '', 1),
(19, 'ADfaJ8ZX819aNatG9YZeCzPZitoV00T4ECaxKzniL9U9o5fK1fRQC6Ct6mbc', 'Fatima', 'Orn', 'female', 'wolf.wiley@yahoo.com', '2013-04-21', '92190 Loyce Divide\nEast Christinaberg, VT 81976-8731', '+1 (701) 470-7248', '', 1),
(20, 'rBOvWMw6vgy8W0FqYyET9mQCZw4dlkDxHYV4grL9IkA0oMwPAQt3NjlLAxw9', 'Freida', 'Rath', 'female', 'mclaughlin.geoffrey@gmail.com', '1970-03-28', '6610 Chaya Freeway\nNorth Glennie, WY 89440-0936', '+1.556.518.0135', '', 1),
(21, 'mw2N1fjTfKKtffaaje3ZLZEXfUEwt3miP4SzQ8cetKBIwQrbeBod0r9OQPCM', 'Kianna', 'Halvorson', 'female', 'sporer.rollin@jacobi.info', '2004-04-09', '7981 Berge Burgs Apt. 353\nPort Carli, WV 15879', '291-844-5397 x0000', '', 1),
(22, 'cMdEvIrA490uqNcxQcnoQyS7liYc98UhRnUbEuUzSHPQXBI4iSRTsOXLJqQB', 'Adolfo', 'Terry', 'male', 'bethel.koepp@hotmail.com', '2005-06-06', '724 Satterfield Glen\nNew Jakaylaland, MT 57884', '236.776.9241', '', 1),
(23, 'YUUf6hOqKrnPpxQHalyOgUnzmXjkIVVd9W1JpUfuhoShlkRtvPtkWCq7oWY8', 'Makenzie', 'Tillman', 'female', 'herman.alexis@sawayn.info', '2003-05-27', '683 Crooks Crest\nNorth Carissachester, DE 71750-7394', '375-678-3887 x3807', '', 1),
(24, 'B8StEfyrmEBDEbb9g8kkP9uJk6opbZQmmZQh3x22KC5syyjbmCDyBkLr1lMj', 'Easton', 'Mitchell', 'male', 'rolando97@bednar.com', '1980-10-23', '349 Jacobson Throughway\nPort Issacville, LA 68519-9459', '576.895.2200 x5098', '', 1),
(25, '9v49Zp7KYPz0bnE3F68LGphePtZJDXdKyYgOLayj2Bt9b2mjZ4IDRo8Nl6yv', 'Noemie', 'Ankunding', 'female', 'jaunita58@gmail.com', '1973-12-28', '3784 Devin Fort\nDarrionside, MO 71343', '590.864.7553 x7651', '', 1),
(26, 'RUnJySMGRQUBOIh7eOMnnAz1EhdpsmEEu0PbI1Oj66N8zYrjsFeOsrxu5zod', 'Cruz', 'Schumm', 'male', 'meta.nader@bergstrom.com', '1994-03-16', '12845 Jairo Summit\nSouth Sophiaville, WY 42259-2204', '1-896-418-8549 x4737', '', 1),
(27, '8Ts9h19bxaFLnM4mNggW4hM1pIHFxNEy08zKOb8fJbPblSnhsEHPjzv2N6gC', 'Mauricio', 'Feeney', 'male', 'rey83@schaden.com', '2001-02-26', '967 Lubowitz Shores Suite 761\nEast Carminehaven, MI 41092-9749', '636.899.6620', '', 1),
(28, 'R9cDzcq80RzPyiqc9GlmxTTWwrm8bT92IZ2wh8mXx26OMy0UCUBJWkWCcAsa', 'Katlynn', 'Zboncak', 'female', 'lakin.kareem@yahoo.com', '2017-04-20', '507 Daugherty Alley Apt. 083\nParkerfort, NE 51812', '1-451-234-0311', '', 1),
(29, 'TvKymHJSa3pWG1NEPyXyiPxsnxLIo6V6znaefYHqQ8fkOaR19jV9JBwJV1jc', 'Elenor', 'Von', 'female', 'flatley.jamir@ortiz.com', '2009-08-25', '285 Kuvalis Point Apt. 069\nRachaelfort, KY 15890', '+1-403-718-5716', '', 0),
(30, 'H9Tv5xEcmhzNlGHNToiHCrywxhh37YTAHUPk3zBuETI9MP8z2gWq1hz6QlvL', 'Oscar', 'Schneider', 'male', 'cesar.shanahan@hotmail.com', '1986-06-08', '64245 Daron Terrace\nWymanfort, PA 87627', '1-567-771-4388', '', 1),
(31, 'ySRhBVsQncu2PjBxIHApmLCBHY1X1wD4mCZCTe4jgN8t0zzfO8d20uG21K4d', 'Jennie', 'Gaylord', 'female', 'pietro.haag@gmail.com', '2000-12-02', '2634 Oda Squares Suite 490\nNew Mikel, CT 68781', '867.551.9769 x6083', '', 1),
(32, '0x0k3962rxp78uq5yYS1gSgAm70EYddbBXDs8EnmBbEGMJj3XKog7w0ymBpe', 'Lexie', 'Hilpert', 'female', 'qberge@yahoo.com', '2004-01-09', '74405 Koepp Crossing Apt. 184\nWest Ethaview, MO 36211-5106', '1-374-427-7287 x52564', '', 1),
(33, 'i8MyARIU7JcpHlWwBAGwSaQd6udpq3ZFMCsj5qACRxpjhSSQgapPPHGtB2Nw', 'Paris', 'Denesik', 'male', 'meta60@green.com', '1975-10-13', '1719 Coleman Lakes Suite 174\nNew Eldontown, MA 19238-3210', '(795) 943-3869 x5459', '', 1),
(34, 'OpufuvlNhOX4gCZJmz3qeif5Drmd7eCgYsiWcxdPABeYX04p6YWBIcVlUEjN', 'Mandy', 'Mueller', 'female', 'nettie.borer@gmail.com', '2004-07-06', '65074 Hackett Meadows\nLake Alfonzoland, NH 44012', '1-292-215-3599 x96553', '', 1),
(35, '5rZEHeqWgy6ZjeUuknW0FkorR1OOAV2LiUEhvS0uqJ312IjEIElNTIJoyfIV', 'Lenna', 'Gerhold', 'female', 'sluettgen@trantow.com', '1979-06-17', '216 Albert Route\nBrycenbury, SC 44253', '1-612-618-3186', '', 1),
(36, 'uEopUXMD1WeUrXnNSMxz9j8SKjLwUQUzpoGY2N5S3DTuOxvPmzocSB5uoekv', 'Donato', 'Bruen', 'male', 'oreichel@dickinson.com', '2004-02-16', '8243 Huels Walks\nWest Fredaport, AL 66348', '1-713-937-1072 x6851', '', 1),
(37, 'YrmIqZ8c6FV1GLTnJROpgVJNzp9oj6raGz9uELOr2d91OWLaDGrS04tXTb0J', 'Fleta', 'Medhurst', 'female', 'kiana79@gmail.com', '1995-10-14', '234 Christine Vista\nRoscoemouth, TN 89981-4346', '1-872-968-7629 x8766', '', 0),
(38, 'Z6F32Wsppaf5SYRVNyobQol0S7Da0sOjmdBq1FKlnaHNS1Irwp1JfSSpNuzP', 'Patricia', 'Turner', 'female', 'thea72@hotmail.com', '1974-07-04', '825 Dickens Track\nNew Buford, WV 28863', '1-221-577-2325', '', 1),
(39, 'e82bjG6U0FCua3dgXLADmri5gRzOnIiJ2BLHbAIfBPWiYzn1XWpiLjgKhj0F', 'Pearlie', 'Wolff', 'female', 'koepp.callie@yahoo.com', '1980-04-25', '27457 Camryn Gateway\nKuhnview, ID 86372', '221.439.6513 x7024', '', 1),
(40, 'PueLIdT1PpEN43dUVXiZ5Mui31lErdpUDBqZNffpMYFTqvdmGHYy0w9Dkfxs', 'Marina', 'Ferry', 'female', 'ykozey@yahoo.com', '1983-08-07', '38706 Pouros Street Suite 412\nSouth Myrnaside, NJ 20246', '+1 (854) 669-3203', '', 1),
(41, 'eQ58l4lr52WdpyXRyUcgoc3uD41AAXU0ZNWYWfxbqjq6PppbPojhpuFqcJSr', 'Lemuel', 'Kling', 'male', 'fcronin@hotmail.com', '1980-08-11', '239 Kuhn Flat\nPort Dewittbury, AL 97459', '(776) 530-7149 x876', '', 1),
(42, 'tStaB2RgvI07BmBSXlT3ahlSQ56NtaE6pqpl0QP1jEqdeqwVmi0rfN5Ecc3Q', 'Verda', 'Jones', 'female', 'hayley.gislason@maggio.biz', '1989-05-22', '63262 Jaqueline Spur Apt. 767\nEast Karinamouth, NV 28350', '(554) 233-6121 x1390', '', 1),
(43, 'Yc9T6mJSl1swPSfK58LXxGdC1WrMGrWYq4hMIOrqkwzHYWrBErlwWYR2ASR6', 'Morris', 'Mante', 'male', 'dagmar03@gmail.com', '1988-08-11', '370 Armstrong Rue Suite 341\nEast Pinkborough, VA 04138-9519', '1-335-942-5364', '', 1),
(44, '4Rb4zEgCTUOPH5pKNVO668UTZrvJDJFpg35UxuHtSQSTWLJYoKrQncjRAslp', 'Juliet', 'Greenholt', 'female', 'kdietrich@gmail.com', '2004-03-14', '611 Price Burg\nJastberg, DC 89480', '530-204-8795', '', 1),
(45, 'dFyI37C6hnCVN5wiksWygmFo9wN2NDlwmnh9x9lgoShClwkwsjGL6GRjofag', 'Yadira', 'Crooks', 'female', 'fahey.kasandra@hotmail.com', '1994-02-05', '8123 Ivy Stream Suite 704\nLeliaborough, AK 35428-5019', '916.390.3587 x2127', '', 1),
(46, '656JbusEFdESjU4JlAjCj1IsOi20PkUOF99wPO8B0stol0SCceP06pokHEJC', 'Adrianna', 'Hegmann', 'female', 'hhegmann@yahoo.com', '1991-01-06', '74575 Urban Locks Apt. 097\nNew Audreanneshire, LA 48893-9542', '1-251-561-0121 x035', '', 0),
(47, 'Mv28lKyk4ORQvylxm6mOEO2n76aIX4Ez9a6x4CFHCG1ZegJfPB84NSOo3mFB', 'Vincenzo', 'Roberts', 'male', 'kschmitt@hotmail.com', '1993-10-30', '6665 Marcellus Prairie Suite 556\nPort Bernadette, IA 11805-5683', '(387) 920-5701 x5657', '', 1),
(48, 'zCzL5D9GfpviwnHXICOE4eMlRqnpndLUuMsUwpJZLDlco66pkcrps5GHGDsT', 'Berniece', 'Jenkins', 'female', 'wspinka@hotmail.com', '2017-10-11', '96619 Carmella Stream Suite 393\nLake Chauncey, MD 45367', '1-647-637-2263 x238', '', 1),
(49, 'jCItp5bWO4BCIRgzX1cos9BDrnlxIxvPukSIOsbNGZMdhJXOSu7aM9zAztUL', 'Ramona', 'Prosacco', 'female', 'weissnat.gertrude@yahoo.com', '1991-02-13', '5856 West Glen Suite 241\nDavidberg, GA 75649', '+16619928166', '', 1),
(50, 'OcfCAnZdzZ64cHYudP40DCAjTbolRonHcTnlDbx34Ll6S9YYjOr6oCX83p0y', 'Stanton', 'West', 'male', 'russel.moore@hotmail.com', '2013-03-25', '161 Pamela Viaduct Suite 871\nWest Jaimeton, NE 47366', '440-571-5477 x02903', '', 1),
(51, 'aUxk5HHmt4e0NEBtuDSgDZtVex3pIDixPOQkH1sK6MhwI1AYh2OVCqZB0eQA', 'Lauretta', 'Bernhard', 'female', 'mcdermott.ofelia@beatty.com', '2009-09-20', '2698 Hermann Stream Suite 089\nPort Genevieve, IN 03060', '759.865.7354', '', 1),
(52, 'atIVkKs9XUnhp9A8SSp2kmNSF8gGMx1zFdmHyT82UHXC2f6wKIbAeGVI1CFB', 'Ella', 'Konopelski', 'female', 'barton.ernest@tillman.net', '1975-01-16', '53769 Sawayn Locks\nEast Claymouth, NE 17540', '1-276-894-6422 x020', '', 0),
(53, 'NRpa5LcYADr7cl087RbOOP5T3bIZKcQi9hWxImXTI21h2KMKtWKCz6kqtrtd', 'Madalyn', 'Sipes', 'female', 'florine.wehner@hotmail.com', '1977-03-18', '592 Gutmann Tunnel Suite 668\nDickiburgh, IL 60342', '(713) 714-3925', '', 1),
(54, 'DDdH3IvPBbhesrsHpOBTuRu8aHGs4ewoKISoSxFUPtxDjpvPslPNBK2L5qj3', 'Karlie', 'Shields', 'female', 'hagenes.bennett@bahringer.org', '1996-01-11', '540 Schoen Cape\nEast Irving, MN 51267-7262', '997.798.2679', '', 1),
(55, 'JUzfymI9CAGKTkcWq2g1JyZP9qHcrU9DLPeYvr1PlSAAGjTlJd92s9y8yLFv', 'Hyman', 'Lakin', 'male', 'morton04@hotmail.com', '1973-05-15', '9778 Quigley Summit\nNew Kole, TN 23171', '1-409-629-8532 x594', '', 1),
(56, 'AkVakNr6ezezNCzXluJDkr4l1s28yAnOtkfvDqlJXsfOBempPTJDWVFBjyWG', 'Jonas', 'Schmitt', 'male', 'monahan.lonie@yahoo.com', '2009-06-20', '124 Rippin Lakes Apt. 374\nLake Dexterport, NH 05208-4143', '1-395-747-5723 x669', '', 1),
(57, 'PJ758fZjo6smond7PMg0uUqAo8gpZf8HjEdBac0TlOKs05i9HppnxjBMexya', 'Ryleigh', 'Bins', 'male', 'franecki.jayda@hammes.com', '1971-06-10', '17718 Tom Plaza\nPort Catherineport, TX 40348-6099', '(853) 709-7286 x917', '', 1),
(58, '3LUnz5BSsJrf675DKL4fwAIinw3YbqOoFYnsfdDMpqNu4WLKzdjY9oqxeAwB', 'Eric', 'Harvey', 'male', 'schiller.mariela@hotmail.com', '1995-10-02', '935 Earline Club Suite 682\nKshlerinton, MA 30277', '898-990-7984', '', 1),
(59, 'KM19Yxn1yqLL84iYETdrY4Wi9mT79vs4ltrivbPO84bl7qIR1kmNFUiJI40d', 'Larue', 'Hand', 'male', 'lori.kshlerin@gmail.com', '2005-08-24', '19562 Beahan Loop Suite 786\nConnorberg, FL 66621-8251', '+1-482-881-9312', '', 1),
(60, 'cz0KWI2uVJhrdn6TV7M8Ym3nhLvBFVeR3pGqCpxKuHigOxY7JfWWD6g4UjWw', 'Nichole', 'Smith', 'female', 'rchamplin@hotmail.com', '2009-11-30', '1756 Beier Lane Apt. 728\nLake Estella, OR 87134-2197', '+1 (540) 487-1105', '', 0),
(61, 'fRV62PNi7IqLmuP0f9c1b5uZsfq7brtlHNSJ5mOP2nTomV2BgS87FtXagOVY', 'Terrance', 'Crooks', 'male', 'hartmann.mable@hansen.info', '1989-05-05', '36107 Afton Circles\nPort Genesis, AK 76083-5540', '612.908.6354', '', 1),
(62, 'MWdwHPqhaAmLaRzTrxR2udVNh2FXyyMEC0ihuBBhmGDnMKR8DejCyXMWahwF', 'Kristina', 'Davis', 'female', 'garland.shanahan@yahoo.com', '1989-10-11', '72315 Bernhard Lane Apt. 157\nSouth Ryleebury, MA 28400', '1-881-755-3585 x10608', '', 1),
(63, 'BuU7Tmdd6bKCKDjRNhoWsE17XfXc4v48oW6pu05thTvbhdwLPwL5Qu7WuVpe', 'Kamryn', 'Yost', 'male', 'antonina.frami@gmail.com', '1993-11-27', '6755 Freddy Row\nNorth Joshuashire, TN 01257-1713', '(243) 834-5533', '', 1),
(64, '2S1EThHq4qa1WS0iDZ6ZUh3jlxUrSQVVmqtSbMFDmWXIe8vn0ky4clAMRZK4', 'Leo', 'Hartmann', 'male', 'nikolaus.preston@becker.com', '2002-09-20', '836 Goldner Walks Suite 478\nLeschchester, MD 07335-9626', '1-250-402-6445 x4286', '', 1),
(65, '2A0mYWaSpttfvUGTYk7TqxmCJz5Zs5RoFoIXtO4dwSFGYfFQhGtbsocvYn9M', 'Jose', 'Durgan', 'male', 'moore.shea@trantow.com', '2013-04-03', '914 Schroeder Meadow\nNorth Melvina, SC 46838-6617', '(763) 264-1700', '', 1),
(66, 'q33luN8DKcBaKIquB4cp0R5KXsUKj0xs34jEezhLvE2BCNvC3qR3bpB2d0FS', 'Brandon', 'Lockman', 'male', 'ylehner@yahoo.com', '2018-02-18', '576 Mckenzie View Suite 829\nPort Vanchester, TN 02926', '340.646.2401 x51243', '', 0),
(67, 'xP3BuFvsNSXHd2cVzlaeqYOT8CE3zPHpfxMZgMrWjDVc4oUSwYpGHyHcDQmZ', 'Casper', 'Kemmer', 'male', 'funk.marquise@gmail.com', '2008-05-18', '877 Max Motorway Suite 094\nEast Agustinamouth, AR 85746-4972', '1-246-214-8413', '', 1),
(68, 'fTfR4ZPoSPFTt3m4VIQ08mAVzoOWvuL32rymEwILGboPUv2gPRQJ3tYRNhGr', 'Hillard', 'Lubowitz', 'male', 'mturner@hilpert.biz', '1995-05-28', '2782 Kling Harbors\nPort Jaylinville, NJ 05246-8490', '369.794.9592 x1509', '', 1),
(69, '8Bue6OFz1Rw3Yb5TLR47ahxASCqjyunkQEuPPspke2Hr0OQJbLuyDigKsmlg', 'Krystal', 'Maggio', 'female', 'paufderhar@quigley.com', '2005-09-10', '965 Benton Orchard\nEast Helmerburgh, MA 31170', '937-205-8872 x00735', '', 1),
(70, 'bR2eabOpMo6Y33zV1DzUdesBjUf7akOMrVuq1AuKmpmKLtEHjZyGmZyE9SJH', 'Caesar', 'Dach', 'male', 'kemmerich@yahoo.com', '1998-01-02', '5273 Kuvalis Port\nSouth Hattie, FL 32390-2249', '250-506-0431 x7609', '', 1),
(71, 'SVX38f3ylNJA9doOUSfpf8VVnTs47DWSfS7XLBTL0VUQUMIupF9yXNkKXKQ7', 'Francesco', 'Harber', 'male', 'jaufderhar@hotmail.com', '2013-11-14', '229 Altenwerth Common\nEast Jenifermouth, MO 58958', '+1-903-868-8659', '', 1),
(72, '0X40O9GDEj8lGLw04Eig1sJqCkpo5H3rdctrL8dwvcodrsLgDIUQBQdC5Q3M', 'Audreanne', 'Medhurst', 'female', 'lavon62@hotmail.com', '1998-03-21', '87499 Jane Falls Suite 729\nSouth Thalia, AR 67079', '(275) 784-4693 x49007', '', 1),
(73, 'XB6aJMBKVCVEi079jucoS6Trg4BRvFwAyASAial4KcpTnR19B3mmETcXpUWn', 'Hertha', 'Rutherford', 'female', 'nikolaus.shad@moen.com', '1991-09-30', '5720 Cummings Loop\nNew Samir, WI 52586-9332', '(908) 290-6825', '', 1),
(74, 'Atm57k7D6Ia0JZkHw4EX8YPnbTOtWroKpL4SGwDwNl7Uqr0xQwMC5t1d8sFx', 'Vince', 'Mills', 'male', 'fvandervort@bechtelar.com', '1993-02-18', '75730 DuBuque Mills Suite 422\nWest Claudia, DC 94512-0248', '(624) 685-8458', '', 1),
(75, 'DbmHk4R93XRr83J1H5nmL7kA8IkBDiPcbQ1sfqPPztVbc30JMhmXw1QN3KMt', 'Marjorie', 'Bauch', 'female', 'audrey43@murphy.com', '1996-07-06', '2393 Ortiz Square\nPort Antonetta, ME 08638-4228', '+1-860-270-2359', '', 1),
(76, 'afrTtpxCX4pm6objutg8hm1JhE6PiOquneZko1Djd33kbdHrWhSlel5HrAFs', 'Jacklyn', 'Welch', 'female', 'nathanial06@hotmail.com', '1986-06-23', '546 Volkman Harbors\nLempimouth, SC 72728', '625-500-5709', '', 0),
(77, 'OmkPwKewRBXZsFy2HAoJobPaxlnIuc3HMUmE2Y3zgLDI4i7szgKjj9gXETmL', 'Dannie', 'Weber', 'female', 'kihn.keeley@gmail.com', '1976-06-02', '37883 Langosh Wells Suite 394\nLake Seamuston, MT 64911-1962', '1-335-494-4928', '', 1),
(78, 'uwEwSYBmd1A4j1ywyt8hVKy7PtOHBRIdrMWvWYs0CCmoCXyIznnuSS6tsUEz', 'Aimee', 'Lynch', 'female', 'dziemann@hotmail.com', '1995-10-12', '7175 Pollich Vista\nKlingbury, NY 31054', '+1 (892) 336-4472', '', 1),
(79, '3lnMnA7npFo7DatpR6HMoam7gvC9Nm1NqPMm996DIcVv8B0eZoW8Rzm0Jp5r', 'Americo', 'Moore', 'male', 'eino49@koss.com', '1992-04-19', '11605 Enos Neck Suite 510\nNorth Rosettaburgh, VA 39916', '1-847-332-9121 x1758', '', 1),
(80, 'iNfm28iLLcfBf7Aopqkoke7OxKmlecYI6nLj5nPPlmeIkfrPxQdWOvWYfkRe', 'Manuela', 'Mraz', 'male', 'tristin.lubowitz@gaylord.com', '1995-05-09', '81479 Dallas Inlet\nNew Zackeryfort, IL 62065-6578', '905-441-5608 x47342', '', 1),
(81, 'tFvzfz1rDTMpwN1spsOqxFYYRBDUnYgprkLhHkscfwORuwMZ6OKoYq7SzjuL', 'Maynard', 'Wiegand', 'male', 'martine.morissette@hilpert.com', '1995-05-05', '17488 Collier Passage Apt. 766\nPowlowskishire, MD 30828-1746', '+1-229-478-2658', '', 1),
(82, 'hg4B6AueLZIMfCkdj7gL0i2rG5Y2lGicaN36Rt8FigRD6HAPFbsVH84wCr5T', 'Dortha', 'Mills', 'female', 'marks.roger@yahoo.com', '1983-05-15', '997 Kuphal Trail\nGeorgettestad, SC 85251', '638.766.8022 x97881', '', 1),
(83, 'YGLmZj4oyeU9qcnYlhsRYjKXJHhtDTrP5vMpf4K1Jitn7JoOdxEjohe3rPw7', 'Trycia', 'Altenwerth', 'female', 'smith.lafayette@yahoo.com', '2008-06-18', '4886 Joey Court Suite 974\nGloverville, NJ 97982', '413.769.2793', '', 1),
(84, '7OCibaqJW6DYWhw57nrmJ83AYLfuFRLdUxH7l5HfKhU47e42VuRytpptqTa4', 'Cale', 'Hudson', 'male', 'cdaugherty@hotmail.com', '1974-01-01', '84451 Mraz Grove\nSouth Reva, ID 00788', '1-614-622-7698 x266', '', 1),
(85, 'Yp4nTXjan9N2D76YMEPnaMEiw0748cTm7PjKF3mrlzVNrCbwaz7ZnHeSanEG', 'Geovanni', 'Sauer', 'male', 'ariel41@hotmail.com', '1987-12-24', '9680 Pagac Overpass Suite 947\nQuitzonburgh, RI 72720', '687-917-9904 x21239', '', 1),
(86, 'XV5vuiA3AAAQK24TkE5SUiXZWJadgxO3ByLIvp53iAoFnXFCN24xhmjZXv3n', 'Cayla', 'Dietrich', 'female', 'monique.herzog@gmail.com', '1981-06-06', '435 Lindsay Meadows\nRodriguezmouth, ME 87342-5957', '1-707-603-3239', '', 1),
(87, 'ruyzjv1CdlHwhswZaSihSRXqeg0T2W6MyqSqwndMkxQ033x5qR99Zx7eswTQ', 'Kassandra', 'Jones', 'female', 'boberbrunner@gmail.com', '1989-06-19', '5642 Feeney Island\nSouth Jalon, DC 93609', '1-489-364-1208 x3243', '', 1),
(88, 'BLhvsPrv6ZzgVrZRVVwJe2ZFbxuAu3rpJTKKmLADFedKl9g32h5V74CUNdXB', 'Eugene', 'Stroman', 'male', 'bechtelar.newell@koch.com', '1975-08-02', '26774 Annabel Track Apt. 752\nEast Kareem, DC 19048', '+1 (624) 297-9201', '', 1),
(89, 'svfHAb9JJIBKGTrJSfYbZ1FbERbkvPUrBDDEaVnAaKUXYJfwVVnUc7kG1Vlz', 'Deja', 'Runolfsdottir', 'female', 'ckertzmann@hotmail.com', '1995-12-13', '8532 Legros Isle\nRippinmouth, UT 80746', '978.477.5113 x306', '', 1),
(90, 'wNN1utLyzwXjbkVSOPf3loa4bR1jo4S2Jm1cEL9TH1h6Gr2xuUb1ZkwAndPe', 'Jonatan', 'Gleichner', 'male', 'margarete.carroll@kulas.com', '2005-09-02', '552 Pfeffer Tunnel\nNorth Darbychester, MN 23393', '630-838-4588', '', 1),
(91, '5Hf9hSvvnfhEnviiHMaEYSwRhYoEL6eXeUv3pID4TFNheWx66X1ve9SdaoeP', 'Loy', 'Williamson', 'male', 'clubowitz@feest.org', '1984-05-17', '2623 Gaylord River\nNorth Lamarmouth, CA 35771-3002', '+1-307-575-6459', '', 1),
(92, 'HYzFy2L1rsiZy9ZOlze8fDYKdjUkebuI0J8LpSpI11eKgb7zJOTzmzR6WoNJ', 'Hilma', 'Mohr', 'female', 'leda.cummings@predovic.com', '1987-05-20', '82588 Wisozk Ranch Apt. 811\nPort Nayelitown, NC 88645', '1-264-839-5266 x07297', '', 1),
(93, 'esVLDKyisNhvDnsrClRiKkO4fQ4tYy7jWlSYpjCXLbfHBpgHvZ79lsf6Ppok', 'Nico', 'Herman', 'male', 'bmohr@corwin.net', '2015-10-20', '64092 Gladyce Mountains\nBeierhaven, NC 43135', '(279) 361-4566 x241', '', 0),
(94, 'HwBn2108LEiTw91ApyRLI3jyla0Q2tAro2bfLQKoqltjH3qvBhONvG8lkhW7', 'Marietta', 'Renner', 'female', 'delphine67@yahoo.com', '1994-06-09', '336 Alexys Throughway\nFerrymouth, CA 31257-0180', '671.799.9962', '', 0),
(95, 'bcLd12IGplxuySkOTGKExoEhhfATVxmloNRbP2JrSkIOBmqvePNTNLK82s17', 'Adrian', 'Auer', 'male', 'amira43@goodwin.com', '1978-09-13', '4147 Boyle Vista\nHeatherton, NC 81786-1341', '(997) 427-6349', '', 1),
(96, 'PbUC741f6klu6auUvX8TvG3YPFKcbDy9ST73Oxk5qC77gjZxjStLzW0ZIqfs', 'Gideon', 'Reynolds', 'male', 'tremblay.weldon@yahoo.com', '1977-11-18', '618 Laurie Cliffs Suite 380\nSengerland, MI 49918-5580', '+1-432-478-7333', '', 1),
(97, 'ovLtsC8JzR3PEFtd6B2nT03hGR86ekSYCjEMK8Eny5CnqsqBMSZdzFgf4klx', 'Terrill', 'Orn', 'male', 'greta.schneider@will.com', '2006-08-23', '454 Tillman Squares\nLake Charlottestad, KY 03988', '(243) 642-2518', '', 1),
(98, '02mIJM9Ug8pcICqla7u3NqM0Tlzddus63E7eoL0BE4ThWnysZg82hwAUxaeo', 'Darrell', 'Hoppe', 'male', 'ryann.little@nienow.com', '1974-06-23', '8282 O\'Kon Mill Apt. 228\nJakubowskiland, WV 60755', '796.950.0418', '', 1),
(99, '1HboViBMnxQeViPMaqVHTIyXubVodjfWFR3EXt9kN4BG8rZQUe3v51zhTqWX', 'Antonette', 'Zemlak', 'female', 'parker.lizeth@yahoo.com', '1971-09-10', '78359 Legros Keys\nNew Leeborough, CO 01909-3216', '(685) 676-5642', '', 1),
(100, 'MInyO4Ka01K2iYIgg5yrKirRWUOiGSAKF6GjxjH73Gq0Dtd99Ro0ELx9XlFw', 'Hettie', 'Sauer', 'female', 'lee56@yahoo.com', '2002-05-11', '8076 Francis Course\nWest Haley, OH 04435-6851', '1-904-537-2040 x85302', '', 1),
(103, 'dZD6FMCMVgpQNClpwi5wvG7kk8DKb1SXSPIbDHBXoNXJcA9jW5q4QryyTwx2', 'edizon', 'Villegas', 'Male', 'edizonv@gmail.com', '2018-12-26', 'test', NULL, '', 1),
(116, 'BvYuG86D1aWRsaJvPusR77BrAOanepejI34QVgUyOwaHv4pfdE54gsG9p2OF', 'tes', 'test', 'male', 'test@test.comtt', '2018-12-26', 'tt', NULL, 'storage/uploads/1545882407.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2018_12_23_030746_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `position`, `email`, `remember_token`) VALUES
(1, 'edizonv', '$2y$12$de9zSxoH1nZ3WYdlbe7c7.V4C1hzI2LwUCf9aLiMN8LNd18pM0Cg2', '0', 'edizonv@gmail.com', 'cHgYIocfVychuGrsmwXg5NRrSnVocuAXfQz69NfxtK4TTvSib7fYgD9iJlqa'),
(2, 'test', '$2y$10$WZLd9dbGUxJLrUq.4DT65OgPrJx0mJCII2jBu2J2fzAV79POWpsTm', '1', 'test@test.com', 'PmzkO60HaeEsu7SgCpX95y66dVkSJ9GCws03D2IxZ5CbElW8WzDGDUhJ2bTk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
