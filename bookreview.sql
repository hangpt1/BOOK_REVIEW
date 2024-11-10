CREATE DATABASE IF NOT EXISTS `bookreview` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bookreview`;

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `Bookname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Published_year` int(4) DEFAULT NULL,
  `De` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Topic` int(11) NOT NULL, 
  `Img_product` varchar(255) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `book_rating` (
  `UserID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  CONSTRAINT chk_book_rating_value CHECK (`rate` >= 1 AND `rate` <= 5)
) ;


INSERT INTO `book_rating` (`UserID`, `BookID`, `rate`) VALUES
(1, 6, 5),
(1, 3, 4),
(1, 2, 4),
(1, 4, 3),
(1, 5, 5),
(1, 1, 5);

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  `Comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'thời gian bình luận '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `comment` (`CommentID`, `UserID`, `BookID`, `Comment`, `Create_at`) VALUES
(1, 1, 6, 'Hay quá, quá ý nghĩa, và tuyệt vời ', '2024-09-26 10:48:06'),
(2, 1, 5, 'Tôi thấy quyển này khá ý nghĩa ', '2024-09-26 10:48:29');


CREATE TABLE `comment_rating` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  CONSTRAINT chk_comment_rating_value CHECK (`rate` >= 1 AND `rate` <= 5)
) ;

INSERT INTO `comment_rating` (`CommentID`, `UserID`, `rate`) VALUES
(1, 2, 5),
(2, 2, 4);



