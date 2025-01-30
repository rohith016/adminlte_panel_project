<table class="table table-bordered">
    <thead>
        <tr>
        <th style="width: 10px">#</th>
        <th>{{ __("Name") }}</th>
        <th>{{ __("Email") }}</th>
        <th>{{ __("Action") }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr class="align-middle">
        <td>{{ $loop -> iteration }}</td>
        <td>{{ $user -> name }}</td>
        <td>{{ $user -> email }}</td>
        <td>
            <div class="row">
                <div class="col-md-2">
                    <a class="btn btn-link" href="{{ route('users.edit', $user) }}">{{ __("Edit") }}</a>
                </div>
                <div class="col-md-2">
                    <form action="{{ route("users.destroy", $user) }}" method="post" class="inline"
                    onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">{{ __("Delete") }}</button>
                    </form>
                </div>
            </div>
        </td>
        </tr>
        @endforeach

    </tbody>
</table>
{{$users -> links()}}


