<?php

class MapController extends BaseController {

	public function getState($state) {
		$state = DB::table('state')->where('page', $state)->first();
		return Response::json($state);
	}

	public function getDm($state) {
		$result = DB::table('state')->select('state_id')->where('page','=',$state)->first();
		$stateId = $result->state_id;

		$parliaments = DB::table('parliament')->select('parliament_id', 'location')->where('state_id','=',$stateId)->get();
		$parliamentIdSmall = $parliaments[0]->parliament_id;
		$parliamentIdBig = $parliaments[sizeof($parliaments)-1]->parliament_id;

		$dms = DB::table('dm')
					->where('parliament_id','>=',$parliamentIdSmall)
					->where('parliament_id','<=',$parliamentIdBig)
					->get();

		$i = 0;
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

			/*  */
			foreach ($parliaments as $parliament) {
				if($row->parliament_id == $parliament->parliament_id) {
					$dms[$i]->location = $parliament->location;
					break;
				}
			}

			$dun = Dun::find($row->dun_id);
			$dms[$i]->dun_location = $dun->location;

			$i++;
		}
		
		// echo '<pre>';
		// print_r($dms);
		// echo '</pre>';

		return Response::json($dms);
	}

}
