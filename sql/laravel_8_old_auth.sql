-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 07:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_8_old_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_truests`
--

CREATE TABLE `client_truests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_truests`
--

INSERT INTO `client_truests` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '6019b790828b1.png', '2021-02-02 14:35:28', '2021-02-02 14:35:28'),
(2, '6019b7a6c1157.png', '2021-02-02 14:35:50', '2021-02-02 14:35:50'),
(3, '6019b7afa60fa.png', '2021-02-02 14:35:59', '2021-02-02 14:35:59'),
(4, '6019b7bb03cb3.png', '2021-02-02 14:36:11', '2021-02-02 14:36:11'),
(5, '6019b88d2da2d.png', '2021-02-02 14:39:41', '2021-02-02 14:39:41'),
(6, '6019b89cccdd3.png', '2021-02-02 14:39:56', '2021-02-02 14:39:56'),
(7, '6019b8a6b7b3b.png', '2021-02-02 14:40:06', '2021-02-02 14:40:06'),
(8, '6019b8b1cd2bb.png', '2021-02-02 14:40:17', '2021-02-02 14:40:17'),
(9, '6019b8bfdf18c.png', '2021-02-02 14:40:31', '2021-02-02 14:40:31'),
(10, '6019b8d8f02b8.png', '2021-02-02 14:40:56', '2021-02-02 14:40:56'),
(13, '6019be6a7e24b.png', '2021-02-02 14:41:43', '2021-02-02 15:04:42'),
(15, '6019c15c10e89.png', '2021-02-02 15:17:16', '2021-02-02 15:17:16'),
(16, '6019c175aeb64.png', '2021-02-02 15:17:41', '2021-02-02 15:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `office_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `need_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `office_hour`, `need_service`, `email`, `phone`, `address`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Monday-Friday: 8am-5pm PST', 'After Hours, Weekends, or Holidays?  Contact Us Below!', 'services@unspokensigns.com', '1.888.280.0751', '<span style=\"color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\">1370 Valley Vista Drive</span><br style=\"color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\"><span style=\"color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\">Suite 200</span><br style=\"color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\"><span style=\"color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\">Diamond Bar, CA 91765</span>', '<iframe src=\"https://www.google.com/maps?q=1370%20Valley%20Vista%20Drive%0ASuite%20200%0ADiamond%20Bar%2C%20CA%2091765&amp;output=embed&amp;hl=en&amp;z=14\" frameborder=\"0\" class=\"wpcw-widget-contact-map\"></iframe>', '2021-02-18 13:28:05', '2021-02-18 13:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fquestions`
--

CREATE TABLE `fquestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fquestions`
--

