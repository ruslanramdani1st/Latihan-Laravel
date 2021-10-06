{{-- Induk Index --}}

{{-- INCLUDE FILE Anak Index dari folder layouts --}}
@extends('layouts.master')

{{-- Yang Di ubah di file anak index --}}
@section('judul')
Tampilan Album
@endsection

{{-- Yang Di ubah di file anak index --}}
@section('section')
Halaman Utama
<a class="btn btn-primary btn-lg" href="{{route('index')}}">Kembali ke index</a>
@endsection
