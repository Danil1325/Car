    @extends('layouts.app')

    @section('title','Create Auto')

    @section('content')
        <form action="{{route('cars.store')}}" method="post">
            @csrf
            <label for="id">Utilizator:</label>
            <select name="id" id="id">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->fullName()}}</option>
                @endforeach
            </select><br>
            <label for="car">Nume</label>
            <input type="tel" name="car" id="car" placeholder="Nume"><br>
            <button type="submit">Save</button>
        </form>
    @endsection