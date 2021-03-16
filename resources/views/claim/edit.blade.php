@extends('layouts.app')

@section('content')

<br />
    <a type="submit" name="submit" class="btn btn-danger" value="BACK" href="{{url('claim')}}" />BACK</a>
    <br />
    <div class="col-md-12">
        <div class="margin: 20px;">
            <div class="app-title">
                <div>
                    <br>
                    <h4><i class="fa fa-bar-chart"></i> ยืนยันคำขอร้อง(Confirm) </h4>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <form action="{{route('claim.update',$claim->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th class="card-header text-center "> ชื่อ - สกุล </th>
                                            <th class="card-header text-center "> เบอร์โทรศัพท์ </th>
                                            <th class="card-header text-center "> อีเมล </th>
                                            <th class="card-header text-center "> ที่อยู่ </th>
                                            <th class="card-header text-center "> รายละเอียด </th>
                                            <th class="card-header text-center "> สถานะ </th>
                                            <th class="card-header text-center "> วันที่ </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $claim['name'] }}</td>
                                            <td>{{ $claim['telephone'] }}</td>
                                            <td class="text-center">
                                                {{ $claim['email']}}
                                            </td>
                                            <td class="text-center">
                                                {{ $claim['address'] }}
                                            </td>
                                            <td class="text-center">
                                                {{ $claim['detail'] }}
                                            </td>

                                            <td class="text-center">
                                                <select name="status" id="" class="form-control" required>
                                                    <option value="pending" {{(($claim->status=='pending')? 'selected' : '')}}>pending (รอ)</option>
                                                    <option value="processing" {{(($claim->status=='processing')? 'selected' : '')}}>processing (กำลังดำเนินการ)</option>
                                                    <option value="completed" {{(($claim->status=='completed')? 'selected' : '')}}>completed (สำเร็จ)</option>
                                                    <option value="decline" {{(($claim->status=='decline')? 'selected' : '')}}>decline (ยกเลิก)</option>
                                                </select>

                                            </td>

                                            <td>
                                                {{ $claim['created_at']}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection