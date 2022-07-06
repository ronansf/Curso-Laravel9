<div class= "w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
        <input type="text" name="nome" placeholder="Nome:" 
            class="shadow rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline my-2" value= "{{ $menu->nome ?? old('nome') }}">
        <textarea name="texto" id="" cols="30" rows="10" placeholder="Texto"
            class= " form-control block w-full
            px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
            border border-solid boerder-gray-300 rounded transition ease-in-out m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"> {{ $menu->texto ?? old('texto')}} </textarea>
        <input type="text" name="posimagem" placeholder="E-Mail:" 
            class="shadow rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline my-2" value= "{{ $menu->posimagem ?? old('posimagem') }}">
        <input type="file" name="image" 
            class="shadow rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline my-2">
        <button type="submit" 
            class="w-full shadow bg-purple-200 outline-none text-white font-bold py-2 py-4">Enviar
        </button>
</div>
