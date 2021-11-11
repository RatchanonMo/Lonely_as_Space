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


                DISCOVER <br>ORDER
            </h1>
            <h4 class="wow fadeInUp" data-wow-delay="0.6s" style="color:white;">
                ลำดับการเดินทาง
            </h4>
        </div>
        <section id="section05" class="align-self-end">
            <a href=""><span></span></a>
        </section>
    </div>


    <div class="main pt-5" style="margin:0">

        <div class="container pt-5">
            <div class="page-header">
                <h1 style="font-size: 60px;" id="timeline"><strong>ลำดับการเดินทาง</strong></h1>
            </div>
            <ul class="timeline " style="margin:0">
                <li>
                    <div class="timeline-badge header" style="color:black">01</div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 align="right" class="timeline-title "><b>การเดินทางออกจากโลก</b></h4>
                            <!--p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></!--p-->
                        </div>
                        <div class="timeline-body">
                            <img src="./assets/images/takeoff.png" class="img-fluid" alt="">
                            <p align="right" class=""><br>การออกจากโลกจำเป็นต้องใช้เชื้อเพลิงปริมาณมหาศาล เนื่องจากต้องปะทะกับแรงต้านอากาศที่จุด <a href="" data-toggle="modal" data-target="#exampleModal">Max -q</a></p><br>
                            <img src="./assets/images/dis1.png" class="img-fluid" alt="">
                        
                        </div>
                    </div>

                </li>
                <li class="">

                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <p align="right">ใช้แรงเหวี่ยงดวงจันทร์บริวาร</p>
                            <!--p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></!--p-->
                        </div>
                        <div class="timeline-body">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="assets/images/sling1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                </li>
                <li class="">

                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <p align="right">ใช้แรงเหวี่ยงดวงอาทิตย์ไปดาวดูน่า</p>
                            <!--p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></!--p-->
                        </div>
                        <div class="timeline-body">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="assets/images/sling2.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                </li>
                <li class="timeline-inverted">

                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <!--p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></!--p-->
                        </div>
                        <div class="timeline-body">
                            <p>ลดความเร็วเข้าสู่วงโคจร</p>
                            <img src="./assets/images/dis3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </li>
                <li class="">
                    <div class="timeline-badge header" style="color: black;">02</div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title" align="right"><b>เริ่มแผนการสำรวจดาว Duna</b></h4>
                        </div>
                        <div class="timeline-body">

                        </div>
                    </div>
                </li>

                <li>

                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <p align="right" class="timeline-title"><b>ปลดดาวเทียม</b>เพื่อศึกษาที่ลงจอด และเพื่อทราบทรัพยากรใต้ธรณี เนื่องจาก KHAOS EAGLE สามารถเปลี่ยนตำแหน่งได้ด้วยตนเองจึงสามารถสำรวจทรัพยากรได้แทบทุกตารางกิโลเมตร</p>
                        </div>
                        <div class="timeline-body">

                            <video class="img-fluid" autoplay loop muted>
                                <source src="assets/images/eagledeploy.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </li>
                <li>

                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <p align="right" class="timeline-title">สร้างเครือข่าย Deep Space Network หรือ DSN</p>
                        </div>
                        <div class="timeline-body">
                        </div>
                    </div>
                </li>
                <li>

                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <p align="right" class="timeline-title">เมื่อถึงตำแหน่งแล้ว <b>ทำการปลด KHAOS MICKEY</b> ลงจอดตามเป้าหมาย </p>
                        </div>
                        <div class="timeline-body">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="assets/images/mickeydeploy.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <p class="timeline-title">เมื่อปลด KHAOS EAGLE และ MICKEY แล้วจะ<b>นำ KHAOS SEEKER ลงจอด</b> เพื่อเติมเชื้อเพลิง ซึ่งจะใช้เป็นเสาสัญญาณ DSN และสามารถใช้เป็นยานอพยพภายหลังได้</p>
                        </div>
                        <div class="timeline-body">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="assets/images/seekerdeploy.mp4" type="video/mp4">
                            </video>
                            <img src="./assets/images/dis4.png" class="img-fluid pt-5" alt="">
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <p class="timeline-title">ขุดเจาะทรัพยากรใต้ธรณีเพื่อนำมาแปลงเป็นเชื้อเพลิงได้แก่ Oxidizer, Liquid fuel และ Monopropellant</p>
                        </div>
                        <div class="timeline-body">
                            <img src="./assets/images/oil.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <p class="timeline-title">ในระหว่างนี้ KHAOS SEEKER จะทำหน้าที่เป็นเสาสัญญาณ DSN ชั่วคราว ซึ่งในอนาคตสามารถนำมาใช้เป็นยานขนส่งของหรือยานอพยพได้</p>
                        </div>
                        <div class="timeline-body">

                        </div>
                    </div>
                </li>




            </ul>
            <video class="img-fluid pt-5 pb-5" controls>
                <source src="assets/images/discover.mp4" type="video/mp4">
            </video>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: black;"><b>ค่า Max -q คืออะไร</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: black;">
                    <img src="./assets/images/max-q.gif" class="img-fluid" alt="">
                    <p style="color: black;"><br>คำเรียก Max-q นั้น เป็นคำเรียกแทนค่าของ maximum Dynamic pressure ที่เกิดกับโครงสร้างของตัวจรวด
                        หรือ ตัวยาน ขณะที่มันกำลังเร่งความเร็วเพื่อพ้นจากชั้นบรรยากาศโลก จากกราฟนี้จะเห็นว่าค่าของ
                        dynamic pressure จะเริ่มเพิ่มขึ้นตั้งแต่ Launch และเมื่อความเร็วของจรวด/ยาน ขึ้นไปถึงจุดหนึ่ง ที่มีความ
                        พอดีของ ความเร็วสูง กับ ความหนาแน่นอากาศ ก็จะทำให้ค่าของ maximum dynamic pressure
                        ขึ้น peak </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">ตกลง</button>
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