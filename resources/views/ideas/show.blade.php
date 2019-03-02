@php
    $title = __('Idea') . ': ' . $idea->name;
@endphp
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        <div>
            <a href="{{ url('users/'.$idea->id.'/edit') }}" class="btn btn-primary">
                {{ __('Edit') }}
            </a>
            <a href="#" class="btn btn-danger">
                {{ __('Delete') }}
            </a>
        </div>

        <dl class="row">
            <dt class="col-md-2">{{ __('ID') }}</dt>
            <dd class="col-md-10">{{ $idea->id }}</dd>
            <dt class="col-md-2">{{ __('タイトル') }}</dt>
            <dd class="col-md-10">{{ $idea->title }}</dd>
            <dt class="col-md-2">{{ __('説明文') }}</dt>
            <dd class="col-md-10">{{ $idea->description }}</dd>
            <dt class="col-md-2">{{ __('作成者') }}</dt>
            <dd class="col-md-10">{{ $idea->user_id }}</dd>

        </dl>
    </div>
@endsection