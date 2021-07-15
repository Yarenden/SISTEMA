@extends('layouts.app')

@section('template_title')
    Materium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Creditos</th>
										<th>Nombre Materia</th>
										<th>Profesor</th>
										<th>Turno</th>
										<th>Disponible</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materia as $materium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $materium->creditos }}</td>
											<td>{{ $materium->nombre_materia }}</td>
											<td>{{ $materium->profesor }}</td>
											<td>{{ $materium->turno }}</td>
											<td>{{ $materium->disponible }}</td>

                                            <td>
                                                <form action="{{ route('materia.destroy',$materium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materia.show',$materium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('materia.edit',$materium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $materia->links() !!}
            </div>
        </div>
    </div>
@endsection
