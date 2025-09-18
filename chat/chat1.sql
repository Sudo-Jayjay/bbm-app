-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 04:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat1`
--

CREATE TABLE `chat1` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `questions` text NOT NULL,
  `answers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat1`
--

INSERT INTO `chat1` (`id`, `language`, `questions`, `answers`) VALUES
(1, 'English', 'What are the benefits of registering in RSBSA?', 'Registering to RSBSA is voluntary. It is the basic requirement in availing agri-fishery related government services particularly for the programs and projects of DA-its bureaus, attached agencies, and corporations.'),
(2, 'English', 'Why did our neighbor get assistance and I did not?', 'Your registration in the RSBSA does not guarantee that you will automatically receive assistance from the government\'s various agriculture and fisheries programs. Please inquire with your C/MAO about the assistance programs you may apply for.'),
(3, 'English', 'I haven\'t received support from the government since I initially registered under RSBSA, why should I confirm my registration now?', 'The DA and other implementing agencies set their qualifications for the beneficiaries. Once you are registered in the RSBSA, you are eligible to apply and receive assistance from DA and from other implementing agencies. However, your registration in the RSBSA does not guarantee that you wilI automatically receive assistance from the government\'s various agriculture and fisheries programs. Please inquire with your C/MAO about the assistance programs you may apply for.'),
(4, 'English', 'Will I be taxed if I register?', 'No.'),
(5, 'English', 'Who can register to the RSBSA? What are the criteria for registration?', 'All RSBSA registrants are subject to the following criteria:\r\n\r\n• Must be a Filipino citizen;\r\n• must be at least 18 years old at the time of registration; and\r\n• must be a farmer, farm laborer/worker, fisherfolk, and /or agri-youth'),
(6, 'English', 'What is the definition of farmer based on the RSBSA Supplemental Guidelines?', 'A natural person whose livelihood is the cultivation of land or the production of agricultural crops and/or livesock/poultry, either by himself/herself, or primarily with the assistance of his/her immediate farm household, whether the land is owned by him/ her, or by another person under a leasehold or share tenancy agreement or arrangement with the owner thereof, and whether for sale or for home consumption.'),
(7, 'English', 'What is the definition of farm laborer/worker based on the RSBSA Supplemental Guidelines?', 'A natural person who renders service for value as an employee or laborer in an agricultural enterprise or farm, regardless of whether his/her compensation is paid on a daily, weekly, monthly or \'pakyaw\' basis and includes regular and seasonal farm workers. It also pertains to an unpaid family member who is a farm laborer or farm worker but excludes workers such as drivers, tractor drivers, motorized farm equipment operators, office clerks, veterinarian and others in agriculture enterprise farms.'),
(8, 'English', 'What is the definition of fisherfolk based on the RSBSA Supplemental Guidelines?', 'People directly or personally and physically engaged in taking and /or culturing fishery and / or aquatic resources whether for commercial purposes or for household consumption. This also refers to fish worker and fishery operator. It excludes fish vendors, fish processors, stevedores in fish ports, pump boat operators, fishery/aquaculture caretaker, and others.'),
(9, 'English', 'What is the definition of agri-youth based on the RSBSA Supplemental Guidelines?', 'A person whose age range from 12 to 30 years old and is engaged in any agricultural activity or a member of a farming household. This also refers to someone who attended or is currently enrolled in a formal or non-formal agri-fishery related course, and/or participated in any agricultural activity/program.'),
(10, 'English', 'I am a tenant farmer and I don\'t own the land, can I still register?', 'Yes. Please present proof of tenancy upon registration.'),
(11, 'English', 'I am a farm worker, can I still register?', 'Yes. All farm workers can register to the RSBSA.'),
(12, 'English', 'My land is small (half hectare). Can I still register in the RSBSA?', 'Yes. You can still register as long as you meet the criteria for registration.'),
(13, 'English', 'I am a new farmer and started farming because of the pandemic. Can I register in the RSBSA?', 'Yes. You are encouraged to register as long as you meet the criteria for registration.'),
(14, 'English', 'Is there a minimum number of heads (e.g. livestock) to be eligible in the RSBSA?', 'A livestock farmer can register in the RSBSA with a minimum number of one (1) head being raised.'),
(15, 'English', 'I am not a full-time farmer/farm worker/fisherfolk. Can I still register in the RSBSA?', 'Yes. Farmers, farm workers, and fisherfolk who render regular or seasonal farming/fishing activities can still register in the RSBSA as long as they meet the criteria for registration.'),
(16, 'English', 'I own the land but rent it out to someone else. Can I register in the RSBSA?', 'Only one registrant per farm parcel is allowed to register in the RSBSA. This wiII depend on the agreements made between the farm owner and the tenant to avoid double registration of the same farm parcel. Usually, the C/PAO evaluates who contributes more in the farm, and who wiII be prioritized to register in the RSBSA.'),
(17, 'English', 'Are livestock and poultry growers eligible to be part of the RSBSA?', 'Yes. Livestock and poultry growers are classified as farmers under the RSBSA supplemental guidelines and are therefore eligible to register to the RSBSA as long as they meet all the other criteria for registration.'),
(18, 'English', 'I am a non-palay (coconut, banana, vegetable, etc) farmer. Can I still register in the RSBSA?', 'Yes. All farmers, regardless of the crop being grown, can register. Urban agriculture farmers, which include but are not limited to hydroponics practitioners shall provide a geotagged photo and a certification from the Barangay Captain where the urban agriculture project or agricultural livelihood is located.'),
(19, 'English', 'A household member is registered in the RSBSA, but I am also working as a farmer/farm worker/fisherfolk in the same farm. Can I register?', 'Yes. If one household member is already registered as a farmer, you can register as a farm worker. You need to provide proof as farmer or farm worker as you visit your C/MAO for registration. (List of necessary documents are provided in the RSBSA Supplemental Guidelines)'),
(20, 'English', 'I am a farm caretaker. Am I qualified to register in the RSBSA?', 'Yes. Similar to the definition of a farm worker, a farm caretaker is a person who renders service in an agricultural enterprise/farm as employee or laborer. S/ he is eligible to register In the RSBSA regardless if he/she is compensated in a regular (daily, weekly, monthly) or seasonal (i.e.“pakyaw\") basis.'),
(21, 'English', 'My neighbor is also a farmer, but he\'s not yet registered in the RSBSA. Can he register through the enumerator?', 'No. Only survey participants who are not yet registered in the RSBSA can enroll through the enumerator. Otherwise, the enumerator is involved only in the fact—checking and process review. Registration. to the RSBSA is a different process. Please tell your neighbor to contax your C/MAO If s/ he wants to register to the RSBSA.'),
(22, 'English', 'Should I register all other farmers and/or fisherfolk, including farm workers, in our household? Or should only the head of the family/landowner be registered?', 'One farmer per land should be regitered in the RSBSA. The rest of the household members who take part in cultivating the land will be registered as farm laborers/workers or agri—youth.'),
(23, 'English', 'I don\'t hove the money nor the time to go to the C/MAO. Can I ask someone else to register on my behalf?', 'No. Upon registration, the farmer\'s photo, biometrics, and signature will be required from you.'),
(24, 'English', 'What are the requirements to register to the RSBSA?', 'The documentary requirements upon registration in the RSBSA are:\r\n\r\n1. Accomplished RSBSA enrollment form;\r\n2. Photocopy of any valid government identification card with ID number;\r\n3. Proof of ownership of land for farm owners, proof of tenancy for tenants, and proof of agreement for lessees. The following ownership documents are advised:\r\na. Ceetificate of Land Transfer\r\nb. Emancipation Patent\r\nc. Individual Certificate of Land Ownership Award (CLOA)\r\nd. Collective CLOA\r\ne. Co-ownership CLOA\r\nf. Agricultural sales patent\r\ng. Homestead patent\r\nh. Free Patent\r\ni. Certificate of Title or Regular Title\r\nj. Certificate of Ancestral Domain Title\r\nk. Certificate of Ancestral Land Title\r\nl. Tax Declaration\r\nm. Others, specify (Barangay certification)'),
(25, 'English', 'What are the steps to register to the RSBSA?', '1. Farmers, farm workers, fisherfolk, and agri-youth should prepare the necessy documentarg requirements\r\n\r\n2. Fill out the RSBSA enrollment form. Registrants need to request from their respective C/MAO to receive an RSBSA enrollment form\r\n\r\n3. Enrollees will receive a stub with their temporary RSBSA control number and DA stamp as proof of their registration'),
(26, 'English', 'RSBSA is an electronic registry. Can I register online? Can I update my information online?', 'As of September 22, 2021, the RSBSA has no online registration yet. The main registration centers are the C/ MAO and the DA RFO where you can fill out and accomplish the RSBSA enrollment form. Alongside the form is your valid ID and proof of ownership documents as farmer, farm worker, fisherfolk, or agri—youth.'),
(27, 'English', 'Will I receive an ID as proof of registration?', 'A stub will be given to each registrant as proof of registration. Each stub is assigned a unique reference number and official stamp mark. You are advised to photocopy or take a photo of the stub as your back up copy in case of loss.\r\n\r\nThe RSBSA-NPMO has an ongoing development of the system to cater to the online registration in the future.'),
(28, 'English', 'I lost my stub which is proof of my registry. How can I get a new one?', 'Registrants may contact their C/MAO, DA RFO, or the DA Central Office (CO) via Facebook, landline, or email.\r\n\r\nYou are advised to photocopy or take a photo of the stub as your back- up copy in case of loss.'),
(29, 'English', 'I submitted my RSBSA enrollment form and supporting documents. However, I did not receive an enrollment stub or the C/MAO did not provide a stub reference number. What will I do?', 'The C/MAO wiII inform you to return to their office once the stub with the reference number has been provided.'),
(30, 'English', 'Is there a registration fee/updating fee?', 'The RSBSA does not require a registration fee or updating fee. Please report to your C/MAO or to the DA RFO RSBSA focal person any individual or organization soliciting fees and payments or making promises regarding your RSBSA registration.'),
(31, 'English', 'Is this a lifetime enrollment?', 'Yes. Once you are registered in the RSBSA, you are now eligible to apply and receive DA interventions and services. If you wish to update your registration, you can visit your C/MAO and fill out the RSBSA enrollment form under Updating status.'),
(32, 'English', 'When will I know if my registration is completed, and my name is there?', 'Since you have your stub as proof of registration, you can present it to the C/MAO to inquire about the status of your registration. It wilI be used by the C/MAO to check if the reference number is already registered in the system.'),
(33, 'English', 'Can I ask the MAO if i am in the RSBSA?', 'Yes, you can validate your stub number if your information has been successfully encoded in the FFRS. Once you are assigned with a RSBSA system—generated reference number, this means your registration is successfully encoded in the system.'),
(34, 'English', 'Can I update my information such as profile, farming practices, etc. in the RSBSA?', 'Continuous updating of RSBSA data is allowed. You will need to re-submit an accomplished RSBSA Enrollment Form with your new information with the \"Updating\" option box ticked. Please inquire with your C/MAO for more details on this process. It is advisable to update your RSBSA information after a significant change has happened (for instance, increase or decrease in land area, change in the type of crops farmed, etc.).\r\n\r\nYou may also inquire with your C/MAO whether you need to update your information or not.'),
(35, 'English', 'I am no longer farming/fishing, or I know of men and women who are no longer farming/fishing. How can I/we withdraw my/our registration?', 'This situation is considered as “expiration of validity of registration” and requires an exclusion of your records from the RSBSA. Please inform your C/MAO of this change in your situation and prepare necessary documents. (for instance, deed of sale of land). Your C/MAO will then submit a letter. and supporting documents to the DA RFO requesting your records to be excluded from the RSBSA.'),
(36, 'English', 'I know a registered person who passed away. What should we do and who do we inform?', 'This situation is considered as “expiration of validity of registration” and requires an exclusion of the deceased person\'s records from the RSBSA. Please ask the family of the deceased person to inform their C/MAO of this change in situation and prepare necessary documents (such as a registered death certificate). Their C/MAO will then submit a letter and supporting documents to the DA RFO requesting one\'s record to be excluded from the RSBSA.'),
(37, 'English', 'How can I be sure that my information is kept confidential?', 'Only authorized personnel can access the information in the RSBSA. Access to this data requires the approval of the DA Secretary, subject to the existing data privacy policy of DA and the Data Privacy Act of 2012.'),
(38, 'English', 'Is the system secure enough? Who has access to the system and what will you do with the collected data?', 'Only authorized personnel can access the information in the RSBSA. Requests for data access from non-DA agencies will go through a strict protocol, depending on the nature and purpose of the request.'),
(39, 'English', 'How will this registry be used in the political campaign', 'This registry will not be used for political campaigns. Only designated DA personnel have access to the registry and these personnel are expected to treat with due care, diligence, and confidentiality all the recorded information in accordance with Republic Act No. 10173 of the Data Privacy Act of 2012'),
(40, 'English', 'Is RSBSA part of Listahanan? I am in Listahanan and I get support through Pantawid Pamilyang Pilipino Program or 4Ps. Should I still register in RSBSA?', 'The RSBSA is not part of Listahanan. The RSBSA is a separate database which is particular ffor Filipino Farmers, farm workers, fisherfolk, and agri-youth. If a 4Ps beneficiary is engaged in agri-fishery activities or can present proof of farming/fishing livelihood, s/he can also register in the RSBSA.'),
(41, 'English', 'I already registered under a different Agri program (non-RSBSA, possibly the registry of other attached agencies). Should I still register under RSBSA?', 'At the moment, the other registries are managed and owned by their respective agencies. However, DA is pursuing collaborations with the agencies for data sharing and system arrangements. These collaborations will help achieve efficiency in the delivery of services and interventions to specific beneficiaries targeted by DA and other implementing agencies.\r\n                                                             \r\n                                                             DA aims to register as many farmers and fisherfolks as possible to the RSBSA. In 2022, the DA will work in the centralization of RSBSA as the main registry of the Department and on its integration with existing registry systems used by other agencies. In the meantime, fisherfolk who are already registered in the Municipal Fisherfolk Registry System (FishR) of the Bureau of Fisheries and Aquatic Resources (BFAR) are not required to register in the RSBSA.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat1`
--
ALTER TABLE `chat1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat1`
--
ALTER TABLE `chat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
