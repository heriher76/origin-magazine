@extends('layouts.app')

@section('title', 'Promosi | Origin Magazine Indonesia')

@section('contents')
<div class="line">
	<div>Promosi</div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			@foreach($promotions as $promotion)
			<article class="article col-md-4">
				<div class="inner">
					<figure>
						<img src="{{ url('promotion/'.$promotion->thumbnail) }}" alt="Sample Article">
					</figure>
					<div class="padding">
						<div class="detail">
							<div class="time">{{ $promotion->updated_at->formatLocalized('%A, %d %B %Y') }}</div>
						</div>
						<h2>{{ $promotion->title }}</h2>
						<p>{!! $promotion->description !!}</p>
						
					</div>
				</div>
			</article>
			@endforeach
			<div class="col-md-12 text-center">
    			{{ $promotions->links() }}
    		</div>
		</div>
	</div>
</div>
@stop