<div class= "w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
    <input type="text" name="name" placeholder="Nome:" 
            class="shadow rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline my-2" value= "{{ $user->name ?? old('name') }}">
    <input type="email" name="email" placeholder="E-Mail:" 
            class="shadow rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline my-2" value= "{{ $user->email ?? old('email') }}">
    <input type="password" name="password" placeholder="Senha:" 
            class="shadow rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline my-2">
    <input type="file" name="image" 
            class="shadow rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline my-2">
    <button type="submit" 
            class="w-full shadow bg-purple-200 outline-none text-white font-bold py-2 py-4">Enviar
    </button>
</div>
