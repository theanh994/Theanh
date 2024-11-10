-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2024 lúc 03:21 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_password` varchar(100) NOT NULL,
  `account_email` varchar(255) NOT NULL,
  `account_phone` varchar(20) NOT NULL,
  `account_type` int(11) NOT NULL,
  `account_status` int(11) NOT NULL,
  `title_agency` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_password`, `account_email`, `account_phone`, `account_type`, `account_status`, `title_agency`) VALUES
(30, 'admin', '7b0ecbdb0b0d8c97c1d1682714b8db0e', 'admin@gmail.com', '', 2, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `agency`
--

CREATE TABLE `agency` (
  `agent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tax_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `agency`
--

INSERT INTO `agency` (`agent_id`, `name`, `address`, `phone`, `email`, `tax_id`) VALUES
(1, 'Chi nhánh Hà Đông ', 'Yên Nghĩa, Hà Đông, Hà Nội', '19003523', 'hadong@sach.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_author` varchar(100) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_summary` text NOT NULL,
  `article_content` text NOT NULL,
  `article_image` varchar(100) NOT NULL,
  `article_date` date NOT NULL,
  `article_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`article_id`, `article_author`, `article_title`, `article_summary`, `article_content`, `article_image`, `article_date`, `article_status`) VALUES
(16, '', 'Ref là gì? Ref là viết tắt của từ gì?', '', '<p>Tại c&aacute;c diễn đ&agrave;n, mạng x&atilde; hội chia sẻ th&ocirc;ng tin kiếm tiền online từ Ref được sử dụng kh&aacute; phổ biến. Vậy&nbsp;<strong><a href=\"https://anybooks.vn/ref-la-gi-ref-la-viet-tat-cua-tu-gi-a1968.html\">Ref l&agrave; g&igrave;? Ref l&agrave; viết tắt của từ g&igrave;</a></strong>? B&agrave;i viết dưới đ&acirc;y sẽ giải đ&aacute;p những c&acirc;u hỏi n&agrave;y cho bạn đọc.</p>\r\n\r\n<h2>1. Ref l&agrave; g&igrave;? Ref l&agrave; viết tắt của từ g&igrave;?</h2>\r\n\r\n<p>Mặc d&ugrave; c&oacute; kh&aacute; nhiều &yacute; nghĩa kh&aacute;c nhau, nhưng từ Ref được d&ugrave;ng với nghĩa phổ biến l&agrave; giới thiệu. Trong trường hợp n&agrave;y Ref l&agrave; từ viết tắt của Referral. V&iacute; dụ sau đ&acirc;y sẽ gi&uacute;p bạn hiểu r&otilde; hơn về nghĩa của Ref: Khi bạn sử dụng sản phẩm hay dịch vụ của c&ocirc;ng ty A v&agrave; c&ocirc;ng ty n&agrave;y cũng c&oacute; chương tr&igrave;nh d&agrave;nh cho mỗi lần kh&aacute;ch h&agrave;ng giới thiệu kh&aacute;ch h&agrave;ng mới. Bạn thấy sản phẩm tốt n&ecirc;n muốn giới thiệu cho bạn b&egrave; th&igrave; l&uacute;c n&agrave;y người bạn B được coi l&agrave; Ref của bạn. Tương tự như vậy, người bạn B tham gia sử dụng sản phẩm v&agrave; đi giới thiệu cho một người C th&igrave; người C kia sẽ l&agrave; Ref của bạn B.&nbsp;</p>\r\n\r\n<p><img alt=\"Ref là gì? Ref là viết tắt của từ gì?\" src=\"https://anybooks.vn/uploads/images/ref-la-gi.jpeg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, trong c&aacute;c lĩnh vực kh&aacute;c như ng&acirc;n h&agrave;ng, xuất nhập khẩu,&hellip;Ref c&ograve;n mang một &yacute; nghĩa kh&aacute;c l&agrave; số tham chiếu d&ugrave;ng để x&aacute;c định hay định danh một sản phẩm trong hệ thống hoặc tham chiếu đến một giao dịch bất kỳ n&agrave;o đ&oacute;.</p>\r\n\r\n<h2>2. Referral code l&agrave; g&igrave;?&nbsp;</h2>\r\n\r\n<p>Th&ocirc;ng qua Referral code, bạn sẽ để lại link Ref v&agrave; k&ecirc;u gọi người kh&aacute;c trở th&agrave;nh Ref của m&igrave;nh bằng c&aacute;ch nhấp v&agrave;o đường link n&agrave;y. H&agrave;nh động n&agrave;y gi&uacute;p cho website tăng lượt truy cập, hỗ trợ cho mục đ&iacute;ch tối ưu h&oacute;a c&ocirc;ng cụ t&igrave;m kiếm. Referral links l&agrave; một đường dẫn URL m&agrave; c&aacute;c c&ocirc;ng ty doanh nghiệp d&ugrave;ng để quảng b&aacute; sản phẩm v&agrave; dẫn kh&aacute;ch h&agrave;ng đến website của họ. Mỗi một Referral links sẽ chứa một Referral ID. Nhằm theo d&otilde;i được lượng truy cập hay số lượng đăng k&yacute; từ đường link đ&oacute;. Khi kh&aacute;ch h&agrave;ng điền th&ocirc;ng tin v&agrave;o biểu mẫu hay mua sản phẩm, dịch vụ bất kỳ th&ocirc;ng qua Referral link. Ngay sau khi đăng k&yacute; th&ocirc;ng c&ocirc;ng hoặc ho&agrave;n tất đặt h&agrave;ng, chủ của Ref link đ&oacute; sẽ nhận được một khoản hoa hồng. Hoa hồng n&agrave;y sẽ được trả theo ch&iacute;nh s&aacute;ch m&agrave; c&ocirc;ng ty doanh nghiệp đ&atilde; quy định từ trước. Mỗi doanh nghiệp hay th&agrave;nh vi&ecirc;n đều c&oacute; một số Ref ri&ecirc;ng biệt kh&aacute;c nhau. Điều n&agrave;y gi&uacute;p cho hệ thống c&oacute; thể thưởng hoa hồng một c&aacute;ch ch&iacute;nh x&aacute;c cho từng người giới thiệu. Đồng thời, cũng kiểm so&aacute;t được lượng kh&aacute;ch h&agrave;ng từ c&aacute;c nguồn giới thiệu.</p>\r\n\r\n<p><img alt=\"Ý nghĩa của Ref trong một số lĩnh vực?\" src=\"https://anybooks.vn/uploads/images/ref-trong-linh-vuc-marketing-online.jpeg\" /></p>\r\n\r\n<h2>3. &Yacute; nghĩa của Ref trong một số lĩnh vực</h2>\r\n\r\n<p>Ref tr&ecirc;n sản phẩm sẽ kh&ocirc;ng c&ograve;n mang &yacute; nghĩa l&agrave; giới thiệu nữa m&agrave; c&oacute; nghĩa l&agrave; tham chiếu hay c&oacute; li&ecirc;n quan tới. V&iacute; dụ bạn nh&igrave;n thấy một chai nước hoa m&agrave; tr&ecirc;n đ&oacute; c&oacute; in d&ograve;ng chữ &ldquo;Ref + một số n&agrave;o đ&oacute;&rdquo;. Điều đ&oacute; c&oacute; nghĩa l&agrave; sản phẩm bạn thấy tham chiếu đến số đ&oacute;.</p>\r\n\r\n<p>Khi nhận những tin nhắn giao dịch c&oacute; bao giờ bạn thắc mắc tại sao xuất hiện từ &ldquo;Ref&rdquo; trong đ&oacute; kh&ocirc;ng? Ref trong ng&acirc;n h&agrave;ng l&agrave; từ viết tắt của Reference Number. Đối với những ai c&oacute; kiến thức về ng&acirc;n h&agrave;ng hoặc kinh tế chắc chắn sẽ biết đến cụm thuật ngữ phổ biến n&agrave;y. Reference Number l&agrave; một m&atilde; số nhận dạng duy nhất đối với một giao dịch t&agrave;i ch&iacute;nh n&agrave;o đ&oacute; th&ocirc;ng qua thẻ t&iacute;n dụng hoặc thẻ ghi nợ của ng&acirc;n h&agrave;ng.</p>\r\n\r\n<p>Hy vọng qua đ&ocirc;i d&ograve;ng l&yacute; giải về nghĩa của Ref trong b&agrave;i viết c&oacute; thể gi&uacute;p bạn c&oacute; c&aacute;i nh&igrave;n kh&aacute;i qu&aacute;t v&agrave; hiểu đ&uacute;ng nghĩa của từ Ref trong từng lĩnh vực kh&aacute;c nhau.</p>\r\n', '1730124548_ref-la-gi.jpeg', '2024-10-28', 0),
(17, '', 'Cuộc sống vô thường nào ai biết trước ngày mai', '', '<p><strong>Cuộc sống v&ocirc; thường</strong>&nbsp;ch&uacute;ng ta chẳng ai c&oacute; thể biết trước tương lai sẽ xảy ra chuyện g&igrave;, giống như&nbsp;<strong>h&ocirc;m nay</strong>&nbsp;bạn đang gi&agrave;u c&oacute; thế nhưng&nbsp;<strong>ng&agrave;y mai</strong>&nbsp;bạn c&oacute; thể ngh&egrave;o đi. Đời người mu&ocirc;n v&agrave;n bất ngờ, kh&oacute; khăn v&agrave; rồi ch&uacute;ng ta chẳng một ai c&oacute; thể dự đo&aacute;n được tương lai c&oacute; g&igrave;.</p>\r\n\r\n<p>Kh&ocirc;ng c&oacute; g&igrave; l&agrave; m&atilde;i m&atilde;i, theo thời gian mọi thứ sẽ thay đổi. Con người v&agrave; cuộc sống đều thay đổi theo quy luật của thời gian. Với thời buổi x&atilde; hội hiện đại như ng&agrave;y nay ch&uacute;ng ta c&oacute; thể thấy được từng gi&acirc;y từng ph&uacute;t mọi thứ đ&atilde; c&oacute; thể thay đổi một c&aacute;ch ch&oacute;ng mặt.</p>\r\n\r\n<h2><strong>V&ocirc; thường l&agrave; g&igrave;?</strong></h2>\r\n\r\n<p>V&ocirc; thường c&oacute; nghĩa l&agrave; kh&ocirc;ng c&oacute; g&igrave; c&oacute; thể k&eacute;o d&agrave;i v&agrave; trường tồn m&atilde;i m&atilde;i. N&oacute;i một c&aacute;ch đơn giản, mọi sự vật, hiện tượng tr&ecirc;n đời đều li&ecirc;n tục biến chuyển, thay đổi v&agrave; kh&ocirc;ng ở y&ecirc;n tại một trạng th&aacute;i duy nhất.</p>\r\n\r\n<p><a href=\"https://anybooks.vn/cuoc-song-vo-thuong-nao-ai-biet-truoc-ngay-mai-a1954.html\"><img alt=\"Vô thường là gì\" src=\"https://anybooks.vn/uploads/images/vo-thuong.jpeg\" /></a></p>\r\n\r\n<p>Th&acirc;n v&ocirc; thường: Sinh, l&atilde;o, bệnh, tử, bệnh tật, tai nạn bất thường lu&ocirc;n xảy ra.</p>\r\n\r\n<p>T&acirc;m v&ocirc; thường: L&ograve;ng tin dễ lung lay, l&yacute; tưởng cũng dễ thay đổi.</p>\r\n\r\n<p>Thời gian v&ocirc; thường: Đời người thật ngắn ngủi để rồi tho&aacute;ng chốc hiểu ra một điều được sống thanh thản hưởng chọn niềm y&ecirc;u thương l&agrave; điều qu&yacute; gi&aacute;.</p>\r\n\r\n<p>Tiền v&ocirc; thường: Khi ch&uacute;ng ta ra đời th&igrave; cũng đ&atilde; chẳng c&oacute; một đồng, khi chết rồi cũng chẳng mang đi được. C&oacute; l&uacute;c trong tay ch&uacute;ng ta c&oacute; rất nhiều tiền, đồng thời, v&agrave;o một ng&agrave;y đẹp trời n&agrave;o đ&oacute;, c&oacute; thể lại chẳng c&ograve;n lại 1 xu.</p>\r\n\r\n<h2><strong>Sống hết m&igrave;nh cho ng&agrave;y h&ocirc;m nay</strong></h2>\r\n\r\n<p>H&atilde;y sống hết m&igrave;nh cho ng&agrave;y h&ocirc;m nay bởi ch&uacute;ng ta kh&ocirc;ng thể biết trước được tương lai sẽ xảy ra những chuyện g&igrave;. Nếu n&oacute;i về cuộc sống ngay hiện tại th&igrave; &iacute;t người c&oacute; thể tr&acirc;n trọng v&agrave; tận hưởng hết m&igrave;nh với cuộc sống, ch&uacute;ng ta thường d&agrave;nh qu&aacute; nhiều thời gian để nghĩ về qu&aacute; khứ v&agrave; tương lai. Ch&uacute;ng ta c&oacute; một cuộc sống ở hiện tại v&ocirc; c&ugrave;ng tươi đẹp nhưng bạn lại chẳng biết tận hưởng n&oacute; m&agrave; lại nghĩ về những thứ khiến cho bản th&acirc;n mệt mỏi.</p>\r\n\r\n<p><img alt=\"Hãy sống hết mình cho ngày hôm nay\" src=\"https://anybooks.vn/uploads/images/song-het-minh-cho-ngay-hom-nay.jpg\" /></p>\r\n\r\n<p>V&ocirc; thường l&agrave; sự vĩnh hằng của thế gian, biến đổi l&agrave; điều thường trực của vạn vật. Nh&acirc;n sinh cũng lại như thế, thời gian như nước chảy, được mất v&ocirc; định, họa ph&uacute;c v&ocirc; căn, vật đổi sao dời, hết thảy đều kh&ocirc;ng ngừng biến h&oacute;a. Thế gian dẫu đẹp con người cũng chẳng thể gắn b&oacute; được bền l&acirc;u, đến v&agrave; đi l&agrave; t&ugrave;y duy&ecirc;n phận.</p>\r\n\r\n<h2><strong>H&atilde;y tận hưởng trọn vẹn hạnh ph&uacute;c của ng&agrave;y h&ocirc;m nay</strong></h2>\r\n\r\n<p>Cuộc sống lu&ocirc;n mang đến cho ch&uacute;ng ta mu&ocirc;n v&agrave;n chuyện bất ngờ, n&oacute; ập đến v&agrave;o l&uacute;c bạn kh&ocirc;ng ngờ nhất, n&oacute; biến bạn từ một người đang vui vẻ c&oacute; thể ch&igrave;m đắm trong sự ti&ecirc;u cực. Ch&iacute;nh v&igrave; thế nếu mạnh mẽ vượt qua bạn mới c&oacute; thể trở th&agrave;nh phi&ecirc;n bản th&acirc;n tốt.</p>\r\n\r\n<p>Được &ndash; mất, hai thứ lu&ocirc;n song h&agrave;nh c&ugrave;ng nhau, bạn kh&ocirc;ng thể đ&ograve;i hỏi tất cả những thứ tốt đẹp về ph&iacute;a m&igrave;nh.&nbsp;<a href=\"https://anybooks.vn/cuoc-song-vo-thuong-nao-ai-biet-truoc-ngay-mai-a1954.html\"><strong>Cuộc sống v&ocirc; thường</strong></a>&nbsp;n&ecirc;n sẽ c&oacute; những l&uacute;c bạn gặp chuyện kh&ocirc;ng như m&igrave;nh mong muốn. Đến một giai đoạn n&agrave;o đ&oacute; bạn sẽ nhận ra tất cả mọi thứ đều đ&atilde; được trời xanh an b&agrave;i v&agrave; nhiệm vụ của bạn đ&oacute; l&agrave; sống thật tốt.</p>\r\n\r\n<p>&ldquo;Chẳng ai biết trước được ng&agrave;y mai sẽ ra sao n&ecirc;n l&uacute;c n&agrave;y, ngay l&uacute;c n&agrave;y đ&acirc;y, h&atilde;y cứ vui tươi sống rạng r&otilde; nhất những năm th&aacute;ng tuổi trẻ của m&igrave;nh.&rdquo;</p>\r\n\r\n<p>R&otilde; r&agrave;ng c&oacute; những chuyện nằm ngo&agrave;i tầm kiểm so&aacute;t của ch&uacute;ng ta, v&iacute; như bầu trời h&ocirc;m nay thật đẹp, thế nhưng chỉ sang ng&agrave;y mai th&ocirc;i trời đột nhi&ecirc;n đổ cơn mưa. Cuộc sống của ch&uacute;ng ta cũng vậy sẽ c&oacute; những ng&agrave;y chỉ to&agrave;n l&agrave; mệt mỏi, cay đắng khiến bạn chẳng muốn bước tiếp thế nhưng nếu m&atilde;i ch&igrave;m đắm trong suy nghĩ ti&ecirc;u cực ch&uacute;ng ta sẽ kh&ocirc;ng thể trưởng th&agrave;nh. Vậy n&ecirc;n những chuyện nằm ngo&agrave;i tầm kiểm so&aacute;t của ch&uacute;ng ta h&atilde;y chấp nhận, đừng o&aacute;n tr&aacute;ch v&igrave; n&oacute; cũng chẳng c&oacute; t&aacute;c dụng g&igrave;.</p>\r\n\r\n<p>&ldquo;N&agrave;y con, c&oacute; một thứ h&agrave;nh trang gi&uacute;p con thanh thản đi qua những ng&agrave;y gi&ocirc;ng b&atilde;o của kiếp người, đ&oacute; l&agrave; Từ t&acirc;m. Kh&ocirc;ng phải khi con kh&ocirc;ng nghe, kh&ocirc;ng thấy, kh&ocirc;ng nh&igrave;n l&agrave; c&oacute; thể b&igrave;nh y&ecirc;n. B&igrave;nh y&ecirc;n chỉ thật sự c&oacute; mặt khi c&ograve;n nh&igrave;n cuộc đời đầy biến động với đ&ocirc;i mắt thương, biết nghe những c&acirc;u chuyện thị phi v&oacute;i tấm l&ograve;ng rộng mở, kh&ocirc;ng th&agrave;nh kiến, kh&ocirc;ng ph&aacute;n x&eacute;t v&agrave; biết n&oacute;i với nhau những lời &aacute;i ngữ, nhẹ nh&agrave;ng.&rdquo; &ndash; Sư &Ocirc;ng L&agrave;ng Mai.</p>\r\n\r\n<p><img alt=\"Hãy tận hưởng trọn vẹn hạnh phúc của ngày hôm nay\" src=\"https://anybooks.vn/uploads/images/cuoc-song-vo-thuong.jpg\" /></p>\r\n\r\n<h2><strong>Đời người ngắn ngủi, đừng l&atilde;ng ph&iacute; thời gian cho những việc kh&ocirc;ng đ&aacute;ng</strong></h2>\r\n\r\n<p>Ch&uacute;ng ta đều lầm tưởng rằng m&igrave;nh c&oacute; nhiều thời gian, thực tế th&igrave; cuộc đời n&agrave;y ngắn ngủi v&ocirc; c&ugrave;ng. Nếu mỗi ng&agrave;y bạn đều l&atilde;ng ph&iacute; thời gian v&agrave;o những chuyện kh&ocirc;ng xứng đ&aacute;ng phải l&atilde;ng ph&iacute; thời gian vậy th&igrave; bạn sẽ kh&ocirc;ng thể tận hưởng được vẻ đẹp của cuộc sống.</p>\r\n\r\n<p>Cuộc sống kh&ocirc;ng chờ đợi bất cứ một ai, thời gian chỉ tiến về ph&iacute;a trước chứ kh&ocirc;ng đi l&ugrave;i bao giờ thế n&ecirc;n h&atilde;y sống hết m&igrave;nh cho ng&agrave;y h&ocirc;m nay, cho tuổi trẻ của ch&uacute;ng ta v&agrave; đừng qu&ecirc;n rằng sau những giờ l&agrave;m việc căng thẳng bạn cần được nghỉ ngơi một c&aacute;ch đ&uacute;ng nghĩa. Tận hưởng cuộc sống n&agrave;y theo c&aacute;ch m&agrave; bạn muốn, đừng bắt bản th&acirc;n phải g&ograve; b&oacute; trong một m&ocirc;i trường n&agrave;o đ&oacute; m&agrave; h&atilde;y đi theo con tim m&aacute;ch bảo. Kh&ocirc;ng cần phải trở th&agrave;nh một người được tất cả mọi người y&ecirc;u qu&yacute; chỉ cần trở th&agrave;nh phi&ecirc;n bản m&agrave; bạn y&ecirc;u th&iacute;ch, như vậy l&agrave; được rồi.</p>\r\n', '1730124597_song-het-minh-cho-ngay-hom-nay.jpg', '2024-10-28', 0),
(18, '', 'Biết người biết ta, trăm trận trăm thắng', '', '<p>&ldquo;BIẾT NGƯỜI BIẾT TA, TRĂM TRẬN TRĂM THẮNG&rdquo;</p>\r\n\r\n<p>T&ocirc;n Tử từng n&oacute;i trong binh thư: &ldquo;<a href=\"https://anybooks.vn/biet-nguoi-biet-ta-tram-tran-tram-thang-a1965.html\"><em><strong>Biết người biết ta, trăm trận trăm thắng</strong></em></a>&rdquo;. Điều n&agrave;y xem ra kh&ocirc;ng dễ ch&uacute;t n&agrave;o. Bởi lẽ, đ&acirc;y l&agrave; triết l&yacute; sống rất cao s&acirc;u. Biết ta l&agrave; chuyện kh&oacute; th&igrave; chuyện biết người c&agrave;ng kh&oacute; khăn hơn. T&ocirc;n Tử, Socrates v&agrave; Aristotle c&oacute; một điểm rất chung l&agrave; rất khi&ecirc;m tốn.</p>\r\n\r\n<p>C&oacute; lẽ v&igrave; hiểu được đều ấy m&agrave; triết gia Socrates đ&atilde; khuy&ecirc;n mọi người rằng: &ldquo;<em><strong>H&atilde;y biết m&igrave;nh!</strong></em>&rdquo;.</p>\r\n\r\n<p>Triết gia Hy Lạp cổ Aristotle đ&atilde; n&oacute;i: &ldquo;<strong><em>Gi&aacute; trị cuối c&ugrave;ng của cuộc sống nằm ở sự thức tỉnh v&agrave; khả năng tư duy, chứ kh&ocirc;ng phải chỉ ở chỗ sinh tồn</em></strong>&rdquo;.</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://anybooks.vn/hay-hoc-cach-yeu-thuong-chinh-ban-than-minh-a1412.html\">H&atilde;y học c&aacute;ch y&ecirc;u thương ch&iacute;nh bản th&acirc;n m&igrave;nh</a></li>\r\n	<li><a href=\"https://anybooks.vn/song-don-gian-de-cuoc-song-hanh-phuc-hon-a1000.html\">Sống Đơn Giản Để Cuộc Sống Hạnh Ph&uacute;c Hơn</a></li>\r\n</ul>\r\n\r\n<p><img alt=\"Biết người biết ta, trăm trận trăm thắng\" src=\"https://anybooks.vn/uploads/images/biet-nguoi-biet-ta-tram-tran-tram-thang.jpeg\" /></p>\r\n\r\n<p>Mắt người c&oacute; thể nh&igrave;n r&otilde; bốn phương t&aacute;m t&aacute;m hướng, nhưng nếu kh&ocirc;ng c&oacute; tấm gương tự nh&igrave;n lại bản th&acirc;n m&igrave;nh n&agrave;y, th&igrave; ch&uacute;ng ta sẽ chẳng bao giờ nh&igrave;n thấy được l&ocirc;ng m&agrave;y của m&igrave;nh.</p>\r\n\r\n<p>C&oacute; thể n&oacute;i, ở đời ai cũng mong muốn m&igrave;nh chiến thắng trong mọi sự. Chiến thắng tr&ecirc;n thương trường, tr&ecirc;n ch&iacute;nh trường, trong t&igrave;nh trường hay trong mọi lĩnh vực lớn nhỏ của đời sống con người. Chiến thắng c&oacute; thể được hiểu v&agrave; được đồng ho&aacute; với th&agrave;nh c&ocirc;ng. Hai chữ &ldquo;th&agrave;nh c&ocirc;ng&rdquo; trở th&agrave;nh mục ti&ecirc;u v&agrave; đ&iacute;ch đến của hầu hết con người sống, đặc biệt l&agrave; nơi những con người c&oacute; đầu &oacute;c cầu tiến.</p>\r\n\r\n<p>C&oacute; nhiều người sống gần hết cuộc đời của m&igrave;nh rồi m&agrave; vẫn kh&ocirc;ng hề biết m&igrave;nh hay qu&aacute; ảo tưởng về m&igrave;nh. Điều n&agrave;y nghe c&oacute; vẻ phi l&yacute;, nhưng đ&oacute; l&agrave; thực tế.</p>\r\n\r\n<p>Người kh&ocirc;ng biết m&igrave;nh l&agrave; đi t&igrave;m những c&aacute;i m&igrave;nh kh&ocirc;ng c&oacute;, bỏ qua những c&aacute;i m&igrave;nh đang c&oacute; trong tay; coi &ldquo;c&aacute;i c&oacute;&rdquo; trở th&agrave;nh &ldquo;c&aacute;i l&agrave;&rdquo;; chỉ ch&uacute; trọng đến h&igrave;nh thức m&agrave; qu&ecirc;n mất nội dung b&ecirc;n trong, ghen tị với người kh&aacute;c khi thấy họ hơn m&igrave;nh. Người kh&ocirc;ng biết m&igrave;nh lu&ocirc;n sống trong bất an, nghi kỵ đủ điều, c&oacute; lối sống theo kiểu &ldquo;thượng đội, hạ đạp&rdquo;... Người &ldquo;kh&ocirc;ng biết m&igrave;nh&rdquo; như thế c&oacute; chiến thắng cũng th&agrave;nh chiến bại. Kẻ kh&ocirc;ng biết m&igrave;nh đ&atilde; tệ hại như thế th&igrave; kẻ ảo tưởng về m&igrave;nh c&ograve;n tệ hại hơn thế nữa.</p>\r\n\r\n<p>Nhiều khi ch&uacute;ng ta ph&agrave;n n&agrave;n về thế giới n&agrave;y. Nhưng kh&ocirc;ng phải l&agrave; thế giới n&agrave;y c&oacute; vấn đề, m&agrave; l&agrave; ch&uacute;ng ta kh&ocirc;ng tự soi lại bản th&acirc;n m&igrave;nh.</p>\r\n\r\n<p>Từng c&oacute; người hỏi nh&agrave; thơ Tagore rằng: &ldquo;Tr&ecirc;n đời n&agrave;y điều g&igrave; l&agrave; dễ nhất? Điều g&igrave; l&agrave; kh&oacute; nhất?&rdquo;. Nh&agrave; thơ Tagore trả lời: &ldquo;Điều dễ nhất l&agrave; chỉ tr&iacute;ch người kh&aacute;c, v&agrave; kh&oacute; nhất l&agrave; tự nhận thức bản th&acirc;n m&igrave;nh&rdquo;.</p>\r\n\r\n<p>Tr&ecirc;n đời n&agrave;y kh&ocirc;ng c&oacute; người ho&agrave;n hảo, nhưng mỗi người đều c&oacute; khả năng v&agrave; cơ hội để sửa đổi m&igrave;nh. Người thực sự c&oacute; tr&aacute;ch nhiệm với bản th&acirc;n thường th&ocirc;ng qua kinh nghiệm m&agrave; nhận thức về bản th&acirc;n m&igrave;nh, v&agrave; trong phản tỉnh m&agrave; th&agrave;nh tựu ch&iacute;nh m&igrave;nh. Mục đ&iacute;ch của tự sửa đổi l&agrave; để h&igrave;nh th&agrave;nh cho bản th&acirc;n một nh&acirc;n sinh quan vững v&agrave;ng. Tự vấn gi&uacute;p thay đổi nh&acirc;n sinh quan v&agrave; mọi thứ thay đổi th&igrave; nh&acirc;n sinh quan cũng cần thay đổi. Tuy nhi&ecirc;n, sự thay đổi nh&acirc;n sinh quan hiểu theo nghĩa l&agrave; gạn đục khơi trong, hướng về những gi&aacute; trị phổ qu&aacute;t v&agrave; trường tồn, về Ch&acirc;n Thiện Mỹ.</p>\r\n\r\n<p>Nếu trong cuộc sống đ&atilde; n&oacute;i sai điều g&igrave; đ&oacute;, th&igrave; lần sau cố gắng ăn n&oacute;i c&oacute; chừng mực hơn, đấy ch&iacute;nh l&agrave; sự tiến bộ. Nếu trong c&ocirc;ng việc m&agrave; mắc một việc sai lầm n&agrave;o đ&oacute;, th&igrave; tranh thủ lần sau tuyệt đối kh&ocirc;ng mắc lỗi lần hai, đấy ch&iacute;nh l&agrave; trưởng th&agrave;nh.</p>\r\n\r\n<p>Người biết c&aacute;ch phản tỉnh ch&iacute;nh m&igrave;nh ch&iacute;nh l&agrave; người c&oacute; năng lực l&agrave;m mới ch&iacute;nh m&igrave;nh. Khi những kinh nghiệm trong qu&aacute; khứ được dung hợp v&agrave;o sự từng trải trong cuộc sống, th&igrave; bạn sẽ trở th&agrave;nh một phi&ecirc;n bản tốt hơn.</p>\r\n\r\n<p>Người sang tự biết m&igrave;nh, rồi sau tự phản tỉnh, v&agrave; cuối c&ugrave;ng l&agrave; tự ước th&uacute;c bản th&acirc;n. Kh&ocirc;ng biết nghiền ngẫm về bản th&acirc;n v&agrave; sửa đổi ch&iacute;nh m&igrave;nh, th&igrave; cũng như những nắm bột chưa được nh&agrave;o nặn. Đồng thời, cuộc sống m&agrave; kh&ocirc;ng c&oacute; tự x&eacute;t m&igrave;nh th&igrave; sẽ chỉ giẫm ch&acirc;n tại chỗ, kh&ocirc;ng c&aacute;ch n&agrave;o tiến l&ecirc;n được.</p>\r\n\r\n<p>Biết m&igrave;nh l&agrave; nhận ra sự thật nơi m&igrave;nh, chấp nhận m&igrave;nh v&agrave; hạnh ph&uacute;c với những g&igrave; m&igrave;nh đang c&oacute;. Biết m&igrave;nh l&agrave; chấp nhận c&oacute; những giới hạn v&agrave; cần li&ecirc;n đới với người kh&aacute;c để l&agrave;m cho cuộc sống th&ecirc;m tốt đẹp hơn. Biết người l&agrave; biết họ cũng c&oacute; những giới hạn v&agrave; c&oacute; những độc đ&aacute;o ri&ecirc;ng của họ. Khi kh&aacute;m ph&aacute; ra sự thật như thế, ch&uacute;ng ta sẽ sống b&igrave;nh an, vui tươi với mọi người v&agrave; thấy được &yacute; nghĩa đ&iacute;ch thực của cuộc sống n&agrave;y.</p>\r\n\r\n<p>Cần tr&aacute;nh hai th&aacute;i độ mặc cảm l&agrave; tự t&ocirc;n hoặc tự ti khi đến với người kh&aacute;c. Đừng tỏ vẻ &ldquo;ta đ&acirc;y&rdquo; khi thấy m&igrave;nh trội vượt hơn người kh&aacute;c trong một v&agrave;i khả năng n&agrave;o đ&oacute;, nhưng cũng đừng &ldquo;c&uacute;i rạp m&igrave;nh&rdquo; khi thấy c&oacute; ai đ&oacute; hơn m&igrave;nh trong một số lĩnh vực. H&atilde;y nh&igrave;n ra sự thật n&agrave;y l&agrave;: mọi người, ai cũng c&oacute; những n&eacute;t độc đ&aacute;o ri&ecirc;ng v&agrave; kh&ocirc;ng ai c&oacute; thể thay thế chỗ của người kh&aacute;c được. Bởi v&igrave; tạo h&oacute;a đ&atilde; tạo ra th&igrave; chẳng ai l&agrave; phi&ecirc;n bản của ai cả!</p>\r\n\r\n<p>Muốn chiến thắng thật sự th&igrave; kh&ocirc;ng những phải biết m&igrave;nh m&agrave; c&ograve;n phải biết người nữa, cho n&ecirc;n &ldquo;Biết m&igrave;nh, biết người trăm trận trăm thắng!&rdquo;.</p>\r\n\r\n<p>Nguồn: (S&aacute;ch&nbsp;<a href=\"https://www.facebook.com/photo/?fbid=9938360156189707\" target=\"_blank\">&Yacute; NHƯ VẠN SỰ - PHAN NGỌC DŨNG</a>)</p>\r\n', '1730124639_biet-nguoi-biet-ta-tram-tran-tram-thang.jpeg', '2024-10-28', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(13, 'Nhà xuất bản giáo dục Việt Nam'),
(14, 'Nhà xuất bản Trẻ'),
(15, 'Nhà xuất bản Kim Đồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `capacity`
--

CREATE TABLE `capacity` (
  `capacity_id` int(11) NOT NULL,
  `capacity_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `capacity`
--

INSERT INTO `capacity` (`capacity_id`, `capacity_name`) VALUES
(13, '500g'),
(14, '1kg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `category_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `category_image`) VALUES
(18, 'Văn học', '', '1730122232_'),
(19, 'Kinh Tế', '', '1730122260_'),
(20, 'Thiếu nhi', '', '1730122272_');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collection`
--

CREATE TABLE `collection` (
  `collection_id` int(11) NOT NULL,
  `collection_name` varchar(100) NOT NULL,
  `collection_keyword` varchar(100) NOT NULL,
  `collection_image` varchar(100) NOT NULL,
  `collection_description` varchar(255) NOT NULL,
  `collection_order` int(11) NOT NULL,
  `collection_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `comment_name` varchar(50) NOT NULL,
  `comment_email` varchar(50) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`comment_id`, `article_id`, `comment_name`, `comment_email`, `comment_content`, `comment_date`, `comment_status`) VALUES
(16, 8, 'tú', 'theanh@gmail.com', 'giá hợp lí', '2024-10-18', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_gender` int(11) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_id`, `account_id`, `customer_name`, `customer_gender`, `customer_email`, `customer_phone`, `customer_address`) VALUES
(1, 2, 'Trần Thế Anh', 0, 'theanh@gmail.com', '0972937758', 'Thái Bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `delivery_name` varchar(100) NOT NULL,
  `delivery_phone` varchar(20) NOT NULL,
  `delivery_address` varchar(100) NOT NULL,
  `delivery_note` varchar(100) NOT NULL,
  `agency_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `account_id`, `delivery_name`, `delivery_phone`, `delivery_address`, `delivery_note`, `agency_name`) VALUES
(9965, 7, 'Trần Thế Anh', '0972937758', 'Minh Tân, Kiến Xương , Thái Bình', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluate`
--

CREATE TABLE `evaluate` (
  `evaluate_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `evaluate_rate` int(11) NOT NULL,
  `evaluate_content` text NOT NULL,
  `evaluate_date` varchar(50) NOT NULL,
  `evaluate_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `evaluate`
--

INSERT INTO `evaluate` (`evaluate_id`, `account_id`, `product_id`, `account_name`, `evaluate_rate`, `evaluate_content`, `evaluate_date`, `evaluate_status`) VALUES

(31, 38, 214, 'test', 5, 'good', '2024-10-18 21:18:25', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `staf_name` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_phone` varchar(20) NOT NULL,
  `inventory_note` varchar(100) NOT NULL,
  `inventory_code` varchar(50) NOT NULL,
  `inventory_date` date NOT NULL,
  `total_amount` float NOT NULL,
  `inventory_status` int(11) NOT NULL,
  `agency_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;


--
-- Cấu trúc bảng cho bảng `inventory_detail`
--

CREATE TABLE `inventory_detail` (
  `inventory_detail_id` int(11) NOT NULL,
  `inventory_code` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price_import` float NOT NULL,
  `agency_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `inventory_detail`
--

INSERT INTO `inventory_detail` (`inventory_detail_id`, `inventory_code`, `product_id`, `product_quantity`, `product_price_import`, `agency_id`) VALUES
(1, '9124', 21, 3, 2500000, NULL),
(2, '9124', 18, 11, 2000000, NULL),
(3, '4615', 21, 12, 2500000, NULL),
(4, '7331', 19, 3, 3000000, NULL),
(5, '9288', 15, 12, 9555000, NULL),
(6, '8549', 21, 2, 2500000, NULL),
(7, '8549', 22, 1, 2000000, NULL),
(8, '9453', 38, 12, 10, NULL),
(9, '4330', 101, 4, 1, NULL),
(10, '3997', 17, 11, 2500000, NULL),
(11, '3997', 22, 12, 3000000, NULL),
(12, '4658', 22, 5, 3000000, NULL),
(13, '4890', 16, 11, 2500000, NULL),
(14, '7089', 16, 11, 2500000, NULL),
(15, '1989', 16, 11, 2500000, NULL),
(16, '3044', 16, 11, 2500000, NULL),
(17, '3450', 15, 5, 8500000, NULL),
(18, '9540', 20, 11, 2500000, NULL),
(19, '5574', 21, 2, 3000000, NULL),
(20, '6587', 165, 132, 123, NULL),
(21, '6587', 168, 1, 1111, NULL),
(22, '3372', 168, 11, 1111, NULL),
(23, '8066', 165, 11, 111, NULL),
(24, '8944', 168, 1, 11111, NULL),
(25, '9169', 164, 11, 111, NULL),
(26, '9858', 172, 10000, 100000, NULL),
(27, '6620', 173, 123, 100000, NULL),
(28, '5816', 154, 10, 300000, NULL),
(29, '3611', 173, 132, 20000000, NULL),
(30, '123', 177, 100, 10000, NULL),
(31, '9104', 178, 100, 20000, NULL),
(32, '6868', 196, 100, 20000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `metrics`
--

CREATE TABLE `metrics` (
  `metric_id` int(11) NOT NULL,
  `metric_date` date NOT NULL,
  `metric_order` int(11) NOT NULL,
  `metric_sales` varchar(100) NOT NULL,
  `metric_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `metrics`
--

INSERT INTO `metrics` (`metric_id`, `metric_date`, `metric_order`, `metric_sales`, `metric_quantity`) VALUES
(1, '2023-05-14', 19, '20000000', 34),
(2, '2023-05-15', 24, '20000000', 38),
(3, '2023-05-16', 21, '25000000', 30),
(4, '2023-05-17', 24, '19000000', 38),
(5, '2023-05-18', 28, '35000000', 50),
(6, '2023-05-19', 29, '40000000', 48),
(7, '2023-05-13', 21, '19500000', 28),
(8, '2023-04-19', 29, '40000000', 48),
(9, '2023-03-20', 28, '35000000', 50),
(10, '2023-04-30', 23, '54000000', 100),
(11, '2023-05-06', 23, '44000000', 50),
(12, '2023-05-04', 3, '4000000', 5),
(13, '2023-05-20', 2, '37060000', 8),
(14, '2023-05-23', 3, '9900000', 3),
(15, '2023-05-24', 1, '7200000', 2),
(16, '2023-05-28', 9, '38760000', 29),
(19, '2023-05-29', 1, '3680000', 1),
(20, '2023-06-02', 3, '33770000', 4),
(21, '2023-06-03', 13, '49350000', 8),
(22, '2023-06-04', 6, '21210000', 1),
(23, '2023-06-05', 1, '16200000', 0),
(24, '2023-06-06', 9, '64860000', 11),
(25, '2023-06-07', 11, '60755000', 19),
(26, '2023-06-08', 1, '6300000', 2),
(27, '2023-06-11', 1, '12600000', 2),
(28, '2023-06-14', 1, '2700000', 1),
(29, '2023-06-15', 2, '11400000', 3),
(30, '2023-06-16', 2, '12800000', 2),
(31, '2023-06-18', 8, '108911003.52', 21),
(32, '2023-06-19', 3, '18375000', 4),
(33, '2023-06-20', 2, '92410000', 11),
(34, '2023-07-07', 4, '152049200', 17),
(35, '2023-10-07', 1, '3325000', 1),
(36, '2023-10-26', 1, '356.25', 3),
(37, '2024-08-26', 2, '2280000', 4),
(38, '2024-10-28', 1, '200000', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `momo_id` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_code` int(11) NOT NULL,
  `momo_amount` varchar(50) NOT NULL,
  `order_info` varchar(100) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `payment_date` varchar(50) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `momo`
--

INSERT INTO `momo` (`momo_id`, `partner_code`, `order_code`, `momo_amount`, `order_info`, `order_type`, `trans_id`, `payment_date`, `pay_type`, `payment_status`) VALUES
(2, 'MOMOBKUN20180529', 6434, '9000000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, '2023-06-15 13:05:51', 'napas', 0),
(3, 'MOMOBKUN20180529', 3619, '7200000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, '2023-06-10 13:05:51', 'napas', 0),
(4, 'MOMOBKUN20180529', 9864, '7360000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, '2023-06-19 13:05:51', 'napas', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_code` int(11) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `account_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `order_type` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `agency_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `order_code`, `order_date`, `account_id`, `delivery_id`, `total_amount`, `order_type`, `order_status`, `agency_name`) VALUES
(183, 5196, '2024-10-17 21:46:23', 28, 2101, 950000, 1, 0, 'Chi nhánh Hà Đông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_code` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_code`, `product_id`, `product_quantity`, `product_price`, `product_sale`) VALUES
(200, 752, 177, 1, 120000, 11),
(201, 7388, 154, 11, 100000, 5),
(202, 4656, 181, 2, 60000, 5),
(203, 7458, 196, 4, 100000, 29),
(204, 581, 214, 4, 50000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `capacity_id` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `quantity_sales` int(11) NOT NULL,
  `product_price_import` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_sale` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` text NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_images` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_brand`, `capacity_id`, `product_quantity`, `quantity_sales`, `product_price_import`, `product_price`, `product_sale`, `product_description`, `product_image`, `product_status`, `product_images`) VALUES
(200, 'Nàng Thiên Nga Xinh', 20, 0, '', 100, 0, 10000, 20000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935095634118</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dự Kiến C&oacute; H&agrave;ng</th>\r\n			<td>05/11/2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/huy-hoang?fhs_campaign=ATTRIBUTE_PRODUCT\">Huy Hoang Bookstore</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Ngọc Phượng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>Mỹ Thuật</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>120</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>24 x 17 x 0.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>80</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/thieu-nhi/truyen-thieu-nhi/truyen-tranh-thieu-nhi.html?order=num_orders_month\">Top 100 sản phẩm Truyện Tranh Thiếu Nhi b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730122492_8935095634118.webp', 1, '1730122492_8935095634118.webp'),
(201, 'Bà Chúa Tuyết', 20, 15, '', 100, 0, 10000, 30000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935095634057</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dự Kiến C&oacute; H&agrave;ng</th>\r\n			<td>05/11/2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/huy-hoang?fhs_campaign=ATTRIBUTE_PRODUCT\">Huy Hoang Bookstore</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Ngọc Phượng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>Mỹ Thuật</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>120</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>24 x 17 x 0.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>80</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/thieu-nhi/truyen-thieu-nhi/truyen-tranh-thieu-nhi.html?order=num_orders_month\">Top 100 sản phẩm Truyện Tranh Thiếu Nhi b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730122692_8935095634057.webp', 1, '1730122692_8935095634057.webp'),
(202, 'Công Chúa Hạt Đậu', 20, 15, '', 100, 0, 10000, 40000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935095634095</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dự Kiến C&oacute; H&agrave;ng</th>\r\n			<td>05/11/2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/huy-hoang?fhs_campaign=ATTRIBUTE_PRODUCT\">Huy Hoang Bookstore</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Ngọc Phượng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>Mỹ Thuật</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>120</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>24 x 17 x 0.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>80</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/thieu-nhi/truyen-thieu-nhi/truyen-tranh-thieu-nhi.html?order=num_orders_month\">Top 100 sản phẩm Truyện Tranh Thiếu Nhi b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730122769_8935095634095.webp', 1, '1730122769_8935095634095.webp'),
(203, 'Cô Bé Bán Diêm', 20, 15, '', 100, 0, 10000, 50000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935095634064</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dự Kiến C&oacute; H&agrave;ng</th>\r\n			<td>05/11/2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/huy-hoang?fhs_campaign=ATTRIBUTE_PRODUCT\">Huy Hoang Bookstore</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Ngọc Phượng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>Mỹ Thuật</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>120</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>24 x 17 x 0.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>80</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/thieu-nhi/truyen-thieu-nhi/truyen-tranh-thieu-nhi.html?order=num_orders_month\">Top 100 sản phẩm Truyện Tranh Thiếu Nhi b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730122813_8935095634064.webp', 1, '1730123060_8935095634064.webp'),
(204, 'Nàng Tiên Cá', 20, 15, '', 100, 0, 10000, 100000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935095634064</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dự Kiến C&oacute; H&agrave;ng</th>\r\n			<td>05/11/2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/huy-hoang?fhs_campaign=ATTRIBUTE_PRODUCT\">Huy Hoang Bookstore</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Ngọc Phượng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>Mỹ Thuật</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2024</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>120</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>24 x 17 x 0.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>80</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/thieu-nhi/truyen-thieu-nhi/truyen-tranh-thieu-nhi.html?order=num_orders_month\">Top 100 sản phẩm Truyện Tranh Thiếu Nhi b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730122847_8935095634125.webp', 1, '1730123039_8935095634125.webp'),
(205, 'Lén Nhặt Chuyện Đời', 18, 15, '', 100, 0, 10000, 200000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>9786043651591</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/sbooks?fhs_campaign=ATTRIBUTE_PRODUCT\">C&Ocirc;NG TY CỔ PHẦN SBOOKS</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Mộc Trầm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>Thế Giới</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2022</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ng&ocirc;n Ngữ</th>\r\n			<td>\r\n			<p>Tiếng Việt</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>223</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>20 x 13 x 1.1 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>213</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/van-hoc-trong-nuoc/tieu-thuyet.html?order=num_orders_month\">Top 100 sản phẩm Tiểu thuyết b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730122962_9786043651591_1.webp', 1, '1730122962_2023_02_01_09_29_58_1-390x510.webp,1730122962_2023_02_01_09_29_58_2-390x510.webp,1730122962_2023_02_01_09_29_58_3-390x510.webp'),
(206, 'Trắng', 18, 14, '', 100, 0, 10000, 180000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935235230224</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/nha-nam?fhs_campaign=ATTRIBUTE_PRODUCT\">Nh&atilde; Nam</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Han Kang</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Người Dịch</th>\r\n			<td>H&agrave; Linh</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>NXB H&agrave; Nội</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2021</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>175</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>20.5 x 14 x 0.7 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>95</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/van-hoc-trong-nuoc/tieu-thuyet.html?order=num_orders_month\">Top 100 sản phẩm Tiểu thuyết b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730123224_image_237214.webp', 1, '1730123224_2022_06_07_16_02_30_1-390x510.webp,1730123224_2022_06_07_16_02_30_2-390x510.webp,1730123224_2022_06_07_16_02_30_3-390x510.webp'),
(207, 'Đám Trẻ Ở Đại Dương', 18, 14, '', 100, 0, 10000, 300000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935325011559</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/az-viet-nam?fhs_campaign=ATTRIBUTE_PRODUCT\">AZ Việt Nam</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Ch&acirc;u Sa Đ&aacute;y Mắt</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>Thế Giới</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ng&ocirc;n Ngữ</th>\r\n			<td>\r\n			<p>Tiếng Việt</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>300</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>19 x 13 x 1.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>280</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/van-hoc-trong-nuoc/truyen-ngan-tan-van.html?order=num_orders_month\">Top 100 sản phẩm Truyện ngắn - Tản Văn b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730123310_8935325011559.webp', 1, '1730123310__m_tr_i_d_ng_en_b_a_1.webp,1730123310__m_tr_i_d_ng_en_b_a_tr_c.webp,1730123310__m_tr_i_d_ng_en_b_a_sau.webp'),
(208, 'Trường Ca Achilles', 18, 0, '', 100, 0, 10000, 125000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935244843545</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/kim-dong?fhs_campaign=ATTRIBUTE_PRODUCT\">Nh&agrave; Xuất Bản Kim Đồng</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Madeline Miller</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>NXB Kim Đồng</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2020</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>450</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>22.5 x 14 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>444</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/van-hoc-trong-nuoc/tieu-thuyet.html?order=num_orders_month\">Top 100 sản phẩm Tiểu thuyết b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730123423_image_195509_1_41170.webp', 1, '1730123423_truong_ca_achilles_1_2021_12_09_15_24_44.webp,1730123423_truong_ca_achilles_2_2021_12_09_15_24_44.webp,1730123423_truong_ca_achilles_3_2021_12_09_15_24_44.webp'),
(209, 'Cây Cam Ngọt ', 18, 14, '', 100, 0, 10000, 45000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935235228351</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/nha-nam?fhs_campaign=ATTRIBUTE_PRODUCT\">Nh&atilde; Nam</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Jos&eacute; Mauro de Vasconcelos</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Người Dịch</th>\r\n			<td>Nguyễn B&iacute;ch Lan,&nbsp;T&ocirc; Yến Ly</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>NXB Hội Nh&agrave; Văn</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2020</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>280</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>20 x 14.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>244</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm hiển thị trong</th>\r\n			<td>\r\n			<ul>\r\n				<li><a href=\"https://www.fahasa.com/do-choi?fhs_campaign=INTERNAL_LINKING\">Đồ Chơi Cho B&eacute; - Gi&aacute; Cực Tốt</a></li>\r\n				<li><a href=\"https://www.fahasa.com/nha-nam?fhs_campaign=INTERNAL_LINKING\">Nh&atilde; Nam</a></li>\r\n				<li><a href=\"https://www.fahasa.com/vui-don-trung-thu?fhs_campaign=INTERNAL_LINKING\">RƯỚC DEAL LINH Đ&Igrave;NH VUI Đ&Oacute;N TRUNG THU</a></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/van-hoc-trong-nuoc/tieu-thuyet.html?order=num_orders_month\">Top 100 sản phẩm Tiểu thuyết b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730123645_image_217480.webp', 1, '1730123645_2020_12_17_16_50_30_1-390x510.webp,1730123645_2020_12_17_16_50_30_2-390x510.webp,1730123645_2020_12_17_16_50_30_3-390x510.webp'),
(210, 'MBA Bằng Hình', 19, 13, '', 100, 0, 10000, 500000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935235238978</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/nha-nam?fhs_campaign=ATTRIBUTE_PRODUCT\">Nh&atilde; Nam</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Jason Barron&nbsp;,&nbsp;MBA</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Người Dịch</th>\r\n			<td>B&ugrave;i Thu H&agrave;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>C&ocirc;ng Thương</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>850</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>24 x 15 x 1 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>207</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/kinh-te-chinh-tri-phap-ly/quan-tri-lanh-dao.html?order=num_orders_month\">Top 100 sản phẩm Quản Trị - L&atilde;nh Đạo b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730123734_2023_09_29_16_35_31_1-390x510.webp', 1, '1730123734_2023_09_29_16_35_31_1-390x510.webp,1730123734_2023_09_29_16_35_31_2-390x510.webp,1730123734_2023_09_29_16_35_31_3-390x510.webp'),
(211, '48 Nguyên Tắc', 19, 13, '', 100, 0, 10000, 168000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8934974165569</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/nxb-tre?fhs_campaign=ATTRIBUTE_PRODUCT\">NXB Trẻ</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Robert Greene</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>NXB Trẻ</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2020</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>520</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>14 x 20 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>504</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/kinh-te-chinh-tri-phap-ly/nhan-vat-bai-hoc-kinh-doanh.html?order=num_orders_month\">Top 100 sản phẩm Nh&acirc;n vật - B&agrave;i Học Kinh doanh b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730123781_image_195509_1_32101.webp', 1, '1730123781_2020_06_11_15_11_55_3-390x510.webp,1730123781_2020_06_11_15_11_55_2-390x510.webp,1730123781_image_195509_1_32101.webp'),
(212, 'Make Money', 19, 13, '', 100, 0, 10000, 50000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>9786043654370</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/sbooks?fhs_campaign=ATTRIBUTE_PRODUCT\">C&Ocirc;NG TY CỔ PHẦN SBOOKS</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Nguyễn Anh Dũng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>Thế Giới</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>325</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>20 x 13 x 1.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>285</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/kinh-te-chinh-tri-phap-ly/khoi-nghiep-lam-giau.html?order=num_orders_month\">Top 100 sản phẩm Khởi Nghiệp - L&agrave;m Gi&agrave;u b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730123824_9786043654370.webp', 1, '1730123824_9786043654370.webp,1730123824_2023_07_12_09_35_57_1-390x510.webp,1730123824_2023_07_12_09_35_57_2-390x510.webp'),
(213, 'Originals', 19, 13, '', 100, 0, 10000, 300000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>8935086852118</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p><a href=\"https://www.fahasa.com/first-news?fhs_campaign=ATTRIBUTE_PRODUCT\">FIRST NEWS</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>Adam Grant</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>NXB Tổng Hợp TPHCM</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2020</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ng&ocirc;n Ngữ</th>\r\n			<td>\r\n			<p>Tiếng Việt</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>496</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>24 x 16 x 0.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>344</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm hiển thị trong</th>\r\n			<td>\r\n			<ul>\r\n				<li><a href=\"https://www.fahasa.com/sach-kinh-te-mua-manh-giam-bao?fhs_campaign=INTERNAL_LINKING\">S&aacute;ch Kinh Tế</a></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/kinh-te-chinh-tri-phap-ly/nhan-vat-bai-hoc-kinh-doanh.html?order=num_orders_month\">Top 100 sản phẩm Nh&acirc;n vật - B&agrave;i Học Kinh doanh b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730123889_tuduynguocdichchuyenthegioi-01_bia-1.webp', 1, '1730123889_2020_07_07_16_57_56_4-390x510.webp,1730123889_2020_07_07_16_57_56_2-390x510.webp'),
(214, 'Tài Chính Cá Nhân', 19, 13, '', 96, 4, 10000, 50000, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>M&atilde; h&agrave;ng</th>\r\n			<td>9786043905113</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&ecirc;n Nh&agrave; Cung Cấp</th>\r\n			<td>\r\n			<p>C&Ocirc;NG TY CỔ PHẦN Đ&Agrave;O TẠO QUẢN TRỊ KINH DOANH BIZUNI</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>T&aacute;c giả</th>\r\n			<td>\r\n			<p>L&acirc;m Minh Ch&aacute;nh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>NXB</th>\r\n			<td>Phụ Nữ Việt Nam</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Năm XB</th>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Trọng lượng (gr)</th>\r\n			<td>389</td>\r\n		</tr>\r\n		<tr>\r\n			<th>K&iacute;ch Thước Bao B&igrave;</th>\r\n			<td>24 x 16 x 1.1 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Số trang</th>\r\n			<td>235</td>\r\n		</tr>\r\n		<tr>\r\n			<th>H&igrave;nh thức</th>\r\n			<td>\r\n			<p>B&igrave;a Mềm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sản phẩm b&aacute;n chạy nhất</th>\r\n			<td><a href=\"https://www.fahasa.com/sach-trong-nuoc/kinh-te-chinh-tri-phap-ly/tai-chinh-ngan-hang.html?order=num_orders_month\">Top 100 sản phẩm T&agrave;i Ch&iacute;nh - Ng&acirc;n H&agrave;ng b&aacute;n chạy của th&aacute;ng</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '1730123930_2023_05_09_16_33_56_1-390x510.webp', 1, '1730123930_2023_05_09_16_33_56_1-390x510.webp,1730123930_2023_05_09_16_33_56_2-390x510.webp,1730123930_2023_05_09_16_33_56_3-390x510.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `vnp_id` int(11) NOT NULL,
  `vnp_amount` varchar(50) NOT NULL,
  `vnp_bankcode` varchar(50) NOT NULL,
  `vnp_banktranno` varchar(50) NOT NULL,
  `vnp_cardtype` varchar(50) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `vnp_paydate` varchar(50) NOT NULL,
  `vnp_tmncode` varchar(50) NOT NULL,
  `vnp_transactionno` varchar(50) NOT NULL,
  `order_code` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`vnp_id`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `order_code`, `payment_status`) VALUES
;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`) USING BTREE;

--
-- Chỉ mục cho bảng `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agent_id`);

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`) USING BTREE;

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`) USING BTREE;

--
-- Chỉ mục cho bảng `capacity`
--
ALTER TABLE `capacity`
  ADD PRIMARY KEY (`capacity_id`) USING BTREE;

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`) USING BTREE;

--
-- Chỉ mục cho bảng `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`collection_id`) USING BTREE;

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`) USING BTREE;

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`) USING BTREE;

--
-- Chỉ mục cho bảng `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`) USING BTREE;

--
-- Chỉ mục cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  ADD PRIMARY KEY (`evaluate_id`) USING BTREE;

--
-- Chỉ mục cho bảng `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`) USING BTREE;

--
-- Chỉ mục cho bảng `inventory_detail`
--
ALTER TABLE `inventory_detail`
  ADD PRIMARY KEY (`inventory_detail_id`) USING BTREE;

--
-- Chỉ mục cho bảng `metrics`
--
ALTER TABLE `metrics`
  ADD PRIMARY KEY (`metric_id`) USING BTREE;

--
-- Chỉ mục cho bảng `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`momo_id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`) USING BTREE;

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`) USING BTREE;

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`) USING BTREE;

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`vnp_id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `agency`
--
ALTER TABLE `agency`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `capacity`
--
ALTER TABLE `capacity`
  MODIFY `capacity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `collection`
--
ALTER TABLE `collection`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  MODIFY `evaluate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `inventory_detail`
--
ALTER TABLE `inventory_detail`
  MODIFY `inventory_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `metrics`
--
ALTER TABLE `metrics`
  MODIFY `metric_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `momo`
--
ALTER TABLE `momo`
  MODIFY `momo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `vnp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
