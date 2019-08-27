@extends('welcome')
@section('content')
    <div class="container custom-container">
        <div class="row result">
            <div class="col-md-4">
                <h3 class="test-head">Your Perspective</h3>
                <p>Email: {{ $email }}</p>
                <p>Your perspective type is -<strong>{{ implode('', $data) }}</strong></p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <p class="dimension">Introversion(I)</p>
                    </div>
                    <div class="col-md-4">
                        <span class="result-indicator {{ (in_array('I',$data) ? 'enable' : 'disable') }}"></span><span class="result-indicator {{ (in_array('E',$data) ? 'enable' : 'disable') }}"></span>
                    </div>
                    <div class="col-md-4">
                        <p class="dimension">Extraversion (E)</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <p class="dimension">Sensing (S)</p>
                    </div>
                    <div class="col-md-4">
                        <span class="result-indicator {{ (in_array('S',$data) ? 'enable' : 'disable') }}"></span><span class="result-indicator {{ (in_array('N',$data) ? 'enable' : 'disable') }}"></span>
                    </div>
                    <div class="col-md-4">
                        <p class="dimension">Intuition (N)</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <p class="dimension">Thinking (T)</p>
                    </div>
                    <div class="col-md-4">
                        <span class="result-indicator {{ (in_array('T',$data) ? 'enable' : 'disable') }}"></span><span class="result-indicator {{ (in_array('F',$data) ? 'enable' : 'disable') }}"></span>
                    </div>
                    <div class="col-md-4">
                        <p class="dimension">Feeling (F)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="dimension">Judging (J)</p>
                    </div>
                    <div class="col-md-4">
                        <span class="result-indicator {{ (in_array('J',$data) ? 'enable' : 'disable') }}"></span><span class="result-indicator {{ (in_array('P',$data) ? 'enable' : 'disable') }}"></span>
                    </div>
                    <div class="col-md-4">
                        <p class="dimension">Perceiving (P)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection