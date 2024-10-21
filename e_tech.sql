-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 08:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 NOT NULL,
  `comment` longtext CHARACTER SET utf8 NOT NULL,
  `post_date` date NOT NULL,
  `image` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `post_id`, `name`, `email`, `comment`, `post_date`, `image`) VALUES
(9, 4, 'NRrt', 'dishta@gmail.com', 'dfdbgfgfbgbgh', '2022-11-12', 'NRrt.jpg'),
(10, 4, 'Ethiop', 'ssss@gmail.com', 'hhgbv ggfrederfd fdreedfv bvf Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos. ', '2022-11-12', 'Ethiop.jpg'),
(11, 6, 'sew habt', 'dis@gmail.com', 'gvvf Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos. ', '2022-11-12', 'sew_habt.jpg'),
(12, 1, 'wereda mas', 'bb@gmail.com', 'ggfvdffdrefdfcvdsvchgsdc  vfvfgferewsxasn,sgk  gtrbgjrhgire jfjbhfgefyfvvcffretd fdgvd', '2022-11-13', 'wereda_mastebaberiya.jpg'),
(13, 4, 'Misganaw A', 'dishta@gmail.com', 'sddcderfrd cdewsxaswd cdfe', '2022-11-15', 'Misganaw_Agaute.jpg'),
(14, 7, 'Misganaw', 'ethiomisgie@gmail.co', 'Is it the real post of you?', '2023-12-14', 'Misganaw.png'),
(15, 4, 'Misganaw', 'ethiop.computing@gma', 'This is my first comment on this post', '2023-12-14', 'Misganaw.png'),
(16, 9, 'Misganaw', 'eth@gmail.com', 'This is really interesting post that I did not seen before and forever. keep it up. bravo.', '2023-12-16', 'Misganaw.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `upload_by` int(10) NOT NULL,
  `image` varchar(150) CHARACTER SET utf8 NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `category`, `sub_category`, `title`, `description`, `upload_by`, `image`, `post_date`) VALUES
