CREATE DATABASE BTTH01_CSE485

CREATE TABLE tacgia(
ma_tgia int not null primary key,
ten_tgia varchar(100) not null, /*de bai sai o day ten tác giả phải là chữ */
hinh_tgia varchar(100)
);

CREATE TABLE theloai(
ma_tloai int not null primary key,
ten_tloai varchar(50) not null
);

CREATE TABLE baiviet(
ma_bviet int not null primary key,
tieude varchar(200) not null,
ten_bhat varchar(100) not null,
ma_tloai int not null,
tomtat text not null,
noidung text,
ma_tgia int not null,
ngayviet datetime not null,
hinhanh varchar(200),
FOREIGN KEY (ma_tloai) REFERENCES  theloai(ma_tloai),
FOREIGN KEY (ma_tgia) REFERENCES  tacgia(ma_tgia),
);

--3 Thực hiện truy vấn 
--a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình (2 đ)
SELECT baiviet. *FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai WHERE theloai.ten_tloai = 'Nhạc trữ tình';

--b. Liệt kê các bài viết của tác giả “Nhacvietplus” (2 đ)SELECT baiviet. *FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia WHERE tacgia.ten_tgia = 'Nhacvietplus';--c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. (2 đ)SELECT theloai.ten_tloai FROM theloai WHERE NOT EXISTS (SELECT 1 FROM baiviet WHERE baiviet.ma_tloai = theloai.ma_tloai);
--d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết. (2 đ)SELECT ma_bviet,ten_bhat,ten_tgia,ten_tloai,ngayviet FROM baiviet,tacgia,theloai;--e. Tìm thể loại có số bài viết nhiều nhất (2 đ)SELECT theloai.ten_tloai, COUNT(*) AS so_baiviet FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai GROUP BY theloai.ten_tloai ORDER BY so_baiviet DESC LIMIT 1;

--f. Liệt kê 2 tác giả có số bài viết nhiều nhất (2 đ)
SELECT tg.ma_tgia, tg.ten_tgia, COUNT(bv.ma_bviet) as sl FROM tacgia tg INNER JOIN baiviet bv ON tg.ma_tgia = bv.ma_tgia GROUP BY tg.ma_tgia, tg.ten_tgia ORDER BY SoBaiViet DESC LIMIT 2;

--g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)SELECT *FROM baiviet WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

--h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
SELECT *FROM baiviet WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

--i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả (2 đ)CREATE VIEW vw_Music AS SELECT bv.ma_bviet AS MaBaiViet,bv.tieude AS TieuDeBaiViet,bv.ten_bhat AS TenBaiHat,tl.ten_tloai AS TenTheLoai,tg.ten_tgia AS TenTacGia FROM baiviet bv INNER JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai INNER JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia;

--j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi. (2 đ)

--k.Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo. (2 đ)ALTER TABLE theloai ADD SLBaiViet INT;

--l. Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng Đăng nhập/Quản trị trang web. (5 đ)
CREATE TABLE Users (id INT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL,  
);


