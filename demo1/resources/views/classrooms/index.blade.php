@extends('index')
@section('content')
    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
                <tr>
                    <td>{{ $classroom->id }}</td>
                    <td>{{ $classroom->name }}</td>
                    <td>
                        <a href="{{ route('students.index') }}">
                            Students List
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('classrooms.edit', $classroom->id) }}">
                            Edit
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" value="{{ $classroom->id }}" name="id">
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>id</th>
            <th>name</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </tfoot>
    </table>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#staff_manage').addClass('active');
            $('#staff').addClass('menu-open');
            $('#staff_list').addClass('active');
        });
    </script>
@endpush
