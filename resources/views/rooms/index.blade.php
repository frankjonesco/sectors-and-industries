<x-layout>
    
    <h1>Rooms</h1>

    <table class="w-full">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>No. of Chores</th>
                <th>No. of Persons</th>
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
                    {{count($room->grouped_persons)}}
                </td>
            </tr>
        @endforeach

    </table>

</x-layout>