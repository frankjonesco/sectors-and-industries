<x-menu/>
<x-totals :count="$count"/>

<table style="width:500px; text-align:center; font-family:Arial;">
    <tr>
        <th style="padding:1rem; background:#999;">ID</th>
        <th style="padding:1rem; background:#999;">Hex</th>
        <th style="padding:1rem; background:#999;">Name</th>
        <th style="padding:1rem; background:#999;">From Sector</th>
        <th style="padding:1rem; background:#999;">Companies</th>
    </tr>

    {{-- <pre>{{$sector->industries}}</pre> --}}
    @foreach($sectors as $sector)
        @foreach($sector->industries as $industry)
            <tr>
                <td style="padding:1rem; background:#ddd;">{{$industry->pivot->id}}</td>
                <td style="padding:1rem; background:#ddd;">{{$industry->pivot->hex}}</td>
                <td style="padding:1rem; background:#ddd;">{{$industry->name}}</td>
                <td style="padding:1rem; background:#ddd;">{{$sector->name}}</td>
                <td style="padding:1rem; background:#ddd;">
                    @foreach($industry->companies as $company)
                        {{$company->name}}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach

    @endforeach



</table>