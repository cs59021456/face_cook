<!DOCTYPE html>
<html lang="en">
<style>
    html,
    body {
        background-image: url(https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/73274197_756460411447512_5651038713598181376_o.jpg?_nc_cat=105&_nc_eui2=AeHdlSnkRbw9MLlfLJKiHlqN1WJ8tNzrRWnbaQVMlMt4SJbaaQbPLG6auJoLrEI-LQhYPTzyFtpvvWyGN_BCzQ2yeYG7fEXcLwWrHVbO_3dWKQ&_nc_oc=AQkTdMkDV3sKZBKgYtUOuzHIs6vtXXgAicUzXnVj3ofqH56xPIm5Qtce63LFfQs00Mo&_nc_ht=scontent.fbkk5-3.fna&oh=60431be479dc26dd8f4fb1be07f7c852&oe=5E5DE57D);

    }
</style>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Facecook</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Footer -->
<footer class="">
    <img class="d-block w-100" src="https://scontent.fcnx2-1.fna.fbcdn.net/v/t1.0-9/73388447_764664077293812_5735111886668562432_o.jpg?_nc_cat=108&_nc_eui2=AeHMN6rnhahOKzZ5irql-NdQoBgPdP9crtIOylASjUySnMEGu-6HBVpuB3fZtp8iOWvzgvvOkjXWCNSyR_WEoZ8bkqDwKXKEo3qRqlb2om9gNA&_nc_oc=AQkS7Wm9_VhLDBggclEwEejVb6Agh12tXn0WljZT7o_QH5lv6Ehh6Fq286dghhFxlQQ&_nc_ht=scontent.fcnx2-1.fna&oh=46c1bc85d0878d9667adfd41c2b07e77&oe=5E4AFF27" alt="devbanban">
    <!-- /.container -->
</footer>

<marquee scrollamount="5">
    <a class="text-danger">😊🙏 ยินดีต้อนรับเข้าสู่เว็บไซต์ faceCook การประยุกต์สูตรอาหารจากวัตถุดิบที่มีในตู้เย็น จัดทำโดย 👧นางสาวสุภนิดา ภูมิชาติ 🧑นายสุทัศน์ ก้อนจันทร์เทศ 👩‍🦰อาจารย์ที่ปรึกษา อาจารย์เมธาวรรณ ใจไว</a>

</marquee>

