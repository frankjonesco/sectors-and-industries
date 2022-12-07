<x-layout>
    
    <h1>Welcome to the chore list</h1> 
    
    <table>

        <thead>
            <tr>
                <th>Room</th>
                <th>Chore Types</th>
                <th>Assigned to</th>
            </tr>
        </thead>

        @foreach($rooms as $room)
            <tr>
                <td>
                    <a href="/rooms/{{$room->id}}">
                        {{$room->name}}
                    </a>
                </td>
                <td>
                    {{$room->labelled_chore_count}}
                </td>
                <td>
                    {{$room->labelled_person_count}}
                </td>
            </tr>
        @endforeach

    </table>

</x-layout>