
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>แก้ไขวัตถุดิบ</h2>
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

    <form action="{{ route('addmaterial.update',$addmaterial->id) }}" method="POST">
        @csrf
        @method('PUT')





            <strong>ชื่อวัตถุดิบ:</strong>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <select class="custom-select" name="material">
                            <option selected>{{$addmaterial->material}}</option>
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

            <strong>ปริมาณวัตถุดิบ:</strong>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <select class="custom-select" name="amount">
                            <option selected>{{$addmaterial->amount}}</option>
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

            <strong>หน่วยวัตถุดิบ:</strong>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <select class="custom-select" name="unit">
                        <option selected>{{$addmaterial->unit}}</option>
                        <option value="กรัม">กรัม</option>
                        <option value="กิโลกรัม">กิโลกรัม</option>
                        <option value="กำ">กำ</option>
                        <option value="ขีด">ขีด</option>
                        <option value="ฟอง">ฟอง</option>
                        <option value="ตัว">ตัว</option>
                        <option value="ลูก">ลูก</option>
                      </select>
        </div>




            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">บันทึก</button>
              <a class="btn btn-primary" href="/Addmater/show/{id}">ย้อนกลับ</a>
            </div>



        </div>

        </form>
@endsection
