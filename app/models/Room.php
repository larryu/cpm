<?php

use LaravelBook\Ardent\Ardent;
class Room extends Ardent 
{
	
	protected $fillable = ['name','location', 'seats', 'roomtype_id', 'beamer', 'blackboard', 'overheadprojector','accessible'];
	
	public static $rules = array(
			'name' => 'required|unique:rooms',
			'location' => 'required',
			'seats' => 'required|min:1',
			'roomtype_id' => 'required',
	);

	public $timestamps = false;

	protected $table = 'rooms';
	
	/**
	 * returns a list of related room types
	 * @return [type] [description]
	 */
	public function roomtype()
	{
		return $this->belongsTo('Roomtype');
	}
	
	/**
	 * returns a list of related plannings
	 * @return [type] [description]
	 */
	public function plannings()
	{
		return $this->belongsToMany('Planning')->withPivot('weekday','start_time','end_time','created_at','updated_at');
	}

	/**
	 * return a presentable form of the room
	 * @return [type] [description]
	 */
	public function present()
	{
		return $this->name.' ('.$this->location.') - Plätze: '.$this->seats;
	}
	
	/**
	* Scope for room with the same or higher number of seats
	*/
	public function scopeSeats($query, $seats)
	{
		return $query->where('seats','>=', $seats);
	}
	
	/**
	* Scope for rooms with the same room type
	*/
	public function scopeSimilar($query, Room $room)
	{
		return $query->where('id', '!=', $room->id)
// 					->where('seats', '>=', $room->seats)
					->where('roomtype_id', '=', $room->roomtype_id)
					->orderBy('seats', 'ASC');
	}
	
	/**
	 * Return a list of all rooms in the constallation <room name> (<room location>) - seats: <room seats>
	 * @return Ambigous <multitype:, array, mixed>
	 */
	public static function getList($seats = 0)
	{
		$rooms = static::seats($seats)->get();
		$list = array();
		foreach ($rooms as $room)
		{
			$list = array_add($list, $room->id, $room->name.' ('.$room->location.') - Plätze: '.$room->seats);
		}
		return $list;
	}

	/**
	 * register a new room
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function register($data)
	{
		$this->setAttributes($data);

		if ($this->save())
			return true;
	}

	/**
	 * update the room attributes
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function updateInformation($data)
	{
		$this->setAttributes($data);

		if ($this->updateUniques())
			return true;
	}

	/**
	 * sets the attributes
	 * @param [type] $data [description]
	 */
	private function setAttributes($data)
	{
		$this->attributes['name'] = $data['name'];
		$this->attributes['location'] = $data['location'];
		$this->attributes['seats'] = $data['seats'];
		$this->attributes['roomtype_id'] = $data['roomtype_id'];
		$this->attributes['beamer'] = 0;
		$this->attributes['blackboard'] = 0;
		$this->attributes['overheadprojector'] = 0;
		$this->attributes['accessible'] = 0;


		if (array_key_exists('beamer', $data))
			$this->attributes['beamer'] = 1;

		if (array_key_exists('blackboard', $data))
			$this->attributes['blackboard'] = 1;

		if (array_key_exists('overheadprojector', $data))
			$this->attributes['overheadprojector'] = 1;

		if (array_key_exists('accessible', $data))
			$this->attributes['accessible'] = 1;
	}
}
