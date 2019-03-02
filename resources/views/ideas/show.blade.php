@php
    $title = __('Idea') . '#' . $idea->id;
@endphp
@extends('layouts.app')
@push('css')
<link href="{{ asset('css/idea.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container text-center">
        <h1>{{ $title }}</h1>

        <div class="idea">
            <div class="idea-info">
                <div class="idea-id">
                    <label>{{ __('ID') }}</label>
                    {{ $idea->id }}
                </div>
                <div class="idea-title">
                    <label>{{ __('タイトル') }}</label>
                    {{ $idea->title }}
                </div>
                <div class="user_id">
                    <label>{{ __('作成者') }}</label>
                    {{ $idea->user_id }}
                </div>
            </div>
            <div class="idea-content">
                <label>{{ __('説明文') }}</label>
                <div class="idea-description">
                    {{ $idea->description }}
                </div>
            </div>
        </div>

        <div>
            <a href="{{ url('users/'.$idea->id.'/edit') }}" class="btn btn-primary">
                {{ __('Edit') }}
            </a>
            <a href="#" class="btn btn-danger">
                {{ __('Delete') }}
            </a>
        </div>

    </div>
@endsection