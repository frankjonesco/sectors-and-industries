<x-layout>
    
    <h1>Rooms</h1>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>No. of Chores</th>
                <th>Chores</th>
                <th>No. of Persons</th>
                <th>Persons</th>
            </tr>
        </thead>

        @foreach($rooms as $room)
            <tr>
                <td>
                    {{$room->id}}
                </td>
                <td>
                    {{$room->name}}
                </td>
                <td>
                    {{$room->labelled_chore_count}}
                </td>
                <td>
                    <ul>
                        @foreach($room->grouped_chores as $chore)
                            <li>- {{$chore->name}}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    {{$room->labelled_person_count}}
                </td>
                <td>
                    <ul>
                        @foreach($room->grouped_persons as $person)
                            <li>- {{$person->name}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach

    </table>

</x-layout>