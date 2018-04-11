<h1>Daftar seluru santris</h1>
<a href="{{ route('santri.create') }}"> Create </a>
<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($santris as $key => $santri)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $santri->nama }}</td>
        <td>{{ $santri->umur }}</td>
        <td>{{ $santri->alamat }}</td>
        <td>{{ $santri->jenis_kelamin }}</td>
        <td>
          <a href="{{ route('santri.show', $santri->id) }}">Details</a> |
          <a href="{{ route('santri.edit', $santri->id) }}"> Edit </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
