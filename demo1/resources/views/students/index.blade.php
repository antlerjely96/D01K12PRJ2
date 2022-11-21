@extends('index')
@section('content')
    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>phone</th>
            <th>email</th>
            <th>Class</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->classrooms_name }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">
                            Edit
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="post">
                            @csrf
                            @method('DELETE')
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
            <th>Birthday</th>
            <th>Address</th>
            <th>phone</th>
            <th>email</th>
            <th>Class</th>
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
