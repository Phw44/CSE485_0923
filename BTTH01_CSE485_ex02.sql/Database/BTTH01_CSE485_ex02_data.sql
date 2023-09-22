
-- Thêm dữ liệu cho bảng tacgia
INSERT INTO tacgia (ma_tgia, ten_tgia, hinh_tgia) VALUES
(1, 'Nguyễn Nhật Ánh', 'anh.jpg'),
(2, 'Nguyễn Hồng Ân', 'hongan.jpg'),
(3, 'Trần Nhật Ánh', 'nhatanh.jpg'),
(4, 'Lê Hồng Lý', 'lyhong.jpg'),
(5, 'Phan Vũ', 'phanvu.jpg'),
(6, 'Trần Quốc Toản', 'toan.jpg'),
(7, 'Lê Quốc Toản', 'letoan.jpg'),
(8, 'Nguyễn Văn A', 'nguyenvana.jpg'),
(9, 'Phạm Văn B', 'phamvanb.jpg'),
(10, 'Trịnh Thị C', 'trinhthic.jpg');

-- Thêm dữ liệu cho bảng theloai
INSERT INTO theloai (ma_tloai, ten_tloai) VALUES
(1, 'Nhạc trữ tình'),
(2, 'Nhạc pop'),
(3, 'Nhạc rock'),
(4, 'Nhạc rap'),
(5, 'Nhạc jazz'),
(6, 'Nhạc dance'),
(7, 'Nhạc country'),
(8, 'Nhạc classical'),
(9, 'Nhạc folk'),
(10, 'Nhạc electronic');

-- Thêm dữ liệu cho bảng baiviet
INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) VALUES
(1, 'Bài viết 1', 'Bài hát 1', 1, 'Tóm tắt bài viết 1', 'Nội dung bài viết 1', 1, '2023-09-22 10:00:00', 'hinhanh1.jpg'),
(2, 'Bài viết 2', 'Bài hát 2', 2, 'Tóm tắt bài viết 2', 'Nội dung bài viết 2', 2, '2023-09-22 11:00:00', 'hinhanh2.jpg'),
(3, 'Bài viết 3', 'Bài hát 3', 3, 'Tóm tắt bài viết 3', 'Nội dung bài viết 3', 3, '2023-09-22 12:00:00', 'hinhanh3.jpg'),
(4, 'Bài viết 4', 'Bài hát 4', 4, 'Tóm tắt bài viết 4', 'Nội dung bài viết 4', 4, '2023-09-22 13:00:00', 'hinhanh4.jpg'),
(5, 'Bài viết 5', 'Bài hát 5', 5, 'Tóm tắt bài viết 5', 'Nội dung bài viết 5', 5, '2023-09-22 14:00:00', 'hinhanh5.jpg'),
(6, 'Bài viết 6', 'Bài hát 6', 1, 'Tóm tắt bài viết 6', 'Nội dung bài viết 6', 2, '2023-09-22 15:00:00', 'hinhanh6.jpg'),
(7, 'Bài viết 7', 'Bài hát 7', 2, 'Tóm tắt bài viết 7', 'Nội dung bài viết 7', 3, '2023-09-22 16:00:00', 'hinhanh7.jpg'),
(8, 'Bài viết 8', 'Bài hát 8', 3, 'Tóm tắt bài viết 8', 'Nội dung bài viết 8', 4, '2023-09-22 17:00:00', 'hinhanh8.jpg'),
(9, 'Bài viết 9', 'Bài hát 9', 4, 'Tóm tắt bài viết 9', 'Nội dung bài viết 9', 5, '2023-09-22 18:00:00', 'hinhanh9.jpg'),
(10, 'Bài viết 10', 'Bài hát 10', 5, 'Tóm tắt bài viết 10', 'Nội dung bài viết 10', 1, '2023-09-22 19:00:00', 'hinhanh10.jpg');