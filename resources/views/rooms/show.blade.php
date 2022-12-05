<x-layout>
    
    <h1>Room: {{$room->name}}</h1> 
    
    <table class="w-full">
        <thead>
            <tr>
                <th>Chores</th>
                <th>No. of persons</th>
            </tr>
        </thead>
        @foreach($room->chores as $chore)
            {{-- {{dd($chore->pivot)}} --}}
            <tr>
                <td>
                    <a href="/chores/{{$chore->pivot->id}}">
                        {{$chore->name}}
                    </a>
                </td>
                <td>
                    {{count($chore->persons)}}
                </td>
            </tr>
        @endforeach
    </table>

</x-layout>