<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAT HASTANE BİLGİ SİSTEMİ</title>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <style>
    html,body {
	margin: 0;
	height: 100%;
	background:#D4E157;
	text-align: center;
	font-family: 'Ubuntu';
}
.frame{
	width: 600px;
	height: 350px;
	margin: 250px auto 0;
	position: relative;
	background: #435d77;
	border-radius:0 0 40px 40px; 
}
#button_open_envelope{
	width: 180px;
	height: 30px;
	position: absolute;
	z-index: 311;
	top: 250px;
	left: 208px;
	border-radius: 10px;
	color: #fff;
	font-size: 26px;
	padding:0 0 40px; 
	border: 2px solid #fff;
	transition:.3s;
}
#button_open_envelope:hover{
	background: #FFf;
	color: #2b67cb;
	transform:scale(1.1);
	transition:background .25s, transform .5s,ease-in;
	cursor: pointer;
}
.message{
	position: relative;
	width: 580px;
	min-height:300px;
	height: auto;
	background: #fff;
	margin: 0 auto;
	top: 30px;
	box-shadow: 0 0 5px 2px #333;
	transition:2s ease-in-out;
	transition-delay:1.5s;
	z-index: 300;
}
.left,.right,.top{width: 0;	height: 0;position:absolute;top:0;z-index: 310;}
.left{	
	border-left: 300px solid #337efc;
	border-top: 160px solid transparent;
	border-bottom: 160px solid transparent;
}
.right{	
	border-right: 300px solid #337efc;
	border-top: 160px solid transparent;
	border-bottom: 160px solid transparent;;
	left:300px;
}
.top{	
	border-right: 300px solid transparent;
	border-top: 200px solid #03A9F4;
	border-left: 300px solid transparent;
	transition:transform 1s,border 1s, ease-in-out;
	transform-origin:top;
	transform:rotateX(0deg);
	z-index: 500;
}
.bottom{
	width: 600px;
	height: 190px;
	position: absolute;
	background: #2b67cb;
	top: 160px;
	border-radius:0 0 30px 30px;
	z-index: 310; 
}

.open{
	transform-origin:top;
	transform:rotateX(180deg);
	transition:transform .7s,border .7s,z-index .7s ease-in-out;
	border-top: 200px solid #2c3e50;
	z-index: 200;
}
.pull{
	-webkit-animation:message_animation 2s 1 ease-in-out;
	animation:message_animation 2s 1 ease-in-out;
	-webkit-animation-delay:.9s;
	animation-delay:.45s;
	transition:1.5s;
	transition-delay:1s;
	z-index: 350;
}
#name,#email,#phone,#messarea,#send{
	margin: 0;
	padding: 0 0 0 10px;
	width: 570px;
	height:40px;
	float: left;
	display: block;
	font-size: 18px;
	color: #2b67cb;
	border:none;
	border-bottom:1px solid #bdbdbd;
	letter-spacing: normal;
}
#messarea{
	height: 117px;
	width: 560px;
	overflow: auto;
	border:none;
	padding: 10px;
}
#send{ 
	width:   580px;
	padding: 0;	
	border:  none;
	cursor:  pointer;
	background: #7CB342;
	color: #fff;
	transition:.35s;
	letter-spacing: 1px;
}
#send:hover{background:tomato;transition:.35s;}

::-moz-placeholder{color: #7CB342;font-family: 'Ubuntu';font-size: 20px;opacity: 1;} 
::-webkit-input-placeholder {color: #7CB342; font-family: 'Ubuntu';font-size: 20px;}
*:focus {outline: none;}
input:focus:invalid,textarea:focus:invalid {
 /* when a field is considered invalid by the browser */
    background: #fff url(images/invalid.png) no-repeat 98% center;
    box-shadow: 0 0 5px #d45252;
    border:1px solid #b03535;
}
input:required:valid,textarea:required:valid { 
	/* when a field is considered valid by the browser */
    background: #fff url(images/valid.png) no-repeat 98% center;
    box-shadow: 0 0 5px #5cd053;
    border-color: #28921f;
}


@-webkit-keyframes message_animation {
	0%{
		transform:translatey(0px);
		z-index: 300;
		transition: 1s ease-in-out;
	}
	50%{
		transform:translatey(-340px);
		z-index: 300;
		transition: 1s ease-in-out;
	}
	51%{
		transform:translatey(-340px);
		z-index: 350;
		transition: 1s ease-in-out;
	}
	100%{
		transform:translatey(0px);
		z-index: 350;
		transition: 1s ease-in-out;
	}
}
@keyframes message_animation {
	0%{
		transform:translatey(0px);
		z-index: 300;
		transition: 1s ease-in-out;
	}
	50%{
		transform:translatey(-340px);
		z-index: 300;
		transition: 1s ease-in-out;
	}
	51%{
		transform:translatey(-340px);
		z-index: 350;
		transition: 1s ease-in-out;
	}
	100%{
		transform:translatey(0px);
		z-index: 350;
		transition: 1s ease-in-out;
	}
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="../static/img/logo.png" alt="logo" style="width:50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item">
        <a class="nav-link" href="anasayfa.php">Anasayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="randevugecmis.php">
          Randevu Geçmişi
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="hesapbilgileri.php">
          Hesap Bilgileri
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="iletisim.php" tabindex="-1" aria-disabled="true">İletişim</a>
      </li>
    </ul>
    <div>
        <a href="randevual.php"><button type="button" class="btn btn-outline-info mr-2"><i class="fas fa-user-plus"></i> Randevu Al</button></a>
    </div>
    <div>
        <a href="./layout/_cikis.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-sign-out-alt"></i> Çıkış</button></a>
    </div>
  </div>
</nav>
<div class = "frame">
    <div id = "button_open_envelope">
        İletişim
    </div>
    <div class = "message">
        <form method="post" action="./layout/_iletisim.php">
            <input type="text" name="name" id="name" placeholder=" Adınız Soyadınız* " required>
            <input type="email" name="email" id="email" placeholder=" Email* " required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$">
            <input type="text" name="phone" id="phone" placeholder=" Telefon Numaranız" autofocus>
            <textarea name="message" id="messarea" placeholder=" Mesajınız* " required></textarea>
            <input type="text" name="address" id="address" style="display: none;">
            <input type="submit" value="Gönder" id="send">
        </form>
    </div>
    <div class = "bottom"></div>			
    <div class = "left"></div>
    <div class = "right"></div>
    <div class = "top"></div>
    <script src="js/script.js"></script>
</div>

<script>
$(document).ready(function(){
	$('.frame').click(function(){
		$('.top').addClass('open');
		$('.message').addClass('pull');
	})
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>