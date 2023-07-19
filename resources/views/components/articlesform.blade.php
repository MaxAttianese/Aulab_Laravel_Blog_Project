                <form class="row" @if($article) action="{{route('articles.update', $article)}}" @else action="{{route('articles.store')}}" @endif method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($article)
                    @method('PUT')
                    @endif
                    <div class="col-0 col-md-3"></div>
                    <div class="col-12 col-md-6">

                        <h2 class="fw-bold text-center">Inserisci Articolo</h2>

                        @if(session()->has("success"))
                        <x-flashmessage />
                        @endif

                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title" @if($article) value="{{old('title', $article->title)}}" @else value="{{old('title')}}" @endif>
                            @error("title") <span class="small text-danger fst-italic">{{$message}}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select class="form-control" id="category" name="category" @if($article) value="{{old('category', $article->category)}}" @else value="{{old('category')}}" @endif>
                                <option @if($article) value="{{$article->category}}" @endif> @if($article) {{$article->category}} @endif </option>
                                @foreach($categories as $category)
                                <option value="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error("category") <span class="small text-danger fst-italic">{{$message}}</span> @enderror

                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <input type="text" class="form-control" id="description" name="description" @if($article) value="{{old('description', $article->description)}}" @else value="{{old('description')}}" @endif>
                            @error("description") <span class="small text-danger fst-italic">{{$message}}</span> @enderror

                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Immagine</label>
                            <input type="file" class="form-control" id="image" name="image">

                        </div>

                        <div class="mb-3">
                            <label for="body" class="form-label">Corpo</label>
                            <textarea type="text" rows="4" cols="50" class="form-control" id="body" name="body">@if($article) {{old("body", $article->body)}} @else {{old("body")}} @endif</textarea>
                            @error("body") <span class="small text-danger fst-italic">{{$message}}</span> @enderror

                        </div>

                        <div class="pb-3">
                            @if(session()->has("success"))

                            @else
                            @if($article)
                            <button type="submit" class="btn btn-primary px-4">Modifica</button> 
                            @else
                            <button type="submit" class="btn btn-primary px-4">Crea</button>
                            @endif
                            @endif
                        </div>
                    </div>
                    <div class="col-0 col-md-3"></div>
                </form>
