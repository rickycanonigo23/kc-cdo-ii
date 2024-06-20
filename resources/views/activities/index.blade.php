@extends('layouts.app')

@section('content')
    <div>
        <h2>Team CEAC Activities</h2>

        @if ($activities->isEmpty())
            <p>No activities found.</p>
        @else
            <p>Total Activities: {{ $activities->count() }}</p>
            <table border=2 width="100%">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Team Name</th>
                        <th>Guideline Stage</th>
                        <th>Guideline Activity</th>
                        <th>Date Start</th>
                        <th>Date End</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                        <tr>
                            <td>{{ $activity->status }}</td>
                            <td>{{ $activity->team_name }}</td>
                            <td>{{ $activity->guideline_stage }}</td>
                            <td>{{ $activity->guideline_activity }}</td>
                            <td>{{ $activity->date_start }}</td>
                            <td>{{ $activity->date_end }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
