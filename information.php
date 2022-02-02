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
        <source src="assets/images/information.mp4" type="video/mp4">
    </video>

    <div class="container d-flex" style="height:100vh">
        <div class="align-self-center">
            <h1 align="" class="header wow fadeInUp" data-wow-delay="0.3s" style="color:white;font-size:100px;line-height:1">


                INFORMATION
                <br>
                FROM RESEARCH
            </h1>
            <h4 class="wow fadeInUp" data-wow-delay="0.6s" style="color:white;">
                ข้อมูลที่ได้จากการสำรวจ
            </h4>
        </div>
        <section id="section05" class="align-self-end">
            <a href="#map"><span></span></a>
        </section>
    </div>
    <div class="main pt-5" style="margin:0">
        <div class="container pb-5 pt-5">

            <h1 style="font-size:50px"><b>ข้อมูลแผนที่และทรัพยากร</b></h1>

            <div class="row">
                <div class="col-xl-6 pt-4">
                    <h2><b>ทรัพยากรใต้ธรณี</b></h2>
                    <img src="./assets/images/ore.jpg" class="img-fluid" style="border-radius:10px" alt="">
                    <div class="row">
                        <div class="col-8">
                            <p> <br>จากการสำรวจทรัพยากรใต้ธรณีโดย KHAOS EAGLE ทำให้สามารถระบุตำแหน่งและปริมาณความหนาแน่นของแร่ธาตุใต้ธรณีได้ โดยใช้เกณฑ์ดังนี้</p>

                        </div>
                        <div class="col-4">
                            <img src="./assets/images/rate.png" class="img-fluid pt-3" alt="">

                        </div>
                    </div>

                </div>
                <div class="col-xl-6 pt-4">
                    <h2><b>พื้นที่ที่น่าอาศัยอยู่</b></h2>

                    <img src="./assets/images/liveable.jpg" class="img-fluid" style="border-radius:10px" alt="">
                    <p> <br>จากข้อมูลทรัพยากรใต้ธรณีและการสำรวจเพิ่มเติมสามารถสรุปได้ว่า พื้นที่ในรูปภาพนั้นคือพื้นที่ที่น่าอาศัยอยู่เนื่องจากมีความหนาแน่นของชั้นบรรยากาศสูง อุณหภูมิพอเหมาะ และปริมาณแร่สามารถขุดเจาะขึ้นมาใช้งานได้</p>

                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 pt-5">
                    <h1 align="center" class="mt-5 pt-5" style="font-size:50px"><b>ความน่าอยู่อาศัยเปรียบเทียบจากโลก</b></h1>
                    <img src="./assets/images/comparefinal.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-xl-12">
                    <h1 class="mt-5 pt-5" style="font-size:50px"><b>ฤดูกาล</b></h1>
                    <div class="row">
                        <div class="col-xl-8">
                            <img src="./assets/images/inclination.png" class="img-fluid" alt="">

                        </div>
                        <div class="col-xl-4">
                            <img src="./assets/images/entri.gif" class="img-fluid" alt="">

                        </div>
                        <div class="col-xl-12">
                            <h5><br>บนดาวดูน่าไม่มีฤดูกาลเพราะว่า ค่าแกนมุมดาวที่เอียงกระทำต่อคาบโคจรแทบจะเป็น 0 (น้อยกว่า 1 องศา) จึงสามารถอธิบายเหตุการณ์ที่ดาวดูน่ามีอุณหภูมิแตกต่างกันเล็กน้อยใน 1 ปีเนื่องจากเป็นไปตามกฎ kepler law ซึ่งอธิบายถึงความใกล้ไกลดวงอาทิตย์ จากการตรวจวัดปริมาณพลังงานที่ได้จากโซลาร์เซลล์ของ KHAOS MICKEY ตลอดทั้งปีพบว่า มีพลังงานลดลงเนื่องจากความไกลจากดวงอาทิตย์ของรัศมีโคจรดาวดูน่า ค่า Orbital eccentricity มีค่า 0.051 เท่านั้นเอง
                            </h5>
                        </div>
                    </div>

                </div>
                <div class="col-xl-7">
                    <h1 class="mt-5 pt-5" style="font-size:50px"><b>วันและเวลา</b></h1>
                    <img src="./assets/images/day.png" class="img-fluid" alt="">
                    <p>คาบการโคจรของดาวดูน่า 1 วันมีค่าเท่ากับ 18.2 ชั่วโมงหรือ 65517.859375 วินาที </p>

                    <h1 class="mt-5 pt-5" style="font-size:50px"><b>การโคจรของดวงจันทร์ Ike</b></h1>
                    <div class="embed-responsive embed-responsive-16by9 pt-5 pb-5 mb-5">
                        <iframe style="border-radius:10px" class="embed-responsive-item" src="https://www.youtube.com/embed/lHT-JhLFRlo?autoplay=0" allow="autoplay; encrypted-media"></iframe>
                    </div>
                    <p><br>วงโคจรของไอค์ทำให้มันอยู่เหนือช่วงลองจิจูดสั้นของ Dunaian โดยตรง เส้นลองจิจูดเฉลี่ยของ Duna ที่ Ike มักจะอยู่เหนือ โดยตรงคือ 6 องศาตะวันออก แต่ความเยื้องศูนย์กลางของวงโคจรของ Ike ทำให้ลองจิจูดที่แน่นอนจะแกว่งไปมาระหว่าง 2 องศาถึง 10 องศาทางตะวันออก </p>

                </div>
                <div class="col-xl-5">
                    <h1 class="mt-5 pt-5" style="font-size:50px"><b>ชั้นบรรยากาศ</b></h1>
                    <img src="./assets/images/atmos.png" class="img-fluid" alt="">
                    <p><br>ดูน่ามีชั้นบรรยากาศบางและเย็นโดยมีมวลประมาณ 3.0×10 15กิโลกรัม ความดันระดับ Datum 6.755 กิโลปาสกาล (0.067 ชั้นบรรยากาศ) และความลึก 50,000 เมตร เมื่อเทียบกับบรรยากาศของKerbinบรรยากาศ Duna มี 1/15 มวล 1/15 ดันพื้นผิวและ 1/9 ความหนาแน่นของพื้นผิว ความดันระดับ Datum บน Duna เทียบเท่ากับที่ระดับความสูง 14,975 ม. บน Kerbin ความดันที่ด้านบนของยอดเขาสูงสุดของ Duna อยู่ที่ 2.4 kPa เท่านั้น

                        น้ำหนักโมเลกุลเฉลี่ยของอากาศดูน่าอยู่ที่ 42 กรัม/โมล และดัชนีอะเดียแบติกของมันคือ 1.20 แม้ว่าองค์ประกอบของบรรยากาศ Duna ที่ไม่เป็นที่รู้จักค่าเหล่านี้ชี้ให้เห็นว่ามันอาจจะประกอบด้วยส่วนใหญ่ของก๊าซคาร์บอนไดออกไซด์ </p>
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


</body>

</html>