<x-layout>

    <div class="container-fluid">
        <div class="row text-center">
            <h2>Inserisci il tuo articolo:</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8" >
                
              <x-display-errors/>
                
                <form method="POST"  action="{{route('article.submit')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo: </label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Titolo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione: </label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo: </label>
                    <input type="text" name="price" class="form-control" id="exampleFormControlInput2" placeholder="Prezzo">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Inserisci immagine </label>
                    <input type="file" name="img" class="form-control" id="img" placeholder="Prezzo">
                </div>


                <button type="submit" class="btn btn-primary"> Inserisci il tuo articolo</button>
                </form>
            </div>
        </div>
    </div>
  

</x-layout>

