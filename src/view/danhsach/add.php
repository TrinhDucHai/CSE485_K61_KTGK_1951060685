<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5 mb-5">Thêm thông tin Nhân viên</h5>
            <form action="" method="post">
                <div class="form-group">
                    <label for="hovaten">Tên nhân viên</label>
                    <input type="text" class="form-control" id="hovaten" name="hovaten"  value="">
                </div>

                <div class="form-group">
                    <label for="chucvu">Chức vụ</label>
                    <input type="text" class="form-control" id="chucvu" name="chucvu" value="">
                </div>

                <div class="form-group">
                    <label for="phongban">Phòng ban</label>
                    <input type="text" class="form-control" id="phongban" name="phongban" value="">
                </div>

                <div class="form-group">
                    <label for="luong">Lương</label>
                    <input type="text" class="form-control" id="luong" name="luong" value="">
                </div>

                <div class="form-group">
                    <label for="ngayvaolam">Ngày vào làm</label>
                    <input type="date" class="form-control" id="ngayvaolam" name="ngayvaolam" value="">
                </div>

                <div class="mt-4">
                <input  class="btn btn-info me-3" type="submit" name="submit" value="Thêm" />
                <a class="btn btn-danger" href="index.php?controller=danhsach&action=index&id" role="button">Hủy</a>
                </div>
               
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
