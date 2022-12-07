<x-layout>
    
    <h1>Persons</h1>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>No. of Rooms</th>
                <th>Rooms</th>
                <th>No. of Chores</th>
                <th>Chores</th>
            </tr>
        </thead>

        @foreach($persons as $person)
            <tr>
                <td>
                    {{$person->id}}
                </td>
                <td>
                    {{$person->name}}
                </td>
                <td>
                    {{count($person->grouped_rooms)}}
                </td>
                <td>
                    <ul>
                        @foreach($person->grouped_rooms as $room)
                            <li>- 
                                <a href="/rooms/{{$room->id}}">
                                    {{$room->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    {{count($person->grouped_chores)}}
                </td>
                <td>
                    <ul>
                        @foreach($person->grouped_chores as $chore)
                            <li>- 
                                <a href="/chores/{{$chore->id}}">
                                    {{$chore->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach

    </table>

</x-layout>