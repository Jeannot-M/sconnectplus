<div>
    <section class="chat-area">
        <header>
            {{-- <div class="content"> --}}
                <a href="{{ route('customer.index', app()->getLocale()) }}" class="back_icon"><i class="fas fa-arrow-left"></i></a>
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" alt="" srcset="">
                <div class="details">
                    <span>{{auth()->user()->name}}</span>
                    <p>En line</p>
                </div>
            {{-- </div>
            <a href="" class="logout">Déconnexion</a> --}}
        </header>
        
        {{-- Chat box --}}
    
        <div class="chat_box" wire:poll>
    
            @forelse ($messages as $message)
            <div class="chat outgoing">
                <div class="details">
                    <p>{{ $message->content }}</p>
                </div>
                <img src="https://eu.ui-avatars.com/api/?name={{auth()->user()->name}}&background=random" alt="">
            </div>
    
            <div class="chat incoming">
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" alt="">
                <div class="details">
                    <p>{{ $message->content }}</p>
                </div>
            </div>
            @empty
                
            @endforelse
    
        </div>

        <form action="" wire:submit.prevent= "submitMessage" class="typing-area" method="post">
            @error('content')
            <small class="textDanger">{{ $message }}</small>
            @enderror
            <input type="text" name="" wire:model.defer="message" placeholder="Ecrire un message..." id="">
            <input type="hidden" value="{{ $receiver }}" wire:model.defer="receiver_id">
            <button type="type"><i class="fab fa-telegram-plane" ></i></button>
        </form>
    </section>
</div>
