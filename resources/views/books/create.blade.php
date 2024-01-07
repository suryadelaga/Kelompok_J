<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Buku Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <div class="max-w-xl">
                            <x-input-label for="title" value="Judul" />
                            <x-text-input id="title" type="text" name="title" class="mt-1 block w-full" value="{{ old('title') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="author" value="Penulis" />
                            <x-text-input id="author" type="text" name="author" class="mt-1 block w-full" value="{{ old('author') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('author')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="year" value="Tahun Terbit" />
                            <x-text-input id="year" type="text" name="year" class="mt-1 block w-full" value="{{ old('year') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('year')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="publisher" value="Penerbit" />
                            <x-text-input id="publisher" type="text" name="publisher" class="mt-1 block w-full" value="{{ old('publisher') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('publisher')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="city" value="Kota Terbit" />
                            <x-text-input id="city" type="text" name="city" class="mt-1 block w-full" value="{{ old('city') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('city')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="qty" value="Jumlah Buku" />
                            <x-text-input id="qty" type="text" name="qty" class="mt-1 block w-full" value="{{ old('qty') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('qty')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="bookshelf" value="Kategori Buku" />
                            <x-select-input id="bookshelf" name="bookshelf_id" class="mt-1 block w-full" required>
                                <option value="">Menu Pilihan</option>
                                @foreach ($bookshelves as $key => $value)
                                @if(old('bookshelf_id') == $key)
                                <option value="{{ $key }}" selected>{{ $value }}</option>
                                @else
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endif
                                @endforeach
                            </x-select-input>
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="cover" value="Sampul Buku" />
                            <x-file-input id="cover" name="cover" class="mt-1 block w-full" value="{{ old('cover') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('cover')" />
                        </div>

                        <x-secondary-button tag="a" href="{{ route('book') }}">Batal</x-secondary-button>
                        <x-primary-button name="save" value="true">Simpan</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>