@extends('layouts.app')

@section('content')
<title>Online Exam</title>
    <div class="dashboard exam">
        <div class="container-fluid">
            <div class="q-a">
                <div class="row">
                    <div class="col-12 top-header">
                        <div class="title text-center">
                            <i class="fas fa-graduation-cap"></i> &nbsp; &nbsp; &nbsp;
                            <span>Online Exam</span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                            <i class="fas fa-graduation-cap"></i>
                        </div>


                    </div>
                </div>

               <form action="{{ route('examCheck') }}" method="POST">
                @csrf
                    <div class="exam-cont">
                    <div class="row">
                        @foreach ($questions->shuffle() as $index => $question )

                        <div class="col-12 question-container">
                            <label class="que">Q{{ $index+1 }}: {{ $question->Question }}</label>

                            <div class="ans-cont">
                                @foreach ($question->answers() as $answer)
                                    <div>
                                        <input type="radio" name="answer[{{ $question->id }}]" value="{{ $answer }}"/> <label>{{ $answer}}</label>
                                    </div>
                                @endforeach
                                
                        </div>
                        </div>
                        @endforeach
                        <div class="col-12 text-center add-btn">
                            <button type="submit" class="btn btn-outline-primary">Submit Answer</button>
                        </div>
                    </div>
                    </div>
               </form>

            </div>
        </div>
    </div>
@endsection
