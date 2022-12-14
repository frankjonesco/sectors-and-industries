<x-layout>
    
    <h1>Chores</h1>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>No. of Rooms</th>
                <th>Rooms</th>
                <th>No. of Persons</th>
                <th>Persons</th>
            </tr>
        </thead>

        @foreach($chores as $chore)
            <tr>
                <td>
                    {{$chore->id}}
                </td>
                <td>
                    <a href="/chores/{{$chore->id}}">
                        {{$chore->name}}
                    </a>
                </td>
                <td>
                    {{$chore->labelled_room_count}}
                </td>
                <td>
                    <ul>
                        @foreach($chore->grouped_rooms as $room)
                            <li>- 
                                <a href="/rooms/{{$room->id}}">
                                    {{$room->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    {{$chore->labelled_person_count}}
                </td>
                <td>
                    <ul>
                        @foreach($chore->grouped_persons as $person)
                            <li>- {{$person->name}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach

    </table>

</x-layout>