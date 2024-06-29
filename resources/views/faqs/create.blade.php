@extends('components.layout.layout')

@section('content')

    <style>
        .alert {
            padding: 15px;
            background-color: white; /* Changed to white */
            color: #f44336; /* Changed to red to match the text-danger class */
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #f44336; /* Added a border for better visibility */
        }
        .text-danger {
            color: #f44336;
            font-size: 0.875em;
        }
        .invalid-feedback {
            margin-bottom: 10px;
            color: red;
        }
    </style>

    <div class="box">
        {{-- Error Handling --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
                <div class="form-control">
                    <input type="text" name="question" class="input" value="{{ old('question') }}" required minlength="5" maxlength="255" autofocus>
                    @error('question')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        Please provide a valid question (5-255 characters).
                    </div>
                </div>
            </div>

            <div class="field">
                <label for="answer" class="label">Answer</label>
                <div class="control">
                    <textarea name="answer" class="textarea" required minlength="10">{{ old('answer') }}</textarea>
                    @error('answer')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        Please provide a valid answer (at least 10 characters).
                    </div>
                </div>
            </div>


            <div class="field">
                <label for="link" class="label">Link</label>
                <div class="control">
                    <input type="string" name="link" class="input"value="{{ old('link') }}">
                    @error('link')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        Please provide a valid URL.
                    </div>
                </div>
            </div>


            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
            </div>
        </form>
     </div>
    </div>
@endsection
