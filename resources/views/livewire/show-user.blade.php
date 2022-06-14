<div>

    <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8 container">
        <h3 style="border-radius: 10px;background-color:black;text-align: center;margin: auto;width:50%"
            class="mb-3 text-white font-bold p-2 text-2xl mt-4">Listado de Usuarios</h3>


        <div class=" xl:w-96 ml-6 mx-auto" style="margin-top: 40px;">
            <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                <input type="search" wire:model="search"
                    class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <button
                    class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                    type="button" id="button-addon2">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <x-tabla>
            <table class="min-w-full text-center mt-4">
                <thead class=" bg-gray-800" >
                    <tr>
                    <th scope="col" class="text-base font-medium text-white px-6 py-3" style="border-radius: 10px 0px 0px 0px;">
                            Foto
                        </th>
                        <th scope="col" class="whitespace-nowrap text-base font-medium text-white px-6 py-3 cursor-pointer" wire:click="ordenarPor('id')">
                            ID <i class="fas fa-sort"></i>
                        </th>
                        <th scope="col" class="text-base font-medium text-white px-6 py-3 cursor-pointer" wire:click="ordenarPor('name')">
                            Nombre <i class="fas fa-sort"></i>
                        </th>
                        <th scope="col" class="text-base font-medium text-white px-6 py-3 cursor-pointer" wire:click="ordenarPor('email')">
                            Email <i class="fas fa-sort"></i>
                        </th>
                        <th scope="col" class="text-base font-medium text-white px-6 py-3">
                            Estado
                        </th>
                        <th scope="col" class="text-base font-medium text-white px-6 py-3" style="border-radius: 0px 10px 0px 0px;">
                            Borrar
                        </th>
                    </tr>
                </thead class="border-b">
                <tbody class="text-center">
                    @foreach($users as $user)
                    @if(auth()->user()->id == $user->id)
                    <tr class="bg-sky-400 border-b">
                    @else
                    <tr class="bg-white border-b">
                    @endif
                    
                    <td class="px-6 py-2 whitespace-nowrap text-base font-medium text-gray-900">
                          <img class=" object-cover w-14 h-14 rounded-full" src=" @if($user->profile_photo_path) {{asset('storage/'.$user->profile_photo_path) }} @else {{ $user->profile_photo_url }} @endif">  
                        
                    </td>
                    <td class="px-6 py-3 whitespace-nowrap text-base font-medium text-gray-900">
                            {{$user->id}}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap text-base font-medium text-gray-900">
                            {{$user->name}}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap text-base font-medium text-gray-900">
                        {{$user->email}}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap text-base font-medium text-gray-900">
                        <span  wire:click="cambiarEstado({{$user}})" class=" cursor-pointer px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-white
                                        @if ($user->email_verified_at) bg-green-500  @else bg-red-500 @endif">
                                                @if ($user->email_verified_at)
                                                Verificado
                                                @else
                                                No verificado
                                                @endif
                                            </span>
                        </td>
                        <td class="px-6 py-3  text-base font-medium text-gray-900">
                            <button wire:click="borrar({{ $user }})"
                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-3 rounded">
                <i class="fa-solid fa-trash" onclick="return confirm('¿Borrar el usuario {{$user->name}}?')"></i></button>
                            </td>
                    </tr class="bg-white border-b">
                    @endforeach
                </tbody>
            </table>
        </x-tabla>



        <div class="mt-2 mb-4">
            {{ $users->links() }}
        </div>

    </div>

</div>
