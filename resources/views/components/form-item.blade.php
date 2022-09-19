<div class="w-full px-3 mb-5">
    <label for="{{ $name }}" class="form-label capitalize">{{ implode(' ', explode('_', $name)) }}</label>
    <input {{ $attributes }} type={{ $type ?? 'text' }} name="{{ $name }}" id="{{ $name }}"
        class="form-input  @error($name) border-red-500 @enderror" placeholder="{{ $placeholder ?? '' }}"
        value="{{ $value ?? '' }}">
    @error($name)
        <span class="text-red-500 text-xs">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
