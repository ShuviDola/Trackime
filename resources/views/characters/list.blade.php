@extends('layouts.skel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			{{ $character->name}}
			{{ $character->hair}}
        </div>
    </div>
</div>
@endsection
