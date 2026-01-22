<div>
    <div class="__format w60">
        @if (Session::has('success'))
            <div class="text_success">{{ Session::get('success') }}</div>
        @endif

        @if ($errors)
            @foreach ($errors->all() as $item)
                <small class="text_danger">{{ $item }}</small>
            @endforeach
        @endif
        
        <form action="#" wire:submit.prevent="submitCandi" method="post">
            @csrf

            <div class="form_group">
                <label for="" class="textBold">Choisir une formation</label>
                <select wire:model.defer="state.options" class="form_control" name="" id="" required>
                    <option value="Anglais (Général/ Affaire/ TOEFL/ IELTS/ TEFL/ TESOL)">Anglais (Général/ Affaire/ TOEFL/ IELTS/ TEFL/ TESOL)</option>

                    <option value="Français (Général)">Français (Général)</option>

                    <option value="Communication d'entreprise">Communication d'entreprise </option>

                    <option value="Management">Management </option>

                    <option value="Ressources Humaines">Ressources Humaines </option>

                    <option value="Entrepreneuriat">Entrepreneuriat </option>

                    <option value="Leadership">Leadership </option>

                    <option value="Secrétariat et Assistanat de Direction"> Secrétariat et Assistanat de Direction</option>

                    <option value="Marketing">Marketing </option>

                    <option value="Base de Données">Base de Données</option>

                    <option value="Infographie">Infographie</option>

                    <option value="Informatique Général">Informatique Général </option>

                    <option value="Maintenance des Ordinateurs">Maintenance des Ordinateurs </option>

                    <option value="Réseaux Informatiques">Réseaux Informatiques </option>

                    <option value="Sécurité Informatique">Sécurité Informatique </option>

                    <option value="Administrations Réseaux">Administrations Réseaux </option>

                    <option value="Vidéosurveillance">Vidéosurveillance </option>

                    <option value="Radiofrequence">Radiofrequence</option>

                    <option value="Optimisation Radiofrequence">Optimisation Radiofrequence</option>

                    <option value="Transmission Optique">Transmission Optique</option>

                    <option value="Transmission VSAT">Transmission VSAT</option>

                    <option value="Transmission Microwave">Transmission Microwave </option>

                    <option value="TOIP (Téléphonie sur IP)">TOIP (Téléphonie sur IP)</option>

                    <option value="VOIP (Voix sur IP)">VOIP (Voix sur IP)</option>
                </select>
                @error("option")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form_group">
                <label for="" class="textBold">Nom</label>
                <input type="text" wire:model.defer="state.noms" name="" placeholder="" id="" class="form_control" required>
                @error("noms")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form_group">
                <label for="" class="textBold">Post-nom</label>
                <input type="text" wire:model.defer="state.postnom" name="" placeholder="" id="" class="form_control" required>
                @error("postnom")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form_group">
                <label for="" class="textBold">Prenom</label>
                <input type="text" name="" wire:model.defer="state.prenom" placeholder="" id="" class="form_control">
                @error("prenom")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form_group">
                <label for="" class="textBold">Date de naissance</label>
                <input type="date" wire:model.defer="state.naissance" name="" placeholder="" id="" class="form_control">
                @error("naissance")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form_group">
                <label for="" class="textBold">Sexe</label>
                <select name="" wire:model.defer="state.sexe" class="form_control" id="">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
                @error("sexe")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form_group">
                <label for="" class="textBold">Pays</label>
                <input type="text" name="" wire:model.defer="state.payes" placeholder="" id="" class="form_control">
                @error("pays")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form_group">
                <label for="" class="textBold">Nationalité</label>
                <input type="text" name="" wire:model.defer="state.nationalite" placeholder="" id="" class="form_control">
                @error("pays")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form_group">
                <label for="" class="textBold">Niveau d'étude</label>
                <input type="text" name="" wire:model.defer="state.etude" placeholder="" id="" class="form_control">
                @error("etude")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form_group">
                <label for="" class="textBold">Profession</label>
                <input type="text" name="" wire:model.defer="state.profession" placeholder="" id="" class="form_control">
                @error("profession")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form_group">
                <label for="" class="textBold">Adresse physique complète</label>
                <input type="text" name=""  wire:model.defer="state.adresse"  placeholder="" id="" class="form_control">
                @error("email")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form_group">
                <label for="" class="textBold">Numéro de contact</label>
                <input type="tel" name="" wire:model.defer="state.phone"  placeholder="" id="" class="form_control">
                @error("phone")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form_group">
                <label for="" class="textBold">Email</label>
                <input type="email" wire:model.defer="state.email" name="" placeholder="" id="" class="form_control">
                @error("email")
                    <small class="textDanger">{{ $message }}</small>
                @enderror
            </div>
            <div wire:loading="submitCandi">Veuillez patientez ...</div>
            <div class="mt_2">
                <button type="submit" wire:target class="btn_ass">Envoyez</button>
            </div>
        </form>
    </div>
</div>
