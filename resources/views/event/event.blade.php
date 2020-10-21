@extends('layouts.calender')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        /* ... */
    </style>
</head>

<body>
    <!-- calender -->
    <div class="container">

        <div class="row">
        <div class="card-body ">
          <a  href="addeventurl" class="btn btn-success "> ADD Events</a>
          <a  href="/displaydata" class="btn btn-primary "> Edit Events</a>
           <!-- <a  href="/deleteeventurl" class="btn btn-danger"> Delete Events</a>-->
        </div>
        </div>
        @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif

                    @if($errors->all())
                    <div class="alert alert-success">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
        <br />
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background:#2e6da4; color:white;">
                        Event Calender [Full-Calender]
                    </div>

                    <div class="panel-body" style="color:black;">
                        {!! $calendar->calendar() !!}
                        {!! $calendar->script() !!}

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>

@endsection