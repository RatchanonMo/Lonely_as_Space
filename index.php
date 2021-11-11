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
    <source src="assets/images/banner.mp4" type="video/mp4">
  </video>

  <div class="container-fluid d-flex " style="max-width:500px;height:100vh">
    <div class="align-self-center ">
      <h1 align="center" class="header wow fadeInUp" data-wow-delay="0.3s" style="color:white;font-size:100px;line-height:1">

        LONELY
        <br>
        AS SPACE

      </h1>
      <h5 class="wow fadeInUp" data-wow-delay="0.6s" align="center" style="color:white;">
        เราเป็นสิ่งมีชีวิตที่โดดเดี่ยวในอวกาศอันกว้างใหญ่ไพศาลจริงหรือแท้จริงแล้วเราเหงาโดดเดี่ยวเพียงลำพัง?
      </h5>

    </div>
    <section id="section05" class="align-self-end">
      <a href="#khaos"><span></span></a>
    </section>
  </div>

  <div class="main">
    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-4 wow fadeIn">
          <h1 align="center" id="nbr" class="header" style="font-size: 60px;">57</h1>
          <h5 align="center">ทดสอบ (ครั้ง)</h5>
        </div>
        <div class="col-4 wow fadeIn">
          <h1 align="center" id="nbr1" class="header" style="font-size: 60px;">21</h1>
          <h5 align="center">ลงจอด (ครั้ง)</h5>
        </div>
        <div class="col-4 wow fadeIn">
          <h1 align="center" id="nbr2" class="header" style="font-size: 60px;">37</h1>
          <h5 align="center">ออกตัว (ครั้ง)</h5>
        </div>

      </div>
    </div>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <?php
        include('./component/stage1.php');
        ?>
        </div>
        <div class="carousel-item">
        <?php
        include('./component/stage2.php');
        ?>
        </div>
        <div class="carousel-item">
        <?php
        include('./component/stage3.php');
        ?>
        </div>
        <div class="carousel-item">
        <?php
        include('./component/stage4.php');
        ?>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



    <!--div class="container" style="padding:230px 0px 230px 0px">
    <div class="embed-responsive embed-responsive-16by9" style="border-radius: 15px;">
  <iframe class="embed-responsive-item" src="https://eyes.nasa.gov/dsn/dsn.html?fbclid=IwAR24huHPwUXL8_OHPRxbzrVcUC298IgSbltLp_0CGr9w2yPuGpdPQZrQiss" allowfullscreen></iframe>
</div>
    </!--div-->
    <div class="container pb-5 pt-5">
      <h1 class="pb-5 pt-5" style="font-weight: 700;line-height:1.3">เปรียบเทียบและพัฒนาจากประวัติศาสตร์อวกาศ <br>เพื่อใช้ทรัพยากรณ์อย่างคุ้มค่าที่สุด</h1>
      <img src="./assets/images/compare.png" class="img-fluid" alt="">
      <h5 class="mt-5 mb-5">จากยุคสมัยประวัติศาตร์ มนุษย์ชาติ เราเจอคำถามท้าทายมากมายในการพัฒนากระสวยอวกาศ ให้คุ้มค่าและประหยัดทรัพยากรณ์ที่มีอยู่อย่างจำกัดให้ได้มากที่สุด โดยจากที่ท่านทราบยานของเรามีขนาดเล็กมากเมื่อเทียบกับที่เคยสร้างมาแต่ความสามารถในการสำรวจและความก้าวล้ำเทคโนโลยีสูงมากจึงทำให้ประหยัดงบประมาณซึ่งได้มาจากผู้เสียภาษี ซึ่งนับได้ว่าเป็นเรื่องที่น่ายินดีเป็นอย่างมาก</h5>
    </div>



  </div>
  <div class="parallax d-flex" style="height: 70vh;">
    <div class="container-fluid align-self-center" style="max-width: 800px;">
      <h1 class="" align="center" style="font-weight: bold;">เพราะพวกเราคือ Lonely as space </h1>

      <h5 style="padding-bottom: 80px;" align="center">เราเชื่อว่าความก้าวหน้าทางวิทยาศาสตร์และเทคโนโลยี จะนำมาซึ่งความเจริญก้าวหน้า และสันติภาพของมวลมนุษยชาติ ไม่แน่ ในสักวันเราอาจจะไม่เหงาโดดเดี่ยวในห้วงอวกาศอีกต่อไป ขอฝากความหวังนี้ไปในห้วงอวกาศถึง<b>สหายอันไกลโพ้น</b>
      </h5>

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