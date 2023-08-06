@if(Session::get('success'))
    <div class="alert alert-success" style="width: 400px">
        {{\Illuminate\Support\Facades\Session::get('success')}}
    </div>
@endif
