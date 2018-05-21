<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BeGoodMom Catering</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="assets/css/index.css" rel="stylesheet">    
    <style>
        img {
    width: 100%;
    height: auto;
}
.feature-gallery {
    margin: 15px 0;
    overflow: hidden;
    position: relative;
}
.feature-gallery img.thumb {
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 700ms ease;
    -moz-transition: all 700ms ease;
    -ms-transition: all 700ms ease;
    -o-transition: all 700ms ease;
    transition: all 700ms ease;
}
.feature-gallery:hover img.thumb {
    opacity: 1;
    transition: all 0.35s;
    -moz-transform: scale(1.13);
    -webkit-transform: scale(1.13);
    -ms-transform: scale(1.13);
    transform: scale(1.13);
}
.fg-overlay { 
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    transition: all.3s;
    width: 100%;
    height: 100%;
    padding: 30px;
    cursor: pointer;
}
.feature-gallery:hover .fg-overlay {
    background-color: rgba(0, 0, 0, 0.7);
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
.fg-overlay h2 {
    font-size: 18px;
    font-weight: 400;
    line-height: 22px;
    color: #fff;
    opacity: 0;
    margin-bottom: 5px;
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    -webkit-transform: scale(0.1);
    transform: scale(0.1);
    transition: all .35s;
}
.fg-overlay p {
    font-size: 14px;
    color: #fff;
    opacity: 0;
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    transition: all .35s;
}
.feature-gallery:hover .fg-overlay h2,
.feature-gallery:hover .fg-overlay p{
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
.fg-overlay:before {
    opacity: 0;
    border: 1px solid #f1f1f1;
    position: absolute;
    top:15px;
    left:15px;
    bottom:15px;
    right:15px;
    z-index: 10;
    content: "";
    display: block;
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    transition: all .35s;
}
.feature-gallery:hover .fg-overlay:before {
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

/*added by Aehyang Park   [BEGIN]*/
.fg-overlay button {
    font-size: 14px;
    color: #fff;
    opacity: 0;
    background-color: transparent;
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    transition: all .35s;
}
.feature-gallery:hover .fg-overlay button{
    opacity: 1;
    -moz-transform: scale(1);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
/*added by Aehyang Park   [END]*/
        
    </style>
    </head>

    <body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
 
    <?php 
//                        $_SESSION['displayname'] = "Aehyang Park";
//                        $_SESSION['userlevel']="admin";
    $cart = 0;
            if(isset($_SESSION['displayname'])) {
                echo '<div style="text-align:right;padding-right:10px">';
                echo $greeting = '<h5>&nbsp;Hello, '.$_SESSION['displayname'];
                if(isset($_SESSION['userlevel'])) {
                    if($_SESSION['userlevel']==="admin") {
                        echo '&nbsp;&nbsp;<a href="admin.php"><i class="fa fa-gear"></i>&nbsp;Administration</a>';
                    }
                }
                echo '</h5>';
                echo '<a href="logout.php">&nbsp;<i class="fa fa-sign-out"></i>&nbsp;Logout</a>';
                echo '</div>';
            } else {
                echo $greeting ="";
            } 
                        
            if($greeting=="") {
                echo '<form style="text-align:right;padding-right:10px" name="frm" id="frm" method="post">';
                echo '<h5> <input type="text" name="email" size="15" placeholder="Email address" >'; 
                echo '&nbsp;<input type="password" name="pass" size ="15" placeholder="Password">'; 
                echo '&nbsp;<button id="submit" class="btn btn-success" style="border-color:green; background-color:green" onclick="return loginReq()"> Login </button></h5>';
                echo '<h5>Forgot <a style="color: #e7a331" href="http://localhost:8080/Final/reset.php">Password? </a>';
                echo '</form>';
                echo '&nbsp;&nbsp;No account? <a href="register.php" style="color: #e7a331">Sign up</a> </h5>';     

            }    
           ?>  

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index2.php">Goodmom Homefoods</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="index2.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Coupons</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Order <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="btn_contact" href="#">Contact</a>
                </li>
                <?php 
                if(isset($_SESSION['displayname'])) {
                    echo '<li class="nav-item">
                    <a class="nav-link" id="btn_contact" href="#">My Account</a>
                </li>';
                } ?>
            </ul>
<form class="nav navbar-nav navbar-right" style=padding-top:10px;padding-right:10px name="search_frm">
   
<!--                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="15" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>-->
                <div class="input-group input-group-sm">
                    <input type="text" aria-label="Small" name="search_desc" size="20" placeholder="Search...">
<!--                    <div class="input-group-append">-->
                        <button type="button" class="btn btn-secondary btn-number" onclick="return searchMenu()">
                            <i class="fa fa-search"></i>
                        </button>
                    <!--</div>-->
                
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light"><?php if(isset($cart)) echo $cart; ?></span>
                </a>
                </div>
        
</form>
        </div>
    </div>
</nav>
<!--
<section id="main-content" class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Good Mom Home Foods</h1>
     </div>
</section>-->

<div class="container-fluid">
                        <h2> Main dishes </h2>
                <div class="row">

                    <div class="col-md-3 col-sm-3 menu_item" id="menu1" data-id="1" data-description="pokibowl">
                        <div class="feature-gallery">
                            <img class="thumb" src="assets/images/menu/pokibowl.jpg" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Poki bowl</h2>
                                <p>A 10oz bowl with raw fish, salad and steamed rice</p>
                                <br><br><br><br>
                                <button id="pokibowl" onclick="addTocart()"> Add to Cart </button>
                            </div>
                        </div>
                    </div>
                    <!--/feature-gallery--->

                    <div class="col-md-3 col-sm-3 menu_item" id="menu2" data-id="2" data-description="mildchickenbites">
                        <div class="feature-gallery">
                            <img class="thumb" src="assets/images/menu/mildhickenbites.jpg" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Exchange of goods and services</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--/feature-gallery--->

                    <div class="col-md-3 col-sm-3">
                        <div class="feature-gallery">
                            <img class="thumb" src="assets/images/menu/panfriedspicypork.jpg" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Exchange of goods and services</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                
                            </div>
                        </div>
                    </div>
                    <!--/feature-gallery--->

                    <div class="col-md-3 col-sm-3">
                        <div class="feature-gallery">
                            <img class="thumb" src="assets/images/menu/halfmildhalfspicy.jpg" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Exchange of goods and services</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                </div>
<h2>Desserts </h2>
                    <div class="row">
                    <!--/feature-gallery--->
                    <div class="col-md-3 col-sm-3">
                        <div class="feature-gallery">
                            <img class="thumb" src="assets/images/menu/darkchocolatecake.jpg" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Exchange of goods and services</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--/feature-gallery--->

                    <div class="col-md-3 col-sm-3">
                        <div class="feature-gallery">
                            <img class="thumb" src="assets/images/menu/earlgraymuffin.jpg" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Exchange of goods and services</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--/feature-gallery--->

                    <div class="col-md-3 col-sm-3">
                        <div class="feature-gallery">
                            <img class="thumb" src="assets/images/menu/browniepound.jpg" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Exchange of goods and services</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--/feature-gallery--->

                    <div class="col-md-3 col-sm-3">
                        <div class="feature-gallery">
                            <img class="thumb" src="assets/images/menu/minicheesecake.jpg" alt="" title="">
                            <div class="fg-overlay">
                                <h2>Exchange of goods and services</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--/feature-gallery--->
                    </div>
            </div>

<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    This page is created by BeGoodMom. If you have any questions, please <a href="mailto:yehyang0512@naver.com">email</a> me.
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Informations</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i>Good Mom Foods</li>
                    <li><i class="fa fa-envelope mr-2"></i><a href="mailto:yehyang0512@naver.com">yehyang0512@naver.com</a></li>
                    <li><i class="fa fa-phone mr-2"></i> + 1 858 123 4567</li>
                    <li><i class="fa fa-print mr-2"></i> + 1 858 987 6543</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Back to top</a>
                </p>
                <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href="http://blog.naver.com/yehyang0512"><i>BeGoodMom</i></a> | <span>v. 1.0</span></p>
            </div>
        </div>
    </div>
</footer>
<script>
function searchMenu() {
    var res = false;
    var menu = document.search_frm.search_desc.value;
    var desc;
    var id;
//    if(menu == "") 
//        alert("Please input the food name to search");
//    else 
//        alert(menu);
    $('.menu_item[data-description]').each(function() {
		desc = $(this).data('description');
		id = $(this).data('id');
		if(desc.match(menu)) {
                	alert("Find: "+desc);			
		} else {
                        alert(menu + ": Can't find");
		}
    });

    
    return res;
}
function loginReq() {
    var email = document.frm.email.value;
    var pass = document.frm.pass.value;
    var ajaxRes=false;
 
    if (email === "") {
        alert("Please input your email used to register with us");
        document.frm.email.focus();
        return false;        
    }
    if (pass === "") {
        alert("Please enter password");
        document.frm.pass.focus();
        return false;        
    }
    
    $.ajax({
        type: "POST",
        url: "db_process.php",
        data: {
            email: email,
            pass: pass
        },
        dataType: 'json',
        success: function(response) {
            if(response.success === false) {
                alert(response.msg);
                document.frm.email.value="";
                document.frm.pass.value="";
                document.frm.email.focus();
                
            } else { 
                window.location.reload(true); //화면 reload해서 session_name 출력하고 로그인 버튼 없어지게
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var errorMsg = 'status(code) : ' + jqXHR.status + '\n';
            errorMsg += 'statusText : ' + jqXHR.statusText + '\n';
            errorMsg += 'responseText : ' + jqXHR.responseText + '\n';
            errorMsg += 'textStatus : ' + textStatus + '\n';
            errorMsg += 'errorThrown : ' + errorThrown;
            alert(errorMsg);
            
        }
    });
    return ajaxRes;
}           
$( document ).ready(function() {
    $( "#btn_contact" ).click(function() {
        var content = '<h1>Contact Us!</h1><p>email: info@airbblite.com</p><p>tel: +1 619-388-1800</p>';
        $("#main-content").html(content);
    });

});
    </script>
    </body>
</html>
