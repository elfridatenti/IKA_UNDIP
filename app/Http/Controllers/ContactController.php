<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function contact_post(Request $require)
    {
        $insertRecord = new Contact;
        $insertRecord->name = trim($require->name);
        $insertRecord->email = trim($require->email);
        $insertRecord->subject = trim($require->subject);
        $insertRecord->message = trim($require->message);
        $insertRecord->save();

        return redirect('dashboard.contact.index')->with('success','Pesan Telah Dikirim');

    }
     public function index()
    {
        $contacts = Contact::paginate(10); // Ambil semua kontak dengan pagination
        
        return view('admin.contact.index', compact('contacts'));
    }
    public function view_contact(Request $request) {
        $keyword = $request->keyword;
        $view = Contact::where('name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('email', 'LIKE', '%' . $keyword . '%')
                ->orWhere('subject', 'LIKE', '%' . $keyword . '%')
                ->orWhere('message', 'LIKE', '%' . $keyword . '%')
                ->paginate(10);
     
        return view('admin.contact.index', ['contacs' => $view]);
    }

    public function store_contact(Request $request) {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:15',
            'message' => 'nullable|string',
            
        ]);

        // Menyimpan data ke database
        $user = Contact::create($validatedData);
        return redirect('/contact')->with('success', 'Contact Us telah dikirim!');
    }

    public function delete_contact($id) {
        // Menghapus data berdasarkan id
        $deletedContact = Contact::findOrFail($id);
        $deletedContact->delete();
        return redirect()->route('admin.contact.index')->with('success', 'Data Telah Terhapus!');
    }
}
