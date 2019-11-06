@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://images.pexels.com/photos/326311/pexels-photo-326311.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    }
</style>
@section('content')



<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card border-danger">

                <div class="center">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">

                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <h2>วัตถุดิบของคุณ</h2>
                                    </div>
                                    <div class="col-sm">

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                @foreach ($addmaterials as $addmaterial)


                <div class="container">
                    <div class="row">

                        <div class="col-sm">

                            <div class="card" >
                                <div class="card-body">
                                    <div class="center">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>ตู้เย็น:</strong>
                                                {{ $addmaterial->id_ref}}
                                            </div>
                                        </div>


                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>ชื่อวัตถุดิบ:</strong>
                                                {{ $addmaterial->material }}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>ปริมาณวัตถุดิบ:</strong>
                                                {{ $addmaterial->amount }}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>หน่วยวัตถุดิบ:</strong>
                                                {{ $addmaterial->unit }}
                                            </div>
                                        </div>


                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>เวลาที่เพิ่มวัตถุดิบ:</strong>
                                                {{ $addmaterial->created_at}}
                                            </div>
                                        </div>



                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>เวลาที่แก้ไขวัตถุดิบ:</strong>
                                                    {{ $addmaterial->updated_at}}
                                                </div>
                                            </div>



                                            <form action="{{ route('addmaterial.destroy',$addmaterial->id) }}" method="POST">


                                                <a class="btn btn-primary" href="{{ route('addmaterial.edit',$addmaterial->id) }}">แก้ไข</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">ลบ</button>
                                            </form>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
                <div class="container">
                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <a class="btn btn-primary" href="{{ route('home') }}">ย้อนกลับ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

