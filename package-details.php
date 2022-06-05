<?php
session_start();
$useremail = $_SESSION['alogin'];
$pid = intval($_GET['pkgid']);
$_SESSION['pkid'] = $_GET['pkgid'];
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit2'])) {
    $pid = intval($_GET['pkgid']);
    $useremail = $_SESSION['alogin'];
    $fromdate = $_POST['fromdate'];
    $city = $_POST['cities'];
    $package = $_POST['packages'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $total = $_POST['total'];
    $status = 0;
    echo $sql = "INSERT INTO tblbooking(PackageId,UserEmail,FromDate,city,type,adult,child,total,status) VALUES('$pid','$useremail','$fromdate','$city','$package','$adult','$child','$total','$status')";

    $query = $dbh->prepare($sql);
    $query->bindParam(':pid', $pid, PDO::PARAM_STR);
    $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
    $query->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
    $query->bindParam(':todate', $todate, PDO::PARAM_STR);
    $query->bindParam(':city', $city, PDO::PARAM_STR);
    $query->bindParam(':package', $package, PDO::PARAM_STR);
    $query->bindParam(':adult', $adult, PDO::PARAM_STR);
    $query->bindParam(':child', $child, PDO::PARAM_STR);
    $query->bindParam(':total', $total, PDO::PARAM_STR);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->execute();

    $lastInsertId = $dbh->lastInsertId();


    if ($lastInsertId) {
        $msg = "Booked Successfully";
    } else {
        $error = "Something went wrong. Please try again";
    }
}
if (isset($_SESSION['alogin'])) {
?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <title>TMS | Package Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="applijewelleryion/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- Custom Theme files -->
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <script>
            new WOW().init();
        </script>
        <script src="js/jquery-ui.js"></script>

        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #dd3d36;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            .succWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #5cb85c;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            input[type="date"] {
                width: 100%;
                height: 53px;
                font-size: 18px;
                font-family: "Gilroy_M";
                padding: 16px 0px 16px 16px;
            }

            .mainwr {
                margin-bottom: 50px;
                margin-top: 35px;
            }

            .wrapper1 {
                width: 100px;
                margin-bottom: 50px;
                margin-left: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #FFF;
                border-radius: 12px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            }

            .wrapper1 span {
                width: 100px;
                text-align: center;
                font-size: 50px;
                cursor: pointer;
                user-select: none;
            }

            .wrapper1 span.num {
                font-size: 25px;
                border-right: 2px solid rgba(0, 0, 0, 0.2);
                border-left: 2px solid rgba(0, 0, 0, 0.2);
                pointer-events: none;
            }

            .wrapper2 {

                width: 100px;
                margin-left: 50px;
                display: flex;
                align-items: center;
                justify-content: right;
                background: #FFF;
                border-radius: 12px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            }

            .wrapper2 span {
                width: 100px;
                text-align: center;
                font-size: 50px;
                cursor: pointer;
                user-select: none;
            }

            .wrapper2 span.number {
                font-size: 25px;
                border-right: 2px solid rgba(0, 0, 0, 0.2);
                border-left: 2px solid rgba(0, 0, 0, 0.2);
                pointer-events: none;
            }

            #result {
                margin-top: 50px;

                font-size: 30px;
                font-weight: bold;
            }

            .m {
                margin-top: 60px;
            }

            .type {
                margin-top: 20px;
            }

            .def {

                width: 25%;
                color: #9e9e9e;
                font-size: 14px;
                border: 1px solid #464646;
                margin-bottom: 20px;
            }

            .de {
                width: 25%;
                color: #9e9e9e;
                font-size: 14px;
                border: 1px solid #464646;
                margin-bottom: 20px;
                margin-left: 53px;
            }

            .tab-menu {
                margin-top: 42px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .tab-menu .tabs {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-column-gap: 24px;
                column-gap: 24px;
            }

            .tab-menu .tabs .tab {
                font-family: "Gilroy_SB";
                font-size: 20px;
                color: #868686;
                padding: 8px 24px;
                border-radius: 10px;
                cursor: pointer;
            }

            .tab-menu .tabs .tab:hover {
                color: #5744e3;
            }

            .tab-menu .tabs .tab-active {
                color: #5744e3;
                background: #eeecfc;
                width: auto;
            }

            .tab-menu .tabs .tab-active::after {
                content: "";
                position: relative;
                display: block;
                width: calc(100% + 48px);
                height: 2px;
                background: #5744e3;
                top: 22px;
                left: -24px;
            }

            .tab-menu .underline {
                margin-top: 12px;
                height: 2px;
                width: 100%;
                background: #D9D5F5;
                border-radius: 4px;
            }

            .tab-content {
                margin-top: 42px;
                display: none;
            }

            .tab-con-active {
                display: block;
            }
        </style>


    </head>

    <body>
        <!-- top-header -->
        <?php include('includes/header.php'); ?>
        <div class="banner-3">
            <div class="container">
                <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TRAVELLO -Package Details
                </h1>
            </div>
        </div>
        <!--- /banner ---->
        <!--- selectroom ---->
        <div class="tab-menu">
            <div class="tabs">
                <div id="tabBtn1" class="tab tab-active">
                    Description
                </div>
                <div id="tabBtn2" class="tab">
                    Package Rating
                </div>
            </div>
            <div class="underline"></div>
        </div>
        <div id="tabCon1" class="tab-content tab-con-active">
            <div class="selectroom">
                <div class="container">
                    <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
                    <form name="book" id="bookingForm" method="post">
                        <input type="hidden" name="total" id="totalRes" value="">
                        <input type="hidden" name="userEmail" id="userEmail" value="<?php echo $useremail; ?>">
                        <input type="hidden" name="pkgId" id="pID" value="<?php echo $pid; ?>">

                        <?php
                        $pid = intval($_GET['pkgid']);
                        $sql = "SELECT * from tbltourpackages where PackageId=:pid";
                        $query = $dbh->prepare($sql);
                        $query->bindParam(':pid', $pid, PDO::PARAM_STR);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                            foreach ($results as $result) {
                                date_default_timezone_set("Asia/Kolkata");
                                $date = date("d/m/Y") . " " . date("h:i:sa");

                        ?>
                                <!-- <script>
                document.getElementById('totalRes').value = <?php echo htmlentities($result->PackagePrice); ?>
                </script> -->



                                <div class="selectroom_top">
                                    <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
                                        <img src="<?php echo htmlentities($result->PackageImage); ?>" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
                                        <h2><?php echo htmlentities($result->PackageName); ?></h2>
                                        <p class="dow">#PKG-<?php echo htmlentities($result->PackageId); ?></p>
                                        <p><b>Package Type :</b> <?php echo htmlentities($result->PackageType); ?></p>
                                        <p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation); ?></p>
                                        <p><b>Features: </b> <?php echo htmlentities($result->PackageFetures); ?></p>
                                        <div class="ban-bottom">
                                            <div class="bnr-right">
                                                <label class="inputLabel">Date of Travel</label>
                                                <input type="date" id="adatepicker" type="text" placeholder="dd-mm-yyyy" name="fromdate" required="">
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="grand">
                                            <p>Per Head</p>
                                            <h3 id="packagePrice"> <?php echo htmlentities($result->PackagePrice); ?></h3>
                                        </div>
                                    </div>
                                    <h3>Package Details</h3>
                                    <p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails); ?> </p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="selectroom_top">
                                    <h2>Booking</h2>

                                    <p class="m">Fill in Your Details</p>


                                    <div class="input city">
                                        <i class="fa fa-plane"></i>
                                        Departure City :
                                        <select class="def" name="cities" id="ct" class="select">
                                            <option value="" disabled selected hidden>Please Select</option>
                                            <option value="Coimbatore" class="company" id="company">Coimbatore</option>
                                            <option value="kerala">Kerala</option>
                                            <option value="Bangalore">Bangalore</option>
                                        </select>
                                        <div class="tour">
                                            <li class="fa fa-globe"></li>
                                            Tour Type:
                                            <select class="de" name="packages" id="user" class="select">
                                                <option value="" disabled selected hidden>Select Any</option>
                                                <option value="Family Package" class="company" id="company">Family package</option>
                                                <option value="Couple">Couple package</option>
                                                <option value="Bachelor Package">Bachelor Package</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input type">

                                        <i class="fa fa-users"></i>
                                        Select Travellers :
                                    </div>

                                    <div class="mainwr">
                                        <label class="ad">Adult</label>
                                        <div class="wrapper1">

                                            <span class="minus">-</span>
                                            <input type="hidden" name="adult" class="num" id="bFirst">
                                            <button class="numm" id="bFirstm">00</button>
                                            <span class="plus">+</span>
                                        </div>
                                        <label class="ch">Child(Age:>10)</label>
                                        <div class="wrapper2">

                                            <span class="min">-</span>
                                            <input type="hidden" name="child" class="number" id="bsecond">
                                            <button class="numb" id="bsecondm">00</button>
                                            <span class="pl">+</span>
                                        </div </div>
                                        <div id="result">
                                            <label id="total">Total</label>
                                        </div>
                                        <?php if ($_SESSION['alogin']) { ?>
                                            <div align="center">
                                                <button name="submit2" type="button" id="submitBtn" class="btn-primary btn">Book</button>

                                            </div>

                                        <?php } else { ?>


                                        <?php } ?>
                                        <div class="clearfix"></div>

                                    </div>

                                </div>
                        <?php }
                        } ?>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div id="tabCon2" class="tab-content">
            <div class="container">
                <h1 class="mt-5 mb-5">Review & Rating</h1>
                <div class="card">
                    <div class="card-header">Travello-Tours and Travels Management System</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <h1 class="text-warning mt-4 mb-4">
                                    <b><span id="average_rating">0.0</span> / 5</b>
                                </h1>
                                <div class="mb-3">
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <i class="fas fa-star star-light mr-1 main_star"></i>
                                </div>
                                <h3><span id="total_review">0</span> Reviews</h3>
                            </div>
                            <div class="col-sm-4">
                                <p>
                                <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                                <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                                </div>
                                </p>
                                <p>
                                <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>

                                <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                                </div>
                                </p>
                                <p>
                                <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>

                                <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                                </div>
                                </p>
                                <p>
                                <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>

                                <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                                </div>
                                </p>
                                <p>
                                <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>

                                <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                                </div>
                                </p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <h3 class="mt-4 mb-3">Write Review Here</h3>
                                <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5" id="review_content"></div>
            </div>




            <div id="review_modal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Submit Review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4 class="text-center mt-2 mb-4">
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                            </h4>
                            <div class="form-group">
                                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
                            </div>
                            <div class="form-group">
                                <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                            </div>
                            <div class="form-group text-center mt-4">
                                <button type="button" class="btn btn-primary" id="save_review">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var rating_data = 0;

                $('#add_review').click(function() {
                    $('#review_modal').modal('show');
                });

                $(document).on('mouseenter', '.submit_star', function() {

                    var rating = $(this).data('rating');

                    reset_background();

                    for (var count = 1; count <= rating; count++) {

                        $('#submit_star_' + count).addClass('text-warning');

                    }

                });

                function reset_background() {
                    for (var count = 1; count <= 5; count++) {

                        $('#submit_star_' + count).addClass('star-light');

                        $('#submit_star_' + count).removeClass('text-warning');

                    }
                }

                $(document).on('mouseleave', '.submit_star', function() {

                    reset_background();

                    for (var count = 1; count <= rating_data; count++) {

                        $('#submit_star_' + count).removeClass('star-light');

                        $('#submit_star_' + count).addClass('text-warning');
                    }

                });

                $(document).on('click', '.submit_star', function() {

                    rating_data = $(this).data('rating');

                });

                $('#save_review').click(function() {

                    var user_name = $('#user_name').val();

                    var user_review = $('#user_review').val();

                    if (user_name == '' || user_review == '') {
                        alert("Please Fill Both Field");
                        return false;
                    } else {
                        $.ajax({
                            url: "submit_rating.php",
                            method: "POST",
                            data: {
                                rating_data: rating_data,
                                user_name: user_name,
                                user_review: user_review
                            },
                            success: function(data) {
                                $('#review_modal').modal('hide');

                                load_rating_data();

                                alert(data);
                            }
                        })
                    }

                });
                load_rating_data();

                function load_rating_data() {
                    $.ajax({
                        url: "submit_rating.php",
                        method: "POST",
                        data: {
                            action: 'load_data'
                        },
                        dataType: "JSON",
                        success: function(data) {
                            $('#average_rating').text(data.average_rating);
                            $('#total_review').text(data.total_review);

                            var count_star = 0;

                            $('.main_star').each(function() {
                                count_star++;
                                if (Math.ceil(data.average_rating) >= count_star) {
                                    $(this).addClass('text-warning');
                                    $(this).addClass('star-light');
                                }
                            });

                            $('#total_five_star_review').text(data.five_star_review);

                            $('#total_four_star_review').text(data.four_star_review);

                            $('#total_three_star_review').text(data.three_star_review);

                            $('#total_two_star_review').text(data.two_star_review);

                            $('#total_one_star_review').text(data.one_star_review);

                            $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

                            $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

                            $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

                            $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

                            $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

                            if (data.review_data.length > 0) {
                                var html = '';

                                for (var count = 0; count < data.review_data.length; count++) {
                                    html += '<div class="row mb-3">';

                                    html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div></div>';

                                    html += '<div class="col-sm-11">';

                                    html += '<div class="card">';

                                    html += '<div class="card-header"><b>' + data.review_data[count].user_name + '</b></div>';

                                    html += '<div class="card-body">';

                                    for (var star = 1; star <= 5; star++) {
                                        var class_name = '';

                                        if (data.review_data[count].rating >= star) {
                                            class_name = 'text-warning';
                                        } else {
                                            class_name = 'star-light';
                                        }

                                        html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
                                    }

                                    html += '<br />';

                                    html += data.review_data[count].user_review;

                                    html += '</div>';

                                    html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

                                    html += '</div>';

                                    html += '</div>';

                                    html += '</div>';
                                }

                                $('#review_content').html(html);
                            }
                        }
                    })
                }
            </script>
        </div>

        <!-- =========== Modal ============ -->



        <!--- /selectroom ---->
        <!--- /footer-top ---->
        <?php include('includes/footer.php'); ?>
        <!-- signup -->

        <!-- //signin -->
        <!-- write us -->
        <?php include('includes/write-us.php'); ?>

        <script>
            $("#submitBtn").click(function() {
                var totPrice = $("#totalRes").val();
                var userEmail = $("#userEmail").val();
                var pId = $("#pID").val();
                var fromDate = $("#adatepicker").val();
                var city = $("#ct").val();
                var pType = $("#user").val();
                var adult = $("#bFirst").val();
                var child = $("#bsecond").val();
                $.ajax({
                    url: "payment_process.php",
                    type: "POST",
                    data: {
                        totPrice: totPrice,
                        userEmail: userEmail,
                        pId: pId,
                        fromDate: fromDate,
                        city: city,
                        pType: pType,
                        adult: adult,
                        child: child
                    },
                    success: function(data) {

                        var options = {
                            "key": "rzp_test_znHnU7ulu4TmWS",
                            "amount": totPrice * 100,
                            "currency": "INR",
                            "name": "Travello",
                            "description": "Test Transaction",
                            "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                            "handler": function(response) {
                                $.ajax({
                                    type: 'post',
                                    url: 'payment_process.php',
                                    data: {
                                        userEmail: userEmail,
                                        payment_id: response.razorpay_payment_id,
                                    },
                                    success: function(result) {
                                        window.location.href = " thankyou1.php";
                                    }
                                });

                            }
                        };
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                    }
                });
            });
        </script>

        <script type="text/javascript">
            const aDatePicker = document.querySelector("#adatepicker");


            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = yyyy + '-' + mm + '-' + dd;
            aDatePicker.setAttribute("min", today);

            const plus = document.querySelector(".plus"),
                minus = document.querySelector(".minus"),
                num = document.querySelector(".num");
            console.log(num.value);
            let a = 0;
            let count = 0;


            plus.addEventListener("click", () => {
                a++;
                a = (a < 10) ? "0" + a : a;
                num.innerText = a;
                count++;
                document.getElementById("bFirst").value = count;

                let price = $("#packagePrice").html();
                var totalPrice = count * price;
                document.querySelector("#result").innerHTML = "Total: " + (count * price);
                document.getElementById("bFirstm").value = a;
                document.getElementById("bFirstm").innerHTML = a;
                $("#totalRes").val(totalPrice);
            });

            minus.addEventListener("click", () => {



                if (a > 0) {
                    a--;
                    a = (a < 10) ? "0" + a : a;
                    num.innerText = a;
                    count--;
                    document.getElementById("bFirst").value = count;

                    let price = $("#packagePrice").html();
                    var totalPrice = count * price;
                    document.querySelector("#result").innerHTML = "Total: " + (count * price);
                    document.getElementById("bFirstm").value = a;
                    document.getElementById("bFirstm").innerHTML = a;
                    $("#totalRes").val(totalPrice);


                }
            });
            const pl = document.querySelector(".pl"),
                min = document.querySelector(".min"),
                number = document.querySelector(".number");
            let b = 0;
            pl.addEventListener("click", () => {
                b++;
                b = (b < 10) ? "0" + b : b;
                number.innerText = b;
                count++;
                document.getElementById("bsecond").value = count;
                let price = $("#packagePrice").html();
                var totalPrice = count * price;
                document.querySelector("#result").innerHTML = "Total: " + (count * price);
                document.getElementById("bsecondm").value = b;
                document.getElementById("bsecondm").innerHTML = b;
                $("#totalRes").val(totalPrice);

            });

            min.addEventListener("click", () => {

                if (b > 0) {
                    b--;
                    b = (b < 10) ? "0" + b : b;
                    number.innerText = b;
                    count--;
                    document.getElementById("bsecond").value = count;
                    let price = $("#packagePrice").html();
                    var totalPrice = count * price;
                    document.querySelector("#result").innerHTML = "Total: " + (count * price);
                    document.getElementById("bsecondm").value = b;
                    document.getElementById("bsecondm").innerHTML = b;
                    $("#totalRes").val(totalPrice);
                }
            });
        </script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

        <script>
            // $("#submitBtn").click(function() {
            //     var totPrice = $("#totalRes").val();
            //     var userEmail = $("#userEmail").val();
            //     var pId = $("#pID").val();
            //     var fromDate = $("#adatepicker").val();
            //     var city = $("#ct").val();
            //     var pType = $("#user").val();
            //     var adult = $("#bFirst").val();
            //     var child = $("#bsecond").val();

            // var options = {
            //     "key": "rzp_test_znHnU7ulu4TmWS",
            //     "amount": totPrice * 100,
            //     "currency": "INR",
            //     "name": "Travello",
            //     "description": "Test Transaction",
            //     "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
            //     "handler": function(response) {

            //         window.location.href = "thankyou1.php";
            //     }
            // };
            // var rzp1 = new Razorpay(options);
            // rzp1.open();
            // });




            // function pay_now() {
            //     console.log("hello");
            //     var userEmail = $'#userEmail').val();
            //     var totalPrice = jQuery('#amt').val();
            //     jQuery.ajax({
            //         type: 'post',
            //         url: 'payment_process.php',
            //         data: "amt=" + amt + " &name=" + name,
            //         success: function(result) {
            //             var options = {
            //                 " key": "JIrxxwplX1sSjPD12fs8sobu",
            //                 "amount": price * 100,
            //                 "currency": "INR",
            //                 "name": "Acme Corp",
            //                 "description": "Test Transaction",
            //                 "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
            //                 "handler": function(response) {
            jQuery.ajax({
                type: 'post',
                url: 'payment_process.php',
                data: "payment_id=" + response.razorpay_payment_id,
                success: function(result) {
                    window.location.href = " thankyou1.php";
                }
            });
            //                 }
            //             };
            //             var rzp1 = new Razorpay(options);
            //             rzp1.open();
            //         }
            //     });
            // }
        </script>

        <script>
            // ============== Tab content toggle ==============
            const tabBtn1 = document.querySelector("#tabBtn1");
            const tabBtn2 = document.querySelector("#tabBtn2");

            const tabCon1 = document.querySelector("#tabCon1");
            const tabCon2 = document.querySelector("#tabCon2");

            tabBtn1.addEventListener("click", () => {
                tabBtn1.classList.add("tab-active");
                tabBtn2.classList.remove("tab-active");

                tabCon1.classList.add("tab-con-active");
                tabCon2.classList.remove("tab-con-active");
            });

            tabBtn2.addEventListener("click", () => {
                tabBtn2.classList.add("tab-active");
                tabBtn1.classList.remove("tab-active");

                tabCon2.classList.add("tab-con-active");
                tabCon1.classList.remove("tab-con-active");
            });


            // ========== End of Tab content toggle ==========
        </script>

    </body>

    </html>
<?php
} else {
    header("Location:regndlog.php");
} ?>