CREATE TABLE `reviews` (
  `ReviewID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL,
  `Content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Chưa duyệt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `reviews` (`ReviewID`, `UserID`, `BookID`, `Content`, `Create_at`, `Status`) VALUES
(1, 1, 5, 'Khám phá và phát triển phong cách giao tiếp cá nhân\r\nCuốn sách cũng khuyến khích người đọc khám phá và phát triển phong cách giao tiếp cá nhân của mình. Kim Thục Lệ nhấn mạnh rằng mỗi người có một phong cách giao tiếp riêng, và việc nhận diện và phát huy điểm mạnh của bản thân là rất quan trọng. Bằng cách hiểu rõ phong cách giao tiếp của mình, bạn có thể điều chỉnh cách tiếp cận giao tiếp để phù hợp với các tình huống khác nhau và tạo ra sự tương tác hiệu quả hơn. Việc phát triển phong cách giao tiếp cá nhân không chỉ giúp bạn nổi bật mà còn nâng cao khả năng giao tiếp trong mọi hoàn cảnh.', '2024-09-26 10:44:04', 'Chưa duyệt'),
(2, 1, 1, 'Review cuốn sách Tôi Tài Giỏi Bạn Cũng Thế của tác giả Adam Khoo\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" (tựa gốc tiếng Anh: \"I Am Gifted, So Are You!\") là một tác phẩm nổi tiếng của tác giả Adam Khoo, một trong những nhà diễn giả, doanh nhân và chuyên gia đào tạo hàng đầu tại Singapore. Được viết từ những trải nghiệm cá nhân và quá trình vượt qua khó khăn trong học tập, cuốn sách đã trở thành một tài liệu hướng dẫn thiết thực cho rất nhiều học sinh, sinh viên và người trẻ trên khắp thế giới. Với mục tiêu truyền đạt những phương pháp học tập hiệu quả và phát triển kỹ năng cá nhân, tác giả đã mang đến cho độc giả không chỉ là những kiến thức về học tập mà còn là sự động viên mạnh mẽ để họ tin vào khả năng của mình và khám phá tiềm năng chưa được khai phá. Adam Khoo từng là một học sinh có thành tích yếu kém, bị giáo viên và bạn bè coi thường. Tuy nhiên, nhờ việc khám phá ra các phương pháp học tập thông minh, anh đã vươn lên trở thành một trong những học sinh giỏi nhất và thành công trong cuộc sống sau này. Câu chuyện cá nhân đầy cảm hứng của tác giả là bằng chứng sống cho thấy rằng, bất kỳ ai cũng có thể đạt được thành công nếu có phương pháp học tập và sự nỗ lực phù hợp. Cuốn sách đã nhanh chóng trở thành một cuốn cẩm nang không chỉ dừng lại ở việc học tập, mà còn cung cấp nhiều bài học về tư duy tích cực, quản lý thời gian, và phát triển bản thân, góp phần giúp người đọc tự tin hơn trong cuộc sống. Đối tượng chính của cuốn sách là các bạn trẻ, đặc biệt là học sinh, sinh viên đang gặp khó khăn trong học tập và mong muốn tìm kiếm những phương pháp mới để cải thiện kết quả. Tuy nhiên, những nguyên tắc và bài học mà Adam Khoo chia sẻ cũng có thể áp dụng rộng rãi cho người đi làm và bất kỳ ai muốn phát triển kỹ năng cá nhân. Với ngôn ngữ dễ hiểu, cách diễn đạt gần gũi và những minh họa thực tế, \"Tôi tài giỏi, bạn cũng thế!\" đã trở thành một cuốn sách bán chạy trên toàn cầu và được dịch ra nhiều ngôn ngữ khác nhau, trong đó có tiếng Việt. Sức hút của cuốn sách không chỉ nằm ở nội dung hữu ích mà còn ở tinh thần khích lệ và niềm tin mà nó mang lại, giúp độc giả thấy rằng họ hoàn toàn có thể đạt được thành công, bất kể xuất phát điểm của mình là gì. \r\n\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" của Adam Khoo được chia thành nhiều phần với nội dung chặt chẽ, giúp độc giả hiểu rõ hơn về các phương pháp học tập và phát triển bản thân mà tác giả đã áp dụng thành công. Phần đầu của cuốn sách kể lại câu chuyện cá nhân của Adam Khoo, từ khi anh còn là một học sinh có thành tích yếu kém, bị giáo viên và bạn bè đánh giá thấp, đến lúc anh tìm ra những kỹ thuật học tập hiệu quả. Từ một học sinh bị coi là không có tiềm năng, Adam Khoo đã lột xác và trở thành một trong những học sinh giỏi nhất nhờ sự thay đổi trong tư duy và phương pháp học. Phần này không chỉ là lời tự sự mà còn là sự động viên mạnh mẽ, nhắn nhủ với người đọc rằng bất kỳ ai cũng có thể thay đổi nếu biết cách khai thác tiềm năng của mình. Phần tiếp theo của cuốn sách tập trung vào việc chia sẻ những phương pháp học tập cụ thể mà Adam Khoo đã sử dụng để đạt được thành công. Một trong những phương pháp quan trọng là quản lý thời gian. Tác giả nhấn mạnh rằng việc sắp xếp thời gian hợp lý và có kế hoạch học tập khoa học sẽ giúp tăng hiệu quả học tập mà không cần tốn quá nhiều sức lực. Tiếp đến là kỹ thuật ghi nhớ, trong đó Adam Khoo trình bày cách áp dụng sơ đồ tư duy, hình ảnh hóa và các mẹo ghi nhớ thông qua việc liên tưởng để giúp học sinh nhớ bài lâu hơn. Bên cạnh đó, cuốn sách còn đề cập đến việc đặt mục tiêu rõ ràng, một kỹ năng mà tác giả cho rằng sẽ giúp duy trì động lực và định hướng cụ thể trong quá trình học tập và làm việc. Một trong những phần quan trọng khác của sách là tư duy tích cực. Tác giả không chỉ tập trung vào kỹ thuật mà còn nhấn mạnh tầm quan trọng của thái độ sống. Tư duy tích cực không chỉ giúp người học vượt qua khó khăn mà còn là nền tảng để phát triển sự tự tin và khả năng tự nhận thức về tiềm năng của bản thân. Cuối cùng, các bài học trong cuốn sách đều xoay quanh việc khuyến khích độc giả tin vào khả năng của mình và áp dụng những phương pháp đã được kiểm chứng để cải thiện kết quả học tập cũng như thành công trong cuộc sống.\r\n\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" của Adam Khoo không chỉ là một tác phẩm truyền cảm hứng, mà còn là một hướng dẫn thực tiễn giúp người đọc cải thiện kỹ năng học tập và phát triển bản thân. Một trong những điểm mạnh nổi bật của sách là tính thực tiễn và dễ áp dụng. Adam Khoo không chỉ trình bày lý thuyết mà còn cung cấp các phương pháp học tập cụ thể như kỹ thuật ghi nhớ, quản lý thời gian, và cách lập kế hoạch chi tiết, giúp người đọc dễ dàng hiểu và thực hiện. Đặc biệt, các phương pháp này không yêu cầu điều kiện phức tạp hay kiến thức nền tảng đặc biệt, phù hợp với mọi lứa tuổi và hoàn cảnh. Bất kể bạn là học sinh, sinh viên, hay người đi làm, đều có thể tìm thấy những giá trị hữu ích từ các bài học của tác giả. Cuốn sách cũng ghi điểm bởi tính truyền cảm hứng mạnh mẽ. Adam Khoo sử dụng chính câu chuyện của mình để tạo động lực cho người đọc, từ việc vượt qua những thất bại trong học tập cho đến khi trở thành một trong những sinh viên xuất sắc nhất Singapore. Điều này giúp độc giả nhận ra rằng, bất kỳ ai cũng có thể thay đổi số phận của mình nếu biết cách khai thác tiềm năng. Sự kết hợp giữa yếu tố câu chuyện cá nhân và phương pháp học tập làm cho cuốn sách vừa mang tính khích lệ, vừa cung cấp giải pháp thực tiễn, điều mà ít sách về phát triển cá nhân có thể làm được một cách thuyết phục như vậy. Tuy nhiên, cuốn sách không phải là không có nhược điểm. Một trong những điểm yếu của sách là sự khả thi của phương pháp có thể khác nhau đối với từng cá nhân. Mặc dù các kỹ thuật và phương pháp mà Adam Khoo giới thiệu rất hữu ích, nhưng không phải ai cũng có thể áp dụng thành công. Một số người có thể cảm thấy khó khăn khi thực hiện các phương pháp này, đặc biệt nếu họ không quen với việc thay đổi thói quen học tập hay tư duy. Hơn nữa, dù sách nhấn mạnh tầm quan trọng của tư duy tích cực, nhưng thực tế cho thấy việc duy trì một thái độ tích cực liên tục trong môi trường áp lực không phải lúc nào cũng dễ dàng, đặc biệt đối với những người đang đối mặt với nhiều khó khăn cá nhân. Cuối cùng, một số ý kiến cho rằng cuốn sách tập trung quá nhiều vào học tập mà chưa đề cập sâu đến những yếu tố tâm lý và môi trường có thể ảnh hưởng đến quá trình phát triển bản thân của mỗi người. Mặc dù cuốn sách là một công cụ hữu hiệu trong việc cải thiện kết quả học tập, nhưng đôi khi nó không giải quyết được những thách thức phức tạp hơn mà người đọc có thể gặp phải trong cuộc sống và công việc. Tuy vậy, nhìn chung, \"Tôi tài giỏi, bạn cũng thế!\" vẫn là một cuốn sách đáng đọc, đặc biệt đối với những ai đang tìm kiếm cách thức cải thiện học tập và phát triển khả năng cá nhân.\r\n\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" mang đến nhiều bài học quý giá, giúp người đọc không chỉ cải thiện phương pháp học tập mà còn phát triển tư duy và kỹ năng sống. Một trong những bài học quan trọng nhất là niềm tin vào bản thân. Adam Khoo đã nhấn mạnh rằng thành công không phụ thuộc vào xuất phát điểm hay khả năng bẩm sinh, mà nằm ở cách chúng ta suy nghĩ và hành động. Sự tự tin vào tiềm năng của chính mình là yếu tố cốt lõi giúp vượt qua những giới hạn và thách thức trong học tập cũng như trong cuộc sống. Cuốn sách khơi gợi ý thức rằng mỗi người đều có thể tài giỏi nếu biết cách khám phá và tận dụng những khả năng vốn có. Bên cạnh đó, lập kế hoạch và đặt mục tiêu rõ ràng là một bài học không thể bỏ qua. Adam Khoo chỉ ra rằng việc thiết lập các mục tiêu cụ thể và có kế hoạch hành động chi tiết sẽ giúp người học luôn có định hướng và không bị lạc lối. Đặc biệt, anh nhấn mạnh tầm quan trọng của việc chia nhỏ các mục tiêu lớn thành những bước nhỏ hơn, dễ thực hiện, từ đó giúp duy trì động lực và theo đuổi mục tiêu đến cùng. Đây là kỹ năng không chỉ hữu ích trong học tập mà còn có giá trị trong bất kỳ lĩnh vực nào của cuộc sống. Một bài học quan trọng khác mà sách mang lại là sự kiên trì và nỗ lực không ngừng. Adam Khoo đã minh họa rõ ràng rằng thành công không đến sau một đêm mà là kết quả của sự rèn luyện và học hỏi liên tục. Dù gặp phải thất bại, chúng ta không nên từ bỏ, mà cần xem đó là cơ hội để học hỏi và cải thiện bản thân. Cuốn sách nhấn mạnh tinh thần không ngừng học hỏi, mở ra một tư duy phát triển, nơi mà người đọc được khuyến khích luôn sẵn sàng tiếp thu những điều mới mẻ và không ngừng cải thiện chính mình. Cuối cùng, tư duy tích cực là bài học cốt lõi xuyên suốt cuốn sách. Adam Khoo khẳng định rằng cách chúng ta nhìn nhận vấn đề sẽ quyết định kết quả của hành động. Nếu giữ thái độ tích cực, chúng ta sẽ tìm ra giải pháp ngay cả trong những tình huống khó khăn nhất. Bằng việc áp dụng các bài học từ cuốn sách vào cuộc sống, người đọc không chỉ nâng cao kỹ năng học tập mà còn có thể thay đổi thái độ sống, trở nên mạnh mẽ, tự tin và thành công hơn.\r\n\r\nCuốn sách \"Tôi tài giỏi, bạn cũng thế!\" đã có tác động sâu sắc đến cộng đồng, đặc biệt là trong giới trẻ, học sinh, sinh viên và những người đang tìm cách phát triển bản thân. Với nội dung dễ hiểu và những phương pháp học tập thực tiễn, cuốn sách đã trở thành một công cụ quan trọng giúp hàng ngàn người vượt qua khó khăn trong học tập. Rất nhiều học sinh, sau khi đọc sách, đã thay đổi tư duy và đạt được những kết quả tốt hơn, từ đó tăng cường sự tự tin và khả năng tự quản lý thời gian. Tác phẩm này không chỉ mang đến những kỹ năng cụ thể mà còn khơi dậy trong người đọc niềm tin rằng họ hoàn toàn có thể làm chủ cuộc đời mình, dù hoàn cảnh ban đầu có bất lợi. Ngoài ra, cuốn sách còn có tác động tích cực trong lĩnh vực phát triển cá nhân. Không chỉ dừng lại ở việc cải thiện thành tích học tập, nhiều độc giả sau khi áp dụng các phương pháp của Adam Khoo đã cải thiện kỹ năng sống, phát triển tư duy sáng tạo và tăng cường kỹ năng giải quyết vấn đề. Những bài học về tư duy tích cực, lập kế hoạch và kiên trì theo đuổi mục tiêu đã giúp độc giả tự tin hơn khi đối mặt với những thử thách trong cuộc sống. Ảnh hưởng của cuốn sách không chỉ dừng lại ở cá nhân người đọc mà còn lan tỏa đến cộng đồng học tập, khi nhiều người chia sẻ và áp dụng những phương pháp này, tạo nên một phong trào học hỏi và phát triển bản thân rộng khắp. Đặc biệt, cuốn sách đã góp phần thúc đẩy sự thay đổi trong tư duy giáo dục. Thay vì chỉ tập trung vào kiến thức, cuốn sách khuyến khích học sinh phát triển kỹ năng tư duy và tự học, giúp họ trở thành những cá nhân tự lập và sáng tạo. Điều này đã giúp tạo ra một làn sóng mới trong cộng đồng giáo dục, nơi mà việc rèn luyện tư duy và kỹ năng cá nhân trở nên quan trọng không kém gì kiến thức học thuật. Tóm lại, \"Tôi tài giỏi, bạn cũng thế!\" đã và đang có sức ảnh hưởng to lớn đối với cộng đồng, không chỉ giúp cải thiện kết quả học tập mà còn thúc đẩy sự phát triển toàn diện của nhiều thế hệ độc giả. \r\n\r\nDưới đây là một đoạn kết luận cho bài review về cuốn sách Tôi Tài Giỏi, Bạn Cũng Thế:\r\n\r\nCuốn sách Tôi Tài Giỏi, Bạn Cũng Thế của Adam Khoo không chỉ đơn thuần là một cuốn sách hướng dẫn học tập mà còn là một cẩm nang về tư duy, sự kiên trì và phát triển bản thân. Qua những phương pháp cụ thể, dễ hiểu và đã được kiểm chứng, Adam đã truyền cảm hứng cho hàng triệu người trẻ vươn lên, khai phá tiềm năng và đạt được những thành tựu vượt bậc trong học tập cũng như cuộc sống. Đây là một tài liệu quý giá không chỉ dành cho học sinh, sinh viên mà còn phù hợp với bất cứ ai mong muốn nâng cao hiệu quả học tập và phát triển bản thân. Nếu bạn đang tìm kiếm động lực để thay đổi bản thân và đạt được thành công, thì Tôi Tài Giỏi, Bạn Cũng Thế chắc chắn là một cuốn sách không nên bỏ lỡ.\r\n\r\n', '2024-09-26 10:45:23', 'Chưa duyệt');


CREATE TABLE `topicbook` (
  `TopicID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `topicbook` (`TopicID`, `BookID`) VALUES
(1, 2),
(2, 2),
(5, 4),
(3, 6),
(1, 1),
(1, 3),
(1, 5);


CREATE TABLE `topics` (
  `TopicID` int(11) NOT NULL,
  `Topicname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `topics` (`TopicID`, `Topicname`) VALUES
(1, 'Self-help '),
(2, 'Kinh tế'),
(3, 'Tiểu Thuyết'),
(4, 'Lịch sử'),
(5, 'Khoa học '),
(6, 'Kinh Dị ');


CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pass` text NOT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  `Role` varchar(20) DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `users` (`UserID`, `Email`, `Username`, `Pass`, `Avatar`, `Role`) VALUES
(1, 'huyenngoc3654238@gmail.com', 'Huyen', '1234567', NULL, 'User'),
(2, 'le3654238@gmail.com', 'May ', '1234567', NULL, 'User'),
(3, 'admin@gmail.com', 'admin ', '1234567', NULL, 'admin');


ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`);

ALTER TABLE `book_rating`
  ADD KEY `BookID` (`BookID`),
  ADD KEY `UserID` (`UserID`);


ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `BookID` (`BookID`),
  ADD KEY `UserID` (`UserID`);

ALTER TABLE `comment_rating`
  ADD KEY `CommentID` (`CommentID`),
  ADD KEY `UserID` (`UserID`);


ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `BookID` (`BookID`),
  ADD KEY `UserID` (`UserID`);

ALTER TABLE `topicbook`
  ADD KEY `BookID` (`BookID`),
  ADD KEY `TopicID` (`TopicID`);


ALTER TABLE `topics`
  ADD PRIMARY KEY (`TopicID`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `reviews`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `topics`
  MODIFY `TopicID` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `book_rating`
  ADD CONSTRAINT `book_rating_ibfk_1` FOREIGN KEY (`BookID`) REFERENCES `books` (`BookID`),
  ADD CONSTRAINT `book_rating_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);


ALTER TABLE `comment_rating`
  ADD CONSTRAINT `comment_rating_ibfk_1` FOREIGN KEY (`CommentID`) REFERENCES `comment` (`CommentID`),
  ADD CONSTRAINT `comment_rating_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

ALTER TABLE `topicbook`
  ADD CONSTRAINT `topicbook_ibfk_1` FOREIGN KEY (`BookID`) REFERENCES `books` (`BookID`),
  ADD CONSTRAINT `topicbook_ibfk_2` FOREIGN KEY (`TopicID`) REFERENCES `topics` (`TopicID`);
COMMIT;
ALTER TABLE `books` CHANGE `Image` `Image` LONGTEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;

