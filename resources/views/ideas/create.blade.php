@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ url('ideas') }}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <div class="form-group mt-4">
                    <label for="description">{{ __('カテゴリー') }}</label>
                    <select id="category-select" name="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group mt-4">
                    <label for="description">{{ __('タイトル') }}</label>
                    <input type="text" name="title" />
                </div>
                <div class="form-group mt-10">
                    <label for="description">{{ __('説明文') }}</label>
                    <textarea name="description" rows="6" cols="60"></textarea>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </form>
    </div>
@endsection