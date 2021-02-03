-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 06:51 PM
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
(9, '2021_02_02_200921_create_client_truests_table', 3);

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
(1, 'our-services', 'American Sign Language (ASL) Interpreting', '<p>Unspoken Language Services is here to ease the language barrier by providing exclusive American Sign Language Interpreting and Transliteration services. We mend the communication challenge amongst an array of hearing calibers while maintaining the utmost professionalism and competence.</p><p>\r\n                                </p>', '2021-01-12 09:27:56', '2021-01-29 12:05:43');

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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagemodules`
--

INSERT INTO `pagemodules` (`id`, `page_name`, `title`, `description`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'our-services', 'What is ASL?', '<p class=\"wow-outer\" style=\"margin: 30px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">American Sign Language is an unspoken visual language used predominately in the United States and parts of Canada. The language uses shapes, placement, and movements of the hands, along with facial expressions and body movements to convey information.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".1s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.1s;\">Much like the numerous spoken languages around the world, ASL has its own syntax structure and distinctive rules of grammar. As a natural language, sign language is constantly developing and evolving over time.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".1s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.1s;\">Through the use of this visual complex language, Unspoken offers premium American Sign Language interpreting services that make it easier for you and your deaf consumer to freely exchange knowledge and ideas in any environment.</span></p>', '', '60115d718f598.jpg', '2021-01-27 06:32:49', '2021-01-27 06:32:49'),
(9, 'slider', 'Why Us?', 'We are more than just another mainstream language agency providing interpreting services.', 'http://127.0.0.1:8000/the-unspoken-promise', '601947229fc0c.jpeg', '2021-02-02 06:35:46', '2021-02-02 13:34:51'),
(10, 'slider', 'Request Services', 'Request Services Let us carefully connect you with the right on-site interpreter for your company\'s needs.', 'http://127.0.0.1:8000/request-services', '6019526baa240.jpeg', '2021-02-02 06:38:40', '2021-02-02 15:27:29'),
(11, 'slider', 'Our Services', 'Unspoken\'s interpreters have specialized and extensive training in a variety of settings.', 'http://127.0.0.1:8000/our-services', '601949706d79f.jpeg', '2021-02-02 06:45:36', '2021-02-03 06:52:55'),
(13, 'home', 'Why Us?', '<div>We are more than just another mainstream language agency providing interpreting services. We are a boutique company, owned and operated by American Sign Language interpreters. We know your agency list was limitless, but you chose our passion-driven company to serve your communication needs best.</div><div><br></div><div>With Unspoken Language Services, you speak directly to our team, not an answering service. Providing committed, personable, high quality, and in the moment communication access to our consumers and clients are paramount, guaranteeing a humanistic experience.</div>', 'http://127.0.0.1:8000/the-unspoken-promise', '6019af6b8fac0.jpeg', '2021-02-02 13:38:08', '2021-02-02 14:00:52'),
(14, 'home', 'Our Services', '<div>Unspoken\'s interpreters have specialized and extensive training in a variety of settings including, but not limited to: Medical, Worker\'s Compensation, Mental Health, Legal, Business, Conference, and Education. We are ready to cater to your specific interpreting needs.</div><div><br></div><div>Our goal is to use American Sign Language and Transliteration to better facilitate communication amongst an array of hearing calibers while maintaining the utmost professionalism and competence.</div>', 'http://127.0.0.1:8000/our-services', '6019aa63dbe9e.jpeg', '2021-02-02 13:39:15', '2021-02-02 13:39:15'),
(15, 'home', 'Request Services', '<div>Let us carefully connect you with the right on-site interpreter for your company\'s needs. Our extensively trained and certified interpreters each have various interpreting styles and specialized skills that tailor to your request.</div><div><br></div><div>Contact us today to bring a humanistic approach to your ASL interpreting experience!</div>', 'http://127.0.0.1:8000/request-services', '6019aad8e1732.jpeg', '2021-02-02 13:41:12', '2021-02-02 13:41:12');

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
(1, '94a35ace8ed7a2ec31b01e1a65075956', 'Medical Interpreting', '', '6011d522f04e0.jpeg', '2021-01-27 15:03:30', '2021-01-27 15:03:30'),
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
(1, 1, '', 'Medical Interpreting', '<p class=\"wow-outer\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Healthcare has a culture of its own: a language with special terminology most laypersons can not understand without further explanation.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Certified Medical Interpreters are intimately familiar with medical terminology and specialize in the communication of difficult concepts to deaf patients.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">Our Medical Interpreters not only arrive to your medical facility prepared to work with a specific patient, but they have further prepared by researching the case as appropriate.</span></p><p class=\"wow-outer\" style=\"margin: 14px 0px 0px; position: relative; overflow: hidden; color: rgb(116, 117, 127); font-family: &quot;Work Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; letter-spacing: 0.48px;\"><span class=\"wow slideInDown\" data-wow-delay=\".05s\" style=\"animation-name: slideInDown; backface-visibility: hidden; display: block; visibility: visible; animation-delay: 0.05s;\">All medical settings are sensitive; whether inpatient, outpatient, or a routine medical appointment, our interpreters are flexible and ready to adapt to a less than ideal interpreting environment.</span></p>', '6011f32fadd29.jpeg', '2021-01-27 17:11:43', '2021-01-28 04:03:49'),
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
(1, 'rajkumar', 'admin@gmail.com', NULL, '$2y$10$WyBjOSHA9IJc.VW.Dn0p4OXnf2Th5QwOuR6W0lv4mxG1eHU4zuz3W', 'oEbBMV02jt027Gw8DgLPKdA6Ik6B3O5pxwy7GmvrGsYq0NPFFH6wzsN4sqtG', '2021-01-26 12:34:16', '2021-01-26 12:34:16'),
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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pageintro_text`
--
ALTER TABLE `pageintro_text`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pagemodules`
--
ALTER TABLE `pagemodules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_modules`
--
ALTER TABLE `service_modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `service_setting`
--
ALTER TABLE `service_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
