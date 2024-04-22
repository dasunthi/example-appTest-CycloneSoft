<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div>
            {{--table for list data --}}
            <table>
                <th>No</th> 
                <th>Name</th> 
                <th>Weight</th>
                @php $count=0; @endphp
                @foreach ($Data as $item)
                    @php $count++; @endphp
                    <tr>
                        <td>{{$count}} )</td>
                        <td>{{$item->name}} </td>
                        <td>{{$item->weight}} Kg</td>
                    </tr> 
                @endforeach
            </table>
            <!-- End table -->
        </div>
    </body>
</html>