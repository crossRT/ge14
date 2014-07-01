<?php

class MapController extends BaseController {

	public function getState($state) {
		$state = DB::table('state')->where('page', $state)->first();
		return Response::json($state);
	}

	public function getDm($state) {
		$result = DB::table('state')->select('state_id')->where('page','=',$state)->first();
		$stateId = $result->state_id;

		$result = DB::table('parliament')->select('parliament_id')->where('state_id','=',$stateId)->get();
		$parliamentIdSmall = $result[0]->parliament_id;
		$parliamentIdBig = $result[sizeof($result)-1]->parliament_id;

		$dms = DB::table('dm')
					->where('parliament_id','>=',$parliamentIdSmall)
					->where('parliament_id','<=',$parliamentIdBig)
					->get();

		$i = 0;
		$allCoordinates = array();

		foreach ($dms as $row) {
			$latlng = explode(" ", $row->dm_coordinates);
			$coordinates = array();

			foreach ($latlng as $singleLatLng) {
				$temp = explode(",", $singleLatLng);

				$lng = $temp[0];
				$lat = $temp[1];

				$singleLatLng = array('lat'=>$lat,'lng'=>$lng);
				array_push($coordinates, $singleLatLng);
			}

			$dms[$i]->dm_coordinates = $coordinates;
			$i++;
		}
		
		return Response::json($dms);
	}

}
