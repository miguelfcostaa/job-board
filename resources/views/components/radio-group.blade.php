<div>
    @if ($allOption)
    <lable for=
    "{{ $name }}" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" value="" @checked(!request($name)) />
        <span class="ml-2">All</span>
    </lable>
    @endif

    @foreach ( $options as $option)
        <lable for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="{{ $option }}" @checked(($value ?? request($name)) === $option) />
            <span class="ml-2">{{ ucfirst($option) }}</span>
        </lable>
    @endforeach

    @error($name)
        <div class="mt-1 text-xs text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>
