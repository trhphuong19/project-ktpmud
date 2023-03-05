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
    <link rel="stylesheet" href="./css/notifi.css">
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
        include('./logic/connectDB.php');
        include('./menu.php');
        $SelectMaLop = sqlsrv_query($conn, "SELECT * FROM tblMaLop ");
    ?>
    <section class="home">
        <div class="container mt-5 mess">
            <div>
                <h2 class="sc-dlVxhl jaKxPn">Thông báo</h2>
            </div>
            
            <?php if($_SESSION['chucvu'] == "admin"){ ?>
                <div class="inputNotify">
                    <form id="addNotify"  method="post">
                        <div>
                            <select class="SelectClass" name="class">
                                <option>--- Chọn lớp ---</option>
                                <?php while($rowClass = sqlsrv_fetch_array($SelectMaLop)) {?>
                                <option value="<?php echo $rowClass['MaLop'];?>"><?php echo $rowClass['MaLop'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div>
                            <textarea name="Mess" id="" cols="30" rows="10" class="inputSend"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="send">Gửi</button>
                        </div>
                        
                    </form>
                </div>
            <?php }else if($_SESSION['chucvu'] == "sinhvien"){ 
                $key = $_SESSION['mssv'];
                $SelectAcount = sqlsrv_query($conn, "SELECT * FROM Account where MSSV = '$key' ");
                while($row = sqlsrv_fetch_array($SelectAcount)){ $Lop = $row['Malop'];}
            ?>
            <div class="inputNotify">
                <form id="addNotify"  method="post">
                    <div>
                        <select class="SelectClass" name="class">
                                <option><?php echo $Lop;  ?></option>
                        </select>
                    </div>
                    <div>
                        <textarea name="Mess" id="" cols="30" rows="10" class="inputSend"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="send">Gửi</button>
                    </div>
                    
                </form>
            </div>
            <?php } ?>
            <div class="showMess">

            </div>
        </div>
        <div class="app-container">
            <div class="app-header">
                <div class="messages-section">
                    <button class="messages-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="15" y1="9" x2="9" y2="15" />
                        <line x1="9" y1="9" x2="15" y2="15" /></svg>
                    </button>
                    <div class="projects-section-header">
                        <p>Client Messages</p>
                    </div>
                    <div class="messages">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $("#addNotify" ).submit(function( event ){
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "./logic/addNotify.php",
                data: $( this ).serializeArray(),
                success: function(response){
                }
            });
            var txt = $(".SelectClass").val();
                    $.post("../logic/showNotify.php", {suggest: txt}, function(result){
                    $(".messages").html(result);
                });
        });
    </script>
    <script src="./js/showNotify.js"></script>
    <script src="./js/notifi.js"></script>
    <script src="./js/narbar.js"></script>
</body>
</html>