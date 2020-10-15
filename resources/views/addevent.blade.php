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
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background:#2e6da4; color:white;">
                        ADD Event To Calender
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{action('EventController@store')}}">

                            {{csrf_field() }}
                            <label for="">Enter name of the Event</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter The name" required/><br /> <br />

                            <label for="">Choose a Color</label>
                            <input type="color" class="form-control" name="color" placeholder="Choose a color" /><br /> <br />

                            <label for="">Enter Start Date of the Event</label>
                            <input type="datetime-local" class="form-control" name="start_date" class="date" placeholder="Enter The start date" required/><br /> <br />

                            <label for="">Enter End Date of the Event</label>
                            <input type="datetime-local" class="form-control" name="end_date" class="date" placeholder="Enter The end date" required/><br /> <br />

                            <input type="submit" name="submit" class="btn btn-primary" value="add Event data" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

@endsection