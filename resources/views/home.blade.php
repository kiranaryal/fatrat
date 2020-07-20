@extends('layouts.app')

@section('content')
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
                    
<span >  {{  $user->name  }} </span>
<form action="">
<input type="text" name="topic" ><br>

<textarea name="blog" id="" cols="30" rows="10" ></textarea>






</form>



                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
