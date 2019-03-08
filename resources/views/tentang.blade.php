<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Tentang</p>
	<p>
		Hallo,Nama saya Regina saya sekolah di SMKN 1 Subang,
        duduk dikelas XI dan mengambil jurusan RPL. Saya anak kesatu dari dua bersaudara, saya lahir pada tanggal 12 agustus 2002.
        Saya berumur 16 tahun , seneng loh walaupun masih ngikutin tutor hehehe. 
	</p>
 
@endsection