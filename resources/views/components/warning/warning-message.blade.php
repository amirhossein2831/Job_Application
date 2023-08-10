@if(Session::get('warning'))
    <div class="container mt-5" >
        <div class="row justify-content-center">
            <div class="col-md-6" >
                <div class="alert alert-warning alert-dismissible fade show" role="alert"  style="background: burlywood;">
                    {{ \Illuminate\Support\Facades\Session::get('warning') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif
