<x-layout>
    
    <h1>Room: {{$room->name}}</h1> 
    
    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Chores</th>
                <th>No. of persons</th>
                <th>Persons</th>
            </tr>
        </thead>

        @php 
            $i = 0;
        @endphp
        
        @foreach($chores as $chore)
            <tr>
                <td>
                    {{$chore[0]->id}}
                </td>
                <td>
                    <a href="/rooms/{{$room->id}}/chores/{{$chore[0]->pivot->id}}">
                        {{$chore[0]->name}}
                    </a>
                </td>
                <td>
                    {{count($chore[0]->persons)}}
                </td>
                <td>
                    <ul>
                        @foreach($chore[0]->persons as $person)
                            <li>-
                                {{$person->name}}
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            
            @php 
                $i++;
            @endphp

        @endforeach

    </table>

</x-layout>