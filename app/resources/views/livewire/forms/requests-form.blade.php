<div class="bg-white shadow rounded-lg p-6 mb-6" style="max-width:600px">
    <h2 class="text-lg font-semibold mb-4">Создать новую заявку</h2>

    <form wire:submit.prevent="submit" class="grid gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Название</label>
            <input type="text" wire:model.defer="title"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Описание</label>
            <textarea wire:model.defer="description"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex gap-4">
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700">Статус</label>
                <select wire:model.defer="status"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @foreach(\App\Models\Request::STATUSES as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
                @error('status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700">Приоритет</label>
                <select wire:model.defer="priority"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @foreach(\App\Models\Request::PRIORITIES as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
                @error('priority') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Создать
        </button>
    </form>
</div>