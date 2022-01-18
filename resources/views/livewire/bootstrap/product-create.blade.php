<div>
    @if (session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">
            Product name
        </label>
        <div class="col-md-6">
            <input wire:model="product.name" type="text"
                   class="form-control @error('product.name') is-invalid @enderror"/>
            @error('product.name')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="categories" class="col-md-4 col-form-label text-md-right">
            Categories
        </label>
        <div class="col-md-6">
            <div wire:ignore>
                <select id="categories"
                        class="form-control select2"
                        multiple>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('product.categories')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button wire:click="submitForm" type="submit" class="btn btn-primary">
                Add Product
            </button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener("livewire:load", () => {
            let el = $('#categories')
            initSelect()

            Livewire.hook('message.processed', (message, component) => {
                initSelect()
            })

            Livewire.on('setCategoriesSelect', values => {
                el.val(values).trigger('change.select2')
            })

            el.on('change', function (e) {
                @this.set('product.categories', el.select2("val"))
            })

            function initSelect () {
                el.select2({
                    placeholder: '{{__('Select your option')}}',
                    allowClear: !el.attr('required'),
                })
            }
        })
    </script>
@endpush
