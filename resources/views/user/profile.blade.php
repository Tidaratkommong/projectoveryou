@extends('layouts.navbar')

@section('content')
<br/>
<div class="container">
    <a type="submit" class="btn btn-danger" value="BACK" href="{{url('home')}}">BACK</a>

    
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ดูโปรไฟล์') }}</div>
                <div class="card-body">
                    <h4>ชื่อ : {{ $user['name']}}</h4>
                    <h4>อีเมล :{{ $user['email']}}</h4>
                    <h4>เบอร์โทร :{{ $user['telephone']}}</h4>
                    <h4>ที่อยู่ :{{ $user['address']}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br/>
    
</ul>



@endsection