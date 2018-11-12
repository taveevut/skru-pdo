<?php 
$db_name = "test"; //ชื่อฐานข้อมูล
$db_host = "localhost";
$db_user = "root"; //ชื่อuser
$db_pass = "1234@#+"; //ชื่อรหัสผ่าน

try {
   $db_con = new PDO( "mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass );
   $db_con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   $db_con->exec( "set names utf8" );
} catch ( PDOException $e ) {
   echo $e->getMessage();
}
?>
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
         <div class="col-md-8 py-5">
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
                     <th>ที่อยู่</th>
                     <th>จัดการ</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                  $n = 1; 
                  $stmt = $db_con->prepare("SELECT * FROM users ORDER BY id DESC");
                  $stmt->execute();
                  while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
                  <tr>
                     <td scope="row"><?php echo $n;?></td>
                     <td><?php echo $rows["name"];?> <?php echo $rows["surname"];?></td>
                     <td><?php echo $rows["email"];?></td>
                     <td><?php echo $rows["address"];?></td>
                     <td width="140" align="center">
                        <a href="#" class="btn btn-info" role="button">แก้ไข</a>
                        <a href="./form_actions.php?do=delete&id=<?php echo $rows["id"];?>" onclick="return confirm('คุณต้องการลบข้อมูลแถวนี้ใช่หรือไม่ !!');" class="btn btn-danger" role="button">ลบ</a>
                     </td>
                  </tr>
                  <?php $n++; }
                  ?>
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