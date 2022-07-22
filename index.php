 <?php 
	include("header2.php");
 ?>
		<style>
.dh-container {
  margin: 15px;
  width: 400px;
  height: 300px;
  background: black;
  float: left;
  background-image: url('images/23.jpg');
  background-repeat:no-repeat;
    background-size: 400px 300px;
}
.dh_c1{
	 background-image: url('images/25.jpg');
}
.dh_c2{
	 background-image: url('images/21.jpg');
}
.dh-overlay {
  background: rgba(52,73,94,.65);
  width: 100%;
  height: 100%;
  text-align: center;
  line-height: 300px;
  color: #fff;
}

 
 
 .counter{ 
    text-align: center;
    width: 181px;
    padding: 20px 0 55px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}
.counter:before{
    content: '';
    background: #9B16FF;
    height: 180px;
    width: 180px;
    border-radius: 50% 50%  20px;
    transform: rotate(45deg);
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
}
.counter .counter-content{
    color: #fff;
    height: 135px;
    width: 135px;
    padding: 30px;
    margin: 0 auto;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5),0 0 0 10px #fff;
}
.counter h3{
    font-size: 17px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.counter .counter-value{
    font-size: 35px;
    font-weight: 600;
    line-height: 30px;
    display: block;
}
.counter:hover .counter-value{ text-shadow: 0 0 4px rgba(0, 0, 0, 0.5) }
.counter .counter-icon{
    color: #fff;
    font-size: 25px;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    bottom: 4px;
    transition: all 0.3s;
}
.counter:hover .counter-icon i{
    transform: rotateY(0);
    transition: all 0.3s;
}
.counter:hover .counter-icon i{
    transform: rotateY(360deg);
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.6);
}
.counter.magenta:before,
.counter.magenta .counter-content:before{
    background-color: #d11094;
}
.counter.red:before,
.counter.red .counter-content:before{
    background-color: #d82222;
}
.counter.blue:before,
.counter.blue .counter-content:before{
    background-color: #344aba;
}
@media screen and (max-width:990px){
    .counter{ margin-bottom: 30px; }
}
 .card_card {
        
        position: relative;
         width:380px; 
    }
    .card_card .img-top {
        display: none;
        
       position: absolute;
    top: 15px;
    left: 140px;
    z-index: 99;
    }
    .card_card:hover .img-top {
        display: block;
    }
	.card_card:hover{
	  background: rgb(0,199,254);
background: radial-gradient(circle, rgba(0,199,254,1) 43%, rgba(1,149,249,1) 94%, rgba(1,149,249,1) 100%); 
	}
	.card_card:hover .card_content>p{
		color:white;
	}
	.serviceBox{
    color: #555;
    background: #fff; 
    text-align: center;
    padding: 10px 15px 20px;
    border-radius: 30px;
    overflow: hidden;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
	box-shadow: 0 0 15px #999;
}
 