<body>
    <div class="w3-display-container w3-content w3-wide" style="max-width:100px;min-width:500px" id="home">



    </div>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://sv1.picz.in.th/images/2019/11/13/gswiB8.png" class="card-img" alt="...">


            </a>


            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">




                    @if (Route::has('login'))
                    @auth

                    <li class="nav-item">
                            <a  class="nav-link" href="{{ url('/home') }}" >หน้าหลัก</a>
                        </li>

                   
                            @else

                            <li class="nav-item">
                                    <a  class="nav-link" href="{{ route('login') }}" >เข้าสู่ระบบ</a>
                                </li>


                                @if (Route::has('register'))
                                <li class="nav-item">
                                <a  class="nav-link" href="{{ route('register') }}" >ลงทะเบียน</a>
                            </li>
                                @endif

                            @endauth
                @endif

                <li class="nav-item">
                        <a  class="nav-link" href="https://www.facebook.com/profile.php?id=100029478190839" >ติดต่อเรา</a>
                    </li>














            </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>


    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('https://scontent.fbkk5-6.fna.fbcdn.net/v/t1.0-9/75474138_764630590630494_8344739788154208256_o.jpg?_nc_cat=102&_nc_oc=AQkI4_uh-Gmt8DDUOCY2v3XrQiwi4ApWrNJwOa5wTN1eiAWXaHoOTewPHCbWdZor0n8&_nc_ht=scontent.fbkk5-6.fna&oh=fdf04a76b16bea11ee8e5b46e467fc0b&oe=5E448FED')">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://scontent.fbkk5-6.fna.fbcdn.net/v/t1.0-9/75210849_755884701505083_5219206767329673216_n.jpg?_nc_cat=102&_nc_oc=AQmrb5XKUhG84huQIuBFabvjnTctlCsZe_POkL1deZ6w-qRPHXo4cy2ePVv5kLDIWUI&_nc_ht=scontent.fbkk5-6.fna&oh=11de0609f7f5cbd306b5de50c6b5abe5&oe=5E5D8AB3')">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/76249222_755991798161040_4913199044798447616_o.jpg?_nc_cat=104&_nc_oc=AQkB6lPtm2OiIHGk--xCF09VzG8Lw6ylCbSCRKQ_k643MkgW5luT99mHeUpOTQqkYTI&_nc_ht=scontent.fbkk5-5.fna&oh=301575c46c58689d85abd5301443eb9b&oe=5E5600B8')">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>









    <!-- /.container -->

    <footer class="py-5 bg-white">
        <div class="container">


            <!-- //มัสมั่นไก่ -->
            <div class="card mb-3" style="max-width: 1080px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/m.gif" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">“มัสมั่น” ของไทยขึ้นอันดับหนึ่ง จัดอันดับ 50 อาหารอร่อยที่สุดในโลกโดย CNN</h5>
                            <p class="card-text">มัสมั่นคือสุดยอดของแกงกะหรี่ และยังเป็นสุดยอดของอาหารทั้งปวง มีรสชาติที่หวานและเผ็ด แม้แต่แบบกระป๋องในซูเปอร์มาเก็ตยังให้รสชาติที่อร่อย กลายเป็นอาหารจากดินแดนแห่งรอยยิ้มที่อร่อยที่สุดในโลก</p>
                            <p class="card-text"><small class="text-muted" class="text-primary"><a href="https://today.line.me/th/pc/article/%E2%80%9C%E0%B8%A1%E0%B8%B1%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B9%88%E0%B8%99%E2%80%9D+%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B9%84%E0%B8%97%E0%B8%A2%E0%B8%82%E0%B8%B6%E0%B9%89%E0%B8%99%E0%B8%AD%E0%B8%B1%E0%B8%99%E0%B8%94%E0%B8%B1%E0%B8%9A%E0%B8%AB%E0%B8%99%E0%B8%B6%E0%B9%88%E0%B8%87+%E0%B8%88%E0%B8%B1%E0%B8%94%E0%B8%AD%E0%B8%B1%E0%B8%99%E0%B8%94%E0%B8%B1%E0%B8%9A+50+%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%A3%E0%B9%88%E0%B8%AD%E0%B8%A2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B9%83%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%81%E0%B9%82%E0%B8%94%E0%B8%A2+CNN-MM9NQ0">อ่านต่อ...</a></small></p>
                        </div>
                    </div>
                </div>
                <!-- //ต้มยำกุ้ง -->

                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/g.gif" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">“ต้มยำกุ้ง” ติดโผ CNN 3 เมนูใน 50 จาน อาหารอร่อยที่สุดในโลก!!!โดย CNN</h5>
                            <p class="card-text">คำว่า ต้มยำกุ้ง เป็นคำโดดในภาษาไทย มาจากคำว่า ต้ม และ ยำ ซึ่งมีความหมายที่แสดงกระบวนการทำอาหาร แสดงอัตลักษณ์ความเป็นไทย เป็นอาหารของคนภาคกลาง ที่แสดงให้เห็นถึงวิถีชีวิตของชุมชนที่อยู่ติดกับริมแม่น้ำ มีวัฒนธรรมการบริโภคอาหาร ด้วยการนำวัตถุดิบในท้องถิ่นมาใช้การประกอบอาหาร เช่น กุ้งในแม่น้ำ ต้มลงในน้ำเดือด ปรุงรสด้วยสมุนไพรต่าง ๆ รับประทานกับข้าวสวยร้อน ๆ ถือเป็นอาหารเพื่อสุขภาพ ที่ช่วยรักษาสมดุลของร่างกายได้</p>
                            <p class="card-text"><small class="text-muted" class="text-primary"><a href="https://today.line.me/th/pc/article/%E2%80%9C%E0%B8%A1%E0%B8%B1%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B9%88%E0%B8%99%E2%80%9D+%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B9%84%E0%B8%97%E0%B8%A2%E0%B8%82%E0%B8%B6%E0%B9%89%E0%B8%99%E0%B8%AD%E0%B8%B1%E0%B8%99%E0%B8%94%E0%B8%B1%E0%B8%9A%E0%B8%AB%E0%B8%99%E0%B8%B6%E0%B9%88%E0%B8%87+%E0%B8%88%E0%B8%B1%E0%B8%94%E0%B8%AD%E0%B8%B1%E0%B8%99%E0%B8%94%E0%B8%B1%E0%B8%9A+50+%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%A3%E0%B9%88%E0%B8%AD%E0%B8%A2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B9%83%E0%B8%99%E0%B9%82%E0%B8%A5%E0%B8%81%E0%B9%82%E0%B8%94%E0%B8%A2+CNN-MM9NQ0">อ่านต่อ...</a></small></p>
                        </div>
                    </div>
                </div>
                <!-- //ส้มตำ -->

                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/t.gif" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">“ส้มตำ” ติดโผ CNN 3 เมนูใน 50 จาน อาหารอร่อยที่สุดในโลก!!!โดย CNN</h5>
                            <p class="card-text">“ส้มตำ” เป็นอาหารพื้นเมืองของภาคอีสาน แต่ในความเป็นจริงแล้ว ส้มตำเป็นอาหารที่ถือกำเนิดขึ้นในภาคกลาง ซึ่งในสมัยก่อนนั้น ในประเทศไทยไม่ได้ปลูกต้นมะละกอ แต่มะละกอมีต้นกำเนิดมาจากทวีปอเมริกาใต้ จากนั้นก็ถูกเผยแพร่เข้ามาสู่ทวีปเอเชีย และมีอยู่ที่เมืองมะละกาเป็นหลัก ภายหลังก็ถูกเผยแพร่เข้ามาสู่ประเทศไทย โดยคนไทยเองก็เข้าใจว่าพืชชนิดนี้มาจากมะละกา จึงมีการเรียกชื่อเพี้ยนมาเป็นมะละกอ เหมือนในปัจจุบัน</p>
                            <p class="card-text"><small class="text-muted" class="text-primary"><a href="https://sites.google.com/site/5xaharthiytidcikhnthawlok/5-xahar-thiy-xandab-lok">อ่านต่อ...</a></small></p>
                        </div>
                    </div>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Vw4bs7roDXI?rel=0" allowfullscreen></iframe>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KAdeFx8Z1XU" allowfullscreen></iframe>
                    </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Footer -->
    <footer class="py-5 bg-danger">
        <div class="container">
            <p class="m-0 text-center text-white">FaceCook &copy; เว็บประยุกต์สูตรอาหาร</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
