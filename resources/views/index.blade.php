<x-layout>
    
    <h1>Welcome to the chore list</h1> 
    
    <table class="w-full">
        <thead>
            <tr>
                <th>Room</th>
                <th>No. of chores</th>
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
                    {{count($room->chores)}}
                </td>
            </tr>
        @endforeach
    </table>

</x-layout>