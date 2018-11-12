<!DOCTYPE html>
<html lang="en">

<head>
   <title>Workshop-SkruDevelopment</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
</head>

<body id="body-login">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-5 py-5">
            <div class="card card-signin my-5">
               <div class="card-body">
                  <h2 class="card-title text-center">ฟอร์มเข้าสู่ระบบ</h2>
                  <form action="./form_actions.php?do=login" method="POST">
                     <div class="form-group">
                        <label>ชื่อผู้ใช้งาน</label>
                        <input type="email" class="form-control" placeholder="ระบุอีเมลล์" required autofocus>
                     </div>

                     <div class="form-group">
                        <label>รหัสผ่าน</label>
                        <input type="password" class="form-control" placeholder="ระบุรหัสผ่าน" required>
                     </div>

                     <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">จำฉันในระบบ</label>
                     </div>
                     <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">เข้าสู่ระบบ</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
   <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
   <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>