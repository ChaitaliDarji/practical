@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(Session::has('success-msg'))
                <p class="alert alert-success">{{ Session::get('success-msg') }}</p>
            @endif
            @if(Session::has('error-msg'))
                <p class="alert alert-danger">{{ Session::get('error-msg') }}</p>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Country Report') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('country.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Id" class="col-md-4 col-form-label text-md-right">{{ __('Id') }}</label>

                            <div class="col-md-6">
                                <input id="ID" type="text" class="form-control" name="id" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" name="country" required class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="language" class="col-md-4 col-form-label text-md-right">{{ __('Language') }}</label>

                            <div class="col-md-6">
                                <input id="language" name="language" type="text" required class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="chapters" class="col-md-4 col-form-label text-md-right">{{ __('Chapters') }}</label>
                        </div>
                        <div id="Chapters">
                            <div id="chap_0" class="chapSection">
                                <div class="form-group row">
                                    <label for="ch_id" class="col-md-4 col-form-label text-md-right">{{ __('Id') }}</label>

                                    <div class="col-md-6">
                                        <input id="id_0" name="chapter[0][id]" type="text" required class="form-control" >
                                    </div>

                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-secondary" id="chapter" value="0" sectionid="0">+</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" name="chapter[0][title]" type="text" required class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="data" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                                    <div class="col-md-6">
                                        <textarea class="form-control" name="chapter[0][data]" required id="data_0"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="section" class="col-md-4 col-form-label text-md-right">{{ __('Sections') }}</label>
                                    <div id="sections" sectionid="0" chapID="0" class="sectionMainDiv_0_0">
                                        <div id="section_0_0" class="sectionContainer">
                                            <div class="form-group row">
                                                <label for="sec0" class="col-md-4 col-form-label text-md-right">{{ __('Id') }}</label>

                                                <div class="col-md-6">
                                                    <input id="id_0_0" name="chapter[0][section][0][id]" required type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                                <div class="col-md-6">
                                                    <input id="title" name="chapter[0][section][0][title]" required type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="data" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                                                <div class="col-md-6">
                                                    <textarea class="form-control" required name="chapter[0][section][0][data]" id="data_0_0"></textarea>
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>
                                    <div> 
                                        <button type="button" class="btn btn-secondary" id="newSection" sectionid="0" chapID="0">+</button>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="form-group row mb-0" style="margin-top: 10px;">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('/js/countries.js')}}"></script>
@endsection