<form method="post" action="{{ route('users.store') }}" class="">
    @csrf
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"/>
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"/>
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input type="password" class="form-control" name="password" id="password" value=""/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value=""/>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __("Create") }}</button>
        <a href="{{ route('users.index') }}" class="btn btn-default">{{ __("Back to Users") }}</a>
    </div>
</form>

