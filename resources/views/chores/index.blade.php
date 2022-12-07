<x-layout>
    
    <h1>Chores</h1>

    <table class="w-full">
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
                    {{$chore->name}}
                </td>
                <td>
                    {{count($chore->grouped_rooms)}}
                </td>
                <td>
                    @foreach($chore->grouped_rooms as $room)
                        {{$room->name}}<br>
                    @endforeach
                </td>
                <td>
                    {{count($chore->grouped_persons)}}
                </td>
                <td>
                    @foreach($chore->grouped_persons as $person)
                        {{$person->name}}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach

    </table>

</x-layout>