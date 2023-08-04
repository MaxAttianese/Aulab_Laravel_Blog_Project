<x-main :title="$title">
    <div class="container">
        <div class="row pt-5">
            <div class="text-end">
            <a class=" btn btn-primary link-offset-2 link-underline link-underline-opacity-0 fst-italic pt-2" href="{{route('categories.create')}}"> Crea Categoria</a>

            </div>
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-10 d-flex flex-column">
                <h2 class="display-5 fw-bold text-center pt-2 pb-5">Elenco Categorie</h2>
                @if(session()->has("success"))
                <x-flashmessage />
                @elseif(session()->has("insuccess"))
                <x-flashnegativemessage />
                @endif
                <table>
                    <tr>
                        <th class="py-4 fs-2 fst-italic">
                            Nome Categoria
                        </th>
                    </tr>
                    @foreach($categories as $category)
                    <tr>
                        <td class="border-bottom d-flex justify-content-between align-items-center">
                            <span class="lead fst-italic fs-4">. {{$category->name}}</span>
                        </td>
                        <td class="border-bottom">
                            <div class="d-flex">
                                <a class="fst-italic link-underline link-underline-opacity-0 text-success pe-2" href="{{route('categories.edit', $category)}}">Modifica</a>
                                <form action="{{route('categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-white border-0 fst-italic text-danger" onclick="return confirm('Sei sicuro di volerlo eliminare?')">Cancella</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-bottom d-flex justify-content-between align-items-center">
                            <div><p class="fst-italic">Articoli ({{$category->articles->count()}}):</p></div> <div>@foreach($category->articles as $article)<span class="fst-italic px-1"> .{{$article->title}}</span> @endforeach</div>
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-12 col-md-1"></div>
        </div>
    </div>
</x-main>