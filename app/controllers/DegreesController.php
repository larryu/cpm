<?php

class DegreesController extends BaseController 
{
	
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		$degrees = Degree::all();
		return View::make('degrees.index', compact('degrees'));
	}
	
	/**
	 * [show description]
	 * @param  Degree $degree [description]
	 * @return [type]         [description]
	 */
	public function edit(Degree $degree)
	{
		if (Entrust::hasRole('Admin') || Entrust::can('edit_degree'))
			return View::make('degrees.editInformation', compact('degree'));

		Flash::error('Zugriff verweigert!');
		return Redirect::back();
	}
	
	/**
	 * [store description]
	 * @return [type] [description]
	 */
	public function store()
	{
		$input = Input::all();
		$degree = new Degree($input);
		
		if ($degree->save()) {
			Flash::success('Bereich erfolgreich angelegt.');
			return Redirect::back();
		}

		Flash::error($degree->errors());
		return Redirect::back();
	}
	
	/**
	 * [destroy description]
	 * @param  Degree $degree [description]
	 * @return [type]         [description]
	 */
	public function destroy(Degree $degree)
	{
		if ($degree->degreecourses->count() == 0 && $degree->modules->count() == 0) {
			$degree->delete();
			Flash::success('Bereich erfolgreich gelöscht.');
		} else
			Flash::error('Der Abschlusstyp konnte nicht gelöscht werden, da er mindestens von einem der folgenden Komponenten verwendet wird:
						<br><ul><li>Modul</li><li>Studiengang</li></ul>');
		
		return Redirect::back();
	}
	
	/**
	 * [update description]
	 * @param  Degree $degree [description]
	 * @return [type]         [description]
	 */
	public function update(Degree $degree)
	{
		$input = Input::all();
		$degree->fill($input);
		if ($degree->updateUniques()) {
			Flash::success('Der Bereich wurde aktualisiert.');
			return Redirect::back();
		}

		Flash::error($degree->errors());
		return Redirect::back()->withInput();
	}	
}
