<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FaceCook</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-image: url(https://scontent.fcnx2-1.fna.fbcdn.net/v/t1.0-9/72682190_756464431447110_1151202521256034304_o.jpg?_nc_cat=107&_nc_eui2=AeH4lnKSAdRBRY4Z5bgCcT3RvY4DZgUYv4TSWxknIdtsd3_nDb0psJN5A2qJm4K0-RUX2tV5Sx5OOKe9DgfZ2OLLzIq3RJcHrzqaYRpQyxUO3Q&_nc_oc=AQmWGai_HW2yi-PjCIZu4EWAZfNeU0D-F8K6SO1tXhJTjVIkZ9NlxucwHD571Y2ROcE&_nc_ht=scontent.fcnx2-1.fna&oh=66272e6da84f83e1b45a3df85935f596&oe=5E57C51E);
            color: #ffffff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;

        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<div class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">

            <img class="w3-image" src="img/6.jpg" alt="Hamburger Catering" >

        </div>
<body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="flex-center position-ref full-height">

        <!doctype html>
        <html lang="en">
        <!-- //เลเอาครอบสไลด์ -->
        <div class="card text-dark bg-danger mb-3">
            <div class="card-body">

                <head>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


                    <!--content -->
                    <div class="container">
                        <!-- //ปุ่มเข้าระบบ -->
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                    <marquee scrollamount="5">
                                        <p class="text-light">ยินดีต้อนรับเข้าสู่เว็บไซต์ FaceCook การประยุกต์สูตรอาหารจากวัตถุดิบที่มีในตู้เย็น จัดทำโดย นางสาวสุภนิดา ภูมิชาติ นายสุทัศน์ ก้อนจันทร์เทศ อาจารย์ที่ปรึกษา อาจารย์เมธาวรรณ ใจไว</p>
                                    </marquee>
                                    @if (Route::has('login'))
                                        @auth
                                        <button type="button" class="btn btn-warning"> <a  href="{{ url('/home') }}" class="text-danger">หน้าแรก</a></button>
                                                @else
                                                <button type="button" class="btn btn-warning"> <a href="{{ route('login') }}" class="text-danger">เข้าสู่ระบบ</a></button>

                                                    @if (Route::has('register'))
                                                    <button type="button" class="btn btn-warning"> <a href="{{ route('register') }}" class="text-danger">ลงทะเบียน</a> </button>
                                                    @endif
                                                @endauth
                                    @endif

                                    <button type="button" class="btn btn-warning"> <a href="https://www.facebook.com/profile.php?id=100029478190839" class="text-danger">ติดต่อเรา</a> </button>

                                </div>
                            </div>
                        </div>
                        <!-- //ปุ่มเข้าระบบ -->

                        <!-- //สไลด์นะ -->
                        <div class="row">
                            <div class="col-md-12 col-xs-12">

                            </div>
                            </nav>
                        </div>

                        <div class="col-md-12 col-xs-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/74434842_755884654838421_972783485221601280_o.jpg?_nc_cat=104&_nc_oc=AQnKNWhIFwL2FAQEpI6a5LosHNSJ5GBxEp53KL0RCRqZrhyuWYu1EnEAt9sPYAcjM0k&_nc_ht=scontent.fbkk5-5.fna&oh=62c07e99999ad12035e1612293ad7b42&oe=5E63557E" alt="devbanban">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://scontent.fbkk5-6.fna.fbcdn.net/v/t1.0-9/75210849_755884701505083_5219206767329673216_n.jpg?_nc_cat=102&_nc_oc=AQmrb5XKUhG84huQIuBFabvjnTctlCsZe_POkL1deZ6w-qRPHXo4cy2ePVv5kLDIWUI&_nc_ht=scontent.fbkk5-6.fna&oh=11de0609f7f5cbd306b5de50c6b5abe5&oe=5E5D8AB3" alt="devbanban">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/76249222_755991798161040_4913199044798447616_o.jpg?_nc_cat=104&_nc_oc=AQkB6lPtm2OiIHGk--xCF09VzG8Lw6ylCbSCRKQ_k643MkgW5luT99mHeUpOTQqkYTI&_nc_ht=scontent.fbkk5-5.fna&oh=301575c46c58689d85abd5301443eb9b&oe=5E5600B8" alt="devbanban">
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
                            <!-- //มัสมั่นไก่ -->
                            <div class="card mb-3" style="max-width: 1080px;">
                                <div class="container">
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
                                    <div class="card mb-3" style="max-width: 1080px;">
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
                                        <div class="card mb-3" style="max-width: 1080px;">
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
                                            </div>

                                            <!-- Optional JavaScript -->
                                            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>
