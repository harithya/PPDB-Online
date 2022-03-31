<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex  align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18" style="text-transform: capitalize;">{{ $title }}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        @foreach ($badge as $key => $item)
                            @if (count($badge) == $key + 1)
                                <li class="breadcrumb-item active">{{ ucwords(str_replace('-', ' ', $item)) }}</li>
                            @else
                                <li class="breadcrumb-item"><a
                                        href="javascript: void(0);">{{ ucwords(str_replace('-', ' ', $item)) }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{ $slot }}
</div>
