<h1>Input Data Santri</h1>


<form action="{{ route('santri.store') }}" method="post"><br>
  <!-- <input type="hidden" name="" value=""> -->

  {{ csrf_field() }}

  <!-- @csrf -->


  <input type="text" name="nama" placeholder="Masukan Namamu bro!"><br>
  <input type="text" name="umur" placeholder="Masukan Umurmu bro!"><br>
  <textarea name="alamat" rows="8" cols="80" placeholder="Masukan aalamatmu bro"></textarea><br>
  <input type="text" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin"><br>
  <button type="submit" name="button">Simpan</button>
</form>
