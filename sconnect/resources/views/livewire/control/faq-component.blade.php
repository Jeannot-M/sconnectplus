<div>
    <div class="row">
        <div class="offset-2 col-md-8">
            <div class="p-4 bg-white">
                <div class=" w  mb-4">
                 <h4 class="text-bold">Foire aux questions</h4>
                 <p class=" d-block">La section fait réference aux questions que peuvent se pauser un visiteur vous consernant et comment vous vous presenter...</p>
                </div>
                @if ($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <div>
                     <form action="" wire:submit.prevent="submitFAQ" method="post">
                         @csrf
                         <div class="form-group">
                           <label for="">Question</label>
                           <input type="text" name="" id="" wire:model.defer="quiz" class="form-control" placeholder="" aria-describedby="helpId">
                           <small id="helpId" class="text-muted">Posez-vous une question sur certains des objectifs ou autres ...</small>
                         </div>
         
                         <div class="form-group" wire:ignore>
                           <label for="">Reponse</label>
                           <textarea class="form-control"  wire:model.defer="answer" name="" id="formation" rows="3"></textarea>
                           <small id="helpId" class="text-muted">Repondez à la question que vous vous êtes posée</small>
                         </div>
         
                         <button type="submit" class="btn btn-primary text-center w-100">Soumettre la question</button>
                     </form>
                </div>
             </div>
        </div>
    </div>
</div>
