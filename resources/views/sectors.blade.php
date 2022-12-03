<x-menu/>
<x-totals :count="$count"/>

<table style="width:500px; text-align:center; font-family:Arial;">
    <tr>
        <th style="padding:1rem; background:#999;">ID</th>
        <th style="padding:1rem; background:#999;">Name</th>
        <th style="padding:1rem; background:#999;">Industries</th>
        <th style="padding:1rem; background:#999;">Companies</th>
    </tr>

    @foreach($sectors as $sector)
        <tr>
            <td style="padding:1rem; background:#ddd;">{{$sector->id}}</td>
            <td style="padding:1rem; background:#ddd;">{{$sector->name}}</td>
            <td style="padding:1rem; background:#ddd;">
                @foreach($sector->industries as $industry)
                    {{$industry->name}}<br>
                @endforeach
            </td>
            <td style="padding:1rem; background:#ddd;">
                @foreach($sector->industries as $industry)
                    @foreach($industry->companies as $company)
                        {{$company->name}}<br>
                    @endforeach
                @endforeach
            </td>
        </tr>
    @endforeach

</table>