<!DOCTYPE html>
<html lang="en">

<head>
   <title>Workshop-SkruDevelopment</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
</head>

<body>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-7 py-5">
            <h2 class="pb-0">ฟอร์มแสดงข้อมูลสมาชิก</h2>
            <nav aria-label="breadcrumb" class="mb-5">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./index.html">หน้าแรก</a></li>
                  <li class="breadcrumb-item active" aria-current="page">ฟอร์มบันทึกข้อมูล</li>
               </ol>
            </nav>

            <table class="table table-hover">
               <thead>
                  <tr class="bg-secondary">
                     <th>ลำดับที่</th>
                     <th>ชื่อ-สกุล</th>
                     <th>อีเมลล์</th>
                     <th>สร้างเมื่อ</th>
                     <th>จัดการ</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td scope="row">1</td>
                     <td>Exp</td>
                     <td>Exp</td>
                     <td>Exp</td>
                     <td width="140" align="center">
                        <a href="#" class="btn btn-info" role="button">แก้ไข</a>
                        <a href="./form_actions.php?do=delete" class="btn btn-danger" role="button">ลบ</a>
                     </td>
                  </tr>
                  <tr>
                     <td scope="row">2</td>
                     <td>Exp</td>
                     <td>Exp</td>
                     <td>Exp</td>
                     <td width="140" align="center">
                        <a href="#" class="btn btn-info" role="button">แก้ไข</a>
                        <a href="#" class="btn btn-danger" role="button">ลบ</a>
                     </td>
                  </tr>
                  <tr>
                     <td scope="row">3</td>
                     <td>Exp</td>
                     <td>Exp</td>
                     <td>Exp</td>
                     <td width="140" align="center">
                        <a href="#" class="btn btn-info" role="button">แก้ไข</a>
                        <a href="#" class="btn btn-danger" role="button">ลบ</a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>

   <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
   <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
   <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>