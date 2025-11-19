<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mẫu đặt vé phim trực tuyến">
    <meta name="keywords" content="đặt vé, phim, feedback, rạp chiếu phim">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Phản Hồi</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">    
    <style>
        /* Feedback page styling - glass card + accents */
        body { background: linear-gradient(180deg,#071426,#081426); color: #eaf0ff; }
        .content { padding: 60px 0; }
        h2 { color: #ffffff; text-shadow: 0 6px 24px rgba(102,126,234,0.08); }

        .feedback-card {
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border: 1px solid rgba(255,255,255,0.04);
            border-radius: 14px; padding: 28px; box-shadow: 0 30px 80px rgba(2,6,23,0.6);
        }

        .form-control { background: rgba(255,255,255,0.02); border:1px solid rgba(255,255,255,0.04); color:#eaf0ff; border-radius:10px; }
        .form-control:focus { box-shadow: 0 8px 30px rgba(102,126,234,0.12); border-color: rgba(102,126,234,0.6); outline:none; }

        .btn-primary, .btn-dark { border-radius: 999px; padding: 10px 22px; font-weight:700; }
        .btn-primary { background: linear-gradient(90deg,#667eea,#764ba2); border:none; }
        .btn-dark { background: rgba(0,0,0,0.6); color:#fff; border:1px solid rgba(255,255,255,0.04); }

        /* messages */
        #nameerror,#emailerror,#massageerror,#msg { margin-top:6px; font-size:0.95rem; }
        #msg.success { color: #16a34a; font-weight:700; }
        #msg.error { color: #ff6b6b; font-weight:700; }

        /* right column */
        .aside-box { background: linear-gradient(180deg, rgba(162, 157, 186, 0.02), rgba(255,255,255,0.01)); border-radius:12px; padding:20px; box-shadow: 0 18px 60px rgba(2,6,23,0.5); border:1px solid rgba(255,255,255,0.03); }
        .aside-box h3 { color:#ffd166; }

        @media (max-width: 768px) {
            .content { padding: 30px 0; }
            .mapouter { height: 240px; }
        }
    </style>
</head>
<body>

<?php
include("header.php");
?>

<div class="content">    
    <div class="container">      
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-5 mb-lg-0">

                        <div class="feedback-card">
                        <h2 class="mb-3">Gửi phản hồi của bạn</h2>
                        <p class="mb-4">Chúng tôi trân trọng mọi góp ý — hãy cho chúng tôi biết trải nghiệm của bạn.</p>
                        <form onsubmit="return feedbackvalidate();">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="feedbackname" id="feedbackname" placeholder="Họ và tên">
                                    <div id="nameerror"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="feedbackemail" id="feedbackemail" placeholder="Email">
                                    <div id="emailerror"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" name="feedbackmassage" id="feedbackmassage" cols="30" rows="7" placeholder="Viết phản hồi của bạn"></textarea>
                                    <div id="massageerror"></div>
                                    <div id="msg"></div>
                                </div>
                            </div>

                            <?php 
                            if (!isset($_SESSION['uname'])) {
                            ?>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="button" data-toggle="modal" data-target="#tailer_modal" class="btn btn-dark">
                                            <span style="color:white;">Gửi Phản Hồi</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="modal fade" id="tailer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content p-3 text-center">
                                            <h3>Bạn cần đăng nhập</h3>
                                            <a class="btn btn-primary btn-sm" href="login_form.php">Đăng nhập</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" id="feedbackform" class="btn btn-primary">Gửi Phản Hồi</button>          
                                    </div>
                                </div>
                            <?php } ?>

                        </form>
                        </div>
                        <!-- end .feedback-card -->
                    </div>

                    <div class="col-lg-4 ml-auto">
                        <h3 class="mb-4" style="color: #eaf0ff;">Chia sẻ suy nghĩ của bạn.</h3>
                        <p>Hãy cho chúng tôi biết cảm nhận và đề xuất của bạn để cải thiện dịch vụ. Chúng tôi rất coi trọng mọi phản hồi từ khách hàng.</p>
                    </div>
                </div>
            </div>  
        </div>
    </div> 
</div>

<?php
include("footer.php");
?>

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">
function feedbackvalidate(){
    var error="";
    var f_name = document.getElementById("feedbackname");
    var f_email = document.getElementById("feedbackemail");
    var f_massage = document.getElementById("feedbackmassage");

    if(f_name.value == ""){
        error = "<font color='red'>!Vui lòng nhập tên.</font>";
        document.getElementById("nameerror").innerHTML = error;
        return false;
    }
    if(f_email.value == ""){
        error = "<font color='red'>!Vui lòng nhập email.</font>";
        document.getElementById("emailerror").innerHTML = error;
        return false;
    }
    if(f_massage.value == ""){
        error = "<font color='red'>!Vui lòng nhập phản hồi.</font>";
        document.getElementById("massageerror").innerHTML = error;
        return false;
    }
}

$(document).ready(function(){
    $("#feedbackform").click(function(){
        var feedbackname = $("#feedbackname").val().trim();
        var feedbackemail = $("#feedbackemail").val().trim();
        var feedbackmassage = $("#feedbackmassage").val().trim();
        $.ajax({
            url:'feedback_action.php',
            type:'post',
            data:{feedbackname:feedbackname, feedbackemail:feedbackemail, feedbackmassage:feedbackmassage},
            success:function(response){
                    if(response == 1){
                        // show inline success and clear fields
                        var msgEl = $("#msg");
                        msgEl.removeClass('error').addClass('success').text('Cảm ơn! Phản hồi của bạn đã được gửi.');
                        $("#feedbackname, #feedbackemail, #feedbackmassage").val('');
                        // fade message after short delay
                        setTimeout(function(){ msgEl.fadeOut(600, function(){ msgEl.text('').removeClass('success').show(); }); }, 1800);
                    } else {
                        var error = '!Người dùng không hợp lệ.';
                        $("#msg").removeClass('success').addClass('error').text(error);
                        return false;
                    }
                }
        });
    });
});
</script>

</body>
</html>
