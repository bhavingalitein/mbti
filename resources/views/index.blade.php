@extends('welcome')
@section('content')
<div class="container custom-container">
    <h3 class="test-head">Discover your Perspective</h3>

    <div class="row justify-content-center">
        <div class="col-8">
            <form id="QuestionForm" action="{{ url('/result') }}" accept-charset="UTF-8" method="post">
                {{csrf_field()}}
                <div class="card text-center">
                    <div class="card-body">
                        <p>You find it takes effort to introduce yourself to other people.</p>
                        <div class="choice">
                            <span class="disgree">Disagree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[1]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[1]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[1]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[1]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[1]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[1]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[1]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p>You consider yourself more practical than creative.</p>
                        <div class="choice">
                            <span class="disgree">Disgree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[2]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[2]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[2]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[2]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[2]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[2]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[2]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p>Winning a debate matters less to you than making sure no one gets upset.</p>
                        <div class="choice">
                            <span class="disgree">Disgree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[3]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[3]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[3]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[3]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[3]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[3]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[3]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p>You get energized going to social events that involve many interactions.</p>
                        <div class="choice">
                            <span class="disgree">Disgree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[4]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[4]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[4]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[4]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[4]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[4]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[4]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p>You often spend time exploring unrealistic and impractical yet intriguing ideas.</p>
                        <div class="choice">
                            <span class="disgree">Disgree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[5]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[5]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[5]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[5]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[5]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[5]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[5]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p>Deadlines seem to you to be of relative rather than absolute importance.</p>
                        <div class="choice">
                            <span class="disgree">Disgree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[6]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[6]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[6]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[6]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[6]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[6]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[6]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p>Logic is usually more important than heart when it comes to making important decisions.</p>
                        <div class="choice">
                            <span class="disgree">Disgree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[7]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[7]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[7]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[7]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[7]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[7]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[7]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p>Your home and work environments are quite tidy.</p>
                        <div class="choice">
                            <span class="disgree">Disgree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[8]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[8]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[8]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[8]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[8]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[8]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[8]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p>You do not mind being at the center of attention.</p>
                        <div class="choice">
                            <span class="disgree">Disgree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[9]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[9]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[9]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[9]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[9]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[9]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[9]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p>Keeping your options open is more important than having a to-do list.</p>
                        <div class="choice">
                            <span class="disgree">Disgree</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[10]" id= "radio" value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[10]" value="2">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[10]" value="3">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[10]" value="4">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[10]" value="5">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[10]" value="6">
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank[10]" value="7">
                            </div>
                            <span class="agree">Agree</span>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="you@example.com" required="required" />
                        </div>
                    </div>
                </div>
                <input type="submit" name="commit" value="Save &amp; Continue" class="btn btn-primary text-center" id="QuestionsSubmits" data-disable-with="Save &amp; Continue" />
            </form>  </div>
    </div>
</div>
@endsection