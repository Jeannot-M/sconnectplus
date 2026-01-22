<?php

namespace App\Http\Livewire\Control;

use App\Models\Carousel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;


class CarouselComponent extends Component
{

    use WithFileUploads;

    public $files;
    public $title;
    public $body;

    public function submitCarousel() 
    {

        $this->validate([
            'title' => "nullable|string",
            'body' => "nullable|string",
            'files' => "required|image|mimes:png,jpg,webp",
        ]);

        $files = $this->files;
        $filename = substr(uniqid(rand(), true), 8, 8) . '.' . $files->hashName();

        Carousel::create([
            'title' => $this->title,
            'files' => "/images/carousels/". $filename,
            'body'  => $this->body
        ]);

        Image::make($this->files)->fit(1400, 750)->save('images/carousels/' . $filename);
        $this->reset();
        session()->flash('success','Carousel ajouter avec succès');

    }

    public function DeleteCarousel($id)
    {
        $carousel = Carousel::findOrFail($id);
        if ($carousel->files == '/images/carousels/'. $carousel->files) {
            unlink('/images/carousels/' . $carousel->files);
        }
        $carousel->delete();

        session()->flash('info_suppr','Vous avez supprimer avec succès');

    }

    public function changeStatus($id)
    {
        $product = Carousel::findOrFail($id);
        if ($product->status == false) {
            $product->update(['status' => true ]);
            session()->flash('message', 'Ce slide est maintenant activé avec succès!');
        } else {
            $product->update(['status' => false ]);
            session()->flash('message', 'Ce slide est désactivé du site.');
        }

    }
    public function render()
    {
        return view('livewire.control.carousel-component' , [
            "carousels" => Carousel::get()
        ])->extends('control.layouts.main')->section('content_text');
    }
}
