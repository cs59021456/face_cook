@extends('layouts.app')


<style>
    html,
    body {
        background-image: url(https://wallpapershome.com/images/wallpapers/food-1920x1080-still-life-vegetables-bread-12115.jpg);
    }
</style>

@section('content')
<div class="container"><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">


            <!-- ช่องค้นหาสูตรอาหาร -->

            <form action="menu">




                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>โอ๊ะโอ้ว!</strong> กรุณาใส่ข้อมูลให้ครบทั้ง 4 ช่องด้วยนะจ๊ะ.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)

                            @endforeach
                        </ul>
                    </div>
                    @endif





                <div class="main">
                <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                </div>

                                <div class="col-sm">

                                </div>
                            </div>


                    <!-- Actual search box -->
                    {{-- ช่องกรอกวัตถุดิบพร้อมแจ้งเตือนถ้าไม่กรอก --}}
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                    <div>
                        {{-- <input type="text" class="form-control " placeholder="กรอกวัตถุดิบของคุณ" name="rw1"><br> --}}

                        <div class="col-sm">
                                <input style="width:700px;" placeholder="กรอกวัตถุดิบของคุณ" id="rw1" type="text" class="form-control @error('rw1') is-invalid @enderror" name="rw1" value="{{ old('rw1') }}" autocomplete="rw1" autofocus>

                                @error('rw1')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{"กรุณากรอกวัตถุดิบของคุณให้ถูกต้อง"}}</strong>
                                    </span>
                                @enderror
{{--
                                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>โอ๊ะโอ้ว!</strong> กรุณาใส่ข้อมูลให้ครบทั้ง 4 ช่องด้วยนะจ๊ะ.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)

                            @endforeach
                        </ul>
                    </div>
                    @endif --}}


                            </div>
                    </div>

                    <br>

                    <div>
                            {{-- <input type="text" class="form-control " placeholder="กรอกวัตถุดิบของคุณ" name="rw2"><br> --}}

                            <div class="col-sm">
                                    <input style="width:700px;" placeholder="กรอกวัตถุดิบของคุณ" id="rw2" type="text" class="form-control @error('rw2') is-invalid @enderror" name="rw2" value="{{ old('rw2') }}" autocomplete="rw2" autofocus>

                                    @error('rw2')
                                        <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{"กรุณากรอกวัตถุดิบของคุณให้ถูกต้อง"}}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <br>

                        <div>
                                {{-- <input type="text" class="form-control " placeholder="กรอกวัตถุดิบของคุณ" name="rw3"><br> --}}

                                <div class="col-sm">
                                        <input style="width:700px;" placeholder="กรอกวัตถุดิบของคุณ"  id="rw3" type="text" class="form-control @error('rw3') is-invalid @enderror" name="rw3" value="{{ old('rw3') }}" autocomplete="rw3" autofocus>

                                        @error('rw3')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{"กรุณากรอกวัตถุดิบของคุณให้ถูกต้อง"}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>

                            <br>

                            <div>
                                    {{--  <input type="text" class="form-control " placeholder="กรอกวัตถุดิบของคุณ" name="rw4"><br> --}}

                                    <div class="col-sm">
                                            <input style="width:700px;" placeholder="กรอกวัตถุดิบของคุณ" id="rw4" type="text" class="form-control @error('rw4') is-invalid @enderror" name="rw4" value="{{ old('rw4') }}" autocomplete="rw4" autofocus>

                                            @error('rw4')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{"กรุณากรอกวัตถุดิบของคุณให้ถูกต้อง"}}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>




                                <br>






                        <!-- //แนะนำด้วย FaceCook💡 -->
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <button type="submit" class="btn btn-success" >ค้นหาสูตรอาหารจากวัตถุดิบ</button>
                                </div>
                                <div class="col-sm">

                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>



        </div>
    </div>
</div>
@endsection
