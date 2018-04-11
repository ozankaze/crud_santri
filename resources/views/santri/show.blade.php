<h1>Data Diri Santri</h1>

nama : {{ $santris->nama }} <br>
umur : {{ $santris->umur }} <br>
alamat : {{ $santris->alamat }} <br>
Jenis Kelamin : {{ $santris->jenis_kelamin }} <br>

<hr>

<a href="{{ route('santri.index') }}">Back Index</a>