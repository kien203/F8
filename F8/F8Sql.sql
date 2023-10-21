-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 03:42 PM
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
-- Cơ sở dữ liệu: `f8_2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acount`
--

CREATE TABLE `acount` (
  `ID` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `acount` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `acount`
--

INSERT INTO `acount` (`ID`, `username`, `acount`, `password`) VALUES
(1, 'test', 'test', '123456'),
(3, 'admin', 'admin', '123456'),
(17, 'abc', 'abc', '123456'),
(18, 'abcd', 'abcd', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_registed`
--

CREATE TABLE `course_registed` (
  `ID` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `name_course` varchar(100) NOT NULL,
  `id_course` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `course_registed`
--

INSERT INTO `course_registed` (`ID`, `id_user`, `name_course`, `id_course`) VALUES
(10, 17, 'nhap_mon_it', 0),
(11, 17, 'lap_trinh_c_co_ban', 0),
(12, 17, 'app', 0),
(13, 17, 'reponsive', 0),
(14, 17, 'html_css_basic', 0),
(15, 3, 'nhap_mon_it', 0),
(16, 3, 'lap_trinh_c_co_ban', 0),
(17, 3, 'html_css_basic', 0),
(18, 18, 'nhap_mon_it', 0),
(27, 18, 'app', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_course`
--

CREATE TABLE `info_course` (
  `name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(500) NOT NULL,
  `img` varchar(250) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `info_course`
--

INSERT INTO `info_course` (`name`, `title`, `content`, `img`, `ID`) VALUES
('app', 'App \'Đừng Chạm Tay Lên Mặt\'', 'Xây dựng ứng dụng đưa ra cảnh báo khi người dùng sờ tay lên mặt. Chúng ta sẽ sử dụng thư viện ReactJS & Tensoflow để hoàn thiện ứng dụng này.', 'CourseFree10.png', 1),
('html_css_basic', 'HTML CSS từ Zero đến Hero', 'Trong khóa này chúng ta sẽ cùng nhau xây dựng giao diện 2 trang web là The Band & Shopee.', 'CourseFree3.png', 3),
('javascrip_basic', 'Lập Trình JavaScript Cơ Bản', 'Học Javascript cơ bản phù hợp cho người chưa từng học lập trình. Với hơn 100 bài học và có bài tập thực hành sau mỗi bài học.', 'CourseFree5.png', 4),
('javascript_pro', 'Lập Trình JavaScript Nâng Cao', 'Hiểu sâu hơn về cách Javascript hoạt động, tìm hiểu về IIFE, closure, reference types, this keyword, bind, call, apply, prototype, ...', 'CourseFree6.png', 5),
('lap_trinh_c_co_ban', 'Lập trình C++ cơ bản, nâng cao', 'Khóa học lập trình C++ từ cơ bản tới nâng cao dành cho người mới bắt đầu. Mục tiêu của khóa học này nhằm giúp các bạn nắm được các khái niệm căn cơ của lập trình, giúp các bạn có nền tảng vững chắc để chinh phục con đường trở thành một lập trình viên.', 'CourseFree2.png', 6),
('nhap_mon_it', 'Kiến Thức Nhập Môn IT', 'Để có cái nhìn tổng quan về ngành IT - Lập trình web các bạn nên xem các videos tại khóa này trước nhé.', 'CourseFree1.png', 7),
('nodejs', 'Node & ExpressJS', 'Học Back-end với Node & ExpressJS framework, hiểu các khái niệm khi làm Back-end và xây dựng RESTful API cho trang web.', 'CourseFree9.png', 8),
('reactjs', 'Xây Dựng Website với ReactJS', 'Khóa học ReactJS từ cơ bản tới nâng cao, kết quả của khóa học này là bạn có thể làm hầu hết các dự án thường gặp với ReactJS. Cuối khóa học này bạn sẽ sở hữu một dự án giống Tiktok.com, bạn có thể tự tin đi xin việc khi nắm chắc các kiến thức được chia sẻ trong khóa học này.', 'CourseFree8.png', 9),
('reponsive', 'Responsive Với Grid System', 'Trong khóa này chúng ta sẽ học về cách xây dựng giao diện web responsive với Grid System, tương tự Bootstrap 4', 'CourseFree4.png', 10),
('terminal_ubuntu', 'Làm việc với Terminal & Ubuntu', 'Sở hữu một Terminal hiện đại, mạnh mẽ trong tùy biến và học cách làm việc với Ubuntu là một bước quan trọng trên con đường trở thành một Web Developer.', 'CourseFree7.png', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_course_pro`
--

CREATE TABLE `list_course_pro` (
  `ID` int(100) NOT NULL,
  `id_user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `list_course_pro`
--

INSERT INTO `list_course_pro` (`ID`, `id_user`) VALUES
(11, 17),
(13, 18);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acount`
--
ALTER TABLE `acount`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `course_registed`
--
ALTER TABLE `course_registed`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `info_course`
--
ALTER TABLE `info_course`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `list_course_pro`
--
ALTER TABLE `list_course_pro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acount`
--
ALTER TABLE `acount`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `course_registed`
--
ALTER TABLE `course_registed`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `info_course`
--
ALTER TABLE `info_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `list_course_pro`
--
ALTER TABLE `list_course_pro`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
