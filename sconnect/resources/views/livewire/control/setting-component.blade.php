<div>
    <div class="row ">
        <div class="offset-3 col-md-6">
            <form action="" wire:submit.prevent="SettingUpdated" method="post" class="bg-white p-4 rounded">
                @csrf
                @if ($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <div>
                    <h4 class="text-bold text-base">Paramètrage du site</h4>
                    <p>Les informations que vous aller renseigner dans ce formulaire peuvent être mise à jour sur le même formulaire. je m'égare un peu, oups! qu'est-ce que je viens de dire là?</p>
                </div>

                <div class="form-group">
                    <label for="">Titre du site</label>
                    <input type="text" class="form-control" name="" wire:model.defer="state.title" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Le titre du site qui doit s'afficher en onglet</small>
                  </div>

                <div class="form-group">
                  <label for="">E-mail adresse</label>
                  <input type="email" class="form-control" name="" wire:model.defer="state.email" id="" aria-describedby="emailHelpId" placeholder="">
                  <small id="emailHelpId" class="form-text text-muted">Adresse e-mail de contact</small>

                </div>

                  <div class="form-group">
                    <label for="">Phone N°</label>
                    <input type="tel" class="form-control" name="" wire:model.defer="state.phone" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Numero de téléphone du service client</small>
                  </div>

                  <div class="mb-2">
                    <h6 class="text-bold text-warning">Social Media</h6>
                  </div>

                  <div class="form-group">
                    <label for="">Facebook</label>
                    <input type="url" class="form-control" name="" wire:model.defer="state.facebook" placeholder="http://facebook.com/" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Renseigner le lien facebook de votre page</small>
                  </div>

                  <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="url" class="form-control" name="" wire:model.defer="state.instagram" placeholder="http://instagram.com/" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Renseigner le lien instagram de votre compte</small>
                  </div>

                  <div class="form-group">
                    <label for="">Twitter</label>
                    <input type="url" class="form-control" name="" wire:model.defer="state.twitter" placeholder="http://twitter.com/" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Renseigner le lien twitter de votre compte</small>
                  </div>

                  <div class="form-group">
                    <label for="">Linkedin</label>
                    <input type="url" class="form-control" name="" wire:model.defer="state.linkedin" placeholder="http://linkedin.com/" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Renseigner le lien linkedin de votre compte</small>
                  </div>

                  <div class="mb-3 text-bold text-warning">Autres ...</div>

                  <div class="form-group">
                    <label for="">Message header</label>
                    <input type="text" class="form-control" name="" wire:model.defer="state.text_top" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Ceci est message qui s'afficher au-dessus du carousel à l'accueil du site</small>
                  </div>

                  <div class="form-group">
                    <label for="">Footer Assistance message</label>
                    <input type="text" class="form-control" name="" wire:model.defer="state.assistance" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Donnez un détail sur l'assistance de la clientèle brièvement</small>
                  </div>

                <button type="submit" class="w-100 btn btn-dark text-uppercase">Enregister vos parametres</button>
            </form>
        </div>
    </div>
</div>
