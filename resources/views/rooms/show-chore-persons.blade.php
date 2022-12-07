<x-layout>
    
    <h1>Room: {{$room->name}}</h1> 
    <h1>Chore: {{$chore->name}}</h1> 
    
    <table>

        <thead>
            <tr>
                <th>No. of Persons</th>
                <th>Persons</th>
            </tr>
        </thead>

        <tr>
            <td>
                {{$chore->labelled_room_chore_person_count}}
            </td>
            <td>
                <ul>
                    @foreach($chore->persons as $person)
                        <li>-
                            {{$person->name}}
                        </li>
                    @endforeach
                </ul>
            </td>
        </tr>
        
    </table>

</x-layout>