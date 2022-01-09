<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết nhân viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5 mb-5">Chi tiết Nhân viên</h5>
            <form action="" method="post">
                <div class="form-group">
                    <label for="hovaten">Tên nhân viên</label>
                    <input type="text" class="form-control" readonly id="ten" name="ten"  value="<?php echo isset($_POST['hovaten']) ? $_POST['hovaten'] : $user['hovaten']?>">
                </div>

                <div class="form-group">
                    <label for="chucvu">Chức vụ</label>
                    <input type="text" class="form-control" readonly id="chucvu" name="chucvu" value="<?php echo isset($_POST['chucvu']) ? $_POST['chucvu'] : $user['chucvu'] ?>">
                </div>

                <div class="form-group">
                    <label for="phongban">Phòng ban</label>
                    <input type="text" class="form-control" readonly id="phongban" name="phongban" value="<?php echo isset($_POST['phongban']) ? $_POST['phongban'] : $user['phongban'] ?>">
                </div>

                <div class="form-group">
                    <label for="luong">Lương</label>
                    <input type="text" class="form-control" readonly id="luong" name="luong" value="<?php echo isset($_POST['luong']) ? $_POST['luong'] : $user['luong']?>">
                </div>

                <div class="form-group">
                    <label for="ngayvaolam">Ngày vào làm</label>
                    <input type="date" class="form-control" readonly id="ngayvaolam" name="ngayvaolam" value="<?php echo isset($_POST['ngayvaolam']) ? $_POST['ngayvaolam'] : $user['ngayvaolam'] ?>">
                </div>

                <div class="mt-4">
                <a class="btn btn-primary" href="index.php?controller=danhsach&action=index&id" role="button">Quay lại</a>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>