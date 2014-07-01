<?php
	header( 'Content-type: text/html; charset=utf-8' );
	$data_directory_path = storage_path() . "/data";
	$data_directory = opendir($data_directory_path);

	ob_start();
	while($state_folder = readdir($data_directory))
	{
		$state_folder_path = $data_directory_path . '/' . $state_folder;

		if(is_dir($state_folder_path) && $state_folder != '.' && $state_folder != '..')
		{
			$state_folder = opendir($state_folder_path);
			while($data_file =  readdir($state_folder) )
			{
				$file_path = $state_folder_path.'/'.$data_file;
				echo "<pre>";
				echo $file_path . " ";
				ob_flush();
				if(is_file($file_path) && $data_file != '.' && $data_file != '..')
				{
					
					
					$xml=simplexml_load_file($file_path);
					$placemark = $xml->Document->Folder->Placemark;

					foreach ($placemark as $row) {
						$dm_name = $row->name;
						$dm_coordinates = $row->Polygon->outerBoundaryIs->LinearRing->coordinates;

						DB::table('dm')->insert(
							array(
								'dm_name'=>$dm_name,
								'dm_coordinates'=>$dm_coordinates,
								'parliament_id'=>1
							)
						);
					}
					echo "done";
					ob_flush();
					
				}else
				{
					echo "failed";
					ob_flush();
				}
				echo "</pre>";
			}
		}
	}
	ob_end_flush(); 

	// while($state_folder = readdir($data_directory))
	// {
	// 	$full_path = $data_directory_path . '/' . $state_folder;
	// 	echo $full_path;

	// 	// if(is_dir($data_directory . $state_folder) && $state_folder != '.' && $state_folder != '..')
	// 	if( is_dir($full_path) )
	// 	{
	// 		echo 'inside state directory';
	// 		while($data_file = readdir($full_path))
	// 		{
	// 			if(is_file($data_file))
	// 			{
	// 				echo 'data';
	// 				echo $data_file->getFilename();
	// 			}
	// 		}
	// 	}else
	// 	{
	// 		echo 'error';
	// 	}
	// }

	// $xml=simplexml_load_file(storage_path() . "/data/pahang/P078 Cameron Highland.kml");
	// print_r($xml);
	// echo $xml->Document->Folder->Placemark[0]->Polygon->outerBoundaryIs->LinearRing->coordinates;
?>
