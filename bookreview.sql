-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2024 at 03:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `Bookname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Published_year` int(4) DEFAULT NULL,
  `De` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'mô tả',
  `Topic` int(11) NOT NULL,
  `Img_product` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `star` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `Bookname`, `Author`, `Published_year`, `De`, `Topic`, `Img_product`, `star`) VALUES
(22, 'Càng Độc Lập Càng Cao Quý', 'Vãn Tình', 1980, 'Này cô gái, bất luận cuộc đời mang đến cho ta bao nhiêu chông gai thử thách, xin đừng tự coi nhẹ chính mình, đừng tự buông bỏ bản thân và phụ thuộc vào người khác. Hãy luôn giữ vừng niềm tin rằng, số phận của ta nằm trong tay chính ta, không nằm trong tay ông trời. Độc lập về cuộc sống, tư tưởng kinh tế giúp chúng ta vĩnh viễn không mất đi quyền lựa chọn trong tay mình. Không ai có thể thay chúng ta chịu trách nhiệm về cuộc đời mình. Thế nên, dù đang hạnh phúc đi nữa, trên đường đời cũng không tránh khỏi những tháng ngày phải đơn độc tiến lên.\\r\\n\\r\\nMột phiên bản khác của tác giả Vãn Tình được xuất bản tại Việt Nam sau hai cuốn sách đình đám Bạn đắt giá bao nhiêu và Khí chất bao nhiêu hạnh phúc bấy nhiêu. Cuốn sách mang tên Càng độc lập càng cao quý với 42 câu chuyện xoay quanh vấn đề hôn nhân, tình yêu và đặc biệt là cách để có đôi mắt tinh tường trong chọn lựa “Mr Right” của cuộc đời mình.\\r\\n\\r\\nPhụ nữ khí chất biết cách nhìn nhận đối phương\\r\\n\\r\\nTrên thế giới này, ai rời xa ai thì Trái đất vẫn quay, Mặt trời vẫn mọc, trong đời bạn nếu xuất hiện những người đàn ông như này thì bạn mới có thể hạnh phúc.\\r\\n\\r\\nĐàn ông càng sẵng sàng cho đi vì bạn sẽ càng không thể rời xa bạn\\r\\n\\r\\nTôi không nhớ rõ từng có bao nhiêu người chia sẻ với tôi rằng họ đã hy sinh nhiều thế nào cho gia đình mình. Từng chút từng chút, việc lớn việc nhỏ, ẩn chứa trong đó là hoài niệm, là tình yêu, và cũng là đau thương. Vốn dĩ họ cho rằng sự dốc lòng hy sinh và cả trái tim chân thành của mình sẽ đổi lấy được những yêu thương, những dịu dàng từ chồng, hoặc dù không phải vậy đi nữa, thì ít nhất họ cũng có được niềm cảm kích và trân trọng từ đối phương. Thế nhưng rốt cuộc, sự thật và mong ước lại cách nhau quá xa, thứ mà họ nhận về chẳng gì khác ngoài những vết cứa vô tình sâu hoắm nơi trái tim và sự ruồng bỏ như một món đồ đến lúc cần vứt bỏ.\\r\\n\\r\\nHọ không hiểu vì lẽ gì mà người đàn ông của họ lại biến thành kẻ lạnh lùng, vô tình và cứng đầu đến thế, để rồi kết cục lại, họ chỉ đành uất hận mà chụp lên đầu đối phương hai chữ “gã tồi”.\\r\\n\\r\\nTrong tình yêu, việc bạn chỉ biết một lòng hy sinh không những làm lệch trạng thái tương hỗ cân bằng từ hai phía, mà còn chặn đứng con đường để đối phương học cách trao đi. Như vậy, kết cục đến bước đường này hoàn toàn không khó đoán.\\r\\n\\r\\nBạn hãy tin rằng: trên đời này, người đàn ông càng sẵn sàng cho đi vì bạn, sẽ càng không thể rời xa bạn dễ dàng. Bởi vì người không muốn bên bạn sẽ không cần làm gì vì bạn cả, họ chỉ dùng sự đối đãi để đối xử với bạn thôi.\\r\\n\\r\\nCưới được người đàn ông như thế này mới thực sự có phúc\\r\\n\\r\\nThường có nhiều cô gái để lại lời nhắn cho tôi, nói không muốn sống chung với mẹ chồng, trong khi đó người chồng lại nhất mực muốn đón mẹ tới ở cùng, cho rằng mẹ mình đặc biệt dễ chung sống, chỉ cần giữa vợ và mẹ mình nảy sinh mâu thuẫn gì, đều không ngần ngại chỉ trích vợ: Mẹ anh dễ tính thế rồi sao em khó ở vậy?\\r\\n\\r\\nCũng có những cô gái chia sẻ rằng khi về quê chồng ăn Tết, cách nói chuyện không hợp, kiểu ăn uống cũng khác, nhưng chồng thì lại cho rằng họ làm chảnh, cố ý kiếm chuyện, một chút cũng không chịu hiểu cho sự lạc lõng và e ngại của vợ mình.\\r\\n\\r\\nSở dĩ đàn ông có tâm lý như vậy, thứ nhất là vì mức độ yêu vợ của họ chưa đủ. Rất nhiều chuyện không phải là họ không làm nổi, mà họ không đủ yêu nên căn bản không thể thay đổi suy nghĩ của đối phương.\\r\\n\\r\\nThứ hai là vì có những người đàn ông bản tính ích kỷ, thứ chiếm vị trí trọng yếu trong đầu họ vĩnh viễn chỉ là bản thân, trái tim họ căn bản không thừa chỗ để nghĩ cho người khác.\\r\\n\\r\\nSong, trên đời này còn có một kiểu đàn ông khác. Họ yêu thương vợ, cảm kích trước những hi sinh của vợ, dùng tấm lòng để đáp lại tấm lòng, đặt mình đứng trên góc nhìn của vợ mà suy xét vấn đề. Cưới được người đàn ông như vậy mới là mở ra cánh cửa hạnh phúc. Nhưng bạn không thể kiếm được kiểu người này chỉ nhờ vào vận khí, mà yếu tố quyết định chính là con mắt nhìn người của bạn tinh tường đến mức nào. Và để có đôi mắt tinh tường, bạn nhất định đừng vội tìm một người đàn ông và cho rằng người đó yêu bạn, mà hãy dùng thời gian để kiểm chứng mọi hành động và thái độ của họ, phụ nữ độc lập sẽ luôn làm được điều này dễ dàng hơn, vì họ vốn dĩ chẳng cần thêm yếu tố nào khác ngoài tình yêu và sự tử tế của người đàn ông', 2, '6b009c626e.jpg', 0),
(24, 'Khi Lỗi Thuộc Về Những Vì Sao', 'John Green', 2012, 'Đây là tác phẩm sâu lắng, càng đọc độc giả sẽ càng bị cuốn hút, Sự cuốn hút ấy được tạo nên bởi mạch văn vừa phải, không nhanh, không chậm và Tình yêu trong sáng, ý chí vượt qua bệnh tật để sống một cuộc sống tươi vui, không buồn phiền và khát khao được sống và được yêu, được tưởng nhớ. Câu chuyện tình yêu của Hazel và Augustus đã cho chúng ta thấy rằng hãy sống hết mình và có trách nhiệm cho ngày hôm nay. Hãy yêu cho dù tương lai thế nào đi chăng nữa miến là hôm nay mình đã sống trọn với tình yêu này. Hãy lạc quan và nhìn về phía trước, bởi cuộc sống không chỉ có bệnh tật mà còn có cả những niềm vui, niềm hạnh phúc, sự yêu thương vô bến bờ của những người bên cạnh ta.', 5, '0ecd43e44d.jpg', 0),
(25, 'Tuổi 20 Sức Hút Từ Kỹ Năng Giao Tiếp', 'Thục lệ', 2000, 'Đúng như tên gọi, “Tuổi 20 sức hút từ kỹ năng giao tiếp - Nghệ thuật giao tiếp dành cho phái nữ” là những chia sẻ, lời khuyên được tập hợp và phân loại rõ ràng ở 10 chương. Bạn không cần phải đọc quyển sách từ đầu đến cuối mà hãy tìm đọc chương bạn cần, bạn sẽ tìm được câu trả lời cho hầu hết các vấn đề bạn đã, đang và sẽ gặp phải trong tương lai.\\r\\n\\r\\nQuyển sách này, theo cảm nhận của mình, sẽ đặc biệt thích hợp cho những bạn gái trẻ, vừa bước vào môi trường đại học hay vừa mới tốt nghiệp và bắt đầu sự nghiệp phía trước. Bên cạnh đó, giới quản lý nhân sự cũng có thể tham khảo để nắm bắt tâm lý và hành vi ứng xử của thế hệ “Millenials”.\\r\\n\\r\\nTác giả đã chỉ ra rất nhiều đặc điểm trong tính cách của những cô gái tuổi đôi mươi, tiêu biểu nhất chính là sự dè dặt, nhỏ nhen, đố kỵ hay bị động trong các mối quan hệ. Dù không thể phủ nhận có không ít những bạn trẻ rất cởi mở, hoà đồng với tất cả mọi người ngay còn là học sinh cấp 3 hay mới bước vào ngưỡng cửa đại học. Nhưng cũng không thể không kể đến số đông những sinh viên sau bốn năm đại học vẫn chưa có những kỹ năng cần thiết trong giao tiếp để bước vào thế giới nghề nghiệp. 7 lời khuyên mà tác giả đưa ra cũng thật đơn giản và hầu như ai cũng có thể nghĩ đến nhưg để hiểu và áp dụng vào thực tế thì chúng ta cần đọc và nghiền ngẫm kỹ lưỡng', 1, '803d6a5849.jpg', 0),
(26, 'Ai Lấy Miếng Pho Mát Của Tôi? ', 'Spencer Johnson', 1998, '\'Bạn làm gì khi thế giới xung quanh thay đổi? Có bao giờ bạn tự hỏi bản thân câu hỏi này? Câu trả lời cho vấn đề này đó là: đồng thời thay đổi bản thân để phù hợp với một thế giới mới. Nhưng đã có một khoảng thời gian mình cố chấp không chấp nhận những gì đang xảy ra xung quanh đó là những sự thay đổi lớn nhỏ khi bước vào môi trường cấp 3. Và sự cố chấp đó cũng là lý do vì sao một học sinh mới chuyển cấp cảm thấy cả thế giới thế như sụp đổ, việc đến môi trường mới thật sự rất khó chịu. Sau khi đã trải qua vô vàn cuộc đấu tranh tư tưởng, mình mới nhận ra thay đổi là tự nhiên và sự thật rằng càng nhận ra những thay đổi sớm, chúng ta sẽ càng có nhiều cơ hội để học hỏi. Dành cho bất kỳ ai đang cảm thấy việc thay đổi thật kinh khủng, cuốn sách Who moved my cheese for teens - Ai lấy miếng pho mát của tôi của tác giả đạt #1 Best Seller Spencer Johnson sẽ giúp bạn học được chân lý trên như cách mà nó đã củng cố cho niềm tin vào sự thay đổi của chính mình vậy. Đây là một cuốn sách đáng yêu, dễ đọc nhưng không kém phần sâu lắng, đặc biệt dành cho các độc giả trẻ. \\r\\n\\r\\n\\r\\nWho moved my cheese for teens? - Ai lấy miếng pho mát của tôi? với cốt truyện đơn giản, cách viết đáng yêu nhưng ý nghĩa đã làm rất nhiều người ngại thay đổi trở nên mạnh mẽ, thấu hiểu và biết cách ứng phó trước những chuyển biến của cuộc sống. Câu chuyện đem lại sức ảnh hưởng lớn và để lại cho độc giả một tâm thế sẵn sàng, tinh thần mạnh mẽ bởi những bài học quý giá cũng như sự gần gũi mà các nhân vật đem lại. Cuốn sách “hiếm có này\\\" trở thành một hiện tượng lạ, dù đã hai thập kỷ trôi qua kể từ khi xuất bản, cuốn sách vẫn đem lại những giá trị thiết thực theo một lối rất riêng và vô cùng gần gũi. \'', 4, '11b8ee30a7.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `Comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'thời gian bình luận '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentID`, `UserID`, `ReviewID`, `Comment`, `Create_at`) VALUES
(1, 1, 6, 'Hay quá, quá ý nghĩa, và tuyệt vời ', '2024-09-26 03:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ReviewID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  `Content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` int(1) NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Chưa duyệt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ReviewID`, `UserID`, `BookID`, `Content`, `star`, `Create_at`, `Status`) VALUES
(1, 2, 26, 'Review cuốn sách Tôi Tài Giỏi Bạn Cũng Thế của tác giả Adam Khoo\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" (tựa gốc tiếng Anh: \\\"I Am Gifted, So Are You!\\\") là một tác phẩm nổi tiếng của tác giả Adam Khoo, một trong những nhà diễn giả, doanh nhân và chuyên gia đào tạo hàng đầu tại Singapore. Được viết từ những trải nghiệm cá nhân và quá trình vượt qua khó khăn trong học tập, cuốn sách đã trở thành một tài liệu hướng dẫn thiết thực cho rất nhiều học sinh, sinh viên và người trẻ trên khắp thế giới. Với mục tiêu truyền đạt những phương pháp học tập hiệu quả và phát triển kỹ năng cá nhân, tác giả đã mang đến cho độc giả không chỉ là những kiến thức về học tập mà còn là sự động viên mạnh mẽ để họ tin vào khả năng của mình và khám phá tiềm năng chưa được khai phá. Adam Khoo từng là một học sinh có thành tích yếu kém, bị giáo viên và bạn bè coi thường. Tuy nhiên, nhờ việc khám phá ra các phương pháp học tập thông minh, anh đã vươn lên trở thành một trong những học sinh giỏi nhất và thành công trong cuộc sống sau này. Câu chuyện cá nhân đầy cảm hứng của tác giả là bằng chứng sống cho thấy rằng, bất kỳ ai cũng có thể đạt được thành công nếu có phương pháp học tập và sự nỗ lực phù hợp. Cuốn sách đã nhanh chóng trở thành một cuốn cẩm nang không chỉ dừng lại ở việc học tập, mà còn cung cấp nhiều bài học về tư duy tích cực, quản lý thời gian, và phát triển bản thân, góp phần giúp người đọc tự tin hơn trong cuộc sống. Đối tượng chính của cuốn sách là các bạn trẻ, đặc biệt là học sinh, sinh viên đang gặp khó khăn trong học tập và mong muốn tìm kiếm những phương pháp mới để cải thiện kết quả. Tuy nhiên, những nguyên tắc và bài học mà Adam Khoo chia sẻ cũng có thể áp dụng rộng rãi cho người đi làm và bất kỳ ai muốn phát triển kỹ năng cá nhân. Với ngôn ngữ dễ hiểu, cách diễn đạt gần gũi và những minh họa thực tế, \\\"Tôi tài giỏi, bạn cũng thế!\\\" đã trở thành một cuốn sách bán chạy trên toàn cầu và được dịch ra nhiều ngôn ngữ khác nhau, trong đó có tiếng Việt. Sức hút của cuốn sách không chỉ nằm ở nội dung hữu ích mà còn ở tinh thần khích lệ và niềm tin mà nó mang lại, giúp độc giả thấy rằng họ hoàn toàn có thể đạt được thành công, bất kể xuất phát điểm của mình là gì. \\r\\n\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" của Adam Khoo được chia thành nhiều phần với nội dung chặt chẽ, giúp độc giả hiểu rõ hơn về các phương pháp học tập và phát triển bản thân mà tác giả đã áp dụng thành công. Phần đầu của cuốn sách kể lại câu chuyện cá nhân của Adam Khoo, từ khi anh còn là một học sinh có thành tích yếu kém, bị giáo viên và bạn bè đánh giá thấp, đến lúc anh tìm ra những kỹ thuật học tập hiệu quả. Từ một học sinh bị coi là không có tiềm năng, Adam Khoo đã lột xác và trở thành một trong những học sinh giỏi nhất nhờ sự thay đổi trong tư duy và phương pháp học. Phần này không chỉ là lời tự sự mà còn là sự động viên mạnh mẽ, nhắn nhủ với người đọc rằng bất kỳ ai cũng có thể thay đổi nếu biết cách khai thác tiềm năng của mình. Phần tiếp theo của cuốn sách tập trung vào việc chia sẻ những phương pháp học tập cụ thể mà Adam Khoo đã sử dụng để đạt được thành công. Một trong những phương pháp quan trọng là quản lý thời gian. Tác giả nhấn mạnh rằng việc sắp xếp thời gian hợp lý và có kế hoạch học tập khoa học sẽ giúp tăng hiệu quả học tập mà không cần tốn quá nhiều sức lực. Tiếp đến là kỹ thuật ghi nhớ, trong đó Adam Khoo trình bày cách áp dụng sơ đồ tư duy, hình ảnh hóa và các mẹo ghi nhớ thông qua việc liên tưởng để giúp học sinh nhớ bài lâu hơn. Bên cạnh đó, cuốn sách còn đề cập đến việc đặt mục tiêu rõ ràng, một kỹ năng mà tác giả cho rằng sẽ giúp duy trì động lực và định hướng cụ thể trong quá trình học tập và làm việc. Một trong những phần quan trọng khác của sách là tư duy tích cực. Tác giả không chỉ tập trung vào kỹ thuật mà còn nhấn mạnh tầm quan trọng của thái độ sống. Tư duy tích cực không chỉ giúp người học vượt qua khó khăn mà còn là nền tảng để phát triển sự tự tin và khả năng tự nhận thức về tiềm năng của bản thân. Cuối cùng, các bài học trong cuốn sách đều xoay quanh việc khuyến khích độc giả tin vào khả năng của mình và áp dụng những phương pháp đã được kiểm chứng để cải thiện kết quả học tập cũng như thành công trong cuộc sống.\\r\\n\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" của Adam Khoo không chỉ là một tác phẩm truyền cảm hứng, mà còn là một hướng dẫn thực tiễn giúp người đọc cải thiện kỹ năng học tập và phát triển bản thân. Một trong những điểm mạnh nổi bật của sách là tính thực tiễn và dễ áp dụng. Adam Khoo không chỉ trình bày lý thuyết mà còn cung cấp các phương pháp học tập cụ thể như kỹ thuật ghi nhớ, quản lý thời gian, và cách lập kế hoạch chi tiết, giúp người đọc dễ dàng hiểu và thực hiện. Đặc biệt, các phương pháp này không yêu cầu điều kiện phức tạp hay kiến thức nền tảng đặc biệt, phù hợp với mọi lứa tuổi và hoàn cảnh. Bất kể bạn là học sinh, sinh viên, hay người đi làm, đều có thể tìm thấy những giá trị hữu ích từ các bài học của tác giả. Cuốn sách cũng ghi điểm bởi tính truyền cảm hứng mạnh mẽ. Adam Khoo sử dụng chính câu chuyện của mình để tạo động lực cho người đọc, từ việc vượt qua những thất bại trong học tập cho đến khi trở thành một trong những sinh viên xuất sắc nhất Singapore. Điều này giúp độc giả nhận ra rằng, bất kỳ ai cũng có thể thay đổi số phận của mình nếu biết cách khai thác tiềm năng. Sự kết hợp giữa yếu tố câu chuyện cá nhân và phương pháp học tập làm cho cuốn sách vừa mang tính khích lệ, vừa cung cấp giải pháp thực tiễn, điều mà ít sách về phát triển cá nhân có thể làm được một cách thuyết phục như vậy. Tuy nhiên, cuốn sách không phải là không có nhược điểm. Một trong những điểm yếu của sách là sự khả thi của phương pháp có thể khác nhau đối với từng cá nhân. Mặc dù các kỹ thuật và phương pháp mà Adam Khoo giới thiệu rất hữu ích, nhưng không phải ai cũng có thể áp dụng thành công. Một số người có thể cảm thấy khó khăn khi thực hiện các phương pháp này, đặc biệt nếu họ không quen với việc thay đổi thói quen học tập hay tư duy. Hơn nữa, dù sách nhấn mạnh tầm quan trọng của tư duy tích cực, nhưng thực tế cho thấy việc duy trì một thái độ tích cực liên tục trong môi trường áp lực không phải lúc nào cũng dễ dàng, đặc biệt đối với những người đang đối mặt với nhiều khó khăn cá nhân. Cuối cùng, một số ý kiến cho rằng cuốn sách tập trung quá nhiều vào học tập mà chưa đề cập sâu đến những yếu tố tâm lý và môi trường có thể ảnh hưởng đến quá trình phát triển bản thân của mỗi người. Mặc dù cuốn sách là một công cụ hữu hiệu trong việc cải thiện kết quả học tập, nhưng đôi khi nó không giải quyết được những thách thức phức tạp hơn mà người đọc có thể gặp phải trong cuộc sống và công việc. Tuy vậy, nhìn chung, \\\"Tôi tài giỏi, bạn cũng thế!\\\" vẫn là một cuốn sách đáng đọc, đặc biệt đối với những ai đang tìm kiếm cách thức cải thiện học tập và phát triển khả năng cá nhân.\\r\\n\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" mang đến nhiều bài học quý giá, giúp người đọc không chỉ cải thiện phương pháp học tập mà còn phát triển tư duy và kỹ năng sống. Một trong những bài học quan trọng nhất là niềm tin vào bản thân. Adam Khoo đã nhấn mạnh rằng thành công không phụ thuộc vào xuất phát điểm hay khả năng bẩm sinh, mà nằm ở cách chúng ta suy nghĩ và hành động. Sự tự tin vào tiềm năng của chính mình là yếu tố cốt lõi giúp vượt qua những giới hạn và thách thức trong học tập cũng như trong cuộc sống. Cuốn sách khơi gợi ý thức rằng mỗi người đều có thể tài giỏi nếu biết cách khám phá và tận dụng những khả năng vốn có. Bên cạnh đó, lập kế hoạch và đặt mục tiêu rõ ràng là một bài học không thể bỏ qua. Adam Khoo chỉ ra rằng việc thiết lập các mục tiêu cụ thể và có kế hoạch hành động chi tiết sẽ giúp người học luôn có định hướng và không bị lạc lối. Đặc biệt, anh nhấn mạnh tầm quan trọng của việc chia nhỏ các mục tiêu lớn thành những bước nhỏ hơn, dễ thực hiện, từ đó giúp duy trì động lực và theo đuổi mục tiêu đến cùng. Đây là kỹ năng không chỉ hữu ích trong học tập mà còn có giá trị trong bất kỳ lĩnh vực nào của cuộc sống. Một bài học quan trọng khác mà sách mang lại là sự kiên trì và nỗ lực không ngừng. Adam Khoo đã minh họa rõ ràng rằng thành công không đến sau một đêm mà là kết quả của sự rèn luyện và học hỏi liên tục. Dù gặp phải thất bại, chúng ta không nên từ bỏ, mà cần xem đó là cơ hội để học hỏi và cải thiện bản thân. Cuốn sách nhấn mạnh tinh thần không ngừng học hỏi, mở ra một tư duy phát triển, nơi mà người đọc được khuyến khích luôn sẵn sàng tiếp thu những điều mới mẻ và không ngừng cải thiện chính mình. Cuối cùng, tư duy tích cực là bài học cốt lõi xuyên suốt cuốn sách. Adam Khoo khẳng định rằng cách chúng ta nhìn nhận vấn đề sẽ quyết định kết quả của hành động. Nếu giữ thái độ tích cực, chúng ta sẽ tìm ra giải pháp ngay cả trong những tình huống khó khăn nhất. Bằng việc áp dụng các bài học từ cuốn sách vào cuộc sống, người đọc không chỉ nâng cao kỹ năng học tập mà còn có thể thay đổi thái độ sống, trở nên mạnh mẽ, tự tin và thành công hơn.\\r\\n\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" đã có tác động sâu sắc đến cộng đồng, đặc biệt là trong giới trẻ, học sinh, sinh viên và những người đang tìm cách phát triển bản thân. Với nội dung dễ hiểu và những phương pháp học tập thực tiễn, cuốn sách đã trở thành một công cụ quan trọng giúp hàng ngàn người vượt qua khó khăn trong học tập. Rất nhiều học sinh, sau khi đọc sách, đã thay đổi tư duy và đạt được những kết quả tốt hơn, từ đó tăng cường sự tự tin và khả năng tự quản lý thời gian. Tác phẩm này không chỉ mang đến những kỹ năng cụ thể mà còn khơi dậy trong người đọc niềm tin rằng họ hoàn toàn có thể làm chủ cuộc đời mình, dù hoàn cảnh ban đầu có bất lợi. Ngoài ra, cuốn sách còn có tác động tích cực trong lĩnh vực phát triển cá nhân. Không chỉ dừng lại ở việc cải thiện thành tích học tập, nhiều độc giả sau khi áp dụng các phương pháp của Adam Khoo đã cải thiện kỹ năng sống, phát triển tư duy sáng tạo và tăng cường kỹ năng giải quyết vấn đề. Những bài học về tư duy tích cực, lập kế hoạch và kiên trì theo đuổi mục tiêu đã giúp độc giả tự tin hơn khi đối mặt với những thử thách trong cuộc sống. Ảnh hưởng của cuốn sách không chỉ dừng lại ở cá nhân người đọc mà còn lan tỏa đến cộng đồng học tập, khi nhiều người chia sẻ và áp dụng những phương pháp này, tạo nên một phong trào học hỏi và phát triển bản thân rộng khắp. Đặc biệt, cuốn sách đã góp phần thúc đẩy sự thay đổi trong tư duy giáo dục. Thay vì chỉ tập trung vào kiến thức, cuốn sách khuyến khích học sinh phát triển kỹ năng tư duy và tự học, giúp họ trở thành những cá nhân tự lập và sáng tạo. Điều này đã giúp tạo ra một làn sóng mới trong cộng đồng giáo dục, nơi mà việc rèn luyện tư duy và kỹ năng cá nhân trở nên quan trọng không kém gì kiến thức học thuật. Tóm lại, \\\"Tôi tài giỏi, bạn cũng thế!\\\" đã và đang có sức ảnh hưởng to lớn đối với cộng đồng, không chỉ giúp cải thiện kết quả học tập mà còn thúc đẩy sự phát triển toàn diện của nhiều thế hệ độc giả. \\r\\n\\r\\nDưới đây là một đoạn kết luận cho bài review về cuốn sách Tôi Tài Giỏi, Bạn Cũng Thế:\\r\\n\\r\\nCuốn sách Tôi Tài Giỏi, Bạn Cũng Thế của Adam Khoo không chỉ đơn thuần là một cuốn sách hướng dẫn học tập mà còn là một cẩm nang về tư duy, sự kiên trì và phát triển bản thân. Qua những phương pháp cụ thể, dễ hiểu và đã được kiểm chứng, Adam đã truyền cảm hứng cho hàng triệu người trẻ vươn lên, khai phá tiềm năng và đạt được những thành tựu vượt bậc trong học tập cũng như cuộc sống. Đây là một tài liệu quý giá không chỉ dành cho học sinh, sinh viên mà còn phù hợp với bất cứ ai mong muốn nâng cao hiệu quả học tập và phát triển bản thân. Nếu bạn đang tìm kiếm động lực để thay đổi bản thân và đạt được thành công, thì Tôi Tài Giỏi, Bạn Cũng Thế chắc chắn là một cuốn sách không nên bỏ lỡ.', 2, '2024-11-12 00:27:24', 'Đã duyệt'),
(2, 2, 24, 'Review cuốn sách Tôi Tài Giỏi Bạn Cũng Thế của tác giả Adam Khoo\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" (tựa gốc tiếng Anh: \\\"I Am Gifted, So Are You!\\\") là một tác phẩm nổi tiếng của tác giả Adam Khoo, một trong những nhà diễn giả, doanh nhân và chuyên gia đào tạo hàng đầu tại Singapore. Được viết từ những trải nghiệm cá nhân và quá trình vượt qua khó khăn trong học tập, cuốn sách đã trở thành một tài liệu hướng dẫn thiết thực cho rất nhiều học sinh, sinh viên và người trẻ trên khắp thế giới. Với mục tiêu truyền đạt những phương pháp học tập hiệu quả và phát triển kỹ năng cá nhân, tác giả đã mang đến cho độc giả không chỉ là những kiến thức về học tập mà còn là sự động viên mạnh mẽ để họ tin vào khả năng của mình và khám phá tiềm năng chưa được khai phá. Adam Khoo từng là một học sinh có thành tích yếu kém, bị giáo viên và bạn bè coi thường. Tuy nhiên, nhờ việc khám phá ra các phương pháp học tập thông minh, anh đã vươn lên trở thành một trong những học sinh giỏi nhất và thành công trong cuộc sống sau này. Câu chuyện cá nhân đầy cảm hứng của tác giả là bằng chứng sống cho thấy rằng, bất kỳ ai cũng có thể đạt được thành công nếu có phương pháp học tập và sự nỗ lực phù hợp. Cuốn sách đã nhanh chóng trở thành một cuốn cẩm nang không chỉ dừng lại ở việc học tập, mà còn cung cấp nhiều bài học về tư duy tích cực, quản lý thời gian, và phát triển bản thân, góp phần giúp người đọc tự tin hơn trong cuộc sống. Đối tượng chính của cuốn sách là các bạn trẻ, đặc biệt là học sinh, sinh viên đang gặp khó khăn trong học tập và mong muốn tìm kiếm những phương pháp mới để cải thiện kết quả. Tuy nhiên, những nguyên tắc và bài học mà Adam Khoo chia sẻ cũng có thể áp dụng rộng rãi cho người đi làm và bất kỳ ai muốn phát triển kỹ năng cá nhân. Với ngôn ngữ dễ hiểu, cách diễn đạt gần gũi và những minh họa thực tế, \\\"Tôi tài giỏi, bạn cũng thế!\\\" đã trở thành một cuốn sách bán chạy trên toàn cầu và được dịch ra nhiều ngôn ngữ khác nhau, trong đó có tiếng Việt. Sức hút của cuốn sách không chỉ nằm ở nội dung hữu ích mà còn ở tinh thần khích lệ và niềm tin mà nó mang lại, giúp độc giả thấy rằng họ hoàn toàn có thể đạt được thành công, bất kể xuất phát điểm của mình là gì. \\r\\n\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" của Adam Khoo được chia thành nhiều phần với nội dung chặt chẽ, giúp độc giả hiểu rõ hơn về các phương pháp học tập và phát triển bản thân mà tác giả đã áp dụng thành công. Phần đầu của cuốn sách kể lại câu chuyện cá nhân của Adam Khoo, từ khi anh còn là một học sinh có thành tích yếu kém, bị giáo viên và bạn bè đánh giá thấp, đến lúc anh tìm ra những kỹ thuật học tập hiệu quả. Từ một học sinh bị coi là không có tiềm năng, Adam Khoo đã lột xác và trở thành một trong những học sinh giỏi nhất nhờ sự thay đổi trong tư duy và phương pháp học. Phần này không chỉ là lời tự sự mà còn là sự động viên mạnh mẽ, nhắn nhủ với người đọc rằng bất kỳ ai cũng có thể thay đổi nếu biết cách khai thác tiềm năng của mình. Phần tiếp theo của cuốn sách tập trung vào việc chia sẻ những phương pháp học tập cụ thể mà Adam Khoo đã sử dụng để đạt được thành công. Một trong những phương pháp quan trọng là quản lý thời gian. Tác giả nhấn mạnh rằng việc sắp xếp thời gian hợp lý và có kế hoạch học tập khoa học sẽ giúp tăng hiệu quả học tập mà không cần tốn quá nhiều sức lực. Tiếp đến là kỹ thuật ghi nhớ, trong đó Adam Khoo trình bày cách áp dụng sơ đồ tư duy, hình ảnh hóa và các mẹo ghi nhớ thông qua việc liên tưởng để giúp học sinh nhớ bài lâu hơn. Bên cạnh đó, cuốn sách còn đề cập đến việc đặt mục tiêu rõ ràng, một kỹ năng mà tác giả cho rằng sẽ giúp duy trì động lực và định hướng cụ thể trong quá trình học tập và làm việc. Một trong những phần quan trọng khác của sách là tư duy tích cực. Tác giả không chỉ tập trung vào kỹ thuật mà còn nhấn mạnh tầm quan trọng của thái độ sống. Tư duy tích cực không chỉ giúp người học vượt qua khó khăn mà còn là nền tảng để phát triển sự tự tin và khả năng tự nhận thức về tiềm năng của bản thân. Cuối cùng, các bài học trong cuốn sách đều xoay quanh việc khuyến khích độc giả tin vào khả năng của mình và áp dụng những phương pháp đã được kiểm chứng để cải thiện kết quả học tập cũng như thành công trong cuộc sống.\\r\\n\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" của Adam Khoo không chỉ là một tác phẩm truyền cảm hứng, mà còn là một hướng dẫn thực tiễn giúp người đọc cải thiện kỹ năng học tập và phát triển bản thân. Một trong những điểm mạnh nổi bật của sách là tính thực tiễn và dễ áp dụng. Adam Khoo không chỉ trình bày lý thuyết mà còn cung cấp các phương pháp học tập cụ thể như kỹ thuật ghi nhớ, quản lý thời gian, và cách lập kế hoạch chi tiết, giúp người đọc dễ dàng hiểu và thực hiện. Đặc biệt, các phương pháp này không yêu cầu điều kiện phức tạp hay kiến thức nền tảng đặc biệt, phù hợp với mọi lứa tuổi và hoàn cảnh. Bất kể bạn là học sinh, sinh viên, hay người đi làm, đều có thể tìm thấy những giá trị hữu ích từ các bài học của tác giả. Cuốn sách cũng ghi điểm bởi tính truyền cảm hứng mạnh mẽ. Adam Khoo sử dụng chính câu chuyện của mình để tạo động lực cho người đọc, từ việc vượt qua những thất bại trong học tập cho đến khi trở thành một trong những sinh viên xuất sắc nhất Singapore. Điều này giúp độc giả nhận ra rằng, bất kỳ ai cũng có thể thay đổi số phận của mình nếu biết cách khai thác tiềm năng. Sự kết hợp giữa yếu tố câu chuyện cá nhân và phương pháp học tập làm cho cuốn sách vừa mang tính khích lệ, vừa cung cấp giải pháp thực tiễn, điều mà ít sách về phát triển cá nhân có thể làm được một cách thuyết phục như vậy. Tuy nhiên, cuốn sách không phải là không có nhược điểm. Một trong những điểm yếu của sách là sự khả thi của phương pháp có thể khác nhau đối với từng cá nhân. Mặc dù các kỹ thuật và phương pháp mà Adam Khoo giới thiệu rất hữu ích, nhưng không phải ai cũng có thể áp dụng thành công. Một số người có thể cảm thấy khó khăn khi thực hiện các phương pháp này, đặc biệt nếu họ không quen với việc thay đổi thói quen học tập hay tư duy. Hơn nữa, dù sách nhấn mạnh tầm quan trọng của tư duy tích cực, nhưng thực tế cho thấy việc duy trì một thái độ tích cực liên tục trong môi trường áp lực không phải lúc nào cũng dễ dàng, đặc biệt đối với những người đang đối mặt với nhiều khó khăn cá nhân. Cuối cùng, một số ý kiến cho rằng cuốn sách tập trung quá nhiều vào học tập mà chưa đề cập sâu đến những yếu tố tâm lý và môi trường có thể ảnh hưởng đến quá trình phát triển bản thân của mỗi người. Mặc dù cuốn sách là một công cụ hữu hiệu trong việc cải thiện kết quả học tập, nhưng đôi khi nó không giải quyết được những thách thức phức tạp hơn mà người đọc có thể gặp phải trong cuộc sống và công việc. Tuy vậy, nhìn chung, \\\"Tôi tài giỏi, bạn cũng thế!\\\" vẫn là một cuốn sách đáng đọc, đặc biệt đối với những ai đang tìm kiếm cách thức cải thiện học tập và phát triển khả năng cá nhân.\\r\\n\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" mang đến nhiều bài học quý giá, giúp người đọc không chỉ cải thiện phương pháp học tập mà còn phát triển tư duy và kỹ năng sống. Một trong những bài học quan trọng nhất là niềm tin vào bản thân. Adam Khoo đã nhấn mạnh rằng thành công không phụ thuộc vào xuất phát điểm hay khả năng bẩm sinh, mà nằm ở cách chúng ta suy nghĩ và hành động. Sự tự tin vào tiềm năng của chính mình là yếu tố cốt lõi giúp vượt qua những giới hạn và thách thức trong học tập cũng như trong cuộc sống. Cuốn sách khơi gợi ý thức rằng mỗi người đều có thể tài giỏi nếu biết cách khám phá và tận dụng những khả năng vốn có. Bên cạnh đó, lập kế hoạch và đặt mục tiêu rõ ràng là một bài học không thể bỏ qua. Adam Khoo chỉ ra rằng việc thiết lập các mục tiêu cụ thể và có kế hoạch hành động chi tiết sẽ giúp người học luôn có định hướng và không bị lạc lối. Đặc biệt, anh nhấn mạnh tầm quan trọng của việc chia nhỏ các mục tiêu lớn thành những bước nhỏ hơn, dễ thực hiện, từ đó giúp duy trì động lực và theo đuổi mục tiêu đến cùng. Đây là kỹ năng không chỉ hữu ích trong học tập mà còn có giá trị trong bất kỳ lĩnh vực nào của cuộc sống. Một bài học quan trọng khác mà sách mang lại là sự kiên trì và nỗ lực không ngừng. Adam Khoo đã minh họa rõ ràng rằng thành công không đến sau một đêm mà là kết quả của sự rèn luyện và học hỏi liên tục. Dù gặp phải thất bại, chúng ta không nên từ bỏ, mà cần xem đó là cơ hội để học hỏi và cải thiện bản thân. Cuốn sách nhấn mạnh tinh thần không ngừng học hỏi, mở ra một tư duy phát triển, nơi mà người đọc được khuyến khích luôn sẵn sàng tiếp thu những điều mới mẻ và không ngừng cải thiện chính mình. Cuối cùng, tư duy tích cực là bài học cốt lõi xuyên suốt cuốn sách. Adam Khoo khẳng định rằng cách chúng ta nhìn nhận vấn đề sẽ quyết định kết quả của hành động. Nếu giữ thái độ tích cực, chúng ta sẽ tìm ra giải pháp ngay cả trong những tình huống khó khăn nhất. Bằng việc áp dụng các bài học từ cuốn sách vào cuộc sống, người đọc không chỉ nâng cao kỹ năng học tập mà còn có thể thay đổi thái độ sống, trở nên mạnh mẽ, tự tin và thành công hơn.\\r\\n\\r\\nCuốn sách \\\"Tôi tài giỏi, bạn cũng thế!\\\" đã có tác động sâu sắc đến cộng đồng, đặc biệt là trong giới trẻ, học sinh, sinh viên và những người đang tìm cách phát triển bản thân. Với nội dung dễ hiểu và những phương pháp học tập thực tiễn, cuốn sách đã trở thành một công cụ quan trọng giúp hàng ngàn người vượt qua khó khăn trong học tập. Rất nhiều học sinh, sau khi đọc sách, đã thay đổi tư duy và đạt được những kết quả tốt hơn, từ đó tăng cường sự tự tin và khả năng tự quản lý thời gian. Tác phẩm này không chỉ mang đến những kỹ năng cụ thể mà còn khơi dậy trong người đọc niềm tin rằng họ hoàn toàn có thể làm chủ cuộc đời mình, dù hoàn cảnh ban đầu có bất lợi. Ngoài ra, cuốn sách còn có tác động tích cực trong lĩnh vực phát triển cá nhân. Không chỉ dừng lại ở việc cải thiện thành tích học tập, nhiều độc giả sau khi áp dụng các phương pháp của Adam Khoo đã cải thiện kỹ năng sống, phát triển tư duy sáng tạo và tăng cường kỹ năng giải quyết vấn đề. Những bài học về tư duy tích cực, lập kế hoạch và kiên trì theo đuổi mục tiêu đã giúp độc giả tự tin hơn khi đối mặt với những thử thách trong cuộc sống. Ảnh hưởng của cuốn sách không chỉ dừng lại ở cá nhân người đọc mà còn lan tỏa đến cộng đồng học tập, khi nhiều người chia sẻ và áp dụng những phương pháp này, tạo nên một phong trào học hỏi và phát triển bản thân rộng khắp. Đặc biệt, cuốn sách đã góp phần thúc đẩy sự thay đổi trong tư duy giáo dục. Thay vì chỉ tập trung vào kiến thức, cuốn sách khuyến khích học sinh phát triển kỹ năng tư duy và tự học, giúp họ trở thành những cá nhân tự lập và sáng tạo. Điều này đã giúp tạo ra một làn sóng mới trong cộng đồng giáo dục, nơi mà việc rèn luyện tư duy và kỹ năng cá nhân trở nên quan trọng không kém gì kiến thức học thuật. Tóm lại, \\\"Tôi tài giỏi, bạn cũng thế!\\\" đã và đang có sức ảnh hưởng to lớn đối với cộng đồng, không chỉ giúp cải thiện kết quả học tập mà còn thúc đẩy sự phát triển toàn diện của nhiều thế hệ độc giả. \\r\\n\\r\\nDưới đây là một đoạn kết luận cho bài review về cuốn sách Tôi Tài Giỏi, Bạn Cũng Thế:\\r\\n\\r\\nCuốn sách Tôi Tài Giỏi, Bạn Cũng Thế của Adam Khoo không chỉ đơn thuần là một cuốn sách hướng dẫn học tập mà còn là một cẩm nang về tư duy, sự kiên trì và phát triển bản thân. Qua những phương pháp cụ thể, dễ hiểu và đã được kiểm chứng, Adam đã truyền cảm hứng cho hàng triệu người trẻ vươn lên, khai phá tiềm năng và đạt được những thành tựu vượt bậc trong học tập cũng như cuộc sống. Đây là một tài liệu quý giá không chỉ dành cho học sinh, sinh viên mà còn phù hợp với bất cứ ai mong muốn nâng cao hiệu quả học tập và phát triển bản thân. Nếu bạn đang tìm kiếm động lực để thay đổi bản thân và đạt được thành công, thì Tôi Tài Giỏi, Bạn Cũng Thế chắc chắn là một cuốn sách không nên bỏ lỡ.', 5, '2024-11-12 00:27:24', 'Đã duyệt'),
(3, 1, 24, 'evẻ', 4, '2024-11-12 12:21:31', 'Đã duyệt'),
(4, 1, 24, 'dừ', 0, '2024-11-12 12:32:23', 'Đã duyệt'),
(5, 1, 24, 'fể', 0, '2024-11-12 12:32:30', 'Đã duyệt'),
(6, 1, 26, 'cũng hay nha, mặc dù tui không thích triết lý nhưng cũng cuốn', 4, '2024-11-12 19:39:06', 'Chưa duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `TopicID` int(11) NOT NULL,
  `Topicname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`TopicID`, `Topicname`) VALUES
(1, 'Self-help '),
(2, 'Kinh tế'),
(3, 'Tiểu Thuyết'),
(4, 'Lịch sử'),
(5, 'Khoa học '),
(6, 'Kinh Dị ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pass` text NOT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  `Role` varchar(20) DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Email`, `Username`, `Pass`, `Avatar`, `Role`) VALUES
(1, 'huyenngoc3654238@gmail.com', 'Ngọc Huyền', '1234567', 'ad_review/uploads/1731359793-Screenshot 2024-11-10 at 13.38.04.png', 'User'),
(2, 'le3654238@gmail.com', 'May ', '1', 'ad_review/uploads/1731290369-Screenshot 2024-11-08 at 15.12.56.png', 'User'),
(3, 'admin@gmail.com', 'admin ', '1234567', NULL, 'admin'),
(4, 'hang@gmail.com', 'Hang', '123', NULL, 'admin'),
(5, 'phamhang1222004@gmail.com', 'phamhang1222004@gmail.com', 'sqdwf', '', 'User'),
(6, 'phamhang122004@gmail.com', 'phamhang122004@gmail.com', '1', '', 'User'),
(7, 'phamhang122004@gmail.com', 'phamhang122004@gmail.com', '1', '', 'User'),
(8, 'phamhang1222004@gmail.com', 'phamhang1222004@gmail.com', 'sqdwf', '', 'User'),
(9, 'phamhang22004@gmail.com', 'phamhang22004@gmail.com', '1', '', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `BookID` (`ReviewID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ReviewID`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`TopicID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `TopicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
