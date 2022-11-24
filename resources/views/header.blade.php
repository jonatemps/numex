@push('head')
    <link
        href="{{asset('img/icon.jpg')}}"
        id="favicon"
        rel="icon"
    >
@endpush

<p class="h2 n-m font-thin v-center">
    <img height="35px" width="35px" src="{{asset('img/icon.jpg')}}" alt="logo">
    {{-- <x-orchid-icon path="database"/> --}}

    <span class="m-l d-none d-sm-block">
        Numex
        <small class="v-top opacity">Platform</small>
    </span>
</p>
