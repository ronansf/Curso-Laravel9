<div class= "w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
    <input type="text" name="name" placeholder="Nome:" value= "{{ $user->name ?? old('name') }}">
    <input type="email" name="email" placeholder="E-Mail:" value= "{{ $user->email ?? old('email') }}">
    <input type="password" name="password" placeholder="Senha:">

    <button type="submit" class="w-full shadow bg-purple-200 outline-none text-white font-bold py-2 py-4">
        Enviar
    </button>
</div>
