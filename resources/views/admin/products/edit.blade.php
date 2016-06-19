
@extends('app')

@section('content')

    <div class="container">
        <h3>Editando produto: {{$product->name}}</h3>

        @include('errors._check')

        {!! Form::model($product, ['route'=>['admin.products.update', $product->id], 'class'=>'form']) !!}

        @include('admin.products._form')
        
        <!--- Submit Field --->
        <div class="form-group">
            {!! Form::submit('Salvar Produto', ['class' => 'btn btn-primary']) !!}
        </div>
        

        {!! Form::close() !!}

    </div>

@endsection