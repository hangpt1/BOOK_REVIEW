-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 27, 2024 lúc 12:29 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookreview`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--
-- Tạo: Th9 25, 2024 lúc 12:11 PM
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `admin`:
--

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('Admin', '1234567');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--
-- Tạo: Th9 25, 2024 lúc 11:29 AM
--

CREATE TABLE IF NOT EXISTS `books` (
  `BookID` int(11) NOT NULL AUTO_INCREMENT,
  `Bookname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Published_year` int(4) DEFAULT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'mô tả',
  `Image` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`BookID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `books`:
--

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` ( `Bookname`, `Author`, `Published_year`, `Description`, `Image`, `created_at`) VALUES
( 'Tôi Tài Giỏi Bạn Cũng Thế', 'Adam Khoo', NULL, 'Paul Sweeny đã từng nói: “Bạn biết bạn đã đọc một cuốn sách hay, khi giở đến trang cuối cùng và cảm thấy như mình vừa mất đi một người bạn.” Điều này vô cùng đúng với cuốn sách đầu tiên và tâm đắc nhất mình được đọc “Tôi tài giỏi, bạn cũng thế” của tác giả Adam Khoo. Đây là một cuốn sách về các kỹ năng học tập mà tác giả đã áp dụng để từ một học sinh đứng chót lớp trở thành người đậu đại học danh giá. Nghe có lẽ đây là một câu chuyện khá quen thuộc và có phần hơi nhàm chán khi mà chúng ta đã được nghe rất nhiều người thành công chia sẻ về cuộc đời mình thì đều nói bản thân có xuất phát điểm rất tệ, và sau đó thành công. Nhưng đối với cuốn sách này thì khác, những phương pháp học tập được tác giả nêu ra thú vị hơn, vì nó tựa như những trò chơi. Những trang sách của Adam Khoo sẽ đưa độc giả đến hành trình tự khám phá bản thân đầy hứng khởi. Hành trình này không chỉ đơn thuần về việc học mà còn về việc nhận ra được tiềm năng trong bạn. Adam chắc chắn đã mở ra con đường mới cho những học sinh kém - những người luôn bị gia đình, thầy cô và chính bản thân họ phủ nhận. \n\n\nMỗi chúng ta đều là thiên tài \n\n\nChúng ta không thể đánh giá một con cá qua khả năng leo cây của nó hay cũng không thể đánh giá sức mạnh của sư tử bằng cách bắt nó bơi. Mỗi chúng ta đều có khả năng vượt trội ở một lĩnh vực riêng, chỉ là chúng ta chưa phát hiện và chưa biết cách để khai thác khả năng của mình, chính điều này khiến rất nhiều người nghĩ mình chỉ là một kẻ thua cuộc ngay từ lúc bắt đầu. Chính tác giả Adam Khoo cũng đã nghĩ như vậy về bản thân mình. Bước ngoặt đã xảy ra khi ông được Ernest Wong dìu dắt qua khoá học Thiếu Niên Siêu Đẳng. \n\n\nKiến thức mà Ernest Wong truyền đạt trong khoá học tạo nên sự biến đổi mạnh trong tính cách của tôi. Bằng việc giúp học sinh áp dụng các phương pháp học tập tiên tiến ở Mỹ như Cách Học Tăng Tốc (Accelerated Learning), Lập Trình Ngôn Ngữ Tư Duy (Neuro-Linguistic Programing - NLP) cùng với các cách thức tìm hiểu, tận dụng sức mạnh phi thường của não bộ, Ernest đã giúp tôi hoàn toàn thay đổi suy nghĩ của mình về khả năng bản thân và những thành công trong cuộc sống. Ernest chỉ cho chúng tôi thấy rằng, tất cả mọi người, thậm chí những học sinh kém nhất, ai cũng có nguồn năng lực vô tận để trở thành tài năng sáng chói hoặc các nhà lãnh đạo tài ba. Chính thái độ tiêu cực, không tin tưởng vào bản thân dẫn đến việc không chịu cố gắng là yếu tố duy nhất cản trở chúng tôi thành công. Tôi kết thúc khoá học với những kỹ năng hiệu quả và một niềm tin mãnh liệt rằng tôi có thể giành lại quyền được thành công của chính mình. \nHọc nhanh hay học chậm - Cùng một bộ não, chỉ khác nhau ở cách học\n\n\nSau khi được nghe chia sẻ của những người thành công, nhiều học sinh phản ứng lại rằng học không đủ thông minh hay tài năng để đạt được thành công như vậy. Thật ra, chính phương pháp học hiệu quả mới là bí quyết của các \"siêu sao\" đó. Tác giả đã tìm hiểu và đưa ra cho chúng ta 9 bước học hiệu quả:\n\n\n1.    Xác định mục tiêu rõ ràng\n\n2.    Lên kế hoạch cụ thể và sắp xếp thời gian\n\n3.    Hành động kiên định\n\n4.    Phương pháp đọc để nắm bắt thông tin\n\n5.    Ghi chú bằng Sơ đồ tư duy \n\n6.    Phương pháp “Trí nhớ siêu đẳng”\n\n7.    Ứng dụng lý thuyết vào thực hành\n\n8.    Tăng tốc cho kỳ thi\n\n9.    Đi thi \n\nĐể hoàn thành 9 bước trên tốt nhất, bạn cần phải hiểu được những gì đang hạn chế bạn và bạn thật sự mong muốn điều gì, cần phải phân biệt rõ ràng giữa muốn và thích. Hãy ghi những điều này ra giấy, gạch bỏ từng vấn đề khó khăn của bạn khi bạn vượt qua được nó và đánh dấu từng kỹ năng và năng lực cần thiết để thành công khi bạn bắt đầu có được nó. \n\n\nHọ thành công vì tin vào khả năng của mình\n\n\nMỗi chương của cuốn sách, điều luôn được tác giả nhắc đến đầu tiên là niềm tin vào bản thân, mọi thứ đều được vận hành bằng niềm tin. Niềm tin là khởi đầu và cũng là kết quả của mỗi việc banh làm, vì vậy có một niềm tin đúng đắn là vô cùng quan trọng. \n\n\nNiềm tin của bạn quyết định hành động của bạn. Hành động quyết định bạn muốn tận dụng bao nhiêu khả năng tiềm ẩn trong bạn. Việc bạn tận dụng được bao nhiêu khả năng thật sự của bạn quyết định kết quả bạn đạt được. Cuối cùng, kết quả bạn đạt được lại củng cố niềm tin của bạn trước đó. Đây là một vòng tròn được lặp đi lặp lại, nên hãy bắt đầu thành công bằng việc thay đổi niềm tin của bạn. Bạn phải nhớ rằng niềm tin của bạn không bao giờ là sự thật tuyệt đối cả. Niềm tin của một người chỉ đúng với chủ nhân của nó. Sự khác biệt giữa người thành công và kẻ thất bại nằm ở “sản phẩm niềm tin” của họ. Bởi thế, thay vì nghi ngờ một niềm tin nào đó có thật sự đúng hay không, bạn phải tự hỏi liệu niềm tin đó có truyền thêm năng lượng để bạn đi đến thành công hay không. Nếu nó làm bạn cảm thấy mạnh mẽ hơn để vươn tới thành công, hãy chấp nhận niềm tin đó. Ngược lại, nếu nó hạn chế năng lực bạn, bạn cần phải từ bỏ nó.\n\n\nNhững phương pháp học siêu đẳng\n\n\nTrí thông minh của một người có thể được rèn luyện và bất kỳ ai cũng có thể trở nên thông minh hơn. Nếu bạn quyết tâm nâng cao năng lực não bộ, trí thông minh, trí nhớ và khả năng suy nghĩ của bạn từ ngày hôm nay, bạn hoàn toàn có thể làm được điều đó. Mặc dù có một số người có sẵn trí thông minh thiên phú từ lúc sinh ra, hầu hết những người tài năng hoặc thiên tài đều do tự rèn luyện. \n\n\nNão bộ của bạn giống như một cơ bắp. Bạn phải tận dụng nó hoặc bạn sẽ mất nó. \n\n\nNão bộ của bạn cần được kích thích để có thể hoạt động tốt nhất, và Adam Khoo cũng đã cung cấp cho chúng ta sáu cách để kích thích não bộ:\n\n\n1. Nghe nhạc Baroque - một loại nhạc  cổ điển từ những năm 1700-1800\n\n2. Liên tục đặt câu hỏi và trả lời câu hỏi trong lớp học\n\n3. Thử thách bản thân bằng việc cố gắng giải đáp các câu hỏi mới mẻ phức tạp mỗi ngày\n\n4. Khám phá thông tin bên ngoài sách giáo khoa bằng việc học hỏi kiến thức mới trong sách tham khảo\n\n5. Không bao giờ bỏ qua các chủ đề và chương sách khó hiểu. Hào hứng bắt tay vào tìm lời giải đáp. \n\n6. Hiểu rõ rằng: cách duy nhất để trở nên thông minh là cảm thấy có hiểu và phạm sai lầm trong quá trình rèn luyện. \n\n\nỞ mỗi chương của cuốn sách, Adam Khoo sẽ nói rõ hơn về các phương pháp học tập hiệu quả và tận dụng não bộ tối đa như kỹ năng Skimming và Scanning, Mind Map…\n\n\nNhiều người tránh việc đọc nhanh vì họ nghĩ việc đọc nhanh làm giảm khả năng tập trung cũng như khả năng tiếp thu thông tin của họ. Thật tế hoàn toàn ngược lại, lý do bạn mất tập trung là về bạn đọc quá chậm. Xin nhớ rằng việc thiếu tập trung là kết quả của việc Tâm trí bạn lang thang nghĩ về những chuyện khác. \n\n…\n\nSơ đồ tư duy thật sự giúp bạn tận dụng các chức năng của não trái lận não phải khi học. Đây chính là công cụ học tập vận dụng được sức mạnh của cả bộ não. Nếu vận dụng đúng cách, nó sẽ hoàn toàn giải phóng những năng lực tìm ẩn trong bạn, đưa bạn lên một đẳng cấp mới, đẳng cấp của một tài năng thực thụ hay thậm chí của một thiên tài. \nDám mơ ước: Sức mạnh của mục tiêu\n\n\nThành công là một quãng đường dài, và mỗi mục tiêu là một đích đến, và tất nhiên nếu bạn đi một con đường mà không có đích đến thì quãng đường đó sẽ ngày càng dài và đi vào vô định. \n\n\nNếu bạn để ý kỹ những người nổi tiếng, bạn sẽ nhận ra rằng họ thành công là do họ dám mơ ước về thành công đó từ rất sớm. Họ cũng hiểu rằng thành công mà họ có được là do họ đã lên kế hoạch để thành công. \n\nTiger Woods hiện là vận động viên đánh gôn số một thế giới. Ở tuổi 24, anh đã đạt nhiều thành tích trong môn thể thao gôn hơn bất kỳ ai khác trong lịch sử. Bạn có biết rằng để được đến điều này là do anh đã xác định mục tiêu đánh bại những vận động viên đánh gôn hàng đầu và trở thành số một thế giới từ năm anh tám tuổi không ?\n\nCựu tổng thống Mỹ Bill Clinton, con của một góa phụ nghèo sống ở một nông trại nhỏ, xác định tham vọng trở thành tổng thống Mỹ khi vẫn còn là một đứa trẻ. Thầy cô, họ hàng, bạn bè đều nói với ông rằng \"Tỉnh dậy đi, đừng mơ nữa nhóc!\". Nhưng ông đã dám vạch ra tương lai và biến ước mơ thành hiện thực. \n\nBạn có tự hỏi “Nếu việc xác định mục tiêu có sức mạnh phi thường giúp bạn thành công đến vậy, tại sao mọi người lại không xác định mục tiêu?”\n\nKhi còn nhỏ, chúng ta luôn có những ước mơ và mục tiêu bay bổng về tương lai. Chúng ta mơ được làm bác sĩ, lính cứu hoả, ngôi sao điện ảnh và những anh hùng. Thật đáng tiếc, khi lớn lên, nhiều người trong chúng ta lại từ bỏ mục tiêu của mình và cũng không màng tới việc đặt ra mục tiêu mới. Bạn phải chủ động thiết kế những mục tiêu thúc đẩy và hướng dẫn bạn đi đến thành công. \n\nCó nhiều lý do dẫn đến việc nhiều người sợ không dám đặt ra mục tiêu cho chính mình. Họ không đủ tự tin, họ không tin vào sức mạnh của mục tiêu, họ sợ sẽ bị thất bại và xấu hổ. \n\nNhững học sinh giỏi dám xác định mục tiêu to lớn vì họ không tin vào thất bại. Khi họ không đạt được mục tiêu, họ không nghĩ đó là thất bại. Thay vào đó, họ xem đó là một kinh nghiệm cần học hỏi. Kết quả là họ không cảm thấy xấu hổ về việc này. Họ biết rằng miễn là họ học hỏi kinh nghiệm và liên tục hành động, cuối cùng họ cũng sẽ đạt được mục tiêu. Thay vì mất tinh thần khi bị người khác cười chê, tôi muốn bạn chuyển sự nhã bán đó thành sức mạnh và động lực thúc đẩy bạn. \n\nThật sự, động lực mạnh mẽ thúc đẩy tôi khi còn là một học sinh chính là việc tôi muốn chứng tỏ với tất cả thầy cô, bạn bè rằng họ đã sai. Họ càng cười nhạo tôi và nói rằng tôi không thể đạt được điều đó, tôi càng cảm thấy mạnh mẽ để học tập chăm chỉ để đạt được mục tiêu để chứng tỏ cho họ thấy. Vậy thì, đừng để nỗi sợ xấu hổ làm bạn mất tinh thần. Hãy biến nỗi sợ đó thành sức mạnh. \n\n\nThời gian là tiền bạc\n\n\nCó rất nhiều học sinh, họ không chỉ học xuất sắc mà còn dành thời gian tham gia rất nhiều các hoạt động xã hội, đây là một chuyện rất đáng ngưỡng mộ vì có thể quản lý thời gian của mình rất tốt. Ngược lại, những học sinh kém lại luôn than phiền rằng họ không có đủ thời gian làm việc cho một ngày. Thực hư chuyện này là thế nào ? \n\n\nMột việc được coi là lãng phí thời gian khi nó không hướng đến mục tiêu đã xác định. Nói cách khác, những việc này không giúp bạn đạt mục tiêu phải học tập, mục tiêu về tài chính, mục tiêu về sức khỏe, thể thao... Ví dụ, nếu mục tiêu của bạn là để tất cả điểm 10 trong kỳ thi sắp tới, nhưng bạn dành bốn tiếng mỗi ngày chơi đá bóng với bạn bè. Việc chơi đá bóng được gọi là lãng phí thời gian. Tuy nhiên nếu bạn quyết tâm trở thành cầu thủ bóng đá cấp quốc gia, việc rèn luyện bốn tiếng một ngày có thể không phải là lãng phí thời gian.\n\nNếu bạn viết ra “học ở trường” từ 9-10 giờ sáng có phải là khoảng thời gian này không bị lãng phí không? Câu trả lời còn phụ thuộc vào nhiều yếu tố. Nếu bạn thường xuyên nói chuyện trong giờ học, không tập trung nghe giảng, kết quả là bạn không học được gì cả bạn cũng lãng phí 1 giờ đồng hồ cho dù bạn “học ở trường”. Các hoạt động như ngủ, đi tắm có thể làm lãng phí thời gian nếu bạn tốn quá nhiều thời gian cho chúng. Ví dụ, nếu bạn ngủ 12 tiếng một ngày, tôi sẽ nói rằng là bạn đang lãng phí thời gian về chúng ta thường chỉ cần ngủ 7 tiếng một ngày là đủ.\n\n…\n\nKhi xác định mục tiêu, Ta sẽ bắt đầu mơ ước. Khi bắt đầu lên kế hoạch ước mơ sẽ trở nên khả thi. Khi bắt đầu hành động ước mơ sẽ trở thành hiện thực. Vào đầu năm học, bạn luôn nên dành một ngày lên kế hoạch cho cả năm. Để làm điều này, bạn hãy dùng phần sắp xếp công việc theo tháng trong sổ tay của bạn. Phần này chứa đựng tất cả các ngày trong mỗi tháng vào một hoặc hai trang.\n\nBước 1: Đánh dấu những sự kiện quan trọng\n\nBước 2: Xác định thời gian biểu\n\nBước 3: Đặt thời gian hạn học tất cả các chương trong năm\n\n\nTạo ra quyết tâm mạnh mẽ tức thì\n\n\nChắc hẳn là mỗi người chúng ta đã được nghe không ít về những bài học thành công, về những phương pháp học tập nhưng lại không đủ quyết tâm, kiên nhẫn để áp dụng nó. \n\n\nYếu tố nào quyết định cảm xúc của chúng ta ? Cảm xúc được quyết định bởi suy nghĩ và cách chúng ta điều chỉnh cơ thể. Xin nhắc lại, cảm xúc ảnh hưởng đến hành động và do đó ảnh hưởng đến kết quả chúng ta đạt được. Khi chúng ta có những cảm xúc tích cực như hưng phấn, vui vẻ, chúng ta sẽ hành động tích cực và đạt kết quả tích cực. Khi chúng ta có những cảm xúc tiêu cực như thất vọng, chán nản, lười biếng, chúng ta sẽ hành động tiêu cực và nhận lãnh hậu quả tiêu cực. Vậy để thay đổi hành động cũng như kết quả, chúng ta phải học cách làm chủ cảm xúc thông qua việc làm chủ suy nghĩ và điều chỉnh cơ thể hợp lý.\n\nBất cứ lúc nào bạn cảm thấy lười biếng mệt mỏi, không muốn bắt tay vào học, bạn chỉ cần đứng thẳng dậy, chuyển nhanh vào trạng thái dồi dào năng lượng bằng cách thở sâu, hướng thẳng vai ra phía sau, rồi cười thật tươi. Bạn cũng có thể hét lớn đầy quyết tâm “Tôi cảm thấy thật sung sức!”. Bạn sẽ thay đổi được cảm xúc và hành động ngay lập tức. Nếu bạn bè, gia đình thấy bạn làm việc này, họ sẽ nghĩ rằng bạn điên. Đừng bận tâm về họ. Những người thành công làm những việc mà kẻ thất bại không bao giờ lạ Những người thành công làm những việc mà kẻ thất bại không bao giờ làm. \n\nMột nghiên cứu được tiến hành tại trường đại học California vào đầu những năm 1980 liên quan đến một nhóm người bị trầm uất . Không một liệu pháp điều trị nào có thể giúp họ thoát khỏi tình trạng này. Tuy nhiên, khi các nhà nghiên cứu buộc những người này phải mỉm cười và thở sâu hơn, nhiều người trong số họ sau bao nhiêu năm sống trong u uất đã bắt đầu cảm thấy trạng thái tinh thần được cải thiện.\n\n\nBạn đã biết được cách điều chỉnh cơ thể ảnh hưởng đến cảm xúc như thế nào. Nhân tố thứ hai ảnh hưởng đến cảm xúc chính là suy nghĩ của mình. Nếu học được cách điều khiển suy nghĩ, chúng ta có thể làm chủ được cảm xúc. \n\n\nVấn đề không phải là việc gì xảy ra với bạn mà là cách bạn phản ứng như thế nào. Cho dù bất kỳ chuyện gì xảy ra với bạn đi chăng nữa, bạn vẫn có thể làm chủ được cảm xúc và trạng thái tinh thần của bạn. bạn làm được việc đó bằng cách kiểm soát phản ứng của bạn với những việc xảy ra. Ví dụ, nếu ai đó đến trước mặt bạn và nói “Bạn rất ngu ngốc, không làm được việc gì và không bao giờ thành công trong cuộc sống”, bạn nghĩ bạn sẽ cảm thấy thế nào ? Đa số mọi người sẽ nói rằng họ cảm thấy kinh khủng bị sỉ nhục hoặc suy sụp tinh thần. \n\nNhư đã biết, cảm xúc lệ thuộc vào cách chúng ta tự nói với bản thân. Nếu bạn phản ứng bằng cách tự nói rằng “Có thể anh ta nói đúng. Mình rất ngu ngốc và không làm được việc gì.” Sau đó, bạn sẽ cảm thấy tồi tệ, không muốn làm gì nữa cả. Tuy nhiên, bạn có thể phản ứng bằng cách tự nhủ “ Thật buồn cười. Tôi có đầy đủ khả năng để thành công. Tôi sẽ chứng minh cho anh thấy điều đó.” . Bằng cách này bạn sẽ cảm thấy quyết tâm mạnh mẽ để hành động bạn chứng tỏ khả năng bản thân. Hãy luôn chọn cách đối thoại với bản thân theo hướng thúc đẩy bạn hành động tích cực. \nLời kết\n\nQuả thật lượng kiến thức về cả phương pháp học tập, cách thiết lập mục tiêu hay cách làm chủ suy nghĩ được Adam Khoo gửi gắm qua cuốn sách này là rất lớn. Cho dù bạn là ai và đang ở đâu trên thế giới, khi bạn bỏ thời gian đọc quyển sách này, bạn đã học được nhiều kiến thức đơn giản nhưng mạnh mẽ đến mức có thể thay đổi được cách học của bạn, mãi mãi. bạn biết rằng nếu những học sinh khác có thể đạt kết quả tốt, bạn cũng có thể đạt được. Vấn đề chỉ là ở việc sử dụng đúng các kỹ năng và phương pháp. Bạn cũng đã biết về tiềm năng không giới hạn của não bộ. Bạn đã nhận ra rằng, nếu nắm được chìa khóa thành công, bạn sẽ giải phóng được những khả năng phi thường tiềm ẩn trong bạn. Hãy nhớ rằng số phận của bạn do bạn tự tạo ra. \n\n\n', '\"C:\\xampp\\htdocs\\bookreview\\image book\\Tôi Tài Giỏi Bạn Cũng Thế.jpg\"', '2024-09-26 10:17:31'),
( 'Càng Độc Lập Càng Cao Quý', 'Vãn Tình ', NULL, 'Này cô gái, bất luận cuộc đời mang đến cho ta bao nhiêu chông gai thử thách, xin đừng tự coi nhẹ chính mình, đừng tự buông bỏ bản thân và phụ thuộc vào người khác. Hãy luôn giữ vừng niềm tin rằng, số phận của ta nằm trong tay chính ta, không nằm trong tay ông trời. Độc lập về cuộc sống, tư tưởng kinh tế giúp chúng ta vĩnh viễn không mất đi quyền lựa chọn trong tay mình. Không ai có thể thay chúng ta chịu trách nhiệm về cuộc đời mình. Thế nên, dù đang hạnh phúc đi nữa, trên đường đời cũng không tránh khỏi những tháng ngày phải đơn độc tiến lên.\r\n\r\nMột phiên bản khác của tác giả Vãn Tình được xuất bản tại Việt Nam sau hai cuốn sách đình đám Bạn đắt giá bao nhiêu và Khí chất bao nhiêu hạnh phúc bấy nhiêu. Cuốn sách mang tên Càng độc lập càng cao quý với 42 câu chuyện xoay quanh vấn đề hôn nhân, tình yêu và đặc biệt là cách để có đôi mắt tinh tường trong chọn lựa “Mr Right” của cuộc đời mình.\r\n\r\nPhụ nữ khí chất biết cách nhìn nhận đối phương\r\n\r\nTrên thế giới này, ai rời xa ai thì Trái đất vẫn quay, Mặt trời vẫn mọc, trong đời bạn nếu xuất hiện những người đàn ông như này thì bạn mới có thể hạnh phúc.\r\n\r\nĐàn ông càng sẵng sàng cho đi vì bạn sẽ càng không thể rời xa bạn\r\n\r\nTôi không nhớ rõ từng có bao nhiêu người chia sẻ với tôi rằng họ đã hy sinh nhiều thế nào cho gia đình mình. Từng chút từng chút, việc lớn việc nhỏ, ẩn chứa trong đó là hoài niệm, là tình yêu, và cũng là đau thương. Vốn dĩ họ cho rằng sự dốc lòng hy sinh và cả trái tim chân thành của mình sẽ đổi lấy được những yêu thương, những dịu dàng từ chồng, hoặc dù không phải vậy đi nữa, thì ít nhất họ cũng có được niềm cảm kích và trân trọng từ đối phương. Thế nhưng rốt cuộc, sự thật và mong ước lại cách nhau quá xa, thứ mà họ nhận về chẳng gì khác ngoài những vết cứa vô tình sâu hoắm nơi trái tim và sự ruồng bỏ như một món đồ đến lúc cần vứt bỏ.\r\n\r\nHọ không hiểu vì lẽ gì mà người đàn ông của họ lại biến thành kẻ lạnh lùng, vô tình và cứng đầu đến thế, để rồi kết cục lại, họ chỉ đành uất hận mà chụp lên đầu đối phương hai chữ “gã tồi”.\r\n\r\nTrong tình yêu, việc bạn chỉ biết một lòng hy sinh không những làm lệch trạng thái tương hỗ cân bằng từ hai phía, mà còn chặn đứng con đường để đối phương học cách trao đi. Như vậy, kết cục đến bước đường này hoàn toàn không khó đoán.\r\n\r\nBạn hãy tin rằng: trên đời này, người đàn ông càng sẵn sàng cho đi vì bạn, sẽ càng không thể rời xa bạn dễ dàng. Bởi vì người không muốn bên bạn sẽ không cần làm gì vì bạn cả, họ chỉ dùng sự đối đãi để đối xử với bạn thôi.\r\n\r\nCưới được người đàn ông như thế này mới thực sự có phúc\r\n\r\nThường có nhiều cô gái để lại lời nhắn cho tôi, nói không muốn sống chung với mẹ chồng, trong khi đó người chồng lại nhất mực muốn đón mẹ tới ở cùng, cho rằng mẹ mình đặc biệt dễ chung sống, chỉ cần giữa vợ và mẹ mình nảy sinh mâu thuẫn gì, đều không ngần ngại chỉ trích vợ: Mẹ anh dễ tính thế rồi sao em khó ở vậy?\r\n\r\nCũng có những cô gái chia sẻ rằng khi về quê chồng ăn Tết, cách nói chuyện không hợp, kiểu ăn uống cũng khác, nhưng chồng thì lại cho rằng họ làm chảnh, cố ý kiếm chuyện, một chút cũng không chịu hiểu cho sự lạc lõng và e ngại của vợ mình.\r\n\r\nSở dĩ đàn ông có tâm lý như vậy, thứ nhất là vì mức độ yêu vợ của họ chưa đủ. Rất nhiều chuyện không phải là họ không làm nổi, mà họ không đủ yêu nên căn bản không thể thay đổi suy nghĩ của đối phương.\r\n\r\nThứ hai là vì có những người đàn ông bản tính ích kỷ, thứ chiếm vị trí trọng yếu trong đầu họ vĩnh viễn chỉ là bản thân, trái tim họ căn bản không thừa chỗ để nghĩ cho người khác.\r\n\r\nSong, trên đời này còn có một kiểu đàn ông khác. Họ yêu thương vợ, cảm kích trước những hi sinh của vợ, dùng tấm lòng để đáp lại tấm lòng, đặt mình đứng trên góc nhìn của vợ mà suy xét vấn đề. Cưới được người đàn ông như vậy mới là mở ra cánh cửa hạnh phúc. Nhưng bạn không thể kiếm được kiểu người này chỉ nhờ vào vận khí, mà yếu tố quyết định chính là con mắt nhìn người của bạn tinh tường đến mức nào. Và để có đôi mắt tinh tường, bạn nhất định đừng vội tìm một người đàn ông và cho rằng người đó yêu bạn, mà hãy dùng thời gian để kiểm chứng mọi hành động và thái độ của họ, phụ nữ độc lập sẽ luôn làm được điều này dễ dàng hơn, vì họ vốn dĩ chẳng cần thêm yếu tố nào khác ngoài tình yêu và sự tử tế của người đàn ông', '\"C:\\xampp\\htdocs\\bookreview\\image book\\Càng độc lập, càng cao quý.jpg\"', '2024-09-26 10:25:16'),
( 'Bạn Không Thông Minh Lắm Đâu ', 'David McRaney', NULL, 'Có một sự thật rất đáng buồn là “Thật ra chúng ta đều là những sinh vật ngu ngốc” nhưng chúng ta vẫn luôn huyễn hoặc và thần thánh hóa con người là “thông minh”. Một cuốn sách tư duy phản biện rất mạnh mẽ có nguy cơ thay đổi hoàn toàn thế giới quan, nhân sinh quan của bạn. Bằng những dẫn chứng rõ ràng, lập luận chặt chẽ David sẽ khiến bạn phải suy nghĩ nhiều về bản thân bạn. Những ngộ nhận thiếu thực tế, hành động cảm tính, thiên kiến xác nhận, sự ngụy biện, dối người dối mình,… con người đã làm biết bao nhiêu việc sai trái, ngớ ngẩn nhưng vẫn luôn vỗ ngực cho rằng mình thông minh. Hãy tỉnh ngộ và ngưng ảo tưởng suy diễn những triết lý do bản thân tự tô vẽ ra hòng tự lừa dối chính mình bởi mồi tiềm thức mà không hề nhận ra nó luôn hiện diện ngay cả khi bạn không chú ý.\r\n\r\nBạn luôn nghĩ rằng mình có cảm giác tự ti về bản thân vẫn chưa tốt còn nhiều lỗi lầm chưa thể sửa chữa, tác giả đã đưa ra quan điểm hoàn toàn khiến bạn bất ngờ. Trong những nghiên cứu 50 năm gần đây cho thấy rằng, ngày qua ngày bạn luôn nghĩ rằng bản thân mình tốt hơn con người thực rất nhiều, không sao đây là điều tốt. Ít ra bạn nghĩ rằng bạn tốt hơn gã hàng xóm vớ vẩn, bạn giỏi đá bóng hơn đứa cùng xóm bạn, bạn nhân hậu tốt bụng hơn hàng tá đứa ngoài xã hội kia. Cái cảm giác tự ti mặc cảm sinh ra bởi vì bạn không được như những gì bạn mong đợi, “lòng tự trọng” theo tháp nhu cầu Maslow là cách bạn muốn được công nhận về giá trị bản thân bạn. Nhưng cũng đừng buồn vì bạn cũng vị kỷ hệt như những người khác thôi, bạn luôn đánh giá mọi thứ xung quanh từ khía cạnh chủ quan mà bạn không hề nhận ra điều đó, não bộ bạn là cuộc chiến không hồi kết giữa hai bán cầu não. Khi não trái đảm nhận chức năng ngôn ngữ, tư duy trừu tượng thì não phải xử lý hình ảnh, khả năng cảm thụ, và bạn đã từng nghĩ rằng bạn lý trí hơn ai hết, đừng buồn cười khi bạn phải há hốc mồm nhận ra bạn “ngu dốt” hơn bạn tưởng nhiều. Bạn vẫn luôn hoang tưởng rằng bạn là người công bằng, không thiên vị khi luôn phân tích mọi việc từ nhiều khía cạnh khách quan nhưng đó là cách não bộ bạn tự lừa dối bạn, thật ra bạn đã tự lập trình quan điểm riêng còn những thứ khác chỉ mang tính chất “củng cố” cho lập luận của bạn là đúng mà thôi. Tác giả vừa đem đến cái nhìn khoa học, hiện thực “xát muối” tim nhiều người gây tổn thương nặng, nên bạn hãy bình tĩnh đọc và ngẫm để khỏi bị sốc tinh thần, kết hợp với ngôn từ dí dỏm, hài hước mang đầy tính châm biếm, mỉa mai sẽ đem đến cho bạn những trải nghiệm hết sức thú vị mà những cuốn sách self-help sẽ không bao giờ dạy bạn.', '\"C:\\xampp\\htdocs\\bookreview\\image book\\Bạn không thông minh lắm đâu.jpg\"', '2024-09-26 10:30:34'),
( 'Khi Lỗi Thuộc Về Những Vì Sao', 'John Green', NULL, 'Đây là tác phẩm sâu lắng, càng đọc độc giả sẽ càng bị cuốn hút, Sự cuốn hút ấy được tạo nên bởi mạch văn vừa phải, không nhanh, không chậm và Tình yêu trong sáng, ý chí vượt qua bệnh tật để sống một cuộc sống tươi vui, không buồn phiền và khát khao được sống và được yêu, được tưởng nhớ. Câu chuyện tình yêu của Hazel và Augustus đã cho chúng ta thấy rằng hãy sống hết mình và có trách nhiệm cho ngày hôm nay. Hãy yêu cho dù tương lai thế nào đi chăng nữa miến là hôm nay mình đã sống trọn với tình yêu này. Hãy lạc quan và nhìn về phía trước, bởi cuộc sống không chỉ có bệnh tật mà còn có cả những niềm vui, niềm hạnh phúc, sự yêu thương vô bến bờ của những người bên cạnh ta.', '\"C:\\xampp\\htdocs\\bookreview\\image book\\Khi lỗi thuộc về những vì sao.jpg\"', '2024-09-26 10:30:34'),
( 'Tuổi 20 Sức Hút Từ Kỹ Năng Giao Tiếp ', 'Kim Thục Lệ ', NULL, 'Đúng như tên gọi, “Tuổi 20 sức hút từ kỹ năng giao tiếp - Nghệ thuật giao tiếp dành cho phái nữ” là những chia sẻ, lời khuyên được tập hợp và phân loại rõ ràng ở 10 chương. Bạn không cần phải đọc quyển sách từ đầu đến cuối mà hãy tìm đọc chương bạn cần, bạn sẽ tìm được câu trả lời cho hầu hết các vấn đề bạn đã, đang và sẽ gặp phải trong tương lai.\r\n\r\nQuyển sách này, theo cảm nhận của mình, sẽ đặc biệt thích hợp cho những bạn gái trẻ, vừa bước vào môi trường đại học hay vừa mới tốt nghiệp và bắt đầu sự nghiệp phía trước. Bên cạnh đó, giới quản lý nhân sự cũng có thể tham khảo để nắm bắt tâm lý và hành vi ứng xử của thế hệ “Millenials”.\r\n\r\nTác giả đã chỉ ra rất nhiều đặc điểm trong tính cách của những cô gái tuổi đôi mươi, tiêu biểu nhất chính là sự dè dặt, nhỏ nhen, đố kỵ hay bị động trong các mối quan hệ. Dù không thể phủ nhận có không ít những bạn trẻ rất cởi mở, hoà đồng với tất cả mọi người ngay còn là học sinh cấp 3 hay mới bước vào ngưỡng cửa đại học. Nhưng cũng không thể không kể đến số đông những sinh viên sau bốn năm đại học vẫn chưa có những kỹ năng cần thiết trong giao tiếp để bước vào thế giới nghề nghiệp. 7 lời khuyên mà tác giả đưa ra cũng thật đơn giản và hầu như ai cũng có thể nghĩ đến nhưg để hiểu và áp dụng vào thực tế thì chúng ta cần đọc và nghiền ngẫm kỹ lưỡng', '\"C:\\xampp\\htdocs\\bookreview\\image book\\Tuổi 20 Sức hút từ kỹ năng giao tiếp.jpg\"', '2024-09-26 10:35:26'),
( 'Ai Lấy Miếng Pho Mát Của Tôi? ', 'Spencer Johnson', NULL, 'Bạn làm gì khi thế giới xung quanh thay đổi? Có bao giờ bạn tự hỏi bản thân câu hỏi này? Câu trả lời cho vấn đề này đó là: đồng thời thay đổi bản thân để phù hợp với một thế giới mới. Nhưng đã có một khoảng thời gian mình cố chấp không chấp nhận những gì đang xảy ra xung quanh đó là những sự thay đổi lớn nhỏ khi bước vào môi trường cấp 3. Và sự cố chấp đó cũng là lý do vì sao một học sinh mới chuyển cấp cảm thấy cả thế giới thế như sụp đổ, việc đến môi trường mới thật sự rất khó chịu. Sau khi đã trải qua vô vàn cuộc đấu tranh tư tưởng, mình mới nhận ra thay đổi là tự nhiên và sự thật rằng càng nhận ra những thay đổi sớm, chúng ta sẽ càng có nhiều cơ hội để học hỏi. Dành cho bất kỳ ai đang cảm thấy việc thay đổi thật kinh khủng, cuốn sách Who moved my cheese for teens - Ai lấy miếng pho mát của tôi của tác giả đạt #1 Best Seller Spencer Johnson sẽ giúp bạn học được chân lý trên như cách mà nó đã củng cố cho niềm tin vào sự thay đổi của chính mình vậy. Đây là một cuốn sách đáng yêu, dễ đọc nhưng không kém phần sâu lắng, đặc biệt dành cho các độc giả trẻ. \r\n\r\n\r\nWho moved my cheese for teens? - Ai lấy miếng pho mát của tôi? với cốt truyện đơn giản, cách viết đáng yêu nhưng ý nghĩa đã làm rất nhiều người ngại thay đổi trở nên mạnh mẽ, thấu hiểu và biết cách ứng phó trước những chuyển biến của cuộc sống. Câu chuyện đem lại sức ảnh hưởng lớn và để lại cho độc giả một tâm thế sẵn sàng, tinh thần mạnh mẽ bởi những bài học quý giá cũng như sự gần gũi mà các nhân vật đem lại. Cuốn sách “hiếm có này\" trở thành một hiện tượng lạ, dù đã hai thập kỷ trôi qua kể từ khi xuất bản, cuốn sách vẫn đem lại những giá trị thiết thực theo một lối rất riêng và vô cùng gần gũi. ', '\"C:\\xampp\\htdocs\\bookreview\\image book\\Ai lấy miếng pho mát của tôi.jpg\"', '2024-09-26 10:35:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_rating`
--
-- Tạo: Th9 25, 2024 lúc 12:04 PM
--

