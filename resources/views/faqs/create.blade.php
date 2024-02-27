@extends('layout.layout')

@section('content')

    <div class="box">
        <form action="{{ route('faqs.store') }}" method="POST">
            @csrf
            <h1 class="title is-4">What is your question?</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Submit'
            </h2>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="question" class="label">Question</label>
                <div class="control">
                    <input type="text" name="question" class="input" autofocus>
                </div>
            </div>

            <div class="field">
                <label for="answer" class="label">Answer</label>
                <div class="control">
                    <input type="text" name="answer" class="input">
                </div>
            </div>

            <div class="field">
                <label for="link" class="label">Link</label>
                <div class="control">
                    <input type="string" name="link" class="input">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
