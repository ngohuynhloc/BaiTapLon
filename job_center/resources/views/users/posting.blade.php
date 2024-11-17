
@extends('layouts.app')
@section('title', 'Bài đăng')
@section('content')
@include('users.main.main_job_posting')
@endsection
@if(session('status'))
<script>
    alert('{{session('status')}}')
</script>
@endif