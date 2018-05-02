<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

    if (!isset($email)) { $email = ''; } 
    if (!isset($pass)) { $pass = ''; } 
    if (!isset($re_pass)) { $re_pass = ''; } 
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create New Password</title>
<!--        <link href="main.css" rel="stylesheet">-->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript">
function requestReset() {
    var email = document.frm.email.value;
    var pass = document.frm.pass.value;
    var re_pass = document.frm.re_pass.value;
    var ajaxRes = false;
    
    if (email === "") {
        alert("Please input your email used to register with us");
        document.frm.email.focus();
        return false;        
    }
    if (pass === "") {
        alert("Please enter password to reset");
        document.frm.pass.focus();
        return false;        
    }
    if (re_pass === "") {
        alert("Please input password again");
        document.frm.re_pass.focus();
        return false;        
    }
    if(pass !=="" && pass === re_pass) {
        var re = /^(?=.*\d)(?=.*[a-z])\w{10,}$/;
        if(!re.test(pass)) {
            alert("Error: Password is not valid. At least one number(0-9) and one lower case letter(a-z) and min of 10 characters");
            document.frm.pass.value="";
            document.frm.re_pass.value="";
            return false;
        }
    } else {
        alert("Error: Password must match!!");
        document.frm.re_pass.value="";
        document.frm.re_pass.focus();
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
//                $("#message").html(response.msg);
                document.frm.email.value="";
                document.frm.email.focus();
                document.frm.pass.value="";
                document.frm.re_pass.value="";
            } else { 
//                $("#message").html(response.msg);
//                $("#debug").html(response.debug);
//                alert(response.data); 
//                ajaxRes = true;
                  $("#container_afterreset").show();
                  $("#container_reset").hide();
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            var errorMsg = 'status(code) : ' + jqXHR.status + '\n';
            errorMsg += 'statusText : ' + jqXHR.statusText + '\n';
            errorMsg += 'responseText : ' + jqXHR.responseText + '\n';
            errorMsg += 'textStatus : ' + textStatus + '\n';
            errorMsg += 'errorThrown : ' + errorThrown;
            alert(errorMsg);
            $("#message").html(errorMsg);
        }
    });
    return ajaxRes;
}
//$(document).ready(function() {
//    $("#submit").click(function() {
//        var sparam = {
//            email: $("#email").val(),
//            pass: $("#pass").val()
//        };
//        $.ajax({
//            type: "POST",
//            url: "db_process.php",
//            data: sparam,
//            dataType: 'json',
//            success: function(response) {
//		if(response.success == false) {
//                    alert(response.msg);
//                    $("#message").html(response.msg);
//                    return false;
//		} else {
//                    $("#message").html(response.msg);
//                    $("#debug").html(response.debug);
//                    alert(response.data);
//
//                }
//            },
//            error: function(jqXHR, textStatus, errorThrown) {
//                var errorMsg = 'status(code) : ' + jqXHR.status + '\n';
//                errorMsg += 'statusText : ' + jqXHR.statusText + '\n';
//                errorMsg += 'responseText : ' + jqXHR.responseText + '\n';
//                errorMsg += 'textStatus : ' + textStatus + '\n';
//                errorMsg += 'errorThrown : ' + errorThrown;
////                alert(errorMsg);
//                $("#message").html(errorMsg);
//   
//            }
//        });
//        return false;
//    });
//});
            
