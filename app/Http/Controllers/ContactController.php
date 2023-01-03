<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactValidationRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;

/**
 *
 */
class ContactController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        return view('contacts.index')->with('title', 'Contact us');
    }

    /**
     * @return Response
     */
    public function submit()
    {
        return view('contacts.create')->with('title', 'Submit your contact');
    }

    /**
     * @param ContactValidationRequest $request
     * @return Response
     */
    public function store(ContactValidationRequest $request)
    {
        $request->old('full_name', 'email', 'phone', 'title', 'content');

        $contact = Contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'title' => $request->title,
            'content' => $request->content,
            'status' => -1,
            'reply' => ''
        ]);

        if ($contact->save()) {
            $id = $contact->id;
            session()->flash('message', 'Sent successfully!');
            Session::flash('alert-class', 'alert-success');
        }

        return redirect(route('contact-us.show', $id));
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function show(int $id)
    {
        $contact = Contact::find($id);

        return view('contacts.show', [
            'contact' => $contact,
            'title' => 'Submitted!'
        ]);
    }
}
