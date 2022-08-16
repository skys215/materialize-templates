<!-- Name Field -->
<div class="row">
  <div class="input-field col s4">
    {!! Form::text('name', null, []) !!}
    {!! Form::label('name', 'Name') !!}

    @error('name')
        <span class="helper-text red-text">{{ $message }}</span>
    @enderror
  </div>
</div>

<!-- Email Field -->
<div class="row">
  <div class="input-field col s4">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, []) !!}

    @error('email')
        <span class="helper-text red-text">{{ $message }}</span>
    @enderror
  </div>
</div>

<!-- Password Field -->
<div class="row">
  <div class="input-field col s4">
    {!! Form::password('password', []) !!}
    {!! Form::label('password', 'Password') !!}

    @error('password')
        <span class="helper-text red-text">{{ $message }}</span>
    @enderror
  </div>
</div>

<!-- Confirmation Password Field -->
<div class="row">
  <div class="input-field col s4">
    {!! Form::password('password_confirmation', []) !!}
    {!! Form::label('password', 'Password Confirmation') !!}
  </div>
</div>
