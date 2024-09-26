@extends ('layouts.app')
@section ('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="p-2 mb-0 bg-primary text-white"><h4><b>Report Details</b><h4></div>
                    <div class="card-body">

<dl class = "row">
        <dt class="col-sm-3">Report Title </dt> <dd class="col-sm-9">: {{$reports->title}} </dd><br>
        <dt class="col-sm-3">Report Description </dt> <dd class="col-sm-9">: {{$reports->description}} </dd><br>
        <dt class="col-sm-3">Report Priority </dt> <dd class="col-sm-9">: {{$reports->priority}} </dd><br>
        <br>
        <br>
        <small>Created at: {{$reports->created_at}}</small> <br>
        <small>Updated at: {{$reports->updated_at}}</small> <br>

</dl>
@endsection