<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author">
    <link href="./css/font-family.css" rel="stylesheet">

    <title>Ultimate laptop</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/fontawesome.css">
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/owl.css">

</head>

<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header -->
    <header class="" >
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Ultimate <em>Laptop</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Trang chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Về chúng tôi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modalDN">Đăng nhập
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modalcart">Giỏ hàng
                                <i class="fa fa-cart-arrow-down"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg">
            <div class="container" >
                <div class="nav-item dropdown">
                    <a class="nav-link" href="" id="navbardrop" data-toggle="dropdown">Danh mục hãng &nbsp; 
                        <i class="fa fa-align-justify"></i></a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">MSI</a>
                        <a href="" class="dropdown-item">Apple</a>
                    </div>

                </div>

                <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 ">
                    <marquee behavior="" direction="Left" style="color: #f33f3f; font-weight: bold; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; ">Bring you the best choice </marquee>
                </div>

                <form action="./search.php" method="get" class="form-inline">
                    <input type="text"  name="txtSearch" placeholder="Tìm kiếm" class="form-control mr-lg-2">
                    <button class="btn btn-success" name="btnSearch" type="submit" value="search">Search</button>
                </form>
            </div>
        </nav>
    </header

    <!-- Modal đăng nhập -->
    <div class="row">
        <div class="col-12">
            <div class="modal fade" id="modalDN">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <form action="">
                            <div class="modal-header">
                                <h3 class="modal-title">Đăng nhập</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
        
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <label for="txtusername"><p>Tên đăng nhập/user name: </p></label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" name="txtusername" id="txtusername">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <label for="txtpassword"><p>Mật khẩu/user name: </p></label>
                                        </div>
                                        <div class="col-5">
                                            <input type="password" class="form-control" name="txtpassword" id="txtpassword">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-5">
                                            <label for="checkboxremember">
                                                <input type="checkbox" id="checkboxremember">&nbsp;Remember me
                                            </label>
                                        </div>
                                        <div class="col-5">
                                            <a href="">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" value="đăng nhập" name="btnSubmit" data-dismiss="modal" data-toggle="modal">Đăng nhập</button>
                                <button type="button" class="btn btn-info" value="đăng ký" name="btn" data-dismiss="modal" data-toggle="modal" data-target="#modalDK">Đăng ký</button>
                                <button type="button" class="btn btn-info" value="cancel" data-dismiss="modal">Cancel</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal đăng ký  -->
    <div class="row">
        <div class="col-12">
            <div class="modal fade" id="modalDK">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" >
                        <form action="">
                            <div class="modal-header">
                                <h3 class="modal-title">Đăng ký</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
        
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <label for="txtusernameDK"><p>Nhập tên đăng nhập/user name: </p></label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" name="txtusernameDK" id="txtusernameDK">
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <label for="txtphoneDK"><p>Nhập số điện thoại: </p></label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" name="txtphoneDK" id="txtphoneDK">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <label for="txtemailDK"><p>Nhập email: </p></label>
                                        </div>
                                        <div class="col-5">
                                            <input type="email" class="form-control" name="txtemailDK" id="txtemailDK">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <p>Nhập giới tính: </p>
                                        </div>
                                        <div class="col-5 form-control" style="border: none;">
                                            <label for="checkmale" style="margin: 0px 30px;"><input type="radio" name="txtsexDK" checked id="checkmale">&nbsp;Nam</label>
                                            <label for="checkfemale"><input type="radio" name="txtsexDK" id="checkfemale">&nbsp; Nữ</label>
                                        </div>
            
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <label for="txtbirthDK"><p>Nhập ngày sinh: </p></label>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" class="form-control" name="txtbirthDK" id="txtbirthDK">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <label for="txtpasswordDK"><p>Nhập mật khẩu: </p></label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" name="txtpasswordDK" id="txtpasswordDK">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <label for="txtcheckpasswordDK"><p>Nhập lại mật khẩu: </p></label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" name="txtcheckpasswordDK" id="txtcheckpasswordDK">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <p>Đã có tài khoản?</p>
                                <button type="button" style="float: left" class="btn btn-link" value="đăng nhập" name="btn" data-dismiss="modal" data-toggle="modal" data-target="#modalDN">Đăng nhập</button>
                                <button type="button" class="btn btn-info" value="đăng ký" name="btnSubmit" data-dismiss="modal" data-toggle="modal" data-target="#modalDK">Đăng ký</button>
                                <button type="button" class="btn btn-info" value="cancel" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="modal fade" id="modalcart">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <form action="">
                            <div class="modal-header">
                                <h3 class="modal-title">Giỏ hàng</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
        
                            <div class="modal-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th class="col-1">STT</th>
                                            <th class="col-3">Sản phẩm</th>
                                            <th class="col-3">Tên sản phẩm</th>
                                            <th class="col-1">Số lượng</th>
                                            <th class="col-1">Giá tiền</th>
                                            <th class="col-2">Tổng cộng</th>
                                            <th class="col-1">Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                        <tr style="text-align: center;">
                                            <th>1</th>
                                            <th><img src="" alt=""></th>
                                            <th>Macbook</th>
                                            <th><input class="col-7" type="number" name="cartsoluong" id="cartsoluong" value="1"></th>
                                            <th>10000000</th>
                                            <th>10000000</th>
                                            <th><a href=""><i class="fa fa-trash"></i></a></th>
                                        </tr>
                                    <tbody>

                                    </tbody>
                                    
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" value="đăng nhập" name="btnSubmit" data-dismiss="modal" data-toggle="modal">Thanh toán</button>
                                <button type="button" class="btn btn-info" value="cancel" data-dismiss="modal">Cancel</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text" id="1">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
            <div class="banner-item-04">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2 style="text-transform: uppercase;">Khuyến mãi hot</h2>
                        <a href="products.html">Tất cả khuyến mãi <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                
                <?php 
                
                if (isset($_REQUEST['btnSearch'])) 
                {
                    include("./connect.php");
                    // Gán hàm addslashes để chống sql injection
                    $search = addslashes($_GET['txtSearch']);
              
                    // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
                    if (empty($search)) {
                        echo "Yeu cau nhap du lieu vao o trong";
                    } 
                    else
                    {
                        // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                        $sql="SELECT * FROM product where product_name like '%$search%'";
                        // Kết nối sql
              
                        // Đếm số đong trả về trong sql.
                        $result = mysqli_query($connect, $sql);
                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            echo ' <div class="col-md-3">
                            <a href="">
                                <div class="product-item" style="height: 300px;">
                                        <img src="'.$row["image"].'" alt="">
                                        <div class="down-content">
                                            <h6>'.$row["product_name"].'</h6>
                                            <h5>'.$row["price"].'</h5>
                                            <h4>'.$row["price"].'</h4>
                                            <i class="fa fa-star"></i>
                                            <span>'.$row["satus"].'</span>
                                        </div>
                                </div>
                            </a>
                        </div>';
                          }
                        }
                        else
                        {
                          echo 'Dữ liệu bạn tìm kiếm không tồn tại ';
                        }
                    }
                }
              
              
              
                
                ?>
               
                
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2 style="text-transform: uppercase;">Laptop Apple</h2>
                        <a href="">Tất cả sản phẩm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <a href="">
                        <div class="product-item" style="height: 300px;">
                                <img src="./images/product_01.jpg" alt="">
                                <div class="down-content">
                                    <h6>Macbook Pro Pro Pro Pro Pro Pro</h6>
                                    <h4>10,159,000 VNĐ</h4>
                                    <span>Chi tiết</span>
                                </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Laptop chất lượng với <b>Utimate Laptop</b></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>Bạn đang tìm kiếm 1 chiếc laptop chất lượng phù hợp với nhu cầu sử dụng?</h4>
                        <h6><b>Địa chỉ:</b> 12 Nguyễn Văn Bảo, phường 4, quận Gò Vấp, thành phố Hồ Chí Minh</h6>
                        <h6><b>Email:</b> <a href="mailto:ultimate-laptop@gmail.com" class="fa fa-mail-forward"> &nbsp; ultimate-laptop@gmail.com</a> </h6>
                        <h6><b>Hotline:</b> 190019xx </h6>

                        <a href="" class="filled-button">Về chúng tôi</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="middle-content">
                        <h3>Hệ thống tổng đài miễn phí: <p>(Làm việc từ 9h-18h)</p></h3>
                        <p>- Gọi mua hàng: <b>1900100x</b></p>
                        <p>- Chăm sóc khách hàng: <b>1900190x</b></p>
                        <ul class="featured-list">
                            <li><a href="#">Chính sách bảo hành</a></li>
                            <li><a href="#">Chính sách vận chuyển</a></li>
                            <li><a href="#">Chính sách thanh toán</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-image">
                        <img src="images/feature-image.jpg" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="./images/dathongbaobocongthuong.png" height="150px" width="310" alt="">
                            </div>
                            <div class="col-md-4">
                                <iframe width="504" height="283" src="https://www.youtube.com/embed/J2X5mJ3HDYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <a href="#1" class="filled-button">Về đầu trang
                                    <i class="fa fa-chevron-circle-up"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2021 Ultimate Laptop Co., Ltd.
                            - Design: <a rel="nofollow noopener" href="" target="_blank">NOTME</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/layout.js"></script>
    <script src="./js/owl.js"></script>
    <script src="./js/slick.js"></script>
    <script src="./js/isotope.js"></script>
    <script src="./js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0;
        function clearField(t) {
            if (!cleared[t.id]) {                      // function makes it static and global
                cleared[t.id] = 1;
                t.value = '';
                t.style.color = '#fff';
            }
        }
    </script>

</body>
</html>
