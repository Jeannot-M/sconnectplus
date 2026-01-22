<?php

namespace App\Http\Livewire\Customer;

use App\Models\Document;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class IndexComponent extends Component
{

    use WithFileUploads;

    public String $query = "";

    public $user;
    public $file;
    public $designation;

    // public function updatedQuery() 
    // {
    //     $words = '%' . $this->query . '%';

    //     if (strlen( $this->query) > 2) {
    //         $this->user = User::where('name','like',$words)
    //             ->orwhere('email','like', $words)
    //             ->get();
    //     }

                
    // }

    public function addDocument() 
    {
        $this->validate([
            'designation' => 'required',
            'file' => 'required'
        ]);

        $filename = $this->file->store('public');
        // dd($filename);

        $document = new Document();
        $document->designation = $this->designation;
        $document->user_id = auth()->user()->id;
        $document->file = $filename;
        $document->save();

        session()->flash('success', 'Donnée(s) ajoutée(e) avec succès!');

        $this->reset();
    }

    public function deleteDoc($id) {
       $document = Document::find($id);
       $document->delete();
       session()->flash('success', 'Vous avez supprimer avec succès !');
    }

    public function render()
    {
        $words = '%' . $this->query . '%';

        $users = User::where('name','like',$words)
        ->orwhere('email','like', $words)->latest()->get();
        $documents = Document::where('user_id', auth()->user()->id)->latest()->get();
        return view('livewire.customer.index-component', [
            'documents' => $documents,
            'users' => $users
        ]);
    }
}
