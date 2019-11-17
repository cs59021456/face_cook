@extends('layouts.app')


<style>
    html,
    body {
        background-image: url(https://scontent.fbkk5-1.fna.fbcdn.net/v/t1.0-9/74179369_758655547894665_8841757088729268224_o.jpg?_nc_cat=109&_nc_eui2=AeGRPaoHLerr3sXsVGzECstJyrtFOUBC_-ijEU9MX175oxfcXJAEoRJz5k5dd7QMsP8hEaTEvOSv5JNrjdQhUa4fJGQ_b2Eh_n6TZOCtIb8DhQ&_nc_oc=AQm8ISdTDuUkUj0f7rTaMYOSXi-ri4eYtTOg_rW7GpknVFB2eFc0-YMuGvknwSGr4Sg&_nc_ht=scontent.fbkk5-1.fna&oh=e93c56e4fb86b11ac4bf3425c3ef438f&oe=5E546A61);
    }
</style>

@section('content')
<div class="container"><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">


            <!-- ช่องค้นหาสูตรอาหาร -->


                <div class="main">
                <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                <img class="w3-image" src="img/bf01.gif" alt="Hamburger Catering">
                                </div>
                                <div class="col-sm">

                                </div>
                            </div>

                            <div class="container">

                                    <div class="row justify-content-center">
                                            <div class="col-4">
                                                    <a class="btn btn-info" href="/search_rw">ค้นหาสูตรอาหารจากวัตถุดิบ</a>
                                            </div>


                                            <div class="col-4">
                                                    <a class="btn btn-info" href="/refme/{{Auth::user()->id}}">ค้นหาสูตรอาหารจากวัตถุดิบในตู้เย็น</a>
                                            </div>
                                          </div>









        </div>
    </div>

        </div>
    </div>
</div>
@endsection
