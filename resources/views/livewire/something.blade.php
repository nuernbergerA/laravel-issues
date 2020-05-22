<div>
    <div x-data x-init="new Choices($refs.select)">
        <select x-ref="select" wire:model="category_id">
            <option value="">Select an item</option>
            <option value="1">Item 1</option>
            <option value="2">Item 2</option>
        </select>
    </div>

    @dump($category_id)
</div>
