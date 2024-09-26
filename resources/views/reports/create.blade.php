@extends ('layouts.app')
@section ('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="p-2 mb-0 bg-primary text-white"><h4><b>New Report Form</b><h4></div>
                <div class="card-body">
          
<form action="/reports" method="POST" class="form-group">
    @csrf
    <b>Title :</b> <input type="text" placeholder="Please insert report title" name="title" class="form-control"><br>
    @if ($errors->has('title'))<span>{{$errors->first('title')}} @endif</span><br>
    <b>Description :</b> <textarea name="description" class="form-control"></textarea><br>
    @if ($errors->has('description'))<span>{{$errors->first('description')}} @endif</span><br>
    <b>Priority : </b> <select name= "priority" class="form-control">
                <option value ="1">1</option>
                <option value ="2">2</option>
                <option value ="3">3</option>
                </select><br>
            <input type = "submit" value="Submit" class="btn btn-primary">
            <input type = "submit" value="Cancel" class="btn btn-secondary"><br>

</form>
@endsection
