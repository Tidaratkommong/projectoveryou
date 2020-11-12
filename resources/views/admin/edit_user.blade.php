@extends('layouts.app')

@section('content')


<div class="container">
    <a type="submit" name="submit" class="btn btn-danger " value="BACK"  href="{{url('admin/index_user')}}" />BACK</a>
    @csrf
    <br />

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('จัดการข้อมูล') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.update') }}">
                        @csrf

                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ใช้งาน :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user['name'] }}" autocomplete="name" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                       
                        
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('ที่อยู่ :') }}</label>

                            <div class="col-md-6">
                                <textarea id="address" type="text" class="form-control  @error('address') is-invalid @enderror" name="address"  rows="3" autocomplete="address" autofocus/>{{$user['address'] }}</textarea>
                               
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('เบอร์โทร :') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{$user['telephone'] }}" autocomplete="telephone" autofocus>

                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail :') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user['email'] }}" autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    {{ __('อัพเดทโปรไฟล์') }}
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