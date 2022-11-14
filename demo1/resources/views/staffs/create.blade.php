@extends('index')
@section('content')
<form method="post" action="{{ route('staffs.store') }}">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="date_of_birth">Birthday</label>
            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="birthday">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-radio">
            <label>Gender</label>
            <input type="radio" class="form-radio-input" id="gender_male" value="1" name="gender" checked>
            <label class="form-check-label" for="gender_male">Male</label>
            <input type="radio" class="form-radio-input" id="gender_female" value="0" name="gender">
            <label class="form-check-label" for="gender_male">Female</label>
            <input type="radio" class="form-radio-input" id="gender_other" value="2" name="gender">
            <label class="form-check-label" for="gender_other">Other</label>
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
