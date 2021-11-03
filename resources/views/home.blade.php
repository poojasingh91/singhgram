@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @for ($i = 0; $i < 10; $i++)
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="row border-bottom">
                                    <div class="col-md-12 h5">
                                        {{$posts[$i]['title']}}
                                    </div>
                                </div>
                                <div class="row pb-5 border-bottom">
                                    <div class="col-md-12">
                                        {{$posts[$i]['body']}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
