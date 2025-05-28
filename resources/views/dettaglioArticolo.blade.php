<x-layout>


  <section class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-12 text-center text-white my-5">
      <h2>{{$articolo['titolo']}}</h2>
    </div>

    <div class="col-6">

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{$articolo['img']}}" class="d-block w-100" alt="...">
    
             </div>
    </div>

    <div class="col-6 ">

    <p  class="text-white ">{{$articolo['descrizione']}}</p>
    </div>
</div>
    </section>
    
</x-layout>