@extends('layouts.app')

@section('content')
<br />
<div class="container">
<a type="submit" name="submit" class="btn btn-danger " value="BACK"  href="{{url('admin/index_user')}}" />BACK</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center ">
                <div class="card-header text-dark"><h4>{{ __(' เพิ่มสมาชิก ') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{route('admin.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __(' ชื่อผู้ใช้งาน :') }}</label>

                            <div class="col-md-6">
                                <input id="name" placeholder=" ภาษาไทยหรืออังกฤษ" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('ที่อยู่ :') }}</label>

                            <div class="col-md-6">
                            <textarea id="address" type="text" class="form-control  @error('address') is-invalid @enderror" name="address"  rows="3" autocomplete="address" autofocus/>{{ old('address') }}</textarea>
                               <!-- <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="" required autocomplete="address" autofocus>-->

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('เบอร์โทรศัพท์ :') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" placeholder=" เช่น 091 999 9999 " type="tel" pattern=".+@gmail.com" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" 
                                required autocomplete="telephone" autofocus >
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail :') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder=" เช่น abc@gmail.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน :') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder=" อย่างน้อย 8 ตัว " type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่าน :') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder=" ยืนยันรหัสผ่าน " type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('เพิ่มสมาชิก') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
