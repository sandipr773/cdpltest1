    <?php include 'config/connect.php'; ?>
    <?php
    session_start();
    if (!empty($_POST)) {
        // print_r($_POST);
        $user_id = $_POST['uid'];
        $password = $_POST['password'];
        $q = "SELECT * FROM `employees` WHERE `userid`= '$user_id'";
        $result = $conn->query($q);

        if ($result->num_rows) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['age'] = $row['age'];
            $_SESSION['education'] = $row['education'];
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['target'] = $row['target'];
            $_SESSION['achieved_target'] = $row['achieved_target'];
            $_SESSION['name'] = $row['name'];
            // echo "<pre>";
            // print_r($row);
            // echo $_SESSION['age']."<br>";
            // echo $_SESSION['education']."<br>";
            // echo $_SESSION['userid']."<br>";
            // echo $_SESSION['password']."<br>";
            if($_SESSION['password'] === $password){
                // header("location:index.php");
                header('location:http://localhost/poc/index.php');
            }else{
                echo "credencial mismatch";
            }
            
            // die();
        }else{
            echo "no user found";
        }
    }
    // $row = mysqli_fetch_assoc($emp_data);
    // print_r($emp_data);
    // die();
    // }
    // $q = "SELECT * FROM `employees`";
    // $emp_data = $conn->query($q);
    // $row = mysqli_fetch_assoc($emp_data);
    // print_r($row);
    // die();
    ?>

    <!DOCTYPE html>
    <html lang="zxx">

    <!-- Mirrored from demo.dashboardpack.com/sales-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 15:50:27 GMT -->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Sales</title>

        <link rel="stylesheet" href="admin/css/bootstrap1.min.css" />

        <link rel="stylesheet" href="admin/vendors/themefy_icon/themify-icons.css" />
        <link rel="stylesheet" href="admin/vendors/font_awesome/css/all.min.css" />


        <link rel="stylesheet" href="admin/vendors/scroll/scrollable.css" />

        <link rel="stylesheet" href="admin/css/metisMenu.css">

        <link rel="stylesheet" href="admin/css/style1.css" />
        <link rel="stylesheet" href="admin/css/colors/default.css" id="colorSkinCSS">
    </head>

    <body class="crm_body_bg">
        <section class=" dashboard_part large_header_bg mt-5 p-lg-5">
            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="dashboard_header mb_50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dashboard_header_title">
                                            <h3>Login</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashboard_breadcam text-end">
                                            <p><a href="index-2.html">Dashboard</a> <i class="fas fa-caret-right"></i> login
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="white_box mb_30">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">

                                        <div class="modal-content cs_modal">
                                            <div class="modal-header justify-content-center theme_bg_1">
                                                <h5 class="modal-title text_white">Log in &nbsp; <i class="ti-user"></i>
                                                </h5>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="POST">
                                                    <div class>
                                                        <input type="text" class="form-control" placeholder="User Id" name="uid">
                                                    </div>
                                                    <div class>
                                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                                    </div>
                                                    <!-- <a href="#" class="btn_1 full_width text-center">Log in</a> -->
                                                    <input type="submit" class="btn btn-primary mb-3" value="Login" name="login">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="admin/js/jquery1-3.4.1.min.js"></script>

        <script src="admin/js/popper1.min.js"></script>

        <script src="admin/js/bootstrap.min.html"></script>

        <script src="admin/js/metisMenu.js"></script>

        <script src="admin/vendors/scroll/perfect-scrollbar.min.js"></script>
        <script src="admin/vendors/scroll/scrollable-custom.js"></script>

        <script src="admin/js/custom.js"></script>
    </body>

    <!-- Mirrored from demo.dashboardpack.com/sales-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 15:50:27 GMT -->

    </html>