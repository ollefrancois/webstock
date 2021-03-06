@extends("layout")
@section("content")
<h1 class="page-header">Liste des fournisseurs</h1>
	<table id="tabListeFournisseur" class="table table-striped">
		<thead>
			<tr>
				<th>Code</th>
				<th>Raison sociale</th>
				<th>Adresse 1</th>
				<th>Adresse 2</th>
				<th>Adresse 3</th>
				<th>Code postal</th>
				<th>Ville</th>
				<th>Email</th>
				<th>Téléphone</th>
				<th>Fax</th>
				<th>Détails</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
		</thead>
		<tbody>
			@foreach($fournisseurs as $fournisseur)
				<tr>
					<td>{!! $fournisseur->NUM_FOU !!}</td>
					<td>{!! $fournisseur->RS_FOU !!}</td>
					<td>{!! $fournisseur->ADR1_FOU !!}</td>
					<td>{!! $fournisseur->ADR2_FOU !!}</td>
					<td>{!! $fournisseur->ADR3_FOU !!}</td>
					<td>{!! $fournisseur->CP_FOU !!}</td>
					<td>{!! $fournisseur->VILLE_FOU !!}</td>
					<td>{!! $fournisseur->MAIL_FOU !!}</td>
					<td>{!! $fournisseur->TEL_FOU !!}</td>
					<td>{!! $fournisseur->FAX_FOU !!}</td>
					<td>{!! $fournisseur->QTE_PROD !!}</td><td>
						<a href="{!! URL::route('fournisseur.show', $fournisseur->ID_FOU) !!}" data-toggle="modal" data-target="#detailFournisseur">
							<button type="button" class="btn btn-default btn-mini">
  								<span class="glyphicon glyphicon-search"></span>
							</button>
						</a>
					</td>
					<td>
						<a href="{{ URL::route('fournisseur.edit', $fournisseur->ID_FOU) }}">
							<button type="button" class="btn btn-default btn-mini">
  								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</a>
					</td>
					<td>
						{!! Form::open(array('url' => 'fournisseur/' . $fournisseur->ID_FOU)) !!}
						{!! Form::hidden('_method', 'DELETE') !!}
						{!! Form::button('<span class="glyphicon glyphicon-trash"></span>', array('type' => 'submit', 'class' => 'btn btn-default btn-mini')) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			 @endforeach
		 </tbody>
	</table>
@stop
<div id="detailFournisseur" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"></div>
    </div> <!-- /.modal-dialog -->
</div>