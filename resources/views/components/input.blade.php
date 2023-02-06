@props([
    'type' => 'text',
    'class',
    'name',
    'placeholder' => '',
    'value' => '',
])
                    <div class="uk-form-group">
                        <label class="uk-form-label"> {{ $slot }}</label>
                        <div class="uk-position-relative w-100">
                            <input {{ $attributes->merge(['class' => 'uk-input ']) }} type="{{ $type }}" name="{{ $name }}"
                                value="{{ $value }}" placeholder="{{ $placeholder }}">
                        </div>
                    </div>
