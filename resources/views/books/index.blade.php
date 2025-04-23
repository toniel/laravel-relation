<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Form Pencarian --}}
            <form method="GET" action="{{ route('books.index') }}" class="mb-8">
                <div class="flex flex-wrap gap-4 items-center">
                    <!-- Dropdown untuk Author -->
                    <div>
                        <label for="author" class="block text-sm font-medium text-gray-700">Author:</label>
                        <select id="author" name="author" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">All Authors</option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}" {{ request('author') == $author->id ? 'selected' : '' }}>
                                    {{ $author->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Dropdown untuk Category -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category:</label>
                        <select id="category" name="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">All Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="flex items-end">
                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 mt-6 rounded-md hover:bg-indigo-700 transition-colors">
                            Search
                        </button>
                    </div>
                </div>
            </form>

            {{-- Daftar Buku --}}
            <div class="flex flex-wrap">
                @foreach ($books as $book)
                <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                    <div class="flex flex-col bg-white p-6 rounded-lg">
                        <!-- Avatar -->
                        <a href="#" class="mx-auto">
                            <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                src="{{ $book->image }}">
                        </a>

                        <!-- Details -->
                        <div class="text-center mt-6">
                            <!-- Name -->
                            <h1 class="text-gray-900 text-xl font-bold mb-1">
                                {{ $book->title }}
                            </h1>

                            <div class="text-gray-700 font-light mb-2">
                                {{ $book->authors->implode('name', ', ') }}
                            </div>

                            <div class="flex items-center justify-center">
                                <p class="text-indigo-700 font-light mb-2">{{ $book->category->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
