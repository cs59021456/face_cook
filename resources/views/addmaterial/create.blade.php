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

                <form action="{{ route('addmaterial.store') }}" method="POST">
                    @csrf

                    <div class="center">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ตู้เย็น:</strong>
                                <input type="text" name="id_ref" class="form-control" value="{{$item}}">
                            </div>
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
                            <select class="custom-select" name="material">
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
                            <select class="custom-select" name="amount">
                                <option selected>ปริมาณวัตถุดิบ</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
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


                        <!-------ปุ่มบันทึกกับปุ่มกลับหน้าโฮม----->
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <a class="btn btn-primary" href="{{ route('addmaterial.index') }}">ย้อนกลับ</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
</div>
@endsection

