@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 45px;">
                </div>
                <div>
                    <div class="font-weight-bold">{{ $post->user->username }}</div>
                </div>
            </div>

            <hr>

            <p>{{ $post->caption }}</p>
        </div>
    </div>

</div>
@endsection
