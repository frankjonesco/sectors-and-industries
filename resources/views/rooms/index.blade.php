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



    @foreach($rooms as $room)
        <h1 class="mt-20">Rooms: {{$room->name}}</h1>

        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Response</th>
                </tr>
            </thead>

            <tr>
                <td>Number of Chores</td>
                <td>
                    {{count($room->chores)}}
                </td>
            </tr>

            <tr>
                <td>Chores</td>
                <td>
                    @foreach($room->chores as $chore)
                        {{$chore->name}}<br>
                    @endforeach
                </td>
            </tr>

        </table>


        @foreach($room->chores as $chore)
            <h1 class="ml-10">Chore: {{$chore->name}}</h1>

            <table class="ml-10">
                <thead class="bg-blue-600">
                    <tr>
                        <th>Item</th>
                        <th>Response</th>
                    </tr>
                </thead>

                <tr>
                    <td>Number of Persons</td>
                    <td>
                        {{-- {{count($chore->persons)}} --}}
                    </td>
                </tr>

                <tr>
                    <td>Persons</td>
                    <td>
                        {{-- @foreach($chore->persons as $person)
                            {{$person->name}}<br>
                        @endforeach --}}
                    </td>
                </tr>

            </table>
        @endforeach


    @endforeach



</x-layout>