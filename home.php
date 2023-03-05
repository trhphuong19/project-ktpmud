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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="./css/menu.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <link href='https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css' rel='stylesheet'>
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php 
        include('./menu.php');
    ?>
    <section class="home">
      <main role="main">
        <section class="panel important">
          <h2>Welcome to APD-Klasse </h2>
          <ul>
            <li>APD-Klasse là một phần mềm tiện ích đơn giản giúp quản lý sinh viên một cách cơ bản và đầy đủ nhất thông qua thống kê.</li>
            <li>Hiện nay có rất nhiều tổ chức giáo dục sử dụng hệ thống quản lý trường học và nền tảng phần mềm để quản lý các hoạt động hành chính và vấn đề học tập của học sinh.</li>
            <li>APD-Klasse cung cấp một giải pháp hợp nhất trong một nền tảng đơn giản và đẹp mắt.</li>
          </ul>
        </section>
        <section>
          <img src="./logo/334289923_208962011652827_8333286655507189973_n.png"/>
        </section>


      </main>
    </section>
    <script src="./js/home.js"></script>
    <script src="./js/narbar.js"></script>
</body>
</html>