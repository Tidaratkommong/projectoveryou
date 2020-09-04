@extends('layouts.app')

@section('content')
<div class="container">
    <br />
    <br />

    <a type="submit" class="btn btn-outline-secondary" href="{{url('home')}}">ย้อนกลับ</a>
    @csrf
    <br />
    <h1>{{ $user['username']}}</h1>
    <h>'''''''</h>
</div>
@endsection

<script style="text/javascript">
    document.title = "{{ $user['username']}} profile";
</script>