(1, '', 'C', 'New News  new', 'nkbnjg nbnhgt                                            ', 14, 'New_News_new.jpg', '2022-11-15'),
(3, '', 'C++', 'My News', 'news is a task of journalism to collect, create, and distribut informatio to public ', 14, 'My_News.jpg', '2022-11-12'),
(7, 'Programming', 'C', 'How to start C program', 'Talking about how to start C programming language.', 14, 'How_to_start_C_program.jpg', '2023-12-14'),
(8, 'Programming', 'C', 'This is the first programming ', '<h1>Programming in C</h1>\r\n<ol>\r\n<li style=\"font-weight: bold; font-size: 14pt; font-family: verdana, geneva, sans-serif;\"><span style=\"font-size: 14pt; font-family: verdana, geneva, sans-serif;\"><strong>Introduce yourself.</strong></span></li>\r\n<li style=\"font-weight: bold; font-size: 14pt; font-family: verdana, geneva, sans-serif;\"><span style=\"font-size: 14pt; font-family: verdana, geneva, sans-serif;\"><strong>make memorization.</strong></span></li>\r\n</ol>\r\n<p>hello audiences. today I am going to show you how you start writing C codes. you can get the foll code <a href=\"https://www.programiz.com/c-programming/examples\">her</a></p>\r\n<pre class=\"language-css\"><code>scroll-behavior: smooth;\r\n}\r\n\r\na {\r\n  color: var(--color-links);\r\n  text-decoration: none;\r\n}\r\n\r\na:hover {\r\n  color: var(--color-links-hover);\r\n  text-decoration: none;\r\n}\r\n\r\nh1,\r\nh2,\r\nh3,\r\nh4,\r\nh5,\r\nh6 {\r\n  font-family: var(--font-primary);\r\n}\r\n\r\n/*--------------------------------------------------------------\r\n# Preloader\r\n--------------------------------------------------------------*/\r\n#preloader {\r\n  position: fixed;\r\n  inset: 0;\r\n  z-index: 9999;\r\n  overflow: hidden;\r\n  background: var(--color-white);\r\n  transition: all 0.6s ease-out;\r\n  width: 100%;\r\n  height: 100vh;\r\n}\r\n\r\n#preloader:before,\r\n#preloader:after {\r\n  content: \"\";\r\n  position: absolute;\r\n  border: 4px solid var(--color-primary);\r\n  border-radius: 50%;\r\n  -webkit-animation: animate-preloader 2s cubic-bezier(0, 0.2, 0.8, 1) infinite;\r\n  animation: animate-preloader 2s cubic-bezier(0, 0.2, 0.8, 1) infinite;\r\n}\r\n\r\n#preloader:after {\r\n  -webkit-animation-delay: -0.5s;\r\n  animation-delay: -0.5s;\r\n}\r\n\r\n@-webkit-keyframes animate-preloader {\r\n  0% {\r\n    width: 10px;\r\n    height: 10px;\r\n    top: calc(50% - 5px);\r\n    left: calc(50% - 5px);\r\n    opacity: 1;\r\n  }\r\n\r\n  100% {\r\n    width: 72px;\r\n    height: 72px;\r\n    top: calc(50% - 36px);\r\n    left: calc(50% - 36px);\r\n    opacity: 0;\r\n  }\r\n}\r\n\r\n@keyframes animate-preloader {\r\n  0% {\r\n    width: 10px;\r\n    height: 10px;\r\n    top: calc(50% - 5px);\r\n    left: calc(50% - 5px);\r\n    opacity: 1;\r\n  }</code></pre>\r\n<p>This is the HTML code</p>\r\n<form class=\"row\" role=\"form\" action=\"&lt;?php echo base_url()?&gt;A_blog/update_blog\" enctype=\"multipart/form-data\" method=\"post\">\r\n<pre class=\"language-markup\"><code>&lt;html&gt;\r\n &lt;div class=\"form-group mt-3\"&gt;\r\n                &lt;label&gt;Category&lt;/label&gt;\r\n                &lt;select name=\"category\" class=\"form-control\" id=\"category\"&gt;\r\n                  &lt;option value=\"&lt;?php echo $basic_info-&gt;category?&gt;\"&gt;&lt;?php echo $basic_info-&gt;category?&gt;&lt;/option&gt;\r\n                  &lt;option value=\"Programming\"&gt;Programming Language&lt;/option&gt;\r\n                  &lt;option value=\"Framwork\"&gt;Frameworks&lt;/option&gt;\r\n                  &lt;option value=\"Skill\"&gt;Skills&lt;/option&gt;\r\n                  &lt;option value=\"AI\"&gt;Artificial Intelligence&lt;/option&gt;\r\n                  &lt;option value=\"Technology\"&gt;General Technology&lt;/option&gt;\r\n                  &lt;option value=\"Social\"&gt;Social Affaires&lt;/option&gt;\r\n                  &lt;option value=\"Marketing\"&gt;Marketing&lt;/option&gt;\r\n                  &lt;option value=\"History\"&gt;Histories&lt;/option&gt;\r\n                  &lt;option value=\"Entertainment\"&gt;Entertainment&lt;/option&gt;\r\n                &lt;/select&gt;\r\n              &lt;/div&gt;\r\n&lt;/html&gt;</code></pre>\r\n<br>\r\n<div class=\"row\"><br>\r\n<div class=\"col-lg-6\">\r\n<div class=\"form-group mt-3\">&nbsp;</div>\r\n<div class=\"form-group mt-3\">this the python code example</div>\r\n<div class=\"form-group mt-3\">\r\n<pre class=\"language-python\"><code>gray= cv.cvtColor(image,cv.COLOR_BGR2GRAY)\r\ncv.imshow(\'Gray\',gray)\r\n\r\n# === simple thresholding ===\r\nthreshold,thresh = cv.threshold(gray,150,255,cv.THRESH_BINARY)\r\ncv.imshow(\'Simple Threshold\',thresh)\r\n\r\n\r\n # == invers threshold ===\r\nthreshold,thresh_inv = cv.threshold(gray,150,255,cv.THRESH_BINARY_INV)\r\ncv.imshow(\'Inversed Threshold\',thresh_inv)\r\n\r\n# ===Adapted Threshold ===\r\nadapted_thresh = cv.adaptiveThreshold(gray,255,cv.ADAPTIVE_THRESH_MEAN_C,cv.THRESH_BINARY,11,1)\r\ncv.imshow(\'Adaptive Threshold\',adapted_thresh)</code></pre>\r\n</div>\r\n</div>\r\n</div>\r\n</form>\r\n<blockquote>\r\n<p>We are also the tallented group to deliver servcie for the community</p>\r\n<p>We are also the tallented group to deliver servcie for the community</p>\r\n<p>We are also the tallented group to deliver servcie for the community</p>\r\n</blockquote>', 14, 'Thi19513.jpg', '2023-12-16'),
(9, 'Framwork', 'Cootstrap', 'Introduction to Bootstrap', '<p>In this page Iwamt to teach you about boostratrap. This section incorporates the basic defination of bootstrap and its configration on your local server called XAMPP. I mainly cover the following cencepts.</p>\r\n<ol>\r\n<li>&nbsp;what is bootstrap.</li>\r\n<li>&nbsp;dounload bootstrap and</li>\r\n<li>&nbsp;seting up bootstrap.</li>\r\n</ol>\r\n<h2 class=\"title\">1. What is Bootstap?</h2>\r\n<p>Bootstrap is a front end design framwork for website and web applications. It contains the basic building block of websites such as CSS, JavaScript and JQuery. Now a days bootstrap 5 version is available.</p>\r\n<h2 class=\"title\">2. Download Bootstrap</h2>\r\n<p>You can download the Source file from <a href=\"https://getbootstrap.com/docs/4.0/getting-started/download/\"> Boostrap</a>. But for beginnes, I recommend bootstap 3.0.3. You can get it from<a href=\"https://blog.getbootstrap.com/2013/12/05/bootstrap-3-0-3-released/\"> Bootstrap 3.0.3</a>.</p>\r\n<h2 class=\"title\">3. Setup Bootstrap?</h2>\r\n<p>After bootstrap is downloaded, extract it and put in <strong>C:\\xampp\\htdocs</strong>. You can create new folder and copy bootstrap inside it. The newly created folder will be an a place where all .html, .css and .js files are saved. This files are your website files.</p>\r\n<pre class=\"language-html\"><code>	                \r\n&lt;div class=\"meta-bottom\"&gt;\r\n	&lt;i class=\"bi bi-folder\"&gt;&lt;/i&gt;\r\n	&lt;ul class=\"cats\"&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Business&lt;/a&gt;&lt;/li&gt;\r\n	&lt;/ul&gt;\r\n	&lt;i class=\"bi bi-tags\"&gt;&lt;/i&gt;\r\n	&lt;ul class=\"tags\"&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Creative&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Tips&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Marketing&lt;/a&gt;&lt;/li&gt;\r\n	&lt;/ul&gt;\r\n	&lt;/div&gt;&lt;!-- End meta bottom --&gt;\r\n	 \r\n	&lt;/article&gt;&lt;!-- End blog post --&gt;\r\n	 \r\n	&lt;div class=\"post-author d-flex align-items-center\"&gt;\r\n	&lt;img src=\"assets/img/blog/blog-author.jpg\" class=\"rounded-circle flex-shrink-0\" alt=\"\"&gt;\r\n	&lt;div&gt;\r\n	&lt;h4&gt;Jane Smith&lt;/h4&gt;\r\n	&lt;div class=\"social-links\"&gt;\r\n	&lt;a href=\"https://twitters.com/#\"&gt;&lt;i class=\"bi bi-twitter\"&gt;&lt;/i&gt;&lt;/a&gt;\r\n	&lt;a href=\"https://facebook.com/#\"&gt;&lt;i class=\"bi bi-facebook\"&gt;&lt;/i&gt;&lt;/a&gt;\r\n	&lt;a href=\"https://instagram.com/#\"&gt;&lt;i class=\"biu bi-instagram\"&gt;&lt;/i&gt;&lt;/a&gt;\r\n	&lt;/div&gt;\r\n	&lt;p&gt;\r\n	Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.\r\n	&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;&lt;!-- End post author --&gt;\r\n	 \r\n	&lt;div class=\"comments\"&gt;\r\n	 \r\n	&lt;h4 class=\"comments-count\"&gt;8 Comments&lt;/h4&gt;\r\n	 \r\n	&lt;div id=\"comment-1\" class=\"comment\"&gt;\r\n	&lt;div class=\"d-flex\"&gt;\r\n	&lt;div class=\"comment-img\"&gt;&lt;img src=\"assets/img/blog/comments-1.jpg\" alt=\"\"&gt;&lt;/div&gt;\r\n	&lt;div&gt;\r\n	&lt;h5&gt;&lt;a href=\"\"&gt;Georgia Reader&lt;/a&gt; &lt;a href=\"#\" class=\"reply\"&gt;&lt;i class=\"bi bi-reply-fill\"&gt;&lt;/i&gt; Reply&lt;/a&gt;&lt;/h5&gt;\r\n	&lt;time datetime=\"2020-01-01\"&gt;01 Jan,2022&lt;/time&gt;\r\n	&lt;p&gt;\r\n	Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.\r\n	Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.\r\n	&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;&lt;!-- End comment #1 --&gt;\r\n	 \r\n	 \r\n	 \r\n	&lt;div class=\"reply-form\"&gt;\r\n	&lt;h4&gt;Leave a Reply&lt;/h4&gt;\r\n	&lt;form action=\"\"&gt;\r\n	&lt;div class=\"row\"&gt;\r\n	&lt;div class=\"col-md-6 form-group\"&gt;\r\n	&lt;input name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Your Name*\"&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=\"col-md-6 form-group\"&gt;\r\n	&lt;input name=\"email\" type=\"text\" class=\"form-control\" placeholder=\"Your Email*\"&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=\"row\"&gt;\r\n	&lt;div class=\"col form-group\"&gt;\r\n	&lt;input name=\"website\" type=\"text\" class=\"form-control\" placeholder=\"Your Website\"&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=\"row\"&gt;\r\n	&lt;div class=\"col form-group\"&gt;\r\n	&lt;textarea name=\"comment\" class=\"form-control\" placeholder=\"Your Comment*\"&gt;&lt;/textarea&gt;\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;button type=\"submit\" class=\"btn btn-primary\"&gt;Post Comment&lt;/button&gt;\r\n	 \r\n	&lt;/form&gt;\r\n	 \r\n	&lt;/div&gt;\r\n	 \r\n	&lt;/div&gt;&lt;!-- End blog comments --&gt;\r\n	 \r\n	&lt;/div&gt;\r\n	 \r\n	 \r\n	 \r\n	 \r\n	&lt;div class=\"col-lg-4\"&gt;\r\n	&lt;div class=\"sidebar\"&gt;\r\n	 \r\n	&lt;div class=\"sidebar-item search-form\"&gt;\r\n	&lt;h3 class=\"sidebar-title\"&gt;Search&lt;/h3&gt;\r\n	&lt;form action=\"\" class=\"mt-3\"&gt;\r\n	&lt;input type=\"text\"&gt;\r\n	&lt;button type=\"submit\"&gt;&lt;i class=\"bi bi-search\"&gt;&lt;/i&gt;&lt;/button&gt;\r\n	&lt;/form&gt;\r\n	&lt;/div&gt;&lt;!-- End sidebar search formn--&gt;\r\n	 \r\n	&lt;div class=\"sidebar-item categories\"&gt;\r\n	&lt;h3 class=\"sidebar-title\"&gt;Related Posts&lt;/h3&gt;\r\n	&lt;ul class=\"mt-3\"&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;General &lt;span&gt;(25)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Lifestyle &lt;span&gt;(12)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Travel &lt;span&gt;(5)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Design &lt;span&gt;(22)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Creative &lt;span&gt;(8)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Educaion &lt;span&gt;(14)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n	&lt;/ul&gt;\r\n	&lt;/div&gt;&lt;!-- End sidebar categories--&gt;\r\n	 \r\n	 \r\n	&lt;div class=\"sidebar-item tags\"&gt;\r\n	&lt;h3 class=\"sidebar-title\"&gt;Tags&lt;/h3&gt;\r\n	&lt;ul class=\"mt-3\"&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;App&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;IT&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Business&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Mac&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Design&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Office&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Creative&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Studio&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Smart&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Tips&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=\"#\"&gt;Marketing&lt;/a&gt;&lt;/li&gt;\r\n	&lt;/ul&gt;\r\n	&lt;/div&gt;&lt;!-- End sidebar tags--&gt;\r\n	 \r\n	&lt;/div&gt;&lt;!-- End Blog Sidebar --&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;/section&gt;&lt;!-- End Blog Details Section --&gt;\r\n	 \r\n	&lt;/main&gt;&lt;!-- End #main --&gt;\r\n	              </code></pre>', 14, 'Int54399.jpg', '2023-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate`
--

CREATE TABLE `tbl_certificate` (
  `id` int(11) NOT NULL,
  `skilled_id` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `title` varchar(150) NOT NULL,
  `company` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `p_file` varchar(150) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_certificate`
--

INSERT INTO `tbl_certificate` (`id`, `skilled_id`, `skill`, `title`, `company`, `description`, `p_file`, `post_date`) VALUES
(2, 14, 'Web application development', 'One card system', 'Debre Tabor University', 'I have got this Certificate from DTU in accordance of developing a web application to manage student service provider system digitally.', 'One_card_system.jpg', '2023-11-29'),
(3, 14, 'Web application development', 'online SRS Sytem', 'Debre Tabor University', 'I received this certificate from DTU in accordance of the development of online student registration system for south Gondar Health science collage.', 'online_SRS_Sytem.jpg', '2023-11-29'),
(4, 14, 'Web application development', 'Dynamic Website', 'Debre Tabor university', 'I have received this certificate from DTU in accordance of the development of dynamic official website for south Gondar health science collage.', 'Dynamic_Website.jpg', '2023-11-29'),
(5, 14, 'AI application development', 'Medicinal plant part Identification using AI', 'Ethiopian AI Center', 'I have received this certificate from Ethiopian AI center in accordance of the participation of National AI expo in 2013 E.C.', 'Medicinal_plant_part_Identification_using_AI.jpg', '2023-11-29'),
(6, 14, 'other', 'Hand free washing machine', 'Jimma University', 'I have received this certificate from Jimma University in accordance of leading and participating on the design, manufacturing and installation of hand free washing machine for JIRIEN secondary school.', 'Hand_free_washing_machine.jpg', '2023-11-29'),
(7, 14, 'Web application development', 'Patent right ', 'Ethiopian Intellectual property right office', 'I have received this patent right from Ethiopian intellectual property office in accordance of developing Smart ID card system for universities to manage student service delivery.              ', 'Patent_right_.jpg', '2023-11-29'),
(8, 14, 'Lecturing and laboratory work', 'Teaching and project advising', 'Debre Tabor University', 'I have received this certificate from DTU in accordance of the reward of Best performer staff from Technology faculty staffs in 2010 E.C.', 'Teaching_and_project_advising.jpg', '2023-11-29'),
(9, 14, 'Network installation and configration', 'CCNA', 'Jimma University', 'I have received this certificate from Jimma University ICT enterprise in accordance of successful accomplishment CCNA training.               ', 'CCNA.jpg', '2023-12-23'),
(10, 14, 'Web application development', 'Official website for DT industry and investment', 'Debre Tabor industry and investment office', 'I have received this certificate from Debre Tabor Industry and Investment office in accordance of developing their official website.', 'Official_website_for_DT_industry_and_investment.jpg', '2023-12-05'),
(11, 17, 'Network installation and configration', 'CyberOps associate ', 'Jima University', 'Cyber operation associate instructor level ', 'Cyb81968.jpg', '2023-03-17'),
(12, 17, 'Network installation and configration', 'Certificate of accomplishment ', 'Arba Minch University', 'successful accomplishment of CCNA short term course', 'Cer16340.jpg', '2015-06-17'),
(13, 14, 'Web application development', 'online SRS for Getnet Sport academy', 'Getnet sport Academy', 'This certificate is awarded in accordance of the development of online student registration for Getnet Sport Academy', 'onl13769.jpg', '2024-01-18'),
(14, 18, 'other', 'cybersecurity essentials', 'cisco networking academy', 'Understand security controls for networks, servers and applications.\r\nLearn valuable security principals and how to develop compliant policies.\r\nImplement proper procedures for data confidentiality and availability.\r\nDevelop critical thinking and problem-solving skills using real equipment and Cisco Packet Tracer.', 'cyb6662.pdf', '2023-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `office_id` varchar(18) CHARACTER SET utf8 NOT NULL,
  `first_name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `middle_name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(4) CHARACTER SET utf8 NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qebelie_id` varchar(12) CHARACTER SET utf8 NOT NULL,
  `department` varchar(50) CHARACTER SET utf8 NOT NULL,
  `education_level` varchar(12) CHARACTER SET utf8 NOT NULL,
  `role` varchar(50) CHARACTER SET utf8 NOT NULL,
  `major_skill` varchar(150) NOT NULL,
  `moderate_skill` varchar(150) NOT NULL,
  `minner_skill` varchar(150) NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `image` varchar(25) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `office_id`, `first_name`, `middle_name`, `last_name`, `sex`, `age`, `phone`, `email`, `qebelie_id`, `department`, `education_level`, `role`, `major_skill`, `moderate_skill`, `minner_skill`, `description`, `image`, `post_date`) VALUES
(14, 'ET1221', 'Misganaw', 'Aguate', 'Widneh', 'Male', 31, '0923065189', 'ethiomisgie@gmail.com', 'qebele12', 'ECE', 'master', '', 'Web development', 'Graphics design', 'AI application development', 'Misganaw is a lecturer at DTU in ECE with the specialization of Computer Engineering. He is a graphics designer, website, web App, AI App and Mobile App developer. ', 'ET1221.png', '2024-01-18'),
(17, 'DTUAC/117/2010', 'Anduamlak', 'Abebe', 'Fenta', 'Male', 31, '0923217130', 'anduamlak09@gmail.com', 'andu123', 'Computer Science', 'master', 'Admin', 'Networking', 'Mobile Application', 'Graphics', 'Anduamlak is experienced in Network installation and configuration, Mobile App development and Graphics design.', 'DTUAC1172023.JPG', '2024-01-06'),
(18, 'Baye123', 'Baye', 'Desalew', 'Kasaw', 'Male', 0, '0936727740', 'darenatentabaye@gmail.com', 'baye123', 'Eelectrical and computer engineering  ', 'degree', '', 'Network installation and configration', 'Web development', 'Mobile Application', 'Motivated and disciplined IT expert with 4 Years , network technician and system and maintenance assistance engineer with  2+ year of experience in providing computer network solutions, computer maintenance, and CCTV camera installation, fiber splice, video wall mounting. Networking  installation and configuration  (CISCO  ,HUAWIE  ,H3C  Device  configuration )', 'Baye123.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `skilled_id` int(11) NOT NULL,
  `skill` varchar(150) CHARACTER SET utf8 NOT NULL,
  `title` varchar(150) CHARACTER SET utf8 NOT NULL,
  `company` varchar(150) NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `p_file` varchar(100) CHARACTER SET utf8 NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `skilled_id`, `skill`, `title`, `company`, `description`, `p_file`, `post_date`) VALUES
(5, 1, 'AI', 'hhgfrhghgvbjgrg', '', 'gf', 'hhgfrhghgvbjgrg.jpg', '2022-11-10'),
(10, 1, 'web application developme', 'Water Botteling', '', 'Guna, Ghion water', 'Water_Botteling.jpg', '2022-11-15'),
(17, 1, 'Lecturing and laboratory work', 'Digital Class', '', 'Computer laboratory training    for Basic computer skill development      ', 'Digital_Class.jpg', '2023-12-23'),
(23, 14, 'Web application development', 'website of Debre Tabor Industry and investment office', 'Debre Tabor industry and investment office', 'This is a dynamic website for Debre Tabor industry and investment office.', 'website_of_Debre_Tabor_Industry_and_investment_office.PNG', '2023-12-09'),
(25, 14, 'Web application development', 'SRS system for Getnet Sport academy', 'Getnet Sport academy', 'This is an online student registration system of Getnet sport academy.', 'SRS_system_for_Getnet_Sport_academy.PNG', '2023-12-09'),
(26, 14, 'Web application development', 'SRS system for Getnet Sport academy', 'Getnet Sport academy', 'This is an online student registration system of Getnet sport academy.                            ', 'SRS_system_for_Getnet_Sport_academies.PNG', '2023-12-09'),
(27, 14, 'Web application development', 'Official website for DT industry and investment', 'Debre Tabor industry and investment office', 'Mobile view of Debre Tabor industry and investment office website', 'Off24304.PNG', '2023-12-09'),
(28, 14, 'Web application development', 'SICS', 'Debre Tabor university', 'This is what looks Debre Tabor University Smart ID Card system. SICS makes the university to provide services using on digital ID such as meal attendance system, book borrowing system and gateway entrance and exit control.', 'SIC58617.PNG', '2023-12-09'),
(29, 14, 'Web application development', 'SICS', 'Debre Tabor university', 'This is what looks Debre Tabor University Smart ID Card system. SICS makes the university to provide services using on digital ID such as meal attendance system, book borrowing system and gateway entrance and exit control.', 'SIC10408.PNG', '2023-12-09'),
(30, 14, 'Web application development', 'Web Application Development', 'Debre Tabor University', 'This is what looks Debre Tabor University Smart ID Card system. SICS makes the university to provide services using on digital ID such as meal attendance system, book borrowing system and gateway entrance and exit control.', 'Web12628.PNG', '2023-12-09'),
(31, 14, 'Web application development', 'SICS-ID maker module', 'Debre Tabor University', 'This is what looks Debre Tabor University SICS ID maker module.', 'SIC63824.PNG', '2023-12-09'),
(32, 14, 'Web application development', 'SICS-ID maker module', 'Debre Tabor University', 'ID maker module of SICS of Debre Tabor University.', 'SIC88749.PNG', '2023-12-09'),
(33, 14, 'Web application development', 'Web Application Development', 'Debre Tabor university', 'Meal attendance module of SICS of Debre Tabor University.', 'Web12578.PNG', '2023-12-09'),
(34, 14, 'Web application development', 'SICS-meal attendance module', 'Debre Tabor university', 'Meal attendance module of SICS of Debre Tabor University.', 'SIC9355.PNG', '2023-12-09'),
(35, 14, 'Web application development', 'SICS-meal attendance module', 'Debre Tabor university', 'Meal attendance module of SICS of Debre Tabor University.              ', 'SICS-meal_attendance_module.jpg', '2023-12-09'),
(36, 14, 'Web application development', 'SICS-meal attendance module', 'Debre Tabor University', 'Meal attendance module of SICS of Debre Tabor University.', 'SIC19504.PNG', '2023-12-09'),
(37, 14, 'Web application development', 'SICS-meal attendance module', 'Debre Tabor university', 'Meal attendance module of SICS of Debre Tabor University.', 'SIC45740.PNG', '2023-12-09'),
(38, 14, 'Web application development', 'SICS-meal attendance module', 'Debre Tabor university', 'Meal attendance module of SICS of Debre Tabor University.', 'SIC43992.jpg', '2023-12-09'),
(39, 14, 'Web application development', 'File management sstem', 'suspended ', 'This web application is developed to manage files in any organization.', 'Fil1210.PNG', '2023-12-09'),
(40, 14, 'Web application development', 'File management sstem', 'suspended', 'This web application is developed to manage files in any organization.', 'Fil16499.PNG', '2023-12-09'),
(41, 14, 'Web application development', 'File management sstem', 'suspended', 'This web application is developed to manage files in any organization.', 'Fil20561.PNG', '2023-12-09'),
(42, 14, 'Mobile application development', 'Web messaging', 'suspended', 'this application is developed for secure communication of people. the message can be video, textual file, raw text, audio or photos.', 'Web32902.png', '2023-12-09'),
(43, 14, 'Mobile application development', 'Web messaging', 'suspended', 'this application is developed for secure communication of people. the message can be video, textual file, raw text, audio or photos.', 'Web84411.png', '2023-12-09'),
(44, 14, 'Mobile application development', 'Web messaging', 'suspended', 'this application is developed for secure communication of people. the message can be video, textual file, raw text, audio or photos.', 'Web37813.png', '2023-12-09'),
(45, 14, 'Web application development', 'SRS for South Gongar health science college', 'South Gondar health science college', 'This we application is developed for South Gondar health science college. The application enables students to register themselves online at any place and time. the application also enables instructors to make assessments.', 'SRS25092.PNG', '2023-12-09'),
(46, 14, 'Web application development', 'SRS for South Gongar health science college', 'South Gondar health science college', 'This we application is developed for South Gondar health science college. The application enables students to register themselves online at any place and time. the application also enables instructors to make assessments.', 'SRS89132.PNG', '2023-12-09'),
(47, 14, 'Web application development', 'SRS for South Gongar health science college', 'South Gondar health science college', 'This we application is developed for South Gondar health science college. The application enables students to register themselves online at any place and time. the application also enables instructors to make assessments.', 'SRS2467.PNG', '2023-12-09'),
(48, 14, 'Web application development', 'SRS for South Gongar health science college', 'South Gondar health science college', 'This we application is developed for South Gondar health science college. The application enables students to register themselves online at any place and time. the application also enables instructors to make assessments.', 'SRS71092.PNG', '2023-12-09'),
(49, 14, 'Web application development', 'SRS for South Gongar health science college', 'South Gondar health science college', 'This we application is developed for South Gondar health science college. The application enables students to register themselves online at any place and time. the application also enables instructors to make assessments.', 'SRS33958.PNG', '2023-12-09'),
(50, 14, 'Web application development', 'Web messaging', 'suspended', 'this application is developed for secure communication of people. the message can be video, textual file, raw text, audio or photos.      ', 'Web45310.PNG', '2023-12-09'),
(51, 14, 'Web application development', 'Web messaging', 'suspended', 'this application is developed for secure communication of people. the message can be video, textual file, raw text, audio or photos.      ', 'Web1410.PNG', '2023-12-09'),
(52, 14, 'Web application development', 'Web messaging', 'suspended', 'this application is developed for secure communication of people. the message can be video, textual file, raw text, audio or photos.      ', 'Web20110.PNG', '2023-12-09'),
(53, 14, 'Mobile application development', 'SRS for South Gongar health science college', 'South Gondar health science college', 'This we application is developed for South Gondar health science college. The application enables students to register themselves online at any place and time. the application also enables instructors to make assessments.    ', 'SRS55492.PNG', '2023-12-09'),
(54, 14, 'AI application development', 'Medicinal plant part Identification', 'suspended', 'This is Artificial intelligence based mobile application for medicinal plant parts identification. the application enables pharmacists to easily identify what part of captured plant is used for medicine preparation.', 'Med55012.png', '2023-12-09'),
(55, 14, 'AI application development', 'Medicinal plant part Identification', 'suspended', 'This is Artificial intelligence based mobile application for medicinal plant parts identification. the application enables pharmacists to easily identify what part of captured plant is used for medicine preparation.', 'Med84279.png', '2023-12-09'),
(56, 14, 'AI application development', 'Coffee disease identification', 'suspended', 'This application is artificial intelligence based mobile application to identify the the disease occurred on coffee leaves and berries. ', 'Cof78875.png', '2023-12-09'),
(57, 14, 'AI application development', 'Coffee disease identification', 'suspended', 'This application is artificial intelligence based mobile application to identify the the disease occurred on coffee leaves and berries. ', 'Cof49957.png', '2023-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `id` int(11) NOT NULL,
  `name` varchar(8) CHARACTER SET utf8 NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `name`, `email`, `phone`, `title`, `description`, `post_date`) VALUES
(2, 'About yo', 'About your posts', 'About your posts', 'About your posts', 'your post is very good and keep it up ok.', '2022-11-14'),
(6, 'subject1', 'mis@gmail.com', '0923065189', 'subject1', 'the first mesage', '2023-11-23'),
(7, 'The firs', 'ethiomisgie@gmail.co', '0923065189', 'The first on live server', 'This is the first message from live server', '2023-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `discription` longtext CHARACTER SET utf8 NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `title`, `discription`, `image`, `post_date`) VALUES
(16, 'Mobile Application development', 'If you have customers that usually utilize mobile to communicate with you about your business, don\'t worry. We are ready to develop mobile application for your service delivery business such as digital marketing (E-commerce). Or it may be mobile application for your website, for ease accessibility.                             ', 'Mobile_Application.gif', '2023-12-04'),
(17, 'Network Installation and configrations', 'We have talented team to install and configure your business and office network.                                                                                                                  ', 'Net53428.jpg', '2023-12-11'),
(19, 'Website Development', 'We are looking forward to the customer to develop awesome official websites websites', 'Website_Development.jpg', '2023-12-04'),
(20, 'Web App Development', 'We are waiting you to develop E-commerce, E-learning, Human resource and Payroll system, attendance management system, clearance system, project management system, student information management system, store management system and more applications as per the need of customers            ', 'Web_App_Development.png', '2023-12-04'),
(22, 'Short term training on programming', 'We are here to help you to boost your different computer program coding skills. This bring you in front to develop your website, web applications, mobile applications and desktop applications.     ', 'Web_Application_Development.gif', '2023-12-04'),
(23, 'Embedded System training', 'We can give wonderful lecture and practical work training on embedded system and electronics such as home automation, robotics and integrated system &#40;hardware and database integration&#41;.', 'Embedded_System_training.jpg', '2023-12-04'),
(24, 'Network Installation and configrations', 'We have talented team to install and configure your business and office network.                             ', 'Net11787.jpg', '2023-12-11'),
(25, 'Project Advising', 'We are experienced in students project advising. The main service we can give is correcting students mistake on document writing and technical works. Web Application development, Desktop application development, Distributing system, Networking and embedded system projects are the core area we can serve students.', 'Project_Advising.PNG', '2023-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(18) CHARACTER SET utf8 NOT NULL,
  `first_name` varchar(8) CHARACTER SET utf8 NOT NULL,
  `middle_name` varchar(8) CHARACTER SET utf8 NOT NULL,
  `username` varchar(10) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_level` varchar(10) CHARACTER SET utf8 NOT NULL,
  `status` varchar(6) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(100) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user_id`, `first_name`, `middle_name`, `username`, `password`, `user_level`, `status`, `email`, `code`, `active`) VALUES
(10, 'ET1221', 'Misganaw', 'Aguate', 'admin', '7fd486953d3ac7b878194b5ac15888bf47a3b8f55a9ec903e9ec2b2aea094b6220383d1e5ae008d702ce3c65b015f8d488633e8d334f7e7138dc25f0116baeea2HH2cv8uX+KAoP0S+eIF6LiK18gYHrh1XrC65emqeRk=', 'admin', 'active', '', '', 0),
(13, '', '', '', '', 'misge@123', '', '', 'ethiomisgie@gmail.com', 'v4EIsWMotQmw', 0),
(14, 'DTUAC/117/2010', 'Anduamla', 'Abebe', 'anduamlak', '705db2a48d216d2b4688c799fd14a88a9f4f1fe5a9f63accb77c154a2964d9d1b5f909edeeb555bfd020cf4e97a47c36bbc27d7282467d1344a977c48b577f5d/ARhs9yJl+b3tWso75a7Xce+m3R5E6vKG6sJMD8z/8g=', 'user', 'active', '', '', 0),
(15, 'Baye123', 'Baye', 'Desalew', 'baye', '32ae63169171452fddcfc6e0eddf74ede010fdff6f7b3294dbe8d05276fbabf0686976b4d5d1cf7b90962f04b3ad09aa25b240e90f531bcec0ea6e5cd5aed27bNdYKF/JzDXyqjkaFrGvcahcOleyzygJbUE2Dz5K+dcGnfM1SBNTD4kYVBMT7KPyUhrnFZ8Mps8eu2W5I+eZaU9JQFm27V4WExJPE8bFiVY++EO2Z6zaZXigKgiLGoix', 'admin', 'active', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL,
  `skilled_id` int(11) NOT NULL,
  `skill` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `p_file` varchar(100) CHARACTER SET utf8 NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `skilled_id`, `skill`, `title`, `description`, `p_file`, `post_date`) VALUES
(3, 6, 'Web application development', 'Official website for DT industry and investment', '  This is the landing page of DT industry and investment office website', 'Official_website_for_DT_industry_and_investment.mp4', '2023-12-04'),
(12, 14, 'Web application development', 'Student registration system for Getnet Sport academy', 'This is what I developed SRS for Getnet Sport academy in 2014 E.C.              ', 'SRS_system_for_Getnet_Sport_academy.mp4', '2023-12-04'),
(13, 14, 'Web application development', 'Meal Attendance system', 'This is how the meal attendance system is work. We developed this software for Debre Tabor University.              ', 'Mea21958.mp4', '2023-12-11'),
(14, 14, 'Web application development', 'Meal Attendance system', 'This is how the meal attendance system is work. We developed this software for Debre Tabor University.', 'Mea80812.mp4', '2023-12-11'),
(15, 14, 'Electronics design and maintenance', 'Sensor based Blind stick', 'This blind stick is designed and implemented using Ultrasonic sensor, Micro controller and buzzer', 'Sen74064.mp4', '2024-02-09'),
(16, 14, 'Electronics design and maintenance', 'Digital Door loock system', 'This project is designed and implemented using Micro controller, Ultrasonic sensor, Bluetooth sensor and Mobile App.', 'Dig48751.mp4', '2024-02-09'),
(17, 14, 'Electronics design and maintenance', 'BIMBI killer', 'This simple BIMBI killer is used at night time', 'BIM37563.mp4', '2024-02-09'),
(18, 14, 'AI application development', 'Coffee Disease Identification', 'This Mobile Application is developed using AI to detect the coffee disease on leaf and berry.', 'Cof30944.mp4', '2024-02-09'),
(19, 14, 'AI application development', 'Coffee disease detection', 'This Mobile Application is developed using AI to detect the coffee disease on leaf and berry.', 'Cof86590.mp4', '2024-02-09'),
(20, 14, 'AI application development', 'Corn Disease detection', 'This Mobile Application is developed using AI to detect the Corn disease on leaf.', 'Cor46035.mp4', '2024-02-09'),
(21, 14, 'AI application development', 'corn disease detections', 'This Mobile Application is developed using AI to detect the Corn disease on leaf.', 'cor19090.mp4', '2024-02-09'),
(22, 14, 'AI application development', 'AI based Mobile Apps', 'This Project includes AI based Mobile Apps such as Medicinal plant identification, Coffee disease detection and corn disease detection.', 'AI_80362.mp4', '2024-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `id` int(11) NOT NULL,
  `code` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`id`, `code`) VALUES
(1, '&lt;div class=&quot;meta-bottom&quot;&gt;\r\n&lt;i class=&quot;bi bi-folder&quot;&gt;&lt;/i&gt;\r\n&lt;ul class=&quot;cats&quot;&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Business&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;i class=&quot;bi bi-tags&quot;&gt;&lt;/i&gt;\r\n&lt;ul class=&quot;tags&quot;&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Creative&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Tips&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Marketing&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;&lt;!-- End meta bottom --&gt;\r\n\r\n&lt;/article&gt;&lt;!-- End blog post --&gt;\r\n\r\n&lt;div class=&quot;post-author d-flex align-items-center&quot;&gt;\r\n&lt;img src=&quot;assets/img/blog/blog-author.jpg&quot; class=&quot;rounded-circle flex-shrink-0&quot; alt=&quot;&quot;&gt;\r\n&lt;div&gt;\r\n&lt;h4&gt;Jane Smith&lt;/h4&gt;\r\n&lt;div class=&quot;social-links&quot;&gt;\r\n&lt;a href=&quot;https://twitters.com/#&quot;&gt;&lt;i class=&quot;bi bi-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;\r\n&lt;a href=&quot;https://facebook.com/#&quot;&gt;&lt;i class=&quot;bi bi-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;\r\n&lt;a href=&quot;https://instagram.com/#&quot;&gt;&lt;i class=&quot;biu bi-instagram&quot;&gt;&lt;/i&gt;&lt;/a&gt;\r\n&lt;/div&gt;\r\n&lt;p&gt;\r\nItaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.\r\n&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;&lt;!-- End post author --&gt;\r\n\r\n&lt;div class=&quot;comments&quot;&gt;\r\n\r\n&lt;h4 class=&quot;comments-count&quot;&gt;8 Comments&lt;/h4&gt;\r\n\r\n&lt;div id=&quot;comment-1&quot; class=&quot;comment&quot;&gt;\r\n&lt;div class=&quot;d-flex&quot;&gt;\r\n&lt;div class=&quot;comment-img&quot;&gt;&lt;img src=&quot;assets/img/blog/comments-1.jpg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;\r\n&lt;div&gt;\r\n&lt;h5&gt;&lt;a href=&quot;&quot;&gt;Georgia Reader&lt;/a&gt; &lt;a href=&quot;#&quot; class=&quot;reply&quot;&gt;&lt;i class=&quot;bi bi-reply-fill&quot;&gt;&lt;/i&gt; Reply&lt;/a&gt;&lt;/h5&gt;\r\n&lt;time datetime=&quot;2020-01-01&quot;&gt;01 Jan,2022&lt;/time&gt;\r\n&lt;p&gt;\r\nEt rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.\r\nVero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.\r\n&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;&lt;!-- End comment #1 --&gt;\r\n\r\n\r\n\r\n&lt;div class=&quot;reply-form&quot;&gt;\r\n&lt;h4&gt;Leave a Reply&lt;/h4&gt;\r\n&lt;form action=&quot;&quot;&gt;\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;div class=&quot;col-md-6 form-group&quot;&gt;\r\n&lt;input name=&quot;name&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Your Name*&quot;&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;col-md-6 form-group&quot;&gt;\r\n&lt;input name=&quot;email&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Your Email*&quot;&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;div class=&quot;col form-group&quot;&gt;\r\n&lt;input name=&quot;website&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Your Website&quot;&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;div class=&quot;col form-group&quot;&gt;\r\n&lt;textarea name=&quot;comment&quot; class=&quot;form-control&quot; placeholder=&quot;Your Comment*&quot;&gt;&lt;/textarea&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Post Comment&lt;/button&gt;\r\n\r\n&lt;/form&gt;\r\n\r\n&lt;/div&gt;\r\n\r\n&lt;/div&gt;&lt;!-- End blog comments --&gt;\r\n\r\n&lt;/div&gt;\r\n\r\n\r\n\r\n\r\n&lt;div class=&quot;col-lg-4&quot;&gt;\r\n&lt;div class=&quot;sidebar&quot;&gt;\r\n\r\n&lt;div class=&quot;sidebar-item search-form&quot;&gt;\r\n&lt;h3 class=&quot;sidebar-title&quot;&gt;Search&lt;/h3&gt;\r\n&lt;form action=&quot;&quot; class=&quot;mt-3&quot;&gt;\r\n&lt;input type=&quot;text&quot;&gt;\r\n&lt;button type=&quot;submit&quot;&gt;&lt;i class=&quot;bi bi-search&quot;&gt;&lt;/i&gt;&lt;/button&gt;\r\n&lt;/form&gt;\r\n&lt;/div&gt;&lt;!-- End sidebar search formn--&gt;\r\n\r\n&lt;div class=&quot;sidebar-item categories&quot;&gt;\r\n&lt;h3 class=&quot;sidebar-title&quot;&gt;Related Posts&lt;/h3&gt;\r\n&lt;ul class=&quot;mt-3&quot;&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;General &lt;span&gt;(25)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lifestyle &lt;span&gt;(12)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Travel &lt;span&gt;(5)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Design &lt;span&gt;(22)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Creative &lt;span&gt;(8)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Educaion &lt;span&gt;(14)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;&lt;!-- End sidebar categories--&gt;\r\n\r\n\r\n&lt;div class=&quot;sidebar-item tags&quot;&gt;\r\n&lt;h3 class=&quot;sidebar-title&quot;&gt;Tags&lt;/h3&gt;\r\n&lt;ul class=&quot;mt-3&quot;&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;App&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;IT&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Business&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Mac&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Design&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Office&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Creative&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Studio&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Smart&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Tips&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Marketing&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;&lt;!-- End sidebar tags--&gt;\r\n\r\n&lt;/div&gt;&lt;!-- End Blog Sidebar --&gt;\r\n&lt;/div&gt;\r\n\r\n\r\n\r\n\r\n\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/section&gt;&lt;!-- End Blog Details Section --&gt;\r\n\r\n&lt;/main&gt;&lt;!-- End #main --&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `code` varchar(80) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `code`, `active`) VALUES
(25, 'ethiomisgie@gmail.com', '12345678', 'Ug4pckqsrdPT', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category` (`sub_category`),
  ADD KEY `title` (`title`),
  ADD KEY `image` (`image`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `offic_id` (`office_id`),
  ADD UNIQUE KEY `qebelie_id` (`qebelie_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`,`title`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
