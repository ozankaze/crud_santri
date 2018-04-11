<h1>Edit Data Santri</h1>


<form action="{{ route('santri.update', $santris->id) }}" method="post"><br>
  <!-- <input type="hidden" name="" value=""> -->

  {{ csrf_field() }}

  {{ method_field('PATCH') }} 

  {{-- <!-- @csrf --> --}}


  <input type="text" name="nama" value="{{ $santris->nama }}"><br>
  @if ($errors->has('nama'))
    <strong>{{ $errors->first('nama') }}</strong><br>
  @endif
  
  <input type="text" name="umur" value="{{ $santris->umur }}"><br>
  @if ($errors->has('umur'))
    <strong>{{ $errors->first('umur') }}</strong><br>
  @endif

  <textarea name="alamat" rows="8" cols="80"> {{ $santris->alamat }} </textarea><br>
  @if ($errors->has('alamat'))
    <strong>{{ $errors->first('alamat') }}</strong><br>
  @endif

  <input type="text" name="jenis_kelamin" value="{{ $santris->jenis_kelamin }}"><br>
  @if ($errors->has('jenis_kelamin'))
    <strong>{{ $errors->first('jenis_kelamin') }}</strong><br>
  @endif

  <button type="submit" name="button">Update Brow</button>
  <a href="{{ route('santri.index') }}"> Kembali Ke Home </a>
</form>
