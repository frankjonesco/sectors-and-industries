<x-layout>
    
    <h1>Rooms</h1>

    <table class="w-full">
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
                    {{count($room->grouped_chores)}}
                </td>
                <td>
                    @foreach($room->grouped_chores as $chore)
                        {{$chore->name}}<br>
                    @endforeach
                </td>
                <td>
                    {{count($room->grouped_persons)}}
                </td>
                <td>
                    @foreach($room->grouped_persons as $person)
                        {{$person->name}}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach

    </table>

</x-layout>