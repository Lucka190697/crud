@csrf
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="name"> @lang('labels.Users') </label>
      <input name="name"
      type="text"
      id="name"
      class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
      placeholder="Nome:"
      value="{{old('name') ?? $users->name ?? '' }} "/>

      <label for="email"> @lang('labels.email') </label>
      <input name="email"
      type="email"
      id="email"
      class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
      placeholder="email"
      value="{{old('email') ?? $users->email ?? '' }} "/>

      <label for="password">  @lang('labels.Password')  </label>
      <input name="password"
      type="password"
      id="password"
      class="form-control {{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
      placeholder="Senha"/>
      @if ($errors->has('password'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif

      <label for="confirm_password"> @lang('labels.Confirm Password') </label>
      <input name="confirm_password"
      type="password"
      id="confirm_password"
      class="form-control {{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
      placeholder="Confire a Senha"
      value=""/>

  </div>
</div>

<div class="col">
    <div class="form-group">
      <label for="cep"> @lang('labels.Postal Code') * </label>
      <input name="cep"
      type="text"
      id="cep"
      class="form-control {{ $errors->has('cep') ? ' is-invalid' : '' }}"
      placeholder="Postal Code"
      value="{{old('cep') ?? $users->cep ?? '' }}"
      onblur="pesquisacep(this.value);"/>

      <label for="district">@lang('labels.District') *</label>
      <input name="district"
      type="text"
      id="bairro"
      class="form-control {{ $errors->has('district') ? ' is-invalid' : '' }}"
      placeholder="District"
      value="{{old('district') ?? $users->district ?? '' }}"/>

      <label for="number">@lang('labels.Number')</label>
      <input name="number"
      type="text"
      id="numero"
      class="form-control {{ $errors->has('number') ? ' is-invalid' : '' }}"
      placeholder="Number"
      value="{{old('number') ?? $users->number ?? '' }}"/>

      <label for="complement">@lang('labels.Complement')</label>
      <input name="complement"
      type="text"
      id="complement"
      class="form-control {{ $errors->has('complement') ? ' is-invalid' : '' }}"
      placeholder="Complement"
      value="{{old('complement') ?? $users->complement ?? ''  }}"/>

      <label for="city">@lang('labels.City')</label>
      <input name="city"
      type="text"
      id="cidade"
      class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}"
      placeholder="City"
      value="{{old('city') ?? $users->city ?? '' }}"/>

      <label for="state">@lang('labels.State') *</label>
      <input name="state"
      type="text"
      id="uf"
      class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}"
      placeholder="State"
      value="{{old('state') ?? $users->state ?? '' }}"/>
      
      <label for="profile">@lang('labels.profile') *</label>
      <input name="profile"
      type="file"
      id="profile"
      class="form-control {{ $errors->has('profile') ? ' is-invalid' : '' }}"
      placeholder="Profile"
      value="{{old('profile') ?? $users->profile ?? '' }}"/>
  </div>
</div>
</div>
