@if ($type ==='Tidak Aktif')
   <div class="border border-red-500 bg-red-100 rounded-lg p-4">
            <h1 class="text-lg text-red-500 font-bold">Tidak Aktif</h1>
            <p class="text-red-500">{{ $slot }}</p>
 </div>

 @elseif($type ==='Aktif')
    <div class="border border-green-500 bg-green-100 rounded-lg p-4">
            <h1 class="text-lg text-green-500 font-bold">Aktif</h1>
            <p class="text-green-500">{{ $slot }}</p>
   </div>

    @else
        <div class="border border-gray-500 bg-gray-100 rounded-lg p-4">
                <h1 class="text-lg text-gray-500 font-bold">Status Tidak Diketahui</h1>
                <p class="text-gray-500">{{ $slot }}</p>
</div>
 @endif