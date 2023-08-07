@if(Session::get('success'))
    <div style="margin-left: 280px;margin-top: 100px">
        <div class="alert alert-success" style="width: 400px">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    </div>
@endif
