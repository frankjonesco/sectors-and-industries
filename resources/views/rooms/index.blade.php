<x-layout>
    
    <h1>Rooms</h1>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Response</th>
            </tr>
        </thead>

        <tr>
            <td>Number of Rooms</td>
            <td>{{count($rooms)}}</td>
        </tr>

        <tr>
            <td>Rooms</td>
            <td>
                @foreach($rooms as $room)
                    {{$room->name}}<br>
                @endforeach
            </td>
        </tr>

    </table>



    



</x-layout>