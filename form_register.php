<!DOCTYPE html>
<html lang="en">

<head>
   <title>Workshop-SkruDevelopment</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
</head>

<body id="body-register">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-7 py-5">
            <h2 class="pb-0">ฟอร์มบันทึกข้อมูล</h2>
            <nav aria-label="breadcrumb" class="mb-5">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./index.html">หน้าแรก</a></li>
                  <li class="breadcrumb-item active" aria-current="page">ฟอร์มบันทึกข้อมูล</li>
               </ol>
            </nav>

            <form action="./form_actions.php?do=insert" method="POST">
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label>อีเมลล์</label>
                     <input type="email" name="email" class="form-control" placeholder="ระบุอีเมลล์" required>
                  </div>
                  <div class="form-group col-md-6">
                     <label>รหัสผ่าน</label>
                     <input type="password" name="password" class="form-control" placeholder="ระบุรหัสผ่าน" required>
                  </div>
               </div>
               <hr>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label>ชื่อ</label>
                     <input type="text" name="name" class="form-control" placeholder="ระบุชื่อ" required>
                  </div>
                  <div class="form-group col-md-6">
                     <label>นามสกุล</label>
                     <input type="text" name="surname" class="form-control" placeholder="ระบุนามสกุล" required>
                  </div>
               </div>
               <div class="form-group">
                  <label>ที่อยู่</label>
                  <input type="text" name="address" class="form-control" placeholder="ระบุที่อยู่" required>
               </div>
               <div class="form-group">
                  <label for="inputAddress2">ที่อยู่ 2</label>
                  <input type="text" name="address_2" class="form-control" placeholder="ระบุที่อยู่ 2">
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label>เมือง</label>
                     <input type="text" name="city" class="form-control" placeholder="ระบุเมือง" required>
                  </div>
                  <div class="form-group col-md-4">
                     <label>จังหวัด</label>
                     <select name="province" class="form-control" required>
                        <option>-เลือก-</option>
                        <?php 
                        $province = array(
                           1 => "สตูล",
                           2 => "สงขลา",
                           3 => "ปัตตานี",
                           3 => "ยะลา",
                           5 => "นราธิวาส",
                        );

                        foreach ($province as $index => $value) {?>
                        <option>
                           <?php echo $value;?>
                        </option>
                        <?php }?>
                     </select>
                  </div>
                  <div class="form-group col-md-2">
                     <label>รหัสไปรษณีย์</label>
                     <input type="text" name="zip_code" class="form-control" placeholder="ระบุ" required>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
               <button type="reset" class="btn btn-light">ยกเลิก</button>
            </form>
         </div>
      </div>
   </div>

   <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
   <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
   <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>