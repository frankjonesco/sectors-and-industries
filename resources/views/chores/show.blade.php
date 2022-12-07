<x-layout>
    
    <h1>Chore: {{$chore->name}}</h1> 
    
    <table>

        <thead>
            <tr>
                <th>Chore</th>
                <th>Persons</th>
                <th>No. of Rooms</th>
                <th>Room(s)</th>
            </tr>
        </thead>

        @foreach($chore->grouped_persons as $person)
            <tr>
                <td>
                    <a href="/chores/{{$chore->id}}">
                        {{$chore->name}}
                    </a>
                </td>
                <td>
                    {{$person->name}}
                </td>
                <td>
                    {{$person->labelled_chore_room_count}}
                </td>
                <td>
                    <ul>
                        @foreach($person->grouped_chore_rooms as $room)
                            <li>
                                <a href="/rooms/{{$room->id}}">
                                    {{$room->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
        
    </table>

</x-layout>