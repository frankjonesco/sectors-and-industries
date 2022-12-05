<x-layout>
    
    <h1>Room: {{$room->name}}</h1> 
    <h1>Chore: {{$chore->name}}</h1> 
    
    <table class="w-full">
        <thead>
            <tr>
                <th>Persons</th>
                <th></th>
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
                    {{-- {{count($chore->persons)}} --}}
                </td>
            </tr>
        @endforeach
    </table>

</x-layout>