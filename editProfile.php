<?php session_start();
    if(!isset($_SESSION['chucvu'])) header("Location: ./login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/editProfile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include('./logic/connectDB.php');
        include('./menu.php');
        
        $key = $_GET['mssv'];
        $_SESSION['mssv'] = $key;
        $SelectAcount = sqlsrv_query($conn, "SELECT * FROM Account where MSSV = '$key' ");
        while($row = sqlsrv_fetch_array($SelectAcount)) {
    ?>
    <section class="home">
        <form id="editProfile" method="post">
            <div class="nav_close">
                <div class="sc-kLwhqv container">
                    <h2 class="sc-dlVxhl jaKxPn">Th??ng tin chi ti???t</h2>
                    <div class="sc-ezbkAF uPGlB">
                        <div class="sc-kfPuZi hbWYYm">
                            <p class="sc-llYSUQ cRwMBH">Th??ng tin c?? nh??n</p>
                        <div class="sc-fKVqWL fBvVki">
                            <div class="sc-cxpSdN tmeck">
                                <!-- anh sinh vien -->
                                <img class="avatar" src="/static/media/avatar.967787575e8bd3d5cea1.png" width="150px" height="150px">
                            </div>
                        <div class="sc-bBHxTw gwvnRC">
                            <p>M?? sinh vi??n: </p>
                            <label class="mssv"><?php echo $row['MSSV']; ?></label>
                            <p style="margin-top: 10px;">H??? v?? t??n: </p>
                            <input type="text" name="name" value="<?php echo $row['FName']; ?>" style="width: 200px;">
                            <p style="margin-top: 10px;">Ng??y sinh:</p>
                            <input type="text" name="birthday" value="<?php $Date = $row['DOB']->format('d/m/Y'); echo $Date; ?>" style="width: 200px;">
                            <p style="margin-top: 10px;">Gi???i t??nh:</p>
                            <input type="text" name="gender" value="<?php echo $row['Sex']; ?>" style="width: 200px;">
                        </div>
                        <div class="sc-iwjdpV hFPQoo">
                            <p>L???p:</p>
                            <label><?php echo $row['Malop']; ?></label>
                            <p style="margin-top: 10px;">Email: </p>
                            <input type="text" name="mail" value="<?php echo $row['Mail']; ?>" style="width: 250px;">
                            <p style="margin-top: 10px;">?????a ch???: </p>
                            <textarea type="text" name="address" placeholder="<?php echo $row['Addr']; ?>" style="resize: none; width: 250px; min-height: 9rem;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="sc-giYglK OUPQZ">
                    <p class="sc-iJKOTD jzeUPZ">??i???m s???</p>
                    <p>T???ng s??? t??n ch??? ???? ????ng k??:</p>
                    <label><?php echo $row['Sotin']; ?>/158</label> 
                    <br>
                    <progress min="0" max="158" value="<?php echo $row['Sotin']; ?>"></progress>
                    <p style="margin-top: 30px;">??i???m trung b??nh :</p>
                    <label><?php echo $row['GPA']; ?></label>
                    <p>Tr???ng th??i: </p>
                    <label class="change_status_yellow"><?php echo $row['Trangthai']; ?></label>
                </div>
            </div>
            <div class="sc-bYoBSM bykdGa">
                <a class="goback btn btn-danger" href="./sinhvien.php" style="margin-right: 20px;">
                <span class="fa fa-arrow-left" aria-hidden="true">
                </span> Quay l???i</a>
                <button type="submit" class="btn btn-primary" name="editProfile" style="margin-right: 20px;"> Ghi nh???n</button>
            </div>
            </div>
            </div>
            </div>
        </form>
    </section>
       <?php } ?>
       <script>
        $("#editProfile").submit(function( event ){
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "./logic/editProfile.php",
                data: $( this ).serializeArray()
                ,
                success: function(response){
                    if(response == "Th???t b???i"){
                        swal(
                            'L???i!',
                            '',
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