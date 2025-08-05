<div class="max-w-lg mx-auto p-4 bg-gray-100 border border-gray-300 rounded">
    <h2 class="text-lg font-semibold mb-4 border-b pb-2">Photo Upload</h2>

    @if (session()->has('success'))
    <div class="bg-green-100 text-green-700 px-3 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image:</label>
            <input type="file" wire:model="photo" id="photo"
                class="mt-2 block w-full border border-gray-300 rounded px-2 py-2">
            @error('photo') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Submit
        </button>
    </form>
</div>