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


                MAP AND <br> DEEP SPACE<br> NETWORK
            </h1>
            <h4 class="wow fadeInUp" data-wow-delay="0.6s" style="color:white;">
        โครงการของพวกเรา
      </h4>
        </div>
        <section id="section05" class="align-self-end" >
      <a href="#map" ><span></span></a>
    </section>
    </div>
    <div class="main " style="margin:0">
        <div class="container pb-5">

            <h1 class="header pt-5 mb-5 wow fadeInUp" style="font-size:60px;" align="center" id="map">Map 3D Simulation </h1>
            <div class="embed-responsive embed-responsive-16by9 " style="border-radius: 15px;">
                <iframe class="embed-responsive-item mb-5" src="https://eyes.nasa.gov/apps/orrery/#/sc_perseverance" allowfullscreen></iframe>
            </div>
            <h5 class="mt-5 pb-5 wow fadeIn">Map 3D Simulation เป็นระบบที่ถูกสร้างขึ้นเพื่อให้ผู้ที่ต้องการศึกษาได้เรียนรู้และเข้าใจลำดับของระบบสุริยะตามสเกลจริง และรายงานให้แก่ผู้เสียภาษีถึงผลงานอันยิ่งใหญ่ของเรา ที่เราได้ทำศึกษาความก้าวหน้าทางเทคโนโลยีอวกาศ โดยทางเราได้นำระบบจำลองอวกาศจริงของทาง NASA เพื่อให้เล็งเห็นถึงแนวทาง นำเสนอข้อมูลทางอวกาศ และในอนาคตภาคีความร่วมมืออวกาศไทย อาจมีระบบที่เป็นของประเทศไทยเองและให้ความรู้ข้อมูลและการศึกษาต่อไปในอนาคต
            </h5>

            <h1 class="header mt-5 wow fadeInUp" style="font-size:60px;" align="center">Deep Space Network </h1>
            <div class="embed-responsive embed-responsive-16by9" style="border-radius: 15px;">
                <iframe class="embed-responsive-item mt-5" src="https://eyes.nasa.gov/dsn/dsn.html?fbclid=IwAR24huHPwUXL8_OHPRxbzrVcUC298IgSbltLp_0CGr9w2yPuGpdPQZrQiss" allowfullscreen></iframe>
            </div>
            <p class="mt-5 pb-5" style="margin-bottom: 0;" align="center">อ้างอิงจาก <a href="https://eyes.nasa.gov/dsn/dsn.html" target="_blank">https://eyes.nasa.gov/dsn/dsn.html</a></p>
            <h5 class=" wow fadeIn"> Deep Space Network หรือ DSN คือ Array ของจานรับสัญญาณดาวเทียมขนาดใหญ่ของ NASA ใช้สำหรับสื่อสาร (ฟังสัญญาณ) ระยะไกลกับยานอวกาศที่อยู่ในอวกาศห้วงลึก DSN เป็นหน่วยงานย่อยของ Jet Propulsion Laboratory หรือ JPL สถานีจานรับสัญญานดาวเทียมมีอยู่ 3 แห่งบนโลกแต่ละสถานีดูแลน่านฟ้า 120 องศา ครอบคลุมทั่วโลก ตั้งอยู่ที่สหรัฐ สเปน และออสเตรเลีย

            </h5>

            <h1 class="mt-5 pt-5" style="font-weight:700;font-size:60px;">สำคัญอย่างไร ?</h1>
       
                <h5>ระบบ Deep Space Network เป็นระบบที่มีความสำคัญมาก ในการติดต่อสื่อสารกับยานไร้คนขับ เพื่อให้สามรถบรรลุภารกิจบังคับยาน และส่งข้อมูลกลับมาบนโลกได้อย่างครบถ้วน</h5>
           
         

        </div>
    </div>



    <?php
    include('./component/footer.php');
    ?>

    <?php
    include('./component/js.php');
    ?>


</body>

</html>