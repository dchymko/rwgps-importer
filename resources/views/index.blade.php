@extends('statamic::layout')
@section('title', __('Importer'))

@section('content')
    <header class="mb-6">
        @include('statamic::partials.breadcrumb', [
            'url' => cp_route('utilities.index'),
            'title' => __('Utilities')
        ])
        <h1>RWGPS Importer</h1>

        Enter an ActivityId to import
    </header>

    <run-import-form></run-import-form>
@stop