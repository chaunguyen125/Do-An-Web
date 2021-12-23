<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/form-validate.css">
</head>

<body>

    <div class="main">

        <form action="" method="POST" class="form" id="form-1">
            <h3 class="heading">Đăng nhập</h3>
            <p class="desc">Chào mừng bạn quay trở lại</p>

            <div class="spacer"></div>



            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>



            <!-- <div class="form-group">
            <label for="gender" class="form-label">Giới tính</label>
            <diV><input name="gender"  type="checkbox" value="male" class="form-control"> Nam</diV>
            <diV><input name="gender"  type="checkbox" value="female" class="form-control"> Nữ</diV>
            <diV><input name="gender"  type="checkbox" value="other" class="form-control"> Khác</diV>
            <span class="form-message"></span>
          </div> -->

            <button class="form-submit">Đăng ký</button>
        </form>

    </div>

    <script src="./assets/js/form-validate.js"></script>
    <script>
        //Mong muốn
        Validator({
            form: '#form-1',
            errorSelector: '.form-message',
            formGroup: '.form-group',
            rules: [
                Validator.minLength('#password', 8),
                Validator.isRequire('#email'),
                Validator.isEmail('#email'),
                Validator.isRequire('input[name="gender"]'),
            ],
            onSubmit: function(data) {
                console.log(data);
            }
        });
    </script>

</body>

</html>