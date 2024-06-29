@extends('components.layout.layout')

@section('content')

    <div class="box">
        <form action="{{  route('faqs.update', $faq) }}" method="POST">
            @csrf
            @method('PUT')
            <h1 class="title is-4">Alter question</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please update the form fields and click 'Alter Question'
            </h2>

            {{-- Title --}}
            <div class="field">
                <label for="question" class="label">Question</label>
                <div class="control">
                    <input type="text" name="question" class="input" value="{{ $faq->question }}" autofocus>
                </div>
            </div>


            <div class="field">
                <label for="answer" class="label">Answer</label>
                <div class="control">
                    <input type="text" name="answer" class="input" value="{{ $faq->answer }}">
                </div>
            </div>


            <div class="field">
                <label for="link" class="label">Link</label>
                <div class="control">
                    <textarea name="link" class="textarea">{{ $faq->link }}</textarea>
                </div>
            </div>


            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Alter Question</button>
                </div>
            </div>
        </form>
    </div>

@endsection
