@extends('layouts.app')

@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div><div>
                    
<span >  </span>
<a href="/p/create"><button>add new post</button></a>



@foreach($user->posts as $post)


<tr>

<td>{{$post->title}}</td>
<td>{{$post->description}}</td>
<td><a href="/{{$post->id}}/edit">edit</a></td>
<td><a href="/delete/{{$post->id}}">delete</a></td>
</tr>



@endforeach



                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
