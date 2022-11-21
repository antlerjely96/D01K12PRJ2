@extends('index')
@section('content')
    <form method="post" action="{{ route('students.update', $students->id) }}">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{$students->name}}">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Birthday</label>
                <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="birthday" value="{{$students->date_of_birth}}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="{{$students->address}}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{$students->phone}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{$students->email}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{$students->password}}">
            </div>
            <div class="form-group">
                <label for="password">Class</label>
                <select name="classrooms">
                    <option value="0"> - Select -</option>
                    @foreach($classrooms as $classroom)
                        <option value="{{ $classroom->id }}"
                            @if($classroom->id == $students->id_classroom)
                                {{ 'selected' }}
                            @endif
                        > {{ $classroom->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
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
