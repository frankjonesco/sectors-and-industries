<x-layout>
    
    <h1>Persons</h1>

    <table class="w-full">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>No. of Rooms</th>
                <th>No. of Chores</th>
            </tr>
        </thead>

        @foreach($persons as $person)
            <tr>
                <td>
                    {{$person->id}}
                </td>
                <td>
                    {{$person->name}}
                </td>
                <td>
                    {{count($person->grouped_rooms)}}
                </td>
                <td>
                    {{count($person->grouped_chores)}}
                </td>
            </tr>
        @endforeach

    </table>

</x-layout>