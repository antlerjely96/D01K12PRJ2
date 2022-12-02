<form method="post" action="{{ route('staffs.update', $staff->id) }}">
    @method('PUT')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ $staff->name }}">
        </div>
        <div class="form-group">
            <label for="date_of_birth">Birthday</label>
            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="birthday" value="{{ $staff->date_of_birth }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="{{ $staff->address }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{ $staff->phone }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ $staff->email }}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{ $staff->password }}">
        </div>
        <div class="form-radio">
            <label>Gender</label>
            <input type="radio" class="form-radio-input" id="gender_male" value="1" name="gender" checked>
            <label class="form-check-label" for="gender_male">Male</label>
            <input type="radio" class="form-radio-input" id="gender_female" value="0" name="gender"
                @if( $staff->gender == 0)
                    checked
                @endif
            >
            <label class="form-check-label" for="gender_male">Female</label>
            <input type="radio" class="form-radio-input" id="gender_other" value="2" name="gender"
               @if( $staff->gender == 2)
                   checked
                @endif
            >
            <label class="form-check-label" for="gender_other">Other</label>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
