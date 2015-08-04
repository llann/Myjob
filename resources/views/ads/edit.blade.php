@extends('layout.layout')

@section('title', $ad->title)

@section('content')
<div class="row">
	<div class="ten wide column">

    <h3>{{ trans('ads.titles.edit') }}</h3>

    {!! Form::model($ad, [
        'action' => ['AdController@update', $ad->url], 
        'class' => 'ui form validation', 
        'method' => 'PUT']) !!}
        
		@include('ads.elements.form') 
		
		<div class="align-center">
			<div class="ui red submit button mt">{{ trans('ads.buttons.submit.edit') }}</div>
		</div>

    {!! Form::close() !!}
	</div>
	<div class="six wide column">
		
		@include('ads.elements.rules')
		
	</div>
</div>
@stop