@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('Ooops! Coś poszło nie tak.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ str_replace('password', 'Hasło', $error) }}</li>
            @endforeach
        </ul>
    </div>
@endif
