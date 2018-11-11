@csrf
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="title"> @lang('labels.Product title') </label>
      <input name="title"
      type="text"
      id="title"
      class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
      placeholder="Name"
      value="{{old('title') ?? $products->title ?? '' }} "/>

      <label for="description"> @lang('labels.description') </label>
      <input name="description"
      type="text"
      id="description"
      class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
      placeholder="description"
      value="{{old('description') ?? $products->description ?? '' }} "/>

      <label for="description"> @lang('th.Price') </label>
      <input name="price"
      type="price"
      id="price"
      class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
      placeholder="price"
      value="{{old('price') ?? $products->price ?? '' }} "/>

      <label for="image"> @lang('labels.Image upload') * </label>
      <input name="image"
      type="file"
      id="image"
      class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}"
      placeholder="image"
      value="{{old('image') ??  '' }}"/>

      <label for="thumbnail">@lang('labels.Choose thumbnail') *</label>
      <input name="thumbnail"
      type="file"
      id="thumbnail"
      class="form-control {{ $errors->has('thumbnail') ? ' is-invalid' : '' }}"
      placeholder="thumbnail"
      value="{{old('thumbnail') ?? $products->thumbnail ?? '' }}"/>      
    </div>
  </div>
</div>
