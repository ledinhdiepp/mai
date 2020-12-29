

USE `ass2`;

-- create table save account

DROP TABLE IF EXISTS tai_khoan;

CREATE TABLE `tai_khoan` (
   `id` int UNIQUE NOT NULL AUTO_INCREMENT,
   `so_dien_thoai` varchar(13) UNIQUE NOT NULL,
   `mat_khau` varchar(20) NOT NULL,
   `loai` int NOT NULL default 1,
   PRIMARY KEY(id)
);
INSERT INTO tai_khoan(id,so_dien_thoai,mat_khau,loai) VALUES
(0,'0','0',2),
(1,'1','1',1);

DROP TABLE IF EXISTS thong_tin_tai_khoan;

CREATE TABLE `thong_tin_tai_khoan` (
   `id` int UNIQUE NOT NULL AUTO_INCREMENT,
   `id_tai_khoan` int UNIQUE NOT NULL,
   `name` varchar(20) CHARACTER SET utf8 NOT NULL,
   `sur_name` varchar(13) CHARACTER SET utf8 NOT NULL,
   `phone` varchar(13) CHARACTER SET utf8 NOT NULL,
   `cmnd` varchar(13) CHARACTER SET utf8 NOT NULL,
   `gmail` varchar(30) NOT NULL,
   `dia_chi` varchar(80) CHARACTER SET utf8 NOT NULL,
   PRIMARY KEY(id)
);

INSERT INTO thong_tin_tai_khoan(id,id_tai_khoan,name,sur_name,phone,cmnd,gmail,dia_chi) VALUES
(0,1,'Lê Đình','Điệp','0394007104','285709698','ledinhdiep@gmail.com','ktx khu B ĐHQG tp Hồ chí Minh'),
(1,3,'Hoàng', 'Thuận','0978156388','123456789','hoangthuan@gmail.com','ktx khu A ĐHQG tp Hồ Chí Minh'),
(2,4,'Hoàng Văn','Long','0378156152','123987456','hoangvanlong@gmail.com','ktx khu A ĐHQG tp Hồ Chí Minh'),
(3,6,'Vũ Mộc Tranh','Phong','0147258369','2546884485','tranhphong@gmail.com','tokyo nhật bản');

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS cars;

CREATE TABLE `cars` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,0) NOT NULL,
  `description` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL
) CHARACTER SET utf8 COLLATE utf8_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `image`, `price`, `description`, `group`) VALUES
(1, 'LUX SA2.0', 'https://otovinfast.vn/wp-content/uploads/2020/09/chi-tiet-vinfast-lux-sa20-suv-kem-gia-ban-1552115585.jpg', 1500.00, 'Hỗ trợ mua xe trả góp 70-80% giá trị xe, thời gian vay tối đa 8 năm, thủ tục nhanh chóng.', 'lux-a20'),
(2, 'LUX SA2.1', 'https://otovinfast.vn/wp-content/uploads/2019/12/xedoisong_chi_tiet_suv_vinfast_lux_sa_turbo_2019_h1_grzi.jpg', 800.00 , 'Hỗ trợ mua xe trả góp 70-80% giá trị xe, thời gian vay tối đa 8 năm, thủ tục nhanh chóng.', 'lux-a20'),
(3, 'LUX SA2.2', 'https://otovinfast.vn/wp-content/uploads/2019/12/VinFast-Lux-SA-1-2268-1567149878-350x250.jpg', 300.00 , 'Hỗ trợ mua xe trả góp 70-80% giá trị xe, thời gian vay tối đa 8 năm, thủ tục nhanh chóng.', 'lux-a20'),
(4, 'Fadil', 'https://otovinfast.vn/wp-content/uploads/2019/12/maxresdefault-750x536.jpg', 800.00 , 'Hỗ trợ mua xe trả góp 70-80% giá trị xe, thời gian vay tối đa 8 năm, thủ tục nhanh chóng.', 'lux-a20'),
(5, 'LUX SA2.5', 'https://otovinfast.vn/wp-content/uploads/2020/09/chi-tiet-vinfast-lux-sa20-suv-kem-gia-ban-1552115585.jpg', 1500.00, 'Hỗ trợ mua xe trả góp 70-80% giá trị xe, thời gian vay tối đa 8 năm, thủ tục nhanh chóng.', 'lux-a20'),
(6, 'LUX SA2.6', 'https://otovinfast.vn/wp-content/uploads/2019/12/xedoisong_chi_tiet_suv_vinfast_lux_sa_turbo_2019_h1_grzi.jpg', 800.00 , 'Hỗ trợ mua xe trả góp 70-80% giá trị xe, thời gian vay tối đa 8 năm, thủ tục nhanh chóng.', 'lux-a20'),
(7, 'LUX SA2.7', 'https://otovinfast.vn/wp-content/uploads/2019/12/VinFast-Lux-SA-1-2268-1567149878-350x250.jpg', 300.00 , 'Hỗ trợ mua xe trả góp 70-80% giá trị xe, thời gian vay tối đa 8 năm, thủ tục nhanh chóng.', 'lux-a20'),
(8, 'Fadil Pro', 'https://otovinfast.vn/wp-content/uploads/2019/12/maxresdefault-750x536.jpg', 800.00 , 'Hỗ trợ mua xe trả góp 70-80% giá trị xe, thời gian vay tối đa 8 năm, thủ tục nhanh chóng.', 'lux-a20');

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

CREATE TABLE `mua_hang` (
   `id` int UNIQUE NOT NULL AUTO_INCREMENT,
   `id_tai_khoan` int UNIQUE NOT NULL,
   `sp` varchar(20) CHARACTER SET utf8 NOT NULL,
   `ten` varchar(20) CHARACTER SET utf8 NOT NULL,
   `email` varchar(50) CHARACTER SET utf8 NOT NULL,
   `phone` varchar(13) CHARACTER SET utf8 NOT NULL,
   `price` varchar(30) NOT NULL,
   `dia_chi` varchar(80) CHARACTER SET utf8 NOT NULL,
   `pmode` varchar(80) CHARACTER SET utf8 NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE `chat` (
   `id` int UNIQUE NOT NULL AUTO_INCREMENT,
   `id_user` int NOT NULL,
   `noi_dung` varchar(400) CHARACTER SET utf8 NOT NULL,
   `loai` varchar(5) CHARACTER SET utf8,
   PRIMARY KEY(id)
);
INSERT INTO chat(id,id_user,noi_dung,loai) VALUES
(0,3,'Xin chào bạn','Gửi'),
(1,3,'Chào bạn, bạn cần giúp gì vậy?','Nhận'),
(2,3,'Tại sao tôi không thể đăng tin được','Gửi'),
(3,4,'Bạn có rảnh không, cho mình hỏi tí!','Gửi');