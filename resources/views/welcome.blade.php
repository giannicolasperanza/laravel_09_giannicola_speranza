<x-layout>
@if (session()->has('successMessage'))
    <div class="alert alert-success"> 
        {{session('successMessage')}}

    </div>

    
@endif
  

</x-layout>