//var xmlhttp = null;
//function getXMLHttpRequest() {// XMLHttpRequest 객체 얻기
//    if (window.ActiveXObject) {
//        try {
//            return new ActiveXObject("Msxml2.XMLHTTP");//IE 상위 버젼
//        } catch (e1) {
//            try {
//                return new ActiveXObject("Microsoft.XMLHTTP");//IE 하위 버젼
//            } catch (e2) {
//                return null;
//            }
//        }
//    } else if (window.XMLHttpRequest) {
//        return new XMLHttpRequest();//IE 이외의 브라우저(Firefox, Chrome, Opera, Safari 등)
//    } else {
//        return null;
//    }
//}
//function requestReset() {
//    var f = document.frm;
//    var tmp_send = "";
//    var sparam = "email="+f.email.value+"&pass="+f.pass.value;
//    
//    if (f.email.value === "") {
//        alert("Please input your email used to register with us");
//        f.email.focus();
//        return false;
//    } 
//    if (f.pass.value === "") {
//        alert("Please enter password to reset");
//        f.pass.focus();
//        return false;
//    }
//    if (f.re_pass.value === "") {
//        alert("Please input password again");
//        f.re_pass.focus();
//        return false;
//    }
//    if(f.pass.value !="" && f.pass.value == f.re_pass.value) {
//        var re = /^(?=.*\d)(?=.*[a-z])\w{10,}$/;
//        if(!re.test(f.pass.value)) {
//            alert("Error: Password is not valid. At least one number(0-9) and one lower case letter(a-z) and min of 10 characters");
//            return false;
//        }
//    } else {
//        alert("Error: Password must match!!");
//        f.re_pass.focus();
//        return false;
//    }
//    if(smethod == "POST") {
//        tmp_send = sparam; 
//    } else { // GET
//        tmp_send = null; //  send(null) GET일때는 주로 NULL 사용(send() 메서드의 매개변수는 필요하지 않다.)
//        url = url + sparam; //입력받은 값을 넘기기 위해 셋팅
//    }
//    document.getElementById("message").innerHTML = url;
//    xmlhttp = getXMLHttpRequest();//XMLHttpRequest 객체 얻기
//    xmlhttp.onreadystatechange = responseReset;//콜백 함수  등록
//    xmlhttp.open(smethod, url, true);//연결 (POST 또는 GET)
//    xmlhttp.send(tmp_send);//전송
//}
//function responseReset() { // 콜백함수
//    if (xmlhttp.readyState == 4) {//완료
//        if (xmlhttp.status == 200) {//오류없이 OK
//            var str = xmlhttp.responseText;//서버에서 보낸 내용 받기
//            document.getElementById("message").innerHTML = str;//보여주기 
//            return true;
//        } else {
//            alert("오류 : " + xmlhttp.status);
//            return false;
//        }
//    }
//}// 응답
</script>        
       
    </head>
    <body>

     <div id="container_reset">
            <div id="passwordreset" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Create New Password</div>
                    </div>                     
                    <div class="panel-body">
                    <form id="frm" name="frm" class="form-horizontal" method="post">

                           <div class="form-group">
                                
<!--        <p class="error" style="display: block;">Database error</p>-->
    
                                <label for="email" class=" control-label col-sm-3">Registered email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="<?php echo htmlspecialchars($email); ?>">
              
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pass" class=" control-label col-sm-3">New password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="<?php echo htmlspecialchars($pass); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="re_pass" class=" control-label col-sm-3">Re-password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="re_pass" name="re_pass" placeholder="<?php echo htmlspecialchars($re_pass); ?>">
                                </div>
                            </div>
                        <div id="message"></div>
                        <div id="debug"></div>
                            <div class="form-group">
                            
                                <div class="col-sm-offset-3 col-sm-9">
                         
                                    <button id="submit" tabindex="5" class="btn btn-success" onclick="return requestReset()">Submit</button>
 <!--onclick="return requestReset('POST', 'db_process.php')"-->    
            
                </div>
                            </div>                             
                                                </form>
                    </div>
                </div>
            </div>             
        </div>
            <div id="container_afterreset" hidden>
            <div id="passwordreset" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Success! </div>
                    </div>                     
                    <div class="panel-body">
                        
                            <div class="form-group">
                                
                                    <h4> We updated new password in our system. </h4> 
                               
                            </div>
                            <div class="form-group">
                            
                           
    <a href="index.php">Continue to BeGoodMom</a>
           
                            </div>                             
                       
                    </div>
                </div>
            </div>             
        </div> 
    </body>
</html>
