@extends('layout.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card">
        <h3 class="card-header">
            {{__($viewData['title']) }}
        </h3>
        <div class="card-body">
            <p>
                Welcome !!!
            </p>
        </div>
    </div>
@endsection
