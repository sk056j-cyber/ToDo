@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-5 text-center header-green">タスク編集</h2>

    <div class="row">
        <div class="col-12 col-md-8 mx-auto">


            {{ Form::model($todo, ['route' => ['todo.update', $todo->id], 'method' => 'PUT']) }}
            <div class="my-3">
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => '牛乳を買う']) }}
            </div>
            <div>
                {{ Form::submit('🔄更新する', ['class' => 'btn btn-green px-4']) }}
            </div>
            {{ Form::close() }}

            {{ Form::open(['route' => ['todo.destroy', $todo->id], 'method' => 'DELETE', 'class' => 'mt-3']) }}
            {{ Form::submit('🗑️削除する', ['class' => 'btn btn-blue px-4']) }}
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
