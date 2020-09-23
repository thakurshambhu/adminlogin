@extends('layouts.main')

@section('content')

Welcome {{Auth::user('admin')->name}}

@endsection