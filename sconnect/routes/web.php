<?php

use App\Http\Controllers\Control\ControlController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Custormer\CustomerController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Livewire\Control\CarouselComponent;
use App\Http\Livewire\Control\FaqComponent;
use App\Http\Livewire\Control\NewsletterComponent;
use App\Http\Livewire\Control\SettingComponent;
use App\Http\Livewire\Control\UserComponent;
use App\Http\Livewire\Control\CandidatComponent;
use App\Http\Livewire\Control\ContactComponent;
// contact subscribe
use App\Models\Carousel;
use App\Models\Foire;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::redirect('/','/fr');

// Route::group(['prefix' => '{language?}'], function() 


        Route::get('/', function (Request $request) {


            // $carousels = Carousel::where('status', true)->get();
            // $questions = Foire::get();

            // // Newsletters
           

            return view('welcome', [
                // 'carousels' => $carousels,
                // 'questions' => $questions
            ]);
        })->name('welcome');
        
        // Page mentions légales
        Route::get('mentions-legales', function() {
            return view('mentions-legales');
        })->name('mentions-legales');
        
        // Page CGU
        Route::get('cgu', function() {
            return view('cgu');
        })->name('cgu');
        
        // Page FAQ
        Route::get('faq', function() {
            return view('faq');
        })->name('faq');
        
        // Page Politique de confidentialité
        Route::get('politique-confidentialite', function() {
            return view('politique-confidentialite');
        })->name('politique-confidentialite');
        
        // Routes pour les demandes de devis
        Route::get('demander-devis', [App\Http\Controllers\QuoteRequestController::class, 'index'])->name('quote-request.index');
        Route::post('demander-devis', [App\Http\Controllers\QuoteRequestController::class, 'store'])->name('quote-request.store');
        Route::post('/quote-request', [\App\Http\Controllers\QuoteRequestController::class, 'store'])->name('quote.request');
         Route::get('career/confirm', function() {
            return view('career-confirmation');
        })->name('career.confirm');

        
        // Page Qui sommes-nous
        Route::get('qui-sommes-nous', function() {
            return view('qui-sommes-nous');
        })->name('qui-sommes-nous');
        
        // Page Carrière
        Route::get('carriere', [\App\Http\Controllers\JobApplicationController::class, 'showForm'])->name('carriere');
        Route::post('carriere/submit', [\App\Http\Controllers\JobApplicationController::class, 'store'])->name('carriere.submit');
        

        // Page Grand Salon Entrepreneurial
        Route::get('grand-salon-entrepreneurial', function() {
            return view('grand-salon-entrepreneurial');
        })->name('grand-salon-entrepreneurial');
        
        // Page Contact
        Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
        Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
        
        // Routes pour les formulaires d'inscription au Grand Salon Entrepreneurial
        Route::get('gse-inscription-investisseur', [ProgrammeController::class, 'showInvestisseurForm'])->name('gse-inscription-investisseur');
        Route::post('gse-inscription-investisseur', [ProgrammeController::class, 'submitInvestisseurForm'])->name('gse-inscription-investisseur.submit');
        
        Route::get('gse-inscription-entrepreneur', [ProgrammeController::class, 'showEntrepreneurForm'])->name('gse-inscription-entrepreneur');
        Route::post('gse-inscription-entrepreneur', [ProgrammeController::class, 'submitEntrepreneurForm'])->name('gse-inscription-entrepreneur.submit');

        // Page Programme Jeune & Entrepreneur
        Route::get('programme-jeune-entrepreneur', [ProgrammeController::class, 'index'])->name('programme-jeune-entrepreneur');

        // Pages Sconnect Academy
        Route::get('sconnect-academy', function() {
            return view('sconnect-academy');
        })->name('sconnect-academy');

        Route::get('sconnect-academy/inscription', [App\Http\Controllers\ApplicationController::class, 'showForm'])->name('sconnect-academy.registration');
        
        Route::get('sconnect-academy/conditions', function() {
            return view('sconnect-academy-terms');
        })->name('sconnect-academy.terms');

        Route::post('sconnect-academy/register', [App\Http\Controllers\ApplicationController::class, 'register'])->name('sconnect-academy.register');
        
        Route::get('sconnect-academy/confirmation', [App\Http\Controllers\ApplicationController::class, 'confirmation'])->name('sconnect-academy.confirmation');

        // Routes pour le formulaire d'inscription
        Route::get('formulaire-inscription-programme', [ProgrammeController::class, 'showInscriptionForm'])->name('formulaire-inscription-programme');
        Route::post('formulaire-inscription-programme', [ProgrammeController::class, 'submitInscriptionForm']);

        // Routes pour le formulaire d'intervention
        Route::get('formulaire-intervention-emission', [ProgrammeController::class, 'showInterventionForm'])->name('formulaire-intervention-emission');
        Route::post('formulaire-intervention-emission', [ProgrammeController::class, 'submitInterventionForm']);
        
        // Route de confirmation pour les formulaires
        Route::get('confirmation-formulaire', [ProgrammeController::class, 'confirmation'])->name('programme.confirmation');

        Route::prefix('customer')->name('customer.')->group(function() {
            Route::get('', [CustomerController::class, 'index'])->name('index');
            Route::get('chat-area', [CustomerController::class, 'chat_area'])->name('how-area');
        });

       Route::prefix('page')->name('page.')->group(function () 
       {
            // Route::get('trouver-un-nouveau-telephone', function() {return view('pages.find_phone'); })->name('phone');
            // Route::get('choisir-un-forfait-mobile', function() {return view('pages.choisir_mobile'); })->name('mobile');
            // Route::get('changer-de-box-internet', function() {return view('pages.box_internet'); })->name('box');
            // Route::get('smart-tv', function() {return view('pages.smart'); })->name('smart');

            // Route::get('carriere', function() {return view('pages.carriere'); })->name('carriere');
            // Route::get('nous-decouvrir', function() {return view('pages.discover'); })->name('discover');
            // Route::get('generation', function() {return view('pages.generation'); })->name('generation');

            // // Footer

            // Route::get('Signaler-un-contenu', function() {return view('pages.signaler'); })->name('signaler');
            // Route::get('gerer-les-cookies', function() {return view('pages.cookies'); })->name('cookies');
            // Route::get('info-legale', function() {return view('pages.legale'); })->name('legale');
            // Route::get('accessibilite', function() {return view('pages.accessibilite'); })->name('accessibilite');
            // // Route::get('contact', function() {return view('pages.contact'); })->name('contact');

            // // Autres
            // Route::get('pourquoi-nous-choisir', function() {return view('pages.why'); })->name('why');
            // Route::get('sconnect-plus', function() {return view('pages.plus'); })->name('plus');
            
            // // 
            // Route::get('formation-professionnelle', function() {return view('pages.formation'); })->name('formation');
            // Route::get('detail-formations', function() {return view('pages.detail'); })->name('detail');
            // Route::get('candidautres', function() {return view('pages.candidat'); })->name('candidat');


       });

        require __DIR__.'/auth.php';

        Route::post('signaler', [WelcomeController::class, 'signaler'])->name('signaler');
        Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// });

Route::prefix('control')->name('control.')->group(function() {

    Route::middleware(['guest:admin', 'PreventHistory'])->group(function() {
        Route::get('login', [ControlController::class, 'login'])->name('login');
        Route::post('check', [ControlController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin', 'PreventHistory'])->group(function() {
        // Vers l'espace d'administration
        Route::get('index', [ControlController::class, 'index'])->name("index");
        Route::post('logout', [ControlController::class, 'logout'])->name("logout");
        Route::get('carousels', CarouselComponent::class)->name('carousel');

        Route::get('faqs', FaqComponent::class)->name('faqs');
        Route::get('users', UserComponent::class)->name('users');

        Route::get('newsletters', NewsletterComponent::class)->name('newsletters');
        Route::get('settings', SettingComponent::class)->name('settings');
        Route::get('candidats', CandidatComponent::class)->name('candidats');
        // Route::get('contacts', ContactComponent::class)->name('contact');
    });

});