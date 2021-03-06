
<!--- Nome Field --->
<div class="form-group">
    {!! Form::label('user[name', 'Nome:') !!}
    {!! Form::text('user[name]', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group">
    {!! Form::label('user[email]', 'Email:') !!}
    {!! Form::email('user[email]', null, ['class' => 'form-control']) !!}
</div>

<!--- Telefone Field --->
<div class="form-group">
    {!! Form::label('phone', 'Telefone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Endereço Field --->
<div class="form-group">
    {!! Form::label('address', 'Endereço:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Cidade Field --->
<div class="form-group">
    {!! Form::label('city', 'Cidade:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!--- Estado Field --->
<div class="form-group">
    {!! Form::label('state', 'Estado:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>


<!--- Cep Field --->
<div class="form-group">
    {!! Form::label('zipcode', 'Cep:') !!}
    {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
</div>