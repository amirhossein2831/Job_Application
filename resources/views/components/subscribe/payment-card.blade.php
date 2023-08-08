<div class="col-md-4" >
    <div class="card" style="width: 18rem;border-radius: 20px">
        <img src="{{asset('resources/image/payment/'.$src)}}" class="card-img-top" alt="..." style="border-radius: 20px">
        <div class="card-body" >
            <h5 class="card-title">{{$label}} ----- <span class="amount-payment">{{$price}}</span></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body text-center">
            <a href="{{$link}}" class="card-link">
                <button class="btn btn-success">Pay</button>
            </a>
        </div>
    </div>
</div>
