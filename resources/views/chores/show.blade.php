<x-layout>
    
    <h1>Room: {{$room->name}}</h1> 
    <h1>Chore: {{$chore->name}}</h1> 
    
    <table>

        <thead>
            <tr>
                <th>Persons</th>
                <th>Room</th>
                <th>Chore</th>
            </tr>
        </thead>

        @foreach($chore->persons as $person)
            <tr>
                <td>
                    <a href="/persons/{{$person->id}}">
                        {{$person->name}}
                    </a>
                </td>
                <td>
                    {{$room->name}}
                </td>
                <td>{{$chore->name}}</td>
            </tr>
        @endforeach
        
    </table>

</x-layout>