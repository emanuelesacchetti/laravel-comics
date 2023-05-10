<main class="bg-secondary">
    <div class="container">
        <div class="row">
            @foreach($comics as $pippo)
                <div class="col-2">
                    <div class="card">
                        <img src="{{$pippo['thumb']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$pippo['title']}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>