 <div class="card bg-dark text-white h-100">

  @if (!$imgArticolo)
  <a href="" target="_blank" rel="noopener noreferrer">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="">
          </a>    
@else
          <a href="" target="_blank" rel="noopener noreferrer">
            <img src="{{Storage::url($imgArticolo)}}" class="card-img-top" alt="">
          </a>
  @endif
          <div class="card-body">
            <h4 class="card-text">{{$titArticolo}}</h4>          
            <p class="card-text">{{$desArticolo}}</p>
            <a href="#" class="btn btn-danger">Scopri di più</a>
          </div>
        </div>