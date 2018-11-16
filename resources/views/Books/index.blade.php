@extends('Books.layout')

@section('content')
<h1 class="text-center">Message Board</h1>

   
     @if(Session::has('succes'))
     <div class= "alert alert-succes">
        {{Session::get('succes')}}        
    </div>
    @endif
    
    {{-- <div class="row"> --}}
        <a href="{{route('books.create')}}" class="btn btn-outline-primary btn-rounded waves-effect" role="button">Plaats bericht</a> 
        <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Bericht</th>
            <th>Deelnemer</th>
            <th>Acties</th>
        </thead>    
        <tbody>
             @foreach($books as $book)
                  <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>
                         <form action="{{route('books.destroy', $book->id)}}" method=POST>
                        <button class="btn btn-danger" type="submit">Verwijder</button>
                         <a href="{{route ('books.edit', $book->id)}}" class="btn btn-primary">Wijzig</a>     
                        {{-- <a href="#" class="btn btn-info">Show</a> --}}
                        @csrf
                        @method('DELETE')    

                         </form>  
                    </td>
                  </tr> 
             @endforeach 
        </tbody>
    </table>
 </div>
@endsection