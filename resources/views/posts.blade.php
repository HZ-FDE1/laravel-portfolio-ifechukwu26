@extends('layout.layout')

@section('content')
<div>
    <h4>WELCOME TO MY BLOG PAGE!!!!</h4>
</div>

<main class="blog-content">
    <section class="studychoice">
        <details>
            <summary class="question">My Study(my motivation in my studies)</summary>
            <div class="answer">To know more click on <a href="my_studychoice.html">my study choice link</a></div>
        </details>
    </section>

    <section class="swot">
        <details>
            <summary class="question">My Strengths, Weakness, Opportunities and Threats</summary>
            <div class="answer">What are my SWOTS??? Click on <a href="SWOTS.html">my SWOTS analysis</a></div>
        </details>
    </section>

    <section class="experience">
        <details>
            <summary class="question">My Programming Experience </summary>
            <div class="answer">My programming experience hasn't reached the professional level but to know more Click on <a href="programexp.html">my programming experience</a></div>
        </details>
    </section>

    <section class="feedback">
        <details>
            <summary class="question">My feedback on my website</summary>
            <div class="answer">Click here to view <a href="feedback.html">my feedbacks</a></div>
        </details>
    </section>

    <section class="article">
        <details>
            <summary class="question">This is going to be about my ICT field of work</summary>
            <div class="answer">More information Click here<a href="ICT.html"> to know more</a></div>
        </details>
    </section>
</main>
@endsection
