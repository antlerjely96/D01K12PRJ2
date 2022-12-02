<form method="post" action="{{ route('staffs.store') }}">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
            <span>
                @if($errors->any('name'))
                    {{ $errors->first('name') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Birthday</label>
            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="birthday">
            <span>
                @if($errors->any('date_of_birth'))
                    {{ $errors->first('date_of_birth') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Address">
            <span>
                @if($errors->any('address'))
                    {{ $errors->first('address') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
            <span>
                @if($errors->any('phone'))
                    {{ $errors->first('phone') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            <span>
                @if($errors->any('email'))
                    {{ $errors->first('email') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <span>
                @if($errors->any('password'))
                    {{ $errors->first('password') }}
                @endif
            </span>
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
