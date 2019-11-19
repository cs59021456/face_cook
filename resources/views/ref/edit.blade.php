@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>แก้ไขรายละเอียดตู้เย็น</h2>
            </div>

        </div>
    </div>



    <form action='/ref/update/{{$refs->id}}' method="POST" >
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>โอ๊ะโอ!</strong>มีปัญหาในการกรอกข้อมูล<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ "กรุณากรอกข้อมูลให้ครบ" }}</li>
                @endforeach
            </ul>
        </div>
    @endif


        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ชื่อตู้เย็น:</strong>
                    <input type="text" class="form-control" id="inputEmail4" value="{{$refs->name_ref}}" name="name_ref">
                </div>
            </div>




            {{-- <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                <div>
                    {{-- <input type="text" class="form-control " placeholder="กรอกวัตถุดิบของคุณ" name="rw1"><br> --}}

                    {{-- <div class="col-sm">
                            <input  id="name_ref" type="text" class="form-control @error('name_ref') is-invalid @enderror" name="name_ref" value="{{$refs->name_ref}}" autocomplete="name_ref" autofocus>

                            @error('name_ref')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{"กรุณากรอกวัตถุดิบของคุณให้ถูกต้อง"}}</strong>
                                </span>
                            @enderror
                        </div>
                </div> --}} 



            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>รายละเอียดตู้เย็น:</strong>
                    <input type="text" class="form-control" id="inputEmail4" value="{{$refs->intro}}" name="intro">
                </div>
            </div>




            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success">บันทึก</button>
              <a class="btn btn-primary" href="/refme/{{Auth::user()->id}}">ย้อนกลับ</a>
            </div>



        </div>

    </form>
@endsection
