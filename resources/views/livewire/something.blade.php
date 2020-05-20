<div>
    <div x-data x-init="new Choices($refs.select)">
        <select x-ref="select" wire:model="category_id">
            <option value="">Select an item</option>
            <option value="1">Item 1</option>
            <option value="2">Item 2</option>
        </select>
    </div>

    <pre>$category_id: {{ $category_id }}</pre>

    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js" defer></script>
</div>
