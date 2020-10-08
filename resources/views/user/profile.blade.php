@extends('layouts.test')

@section('content')

<br />
<br />
<div class="container">
    <a type="submit" class="btn btn-outline-secondary" href="{{url('home')}}">ย้อนกลับ</a>
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ดูโปรไฟล์') }}</div>

                <div class="card-body">
                    <h1>{{ $user['name']}}</h1>
                    <h>{{ $user['email']}}</h>

                </div>
            </div>
        </div>
    </div>
</div>




@endsection