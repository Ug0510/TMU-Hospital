-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 01:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmu_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(20) UNSIGNED NOT NULL,
  `url_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `research_image` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `research_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `url_name`, `name`, `research_image`, `bg_image`, `description`, `research_description`) VALUES
(1, 'cardiology', 'Cardiology', 'img/department/cardiology/cardiology-side-banner.jpg', 'img/departments/cardiology/banner.jpg', 'The Cardiology department at our hospital is a specialized unit dedicated to providing top-notch cardiac care. Our state-of-the-art facilities include a fully equipped cardiac catheterization lab, advanced imaging technology, and a dedicated team of cardiologists and cardiac surgeons. We offer comprehensive diagnostic and therapeutic services, including coronary angiography, angioplasty, and bypass surgery. Our focus is on delivering personalized care to each patient, ensuring the best outcomes for both emergency and elective cardiac procedures. Additionally, our team is available 24/7 to handle any cardiac emergencies.', 'Our Cardiology Department is at the forefront of cardiovascular research. We participate in numerous clinical trials and studies to advance the field of cardiology and bring cutting-edge treatments to our patients.'),
(2, 'neurology', 'Neurology', 'img/department/neurology/neurology-side-banner.jpg', 'img/departments/neurology/banner.jpg', 'Our Neurology department is a center of excellence for the diagnosis and treatment of neurological disorders. We are equipped with the latest technology, including MRI, CT scans, and electroencephalograms (EEG), to provide accurate diagnoses. Our team of neurologists and neurosurgeons are experts in treating conditions such as epilepsy, stroke, multiple sclerosis, and Parkinson\\’s disease. We offer both inpatient and outpatient services, ensuring that our patients receive the care they need at every stage of their treatment. Our multidisciplinary approach ensures comprehensive care tailored to the specific needs of each patient.', 'Our Neurology Department is at the forefront of neurological research. We are committed to advancing the understanding and treatment of neurological disorders through cutting-edge clinical trials and studies. Our goal is to provide innovative care and improve the quality of life for patients with neurological conditions.'),
(3, 'orthopedics', 'Orthopedics', 'img/department/orthopedics/orthopedics-side-banner.jpg', 'https://t3.ftcdn.net/jpg/03/65/94/80/360_F_365948017_mOpdKXyJc6sCtjngK3F4sbTUMmCmCZCp.jpg', 'The Orthopedics department at our hospital is committed to providing the highest level of care for patients with musculoskeletal conditions. Our services cover a wide range of orthopedic issues, from fractures and joint replacements to sports injuries and spinal disorders. We utilize the latest surgical techniques, including minimally invasive procedures, to ensure quick recovery and minimal discomfort. Our team of orthopedic surgeons, physical therapists, and rehabilitation specialists work together to create individualized treatment plans that cater to the unique needs of each patient, ensuring optimal outcomes and a return to active life.', ''),
(4, 'pediatrics', 'Pediatrics', 'img/department/pediatrics/pediatrics-side-banner.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYW0VcgtF0WJ29QP1b9eG2R5rde8Hoo4AlrA&s', 'Our Pediatrics department is designed to cater to the healthcare needs of children from birth to adolescence. We offer a child-friendly environment with a team of experienced pediatricians, nurses, and child care specialists dedicated to ensuring the health and well-being of our young patients. Services include routine check-ups, vaccinations, growth monitoring, and treatment for acute and chronic illnesses. We also provide specialized care for newborns and premature babies in our neonatal intensive care unit (NICU). Our focus is on providing compassionate care that supports the physical, emotional, and developmental needs of children.', ''),
(5, 'oncology', 'Oncology', 'img/department/oncology/oncology-side-banner.jpg', 'https://www.shutterstock.com/image-vector/oncology-banner-illustration-medical-background-260nw-2085762373.jpg', 'The Oncology department at our hospital is dedicated to the comprehensive care of patients with cancer. We offer cutting-edge treatments, including chemotherapy, radiation therapy, and immunotherapy, all tailored to the specific needs of each patient. Our team of oncologists, surgeons, and support staff work together to provide holistic care that addresses both the physical and emotional aspects of cancer treatment. We also offer palliative care services to enhance the quality of life for patients with advanced cancer. Our goal is to provide compassionate, patient-centered care that supports our patients through every stage of their cancer journey.', ''),
(6, 'nephrology', 'Nephrology', 'img/departments/nephrology/banner_nephrology.jpg', 'img/departments/nephrology/banner.jpg', 'Nephrology is the medical specialty focused on the diagnosis, treatment, and management of kidney diseases. Our department provides comprehensive care for patients with a wide range of kidney-related conditions, including chronic kidney disease, dialysis, and kidney transplantation.', 'Our Nephrology Department is pioneering research in kidney disease, focusing on innovative treatments and early diagnosis methods. We collaborate with leading institutions on groundbreaking studies to improve patient outcomes.'),
(7, 'neuro_surgery', 'Neuro Surgery', '', 'img/departments/neuro_surgery/banner.jpg', 'The Department of Neuro Surgery specializes in the diagnosis and surgical treatment of neurological disorders affecting the brain, spine, and peripheral nerves. Our team of experienced neurosurgeons employs the latest techniques to treat conditions such as brain tumors, spinal disorders, and traumatic injuries.', 'Research in neuro surgery is dedicated to advancing surgical techniques, enhancing recovery outcomes, and developing minimally invasive procedures. Our ongoing studies include work on brain-computer interfaces, spinal cord injury repair, and neuro-oncology.'),
(8, 'ctvs', 'CTVS', 'img/departments/ctvs/banner_ctvs.jpg', 'img/departments/ctvs/banner.jpg', 'The CTVS department focuses on the surgical treatment of diseases affecting the heart, lungs, esophagus, and major blood vessels. Our skilled surgeons are experts in procedures such as coronary artery bypass grafting, heart valve repair, and lung resection.', 'Our CTVS Department is at the forefront of research in cardiothoracic and vascular surgery. We focus on developing minimally invasive techniques and improving long-term outcomes for patients undergoing complex surgeries.'),
(9, 'plastic_surgery', 'Plastic Surgery', 'img/departments/plasticsurgery/banner_plasticsurgery.jpg', 'img/departments/plastic_surgery/banner.jpg', 'The Department of Plastic Surgery offers a wide range of services, including reconstructive surgery, cosmetic procedures, and burn treatment. We aim to restore function and appearance, helping patients regain confidence and quality of life.', 'Our Plastic Surgery Department is committed to advancing the science of reconstructive and aesthetic surgery. We participate in innovative research projects that aim to enhance surgical outcomes and patient satisfaction.'),
(10, 'gastroenterology', 'Gastroenterology', 'img/departments/gastroenterology/banner_gastroenterology.jpg', 'img/departments/gastroenterology/banner.jpg', 'Gastroenterology is dedicated to the diagnosis and treatment of digestive system disorders, including conditions affecting the esophagus, stomach, intestines, liver, pancreas, and gallbladder. Our department provides comprehensive care with state-of-the-art diagnostic tools and therapeutic interventions.', 'Our Gastroenterology Department leads research in digestive health, focusing on new treatments for gastrointestinal disorders. We collaborate with global experts to bring the latest advancements in patient care.'),
(11, 'urology', 'Urology', 'img/departments/urology/banner_urology.jpg', 'img/departments/urology/banner.jpg', 'The Department of Urology provides specialized care for disorders of the urinary system and male reproductive organs. Our services include the management of conditions such as kidney stones, urinary incontinence, prostate disorders, and male infertility.', 'Our Urology Department is at the cutting edge of research in urological health. We engage in clinical trials and studies to develop new therapies for urological conditions, ensuring our patients receive the best care possible.'),
(12, 'endocrinology', 'Endocrinology', 'img/departments/endocrinology/banner_endocrinology.jpg', 'img/departments/endocrinology/banner.jpg', 'The Endocrinology department specializes in the diagnosis and treatment of hormonal disorders, including diabetes, thyroid diseases, adrenal gland disorders, and metabolic conditions. Our comprehensive approach integrates medical management, lifestyle changes, and patient education.', 'Our Endocrinology Department is focused on advancing the understanding of endocrine disorders. We are involved in research that aims to improve the diagnosis, treatment, and management of conditions like diabetes and thyroid disease.'),
(13, 'pulmonology', 'Pulmonology', 'img/departments/pulmonology/banner_pulmonology.jpg', 'img/departments/pulmonology/banner.jpg', 'The Pulmonology department provides comprehensive care for respiratory system diseases, including asthma, chronic obstructive pulmonary disease (COPD), pulmonary fibrosis, and lung infections. Our specialists use advanced diagnostic and therapeutic techniques to manage these conditions effectively.', 'Our Pulmonology Department is dedicated to research in respiratory health. We work on innovative treatments for lung diseases and participate in international studies to bring the latest advancements to our patients.');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hods`
--

CREATE TABLE `hods` (
  `id` int(20) UNSIGNED NOT NULL,
  `department_id` int(20) UNSIGNED DEFAULT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualifications` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hods`
--

INSERT INTO `hods` (`id`, `department_id`, `image_url`, `quote`, `name`, `title`, `qualifications`) VALUES
(1, 1, 'img/departments/cardiology/hod.jpg', 'It is my firm belief that harmonious development of the society can be achieved by enlightenment of the individual heart, mind and soul. This has become a prerequisite in today’s fast changing world where material gains have out-placed basic human values.', 'Dr Shalabh Agarwal', 'Senior Interventional Cardio Surgeon', 'MBBS, MD, DM(Cardiology), FSCAI(USA), FESC(Europe)'),
(2, 6, 'img/departments/nephrology/hod.jpg', 'Our commitment to excellence in nephrology drives us to offer the best care to patients with kidney disorders. We believe in holistic treatment approaches that consider both the physical and emotional well-being of our patients.', 'Dr Rajesh Sharma', 'Head of Nephrology', 'MBBS, MD, DM(Nephrology)'),
(3, 7, 'img/departments/neuro_surgery/hod.jpg', 'Neurosurgery requires precision, dedication, and continuous learning. We are at the forefront of advancements in brain and spine surgery, ensuring our patients receive the most innovative care.', 'Dr Anil Kumar', 'Chief Neurosurgeon', 'MBBS, MS, MCh(Neurosurgery)'),
(4, 8, 'img/departments/ctvs/hod.jpg', 'Our Cardiothoracic and Vascular Surgery department is driven by a passion for innovation and excellence in treating complex cardiac and vascular conditions.', 'Dr Vishal Bansal', 'Consultant CTVS Surgeon', 'MBBS, MS, MCh(CTVS)'),
(5, 9, 'img/departments/plastic_surgery/hod.jpg', 'Plastic Surgery is not just about enhancing appearance; it is about restoring confidence and improving quality of life. Our team is dedicated to providing world-class care.', 'Dr Meenakshi Gupta', 'Head of Plastic Surgery', 'MBBS, MS, MCh(Plastic Surgery)'),
(6, 10, 'img/departments/gastroenterology/hod.jpg', 'In Gastroenterology, we strive to offer the best diagnostic and therapeutic services, ensuring that our patients lead healthy and fulfilling lives.', 'Dr Sandeep Singh', 'Senior Gastroenterologist', 'MBBS, MD, DM(Gastroenterology)'),
(7, 11, 'img/departments/urology/hod.jpg', 'Our Urology department is committed to advancing the field through research and compassionate patient care, focusing on the well-being of our patients.', 'Dr Pankaj Kumar', 'Head of Urology', 'MBBS, MS, MCh(Urology)'),
(8, 12, 'img/departments/endocrinology/hod.jpg', 'Endocrinology is about understanding the delicate balance of hormones in the body. Our goal is to provide comprehensive care to patients with endocrine disorders.', 'Dr Anjali Verma', 'Chief Endocrinologist', 'MBBS, MD, DM(Endocrinology)'),
(9, 13, 'img/departments/pulmonology/hod.jpg', 'Our Pulmonology department is dedicated to improving lung health through research, patient care, and public awareness, helping our patients breathe easier.', 'Dr Rakesh Yadav', 'Senior Pulmonologist', 'MBBS, MD, DM(Pulmonology)');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_01_065851_create_departments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(20) UNSIGNED NOT NULL,
  `department_id` int(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `department_id`, `title`, `description`) VALUES
(1, 1, 'Diagnostic Testing', 'Electrocardiograms (EKG/ECG) \nEchocardiography (Trans-thoracic & Trans-esophageal). \nNeonatal & pediatric Echocardiography \nStress Testing \nHolter Monitoring & ambulatory BP monitoring \nCardiac MRI and CT'),
(2, 1, 'Electrophysiology', 'Temporary and permanent pacemaker Implantation \n Implantable Cardioverter Defibrillator (ICD) implantation \n CRT and Combo device implantation. \n Ablation Procedures \n EP Study & RF ablation (monthly camp)'),
(3, 1, 'Cardiac Surgery', 'Coronary artery bypass surgery (CABG including minimal invasive surgery) \n Valve replacements \n Adult congenital heart disease surgeries \n Thoracic & Vascular surgeries \n Pericardial procedures'),
(4, 1, 'Preventive Cardiology', 'Risk Factor Assessment \n Lifestyle Modification Programs \n Nutritional Counseling \n Cardiac Rehabilitation'),
(5, 1, 'Hypertension Management', 'Blood Pressure Monitoring \n ABPM \n Medication and Lifestyle Modifications \n Advanced Hypertension Treatment'),
(30, 6, 'Dialysis Services', 'Hemodialysis \n Peritoneal Dialysis \n Continuous Ambulatory Peritoneal Dialysis (CAPD) \n Home Dialysis Training'),
(31, 6, 'Kidney Transplant', 'Live Donor Kidney Transplant \n Cadaveric Kidney Transplant \n Post-Transplant Care \n Immunosuppressive Therapy'),
(32, 6, 'Chronic Kidney Disease Management', 'Blood Pressure Control \n Dietary Counseling \n Medication Management \n Slow Progression of Kidney Disease'),
(33, 7, 'Brain Tumor Surgery', 'Stereotactic Brain Surgery \n Skull Base Surgery \n Minimally Invasive Brain Tumor Removal \n Gamma Knife Surgery'),
(34, 7, 'Spine Surgery', 'Laminectomy \n Spinal Fusion \n Minimally Invasive Spine Surgery \n Disk Replacement'),
(35, 7, 'Trauma and Emergency Neuro Surgery', 'Head Injury Management \n Acute Spinal Cord Injury Treatment \n Neuro-Intensive Care Unit \n Craniotomy for Trauma'),
(36, 8, 'Coronary Artery Bypass Grafting (CABG)', 'Conventional CABG \n Off-pump CABG \n Minimally Invasive CABG \n Arterial Revascularization'),
(37, 8, 'Valve Surgery', 'Valve Repair \n Valve Replacement \n Minimally Invasive Valve Surgery \n Ross Procedure'),
(38, 8, 'Thoracic Surgery', 'Lung Resection \n Esophageal Surgery \n Chest Wall Reconstruction \n Mediastinal Surgery'),
(39, 9, 'Reconstructive Surgery', 'Cleft Lip and Palate Repair \n Burn Reconstruction \n Hand Surgery \n Microsurgery'),
(40, 9, 'Aesthetic Surgery', 'Rhinoplasty \n Liposuction \n Breast Augmentation \n Facelift'),
(41, 9, 'Craniofacial Surgery', 'Craniosynostosis Repair \n Orthognathic Surgery \n Facial Reconstruction \n Pediatric Craniofacial Surgery'),
(42, 10, 'Endoscopy Services', 'Diagnostic Endoscopy \n Therapeutic Endoscopy \n Colonoscopy \n Endoscopic Ultrasound'),
(43, 10, 'Liver Disease Management', 'Hepatitis Treatment \n Cirrhosis Management \n Liver Transplant Evaluation \n Alcoholic Liver Disease Treatment'),
(44, 10, 'Inflammatory Bowel Disease (IBD) Treatment', 'Crohn’s Disease Management \n Ulcerative Colitis Treatment \n Nutritional Support \n Biologic Therapy'),
(45, 11, 'Kidney Stone Management', 'Shockwave Lithotripsy (SWL) \n Ureteroscopy \n Percutaneous Nephrolithotomy (PCNL) \n Dietary Counseling'),
(46, 11, 'Prostate Treatment', 'Prostate Cancer Surgery \n Benign Prostatic Hyperplasia (BPH) Treatment \n Laser Prostate Surgery \n PSA Screening'),
(47, 11, 'Male Infertility Treatment', 'Varicocele Repair \n Vasectomy Reversal \n Testicular Biopsy \n Sperm Retrieval Techniques'),
(48, 12, 'Diabetes Management', 'Insulin Therapy \n Continuous Glucose Monitoring (CGM) \n Diabetes Education \n Lifestyle Counseling'),
(49, 12, 'Thyroid Disorders', 'Hypothyroidism Management \n Hyperthyroidism Treatment \n Thyroid Surgery \n Thyroid Cancer Care'),
(50, 12, 'Obesity Treatment', 'Medical Weight Loss Programs \n Bariatric Surgery \n Metabolic Syndrome Management \n Nutritional Counseling'),
(51, 13, 'Asthma and Allergy Management', 'Pulmonary Function Testing \n Allergy Testing \n Inhalation Therapy \n Asthma Education'),
(52, 13, 'Chronic Obstructive Pulmonary Disease (COPD) Treatment', 'Lung Function Monitoring \n Smoking Cessation Programs \n Oxygen Therapy \n Pulmonary Rehabilitation'),
(53, 13, 'Lung Cancer Diagnosis and Treatment', 'Bronchoscopy \n Lung Biopsy \n Chemotherapy and Radiation \n Thoracic Surgery'),
(54, 2, 'Stroke Management', 'Acute Stroke Care \n Thrombolytic Therapy \n Stroke Rehabilitation \n Secondary Stroke Prevention'),
(55, 2, 'Epilepsy Treatment', 'Comprehensive Epilepsy Evaluation \n Anti-Epileptic Drug Therapy \n Vagus Nerve Stimulation \n Epilepsy Surgery'),
(56, 2, 'Parkinson’s Disease and Movement Disorders', 'Parkinson’s Disease Management \n Deep Brain Stimulation \n Tremor and Dystonia Treatment \n Rehabilitation Programs'),
(57, 2, 'Multiple Sclerosis (MS) Care', 'Disease-Modifying Therapies \n Symptomatic Treatment \n Physical and Occupational Therapy \n Counseling and Support'),
(58, 2, 'Headache and Migraine Management', 'Migraine Prophylaxis \n Acute Headache Treatment \n Botox Injections for Chronic Migraine \n Lifestyle Modification Counseling'),
(59, 2, 'Neuromuscular Disorders', 'Peripheral Neuropathy Treatment \n Myopathy Management \n Motor Neuron Disease Care \n Electromyography (EMG) and Nerve Conduction Studies');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AwOyyZoYRGbReh4gMArni02HzNSfnaW6nb81Ny85', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUF2aVFmNTBlTGVnaXpzSTFIR1dGU1JtQWdObENHZ0pxZTB4T1Q2UyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nIjt9fQ==', 1723115771),
('suIrNytZojRiKV04rHuj3mq6nxxzBla3f9908Mzo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOVg3V2pOSHNCWVBselZuRFQ3TUQ4TExqUlRwTE5mTDByNnE0WEZoSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723099480);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hods`
--
ALTER TABLE `hods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hods`
--
ALTER TABLE `hods`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hods`
--
ALTER TABLE `hods`
  ADD CONSTRAINT `hods_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
