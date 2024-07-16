@extends('layouts.client.app')

@section('title', 'Era')

@section('textEra', 'rounded border')

@section('content')

    <div class="container text-center my-5 py-5">
        <h4 class="text-white font-weight-bold">{{ __('Era') }}</h4>
        <div class="text-center d-flex flex-wrap justify-content-center">
            @foreach ($eras as $era)
                <div class="col-sm-4 col-md-3 p-3"><a href="{{ route('era.show', $era->id) }}"
                        class="btn text-white aktif border col-12">{{ $era->name }}</a></div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $eras->links() }}
        </div>
    </div>

@endsection
