@extends("layouts.frontend")

@section('styles')
<link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
@endsection

@section("content")
<main class="admin-main-content">
    <admin-component></admin-component>
</main>
@endsection
