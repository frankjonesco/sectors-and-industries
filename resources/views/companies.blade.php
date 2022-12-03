<x-menu/>

<table style="width:500px; text-align:center; font-family:Arial;">
    <tr>
        <th style="padding:1rem; background:#999;">ID</th>
        <th style="padding:1rem; background:#999;">Name</th>
        <th style="padding:1rem; background:#999;">Sectors</th>
        <th style="padding:1rem; background:#999;">Industries</th>
    </tr>

    @foreach($companies as $company)
        <tr>
            <td style="padding:1rem; background:#ddd;">{{$company->id}}</td>
            <td style="padding:1rem; background:#ddd;">{{$company->name}}</td>
            <td style="padding:1rem; background:#ddd;"></td>
            <td style="padding:1rem; background:#ddd;"></td>
        </tr>
    @endforeach

</table>