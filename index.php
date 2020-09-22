<!DOCTYPE html>
<html lang="en">

<head>
    <title>GCS Software Center</title>
    <meta charset="utf-8">
    <!-- begin scroll to top Step 1-1) Add HTML: -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'ar-head-bs3-1.html' ?>

    <link rel="stylesheet" href="ar-head-css-1.css">

</head>

<body>
    <!-- begin scroll to top Step 1-2) Add HTML: -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <!-- end scroll to top Step 1-2) Add HTML: -->

    <?php
    include 'ar-carousel-banner3.html'; 
    include 'ar-navbar-1.html';
    ?>
    <!-- Breadcrumb start -->
    <ul class="breadcrumb">
        <li><a href="http://articles.gcsbkk.com">Articles</a></li>
        <!-- <li>MFP M426</li> -->
    </ul>
    <!-- Breadcrumb end -->

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12 col-lg-4">

                <!-- About GCS
                <h2>About GCS</h2>
                <h5>About GCS:</h5>
                <div class="fakeimg">GCS Image</div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p> -->

                <!-- Quick Links ------------------------------------- -->
                <h3>Quick Links php</h3>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="pg-sw-application.php">Application</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pg-sw-canon.php">Canon Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pg-sw-epson.php"><i class='fas fa-cat'></i>Epson Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pg-sw-hp.php">HP Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pg-sw-kyocera.php">Kyocera Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pg-sw-ricoh.php">Ricoh Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pg-sw-samsung.php">Samsung Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pg-sw-sharp.php">Sharp Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pg-sw-xerox.php">Xerox Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pg-sw-util.php">Utility</a>
                    </li>


                </ul>

            </div>
            <div class="col-sm-12 col-lg-8">



                <!-- Canon Articles -------------------------------------------- -->
                <h2>Canon Articles</h2>
                <div></div>
                <p>ไดรเวอร์ซอฟต์แวร์และเครื่องมือการดูแลระบบในการติดตั้งเครื่องมัลติฟังชั่นก์แคนนอน</p>
                <a class="btn btn-info" href="pg-sw-canon.php">View...</a>
                <p>&nbsp;</p>

                <!-- Epson Articles -------------------------------------------- -->
                <h2>Epson Articles</h2>
                <p>Some text..</p>
                <a class="btn btn-info" href="pg-sw-epson.php">View...</a>
                <p>&nbsp;</p>

                <!-- HP Articles -------------------------------------------- -->
                <h2>HP Articles</h2>
                <div></div>
                <p>ซอฟต์แวร์โซลูชันเต็มรูปแบบประกอบด้วยทุกสิ่งที่คุณต้องการในการติดตั้งเครื่องพิมพ์ HP ของคุณ
                    ชุดซอฟต์แวร์นี้ประกอบด้วยชุดไดรเวอร์ซอฟต์แวร์ติดตั้งและเครื่องมือการดูแลระบบอื่น ๆ</p>
                <a class="btn btn-info" href="pg-sw-hp.php">View...</a>
                <p>&nbsp;</p>

                <!-- KYOCERA Articles -------------------------------------------- -->
                <h2>KYOCERA Articles</h2>
                <h5>Title description, Sep 19, 2019</h5>
                <div></div>
                <p>Some text..</p>
                <a class="btn btn-info" href="pg-sw-kyocera.php">View...</a>
                <p>&nbsp;</p>

                <!-- Ricoh Articles -------------------------------------------- -->
                <h2>Ricoh Articles</h2>
                <h5>Title description, Nov 25, 2019</h5>
                <div></div>
                <p>Some text..</p>
                <a class="btn btn-info" href="pg-sw-ricoh.php">View...</a>
                <p>&nbsp;</p>

                <!-- Samsung Articles -------------------------------------------- -->
                <h2>Samsung Articles</h2>
                <h5>Title description, Sep 2, 2017</h5>
                <div></div>
                <p>Some text..</p>
                <a class="btn btn-info" href="pg-sw-samsung.php">View...</a>
                <p>&nbsp;</p>

                <!-- Sharp Articles -------------------------------------------- -->
                <h2>Sharp Articles</h2>
                <h5>Title description, Aug 8, 2019</h5>
                <div></div>
                <p>Some text..</p>
                <a class="btn btn-info" href="pg-sw-sharp.php">View...</a>
                <p>&nbsp;</p>

                <!-- Xerox Software -------------------------------------------- -->
                <h2>Xerox Software</h2>
                <div></div>
                <p>Some text..</p>
                <a class="btn btn-info" href="pg-sw-xerox.php">View...</a>
                <p>&nbsp;</p>


            </div>
        </div>
    </div>

    <?php include 'ar-footer-menu.html'; ?>

    

    <!-- begin scroll to top Step 3) Add Javascript: -->
    <script>
    //scroll to top Step 3) Add JavaScript:
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
    <!-- end scroll to top Step 3) Add Javascript: -->
    <!-- Google Drive\My_Websites\gcsbkk-2019\software\index-20190109 -->
</body>

</html>