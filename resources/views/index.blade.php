<x-layout>
    
    <h1>Welcome to the chore list</h1> 
    
    <table class="w-full">
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
                    {{count($room->grouped_chores)}}
                    @if(count($room->grouped_chores) === 1)
                        chore
                    @else
                        chores
                    @endif
                </td>
                <td>
                    {{count($room->grouped_chores)}}
                    @if(count($room->grouped_chores) === 1)
                        person
                    @else
                        people
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

</x-layout>