@extends('layouts.nav')

@section('content')

<div class="container">

<table class="table info" id="pdf_table">
		<thead>
			<tr>
				<th>Medicamento</th>
				<th>Cantidad</th>
				<th>¿Cada cuánto tiempo?</th>
				<th>Notas</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Clembuterol</td>
				<td>100mg</td>
				<td>3 horas</td>
				<td>En ayunas</td>
			</tr>
			<tr>
				<td>Aspirina</td>
				<td>50mg</td>
				<td>2 horas</td>
				<td></td>
			</tr>
			<tr>
				<td>Cefaclor</td>
				<td>1kg</td>
				<td>10 minutos</td>
				<td>Tomar con cuidado.</td>
			</tr>
		</tbody>
	</table>

	<button id="addRow" class="btn-info">Agregar medicamento</button>

</div>



	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/af-2.3.2/b-1.5.4/b-html5-1.5.4/r-2.2.2/rr-1.2.4/sl-1.2.6/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/select/1.2.6/js/dataTables.select.min.js"></script>

	<script type="text/javascript" src="editor.bootstrap4.js"></script>

	<script>
		$(document).ready( function () {
			var table = $('#pdf_table').DataTable({
				dom: 'Bfrtip',
				buttons: [
				'pdf'
				]
			});

			$('#addRow').on( 'click', function () {
				table.row.add( [
					'Paracetamol',
					'10mg',
					'12 horas',
					'Después de comer.'
					] ).draw( false );
			} );

			$('#myTable').on( 'click', 'tbody td', function () {
				myTable.cell( this ).edit();
			} );
		});
	</script>

@endsection