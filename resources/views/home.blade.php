@extends('template')

@section('title', 'GSLC - 2440062086 - Karin Northus | Home Page')

@section('content')

<div class="container-fluid" style="background-color:rgb(205, 243, 203)">
    <div class="container">
        <h5 class="pt-3">Karin Northus - 2440062086</h5>
        <h1 class="text-center pb-3">Welcome to Foodie !</h1>

        <div id="carouselExampleDark" class="carousel carousel-dark slide mx-auto" data-bs-ride="carousel" style="width: 70%;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" >
                <div class="carousel-item active">
                  <img src="https://cdn.winsightmedia.com/platform/files/public/2018-10/background/600x450/appetizers_1539034007.jpg?VersionId=9surJCc.Y7urbArvEsdsXsT7._WWvBRh" class="d-block w-100" alt="..." height="400px">
                  <div class="carousel-caption d-none d-md-block ">
                    <h5 class= "py-2 text-uppercase fst-italic" style="color: black; background-color:rgba(255, 255, 255, 0.7);">Appetizer</h5>
                    <p class= "py-2" style="color: black; background-color:rgba(255, 255, 255, 0.7);">A small amount of food eaten before a meal served cold or hot</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://cdn-cas.orami.co.id/parenting/images/main_course_example.width-1000.jpg" class="d-block w-100" alt="..." height="400px">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class= "py-2 text-uppercase fst-italic" style="color: black; background-color:rgba(255, 255, 255, 0.7);">Main Course</h5>
                    <p class= "py-2" style="color: black; background-color:rgba(255, 255, 255, 0.7);">The largest or most important part of a meal in which there are different parts served separately.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://cdn.hswstatic.com/gif/desserts-update.jpg" class="d-block w-100" alt="..."  height="400px">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class= "py-2 text-uppercase fst-italic" style="color: black; background-color:rgba(255, 255, 255, 0.7);">Dessert</h5>
                    <p class= "py-2" style="color: black; background-color:rgba(255, 255, 255, 0.7);">Whether you crave sweet, savory, decadent or healthy, we have hundreds of top-rated dessert recipes to satisfy your taste buds</p>
                  </div>
                </div>
              </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


        <h2 class="text-center mt-5 pb-2">- Our Food Menu -</h2>
        <div class="row">
            @foreach ($items as $item )
                <div class="col-md-4">
                    <div class="card mb-5">
                        <img src={{$item->image}} class="card-img-top shadow p-3" alt="..." width="100" height="250">
                        <div class="card-body" style="height: 22rem; width: auto;">
                            <h5 class="card-title text-center text-uppercase fw-bolder fst-italic text-decoration-underline pt-2" style="height: 3rem; width: auto;">{{$item->name}}</h5>
                            <p class="card-text pt-3" style="height: 9rem; width: auto;">{{$item->description}}</p>
                            <p class="card-price fw-semibold" style="height: 2rem; width: auto;" >IDR {{$item->price}}</p>
                            @if ($item->type === "Main-Course")
                                <span class="badge text-bg-success px-5 py-2 mb-4 position-absolute bottom-0 start-50 translate-middle-x">{{$item->type}}</span>
                            @elseif ($item->type === "Appetizer")
                                <span class="badge text-bg-warning px-5 py-2 mb-4 position-absolute bottom-0 start-50 translate-middle-x">{{$item->type}}</span>
                            @else
                                <span class="badge text-bg-danger px-5 py-2 mb-4 position-absolute bottom-0 start-50 translate-middle-x">{{$item->type}}</span>
                            @endif

                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
</div>


@endsection
