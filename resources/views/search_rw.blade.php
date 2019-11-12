@extends('layouts.app')


<style>
    html,
    body {
        background-image: url(https://www.azamara.com/sites/default/files/heros/med-food-hero.jpg);
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

                                </div>
                            </div>


                    <!-- Actual search box -->
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control " placeholder=" " name="rw1"><br>
                        <input type="text" class="form-control " placeholder=" " name="rw2"><br>
                        <input type="text" class="form-control " placeholder=" " name="rw3"><br>
                        <input type="text" class="form-control " placeholder=" " name="rw4"><br>


                        <!-- //แนะนำด้วย FaceCook💡 -->
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <button type="submit" class="btn btn-light" >ค้นหาจากวัตถุดิบ</button>
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
