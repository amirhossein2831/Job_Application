@if(Session::get('success'))
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6" >
                <div class="alert alert-success alert-dismissible fade show" role="alert"  style="background: #66bb6a">
                    {{ \Illuminate\Support\Facades\Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif
