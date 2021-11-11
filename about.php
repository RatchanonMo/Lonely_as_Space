<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('./component/head.php');
    ?>

</head>


<body class="wow fadeIn">
    <?php
    include('./component/navbar.php');
    ?>


    <video class="wow fadeIn" data-wow-delay="0.9s" id="background-video" autoplay loop muted>
        <source src="assets/images/dsn2.mp4" type="video/mp4">
    </video>

    <div class="container d-flex" style="height:100vh">
        <div class="align-self-center">
            <h1 align="" class="header wow fadeInUp" data-wow-delay="0.3s" style="color:white;font-size:100px;line-height:1">


                ABOUT US
            </h1>
            <h5 class="wow fadeInUp" data-wow-delay="0.6s" align="center" style="color:white;">
            </h5>
        </div>
        <section id="section05" class="align-self-end">
            <a href="#about"><span></span></a>
        </section>
    </div>
    <div class="main " id="about" style="margin:0">
        <div class="container pt-5 pb-5">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <?php
                    include('./component/oak.php');
                    ?>
                </div>
                <div class="item">
                    <?php
                    include('./component/non.php');
                    ?>
                </div>

            </div>



        </div>
    </div>




    <?php
    include('./component/footer.php');
    ?>

    <?php
    include('./component/js.php');
    ?>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            items: 1,

        })
    </script>

</body>

</html>