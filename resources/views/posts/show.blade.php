@extends('layouts.app')

@section('content')






<div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->name }}</span>
                            </a>
                            <a href="#" class="pl-3">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->name }}</span>
                        </a>
                    </span> {{ $post->title}}
                </p>
            </div>
        </div>




@endsection
