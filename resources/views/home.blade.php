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

            <form action="menu">


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


                    <!-- Actual search box -->
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control " placeholder="🔎 กรอกวัตถุดิบของคุณเพื่อค้นหาสูตรอาหาร" name="search"><br>
                        <!-- //แนะนำด้วย FaceCook💡 -->
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <button type="submit" class="btn btn-light">แนะนำโดย FaceCook 💡</button>
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
