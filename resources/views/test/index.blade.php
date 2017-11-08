@foreach ($jabatan as $item)
  <table border="">
    <tr>
      <td>{{ $item->id }}</td>
      <td>{{$item->nama}}</td>
    </tr>
  </table>
@endforeach
