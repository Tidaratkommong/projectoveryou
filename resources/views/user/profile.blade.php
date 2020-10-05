@extends('layouts.test')

@section('content')
<div class="container">
    <br />
    <br />

    <a type="submit" class="btn btn-outline-secondary" href="{{url('home')}}">ย้อนกลับ</a>
    @csrf
    <br />
    <h1>{{ $user['name']}}</h1>
    <h>{{ $user['email']}}</h>
</div>
@endsection

