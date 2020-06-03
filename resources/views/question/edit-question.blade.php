@extends('layouts.lecturer')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Question</div>

                <div class="card-body">
                <form method="POST" action="{{ route('question.update',$question) }}">
            

            
                        @csrf
                        {{ method_field('PUT') }}
                        @include('errors.errmsg')
                        @if(session('msg'))
                            <div class="alert alert-success">
                                {{session('msg')}}
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="question" class="col-md-4 col-form-label text-md-right">{{ __('Question') }}</label>

                            <div class="col-md-6">
                                <textarea name="question" class="form-control @error('question') is-invalid @enderror" cols="30" rows="10"  autofocus>{{ $question->question }}</textarea>
                                @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="choice_1" class="col-md-4 col-form-label text-md-right">{{ __(' choice_1') }}</label>

                            <div class="col-md-6">
                                <input id="choice_1" name="choice_1" type="text" class="form-control @error('choice_1') is-invalid @enderror"  value="{{ $question->choice_1 }}" required autocomplete="choice_1" autofocus>

                                @error('choice_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="choice_2" class="col-md-4 col-form-label text-md-right">{{ __(' choice_2') }}</label>

                            <div class="col-md-6">
                                <input id="choice_2" name="choice_2" type="text" class="form-control @error('choice_2') is-invalid @enderror"  value="{{ $question->choice_2 }}" required autocomplete="choice_2" autofocus>

                                @error('choice_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="choice_3" class="col-md-4 col-form-label text-md-right">{{ __(' choice_3') }}</label>

                            <div class="col-md-6">
                                <input id="choice_3" name="choice_3" type="text" class="form-control @error('choice_3') is-invalid @enderror"  value="{{ $question->choice_3 }}" required autocomplete="choice_3" autofocus>

                                @error('choice_3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="choice_4" class="col-md-4 col-form-label text-md-right">{{ __(' choice_4') }}</label>

                            <div class="col-md-6">
                                <input id="choice_4" name="choice_4" type="text" class="form-control @error('choice_4') is-invalid @enderror"  value="{{ $question->choice_4}}" required autocomplete="choice_4" autofocus>

                                @error('choice_4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row"  id="correct">
                            <label for="correct" class="col-md-4 col-form-label text-md-right">{{ __('correct choice') }}</label>
                            <div class="col-md-6">
                            <select class="form-control"  name="correct" >
                            @for($i=1 ; $i<=4 ;$i++)
                                @if($i == $question->correct)
                                <option selected>{{$i}}</option>
                                @else
                                <option >{{$i}}</option>
                                @endif
                                @endfor 
                            </select>
                            </div>
                        </div>

                    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
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