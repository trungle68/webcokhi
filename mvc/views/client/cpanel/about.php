<?php require_once "./mvc/views/client/include/head.php"; ?>
<body>
    <header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 333666999</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> cokhinguyenminh@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-2 clearfix">
						<div class="logo pull-left">
						<a href="<?=base?>"><img src="public/images/logo/lo.png" alt="" height=120px" width="200px"/></a>
						</div>
					</div>
					<div class="col-md-4 clearfix mob-ipa">
						<div class="shop-menu clearfix pull-left">
							<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="">Trang Chủ</a></li>
									<li><a href="<?=base?>about/about">Về Chúng Tôi</a></li>
									<li><a href="<?=base?>contact/contact">Liên Hệ</a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 clearfix mob-ipa">
						<div class="shop-menu clearfix pull-right">
						<ul class="nav navbar-nav collapse navbar-collapse" style="position: relative;">
							<?php if(isset($_SESSION["info"]["name"])){?>
								<li class="dropdown menu-info">
									<a class="text-info" href="javascrip:void(0)"> <?php echo '<i class="fa fa-user"></i>Xin chào '.$_SESSION['info']["name"].'<i class="fa fa-angle-down"></i>'; ?></a>
									<ul class="info-user">
											<li><a href="<?=base?>infouser/index">Thông tin cá nhân</a></li>
											<li><a href="<?=base?>home/history">Lịch sử mua hàng</a></li>
									</ul>
								</li>
							<?php }?>
								<li><a href="<?=base?>cart/showcart"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a></li>
								<li><?php if(isset($_SESSION["info"]["name"])) echo '<a href="logout/logout"><i class="fas fa-sign-out-alt"></i>Đăng Xuất</a>'; else echo '<a href="login/login"><i class="fa fa-lock"></i>Đăng Nhập</a>'; ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
    <div id="contact-page" class="container">
        <h3 style="color: #FE980F;">HỖ TRỢ TRỰC TUYẾN</h3>
		<div style="padding: unset;" class="form-group col-md-12">
			<a href="<?=base?>" name="submit" class="btn btn-primary pull-left">Trở Về</a>
		</div>
    	<div class="bg">  	   
    		<div class="row" style="margin-top: 100px;">  	
	    		<div class="col-sm-7">
	    			<div class="contact-form">
	    				
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
							<a href="<?=base?>"><img src="public/images/logo/avt.jpg" alt="" height=700px" width="680px"/></a>
				            </div>
				            
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-5">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Thư Ngỏ</h2>
	    				
	    					<p>
Kính gửi: Quý khách hàng!</p>

<p>Lời đầu tiên, Công ty TNHH Xây Dựng Đầu Tư Cơ Khí Nguyễn Minh xin gửi đến Quý khách hàng lời chào trân trọng, lời chúc sức khỏe và thành công.</p><p>
Công ty TNHH Xây Dựng Đầu Tư Cơ Khí Nguyễn Minh là doanh nghiệp chuyên hoạt động trong lĩnh vực cơ khí:sắt mỹ nghệ,cầu thang, lan can, mái nhà, cứa sắt, nhà tiền chế, nhà ở các loại,...
Với mục đích là mang đến cho khách hàng sự hài lòng và tin tưởng.</p><p> Công ty chúng tôi không ngừng phấn đấu vươn lên đáp ứng mọi công năng và nhu cầu của khách hàng.
Sản phẩm nổi bật nhất của Công ty là: Thiết kế, gia công sản xuất, thi công & lắp dựng khung nhà thép tiền chế với giá thành cạnh tranh, đảm bảo tiến độ, thay đổi linh hoạt theo yêu cầu của chủ đầu tư.</p><p>
Bên cạnh đó, Quý khách hàng còn nhận được sự tư vấn rất chuyên nghiệp của đội ngũ kỹ thuật và chương trình chăm sóc hậu mãi rất chu đáo bằng tất cả sự nhiệt tình và lòng nhiệt huyết của mọi thành viên trong công ty.
Đến với công ty của chúng tôi, đảm bảo quý khách sẽ hài lòng và trao trọn niềm tin.</p> <p>Phương châm của chúng tôi “Uy tín, chất lượng, tận tình”
Rất mong nhận được sự hợp tác của Quý khách hàng! </p>
<p>Trân trọng kính chào!
</p>
							
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div>
</body>
    <?php require_once "./mvc/views/client/include/footer.php"; ?>