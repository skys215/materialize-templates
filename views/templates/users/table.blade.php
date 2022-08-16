<table class="table table-vcenter card-table table-striped" id="users-table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td style="width: 250px;">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <a href="{{ route('users.show', [$user->id]) }}"
                           class='btn blue'>
                                View
                        </a>
                        <a href="{{ route('users.edit', [$user->id]) }}"
                           class='btn green'>
                                Edit
                        </a>
                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn red', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('materialize-templates::common.paginate', ['records' => $users])
