<x-layout>
    
    <h1>Cleaning Jobs</h1>






    
    
    <table>

        <thead>
            <tr>
                <th>Room</th>
                <th>Chore</th>
                <th>Person(s)</th>
            </tr>
        </thead>


        @foreach($rooms as $room)

            @foreach($room->chores as $chore)
                
                <tr>
                    <td>
                        @if($chore->room)
                            {{$chore->room->name}}
                        @endif
                    </td>
                    <td>
                        {{$chore->name}}
                    </td>
                    <td>
                        @foreach($room->chores as $chore)
                            @foreach($chore->persons as $person)
                                {{$person->name}}<br>
                            @endforeach
                        @endforeach
                    </td>
                </tr>

            @endforeach

        @endforeach

    </table>

</x-layout>