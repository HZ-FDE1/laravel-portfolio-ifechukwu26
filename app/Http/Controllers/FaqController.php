<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        return view('faqs.show', [
            'faqs' => Faq::all()
        ]);
    }

    /**
     * Show the form for creating a new Faq.
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created Faq in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
            'link' => 'required|url', // Ensure the link is a valid URL
        ]);

        // Create the FAQ entry
        FAQ::create($validated);

        // Redirect to the dashboard or wherever appropriate

        return redirect()->route('faqs.index');    }


    /**
     * Display the specified Post.
     */
    public function show(Faq $faq)
    {
        return view('faqs.show', [
            'faqs' => $faq
        ]);
    }

    public function edit(Faq $faq)
    {
        return view('faqs.edit', [
            'faqs' => $faq
        ]);
    }

    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'required',
        ]);

        $faq->update($validated);

        return redirect()->route('faqs.index');
    }

    public function delete(Faq $faq) {
        return view('faqs.delete', [
            'faqs' => $faq
        ]);
    }

    public function destroy(Faq $faq) {
        $faq->delete();

        return redirect()->route('faqs.index');

    }
}
