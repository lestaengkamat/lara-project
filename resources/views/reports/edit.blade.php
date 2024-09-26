@extends ('layouts.app')
@section ('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="p-2 mb-0 bg-primary text-white"><h4><b>Edit Report Form</b><h4></div>
                <div class="card-body">

<form action="/reports/{{$report->id}}" method="POST">
    @csrf
    @method('put')
    <b>Title : </b><input type="text" name ="title" value="{{$report->title}}" class="form-control"><br>
    <b>Description :</b> <textarea name ="description" class="form-control">{{$report->description}} </textarea><br>
    <b>Priority :</b> <select name= "priority" value="{{$report->priority}}" class="form-control">
                <option value ="1">1</option>
                <option value ="2">2</option>
                <option value ="3">3</option>
                </select><br>
                <br>
            <input type = "submit" value="Update" class="btn btn-primary">
            <input type = "reset" value="Cancel" class="btn btn-secondary"><br>

</form>
@endsection