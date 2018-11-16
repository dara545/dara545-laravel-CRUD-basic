@extends('Books.layout')

@section('content')
 <h1 class="text-center"></h1>

        <a href="{{route('books.index')}}" class="btn btn-primary btn-rounded" style="float:right">Terug</a> 
        <br>
        <br>
      <div class="col-md-6 col-md-offset-3">
          {{-- <div class="">
              <ul>
              @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
              @endforeach
              <ul> --}}
      <form action="{{route('books.store')}}" method=POST> 
            <div class= "form-group {{$errors->has('name') ? 'has-error': ''}}">
            <label>Book Title</label>
            <input type="text" name="name" 
            class="form-control">
            <span class="help-block">
                @if($errors->has('name'))
                   {{$errors->first('name')}}
                @endif   

            </span>
            </div>
            <div class="form-group {{$errors->has('author') ? 'has-error': ''}}">
                <label>Author Name:</label>
                <input type="text" name="author" class="form-control">
                <span class="help-block">
                    @if($errors->has('author'))
                       {{$errors->first('author')}}
                    @endif 
            </div>
            
            <button type="submit" class="btn btn-succes btn-block">Submit</button>
            @csrf
        </form>
    </div>
    






@endsection