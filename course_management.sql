-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2023 lúc 04:12 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `course_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment_detail` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `comment_detail`, `id_user`, `id_course`) VALUES
(29, 'test1', 17, 72),
(30, 'test 2', 25, 72);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id`, `id_image`, `name`, `create_date`, `id_user`) VALUES
(72, 219, 'PHP', '2023-08-19 13:11:07', 17),
(77, 250, 'javascript', '2023-08-21 13:23:20', 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_content`
--

CREATE TABLE `course_content` (
  `id` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `course_content`
--

INSERT INTO `course_content` (`id`, `id_course`, `id_video`, `id_image`, `title`, `create_date`) VALUES
(55, 72, 221, 220, 'php - bài 1', '2023-08-19 13:11:36'),
(56, 72, 223, 222, 'php - bài 2', '2023-08-19 13:12:42'),
(66, 77, 252, 251, 'javascript - bài 1', '2023-08-21 13:23:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exercise`
--

CREATE TABLE `exercise` (
  `id` int(11) NOT NULL,
  `ex_content` varchar(500) NOT NULL,
  `id_coursecontent` int(11) NOT NULL,
  `solution1` varchar(500) NOT NULL,
  `solution2` varchar(500) NOT NULL,
  `solution3` varchar(500) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `exercise`
--

INSERT INTO `exercise` (`id`, `ex_content`, `id_coursecontent`, `solution1`, `solution2`, `solution3`, `result`) VALUES
(10, 'Biến trong php bắt đầu bằng ký tự gì ?', 56, '#', '$', '%', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `path`) VALUES
(1, 'default.png'),
(111, 'logo_header.png'),
(113, 'meta-image.png'),
(116, 'node.js-logo-image.png'),
(122, 'adminimage.png'),
(186, 'node.js-logo-image.png'),
(198, 'meta-image.png'),
(199, 'meta-image.png'),
(200, 'custom select box.mp4'),
(201, ''),
(202, ''),
(203, 'meta-image.png'),
(204, 'custom select box.mp4'),
(205, 'meta-image.png'),
(206, 'vid-3.mp4'),
(207, 'meta-image.png'),
(208, 'vid-7.mp4'),
(209, 'meta-image.png'),
(210, 'vid-2.mp4'),
(211, 'html-css-course.jpg'),
(212, 'html.png'),
(213, 'vid-9.mp4'),
(214, 'javascript-2.jpeg'),
(215, 'javascript-2.jpeg'),
(216, 'custom select box.mp4'),
(217, 'javascript-2.jpeg'),
(218, 'customize HTML5 form elements.mp4'),
(219, 'meta-image.png'),
(220, 'meta-image.png'),
(221, '3D popup card.mp4'),
(222, 'meta-image.png'),
(223, 'build gauge with css.mp4'),
(232, 'slider1.jpg'),
(233, 'Paris.jpg'),
(250, 'javascript-2.jpeg'),
(251, 'javascript-2.jpeg'),
(252, 'password strength checker javascript web app.mp4'),
(258, ''),
(259, ''),
(260, ''),
(261, ''),
(262, ''),
(263, 'Alex Gonley.jpg'),
(264, 'Alex Gonley.jpg'),
(265, ''),
(266, ''),
(267, ''),
(268, ''),
(269, ''),
(270, 'csv.png'),
(271, ''),
(272, ''),
(273, ''),
(274, ''),
(275, ''),
(276, ''),
(277, 'html_table.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `learning_process`
--

CREATE TABLE `learning_process` (
  `id_course` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `displayname` varchar(50) NOT NULL,
  `id_avatar` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `displayname`, `id_avatar`, `type`) VALUES
(17, 'teacher@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'giảng viên 1', 111, 2),
(19, 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Admin', 122, 3),
(24, 'phuoc@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Duy Phước', 232, 2),
(25, 'minh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Quang Minh', 233, 1),
(47, 'abc6@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'abc6', 277, 1),
(50, 'test@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'test', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cmt_user` (`id_user`),
  ADD KEY `fk_cmt_course` (`id_course`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_course_user` (`id_user`),
  ADD KEY `fk_course_image` (`id_image`);

--
-- Chỉ mục cho bảng `course_content`
--
ALTER TABLE `course_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_coursecontent_course` (`id_course`),
  ADD KEY `fk_coursecontent_image` (`id_image`),
  ADD KEY `fk_coursecontentvideo_image` (`id_video`);

--
-- Chỉ mục cho bảng `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ex_coursecontent` (`id_coursecontent`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `learning_process`
--
ALTER TABLE `learning_process`
  ADD KEY `fk_process_user` (`id_user`),
  ADD KEY `fk_process_course` (`id_course`);

--
-- Chỉ mục cho bảng `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_playlist_user` (`id_user`),
  ADD KEY `fk_playlist_course` (`id_course`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_image` (`id_avatar`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `course_content`
--
ALTER TABLE `course_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT cho bảng `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_cmt_course` FOREIGN KEY (`id_course`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `fk_cmt_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_course_image` FOREIGN KEY (`id_image`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `fk_course_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `course_content`
--
ALTER TABLE `course_content`
  ADD CONSTRAINT `fk_coursecontent_course` FOREIGN KEY (`id_course`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `fk_coursecontent_image` FOREIGN KEY (`id_image`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `fk_coursecontentvideo_image` FOREIGN KEY (`id_video`) REFERENCES `image` (`id`);

--
-- Các ràng buộc cho bảng `exercise`
--
ALTER TABLE `exercise`
  ADD CONSTRAINT `fk_ex_coursecontent` FOREIGN KEY (`id_coursecontent`) REFERENCES `course_content` (`id`);

--
-- Các ràng buộc cho bảng `learning_process`
--
ALTER TABLE `learning_process`
  ADD CONSTRAINT `fk_process_course` FOREIGN KEY (`id_course`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `fk_process_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `fk_playlist_course` FOREIGN KEY (`id_course`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `fk_playlist_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_image` FOREIGN KEY (`id_avatar`) REFERENCES `image` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
