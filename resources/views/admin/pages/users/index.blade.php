@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')

@include('admin.partials.breadcrumbs', ['title' => 'Users', 'path' => ["Users"]])

<div class="app-content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">

                <div class="mb-3">
                    <a href="{{ route('users.create') }}" class="btn btn-primary">{{ __("Create User") }}</a>
                </div>
                <div class="mb-2">
                    <form action="{{ route('users.index') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="search" id="search" class="form-control" value="{{request()->query('search')}}" placeholder="Search Users">
                            <button class="btn btn-info">{{ __("Search") }}</button>
                            <a class="btn btn-default" href="{{ route('users.index') }}" >{{ __("Clear") }}</a>
                        </div>
                    </form>
                </div>
                <div class="mb-3">
                    @include('admin.pages.users.users-table')
                </div>

            </div>

        </div>

    </div>
</div>


@endsection
