<div>
    <div class="row">
        <div class="col-md-7">
            <div class="bg-white p-5">
                <div class="mb-4">
                    <h4 class="text-bold mb-0">Carousels</h4>
                    <p>Les images que vous allez ajouter à ce niveau seront afficher à l'acceuil dans le slide</p>
                </div>
                @if ($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <div class="">
                    <form action="" wire:submit.prevent="submitCarousel" method="post">
                        @csrf
                        <div class="form-group">
                          <label for=""></label>
                          <input type="text" name="" id="" class="form-control" wire:model.defer="title"  placeholder="Donnez un titre" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <div class="form-group">
                          <label for="" class="text-bold">Visuel | Dimension à respecter 1400 x 600</label>
                          <input type="file" class="form-control-file" wire:model.defer="files" name="" id="" placeholder="">
                          @if ($this->files)
                             <img src="{{ $files->temporaryUrl() }}" class="img-fluid" width="40" alt="">
                          @endif
                        </div>

                        <div class="form-group" wire:ignore >
                            <div id="editora"></div>
                          <label for="">Ecrire une description du slide à ajouter</label>
                          <textarea class="form-control" wire:model="body" name="" id="content-area" rows="3"></textarea>
                        </div>
        
        
                        <x-adminlte-button label="AJOUTER UN SLIDE" theme="primary" type="submit" />
                    </form>
                </div>
            </div>
        </div>
    
        <div class="col-md-5">
            @if (Session::get('info_suppr'))
                <div class="alert alert-warning">{{ Session::get('info_suppr') }}</div>
            @endif

            @if (Session::get('message'))
                <div class="alert alert-warning">{{ Session::get('message') }}</div>
            @endif
           <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Titre</th>
                    <th>Visuel</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($carousels as $carousel)
                        <tr>
                            <td scope="row">{{ $carousel->title }}</td>
                            <td><img src="{{ $carousel->files }}" class="img-fluid w-25" alt="" srcset=""></td>
                            <td><input type="checkbox" wire:change="changeStatus({{ $carousel->id }})" {{ $carousel->status == true ? "checked" : ""}} name="" id=""></td>
                            <td><a href="#" wire:click.prevent="DeleteCarousel({{ $carousel->id }})"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4"><p class="text-center">No Data for now</p></td>
                        </tr>
                    @endforelse
                </tbody>
           </table> 
        </div>
    </div>
</div>
