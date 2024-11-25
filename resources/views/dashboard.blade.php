<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <div class="p-6">
                    <h2 class="text-lg font-semibold">Dashboard Stats</h2>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-blue-100 p-4 rounded">
                            <h3 class="font-bold">Jumlah Item</h3>
                            <p>{{ $itemCount }}</p>
                        </div>
                        <div class="bg-green-100 p-4 rounded">
                            <h3 class="font-bold">Jumlah Kategori</h3>
                            <p>{{ $categoryCount }}</p>
                        </div>
                        <div class="bg-yellow-100 p-4 rounded">
                            <h3 class="font-bold">Jumlah Stok</h3>
                            <p>{{ $stockCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h2 class="text-lg font-semibold">Item Tersedia</h2>
                    <ul class="list-disc pl-5">
                        @foreach($items as $item)
                            <li>{{ $item->nama }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
