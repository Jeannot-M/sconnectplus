<div>
    <div class="bwhiteg- p-3">
        <div class="mb-3 row">
            <div class="col-md-8">
                <h4 class="text-bold mb-0">Utilisateurs</h4>
            <p>Gestionnaire des utilisateurs du site</p>
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
                    <th>Contacts</th>
                    <th>Documents</th>
                    <th>Date</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                   @forelse ($users as $user)
                   <tr>
                    <td><input type="checkbox" name="" id=""></td>
                        <td scope="row">{{ $user->name }}</td>
                        <td>
                            <div class="d-flex flex-column">
                                <span>{{ $user->email }}</span>
                                <span>{{ $user->phone }}</span>
                            </div>
                        </td>
                        <td>
                            <ul>
                                @forelse ($user->documents as $file)
                                    <li><a href="{{ Storage::url($file->file) }}" title="{{ $file->designation }}" target="_blank" rel="noopener noreferrer">
                                      {{ $file->designation }}
                                    </a></li>
                                @empty
                                    <li>Aucun document</li>
                                @endforelse
                            </ul>
                        </td>
                        <td>{{ $user->created_at->format('d-m-Y à H:i') }}</td>
                        <td><a href="http://" wire:click.prevent="deleteUser({{ $user }})"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                    </tr>
                   @empty
                       
                   @endforelse
                </tbody>

            </table>
            <div class="mt-3">
                {{ $users->links("pagination::bootstrap-5") }}
            </div>
    </div>
</div>
