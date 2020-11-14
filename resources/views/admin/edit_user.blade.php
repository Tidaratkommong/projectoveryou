@extends('layouts.app')

@section('content')


<div class="container">
    <a type="submit" name="submit" class="btn btn-danger " value="BACK"  href="{{url('admin/index_user')}}" />BACK</a>
    @csrf
    <br />

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('จัดการข้อมูล') }}</div>
                <div class="card-body">
                <form action="{{route('admin.update',$users->id)}}" method="post">
                      @csrf
                     @method('PUT')

                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif
                       
                       
                        
                       

                        
                       

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection