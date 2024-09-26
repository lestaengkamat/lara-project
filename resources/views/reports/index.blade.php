@extends('layouts.app')
@section('content')

@if(count($reports)>0)

<table class="table table-hover text-center">
    <thead class="table-light">
        <th>Report Title</th>
        <th>Report Description</th>
        <th>Report Priority</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody class="table-group-divider">
            @foreach($reports as $report)
            <tr>
                <td class="align-middle">{{$report->title}}</td>
                <td class="align-middle">{{$report->description}}</td>
                <td class="align-middle">{{$report->priority}}</td>
                <td><a href="/reports/{{$report->id}}" class="btn btn-primary">Details</a></td>
                <td><a href="/reports/{{$report->id}}/edit" class="btn btn-warning">Edit</a></td>
                <td><form action="/reports/{{$report->id}}" method="POST">@csrf @method('DELETE')<input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')"></form></td>
            </tr>
            @endforeach
    </tbody>
</table>
@else
No Data    
@endif
@endsection
