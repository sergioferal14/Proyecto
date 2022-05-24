<x-app-layout>
  <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8 container" >
  
      <div class="my-2 mb-5 grid md:grid-cols-2" style="min-height:calc(100vh-266px)">
          <div class=" card2 xl:w-96 ml-6 bg-white mr-6 mx-w-sm rounded overflow-hidden shadow-lg ">

              <div class="text-lg flex flex-row justify-top text-center"
                  style="background-color: #0288d1;color:white;">
                  <h3 class="font-bold px-6 py-4 ">Jugadores del {{$team->nombre}}</h3><img src="{{ asset('storage/'.$team->escudo) }}" class="mr-3 h-12 sm:h-12 mx-auto my-auto flex-end">
              </div>
              <div>
                  <x-tabla>
                      <table role="grid" class="min-w-full divide-y divide-gray-200">
                          <thead>
                              <tr role="row">
                                  <th
                                      style="text-align: center;background-color: white; border:none; outline:none;padding:10px;font-size:16px;">
                                      <input  wire:model="search"
                                          style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                          class="focus:bg-white focus:border-blue-600 focus:outline-none"
                                          placeholder="Search" aria-label="Search" aria-describedby="button-addon2" />

                                  </th>

                              </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200 overflow-auto" >

                              @if ($players->count())
                                  @foreach ($players as $item)
                                  <div>
                                      <tr class=" border-b hover:bg-sky-50 dark:hover:bg-sky-600">
                                          <a wire:click="edit({{ $item }})">
                                              <td role="gridcell">
                                                  <div style="display: flex;align-items:center;">
                                                      <div class="flex">
                                                          <img class="h-12 w-12 object-cover"
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
                                  <div class="mt-2 text-center font-bold text-lg">No se enconcotró ningún jugador.
                                  </div>
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
              @if ($control)
                  @livewire('create-player')
              @else
                  @livewire('update-player')
              @endif
          </div>
      </div>
  </div>
</x-app-layout>
