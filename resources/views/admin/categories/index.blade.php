@extends('admin.layouts.template')
@section('content')
@yield('styles')


<div class="container  d-flex flex-column-reverse " >
   <table class="table table-hover  table-bordered ">
       <thead>
    <tr class=" table table-dark">
      <th>ID</th>
      <th>Name</th>
      <th>Image</th>
      <th>Created</th>
      <th >Actions</th>
    </tr>
  </thead>
       <tbody >
    @foreach($categories as $category)
       <tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->title }}</td>
    <td><img src="{{ asset('uploads/'.$category->image) }}" width="80" alt=""></td>
    <td>{{ $category->created_at }}</td>

            <td>
               <a  class="btn btn-primary btn-sm " href="{{route('categories.edit',$category->id)}}" >
                   <i class="fas fa-edit"> </i>
               </a>
                <form  class="d-inline" action="{{route('categories.destroy',$category->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
        </form>

        </td>
       </tr>
    @endforeach
    </tbody>

</div>
</table>
@stop
