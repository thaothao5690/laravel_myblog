<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

/**
 *
 */
class AdminContactController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->paginate(10);

        return view('admin.contacts.index', [
            'contacts' => $contacts,
            'title' => 'Admin / Contact'
        ]);
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function show(int $id)
    {
        $contact = Contact::find($id);

        return view('admin.contacts.show', [
            'contact' => $contact,
            'title' => 'Admin / Contact ' . $id
        ]);
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function reply(int $id)
    {
        $contact = Contact::find($id);

        return view('admin.contacts.reply',  [
            'contact' => $contact,
            'title' => 'Admin / Reply contact ' . $id
        ]);
    }

    /**
     * @param int $id
     * @param Request $request
     *
     * @return Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'reply' => 'required|string'
        ]);

        Contact::where('id', $id)->update([
            'status' => 10,
            'reply' => $request->input('reply')
        ]);

        $contact = Contact::find($id);
        $mailable = new ContactMail($contact);

        Mail::to($contact->email)->send($mailable);

        session()->flash('message', 'Sent successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('admin_contact.show', $id));
    }
}
