@extends('components.layout.layout')

@section('content')
    <div>
        <h4>FREQUENTLY ASKED QUESTIONS!!!!</h4>
    </div>
{{--    <main class="control-faq">--}}
{{--        <section class="faqs">--}}
{{--            <details>--}}
{{--                <summary class="question">Can you print a document from your laptop at Hz?</summary>--}}
{{--                <div class="answer">You can print a document by <a--}}
{{--                            href="https://hz-mobility.mynetpay.nl:9164/client-setup/known-host/windows.html">clicking--}}
{{--                        here</a> to download the mobility app and inputing your username and password.--}}
{{--                    <p>Then it becomes easy to choose the printer that is close to you.</p>--}}
{{--                    <p>Go to the printer that is close to you, scan your student ID card and then you can print your--}}
{{--                        document.</p>--}}
{{--                </div>--}}
{{--            </details>--}}

{{--            <details>--}}
{{--                <summary class="question">How can you scan a document and send it to your laptop at HZ?</summary>--}}
{{--                <div class="answer">--}}
{{--                    You can print a document by <a--}}
{{--                            href="https://hz-mobility.mynetpay.nl:9164/client-setup/known-host/windows.html">clicking--}}
{{--                        here</a> to download the mobility app and inputing your username and password.--}}
{{--                    <p>Then it becomes easy to choose the printer that is close to you.</p>--}}
{{--                    <p>Go to the printer that is close to you, scan your student ID card and then you can now scan your--}}
{{--                        document.</p>--}}
{{--                </div>--}}
{{--            </details>--}}
{{--            <details>--}}
{{--                <summary class="question">How can I buy something (like when I sign up for the IT introduction event) on--}}
{{--                    the HZ web shop?--}}
{{--                </summary>--}}
{{--                <div class="answer">You enter the <a--}}
{{--                            href="https://webshop.hz.nl/webshopapp/default.aspx?menu=082076044027019251066025111065201099237062130097">HZ--}}
{{--                        webshop page</a> and after it you need to log in. After authenticating you are able to choose--}}
{{--                    and thus purchase tickets or enrol in for some events--}}
{{--                </div>--}}
{{--            </details>--}}
{{--            <details>--}}
{{--                <summary class="question">How can you book a project space in one of the wings?</summary>--}}
{{--                <div class="answer">You can book it via <a href="https://hzuniversity.topdesk.net/tas/public/ssp/">self--}}
{{--                        service portal</a>. <br>--}}
{{--                    Make a reservation, next reserve meeting room or Project Group room then Reserve a room--}}
{{--                    and then you can take an available time and approve it.--}}
{{--                </div>--}}
{{--            </details>--}}
{{--            <details>--}}
{{--                <summary class="question">What are the instructions if you want to park your car at the HZ parking--}}
{{--                    lot?--}}
{{--                </summary>--}}
{{--                <div class="answer">You need to show your HZ pass at the barriers so as to get into the HZ parking lot--}}
{{--                    and park.--}}
{{--                </div>--}}
{{--            </details>--}}
            @foreach($faqs as $faq)
                <details>
                    <summary>{{ $faq->question }}</summary>
                    <p>{!! $faq->answer !!}</p>
                    <div>
                        {!! $faq->link !!}
                    </div>
                    <a href="/faq/{{ $faq->id }}/edit" class="button is-primary">Edit Question</a>
                    <a href="/faq/{{ $faq->id }}/delete" class="button is-primary">Delete Question</a>
                </details>
            @endforeach
            <a href="{{route('faqs.create')}}" class="button is-primary">Do you still have a question?</a>
{{--        </section>--}}
{{--    </main>--}}
@endsection

