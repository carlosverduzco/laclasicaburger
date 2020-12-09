@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-black">{{ __('Whoops! Parece que algo salio mal.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-black">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
