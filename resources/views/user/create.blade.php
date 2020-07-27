@extends('layout.master')
@section('title', 'จัดการฐานข้อมูล')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <br>
                <h3>เพิ่มข้อมูลผู้ใช้ระบบ</h3> <br>
                <form action="{{url('user')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="fname" class="form-control" placeholder="ป้อนชื่อ">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" class="form-control" placeholder="ป้อนนามสกุล">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="บันทึก" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection