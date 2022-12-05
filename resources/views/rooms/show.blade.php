<x-layout>
    
    <h1>Room: {{$room->name}}</h1> 
    
    <table class="w-full">
        <thead>
            <tr>
                <th>Chores</th>
                <th>Room</th>
                <th>No. of persons</th>
            </tr>
        </thead>
        {{-- {{dd($room->chores->groupBy('name'))}} --}}
        @php 
            $i = 0;
        @endphp
        
        @foreach($chores as $chore)
            <tr>
                <td>
                    <a href="/chores/{{$chore[0]->pivot->id}}">
                        {{$chore[0]->name}}
                    </a>
                </td>
                <td>
                    {{$room->name}}
                </td>
                <td>
                    {{count($chore[0]->persons)}}
                </td>
            </tr>
            @php 
                $i++;
            @endphp

        @endforeach

    </table>

</x-layout>