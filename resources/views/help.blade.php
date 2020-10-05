@extends('layouts.navbar')

@section('content')


<div class="container">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <h3 class="nav-link">การช่วยเหลือ</h3>
        </li>
    </ul>
    <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
        <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
    </div>
    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">

    </div>


</div>









@endsection