<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ nhân viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <main>

        <div class="container">
            <h5 class="text-center text-primary my-5">DANH SÁCH NHÂN VIÊN</h5>
            <?php
            //file hiển thị thông báo lỗi
            require_once 'view/commons/message.php';
            ?>
            <div>
                <a class="btn btn-primary mt-2 mb-2" href="index.php?controller=danhsach&action=add&id">Thêm Nhân viên mới</a>
            </div>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Mã nhân viên</th>
                        <th scope="col">Tên nhân viên</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->

                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <th scope="row"><?php echo $user['maNV']; ?></th>
                            <td><?php echo $user['hovaten']; ?></td>
                            <td><?php echo $user['chucvu']; ?></td>
                            <td>
                                <?php
                                //khai báo 3 url xem, sửa, xóa
                                $urlDetail =
                                    "index.php?controller=danhsach&action=detail&maNV=" . $user['maNV'];
                                $urlEdit =
                                    "index.php?controller=danhsach&action=update&maNV=" . $user['maNV'];
                                $urlDelete =
                                    "index.php?controller=danhsach&action=delete&maNV=" . $user['maNV'];
                                ?>
                                <a href="<?php echo $urlDetail ?>">Chi tiết</a> &nbsp;
                                <a href="<?php echo $urlEdit ?>">Sửa</a> &nbsp;
                                <a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo $urlDelete ?>">
                                    Xóa
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>