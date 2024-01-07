<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Buku') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white light:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                    <x-primary-button tag="a" href="{{ route('book.create') }}">Tambah Buku</x-primary-button>
                    <br><br>
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>kode Transaksi</th>
                                <th>Nama Pelanggan</th>
                                <th>Total</th>
                                <th>HPP</th>
                                <th>Laba</th>
                            </tr>
                        </x-slot>

                        @php $num=1; @endphp
                        @foreach ($books as $book)

                        <tr class="text-center">
                            <td>{{ $num++ }} </td>
                            <td>{{ $book->Tanggal }}</td>
                            <td>{{ $book->Kode_transaksi }}</td>
                            <td>{{ $book->Nama_pelanggan }}</td>
                            <td>{{ $book->Total }}</td>
                            <td>{{ $book->HPP }}</td>
                            <td>{{ $book->Laba }}</td>
                            
                            <td>
                                <x-primary-button tag="a" href="{{route('book.edit', $book->id)}}">Edit</x-primary-button>

                                <x-danger-button x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-book-deletion')"
                                    x-on:click="$dispatch('set-action', '{{route('book.destroy', $book->id) }}')">
                                    {{__('Delete') }}
                                </x-danger-button>
                            </td>
                        </tr>

                        @endforeach
                    </x-table>

                    <x-modal name="confirm-book-deletion" focusable maxWidth="xl">
                        <form method="post" x-bind:action="action" class="p-6">
                            @csrf
                            @method('delete')
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Apakah anda yakin akan menghapus data?') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Setelah proses dilaksanakan. Data akan dihilangkan secara permanen.') }}
                            </p>
                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>
                                <x-danger-button class="ml-3">
                                    {{ __('Delete!!!') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>