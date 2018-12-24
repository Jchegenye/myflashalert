@php
   $data = json_decode(json_encode(session('myflashalert_session')), true);
   //dd($data)
@endphp

@if (session()->has('myflashalert_session'))
    <div class="alert alert-{{ $data['level'] }} {{ $data['important'] ? 'alert-important' : '' }}" role="alert">
        @if ($data['important'])
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"
            >&times;</button>
        @endif

        {!! $data['message'] !!}
    </div>
@endif

{{ session()->forget('myflashalert_session') }}
