@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>説明</th>
                    <th>いいねの数</th>
                    <th>作成者</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($ideas as $idea)
                    <tr>
                        <td><a href="{{ url('ideas/'.$idea->id) }}">{{ $idea->id }}</a></td>
                        <td>{{ $idea->description }}</td>
                        <td>{{ $idea->good_count }}</td>
                        <td>{{ $idea->user->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