CREATE TABLE IF NOT EXISTS `book_rating` (
  `UserID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  `rate` int DEFAULT NULL,
   CONSTRAINT chk_comment_rating_value CHECK (`rate` >= 1 AND `rate` <= 5),
  KEY `BookID` (`BookID`),
  KEY `UserID` (`UserID`)
) ;

--
-- RELATIONSHIPS FOR TABLE `book_rating`:
--   `BookID`
--       `books` -> `BookID`
--   `UserID`
--       `users` -> `UserID`
--

--
-- Đang đổ dữ liệu cho bảng `book_rating`
--

INSERT INTO `book_rating` (`UserID`, `BookID`, `rate`) VALUES
(1, 6, 5),
(1, 3, 4),
(1, 2, 4),
(1, 4, 3),
(1, 5, 5),
(1, 1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--
-- Tạo: Th9 25, 2024 lúc 11:29 AM
--

CREATE TABLE IF NOT EXISTS `comment` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  `Comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'thời gian bình luận ',
  PRIMARY KEY (`CommentID`),
  KEY `BookID` (`BookID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `comment`:
--   `BookID`
--       `books` -> `BookID`
--   `UserID`
--       `users` -> `UserID`
--

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` ( `UserID`, `BookID`, `Comment`, `Create_at`) VALUES
( 1, 6, 'Hay quá, quá ý nghĩa, và tuyệt vời ', '2024-09-26 10:48:06'),
( 1, 5, 'Tôi thấy quyển này khá ý nghĩa ', '2024-09-26 10:48:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_rating`
--
-- Tạo: Th9 25, 2024 lúc 11:54 AM
--

CREATE TABLE IF NOT EXISTS `comment_rating` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `rate` int DEFAULT NULL,
   CONSTRAINT chk_comment_rating_value_1  CHECK (`rate` >= 1 AND `rate` <= 5),
  KEY `CommentID` (`CommentID`),
  KEY `UserID` (`UserID`)
) ;

--
-- RELATIONSHIPS FOR TABLE `comment_rating`:
--   `CommentID`
--       `comment` -> `CommentID`
--   `UserID`
--       `users` -> `UserID`
--

--
-- Đang đổ dữ liệu cho bảng `comment_rating`
--

INSERT INTO `comment_rating` (`CommentID`, `UserID`, `rate`) VALUES
(1, 2, 5),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--
-- Tạo: Th9 26, 2024 lúc 08:57 AM
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `ReviewID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  `Content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ReviewID`),
  KEY `BookID` (`BookID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `reviews`:
--   `BookID`
--       `books` -> `BookID`
--   `UserID`
--       `users` -> `UserID`
--

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` ( `UserID`, `BookID`, `Content`, `Create_at`) VALUES
( 1, 5, 'Khám phá và phát triển phong cách giao tiếp cá nhân\r\nCuốn sách cũng khuyến khích người đọc khám phá và phát triển phong cách giao tiếp cá nhân của mình. Kim Thục Lệ nhấn mạnh rằng mỗi người có một phong cách giao tiếp riêng, và việc nhận diện và phát huy điểm mạnh của bản thân là rất quan trọng. Bằng cách hiểu rõ phong cách giao tiếp của mình, bạn có thể điều chỉnh cách tiếp cận giao tiếp để phù hợp với các tình huống khác nhau và tạo ra sự tương tác hiệu quả hơn. Việc phát triển phong cách giao tiếp cá nhân không chỉ giúp bạn nổi bật mà còn nâng cao khả năng giao tiếp trong mọi hoàn cảnh.', '2024-09-26 10:44:04'),
( 1, 1, 'Review cuốn sách Tôi Tài Giỏi Bạn Cũng Thế của tác giả Adam Khoo\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" (tựa gốc tiếng Anh: \"I Am Gifted, So Are You!\") là một tác phẩm nổi tiếng của tác giả Adam Khoo, một trong những nhà diễn giả, doanh nhân và chuyên gia đào tạo hàng đầu tại Singapore. Được viết từ những trải nghiệm cá nhân và quá trình vượt qua khó khăn trong học tập, cuốn sách đã trở thành một tài liệu hướng dẫn thiết thực cho rất nhiều học sinh, sinh viên và người trẻ trên khắp thế giới. Với mục tiêu truyền đạt những phương pháp học tập hiệu quả và phát triển kỹ năng cá nhân, tác giả đã mang đến cho độc giả không chỉ là những kiến thức về học tập mà còn là sự động viên mạnh mẽ để họ tin vào khả năng của mình và khám phá tiềm năng chưa được khai phá. Adam Khoo từng là một học sinh có thành tích yếu kém, bị giáo viên và bạn bè coi thường. Tuy nhiên, nhờ việc khám phá ra các phương pháp học tập thông minh, anh đã vươn lên trở thành một trong những học sinh giỏi nhất và thành công trong cuộc sống sau này. Câu chuyện cá nhân đầy cảm hứng của tác giả là bằng chứng sống cho thấy rằng, bất kỳ ai cũng có thể đạt được thành công nếu có phương pháp học tập và sự nỗ lực phù hợp. Cuốn sách đã nhanh chóng trở thành một cuốn cẩm nang không chỉ dừng lại ở việc học tập, mà còn cung cấp nhiều bài học về tư duy tích cực, quản lý thời gian, và phát triển bản thân, góp phần giúp người đọc tự tin hơn trong cuộc sống. Đối tượng chính của cuốn sách là các bạn trẻ, đặc biệt là học sinh, sinh viên đang gặp khó khăn trong học tập và mong muốn tìm kiếm những phương pháp mới để cải thiện kết quả. Tuy nhiên, những nguyên tắc và bài học mà Adam Khoo chia sẻ cũng có thể áp dụng rộng rãi cho người đi làm và bất kỳ ai muốn phát triển kỹ năng cá nhân. Với ngôn ngữ dễ hiểu, cách diễn đạt gần gũi và những minh họa thực tế, \"Tôi tài giỏi, bạn cũng thế!\" đã trở thành một cuốn sách bán chạy trên toàn cầu và được dịch ra nhiều ngôn ngữ khác nhau, trong đó có tiếng Việt. Sức hút của cuốn sách không chỉ nằm ở nội dung hữu ích mà còn ở tinh thần khích lệ và niềm tin mà nó mang lại, giúp độc giả thấy rằng họ hoàn toàn có thể đạt được thành công, bất kể xuất phát điểm của mình là gì. \r\n\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" của Adam Khoo được chia thành nhiều phần với nội dung chặt chẽ, giúp độc giả hiểu rõ hơn về các phương pháp học tập và phát triển bản thân mà tác giả đã áp dụng thành công. Phần đầu của cuốn sách kể lại câu chuyện cá nhân của Adam Khoo, từ khi anh còn là một học sinh có thành tích yếu kém, bị giáo viên và bạn bè đánh giá thấp, đến lúc anh tìm ra những kỹ thuật học tập hiệu quả. Từ một học sinh bị coi là không có tiềm năng, Adam Khoo đã lột xác và trở thành một trong những học sinh giỏi nhất nhờ sự thay đổi trong tư duy và phương pháp học. Phần này không chỉ là lời tự sự mà còn là sự động viên mạnh mẽ, nhắn nhủ với người đọc rằng bất kỳ ai cũng có thể thay đổi nếu biết cách khai thác tiềm năng của mình. Phần tiếp theo của cuốn sách tập trung vào việc chia sẻ những phương pháp học tập cụ thể mà Adam Khoo đã sử dụng để đạt được thành công. Một trong những phương pháp quan trọng là quản lý thời gian. Tác giả nhấn mạnh rằng việc sắp xếp thời gian hợp lý và có kế hoạch học tập khoa học sẽ giúp tăng hiệu quả học tập mà không cần tốn quá nhiều sức lực. Tiếp đến là kỹ thuật ghi nhớ, trong đó Adam Khoo trình bày cách áp dụng sơ đồ tư duy, hình ảnh hóa và các mẹo ghi nhớ thông qua việc liên tưởng để giúp học sinh nhớ bài lâu hơn. Bên cạnh đó, cuốn sách còn đề cập đến việc đặt mục tiêu rõ ràng, một kỹ năng mà tác giả cho rằng sẽ giúp duy trì động lực và định hướng cụ thể trong quá trình học tập và làm việc. Một trong những phần quan trọng khác của sách là tư duy tích cực. Tác giả không chỉ tập trung vào kỹ thuật mà còn nhấn mạnh tầm quan trọng của thái độ sống. Tư duy tích cực không chỉ giúp người học vượt qua khó khăn mà còn là nền tảng để phát triển sự tự tin và khả năng tự nhận thức về tiềm năng của bản thân. Cuối cùng, các bài học trong cuốn sách đều xoay quanh việc khuyến khích độc giả tin vào khả năng của mình và áp dụng những phương pháp đã được kiểm chứng để cải thiện kết quả học tập cũng như thành công trong cuộc sống.\r\n\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" của Adam Khoo không chỉ là một tác phẩm truyền cảm hứng, mà còn là một hướng dẫn thực tiễn giúp người đọc cải thiện kỹ năng học tập và phát triển bản thân. Một trong những điểm mạnh nổi bật của sách là tính thực tiễn và dễ áp dụng. Adam Khoo không chỉ trình bày lý thuyết mà còn cung cấp các phương pháp học tập cụ thể như kỹ thuật ghi nhớ, quản lý thời gian, và cách lập kế hoạch chi tiết, giúp người đọc dễ dàng hiểu và thực hiện. Đặc biệt, các phương pháp này không yêu cầu điều kiện phức tạp hay kiến thức nền tảng đặc biệt, phù hợp với mọi lứa tuổi và hoàn cảnh. Bất kể bạn là học sinh, sinh viên, hay người đi làm, đều có thể tìm thấy những giá trị hữu ích từ các bài học của tác giả. Cuốn sách cũng ghi điểm bởi tính truyền cảm hứng mạnh mẽ. Adam Khoo sử dụng chính câu chuyện của mình để tạo động lực cho người đọc, từ việc vượt qua những thất bại trong học tập cho đến khi trở thành một trong những sinh viên xuất sắc nhất Singapore. Điều này giúp độc giả nhận ra rằng, bất kỳ ai cũng có thể thay đổi số phận của mình nếu biết cách khai thác tiềm năng. Sự kết hợp giữa yếu tố câu chuyện cá nhân và phương pháp học tập làm cho cuốn sách vừa mang tính khích lệ, vừa cung cấp giải pháp thực tiễn, điều mà ít sách về phát triển cá nhân có thể làm được một cách thuyết phục như vậy. Tuy nhiên, cuốn sách không phải là không có nhược điểm. Một trong những điểm yếu của sách là sự khả thi của phương pháp có thể khác nhau đối với từng cá nhân. Mặc dù các kỹ thuật và phương pháp mà Adam Khoo giới thiệu rất hữu ích, nhưng không phải ai cũng có thể áp dụng thành công. Một số người có thể cảm thấy khó khăn khi thực hiện các phương pháp này, đặc biệt nếu họ không quen với việc thay đổi thói quen học tập hay tư duy. Hơn nữa, dù sách nhấn mạnh tầm quan trọng của tư duy tích cực, nhưng thực tế cho thấy việc duy trì một thái độ tích cực liên tục trong môi trường áp lực không phải lúc nào cũng dễ dàng, đặc biệt đối với những người đang đối mặt với nhiều khó khăn cá nhân. Cuối cùng, một số ý kiến cho rằng cuốn sách tập trung quá nhiều vào học tập mà chưa đề cập sâu đến những yếu tố tâm lý và môi trường có thể ảnh hưởng đến quá trình phát triển bản thân của mỗi người. Mặc dù cuốn sách là một công cụ hữu hiệu trong việc cải thiện kết quả học tập, nhưng đôi khi nó không giải quyết được những thách thức phức tạp hơn mà người đọc có thể gặp phải trong cuộc sống và công việc. Tuy vậy, nhìn chung, \"Tôi tài giỏi, bạn cũng thế!\" vẫn là một cuốn sách đáng đọc, đặc biệt đối với những ai đang tìm kiếm cách thức cải thiện học tập và phát triển khả năng cá nhân.\r\n\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" mang đến nhiều bài học quý giá, giúp người đọc không chỉ cải thiện phương pháp học tập mà còn phát triển tư duy và kỹ năng sống. Một trong những bài học quan trọng nhất là niềm tin vào bản thân. Adam Khoo đã nhấn mạnh rằng thành công không phụ thuộc vào xuất phát điểm hay khả năng bẩm sinh, mà nằm ở cách chúng ta suy nghĩ và hành động. Sự tự tin vào tiềm năng của chính mình là yếu tố cốt lõi giúp vượt qua những giới hạn và thách thức trong học tập cũng như trong cuộc sống. Cuốn sách khơi gợi ý thức rằng mỗi người đều có thể tài giỏi nếu biết cách khám phá và tận dụng những khả năng vốn có. Bên cạnh đó, lập kế hoạch và đặt mục tiêu rõ ràng là một bài học không thể bỏ qua. Adam Khoo chỉ ra rằng việc thiết lập các mục tiêu cụ thể và có kế hoạch hành động chi tiết sẽ giúp người học luôn có định hướng và không bị lạc lối. Đặc biệt, anh nhấn mạnh tầm quan trọng của việc chia nhỏ các mục tiêu lớn thành những bước nhỏ hơn, dễ thực hiện, từ đó giúp duy trì động lực và theo đuổi mục tiêu đến cùng. Đây là kỹ năng không chỉ hữu ích trong học tập mà còn có giá trị trong bất kỳ lĩnh vực nào của cuộc sống. Một bài học quan trọng khác mà sách mang lại là sự kiên trì và nỗ lực không ngừng. Adam Khoo đã minh họa rõ ràng rằng thành công không đến sau một đêm mà là kết quả của sự rèn luyện và học hỏi liên tục. Dù gặp phải thất bại, chúng ta không nên từ bỏ, mà cần xem đó là cơ hội để học hỏi và cải thiện bản thân. Cuốn sách nhấn mạnh tinh thần không ngừng học hỏi, mở ra một tư duy phát triển, nơi mà người đọc được khuyến khích luôn sẵn sàng tiếp thu những điều mới mẻ và không ngừng cải thiện chính mình. Cuối cùng, tư duy tích cực là bài học cốt lõi xuyên suốt cuốn sách. Adam Khoo khẳng định rằng cách chúng ta nhìn nhận vấn đề sẽ quyết định kết quả của hành động. Nếu giữ thái độ tích cực, chúng ta sẽ tìm ra giải pháp ngay cả trong những tình huống khó khăn nhất. Bằng việc áp dụng các bài học từ cuốn sách vào cuộc sống, người đọc không chỉ nâng cao kỹ năng học tập mà còn có thể thay đổi thái độ sống, trở nên mạnh mẽ, tự tin và thành công hơn.\r\n\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" đã có tác động sâu sắc đến cộng đồng, đặc biệt là trong giới trẻ, học sinh, sinh viên và những người đang tìm cách phát triển bản thân. Với nội dung dễ hiểu và những phương pháp học tập thực tiễn, cuốn sách đã trở thành một công cụ quan trọng giúp hàng ngàn người vượt qua khó khăn trong học tập. Rất nhiều học sinh, sau khi đọc sách, đã thay đổi tư duy và đạt được những kết quả tốt hơn, từ đó tăng cường sự tự tin và khả năng tự quản lý thời gian. Tác phẩm này không chỉ mang đến những kỹ năng cụ thể mà còn khơi dậy trong người đọc niềm tin rằng họ hoàn toàn có thể làm chủ cuộc đời mình, dù hoàn cảnh ban đầu có bất lợi. Ngoài ra, cuốn sách còn có tác động tích cực trong lĩnh vực phát triển cá nhân. Không chỉ dừng lại ở việc cải thiện thành tích học tập, nhiều độc giả sau khi áp dụng các phương pháp của Adam Khoo đã cải thiện kỹ năng sống, phát triển tư duy sáng tạo và tăng cường kỹ năng giải quyết vấn đề. Những bài học về tư duy tích cực, lập kế hoạch và kiên trì theo đuổi mục tiêu đã giúp độc giả tự tin hơn khi đối mặt với những thử thách trong cuộc sống. Ảnh hưởng của cuốn sách không chỉ dừng lại ở cá nhân người đọc mà còn lan tỏa đến cộng đồng học tập, khi nhiều người chia sẻ và áp dụng những phương pháp này, tạo nên một phong trào học hỏi và phát triển bản thân rộng khắp. Đặc biệt, cuốn sách đã góp phần thúc đẩy sự thay đổi trong tư duy giáo dục. Thay vì chỉ tập trung vào kiến thức, cuốn sách khuyến khích học sinh phát triển kỹ năng tư duy và tự học, giúp họ trở thành những cá nhân tự lập và sáng tạo. Điều này đã giúp tạo ra một làn sóng mới trong cộng đồng giáo dục, nơi mà việc rèn luyện tư duy và kỹ năng cá nhân trở nên quan trọng không kém gì kiến thức học thuật. Tóm lại, \"Tôi tài giỏi, bạn cũng thế!\" đã và đang có sức ảnh hưởng to lớn đối với cộng đồng, không chỉ giúp cải thiện kết quả học tập mà còn thúc đẩy sự phát triển toàn diện của nhiều thế hệ độc giả. \r\n\r\nDưới đây là một đoạn kết luận cho bài review về cuốn sách Tôi Tài Giỏi, Bạn Cũng Thế:\r\n\r\nCuốn sách Tôi Tài Giỏi, Bạn Cũng Thế của Adam Khoo không chỉ đơn thuần là một cuốn sách hướng dẫn học tập mà còn là một cẩm nang về tư duy, sự kiên trì và phát triển bản thân. Qua những phương pháp cụ thể, dễ hiểu và đã được kiểm chứng, Adam đã truyền cảm hứng cho hàng triệu người trẻ vươn lên, khai phá tiềm năng và đạt được những thành tựu vượt bậc trong học tập cũng như cuộc sống. Đây là một tài liệu quý giá không chỉ dành cho học sinh, sinh viên mà còn phù hợp với bất cứ ai mong muốn nâng cao hiệu quả học tập và phát triển bản thân. Nếu bạn đang tìm kiếm động lực để thay đổi bản thân và đạt được thành công, thì Tôi Tài Giỏi, Bạn Cũng Thế chắc chắn là một cuốn sách không nên bỏ lỡ.\r\n\r\n', '2024-09-26 10:45:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topicbook`
--
-- Tạo: Th9 25, 2024 lúc 11:18 AM
--

CREATE TABLE IF NOT EXISTS `topicbook` (
  `TopicID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  KEY `BookID` (`BookID`),
  KEY `TopicID` (`TopicID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `topicbook`:
--   `BookID`
--       `books` -> `BookID`
--   `TopicID`
--       `topics` -> `TopicID`
--

--
-- Đang đổ dữ liệu cho bảng `topicbook`
--

INSERT INTO `topicbook` (`TopicID`, `BookID`) VALUES
(1, 2),
(2, 2),
(5, 4),
(3, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topics`
--
-- Tạo: Th9 25, 2024 lúc 11:04 AM
--

CREATE TABLE IF NOT EXISTS `topics` (
  `TopicID` int(11) NOT NULL AUTO_INCREMENT,
  `Topicname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`TopicID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `topics`:
--

--
-- Đang đổ dữ liệu cho bảng `topics`
--

INSERT INTO `topics` ( `Topicname`) VALUES
( 'Self-help '),
( 'Kinh tế'),
( 'Tiểu Thuyết'),
( 'Lịch sử'),
( 'Khoa học '),
( 'Kinh Dị ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--
-- Tạo: Th9 25, 2024 lúc 11:04 AM
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` text NOT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` ( `Email`, `Username`, `Password`, `Avatar`) VALUES
( 'Huyenngoc3654238@gmail.com', 'Huyen', '1234567', NULL),
( 'le3654238@gmail.com', 'Mây', '1234567', NULL);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book_rating`
--



--
-- Siêu dữ liệu
--
USE `phpmyadmin`;

--
-- Siêu dữ liệu cho bảng admin
--

--
-- Siêu dữ liệu cho bảng books
--

--
-- Siêu dữ liệu cho bảng book_rating
--

--
-- Siêu dữ liệu cho bảng comment
--

--
-- Siêu dữ liệu cho bảng comment_rating
--

--
-- Siêu dữ liệu cho bảng reviews
--

--
-- Siêu dữ liệu cho bảng topicbook
--

--
-- Siêu dữ liệu cho bảng topics
--

--
-- Siêu dữ liệu cho bảng users
--

--
-- Siêu dữ liệu cho cơ sở dữ liệu bookreview
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
