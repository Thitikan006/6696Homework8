<?php
    include("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- เพิ่มส่วน ใช้งาน Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ส่วนของ DataTable -->
<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<!-- เพิ่มส่วน ใช้งาน Google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:ital,wght@0,200;0,300;1,100;1,200&family=Prompt:ital,wght@0,200;0,300;1,300&display=swap" rel="stylesheet">

<!-- เพิ่ม CSS ให้ใช้ Font  -->
<style>
    body{
        font-family: 'Kanit', sans-serif;
        margin-left: 100px;
  margin-right: 100px;
  margin-top: 100px;
  margin-bottom: 100px;
    }
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบสร้างตาราง</title>
</head>
<body>
    <h1>ตารางข้อมูลเสื้อผ้า</h1>
    
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ</th>
                <th>ประเภทสินค้า</th>
                <th>ไซส์</th>
                <th>สี</th>
                <th>ราคา</th>
                <th>จำนวน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            </tr>

           <?php
           $sql = "SELECT * FROM clothes";
           $result = $conn->query($sql);
           
           if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["ID"]."</td>";
                echo "<td>".$row["Name"]."</td>";
                echo "<td>".$row["Type"]."</td>";
                echo "<td>".$row["Size"]."</td>";
                echo "<td>".$row["Color"]."</td>";
                echo "<td>".$row["Price"]."</td>";
                echo "<td>".$row["Stock"]."</td>";
                echo "</tr>";
            
             }
           } else {
             echo "0 results";
           }
           $conn->close();
           ?>

        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable('#example');
    </script>




</html>