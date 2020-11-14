@extends('layouts.app')

@section('content')


<div class="container">
<br />
    <a type="submit" name="submit" class="btn btn-danger " value="BACK"  href="{{url('admin/index_user')}}" />BACK</a>
    @csrf
    <br />

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-dark"><h4>{{ __('จัดการข้อมูล') }}</h4></div>
                <div class="card-body">

                <form action="{{route('admin.update',$users->id)}}" method="post">
                      @csrf
                     @method('PUT')

                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ใช้งาน :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$users['name'] }}" autocomplete="name" autofocus>

                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('ที่อยู่ :') }}</label>

                            <div class="col-md-6">
                                <textarea id="address" type="text" class="form-control" name="address"  rows="3" autocomplete="address" autofocus/>{{$users['address'] }}</textarea>      
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('เบอร์โทร :') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{$users['telephone'] }}" autocomplete="telephone" autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{$users['email'] }}" autocomplete="email">

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
                                    {{ __('แก้ไขข้อมูล') }}
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