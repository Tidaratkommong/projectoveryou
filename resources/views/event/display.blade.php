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
    <a type="submit" name="submit" class="btn btn-danger" value="BACK" href="{{url('event')}}" />BACK</a>
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead">
            <br/>
            <br/>
                <tr class="warning">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Color</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Delete</th>
                </tr>
            </thead>
            @foreach($events as $row)
            <tbody>
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->color}}</td>
                    <td>{{$row->start_date}}</td>
                    <td>{{$row->end_date}}</td>

                    <th>

                    <form action="{{route('event.destroy',$row->id)}}" method="post">
                            @csrf @method('DELETE')

                            <input type="hidden" name="_method" value="DELETE"> 
                            <button type="submit" class="btn btn-danger">  DELETE</button>
                            <!--<input type="submit" value="ลบ"  class="btn btn-danger deleteForm">-->
                        </form>
                        
                </tr>
            </tbody>
            @endforeach
        </table>
    
</div>
</body>

</html>
    


@endsection