<div>
   <div class="bg-white p-4">
    <div class="my-2">
        <h4 class="text-bold">Contacts</h4>
    </div>
            <div class="row">
                @forelse ($contacts as $item)
                    <div class="col-md-4">
                        {{ $item }}
                    </div>
                @empty
                    
                @endforelse
            </div>
   </div>

   <div class="mt-4 bg-white p-4">
    <div class="my-2">
        <h4 class="text-bold">Signale</h4>
    </div>
    <div class="row">
        @forelse ($signales as $item)
            <div class="col-md-4">
                <p>{{ $item->descrimination }}</p>
            </div>
        @empty
            
        @endforelse
    </div>
   </div>
</div>
