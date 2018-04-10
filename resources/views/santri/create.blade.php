<h1>Input Data Santri</h1>


<form action="{{ route('santri.store') }}" method="post"><br>
  <!-- <input type="hidden" name="" value=""> -->

  {{ csrf_field() }}

  <!-- @csrf -->


  <input type="text" name="nama" placeholder="Masukan Namamu bro!"><br>
  @if ($errors->has('nama'))
    <strong>{{ $errors->first('nama') }}</strong><br>
  @endif
  <input type="text" name="umur" placeholder="Masukan Umurmu bro!"><br>
  @if ($errors->has('umur'))
    <strong>{{ $errors->first('umur') }}</strong><br>
  @endif
  <textarea name="alamat" rows="8" cols="80" placeholder="Masukan aalamatmu bro"></textarea><br>
  @if ($errors->has('alamat'))
    <strong>{{ $errors->first('alamat') }}</strong><br>
  @endif
  <input type="text" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin"><br>
  @if ($errors->has('jenis_kelamin'))
    <strong>{{ $errors->first('jenis_kelamin') }}</strong><br>
  @endif
  <button type="submit" name="button">Simpan</button>
  <a href="{{ route('santri.index') }}"> Kembali Ke Home </a>
</form>
