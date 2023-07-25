<x-main :title="$title">
    <div class="container">
        <div class="row pt-5">
            <a class="link-offset-2 link-underline link-underline-opacity-0 fst-italic pt-2" href="{{route('categories.index')}}"> Indietro</a>
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4">
                <h2>{{$titlePage}}</h2>
                @if(session()->has("success"))
                <x-flashmessage />
                @endif
                <form action="{{$action}}" method="POST">
                    @csrf
                    @if($method)
                    @method('PUT')
                    @endif

                    <label for="name"></label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="{{$placeholder}}" value="{{old('name', $category->name)}}">
                    @error("name") <span class="small text-danger ps-2 fst-italic">{{$message}}</span> @enderror
                    <div class=" ps-1 pt-4">
                        <button type="submit" class="btn btn-sm btn-primary">{{$buttoName}}</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4"></div>
        </div>
    </div>
</x-main>