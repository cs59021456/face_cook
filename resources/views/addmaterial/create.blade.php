<?php
use Illuminate\Support\Facades\DB;
use App\materials;
use App\addmaterial;
use App\menus_materials;


?>
@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://images.pexels.com/photos/207301/pexels-photo-207301.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    }
    .myDiv {
        display: none;
    }
    #showOne {
        /* color: red; */
        /* border: 1px solid red; */
        padding: 10px;
    }
    #showTwo {
        /* color: green; */
        /* border: 1px solid green; */
        padding: 10px;
    }
</style>


@section('content')


<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <h2>เพิ่มวัตถุดิบเข้าตู้</h2>
                        </div>
                        <div class="col-sm">

                        </div>
                    </div>
                </div>


                <form action="{{ route('addmaterial.store') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>โอ๊ะโอ้ว!</strong> กรุณาใส่ข้อมูลให้ครบด้วยนะจ๊ะ.<br><br>
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
                                <strong>ตู้เย็น:</strong><br>
                                <strong>{{$ref->id}}</strong><br>
                                <strong>ชื่อตู้เย็น:</strong><br>
                                <strong>{{$ref->name_ref}}</strong><br>

                            </div>
                        </div>

                        <div class="form-group">

                        </div>
                    </div>




                    <div class="container">
                        <div class="row">
                            <div class="col-sm">

                            </div>
                            <div class="col-sm">

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <input type="hidden" value="ประเภทวัตถุดิบ" name="type_material">
                    </div>




                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <strong>ชื่อวัตถุดิบ:(กรุณาเลือกชนิดวัตถุดิบ)</strong>
                            </div>
                            <div class="col-sm">

                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label for="materiall" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                        <div class="col-md-6">
                            <input id="materiall" type="materiall" class="form-control @error('materiall') is-invalid @enderror" name="materiall"  autocomplete="current-materiall">

                            @error('materiall')
                                <span class="invalid-feedback text-danger" role="alert" >
                                    <strong>{{ "กรุณากรอกรหัสผ่านให้ถูกต้อง" }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}



                    <div class="col-sm " >
                        <input  type="radio" name="demo" value="One" /> ผัก
                        <input type="radio" name="demo" value="Two" /> เนื้อสัตว์
                        <div id="showOne" class="myDiv">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <select class="custom-select" name="materiall">//dfd
                                    <option selected>ผัก</option>
                                    <option value="กระเจี๊ยบ ">กระเจี๊ยบ</option>
                                    <option value="กระเจี๊ยบแดง">กระเจี๊ยบแดง</option>
                                    <option value="กระชาย">กระชาย</option>
                                    <option value="กระถิน">กระถิน</option>
                                    <option value="กระทกรก">กระทกรก</option>
                                    <option value="กระเทียม">กระเทียม</option>
                                    <option value="กระวาน">กระวาน</option>
                                    <option value="กระวานเทศ">กระวานเทศ</option>
                                    <option value="กระวานไทย">กระวานไทย</option>
                                    <option value="กะเพรา">กะเพรา</option>
                                    <option value="กะเพราช้าง">กะเพราช้าง</option>
                                    <option value="กะหล่ำดอก">กะหล่ำดอก</option>
                                    <option value="กะหล่ำปม">กะหล่ำปม</option>
                                    <option value="กะหล่ำปี">กะหล่ำปี</option>
                                    <option value="กานพลู">กานพลู</option>
                                    <option value="ขนุนอ่อน">ขนุนอ่อน</option>
                                    <option value="18">ขิง</option>
                                    <option value="ขมิ้น">ขมิ้น</option>
                                    <option value="ขมิ้นชัน">ขมิ้นชัน</option>
                                    <option value="ข่า">ข่า</option>
                                    <option value="ขี้เหล็ก">ขี้เหล็ก</option>
                                    <option value="ขึ้นฉ่าย">ขึ้นฉ่าย</option>
                                    <option value="แครอท">แครอท</option>
                                    <option value="งา">งา</option>
                                    <option value="งาขาว">งาขาว</option>
                                    <option value="จันทร์เทศ">จันทร์เทศ</option>
                                    <option value="ชะอม">ชะอม</option>
                                    <option value="ดอกขจร">ดอกขจร</option>
                                    <option value="ดอกแค">ดอกแค</option>
                                    <option value="ดอกงิ้ว">ดอกงิ้ว</option>
                                    <option value="ดอกชมจันทร์">ดอกชมจันทร์</option>
                                    <option value="ดอกดาหลา">ดอกดาหลา</option>
                                    <option value="ดอกต้นหอม">ดอกต้นหอม</option>
                                    <option value="ดอกโสน">ดอกโสน</option>
                                    <option value="ดีปลี">ดีปลี</option>
                                    <option value="ต้นหอม">ต้นหอม</option>
                                    <option value="ต้นอ่อนทานตะวัน">ต้นอ่อนทานตะวัน</option>
                                    <option value="ตะไคร้">ตะไคร้</option>
                                    <option value="ตั้งโอ๋">ตั้งโอ๋</option>
                                    <option value="ตำลึง">ตำลึง</option>
                                    <option value="เตยหอม">เตยหอม</option>
                                    <option value="แตงกวา">แตงกวา</option>
                                    <option value="แตงโมอ่อน">แตงโมอ่อน</option>
                                    <option value="ถั่วแขก">ถั่วแขก</option>
                                    <option value="ถั่วฝักยาว">ถั่วฝักยาว</option>
                                    <option value="ถั่วพู">ถั่วพู</option>
                                    <option value="ถั่วลันเตา">ถั่วลันเตา</option>
                                    <option value="เทอร์นิพ">เทอร์นิพ</option>
                                    <option value="น้ำเต้า">น้ำเต้า</option>
                                    <option value="เนียง">เนียง</option>
                                    <option value="บร๊อคโคลี่">บร็อคโคลี่</option>
                                    <option value="บวบ">บวบ</option>
                                    <option value="บัว">บัว</option>
                                    <option value="บีทรูท">บีทรูท</option>
                                    <option value="2">ใบกะเพรา</option>
                                    <option value="9">ใบมะกรูด</option>
                                    <option value="ใบกุยช่าย">ใบกุยช่าย</option>
                                    <option value="ใบชะพลู">ใบชะพลู</option>
                                    <option value="ใบชะม">ใบชะอม</option>
                                    <option value="ใบบัวบก">ใบบัวบก</option>
                                    <option value="ใบแมงลัก">ใบแมงลัก</option>
                                    <option value="ใบยอ">ใบยอ</option>
                                    <option value="ใบเสี้ยว">ใบเสี้ยว</option>
                                    <option value="ใบโหระพา">ใบโหระพา</option>
                                    <option value="ผักกระเฉด">ผักกระเฉด</option>
                                    <option value="ผักกระโดน">ผักกระโดน</option>
                                    <option value="ผักกวางตุ้ง">ผักกวางตุ้ง</option>
                                    <option value="ผักกาดขาว">ผักกาดขาว</option>
                                    <option value="ผักกาดหอม">ผักกาดหอม</option>
                                    <option value="ผักกูด">ผักกูด</option>
                                    <option value="ผักขาเขียด">ผักขาเขียด</option>
                                    <option value="ผักแขยง">ผักแขยง</option>
                                    <option value="ผักโขม">ผักโขม</option>
                                    <option value="ผักคราดหัวแหวน">ผักคราดหัวแหวน</option>
                                    <option value="ผักคะน้า">ผักคะน้า</option>
                                    <option value="ผักชี">ผักชี</option>
                                    <option value="ผักชีฝรั่ง">ผักชีฝรั่ง</option>
                                    <option value="ผักชีลาว">ผักชีลาว</option>
                                    <option value="ผักบุ้งจีน">ผักบุ้งจีน</option>
                                    <option value="ผักบุ้งไทย">ผักบุ้งไทย</option>
                                    <option value="ผักปลัง">ผักปลัง</option>
                                    <option value="ผักเป็ด">ผักเป็ด</option>
                                    <option value="ผักแพว">ผักแพว</option>
                                    <option value="ผักแว่น">ผักแว่น</option>
                                    <option value="ผักเสี้ยน">ผักเสี้ยน</option>
                                    <option value="ผักหวาน">ผักหวาน</option>
                                    <option value="ผักหวานบ้าน">ผักหวานบ้าน</option>
                                    <option value="ผักหวานป่า">ผักหวานป่า</option>
                                    <option value="พริกขี้หนู">พริกขี้หนู</option>
                                    <option value="พริกชี้ฟ้า">พริกชี้ฟ้า</option>
                                    <option value="พริกไทย">พริกไทย</option>
                                    <option value="เพกา">เพกา</option>
                                    <option value="ฟัก">ฟัก</option>
                                    <option value="ฟักทอง">ฟักทอง</option>
                                    <option value="แฟง">แฟง</option>
                                    <option value="มะกอก">มะกอก</option>
                                    <option value="มะขาม">มะขาม</option>
                                    <option value="มะขามแขก">มะขามแขก</option>
                                    <option value="มะเขือเทศ">มะเขือเทศ</option>
                                    <option value="มะเขือเปราะ">มะเขือเปราะ</option>
                                    <option value="มะเขือพวง">มะเขือพวง</option>
                                    <option value="มะดัน">มะดัน</option>
                                    <option value="มะตา">มะตา</option>
                                    <option value="มะนาว">มะนาว</option>
                                    <option value="มะม่วง">มะม่วง</option>
                                    <option value="มะม่วงหาวมะนาวโห่">มะม่วงหาวมะนาวโห่</option>
                                    <option value="มะระ">มะระ</option>
                                    <option value="มะระกอ">มะระกอ</option>
                                    <option value="มะระขี้นก">มะระขี้นก</option>
                                    <option value="มะระจีน">มะระจีน</option>
                                    <option value="มะรุม">มะรุม</option>
                                    <option value="มะแว้ง">มะแว้ง</option>
                                    <option value="มะอึก">มะอึก</option>
                                    <option value="มันเทศ">มันเทศ</option>
                                    <option value="มันฝรั่ง">มันฝรั่ง</option>
                                    <option value="มันสำปะหลัง">มันสำปะหลัง</option>
                                    <option value="ยอ">ยอ</option>
                                    <option value="ยอดกระเจี๊ยบแดง">ยอดกระเจี๊ยบแดง</option>
                                    <option value="ยอดกระโดน">ยอดกระโดน</option>
                                    <option value="ยอดกระถิน">ยอดกระถิน</option>
                                    <option value="ยอดชะมวง">ยอดชะมวง</option>
                                    <option value="ยอดชะอม">ยอดชะอม</option>
                                    <option value="ยอดผักติ้ว">ยอดผักติ้ว</option>
                                    <option value="ยอดฟักแม้ว">ยอดฟักแม้ว</option>
                                    <option value="ยอดมะกอก">ยอดมะกอก</option>
                                    <option value="ยอดมะขาม">ยอดมะขาม</option>
                                    <option value="ยอดมะม่วง">ยอดมะม่วง</option>
                                    <option value="ยอดส้มป่อย">ยอดส้มป่อย</option>
                                    <option value="ยอดเหลียง">ยอดเหลียง</option>
                                    <option value="ย่านลิเภา">ย่านลิเภา</option>
                                    <option value="ย่านาง">ย่านาง</option>
                                    <option value="แรดิช">แรดิช</option>
                                    <option value="โรสแมรี่">โรสแมรี่</option>
                                    <option value="ลูกตำลึง">ลูกตำลึง</option>
                                    <option value="ลูกเถาคัน">ลูกเถาคัน</option>
                                    <option value="ส้มแขก">ส้มแขก</option>
                                    <option value="สะเดา">สะเดา</option>
                                    <option value="สะตอ">สะตอ</option>
                                    <option value="สะระแหน่">สะระแหน่</option>
                                    <option value="สะแล">สะแล</option>
                                    <option value="หน่อไม้">หน่อไม้</option>
                                    <option value="หน่อไม้ฝรั่ง">หน่อไม้ฝรั่ง</option>
                                    <option value="หยวกกล้วย">หยวกกล้วย</option>
                                    <option value="หอมแขก">หอมแขก</option>
                                    <option value="หอมหัวแดง">หอมหัวแดง</option>
                                    <option value="หอมหัวใหญ่">หอมหัวใหญ่</option>
                                    <option value="หัวไซเท้า">หัวไซเท้า</option>
                                    <option value="หัวปลี">หัวปลี</option>
                                    <option value="หัวปีท">หัวปีท</option>
                                    <option value="เห็ด">เห็ด</option>
                                    <option value="เห็ดเข็มทอง">เห็ดเข็มทอง</option>
                                    <option value="เห็ดโขน">เห็ดโขน</option>
                                    <option value="เห็ดเผาะ">เห็ดเผาะ</option>
                                    <option value="เห็ดฟาง">เห็ดฟาง</option>
                                    <option value="เห็ดหอม">เห็ดหอม</option>
                                    <option value="เห็ดหูหนู">เห็ดหูหนู</option>
                                    <option value="เห็ดออรินจิ">เห็ดออรินจิ</option>
                                    <option value="โหระพา">โหระพา</option>
                                    <option value="ไหลบัว">ไหลบัว</option>
                                    <option value="อบเชย">อบเชย</option>
                                    <option value="อัญชัน">อัญชัน</option>


                                </select>
                            </div>
                        </div>

                        <div id="showTwo" class="myDiv">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <select class="custom-select" name="materia">
                                    <option selected>เนื้อสัตว์</option>
                                    <option value="15">เนื้อไก่</option>
                                    <option value="ปลา">ปลา</option>
                                    <option value="หมู">หมู</option>
                                    <option value="ไข่ไก่">ไข่ไก่</option>
                                    <option value="ไข่เป็ด">ไข่เป็ด</option>
                                    <option value="เป็ด">เป็ด</option>
                                    <option value="กุ้ง">กุ้ง</option>
                                    <option value="ปลาหมึก">ปลาหมึก</option>
                                    <option value="ปู">ปู</option>
                                    <option value="หอย">หอย</option>
                                    <option value="ปลาดอรี่">ปลาดอรี่</option>
                                    <option value="ปลากะพง">ปลากะพง</option>
                                </select>
                            </div>
                        </div>
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




                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('ปริมาณวัตถุดิบ') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}"  autocomplete="amount" autofocus>

                                @error('amount')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ "กรุณากรอกปริมาณ" }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <select id="unit" type="unit" class="custom-select @error('unit') is-invalid @enderror" name="unit" autocomplete="current-unit">
                            <option selected>หน่วยวัตถุดิบ</option>
                            <option value="กรัม">กรัม</option>
                            <option value="กิโลกรัม">กิโลกรัม</option>
                            <option value="กำ">กำ</option>
                            <option value="ขีด">ขีด</option>
                            <option value="ฟอง">ฟอง</option>
                            <option value="ตัว">ตัว</option>
                            <option value="ลูก">ลูก</option>
                        </select>
                        @error('unit')
                        <span class="invalid-feedback text-danger" role="alert" >
                            <strong>{{ "กรุณากรอกรหัสผ่านให้ถูกต้อง" }}</strong>
                        </span>
                    @enderror
                    </div>

                    {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback text-danger" role="alert" >
                                        <strong>{{ "กรุณากรอกรหัสผ่านให้ถูกต้อง" }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}


{{--
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <strong>ปริมาณวัตถุดิบ:</strong>
                            </div>
                            <div class="col-sm">

                            </div>
                        </div>
                    </div> --}}

                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('ปริมาณวัตถุดิบ') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}"  autocomplete="amount" autofocus>

                                @error('amount')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ "กรุณากรอกปริมาณ" }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <input name="amount" class="form-control" type="text" placeholder="ปริมาณวัตถุดิบ">
                    </div><br> --}}


                    <!-------ปุ่มบันทึกกับปุ่มกลับหน้าโฮม----->
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <a class="btn btn-primary" href="/refme/{{Auth::user()->id}}">ย้อนกลับ</a>
                    </div>
            </div>


            </form>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <!-- ตารางซีกขวา ข้อมูลทั้งหมดในตู้เย็น -->
                <?php

                $add = addmaterial::where('id_ref',$ref->id)->get();
                ?>
                <table class="table table-bordered bg-white text-dark">
                    <tr>

                        <th>ตู้เย็นที่</th>
                        <th>ชื่อวัตถุดิบ</th>
                        <th>ปริมาณวัตถุดิบ</th>
                        <th>หน่วยวัตถุดิบ</th>
                        <th>เวลาที่เพิ่มวัตถุดิบ</th>
                        <th>เวลาที่แก้ไขวัตถุดิบ</th>

                    </tr>
                    @foreach ($add as $adds)
                    <tr>
                        <td>{{ $adds->id_ref}}</td>
                        <td>
                            <?php
                            $findmaterials = materials::find($adds->material);
                            $findmenu = menus_materials::where('id_material',$adds->material)->get();
                            ?>

                            {{$findmaterials->name_m}}</td>
                        <td>{{ $adds->amount}}</td>
                        <td>{{ $adds->unit}}</td>
                        <td>{{ $adds->created_at}}</td>
                        <td>{{ $adds->updated_at}}</td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<!-- radio button script ช่วย คลิกเด้ง -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var demovalue = $(this).val();
            $("div.myDiv").hide();
            $("#show" + demovalue).show();
        });
    });
</script>

@endsection
