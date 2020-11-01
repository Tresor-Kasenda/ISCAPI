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
                                <th>title</th>
                                <th>Description</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoice as $student)
                                <tr>
                                    <td>{{ $student->title }}</td>
                                    <td>{{ $student->content }}</td>
                                    <td>
                                        <form onsubmit="return confirm('Voulez vous supprimer')" action="{{ route('communiquer.destroy', $student) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">
                                                Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{ $invoice->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
