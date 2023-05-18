@php
        if (empty($imgFile)) {
            $imgFile = 'aziendadefault.png';
        }
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';
        }

@endphp
<img src="{{ asset('images/aziende/' . $imgFile) }}" {!! $attrs !!}>