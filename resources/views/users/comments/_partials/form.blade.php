<div class= "w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
    <textarea name="body" id="" cols="30" rows="10" placeholder="Comentários"
    class= " form-control block w-full
    px-3 py-1.5
    text-base font-normal text-gray-700
    bg-white bg-clip-padding
    border border-solid boerder-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"> {{ $comment->body ?? old('body')}} </textarea>
    <label for="visible">
        <input type="checkbox" name="visible">
        @if (isset($comment0 && $comment->visible))
            checked = "checked"
        @endif
    </label>

    <button type="submit" class="w-full shadow bg-purple-200 outline-none text-white font-bold py-2 py-4">
        Enviar
    </button>
</div>
