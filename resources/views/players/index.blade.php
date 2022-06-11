<x-app-layout>
    
    <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8 container" style="border-radius:10px;" >
    <a 
        class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded border-3 ">
        Exportar a Excel<i class="fa-solid fa-file-excel ml-2"></i></a>

        <div class="my-2 mb-5 grid cardsPlayers" style="min-height:calc(100vh-266px)">
            <div class=" card2 xl:w-96 ml-6 bg-white mr-2 mx-w-sm rounded overflow-hidden shadow-lg " style="border:solid 3px black">
  
                <div class="text-lg flex flex-row justify-top text-center"
                    style="background-color: #0288d1;color:white;">
                    <h3 class="font-bold px-6 py-4 ">Jugadores del {{$team->nombre}}</h3><img src="{{ asset('storage/'.$team->escudo) }}" class="mr-3  mx-auto my-auto flex-end" style="width:60px;height:60px">
                </div>
                
                <div>
                    <x-tabla>
                        <table role="grid" class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr role="row">
                                    <form action="{{route('players.index',$team)}}" method="GET">
                                    
                                    <th
                                        style="text-align: center;background-color: white; border:none; outline:none;padding:10px;font-size:16px;">
                                        <input  name="nombre" id="search" value="{{$request->nombre}}"
                                            style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                            class="focus:bg-white focus:border-blue-600 focus:outline-none"
                                            placeholder="Search" aria-label="Search" aria-describedby="button-addon2" />
  
                                    </th>
                                    <th>
                                        <button type="submit" class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        
                                    </th>
                                </form>
                                </tr>
                            
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 overflow-auto" >
  
                                @if ($players->count())
                                    @foreach ($players as $item)
                                    <div>
                                        @if($control==false)
                                        @if($item->id==$player->id)
                                        <tr class=" border-b bg-sky-400 dark:hover:bg-sky-300 " style="overflow: scroll">
                                        @else
                                        <tr class=" border-b hover:bg-sky-50 dark:hover:bg-sky-200" style="overflow: scroll">
                                        @endif
                                        @else
                                        <tr class=" border-b hover:bg-sky-50 dark:hover:bg-sky-300" style="overflow: scroll">
                                        @endif
                                            
                                                <td role="gridcell">
                                                    <a href="{{ route('players.edit',[$team,$item]) }}">
                                                    <div style="display: flex;align-items:center;">
                                                        <div class="flex">
                                                            <img class="h-12 w-12 ml-1 object-cover"
                                                                src="{{ asset('storage/' . $item->foto) }}" style="background-color: white !important;
                                                                border-right: none !important;
                                                                border-top: none !important;
                                                                border-bottom: none !important;
                                                                height: calc(60px+1vw);
                                                                border-radius: 4px;
                                                                margin-right: 10px;
                                                                border-width: 4px !important;" alt="">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900 ">
                                                                {{ $item->nombre }} {{ $item->apellidos }}
                                                            </div>
                                                            <div class="text-sm text-gray-500">{{ $item->posicion }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $item->dorsal }}
                                                </td>
                                            </a>
                                        </tr>
                                    
                                    </div>
                                    @endforeach
                                @else
                                <tr class="border-b">
                                    <td class="mt-2 text-center font-bold text-lg">No se enconcotró ningún jugador.
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </x-tabla>
  
                </div>
                <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
                    <div class=" mx-auto pagination ">
                        {{ $players->links() }}
                    </div>
                </div>
            </div>
            <div>
                @if ($control==true)
                    @include('players.create')
                @else
                
                    @include('players.edit')
                @endif
            </div>
        </div>
    </div>
    @if (session('crear'))
        <script>
            Swal.fire({
                icon: 'success',
                title: "{{ session('crear') }}",
                showConfirmButton: false,
                timer: 2500
            })
        </script>
        
        @endif
        @if (session('borrar'))
        <script>
            Swal.fire({
                icon: 'error',
                title: "{{ session('borrar') }}",
                showConfirmButton: false,
                timer: 2500
            })
        </script>
        @endif
  </x-app-layout>
  