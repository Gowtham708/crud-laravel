@extends('layout')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Simple crud</h2>
</div>
</div>
</div>
<div class="row" align="left">
<div class="pull-right">
<a class="btn btn-success" href="{{ route('student.create') }}">New Student</a>
  </div>
  </div>

  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{ $message}}</p>
   </div>
@endif

<table class="table table-striped">
<tr>
   <th>No</th>
   <th>Name</th>
   <th>Address</th>
   <th width="280px">Action</th>
</tr>

@foreach ($students as $student)
<tr>
   <td>{{ $student->id }}</td>
   <td>{{ $student->name }}</td>
   <td>{{ $student->address }}</td>
   <td>
   <form action="{{ route('student.destroy',$student->id) }}" method="POST">
    <a class="btn btn-primary" href="{{ route('student.edit',$student->id) }}">Edit</a>
    {{csrf_field() }}
    {{ method_field('DELETE') }}
      <input type="submit" class="btn btn-danger delete-user" value="Delete">
      </form>
      </td>
    </tr>
@endforeach

</table>


@endsection