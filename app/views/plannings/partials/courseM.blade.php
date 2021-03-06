<div class="modal-dialog">
	<div class="modal-content">
  		<div class="modal-body">
    		{{ Form::model(new Planning, ['route' => ['savePlanningModule_path',$turnNav['displayTurn']->id], 'class' => "form-horizontal"])}}
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    		<fieldset>
    			<legend>Modul planen</legend>
                <div class="form-group">
                    <div class="col-lg-13 col-lg-offset-1">
                        Bei der Planung eines Modules werden alle dazugehörigen Lehrveranstaltungen miterstellt. Die Anzahl von Übungen, Seminaren und Praktika wird auf Grundlage der Vorlesungsteilnehmer erstellt. Die angegebenen Bemerkungen und Raumwünsche werden in alle dazugehörigen Veranstaltungen übernommen.
                    </div>
                </div>
    			<div class="form-group">
    				{{ Form::label('module_id', 'Modul*:', array('class' => "col-lg-4 control-label", 'id' => "module_id")) }}
    				<div class="col-lg-8">
    					{{ Form::select('module_id', $select, 1, array('id' => "module_id", 'class' => "form-control input-sm")) }}
    				</div>
    			</div>
    			@if (Entrust::can('change_rg_status') || Entrust::hasRole('Admin'))
                    <div class="form-group">
                        {{ Form::label('researchgroup_status', 'Status*:', array('class' => "col-lg-4 control-label", 'id' => "researchgroup_status")) }}
                        <div class="col-lg-8">
                            {{ Form::select('researchgroup_status', Config::get('constants.pl_rgstatus'), 0, array('id' => "researchgroup_status", 'class' => "form-control input-sm")) }}
                        </div>
                    </div>
                @endif
                @if (Entrust::can('change_board_status') || Entrust::hasRole('Admin'))
                    <div class="form-group">
                        {{ Form::label('board_status', 'Vorstand*:', array('class' => "col-lg-4 control-label", 'id' => "board_status")) }}
                        <div class="col-lg-8">
                            {{ Form::select('board_status', Config::get('constants.pl_board_status'), 0, array('id' => "board_status", 'class' => "form-control input-sm")) }}
                        </div>
                    </div>
                @endif
    			<div class="form-group">
    				{{ Form::label('language', 'Sprache*:', array('class' => "col-lg-4 control-label", 'id' => "language")) }}
    				<div class="col-lg-8">
    					{{ Form::select('language', Config::get('constants.language'), 0, array('id' => "language", 'class' => "form-control input-sm"))}}
    				</div>
    			</div>
    			<div class="form-group">
    				{{ Form::label('comment', 'Bemerkung:', array('class' => "col-lg-4 control-label", 'id' => "comment")) }}
    				<div class="col-lg-8">
    					{{ Form::textarea('comment', '', array('id' => "comment", 'class' => "form-control input-sm", 'placeholder' => 'Anmerkungen zu Lehraufträgen, Verantwortliche ...', 'rows'=>5, 'style' => 'resize:none;')) }}
    				</div>
    			</div>
                <div class="form-group">
                    {{ Form::label('room_preference', 'Raum- und Zeitwunsch*:', array('class' => "col-lg-4 control-label", 'id' => "room_preference")) }}
                    <div class="col-lg-8">
                        {{ Form::textarea('room_preference', '', array('id' => "room_preference", 'class' => "form-control input-sm", 'placeholder' => 'Raumwunsch mit Tag und Uhrzeit angeben. Ist der Raum- und Zeitwunsch von der lehrenden Person abhängig sein, sollte dies hier vermerkt werden!', 'rows'=>5, 'style' => 'resize:none;', 'required' => true)) }}
                    </div>
                </div>
    			<div class="form-group">
  					<div class="col-lg-8 col-lg-offset-4" style="text-align: right">
  					*erforderlich
  					<button type="button" class="btn btn-danger" data-dismiss="modal">Abbrechen</button>
					{{ Form::submit('Erstellen', array('class' => 'btn btn btn-success')) }}
  					</div>
  				</div>
    		</fieldset>
    		{{ Form::close() }}
  		</div>
	</div>
	</div>