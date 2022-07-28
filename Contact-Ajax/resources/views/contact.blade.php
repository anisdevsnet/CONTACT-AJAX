@foreach ($contacts as $row)
<tr>
     <td> {{  $row.id   }}</td>
    <td> {{ $row.name }} </td>
    <td> {{  $row.email  }} </td>
    <td> {{  $row.phone  }} </td>
     <td>
    <button type="button" class="btn btn-xs btn-warning btnEdit" title="Edit Record" >Edit</button>
<button type="button" class="btn btn-xs btn-danger btnDelete" data-id="' + $row.id + '" title="Delete Record">Delete</button>
</td> 
</tr>
{{ $row->links() }}
@endforeach