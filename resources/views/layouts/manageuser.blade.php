@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="=row">
        <div class="col-md-6">
            <table class="table table-striped table-hover">
                <tr>
                    <th>Username</th>
                    <th>Fest name</th>
                    <th>Last name</th>
                    <th>Phone</th>
                    <th>E-Mail Address</th>
                    <th>Time</th>
                </tr>
                @foreach()
                <tr>
                    <td> {{ Auth::user()->username }}</td>
                    <td> {{ Auth::user()->username }}</td>
                    <td> {{ Auth::user()->username }}</td>
                    <td> {{ Auth::user()->username }}</td>
                    <td> {{ Auth::user()->username }}</td>
                    <td></td>
                    
                </tr>
                @endforeach
            </table>
        </div>

    </div>

</div>