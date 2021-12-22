@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 stretch-card grid-margin">
                    @include('layouts.partials.admin.leftmenu')
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">{{ __('Табло') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if(!isset($web))
                                    {{ __('You are logged in!') }}
                            @else
                                @include($web)
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
