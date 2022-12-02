<a href="{{ route('staffs.create') }}">Add staff</a>
<table border="1px" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Gender</th>
        <th>phone</th>
        <th>email</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($staffs as $staff)
        <tr>
            <td>{{ $staff->id }}</td>
            <td>{{ $staff->name }}</td>
            <td>{{ $staff->date_of_birth }}</td>
            <td>{{ $staff->address }}</td>
            <td>
                @if($staff->gender == 0)
                    {{ 'Female' }}
                @elseif($staff->gender == 1)
                    {{ 'Male' }}
                @else
                    {{ 'Other' }}
                @endif
            </td>
            <td>{{ $staff->phone }}</td>
            <td>{{ $staff->email }}</td>
            <td>
                <a href="{{ route('staffs.edit', $staff->id) }}">
                    Edit
                </a>
            </td>
            <td>
                <form action="{{ route('staffs.destroy', $staff->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
