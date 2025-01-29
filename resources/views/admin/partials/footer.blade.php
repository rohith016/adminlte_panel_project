<footer class="app-footer">
    <!--begin::To the end-->
    {{-- <div class="float-end d-none d-sm-inline">Anything you want</div> --}}
    <!--end::To the end-->
    <!--begin::Copyright-->
    <strong>
        Copyright &copy; {{ config('adminlte.panel_copyright_year') }}&nbsp;
      <a href="{{ config('adminlte.panel_url', 'http://127.0.0.1:8000/') }}" class="text-decoration-none">{{ config('adminlte.panel_name', 'Laravel') }}</a>.
    </strong>
    {{ __('All rights reserved.') }}
    <!--end::Copyright-->
</footer>
