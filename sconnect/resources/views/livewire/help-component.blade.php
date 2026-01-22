<div>
    <div class="form_panel">
    
        @if (!Route::is('page.contact'))
        <h3 class="mbottom">Besoin d'aide ?</h3>
        @endif

        @if ($errors)
            @foreach ($errors->all() as $item)
                <small class="textDanger">{{ $item }}</small>
            @endforeach
        @endif

        @if (Session::has("sending"))
            <div class="text_success mbottom" style="text-align: center;">{{ Session::get('sending') }}</div>
        @endif

    <form action="" wire:submit.prevent="helpSend" method="post">
        @csrf
        @if (Route::is('page.contact'))
        <div class="form_group">
              {{-- <label for="">Résoudre un problème technique</label> --}}
              <select class="form_control" name="" id="">

                <option selected>Cliquez pour choisir</option>
                <option value="Comprendre ma facture">• Comprendre ma facture</option>
                <option value="Suivre ma commande">• Suivre ma commande</option>
                <option value="Souscrire une nouvelle offre">• Souscrire une nouvelle offre</option>
                <option value="Gérer mon abonnement">• Gérer mon abonnement</option>
                <option value="Autres">• Autres</option>

              </select>
        </div>
        @endif
        <div class="form_group">
            <input type="text" class="form_control"  wire:model.defer="state.name" placeholder="Votre nom complet">
        </div>

        <div class="__row">
            <div class="form_group">
                <input type="email" class="form_control"  wire:model.defer="state.email" placeholder="E-mail adresse">
            </div>
            <div class="form_group">
                <input type="tel" class="form_control"  wire:model.defer="state.phone" placeholder="+243 XXXXXXXX">
            </div>
        </div>

        <div class="form_group">
            @if (Route::is('page.contact'))
                <label for="">Faites-nous un briefing de votre souci</label>
            @endif
            <textarea name="" class="form_controlf" wire:model.defer="state.body" id="" cols="30" rows="10" placeholder="Votre message ..."></textarea>
        </div>

        <div>
            <button type="submit" wire:loading.attr="disabled" class="btn_submit">Envoyez le message </button>
            <small wire:target="helpSend" wire:loading>Veuillez patienter ...</small>
        </div>
    </form>

</div>

</div>