.serviceBox:before{
    content: "";
    background: linear-gradient(45deg,#139627,#4BB85D,#139627);
    width: 125%;
    height: 130px;
    border-radius: 50%;
    position: absolute;
    top: -75px;
    left: -50px;
    z-index: -1;
}
.serviceBox .service-icon{
    color: #fff;
    font-size: 25px; 
}
.serviceBox .service-icon i{
    transform: rotateX(0deg) rotateY(0deg);
    transition: all 0.3s ease 0s;
}
.serviceBox:hover .service-icon i{
    text-shadow: 0 0 5px #fff;
    transform: rotateX(360deg) rotateY(360deg);
}
.serviceBox .title{
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0 0 10px;
    transition: all 0.3s;margin-top:20px;color: #139627;
}
 
.serviceBox .description>ul>li>i{
    font-size: 15px;
    line-height: 25px;
	 
}
.serviceBox.yellow:before{ background: linear-gradient(45deg,#db9e11,#FEC132,#db9e11); }
.serviceBox.yellow .title{ color: #db9e11; }
.serviceBox.red:before{ background: linear-gradient(45deg,#d1082d,#ED2D52,#d1082d); }
.serviceBox.red .title{ color: #d1082d; }
.serviceBox.gray:before{ background: linear-gradient(45deg,#343538,#626367,#343538); }
.serviceBox.gray .title{ color: #343538; }
@media only screen and (max-width:990px){
    .serviceBox{ margin: 0 0 40px; }
}
 .serv_img:after {
    display: block;
    content: "";
       width: 45px;
    height: 45px;
    position: absolute;
    top: 76%;
    right: -14px;
    border-bottom: 8px solid #0C8DB7;
    border-right: 8px solid #0C8DB7;
}
 .serv_img:before {
    display: block;
    content: "";
       width: 45px;
    height: 45px;
    position: absolute;
    top: -9%;
    left: -12px;
    border-top: 8px solid #0270BB;
    border-left: 8px solid #0C8DB7;
}
.icon_overall_div{
	 box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2	) 0px -3px 0px inset;
		border-radius:10px; 
	background:white;
}
.icon_overall_div1{
	box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0) 0px -3px 0px inset;border-radius:10px; 
	background:white;
}
.icon_overall_div12{
	border-radius:10px; 
	background:white;
	border-bottom: 8px solid #05836a;box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}
 .gallery_div{
	 box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;border-radius:15px;
	padding:4px;
 }
 .gallery_div1{
	 box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;border-radius:25px 25px 0 0;
	padding:4px 7px 4px 7px; background: rgb(6,71,116);
background: linear-gradient(113deg,#0176B6 30%, rgba(7,81,130,1) 76%) !important; 
 }
 .gallery_div1>img{
	 border-radius:25px 25px 0 0;
 }
 .gallery_div>img{
	 border-radius:10px;
 }
 .small_bg{
	background:#3498db;width:50%;height:8px;position:relative;z-index:1;top:-19px;
}
.tab{
       background: linear-gradient(140deg, rgba(52,152,219,1) 52%, #0c83c3 52%);
    padding: 15px;
    border-radius: 15px;
}
.tab .nav-tabs{
    margin: 0;
    border: none;
}
.tab .nav-tabs li a{
    color: #fff;
    background: transparent;
    font-size: 19px;
    font-weight: 600;
    text-transform: capitalize;
    padding: 8px 25px 10px;
    margin: 0 10px 13px 0;
    border: none;
    border-radius: 12px;
    box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
    overflow: hidden;
    position: relative;
    z-index: 1;
	text-decoration:none !important;
    transition: all 0.3s ease 0s;
}
.tab .nav-tabs li.active a,
.tab .nav-tabs li a:hover,
.tab .nav-tabs li.active a:hover{
    color: #3498DB;
    background: transparent;
    border: none;
}
.tab .nav-tabs li a:before{
    content: "";
    background: #fff;
    border-radius: 50%;
    opacity: 0;
    filter: blur(5px);
    position: absolute;
    top: 7px;
    left: 7px;
    right: 7px;
    bottom: 7px;
    z-index: -1;
    transition: all 0.3s ease-out 0s;
}
.tab .nav-tabs li.active a:before,
.tab .nav-tabs li a:hover:before{
    border-radius: 10px;
    opacity: 1;
    filter: blur(0);
}
.tab .tab-content{
    color: #111 !important;
    
    background: rgb(220,241,255);
background: linear-gradient(140deg, rgba(220,241,255,1) 51%, rgba(208,238,255,1) 51%); 
    padding: 10px;
    border-radius: 20px;
    box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    position: relative;
}
@media only screen and (max-width: 479px){
    .tab .nav-tabs li{
        width: 100%;
        text-align: center;
    }
    .tab .nav-tabs li a{ margin: 0 0 10px; }
}
	.img_name {
 
  background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%); 
  border-radius: 6px;
  box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset; 
  color: #fff; text-align:center;
  padding:15px;
  font-size:16px;
  
}
	.implnk_icon{ 
    text-align: center;
    padding: 10px;
    border: 5px solid #eee;  
}
.implnk_icon .service-icon{
    color: #fff;
    background-color: #fff;
     line-height: 100px;
    width: 100px;
    height: 100px;
    margin: 0 auto 20px;
    border-radius: 50% 50% 0;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    position: relative;
    z-index: 1;
} 
.implnk_icon .service-icon:before{
    content: '';
    background: linear-gradient(#FA8B50,#FF5F55);
    border-radius: 50%;
    position: absolute;
    left: 10px;
    right: 10px;
    top: 10px;
    bottom: 10px;
    z-index: -1;
}
.implnk_icon .title{
    color: #FF5F55;
    font-size: 20px;
    font-weight: 600; 
    margin: 0 0 7px;
}
 
.implnk_icon.pink .service-icon:before{ background: linear-gradient(#D357B8,#F2506B); }
.implnk_icon.pink .title{ color: #F2506B; }
.implnk_icon.purple .service-icon:before{ background: linear-gradient(#AC5EF5,#494C9F); }
.implnk_icon.purple .title{ color: #494C9F; }
.implnk_icon.blue .service-icon:before{ background: linear-gradient(#5DC4B9,#69A5F2); }
.implnk_icon.blue .title{ color: #69A5F2; }
	</style>
  </head>
  <body>
  <div id="carouselExampleControls" class="carousel slide carousel-fade"  data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="images/slider5.jpeg" class="d-block w-100" alt="..." height="400">

    </div>
    <div class="carousel-item">
      <img src="images/slider6.jpeg" class="d-block w-100" alt="..." height="400">
    </div>
    <div class="carousel-item">
      <img src="images/slider1.jpeg" class="d-block w-100" alt="..." height="400">
    </div>
    <div class="carousel-item">
      <img src="images/slider3.jpeg" class="d-block w-100" alt="..." height="400">
    </div>
    <div class="carousel-item">
      <img src="images/slider2.jpeg" class="d-block w-100" alt="..." height="400">
    </div>
    <div class="carousel-item">
      <img src="images/slider1.jpeg" class="d-block w-100" alt="..." height="400">
    </div>
    <div class="carousel-item">
      <img src="images/slider7.jpeg" class="d-block w-100" alt="..." height="400">
    </div>
    

    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span> 	 	
  </button>
</div>
 
<div class="container pb-3">
    <div class="row mt-3">
	<div class="col-lg-4 ">
		<h5 class="fw-bold mt-4">About Us</h5>
	  <p class="fs-6 lh-base"> <span class="ms-5">Lorem</span> ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volut pat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor.Proin accumsan felis ac felis dapibus, non iaculis mi varius.Lorem ipsum dolor sit. Proin accumsan felis ac felis dapibus, non iaculis mi varius.Lorem ipsum dolor sit.</p>
	</div>
        <div class="col-md-5 ">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li role="presentation" class="nav-item"><a class="nav-link active" id="press-tab" data-bs-toggle="tab" data-bs-target="#press" aria-controls="press" role="tab" data-toggle="tab">Press Release</a></li>
                    <li class="nav-item" role="presentation"><a  class="nav-link" id="link-tab" data-bs-toggle="tab" data-bs-target="#link"  aria-controls="link" role="tab" data-toggle="tab">Quick Links</a></li>
                    
                </ul>
				 
 
 
  
    
  
                <!-- Tab panes -->
                <div class="tab-content tabs" id="myTabContent" style="min-height:230px;">
                    <div role="tabpanel" class="tab-pane fade show active" id="press" role="tabpanel" aria-labelledby="press-tab"> 
                       <marquee direction="up" height="210px" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();"> 
								<ul class="lh-lg list-unstyled">
									<li><i class="fa fa-bullhorn fa-lg mx-2"></i>Urban Local Bodies Election, 2022 - TNG Gazetee Notification</li>
									<li><i class="fa fa-bullhorn fa-lg mx-2"></i>Ordinary Elections to Urban Local Bodies, 2022 - Programme of Election</li>
									<li><i class="fa fa-bullhorn fa-lg mx-2"></i>Form 3, 3A & 3A Abstract</li>
									<li><i class="fa fa-bullhorn fa-lg mx-2"></i>Candidate Handbook in Tamil (Urban)</li>
									<li><i class="fa fa-bullhorn fa-lg mx-2"></i>Tamil Nadu Urban Local Bodies Electoral Rolls - 2021 & 2022</li>
									<li><i class="fa fa-bullhorn fa-lg mx-2"></i>Know Your Polling Station in 2021 &amp; 2022 Tamil Nadu Urban Local Bodies Electoral Roll</li>
									<li><i class="fa fa-bullhorn fa-lg mx-2"></i>Urban Local Bodies - Reservation</li>
									<li><i class="fa fa-bullhorn fa-lg mx-2"></i>Model Code of Conduct (MCC) for Local Body Elections</li>
									<li><i class="fa fa-bullhorn fa-lg mx-2"></i>SOP for conduct of Local Body Elections during COVID 19 for RO / ARO / Polling Personnel / Political Parties / Candidates / Voters</li>
								</ul>
							</marquee>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="link-tab">
                       <ul class="lh-lg list-unstyled"> 
								<li><i class="fa fa-link fa-lg mx-2"></i> Programme of Election</li>
								<li><i class="fa fa-link fa-lg mx-2"></i>Form 3, 3A & 3A Abstract</li>
								<li><i class="fa fa-link fa-lg mx-2"></i>Candidate Handbook in Tamil (Urban)</li>						 
							</ul> 
                    </div>
                     
                </div>
            </div>
        </div>
		<div class="col-lg-3 align-self-center mx-auto text-center">
				<img src="images/img.png" class="w-75 " height="250" style="border:1px solid #3498DB;outline:3px solid #3498DB;outline-offset:4px;border-radius:5px;z-index: -1;
    position: relative;"><div class="img_name">IAS Officer Name</div>

			</div>
    </div>
</div>
<section style="background:#eff8ff;">
<div class="container py-5">
	<div class="row">
		<div class="col-lg-3">
			 <div class="implnk_icon blue bg-white">
                <div class="service-icon">
                    <span><img src="images/links_icons/local.png" height="50"/></span>
                </div>
                <h3 class="title">Local Body Electrol Roll</h3> 
            </div>
			 
		</div>
		<div class="col-lg-3">
			 <div class="implnk_icon purple bg-white">
                <div class="service-icon">
                    <span><img src="images/links_icons/know.png" height="50"/></span>
                </div>
                <h3 class="title">Know Your Polling station</h3> 
            </div>
			 
		</div>
		<div class="col-lg-3">
			 <div class="implnk_icon pink bg-white">
                <div class="service-icon">
                    <span><img src="images/links_icons/receipt.png" height="50"/></span>
                </div>
                <h3 class="title">Receipt of Nomination</h3> 
            </div>
			 
		</div>
		<div class="col-lg-3">
			 
 <div class="implnk_icon bg-white">
                <div class="service-icon">
                    <span><img src="images/links_icons/result.png" height="50"/></span>
                </div>
                <h3 class="title">Result</h3> 
            </div>
			  
		</div>
	</div>
</div>
</section>
<section class="services_12" style="background:#EDF1FB;">
	<div class="container py-3">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100" style="border-top: 8px solid #FAB131;">
					<img src="images/bg_blue/about.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">About Us</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
			<div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100" style="border-top: 8px solid #53174F;">
					<img src="images/bg_blue/book.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Forms and Hand Books</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
			 <div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100" style="border-top: 8px solid #2697B4;">
					<img src="images/bg_blue/faq.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">FAQs</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
			 
			<div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100" style="border-top: 8px solid #EE3D53;">
					<img src="images/bg_blue/history.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Historical Perspective</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
		 
			<div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4  w-100" style="border-top: 8px solid #7032A0;">
					<img src="images/bg_blue/order.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Statutory Order</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5  d-flex justify-content-center">
		 <div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100">
					<img src="images/bg_blue/law.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Important Judgments</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
		  <div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100">
					<img src="images/bg_blue/contact.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Office Contacts</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
			  <div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100">
					<img src="images/bg_blue/symbol.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Parties & Symbols</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div> 
			 <div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100">
					<img src="images/bg_blue/result.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Results</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
			 <div class="col-lg-2 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100">
					<img src="images/bg_blue/gallery.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Photo Gallery</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
			 
		</div>
		<div class="row mt-5 w-100 d-flex justify-content-center">
			 
			 <div class="col-lg-3 mx-auto text-center d-flex align-self-stretch" >
				<div class="icon_overall_div py-3 px-4 w-100">
					<div class="small_bg mx-auto text-center rounded"> </div>	
					<img src="images/bg_blue/web_link.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Website Links</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
		  <div class="col-lg-3 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100">	
					<div class="small_bg mx-auto text-center rounded"> </div>	
					<img src="images/bg_blue/election.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Elections</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
			  <div class="col-lg-3 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4 w-100">
					<div class="small_bg mx-auto text-center rounded"> </div>	
					<img src="images/bg_blue/form.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3 fs-6 fw-bold">Form-A, Form-B & Form-C</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
			 <div class="col-lg-3 mx-auto text-center d-flex align-self-stretch">
				<div class="icon_overall_div py-3 px-4">
				<div class="small_bg mx-auto text-center rounded"> </div>	
					<img src="images/bg_blue/election.png" height="60"/>
					<div class="service_content">
						<h6 class="mt-3  fw-bold">Abstract Information about Candidate</h6>
						<small class="mt-3 fs-6">more details <i class="fa fa-caret-right fa-lg ms-1" aria-hidden="true"></i></small>
					</div>
				</div>
			</div>
		</div>
 
	 
	</div>
</section>
<section class="services_12 d-none" style="background:#EEEEEE;">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/about.png"/>
				</div>
			</div>
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/hand_book.png"/>
				</div>
			</div>
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/faq.png"/>
				</div>
			</div>
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/history.png"/>
				</div>
			</div>
		
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/order.png"/>
				</div>
			</div></div>
		<div class="row mt-5 pt-5">
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/law.png"/>
				</div>
			</div>
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/contact.png"/>
				</div>
			</div>
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/edit.png"/>
				</div>
			</div>
		
			<div class="col-lg-2 mx-auto text-center">
				 
				<div class="icon_overall_div d-inline py-5 px-4" style="border:2px solid #c8c8c9;">
					
					<img src="images/service/gallery.png"/>
				</div> 
				<div class="icon_overall_div1 mx-auto" style="height:15px;width:75%;border:2px solid #fafaff;"></div>
			</div>
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/judge.png"/>
				</div>
			</div></div>
		<div class="row mt-5 pt-5">
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/website_link.png"/>
				</div>
			</div>
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/election.png"/>
				</div>
			</div>
		
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/form.png"/>
				</div>
			</div>
			<div class="col-lg-2 mx-auto text-center">
				<div class="icon_overall_div d-inline py-5 px-4">
					<img src="images/service/candidate.png"/>
				</div>
			</div>
			 </div>
	 
	</div>
</section>
<div class="container py-5 d-none">
	<div class="row">
		<div class="col-lg-4 mx-2" style="width:31%;">
			<div class="row" style="  background: rgb(249,246,237);
background: linear-gradient(90deg, rgba(249,246,237,1) 69%, rgba(235,177,163,1) 69%);box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;height:185px;">
				<div class="col-5 pt-3"> 
					<div class="row">
						<h5 class="mx-auto text-center fw-bold" style="color:#0073B6;">Heading</h5>
					</div>
					<div class="row" style="height:135px;overflow:hidden;">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-6" style="width:58%;">
					<img src="images/25.jpg" style="height:185px;border-radius:50%;width:100%;"/>
				</div>
				<div class="col-1">
				</div>
			</div>
		</div>
		<div class="col-lg-4 mx-2" style="width:31%;">
			<div class="row" style="  background: rgb(249,246,237);
background: linear-gradient(90deg, rgba(249,246,237,1) 69%, rgba(235,177,163,1) 69%);box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;height:185px;">
				<div class="col-5 pt-3"> 
					<div class="row">
						<h5 class="mx-auto text-center fw-bold" style="color:#0073B6;">Heading</h5>
					</div>
					<div class="row" style="height:135px;overflow:hidden;">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-6" style="width:58%;">
					<img src="images/23.jpg" style="height:185px;border-radius:50%;width:100%;"/>
				</div>
				<div class="col-1">
				</div>
			</div>
		</div>
		<div class="col-lg-4 mx-2" style="width:31%;">
		<div class="row" style="  background: rgb(249,246,237);
background: linear-gradient(90deg, rgba(249,246,237,1) 69%, rgba(235,177,163,1) 69%);box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;height:185px;">
				<div class="col-5 pt-3"> 
					<div class="row">
						<h5 class="mx-auto text-center fw-bold" style="color:#0073B6;">Heading</h5>
					</div>
					<div class="row" style="height:135px;overflow:hidden;">
						<p>Lorem Ipsum Heading about the image Lorem Ipsum Heading about the image.</p>
					</div>
				</div>
				<div class="col-6" style="width:58%;">
					<img src="images/21.jpg" style="height:185px;border-radius:50%;width:100%;"/>
				</div>
				<div class="col-1">
				</div>
			</div>
		</div>
	</div>
</div>
<section class="d-none" style="background:#E8F9FF">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-4">
				<div class="card_card p-3 bg-white text-center" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;border-radius:5px;">
					 
		 
						<img src="images/icon/b_house.png" alt="Card Back">
        <img src="images/icon/w_house.png" class="img-top" alt="Card Front">
					 
					<div class="card_content mt-3">
						<p class="fs-4 fw-bold">Service 1</p>
					</div>
				</div>
			</div>
				<div class="col-lg-4">
				<div class="card_card p-3 bg-white text-center" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;border-radius:5px;">
					 
		 
						<img src="images/icon/b_view.png" alt="Card Back">
        <img src="images/icon/w_view.png" class="img-top" alt="Card Front">
					 
					<div class="card_content mt-3">
						<p class="fs-4 fw-bold">Service 2</p>
					</div>
				</div>
			</div>
				<div class="col-lg-4">
				<div class="card_card p-3 bg-white text-center" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;border-radius:5px;">
					 
		 
						<img src="images/icon/b_add.png" alt="Card Back">
        <img src="images/icon/w_add.png" class="img-top" alt="Card Front">
					 
					<div class="card_content mt-3">
						<p class="fs-4 fw-bold">Service 3</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="d-none" style="background:#E8E9EB;">
	<div class="container py-5">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon">
                    <span><i class="fa fa-home"></i></span>
                </div>
                <h3 class="title">Service 1</h3>
                 <p class="description"> <ul class="list-unstyled text-start">
        <li><i class="fa fa-check me-1 list_color1"></i> Geeks</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Sudo</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Gfg</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Gate</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Placement</li>
    </ul></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox yellow">
                <div class="service-icon">
                    <span><i class="fa fa-file"></i></span>
                </div>
                <h3 class="title">Service 2</h3>
                <p class="description"> <ul class="list-unstyled text-start">
        <li><i class="fa fa-check me-1 list_color1"></i> Geeks</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Sudo</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Gfg</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Gate</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Placement</li>
    </ul></p>
            </div>
        </div>
		<div class="col-md-3 col-sm-6">
            <div class="serviceBox red">
                <div class="service-icon">
                    <span><i class="fa fa-users"></i></span>
                </div>
                <h3 class="title">Service 3</h3>
                 <p class="description"> <ul class="list-unstyled text-start">
        <li><i class="fa fa-check me-1 list_color1"></i> Geeks</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Sudo</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Gfg</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Gate</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Placement</li>
    </ul></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox grey">
                <div class="service-icon">
                    <span><i class="fa fa-user"></i></span>
                </div>
                <h3 class="title">Service 4</h3>
                <p class="description"> <ul class="list-unstyled text-start">
        <li><i class="fa fa-check me-1 list_color1"></i> Geeks</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Sudo</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Gfg</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Gate</li>
        <li><i class="fa fa-check me-1 list_color1"></i> Placement</li>
    </ul></p>
            </div>
        </div>
    </div>
</div>
</section>
<section>
<div class="container py-5 d-none">
	<div class="row">
		<div class="col-lg-3">
			<div class="serv_div text-center mx-auto">
				<div class="serv_img p-3 w-50 text-center mx-auto" style="background:#F2F2F2;transform: skew(337deg);    box-shadow: rgb(9 30 66 / 0%) 0px 1px 1px, rgb(9 30 66 / 13%) 0px 0px 1px 1px;">
					<img src="images/icon/b_add.png" style="transform: skew(23deg);">
				</div>
				<div class="serv_content mt-5">
				<h5 class="fw-bold">Services</h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="serv_div text-center mx-auto">
				<div class="serv_img p-3 w-50 text-center mx-auto" style="background:#F2F2F2;transform: skew(337deg);    box-shadow: rgb(9 30 66 / 0%) 0px 1px 1px, rgb(9 30 66 / 13%) 0px 0px 1px 1px;">
					<img src="images/icon/b_house.png" style="transform: skew(23deg);">
				</div>
				<div class="serv_content mt-5"><h5 class="fw-bold">Sample</h5>
				<p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

</p>
				</div>
			</div>
		</div><div class="col-lg-3">
			<div class="serv_div text-center mx-auto">
				<div class="serv_img p-3 w-50 text-center mx-auto" style="background:#F2F2F2;transform: skew(337deg);box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;">
					<img src="images/icon/b_view.png" style="transform: skew(23deg);">
				</div>
				<div class="serv_content mt-5">
				<h5 class="fw-bold">Sample</h5>
				<p>when an unknown printer took a galley of type and scrambled it to make a type and more recently with desktop publishing specimen book.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="serv_div text-center mx-auto">
				<div class="serv_img p-3 w-50 text-center mx-auto" style="background:#F2F2F2;transform: skew(337deg);    box-shadow: rgb(9 30 66 / 0%) 0px 1px 1px, rgb(9 30 66 / 13%) 0px 0px 1px 1px;">
					<img src="images/icon/b_add.png" style="transform: skew(23deg);">
				</div>
				<div class="serv_content mt-5">
				<h5 class="fw-bold">Sample</h5>
				<p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,  software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<div class="container py-2 d-none">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                   
                </div>
                <div class="counter-content">
                    <i class="fa fa-user  fa-5x"></i>
                </div>
            </div>
			<p class="text-center p-3 fs-5 fw-bold">Step 1
			<hr style="position:relative;bottom: 15%;
    width: 70%;
    left: 70%;"></p>
        </div>
		
        <div class="col-md-3 col-sm-6">
            <div class="counter magenta">
                <div class="counter-icon">
                   
                </div>
                <div class="counter-content">
                    <i class="fa fa-file fa-5x"></i>
                </div>
            </div>	<p class="text-center p-3 fs-5 fw-bold">Step 2
			<hr style="position:relative;bottom: 15%;
    width: 70%;
    left: 70%;"></p>
        </div>
		 <div class="col-md-3 col-sm-6">
            <div class="counter red">
                <div class="counter-icon">
                   
                </div>
                <div class="counter-content">
                    <i class="fa fa-book fa-5x"></i>
                </div>
            </div>
			<p class="text-center p-3 fs-5 fw-bold">Step 3
			<hr style="position:relative;bottom: 15%;
    width: 70%;
    left: 70%;"></p>
        </div>
		
        <div class="col-md-3 col-sm-6">
            <div class="counter blue">
                <div class="counter-icon">
                   
                </div>
                <div class="counter-content">
                    <i class="fa fa-check-circle fa-5x"></i>
                </div>
            </div>	<p class="text-center p-3 fs-5 fw-bold">Step 4
			 </p>
        </div>
    </div>
</div>
<section id="service_sec"  style="background:#F1F5FE">
<div class="container py-5"><h4 class="pb-1 mx-auto text-center">Gallery</h4>
<div class="row">
	<div class="col-md-3 col-sm-6">
            <div class="gallery_div pb-2 bg-white">
               <img src="images/21.jpg" class="w-100 mb-2" height="200"/>
              <p class="text-center"><b>fddfg dfg</b></p> 
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mt-3 mt-md-0">
            <div class="gallery_div pb-2 bg-white">
               <img src="images/28.jpg" class="w-100 mb-2" height="200"/>
              <p class="text-center"><b>sdasdas dfg</b></p> 
            </div>
        </div>
		<div class="col-md-3 col-sm-6 mt-3 mt-md-0">
             <div class="gallery_div pb-2 bg-white">
               <img src="images/23.jpg" class="w-100 mb-2" height="200"/>
              <p class="text-center"><b>fddfg dfg</b></p> 
            </div>
        </div>
		<div class="col-md-3 col-sm-6 mt-3 mt-md-0">
             <div class="gallery_div pb-2 bg-white">
               <img src="images/25.jpg" class="w-100 mb-2" height="200"/>
              <p class="text-center"><b>fddfg dfg</b></p> 
            </div>
        </div>
</div>
</div>
</section>

<section id="service_sec"  style="background:#F1F1FE">
<div class="container py-5"><h4 class="pb-1 mx-auto text-center">Gallery</h4>
<div class="row">
	<div class="col-md-3 col-sm-6">
            <div class="gallery_div1 pb-2 bg-white">
			 <p class="text-center text-white mt-2 fs-6"><b>fddfg dfg</b></p> 
               <img src="images/21.jpg" class="w-100" height="200"/>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mt-3 mt-md-0">
            <div class="gallery_div1 pb-2 bg-white">
			<p class="text-center text-white mt-2 fs-6"><b>sdasdas dfg</b></p> 
               <img src="images/28.jpg" class="w-100" height="200"/>
            </div>
        </div>
		<div class="col-md-3 col-sm-6 mt-3 mt-md-0">
             <div class="gallery_div1 pb-2 bg-white">
				<p class="text-center text-white mt-2 fs-6"><b>dfg dfg</b></p> 
               <img src="images/23.jpg" class="w-100" height="200"/>
            </div>
        </div>
		<div class="col-md-3 col-sm-6 mt-3 mt-md-0">
             <div class="gallery_div1 pb-2 bg-white">
			 <p class="text-center text-white mt-2 fs-6"><b>rdtge dfg</b></p> 
               <img src="images/25.jpg" class="w-100" height="200"/>
            </div>
        </div>
</div>
</div>
</section>

<section id="footer_section" style=" background: rgb(7,81,130);
background: linear-gradient(52deg, rgba(7,81,130,1) 12%, rgba(0,122,187,1) 12%, rgba(2,110,170,1) 27%, rgba(6,86,137,1) 27%, rgba(21,80,121,1) 37%, rgba(6,79,127,1) 88%, rgba(6,69,112,1) 88%, rgba(6,71,116,1) 88%); ">
<footer class="container-fluid bglight pt-4 pb-2">
      <div class="row text-center">
	  <div class="col-12 ">
			<ul class="list-inline mb-1">
				<li class="list-inline-item text-white mx-2"><span class="span_item">Website Policies</span></li>
				<li class="list-inline-item text-white mx-2"><span class="span_item">Screen-Reader</span></li>
				<li class="list-inline-item text-white mx-2"><span class="span_item">Web Information Manager</span></li>
				<li class="list-inline-item text-white mx-2"><span class="span_item">Disclaimer</span></li>
			</ul>
        </div>
		</div>
		<div class="container-fluid px-0 mx-auto text-center">
		<div class="row">
		<div class="col-12 text-white mb-1">
			© Contents Owned, Maintained and Updated by, <span class="fw-bold">Village Panchayat</span>
		</div>
		<div class="col-12 text-white mb-1">
			Designed & Developed by <span class="hightlighted_text">National Informatics Centre</span>
		</div>
		<div class="col-12 text-white mb-1">
			Ministry of Electronics & Information Technology, Government of India
		</div>
		<div class="col-12 text-white mb-2">
			Last Updated: 04-05-2022
		</div>
        </div> 
         
        </div>
         
       
    </footer></section><script>
			$(window).load(function() {
				$('.dh-container').directionalHover();
			});
		</script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    