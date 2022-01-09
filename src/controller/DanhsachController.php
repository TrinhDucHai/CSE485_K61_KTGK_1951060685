<?php
require_once 'model/DanhsachModel.php';
class DanhsachController
{
    // Điều khiển về mặt logic giữa UserModel và User View
    function index()
    {
        // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
        $userModel = new UserModel();
        $users = $userModel->index();
        // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
        require_once 'view/danhsach/index.php';
    }

    public function add()
    {
        $error = '';
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $chucvu = $_POST['chucvu'];
            $phongban = $_POST['phongban'];
            $luong = $_POST['luong'];
            $ngayvaolam = $_POST['ngayvaolam'];

            //xử lý validate, nếu mà để trống tên sách
            if (empty($hovaten)) {
                $error = "Tên không được để trống";
            } else {
                //gọi model để insert dữ liệu vào database
                $userModel = new UserModel();
                //gọi phương thức để insert dữ liệu
                //nên tạo 1 mảng tạm để lưu thông tin của
                //                đối tượng dựa theo cấu trúc bảng
                $userArr = [
                    'hovaten' => $hovaten,
                    'chucvu' => $chucvu,
                    'phongban' => $phongban,
                    'luong' => $luong,
                    'ngayvaolam' => $ngayvaolam,
                ];
                $isInsert = $userModel->insert($userArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                } else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=danhsach&action=index");
                exit();
            }
        }
        //gọi view
        require_once 'view/danhsach/add.php';
    }

    public function update()
    {
        
        if (!isset($_GET['maNV'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=danhsach&action=index");
            return;
        }
        if (!is_numeric($_GET['maNV'])) {
            $_SESSION['error'] = "maNV phải là số";
            header("Location: index.php?controller=danhsach&action=index");
            return;
        }
        $maNV = $_GET['maNV'];
        //gọi model để lấy ra đối tượng sách theo id
        $userModel = new UserModel();
        $user = $userModel->getUserById($maNV);

        //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $chucvu = $_POST['chucvu'];
            $phongban = $_POST['phongban'];
            $luong = $_POST['luong'];
            $ngayvaolam = $_POST['ngayvaolam'];

            //xử lý update dữ liệu vào hệ thống
            $userModel = new UserModel();
            $user = [
                'maNV' => $maNV,
                'hovaten' => $hovaten,
                'chucvu' => $chucvu,
                'phongban' => $phongban,
                'luong' => $luong,
                'ngayvaolam' => $ngayvaolam,

            ];
            $isUpdate = $userModel->update($user);
            if ($isUpdate) {
                $_SESSION['success'] = "Update bản ghi #$maNV thành công";
            } else {
                $_SESSION['error'] = "Update bản ghi #$maNV thất bại";
            }
            header("Location: index.php?controller=danhsach&action=index");
            exit();
        }
        //truyền ra view
        require_once 'view/danhsach/edit.php';
    }

    public function detail()
    {
 
        if (!isset($_GET['maNV'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=danhsach&action=index");
            return;
        }
        if (!is_numeric($_GET['maNV'])) {
            $_SESSION['error'] = "maNV phải là số";
            header("Location: index.php?controller=danhsach&action=index");
            return;
        }
        $maNV = $_GET['maNV'];
        //gọi model để lấy ra đối tượng sách theo id
        $userModel = new UserModel();
        $user = $userModel->getUserById($maNV);

        //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $chucvu = $_POST['chucvu'];
            $phongban = $_POST['phongban'];
            $luong = $_POST['luong'];
            $ngayvaolam = $_POST['ngayvaolam'];

            //xử lý update dữ liệu vào hệ thống
            $userModel = new UserModel();
            $user = [
                'maNV' => $maNV,
                'hovaten' => $hovaten,
                'chucvu' => $chucvu,
                'phongban' => $phongban,
                'luong' => $luong,
                'ngayvaolam' => $ngayvaolam,

            ];
            $isUpdate = $userModel->update($user);
            header("Location: index.php?controller=danhsach&action=index");
            exit();
        }
        //truyền ra view
        require_once 'view/danhsach/detail.php';
    }    

    public function delete()
    {
        
        $maNV = $_GET['maNV'];
        if (!is_numeric($maNV)) {
            header("Location: index.php?controller=danhsach&action=index");
            exit();
        }

        $user = new UserModel();
        $isDelete = $user->delete($maNV);
        if ($isDelete) {
            //chuyển hướng về trang liệt kê danh sách
            //tạo session thông báo mesage
            $_SESSION['success'] = "Xóa bản ghi #$maNV thành công";
        } else {
            //báo lỗi
            $_SESSION['error'] = "Xóa bản ghi #$maNV thất bại";
        }
        header("Location: index.php?controller=danhsach&action=index");
        exit();
    }
}