INSERT INTO `fquestions` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'What are your Hours of Operation?', '<div>Unspoken Language Services is happy to assist you during the following office hours:</div><div><br></div><div>Monday- Friday 8AM-5PM PST.&nbsp;</div>', '2021-02-14 16:06:56', '2021-02-14 16:31:26'),
(2, 'What is your refund policy?', 'Unspoken believes in providing exceptional interpreting services. Though all services are final, in the rare occurrence that you are dissatisfied with our services, please contact us to let us make the situation right.', '2021-02-14 16:08:56', '2021-02-14 16:08:56'),
(3, 'How do I work with Sign Language interpreters?', '<span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">If interacting with deaf people through Sign Language interpreters is an infrequent event, not to worry. We have outlined a few expectations so that you are better prepared for the environment\'s dynamics. To avoid any further communication complications, uncomfortable interactions, or potentially offending the deaf consumer,&nbsp;</span><a class=\"d-inline\" href=\"https://unspokensigns.com/how-to-work-with-sign-language-interpreters/\" target=\"_blank\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; background-color: rgb(255, 255, 255); transition: all 0.3s ease-in-out 0s; display: block; font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">here</a><span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">&nbsp;are some basic rules to follow.</span>', '2021-02-14 16:32:04', '2021-02-14 16:32:04'),
(4, 'Why is a team of ASL interpreters required for our upcoming conference?', '<span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">During the process of interpreting a verbal language into a physical one, ASL interpreters become susceptible to both physical and mental fatigue. After one hour of interpreting alone, even some of the best sign language interpreters decrease in the quality of service. A team of interpreters ensures your deaf consumer receives high-level language access throughout the duration of the conference.</span>', '2021-02-14 16:32:40', '2021-02-14 16:32:40'),
(5, 'Are there laws that support the use of Sign Language Interpreters?', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">There are several laws in place that support the use of Sign Language interpreters. These laws make it possible for Deaf and hard of hearing people obtain access to their education, employment, and overall environment. Below lists a few federal laws that provide guidance on how to ensure your business is in compliance with providing \"reasonable accommodations\".</p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><a href=\"https://www.ada.gov/cguide.htm\" target=\"_blank\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s; display: block;\">Americans with Disabilities Act (ADA)</a></p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><a href=\"https://www.dol.gov/oasam/regs/statutes/sec504.htm\" target=\"_blank\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s; display: block;\">Vocational Rehabilitation Act of 1973- Section 504</a></p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><a href=\"https://sites.ed.gov/idea/\" target=\"_blank\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s; display: block;\">Individuals with Disabilities Education Act (IDEA)</a></p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><a href=\"https://www2.ed.gov/about/offices/list/ocr/docs/edlite-FAPE504.html\" target=\"_blank\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s; display: block;\">Free Appropriate Public Education</a></p>', '2021-02-14 16:33:26', '2021-02-14 16:33:26'),
(6, 'What is the history of Deaf education using Sign Language?', '<span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">The history behind Deaf education roots from the language of sign. If the language is lost, so goes the culture and Deaf people\'s education. Though the history of Deaf Education is extensive, it is summarized best by&nbsp;</span><a class=\"d-inline\" href=\"http://www3.gallaudet.edu/clerc-center/info-to-go/deaf-education/200-years-of-deaf-education.html\" target=\"_blank\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; background-color: rgb(255, 255, 255); transition: all 0.3s ease-in-out 0s; display: block; font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">Gallaudet University</a><span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">&nbsp;the world\'s only Liberal Arts University for the Deaf and Hard of Hearing established in 1850.</span>', '2021-02-14 16:34:10', '2021-02-14 16:34:10'),
(7, '\"I need a Deaf Interpreter, right?\"', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">No. For most interpreting settings, you will need to hire a Hearing Sign Language Interpreter- one who speaks English and interprets for Deaf people using Sign Language.</p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">Requesting a Deaf Interpreter is often confused with the need for a traditional Sign Language interpreter. Naturally so, but Deaf Interpreters or Certified Deaf Interpreters are used in the field of interpreting to provide a formal connection between a Deaf person with limited ASL usage or minimum language skills (MLS) and a Hearing Sign Language interpreter.</p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">CDIs are often used in critical traumatic medical situations or police interrogations and depending on the deaf individual, they may communicate better with the use of a Certified Deaf Interpreter, especially if they are deaf immigrants whose first language is not ASL. When you hire a CDI, you also require a Hearing Sign Language interpreter to interpret from sign to spoken English for the Certified Deaf Interpreter.&nbsp;<a class=\"d-inline\" href=\"https://www.huffingtonpost.com/entry/frequently-asked-questions-about-certified-deaf-interpreters_us_5936eedee4b033940169ce70\" target=\"_blank\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s; display: block;\">LEARN MORE!</a></p>', '2021-02-14 16:35:17', '2021-02-14 16:35:17'),
(8, 'What are \"Deaf Rights\"?', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">Similar to Civil and Human Rights, Deaf Rights includes laws that protect Deaf people from disability prejudice or&nbsp;<a class=\"d-inline\" href=\"https://www.verywellhealth.com/deaf-culture-audism-1046267\" target=\"_blank\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s; display: block;\">\"Audism\",</a>&nbsp;a new word used alongside the common discrimination \"isms\" to describe a negative attitude towards those who are Deaf or Hard of Hearing.</p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span style=\"font-weight: bolder;\">Read more on Deaf Rights here:</span></p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><a href=\"https://www.huffingtonpost.com/lydia-l-callis/deaf-rights-what-you-need-to-know_b_5688351.html?ec_carp=7727435785114187190\" target=\"_blank\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s; display: block;\">What You Need to Know About Deaf Rights&nbsp;</a></p>', '2021-02-14 16:36:07', '2021-02-14 16:36:07'),
(9, '\"What information is required to complete my interpreting request?\"', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">As part of the business agreement with an interpreter or service provider, you will need to provide the following information to help the interpreter achieve the overall communication goal:</p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"></p><ul class=\"faq-list\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none; padding: 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><li style=\"display: block; padding-bottom: 10px;\">&nbsp;Services requestors’ name, telephone number, email address and the agency/organization requesting services.</li><li style=\"display: block; padding-bottom: 10px;\">&nbsp;Date, time and the duration of the appointment.</li><li style=\"display: block; padding-bottom: 10px;\">&nbsp;Location of assignment (address, directions, floor, building #, etc.)</li><li style=\"display: block; padding-bottom: 10px;\">&nbsp;Nature and format of the meeting (i.e. medical appointment, lecture, staff meeting, therapy session, etc.)</li><li style=\"display: block; padding-bottom: 10px;\">&nbsp;Names of deaf participants and hearing participants, if pertinent.</li><li style=\"display: block; padding-bottom: 10px;\">&nbsp;Name of onsite contact person.</li><li style=\"display: block; padding-bottom: 10px;\">&nbsp;Materials pertaining to a given assignment as needed (agenda and/or presentation materials).</li></ul><p style=\"margin: 20px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"></p><p style=\"margin: 14px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">RID believes that when interpreters and service providers conduct themselves in a professional manner, all parties gain a clear understanding of interpreting business practices.</p>', '2021-02-14 16:37:22', '2021-02-14 16:37:22');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_27_080130_create_pageintro_text_table', 2),
(5, '2021_01_27_080305_create_pagemodules_table', 2),
(6, '2021_01_27_080355_create_services_table', 2),
(7, '2021_01_27_080518_create_service_modules_table', 2),
(8, '2021_01_27_080619_create_service_settings_table', 2),
(9, '2021_02_02_200921_create_client_truests_table', 3),
(10, '2021_02_14_212725_create_fquestions_table', 4),
(11, '2021_02_18_185423_create_contactus_table', 5),
(12, '2021_02_18_202545_create_sociallinks_table', 6),
(13, '2021_04_23_144743_create_principlesofpromises_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pageintro_text`
--

CREATE TABLE `pageintro_text` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pageintro_text`
--

INSERT INTO `pageintro_text` (`id`, `page_name`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'our-services', 'American Sign Language (ASL) Interpreting', '<p>Unspoken Language Services is here to ease the language barrier by providing exclusive American Sign Language Interpreting and Transliteration services. We mend the communication challenge amongst an array of hearing calibers while maintaining the utmost professionalism and competence.</p><p>\r\n                                </p>', '2021-01-12 09:27:56', '2021-02-17 15:22:00'),
(2, 'why-us', 'Promises We Keep...', 'The Unspoken Promise was founded on the core belief of creating a humanistic experience to those hiring, receiving and providing services through Unspoken Language Services. As a boutique interpreting company, we interact with you directly to make you feel like a priority.', '2021-04-13 11:10:37', '2021-04-23 06:08:18'),
(3, 'joinourteam', 'Interpreter Promise', 'Unspoken Language Services is a boutique company owned and operated by American Sign Language interpreters, which means we respect your unique skill as an interpreter. We understand the amount of time and dedication it took to become one of the best in the industry, so we treat and compensate you as such.', '2021-04-23 19:11:27', '2021-04-23 13:24:56'),
(4, 'request', 'We\'re excited to serve you!!', '<span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">For us to live up to the&nbsp;</span><a href=\"http://127.0.0.1:8000/the-unspoken-promise\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; background-color: rgb(255, 255, 255); transition: all 0.3s ease-in-out 0s; font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">Unspoken Promise</a><span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">&nbsp;and perform exceptional service, each request is assigned to one of our interpreters with specializations that coordinate with your consumer\'s need.</span>', '2021-04-25 16:23:36', '2021-04-25 10:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `pagemodules`
--

CREATE TABLE `pagemodules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buttonvalue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagemodules`
--

INSERT INTO `pagemodules` (`id`, `page_name`, `title`, `description`, `url`, `buttonvalue`, `image`, `created_at`, `updated_at`) VALUES
(1, 'our-services', 'What is ASL?', '<p class=\"wow-outer\" style=\"margin: 30px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">American Sign Language is an unspoken visual language used predominately in the United States and parts of Canada. The language uses shapes, placement, and movements of the hands, along with facial expressions and body movements to convey information.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".1s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.1s;\">Much like the numerous spoken languages around the world, ASL has its own syntax structure and distinctive rules of grammar. As a natural language, sign language is constantly developing and evolving over time.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".1s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.1s;\">Through the use of this visual complex language, Unspoken offers premium American Sign Language interpreting services that make it easier for you and your deaf consumer to freely exchange knowledge and ideas in any environment.</span></p>', '', NULL, '60115d718f598.jpg', '2021-01-27 06:32:49', '2021-02-17 15:31:17'),
(9, 'slider', 'Why Us?', 'We are more than just another mainstream language agency providing interpreting services.', 'http://127.0.0.1:8000/the-unspoken-promise', '', '601947229fc0c.jpeg', '2021-02-02 06:35:46', '2021-04-23 12:42:54'),
(10, 'slider', 'Request Services', 'Request Services Let us carefully connect you with the right on-site interpreter for your company\'s needs.', 'http://127.0.0.1:8000/request-services', NULL, '6019526baa240.jpeg', '2021-02-02 06:38:40', '2021-02-02 15:27:29'),
(13, 'home', 'Why Us?', '<div>We are more than just another mainstream language agency providing interpreting services. We are a boutique company, owned and operated by American Sign Language interpreters. We know your agency list was limitless, but you chose our passion-driven company to serve your communication needs best.</div><div><br></div><div>With Unspoken Language Services, you speak directly to our team, not an answering service. Providing committed, personable, high quality, and in the moment communication access to our consumers and clients are paramount, guaranteeing a humanistic experience.</div>', 'http://127.0.0.1:8000/the-unspoken-promise', NULL, '6019af6b8fac0.jpeg', '2021-02-02 13:38:08', '2021-04-23 08:33:38'),
(14, 'home', 'Our Services', '<div>Unspoken\'s interpreters have specialized and extensive training in a variety of settings including, but not limited to: Medical, Worker\'s Compensation, Mental Health, Legal, Business, Conference, and Education. We are ready to cater to your specific interpreting needs.</div><div><br></div><div>Our goal is to use American Sign Language and Transliteration to better facilitate communication amongst an array of hearing calibers while maintaining the utmost professionalism and competence.</div>', 'http://127.0.0.1:8000/our-services', NULL, '6019aa63dbe9e.jpeg', '2021-02-02 13:39:15', '2021-02-02 13:39:15'),
(15, 'home', 'Request Services', '<div>Let us carefully connect you with the right on-site interpreter for your company\'s needs. Our extensively trained and certified interpreters each have various interpreting styles and specialized skills that tailor to your request.</div><div><br></div><div>Contact us today to bring a humanistic approach to your ASL interpreting experience!</div>', 'http://127.0.0.1:8000/request-services', NULL, '6019aad8e1732.jpeg', '2021-02-02 13:41:12', '2021-02-02 13:41:12'),
(19, 'agencies', '\"We Help Agencies Make Language Access Easier\"', '<div>Translation and interpreting agencies across the country struggle daily with meeting their deaf consumers\' language needs and serving them with quality interpreters that deliver brand loyalty. Unspoken Language Services was built to partner with you as an agency to provide on-site Sign Language interpreting support.</div><div><br></div><div>Our team seamlessly integrates with your agency’s processes and has the nationwide capacity to accommodate your deaf consumer as needed. Whether your agency needs an interpreter for a routine medical appointment or needs to arrange a team of interpreters for an upcoming conference, we can help.</div><div><br></div><div>Learn more about Unspoken’s White Labeling American Sign Interpreting Services, and the results we’ve delivered to our partnered agencies</div>', '', NULL, '60298096a51ef.jpeg', '2021-02-14 13:57:10', '2021-02-14 17:06:40'),
(20, 'agencies', '\"We Help Agencies Make Language Access Easier\"', '<div>Translation and interpreting agencies across the country struggle daily with meeting their deaf consumers\' language needs and serving them with quality interpreters that deliver brand loyalty. Unspoken Language Services was built to partner with you as an agency to provide on-site Sign Language interpreting support.</div><div><br></div><div>Our team seamlessly integrates with your agency’s processes and has the nationwide capacity to accommodate your deaf consumer as needed. Whether your agency needs an interpreter for a routine medical appointment or needs to arrange a team of interpreters for an upcoming conference, we can help.</div><div><br></div><div>Learn more about Unspoken’s White Labeling American Sign Interpreting Services, and the results we’ve delivered to our partnered agencies.</div>', '', NULL, '602980ebce25e.jpeg', '2021-02-14 13:58:35', '2021-02-14 17:06:49'),
(22, 'faq', 'Frequently Asked Questions (FAQ)', '<span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">Questions about the interpreting profession or about Unspoken? Find out here!&nbsp;</span>', '', NULL, '602993093543d.jpeg', '2021-02-14 14:17:44', '2021-02-14 15:15:53'),
(27, 'aboutus', '', '<span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">Unspoken Language Services is a boutique agency providing exclusive on-site American Sign Language interpreting services. We focus on servicing Deaf and Hard of Hearing consumers with the highest level of interpreting quality and cultural competence. We know your agency list was limitless, but you chose our passion-driven company to serve your communication needs best.</span>', '', NULL, '602e60c9d3198.jpeg', '2021-02-18 06:42:49', '2021-02-18 07:02:16'),
(28, 'contactus', '', NULL, NULL, NULL, '602ec93d09f54.jpg', NULL, '2021-02-18 14:08:29'),
(29, 'why-us', '...to the Client', '<p><font color=\"#74757f\" face=\"Work Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px; letter-spacing: 0.48px;\">Our ASL interpreters are driven by passion and dedication to the profession. We provide the best interpreters because you deserve the best. Professionalism, culturally knowledgeable, and timely interpreters are ready to serve your interpreting requests.</span></font></p><p><font color=\"#74757f\" face=\"Work Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px; letter-spacing: 0.48px;\"><br></span></font></p><p><font color=\"#74757f\" face=\"Work Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px; letter-spacing: 0.48px;\">As a boutique agency, we recognize that one size does not fit all; therefore, we carefully connect you with the right on-site interpreter for your company’s specific situation. Our extensively trained and certified interpreters each have various interpreting styles and specialized skills that tailor to your needs.</span></font></p><p>        </p>', 'http://127.0.0.1:8000/our-services', 'Request services', '6082dafe4c88c.jpeg', '2021-04-23 07:45:57', '2021-04-25 09:34:39'),
(30, 'why-us', '...to the Deaf Consumer', '<p><span style=\"color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; background-color: rgb(245, 246, 250);\">“Boutique” means you as the consumer, come first. Unspoken Language Services knows the importance of quality, consistency, and accuracy during an interpretation. Whether it is for an intimate medical appointment or a staff meeting, you have the right to preference your request by gender, signing style (ASL, Transliteration, etc.), and comfort level.</span></p><p><span style=\"color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; background-color: rgb(245, 246, 250);\">Unspoken Language Services’ goal is to bring complete awareness to the under-served Deaf Community by specializing in cultural mediation and interpretation and allying with you, as the consumer, to ensure your rights as an individual.</span><span style=\"color: rgb(116, 117, 127); font-family: \"Work Sans\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; background-color: rgb(245, 246, 250);\"><br></span>        </p>', '', NULL, '6082d00980130.jpeg', '2021-04-23 07:47:53', '2021-04-23 07:48:04'),
(31, 'why-us', '...to the Interpreter', '<span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">Unspoken Language Services is a boutique company owned and operated by American Sign Language interpreters, which means we respect and value your unique craft as an interpreter. We understand the amount of time and dedication it took to become one of the best in the industry, so we treat and compensate you as such. Apply today to be a part of our growing team!</span>', 'http://127.0.0.1:8000/join-us', 'Join Our Team', '6082d04b9b7a3.jpeg', '2021-04-23 07:48:59', '2021-04-23 12:39:52'),
(35, 'interpreter-promise', 'We\'re Paperless!', '<p class=\"wow-outer\" style=\"margin: 16px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: \" work=\"\" sans\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.48px;\"=\"\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">As a young, technology-based business, we eliminate the paperwork from the start of on-boarding, to the end of your first assignment, to getting you paid. Unspoken&nbsp;<b class=\"font-bold\" style=\"font-weight: bold;\">values</b>&nbsp;your time as working interpreters by making the process of contracting with us seamless.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: \" work=\"\" sans\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.48px;\"=\"\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Our interpreter scheduling app allows you to login into your account, see the jobs you have scheduled with us, and upon job completion, you can submit verification signatures and your total billing amount all in one location. We know you worked hard to get to where you are as professional interpreters, so we worked even harder to modify, customize, and minimize your contracting experience with us.</span></p>', '', '', '60832cb088acc.jpeg', '2021-04-23 13:38:10', '2021-04-23 14:23:12'),
(36, 'interpreter-promise', 'No Need to Explain...', '<p class=\"wow-outer\" style=\"margin: 16px 0px 0px; position: relative; overflow: hidden;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"><font color=\"#74757f\" face=\"Work Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px; letter-spacing: 0.48px;\">Contracting with us means no longer having to explain why you require a team for a job over two hours or having to constantly advocate for the professional boundaries crossed by average language agencies.</span></font></span><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"><font color=\"#74757f\" face=\"Work Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px; letter-spacing: 0.48px;\"><br></span></font></span><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"><font color=\"#74757f\" face=\"Work Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px; letter-spacing: 0.48px;\">We treat you like humans, not robots. Your personal health and well-being as an independent contractor always come first as one of our interpreters.</span></font></span></span></span></p>', '', '', '60832243c2ab4.jpeg', '2021-04-23 13:38:43', '2021-04-23 14:26:09'),
(37, 'interpreter-promise', 'Company Culture', '<p class=\"wow-outer\" style=\"margin: 16px 0px 0px; position: relative; overflow: hidden;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"><font color=\"#74757f\" face=\"Work Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px; letter-spacing: 0.48px;\">Unspoken Language Services is a boutique agency providing exclusive on-site American Sign Language interpreting services. We focus on servicing Deaf and hearing consumers with the highest quality of interpreting and cultural competence, and it starts with you.</span></font></span><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"><font color=\"#74757f\" face=\"Work Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px; letter-spacing: 0.48px;\"><br></span></font></span><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"><font color=\"#74757f\" face=\"Work Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif\"><span style=\"font-size: 16px; letter-spacing: 0.48px;\">As American Sign Language interpreters, we have first hand knowledge in understanding what it means to feel valued within an agency and how important it is to have a community of interpreters for additional professional support. We encourage open communication between our interpreters: whether it\'s for a debriefing period or an assignment concern prior to its start. We\'re here for you, just as much as you\'re here for us.</span></font></span></span></p>', '', '', '60832c82e955b.jpeg', '2021-04-23 13:39:28', '2021-04-23 14:26:39'),
(40, 'application', '', '<div>Unspoken Language Services have a boutique, close-knit atmosphere, where we\'re always searching to hire talented, highly skilled interpreters, who take pride in providing exceptional customer service amongst all participants involved in the interpreting process. Communication fluidity and professionalism between the interactions of the deaf and hearing clients cannot be emphasized enough.</div><div><br></div><div>In an effort to continue providing consistently outstanding services, Unspoken strongly endorses the NAD-RID Code of Professional Conduct (CPC). We serve a very diverse group of Deaf consumers, and we strive to work with like-minded professionals who adhere to its Principles and Tenets.</div><div><br></div><div>We hire committed and passionate ASL Interpreters that set themselves apart from the rest by honoring and upholding the principles of the NAD-RID CPC and Unspoken Promise. If you feel you deserve to work alongside our team of interpreters, complete the application below!&nbsp;</div>', '', '', '608332e09f77d.jpeg', '2021-04-23 14:24:44', '2021-04-23 14:49:36'),
(41, 'request-module', 'new', '<h4 class=\"wow-outer\" style=\"margin-bottom: 0px; font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; line-height: 1.33333; color: rgb(41, 41, 58); font-size: 24px; letter-spacing: 0px; position: relative; overflow: hidden; text-align: left;\"><span class=\"wow slideInDown\" style=\"display: block; animation-name: slideInDown; backface-visibility: hidden; visibility: visible;\">Getting Started in 3 EASY Steps!</span></h4><p class=\"wow-outer\" style=\"margin: 16px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"></span></p><ol style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: initial; list-style-image: initial; list-style-type: inherit; padding: 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\"><li style=\"display: block;\">1.&nbsp;<span style=\"color: rgb(51, 51, 51);\"><span style=\"font-weight: 700; color: rgb(116, 117, 127);\">CONNECT</span>: Send us your request below or</span>&nbsp;<a href=\"http://127.0.0.1:8000/contact-us\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s;\">inquiry</a>.</li><li style=\"display: block;\">2.&nbsp;<span style=\"color: rgb(51, 51, 51);\"><span style=\"font-weight: 700; color: rgb(116, 117, 127);\">AGREEMENT</span>: We will send you a simple electronic service agreement to establish a profile with us.</span></li><li style=\"display: block;\">3.&nbsp;<span style=\"color: rgb(51, 51, 51);\"><span style=\"font-weight: 700; color: rgb(116, 117, 127);\">REQUEST</span>: As a client with Unspoken Language Services, you can now access our interpreters easily by requesting services anytime via email:</span>&nbsp;<a href=\"mailto:services@unspokensigns.com\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s; white-space: nowrap;\">services@unspokensigns.com</a>&nbsp;<span style=\"color: rgb(51, 51, 51);\">or through your&nbsp;<a href=\"https://clienthub.getjobber.com/client_hubs/51f9fd26-4bd5-4ac9-bebe-5fea857c7e17/login/new\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s;\">online portal.</a></span></li></ol><p style=\"margin: 20px 0px 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\"></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Organizing a large conference requires a great deal of preparation, but the hiring of a quality sign language interpreter is frequently overlooked.</span></p><br style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\"><h4 class=\"wow-outer\" style=\"margin-top: 15px; margin-bottom: 0px; font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; line-height: 1.33333; color: rgb(41, 41, 58); font-size: 24px; letter-spacing: 0px; position: relative; overflow: hidden; text-align: left;\"><span class=\"wow slideInDown\" style=\"display: block; animation-name: slideInDown; backface-visibility: hidden; visibility: visible;\">A FEW THINGS TO NOTE:</span></h4><p class=\"wow-outer\" style=\"margin: 16px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\"></span></p><ol class=\"note-list\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none; padding: 0px; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px; text-align: left;\"><li style=\"display: block; padding-bottom: 10px; text-align: left;\"><blockquote style=\"margin-bottom: 0px; padding: 0px; border-left: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"color: rgb(51, 51, 51);\">1. → Requests are typically fulfilled within 24 hours</span></p></blockquote></li><li style=\"display: block; padding-bottom: 10px; text-align: left;\"><blockquote style=\"margin-bottom: 0px; padding: 0px; border-left: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"color: rgb(51, 51, 51);\">2. → Once we\'ve found the right interpreter, you will receive confirmation of services inclusive of your interpreter\'s name.</span></p></blockquote></li><li style=\"display: block; padding-bottom: 10px; text-align: left;\"><blockquote style=\"margin-bottom: 0px; padding: 0px; border-left: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"color: rgb(51, 51, 51);\">3. → If your request needs to be fulfilled in less than 24 hours<a href=\"http://127.0.0.1:8000/contact-us\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s;\">&nbsp;Contact Us</a>.</span></p></blockquote></li><li style=\"display: block; padding-bottom: 10px; text-align: left;\"><blockquote style=\"margin-bottom: 0px; padding: 0px; border-left: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><span style=\"color: rgb(51, 51, 51);\">4. → Additional questions? Please email us at&nbsp;<a href=\"mailto:services@unspokensigns.com\" style=\"color: rgb(0, 94, 84); text-decoration-line: underline; transition: all 0.3s ease-in-out 0s; white-space: nowrap;\">services@unspokensigns.com</a></span></p></blockquote></li></ol>', '', '', '60859f36d2543.jpeg', '2021-04-25 10:46:15', '2021-04-25 11:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `principlesofpromises`
--

CREATE TABLE `principlesofpromises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `principlesofpromises`
--

INSERT INTO `principlesofpromises` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Full Transparency', 'Our commitment is to operate our company in a way that produces a proficient request processing experience.&nbsp;', 'fa-underline', '2021-04-23 09:42:42', '2021-04-23 11:02:21'),
(2, 'Personable Customer Service', 'Our commitment is to provide high quality, convenient, and a personable client service experience that is instilled with timely and consistent communication.', 'fa-users', '2021-04-23 09:45:20', '2021-04-23 09:45:20'),
(3, 'Community Driven', 'We commit to uphold the utmost integrity of doing business within the community and demonstrate moral citizenship that embodies accountability for the outcome of our work.', 'fa-home', '2021-04-23 10:20:01', '2021-04-23 10:20:01'),
(4, 'Thorough Quality Control', 'We are committed to upholding elevated standards in the profession when evaluating, vetting, and placing our sign language interpreters in the field.', 'fa-id-card', '2021-04-23 10:21:12', '2021-04-23 10:21:12'),
(5, 'We’ll Make It Right', 'We commit to making it right should a challenge arise with our delivered interpreting services.', 'fa-handshake-o', '2021-04-23 10:22:59', '2021-04-23 10:22:59'),
(6, 'Feedback', 'We absolutely commit to actively extending the opportunity for our clients to share all aspects of their service experience. We want to hear from you!', 'fa-comments', '2021-04-23 10:24:18', '2021-04-23 10:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `token`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '94a35ace8ed7a2ec31b01e1a65075956', 'Medical Interpreting', '', '6011d522f04e0.jpeg', '2021-01-27 15:03:30', '2021-02-17 15:41:28'),
(2, '28b2eca726f8ec34ed76958e19739232', 'Mental Health Interpreting', '', '6011d56a89eec.jpeg', '2021-01-27 15:04:42', '2021-01-27 15:04:42'),
(3, 'a5e8431f8abe3ffe0c84f5629b2a1751', 'Legal Interpreting', '', '6011d6e60a07d.jpeg', '2021-01-27 15:11:02', '2021-01-27 15:11:02'),
(4, 'f177bb22df14f2346fe0c89b7606557d', 'Educational Interpreting', '', '6011d73a482a7.jpeg', '2021-01-27 15:12:26', '2021-01-27 15:12:26'),
(5, '79f59eb0e72238263a26ea02cbf6c5f7', 'Business Interpreting', '', '6011d765f3294.jpeg', '2021-01-27 15:13:09', '2021-01-27 15:13:09'),
(6, 'c0d778f215233e7465174561abddce63', 'Conference Interpreting', '', '60132b57ccd48.jpeg', '2021-01-27 15:14:49', '2021-01-28 15:23:35'),
(7, 'e2de3cf91afb86e3f32a324391e3556d', 'Worker\'s Compensation Interpreting', '', '6011d8308cdfa.jpeg', '2021-01-27 15:16:32', '2021-01-27 15:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `service_modules`
--

CREATE TABLE `service_modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_id` int(11) NOT NULL,
  `stoken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_modules`
--

INSERT INTO `service_modules` (`id`, `services_id`, `stoken`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Medical Interpreting', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Healthcare has a culture of its own: a language with special terminology most laypersons can not understand without further explanation.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Certified Medical Interpreters are intimately familiar with medical terminology and specialize in the communication of difficult concepts to deaf patients.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Our Medical Interpreters not only arrive to your medical facility prepared to work with a specific patient, but they have further prepared by researching the case as appropriate.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">All medical settings are sensitive; whether inpatient, outpatient, or a routine medical appointment, our interpreters are flexible and ready to adapt to a less than ideal interpreting environment.</span></p>', '6011f32fadd29.jpeg', '2021-01-27 17:11:43', '2021-02-17 15:40:47'),
(3, 2, '', 'Mental Health Interpreting', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Mental health and well-being is an important aspect of our overall health. Receiving effective communication during mental health healing is just as significant.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Qualified Mental Health Care Interpreters understand the professional boundaries involved in such a delicate setting. Our Mental Health Care interpreters are knowledgeable and trained to set clear boundaries between their obligation to relay communication and their human desire to help individuals in a compromised mental state.</span></p>', '6012ad7456a79.jpeg', '2021-01-28 06:26:28', '2021-01-28 06:26:28'),
(4, 2, '', 'Mental Health Interpreting', '<span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">Unspoken Words Language Services is pleased to have qualified Mental Health Care Interpreters in your area. We work closely with mental health care service providers to assist in the diagnosis process and have experience with treating a variety of mental disorders.</span>', '6012ad8cc78ec.jpeg', '2021-01-28 06:26:52', '2021-01-28 06:26:52'),
(5, 3, '', 'Legal Interpreting', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">American justice system a threatening and difficult place for those who are deaf and solely rely on a visual language, ASL, as their main form of communication. Whether the Deaf or Deaf/Blind are involved at a crime scene, at a courthouse, in a law office, or incarcerated, a great injustice and disservice occurs when appropriate accommodations are not provided.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Any situation where a deaf person is involved in legal proceedings, a highly qualified Legal Interpreter is the best approach in dissolving the communication hurdle.</span></p>', '6012ae9c33634.jpeg', '2021-01-28 06:31:24', '2021-01-28 06:31:24'),
(6, 3, '', 'Legal Interpreting', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Legal Interpreters are not restricted to only courtroom proceedings. In fact, qualified Legal Interpreters are privileged to all appropriate accommodation interactions between attorneys and their deaf clients, especially during depositions, witness interviews, administrative or legislative hearings.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Court-ordered treatment, education programs or meetings between deaf defendants and representatives of the court are also settings within the legal arena where qualified Legal Interpreters should be utilized.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Qualified Legal Interpreters develop a unique skill set, enabling them to facilitate spoken, legal jargon clearly without interjecting personal bias or beliefs. High skilled Legal Interpreters are able to convey legal messages comprehensively for full deaf participation in the justice system. Civil rights awards Deaf people the opportunity to have appropriate access to qualified Legal Interpreters. Specific and special expertise in this interpreting setting is of the utmost importance.</span></p>', '6012aebc17b4f.jpeg', '2021-01-28 06:31:56', '2021-01-28 06:31:56'),
(7, 4, '', 'Education K-12', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Deaf children who do not attend Schools for the Deaf are enrolled into local mainstream hearing schools. Now more than ever, deaf children are entering their local mainstream classrooms. In order for deaf students to adapt to their hearing surroundings, accommodations are made.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Educational interpreters are a unique group of individuals with certifications surrounding the special nature of growing minds and fostering peer interactions.</span></p>', '6012af8644c17.jpeg', '2021-01-28 06:35:18', '2021-01-28 06:35:18'),
(8, 4, '', 'Education K-12', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Providing exceptional Educational Interpreters during this impressionable time can not be more prominent. Inadequate interpreters are more detrimental to the deaf child than any other participant involved.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Unspoken Language Services carefully screen its interpreters to determine skill set and experience and pair each deaf student with the best possible interpreter. Using this method of attentive placement maximizes student growth and allows for an optimized learning environment.</span></p>', '6012afa2131ed.jpeg', '2021-01-28 06:35:46', '2021-01-28 06:35:46'),
(9, 5, '', 'Business Interpreting', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Before a deaf individual becomes a part of your growing team, they typically follow the hiring process similar to their hearing cohorts.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Deaf employees remain the minority in various business settings, which leaves managers and other employees left wondering how to collaborate with their deaf colleagues when faced with the communication challenge.</span></p>', '6012b075cc828.jpeg', '2021-01-28 06:39:17', '2021-01-28 06:39:17'),
(10, 5, '', 'Business Interpreting', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Business Interpreters can mend this divide of understanding by effectively interpreting interviews with potential deaf employees, business meetings and employee training sessions.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">To functionally communicate, you require a Business Interpreter who is knowledgeable with business operations, common industry utterances, carry a professional demeanor, and is ultimately comfortable working in a fast-paced, dynamic workspace.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Unspoken Language Services offers interpreters who understand that miscommunication is not an option in the workplace. Qualified Business Interpreters take the time to research each organization and are fully prepared with basic knowledge of the client and the deaf employee.</span></p>', '6012b09c89fa2.jpeg', '2021-01-28 06:39:56', '2021-01-28 06:39:56'),
(11, 6, '', 'Conference Interpreting', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Millions of people from around the world watched as the “interpreter” at Nelson Mandela’s funeral signed garble to deaf South Africans. Unfortunately, this is an example of a common occurrence within the Deaf Community. This form of service is highly unacceptable and disrespectful to the d/Deaf Community.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Organizing a large conference requires a great deal of preparation, but the hiring of a quality sign language interpreter is frequently overlooked.</span></p>', '6012b15ced449.jpeg', '2021-01-28 06:43:08', '2021-01-28 06:43:08'),
(12, 6, '', 'Conference Interpreting', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">By providing qualified Conference or Platform Interpreters at your large event to deaf consumers, you are ensuring equal access and full participation. Hiring the most appropriate, skilled interpreters for the event is vital.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Conference Interpreters possess the ability to grasp the overall meaning to effectively follow the speaker\'s message.</span></p>', '6012b179b0638.jpeg', '2021-01-28 06:43:37', '2021-01-28 06:43:37'),
(13, 7, '', 'Worker’s Compensation', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">All employees injured on the job are entitled to Worker’s Compensation benefits. In accordance with their employer’s obligation, employees unable to speak, understand or communicate in English must have an interpreter readily available.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Language barriers between your Deaf Injured Workers, medical providers, and others a part of the Worker\'s Compensation case can heavily disrupt prompt Return-To-Work and the overall medical recovery process- causing unnecessary, additional costs to the claim.</span></p>', '60132f3598f07.jpeg', '2021-01-28 06:46:56', '2021-01-28 15:40:05'),
(14, 7, '', 'Worker’s Compensation', '<span style=\"color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\">Our Worker’s Compensation interpreters are professionally trained to work with your injured workers throughout the duration of their treatment and recovery starting with the initial meetings between the injured workers and the insurer, Qualified Rehabilitation Consultant, or Case Manager.</span>', '6012b25a2cae5.jpeg', '2021-01-28 06:47:22', '2021-01-28 06:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `service_setting`
--

CREATE TABLE `service_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_id` int(11) NOT NULL,
  `stoken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_setting`
--

INSERT INTO `service_setting` (`id`, `services_id`, `stoken`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Health and Wellness', '6012a1d3ecda8.jpeg', '2021-01-28 05:36:51', '2021-01-28 06:05:43'),
(2, 1, '', 'Routine Medical Appointments', '6012a255e372a.jpeg', '2021-01-28 05:39:01', '2021-01-28 05:39:01'),
(3, 1, '', 'Surgical', '6012a27b495b6.jpeg', '2021-01-28 05:39:39', '2021-01-28 05:39:39'),
(4, 1, '', 'OB/GYN', '6012a2a063102.jpeg', '2021-01-28 05:40:16', '2021-01-28 05:40:16'),
(7, 2, '', 'Small Group Therapy', '6012adb34c428.jpeg', '2021-01-28 06:27:31', '2021-01-28 06:27:31'),
(8, 2, '', 'Hypnotherapy', '6012adc797e65.jpeg', '2021-01-28 06:27:51', '2021-01-28 06:27:51'),
(9, 2, '', 'Family Therapy', '6012add7e214c.jpeg', '2021-01-28 06:28:07', '2021-01-28 06:28:07'),
(10, 2, '', 'Interpersonal Therapy', '6012ae1773a74.jpeg', '2021-01-28 06:29:11', '2021-01-28 06:29:11'),
(11, 3, '', 'Court-Ordered Treatment Programs', '6012aeda39db6.jpeg', '2021-01-28 06:32:26', '2021-01-28 06:32:26'),
(12, 3, '', 'Attorney/Client Meetings', '6012aeedeb429.jpeg', '2021-01-28 06:32:45', '2021-01-28 06:32:45'),
(13, 3, '', 'Administrative & Legislative Hearings', '6012af066cfad.jpeg', '2021-01-28 06:33:10', '2021-01-28 06:33:10'),
(14, 3, '', 'Legal Depositions', '6012af19d8c05.jpeg', '2021-01-28 06:33:29', '2021-01-28 06:33:29'),
(15, 4, '', 'Pre-School/ Pre-K', '6012afbac81e3.jpeg', '2021-01-28 06:36:10', '2021-01-28 06:36:10'),
(16, 4, '', 'Elementary', '6012afcfb29b5.jpeg', '2021-01-28 06:36:31', '2021-01-28 06:36:31'),
(17, 4, '', 'Junior & High School', '6012afdf09958.jpeg', '2021-01-28 06:36:47', '2021-01-28 06:36:47'),
(18, 4, '', 'Post-Secondary', '6012afeb298f2.jpeg', '2021-01-28 06:36:59', '2021-01-28 06:36:59'),
(19, 5, '', 'Private/ Small Team Building', '6012b0b90345e.jpeg', '2021-01-28 06:40:25', '2021-01-28 06:40:25'),
(20, 5, '', 'Collaboration & Innovation Meetings', '6012b0c75594c.jpeg', '2021-01-28 06:40:39', '2021-01-28 06:40:39'),
(21, 5, '', 'Board Meetings', '6012b0d48dd51.jpeg', '2021-01-28 06:40:52', '2021-01-28 06:40:52'),
(22, 5, '', 'Employment & Interview Services', '6012b0f21b4b6.jpeg', '2021-01-28 06:41:22', '2021-01-28 06:41:22'),
(23, 6, '', 'Lectures', '6012b18fb00fe.jpeg', '2021-01-28 06:43:59', '2021-01-28 06:43:59'),
(24, 6, '', 'Professional Development', '6012b19db60f8.jpeg', '2021-01-28 06:44:13', '2021-01-28 06:44:13'),
(25, 6, '', 'Seminars & Workshops', '6012b1ae9442b.jpeg', '2021-01-28 06:44:30', '2021-01-28 06:44:30'),
(26, 6, '', 'Formal Presentations', '6012b1bf09c2a.jpeg', '2021-01-28 06:44:47', '2021-01-28 06:44:47'),
(27, 7, '', 'Medical Appointments', '6012b2a48f084.jpeg', '2021-01-28 06:48:36', '2021-01-28 06:48:36'),
(28, 7, '', 'AMEs, IMEs, & QMEs', '6012b2b9aea16.jpeg', '2021-01-28 06:48:57', '2021-01-28 06:48:57'),
(29, 7, '', 'In-patient/ Out-patient', '6012b2c83d82f.jpeg', '2021-01-28 06:49:12', '2021-01-28 06:49:12'),
(30, 7, '', 'Physical & Occupational Therapy Appointments', '6012b2d6a3eb9.jpeg', '2021-01-28 06:49:26', '2021-01-28 06:49:26'),
(31, 7, '', 'Depositions Arbitrations Hearings Trials', '6012b2ebb429b.jpeg', '2021-01-28 06:49:47', '2021-01-28 06:49:47'),
(32, 7, '', 'Attorney Meetings', '6012b2fc72e5e.jpeg', '2021-01-28 06:50:04', '2021-01-28 06:50:04'),
(34, 7, '', 'Mediations & MSCs', '60133741914ee.jpeg', '2021-01-28 06:50:34', '2021-01-28 16:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `linkedin`, `twitter`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 'https://www.linkedin.com/in/unspokeninc', 'https://twitter.com/Unspoken_Inc', 'https://www.facebook.com/officiallyunspoken', '2021-02-16 20:29:38', '2021-02-18 14:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rajkumar', 'admin@gmail.com', NULL, '$2y$10$WyBjOSHA9IJc.VW.Dn0p4OXnf2Th5QwOuR6W0lv4mxG1eHU4zuz3W', 'nv8R93cI9bL1WV7gBinqfCyqgdLQjW4QDpoDE9aB14KOdTRKqFIfgPzvKUe4', '2021-01-26 12:34:16', '2021-01-26 12:34:16'),
(2, 'ziko', 'ziko@gmail.com', NULL, '$2y$10$CUoTYDmEe9wJl1Wu.3s7zOeYr28dCrMWYe1.SPVO7cL4alvjRAEwO', NULL, '2021-01-27 02:19:03', '2021-01-27 02:19:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_truests`
--
ALTER TABLE `client_truests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fquestions`
--
ALTER TABLE `fquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pageintro_text`
--
ALTER TABLE `pageintro_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagemodules`
--
ALTER TABLE `pagemodules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `principlesofpromises`
--
ALTER TABLE `principlesofpromises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_modules`
--
ALTER TABLE `service_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_setting`
--
ALTER TABLE `service_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `client_truests`
--
ALTER TABLE `client_truests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fquestions`
--
ALTER TABLE `fquestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pageintro_text`
--
ALTER TABLE `pageintro_text`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pagemodules`
--
ALTER TABLE `pagemodules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `principlesofpromises`
--
ALTER TABLE `principlesofpromises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service_modules`
--
ALTER TABLE `service_modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_setting`
--
ALTER TABLE `service_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
