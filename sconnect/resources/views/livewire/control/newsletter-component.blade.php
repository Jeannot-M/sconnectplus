<div>
    <div class="">
        <div class="row">
            <div class="offset-2 col-md-8 bg-white p-3">
                <div class="mb-3">
                    <h5 class="text-bold mb-0">Newsletter liste</h5>
                    <p>Liste des emails envoyés par les visiteurs du site </p>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <table class="table table-striped table-inverse">
                    <thead class="thead-inverse bg-blue">
                        <tr>
                            <th>N°</th>
                            <th>E-mail </th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                           
                            @forelse ($newsletters as $key => $new)
                                <tr>
                                    <td scope="row">{{ ++$key }}</td>
                                    <td>{{ $new->email }}</td>
                                    <td>{{ $new->created_at->format("d-m-Y à H:i") }}</td>
                                    <td><button class="btn btn-danger" wire:click.prevent="deleteNews({{ $new->id }})"><i class="fa fa-trash " aria-hidden="true"></i></button></td>
                                </tr>
                            @empty
                                <tr><td colspan="4"><p class="text-center">No Data for now</p></td></tr>
                            @endforelse
                            
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
