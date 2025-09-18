-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 04:35 AM
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
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `questions` text NOT NULL,
  `answers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `language`, `questions`, `answers`) VALUES
(1, 'Tagalog', 'Ano ang benepisyo ng pagpaparehistro sa RSBSA?', 'Bagamat boluntaryo ang pagpaparehistro sa RSBSA, ito ay isa sa mga pangunahing pangangailangan upang makatanggap ng mga serbisyo ng gobyerno na may kinalaman sa pagsasaka at pangingisda, partikular sa mga programa at proyekto ng Department of Agriculture'),
(2, 'Tagalog', 'Bakit ang aking kapitbahay ay nakatanggap ng ayuda, ngunit ako ay hindi?', 'Ang iyong pagpaparehistro sa RSBSA ay hindi garantiya na ikaw ay awtomatikong makakatanggap ng ayuda o serbisyo mula sa mga programa ng gobyerno. Bagkus, maaari kang magtungo sa inyong City/Municipal Agriculture Office para malaman ang mga programa na pwede mong salihan. '),
(3, 'Tagalog', 'Simula noong ako ay nagparehistro sa RSBSA, hindi pa rin ako nakakatanggap ng anumang suporta mula sa gobyerno. Bakit pa ako kailangang magparehistro? ', 'Ang DA at mga kaugnay na ahensiya nito ay bumubuo ng mga kwalipikasyon para sa mga maaaring benepisyaryo ng kanilang mga programa. Kung ikaw ay rehistrado sa RSBSA, ikaw ay may kakayahan na sumali o makatanggap ng ayuda or serbisyo mula sa DA at mga programa nito. \r\n \r\nSubalit, ang iyong pagpaparehistro sa RSBSA ay hindi garantiya na ikaw ay awtomatikong makakatanggap ng ayuda o serbisyo mula sa mga programa ng gobyerno. Bagkus, maaari kang magtungo sa inyong City/Municipal Agriculture Office para malaman ang mga programa na pwede mong salihan.'),
(4, 'Tagalog', 'May kaukulang bayad ba ang pagpaparehistro sa RSBSA?', 'Ang pagpaparehistro sa RSBSA ay libre at walang bayad.'),
(5, 'Tagalog', 'Sino ang maaaring magparehistro sa RSBSA? Ano ang pamantayan o kwalipikasyon sa pagpaparehistro?', 'Ang nais magparehistro sa RSBSA ay dapat na: \r\n                                                            a. Filipino citizen \r\n                                                            b. Hindi bababa sa 18 years old sa araw ng pagpaparehistro. \r\n                                                            c. Naghahanap-buhay bilang farmer, farm worker/laborer, fisherfolk, at/o agri-youth.'),
(6, 'Tagalog', 'Ano ang kahulugan ng farmer base sa RSBSA Supplemental Guidelines?', 'Isang likas na tao na ang kabuhayan ay ang pagtatanim ng lupa o ang paggawa ng mga pananim na pang-agrikultura at/o mga alagang hayop/manok, alinman sa kanyang sarili, o sa tulong ng kanyang agarang sambahayan sa bukid, kung ang lupa ay pagaari niya o ng ibang tao sa ilalim ng isang leasehold o share na kasunduan sa pangungupahan o kasunduan sa may-ari nito, at kung ibinebenta o para sa pagkonsumo sa bahay'),
(7, 'Tagalog', 'Ano ang kahulugan ng farm worker/laborer base sa RSBSA Supplemental Guidelines?', 'Isang natural na tao na nagbibigay ng serbisyo para sa halaga bilang isang empleyado o manggagawa sa isang agrikultural na negosyo o sakahan, hindi alintana kung ang kanyang kabayaran ay binabayaran araw-araw, lingguhan, buwanan o pakyaw at kasama ang mga regular at pana-panahong manggagawang bukid. Nauukol din ito sa isang walang bayad na miyembro ng pamilya na isa ring manggagawang bukid o manggagawang bukid ngunit hindi kasama ang mga manggagawa tulad ng mga driver, tractor driver, motorized farm equipment operator, office clerks, veterinarian at iba pa sa agriculture enterprise farms.'),
(8, 'Tagalog', 'Ano ang kahulugan ng fisherfolk base sa RSBSA Supplemental Guidelines?', 'Ang mga taong direkta o personal at pisikal na nakikibahagi sa pagkuha at/o pag-kultura at/o aquatic resources kung para sa komersyal na layunin o para sa pagkonsumo ng sambahayan. Ito rin ay tumutukoy sa manggagawa ng isda at operator ng pangisdaan. Hindi kasama dito ang mga fish vendor, fish processor, stevedores sa fish port, pump boat operator, fishery/aquaculture caretaker at iba pa.'),
(9, 'Tagalog', 'Ano ang kahulugan ng  agri-youth base sa RSBSA Supplemental Guidelines?', 'Isang tao na ang edad ay mula 12 hanggang 30 taong gulang at nakikibahagi sa anumang gawaing pang-agrikultura o miyembro ng isang sambahayan ng pagsasaka. Ito rin ay tumutukoy sa isang taong dumalo o kasalukuyang naka-enrol sa isang pormal o hindi pormal na kursong nauugnay sa agri-fishery, at/o lumahok sa anumang aktibidad/programa ng agrikultura.'),
(10, 'Tagalog', 'Ako po ay magsasaka pero nangungupahan lamang at wala po akong sariling lupa, maaari pa rin ba akong magparehistro sa RSBSA?', 'Oo. Siguraduhin lamang na ipakita ang proof of tenancy sa oras ng pagpaparehistro.'),
(11, 'Tagalog', 'Ako po ay trabahante sa bukid (farm worker), maaari rin ba akong magparehistro sa RSBSA?', 'Oo. Ang lahat ng trabahante sa bukid (farm worker) na pasok sa depinisyon sa RSBSA Supplemental Guidelines ay maaaring magparehistro.'),
(12, 'Tagalog', 'Ang aking lupang pagmamay-ari ay maliit lamang at hindi aabot ng isang ektarya, maaari rin ba akong magparehistro sa RSBSA?', 'Oo. Maaari ka pa ring magparehistro sa RSBSA kahit na mas mababa sa isang estarya ang inyong lupang sinasaka.'),
(13, 'Tagalog', 'Ako ay nagsisimula pa lamang sa sektor ng pagsasaka simula noong nagkaroon ng pandemya. Maaari ba akong magparehistro sa RSBSA?', 'Oo. Maaari kang magparehistro sa RSBSA kahit bago ka pa lamang sa sektor ng pagsasaka. Siguruhin lamang na mayroon kang mga dokumento na nagpapatunay ng iyong pagsasaka.'),
(14, 'Tagalog', 'Mayroon bang minimum na bilang na kailangan alagaan (livestock) para maging eligible na magparehistro sa RSBSA?', 'Kahit isang ulo (head) lamang ng livestock ang meron ka, maaari ka nang magparehistro sa RSBSA.'),
(15, 'Tagalog', 'Ako po ay may iba pang hanapbuhay bukod sa pagiging farmer/farm worker/fisherfolk, maaari pa rin ba akong magparehistro sa RSBSA?', 'Oo. Maaari ka pa rin magparehistro sa RSBSA basta’t may mga katibayan ka na aktibo ka pa rin sa iyong pagsasaka o pangingisda'),
(16, 'Tagalog', 'Ako po ay pagmamay-ari na lupang sakahan na ipinarerenta sa ibang tao, maaari ba akong magparehistro sa RSBSA?', 'Isang magsasaka lamang ang pinahihintulutan na magrehistro sa isang sakahan. Sa mga ganitong kaso, inaabisuhan ang may-ari ng lupa at ang nangungupahan na mapag-usapan kung sino ang magpaparehistro bilang magsasaka. Kadalasan, ibinabase ng C/MAO ang pagpili kung sino ang magpaparehistro depende sa dami ng kontribusyon sa sakahan at sa pagsasaka.'),
(17, 'Tagalog', 'Ang livestock at poultry growers ay maaari rin bang maging parte ng RSBSA?', 'Oo. Lahat ng mga magsasaka at mangingisda ng iba’t ibang commodity ay maaaring magparehistro sa RSBSA'),
(18, 'Tagalog', 'Ako po ay nagtatanim ng mga produkto na walang kinalaman sa palay, tulad ng saging at niyog. Maaari rin ba akong magparehistro sa RSBSA?', 'Oo. Lahat ng mga magsasaka at mangingisda ng iba’t ibang commodity ay maaaring magparehistro sa RSBSA.'),
(19, 'Tagalog', 'Ang aking asawa ay rehistrado na sa RSBSA, ngunit ako rin mismo ay nagtatanim din sa parehong bukid na dineklara ng aking asawa. Maaari rin ba akong magparehistro?', 'Maaari kang magparehistro sa RSBSA bilang farm worker kung ang asawa mo ay nakarehistro na bilang farmer. Ang RSBSA ay sumusunod sa polisiyang 1 registrant: 1 land kaya kung nais ng inyong buong pamilya na mapabilang sa RSBSA, maaari ninyong ideklara ang inyong sarili bilang farm workers at agri-youth para naman sa inyong mga anak.'),
(20, 'Tagalog', 'Ako ay tumatayong caretaker lamang ng bukid. Maaari rin ba akong magparehistro sa RSBSA?', 'Oo. Katulad ng depinisyon ng farm worker, ang farm caretaker ay isang tao na nagbibigay ng serbisyo sa isang agricultural enterprise/farm bilang isang trabahante. Ito ay maaaring magparehistro kung siya man ay pinapasweldo nang regular o pakyawan.'),
(21, 'Tagalog', 'Ang aking kapitbahay ay magsasaka rin, ngunit hindi pa rin siya rehistrado sa RSBSA. Maaari ba siyang magparehistro sa tulong ng ibang tao/enumerator?', 'Oo. Mayroong mga enumerators na pinapadala ang regional offices ng DA upang mag-interview ng mga magsasaka at mangingisda na nais magparehistro sa RSBSA. Siguruhin lamang na kumpleto ang inyong mga dokumento bago kayo magparehistro.'),
(22, 'Tagalog', 'Dapat ko rin bang iparehistro ang iba pang parte ng pamilya na involved din sa pagsasaka/pangingisda o tanging ang padre/madre ng pamilya lang ang dapat na magparehistro?', 'Maaari kang magparehistro sa RSBSA bilang farm worker kung ang asawa mo ay nakarehistro na bilang farmer. Ang RSBSA ay sumusunod sa polisiyang 1 registrant: 1 land kaya kung nais ng inyong buong pamilya na mapabilang sa RSBSA, maaari ninyong ideklara ang inyong sarili bilang farm workers at agri-youth para naman sa inyong mga anak.'),
(23, 'Tagalog', 'Wala akong pera o oras para magpunta sa C/MAO. Maaari ba akong makiusap sa iba upang magrepresenta sa aking pagpaparehistro?', 'Hindi. Kinakailangan na ikaw mismo ang magparehistro sa C/MAO sapagkat kinakalap din nila ang inyong pirma o thumbmark, biometrics, at 2x2 ID photo na nagpapatunay na ikaw nga ang nais magparehistro sa RSBSA.'),
(24, 'Tagalog', 'Ano ang mga kailangang dokumento sa pagpaparehistro sa RSBSA?', 'Ito ang mga kailangang dokumento:\r\n                                                            1. Nasagutang RSBSA Enrollment Form \r\n                                                            2. Photocopy ng kahit anong valid government identification card na may ID number. \r\n                                                            3. Katibayan ng pagpapamay-ari ng lupa para sa mga may-ari ng lupang sakahan, katibayan ng pag-upa para sa tenant, at katibayan ng pagprenda para sa lessee. Ito ang dokumento na maaaring maging katibayan: \r\n                                                            a. Certificate of Land Transfer \r\n                                                            b. Emancipation Patent \r\n                                                            c. Individual Certificate of Land Ownership Award (CLOA) \r\n                                                            d. Collective CLOA \r\n                                                            e. Co-ownership CLOA \r\n                                                            f. Agricultural Sales Patent \r\n                                                            g. Homestead Patent \r\n                                                            h. Free Patent \r\n                                                            i. Certificate of Title o Regular Title \r\n                                                            j. Certificate of Ancestral Domain Title \r\n                                                            k. Certificate of Ancestral Land Title \r\n                                                            l. Tax Declaration \r\n                                                            m. At iba pa (gaya ng Barangay Certification)'),
(25, 'Tagalog', 'Ano ang mga hakbang sa pagpaparehistro sa RSBSA?', 'Ito ang mga hakbang sa pagpaparehistro: 1. Kung ikaw ay farmer, farm worker, fisherfolk o agri-youth, siguraduhing ihanda ang mga kinakailangang dokumento sa iyong pagrerehistro. 2. Magtungo sa C/MAO upang makahingi ng RSBSA Enrollment Stub. Sagutin ang mga tanong at hinihinging detalye. 3. Bilang patunay sa iyong pagrerehistro, ikaw ay makakatanggap ng stub na may DA Stamp kalakip ang iyong pansamantalang RSBSA Control Number.'),
(26, 'Tagalog', 'Ang RSBSA ay isang electronic registry. Kung ganoon, maaari ba akong magrehistro o mag-update ng aking impormasyon sa RSBSA online?', 'Sa ngayon ay wala pang online version ang RSBSA maliban na kasalukuyang ginagawa na nagpapasama ng filled out RSBSA enrollment form sa inyong C/MAO at ito ay ieencode sa DA regional field office upang marehistro sa RSBSA.'),
(27, 'Tagalog', 'Makakatanggap ba ako ng ID bilang katibayan ng pagpaparehistro sa RSBSA?', 'Oo. Mayroong DA Interventions Monitoring Card or DA IMC na ipinamahagi ang DA na sa ngayon ay sinasabay natin sa pamamahagi ng ayuda o cash assistance sa ating mga rice farmers. Sa susunod, ito ay pormal nang ibibigay sa lahat ng mga magpaparehistro pa sa RSBSA.'),
(28, 'Tagalog', 'Nawala ko ang aking stub na nagpapatunay ng aking pagpaparehistro. Paano ako makakakuha ng panibagong kopya?', 'Sa mga ganitong pangyayari, ikaw ay maaaring magsangguni sa iyong C/MAO, DA Regional Field Office o sa DA Central Office gamit ang facebook, landline, o email. \r\n \r\nAng mga nagpaparehistro ay inaabisuhan na i-photocopy o kuhanan ng litrato ang kanilang mga stub bilang back-up kung sakaling mawala ang orihinal na kopya.'),
(29, 'Tagalog', 'Ipinasa ko ang aking RSBSA Enrollment Form kalakip ang mga dokumento na nagpapatunay ng aking mga detalye, ngunit hindi ako nakatanggap/binigyan ng stub ng aming C/MAO. Ano ang dapat kong gawin?', 'Ikaw ay aabisuhan ng inyong C/MAO na bumalik o magtungo sa kanilang opisina kapag ang iyong stub ay mayroon nang reference number.'),
(30, 'Tagalog', 'May bayad ba ang pagpaparehistro o ang pag-update ng rehistro?', 'Wala. Libre at boluntaryo ang pagpaparehistro sa RSBSA.'),
(31, 'Tagalog', 'Ang enrollment ba ay habambuhay?', 'Oo. Kaakibat nito, ikaw rin ay may kakayahan na sumali o makatanggap ng mga programa at serbisyo ng DA. Kung ikaw ay may nais na ipabago sa iyong rehistro, maaari kang bumisita sa iyong C/MAO at magsagot muli sa RSBSA Enrollment Form sa ilalim ng Updating Status'),
(32, 'Tagalog', 'Kailan ko malalaman kung ang aking pagrehistro ay tapos na at ang aking pangalan ay nakatala na sa listahan ng RSBSA? ', 'Kung ikaw ay nakatanggap na ng stub mula sa iyong enrollment, ito ay maaari mong ipresenta sa iyong C/MAO para itanong ang kalagayan ng iyong pagrehistro. Ang iyong enrollment stub ay gagamitin ng C/MAO upang malaman kung ang iyong reference number ay nasa system na.'),
(33, 'Tagalog', 'Maaari ko bang tanungin ang aming C/MAO kung ako ay nasa listahan na ng RSBSA?', 'Oo. Makipag-ugnayan sa iyong C/MAO kung kayo ay tagumpay nang nakarehistro sa RSBSA sa pamamagitan ng pagkuha ng inyong RSBSA System Generated Number'),
(34, 'Tagalog', 'Pwede ko bang i-update ang aking profile, farming practices at iba pa sa RSBSA?', 'Oo. Bisitahin lang ang inyong C/MAO upang ma-update ang inyong profile, farming practices sa RSBSA. Siguruhin na merong sapat na dokumento na nagpapatunay ng mga pagbabago sa inyong profile sa RSBSA.'),
(35, 'Tagalog', 'Hindi na ako o may kakilala ako na hindi na rehistrado sa RSBSA na hindi na nagsasaka/nangingisda. Paano ang proseso sa pag-withdraw ng rehistro sa RSBSA', 'Maaari niyo pong silang sabihan na bumisita sa C/MAO upang maupdate ang kanilang record na “exited” na sa sektor ng pagsasaka  pangingisda. Sa pamamagitan niyo, mata-tag na INACTIVE ang kanyang record sa RSBSA'),
(36, 'Tagalog', 'May kakilala akong RSBSA registered na pumanaw na. Paano o kanino ito dapat ipagpaalam?', 'Maaari niyo pong sabihin sa kamag-anak ng pumanaw na magsasaka o mangingisda na bumisita sa C/MAO upang maupdate ang kanilang record na “exited” na sa sektor ng pagsasaka  pangingisda. Sa pamamagitan niyo, mata-tag na INACTIVE ang kanyang record sa RSBSA'),
(37, 'Tagalog', 'May kakilala akong RSBSA registered na pumanaw na. Paano o kanino ito dapat ipagpaalam?', 'Maaari niyo pong sabihin sa kamag-anak ng pumanaw na magsasaka o mangingisda na bumisita sa C/MAO upang maupdate ang kanilang record na “exited” na sa sektor ng pagsasaka  pangingisda. Sa pamamagitan niyo, mata-tag na INACTIVE ang kanyang record sa RSBSA'),
(38, 'Tagalog', 'Paano ako makakasiguro na ang aking mga impormasyon na ibibigay sa RSBSA ay mananatiling kompedinsyal o pribado?', 'Tanging ang mga awtorisadong tauhan lamang ang may access sa mga impormasyon sa RSBSA. Ang pagkakaroon ng access ay nangangailangan ng pahintulot mula sa DA Secretary, alinsunod sa mga kasalukuyang polisiya sa data privacy at sa Data Privacy Act of 2012.'),
(39, 'Tagalog', 'Masisiguro ba ng system ang kaligtasan ng mga datos na aking ibinigay? Sino sino ang may access at ano ang gagawin sa mga datos na nakolekta?', 'Tanging ang mga awtorisadong tauhan lamang ang may access sa mga impormasyon sa RSBSA. Ang mga request ng access sa mga datos mula sa ibang ahensiya at organisasyon ay kinakailangan munang dumaan sa mahigpit na proseso, depende sa pangangailangan at layunin nito.'),
(40, 'Tagalog', 'Paano kung ang registry ay magamit sa politika o sa panahon ng kampanya?', 'Ang mga datos sa RSBSA ay hindi magagamit sa kahit anong kampanya sa politika. Ang access sa RSBSA ay nasa pangangalaga lamang ng mga tauhan ng DA. Alinsunod sa Data Privacy Act of 2012 at iba pang batas na may kinalaman dito, ang mga datos ay wastong inaalagaan bilang kompedinsyal at pribado.'),
(41, 'Tagalog', 'Ang RSBSA ba ay konektado sa Listahanan ng 4Ps? Kung ako ay rehistrado na sa Listahanan at nakakatanggap ng ayuda mula sa 4Ps, dapat pa ba akong magparehistro sa RSBSA?', 'Ang RSBSA ay hindi parte ng Listahanan. Ang RSBSA ay hiwalay na listahan partikular sa farmer, farm worker, fisherfolk at agriyouth. Kung ang isang benepisyaryo ng 4Ps ay mayroon ding mga dokumento na makakapagpatunay na siya ay kabilang sa mga nirerehistro ng RSBSA, maaari rin siyang magparehistro sa RSBSA bukod pa sa Listahanan ng 4Ps.'),
(42, 'Tagalog', 'Ako ay nakapagparehistro na sa ibang programa na may kinalaman din sa agrikultura. Dapat pa ba akong magparehistro sa RSBSA?', 'Sa kasalukuyan, ang mga listahan ng iba’t ibang ahensiya na may kinalaman sa agrikultura ay nasa kustodiya ng kanikanilang ahensiya. Subalit, ang DA ay gumagawa na rin ng mga hakbang upang mapag-ugnay ang iba’t ibang listahan nang sa gayon ay mabawasan, mapadali, at mapabilis ang mga proseso lalo na sa panahon ng pagbibigay ng mga serbisyo at programa. \r\n                                                            Layunin ng DA na mairehistro sa RSBSA ang lahat ng mga magsasaka at mangingisda sa Pilipinas. Ngayong 2022, plano ng DA na mai-centralize  ang lahat ng listahan sa iba’t ibang sangay ng gobyerno sa tulong ng RSBSA at masimulan na ang integration sa mga ito. Samantala, kaugnay nito, ang mga rehistrado na sa Municipal Fisherfolk Registry System (FishR) ng Bureau of Fisheries and Aquatic Resources (BFAR) ay hindi na kailangan pang magparehistro sa RSBSA.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
