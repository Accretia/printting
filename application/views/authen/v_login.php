<?php
$data['title'] = "Printting Estimation System"; 
$this->load->view('v_header',$data);
?>
<style>
	/*
Inspired by http://dribbble.com/shots/917819-iPad-Calendar-Login?list=shots&sort=views&timeframe=ever&offset=461
*/
body {
    
    background-image: url(<?php echo IMGPATH."/login_bg.jpg"?>);
}

.jumbotron {
	text-align: center;
	width: 30rem;
	border-radius: 0.5rem;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	position: absolute;
	margin: 4rem auto;
	background-color: #fff;
	padding: 2rem;
}

.container .glyphicon-list-alt {
	font-size: 10rem;
	margin-top: 3rem;
	color: #f96145;
}

input {
	width: 100%;
	margin-bottom: 1.4rem;
	padding: 1rem;
	background-color: #ecf2f4;
	border-radius: 0.2rem;
	border: none;
}
h2 {
	margin-bottom: 3rem;
	font-weight: bold;
	color: #ababab;
}
.btn {
	border-radius: 0.2rem;
}
.btn .glyphicon {
	font-size: 3rem;
	color: #fff;
}
.full-width {
	background-color: #8eb5e2;
	width: 100%;
	-webkit-border-top-right-radius: 0;
	-webkit-border-bottom-right-radius: 0;
	-moz-border-radius-topright: 0;
	-moz-border-radius-bottomright: 0;
	border-top-right-radius: 0;
	border-bottom-right-radius: 0;
}

.box {
	position: absolute;
	bottom: 0;
	left: 0;
	margin-bottom: 3rem;
	margin-left: 3rem;
	margin-right: 3rem;
}
</style>
<div class="jumbotron" style="height: 50%;">
  <div class="container">
    <span class="glyphicon glyphicon-list-alt"></span>
    <h2>Printting Estimation</h2>
    <form method="post" action="<?php echo URLPATH."/authen/checklogin"?>">
	    <div class="box">
            <?php if($loginfail){?>
            <div class="alert alert-danger" role="alert" style="padding: 5px;">
                Username or Password incorrect?
            </div>
            <?php }?>
	        <input type="text" name="username" required placeholder="username">
		    <input type="password" name="password" required placeholder="password">
		    <button type="submit" class="btn btn-default full-width"><span class="glyphicon glyphicon-ok"></span></button>
	    </div>
    </form>
  </div>
</div>