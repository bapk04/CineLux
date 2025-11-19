<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mẫu đặt vé phim trực tuyến">
    <meta name="keywords" content="đặt vé, phim, liên hệ, rạp chiếu phim">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Liên Hệ</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

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
        /* Redesigned contact page - glassmorphism + glow accents */
        body { background: radial-gradient(circle at 10% 10%, rgba(118,75,162,0.06), transparent 8%), linear-gradient(180deg,#071026,#0f1724); color: #e9eef8; }
        .contact.spad { padding: 80px 0; position: relative; z-index: 2; }

        .section-title span { color: #ffd166; font-weight:700; letter-spacing:1px; display:block; }
        .section-title h2 { color: #fff; font-weight:900; text-shadow:0 6px 30px rgba(102,126,234,0.14); margin-bottom:10px; }

        /* Glass card */
        .contact-card {
            background: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.02));
            border-radius: 16px;
            padding: 28px;
            box-shadow: 0 30px 80px rgba(2,6,23,0.7), inset 0 1px 0 rgba(255,255,255,0.02);
            border: 1px solid rgba(255,255,255,0.04);
            position: relative;
            overflow: hidden;
        }

        .contact-card .lead { color: rgba(255,255,255,0.9); margin-bottom: 14px; }

        .contact-details { display:flex; flex-direction:column; gap:12px; margin-top:12px; }
        .contact-details .item { display:flex; gap:12px; align-items:flex-start; }
        .contact-details .icon { width:44px; height:44px; background:linear-gradient(90deg,#667eea,#764ba2); border-radius:10px; display:flex; align-items:center; justify-content:center; color:#fff; box-shadow:0 8px 30px rgba(102,126,234,0.12); }
        .contact-details .text { color: rgba(255,255,255,0.9); }

        /* Contact form */
        .contact-form { margin-top:18px; display:flex; flex-direction:column; gap:12px; }
        .contact-form input, .contact-form textarea { background: rgba(255,255,255,0.02); border:1px solid rgba(255,255,255,0.04); color:#eef2ff; padding:10px 12px; border-radius:10px; }
        .contact-form textarea { min-height:120px; resize:vertical; }
        .btn-cta { background: linear-gradient(90deg,#ffd166,#ff6b6b); color:#071026; font-weight:800; padding:10px 18px; border-radius:999px; border:none; box-shadow:0 12px 40px rgba(255,107,107,0.12); cursor:pointer; }

        /* Map card */
        .mapouter { width: 100%; height: 420px; border-radius: 14px; overflow: hidden; box-shadow: 0 28px 80px rgba(2,6,23,0.7); border: 1px solid rgba(255,255,255,0.04); background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.005)); }
        .mapouter iframe { height: 100%; width:100%; display:block; }

        /* decorative floating shapes */
        .contact::before { content:''; position:absolute; right:-120px; top:-60px; width:260px; height:260px; background: radial-gradient(circle at 30% 30%, rgba(102,126,234,0.12), transparent 40%); border-radius:50%; z-index:0; }
        .contact::after { content:''; position:absolute; left:-90px; bottom:-90px; width:180px; height:180px; background: radial-gradient(circle at 70% 70%, rgba(255,107,107,0.06), transparent 40%); border-radius:50%; z-index:0; }

        /* responsive */
        @media (max-width: 992px) { .mapouter { height:320px; } }
        @media (max-width: 768px) { .contact.spad { padding:40px 0; } .mapouter { height:260px; } }
    </style>
</head>

<body>
    <?php include("header.php"); ?>

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <!-- Thông tin liên hệ -->
                <div class="col-lg-6 col-md-6">
                    <div class="contact-card">
                        <div class="section-title">
                            <span>Thông tin liên hệ</span>
                            <h2>Liên hệ với chúng tôi</h2>
                        </div>
                        <p class="lead">Chúng tôi luôn sẵn sàng lắng nghe — phản hồi, khiếu nại hay hợp tác, hãy liên hệ theo thông tin bên dưới hoặc gửi tin nhắn trực tiếp.</p>

                        <div class="contact-details">
                            <div class="item">
                                <div class="icon"><i class="fa fa-map-marker"></i></div>
                                <div class="text"><strong>Địa chỉ:</strong> Rạp INOX, Tầng 4, Lotte Mart Nha Trang, Nha Trang, Khánh Hòa</div>
                            </div>
                            <div class="item">
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <div class="text"><strong>Điện thoại:</strong> 0935 769 306</div>
                            </div>
                            <div class="item">
                                <div class="icon"><i class="fa fa-envelope"></i></div>
                                <div class="text"><strong>Email:</strong> support@cinelux.example</div>
                            </div>
                        </div>

                        <form class="contact-form" method="post" action="feedback_action.php">
                            <input type="text" name="name" placeholder="Họ và tên" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <textarea name="message" placeholder="Nội dung liên hệ" required></textarea>
                            <button type="submit" class="btn-cta">Gửi liên hệ</button>
                        </form>
                    </div>
                </div>

                <!-- Bản đồ -->
                <div class="col-lg-6 col-md-6">
                  <div style="margin-top:40px;"><h3>Bản đồ Trường Đại học Nha Trang</h3></div>  
                    <div class="mapouter" style="width:90%;height:90%;margin-top:20px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4252694940267!2d109.20393527469778!3d12.238417591496562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31706679cba2153d%3A0x57ebd80d81a7e49e!2sTr%C6%B0%E1%BB%9Dng%20%C4%90%E1%BA%A1i%20H%E1%BB%8Dc%20Nha%20Trang!5e0!3m2!1svi!2s!4v1700000000000!5m2!1svi!2s" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <?php include("footer.php"); ?>
    <!-- Footer Section End -->

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
</body>

</html>
