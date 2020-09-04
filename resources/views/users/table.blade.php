<div class="table-responsive">
    <table class="userTable" id="user-table">
        <thead>
            <tr>
                <th>Név</th>
                <th>Email</th>
                <th>Akció</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{!! $user->name !!}</td>
                <td>{!! $user->email !!}</td>
                <td>
                  {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                  <div class='btn-group'>
                      <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                      {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['user' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Törli a tételt?')"]) !!}
                  </div>
                  {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>