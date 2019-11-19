@extends('layouts.app')
<style>
    html, body {
        background-image: url(https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/75246662_756779401415613_8812310891732140032_o.jpg?_nc_cat=106&_nc_oc=AQm5UTmaCAiUQPwp-EI1IeYA7mnWs3jicZZE0TYaaZeKs1oE8Q0npPXNAIBYXs49teU&_nc_ht=scontent.fbkk5-8.fna&oh=dffef08eb832eee9c42284d51ab0ec75&oe=5E180EF7);
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('เข้าสู่ระบบ') }}</div>


                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}
                      @if(session()->has('login_error'))
                        <div class="alert alert-success">
                          {{-- {{ session()->get('login_error') }} --}}
                          <strong>{{ "กรุณากรอกีเมลและรหัสผ่านให้ตรงกัน" }}</strong>
                        </div>
                      @endif




                      <div class="form-group row{{ $errors->has('identity') ? ' has-error' : '' }}">
                        <label for="identity" class="col-md-4 col-form-label text-md-right">ชื่อผู้ใช้</label>

                        <div class="col-md-6">
                          <input id="identity" type="identity" class="form-control" name="identity"
                                 value="{{ old('identity') }}" autofocus>

                          @if ($errors->has('identity'))
                            <span class="help-block text-danger">
                                                <strong>{{ $errors->first('identity') }}</strong>
                                            </span>
                          @endif
                        </div>
                      </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback text-danger" role="alert" >
                                            @foreach ($errors->all() as $error)

                                            @endforeach{{ "กรุณากรอกรหัสผ่านให้ถูกต้อง" }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('จำฉันไว้') }}
                                    </label>

                                    {{-- @if (Auth:name(['ชื่อผู้ใช้' => $name, 'password' => $password], $remember)) {
                                        // The user is being remembered...
                                    }
                                    @endif --}}
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('เข้าสู่ระบบ') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('ลืมรหัสผ่าน?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
