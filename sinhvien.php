<?php session_start();
    if(!isset($_SESSION['chucvu'])) header("Location: ./login.php");
?>
<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!----======== CSS ======== -->
    <!-- <link rel="stylesheet" href="./css/menu.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <link href='https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css' rel='stylesheet'>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    
    <?php 
        include('./logic/connectDB.php');
        include('./menu.php');
        
        $SelectMaLop = sqlsrv_query($conn, "SELECT * FROM tblMaLop ");
    ?>
   
    

    <section class="home">
        
        <div>
            <h5 class="title">Quản lý sinh viên</h5>
        </div>
        
        <div class="container mt-5">
            <select class="SelectClass">
                <option value="Lớp">Lớp</option>
                <?php while($rowClass = sqlsrv_fetch_array($SelectMaLop)) {?>
                <option value="<?php echo $rowClass['MaLop'];?>"><?php echo $rowClass['MaLop'];?></option>
                <?php } ?>
            </select>
        <a href="./addSinhVien.php"><button class="btn btn-primary">Thêm sinh viên</button></a>
        <table class="table table-bordered" style="width:100%; border-color:black;">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>MSSV</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>GPA</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody class="list">
                <!-- hiển thị danh sách sinh viên -->
                    
                <!-- ----------------- -->
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        </div>
        
    </section>
    <script src="./js/narbar.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>