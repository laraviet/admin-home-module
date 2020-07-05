@extends('layouts.admin.master')

@section('title') {{ __('core::labels.home') }} @endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') {{ __('core::labels.home') }}  @endslot
        @slot('li_1') {{ __('core::labels.home') }}  @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h1>{{ __('core::labels.home') }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
