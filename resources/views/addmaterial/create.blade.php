@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://images.pexels.com/photos/207301/pexels-photo-207301.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    }
</style>


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card border-danger">

                <div class="container">
                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <h2>เพิ่มวัตถุดิบเข้าตู้เย็นของคุณ</h2>
                        </div>
                        <div class="col-sm">

                        </div>
                    </div>
                </div>


                <div class="center">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">


                        </div>
                    </div>
                </div>


                <form action="{{ route('addmaterial.store') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="center">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ตู้เย็น:</strong>
                                <input type="text" name="id_ref" class="form-control" value="{{$ref->id}}">
                            </div>
                        </div>

                        <div class="form-group">
                                <strong>ชื่อตู้เย็น:</strong>
                                 <input type="text" class="form-control" id="inputEmail4" value="{{$ref->name_ref}}" name="name_ref">
                        </div>
                    </div>




                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <strong>ประเภทวัตถุดิบ:</strong>
                            </div>
                            <div class="col-sm">

                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <select class="custom-select" name="type_material">
                            <option selected>ประเภทวัตถุดิบ</option>
                            <option value="เนื้อสัตว์">เนื้อสัตว์</option>
                            <option value="ผัก">ผัก</option>

                        </select>
                    </div>





                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <strong>ชื่อวัตถุดิบ:</strong>
                                </div>
                                <div class="col-sm">

                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <select class="custom-select" name="material" >
                                <option selected>ชื่อวัตถุดิบ</option>
                                <option value="ไก่">ไก่</option>
                                <option value="ปลา">ปลา</option>
                                <option value="หมู">หมู</option>
                                <option value="ไข่ไก่">ไข่ไก่</option>
                                <option value="ไข่เป็ด">ไข่เป็ด</option>
                                <option value="เป็ด">เป็ด</option>
                                <option value="กุ้ง">กุ้ง</option>
                                <option value="ปลาหมึก">ปลาหมึก</option>
                                <option value="ปู">ปู</option>
                                <option value="หอย">หอย</option>

                                <option value="ตำลึง">ตำลึง</option>
                                <option value="คะน้า">คะน้า</option>
                                <option value="มะเขือ">มะเขือ</option>
                                <option value="พริกชี้ฟ้า">พริกชี้ฟ้า</option>
                                <option value="ถั่วฝักยาว">ถั่วฝักยาว</option>
                                <option value="มะเขือเทศ">มะเขือเทศ</option>
                                <option value="บร็อคโคลี่">บร็อคโคลี่</option>
                                <option value="กระเทียม">กระเทียม</option>
                                <option value="แตงกวา">แตงกวา</option>
                                <option value="หน่อไม้ฝรั่ง">หน่อไม้ฝรั่ง</option>
                                <option value="ผักบุ้งจีน">ผักบุ้งจีน</option>
                                <option value="ต้นอ่อนทานตะวัน">ต้นอ่อนทานตะวัน</option>
                                <option value="ผักสลัด">ผักสลัด</option>
                                <option value="ถั่วงอก">ถั่วงอก</option>
                                <option value="กวางตุ้ง">กวางตุ้ง</option>
                                <option value="มะระ ">มะระ </option>
                                <option value="ต้นหอม">ต้นหอม</option>
                                <option value="ผักชี ">ผักชี </option>
                                <option value="คื่นฉ่าย">คื่นฉ่าย</option>
                                <option value="เห็ดนางฟ้า">เห็ดนางฟ้า</option>
                                <option value="กะเพรา">กะเพรา</option>
                                <option value="โหระพา">โหระพา</option>
                                <option value="ขิง">ขิง</option>
                                <option value="ข่า">ข่า</option>
                                <option value="ตะไคร้">ตะไคร้</option>
                                <option value="ใบมะกรูด">ใบมะกรูด</option>
                                <option value="กะหล่ำดอก">กะหล่ำดอก </option>
                                <option value="กะหล่ำปลี">กะหล่ำปลี</option>
                                <option value="ผักกาดเขียว">ผักกาดเขียว</option>
                                <option value="ผักกาดขาว">ผักกาดขาว</option>
                                <option value="กุยช่าย">กุยช่าย</option>
                                <option value="ผักโขม">ผักโขม</option>
                                <option value="แครอท">แครอท</option>
                                <option value="ชะอม">ชะอม</option>
                                <option value="ถั่วพู">ถั่วพู</option>
                                <option value="ถั่วลันเตา">ถั่วลันเตา</option>
                                <option value="พริกขี้หนู">พริกขี้หนู</option>
                                <option value="ฟักทอง">ฟักทอง</option>
                                <option value="หอมใหญ่">หอมใหญ่</option>
                                <option value="หอมแดง">หอมแดง</option>
                                <option value="หน่อไม้">หน่อไม้</option>
                                <option value="เห็ดหอม">เห็ดหอม</option>
                                <option value="เห็ดฟาง">เห็ดฟาง</option>
                                <option value="เห็ดหูหนู">เห็ดหูหนู</option>
                                <option value="มะเขือพวง">มะเขือพวง</option>
                                <option value="แค">แค</option>
                                <option value="ชะพลู">ชะพลู</option>
                                <option value="บวบ">บวบ</option>
                                <option value="ผักกระเฉด">ผักกระเฉด</option>
                                <option value="หัวไชเท้า">หัวไชเท้า</option>
                                <option value="ผักหวาน">ผักหวาน</option>
                                <option value="ฟักเขียว">ฟักเขียว</option>
                                <option value="มะนาว">มะนาว</option>
                                <option value="ข้าวโพดอ่อน">ข้าวโพดอ่อน</option>
                                <option value="มะระกอ">มะระกอ</option>
                                <option value="ดอกขจร">ดอกขจร</option>
                                <option value="เห็ดโคน">เห็ดโคน</option>
                                <option value="มันเทศ">มันเทศ</option>
                                <option value="ผักชีฝรั่ง">ผักชีฝรั่ง</option>
                                <option value="ใบกะเพราช้าง">ใบกะเพราช้าง</option>
                                <option value="บีทรูท">บีทรูท</option>
                                <option value="พริกไทย">พริกไทย</option>
                                <option value="มะขาม">มะขาม</option>


                            </select>
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <strong>หน่วยวัตถุดิบ:</strong>
                                </div>
                                <div class="col-sm">

                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <select class="custom-select" name="unit">
                                <option selected>หน่วยวัตถุดิบ</option>
                                <option value="กรัม">กรัม</option>
                                <option value="กิโลกรัม">กิโลกรัม</option>
                                <option value="กำ">กำ</option>
                                <option value="ขีด">ขีด</option>
                                <option value="ฟอง">ฟอง</option>
                                <option value="ตัว">ตัว</option>
                                <option value="ลูก">ลูก</option>
                            </select>
                        </div>




                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <strong>ปริมาณวัตถุดิบ:</strong>
                                </div>
                                <div class="col-sm">

                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <input name="amount" class="form-control" type="text" placeholder="ปริมาณวัตถุดิบ">
                        </div>






                        <!-------ปุ่มบันทึกกับปุ่มกลับหน้าโฮม----->
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <a class="btn btn-primary"href="/refme/{{Auth::user()->id}}">ย้อนกลับ</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
</div>
@endsection

