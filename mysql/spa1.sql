-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 21, 2018 lúc 08:49 SA
-- Phiên bản máy phục vụ: 5.7.17-log
-- Phiên bản PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `spa1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_album`
--

CREATE TABLE `table_album` (
  `id` int(11) NOT NULL,
  `tenanh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_album`
--

INSERT INTO `table_album` (`id`, `tenanh`, `ngaytao`) VALUES
(2, '1.jpg', '2018-10-30'),
(3, '2.jpg', '2018-10-30'),
(4, '3.jpg', '2018-10-30'),
(5, '8.jpg', '2018-10-30'),
(6, '9.jpg', '2018-10-30'),
(8, '10.jpg', '2018-10-30'),
(9, '5.jpg', '2018-10-30'),
(10, '6.jpg', '2018-10-30'),
(15, 'gel.jpg', '2018-11-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_chitietdondat`
--

CREATE TABLE `table_chitietdondat` (
  `iddonhangsanpham` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tensanpham` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_chitietdondat`
--

INSERT INTO `table_chitietdondat` (`iddonhangsanpham`, `idsanpham`, `soluong`, `tensanpham`) VALUES
(1, 5, 1, ''),
(2, 10, 1, ''),
(2, 9, 1, ''),
(2, 8, 1, ''),
(3, 8, 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_daotao`
--

CREATE TABLE `table_daotao` (
  `id` int(11) NOT NULL,
  `src` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_daotao`
--

INSERT INTO `table_daotao` (`id`, `src`) VALUES
(1, 'http://localhost/phpmyadmin/tbl_change.php?db=spa1&table=table_daotao&token=5404a58090cb7122983267eeefaf7001yyyy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_dichvu`
--

CREATE TABLE `table_dichvu` (
  `iddichvu` int(11) NOT NULL,
  `tendichvu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `thoiluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idloaidichvu` int(11) NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_dichvu`
--

INSERT INTO `table_dichvu` (`iddichvu`, `tendichvu`, `noidung`, `ngaytao`, `thoiluong`, `gia`, `anh`, `idloaidichvu`, `mota`) VALUES
(1, 'Liệu pháp giảm căng thẳng bằng hương thơm', '<p>Chắt lọc những b&iacute; quyết l&agrave;m đẹp v&agrave; trị liệu thư gi&atilde;n tinh t&uacute;y từ thi&ecirc;n nhi&ecirc;n, Thu C&uacute;c Clinics đem đến liệu ph&aacute;p giảm căng thẳng bằng hương thơm, gi&uacute;p kh&aacute;ch h&agrave;ng nhanh ch&oacute;ng giảm bớt căng thẳng, mệt mỏi, đồng thời l&agrave;n da được chăm ch&uacute;t khoa học, trở n&ecirc;n tươi trẻ, khỏe mạnh v&agrave; đầy sức sống.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Liệu ph&aacute;p giảm căng thẳng bằng hương thơm tại Thu C&uacute;c Clinics thuộc g&oacute;i chăm s&oacute;c da mặt cơ bản, l&agrave; sự kết hợp tuyệt vời giữa việc chăm s&oacute;c da khoa học, massage ấn huyệt chuy&ecirc;n nghiệp bằng tinh dầu v&agrave; sản phẩm chăm s&oacute;c da cao cấp từ thi&ecirc;n nhi&ecirc;n để l&agrave;m đẹp cho kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<div><img alt=\"Tinh dầu là \" class=\"size-full wp-image-61499\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/lieu-phap-giam-cang-thang-bang-huong-thom.jpg\" />\r\n<p>Tinh dầu l&agrave; &ldquo;liều thuốc&rdquo; cho l&agrave;n da v&agrave; tinh thần v&ocirc; c&ugrave;ng hiệu nghiệm.</p>\r\n</div>\r\n\r\n<p>&ndash; Th&ocirc;ng qua khứu gi&aacute;c, tinh dầu c&oacute; t&aacute;c dụng tăng cường sức khỏe tinh thần, giải tỏa căng thẳng, c&acirc;n bằng lại t&acirc;m trạng.</p>\r\n\r\n<p>&ndash; Bản th&acirc;n c&aacute;c loại tinh dầu khi được sử dụng để chăm s&oacute;c da mặt v&agrave; massage cũng c&oacute; t&aacute;c động dược l&yacute;, gi&uacute;p tăng cường sức khỏe tinh thần v&agrave; l&agrave;n da.</p>\r\n\r\n<p>&ndash; Đặc biệt, khi sử dụng tinh dầu thơm kết hợp với massage, nguồn năng lượng xấu sẽ được giải ph&oacute;ng, th&uacute;c đẩy tuần ho&agrave;n m&aacute;u v&agrave; giải tỏa căng thẳng v&ocirc; c&ugrave;ng hữu hiệu.</p>\r\n\r\n<p>&ndash; Với c&aacute;c&nbsp;sản phẩm chăm s&oacute;c da cao cấp thuộc thương hiệu Bioline Jato (&Yacute;) được sử dụng trong liệu ph&aacute;p n&agrave;y sẽ gi&uacute;p tăng cường hiệu quả l&agrave;m đẹp l&ecirc;n gấp 3 lần.</p>\r\n\r\n<div>\r\n<h3>Hiệu quả của liệu ph&aacute;p giảm căng thẳng bằng hương thơm tại Thu C&uacute;c Clinics</h3>\r\n\r\n<div><img alt=\"Gương mặt rạng rỡ, tràn đầy sinh lực sau khi trải nghiệm liệu pháp giảm căng thẳng bằng hương thơm tại Thu Cúc Clinics.\" class=\"size-full wp-image-61500\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/lieu-phap-giam-cang-thang-bang-huong-thom-2.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Gương mặt rạng rỡ, tr&agrave;n đầy sinh lực sau khi trải nghiệm liệu ph&aacute;p giảm căng thẳng bằng hương thơm tại Thu C&uacute;c Clinics.</p>\r\n</div>\r\n\r\n<ul>\r\n	<li>L&agrave;n da được cấp ẩm v&agrave; bổ sung dưỡng chất, cho da trắng s&aacute;ng tự nhi&ecirc;n</li>\r\n	<li>Giải tỏa căng thẳng, thư gi&atilde;n tinh thần v&agrave; sẵn s&agrave;ng năng lượng cho cuộc sống thường nhật.</li>\r\n	<li>Cảm nhận vẻ tươi trẻ của l&agrave;n da v&agrave; sức sống mới ngay sau khi thực hiện.</li>\r\n</ul>\r\n\r\n<h3>Liệu ph&aacute;p giảm căng thẳng bằng hương thơm ph&ugrave; hợp với ai?</h3>\r\n\r\n<div><img alt=\"Nếu stress khiến bạn mệt mỏi và da thâm xỉn kém sức sống thì trải nghiệm liệu pháp giảm căng thẳng bằng hương thơm tại Thu Cúc Clinics là gợi ý lý tưởng dành cho bạn.\" class=\"size-full wp-image-61501\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/lieu-phap-giam-cang-thang-bang-huong-thom-3.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Nếu stress khiến bạn mệt mỏi v&agrave; da th&acirc;m xỉn k&eacute;m sức sống th&igrave; trải nghiệm liệu ph&aacute;p giảm căng thẳng bằng hương thơm tại Thu C&uacute;c Clinics l&agrave; gợi &yacute; l&yacute; tưởng d&agrave;nh cho bạn.</p>\r\n</div>\r\n\r\n<ul>\r\n	<li>L&agrave;n da c&oacute; những biểu hiện thiếu sức sống như: kh&ocirc;, th&acirc;m sạm, ch&ugrave;ng xệ</li>\r\n	<li>Da mẫn cảm do t&iacute;ch tụ nhiều độc tố, biểu hiện ở t&igrave;nh trạng ngứa, dị ứng, mụn trứng c&aacute; nổi l&ecirc;n&hellip;</li>\r\n	<li>Người c&oacute; cuộc sống thường nhật bận rộn, cần chăm s&oacute;c da v&agrave; thư gi&atilde;n tinh thần.</li>\r\n</ul>\r\n\r\n<h3>Ưu điểm của liệu ph&aacute;p giảm căng thẳng bằng hương thơm tại Thu C&uacute;c Clinics</h3>\r\n\r\n<div><img alt=\"Khách hàng đang thư giãn khi chăm sóc da tại Thu Cúc Clinics.\" class=\"size-full wp-image-61502\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/lieu-phap-giam-cang-thang-bang-huong-thom-4.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Kh&aacute;ch h&agrave;ng đang thư gi&atilde;n khi chăm s&oacute;c da tại Thu C&uacute;c Clinics.</p>\r\n</div>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Sử dụng tinh dầu v&agrave; sản phẩm chăm s&oacute;c da cao cấp, th&acirc;n thiện với da, chiết xuất từ thi&ecirc;n nhi&ecirc;n</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Kỹ thuật vi&ecirc;n được trang bị đầy đủ kiến thức, kỹ năng thực hiện c&aacute;c thao t&aacute;c massage bấm huyệt chuy&ecirc;n nghiệp, b&agrave;i bản, cho kh&aacute;ch h&agrave;ng c&oacute; trải nghiệm thoải m&aacute;i, thư gi&atilde;n tối đa.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Kh&ocirc;ng gian cao cấp,sang trọng v&agrave; tinh tế, vừa tạo cảm gi&aacute;c hiện đại, vừa ấm c&uacute;ng, tạo cảm gi&aacute;c thư gi&atilde;n, tận hưởng.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Phục vụ kh&aacute;ch h&agrave;ng chu đ&aacute;o, chuy&ecirc;n nghiệp, tận t&acirc;m.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Dịch vụ đ&oacute;n tiếp, chăm s&oacute;c kh&aacute;ch h&agrave;ng trước &ndash; trong &ndash; sau trải nghiệm l&agrave;m đẹp tại Thu C&uacute;c Clinic chuy&ecirc;n nghiệp, tận t&acirc;m.</p>\r\n\r\n<h3>Quy tr&igrave;nh thực hiện liệu ph&aacute;p giảm căng thẳng bằng hương thơm tại Thu C&uacute;c Clinics</h3>\r\n\r\n<div><img alt=\"Chuyên viên Thu Cúc Clinics đang massage bấm huyệt cho khách hàng.\" class=\"size-full wp-image-61503\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/lieu-phap-giam-cang-thang-bang-huong-thom-5.jpg\" style=\"height:356px; width:500px\" />\r\n<p>Chuy&ecirc;n vi&ecirc;n Thu C&uacute;c Clinics đang massage bấm huyệt cho kh&aacute;ch h&agrave;ng.</p>\r\n</div>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 1:&nbsp;Tẩy trang, rửa mặt v&agrave; tẩy tế b&agrave;o chết cho da bằng c&aacute;c sản phẩm ph&ugrave; hợp.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 2:&nbsp;X&ocirc;ng hơi, h&uacute;t dầu để l&agrave;m sạch s&acirc;u v&agrave; mềm da</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 3: Massage bấm huyệt với tinh dầu v&agrave; kem massage cao cấp</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 4: Đắp mặt nạ</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 5: Thoa nước hoa hồng, kem dưỡng v&agrave; kem chống nắng.</p>\r\n\r\n<h3>Thời gian v&agrave; chi ph&iacute;</h3>\r\n\r\n<p><img alt=\"Chuyên viên Thu Cúc Clinics đang massage bấm huyệt cho khách hàng.\" class=\"aligncenter size-full wp-image-61504\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/lieu-phap-giam-cang-thang-bang-huong-thom.jpg5_.png\" style=\"height:221px; width:630px\" /></p>\r\n</div>\r\n\r\n<div>&nbsp;</div>\r\n', '2018-11-06', 70, 598000, 'hinh-anh-collagen-1.jpg', 1, ''),
(2, 'Cung cấp sức sống cho làn da', '<p>Khi mất đi sức đề kh&aacute;ng, l&agrave;n da sẽ thường c&oacute; biểu hiện th&acirc;m sạm, sỉn m&agrave;u v&agrave; k&eacute;m duy&ecirc;n. Tuy nhi&ecirc;n, với liệu ph&aacute;p cung cấp sức sống cho l&agrave;n da, Thu C&uacute;c Clinics &ndash; thương hiệu chăm s&oacute;c v&agrave; đặc trị đ&atilde; hơn 20 năm dẫn đầu khu vực, sẽ gi&uacute;p chị em giải tỏa nỗi lo lắng n&agrave;y.</p>\r\n\r\n<p>Liệu ph&aacute;p cung cấp sức sống cho l&agrave;n da&nbsp;l&agrave; một trong c&aacute;c g&oacute;i chăm s&oacute;c da mặt cơ bản tại Thu C&uacute;c Clincs c&oacute; sử dụng sản phẩm l&agrave;m đẹp chiết xuất từ thi&ecirc;n nhi&ecirc;n như: t&aacute;o đỏ, đường đỏ, axit hyaluronics&hellip; k&egrave;m theo đ&oacute; với h&agrave;ng loạt c&aacute;c c&ocirc;ng dụng tuyệt vời:</p>\r\n\r\n<div><img alt=\"Làn da sau khi được cung cấp sức sống sẽ trở nên mịn màng, tươi sáng thu hút ánh nhìn của người đối diện\" class=\"size-full wp-image-61506\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cung-cap-suc-song-cho-lan-da.jpg1_.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Cung cấp sức sống cho l&agrave;n da l&agrave; liệu ph&aacute;p l&agrave;m đẹp được nhiều chị em tin chọn</p>\r\n</div>\r\n\r\n<p>&bull; Tăng cường sức đề kh&aacute;ng v&agrave; t&iacute;nh đ&agrave;n hồi cho l&agrave;n da.</p>\r\n\r\n<p>&bull; L&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a da, ức chế v&agrave; ngăn ngừa sự xuất hiện c&aacute;c nếp nhăn, vết ch&acirc;n chim, vết th&acirc;m n&aacute;m&hellip;</p>\r\n\r\n<p>&bull; C&acirc;n bằng độ ẩm, chống mất nước cho l&agrave;n da vượt trội.</p>\r\n\r\n<div>\r\n<h3>Hiệu quả của liệu ph&aacute;p cung cấp sức sống cho l&agrave;n da</h3>\r\n\r\n<div><img alt=\"Làn da sau khi được cung cấp sức sống sẽ trở nên mịn màng, tươi sáng thu hút ánh nhìn của người đối diện\" class=\"size-full wp-image-61508\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cung-cap-suc-song-cho-lan-da.jpg2_.jpg\" style=\"height:337px; width:500px\" />\r\n<p>L&agrave;n da sau khi được cung cấp sức sống sẽ trở n&ecirc;n mịn m&agrave;ng, tươi s&aacute;ng thu h&uacute;t &aacute;nh nh&igrave;n của người đối diện</p>\r\n</div>\r\n\r\n<p>&bull; Da săn chắc, căng mịn, trắng hồng rạng rỡ khỏe mạnh từ b&ecirc;n trong.</p>\r\n\r\n<p>&bull; Hiệu quả trẻ h&oacute;a l&acirc;u, duy tr&igrave; l&agrave;n da tươi mới tuổi thanh xu&acirc;n.</p>\r\n\r\n<p>&bull; Ngăn chặn nếp nhăn, vết ch&acirc;n chim xuất hiện.</p>\r\n\r\n<h3>Liệu ph&aacute;p cung cấp sức sống cho l&agrave;n da ph&ugrave; hợp với ai?</h3>\r\n\r\n<div><img alt=\"Làn da tham sạm, sỉn màu phù hợp với liệu pháp cung cấp sức sống này\" class=\"size-full wp-image-61510\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cung-cap-suc-song-cho-lan-da.jpg4_.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Cải thiện l&agrave;n da thậm sạm, k&eacute;m duy&ecirc;n bằng liệu ph&aacute;p cung cấp sức sống cho l&agrave;n da tại Thu C&uacute;c Clinics</p>\r\n</div>\r\n\r\n<p>&bull; Kh&aacute;ch h&agrave;ng muốn duy tr&igrave; một l&agrave;n da tươi mới, rạng ngời.</p>\r\n\r\n<p>&bull; Người c&oacute; l&agrave;n da bị l&atilde;o h&oacute;a v&agrave; xuất hiện những vấn đề như vết th&acirc;m sạm, vết ch&acirc;n chim, da bị chảy xệ&hellip;</p>\r\n\r\n<p>&bull; Kh&aacute;ch h&agrave;ng c&oacute; l&agrave;n da xỉn m&agrave;u, tr&ocirc;ng thiếu sức sống v&agrave; k&eacute;m duy&ecirc;n&hellip;</p>\r\n\r\n<h3>Ưu điểm của liệu ph&aacute;p cung cấp sức sống cho l&agrave;n da</h3>\r\n\r\n<div><img alt=\"Liệu pháp cung cấp sức sống cho làn da tại Thu Cúc Clinics có sử dụng bộ sản phẩm cao cấp Bioline có thành phần chiết xuất từ thiên nhiên\" class=\"size-full wp-image-61509\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cung-cap-suc-song-cho-lan-da.jpg3_.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Liệu ph&aacute;p cung cấp sức sống cho l&agrave;n da tại Thu C&uacute;c Clinics sử dụng bộ sản phẩm cao cấp Bioline c&oacute; th&agrave;nh phần chiết xuất từ thi&ecirc;n nhi&ecirc;n</p>\r\n</div>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> &nbsp;Đội ngũ chuy&ecirc;n gia, b&aacute;c sĩ thẩm mỹ dẫn đầu khu vực, b&ecirc;n cạnh đố đội ngũ chuy&ecirc;n vi&ecirc;n được đ&agrave;o tạo tay nghề giỏi v&agrave; gi&agrave;u kinh nghiệm.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> &nbsp;Ưu điểm của liệu ph&aacute;p cung cấp sức sống cho l&agrave;n da Thu C&uacute;c Clinics l&agrave; thương hiệu h&agrave;ng đầu trong việc chăm s&oacute;c cũng như x&oacute;a tan mọi vấn đề về da.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> &nbsp;Quy tr&igrave;nh thực hiện khoa học b&agrave;i bản v&agrave; chuy&ecirc;n biệt, đem đến hiệu quả thẩm mỹ r&otilde; rệt. C&aacute;c sản phẩm tẩy trang, rửa mặt, sản phẩm hỗ trợ&hellip; được chiết xuất th&agrave;nh phần tự nhi&ecirc;n an to&agrave;n, th&acirc;n thiện v&agrave; ph&ugrave; hợp với mọi loại da.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> &nbsp;Kh&ocirc;ng gian thư gi&atilde;n l&yacute; tưởng, sang trọng v&agrave; y&ecirc;n tĩnh, c&ugrave;ng hương thơm dịu nhẹ từ tinh dầu thi&ecirc;n nhi&ecirc;n h&ograve;a quyện trong bản nhạc du dương dịu nhẹ, tạo cảm gi&aacute;c thư gi&atilde;n trọn vẹn.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> &nbsp;Phong c&aacute;ch l&agrave;m việc chuy&ecirc;n nghiệp, dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng chu đ&aacute;o, tận t&acirc;m.</p>\r\n\r\n<h3>Quy tr&igrave;nh thực hiện dịch vụ cung cấp sức sống cho l&agrave;n da</h3>\r\n\r\n<div><img alt=\"Phương pháp chăm sóc da tại Thu Cúc Clinics được tiến hành theo đúng các bước\" class=\"size-full wp-image-61507\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cung-cap-suc-song-cho-lan-da.jpg5_.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Phương ph&aacute;p chăm s&oacute;c da tại Thu C&uacute;c Clinics được tiến h&agrave;nh theo đ&uacute;ng c&aacute;c bước, b&agrave;i bản chuy&ecirc;n biệt nhằm đem đến hiệu quả cho kh&aacute;ch h&agrave;ng</p>\r\n</div>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 1: Tẩy trang (đối với kh&aacute;ch h&agrave;ng c&oacute; trang điểm) v&agrave; l&agrave;m sạch da bằng c&aacute;c d&ograve;ng sản phẩm Bioline Jato ph&ugrave; hợp với đặc điểm da.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 2: Rửa mặt, loại bỏ tế b&agrave;o gi&agrave; cỗi tr&ecirc;n bề mặt da một c&aacute;ch nhẹ nh&agrave;ng, gi&uacute;p da tươi s&aacute;ng hơn v&agrave; hấp thu c&aacute;c dưỡng chất tốt hơn.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 3: X&ocirc;ng hơi, massage để loại bỏ b&atilde; nhờn, bụi bẩn ẩn s&acirc;u trong nang l&ocirc;ng v&agrave; k&iacute;ch th&iacute;ch tuần ho&agrave;n m&aacute;u, cho l&agrave;n da được thư gi&atilde;n.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 4: Đắp mặt nạ cung cấp c&aacute;c dưỡng chất gi&uacute;p nu&ocirc;i dưỡng da, giữ ẩm v&agrave; l&agrave;m mềm da, cho da s&aacute;ng mịn, tươi trẻ.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" style=\"height:15px; width:15px\" /> Bước 5: Thoa kem dưỡng da, kem chống nắng thuộc thương hiệu Bioline Jato để bảo vệ da gấp 3 lần so với c&aacute;c sản phẩm th&ocirc;ng thường.</p>\r\n\r\n<h3>Thời gian &amp; chi ph&iacute;</h3>\r\n\r\n<p><img alt=\"cung-cap-suc-song-cho-lan-da-jpg6_\" class=\"aligncenter size-full wp-image-61511\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cung-cap-suc-song-cho-lan-da.jpg6_.png\" style=\"height:221px; width:630px\" /></p>\r\n</div>\r\n\r\n<p>Kh&aacute;ch h&agrave;ng đ&aacute;nh gi&aacute;</p>\r\n\r\n<p>&ldquo;Trước đ&acirc;y da m&igrave;nh th&ocirc; r&aacute;p sần s&ugrave;i nh&igrave;n k&eacute;m duy&ecirc;n lắm, nhưng sau khi &aacute;p dụng liệu ph&aacute;p cung cấp sức sống cho l&agrave;n da tại Thu C&uacute;c Clincis, m&igrave;nh đ&atilde; lấy lại tự tin với vẻ bề ngo&agrave;i của bản th&acirc;n. Những nhược điểm trước kia kh&ocirc;ng những được loại bỏ, l&agrave;n da c&ograve;n s&aacute;ng mịn, tươi tắn l&ecirc;n rất nhiều. B&acirc;y giờ c&oacute; ai hỏi địa chỉ chăm s&oacute;c da n&agrave;o hiệu quả nhất, m&igrave;nh sẽ chẳng ngần ngại giới thiệu ngay tới Thu C&uacute;c Clinics&rdquo; &ndash; Chị Ng&ocirc; Ho&agrave;ng (28 tuổi &ndash; nh&acirc;n vi&ecirc;n kế to&aacute;n) chia sẻ</p>\r\n\r\n<p>C&aacute;c Dịch vụ kh&aacute;c được nhiều người quan t&acirc;m</p>\r\n\r\n<p>Ngo&agrave;i g&oacute;i cung cấp sức sống cho l&agrave;n da chăm s&oacute;c da mặt tại Spa Thu C&uacute;c &ndash; Thu C&uacute;c Clinics c&ograve;n c&oacute; c&aacute;c g&oacute;i kh&aacute;c, bạn c&oacute; thể &aacute;p dụng để chăm s&oacute;c da mặt hiệu quả hơn.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> <a href=\"https://spathucuc.vn/cham-soc-da-mat-co-ban-bang-vitamin-c\">Chăm s&oacute;c da mặt cơ bản bằng vitamin C</a></p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> <a href=\"https://spathucuc.vn/cham-soc-da-mat-kho-lao-hoa-bang-vitamin-e\">Chăm s&oacute;c da mặt kh&ocirc;, l&atilde;o h&oacute;a bằng vitamin E</a></p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> <a href=\"https://spathucuc.vn/cham-soc-da-mat-bang-thuoc-bac\">Chăm s&oacute;c da mặt bằng thuốc bắc</a></p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> <a href=\"https://spathucuc.vn/cham-soc-da-mat-bang-mat-ong-sua-chua\">Chăm s&oacute;c da mặt bằng mật ong, sữa chua</a></p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> <a href=\"https://spathucuc.vn/cai-thien-da-lao-hoa-nho-collagen-sinh-hoc\">Cải thiện da l&atilde;o h&oacute;a nhờ collagen sinh học</a></p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> <a href=\"https://spathucuc.vn/lieu-phap-giam-cang-thang-bang-huong-thom\">Liệu ph&aacute;p giảm căng thẳng bằng hương thơm</a></p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> <a href=\"https://spathucuc.vn/thanh-loc-da-tieu-chuan\">Thanh lọc da ti&ecirc;u chuẩn</a></p>\r\n', '2018-11-06', 70, 418000, 'mat-na-tre-hoa-trang-hong.jpg', 1, ''),
(3, 'Cải thiện chăm sóc da lão hóa bằng collagen sinh học', '<p>Với liệu ph&aacute;p <strong>chăm s&oacute;c da l&atilde;o h&oacute;a bằng collagen</strong> sinh học tại Thu C&uacute;c Clinics, c&aacute;c eva sẽ dễ d&agrave;ng trẻ h&oacute;a gương mặt, đưa da trở về trạng th&aacute;i c&acirc;n bằng, tươi trẻ, rạng rỡ v&agrave; căng tr&agrave;n sức sống.</p>\r\n\r\n<p>Collagen l&agrave; th&agrave;nh phần protein tự nhi&ecirc;n đ&oacute;ng vai tr&ograve; cấu tr&uacute;c da, quyết định tới t&iacute;nh đ&agrave;n hồi, săn chắc v&agrave; khỏe mạnh. Theo thời gian, qu&aacute; tr&igrave;nh sản sinh collagen tự nhi&ecirc;n của cơ thể bị suy giảm, trong khi đ&oacute; cấu tr&uacute;c của c&aacute;c sợi n&agrave;y dần trở n&ecirc;n suy yếu, đứt g&atilde;y v&agrave; kh&ocirc;ng c&ograve;n khả năng chống đỡ cho da như ban đầu, dẫn tới h&agrave;ng loạt vấn đề như: da h&igrave;nh th&agrave;nh đường nhăn, nếp gấp, trở n&ecirc;n sần s&ugrave;i mỏng yếu.</p>\r\n\r\n<div><img alt=\"Sự suy giảm collagen ở phần thân bì là nguyên nhân khiến da bị lão hóa.\" class=\"size-full wp-image-61489\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cai-thien-da-lao-hoa-nho-collagen-sinh-hoc.jpg\" style=\"height:375px; width:500px\" />\r\n<p>Sự suy giảm collagen ở phần th&acirc;n b&igrave; l&agrave; nguy&ecirc;n nh&acirc;n khiến da bị l&atilde;o h&oacute;a.</p>\r\n</div>\r\n\r\n<p>Ch&iacute;nh v&igrave; vậy, việc chăm s&oacute;c v&agrave; l&agrave;m đẹp da với loại protein tự nhi&ecirc;n n&agrave;y sẽ gi&uacute;p cho da khỏe mạnh, x&oacute;a mờ nếp nhăn v&agrave; trẻ h&oacute;a l&agrave;n da. Liệu ph&aacute;p chăm s&oacute;c da l&atilde;o h&oacute;a bằng collagen sinh học tại Thu C&uacute;c Clincis l&agrave; giải ph&aacute;p l&yacute; tưởng d&agrave;nh cho c&aacute;c t&iacute;n đồ l&agrave;m đẹp.</p>\r\n\r\n<div>\r\n<h2>Chăm s&oacute;c da l&atilde;o h&oacute;a bằng collaen sinh học hiệu quả thế n&agrave;o</h2>\r\n\r\n<div><img alt=\"Làn da tươi trẻ nhờ chăm sóc da định kỳ với liệu pháp cải thiện làn da lão hóa bằng collagen sinh học tại Thu Cúc Clinics.\" class=\"size-full wp-image-61490\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cai-thien-da-lao-hoa-nho-collagen-sinh-hoc-2.jpg\" style=\"height:333px; width:500px\" />\r\n<p>L&agrave;n da tươi trẻ nhờ chăm s&oacute;c da định kỳ với liệu ph&aacute;p cải thiện l&agrave;n da l&atilde;o h&oacute;a bằng collagen sinh học tại Thu C&uacute;c Clinics.</p>\r\n</div>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Da được cấp ẩm v&agrave; bổ sung h&agrave;ng loạt dưỡng chất cần thiết</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Bước massage chuy&ecirc;n nghiệp sẽ gi&uacute;p lưu th&ocirc;ng tuần ho&agrave;n m&aacute;u, cho da săn chắc, hồng h&agrave;o, khỏe mạnh</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Cấu tr&uacute;c da được củng cố, trở n&ecirc;n săn chắc, trẻ h&oacute;a v&agrave; đầy sức sống</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Cải thiện sắc tố l&agrave;n da.</p>\r\n\r\n<h3><strong>spa chăm s&oacute;c da l&atilde;o h&oacute;a bằng Collagen sinh học ph&ugrave; hợp với ai?</strong></h3>\r\n\r\n<div><img alt=\"Liệu pháp cải thiện da lão hóa nhờ collagen sinh học phù hợp với các chị em từ độ tuổi 30+ trở lên, khi tình trạng lão hóa bắt đầu biểu hiện rõ nét.\" class=\"size-full wp-image-61491\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cai-thien-da-lao-hoa-nho-collagen-sinh-hoc-3.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Liệu ph&aacute;p cải thiện da l&atilde;o h&oacute;a nhờ collagen sinh học ph&ugrave; hợp với c&aacute;c chị em từ độ tuổi 30+ trở l&ecirc;n, khi t&igrave;nh trạng l&atilde;o h&oacute;a bắt đầu biểu hiện r&otilde; n&eacute;t.</p>\r\n</div>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Kh&aacute;ch h&agrave;ng nam nữ c&oacute; nhu cầu chăm s&oacute;c da chuy&ecirc;n nghiệp, khoa học</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Da c&oacute; biểu hiện l&atilde;o h&oacute;a như: da nhăn ch&ugrave;ng, chảy xệ, mỏng yếu, th&acirc;m sạm</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Kh&aacute;ch h&agrave;ng muốn trẻ h&oacute;a da, l&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a.</p>\r\n\r\n<h3><strong>Ưu điểm của spa chăm s&oacute;c da bằng collagen sinh học tại Thu C&uacute;c Clinics</strong></h3>\r\n\r\n<div><img alt=\"Các chuyên gia, bác sĩ và đội ngũ chuyên viên giỏi tại Thu Cúc Clinics sẽ giúp cho khách hàng có những trải nghiệm dịch vụ chuyên nghiệp và hài lòng vs kết quả làm đẹp.\" class=\"size-full wp-image-61492\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cai-thien-da-lao-hoa-nho-collagen-sinh-hoc-4.jpg\" style=\"height:333px; width:500px\" />\r\n<p>C&aacute;c chuy&ecirc;n gia, b&aacute;c sĩ v&agrave; đội ngũ chuy&ecirc;n vi&ecirc;n giỏi tại Thu C&uacute;c Clinics sẽ gi&uacute;p cho kh&aacute;ch h&agrave;ng c&oacute; những trải nghiệm dịch vụ chuy&ecirc;n nghiệp v&agrave; h&agrave;i l&ograve;ng vs kết quả l&agrave;m đẹp.</p>\r\n</div>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Thu C&uacute;c Clinics c&oacute; bề d&agrave;y kinh nghiệm được t&iacute;ch lũy từ năm 1996 v&agrave; li&ecirc;n tục ho&agrave;n thiện chất lượng dịch vụ, mở rộng hệ thống với h&agrave;ng loạt c&aacute;c cơ sở l&agrave;m đẹp cao cấp tr&ecirc;n to&agrave;n quốc, đem lại sự thuận tiện cho c&aacute;c kh&aacute;ch h&agrave;ng l&agrave;m đẹp.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Sử dụng d&ograve;ng sản phẩm cao cấp, c&oacute; chiết xuất từ tự nhi&ecirc;n, đến từ thương hiệu Bioline Jato (&Yacute;) v&agrave; độc quyền tại Thu C&uacute;c.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Kh&aacute;ch h&agrave;ng sẽ được c&aacute;c b&aacute;c sĩ, chuy&ecirc;n gia đầu ng&agrave;nh thăm kh&aacute;m, tư vấn về giải ph&aacute;p chăm s&oacute;c, l&agrave;m đẹp ph&ugrave; hợp nhất với t&igrave;nh trạng l&agrave;n da của m&igrave;nh.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Trực tiếp thực hiện dịch vụ l&agrave; c&aacute;c điều dưỡng vi&ecirc;n được tuyển chọn khắt khe v&agrave; đ&agrave;o tạo b&agrave;i bản, đảm bảo vững chuy&ecirc;n m&ocirc;n v&agrave; tay nghề thực h&agrave;nh.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Thu C&uacute;c Clinics c&oacute; cơ sở vật chất khang trang, hiện đại, trang thiết bị cao cấp, c&ocirc;ng nghệ tối t&acirc;n.</p>\r\n\r\n<p><img alt=\"➡\" class=\"emoji\" src=\"https://s.w.org/images/core/emoji/2.3/svg/27a1.svg\" /> Phục vụ kh&aacute;ch h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o, tận t&acirc;m.</p>\r\n\r\n<h3>Quy tr&igrave;nh thực hiện liệu ph&aacute;p chăm s&oacute;c da bằng collagen sinh học</h3>\r\n\r\n<div><img alt=\"Khách hàng đang thư giãn khi kỹ thuật viên Thu Cúc tiến hành massage mặt trước khi đắp mặt nạ collagen sinh học.\" class=\"size-full wp-image-61493\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cai-thien-da-lao-hoa-nho-collagen-sinh-hoc-5.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Kh&aacute;ch h&agrave;ng đang thư gi&atilde;n khi kỹ thuật vi&ecirc;n Thu C&uacute;c tiến h&agrave;nh massage mặt trước khi đắp mặt nạ collagen sinh học.</p>\r\n</div>\r\n\r\n<p>Bước 1:&nbsp;L&agrave;m sạch da, bao gồm tẩy trang, rửa mặt, tẩy da chết v&agrave; x&ocirc;ng hơi, h&uacute;t dầu.</p>\r\n\r\n<p>Bước 2:&nbsp;Massage mặt để th&uacute;c đẩy tuần ho&agrave;n m&aacute;u dưới da.</p>\r\n\r\n<p>Bước 3:&nbsp;Đắp mặt nạ collagen sinh học bằng sản phẩm Bioline Jato cao cấp</p>\r\n\r\n<p>Bước 4:&nbsp;Sử dụng nước hoa hồng v&agrave; thoa kem dưỡng ph&ugrave; hợp với l&agrave;n da</p>\r\n\r\n<p>Bước 5:&nbsp;B&ocirc;i kem chống nắng v&agrave; kết th&uacute;c liệu tr&igrave;nh.</p>\r\n\r\n<h3>Thời gian &amp; Chi ph&iacute; chăm s&oacute;c da l&atilde;o h&oacute;a bằng colaagen sinh học</h3>\r\n\r\n<p><img alt=\"cai-thien-da-lao-hoa-bang-collagen-sinh-hoc\" class=\"aligncenter size-full wp-image-61494\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cai-thien-da-lao-hoa-bang-collagen-sinh-hoc.png\" style=\"height:221px; width:630px\" /></p>\r\n</div>\r\n\r\n<p><strong>Kh&aacute;ch h&agrave;ng đ&aacute;nh gi&aacute;</strong></p>\r\n\r\n<p><em>&ldquo;Sau 1 lần trải nghiệm liệu ph&aacute;p <a href=\"https://spathucuc.vn/cai-thien-da-lao-hoa-nho-collagen-sinh-hoc\">chăm s&oacute;c da l&atilde;o h&oacute;a bằng Collagen sinh học</a> tại Thu C&uacute;c Clinics, l&agrave;n da m&igrave;nh đ&atilde; trở n&ecirc;n tươi s&aacute;ng, căng mịn v&agrave; rạng rỡ hơn hẳn. &Ocirc;ng x&atilde; c&ograve;n khuyến kh&iacute;ch m&igrave;nh đi chăm s&oacute;c da định kỳ tại đ&acirc;y để l&uacute;c n&agrave;o cũng tr&ocirc;ng trẻ trung v&agrave; tự tin thế n&agrave;y&rdquo;. Chị Quỳnh Phương (30 tuổi, Tuy&ecirc;n Quang) chia sẻ.</em></p>\r\n', '2018-11-06', 70, 418000, 'sieu-tre-hoa-da3.jpg', 2, ''),
(4, 'Chăm sóc da nhạy cảm bằng tinh chất Việt Quất Đen', '<p>&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>Với liệu ph&aacute;p chăm s&oacute;c phục hồi da nhạy cảm bằng tinh chất Việt Quất Đen tại Thu C&uacute;c Clinics, l&agrave;n da sẽ được tăng cường sức đề kh&aacute;ng v&agrave; nu&ocirc;i dưỡng da s&aacute;ng khỏe từ b&ecirc;n trong.</p>\r\n\r\n<p>L&agrave;n da nhạy cảm rất mỏng manh, dễ bị k&iacute;ch ứng v&agrave; tổn thương n&ecirc;n cần được chăm s&oacute;c bằng phương ph&aacute;p đặc biệt.&nbsp;Tại Thu C&uacute;c Clinics, liệu ph&aacute;p chăm s&oacute;c da nhạy cảm bằng tinh chất Việt Quất Đen được thiết kế ri&ecirc;ng cho l&agrave;n da nhạy cảm, gi&uacute;p phục hồi c&aacute;c thương tổn, cải thiện khuyết điểm tr&ecirc;n gương mặt v&agrave;&nbsp;cung cấp h&agrave;ng loạt c&aacute;c dưỡng chất cần thiết cho da một c&aacute;ch an to&agrave;n, nhẹ dịu m&agrave; kh&ocirc;ng lo bị k&iacute;ch ứng.</p>\r\n\r\n<div>\r\n<h2>Hiệu quả của liệu ph&aacute;p chăm s&oacute;c da nhạy cảm bằng tinh chất Việt Quất Đen</h2>\r\n\r\n<div><img alt=\"Chăm sóc da định kỳ với sản phẩm dịu nhẹ phù hợp giúp tăng cường sức đề kháng cho da nhạy cảm.\" class=\"size-full wp-image-61587\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cham-soc-phuc-hoi-da-nhay-cam-bang-tinh-chat-viet-quat-den.jpg\" style=\"height:312px; width:500px\" />\r\n<p>Chăm s&oacute;c da định kỳ với sản phẩm dịu nhẹ ph&ugrave; hợp gi&uacute;p tăng cường sức đề kh&aacute;ng cho da nhạy cảm.</p>\r\n</div>\r\n\r\n<ul>\r\n	<li>Chăm s&oacute;c da mặt nhạy cảm chuy&ecirc;n biệt gi&uacute;p da s&aacute;ng khỏe từ b&ecirc;n trong.</li>\r\n	<li>Tăng cường sức đề kh&aacute;ng với c&aacute;c yếu tố g&acirc;y gại từ m&ocirc;i trường</li>\r\n	<li>Phục hồi sức khỏe l&agrave;n da nhạy cảm</li>\r\n	<li>Da săn chắc, căng mịn, tươi tắn tự nhi&ecirc;n</li>\r\n</ul>\r\n\r\n<h3>Chăm s&oacute;c da mặt nhạy cảm bằng Việt Quất Đen ph&ugrave; hợp với ai?</h3>\r\n\r\n<div><img alt=\"Những người có làn da nhạy cảm cần được chăm sóc đặc biệt.\" class=\"size-full wp-image-61588\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cham-soc-phuc-hoi-da-nhay-cam-bang-tinh-chat-viet-quat-den-2.jpg\" style=\"height:305px; width:500px\" />\r\n<p>Những người c&oacute; l&agrave;n da nhạy cảm cần được chăm s&oacute;c đặc biệt.</p>\r\n</div>\r\n\r\n<ul>\r\n	<li>Kh&aacute;ch h&agrave;ng nam/ nữ sở hữu da nhạy cảm do yếu tố di truyền.</li>\r\n	<li>Da nhạy cảm do c&aacute;c yếu tố b&ecirc;n ngo&agrave;i như sử dụng mỹ phẩm, m&ocirc;i trường &ocirc; nhiễm, &aacute;nh nắng&hellip;</li>\r\n	<li>Da dễ bị k&iacute;ch ứng với mỹ phẩm, sản phẩm chăm s&oacute;c da tại nh&agrave;&hellip;</li>\r\n</ul>\r\n\r\n<h3>Ưu điểm chăm s&oacute;c da nhạy cảm bằng tinh chất Việt Quất Đen</h3>\r\n\r\n<div><img alt=\"Làn da khách hàng được chăm chút cẩn thận với sản phẩm cao cấp, đảm bảo an toàn và nhẹ dịu với làn da nhạy cảm.\" class=\"size-full wp-image-61589\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cham-soc-phuc-hoi-da-nhay-cam-bang-tinh-chat-viet-quat-den-3.jpg\" style=\"height:333px; width:500px\" />\r\n<p>L&agrave;n da kh&aacute;ch h&agrave;ng được chăm ch&uacute;t cẩn thận với&nbsp;sản phẩm cao cấp, đảm bảo an to&agrave;n v&agrave; nhẹ dịu với l&agrave;n da nhạy cảm.</p>\r\n</div>\r\n\r\n<ul>\r\n	<li>Sử dụng d&ograve;ng sản phẩm dưỡng da cao cấp Bioline Jato chiết xuất từ quả Việt Quất Đen d&agrave;nh ri&ecirc;ng cho da nhạy cảm.</li>\r\n	<li>Quy tr&igrave;nh <a href=\"https://spathucuc.vn/cham-soc-da-mat\">chăm s&oacute;c da mặt</a> b&agrave;i bản, khoa học, trực tiếp thực hiện l&agrave; c&aacute;c chuy&ecirc;n vi&ecirc;n được đ&agrave;o tại b&agrave;i bản, c&oacute; tr&igrave;nh độ chuy&ecirc;n m&ocirc;n v&agrave; tay nghề cao.</li>\r\n	<li>Kh&ocirc;ng gian Thu C&uacute;c Clinics vừa sang trọng lịch sự, vừa ấm c&uacute;ng, th&acirc;n thiện, tạo cảm gi&aacute;c thư th&aacute;i, dễ chịu.</li>\r\n	<li>Dịch vụ kh&aacute;ch h&agrave;ng chuy&ecirc;n nghiệp, chăm s&oacute;c tận t&acirc;m, chu đ&aacute;o.</li>\r\n	<li>Kh&aacute;ch h&agrave;ng sẽ được theo d&otilde;i v&agrave; tư vấn c&aacute;ch chăm s&oacute;c da ph&ugrave; hợp, khoa học.</li>\r\n</ul>\r\n\r\n<h3>Quy tr&igrave;nh spa chăm s&oacute;c da mặt nhạy cảm bằng tinh chất Việt Quất Đen</h3>\r\n\r\n<div><img alt=\"Chuyên viên không chỉ tư vấn về phương pháp chăm sóc da nhạy cảm tại Thu Cúc Clinics mà còn giúp cho khách hàng tối ưu hóa chu trình làm đẹp tại nhà.\" class=\"size-full wp-image-61590\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cham-soc-phuc-hoi-da-nhay-cam-bang-tinh-chat-viet-quat-den-4.jpg\" style=\"height:333px; width:500px\" />\r\n<p>Chuy&ecirc;n vi&ecirc;n kh&ocirc;ng chỉ tư vấn về phương ph&aacute;p chăm s&oacute;c da nhạy cảm tại Thu C&uacute;c Clinics m&agrave; c&ograve;n gi&uacute;p cho kh&aacute;ch h&agrave;ng tối ưu h&oacute;a chu tr&igrave;nh l&agrave;m đẹp tại nh&agrave;.</p>\r\n</div>\r\n\r\n<p>Bước 1: Tẩy trang để loại bỏ dầu thừa, bụi bẩn v&agrave; lớp trang điểm c&ograve;n s&oacute;t lại tr&ecirc;n da</p>\r\n\r\n<p>Bước 2: Rửa sạch mặt bằng sản phẩm dịu nhẹ</p>\r\n\r\n<p>Bước 3: Tẩy da chết nhẹ nh&agrave;ng với sản phẩm kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da</p>\r\n\r\n<p>Bước 4: X&ocirc;ng hơi h&uacute;t dầu để l&agrave;m sạch s&acirc;u, l&agrave;m mềm da v&agrave; d&atilde;n nở lỗ ch&acirc;n l&ocirc;ng, tăng cường hiệu quả của c&aacute;c bước chăm s&oacute;c da sau.</p>\r\n\r\n<p>Bước 5: Massage da mặt để thư gi&atilde;n v&agrave; lưu th&ocirc;ng kh&iacute; huyết dưới da.</p>\r\n\r\n<p>Bước 6: Đắp mặt nạ chứa tinh chất Việt Quất Đen</p>\r\n\r\n<p>Bước 7: Thoa nước hoa hồng để c&acirc;n bằng pH, l&agrave;m dịu da v&agrave; se kh&iacute;t lỗ ch&acirc;n l&ocirc;ng hiệu quả.</p>\r\n\r\n<p>Bước 8: Thoa kem dưỡng v&agrave; kem chống nắng, kết th&uacute;c quy tr&igrave;nh.</p>\r\n\r\n<h3>Thời gian v&agrave; chi ph&iacute; chăm s&oacute;c da nhạy cảm</h3>\r\n\r\n<p><img alt=\"cham-soc-phuc-hoi-da-nhay-cam-bang-tinh-chat-viet-quat-den\" class=\"aligncenter size-full wp-image-61585\" src=\"https://spathucuc.vn/wp-content/uploads/2017/03/cham-soc-phuc-hoi-da-nhay-cam-bang-tinh-chat-viet-quat-den.png\" style=\"height:221px; width:630px\" /></p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-11-06', 75, 598000, 'tam-trang-phi-thuyen-6.jpg', 2, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_dondatdichvu`
--

CREATE TABLE `table_dondatdichvu` (
  `iddondat` int(11) NOT NULL,
  `thanhvien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennhanvien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tien` float NOT NULL,
  `thoigianlam` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiluong` int(11) NOT NULL,
  `ngaylam` date NOT NULL,
  `ngaytao` date NOT NULL,
  `tendichvu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iddichvu` int(11) NOT NULL,
  `idtrangthai` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_dondatdichvu`
--

INSERT INTO `table_dondatdichvu` (`iddondat`, `thanhvien`, `tennhanvien`, `ghichu`, `tien`, `thoigianlam`, `thoiluong`, `ngaylam`, `ngaytao`, `tendichvu`, `diachi`, `sodienthoai`, `email`, `iddichvu`, `idtrangthai`) VALUES
(6, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 2),
(9, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 5),
(10, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 4),
(11, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 3),
(12, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 6),
(13, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 6),
(14, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 6),
(15, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 6),
(16, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 6),
(17, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 6),
(18, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 6),
(19, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 6),
(20, 'vu van huy', 'Vũ Văn Huy', '', 598000, '19:50', 70, '2018-11-20', '2018-11-20', 'Liệu pháp giảm căng thẳng bằng hương thơm', 'ninh binh', '0888565635', 'huyvv32@wru.vn', 1, 6),
(21, 'Phan Huy chú', 'Vũ Văn Huy', '', 598000, '01:00', 75, '2018-11-23', '2018-11-22', 'Chăm sóc da nhạy cảm bằng tinh chất Việt Quất Đen', '115c2 - Phạm ngọc thạch - Đống Đa - Hà Nội', '0234676456', 'huychu@gmail.com', 4, 6),
(22, 'Dương Quỳnh Hương', 'Vũ Văn Huy', '', 418000, '16:01', 70, '2018-11-23', '2018-11-22', 'Cải thiện chăm sóc da lão hóa bằng collagen sinh học', '200 - Thanh xuân - Quận Thanh xuân -Hà Nội', '0357345933', 'quynghuong@gmail.com', 3, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_dondatsanpham`
--

CREATE TABLE `table_dondatsanpham` (
  `iddondat` int(11) NOT NULL,
  `tendangnhap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydat` date NOT NULL,
  `noigiao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` float NOT NULL DEFAULT '0',
  `tennhanvien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idtrangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_dondatsanpham`
--

INSERT INTO `table_dondatsanpham` (`iddondat`, `tendangnhap`, `sodienthoai`, `email`, `ghichu`, `ngaydat`, `noigiao`, `tongtien`, `tennhanvien`, `idtrangthai`) VALUES
(1, 'vũ văn huy', '01672528943', 'huyvv32@wru.vn', '', '2018-11-21', '', 280000, 'huy', 4),
(2, 'Phan Duy Tùng', '0345782454', 'duytung@gmail.com', '', '2018-11-22', '', 1060000, '', 1),
(3, 'Phạm Quang Lĩnh', '0984561135', 'linhq@gmail.com', '', '2018-11-22', '', 280000, 'kevin trieu vu', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_gioithieu`
--

CREATE TABLE `table_gioithieu` (
  `id` int(11) NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_gioithieu`
--

INSERT INTO `table_gioithieu` (`id`, `noidung`) VALUES
(1, 'Giới thiệu\r\nTrong thời điểm các dịch vụ Spa phát triển nở rộ như hiện nay, việc tìm kiếm được một địa chỉ Thẩm mỹ tin cậy là điều không dễ. Chất lượng phục vụ và dịch vụ luôn khiến chị em phụ nữ đặt lên thành mối quan tâm hàng đầu.Thẩm mỹ Thiên Hà -chính là lựa chọn đảm bảo nhất bởi những lý do sau.\r\nTự hào là thẩm mỹ viện đẳng cấp hàng đầu Việt Nam, nhận danh hiệu top 10 thẩm mỹ viện uy tín nhất Việt Nam năm 2014. Thẩm mỹ viện Thiên Hà quy tụ đội ngũ chuyên viên thẩm mỹ đầu ngành trong và ngoài nước, được đào tạo bài bản, giàu kinh nghiệm cùng hệ thống công nghệ và trang thiết bị hiện đại bậc nhất, Thiên Hà khẳng định là thẩm mỹ tin cậy cho tất cả khách hàng có nhu cầu làm đẹp.\r\ndoi-ngu-nhan-vien\r\n• Địa điểm thuận tiện. Nằm trên phố Trần Duy Hưng, gần siêu thị BigC, đối diện trung tâm thương mại Grand plaza.\r\n\r\n• Không gian phù hợp. Thẩm mỹ viện Thiên Hà được thiết kế hiện đại sang trọng, có nhà để xe và khu để xe cho khách hàng.\r\n\r\n– Phòng tiếp khách và phòng dịch vụ được thiết kế hiện đại mang lại cho khách hàng cảm giác thoải mái và gần gũi.\r\n– Hệ thống phòng đón tiếp và tư vấn sang trọng, tiện nghi, thoải mái.\r\n– Hệ thống phòng Spa được thiết kế sang trọng, yên tĩnh, thư thái, phù hợp nghỉ ngơi thư giãn.\r\n\r\n• Đội ngũ chuyên viên thẩm mỹ.\r\n\r\nThành công của Thiên Hà không thể không kể đến đội ngũ chuyên viên chuyên nghiệp. Thẩm mỹ Thiên Hà sẽ tạo ấn tượng ngay từ lần đầu tiên bởi mang đến cho khách hàng cảm nhận về sự khác biệt vượt trội về trình độ chuyên môn và tay nghề của đội ngũ chuyên viên thẩm mỹ.\r\n\r\n– Chuyên gia nước ngoài chuyển giao công nghệ và tham gia thực hành.\r\n\r\n– Chuyên viên tại thẩm mỹ Thiên Hà 100% được đào tạo bài bản về trình độ chuyên môn và tay nghề trong và ngoài nước trong lĩnh vực thẩm mỹ.\r\n\r\nĐến với Thiên Hà, bạn sẽ hiểu chính xác thế nào là làm đẹp, được trải nghiệm dịch vụ hiện đại, sự nhiệt tình chu đáo của nhân viên, kiểm chứng thành quả của chuyên gia đầu ngành về lĩnh vực thẩm mỹ.\r\n\r\n• Hệ thống trang thiết bị.\r\n– Hệ thống phòng dịch vụ thẩm mỹ công nghệ cao hiện đại và trang thiết bị máy móc nhập khẩu từ Hàn Quốc, Mỹ, Đức…\r\n\r\nThêm một điểm cộng cho sự tin tưởng của khách hàng là Thiên Hà luôn đi tiên phong trong việc ứng dụng công nghệ thẩm mỹ tiên tiến hàng đầu thế giới.\r\nBên cạnh việc ứng dụng thành công các công nghệ thẩm mỹ không dao kéo, không dùng đến phẫu thuật như: Trị nám tàn nhang triệt để, Giảm béo công nghệ Italia, Căng da mặt, trẻ hóa da, xóa nhăn… Thẩm mỹ Thiên Hà đã trở thành thương hiệu thành công trong thẩm mỹ hiện đại.\r\nmay-moc-cong-nghe-hien-dai\r\n• Quy trình dịch vụ chuyên nghiệp.\r\nTrở thành Thẩm mỹ viện chuyên nghiệp hơn nữa, Thiên Hà không ngừng hoàn thiện về chất lượng và dịch vụ. Phương châm mang lại cảm giác gần gũi, thân thiện tới khách hàng. Chúng tôi luốn cải thiện về chất lượng dịch vụ, phong cách phục vụ để mang đến cho khách hàng dịch vụ thẩm mỹ hoàn hảo nhất. Tất cả các dịch vụ thẩm mỹ tại thẩm mỹ Thiên Hà đều được bộ y tế cấp phép hoạt động với quy trình dịch vụ được chuẩn hóa,an toàn tuyệt đối theo tiêu chuẩn của bộ y tế.\r\nQuy trình tại thiên Hà như sau:\r\n– Bước 1: Tư vấn khách hàng\r\n– Bước 2: Đón tiếp khách hàng\r\n– Bước 3. Thăm khám và tư vấn trực tiếp\r\n– Bước 4. Thực hiện điều trị cho khách hàng.\r\n– Bước 5. Chăm sóc sau điều trị\r\n– Bươc 6. Thực hiện thăm khám lại, kiểm tra kết quả.\r\n\r\nSứ mệnh phát triển của thẩm mỹ Thiên Hà.\r\n\r\nThiên Hà ra đời với phương châm “ Vì vẻ đẹp phụ nữ Việt “. Được sự tin tưởng và đánh giá của khách hàng với thương hiệu “ Top 10 thẩm mỹ viện uy tín nhất Việt Nam” năm 2014 chúng tôi luôn không ngừng cải thiện cơ sở vật chất, ứng dụng công nghệ mới và chất lượng phục vụ khách hàng.\r\nMời bạn hãy đến với Thiên Hà để trải nghiệm dịch vụ chuyên nghiệp, tận tình chu đáo đúng với phương châm “ Vì vẻ đẹp phụ nữ Việt”.\r\nXin vui lòng để lại họ tên và số điện thoại, chúng tôi sẽ gọi điện cho bạn để tư vấn được tốt hơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_googlemap`
--

CREATE TABLE `table_googlemap` (
  `idMap` int(11) NOT NULL,
  `src` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_googlemap`
--

INSERT INTO `table_googlemap` (`idMap`, `src`) VALUES
(3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6023350302603!2d105.83215171428058!3d21.008571886009346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac7f50d85429%3A0xd66e8ee0d77e9b21!2zQjE0IFBo4bqhbSBOZ-G7jWMgVGjhuqFjaCwgS2ltIExpw6puLCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1538130106994\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_kynangnhanvien`
--

CREATE TABLE `table_kynangnhanvien` (
  `idnhanvien` int(11) NOT NULL,
  `iddichvu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_kynangnhanvien`
--

INSERT INTO `table_kynangnhanvien` (`idnhanvien`, `iddichvu`) VALUES
(3, 1),
(8, 2),
(3, 4),
(3, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_lienhe`
--

CREATE TABLE `table_lienhe` (
  `idlienhe` int(11) NOT NULL,
  `hoten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaynhan` date NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `xuly` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_lienhe`
--

INSERT INTO `table_lienhe` (`idlienhe`, `hoten`, `email`, `sodienthoai`, `ngaynhan`, `noidung`, `xuly`) VALUES
(38, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'khong van de gi', b'1'),
(39, 'fdsaf', 'huyvv32@wru.vn', '888565635', '2018-09-28', 'nbnghgfgd', b'0'),
(40, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'khong van de gi', b'1'),
(41, 'fdsaf', 'huyvv32@wru.vn', '888565635', '2018-09-28', 'nbnghgfgd', b'0'),
(42, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'khong van de gi', b'1'),
(43, 'fdsaf', 'huyvv32@wru.vn', '888565635', '2018-09-28', 'nbnghgfgd', b'0'),
(44, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'khong van de gi', b'1'),
(45, 'fdsaf', 'huyvv32@wru.vn', '888565635', '2018-09-28', 'nbnghgfgd', b'0'),
(46, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'hhhhffffffffffffffffffffffffffffffffffffffffff vvvv vvvv \n  \n  ffffffffffffffffffffffffffffffffffffffffffffffffff', b'0'),
(47, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'khong van de gi', b'1'),
(48, 'fdsaf', 'huyvv32@wru.vn', '888565635', '2018-09-28', 'nbnghgfgd', b'0'),
(49, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'khong van de gi', b'1'),
(50, 'fdsaf', 'huyvv32@wru.vn', '888565635', '2018-09-28', 'nbnghgfgd', b'0'),
(51, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'khong van de gi', b'1'),
(52, 'fdsaf', 'huyvv32@wru.vn', '888565635', '2018-09-28', 'nbnghgfgd', b'0'),
(53, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'khong van de gi', b'1'),
(54, 'fdsaf', 'huyvv32@wru.vn', '888565635', '2018-09-28', 'nbnghgfgd', b'0'),
(55, 'gfh', 'huyvv32@wru.vn', '888565635', '0000-00-00', 'hhhhffffffffffffffffffffffffffffffffffffffffff vvvv vvvv \r\n  \r\n  ffffffffffffffffffffffffffffffffffffffffffffffffff', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_loaidichvu`
--

CREATE TABLE `table_loaidichvu` (
  `idloaidichvu` int(11) NOT NULL,
  `tenloaidichvu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_loaidichvu`
--

INSERT INTO `table_loaidichvu` (`idloaidichvu`, `tenloaidichvu`) VALUES
(1, 'Chăm sóc và làm trăng da'),
(2, 'Chăm sóc và trẻ hóa da'),
(3, 'Chăm sóc vùng mắt, môi, cổ'),
(4, 'Dịch vụ tẩy ra chết toàn thân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_loainhanvien`
--

CREATE TABLE `table_loainhanvien` (
  `idloainhanvien` int(11) NOT NULL,
  `tenloainhanvien` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_loainhanvien`
--

INSERT INTO `table_loainhanvien` (`idloainhanvien`, `tenloainhanvien`) VALUES
(2, 'Quản lý'),
(3, 'Dịch vụ'),
(4, 'Sản Phẩm'),
(5, 'Tư vấn'),
(6, 'Tin Tức'),
(8, 'kkk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_loaisanpham`
--

CREATE TABLE `table_loaisanpham` (
  `idloaisanpham` int(11) NOT NULL,
  `tenloaisanpham` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_loaisanpham`
--

INSERT INTO `table_loaisanpham` (`idloaisanpham`, `tenloaisanpham`) VALUES
(1, 'Chăm sóc da mặt'),
(2, 'Chăm sóc toàn thân'),
(3, 'Bộ sản phẩm'),
(4, 'Make up');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_loaitaikhoan`
--

CREATE TABLE `table_loaitaikhoan` (
  `idloaitaikhoan` int(11) NOT NULL,
  `tenloaitaikhoan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_loaitaikhoan`
--

INSERT INTO `table_loaitaikhoan` (`idloaitaikhoan`, `tenloaitaikhoan`) VALUES
(1, 'Admin'),
(2, 'Quản lý'),
(3, 'Dich vụ'),
(4, 'Sản Phẩm'),
(5, 'Tư vấn'),
(6, 'Tin tức');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_loaithanhvien`
--

CREATE TABLE `table_loaithanhvien` (
  `idloaithanhvien` int(11) NOT NULL,
  `tenloaithanhvien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phantramuudai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_loaithanhvien`
--

INSERT INTO `table_loaithanhvien` (`idloaithanhvien`, `tenloaithanhvien`, `phantramuudai`) VALUES
(1, 'Bình Thường', 0),
(2, 'Vip', 5),
(3, 'Chung Thành', 3),
(4, 'Thân thiết', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_loaitintuc`
--

CREATE TABLE `table_loaitintuc` (
  `idloaitintuc` int(11) NOT NULL,
  `tenloaitintuc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_loaitintuc`
--

INSERT INTO `table_loaitintuc` (`idloaitintuc`, `tenloaitintuc`) VALUES
(1, 'Khuyến mại'),
(2, 'Mua sắm'),
(3, 'Làm đẹp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_nhanvien`
--

CREATE TABLE `table_nhanvien` (
  `idnhanvien` int(11) NOT NULL,
  `idtrangthai` int(11) NOT NULL,
  `hoten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuoi` int(11) NOT NULL,
  `gioitinh` bit(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `luong` float NOT NULL,
  `bangcap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayvaolam` date NOT NULL,
  `ngaynghilam` date NOT NULL,
  `idloainhanvien` int(11) NOT NULL,
  `matkhau` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_nhanvien`
--

INSERT INTO `table_nhanvien` (`idnhanvien`, `idtrangthai`, `hoten`, `tuoi`, `gioitinh`, `ngaysinh`, `diachi`, `sodienthoai`, `email`, `ghichu`, `anh`, `luong`, `bangcap`, `ngayvaolam`, `ngaynghilam`, `idloainhanvien`, `matkhau`) VALUES
(2, 1, 'Nguyễn thị I', 34, b'1', '2018-03-04', 'Gia Tân - Gia Viễn - Ninh Bình', '0888565635', '', '', '', 0, '', '2018-10-09', '0000-00-00', 2, ''),
(3, 1, 'Vũ Văn Huy', 24, b'0', '2018-03-04', 'Gia Tân - Gia Viễn - Ninh Bình', '0888565635', '', '', '', 5000000, '', '2018-10-09', '2018-10-17', 3, ''),
(4, 1, 'vu ', 34, b'1', '2018-03-04', 'Gia Tân - Gia Viễn - Ninh Bình', '0888565635', '', '', '', 0, '', '2018-10-09', '0000-00-00', 2, ''),
(5, 1, 'Vũ Văn Huy', 24, b'0', '2018-03-04', 'Gia Tân - Gia Viễn - Ninh Bình', '0888565635', '', '', '', 5000000, '', '2018-10-09', '2018-10-17', 3, ''),
(6, 2, 'kevin trieu vu', 24, b'1', '2018-11-21', 'ha noi', '012345678', 'fdsaf@gmail.com', '', 'canh-dep-xu-han-16.jpg', 600, 'bang cap 2', '2018-11-17', '0000-00-00', 4, ''),
(7, 1, 'huy', 23, b'1', '2018-11-17', 'kim lien', '3423', '', '', 'canh-dep-xu-han-16.jpg', 0, 'bang cap 3', '2018-11-09', '0000-00-00', 4, ''),
(8, 1, 'anh hoong', 8, b'1', '2018-11-23', 'nnjn', '3423', '', '', 'banner-1.jpg', 6000000, 'bang cap 2', '2018-11-22', '0000-00-00', 3, ''),
(9, 2, 'vũ thi thu', 25, b'1', '2018-11-16', 'gia tân - gia viễn - ninh bình', '0916622493', 'g@gmail.com', '', 'hinh-nen-laptop-full-hd-mat-nuoc-trong-xanh-em-dem-cuc-dep_034807497.jpg', 7000000, 'Kỹ sư', '2018-11-02', '0000-00-00', 4, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_sanpham`
--

CREATE TABLE `table_sanpham` (
  `idsanpham` int(11) NOT NULL,
  `tensanpham` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaban` int(11) NOT NULL,
  `giakhuyenmai` int(11) NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhsp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idloaisanpham` int(11) NOT NULL,
  `hangsanxuat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `khuyenmai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `baohanh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diadiemban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_sanpham`
--

INSERT INTO `table_sanpham` (`idsanpham`, `tensanpham`, `mota`, `giaban`, `giakhuyenmai`, `noidung`, `anhsp`, `idloaisanpham`, `hangsanxuat`, `khuyenmai`, `baohanh`, `diadiemban`, `ghichu`) VALUES
(1, 'mặt nạ mắt Natural spa', 'Từ nay loại bỏ thâm mắt trở nên dễ dàng hơn bao giơ hết với mặt nạ mắt Gold Natural spa . Tuần sử dụng 2 lần để xoá bỏ dấu vết thời gian trên đôi mắt bạn . Đặc biệt tốt với người thường xuyên dùng máy tính hay điện thoại .', 100000, 0, '<p>Th&agrave;nh phần :</p>\r\n\r\n<p>Gelatin , marine collagen , dừa , l&ocirc; hội , tr&agrave; xanh , bột v&agrave;ng 24K , ceramide , vitamin C .</p>\r\n\r\n<p>C&ocirc;ng dụng :</p>\r\n\r\n<p>-Xo&aacute; bỏ vết th&acirc;m mắt</p>\r\n\r\n<p>-L&agrave;m mờ vết ch&acirc;n chim</p>\r\n\r\n<p>-Xo&aacute; bọng mắt</p>\r\n\r\n<p>-Cấp ẩm cấp nước cho đ&ocirc;i mắt trẻ trung</p>\r\n\r\n<p>C&aacute;ch d&ugrave;ng :</p>\r\n\r\n<p>- Để ngăn m&aacute;t tủ lạnh trước khi d&ugrave;ng 15 ph&uacute;t( hoặc lu&ocirc;n bảo quản tủ lạnh ) để mang lại hiệu quả hơn . X&eacute; bao b&igrave; v&agrave; đắp 2 miếng mặt nạ v&agrave;o 2 b&ecirc;n bọng mắt dưới , n&ecirc;n nhắm mắt thư gi&atilde;n 15 ph&uacute;t v&agrave; th&aacute;o bỏ mặt nạ đi . Một miếng chỉ sử dụng 1 lần .</p>\r\n\r\n<p><img alt=\"17\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/17_2.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n<p><img alt=\"16\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/16_3.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n<p><img alt=\"15\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/15_2.jpg\" style=\"height:200px; width:200px\" /></p>\r\n\r\n<p><img alt=\"13\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/13_3.jpg\" style=\"height:356px; width:200px\" /></p>\r\n\r\n<p><img alt=\"12\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/12_4.jpg\" style=\"height:356px; width:200px\" /></p>\r\n\r\n<p><img alt=\"11\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/11_2.jpg\" style=\"height:356px; width:200px\" /></p>\r\n\r\n<p><img alt=\"10\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/10_3.jpg\" style=\"height:374px; width:200px\" /></p>\r\n\r\n<p><img alt=\"9\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/9_3.jpg\" style=\"height:266px; width:200px\" /></p>\r\n\r\n<p><img alt=\"8\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/8_3.jpg\" style=\"height:200px; width:200px\" /></p>\r\n\r\n<p><img alt=\"7\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/7_4.jpg\" style=\"height:356px; width:200px\" /></p>\r\n\r\n<p><img alt=\"6\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/6_5.jpg\" style=\"height:267px; width:200px\" /></p>\r\n', 'gel.jpg', 1, 'công ty TMSXMP Ngô Thanh Phú', '', 'Bồi thường nếu lỗi của nhà sản xuất', 'Toàn quốc', 'Tuần chỉ sử dụng tối đa 2 lần .Không dùng hàng ngày . Nên bảo quản ngăn mắt tủ lạnh .'),
(2, 'Ngũ cốc dinh dưỡng từ óc chó Passion', 'Công dụng tuyệt vời của ngũ cốc dinh dưỡng óc chó : bổ sung dinh dưỡng , bảo vệ sức khoẻ tăng sức đề kháng cho cơ thể khoẻ mạnh ,giúp hổ trợ tăng cân khoa học .Ngoài ra còn cung cấp đủ năng lượng ,giúp hổ trợ quá trình giảm cân khoa học mà không gây mệt mỏi . Đặc biệt tốt cho mẹ bầu & cho con bú ,giúp lợi sữa & tăng chất lượng sữa mẹ đậm đặc hơn & giàu dưỡng chất hơn .Bổ sung dinh dưỡng cần thiết đặt biệt cho bé biếng ăn & là thực phẩm bổ dưỡng cho bé tập ăn dặm rất tốt .Ngoài ra , còn giúp hồi phục sức khoẻ sau phẩu thuật và hổ trợ làm đẹp da với dưỡng chất từ thiên nhiên ,giúp tăng cơ và hổ trợ quá trình tập gym thể thao hiệu quả hơn.', 250000, 0, '<p><img alt=\"39872871 1915341022100372 3233245848510922752 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/39872871_1915341022100372_3233245848510922752_n.jpg\" style=\"height:533px; width:400px\" /></p>\r\n\r\n<p>Với th&agrave;nh phần 100% c&aacute;c loại đậu &amp; hạt nguy&ecirc;n chất từ thi&ecirc;n nhi&ecirc;n c&oacute; chọn lọc . Ngũ cốc dinh dưỡng &oacute;c ch&oacute; ra đời mang đến l&agrave;n gi&oacute; mới thị trường thực phẩm chức năng tại Việt Nam - nơi mỗi ng&agrave;y lại xảy ra&nbsp; v&ocirc; v&agrave;n phốt mới phanh phui sự thật của thực phẩm chức năng &amp; h&agrave;ng giả h&agrave;ng nh&aacute;i c&oacute; nguồn gốc từ Trung Quốc b&agrave;y b&aacute;n nhan nhản tr&ecirc;n thị trường . Những b&agrave; mẹ y&ecirc;u chồng thương con , c&oacute; hiếu với bố mẹ v&ocirc; t&igrave;nh mua phải thực phẩm rởm , thế rồi sức khoẻ đ&acirc;u kh&ocirc;ng thấy , lợi bất cập hại ! Nỗi day dứt v&igrave; chọn nhầm , tin nhầm , mua nhầm kh&ocirc;ng ngu&ocirc;i th&igrave; sự lo lắng về những hậu quả kh&ocirc;n lường của thực phẩm bẩn , giả nh&aacute;i trở th&agrave;nh nổi bức rứt đ&ocirc;i khi &acirc;n hận v&igrave; sự k&eacute;m hiểu biết của m&igrave;nh khiến bản th&acirc;n , gia đ&igrave;nh v&agrave; thậm ch&iacute; l&agrave; những đứa trẻ thơ v&ocirc; tội phải g&aacute;nh chịu ...&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>M&igrave;nh hiểu được rằng : Sức khoẻ&nbsp; tốt &amp; tr&iacute; tuệ minh mẫn l&agrave; hai điều hạnh ph&uacute;c nhất tr&ecirc;n nhất tr&ecirc;n cuộc đời n&agrave;y ... hạnh ph&uacute;c đ&oacute; sẽ được nh&acirc;n đ&ocirc;i nh&acirc;n ba hay thậm ch&iacute; nh&acirc;n l&ecirc;n ng&agrave;n lần khi đứa con của bạn, người chồng , cha mẹ bạn hay những người th&acirc;n y&ecirc;u của bạn cũng c&oacute; được sức khoẻ &amp; tr&iacute; tuệ như thế ...&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"39894598 2176544555958348 3409780802651684864 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/39894598_2176544555958348_3409780802651684864_n_1.jpg\" style=\"height:533px; width:400px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tại sao phải sử dụng ngũ cốc dinh dưỡng &oacute;c ch&oacute;&nbsp;</strong>:&nbsp;</p>\r\n\r\n<p>-Ngũ cốc dinh dưỡng ốc ch&oacute; l&agrave; c&ocirc;ng thức mới đầu ti&ecirc;n tại thị trường Việt Nam được mix với hơn 15 loại hạt &amp; đậu . C&ocirc;ng thức tuyệt đỉnh cho ra vị ngũ cốc thơm ngon &amp; tr&agrave;n đầy dinh dưỡng .&nbsp;</p>\r\n\r\n<p>-Nguồn nguy&ecirc;n liệu chọn lọc &amp; được sản xuất kh&eacute;p k&iacute;n - sản phẩm được cấp chứng nhận lưu h&agrave;nh &amp; kiểm nghiệm an to&agrave;n&nbsp;</p>\r\n\r\n<p>-Sản phẩm chứa 20% từ hạt &oacute;c ch&oacute; - loại hạt được nghi&ecirc;n cứu với v&ocirc; v&agrave;ng c&ocirc;ng dụng đặc biệt tốt cho ph&aacute;t triển tr&iacute; n&atilde;o&nbsp;</p>\r\n\r\n<p>-Sản phẩm kh&ocirc;ng c&oacute; chất bảo quản, được sản xuất tại nh&agrave; m&aacute;y đạt chứng nhận vệ sinh an to&agrave;n thực phẩm .&nbsp;</p>\r\n\r\n<p>-Vị ngọt thơm ngon b&eacute;o ngậy kh&aacute;c hẳn với c&aacute;c loại ngũ cốc th&ocirc;ng thường tr&ecirc;n thị trường . Hiệu quả cảm nhận được r&otilde; rệt sau 30 ng&agrave;y sử dụng .&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"39750216 253529995182112 1430333188852416512 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/39750216_253529995182112_1430333188852416512_n_1.jpg\" style=\"height:400px; width:400px\" /></p>\r\n\r\n<p><strong>C&ocirc;ng dụng tuyệt vời của ngũ cốc dinh dưỡng &oacute;c ch&oacute; :</strong>&nbsp;</p>\r\n\r\n<p>-Bổ sung dinh dưỡng , bảo vệ sức khoẻ tăng sức đề kh&aacute;ng cho cơ thể khoẻ mạnh&nbsp;</p>\r\n\r\n<p>-Gi&uacute;p hổ trợ tăng c&acirc;n khoa học&nbsp;</p>\r\n\r\n<p>-Cung cấp đủ năng lượng gi&uacute;p hổ trợ qu&aacute; tr&igrave;nh giảm c&acirc;n khoa học kh&ocirc;ng g&acirc;y mệt mỏi .&nbsp;</p>\r\n\r\n<p>-Đặc biệt tốt cho mẹ bầu &amp; cho con b&uacute; . Gi&uacute;p lợi sữa &amp; tăng chất lượng sữa mẹ đậm đặc &amp; gi&agrave;u dưỡng chất hơn&nbsp;</p>\r\n\r\n<p>-Bổ sung dinh dưỡng cần thiết đặt biệt cho b&eacute; biếng ăn &amp; l&agrave; thực phẩm bổ dưỡng cho b&eacute; tập ăn dặm .&nbsp;</p>\r\n\r\n<p>-Hồi phục sức khoẻ sau phẩu thuật</p>\r\n\r\n<p>-Hổ trợ l&agrave;m đẹp da với dưỡng chất từ thi&ecirc;n nhi&ecirc;n&nbsp;</p>\r\n\r\n<p>-Tăng cơ gi&uacute;p hổ trợ qu&aacute; tr&igrave;nh tập gym thể thao hiệu quả hơn&nbsp;</p>\r\n\r\n<p><img alt=\"39814328 1130428540437459 8875121936577855488 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/39814328_1130428540437459_8875121936577855488_n.jpg\" style=\"height:538px; width:400px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Ưu điểm vượt trội của ngũ cốc &oacute;c ch&oacute; so với c&aacute;c loại ngũ cốc th&ocirc;ng thường&nbsp;</strong></p>\r\n\r\n<p>-Tỷ lệ th&agrave;nh phần được th&agrave;nh vi&ecirc;n viện dung dưỡng quốc gia cố vấn . Đảm bảo đủ chất &amp; an to&agrave;n cho cơ thể .&nbsp;</p>\r\n\r\n<p>-Loại ngũ cốc chứa nhiều loại hạt nhất tr&ecirc;n thị trường Việt Nam hiện nay &amp; đặc biệt chứa 20% từ hạt &oacute;c ch&oacute; dinh dưỡng&nbsp;</p>\r\n\r\n<p>-Vị thơm ngon b&eacute;o ngậy ri&ecirc;ng biệt kh&oacute; nhầm lẫn với c&aacute;c loại ngũ cốc th&ocirc;ng thường .&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Th&agrave;nh phần của ngũ cốc dinh dưỡng &oacute;c ch&oacute;</strong>&nbsp;:</p>\r\n\r\n<p>5 loại đậu : đậu xanh , đậu n&agrave;nh , đậu trắng , đậu đen , đậu đỏ . 10 loại hạt : hạt k&ecirc; , &yacute; dĩ , hạt sen , hạnh nh&acirc;n , gạo lứt huyết rồng , yến mạch , vừng v&agrave;ng , vừng đen , hạt điều , &oacute;c ch&oacute; .&nbsp;</p>\r\n\r\n<p><img alt=\"IMG 3849\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/img_3849.jpg\" style=\"height:267px; width:400px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"IMG 3846\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/img_3846.jpg\" style=\"height:267px; width:400px\" /></p>\r\n\r\n<p><img alt=\"IMG 3845\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/img_3845.jpg\" style=\"height:267px; width:400px\" /></p>\r\n\r\n<p><img alt=\"IMG 3839\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/img_3839.jpg\" style=\"height:226px; width:400px\" /></p>\r\n\r\n<p><img alt=\"IMG 3826\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/img_3826.jpg\" style=\"height:267px; width:400px\" /></p>\r\n\r\n<p><img alt=\"IMG 3818\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/img_3818.jpg\" style=\"height:226px; width:400px\" /></p>\r\n\r\n<p><img alt=\"IMG 3809\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/img_3809.jpg\" style=\"height:226px; width:400px\" /></p>\r\n\r\n<p><img alt=\"39605620 302424520524249 3193542603891015680 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/39605620_302424520524249_3193542603891015680_n.jpg\" style=\"height:533px; width:400px\" /></p>\r\n\r\n<p><img alt=\"39628780 511695235958547 7793364166005227520 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/39628780_511695235958547_7793364166005227520_n.jpg\" style=\"height:533px; width:400px\" /></p>\r\n\r\n<p><img alt=\"39746446 571581439925632 8097048070711148544 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/39746446_571581439925632_8097048070711148544_n.jpg\" style=\"height:300px; width:400px\" /></p>\r\n\r\n<p><u><strong>Sản phẩm 100% kh&ocirc;ng sử dụng chất bảo quản , kh&ocirc;ng sử dụng m&agrave;u m&ugrave;i nh&acirc;n tạo</strong></u>&nbsp;.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng ngũ cốc dinh dưỡng &oacute;c ch&oacute;&nbsp;</strong>:&nbsp;</p>\r\n\r\n<p><strong>C&aacute;ch pha</strong>&nbsp;:&nbsp;</p>\r\n\r\n<p>Lấy 3-4 muỗng c&agrave; ph&ecirc; bột ngũ cốc dinh dưỡng &oacute;c ch&oacute; pha c&ugrave;ng 1 &iacute;t nước lạnh khuấy đều cho khỏi bị v&oacute;n cục - sau đ&oacute; th&ecirc;m nước s&ocirc;i v&agrave;o &amp; khuấy đều . &nbsp;</p>\r\n\r\n<p>Tuỳ v&agrave;o nhu cầu sử dụng m&agrave; chế biến ngũ cốc dinh dưỡng &oacute;c ch&oacute; theo những c&aacute;ch kh&aacute;c nhau :&nbsp;</p>\r\n\r\n<p>-Th&ecirc;m đường sữa &amp; uống sau bữa ăn nếu muốn tăng c&acirc;n .&nbsp;</p>\r\n\r\n<p>-Uống thay thế bữa ăn s&aacute;ng mỗi ng&agrave;y &amp; uống trước l&uacute;c ăn tối để hổ trợ giảm c&acirc;n&nbsp;</p>\r\n\r\n<p>-Uống 1 2 ly mỗi ng&agrave;y để bổ sung dinh dưỡng cho cơ thể khoẻ mạnh , thon v&oacute;c d&aacute;ng , đẹp l&agrave;n da .&nbsp;</p>\r\n\r\n<p>-Mẹ bầu &amp; cho con b&uacute; n&ecirc;n sử dụng 2-4 ly mỗi ng&agrave;y để tăng chất lượng sữa mẹ tối đa .&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đối tượng n&ecirc;n sử dụng ngũ cốc dinh dưỡng &oacute;c ch&oacute;&nbsp;</strong>:&nbsp;</p>\r\n\r\n<p>Người muốn c&oacute; sức khoẻ &amp; năng lượng tr&agrave;n đầy.&nbsp;</p>\r\n\r\n<p>Người tập Gym muốn tăng cơ &amp; khoẻ mạnh .&nbsp;</p>\r\n\r\n<p>Người muốn tăng giảm c&acirc;n khoa học kh&ocirc;ng cần d&ugrave;ng thuốc .&nbsp;</p>\r\n\r\n<p>Trẻ em biếng ăn cần bổ sung đủ dinh dưỡng&nbsp;</p>\r\n\r\n<p>Đặc biệt tốt cho mẹ bầu &amp; mẹ cho b&eacute; b&uacute; .&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Bảo quản :</em>&nbsp;</p>\r\n\r\n<p>N&ecirc;n đ&oacute;ng k&iacute;n miệng t&uacute;i &amp; bảo quản nơi kh&ocirc; r&aacute;o tho&aacute;ng m&aacute;t&nbsp;</p>\r\n\r\n<p>Lưu &yacute; phải d&ugrave;ng th&igrave;a kh&ocirc; để lấy bột , tr&aacute;nh d&ugrave;ng th&igrave;a ướt&nbsp;</p>\r\n\r\n<p>Quy c&aacute;ch đ&oacute;ng g&oacute;i : 330 gam / g&oacute;i</p>\r\n', 'ngu_coc.jpg', 1, 'công ty TMSXMP Ngô Thanh Phú', '', '', 'TOÀN QUỐC', ''),
(3, 'Collagen da cá Passion', 'Collagen da cá giúp đẩy lùi khô sạm , ngăn ngừa nếp nhăn hiệu quả . Glutathion bổ sung dưỡng chất cho da đẩy lùi sắc tố đen sạm , mang lại làn da trắng sáng , không tì vết Chứa 100% collagen peptic sinh học được kiểm chứng lâm sàng & nhập khẩu từ Nhật , sản xuất với công nghệ tiên tiến & 100% không chứa chất bảo quản & công bố phù hợp tiêu chuẩn được cấp bởi cục an toàn thực phẩm . Kết quả thử nghiệm 10/10 phụ nữ sử dụng collagen da cá đều nhận thấy da có độ ẩm mượt hơn , độ đàn hồi da săn chắc hơn , vết thâm nám cải thiện , bề mặt da trắng sáng hơn & cải thiện rõ vấn đề khô rát âm đạo ...', 400000, 0, '', '39638401_241535453219431_7713178453733801984_n.jpg', 1, 'công ty TMSXMP Ngô Thanh Phú', 'Mua liệu trình 3 hộp tại đại lý chi nhánh toàn quốc được giảm giá 10% & miễn phí ship giao hàng .', 'Hoàn tiền gấp 10 lần nếu kiểm nghiệm chứng minh sản phẩm có sự pha trộn & không có nguồn gốc xuất xứ từ nhà máy nguyên liệu tại Nhật Bản .', 'toàn quốc', 'Sản phẩm là thực phẩm chức năng không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh .'),
(4, 'Phấn mắt Sala', 'Bảng phấn mắt Sala eye Shadow có 6 màu đa phong cách & tiện lợi cho người dùng . Tone màu nhẹ nhàng dễ sử dụng cho nhiều dịp , đi học , đi làm , đi chơi , hay dạ tiệc đều phù hợp Đặc biệt tiện lợi khi phối 2 màu trắng ngọc trai & nâu đất có thể sử dụng làm hight light tạo sóng mũi & làm nhũ sáng . 4 màu còn lại đủ các sắc màu từ hồng paster , hồng nâu ấn tượng , nhũ vàng thu hút , hay ánh xanh lam phá cách , bạn có thể dễ dàng nhấn nhá cho đôi mắt thêm hút hồn', 490000, 0, '<p>Bảng phấn mắt Sala eye Shadow c&oacute; 6 m&agrave;u đa phong c&aacute;ch &amp; tiện lợi cho người d&ugrave;ng .</p>\r\n\r\n<p>Tone m&agrave;u nhẹ nh&agrave;ng dễ sử dụng cho nhiều dịp , đi học , đi l&agrave;m , đi chơi , hay dạ tiệc đều ph&ugrave; hợp</p>\r\n\r\n<p>Đặc biệt tiện lợi khi phối 2 m&agrave;u trắng ngọc trai &amp; n&acirc;u đất c&oacute; thể sử dụng l&agrave;m hight light tạo s&oacute;ng mũi &amp; l&agrave;m nhũ s&aacute;ng .</p>\r\n\r\n<p>4 m&agrave;u c&ograve;n lại đủ c&aacute;c sắc m&agrave;u từ hồng paster , hồng n&acirc;u ấn tượng , nhũ v&agrave;ng thu h&uacute;t , hay &aacute;nh xanh lam ph&aacute; c&aacute;ch , bạn c&oacute; thể dễ d&agrave;ng nhấn nh&aacute; cho đ&ocirc;i mắt th&ecirc;m h&uacute;t hồn .</p>\r\n\r\n<p><img alt=\"phấn mắt 2\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/phan-mat-2.jpg\" style=\"height:400px; width:300px\" /></p>\r\n\r\n<p><u>Thiết kế :</u></p>\r\n\r\n<p>Bộ phấn mắt với chất liệu nhựa cứng , cầm nặng tay , kh&aacute; chắc chắn , cảm quan ban đầu cầm v&agrave;o sẽ cho ngay cảm gi&aacute;c chất lượng , chuy&ecirc;n nghiệp .</p>\r\n\r\n<p>B&ecirc;n trong c&oacute; khay gương soi sắc sảo , c&oacute; lớp keo d&aacute;n che phủ gương sạch sẽ , cho thấy sự tỉ mỉ chỉnh chu của sản phẩm .</p>\r\n\r\n<p>Bộ khay phấn c&oacute; 6 m&agrave;u sắc phối hợp h&agrave;i h&ograve;a , c&oacute; thể biến thể th&agrave;nh nhiều tone &amp; phối hợp với nhau dễ d&agrave;ng</p>\r\n\r\n<p>Cọ t&aacute;n phấn c&oacute; 2 đầu : cọ m&uacute;t để đ&aacute;nh nhấn &amp; cọ phủi để t&aacute;n nhẹ bầu mắt , hoặc đ&aacute;nh s&oacute;ng mũi</p>\r\n\r\n<p>Bộ phấn mắt thiết kế sắc sảo &amp; ho&agrave;n thiện , c&oacute; thể h&agrave;i l&ograve;ng kh&aacute;ch h&agrave;ng kh&oacute; t&iacute;nh nhất .</p>\r\n\r\n<p><strong>C&ocirc;ng dụng</strong>&nbsp;:</p>\r\n\r\n<p>Trang điểm nhất nh&aacute; tạo đ&ocirc;i mắt h&uacute;t hồn hơn</p>\r\n\r\n<p>Tạo s&oacute;ng mũi cao hơn 1 c&aacute;ch nhẹ nh&agrave;ng thanh tho&aacute;t</p>\r\n\r\n<p>Độ nhũ vừa phải c&oacute; thể d&ugrave;ng h&agrave;ng ng&agrave;y m&agrave; kh&ocirc;ng g&acirc;y qu&aacute; lố hay phản cảm</p>\r\n\r\n<p>Độ kết d&iacute;nh tốt , b&aacute;m m&agrave;u l&acirc;u kh&ocirc;ng g&acirc;y v&oacute;n cục</p>\r\n\r\n<p>Chất phấn mềm mịn dễ b&aacute;m d&iacute;nh , l&acirc;u tr&ocirc;i</p>\r\n\r\n<p><strong>C&aacute;ch d&ugrave;ng</strong>&nbsp;:</p>\r\n\r\n<p>T&ugrave;y trang phục &amp; t&ugrave;y phong c&aacute;ch m&agrave; sử dụng tone m&agrave;u ph&ugrave; hợp</p>\r\n\r\n<p>Khuyết kh&iacute;ch mix nhiều tone m&agrave;u để tạo sự tươi mới</p>\r\n\r\n<p><u><strong>Tips make up đa phong c&aacute;ch với m&agrave;u mắt Sala :</strong></u></p>\r\n\r\n<p><em>1. Nhẹ nh&agrave;ng &quot; make m&agrave; như kh&ocirc;ng make &quot;</em></p>\r\n\r\n<p>Sau khi đ&aacute;nh lớp nền , lấy m&agrave;u trắng ngọc trai đ&aacute;nh hết phần bầu mắt</p>\r\n\r\n<p>D&ugrave;ng m&agrave;u n&acirc;u đất t&aacute;n nhẹ hốc mắt &amp;hết viền m&iacute; mắt tr&ecirc;n</p>\r\n\r\n<p>T&aacute;n nhẹ xuống m&iacute; mắt dưới đậm ở đu&ocirc;i mắt &amp; nhạt đầu mắt</p>\r\n\r\n<p>Đ&aacute;nh nhẹ s&oacute;ng mũi để tạo độ cao tự nhi&ecirc;n cho s&oacute;ng mũi</p>\r\n\r\n<p>Th&ecirc;m 1 ch&uacute;t eyeline s&aacute;t ch&acirc;n m&iacute;, 1 ch&uacute;t mascara , thế th&ocirc;i đ&atilde; qu&aacute; đủ để xinh đẹp</p>\r\n\r\n<p><img alt=\"mắt nâu trắng\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/mat-nau-trang.jpg\" style=\"height:303px; width:300px\" /></p>\r\n\r\n<p><em>2. Nhẹ nh&agrave;ng style Paste - Vintage</em></p>\r\n\r\n<p>Sau khi đ&aacute;nh kem nền , d&ugrave;ng m&agrave;u trắng đ&aacute;nh hết bầu mắt , sau đ&oacute; d&ugrave;ng m&agrave;u hồng paste nhẹ đ&aacute;nh hết to&agrave;n bộ m&iacute; mắt tr&ecirc;n , đ&aacute;nh lu&ocirc;n 1/2 m&iacute; mắt dưới &amp; dặm nhẹ 1/2 đầu mắt</p>\r\n\r\n<p>D&ugrave;ng m&agrave;u hồng nhũ cherry dặm nhấn v&agrave;o đu&ocirc;i mắt tr&ecirc;n v&agrave; dưới theo dấu chữ V</p>\r\n\r\n<p>Th&ecirc;m 1 ch&uacute;t m&aacute; hồng cam &amp; ch&uacute;t son nhẹ nh&agrave;ng bạn sẽ tự tin xinh đẹp nổi bật</p>\r\n\r\n<p><img alt=\"mắt hồng paster\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/mat-hong-paster.jpg\" style=\"height:220px; width:300px\" /></p>\r\n\r\n<p><em>3. Quyến rũ với Chery blossom</em></p>\r\n\r\n<p>Một ch&uacute;t sắc hồng của hoa đ&agrave;o sẽ khiến bạn thu h&uacute;t mọi &aacute;nh nh&igrave;n , l&atilde;ng mạn m&agrave; quyến rũ hơn bao giờ hết . Đơn giản m&agrave; nổi bật , lại cực dễ sử dụng &amp; hợp mọi ho&agrave;n cảnh , đ&acirc;y l&agrave; sắc m&agrave;u trendi của năm nay , bạn đừng bỏ lỡ .</p>\r\n\r\n<p><img alt=\"mắt hồng cherry\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/mat-hong-cherry.jpg\" style=\"height:272px; width:300px\" /></p>\r\n\r\n<p><em>4. Nhũ v&agrave;ng sang trọng :</em></p>\r\n\r\n<p>H&atilde;y thử 1 ch&uacute;t l&oacute;ng l&aacute;nh nhẹ của nhũ &aacute;nh đồng tr&ecirc;n đ&ocirc;i mắt th&ecirc;m ch&uacute;t mascara , 1 ch&uacute;t eyeline , bạn sẽ nhận kh&ocirc;ng ngớt lời khen từ những người xung quanh . 1 bước duy nhất , kh&ocirc;ng cần phối qu&aacute; nhiều m&agrave;u vẫn mang đến cho bạn sự sang chảnh cần thiết &amp; độ quyến rũ kh&ocirc;ng ngờ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>5. Săc xanh ấn tượng :</em></p>\r\n\r\n<p>Hẳn bạn dang e d&egrave; m&agrave;u xanh l&ecirc;n mắt sẽ thế n&agrave;o &amp; c&oacute; qu&aacute; sến kh&ocirc;ng ? H&atilde;y thử 1 bộ v&aacute;y đơn sắc , phối c&ugrave;ng m&agrave;u xanh r&ecirc;u ấn tượng n&agrave;y , pha ch&uacute;t v&agrave;ng nhũ ở đu&ocirc;i mắt , 1 ch&uacute;t eyeline &amp; mascara , chắc chắn bạn sẽ nổi bật &amp; thu h&uacute;t mọi &aacute;nh nh&igrave;n&nbsp; thế th&ocirc;i c&ocirc; g&aacute;i xinh đẹp ch&iacute;nh l&agrave; bạn .</p>\r\n\r\n<p><img alt=\"mắt xanh rêu\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/mat-mau-xanh.jpg\" style=\"height:224px; width:300px\" /></p>\r\n\r\n<p>6<em>. H&uacute;t hồn như 1 nữ thần khi phối hồng cherry &amp;v&agrave;ng nhũ &aacute;nh đồng</em></p>\r\n\r\n<p>1 ch&uacute;t trắng ngọc trai phủ hết bầu mắt</p>\r\n\r\n<p>T&aacute;n nhẹ hồng cherry l&ecirc;n hết v&ugrave;ng m&iacute; mắt tr&ecirc;n &amp; m&iacute; mắt dưới , đậm hơn ở đu&ocirc;i mắt tr&ecirc;n &amp; dưới .</p>\r\n\r\n<p>T&aacute;n nhẹ nhũ v&agrave;ng đồng l&ecirc;n 1/2 đầu mắt tr&ecirc;n &amp; dưới</p>\r\n\r\n<p>T&aacute;n nhẹ hồng chery lại hết m&iacute; tr&ecirc;n v&agrave; dưới để trung h&ograve;a 2 sắc .</p>\r\n\r\n<p>Một ch&uacute;t son l&ograve;ng m&ocirc;i đỏ hồng , trong bạn sẽ h&uacute;t hồn như một nữ thần</p>\r\n\r\n<p><img alt=\"hồng cherry phối vàng nhũ\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/hong-cherry-phoi-vang-nhu.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p>T&ugrave;y sự kh&eacute;o l&eacute;o , biến tấu m&agrave; bạn sẽ ra v&ocirc; v&agrave;ng sắc th&aacute;i xinh đẹp chỉ với bảng m&agrave;u mắt 6 m&agrave;u của Sala Eye shadow.</p>\r\n\r\n<p>Đừng ngại ngần sử dụng , v&igrave; cho rằng m&igrave;nh kh&ocirc;ng kh&eacute;o l&eacute;o , l&agrave;m kh&ocirc;ng được, h&atilde;y thử đi , rất đơn giản ,chỉ cần l&agrave;m v&agrave;i lần &amp; học th&ecirc;m c&aacute;c tips make up đơn giản bạn sẽ th&agrave;nh tay make up chuy&ecirc;n nghiệp , c&ocirc; g&aacute;i xinh đẹp trong bạn đang ch&agrave;o đ&oacute;n !</p>\r\n', '7phan-mat-sala.jpg', 1, 'Hàn Quốc', 'Giảm 10% khi mua trên 3 sản phẩm ( đơn hàng trên 1.500.000 ) Gỉam 15% khi mua trọn bộ sản phẩm make up', ' Bao đổi trả nếu lỗi do nhà sản xuất', 'toàn quốc', 'Nên mua hàng chính hãng để có chế độ bảo hành tốt nhất & tránh mua phải hàng giả nhái kém chất lượng'),
(5, 'Kem che khuyết điểm Sala', 'Kem che khuyết điểm Sala là dòng che khuyết điểm dạng kem , có độ ẩm cao thích hợp dùng cho cả mặt và môi . Che phủ hoàn hảo với khả năng biến sắc cao , nên khi thoa lên da làm đều màu da nhanh chóng mà không gây hiện tượng loang lổ hay dày phấn . Dùng hàng ngày mang đến sự thoải mái , tự tin , tránh bí nóng da . Có 2 sự lựa chọn : Số 13 cho da sáng trung bình , khuyết điểm nhạt màu Số 18 cho da ngăm , vàng , khuyết điểm đậm màu , sẹo rỗ', 280000, 0, '<p>Kem che khuyết điểm Sala l&agrave; d&ograve;ng che khuyết điểm dạng kem , c&oacute; độ ẩm cao th&iacute;ch hợp d&ugrave;ng cho cả mặt v&agrave; m&ocirc;i .</p>\r\n\r\n<p>Che phủ ho&agrave;n hảo với khả năng biến sắc cao , n&ecirc;n khi thoa l&ecirc;n da l&agrave;m đều m&agrave;u da nhanh ch&oacute;ng m&agrave; kh&ocirc;ng g&acirc;y hiện tượng loang lổ hay d&agrave;y phấn .</p>\r\n\r\n<p>D&ugrave;ng h&agrave;ng ng&agrave;y mang đến sự thoải m&aacute;i , tự tin , tr&aacute;nh b&iacute; n&oacute;ng da .</p>\r\n\r\n<p><strong><em><u>C&oacute; 2 sự lựa chọn</u></em></strong>&nbsp;:</p>\r\n\r\n<p>-Số 13 cho da s&aacute;ng trung b&igrave;nh , khuyết điểm nhạt m&agrave;u</p>\r\n\r\n<p>-Số 21 cho da ngăm , v&agrave;ng , khuyết điểm đậm m&agrave;u , sẹo rỗ</p>\r\n\r\n<p><img alt=\"12\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/12_3.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p><strong>Quy c&aacute;ch sản phẩm</strong>:</p>\r\n\r\n<p>Kem nền che khuyết điểm Sala được thiết kế nhỏ gọn tiện sử dụng dễ d&agrave;ng bỏ t&uacute;i khi đi bất cứ nơi đầu</p>\r\n\r\n<p>Chất kem lỏng , cấu tạo nhẹ tho&aacute;ng , n&ecirc;n che phủ đẹp &amp; kh&ocirc;ng d&agrave;y phấn</p>\r\n\r\n<p>Nền kem s&aacute;nh nhẹ , b&aacute;m d&iacute;nh tốt &amp; kh&oacute; tr&ocirc;i trong nước &amp; dầu</p>\r\n\r\n<p>M&ugrave;i tự nhi&ecirc;n của chiết xuất thi&ecirc;n nhi&ecirc;n kh&ocirc;ng m&ugrave;i h&oacute;a học</p>\r\n\r\n<p>M&agrave;u sắc được nghi&ecirc;n cứu ph&ugrave; hợp che phủ tốt cho da người Việt Nam</p>\r\n\r\n<p><img alt=\"7\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/7_3.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p><img alt=\"1\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/1_2.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p><strong>C&ocirc;ng dụng&nbsp;</strong>:</p>\r\n\r\n<p>Che khuyết điểm cho da mặt gi&uacute;p bề mặt da đều m&agrave;u , v&ugrave;ng sạm tối sẹo th&acirc;m trở n&ecirc;n tươi tắn hơn , gi&uacute;p bề mặt da mịn m&agrave;ng tự nhi&ecirc;n</p>\r\n\r\n<p>Che khuyết điểm m&ocirc;i triệt sắc gi&uacute;p giảm m&agrave;u th&acirc;m m&ocirc;i , l&agrave;m lớp son l&ecirc;n m&agrave;u chuẩn , t&ocirc;n m&agrave;u son hơn .</p>\r\n\r\n<p>Che phủ mọi khuyết điểm như mụn , th&acirc;m , sẹo , ch&acirc;n l&ocirc;ng to gi&uacute;p da kh&ocirc;ng t&igrave; vết , nhưng đặc t&iacute;nh nhẹ tho&aacute;ng n&ecirc;n kh&ocirc;ng g&acirc;y hiện tượng d&agrave;y phấn , khả năng tự biến đổi m&agrave;u trung h&ograve;a m&agrave;u da thật tốt , v&igrave; thế khi l&ecirc;n da l&agrave;m da đều m&agrave;u tự nhi&ecirc;n</p>\r\n\r\n<p>Kem che khuyết điểm Sala b&aacute;m da &amp; giữ m&agrave;u tốt, kh&ocirc;ng thấm nước , kh&oacute; tr&ocirc;i n&ecirc;n d&ugrave; da đổ nhờn ,mồ h&ocirc;i , hay da hỗn hợp đều c&oacute; thể d&ugrave;ng được .</p>\r\n\r\n<p><img alt=\"10\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/10_2.jpg\" style=\"height:225px; width:300px\" /></p>\r\n\r\n<p><strong>C&aacute;ch d&ugrave;ng&nbsp;</strong>:</p>\r\n\r\n<p><u>D&ugrave;ng h&agrave;ng ng&agrave;y che khuyết điểm tạm thời cho da c&oacute; &iacute;t khuyết điểm:</u></p>\r\n\r\n<p>Sau khi ho&agrave;n th&agrave;nh c&ocirc;ng đoạn dưỡng , l&oacute;t cho da , d&ugrave;ng kem che khuyết điểm Sala chấm l&ecirc;n c&aacute;c v&ugrave;ng cần che khuyết điểm như : quầng th&acirc;m mắt , c&aacute;c nốt mụn th&acirc;m , t&agrave;n nhang , n&aacute;m ....</p>\r\n\r\n<p>Chấm thật nhẹ &amp; d&ugrave;ng m&uacute;t t&aacute;n hoặc cọ mềm ấn nhẹ , ch&uacute; &yacute; thao t&aacute;c n&ecirc;n ấn nhẹ , kh&ocirc;ng được massage kh&ocirc;ng được ch&agrave; x&aacute;t mạnh l&ecirc;n da .</p>\r\n\r\n<p>Thoa kem nền đều l&ecirc;n to&agrave;n bộ bề mặt da để trung h&ograve;a m&agrave;u sắc da đồng đều nhất</p>\r\n\r\n<p>Dặm th&ecirc;m lớp phấn phủ để kiểm so&aacute;t dầu &amp; cho l&agrave;n da ho&agrave;n hảo kh&ocirc;ng t&igrave; vết</p>\r\n\r\n<p><img alt=\"CÁCH DÙNG KEM CHE KHUYẾT ĐIỂM\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/cach-dung-kem-che-khuyet-diem.jpg\" style=\"height:250px; width:300px\" /></p>\r\n\r\n<p><u>D&ugrave;ng l&agrave;m kem nền che khuyết điểm 100%&nbsp;</u>:</p>\r\n\r\n<p>Sau khi ho&agrave;n th&agrave;nh c&ocirc;ng đoạn l&agrave;m sạch , dưỡng da , thoa kem l&oacute;t bảo vệ , lấy lượng kem vừa đủ chấm th&agrave;nh nhiều điểm tr&ecirc;n mặt , d&ugrave;ng m&uacute;t hoặc cọ t&aacute;n kem thật đều , sao cho lớp nền được che phủ ho&agrave;n hảo nhất .</p>\r\n\r\n<p>Dặm th&ecirc;m lớp phấn phủ để kiểm so&aacute;t dầu &amp;cho l&agrave;n da mịn m&agrave;ng hơn .</p>\r\n\r\n<p><img alt=\"che khuyết điểm toàn mặt\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/che-khuyet-diem-toan-mat.jpg\" style=\"height:137px; width:300px\" /></p>\r\n\r\n<p><em><u><strong>Che khuyết điểm Sala c&oacute; g&igrave; nổi bật</strong></u></em></p>\r\n\r\n<p>Điểm nhấn của thương hiệu Sala l&agrave; sự nhẹ nh&agrave;ng ,make up m&agrave; như kh&ocirc;ng, hướng đến kh&aacute;ch h&agrave;ng văn ph&ograve;ng &amp; người thường xuy&ecirc;n phải make up h&agrave;ng ng&agrave;y . V&igrave; thế ti&ecirc;u ch&iacute; tự nhi&ecirc;n , nhẹ tho&aacute;ng , dễ chịu khi sử dụng l&agrave; ti&ecirc;u ch&iacute; đầu ti&ecirc;n . V&igrave; vậy để đ&aacute;nh gi&aacute; Sala kh&ocirc;ng c&oacute; g&igrave; qu&aacute; nổi bật , kh&ocirc;ng ho&agrave;n hảo 100% nhưng để ch&ecirc; th&igrave; kh&ocirc;ng c&oacute; điểm n&agrave;o c&oacute; thể ch&ecirc; được , &nbsp;những đối tượng kh&aacute;ch văn ph&ograve;ng , học sinh , sinh vi&ecirc;n hay c&aacute;c chị em nội trợ cần make nhẹ h&agrave;ng ng&agrave;y th&igrave; Sala l&agrave; lựa chọn h&agrave;ng đầu , bởi cảm gi&aacute;c m&agrave; n&oacute; mang lại kh&oacute; c&oacute; thể t&igrave;m thấy ở c&aacute;c brand kh&aacute;c ... &quot;nhẹ nh&agrave;ng như kh&ocirc;ng&quot; &quot;make m&agrave; như kh&ocirc;ng make&quot; &quot;make up trong veo&quot; l&agrave; những từ ngữ kh&aacute;ch h&agrave;ng đ&atilde; phải ồ l&ecirc;n khi sử dụng .</p>\r\n\r\n<p><img alt=\"5\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/5_2.jpg\" style=\"height:300px; width:300px\" /></p>\r\n\r\n<p><em><u><strong>Chứng nhận xuất xứ sản phẩm :</strong></u></em></p>\r\n\r\n<p>Ng&agrave;y nay sự xuất hiện của c&aacute;c sản phẩm giả nh&aacute;i tr&ecirc;n thị trường l&agrave;m nhiễu loạn th&ocirc;ng tin v&agrave; khiến người ti&ecirc;u d&ugrave;ng hoang mang khi lựa chọn sản phẩm an to&agrave;n để sử dụng</p>\r\n\r\n<p>Hiểu được điều n&oacute; , thương hiệu Sala được nhập khẩu từ Korea với đầy đủ giấy tờ ph&aacute;p l&yacute; tại H&agrave;n Quốc cũng như tại Việt Nam</p>\r\n\r\n<p>Sản phẩm sau khi được kiểm duyệt đ&atilde; được cấp ph&eacute;p lưu h&agrave;nh to&agrave;n quốc &amp; quốc tế .</p>\r\n\r\n<p><img alt=\"CÔNG BỐ KEM CHE KHUYẾT ĐIỂM\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/cong-bo-kem-che-khuyet-diem.jpg\" style=\"height:652px; width:300px\" /></p>\r\n\r\n<p><u><strong>&nbsp;C&aacute;c sản phẩm kh&aacute;c của d&ograve;ng trang điểm Sala :</strong></u></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Người nổi tiếng tin d&ugrave;ng sản phẩm thương hiệu sala :</p>\r\n\r\n<p>&nbsp;</p>\r\n', '9_2.jpg', 1, 'Hàn Quốc', 'Gỉam giá 10% khi mua hàng từ 11/6/2018 đến 17/6/2018', 'bao đổi trả nếu lỗi do nhà sản xuất', 'toàn quốc', 'Nên mua hàng ở cửa hàng chính hãng hoặc đại lý online có ủy quyền để tránh mua phải hàng giả nhái kém chất lượng và để nhận được chế độ bảo hành chính hãng tốt nhất'),
(6, ' Bộ cấy nảy mầm Da GS III', 'GS III là bộ sản phẩm đặc trị các vấn đề da , nuôi dưỡng phục hồi da nhanh chóng chứa nồng độ cao Hyaluronic từ thực vật & mannitol & retinoid dược chất làm trắng da được phát minh mới , có hiệu quả làm trắng nhanh hơn gluta gấp 5 lần , đặc biệt không gây biến chứng hay tác dụng phụ nào . Tiền thân của GS III là Elravie nổi đình đám được sản xuất bởi HUONS- tập đoàn dược lớn mạnh của Hàn Quốc. Kế thừa & phát huy công dụng nổi bật của Elravie , GSIII có thêm nhiều ưu điểm mới nổi trội hơn ,không những làm đầy, đẩy lùi dấu hiệu lão hóa , mà GS III còn mang đến hiệu quả làm trắng căng bóng da đến kinh ngạc .', 1890000, 0, '<p>GS III l&agrave; bộ sản phẩm đặc trị c&aacute;c vấn đề da , nu&ocirc;i dưỡng phục hồi da nhanh ch&oacute;ng chứa nồng độ cao Hyaluronic từ thực vật &amp; mannitol &amp; retinoid dược chất l&agrave;m trắng da được ph&aacute;t minh mới , c&oacute; hiệu quả l&agrave;m trắng nhanh hơn gluta gấp 5 lần , đặc biệt kh&ocirc;ng g&acirc;y biến chứng hay t&aacute;c dụng phụ n&agrave;o .</p>\r\n\r\n<p>Tiền th&acirc;n của GS III l&agrave; Elravie nổi đ&igrave;nh đ&aacute;m được sản xuất bởi HUONS- tập đo&agrave;n dược lớn mạnh của H&agrave;n Quốc. Kế thừa &amp; ph&aacute;t huy c&ocirc;ng dụng nổi bật của Elravie , GSIII c&oacute; th&ecirc;m nhiều ưu điểm mới nổi trội hơn ,kh&ocirc;ng những l&agrave;m đầy, đẩy l&ugrave;i dấu hiệu l&atilde;o h&oacute;a , m&agrave; GS III c&ograve;n mang đến hiệu quả l&agrave;m trắng căng b&oacute;ng da đến kinh ngạc .</p>\r\n\r\n<p><img alt=\"23434778 1577882178957851 1887879991260538926 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/23434778_1577882178957851_1887879991260538926_n.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><strong>HYALURONIC AXIT ( HA ) l&agrave; g&igrave; ?</strong></p>\r\n\r\n<p>HA được t&igrave;m thấy hầu hết c&aacute;c v&ugrave;ng trong cơ thể : xương khớp, mắt , m&ocirc;i ,nướu răng, tuy nhi&ecirc;n được t&igrave;m thấy nhiều nhất tr&ecirc;n c&aacute;c m&ocirc; da- nơi chiếm hơn 50 % HA của cơ thể . N&oacute; hiện diện cả tr&ecirc;n c&aacute;c v&ugrave;ng da s&acirc;u cũng như c&aacute;c lớp biểu b&igrave; b&ecirc;n ngo&agrave;i.</p>\r\n\r\n<p>Cũng như collagen lượng HA trong cơ thể cũng được sinh ra theo chu kỳ nhưng sẽ mất dần theo thời gian . N&ecirc;n nếu HA trong da &iacute;t , da sẽ yếu , k&eacute;m săn chắc , dẫn đến nhanh l&atilde;o h&oacute;a , g&acirc;y sạm n&aacute;m , tối m&agrave;u .</p>\r\n\r\n<p>HA c&oacute; t&aacute;c dụng g&igrave; cho da ?</p>\r\n\r\n<p>&nbsp;HA cung cấp độ ẩm li&ecirc;n tục cho da bằng c&aacute;ch c&oacute; thể lưu giữ nước gấp 1000 so với trọng lượng của n&oacute; . V&igrave; vậy , bổ sung HA l&agrave; liệu ph&aacute;p bổ sung 1 m&aacute;y cấp nước cho da : l&acirc;u d&agrave;i , ổn định &amp; kinh tế.</p>\r\n\r\n<p><img alt=\"hình HA HÓA HỌC\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/hinh-ha-hoa-hoc.jpg\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<p>T&igrave;m hiểu về lịch sử h&igrave;nh th&agrave;nh của HA</p>\r\n\r\n<p>-Năm 1934 HA lần đầu được t&aacute;ch từ mắt con b&ograve; v&agrave; được đặt t&ecirc;n l&agrave; &quot;hyaloid&quot; c&oacute; nghĩa l&agrave; trong suốt như thủy tinh.</p>\r\n\r\n<p>-Từ 1934 đến 1940 HA được t&aacute;ch ra từ nhiều nguồn gốc kh&aacute;c nhau : d&acirc;y rốn , m&agrave;o g&agrave;,...</p>\r\n\r\n<p>-Năm 1951 C&aacute;c nh&agrave; khoa học lần đầu x&aacute;c định đươc cấu tr&uacute;c h&oacute;a học của HA</p>\r\n\r\n<p>-Năm 1970 HA được nghi&ecirc;n cứu c&oacute; t&aacute;c dụng tốt đến c&aacute;c m&ocirc; sụn cơ thể</p>\r\n\r\n<p>-Năm 1980 HA lần đầu ti&ecirc;n được ứng dụng v&agrave;o mỹ phẩm với c&ocirc;ng dụng chống l&atilde;o h&oacute;a . L&uacute;c đ&oacute; HA chủ yếu được chiết xuất từ m&agrave;o g&agrave; .</p>\r\n\r\n<p>-Năm 1999 Ha lần đầu được nh&acirc;n bản từ vi khuẩn . Ưu điểm mang lại l&uacute;c n&agrave;y l&agrave; gi&aacute; th&agrave;nh HA kh&aacute; rẻ , tuy nhi&ecirc;n n&oacute; c&oacute; thể g&acirc;y ra ruit ro nhiễm độc tố li&ecirc;n cầu khuẩn cho n&ecirc;n thời điểm n&agrave;y HA rất &iacute;t được sử dụng</p>\r\n\r\n<p>-Cột mốc quan trọng 2003 FDA - Cục quản l&yacute; thực phẩm &amp; dược phẩm Hoa Kỳ ph&ecirc; duyệt chấp nhận HA L&agrave; chất ti&ecirc;m l&agrave;m đầy c&aacute;c nếp nhăn hữu hiệu .</p>\r\n\r\n<p>-Năm 2010 bước tiến mới khi HA được l&agrave;m ra từ 1 chuẩn vi khuẩn l&agrave;nh t&iacute;nh gọi l&agrave; BACILUS SUBTILIS . V&igrave; vậy ng&agrave;y nay HA kh&ocirc;ng c&ograve;n bị nhiễm khuẩn , kh&ocirc;ng c&oacute; nguồn gốc từ dộng vật , v&agrave; được l&agrave;m l&ecirc;n từ chuẩn sinh học kh&ocirc;ng c&oacute; sự can thiệp của dung m&ocirc;i hữu cơ .</p>\r\n\r\n<p><img alt=\"hyaluronic\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/hyaluronic.png\" style=\"height:388px; width:500px\" /></p>\r\n\r\n<p><img alt=\"hinh ha\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/hinh-ha.gif\" style=\"height:177px; width:265px\" /></p>\r\n\r\n<p>Tiền th&acirc;n GS III</p>\r\n\r\n<p>GS III được sản xuất bởi HUONS - tập đo&agrave;n lớn nhất H&agrave;n Quốc &amp; nổi tiếng với Tinh chất ELRAVIE - chất l&agrave;m đầy được &nbsp;KOSDAQ &nbsp;cấp bằng s&aacute;ng chế .</p>\r\n\r\n<p><img alt=\"ELRAVIE AXIT\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/elravie-axit.jpg\" style=\"height:257px; width:500px\" /></p>\r\n\r\n<p><em><strong>C&aacute;c giải thưởng m&agrave; HUONS đ&atilde; đạt được</strong></em>&nbsp;:</p>\r\n\r\n<p>-Th&aacute;ng 9 /2016 th&aacute;ng 9/2016 được Forbes b&igrave;nh chọn l&agrave; một trong 200 doanh nghiệp triển vọng nhất Ch&acirc;u &Aacute;</p>\r\n\r\n<p>-Th&aacute;ng 12/2015 nhận chứng nhận CE của Ch&acirc;u &Acirc;u về sản phẩm chứ chất l&agrave;m đầy từ axit hylaronic Elravie . V&agrave; hiện nay c&aacute;c sản phẩm chứa axit hylaronic của Huons được ph&aacute;t triển rộng r&atilde;i với nhiều cải tiến vượt trội , điển h&igrave;nh l&agrave; GS III .</p>\r\n\r\n<p>-Th&aacute;ng 10 /2015 đạt được giải 1 trong &quot; 100 th&agrave;nh quả ưu t&uacute; trong ph&aacute;t minh nghi&ecirc;n cứu quốc gia 2015 &quot; &amp; được booh khoa học s&aacute;ng tạo Tương lai c&ocirc;ng nhận kỹ thuật filler axit hyaluronic</p>\r\n\r\n<p>-Th&aacute;ng 12/2014 đạt được giải thưởng quan trọng KOSDAQ - c&aacute;c chế phẩm s&aacute;ng chế chứa axit hyaluronic ti&ecirc;n tiến từ chiết xuất thi&ecirc;n nhi&ecirc;n .</p>\r\n\r\n<p>-Huons nổi tiếng với sản phẩm Elravie đạt được nhiều giải thưởng cao qu&yacute; , GS III kế thừa được những th&agrave;nh quả đ&oacute; &amp; l&agrave; ứng phẩm chứa HA mang đến hiệu quả vượt trội nhất hiện nay .</p>\r\n\r\n<p><strong>Bộ cấy Mầm da GS III c&oacute; g&igrave; ?</strong></p>\r\n\r\n<p><img alt=\"23517751 1577882195624516 5278102335393434144 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/23517751_1577882195624516_5278102335393434144_n.jpg\" style=\"height:667px; width:500px\" /></p>\r\n\r\n<p><u><strong>GS III Chứa :</strong></u></p>\r\n\r\n<p>HA - l&agrave;m đầy da trắng da</p>\r\n\r\n<p>HA - dưỡng ẩm căng đầy da</p>\r\n\r\n<p>HA- giảm thiểu ch&acirc;n l&ocirc;ng - mờ nếp nhăn , r&atilde;nh nhăn</p>\r\n\r\n<p>RA- chống oxy h&oacute;a -Chống l&atilde;o h&oacute;a</p>\r\n\r\n<p>RA- hồi phục c&acirc;n bằng da tạo hiệu ứng căng b&oacute;ng</p>\r\n\r\n<p>RA-tan vết sẹo , m&aacute;u bầm t&iacute;ch tụ dưới da , tan sắc tố melanin t&iacute;ch tụ .</p>\r\n\r\n<p>D&ugrave;ng bộ cấy mầm da thế n&agrave;o để hiệu quả nhất ?</p>\r\n\r\n<p><strong><u>C&oacute; thể sử dụng GS III nhiều c&aacute;ch được ph&acirc;n chia theo cấp độ sau&nbsp;</u></strong>:</p>\r\n\r\n<p>Tại c&aacute;c cơ sở chuy&ecirc;n nghiệp spa , viện thẩm mỹ thường d&ugrave;ng m&aacute;y Injetor để ti&ecirc;m đẩy tinh chất s&acirc;u đ&uacute;ng tầng da gi&uacute;p gia tăng hiệu quả sản phẩm cao nhất . Tuy nhi&ecirc;n phương ph&aacute;p n&agrave;y c&oacute; x&acirc;m lấn , hạn chế người d&ugrave;ng v&agrave; phải được thực hiện tại c&aacute;c cơ sở uy t&iacute;n , chuy&ecirc;n nghiệp với m&aacute;y m&oacute;c ti&ecirc;n tiến đi k&egrave;m . Hiệu quả đạt được khi ti&ecirc;m HA l&agrave; 100% &amp; c&oacute; thể k&eacute;o d&agrave;i v&agrave;i th&aacute;ng .</p>\r\n\r\n<p><img alt=\"máy tiêm ha\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/may-tiem-ha.jpg\" style=\"height:711px; width:400px\" /></p>\r\n\r\n<p>Nhiều năm kinh nghiệm trong lĩnh vực chăm s&oacute;c điều trị da , am hiểu &amp; nắm vững cấu tr&uacute;c da của người Việt , c&ocirc;ng ty Ng&ocirc; Thanh Ph&uacute; đ&atilde; kết hợp c&ugrave;ng tập đo&agrave;n dược h&agrave;ng đầu của H&agrave;n Quốc cho ra sản phẩm mới với phương thức mới c&oacute; thể ứng dụng rộng r&atilde;i cho mọi đối tượng , mọi người d&ugrave;ng c&aacute; nh&acirc;n tại nh&agrave; . Cải tiến th&ecirc;m nhiều dưỡng chất tăng mức độ thẩm thấu , GS III khi được chuyển thể sang phương ph&aacute;p lăn kim vẫn đảm bảo hiệu quả cao tuyệt đối , hiệu quả cảm nhận được ngay sau lần sử dụng đầu ti&ecirc;n .</p>\r\n\r\n<p><img alt=\"23519258 1577882255624510 6070771214504198165 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/23519258_1577882255624510_6070771214504198165_n.jpg\" style=\"height:533px; width:400px\" /></p>\r\n\r\n<p><img alt=\"23548262 2377263552499218 1810922013 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/23548262_2377263552499218_1810922013_n.jpg\" style=\"height:299px; width:400px\" /></p>\r\n\r\n<p><em><strong>Bộ cấy nảy mầm da d&ugrave;ng tại nh&agrave; như thế n&agrave;o ?</strong></em></p>\r\n\r\n<p><strong>Quy c&aacute;ch đ&ograve;ng g&oacute;i sản phẩm bao gồm :</strong></p>\r\n\r\n<p>-Ống tinh chất căng b&oacute;ng nảy mầm da GS III</p>\r\n\r\n<p>-Bộ sản phẩm tặng k&egrave;m :</p>\r\n\r\n<p>+Một ống kim lăn từ th&eacute;p kh&ocirc;ng gỉ</p>\r\n\r\n<p>+Một kem dưỡng phục hồi bảo vệ da</p>\r\n\r\n<p>+Hai ống Snail t&aacute;i sinh da mạnh mẽ</p>\r\n\r\n<p><img alt=\"23585065 2377263532499220 1042820699 o\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/23585065_2377263532499220_1042820699_o.jpg\" style=\"height:314px; width:500px\" /></p>\r\n\r\n<p><u><strong>C&aacute;ch d&ugrave;ng :</strong></u></p>\r\n\r\n<p>Vệ sinh da sạch trước khi lăn kim</p>\r\n\r\n<p>Ng&acirc;m kim lăn v&agrave;o cồn 90 độ 10 ph&uacute;t trước khi bắt đầu</p>\r\n\r\n<p>Kim lăn với k&iacute;ch thước 0,3 mm kh&ocirc;ng g&acirc;y tổn thương da kh&ocirc;ng g&acirc;y cảy m&aacute;u , n&ecirc;n c&oacute; thể lăn trực tiếp l&ecirc;n da m&agrave; kh&ocirc;ng cần qua ủ t&ecirc; .</p>\r\n\r\n<p>Lăn đều nhẹ tay theo chiều ngang , chiều dọc &amp; ch&eacute;o da . Lăn tối đa 2 ph&uacute;t .</p>\r\n\r\n<p>Sau đ&oacute; thoa 0,5 mm GS III l&ecirc;n da , vỗ nhẹ cho thấm .</p>\r\n\r\n<p>Sau đ&oacute; nghĩ qua đ&ecirc;m .</p>\r\n\r\n<p>S&aacute;ng ra thoa kem dưỡng bảo vệ da GSIII mỗi ng&agrave;y 1 lần</p>\r\n\r\n<p>Hai ống Snail tặng k&egrave;m c&oacute; t&aacute;c dụng t&aacute;i sinh da mạnh mẽ , tuần chỉ d&ugrave;ng 1 lần .</p>\r\n\r\n<p>bộ nảy mầm da GS III c&oacute; t&aacute;c dụng g&igrave; ?</p>\r\n\r\n<p>GS III chứa hơn 90 % hyaluronic axit c&oacute; t&aacute;c dụng&nbsp; tạo lớp m&agrave;ng nước bảo vệ da hữu hiệu , n&acirc;ng cao khả năng tự chống nắng bảo vệ da lu&ocirc;n khỏe mạnh</p>\r\n\r\n<p>Ức chế melanin l&agrave;m giảm sạm n&aacute;m</p>\r\n\r\n<p>Nhiều dưỡng chất gi&uacute;p da trắng s&aacute;ng , c&agrave;ng b&oacute;ng khỏe mạnh .</p>\r\n\r\n<p><img alt=\"23548041 2377263562499217 899279780 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/23548041_2377263562499217_899279780_n.jpg\" style=\"height:373px; width:500px\" /></p>\r\n', '23517751_1577882195624516_5278102335393434144_n.jpg', 1, 'Hàn Quốc', ' từ 12/11 đến 15/11 mua 1 bộ cấy mầm da GS III được tặng 1 Son Sala trị giá 320.000', 'Sản phẩm được sử dụng rộng rãi nhiều viện thẩm mỹ & spa toàn quốc kèm theo cam kết , bất kỳ phản ứng dị ứng nào xảy ra trong 1 tuần đều được hoàn tiền 100%', 'toàn quốc', '');
INSERT INTO `table_sanpham` (`idsanpham`, `tensanpham`, `mota`, `giaban`, `giakhuyenmai`, `noidung`, `anhsp`, `idloaisanpham`, `hangsanxuat`, `khuyenmai`, `baohanh`, `diadiemban`, `ghichu`) VALUES
(7, 'Detox thanh lọc da thải độc tố trắng da', 'Hàng ngày, làn da của chúng ta phải tiếp xúc với vô số chất bẩn: Bụi khói từ xe cộ, vi khuẩn từ bàn tay, điện thoại, dầu nhờn tích trong lỗ chân lông khiến vi khuẩn sinh sôi… Lâu ngày, những độc tố tích tụ này sẽ khiến da xuống cấp trầm trọng từ trong ra ngoài, không những bề mặt da xám xịt, sần sùi, dễ mụn mà sức đề kháng của da cũng yếu đi, dễ dị ứng và mẩn đỏ hơn. Hiểu được tác hại của việc bị nhiễm độc & tích tụ độc tố trên da gây ảnh hưởng nghiêm trọng không chỉ cho da mà còn sức khỏe người sử dụng nên nạ thải độc tố trắng da OXY CARBON ra đời, giúp đẩy lùi các tác nhân gây hại , làm sạch bảo vệ da tối ưu & đào thải độc tố hữu hiệu. Bộ sản phẩm có 2 ống : 1 ống detox thải độc da & 1 ống tinh chất C đậm đặc, sử dụng được trên 10 lần thải độc thanh tẩy độc tố, làm trắng da.', 450000, 0, '<p>H&agrave;ng ng&agrave;y, l&agrave;n&nbsp;<a href=\"http://kenh14.vn/suc-khoe-gioi-tinh/dap-mat-na-cuu-nguy-cho-lan-da-thuong-xuyen-thuc-khuya-20150817033355987.chn\" target=\"_blank\" title=\"da\">da</a>&nbsp;của ch&uacute;ng ta phải tiếp x&uacute;c với v&ocirc; số chất bẩn: Bụi kh&oacute;i từ xe cộ, vi khuẩn từ b&agrave;n tay, điện thoại, dầu nhờn t&iacute;ch trong lỗ ch&acirc;n l&ocirc;ng khiến vi khuẩn sinh s&ocirc;i&hellip; L&acirc;u ng&agrave;y, những độc tố t&iacute;ch tụ n&agrave;y sẽ khiến da xuống cấp trầm trọng từ trong ra ngo&agrave;i, kh&ocirc;ng những bề mặt da x&aacute;m xịt, sần s&ugrave;i, dễ mụn m&agrave; sức đề kh&aacute;ng của da cũng yếu đi, dễ dị ứng v&agrave; mẩn đỏ hơn.</p>\r\n\r\n<p>Do đ&oacute; l&agrave;n da cũng cần được detox &ndash; thanh lọc giống như c&aacute;ch ch&uacute;ng ta sử dụng nước tr&aacute;i c&acirc;y để thanh tẩy cơ thể. Khi những độc tố s&acirc;u b&ecirc;n trong da được loại bỏ, l&agrave;n da sẽ khỏe v&agrave; đẹp hơn hẳn việc chỉ d&ugrave;ng mỹ phẩm t&aacute;c động b&ecirc;n ngo&agrave;i.&nbsp;</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; một số c&aacute;ch hiệu quả để thanh lọc da ngay tại nh&agrave;, h&atilde;y tham khảo nh&eacute;!</p>\r\n\r\n<p><strong>Uống nước</strong></p>\r\n\r\n<p>Nước l&agrave; c&aacute;ch nhanh &amp; cần nhất để thanh lọc da v&agrave; cơ thể . Duy tr&igrave; th&oacute;i quan bổ sung 1.5 đến 2 l&iacute;t nước mỗi ng&agrave;y ! rất rất rất nhiều c&ocirc;ng dụng kh&ocirc;ng thể kể ra hết đấy. Th&ecirc;m v&agrave;i loại nước tr&aacute;i c&acirc;y chứa Vitamin C gi&uacute;p cho việc thải độc tố diễn ra nhanh hơn.</p>\r\n\r\n<p><img alt=\"nước uống thah loc\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/nuoc-uong-thah-loc.jpg\" style=\"height:170px; width:297px\" /></p>\r\n\r\n<p><strong>Ăn &ldquo;sạch&rdquo;</strong></p>\r\n\r\n<p>Th&ecirc;m v&agrave;o chế độ ăn uống của bạn những dưỡng chất từ thi&ecirc;n nhi&ecirc;n rau quả , tr&aacute;i c&acirc;y. điều n&agrave;y kh&ocirc;ng những tốt cho việc thanh lọc da , m&agrave; c&ograve;n thanh lọc cơ thể &amp; mang đến v&ocirc; v&agrave;ng lợi &iacute;ch kh&aacute;c . Bổ sung th&ecirc;m rau v&agrave;o chế độ ăn h&agrave;ng ng&agrave;y l&agrave; việc kh&ocirc;ng bao giờ thừa, nhưng nhớ rằng phải lựa chọn rau sạch nh&eacute; ! Nếu kh&ocirc;ng hậu quả c&ograve;n kh&oacute; lường hơn nữa.</p>\r\n\r\n<p><img alt=\"thức ăn thanh loc 1\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/thuc-an-thanh-loc-1.jpg\" style=\"height:170px; width:292px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"thuc an thah loc 2\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/thuc-an-thah-loc-2.jpg\" style=\"height:172px; width:297px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"thuc an thah loc 3\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/thuc-an-thah-loc-3.jpg\" style=\"height:170px; width:321px\" /></p>\r\n\r\n<p><strong>Liệu ph&aacute;p hơi n&oacute;ng</strong></p>\r\n\r\n<p>Những lỗ ch&acirc;n l&ocirc;ng &ldquo;đ&oacute;ng k&iacute;n&rdquo; khiến chất bẩn t&iacute;ch tụ l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y xỉn m&agrave;u da, nổi mụn. B&ecirc;n cạnh việc rửa mặt, thỉnh thoảng, x&ocirc;ng mặt để l&agrave;m sạch s&acirc;u c&aacute;c lỗ ch&acirc;n l&ocirc;ng sẽ gi&uacute;p da &ldquo;thở&rdquo; v&agrave; sạch sẽ hơn nhiều đấy! Đơn giản th&ocirc;i 1 t&ocirc; nước n&oacute;ng th&ecirc;m v&agrave;i hạt muối v&agrave;o, hoặc si&ecirc;ng hơn l&agrave; nấu nước l&aacute; tr&agrave; xanh , tr&ugrave;m khăn k&iacute;n &amp; để mặt c&aacute;ch t&ocirc; nước chừng 30 cm , để cho hơi nước x&ocirc;ng v&agrave;o da, t&aacute;c dụng cực kỳ tốt.</p>\r\n\r\n<p><img alt=\"xog hoi mat\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/xog-hoi-mat.jpg\" style=\"height:297px; width:297px\" /></p>\r\n\r\n<p><strong>Tẩy da chết</strong></p>\r\n\r\n<p>C&aacute;c mảng da chết &ldquo;xếp lớp&rdquo; tr&ecirc;n da cộng với bụi bẩn l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y tắc nghẽn lỗ ch&acirc;n l&ocirc;ng. Muốn da đẹp v&agrave; mịn m&agrave;ng, bạn kh&ocirc;ng n&ecirc;n bỏ qua việc tẩy da chết đều đặn. H&atilde;y thử l&agrave;m sạch da với bột tẩy kỳ handmade, chắc chắn kết quả mang lại cho bạn sẽ kh&ocirc;ng tồi. Một &iacute;t bột tẩy kỳ cho v&agrave;o l&ograve;ng b&agrave;n tay, th&ecirc;m ch&uacute;t nước hoặc sữa tươi kh&ocirc;ng đường, thoa l&ecirc;n da massage một ph&uacute;t, rửa mặt sạch lại với nước, bạn c&oacute; ngay l&agrave;n da trắng s&aacute;ng. Nhưng lưu &yacute; sau tẩy da chết n&ecirc;n hạn chế ra nắng 3 giờ sau đ&oacute;, l&agrave;m buổi tối c&agrave;ng tốt &amp; sau khi tẩy da chết x&ocirc;ng nhớ để da th&ocirc;ng tho&aacute;ng ko n&ecirc;n thoa kem v&agrave;o ngay nh&eacute; .</p>\r\n\r\n<p><img alt=\"tdc\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/tdc.jpg\" style=\"height:170px; width:246px\" /></p>\r\n\r\n<p><strong>Đắp mặt nạ:</strong></p>\r\n\r\n<p>Đ&acirc;y l&agrave; bước quan trọng cho ph&eacute;p da được thư gi&atilde;n sau một tuần mệt nhọc, gi&uacute;p c&aacute;c dưỡng chất thấm s&acirc;u để thanh lọc da hiệu quả nhất. c&oacute; thể d&ugrave;ng c&aacute;c loại nạ thi&ecirc;n nhi&ecirc;n cho tiết kiệm hoặc sang hơn mỗi tuần 1 lần t&aacute;i sinh da với nạ Yerma H&agrave;n Quốc, ph&eacute;p m&agrave;u như hiện l&ecirc;n tr&ecirc;n da bạn, trắng v&agrave; mịn khỏi ch&ecirc;.</p>\r\n\r\n<p><img alt=\"yerma\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/yerma.jpg\" style=\"height:194px; width:260px\" /></p>\r\n\r\n<p>Để thanh lọc da c&oacute; rất nhiều c&aacute;ch v&agrave; tốt nhất n&ecirc;n c&oacute; sự kết hợp trong uống ngo&agrave;i thoa. Hiểu được tầm quan trọng của việc l&agrave;m sạch da &amp; t&aacute;c hại kh&ocirc;n lường của đa số da của phụ nữ Việt hiện nay, nh&atilde;n h&agrave;ng Natural spa mất 1 năm để nghi&ecirc;n cứu &amp; cho ra đời sản phẩm đ&agrave;o thải ,thanh tẩy &amp; thải độc da chứa ho&agrave;n to&agrave;n nguy&ecirc;n liệu l&agrave;nh t&iacute;nh để đảm bảo rằng mọi loại da, nhất l&agrave; da đang yếu, dễ mẫn cảm , ngứa đỏ &amp; phụ thuộc kem đều c&oacute; thể sử dụng được.</p>\r\n\r\n<p><img alt=\"15036180 2136221076603468 5793845638912439909 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/15036180_2136221076603468_5793845638912439909_n.jpg\" style=\"height:198px; width:297px\" /></p>\r\n\r\n<p>Chứa Carbonate bubble clay , oxydie, axit xitric, vitamin c,nước Carbon 51.62 %, chiết xuất quả c&acirc;y xương rồng,.. nạ thải độc chứa ph&acirc;n tử oxy Carbom dễ d&agrave;ng len lỏi v&agrave;o s&acirc;u ch&acirc;n l&ocirc;ng , mở kh&oacute;a biểu b&igrave; da &amp; l&agrave;m sạch tận đ&aacute;y da, cảm gaic bạn trải nghiệm như liệu tr&igrave;nh bơm oxy gen trực tiếp v&agrave;o da ở spa chuyen nghiệp với chi ph&iacute; đắt đỏ, th&igrave; đ&acirc;y chưa tới 50k cho 1 lần thải độc tố tại nh&agrave; sẽ cho bạn cảm gi&aacute;c đ&oacute;.</p>\r\n\r\n<p>Chưa dừng lại ở đ&oacute;, sản phẩm đi k&egrave;m ống tinh chất C đậm đặc, liều trịnh truyền C tại spa lại 1 lần nữa được đưa về nh&agrave; bạn. Trải nghiệm ngay &quot;handmade spa&quot; tại nh&agrave; với chi ph&iacute; cực kỳ rẻ, m&agrave; hiệu quả mang về ch&iacute;nh bạn sẽ bất ngờ.</p>\r\n\r\n<p><img alt=\"14993475 2136221099936799 3991820207178981010 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/14993475_2136221099936799_3991820207178981010_n_1.jpg\" style=\"height:198px; width:297px\" /></p>\r\n\r\n<p>Sau hơn 1 năm nghi&ecirc;n cứu th&igrave; Nạ thải độc Oxy Carbon l&agrave; sự kế thừa v&agrave; ph&aacute;t huy t&aacute;c dụng cảu 2 c&ocirc;ng nghệ spa h&oacute;t nhất hiện nay ; oxy gen &amp; truyền C . mang lại cho bạn l&agrave;n da th&ocirc;ng tho&aacute;ng , sạch sẽ, mịn m&agrave;ng &amp; trắng s&aacute;ng l&agrave; điều kh&ocirc;ng qu&aacute; xa xỉ . Hơn nữa, với đa số kh&aacute;ch h&agrave;ng hiện nay , khi soi da ra mới thấy kim loại, ch&igrave; b&aacute;m v&agrave;o da rất nhiều , th&ecirc;m t&iacute;nh phụ thuộc của kem cũ đang sử dụng l&agrave;m bạn kh&ocirc;ng thể n&agrave;o bu&ocirc;ng bỏ d&ugrave; biết m&igrave;nh d&ugrave;ng sản phẩm nguy hiểm th&igrave; đ&acirc;y Nạ thải độc tố trắng da OXY CARBON l&agrave; bảo bối gi&uacute;p bạn đ&aacute;nh tan những lo lắng đ&oacute;.</p>\r\n\r\n<p><img alt=\"15094310 2136221049936804 728737492436547599 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/15094310_2136221049936804_728737492436547599_n_1.jpg\" style=\"height:198px; width:297px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"14980782 2136221126603463 650850087968588931 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/14980782_2136221126603463_650850087968588931_n_1.jpg\" style=\"height:198px; width:297px\" /></p>\r\n\r\n<p><u><strong>C&aacute;ch sử dụng kh&aacute; đơn giản :</strong></u></p>\r\n\r\n<p>-lấy &ocirc;ng detox cho ra tay v&agrave; thoa đều khắp mặt lớp mỏng vừa đủ</p>\r\n\r\n<p>-nằm y&ecirc;n thư gi&atilde;n cho bọt kh&iacute; thải đều tr&ecirc;n da</p>\r\n\r\n<p>-masage lại lần nữa cho sạch</p>\r\n\r\n<p>-Rửa mặt sạch với nước ấm</p>\r\n\r\n<p>-lấy ống C tinh chất thoa l&ecirc;n da.</p>\r\n\r\n<p>Cảm nhận ngay l&agrave;n da trắng hồng s&aacute;ng mịn v&agrave; nhẹ nh&agrave;ng th&ocirc;ng tho&aacute;ng v&agrave;o s&aacute;ng h&ocirc;m sau nh&eacute; !</p>\r\n', 'xog-hoi-mat.jpg', 1, 'công ty TMSXMP Ngô Thanh Phú', '2000 sản phẩm đầu tiên tặng ngay ống tinh chất C đậm đặc , duy trì nuôi dưỡng da & tăng tính khỏe mạnh chống nắng tự nhiên cho da.', 'BAO DỊ ỨNG HOÀN TIỀN 100 %', 'toàn quốc', 'Sản phẩm dùng được cho mọi loại da trừ da viêm nhiễm quá nặng trị bằng kháng sinh , hoặc da mụn bọc, mụn mạch lươn không được sử dụng.'),
(8, 'Kem đặc trị mụn thâm ACNE', 'Tổng hợp các nguyên liệu quá hiếm & hữu ích , kem ngăn ngừa trị mụn Prevention ACNE cream giúp bạn loại bỏ mụn 1 cách nhanh chóng trên cơ chế đẩy sạch nhân mụn & làm khô đầu mụn , nên sau quá trình sử dụng mụn sẽ tự se đầu & đẩy nhân mà không gây thương tổn cho da , đặc biệt ko bị phụ thuộc kem & ngăn ngừa mụn tái phát.', 280000, 0, '<p><em>►&nbsp;Bạn c&oacute; biết hơn&nbsp;80% d&acirc;n số thế giới ở độ tuổi dậy th&igrave; phải đối mặt với mụn v&agrave; trong số đ&oacute; hơn 50% lại hứng chịu những t&agrave;n dư sẹo, th&acirc;m,... sau khi điều&nbsp;mụn suốt đời?</em></p>\r\n\r\n<p><em>►&nbsp;Bạn c&oacute; biết kem trị mụn l&agrave; một trong những giải ph&aacute;p tối ưu gi&uacute;p trị mụn nhanh ch&oacute;ng v&agrave; hiệu quả, được hơn 90% người sử dụng tr&ecirc;n thế giới lựa chọn thay v&igrave; c&aacute;c phương ph&aacute;p trị mụn kh&aacute;c như d&ugrave;ng mặt nạ trị mụn từ thi&ecirc;n nhi&ecirc;n, trị mụn bằng laser...?</em></p>\r\n\r\n<p><strong>&rArr;&nbsp;Nhưng làm sao đ&ecirc;̉ tìm được m&ocirc;̣t sản ph&acirc;̉m chuy&ecirc;n trị mụn an toàn, hi&ecirc;̣u quả t&ocirc;́t nh&acirc;́t?</strong></p>\r\n\r\n<p><strong>Preventinon ACNE Cream</strong>&nbsp;là sản ph&acirc;̉m đặc trị các loại mụn, nh&acirc;́t là mụn bọc, mụn vi&ecirc;m và mụn &acirc;̉n dưới da. Khi sử dụng preventinon ACNE Cream , nh&acirc;n mụn sẽ được đ&acirc;̉y h&ecirc;́t l&ecirc;n b&ecirc;̀ mặt da. Sau đó kh&ocirc; lại và tự rụng còi. Hi&ecirc;̣u quả phát huy rõ r&ecirc;̣t chỉ sau 2 - 3 tu&acirc;̀n. Sau đó ti&ecirc;́p tục duy trì sản ph&acirc;̉m sẽ giúp v&ecirc;́t th&acirc;m sau mụn giảm đi đáng k&ecirc;̉. Hi&ecirc;̣u quả kép của&nbsp;preventinon ACNE Cream chính&nbsp;là lí do tại sao sản ph&acirc;̉m này lu&ocirc;n được các khách hàng tin tưởng và ưa dùng ngay từ khi ra đời đ&ecirc;́n giờ.&nbsp;<strong>Chưa m&ocirc;̣t trường hợp phàn nàn v&ecirc;̀ dòng sản ph&acirc;̉m này.</strong></p>\r\n\r\n<p><img alt=\"12576325 1948874998671411 1937857565 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/source/12576325_1948874998671411_1937857565_n.jpg\" style=\"height:325px; width:605px\" /></p>\r\n\r\n<p><strong>Thành ph&acirc;̀n thảo dược của kem đặc trị mụn &amp; th&acirc;m ACNE:</strong></p>\r\n\r\n<p>Preventinon ACNE Cream được chiết xuất từ c&aacute;c loại thảo mộc phương đ&ocirc;ng , gi&uacute;p da bạn được l&agrave;m dịu nhanh ch&oacute;ng , giảm sưng vi&ecirc;m &amp; nhanh l&agrave;m l&agrave;nh vết thương<br />\r\n&diams;&nbsp;Nước c&acirc;y phỉ l&agrave;m da m&aacute;t lạnh , kh&ocirc; đầu mụn &amp; đẩy nh&acirc;n mụn l&ecirc;n bề mặt da , sau đ&oacute; tự l&agrave;m kh&ocirc; &amp; c&ograve;i mụn dễ d&agrave;ng được l&agrave;m sạch .</p>\r\n\r\n<p><img alt=\"111\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/source/111.jpg\" style=\"height:320px; width:320px\" /></p>\r\n\r\n<p>&diams;&nbsp;Gel nha đam chống vi&ecirc;m , l&agrave;m se kh&iacute;t ch&acirc;n l&ocirc;ng</p>\r\n\r\n<p><img alt=\"download\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/source/download.jpg\" style=\"height:216px; width:325px\" /></p>\r\n\r\n<p>&diams;&nbsp;Chiết xuất tr&agrave;m tr&agrave; l&agrave;m giảm sưng đỏ ngay lập tức , đặc biệt tốt cho da mụn bọc nhiễm tr&ugrave;ng</p>\r\n\r\n<p><img alt=\"download (3)\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/source/download-3.jpg\" style=\"height:206px; width:328px\" /></p>\r\n\r\n<p><br />\r\n&diams;&nbsp;Tinh chất tr&agrave; xanh chống l&atilde;o ho&aacute; l&agrave;m mờ vết th&acirc;m &amp; trắng da</p>\r\n\r\n<p><img alt=\"images (1)\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/source/images-1.jpg\" style=\"height:262px; width:350px\" /></p>\r\n\r\n<p><br />\r\n&diams;&nbsp;Rễ cam thảo , d&acirc;u tằm l&agrave;m da s&aacute;ng mịn &amp; h&uacute;t sạch nhờn cho da gi&uacute;p việc ngăn ngừa mụn tối đa</p>\r\n\r\n<p><img alt=\"download (4)\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/source/download-4.jpg\" style=\"height:220px; width:330px\" /></p>\r\n\r\n<p><br />\r\nT&ocirc;̉ng hợp c&aacute;c nguy&ecirc;n liệu qu&aacute; hiếm &amp; hữu &iacute;ch , kem ngăn ngừa trị mụn Prevention ACNE cream gi&uacute;p bạn loại bỏ mụn 1 c&aacute;ch nhanh ch&oacute;ng tr&ecirc;n cơ chế đẩy sạch nh&acirc;n mụn &amp; l&agrave;m kh&ocirc; đầu mụn , n&ecirc;n sau qu&aacute; tr&igrave;nh sử dụng mụn sẽ tự se đầu &amp; đẩy nh&acirc;n m&agrave; kh&ocirc;ng g&acirc;y thương tổn cho da , đặc biệt ko bị phụ thuộc kem &amp; ngăn ngừa mụn t&aacute;i ph&aacute;t.<br />\r\n<strong>C&aacute;ch sử dụng :</strong>&nbsp;ng&agrave;y d&ugrave;ng kem 1 ,2 lần . S&aacute;ng rửa mặt sạch thoa 1 lớp kem vừa đủ l&ecirc;n da , trưa vệ sinh da sạch với sửa rửa mặt , để da th&ocirc;ng tho&aacute;ng 1 tiếng &amp; c&oacute; thể thoa th&ecirc;m 1 lần nữa tuỳ &yacute; .</p>\r\n\r\n<p>►Nếu da mụn mủ vi&ecirc;m nhiều th&igrave; n&ecirc;n kết hợp th&ecirc;m GEL NHA ĐAM mỗi tối , nếu kh&ocirc;ng n&ecirc;n để da th&ocirc;ng tho&aacute;ng v&agrave;o ban đ&ecirc;m &amp; kh&ocirc;ng sử dụng bất kỳ mỹ phẩm g&igrave; .<br />\r\n<strong>LƯU Ý:</strong>&nbsp;da mụn l&agrave; da cực kh&oacute; chăm s&oacute;c &amp; dễ l&acirc;y lan . Ngo&agrave;i sử dụng mỹ phẩm kh&aacute;ch cần :<br />\r\n&bull;&nbsp;Uống nhiều nước , ăn nhiều rau quả tr&aacute;i c&acirc;y thanh lọc da<br />\r\n&bull;&nbsp;Vệ sinh da thật sạch với sửa rửa mặt ng&agrave;y &iacute;t nhất 2 lần &amp; bằng nước thường &iacute;t nhất 4 lần<br />\r\n&bull;&nbsp;Vệ sinh khăn mặt &amp; grap giường &aacute;o gối thường xuy&ecirc;n mỗi ng&agrave;y<br />\r\n&bull;&nbsp;Kh&ocirc;ng nặn mụn bừa b&atilde;i<br />\r\n&bull;&nbsp;Nặn sạch nh&acirc;n mụn sau 2 tuần sử dụng để tẩy sạch nh&acirc;n mụn.</p>\r\n', '12576325_1948874998671411_1937857565_n.jpg', 1, 'công ty TMSXMP Ngô Thanh Phú', '', '', '148 Nguyễn Sỹ Sách, phường 15, quận Tân Bình', ''),
(9, ' Serum nhau thai cừu làm trắng da và chống lão hóa', 'Nám da và lão hóa là tình trạng thường hay gặp ở nhiều chị em phụ nữ, đặc biệt là ở độ tuổi 35, nám da bắt đầu xuất hiện cũng là lúc cho chúng ta biết da đã bắt đầu lão hóa. Không ít chị em đã tự tìm cho mình nhiều giải pháp khác nhau để cải thiện tình trạng cho da. Nhưng hầu hết đều không mang lại kết quả như mong muốn mà còn khiến bạn tốn nhiều thời gian và tiền bạc. Tuy nhiên, ít ai biết rằng chỉ với Serum tế bào gốc nhau thai cừu Natual Spa 100% từ thiên nhiên sẽ giúp bạn chiếm lại sự tươi trẻ cho làn da như trước.', 240000, 0, '<h3>&quot;C&ocirc;ng nghệ l&agrave;m trắng, t&aacute;i tạo v&agrave; trẻ h&oacute;a l&agrave;n da&quot;</h3>\r\n\r\n<p><img alt=\"12498972 1940708242821420 1802037323 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/12498972_1940708242821420_1802037323_n.jpg\" style=\"height:293px; width:546px\" /></p>\r\n\r\n<p>Serum tế b&agrave;o gốc nhau thai cừu được sản xuất dựa tr&ecirc;n d&acirc;y chuyền hiện đại gi&uacute;p mang lại cho chị em phụ nữ một l&agrave;n da hồng h&agrave;o tươi trẻ như tuổi thanh xu&acirc;n. Serum nhau thai cừu của nh&atilde;n h&agrave;ng Natural Spa l&agrave; sản phẩm cao cấp rất tốt cho việc ngăn ngừa v&agrave; chống oxy h&oacute;a cho da, gi&uacute;p th&uacute;c đẩy qu&aacute; tr&igrave;nh phục hồi những thương tổn ở da, cải thiện l&agrave;n da trắng s&aacute;ng, mịn m&agrave;ng. Tế b&agrave;o gốc trong sản phẩm được chiết xuất ở dạng tinh khiết nhất, đảm bảo giữ nguy&ecirc;n gi&aacute; trị sinh học của nhau thai cừu. Ở dạng lỏng, tinh chất đặc biệt n&agrave;y dễ d&agrave;ng thẩm thấu v&agrave;o c&aacute;c lớp da, tiếp cận v&agrave; chữa l&agrave;nh những tổn thương. Qua đ&oacute;, serum nhau thai cừu Natural th&uacute;c đẩy phục hồi to&agrave;n diện những dấu hiệu&nbsp;tuổi t&aacute;c ở da, tăng t&iacute;nh &nbsp;đ&agrave;n hồi gi&uacute;p da trở lại đặc t&iacute;nh co gi&atilde;n, mềm dẻo, mịn m&agrave;ng. Ngo&agrave;i ra tinh chất tế b&agrave;o gốc nhau thai cừu c&ograve;n c&oacute; t&aacute;c dụng cải thiện sắc tố da v&agrave; đ&agrave;o thải tế b&agrave;o chết. Đồng thời sản sinh tế b&agrave;o mới, igups t&aacute;i sinh l&agrave;n da sạm m&agrave;u, x&oacute;a mờ đốm n&acirc;u, cải thiện lỗ ch&acirc;n l&ocirc;ng to gi&uacute;p l&agrave;n da s&aacute;ng đều m&agrave;u rạng rỡ...</p>\r\n\r\n<p><strong>ĐIỂM NỔI BẬT CỦA SERUM NHAU THAI&nbsp;CỪU</strong></p>\r\n\r\n<p><img alt=\"serum12 (1)\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/serum12-1.jpg\" style=\"height:350px; width:568px\" /></p>\r\n\r\n<p>SERUM NHAU THAI CỪU NATURAL SPA c&oacute; ưu điểm&nbsp;ch&iacute;nh l&agrave; khả năng l&agrave;m trắng da v&agrave; chống l&atilde;o h&oacute;a</p>\r\n\r\n<p>Ngo&agrave;i ra Serum nhau thai cừu c&ograve;n k&iacute;ch th&iacute;ch sản sinh tế b&agrave;o mới, l&agrave;m trẻ h&oacute;a c&aacute;c tế b&agrave;o gi&agrave; gi&uacute;p l&agrave;n da tươi trẻ hơn&nbsp;</p>\r\n\r\n<p>Sử dụng ki&ecirc;n tr&igrave; đều đặn Serum nhau thai cừu trong 1 thời gian bạn sẽ cảm nhận được độ mềm, mượt của l&agrave;n da được tăng cường độ ẩm n&ecirc;n sẽ&nbsp;được trẻ h&oacute;a v&agrave; chống nhăn chống sạm hiệu quả.</p>\r\n\r\n<p><strong>TH&Agrave;NH PHẦN CỦA SERUM NHAU CỪU TƯƠI</strong></p>\r\n\r\n<p>Serum Nhau Cừu Tươi với dịch chiết đậm đặc , bổ sung đủ chất cho da hữu hiệu &amp; mang lại hiệu quả tức th&igrave; .</p>\r\n\r\n<p>&diams; Chiết xuất nhau cừu tươi :chứa hơn 1000 axit amin &amp; hoạt chất l&agrave;m đầy nu&ocirc;i dưỡng da từ b&ecirc;n trong với cấu tr&uacute;c tương ứng tế b&agrave;o gốc người</p>\r\n\r\n<p>&diams; Mỡ cừu : l&agrave;m ẩm &amp; mềm mại da , chống kh&ocirc; nẻ &amp; đặc biệt kh&ocirc;ng g&acirc;y nhờn.</p>\r\n\r\n<p>&diams; Dịch chiết d&acirc;u t&acirc;y l&agrave;m da thanh m&aacute;t , se kh&iacute;t ch&acirc;n l&ocirc;ng &amp; ngăn ngừa mụn , chống l&atilde;o ho&aacute; da</p>\r\n\r\n<p>&diams; Nước c&acirc;y phỉ : trơn mượt da, gi&uacute;p da căng b&oacute;ng khoẻ mạnh, trị sạm n&aacute;m da</p>\r\n\r\n<p>&diams; Tinh chất tr&agrave;m tr&agrave; : hổ trợ điều trị mụn kiểm so&aacute;t dầu nhờn , se kh&iacute;t ch&acirc;n l&ocirc;ng</p>\r\n\r\n<p><em><strong>Tổng hợp dưỡng chất tối ưu , Serum dưỡng da chiết xuất từ Nhau Cừu cho da vẻ đẹp ho&agrave;n hảo mỗi ng&agrave;y</strong></em></p>\r\n\r\n<p><strong>C&Aacute;CH SỬ DỤNG SERUM NHAU CỪU TƯƠI</strong></p>\r\n\r\n<p><img alt=\"996702 1940448459514065 5809089272265802496 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/996702_1940448459514065_5809089272265802496_n.jpg\" style=\"height:373px; width:561px\" /></p>\r\n\r\n<p>►Mỗi ng&agrave;y 3 giọt serum, nhỏ ra tay &amp; massage nhẹ nh&agrave;ng khắp mặt , c&oacute; thể thoa kết hợp c&ugrave;ng kem dưỡng trắng da ph&ugrave; hợp cho hiệu quả cao hơn.</p>\r\n\r\n<p><strong>QUY C&Aacute;CH Đ&Oacute;NG G&Oacute;I:</strong>&nbsp;Chai 15 ml trong suốt , kh&ocirc;ng m&agrave;u , ko m&ugrave;i .</p>\r\n', '12498972_1940708242821420_1802037323_n.jpg', 1, 'công ty TMSXMP Ngô Thanh Phú', '', '', '', ''),
(10, 'Kem siêu tái tạo thay da GREEN TEA ', 'GREEN TEA được chiết xuất từ lá trà xanh, lá trầu không cùng một số thảo dược và hoạt chất làm trắng theo công nghệ NANO phân tử. Kem siêu tái tạo GREEN TEA sẽ bóc tách tế bào da sạm nám thâm đen trên bề mặt da và thay vapf làn da mới trắng hồng mịn màng hơn... Sử dụng bộ đôi GREEN TEA chỉ trong 15 ngày, da bạn sẽ được lột xác hoàn toàn trắng hồng rạng rỡ hơn', 540000, 0, '<p><img alt=\"images (3)\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/images-3.jpg\" style=\"height:191px; width:263px\" /></p>\r\n\r\n<p>Khi l&agrave;m việc mệt mỏi trong thời gian d&agrave;i hay bước v&agrave;o độ tuổi gần 30 l&agrave;n da của phụ nữ thường xấu đi rất nhiều. Một trong những biện ph&aacute;p để &ldquo;cứu c&aacute;nh&rdquo; cho l&agrave;n da đ&oacute; l&agrave; d&ugrave;ng&nbsp;<strong>&nbsp;tr&agrave; xanh dưỡng da</strong>&nbsp;để c&oacute; được vẻ đẹp ho&agrave;n thiện hơn. C&ocirc;ng dụng của&nbsp;<strong>tr&agrave; xanh</strong>&nbsp;tươi trong việc l&agrave;m đẹp<strong>&nbsp;</strong>gi&uacute;p c&aacute;c n&agrave;ng c&oacute; một l&agrave;n da sạch mụn, chống sự l&atilde;o h&oacute;a nhanh ch&oacute;ng của da, duy tr&igrave; n&eacute;t tươi trẻ cuốn h&uacute;t tr&ecirc;n gương mặt. Tr&agrave; xanh l&agrave; một trong những thần dược l&agrave;m đẹp được y&ecirc;u th&iacute;ch nhất của phụ nữ nhật bản, c&oacute; nhiều dạng tr&agrave; xanh như bột tr&agrave; xanh nguy&ecirc;n chất hay tr&agrave; xanh tươi. Với c&aacute;c bạn g&aacute;i c&oacute; điều kiện sử dụng được tr&agrave; xanh tươi sẽ tốt hơn rất nhiều để cải thiện l&agrave;n da kh&ocirc;ng bị mụn, hết mụn c&aacute;m, l&agrave;m s&aacute;ng da, mịn da,&hellip;cho c&aacute;c n&agrave;ng một l&agrave;n da đẹp ho&agrave;n hảo thu h&uacute;t mọi &aacute;nh nh&igrave;n.</p>\r\n\r\n<p><img alt=\"download\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/download.jpg\" style=\"height:206px; width:331px\" /></p>\r\n\r\n<p><strong>V&igrave; sao tr&agrave; xanh dưỡng da hiệu quả?</strong></p>\r\n\r\n<p>Trong tr&agrave; xanh chứa đầy đủ mọi th&agrave;nh phần c&oacute; lợi cho da.&nbsp;<strong>Polyphenol</strong>&nbsp;chiếm h&agrave;m lượng kh&aacute; lớn trong l&aacute; tr&agrave; xanh, khi chế biến th&agrave;nh bột tr&agrave; xanh vẫn giữ được v&agrave; đem đến t&aacute;c dụng khử c&aacute;c gốc tự do. M&agrave; sự ph&aacute;t triển gốc tự do l&agrave; một trong những nguy&ecirc;n nh&acirc;n h&agrave;ng đầu g&acirc;y l&atilde;o h&oacute;a.</p>\r\n\r\n<p><strong>Catechin</strong>&nbsp;trong tr&agrave; xanh c&oacute; khả năng ti&ecirc;u diệt c&aacute;c loại vi khuẩn v&agrave; từ từ loại bỏ c&aacute;c độc tố của ch&uacute;ng.</p>\r\n\r\n<p>L&aacute; tr&agrave; xanh chứa nhiều&nbsp;<strong>vitamin C, E, nh&oacute;m B v&agrave; c&aacute;c kho&aacute;ng chất hữu &iacute;ch</strong>&nbsp;kh&aacute;c gi&uacute;p nu&ocirc;i dưỡng v&agrave; t&aacute;i tạo l&agrave;n da.</p>\r\n\r\n<p><strong>Chlorophyl&nbsp;</strong>đ&agrave;o thải được c&aacute;c chất độc, kim loại nặng trong cơ thể, th&uacute;c đấy qu&aacute; tr&igrave;nh trao đổi chất nhanh hơn đến gần 40%, nhờ đ&oacute; m&agrave; qu&aacute; tr&igrave;nh phục hồi, t&aacute;i tạo da cũng nhanh ch&oacute;ng hơn.</p>\r\n\r\n<p><strong>Tr&agrave; xanh</strong>&nbsp;c&ograve;n được người Nhật coi l&agrave; thần dược v&igrave; c&ocirc;ng dụng thần k&igrave; m&agrave; n&oacute; đem lại. Trong l&aacute; tr&agrave; xanh c&oacute; chứa chất chống oxy h&oacute;a cao gấp 20 lần Vitamin E, gi&uacute;p l&agrave;m trắng, ngừa mụn v&agrave; se kh&iacute;t lỗ ch&acirc;n l&ocirc;ng rất tốt.</p>\r\n\r\n<p><img alt=\"images (6)\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/images-6.jpg\" style=\"height:183px; width:275px\" /></p>\r\n\r\n<p>Từ những c&ocirc;ng dụng tuyệt vời của tr&agrave; xanh, Natural Spa đ&atilde; nghi&ecirc;n cứu v&agrave; cho ra đời d&ograve;ng sản phẩm&nbsp;<strong>si&ecirc;u t&aacute;i tạo thay da GREEN TEA&nbsp;</strong>gi&uacute;p bạn tẩy sạch sạm n&aacute;m, đẩy l&ugrave;i c&aacute;c vết th&acirc;m đen sần s&ugrave;i v&agrave; mang lại cho bạn l&agrave;n da mới trắng đẹp tuyệt vời.&nbsp;<strong>KEM SI&Ecirc;U T&Aacute;I TẠO THAY DA - GREEN TEA&nbsp;</strong>gi&uacute;p nu&ocirc;i dưỡng tế b&agrave;o da v&agrave; k&iacute;ch th&iacute;ch dưỡng trắng da&nbsp;từ s&acirc;u b&ecirc;n trong, ngo&agrave;i ra với th&agrave;nh phần chống tia cực t&iacute;m c&oacute; trong sản phẩm gi&uacute;p bảo vệ da bạn cả trong thời gian ngủ dể ho&agrave;n th&agrave;nh quy tr&igrave;nh t&aacute;i tạo tốt nhất trong 15 ng&agrave;y, với những l&agrave;n da sần s&ugrave;i dưỡng da kh&oacute; hấp thu v&agrave; hay bị l&igrave; sau thời gian d&agrave;i sử dụng th&igrave;&nbsp;<strong>GREEN TEA</strong>&nbsp;sẽ gi&uacute;p&nbsp;&nbsp;loại bỏ mảng b&aacute;m tế b&agrave;o chết g&acirc;y tắc nghẽn tr&ecirc;n da gi&uacute;p c&aacute;c bước dưỡng da sẽ hấp thu nhanh v&agrave; đạt hiệu quả cao hơn.</p>\r\n\r\n<p><img alt=\"11822577 1874352636123648 4970182674874481095 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/11822577_1874352636123648_4970182674874481095_n.jpg\" style=\"height:260px; width:519px\" /></p>\r\n\r\n<p>&nbsp;<strong><em>Những c&ocirc;ng dụng tuyệt vời của Kem si&ecirc;u t&aacute;i tạo GREEN TEA:</em></strong></p>\r\n\r\n<p>►&nbsp;Loại bỏ &nbsp;c&aacute;c vết n&aacute;m da sạm da hiệu quả, giải quyết một c&aacute;ch triệt để.&nbsp;</p>\r\n\r\n<p>►&nbsp;Loại bỏ tế b&agrave;o chết g&acirc;y tắc nghẽn da tr&ecirc;n da&nbsp;</p>\r\n\r\n<p>►&nbsp;Kiểm so&aacute;t v&agrave; l&agrave;m mờ c&aacute;c vết th&acirc;m sạm, t&agrave;n nhang v&agrave; đốm n&acirc;u.&nbsp;</p>\r\n\r\n<p>►&nbsp;Tăng cường bảo vệ da khỏi t&aacute;c động ti&ecirc;u cực của m&ocirc;i trường b&ecirc;n ngo&agrave;i.&nbsp;</p>\r\n\r\n<p>►&nbsp;Hạn chế v&agrave; chống lại c&aacute;c t&aacute;c nh&acirc;n oxi ho&aacute;, đồng thời dưỡng ẩm v&agrave; l&agrave;m s&aacute;ng mịn da.&nbsp;</p>\r\n\r\n<p>►&nbsp;Nu&ocirc;i dưỡng k&iacute;ch th&iacute;ch trắng da từ b&ecirc;n trong.<br />\r\n►&nbsp;K&iacute;ch th&iacute;ch da hấp thu dưỡng chất.</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong></p>\r\n\r\n<p><em>Sản phẩm gồm 2 lọ kem ng&agrave;y &amp; đ&ecirc;m. Sử dụng ng&agrave;y 3 lần. S&aacute;ng b&ocirc;i lọ kem ng&agrave;y. Trưa rửa mặt sạch. Để da th&ocirc;ng tho&aacute;ng 1 tiếng sau b&ocirc;i lại 1 lần nữa. Tối b&ocirc;i lọ kem đ&ecirc;m trước khi đi ngủ. Thời gian t&aacute;i tạo từ 10 đến 30 ng&agrave;y t&ugrave;y thể trạng da d&agrave;y, mỏng, yếu, khỏe kh&aacute;c nhau, khoảng thời gian n&agrave;y da sẽ được t&aacute;i tạo ho&agrave;n to&agrave;n, tế b&agrave;o da mới sẽ xuất hiện.</em></p>\r\n\r\n<p><em>GREEN TEA sẽ g&acirc;y kich ứng nhẹ với trường hợp da mỏng &amp; yếu. Tuy nhi&ecirc;n chỉ xuất hiện ửng đỏ nhẹ trong v&agrave;i lần sử dụng đầu ti&ecirc;n.</em></p>\r\n\r\n<p><strong><u>Ch&uacute; &yacute;</u>:&nbsp;</strong>Sử dụng đ&uacute;ng liều lượng v&agrave; theo hướng dẫn. Trong thời gian sử dụng<strong>&nbsp;GREEN TEA</strong>&nbsp;kh&ocirc;ng n&ecirc;n x&agrave;i mỹ phẩm hay c&aacute;c loại kem kh&aacute;c tr&aacute;nh trường hợp c&aacute;c th&agrave;nh phần trong kem phản ứng lẫn nhau g&acirc;y t&aacute;c dụng xấu.</p>\r\n\r\n<p><u><strong>Một số h&igrave;nh ảnh kh&aacute;ch h&agrave;ng Natural Spa&nbsp;trước &amp; sau khi sử dụng GREEN TEA:</strong></u></p>\r\n\r\n<p><u><strong><img alt=\"10154267 1747213312170915 3708724884409745239 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/10154267_1747213312170915_3708724884409745239_n.jpg\" style=\"height:636px; width:456px\" /></strong></u></p>\r\n\r\n<p><img alt=\"11873537 1874352696123642 5210668684666183980 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/11873537_1874352696123642_5210668684666183980_n.jpg\" style=\"height:450px; width:450px\" /></p>\r\n\r\n<p><img alt=\"11866424 1874352656123646 3700400549498274761 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/11866424_1874352656123646_3700400549498274761_n.jpg\" style=\"height:640px; width:468px\" /></p>\r\n\r\n<p><img alt=\"12032137 1898955510330027 6811596660980927426 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/12032137_1898955510330027_6811596660980927426_n.jpg\" style=\"height:640px; width:475px\" /></p>\r\n\r\n<p><img alt=\"12036522 1898955383663373 514453229330024338 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/12036522_1898955383663373_514453229330024338_n.jpg\" style=\"height:544px; width:544px\" /></p>\r\n\r\n<p><img alt=\"11866327 1874352786123633 1008229784873510791 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/11866327_1874352786123633_1008229784873510791_n.jpg\" style=\"height:622px; width:464px\" /></p>\r\n\r\n<p><img alt=\"10885268 1747213628837550 4630954255284187479 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/10885268_1747213628837550_4630954255284187479_n.jpg\" style=\"height:581px; width:436px\" /></p>\r\n\r\n<p><img alt=\"11855863 1874352646123647 7957475937122221771 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/11855863_1874352646123647_7957475937122221771_n.jpg\" style=\"height:640px; width:360px\" /></p>\r\n\r\n<p><img alt=\"10393680 1747213248837588 7357034352991796449 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/10393680_1747213248837588_7357034352991796449_n.jpg\" style=\"height:639px; width:547px\" /></p>\r\n\r\n<p><img alt=\"541603 1747213645504215 5490291003298733596 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/541603_1747213645504215_5490291003298733596_n.jpg\" style=\"height:640px; width:479px\" /></p>\r\n\r\n<p><img alt=\"10360952 1747213715504208 2485395724089458052 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/10360952_1747213715504208_2485395724089458052_n.jpg\" style=\"height:614px; width:492px\" /></p>\r\n\r\n<p><img alt=\"10393842 1747214038837509 5119681643728067408 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/temp_pic/10393842_1747214038837509_5119681643728067408_n.jpg\" style=\"height:860px; width:484px\" /></p>\r\n\r\n<p>Sản phẩm được sản xuất &amp; ph&acirc;n phối bởi c&ocirc;ng ty TNHH Thương Mại &amp; Sản Xuất Mỹ Phẩm Ng&ocirc; Thanh Ph&uacute; mang thương hiệu Natural Spa :</p>\r\n\r\n<p>Địa chỉ : 148 Nguyễn Sỹ S&aacute;ch P. 15 Q. T&acirc;n B&igrave;nh TPHCM</p>\r\n\r\n<p><strong>Hotline</strong>&nbsp;:( 08)38158858 - 0946896642</p>\r\n\r\n<p><strong><u>&nbsp;Sản phẩm nhận được nhiều chứng nhận&nbsp;do nh&agrave; nước &amp; ASEAN trao tặng:</u></strong></p>\r\n\r\n<p>- Sản phẩm chất lương, thương hiệu uy t&iacute;n dịch vụ ho&agrave;n hảo do Cục sở hữu tr&iacute; tuệ&nbsp;trao tặng</p>\r\n\r\n<p><img alt=\"10407936 1822944281264484 8275525003892938018 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/2015_04/10407936_1822944281264484_8275525003892938018_n.jpg\" style=\"height:748px; width:421px\" /></p>\r\n\r\n<p>- Đạt chứng nhận Thuong hiệu an to&agrave;n v&igrave; sức khỏe cộng đồng do nh&agrave; nước trao tặng</p>\r\n\r\n<p><img alt=\"11196346 1822944264597819 7418287817454800806 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/2015_04/11196346_1822944264597819_7418287817454800806_n.jpg\" style=\"height:366px; width:206px\" /></p>\r\n\r\n<p><img alt=\"11203162 1822944304597815 3708956896999172596 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/2015_04/11203162_1822944304597815_3708956896999172596_n.jpg\" style=\"height:658px; width:370px\" /></p>\r\n\r\n<p>-Chứng nhận sản phẩm thương hiệu uy t&iacute;n Asean do ch&iacute;nh cộng đồng c&aacute;c nước Asean trao tặng tổ chức tại Th&aacute;i Lan.</p>\r\n\r\n<p><img alt=\"12308436 1922543957971182 6406130418014445898 n\" src=\"http://myphamnaturalspa.com/uploads/my-pham-spa/2015_04/12308436_1922543957971182_6406130418014445898_n.jpg\" style=\"height:429px; width:429px\" /></p>\r\n\r\n<p>B&iacute; quyết lưu giữ tuổi thanh xu&acirc;n cho l&agrave;n da đ&atilde; được Natural Spa chia sẻ !</p>\r\n', '11822577_1874352636123648_4970182674874481095_n.jpg', 1, '', '', '', '148 Nguyễn Sỹ Sách, phường 15, quận Tân Bình', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_slider`
--

CREATE TABLE `table_slider` (
  `idslider` int(11) NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_slider`
--

INSERT INTO `table_slider` (`idslider`, `anh`, `link`, `stt`) VALUES
(1, '1920x610nangco.png', '', 1),
(2, '1920x610-khai-truong.png', '', 2),
(3, 'Banner-web-Phun-Moi-1920x610.jpg', '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_taikhoan`
--

CREATE TABLE `table_taikhoan` (
  `idtaikhoan` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idloaitaikhoan` int(11) NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_taikhoan`
--

INSERT INTO `table_taikhoan` (`idtaikhoan`, `email`, `matkhau`, `idloaitaikhoan`, `anh`, `hoten`) VALUES
(1, 'huy', '123', 1, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_thanhvien`
--

CREATE TABLE `table_thanhvien` (
  `idthanhvien` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` bit(1) NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idloaithanhvien` int(11) NOT NULL,
  `ngaysinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_thanhvien`
--

INSERT INTO `table_thanhvien` (`idthanhvien`, `email`, `matkhau`, `hoten`, `sodienthoai`, `diachi`, `ngaytao`, `ghichu`, `gioitinh`, `anh`, `idloaithanhvien`, `ngaysinh`) VALUES
(1, 'huyvv32@wru.vn', '810d8e710bb066eb816a9d96eccc1fdf', 'vũ văn huy', '0888565635', 'Gia tân - Gia viễn - Ninh Bình', '2018-11-06', 'khong co ghi chu', b'0', '', 2, '0000-00-00'),
(2, 'gd@gmail.com', '202cb962ac59075b964b07152d234b70', 'huy', '', '', '2018-11-14', '', b'0', '', 1, '0000-00-00'),
(3, 'hoaiann@gmail.com', '24d02f7cfed825eeff31375001318135', 'Nguyễn Hoài An', '', '', '2018-11-22', '', b'0', '', 1, '0000-00-00'),
(4, 'duchieupham@gmail.com', '5955bb9fac7eaf314c980e8fb7bc83c9', 'Phạm Đức Hiếu', '', '', '2018-11-22', '', b'0', '', 1, '0000-00-00'),
(5, 'phuongnam@gmail.com', '598fe51f1d09bec381c9fff0d7d6960f', 'Vũ Phương Nam', '', '', '2018-11-22', '', b'0', '', 1, '0000-00-00'),
(6, 'anhthu@gmail.com', '526e19af394628551701ca28f657af7f', 'Trần Anh Thư', '', '', '2018-11-22', '', b'0', '', 1, '0000-00-00'),
(7, 'hoailinh@gmail.com', '9cd45d8a70014c33006f1fb36516b3b3', 'Phạm Hoài Linh', '', '', '2018-11-22', '', b'0', '', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_thongtin`
--

CREATE TABLE `table_thongtin` (
  `idthongtin` int(11) NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sky` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylamviec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigianlamviec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_thongtin`
--

INSERT INTO `table_thongtin` (`idthongtin`, `email`, `sky`, `fb`, `sodienthoai`, `ngaylamviec`, `thoigianlamviec`, `diachi`, `web`) VALUES
(1, 'huyvv32@wru.vn', 'gh', 'huy', '01672528943', 'T2-> t6', '7h-20h', 'ninh binh', 'angerspa.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_tintuc`
--

CREATE TABLE `table_tintuc` (
  `idtintuc` int(11) NOT NULL,
  `tieude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `nguoitao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idloaitintuc` int(11) NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_tintuc`
--

INSERT INTO `table_tintuc` (`idtintuc`, `tieude`, `mota`, `noidung`, `ngaytao`, `nguoitao`, `idloaitintuc`, `anh`) VALUES
(2, 'Chào mừng ngày phụ nữ Việt ', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh. Theo đó, khách hàng trị liệu ', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh.\r\nTheo đó, khách hàng trị liệu trong dịp này sẽ được:\r\n-Giảm đến 50% dịch vụ tắm trắng yến mạch sữa tươi\r\n-Giảm đến 60% dịch vụ triệt lông công nghệ mới NewIPL phiên bản 2015\r\n-Giảm đến 45% các dịch vụ đặc trị & chăm sóc da\r\n-Giảm đến 15% và tặng dịch vụ phun mí vi điểm cho dịch vụ phun thêu thẩm mỹ Hàn Quốc. \r\nkhuyen mai 20.10\r\nNgoài ra, Belas còn phát hành các voucher quà tặng có mệnh giá từ 1 triệu đồng dành cho khách hàng có nhu cầu mua tặng người thân dịp 20/10 cùng với ưu đãi lên đến 45%. \r\n\r\nBạn có thể đăng ký tại đây:', '2018-09-22', 'Huy', 1, 'avt-2.9.jpg'),
(3, 'ƯU ĐÃI ỆT NAM 20.10', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh. Theo đó, khách hàng trị liệu ', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh.\r\nTheo đó, khách hàng trị liệu trong dịp này sẽ được:\r\n-Giảm đến 50% dịch vụ tắm trắng yến mạch sữa tươi\r\n-Giảm đến 60% dịch vụ triệt lông công nghệ mới NewIPL phiên bản 2015\r\n-Giảm đến 45% các dịch vụ đặc trị & chăm sóc da\r\n-Giảm đến 15% và tặng dịch vụ phun mí vi điểm cho dịch vụ phun thêu thẩm mỹ Hàn Quốc. \r\nkhuyen mai 20.10\r\nNgoài ra, Belas còn phát hành các voucher quà tặng có mệnh giá từ 1 triệu đồng dành cho khách hàng có nhu cầu mua tặng người thân dịp 20/10 cùng với ưu đãi lên đến 45%. \r\n\r\nBạn có thể đăng ký tại đây:', '2018-09-22', 'Huy', 1, 'bat-mi-cach-tay-long-nach-tai-nha-cua-cac-eva-2.jpg'),
(4, 'ƯU ĐÃI NGẬP TRÀN CHO NGÀY PHỤ NỮ VIỆT NAM 20.10', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh. Theo đó, khách hàng trị liệu ', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh.\r\nTheo đó, khách hàng trị liệu trong dịp này sẽ được:\r\n-Giảm đến 50% dịch vụ tắm trắng yến mạch sữa tươi\r\n-Giảm đến 60% dịch vụ triệt lông công nghệ mới NewIPL phiên bản 2015\r\n-Giảm đến 45% các dịch vụ đặc trị & chăm sóc da\r\n-Giảm đến 15% và tặng dịch vụ phun mí vi điểm cho dịch vụ phun thêu thẩm mỹ Hàn Quốc. \r\nkhuyen mai 20.10\r\nNgoài ra, Belas còn phát hành các voucher quà tặng có mệnh giá từ 1 triệu đồng dành cho khách hàng có nhu cầu mua tặng người thân dịp 20/10 cùng với ưu đãi lên đến 45%. \r\n\r\nBạn có thể đăng ký tại đây:', '2018-09-22', 'Huy', 1, 'bi-quyet-triet-long-toan-hieu-qua-cua-co-nang-9x.jpg'),
(6, 'Máy bay Nga sáng qua thực hiện 22', 'ông kích tại Syria từ ngày 30/9 theo đề nghị từ Tổng thống Syria', '<p class=\"Normal\">Máy bay Nga sáng qua thực hiện 22 lần xuất kích, phá hủy 27 cơ sở IS ở Syria, <em>Sputnik</em> dẫn lời phát ngôn viên Bộ Ngoại giao Nga Igor Konashenkov, nói trong một cuộc họp báo ở Moscow.</p>\r\n\r\n<p class=\"Normal\">Ông cho biết cụ thể rằng máy bay Nga tiến hành các đợt không kích vào 11 trại huấn luyện IS ở tỉnh Hama và Raqqa. Ngoài ra, máy bay Su-25 và Su-34 tấn công 8 địa điểm của phiến quân ở tỉnh Homs. M<span>áy bay Nga đã sử dụng bom phá bê tông để phá hủy công sự ngầm của IS tại tây bắc Syria.</span></p>\r\n\r\n<p class=\"Normal\"><span>Đoạn video cho thấy các cuộc không kích của Nga nhắm vào một sở chỉ huy IS và công sự gần làng Tamana ở Hama, ông Konashenkov cho biết.</span></p>\r\n\r\n<div style=\"text-align:center;\">\r\n<div class=\"embed-container\"> </div>\r\n</div>\r\n\r\n<p class=\"Normal\">Nga bắt đầu chiến dịch không kích tại Syria từ ngày 30/9 theo đề nghị từ Tổng thống Syria Bashar al-Assad. Moscow tuyên bố nhắm vào IS nhưng Washington cùng đồng minh lo ngại Nga can thiệp quân sự để củng cố chính quyền al-Assad.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width: 100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"may-bay-nga-pha-huy-27-co-so-is-tai-syria\" data-natural-width=\"500\" data-pwidth=\"470.4\" data-width=\"500\" src=\"http://m.f29.img.vnecdn.net/2015/10/09/syria-3-5-13-2-8196-1444347740.jpg\" style=\"width: 100%;\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p class=\"Image\">Vị trí các tỉnh ở Syria. Đồ họa: <em>Stratfor</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2018-09-24', 'huy', 1, 'cach-tri-mun-dau-den-o-tren-mui-hieu-qua-nhat-va-nhanh-nhat-2.jpg'),
(7, 'Chào mừng ngày phụ nữ Việt ', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh. Theo đó, khách hàng trị liệu ', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh.\r\nTheo đó, khách hàng trị liệu trong dịp này sẽ được:\r\n-Giảm đến 50% dịch vụ tắm trắng yến mạch sữa tươi\r\n-Giảm đến 60% dịch vụ triệt lông công nghệ mới NewIPL phiên bản 2015\r\n-Giảm đến 45% các dịch vụ đặc trị & chăm sóc da\r\n-Giảm đến 15% và tặng dịch vụ phun mí vi điểm cho dịch vụ phun thêu thẩm mỹ Hàn Quốc. \r\nkhuyen mai 20.10\r\nNgoài ra, Belas còn phát hành các voucher quà tặng có mệnh giá từ 1 triệu đồng dành cho khách hàng có nhu cầu mua tặng người thân dịp 20/10 cùng với ưu đãi lên đến 45%. \r\n\r\nBạn có thể đăng ký tại đây:', '2018-09-22', 'Huy', 1, 'SYL_6850-min-768x513.jpg'),
(8, 'ƯU ĐÃI NGẬP TRÀN CHO NGÀY PHỤ NỮ VIỆT NAM 20.10', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh. Theo đó, khách hàng trị liệu ', 'Chào mừng ngày phụ nữ Việt Nam 20/10, Belas Spa dành tặng Quý Khách Hàng chương trình khuyến mãi lớn cho tất cả các dịch vụ tại cả 3 chi nhánh.\r\nTheo đó, khách hàng trị liệu trong dịp này sẽ được:\r\n-Giảm đến 50% dịch vụ tắm trắng yến mạch sữa tươi\r\n-Giảm đến 60% dịch vụ triệt lông công nghệ mới NewIPL phiên bản 2015\r\n-Giảm đến 45% các dịch vụ đặc trị & chăm sóc da\r\n-Giảm đến 15% và tặng dịch vụ phun mí vi điểm cho dịch vụ phun thêu thẩm mỹ Hàn Quốc. \r\nkhuyen mai 20.10\r\nNgoài ra, Belas còn phát hành các voucher quà tặng có mệnh giá từ 1 triệu đồng dành cho khách hàng có nhu cầu mua tặng người thân dịp 20/10 cùng với ưu đãi lên đến 45%. \r\n\r\nBạn có thể đăng ký tại đây:', '2018-09-22', 'Huy', 1, 'uu-dai-giam-50-chi-phi-triet-sach-long-da-khong-ty-vet-3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_trangthai`
--

CREATE TABLE `table_trangthai` (
  `idtrangthai` int(11) NOT NULL,
  `tentrangthai` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_trangthai`
--

INSERT INTO `table_trangthai` (`idtrangthai`, `tentrangthai`) VALUES
(1, 'Đã tiếp nhận đơn hàng'),
(2, 'Đã Xử lý'),
(3, 'Đang làm'),
(4, 'Khách hàng hủy'),
(5, 'Cong ty hủy'),
(6, 'Đã xong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_trangthailamviec`
--

CREATE TABLE `table_trangthailamviec` (
  `idtrangthailam` int(11) NOT NULL,
  `tentrangthai` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_trangthailamviec`
--

INSERT INTO `table_trangthailamviec` (`idtrangthailam`, `tentrangthai`) VALUES
(1, 'Đang làm'),
(2, 'Thôi làm\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_trangthaisanpham`
--

CREATE TABLE `table_trangthaisanpham` (
  `idtrangthai` int(11) NOT NULL,
  `tentrangthai` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_trangthaisanpham`
--

INSERT INTO `table_trangthaisanpham` (`idtrangthai`, `tentrangthai`) VALUES
(1, 'Đã tiếp nhận đơn hàng'),
(2, 'Đang chờ xử lý'),
(3, 'Đang giao'),
(4, 'Khách hàng huy\r\n'),
(5, 'Công ty hủy'),
(6, 'Đã giao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_video`
--

CREATE TABLE `table_video` (
  `idvideo` int(11) NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_video`
--

INSERT INTO `table_video` (`idvideo`, `link`) VALUES
(1, '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/za6LKKF0R5M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_ykienkhachhang`
--

CREATE TABLE `table_ykienkhachhang` (
  `idykienkhachhang` int(11) NOT NULL,
  `tenkhachhang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ykien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_ykienkhachhang`
--

INSERT INTO `table_ykienkhachhang` (`idykienkhachhang`, `tenkhachhang`, `anh`, `ykien`, `ngaytao`, `diachi`) VALUES
(1, 'Vũ thị Huyền-l', 'ssay-huynh.jpg', 'Chúng tôi trân trọng gửi gắm những lời tri ân đến các bạn đã sử dụng angelspa như 1 người bạn đồng hành du lịch trong suốt thời gian dự án được thành lập từ năm 2012 cho đến nay. AVIA.VN liên tục phát triển và cải thiện không ngừng về chất lượng dịch vụ, tính năng của trang web và sản phẩm nhằm đáp ứng nhu cầu khách hàng ngày một tốt hơn.k', '2018-11-20', 'gia tân - gia viên-ninh bình-haha'),
(2, 'Sơn Tùng', 'k1.jpg', 'Chúng tôi trân trọng gửi gắm những lời tri ân đến các bạn đã sử dụng angelspa như 1 người bạn đồng hành du lịch trong suốt thời gian dự án được thành lập từ năm 2012 cho đến nay. AVIA.VN liên tục phát triển và cải thiện không ngừng về chất lượng dịch vụ, tính năng của trang web và sản phẩm nhằm đáp ứng nhu cầu khách hàng ngày một tốt hơn.k', '2018-11-20', 'gia tân - gia viên-ninh bình-haha'),
(3, 'Sơn Tùng', 'k.jpg', 'Chúng tôi trân trọng gửi gắm những lời tri ân đến các bạn đã sử dụng angelspa như 1 người bạn đồng hành du lịch trong suốt thời gian dự án được thành lập từ năm 2012 cho đến nay. AVIA.VN liên tục phát triển và cải thiện không ngừng về chất lượng dịch vụ, tính năng của trang web và sản phẩm nhằm đáp ứng nhu cầu khách hàng ngày một tốt hơn.k', '2018-11-20', 'gia tân - gia viên-ninh bình-haha');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `table_album`
--
ALTER TABLE `table_album`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_chitietdondat`
--
ALTER TABLE `table_chitietdondat`
  ADD KEY `idsanpham` (`idsanpham`),
  ADD KEY `iddonhangsanpham` (`iddonhangsanpham`);

--
-- Chỉ mục cho bảng `table_daotao`
--
ALTER TABLE `table_daotao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_dichvu`
--
ALTER TABLE `table_dichvu`
  ADD PRIMARY KEY (`iddichvu`);

--
-- Chỉ mục cho bảng `table_dondatdichvu`
--
ALTER TABLE `table_dondatdichvu`
  ADD PRIMARY KEY (`iddondat`),
  ADD KEY `idtrangthai` (`idtrangthai`);

--
-- Chỉ mục cho bảng `table_dondatsanpham`
--
ALTER TABLE `table_dondatsanpham`
  ADD PRIMARY KEY (`iddondat`),
  ADD KEY `idtrangthai` (`idtrangthai`);

--
-- Chỉ mục cho bảng `table_gioithieu`
--
ALTER TABLE `table_gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_googlemap`
--
ALTER TABLE `table_googlemap`
  ADD PRIMARY KEY (`idMap`);

--
-- Chỉ mục cho bảng `table_kynangnhanvien`
--
ALTER TABLE `table_kynangnhanvien`
  ADD KEY `idnhanvien` (`idnhanvien`),
  ADD KEY `iddichvu` (`iddichvu`);

--
-- Chỉ mục cho bảng `table_lienhe`
--
ALTER TABLE `table_lienhe`
  ADD PRIMARY KEY (`idlienhe`);

--
-- Chỉ mục cho bảng `table_loaidichvu`
--
ALTER TABLE `table_loaidichvu`
  ADD PRIMARY KEY (`idloaidichvu`);

--
-- Chỉ mục cho bảng `table_loainhanvien`
--
ALTER TABLE `table_loainhanvien`
  ADD PRIMARY KEY (`idloainhanvien`);

--
-- Chỉ mục cho bảng `table_loaisanpham`
--
ALTER TABLE `table_loaisanpham`
  ADD PRIMARY KEY (`idloaisanpham`);

--
-- Chỉ mục cho bảng `table_loaitaikhoan`
--
ALTER TABLE `table_loaitaikhoan`
  ADD PRIMARY KEY (`idloaitaikhoan`);

--
-- Chỉ mục cho bảng `table_loaithanhvien`
--
ALTER TABLE `table_loaithanhvien`
  ADD PRIMARY KEY (`idloaithanhvien`);

--
-- Chỉ mục cho bảng `table_loaitintuc`
--
ALTER TABLE `table_loaitintuc`
  ADD PRIMARY KEY (`idloaitintuc`);

--
-- Chỉ mục cho bảng `table_nhanvien`
--
ALTER TABLE `table_nhanvien`
  ADD PRIMARY KEY (`idnhanvien`),
  ADD KEY `idloainhanvien` (`idloainhanvien`),
  ADD KEY `idtrangthai` (`idtrangthai`);

--
-- Chỉ mục cho bảng `table_sanpham`
--
ALTER TABLE `table_sanpham`
  ADD PRIMARY KEY (`idsanpham`),
  ADD KEY `idloaisanpham` (`idloaisanpham`);

--
-- Chỉ mục cho bảng `table_slider`
--
ALTER TABLE `table_slider`
  ADD PRIMARY KEY (`idslider`);

--
-- Chỉ mục cho bảng `table_taikhoan`
--
ALTER TABLE `table_taikhoan`
  ADD PRIMARY KEY (`idtaikhoan`),
  ADD KEY `idloaitaikhoan` (`idloaitaikhoan`);

--
-- Chỉ mục cho bảng `table_thanhvien`
--
ALTER TABLE `table_thanhvien`
  ADD PRIMARY KEY (`idthanhvien`),
  ADD KEY `IdLoaiThanhVien` (`idloaithanhvien`);

--
-- Chỉ mục cho bảng `table_thongtin`
--
ALTER TABLE `table_thongtin`
  ADD PRIMARY KEY (`idthongtin`);

--
-- Chỉ mục cho bảng `table_tintuc`
--
ALTER TABLE `table_tintuc`
  ADD PRIMARY KEY (`idtintuc`),
  ADD KEY `idloaitintuc` (`idloaitintuc`);

--
-- Chỉ mục cho bảng `table_trangthai`
--
ALTER TABLE `table_trangthai`
  ADD PRIMARY KEY (`idtrangthai`);

--
-- Chỉ mục cho bảng `table_trangthailamviec`
--
ALTER TABLE `table_trangthailamviec`
  ADD PRIMARY KEY (`idtrangthailam`);

--
-- Chỉ mục cho bảng `table_trangthaisanpham`
--
ALTER TABLE `table_trangthaisanpham`
  ADD PRIMARY KEY (`idtrangthai`);

--
-- Chỉ mục cho bảng `table_video`
--
ALTER TABLE `table_video`
  ADD PRIMARY KEY (`idvideo`);

--
-- Chỉ mục cho bảng `table_ykienkhachhang`
--
ALTER TABLE `table_ykienkhachhang`
  ADD PRIMARY KEY (`idykienkhachhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `table_album`
--
ALTER TABLE `table_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `table_daotao`
--
ALTER TABLE `table_daotao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `table_dichvu`
--
ALTER TABLE `table_dichvu`
  MODIFY `iddichvu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `table_dondatdichvu`
--
ALTER TABLE `table_dondatdichvu`
  MODIFY `iddondat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT cho bảng `table_dondatsanpham`
--
ALTER TABLE `table_dondatsanpham`
  MODIFY `iddondat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `table_gioithieu`
--
ALTER TABLE `table_gioithieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `table_googlemap`
--
ALTER TABLE `table_googlemap`
  MODIFY `idMap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `table_lienhe`
--
ALTER TABLE `table_lienhe`
  MODIFY `idlienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT cho bảng `table_loaidichvu`
--
ALTER TABLE `table_loaidichvu`
  MODIFY `idloaidichvu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `table_loainhanvien`
--
ALTER TABLE `table_loainhanvien`
  MODIFY `idloainhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `table_loaisanpham`
--
ALTER TABLE `table_loaisanpham`
  MODIFY `idloaisanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `table_loaitaikhoan`
--
ALTER TABLE `table_loaitaikhoan`
  MODIFY `idloaitaikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `table_loaithanhvien`
--
ALTER TABLE `table_loaithanhvien`
  MODIFY `idloaithanhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `table_loaitintuc`
--
ALTER TABLE `table_loaitintuc`
  MODIFY `idloaitintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `table_nhanvien`
--
ALTER TABLE `table_nhanvien`
  MODIFY `idnhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `table_sanpham`
--
ALTER TABLE `table_sanpham`
  MODIFY `idsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `table_slider`
--
ALTER TABLE `table_slider`
  MODIFY `idslider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `table_taikhoan`
--
ALTER TABLE `table_taikhoan`
  MODIFY `idtaikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `table_thanhvien`
--
ALTER TABLE `table_thanhvien`
  MODIFY `idthanhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `table_thongtin`
--
ALTER TABLE `table_thongtin`
  MODIFY `idthongtin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `table_tintuc`
--
ALTER TABLE `table_tintuc`
  MODIFY `idtintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `table_trangthai`
--
ALTER TABLE `table_trangthai`
  MODIFY `idtrangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `table_trangthailamviec`
--
ALTER TABLE `table_trangthailamviec`
  MODIFY `idtrangthailam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `table_trangthaisanpham`
--
ALTER TABLE `table_trangthaisanpham`
  MODIFY `idtrangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `table_video`
--
ALTER TABLE `table_video`
  MODIFY `idvideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `table_ykienkhachhang`
--
ALTER TABLE `table_ykienkhachhang`
  MODIFY `idykienkhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `table_chitietdondat`
--
ALTER TABLE `table_chitietdondat`
  ADD CONSTRAINT `table_chitietdondat_ibfk_2` FOREIGN KEY (`iddonhangsanpham`) REFERENCES `table_dondatsanpham` (`iddondat`);

--
-- Các ràng buộc cho bảng `table_dondatdichvu`
--
ALTER TABLE `table_dondatdichvu`
  ADD CONSTRAINT `table_dondatdichvu_ibfk_1` FOREIGN KEY (`idtrangthai`) REFERENCES `table_trangthai` (`idtrangthai`);

--
-- Các ràng buộc cho bảng `table_dondatsanpham`
--
ALTER TABLE `table_dondatsanpham`
  ADD CONSTRAINT `table_dondatsanpham_ibfk_1` FOREIGN KEY (`idtrangthai`) REFERENCES `table_trangthaisanpham` (`idtrangthai`);

--
-- Các ràng buộc cho bảng `table_kynangnhanvien`
--
ALTER TABLE `table_kynangnhanvien`
  ADD CONSTRAINT `table_kynangnhanvien_ibfk_2` FOREIGN KEY (`iddichvu`) REFERENCES `table_dichvu` (`iddichvu`);

--
-- Các ràng buộc cho bảng `table_nhanvien`
--
ALTER TABLE `table_nhanvien`
  ADD CONSTRAINT `table_nhanvien_ibfk_1` FOREIGN KEY (`idloainhanvien`) REFERENCES `table_loainhanvien` (`idloainhanvien`),
  ADD CONSTRAINT `table_nhanvien_ibfk_2` FOREIGN KEY (`idtrangthai`) REFERENCES `table_trangthailamviec` (`idtrangthailam`);

--
-- Các ràng buộc cho bảng `table_sanpham`
--
ALTER TABLE `table_sanpham`
  ADD CONSTRAINT `table_sanpham_ibfk_1` FOREIGN KEY (`idloaisanpham`) REFERENCES `table_loaisanpham` (`idloaisanpham`);

--
-- Các ràng buộc cho bảng `table_taikhoan`
--
ALTER TABLE `table_taikhoan`
  ADD CONSTRAINT `table_taikhoan_ibfk_1` FOREIGN KEY (`idloaitaikhoan`) REFERENCES `table_loaitaikhoan` (`idloaitaikhoan`);

--
-- Các ràng buộc cho bảng `table_thanhvien`
--
ALTER TABLE `table_thanhvien`
  ADD CONSTRAINT `table_thanhvien_ibfk_1` FOREIGN KEY (`idloaithanhvien`) REFERENCES `table_loaithanhvien` (`idloaithanhvien`);

--
-- Các ràng buộc cho bảng `table_tintuc`
--
ALTER TABLE `table_tintuc`
  ADD CONSTRAINT `table_tintuc_ibfk_1` FOREIGN KEY (`idloaitintuc`) REFERENCES `table_loaitintuc` (`idloaitintuc`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
