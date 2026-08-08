@extends('admin.layouts.app')

@section('title','Upload Image')
@section('page-title','Upload Image')

@section('content')

<div class="card shadow-sm">

    <div class="card-header">

        <h5 class="mb-0">
            Inquiry List
        </h5>

    </div>

    <div class="card-body">

        <div class="table table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $feed)
                    <tr>
                        <td>{{$feed->id}}</td>
                        <td>{{$feed->name}}</td>
                        <td>{{$feed->email}}</td>
                        <td>{{$feed->phone}}</td>
                        <td>{{$feed->message}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
