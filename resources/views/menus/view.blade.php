@extends('layouts.app')
@section('content')
    <div>
            @if ($menu->id == 16)
                <div class="flex items-center justify-center aspect-w-9 aspect-h-16">
                    <iframe src="https://www.youtube.com/embed/r9jwGansp1E" allowfullscreen frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                    </iframe>
                </div>
                <hr><br>
                <div class="flex items-center justify-center">
                    <video controls="controls" width="620" height="540" autoplay="autoplay" class="flex justify-center ">
                        <source src="{{url("storage/Apr_Sistema.mp4")}}" type="video/mp4" class="flex ">
                        <object data="" width="620" height="540" class="flex ">
                            <embed width="620" height="540" src="Apr_Sistema.mp4" class="flex ">
                        </object>
                    </video>
                </div> 
            @else
            <table class="flex">
                <tr>
                    <td class ="flex">
                        @if ($menu->image && $menu->id != 16)
                            <img src="{{ url("storage/{$menu->image}")}}" alt="{{$menu->nome}}" class='object-cover w-96'>        
                        @else
                           <!-- <img src="{{ url("storage/favicon.ico")}}" alt="{{$menu->nome}}" class='object-cover w-96'> -->       
                        @endif
                    </td>
                    <td class ="flex">
                        <p class="px-1 py-1 border-gray-200 text-justify font-semi-bold shadow">{{ $menu->texto}}</p>    
                    </td> 
                </tr>
            </table>    
            @endif
        
    </div>
@endsection

