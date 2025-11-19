<?php 
session_start();
//index.php

include('database_connection.php');

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All movie page</title>

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
    <link rel="stylesheet" href="css/slicknav.min.css" type="  text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">    

</head>

<body>

    <?php 
    include("header.php");
    ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	
            <div class="col-md-3">                				
				
				<div class="list-group">
					<h3>categroy</h3>
                    <?php
                    $query = "SELECT DISTINCT(categroy) FROM add_movie WHERE status = '1' ORDER BY categroy DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    $colorPalette = array('#667eea','#764ba2','#10b981','#f59e0b','#ef4444','#06b6d4');
                    $idx = 0;
                    foreach($result as $row)
                    {
                        $color = $colorPalette[$idx % count($colorPalette)];
                    ?>
                    <div class="list-group-item checkbox">
                        <label>
                            <input type="checkbox" class="common_selector categroy" value="<?php echo $row['categroy']; ?>" data-color="<?php echo $color; ?>">
                            <span class="filter-label" style="--accent: <?php echo $color; ?>;"><?php echo $row['categroy']; ?></span>
                        </label>
                    </div>
                    <?php
                        $idx++;
                    }

                    ?>
                </div>
				
				<div class="list-group">
					<h3> language</h3>
					<?php
                    $query = "SELECT DISTINCT(language) FROM add_movie WHERE status = '1' ORDER BY language DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    $idx = 0;
                    foreach($result as $row)
                    {
                        $color = $colorPalette[$idx % count($colorPalette)];
                    ?>
                    <div class="list-group-item checkbox">
                        <label>
                            <input type="checkbox" class="common_selector language" value="<?php echo $row['language']; ?>" data-color="<?php echo $color; ?>">
                            <span class="filter-label" style="--accent: <?php echo $color; ?>;"><?php echo $row['language']; ?></span>
                        </label>
                    </div>
                    <?php
                        $idx++;
                    }
                    ?>	
                </div>
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
    <?php

    include("footer.php");
    ?>
<style>
    /* Page-level sparkle: floating particles */
    .page-sparkles {
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 0;
        background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
        background-size: 18px 18px;
        opacity: 0.06;
        mix-blend-mode: screen;
        animation: floaty 10s linear infinite;
    }

    @keyframes floaty {
        0% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-12px) translateX(6px); }
        100% { transform: translateY(0) translateX(0); }
    }

    /* Subtle glow under the grid */
    .filter_data::before {
        content: '';
        display: block;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -30px;
        width: 80%;
        height: 60px;
        background: radial-gradient(ellipse at center, rgba(102,126,234,0.12), transparent 50%);
        filter: blur(18px);
        z-index: 0;
        pointer-events: none;
    }

    /* Accent for filters panel */
    .list-group {
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,0.04);
        background: linear-gradient(180deg, rgba(255,255,255,0.96), rgba(255,255,255,0.92));
    }

    /* Slightly brighter headings */
    .list-group h3 {
        text-shadow: 0 6px 18px rgba(102,126,234,0.08);
    }

    /* Filter label and accent dot */
    .list-group-item label {
        margin: 0;
        font-weight: 600;
        color: #444;
        cursor: pointer;
        font-size: 0.98rem;
        transition: all 0.24s ease;
        display: flex;
        align-items: center;
        position: relative;
        z-index: 1;
        gap: 8px;
    }

    .filter-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 4px 8px;
        transition: all 220ms cubic-bezier(.2,.8,.2,1);
        color: #344056;
        background: transparent;
        border-radius: 8px;
        font-weight: 700;
    }

    .filter-label::before {
        content: '';
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: inline-block;
        background: var(--accent, #667eea);
        box-shadow: 0 6px 18px rgba(102,126,234,0.12);
        transform: translateY(-1px);
    }

    .list-group-item input[type="checkbox"] {
        margin-right: 6px;
        cursor: pointer;
        width: 18px;
        height: 18px;
        accent-color: #667eea;
        transition: transform 160ms ease;
    }

    .list-group-item label:hover .filter-label {
        transform: translateX(4px);
        color: #222;
    }

    /* Checked state: colorful pill */
    .list-group-item input[type="checkbox"]:checked + .filter-label,
    .list-group-item input[type="checkbox"]:checked ~ .filter-label {
        color: #fff;
        background: linear-gradient(90deg, var(--accent), rgba(255,255,255,0.06));
        box-shadow: 0 12px 40px rgba(102,126,234,0.14);
        transform: translateX(6px);
    }

</style>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
  
    <script src="js/main.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    
<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var directer = get_filter('directer');
        var categroy = get_filter('categroy');
        var language = get_filter('language');
        $.ajax({
            url:"allmovie_fetch.php",
            method:"POST",
            data:{action:action, directer:directer, categroy:categroy, language:language},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#show_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#show_show').html(ui.values[0] + ' - ' + ui.values[1]);
            filter_data();
        }
    });

});
</script>

</body>

</html>
