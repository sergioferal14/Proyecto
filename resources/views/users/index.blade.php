<x-app-layout>
    <h3 style="border-radius: 10px;background-color:black;text-align: center;margin: auto;width:50%" class="mb-3 text-white font-bold p-2 text-2xl mt-4">Lista de Usuarios</h3>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden rounded">
                        <table class="min-w-full text-center ">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                <th scope="col" class="text-base font-medium text-white px-6 py-4">
                                        Foto
                                    </th>
                                    <th scope="col" class="text-base font-medium text-white px-6 py-4">
                                        ID
                                    </th>
                                    <th scope="col" class="text-base font-medium text-white px-6 py-4">
                                        Nombre
                                    </th>
                                    <th scope="col" class="text-base font-medium text-white px-6 py-4">
                                        Email
                                    </th>
                                    <th scope="col" class="text-base font-medium text-white px-6 py-4">
                                        Estado
                                    </th>
                                </tr>
                            </thead class="border-b">
                            <tbody class="text-center">
                                @foreach($users as $user)
                                <tr class="bg-white border-b">
                                <td class="px-6 py-2 whitespace-nowrap text-base font-medium text-gray-900">
                                      <img class=" object-cover w-14 h-14 rounded-full" src="{{ asset('storage/' . $user->profile_photo_path) }}">  
                                    
                                
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base font-medium text-gray-900">
                                        {{$user->id}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-base font-medium text-gray-900">
                                        {{$user->name}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-base font-medium text-gray-900">
                                    {{$user->email}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-base font-medium text-gray-900">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-white
                                                    @if ($user->email_verified_at) bg-green-500  @else bg-red-500 @endif">
                                                            @if ($user->email_verified_at)
                                                            Verificado
                                                            @else
                                                            No verificado
                                                            @endif
                                                        </span>
                                    </td>
                                </tr class="bg-white border-b">
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>