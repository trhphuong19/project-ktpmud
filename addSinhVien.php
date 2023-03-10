<?php session_start();
    if(!isset($_SESSION['chucvu'])) header("Location: ./login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/addSinhvien.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
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
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        include('./logic/connectDB.php');
        include('./menu.php');
        
    ?>
    <section class="home">
        <form id="addSinhvien" action="" method="post" >
        <div class="container">
            
            <a href="./sinhvien.php" class="btn btn-danger"><i class='bx bx-arrow-back' ></i> Quay l???i</a>
            <h1>Th??m sinh vi??n</h1>
            <hr>
            <label for="email"><b>MSSV:</b></label>
            <input type="text" placeholder="Nh???p MSSV" name="mssv" required>
            <label for="psw"><b>H??? v?? t??n</b></label>
            <input type="text" placeholder="H??? v?? t??n" name="Name" required>
            <label for="psw"><b>Ng??y sinh</b></label>
            <input type="Date" placeholder="" name="DOB" required>
            
            <label for="psw"><b>Gi???i t??nh</b></label>
            <b>
            <select name="sex">
                <option value="">--- Select ---</option>
                <option value="Nam">Nam</option>
                <option value="N???">N???</option>
            </select>
            </b>
            <label for="psw-repeat"><b>Email</b></label>
            <input type="text" placeholder="Email" name="email" required>
            <label for="psw-repeat"><b>?????a ch???</b></label>
            <input type="text" placeholder="?????a ch???" name="addr" required>
            <label for="psw-repeat"><b>T???ng s??? t??n ch???</b></label>
            <input type="text" placeholder="0" name="tinchi" required>
            <label for="psw-repeat"><b>GPA</b></label>
            <input type="text" placeholder="0" name="gpa" required>
            <label for="psw"><b>Tr???ng th??i</b></label>
            <b>
            <select name="trangthai">
                <option value="">--- Select ---</option>
                <option value="Kh??ng">Kh??ng</option>
                <option value="Khen th?????ng">Khen th?????ng</option>
                <option value="Thi???u h???c ph??">Thi???u h???c ph??</option>
                <option value="C???nh c??o">C???nh c??o</option>
                <option value="Ngh??? h???c">Ngh??? h???c</option>
            </select>
            </b>
            <label for="psw-repeat"><b>L???p</b></label>
            <input type="text" placeholder="12345" name="lop" required>
            <div class="clearfix">
                <button type="submit" class="signupbtn" name="addAccount">Sign Up</button>
            </div>
        </div>
        </form>
    </section>
    <script>
        $("#addSinhvien" ).submit(function( event ){
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "./logic/addSinhvien.php",
                data: $( this ).serializeArray(),
                success: function(response){
                    if(response == "MSSV b??? tr??ng"){
                        swal(
                            'L???i!',
                            'M?? sinh vi??n b??? tr??ng',
                            'warning'
                        )
                    }else{
                        swal(
				            'Th??nh c??ng',
				            'Nh???p th??nh c??ng',
				            'success'
			            )
                    }
                    
                }
            });
        });
    </script>
    <script src="./js/narbar.js"></script>
</body>
</html>