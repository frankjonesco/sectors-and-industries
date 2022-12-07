<div class="p-8 text-gray-200 bg-slate-900 rounded-lg text-center">
    <h1>Table: rooms</h1>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
        </thead>
 
        @foreach($tables['rooms'] as $room)
            <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->name}}</td>
            </tr>
        @endforeach
    </table>
</div>

<div class="p-8 text-gray-200 bg-slate-900 rounded-lg text-center">
    <h1>Table: chores</h1>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
            </tr>
        </thead>
 
        @foreach($tables['chores'] as $chore)
            <tr>
                <td>{{$chore->id}}</td>
                <td>{{$chore->name}}</td>
            </tr>
        @endforeach
    </table>
</div>

<div class="p-8 text-gray-200 bg-slate-900 rounded-lg text-center">
    <h1>Table: persons</h1>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
            </tr>
        </thead>
 
        @foreach($tables['persons'] as $person)
            <tr>
                <td>{{$person->id}}</td>
                <td>{{$person->name}}</td>
            </tr>
        @endforeach
    </table>
</div>

<div class="p-8 text-gray-200 bg-slate-900 rounded-lg text-center">
    <h1>Table: maps</h1>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>room_id</td>
                <td>chore_id</td>
                <td>person_id</td>
            </tr>
        </thead>
 
        @foreach($tables['maps'] as $map)
            <tr>
                <td>{{$map->id}}</td>
                <td>{{$map->room_id}}</td>
                <td>{{$map->chore_id}}</td>
                <td>{{$map->person_id}}</td>
            </tr>
        @endforeach
    </table>
</div>