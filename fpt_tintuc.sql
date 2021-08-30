-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 30, 2021 lúc 02:33 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fpt_tintuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `user_name`, `email`, `password`) VALUES
(8, 'nguyễn đức thành ', 'ndthanh', 'ducthanhnguyen@gmail.com', ' bcef'),
(10, 'nguyen van b', 'nvanb', 'bnguyenvan@gmail.com', ' abcd'),
(11, 'thêm', 'themuser', 'themuser@gmail.com', ' 123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(4, 'Tin Tức Thông Báo'),
(5, 'Chương Trình Đào Tạo'),
(6, 'Thông Tin Giáo Viên'),
(9, 'Ảnh hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_duthituyensinh`
--

CREATE TABLE `tbl_duthituyensinh` (
  `id_duthi` int(10) UNSIGNED NOT NULL,
  `phu_huynh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `So_dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoc_sinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_thang_nam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_duthituyensinh`
--

INSERT INTO `tbl_duthituyensinh` (`id_duthi`, `phu_huynh`, `So_dien_thoai`, `hoc_sinh`, `ngay_thang_nam`) VALUES
(1, 'nguyễn văn A', '0123456789', 'nguyễn văn B', ' 22/11/2013'),
(3, 'nguyễn tấn dũng', '0332868521', 'nguyễn đình c', ' 19/11/1999'),
(4, 'nguyễn tấn dũng2', '0333868521', 'nguyễn đình c2', ' 19/10/1999');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(11) UNSIGNED NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `id_category`, `img`, `tittle`, `quote`, `content`) VALUES
(1, 4, 'chương trình đào tạo.jpg', ' abc', 'abc', 'abc'),
(2, 5, 'chương trình đào tạo.jpg', 'abcd', 'abcd', 'abcd'),
(9, 4, 'chương trình đào tạo.jpg', 'abc', 'abc', '<p>abc</p>\r\n'),
(23, 6, 'gv1.jpg', 'Cô Nguyễn Thị Ngọc Linh', 'Tổ trưởng khối STEM – Tin học; Trình độ: Thạc sỹ; Kinh nghiệm: 13 năm; Thành tích: Giải Nhất Hội thi Giảng viên dạy...', '<p>Tổ trưởng khối STEM &ndash; Tin học;</p>\r\n\r\n<p><strong>Tr&igrave;nh độ:</strong>&nbsp;Thạc sỹ;</p>\r\n\r\n<p><strong>Kinh nghiệm:</strong>&nbsp;13 năm;</p>\r\n\r\n<p><strong>Th&agrave;nh t&iacute;ch:</strong></p>\r\n\r\n<ul>\r\n	<li>Giải Nhất Hội thi Giảng vi&ecirc;n dạy giỏi cấp trường nhiều năm tại Trường Cao đẳng C&ocirc;ng nghệ H&agrave; Nội.</li>\r\n	<li>Chứng nhận Train the trainer &ndash; Đ&agrave;o tạo v&agrave; Huấn luyện nh&acirc;n vi&ecirc;n.</li>\r\n	<li>Chứng nhận &ldquo;Dạy học cho tương lai&rdquo; &ndash; tập đo&agrave;n Intel trong việc ứng dụng CNTT v&agrave;o dạy học.</li>\r\n	<li>Chứng chỉ &ldquo;STEM Teacher Training&rdquo; từ tổ chức EiE, Mỹ.</li>\r\n	<li>Nghi&ecirc;n cứu v&agrave; thử nghiệm th&agrave;nh c&ocirc;ng c&aacute;c dự &aacute;n: Hệ thống pin Năng lượng Mặt trời, Sử dụng vi điều khiển thiết kế quảng c&aacute;o điện tử LED signs, LED matrix; PLC điều khiển hệ thống băng tải ph&acirc;n loại sản phẩm theo m&agrave;u sắc, Nh&agrave; Th&ocirc;ng Minh, &hellip;</li>\r\n</ul>\r\n'),
(24, 5, '', 'PHÁT TRIỂN TIẾNG ANH ỨNG DỤNG', 'FPT English = ESL (English for a second languge – Ngôn ngữ thứ 2) + AE (Applied English – Ứng dụng tiếng Anh trong mọi lĩnh vực)', '<p>Chương tr&igrave;nh FPT English được thiết kế đăc biệt nhằm n&acirc;ng cao chất lượng học tiếng Anh ứng dụng, đảm bảo chuẩn đầu ra Cambridge với đủ cả 4 kỹ năng Nghe &ndash; N&oacute;i &ndash; Đọc &ndash; Viết. Với 100% Gi&aacute;o vi&ecirc;n c&oacute; bằng giảng dạy quốc tế CELTA, TESOL, TEFL, hoặc tốt nghiệp loại giỏi tại c&aacute;c trường ngoại ngữ, sư phạm ngoại ngữ.</p>\r\n\r\n<p>Trong đ&oacute;, 40% thời lượng do GVNN hướng dẫn tập trung kỹ năng n&oacute;i, viết, luyện ngữ &acirc;m v&agrave; luyện c&aacute;c dạng đề Cambridge, PET, KET,&hellip;v&agrave; 60% thời lượng do GVVN giảng dạy ngữ ph&aacute;p, phương ph&aacute;p đọc v&agrave; nghe.</p>\r\n\r\n<p><img alt=\"Học sinh FPT Schools học tiếng anh ứng dụng qua trải nghiệm và hoạt động dự án\" src=\"http://tieuhoc.fpt.edu.vn/wp-content/uploads/2019/01/DSC001951-1.jpg\" /></p>\r\n\r\n<p><strong>Học sinh l&agrave; trung t&acirc;m</strong></p>\r\n\r\n<p>TPR (Total Physical Response) được biết đến l&agrave; phương ph&aacute;p học ngoại ngữ hiện đại v&agrave; ưu việt nhất hiện nay. Tại FPT Schools, TPR tập trung v&agrave;o học sinh v&agrave; gi&uacute;p học sinh ph&aacute;t triển ng&ocirc;n ngữ thứ hai một c&aacute;ch tự nhi&ecirc;n. Phương ph&aacute;p dựa tr&ecirc;n ba nguy&ecirc;n tắc: học th&ocirc;ng qua nghe, vận dụng h&agrave;nh động v&agrave; h&igrave;nh ảnh để ghi nhớ, m&ocirc;i trường học tập thoải m&aacute;i, kh&ocirc;ng &aacute;p lực.</p>\r\n\r\n<p><strong>Đọc:</strong>&nbsp;Học sinh được học Phonics (phương ph&aacute;p dạy đ&aacute;nh vần tiếng Anh, ph&aacute;t &acirc;m tiếng Anh. Học sinh c&oacute; thể học Tiếng Anh tương tự như Tiếng Việt bằng c&aacute;ch đ&aacute;nh vần từng đơn &acirc;m rồi sau đ&oacute; gh&eacute;p lại để đ&aacute;nh vần cả một từ), v&agrave; đọc truyện, thơ. Học sinh được hướng dẫn h&igrave;nh th&agrave;nh th&oacute;i quen nghe v&agrave; đọc lại cho mẹ nghe, ghi &acirc;m v&agrave; gửi lại cho gi&aacute;o vi&ecirc;n nhận x&eacute;t. Đ&acirc;y l&agrave; kỹ năng cơ bản nhất để ph&aacute;t triển ng&ocirc;n ngữ.</p>\r\n\r\n<p><strong>Nghe, n&oacute;i</strong>: Học sinh được học nghe qua c&aacute;c b&agrave;i h&aacute;t, thơ, truyện qua video, đĩa, học phản xạ với Gi&aacute;o vi&ecirc;n nước ngo&agrave;i theo phương ph&aacute;p TPR (Total Physical Response- Phương ph&aacute;p phản xạ to&agrave;n th&acirc;n).</p>\r\n\r\n<p><strong>Viết</strong>: Học sinh được học ngữ ph&aacute;p v&agrave; h&agrave;nh văn theo phương ph&aacute;p hiện đại sẽ luyện viết từ, c&acirc;u, đoạn, c&aacute;ch sử dụng c&aacute;c từ hay, th&oacute;i quen đọc để viết, viết c&aacute;c dạng luận từ tiểu sử c&aacute; nh&acirc;n, đến văn mi&ecirc;u tả, so s&aacute;nh, b&igrave;nh luận, ph&acirc;n t&iacute;ch&hellip;. Học sinh được đ&aacute;nh gi&aacute; tr&igrave;nh độ, gửi k&egrave;m c&aacute;c t&agrave;i liệu bổ trợ v&agrave; giao b&agrave;i h&agrave;ng ng&agrave;y, sửa b&agrave;i viết cũng như c&oacute; lộ tr&igrave;nh mục ti&ecirc;u ri&ecirc;ng.</p>\r\n\r\n<p><strong>&nbsp;Học qua trải nghiệm v&agrave; thực h&agrave;nh dự &aacute;n</strong></p>\r\n\r\n<p><img alt=\"Học sinh FPT Schools học tiếng anh ứng dụng qua trải nghiệm và hoạt động dự án\" src=\"http://tieuhoc.fpt.edu.vn/wp-content/uploads/2019/08/DSC00305.jpg\" /></p>\r\n\r\n<p>&ndash; Trải nghiệm: Một số chủ đề rất th&ocirc;ng dụng như bưu điện, sở th&uacute;, bảo t&agrave;ng, l&agrave;m diều hay vận động học sinh sẽ được đi học qua c&aacute;c buổi d&atilde; ngoại, thực h&agrave;nh thực tế bằng c&aacute;c workshop thủ c&ocirc;ng, vận động gi&uacute;p việc học ng&ocirc;n ngữ thứ hai trở n&ecirc;n gần gũi hơn.</p>\r\n\r\n<p>&ndash; Dự &aacute;n: c&aacute;c m&ocirc;n khoa học học bằng Tiếng Anh, học sinh sẽ được hướng dẫn từ việc h&igrave;nh th&agrave;nh &yacute; tưởng, thiết kế, thử nghiệm, thiết kế lại v&agrave; ho&agrave;n thiện một dự &aacute;n sản phẩm thực sự. Đ&acirc;y l&agrave; c&aacute;c gi&uacute;p học sinh l&agrave;m việc nh&oacute;m, trao đổi với nhau bắt buộc phải sử dụng Tiếng Anh, gi&uacute;p việc giao tiếp bằng ngoại ngữ tự nhi&ecirc;n hơn, th&uacute; vị hơn, s&aacute;ng tạo hơn.</p>\r\n');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_duthituyensinh`
--
ALTER TABLE `tbl_duthituyensinh`
  ADD PRIMARY KEY (`id_duthi`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `quan_he1` (`id_category`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_duthituyensinh`
--
ALTER TABLE `tbl_duthituyensinh`
  MODIFY `id_duthi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `quan_he1` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
