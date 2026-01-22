<div>
    <div class="bwhiteg- p-3">
        <div class="mb-3 row">
            <div class="col-md-8">
                <h4 class="text-bold mb-0">Les candidats aux formations</h4>
            </div>
            <div class="col-md-4">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                      <label for=""></label>
                      <input type="search" name="" id="" placeholder="Entrer un mot clé (Nom ou email)" wire:model="query" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-hover table-inverse  w-100">
            <thead class="thead-inverse bg-blue">
                <tr>
                    <th>
                        <input type="checkbox" name="" id="">
                    </th>
                    <th>Nom</th>
                    <th>Formation</th>
                    <th>Contacts</th>
                    <th>Adresse</th>
                    <th>Date</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                   @forelse ($candidats as $user)
                   <tr>
                    <td><input type="checkbox" name="" id=""></td>
                        <td scope="row">{{ $user->noms }} {{ $user->postnom }} {{ $user->prenom }}</td>
                        <td>{{ $user->options }}</td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>{{ $user->email }}</span>
                                <span>{{ $user->phone }}</span>
                            </div>
                        </td>

                        <td>{{ $user->adresse }}</td>
                     
                        <td>{{ $user->created_at->format('d-m-Y à H:i') }}</td>
                        <td><a href="http://" wire:click.prevent="deleteUser({{ $user }})"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                    </tr>
                   @empty
                       
                   @endforelse
                </tbody>

            </table>
            <div class="mt-3">
                {{ $candidats->links("pagination::bootstrap-5") }}
            </div>
    </div>
</div>
