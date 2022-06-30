@extends('layouts.dashboard')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-end dashboard-btns">
                <a href="#"><button type="submit" class="btn btn-secondary">Back</button></a>
                <a href="edit"><button type="submit" class="btn btn-primary">Edit</button></a>
                <a href=""><button type="submit" class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
</div>
@endsection