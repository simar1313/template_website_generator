-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 06:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_data`
--

CREATE TABLE `my_data` (
  `id` int(11) NOT NULL,
  `Page_1_Main_Title` varchar(1000) NOT NULL,
  `Page_1_Paragraph` varchar(1000) NOT NULL,
  `Page_2_Main_Title` varchar(1000) NOT NULL,
  `Page_2_Paragraph` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `font_awesome_img1` varchar(1000) NOT NULL,
  `title1` varchar(1000) NOT NULL,
  `Paragraph1` varchar(1000) NOT NULL,
  `font_awesome_img2` varchar(1000) NOT NULL,
  `title2` varchar(1000) NOT NULL,
  `Paragraph2` varchar(1000) NOT NULL,
  `font_awesome_img3` varchar(1000) NOT NULL,
  `title3` varchar(1000) NOT NULL,
  `Paragraph3` varchar(1000) NOT NULL,
  `font_awesome_img4` varchar(1000) NOT NULL,
  `title4` varchar(1000) NOT NULL,
  `Paragraph4` varchar(1000) NOT NULL,
  `font_awesome_img5` varchar(1000) NOT NULL,
  `title5` varchar(1000) NOT NULL,
  `Paragraph5` varchar(1000) NOT NULL,
  `font_awesome_img6` varchar(1000) NOT NULL,
  `title6` varchar(1000) NOT NULL,
  `Paragraph6` varchar(1000) NOT NULL,
  `page_4_Title` varchar(1000) NOT NULL,
  `page_4_Paragraph` varchar(1000) NOT NULL,
  `Div_Card_1_image` varchar(1000) NOT NULL,
  `Div_Card_1_Title` varchar(1000) NOT NULL,
  `Div_Card_1_Paragraph` varchar(1000) NOT NULL,
  `Div_Card_2_image` varchar(1000) NOT NULL,
  `Div_Card_2_Title` varchar(1000) NOT NULL,
  `Div_Card_2_Paragraph` varchar(1000) NOT NULL,
  `Div_Card_3_image` varchar(1000) NOT NULL,
  `Div_Card_3_Title` varchar(1000) NOT NULL,
  `Div_Card_3_Paragraph` varchar(1000) NOT NULL,
  `Div_Card_4_image` varchar(1000) NOT NULL,
  `Div_Card_4_Title` varchar(1000) NOT NULL,
  `Div_Card_4_Paragraph` varchar(1000) NOT NULL,
  `Div_Card_5_image` varchar(1000) NOT NULL,
  `Div_Card_5_Title` varchar(1000) NOT NULL,
  `Div_Card_5_Paragraph` varchar(1000) NOT NULL,
  `Div_Card_6_image` varchar(1000) NOT NULL,
  `Div_Card_6_Title` varchar(1000) NOT NULL,
  `Div_Card_6_Paragraph` varchar(1000) NOT NULL,
  `Banner_Text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_data`
--

INSERT INTO `my_data` (`id`, `Page_1_Main_Title`, `Page_1_Paragraph`, `Page_2_Main_Title`, `Page_2_Paragraph`, `img`, `font_awesome_img1`, `title1`, `Paragraph1`, `font_awesome_img2`, `title2`, `Paragraph2`, `font_awesome_img3`, `title3`, `Paragraph3`, `font_awesome_img4`, `title4`, `Paragraph4`, `font_awesome_img5`, `title5`, `Paragraph5`, `font_awesome_img6`, `title6`, `Paragraph6`, `page_4_Title`, `page_4_Paragraph`, `Div_Card_1_image`, `Div_Card_1_Title`, `Div_Card_1_Paragraph`, `Div_Card_2_image`, `Div_Card_2_Title`, `Div_Card_2_Paragraph`, `Div_Card_3_image`, `Div_Card_3_Title`, `Div_Card_3_Paragraph`, `Div_Card_4_image`, `Div_Card_4_Title`, `Div_Card_4_Paragraph`, `Div_Card_5_image`, `Div_Card_5_Title`, `Div_Card_5_Paragraph`, `Div_Card_6_image`, `Div_Card_6_Title`, `Div_Card_6_Paragraph`, `Banner_Text`) VALUES
(1, 'All PC Repair ', 'At ALLPCREPAIR We offer fast, professional, friendly and reliable Computer Repair & Laptop Repair Service for all makes. Problem with your PC? Our PC Repair Service will fix it. If your computer runs slow, doesn&#39;t turn on, programs stop working, our C', 'About Us', 'With many years of experience dedicated in computer repairs. At ALL PC REPAIR we have the most experienced and qualified computer technicians that dedicate their time in repairing people&#39;s Laptops or Desktop Computers\nHaving Desktop or Laptop repair s', 'computer1.jpg', 'feature fa-database', 'Database Solution', 'We take pride and care of enhancing database optimisation', 'feature fa-thumbs-up', 'Call Out Service', 'We cover all areas within Bradford. We come to Allerton, Barkerend, BelleVue, Bierley, Bradford Moor, Clayton, Dudley Hill, East Bowling, Eccleshill, Foster Square, Girlington, Greengates and many more!', 'feature fa-thumbs-up', 'MOTHERBOARD COMPONENT REPAIR', 'The Motherboard is the &#39;backbone&#39; of a computer. The motherboard provides the electrical connections by which other components of the system communicate. It also connects the central processing unit and hosts other subsystems and devices. Other im', 'feature fa-thumbs-up', 'INSTALLATION OF WINDOWS', 'Having problems with your PC. Sometimes it&#39;s best for a fresh installation of windows. Remove any malware or corrupted files that exists within your system. At ALLPCREPAIR we specialise in providing fresh installation of different versions of windows,', 'feature fa-thumbs-up', 'MEMORY AND HARD DRIVE UPGRADE', 'Both Memory and Hard Drives are important when it comes to the performance of a PC. The more RAM and Hard Disk space available, the faster the performance will be.', 'feature fa-thumbs-up', 'DATA RECOVERY AND SHREADING', 'We dispose or recover hard drives. For a fee, we will shred your mechanical device. We use a hard drive shredder, which is a mechanical device that physically destroys old hard drives in such a way, in which data can no longer be recovered. Our mobile ser', 'ROUTINE MAINTENANCE AND OPTIMIZATION', 'You need to book an annual PC maintenance, when your computer shows an odd error message or starts running slow. Just like cars, Your computer is no different, it also needs attention. MOT and servicing your car each year, ensures everything is working as', 'computer1.jpg', 'DIAGNOSIS', 'First of all we will diagnose hardware or Software issues, then offer you the free quote and low reasonable solutions.                                                                                                ', 'computer2.jpg', 'HARDWARE & SOFTWARE INSTALLATION', 'We will assist you what hardware or software problem you are having and offer repair services       ', 'computer3.png', 'VIRUS & SPYWARE REMOVAL', 'Virus and malware are common threats to your computer. At virus and malware removal services in Bradford we will remove any unwanted malware allowing your computer to function....', 'Computer4.jpg', 'SOFTWARE LICENSE AND INSTALLTION', 'You should have installed Microsoft Office that can be used for editing word documents or accessing powerpoints or spreadsheets through excel or powerpoint. Other programs to install are up-to date anti-virus programs to defend your system from hackers an', 'computer6.png', 'LIQUID DAMAGE REPAIR', 'We know how frustrating it can be to have your computer damaged through accidental spills. Research has indicated that 20% of....', 'computer7.png', 'Big Data Analysis ', 'Big data analytics examines large amounts of data to uncover hidden patterns, correlations and other insights. With todayâ€™s technology, itâ€™s possible....', 'CALL :: 07768770600 / 08002707275'),
(2, 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'angular.jpg', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'Test Main Title ', 'angular.jpg', 'Test Main Title ', 'Test Main Title ', 'angular.jpg', 'Test Main Title ', 'Test Main Title ', 'angular.jpg', 'Test Main Title ', 'Test Main Title ', 'angular.jpg', 'Test Main Title ', 'Test Main Title ', 'angular.jpg', 'Test Main Title ', 'Test Main Title ', 'angular.jpg', 'Test Main Title ', 'Test Main Title ', 'Banner-Text-Changed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_data`
--
ALTER TABLE `my_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_data`
--
ALTER TABLE `my_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
