@extends('layouts.app')
@push('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <div class="container text-center ideas">
            <h2>みんなの新着アイデア</h2>
            <div class="ideas">
                <ul>
                    @foreach($ideas as $idea)
                        <li class="idea">
                            <div class="idea-container">
                                <div class="idea-title">
                                    <label>{{ __('タイトル') }}</label>
                                    {{ $idea->title }}
                                    </div>
                                <div class="idea-content">
                                    <label>{{ __('説明文') }}</label>
                                    <div class="idea-description">
                                        <span>{{ $idea->description }}</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
