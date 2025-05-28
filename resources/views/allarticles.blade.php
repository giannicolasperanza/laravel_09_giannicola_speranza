<x-layout>

<section class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-12 text-center text-white my-5">
      <h2>Tutti gli articoli</h2>
    </div>


    @foreach ($articoli as $articolo)

    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-4">
<x-card
      titArticolo="{{$articolo['titolo']}}"
      desArticolo="{{$articolo['descrizione']}}"
      idArticolo="{{$articolo['id']}}"
      imgArticolo="{{$articolo['img']}}"

>

       </x-card>   
       
       
       
       
        
      </div>

    @endforeach

</div>

</section>
    

</x-layout>