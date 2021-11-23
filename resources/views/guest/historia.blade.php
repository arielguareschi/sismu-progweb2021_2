@extends('layouts.guest')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="card-728363">
                @forelse ($cidades as $cidade)
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse"
                                data-parent="#card-728363" href="#card-element-{{ $cidade->id }}">
                                {{ $cidade->nome }} - {{ $cidade->uf }}
                                <span class="ml-1 p-2 badge badge-secondary">{{ count($cidade->clientes) }}</span>
                            </a>
                        </div>
                        <div id="card-element-{{ $cidade->id }}" class="collapse">
                            <div class="card-body">
                                <table class="table table-bordered table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>Endereço</th>
                                            <th>Telefone</th>
                                            <th>Celular</th>
                                            <th>CEP</th>
                                            <th>CPF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($cidade->clientes as $cliente)
                                            <tr>
                                                <td>{{ $cliente->id }}</td>
                                                <td>{{ $cliente->nome }}</td>
                                                <td>{{ $cliente->endereco }}</td>
                                                <td>{{ $cliente->telefone }}</td>
                                                <td>{{ $cliente->celular }}</td>
                                                <td>{{ $cliente->cep }}</td>
                                                <td>{{ $cliente->cpf }}</td>
                                            </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7">
                                                <div class="alert alert-info text-center">
                                                    Nenhum cliente cadastrado
                                                </div>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info">Nenhum cliente cadastrado</div>
                @endforelse
			</div>
            <div class="pagination justify-content-center mt-2 ">
                {{ $cidades->links() }}
            </div>
		</div>
	</div>
</div>
@endsection
