@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')

@include('admin.partials.breadcrumbs', ['title' => '', 'path' => ["Users", "Create"]])

<div class="app-content">
    <div class="container-fluid">

        <div class="col-md-12">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header"><div class="card-title">{{ __("Create User") }} </div></div>
                @include('admin.pages.users.create-form')
            </div>
        </div>

    </div>
</div>


@endsection
