<div>
    <section class="users">

        <header>
            <div class="content">
                <img src="https://eu.ui-avatars.com/api/?name={{auth()->user()->name}}&background=random" alt="" srcset="">
                <div class="details">
                    <span>{{ auth()->user()->name }}</span>
                    <div class="listpro">
                        <p><i class="fa fa-user-circle" aria-hidden="true"></i> Inscris depuis {{ auth()->user()->created_at }}</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{ auth()->user()->email }}</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;{{ auth()->user()->phone }}</p>
                    </div>
                </div>
            </div>
            <a href="{{ route('customer.how-area') }}" class="logout">MESSAGERIE <i class="fa fa-facebook-messenger    "></i></a>
        </header>
    
        {{-- <div class="search">
            <input type="search" wire:model="query" placeholder="Saisissez un mot clé ...">
            <button class="btn_search"><i class="fas fa-search"></i></button>
        </div> --}}
        {{-- Liste users --}}
        <div class="users_list">
        <div class="document_">
            <h6>{{ __("Téléverser documents") }}</h6>
            
            <form action="" wire:submit.prevent="addDocument" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form_group">
                    <input type="text" name="" class="form_control" wire:model.defer="designation" required 
                    placeholder="Donnez un nom au fichier">
                    @error('designation')
                       <div class="textDanger"> <small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="form_group">
                    <input type="file" name="" wire:model="file" id="" >
                    @error('file')
                       <div class="textDanger"> <small>{{ $message }}</small></div>
                    @enderror
                <small wire:loading wire:target="file">{{ __("Chargement du document") }}</small>

                </div>
                <div class="btn_group">
                    <button type="submit " wire:loading.attr="disabled" class="btn_telev">{{ __("Envoyez le document") }}</button>
                </div>
                <small wire:loading wire:target="addDocument">{{ __("Patientez le chargement ...") }}</small>
            </form>
        </div>

        {{-- Block --}}

        <div class="bg__white">
            @if (session()->has('success'))
                <small class="b_success">{{ session()->get('success') }}</small>
            @endif
           <ul class="ul_bg">
            @forelse ($documents as $key => $document)
                <li >
                    <div class="d_flex">
                        <span class="spanli"><i class="fa fa-file fa-2x" style="color: #6212ff" aria-hidden="true"></i>{{ $document->designation }}</span>
                    <a href="#" wire:click.prevent="deleteDoc({{ $document->id }})" class="delete"><i class="fa fa-trash textDanger"></i></a>
                    </div>
                </li>
            @empty
                <li style="text-align: center;">
                    <i class="fa fa-empty   "></i>
                    <small >{{ __("Aucun document téleversé") }}</small></li>
            @endforelse
           </ul>
        </div>
           {{-- @forelse ($users as $user)
            <a class="cover_link" href="">
                <div class="content">
                    <input type="checkbox" class="mr-2" name="" id="">

                    <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" alt="">
                    <div class="details">
                        <span>{{ $user->name }}</span>
                        <p>En line</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fa fa-circle"></i></div>
            </a>
            @empty
            <div>
                Aucun résultat correspondant au mot que vous avez saisis.
            </div>
            @endforelse --}}
        </div>
    
    </section>
</div>
