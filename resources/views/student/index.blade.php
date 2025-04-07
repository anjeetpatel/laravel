@extends('layouts.app')

@section('content')
    <h2>Student Details</h2>
    <p><strong>Name:</strong> {{ $student['name'] }}</p>
    <p><strong>Email:</strong> {{ $student['email'] }}</p>
    <p><strong>Registered On:</strong> {{ $student['registered_on'] }}</p>
@endsection
