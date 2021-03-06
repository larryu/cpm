@extends('layouts.main')

@section('scripts')
	@include('layouts.partials.datatables-script')
	<script type="text/javascript" class="init">

    $(document).ready(function() {
        var table = $('#data_table').DataTable({
            "columnDefs": [
                { "visible": false, "targets": 3 }
            ],
            "order": [[ 3, 'asc' ]],
            "pagingType": "full",
    		"displayLength": 50,
    		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Alle"]],
            "drawCallback": function ( settings ) {
                var api = this.api();
                var rows = api.rows( {page:'current'} ).nodes();
                var last=null;
     
                api.column(3, {page:'current'} ).data().each( function ( group, i ) {
                    if ( last !== group ) {
                        $(rows).eq( i ).before(
                            '<tr class="info"><td colspan="8">'+group+'</td></tr>'
                        );
     
                        last = group;
                    }
                } );
            }
        } );
     
        // Order by the grouping
        $('#data_table tbody').on( 'click', 'tr.info', function () {
            var currentOrder = table.order()[0];
            if ( currentOrder[0] === 3 && currentOrder[1] === 'asc' ) {
                table.order( [ 3, 'desc' ] ).draw();
            }
            else {
                table.order( [ 3, 'asc' ] ).draw();
            }
        } );

        $('div.dataTables_filter input').focus()
    } );
	</script>

  @include('layouts.partials.delete-confirm-js')
@stop

@section('breadcrumbs')
	<ol class="breadcrumb">
	  <li class="active">Lehrveranstaltungsmanagement</li>
	</ol>
@stop

@section('main')
	<!-- <h2>Lehrveranstaltungsmanagement 
		<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">
	  	<span class="glyphicon glyphicon-plus"></span>
		</button>
	</h2> -->

  @if (Entrust::hasRole('Admin') || Entrust::can('add_course'))
    @include('layouts.partials.add-button-modal', ['buttonLabel' => 'Lehrveranstaltung hinzufügen'])
  @endif

	<div class="row">
    <div class="col-sm-12" style="margin-bottom: 5px;">
      <div  class="table-responsive">
       	<table class="table table-striped table-condensed" id="data_table" cellspacing="0">
       		<thead>
       			<tr>
       				<th>Nummer</th>
       				<th>Titel / engl. Titel</th>
       				<th>LV-Typ</th>
       				<th>Modul</th>
       				<th>Teilnehmer</th>
       				<th>SWS</th>
       				<th>Sprache</th>
       				<th>Option</th>
       			</tr>
       		</thead>
       		<tbody>
    			  @foreach( $courses as $course )
    					<tr>
    						<td>{{ $course->course_number }}</td>
                @if ($currentUser->hasRole('Admin') OR $currentUser->can('edit_course'))
        					<td>{{ HTML::decode(link_to_route('editCourseInformation_path', $course->name.'<br>'.$course->name_eng, $course->id)) }}</td>
                @else
                  <td>{{ $course->name }}<br>{{ $course->name_eng }}</td>
                @endif
      					<td>{{ $course->coursetype->name }}</td>
      					<td>{{ $course->module->short }}</td>
      					<td>{{ $course->participants }}</td>
      					<td>{{ $course->semester_periods_per_week }}</td>
      					<td>{{ Config::get('constants.language')[$course->language] }}</td>
      					<td>
                  @if ($currentUser->hasRole('Admin') OR $currentUser->can('delete_course'))
        						{{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('deleteCourse_path', $course->id))) }}
        						{{ Form::button('<i class="glyphicon glyphicon-remove"></i>', array('type' => 'button', 'class' => 'btn btn-xs btn-danger', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Lehrveranstaltung löschen', 'data-message' => 'Wollen Sie die Lehrveranstaltung wirklich löschen?')) }}
        						{{ Form::close() }}
                  @endif
          			</td>
    					</tr>
    				@endforeach	
    			</tbody>
    		</table>
    	</div>
    </div>
  </div>

  <!-- add form Modal dialog-->
  @include('courses.partials.add-form')

  <!-- delete confirmation modal dialog -->
  @include('layouts.partials.delete_confirm')
@stop