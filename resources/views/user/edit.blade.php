@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ session('flash') }}

                    {{ Form::model($user, array('route' => 'user.update', $user->id)) }}
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name') }}
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email') }}
                        {{ Form::submit('Submit') }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
