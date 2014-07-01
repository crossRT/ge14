<?php

class DataController extends BaseController {

	public function importParliament()
	{
		// header('Content-Type: text/octet-stream');
		// header('Cache-Control: no-cache'); // recommended to prevent caching of event data.

		$progressCount = 1; //percent of progress
		
		/**
		 *	@param line 1 = require new line
		 */
		function send_message($line, $message, $progress) {
			$response = array('line'=>$line, 'message' => $message , 'progress' => $progress);
			
			echo json_encode($response) . PHP_EOL;
			
			/* Push message */
			ob_flush(); flush();
		}

		$parliaments = DB::table('parliament')->get();

		send_message(2, 'Import begin', $progressCount); //Send init message
		$data_directory_path = storage_path() . "/data"; //full path of String
		$data_directory = opendir($data_directory_path);

		/* Sort sub-directory with alphabet */
		while($folderName = readdir($data_directory)){
			$folderNames[] = $folderName;
		}
		sort($folderNames);

		/* Every state folder after sorted */
		foreach($folderNames as $state_folder)
		{
			$state_folder_path = $data_directory_path . '/' . $state_folder; //full path of state folder

			if(is_dir($state_folder_path) && $state_folder != '.' && $state_folder != '..')
			{
				$state_folder = opendir($state_folder_path);

				/* Sort sub-directory with alphabet */
				while($fileName = readdir($state_folder)){
					$fileNames[] = $fileName;
				}
				sort($fileNames);

				/* Every KML file in state folder */
				foreach($fileNames as $data_file)
				{
					$file_path = $state_folder_path.'/'.$data_file;
					if(is_file($file_path) && $data_file != '.' && $data_file != '..')
					{
						usleep(1000);
						send_message(1,$file_path . " ",$progressCount);

						$xml=simplexml_load_file($file_path);
						$placemark = $xml->Document->Folder->Placemark;

						foreach ($placemark as $row) {
							$dm_name = $row->name;
							$dm_coordinates = $row->Polygon->outerBoundaryIs->LinearRing->coordinates;

							$subs = explode('/', $dm_name);
							if($subs[0][0] == 'P' || $subs[0][0] == 'p') {
								$subs[0] = substr($subs[0] , 1);
							}

							/* Insert into database by using Laravel query */
							DB::table('dm')->insert(
								array(
									'dm_name'=>$dm_name,
									'dm_coordinates'=>$dm_coordinates,
									'parliament_id'=> (int) $subs[0]
								)
							);
						}
						$progressCount += 0.4;
						send_message(2," done ",$progressCount);
					}
				}
			}
		}

		usleep(1000);
		send_message(1, 'Import done', 100);
	}

}
