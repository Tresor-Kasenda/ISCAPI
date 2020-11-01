<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr class="text-center">
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Departement</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($results as $student)
                                <tr>
                                    <td>{{ $student->username }}</td>
                                    <td>{{ $student->prenom }}</td>
                                    <td>{{ $student->departement }}</td>
                                    <td>
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $results->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
