@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hi User!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You must logged in first to access the Post Table') }}
                    <br><br>
                    {{ __('Register if you dont have an account') }}

                </div>
                <div class="container">
                        @foreach ($posts as $post)
                        <div class="card">
                                @if ($post->img != '')
                                <img class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                            
                                @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->description }}</p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
                            </div>
                     
                            <div class="card-footer">
                               <small class="text-muted">Last updated {{ $post->updated_at }}</small>
                            </div>
                        </div>   <div class="clearfix"><br></div>     
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
