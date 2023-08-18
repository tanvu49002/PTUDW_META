-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 18, 2023 lúc 02:44 PM
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
  `id_coursecontent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(69, 198, 'PHP', '2023-08-17 22:01:05', 17);

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
(46, 69, 200, 199, 'php - bài 1', '2023-08-17 22:06:13'),
(48, 69, 204, 203, 'php - bài 2', '2023-08-17 22:24:24'),
(49, 69, 206, 205, 'php - bài 3', '2023-08-17 22:24:52');

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
(111, 'logo_header.png'),
(113, 'meta-image.png'),
(116, 'node.js-logo-image.png'),
(122, 'adminimage.png'),
(124, 'user.png'),
(186, 'node.js-logo-image.png'),
(198, 'meta-image.png'),
(199, 'meta-image.png'),
(200, 'custom select box.mp4'),
(201, ''),
(202, ''),
(203, 'meta-image.png'),
(204, 'custom select box.mp4'),
(205, 'meta-image.png'),
(206, 'vid-3.mp4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `learning_process`
--

CREATE TABLE `learning_process` (
  `id_course` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `learning_process`
--

INSERT INTO `learning_process` (`id_course`, `id_user`, `status`) VALUES
(69, 17, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_coursecontent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `displayname` varchar(50) NOT NULL,
  `id_avatar` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `displayname`, `id_avatar`, `type`) VALUES
(14, 'vu@gmail.com', '2', 'Nguyễn Tấn Vũ', 122, 1),
(17, 'teacher@gmail.com', '1', 'giảng viên 1', 111, 2),
(19, 'admin@gmail.com', '1', 'Admin', 122, 3),
(21, 'minh@gmail.com', '1', 'Quang Minh', 124, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cmt_user` (`id_user`),
  ADD KEY `fk_cmt_coursecontent` (`id_coursecontent`);

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
  ADD KEY `fk_playlist_coursecontent` (`id_coursecontent`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `course_content`
--
ALTER TABLE `course_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT cho bảng `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_cmt_coursecontent` FOREIGN KEY (`id_coursecontent`) REFERENCES `course_content` (`id`),
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
  ADD CONSTRAINT `fk_playlist_coursecontent` FOREIGN KEY (`id_coursecontent`) REFERENCES `course_content` (`id`),
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
