@extends('layouts.app')
@section('content')
    <div class="dashboard">
        <div class="container-fluid">
            <div class="q-a">
                <div class="row">
                    <div class="col-12 top-header">
                        <div class="title text-center">
                            <i class="fas fa-graduation-cap"></i> &nbsp;
                            <span>Online Exam Admin</span>&nbsp;&nbsp; &nbsp;
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        @if(session('success'))
                            <div id="success" class="alert alert-success text-center mt-3" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="que-data-container">
                            <form action="{{ route('addQuestion') }}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="Q">Add Question: </label>
                                            <input name="Question" type="text" class="form-control" id="Q" />
                                            <div class="text-danger">
                                                @error('Question')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12 answers">
                                            <label>Insert Answers: </label> <br/>
                                            @if(session('error'))
                                                <div class="text-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                            <div class="ans-input-cont">
                                                <input name="answer[]" type="text" class="form-control border-success" placeholder="Ans: 1" />
                                                <input name="answer[]" type="text" class="form-control border-danger " placeholder="Ans: 2"/>
                                                <input name="answer[]" type="text" class="form-control border-danger " placeholder="Ans: 3"/>
                                                <input name="answer[]" type="text" class="form-control border-danger" placeholder="Ans: 4"/>
                                                <input type="hidden" name="questionType" value="mcq">
                                                <input type="hidden" name="exam_id" value="{{ $id }}">

                                            </div>
                                        </div>

                                        <div class="col-12 text-center add-btn">
                                            <button type="submit" class="btn btn-outline-primary">Insert Q & A</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection











    <script src="assests/js/jquery-3.4.1.min.js"></script>
    <script src="assests/js/bootstrap.min.js"></script>
    <script src="assests/js/popper.js"></script>
    <script src="assests/js/main.js"></script>
</body>
</html>
