<div>
    something
</div>

@push('scripts')
    @if($someVariable)
        window.testLog = function(response) {
            @this.call('log', response);
        }
    @endif
@endpush
