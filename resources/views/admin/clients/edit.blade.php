
@extends('app')

@section('content')

    <div class="container">
        <h3>Editando Cliente: {{$client->user->name}}</h3>

        @include('errors._check')

        {!! Form::model($client, ['route'=>['admin.clients.update', $client->id], 'class'=>'form']) !!}

        @include('admin.clients._form')
        
        <!--- Submit Field --->
        <div class="form-group">
            {!! Form::submit('Salvar Cliente', ['class' => 'btn btn-primary']) !!}
        </div>
        

        {!! Form::close() !!}

    </div>

@endsection