@extends('layouts.standard')

@section('title','Project page')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    <p><strong>Budget:</strong> ${{ $project->budget }}</p>
    <p><strong>Status:</strong> {{ ucfirst($project->status) }}</p>
    <p><strong>Owner ID:</strong> {{ $project->owner_id }}</p>
    <p><strong>Freelancer ID:</strong> {{ $project->freelancer_id ?? 'Not Assigned' }}</p>

    <form action="{{ route('bids.create', $project->id) }}" method="GET">
        <button type="submit">Bid Now</button>
    </form>
    <a href="{{ route('projects.index') }}">← Back to Project List</a>
@endsection