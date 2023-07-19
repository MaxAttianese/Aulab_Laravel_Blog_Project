<form @if($category) action="{{route('categories.update',$category)}}" @else action="{{route('categories.store')}}" @endif method="POST">
    @csrf
    @if($category)
    @method('PUT')
    @endif
    <label for="name"></label>
    <input class="form-control" type="text" name="name" id="name"  @if($category) placeholder="Modifica Categoria" value="{{old('name', $category->name)}}" @else placeholder="Crea Categoria" value="{{old('name')}}" @endif>
    @error("name") <span class="small text-danger ps-2 fst-italic">{{$message}}</span> @enderror
    <div class="pt-4">
    @if($category) <button type="submit" class="btn btn-sm btn-primary">Modifica</button> @else <button type="submit" class="btn btn-sm btn-primary">Crea</button> @endif
    </div>
</form>
