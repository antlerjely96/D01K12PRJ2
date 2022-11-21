@extends('index')
@section('content')
    <form method="post" action="{{ route('classrooms.update', $classrooms->id) }}">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="hidden" value="{{ $classrooms->id }}" name="id">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{$classrooms->name}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#staff_manage').addClass('active');
            $('#staff').addClass('menu-open');
            $('#staff_create').addClass('active');
        });
    </script>
@endpush
