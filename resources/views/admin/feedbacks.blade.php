@extends('layouts.app')

@section('title', 'Feedback')

@section('content')
<div class="container mt-5">
    <h2>Feedback List</h2>
    <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{!! nl2br(e($feedback->message)) !!}</td>
                    <td>{{ $feedback->created_at->format('d M Y, H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">No feedbacks available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $feedbacks->links() }}
</div>
@endsection