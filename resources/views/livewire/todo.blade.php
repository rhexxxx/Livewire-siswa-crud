<div class="max-w-xl mx-auto p-4">
    <form wire:submit.prevent="add" class="flex mb-4">
        <input type="text" wire:model="todo" placeholder="Enter todo" class="flex-1 p-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring focus:border-blue-300">
        <button type="submit" class="p-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600">Add</button>
    </form>

    <ul class="space-y-2">
        @foreach($todos as $index => $todo)
            <li class="flex items-center">
                <input type="checkbox" wire:click="toggleDone({{ $index }})" class="mr-2" {{ $todo['done'] ? 'checked' : '' }}>
                <span class="flex-1 {{ $todo['done'] ? 'line-through text-gray-500' : '' }}">
                    {{ $todo['text'] }}
                </span>
                <button wire:click="delete({{ $index }})" class="ml-2 text-red-500 hover:text-red-700">Delete</button>
            </li>
        @endforeach
    </ul>
</div>

