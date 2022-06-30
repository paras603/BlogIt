@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Blog Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Published Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">lorem ipsym</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href="view"><button type="submit" class="btn btn-secondary">View</button></a>
                        <a href="edit"><button type="submit" class="btn btn-primary">Edit</button></a>
                        <a href=""><button type="submit" class="btn btn-danger">Delete</button></a>
                    </td>
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection