@extends('layouts.admin')
@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>

        <p>Welcome to the admin dashboard.</p>

        <a href="{{ route('admin.boats.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">
            Manage Boats
        </a>

        <a href="{{ route('admin.cabins.index') }}" class="bg-green-500 text-white px-4 py-2 rounded mt-4 inline-block ml-4">
            Manage Cabins
        </a>

        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mt-4 inline-block ml-4">Logout</button>
        </form>
    </div>
@endsection
