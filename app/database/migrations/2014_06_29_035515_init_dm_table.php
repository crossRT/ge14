<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitDmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('state',function($table)
		{
			$table->increments('state_id');
			$table->string('state_name',50);
			$table->integer('parliament');
			$table->integer('dun');
			$table->string('flag');
			$table->integer('order');
			$table->string('page');
			$table->double('lat',10,6);
			$table->double('lng',10,6);
		});

		$state = array(
				  array('StateID' => '1','StateName' => 'Johor','StateVoters' => '1605311','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '26','Dun' => '56','flag' => 'flag_johor','page' => 'johor','orderID' => '13','shortname' => 'Johor', 'lat'=>2.047907 , 'lng'=>103.505343),
				  array('StateID' => '2','StateName' => 'Kedah','StateVoters' => '1041068','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '15','Dun' => '36','flag' => 'flag_kedah','page' => 'kedah','orderID' => '2','shortname' => 'Kedah', 'lat'=>5.8106965 , 'lng'=>100.662767),
				  array('StateID' => '3','StateName' => 'Kelantan','StateVoters' => '918573','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '14','Dun' => '45','flag' => 'flag_kelantan','page' => 'kelantan','orderID' => '3','shortname' => 'Kelantan', 'lat'=> 5.3903545, 'lng'=>101.999947),
				  array('StateID' => '4','StateName' => 'Melaka','StateVoters' => '439040','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '6','Dun' => '28','flag' => 'flag_melaka','page' => 'melaka','orderID' => '12','shortname' => 'Melaka', 'lat'=>2.273334 , 'lng'=>102.2819345),
				  array('StateID' => '5','StateName' => 'Negeri Sembilan','StateVoters' => '555982','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '8','Dun' => '36','flag' => 'flag_negeri_sembilan','page' => 'negeri_sembilan','orderID' => '11','shortname' => 'Sembilan', 'lat'=> 2.839823, 'lng'=>102.202109),
				  array('StateID' => '6','StateName' => 'Pahang','StateVoters' => '736111','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '14','Dun' => '42','flag' => 'flag_pahang','page' => 'pahang','orderID' => '7','shortname' => 'Pahang', 'lat'=>3.619337 , 'lng'=>102.777877),
				  array('StateID' => '7','StateName' => 'Perak','StateVoters' => '1406734','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '24','Dun' => '59','flag' => 'flag_perak','page' => 'perak','orderID' => '6','shortname' => 'Perak', 'lat'=>4.801157 , 'lng'=>101.056624),
				  array('StateID' => '8','StateName' => 'Perlis','StateVoters' => '137057','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '3','Dun' => '15','flag' => 'flag_perlis','page' => 'perlis','orderID' => '1','shortname' => 'Perlis', 'lat'=>6.491921 , 'lng'=>100.2450838),
				  array('StateID' => '9','StateName' => 'Pulau Pinang','StateVoters' => '846232','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '13','Dun' => '40','flag' => 'flag_pulau_pinang','page' => 'pulau_pinang','orderID' => '5','shortname' => 'Pinang', 'lat'=>5.354004 , 'lng'=>100.3630021),
				  array('StateID' => '10','StateName' => 'Sabah','StateVoters' => '981814','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '25','Dun' => '60','flag' => 'flag_sabah','page' => 'sabah','orderID' => '15','shortname' => 'Sabah', 'lat'=>5.739999 , 'lng'=>117.3027208),
				  array('StateID' => '11','StateName' => 'Sarawak','StateVoters' => '1083972','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '31','Dun' => '0','flag' => 'flag_sarawak','page' => 'sarawak','orderID' => '16','shortname' => 'Sarawak', 'lat'=>2.9228285 , 'lng'=>112.6112245),
				  array('StateID' => '12','StateName' => 'Selangor','StateVoters' => '2048828','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '22','Dun' => '56','flag' => 'flag_selangor','page' => 'selangor','orderID' => '8','shortname' => 'Selangor', 'lat'=>3.231072 , 'lng'=>101.389351),
				  array('StateID' => '13','StateName' => 'Terengganu','StateVoters' => '634944','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '8','Dun' => '32','flag' => 'flag_terengganu','page' => 'terengganu','orderID' => '4','shortname' => 'Terenganu', 'lat'=>4.922509 , 'lng'=>102.9357875),
				  array('StateID' => '14','StateName' => 'W.P. Kuala Lumpur','StateVoters' => '792071','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '11','Dun' => '0','flag' => 'flag_kl','page' => 'kuala_lumpur','orderID' => '9','shortname' => 'K.L.', 'lat'=>3.139003 , 'lng'=>101.6868555),
				  array('StateID' => '15','StateName' => 'W.P. Labuan','StateVoters' => '24474','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '1','Dun' => '0','flag' => 'flag_labuan','page' => 'labuan','orderID' => '14','shortname' => 'Labuan', 'lat'=>5.317167 , 'lng'=>115.2128295),
				  array('StateID' => '16','StateName' => 'W.P. Putra Jaya','StateVoters' => '15791','VoterTurnout' => '0','InvalidBallots' => '0','Parliament' => '1','Dun' => '0','flag' => 'flag_putra_jaya','page' => 'putra_jaya','orderID' => '10','shortname' => 'PutraJaya', 'lat'=>2.9263615 , 'lng'=>101.696445)
				);
		
		foreach ($state as $row) {
			DB::table('state')->insert(
				array(
					'state_name'=>$row['StateName'],
					'parliament'=>$row['Parliament'],
					'dun'=>$row['Dun'],
					'flag'=>$row['flag'],
					'order'=>$row['orderID'],
					'page'=>$row['page'],
					'lat'=>$row['lat'],
					'lng'=>$row['lng']
				)
			);
		}

		Schema::create('parliament',function($table)
		{
			$table->increments('parliament_id');
			$table->string('location');
			$table->unsignedInteger('state_id');
			$table->foreign('state_id')->references('state_id')->on('state');
		});

		$seat_parliament = array(
							  array('ID' => '1','ParliamentID' => 'P1','Location' => 'Padang Besar','ChineseLocation' => '巴东勿刹','StateID' => '8','TotalVoters' => '41974','chinese' => '9.5','malay' => '85.6','indian' => '0.9','etc' => '4','winner' => 'BN'),
							  array('ID' => '2','ParliamentID' => 'P2','Location' => 'Kangar','ChineseLocation' => '加央','StateID' => '8','TotalVoters' => '51207','chinese' => '16','malay' => '80.7','indian' => '1.7','etc' => '1.5','winner' => 'BN'),
							  array('ID' => '3','ParliamentID' => 'P3','Location' => 'Arau','ChineseLocation' => '亚娄','StateID' => '8','TotalVoters' => '43876','chinese' => '8.2','malay' => '87.3','indian' => '1.6','etc' => '2.9','winner' => 'BN'),
							  array('ID' => '4','ParliamentID' => 'P4','Location' => 'Langkawi','ChineseLocation' => '浮罗交怡','StateID' => '2','TotalVoters' => '37536','chinese' => '6.4','malay' => '90.6','indian' => '0.1','etc' => '1.7','winner' => 'BN'),
							  array('ID' => '5','ParliamentID' => 'P5','Location' => 'Jerlun','ChineseLocation' => '尤仑','StateID' => '2','TotalVoters' => '52383','chinese' => '7.5','malay' => '90.6','indian' => '0.1','etc' => '1.7','winner' => 'BN'),
							  array('ID' => '6','ParliamentID' => 'P6','Location' => 'Kubang Pasu','ChineseLocation' => '古邦巴素','StateID' => '2','TotalVoters' => '65550','chinese' => '9.3','malay' => '85.4','indian' => '3.9','etc' => '1.5','winner' => 'BN'),
							  array('ID' => '7','ParliamentID' => 'P7','Location' => 'Padang Terap','ChineseLocation' => '巴东得臘','StateID' => '2','TotalVoters' => '41960','chinese' => '1.4','malay' => '92.1','indian' => '0.2','etc' => '6.3','winner' => 'BN'),
							  array('ID' => '8','ParliamentID' => 'P8','Location' => 'Pokok Sena','ChineseLocation' => '波各先那','StateID' => '2','TotalVoters' => '80714','chinese' => '17.5','malay' => '79.5','indian' => '2.3','etc' => '0.7','winner' => 'PAS'),
							  array('ID' => '9','ParliamentID' => 'P9','Location' => 'Alor Star','ChineseLocation' => '亚罗士打','StateID' => '2','TotalVoters' => '69009','chinese' => '33.6','malay' => '61.2','indian' => '4.6','etc' => '0.5','winner' => 'PKR'),
							  array('ID' => '10','ParliamentID' => 'P10','Location' => 'Kuala Kedah','ChineseLocation' => '吉打港口','StateID' => '2','TotalVoters' => '95328','chinese' => '20.8','malay' => '77.4','indian' => '1.4','etc' => '0.3','winner' => 'PKR'),
							  array('ID' => '11','ParliamentID' => 'P11','Location' => 'Pendang','ChineseLocation' => '笨筒','StateID' => '2','TotalVoters' => '70135','chinese' => '5.7','malay' => '88.1','indian' => '0.6','etc' => '5.6','winner' => 'BN'),
							  array('ID' => '12','ParliamentID' => 'P12','Location' => 'Jerai','ChineseLocation' => '日莱','StateID' => '2','TotalVoters' => '74410','chinese' => '14.7','malay' => '78.7','indian' => '6.3','etc' => '0.3','winner' => 'BN'),
							  array('ID' => '13','ParliamentID' => 'P13','Location' => 'Sik','ChineseLocation' => '锡','StateID' => '2','TotalVoters' => '46786','chinese' => '1.6','malay' => '92.7','indian' => '0.2','etc' => '5.4','winner' => 'BN'),
							  array('ID' => '14','ParliamentID' => 'P14','Location' => 'Merbok','ChineseLocation' => '傌莫','StateID' => '2','TotalVoters' => '85908','chinese' => '16.8','malay' => '64.5','indian' => '17.5','etc' => '1.2','winner' => 'BN'),
							  array('ID' => '15','ParliamentID' => 'P15','Location' => 'Sungai Petani','ChineseLocation' => '双溪大年','StateID' => '2','TotalVoters' => '93176','chinese' => '28.7','malay' => '58.8','indian' => '12','etc' => '0.5','winner' => 'PKR'),
							  array('ID' => '16','ParliamentID' => 'P16','Location' => 'Baling','ChineseLocation' => '华玲','StateID' => '2','TotalVoters' => '93168','chinese' => '5.1','malay' => '88.7','indian' => '4.7','etc' => '1.5','winner' => 'BN'),
							  array('ID' => '17','ParliamentID' => 'P17','Location' => 'Padang Serai','ChineseLocation' => '巴东色海','StateID' => '2','TotalVoters' => '74095','chinese' => '21.4','malay' => '55.5','indian' => '22.5','etc' => '0.5','winner' => 'PKR'),
							  array('ID' => '18','ParliamentID' => 'P18','Location' => 'Kulim-bandar Baharu','ChineseLocation' => '居林万拉峇鲁','StateID' => '2','TotalVoters' => '60910','chinese' => '19.9','malay' => '67.5','indian' => '12.9','etc' => '0.3','winner' => 'BN'),
							  array('ID' => '19','ParliamentID' => 'P19','Location' => 'Tumpat','ChineseLocation' => '道北','StateID' => '3','TotalVoters' => '98632','chinese' => '3.3','malay' => '92.5','indian' => '0.2','etc' => '4','winner' => 'PAS'),
							  array('ID' => '20','ParliamentID' => 'P20','Location' => 'Pengkalan Chepa','ChineseLocation' => '彭加兰芝粕','StateID' => '3','TotalVoters' => '64409','chinese' => '1.6','malay' => '97.8','indian' => '0.1','etc' => '0.5','winner' => 'PAS'),
							  array('ID' => '21','ParliamentID' => 'P21','Location' => 'Kota Bharu','ChineseLocation' => '哥打峇鲁','StateID' => '3','TotalVoters' => '81268','chinese' => '15.8','malay' => '82.8','indian' => '0.8','etc' => '0.5','winner' => 'PAS'),
							  array('ID' => '22','ParliamentID' => 'P22','Location' => 'Pasir Mas','ChineseLocation' => '巴西马','StateID' => '3','TotalVoters' => '71965','chinese' => '3.3','malay' => '95.4','indian' => '0.1','etc' => '0.2','winner' => 'PAS'),
							  array('ID' => '23','ParliamentID' => 'P23','Location' => 'Rantau Panjang','ChineseLocation' => '兰斗班让','StateID' => '3','TotalVoters' => '52903','chinese' => '0.7','malay' => '98.2','indian' => '0.1','etc' => '1','winner' => 'PAS'),
							  array('ID' => '24','ParliamentID' => 'P24','Location' => 'Kubang Kerian','ChineseLocation' => '古邦阁亮','StateID' => '3','TotalVoters' => '65390','chinese' => '1.8','malay' => '97.8','indian' => '0.2','etc' => '0.2','winner' => 'PAS'),
							  array('ID' => '25','ParliamentID' => 'P25','Location' => 'Bachok','ChineseLocation' => '万捷','StateID' => '3','TotalVoters' => '81566','chinese' => '1.1','malay' => '98.4','indian' => '0','etc' => '0.4','winner' => 'PAS'),
							  array('ID' => '26','ParliamentID' => 'P26','Location' => 'Ketereh','ChineseLocation' => '格底里','StateID' => '3','TotalVoters' => '62217','chinese' => '1.8','malay' => '96.8','indian' => '0.1','etc' => '1.3','winner' => 'BN'),
							  array('ID' => '27','ParliamentID' => 'P27','Location' => 'Tanah Merah','ChineseLocation' => '丹那美拉','StateID' => '3','TotalVoters' => '58237','chinese' => '4.1','malay' => '94.4','indian' => '0.7','etc' => '0','winner' => 'BN'),
							  array('ID' => '28','ParliamentID' => 'P28','Location' => 'Pasir Puteh','ChineseLocation' => '巴西富地','StateID' => '3','TotalVoters' => '76259','chinese' => '1.1','malay' => '98.1','indian' => '0','etc' => '0.8','winner' => 'PAS'),
							  array('ID' => '29','ParliamentID' => 'P29','Location' => 'Machang','ChineseLocation' => '马樟','StateID' => '3','TotalVoters' => '59226','chinese' => '3.6','malay' => '96','indian' => '0.2','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '30','ParliamentID' => 'P30','Location' => 'Jeli','ChineseLocation' => '日里','StateID' => '3','TotalVoters' => '43224','chinese' => '0.2','malay' => '98.4','indian' => '0.1','etc' => '1.2','winner' => 'BN'),
							  array('ID' => '31','ParliamentID' => 'P31','Location' => 'Kuala Krai','ChineseLocation' => '瓜拉吉赖','StateID' => '3','TotalVoters' => '63101','chinese' => '4.5','malay' => '93.9','indian' => '1.3','etc' => '0.2','winner' => 'PAS'),
							  array('ID' => '32','ParliamentID' => 'P32','Location' => 'Gua Musang','ChineseLocation' => '话望生','StateID' => '3','TotalVoters' => '40176','chinese' => '6.9','malay' => '80.3','indian' => '0.6','etc' => '12.2','winner' => 'BN'),
							  array('ID' => '33','ParliamentID' => 'P33','Location' => 'Besut','ChineseLocation' => '勿述','StateID' => '13','TotalVoters' => '72566','chinese' => '1.6','malay' => '97.9','indian' => '0.1','etc' => '0.4','winner' => 'BN'),
							  array('ID' => '34','ParliamentID' => 'P34','Location' => 'Setiu','ChineseLocation' => '士兆','StateID' => '13','TotalVoters' => '67280','chinese' => '0.4','malay' => '99.4','indian' => '0','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '35','ParliamentID' => 'P35','Location' => 'Kuala Nerus','ChineseLocation' => '瓜拉尼鲁斯','StateID' => '13','TotalVoters' => '76238','chinese' => '0.9','malay' => '98.7','indian' => '0.1','etc' => '0.2','winner' => 'PAS'),
							  array('ID' => '36','ParliamentID' => 'P36','Location' => 'Kuala Terengganu','ChineseLocation' => '瓜拉登嘉楼','StateID' => '13','TotalVoters' => '94406','chinese' => '10.1','malay' => '89.1','indian' => '0.6','etc' => '0.2','winner' => 'PAS'),
							  array('ID' => '37','ParliamentID' => 'P37','Location' => 'Marang','ChineseLocation' => '马江','StateID' => '13','TotalVoters' => '90795','chinese' => '2.2','malay' => '97.6','indian' => '0.1','etc' => '0.2','winner' => 'PAS'),
							  array('ID' => '38','ParliamentID' => 'P38','Location' => 'Hulu Terengganu','ChineseLocation' => '乌鲁登嘉楼','StateID' => '13','TotalVoters' => '63543','chinese' => '0.5','malay' => '99.1','indian' => '0','etc' => '0.3','winner' => 'BN'),
							  array('ID' => '39','ParliamentID' => 'P39','Location' => 'Dungun','ChineseLocation' => '龙云','StateID' => '13','TotalVoters' => '78174','chinese' => '3.9','malay' => '95.7','indian' => '0.2','etc' => '0','winner' => 'PAS'),
							  array('ID' => '40','ParliamentID' => 'P40','Location' => 'Kemaman','ChineseLocation' => '甘马挽','StateID' => '13','TotalVoters' => '91942','chinese' => '6.1','malay' => '92.7','indian' => '0.7','etc' => '0.5','winner' => 'BN'),
							  array('ID' => '41','ParliamentID' => 'P41','Location' => 'Kepala Batas','ChineseLocation' => '甲抛峇底','StateID' => '9','TotalVoters' => '51635','chinese' => '19','malay' => '76.3','indian' => '4.5','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '42','ParliamentID' => 'P42','Location' => 'Tasek Gelugor','ChineseLocation' => '打昔汝洛','StateID' => '9','TotalVoters' => '54042','chinese' => '14.6','malay' => '78','indian' => '6.9','etc' => '0.5','winner' => 'BN'),
							  array('ID' => '43','ParliamentID' => 'P43','Location' => 'Bagan','ChineseLocation' => '峇眼','StateID' => '9','TotalVoters' => '68503','chinese' => '15.5','malay' => '69.5','indian' => '14.5','etc' => '0.5','winner' => 'DAP'),
							  array('ID' => '44','ParliamentID' => 'P44','Location' => 'Permatang Pauh','ChineseLocation' => '峇东埔','StateID' => '9','TotalVoters' => '71699','chinese' => '23.1','malay' => '70.2','indian' => '6.2','etc' => '0.6','winner' => 'PKR'),
							  array('ID' => '45','ParliamentID' => 'P45','Location' => 'Bukit Mertajam','ChineseLocation' => '大山脚','StateID' => '9','TotalVoters' => '78996','chinese' => '71.2','malay' => '18.9','indian' => '9.6','etc' => '0.6','winner' => 'DAP'),
							  array('ID' => '46','ParliamentID' => 'P46','Location' => 'Batu Kawan','ChineseLocation' => '峇都交湾','StateID' => '9','TotalVoters' => '57500','chinese' => '55.7','malay' => '20.5','indian' => '23.2','etc' => '0.6','winner' => 'DAP'),
							  array('ID' => '47','ParliamentID' => 'P47','Location' => 'Nibong Tebal','ChineseLocation' => '高渊','StateID' => '9','TotalVoters' => '59345','chinese' => '37.3','malay' => '44.8','indian' => '17.6','etc' => '0.3','winner' => 'PKR'),
							  array('ID' => '48','ParliamentID' => 'P48','Location' => 'Bukit Bendera','ChineseLocation' => '升旗山','StateID' => '9','TotalVoters' => '71085','chinese' => '13.9','malay' => '73.7','indian' => '11','etc' => '1.4','winner' => 'DAP'),
							  array('ID' => '49','ParliamentID' => 'P49','Location' => 'Tanjong','ChineseLocation' => '丹绒','StateID' => '9','TotalVoters' => '51487','chinese' => '5.2','malay' => '85.2','indian' => '9.1','etc' => '0.5','winner' => 'DAP'),
							  array('ID' => '50','ParliamentID' => 'P50','Location' => 'Jelutong','ChineseLocation' => '日落洞','StateID' => '9','TotalVoters' => '71247','chinese' => '66.5','malay' => '21.8','indian' => '11.1','etc' => '0.6','winner' => 'DAP'),
							  array('ID' => '51','ParliamentID' => 'P51','Location' => 'Bukit Gelugor','ChineseLocation' => '武吉牛汝莪','StateID' => '9','TotalVoters' => '81897','chinese' => '74.5','malay' => '14.4','indian' => '10.4','etc' => '0.6','winner' => 'DAP'),
							  array('ID' => '52','ParliamentID' => 'P52','Location' => 'Bayan Baru','ChineseLocation' => '峇央峇鲁','StateID' => '9','TotalVoters' => '79155','chinese' => '49','malay' => '39.1','indian' => '10.9','etc' => '1','winner' => 'PKR'),
							  array('ID' => '53','ParliamentID' => 'P53','Location' => 'Balik Pulau','ChineseLocation' => '浮罗山背','StateID' => '9','TotalVoters' => '49641','chinese' => '32.1','malay' => '63.4','indian' => '4.1','etc' => '0.4','winner' => 'BN'),
							  array('ID' => '54','ParliamentID' => 'P54','Location' => 'Gerik','ChineseLocation' => '宜力','StateID' => '7','TotalVoters' => '32725','chinese' => '15.7','malay' => '68.1','indian' => '3.6','etc' => '12.5','winner' => 'BN'),
							  array('ID' => '55','ParliamentID' => 'P55','Location' => 'Lenggong','ChineseLocation' => '玲珑','StateID' => '7','TotalVoters' => '27950','chinese' => '14.3','malay' => '81.1','indian' => '1.5','etc' => '2.3','winner' => 'BN'),
							  array('ID' => '56','ParliamentID' => 'P56','Location' => 'Larut','ChineseLocation' => '拉律','StateID' => '7','TotalVoters' => '46577','chinese' => '5','malay' => '88.6','indian' => '6','etc' => '0.4','winner' => 'BN'),
							  array('ID' => '57','ParliamentID' => 'P57','Location' => 'Parit Buntar','ChineseLocation' => '巴里文打','StateID' => '7','TotalVoters' => '51422','chinese' => '27','malay' => '67.8','indian' => '4.9','etc' => '0.3','winner' => 'PAS'),
							  array('ID' => '58','ParliamentID' => 'P58','Location' => 'Bagan Serai','ChineseLocation' => '峇眼色海','StateID' => '7','TotalVoters' => '54792','chinese' => '14','malay' => '75.5','indian' => '10.1','etc' => '0.4','winner' => 'BN'),
							  array('ID' => '59','ParliamentID' => 'P59','Location' => 'Bukit Gantang','ChineseLocation' => '武吉千当','StateID' => '7','TotalVoters' => '71257','chinese' => '25.2','malay' => '64.7','indian' => '9.6','etc' => '0.4','winner' => 'PAS'),
							  array('ID' => '60','ParliamentID' => 'P60','Location' => 'Taiping','ChineseLocation' => '太平','StateID' => '7','TotalVoters' => '78148','chinese' => '47.9','malay' => '37.1','indian' => '13.3','etc' => '1.7','winner' => 'DAP'),
							  array('ID' => '61','ParliamentID' => 'P61','Location' => 'Padang Rengas','ChineseLocation' => '硝山','StateID' => '7','TotalVoters' => '28518','chinese' => '16.6','malay' => '76.2','indian' => '7.1','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '62','ParliamentID' => 'P62','Location' => 'Sungai Siput','ChineseLocation' => '和丰','StateID' => '7','TotalVoters' => '51596','chinese' => '39.2','malay' => '33','indian' => '21.3','etc' => '6.6','winner' => 'PKR'),
							  array('ID' => '63','ParliamentID' => 'P63','Location' => 'Tambun','ChineseLocation' => '打们','StateID' => '7','TotalVoters' => '89435','chinese' => '22','malay' => '63.9','indian' => '11.8','etc' => '2.2','winner' => 'BN'),
							  array('ID' => '64','ParliamentID' => 'P64','Location' => 'Ipoh Timor','ChineseLocation' => '怡保东区','StateID' => '7','TotalVoters' => '81818','chinese' => '79.3','malay' => '14.2','indian' => '5.3','etc' => '1.3','winner' => 'DAP'),
							  array('ID' => '65','ParliamentID' => 'P65','Location' => 'Ipoh Barat','ChineseLocation' => '怡保西区','StateID' => '7','TotalVoters' => '77761','chinese' => '62.2','malay' => '13.6','indian' => '22.8','etc' => '1.5','winner' => 'DAP'),
							  array('ID' => '66','ParliamentID' => 'P66','Location' => 'Batu Gajah','ChineseLocation' => '华都牙也','StateID' => '7','TotalVoters' => '87587','chinese' => '73.9','malay' => '10.7','indian' => '14.5','etc' => '0.9','winner' => 'DAP'),
							  array('ID' => '67','ParliamentID' => 'P67','Location' => 'Kuala Kangsar','ChineseLocation' => '江沙','StateID' => '7','TotalVoters' => '33540','chinese' => '23.9','malay' => '67.9','indian' => '6.9','etc' => '1.3','winner' => 'BN'),
							  array('ID' => '68','ParliamentID' => 'P68','Location' => 'Beruas','ChineseLocation' => '木威','StateID' => '7','TotalVoters' => '49205','chinese' => '52.3','malay' => '32.6','indian' => '14.9','etc' => '0.2','winner' => 'DAP'),
							  array('ID' => '69','ParliamentID' => 'P69','Location' => 'Parit','ChineseLocation' => '巴力','StateID' => '7','TotalVoters' => '33503','chinese' => '2.6','malay' => '92.3','indian' => '2.9','etc' => '2.2','winner' => 'BN'),
							  array('ID' => '70','ParliamentID' => 'P70','Location' => 'Kampar','ChineseLocation' => '金宝','StateID' => '7','TotalVoters' => '63619','chinese' => '60.4','malay' => '28.7','indian' => '9.2','etc' => '1.7','winner' => 'DAP'),
							  array('ID' => '71','ParliamentID' => 'P71','Location' => 'Gopeng','ChineseLocation' => '务边','StateID' => '7','TotalVoters' => '97092','chinese' => '46','malay' => '42.8','indian' => '8.8','etc' => '2.4','winner' => 'PKR'),
							  array('ID' => '72','ParliamentID' => 'P72','Location' => 'Tapah','ChineseLocation' => '打巴','StateID' => '7','TotalVoters' => '45485','chinese' => '27.9','malay' => '46.3','indian' => '13.1','etc' => '12.7','winner' => 'BN'),
							  array('ID' => '73','ParliamentID' => 'P73','Location' => 'Pasir Salak','ChineseLocation' => '巴西沙叻','StateID' => '7','TotalVoters' => '51498','chinese' => '13.5','malay' => '79','indian' => '3.9','etc' => '3.6','winner' => 'BN'),
							  array('ID' => '74','ParliamentID' => 'P74','Location' => 'Lumut','ChineseLocation' => '红土坎','StateID' => '7','TotalVoters' => '88300','chinese' => '35.4','malay' => '51.1','indian' => '12','etc' => '1.5','winner' => 'PKR'),
							  array('ID' => '75','ParliamentID' => 'P75','Location' => 'Bagan Datok','ChineseLocation' => '峇眼拿督','StateID' => '7','TotalVoters' => '39924','chinese' => '19.7','malay' => '54.9','indian' => '23.5','etc' => '1.9','winner' => 'BN'),
							  array('ID' => '76','ParliamentID' => 'P76','Location' => 'Telok Intan','ChineseLocation' => '安顺','StateID' => '7','TotalVoters' => '60483','chinese' => '41.9','malay' => '38.2','indian' => '19','etc' => '0.9','winner' => 'DAP'),
							  array('ID' => '77','ParliamentID' => 'P77','Location' => 'Tanjong Malim','ChineseLocation' => '丹绒马林','StateID' => '7','TotalVoters' => '64499','chinese' => '27.2','malay' => '53.3','indian' => '13.9','etc' => '5.5','winner' => 'BN'),
							  array('ID' => '78','ParliamentID' => 'P78','Location' => 'Cameron Highlands','ChineseLocation' => '金马伦高原','StateID' => '6','TotalVoters' => '27980','chinese' => '32.3','malay' => '34.1','indian' => '12.4','etc' => '21.2','winner' => 'BN'),
							  array('ID' => '79','ParliamentID' => 'P79','Location' => 'Lipis','ChineseLocation' => '立卑','StateID' => '6','TotalVoters' => '32324','chinese' => '17.2','malay' => '75.9','indian' => '5.7','etc' => '1.1','winner' => 'BN'),
							  array('ID' => '80','ParliamentID' => 'P80','Location' => 'Raub','ChineseLocation' => '劳勿','StateID' => '6','TotalVoters' => '54214','chinese' => '40.3','malay' => '49.7','indian' => '6.4','etc' => '3.5','winner' => 'DAP'),
							  array('ID' => '81','ParliamentID' => 'P81','Location' => 'Jerantut','ChineseLocation' => '而连突','StateID' => '6','TotalVoters' => '58364','chinese' => '13.7','malay' => '81','indian' => '2.8','etc' => '2.6','winner' => 'BN'),
							  array('ID' => '82','ParliamentID' => 'P82','Location' => 'Indera Mahkota','ChineseLocation' => '英迪拉马哥打','StateID' => '6','TotalVoters' => '64219','chinese' => '28.5','malay' => '64.5','indian' => '6.1','etc' => '0.9','winner' => 'PKR'),
							  array('ID' => '83','ParliamentID' => 'P83','Location' => 'Kuantan','ChineseLocation' => '关丹','StateID' => '6','TotalVoters' => '56280','chinese' => '33.1','malay' => '62.4','indian' => '3.8','etc' => '0.6','winner' => 'PKR'),
							  array('ID' => '84','ParliamentID' => 'P84','Location' => 'Paya Besar','ChineseLocation' => '巴耶勿刹','StateID' => '6','TotalVoters' => '48067','chinese' => '14.87','malay' => '91.38','indian' => '2.18','etc' => '1.57','winner' => 'BN'),
							  array('ID' => '85','ParliamentID' => 'P85','Location' => 'Pekan','ChineseLocation' => '北根','StateID' => '6','TotalVoters' => '80260','chinese' => '2.25','malay' => '88.06','indian' => '0.91','etc' => '8.78','winner' => 'BN'),
							  array('ID' => '86','ParliamentID' => 'P86','Location' => 'Maran','ChineseLocation' => '马兰','StateID' => '6','TotalVoters' => '38436','chinese' => '6.86','malay' => '89.76','indian' => '1.47','etc' => '1.91','winner' => 'BN'),
							  array('ID' => '87','ParliamentID' => 'P87','Location' => 'Kuala Krau','ChineseLocation' => '瓜拉吉绕','StateID' => '6','TotalVoters' => '43003','chinese' => '3.18','malay' => '89.68','indian' => '2.64','etc' => '4.51','winner' => 'BN'),
							  array('ID' => '88','ParliamentID' => 'P88','Location' => 'Temerloh','ChineseLocation' => '淡马鲁','StateID' => '6','TotalVoters' => '66105','chinese' => '24.22','malay' => '64.33','indian' => '8.72','etc' => '2.72','winner' => 'PAS'),
							  array('ID' => '89','ParliamentID' => 'P89','Location' => 'Bentong','ChineseLocation' => '文冬','StateID' => '6','TotalVoters' => '62266','chinese' => '43.88','malay' => '44.61','indian' => '9.12','etc' => '2.4','winner' => 'BN'),
							  array('ID' => '90','ParliamentID' => 'P90','Location' => 'Bera','ChineseLocation' => '百乐','StateID' => '6','TotalVoters' => '50997','chinese' => '31.9','malay' => '59.48','indian' => '3.91','etc' => '4.72','winner' => 'BN'),
							  array('ID' => '91','ParliamentID' => 'P91','Location' => 'Rompin','ChineseLocation' => '云冰','StateID' => '6','TotalVoters' => '53596','chinese' => '2.49','malay' => '87.7','indian' => '1.15','etc' => '8.65','winner' => 'BN'),
							  array('ID' => '92','ParliamentID' => 'P92','Location' => 'Sabak Bernam','ChineseLocation' => '沙白安南','StateID' => '12','TotalVoters' => '37318','chinese' => '12.6','malay' => '80.5','indian' => '5','etc' => '1.9','winner' => 'BN'),
							  array('ID' => '93','ParliamentID' => 'P93','Location' => 'Sungai Besar','ChineseLocation' => '大港','StateID' => '12','TotalVoters' => '42837','chinese' => '31','malay' => '65.6','indian' => '1.8','etc' => '1.5','winner' => 'BN'),
							  array('ID' => '94','ParliamentID' => 'P94','Location' => 'Hulu Selangor','ChineseLocation' => '乌鲁雪兰莪','StateID' => '12','TotalVoters' => '85697','chinese' => '23.5','malay' => '56.4','indian' => '17.6','etc' => '2.6','winner' => 'BN'),
							  array('ID' => '95','ParliamentID' => 'P95','Location' => 'Tanjong Karang','ChineseLocation' => '丹绒加弄','StateID' => '12','TotalVoters' => '42333','chinese' => '16.6','malay' => '72.3','indian' => '9.8','etc' => '1.3','winner' => 'BN'),
							  array('ID' => '96','ParliamentID' => 'P96','Location' => 'Kuala Selangor','ChineseLocation' => '瓜拉雪兰莪','StateID' => '12','TotalVoters' => '62298','chinese' => '13.3','malay' => '63.7','indian' => '13.3','etc' => '22','winner' => 'BN'),
							  array('ID' => '97','ParliamentID' => 'P97','Location' => 'Selayang','ChineseLocation' => '士垃央','StateID' => '12','TotalVoters' => '105895','chinese' => '36.1','malay' => '45.1','indian' => '17.2','etc' => '1.5','winner' => 'PKR'),
							  array('ID' => '98','ParliamentID' => 'P98','Location' => 'Gombak','ChineseLocation' => '鹅唛','StateID' => '12','TotalVoters' => '123290','chinese' => '13.2','malay' => '73.6','indian' => '11','etc' => '2.1','winner' => 'PKR'),
							  array('ID' => '99','ParliamentID' => 'P99','Location' => 'Ampang','ChineseLocation' => '安邦','StateID' => '12','TotalVoters' => '83135','chinese' => '33.5','malay' => '55.1','indian' => '9.6','etc' => '1.9','winner' => 'PKR'),
							  array('ID' => '100','ParliamentID' => 'P100','Location' => 'Pandan','ChineseLocation' => '班丹','StateID' => '12','TotalVoters' => '83857','chinese' => '48.1','malay' => '44.2','indian' => '6.5','etc' => '1.2','winner' => 'PKR'),
							  array('ID' => '101','ParliamentID' => 'P101','Location' => 'Hulu Langat','ChineseLocation' => '乌鲁冷岳','StateID' => '12','TotalVoters' => '127347','chinese' => '34.3','malay' => '52.6','indian' => '11.3','etc' => '1.9','winner' => 'PAS'),
							  array('ID' => '102','ParliamentID' => 'P102','Location' => 'Serdang','ChineseLocation' => '沙登','StateID' => '12','TotalVoters' => '133139','chinese' => '48.6','malay' => '39.4','indian' => '11','etc' => '1','winner' => 'DAP'),
							  array('ID' => '103','ParliamentID' => 'P103','Location' => 'Puchong','ChineseLocation' => '蒲种','StateID' => '12','TotalVoters' => '107010','chinese' => '43.5','malay' => '39.1','indian' => '15.8','etc' => '1.6','winner' => 'DAP'),
							  array('ID' => '104','ParliamentID' => 'P104','Location' => 'Kelana Jaya','ChineseLocation' => '格拉那再也','StateID' => '12','TotalVoters' => '101236','chinese' => '41.7','malay' => '37.8','indian' => '18.5','etc' => '2.1','winner' => 'PKR'),
							  array('ID' => '105','ParliamentID' => 'P105','Location' => 'Petaling Jaya Selatan','ChineseLocation' => '八打灵再也南区','StateID' => '12','TotalVoters' => '79558','chinese' => '41.5','malay' => '40.1','indian' => '16.7','etc' => '1.7','winner' => 'PKR'),
							  array('ID' => '106','ParliamentID' => 'P106','Location' => 'Petaling Jaya Utara','ChineseLocation' => '八打灵再也北区','StateID' => '12','TotalVoters' => '85401','chinese' => '77.2','malay' => '14.1','indian' => '7.4','etc' => '1.3','winner' => 'DAP'),
							  array('ID' => '107','ParliamentID' => 'P107','Location' => 'Subang','ChineseLocation' => '梳邦','StateID' => '12','TotalVoters' => '128543','chinese' => '38','malay' => '47.5','indian' => '12.6','etc' => '1.9','winner' => 'PKR'),
							  array('ID' => '108','ParliamentID' => 'P108','Location' => 'Shah Alam','ChineseLocation' => '莎阿南','StateID' => '12','TotalVoters' => '99957','chinese' => '14.9','malay' => '69.4','indian' => '14.1','etc' => '1.6','winner' => 'PAS'),
							  array('ID' => '109','ParliamentID' => 'P109','Location' => 'Kapar','ChineseLocation' => '加埔','StateID' => '12','TotalVoters' => '144159','chinese' => '33.6','malay' => '50.6','indian' => '14.3','etc' => '1.6','winner' => 'PKR'),
							  array('ID' => '110','ParliamentID' => 'P110','Location' => 'Klang','ChineseLocation' => '巴生','StateID' => '12','TotalVoters' => '97073','chinese' => '45.8','malay' => '32.2','indian' => '19.8','etc' => '2.2','winner' => 'DAP'),
							  array('ID' => '111','ParliamentID' => 'P111','Location' => 'Kota Raja','ChineseLocation' => '哥打拉惹','StateID' => '12','TotalVoters' => '105909','chinese' => '24.8','malay' => '44','indian' => '29.4','etc' => '1.8','winner' => 'PAS'),
							  array('ID' => '112','ParliamentID' => 'P112','Location' => 'Kuala Langat','ChineseLocation' => '瓜拉冷岳','StateID' => '12','TotalVoters' => '88474','chinese' => '25.8','malay' => '52.3','indian' => '17.1','etc' => '4.7','winner' => 'PKR'),
							  array('ID' => '113','ParliamentID' => 'P113','Location' => 'Sepang','ChineseLocation' => '雪邦','StateID' => '12','TotalVoters' => '84362','chinese' => '22.1','malay' => '57.4','indian' => '15.9','etc' => '4.7','winner' => 'PAS'),
							  array('ID' => '114','ParliamentID' => 'P114','Location' => 'Kepong','ChineseLocation' => '甲洞','StateID' => '14','TotalVoters' => '68035','chinese' => '88.43','malay' => '4.52','indian' => '6.38','etc' => '0.31','winner' => 'DAP'),
							  array('ID' => '115','ParliamentID' => 'P115','Location' => 'Batu','ChineseLocation' => '峇都','StateID' => '14','TotalVoters' => '85402','chinese' => '37.76','malay' => '44.39','indian' => '16.22','etc' => '0.84','winner' => 'PKR'),
							  array('ID' => '116','ParliamentID' => 'P116','Location' => 'Wangsa Maju','ChineseLocation' => '旺沙玛朱','StateID' => '14','TotalVoters' => '67775','chinese' => '36.16','malay' => '53.31','indian' => '8.75','etc' => '0.7','winner' => 'PKR'),
							  array('ID' => '117','ParliamentID' => 'P117','Location' => 'Segambut','ChineseLocation' => '泗岩沫','StateID' => '14','TotalVoters' => '75631','chinese' => '52.75','malay' => '33.24','indian' => '12.05','etc' => '1.27','winner' => 'DAP'),
							  array('ID' => '118','ParliamentID' => 'P118','Location' => 'Setiawangsa','ChineseLocation' => '斯迪亚旺沙','StateID' => '14','TotalVoters' => '62309','chinese' => '30.35','malay' => '56.21','indian' => '11.23','etc' => '0.61','winner' => 'BN'),
							  array('ID' => '119','ParliamentID' => 'P119','Location' => 'Titiwangsa','ChineseLocation' => '蒂蒂旺沙','StateID' => '14','TotalVoters' => '55282','chinese' => '19.85','malay' => '68.05','indian' => '10.38','etc' => '1.07','winner' => 'BN'),
							  array('ID' => '120','ParliamentID' => 'P120','Location' => 'Bukit Bintang','ChineseLocation' => '武吉免登','StateID' => '14','TotalVoters' => '55721','chinese' => '73.13','malay' => '14.38','indian' => '10.77','etc' => '0.75','winner' => 'DAP'),
							  array('ID' => '121','ParliamentID' => 'P121','Location' => 'Lembah Pantai','ChineseLocation' => '班底谷','StateID' => '14','TotalVoters' => '72396','chinese' => '22.82','malay' => '55.3','indian' => '19.95','etc' => '1.33','winner' => 'PKR'),
							  array('ID' => '122','ParliamentID' => 'P122','Location' => 'Seputeh','ChineseLocation' => '士布爹','StateID' => '14','TotalVoters' => '85976','chinese' => '87.98','malay' => '5.32','indian' => '5.84','etc' => '0.62','winner' => 'DAP'),
							  array('ID' => '123','ParliamentID' => 'P123','Location' => 'Cheras','ChineseLocation' => '蕉赖','StateID' => '14','TotalVoters' => '72551','chinese' => '81.79','malay' => '10.32','indian' => '7.25','etc' => '0.36','winner' => 'DAP'),
							  array('ID' => '124','ParliamentID' => 'P124','Location' => 'Bandar Tun Razak','ChineseLocation' => '敦拉蕯镇','StateID' => '14','TotalVoters' => '90993','chinese' => '37.44','malay' => '52.6','indian' => '8.66','etc' => '0.44','winner' => 'PKR'),
							  array('ID' => '125','ParliamentID' => 'P125','Location' => 'Putrajaya','ChineseLocation' => '布城','StateID' => '16','TotalVoters' => '15791','chinese' => '0','malay' => '0','indian' => '0','etc' => '0','winner' => 'BN'),
							  array('ID' => '126','ParliamentID' => 'P126','Location' => 'Jelebu','ChineseLocation' => '日叻务','StateID' => '5','TotalVoters' => '44937','chinese' => '25.9','malay' => '63.1','indian' => '5.9','etc' => '5.1','winner' => 'BN'),
							  array('ID' => '127','ParliamentID' => 'P127','Location' => 'Jempol','ChineseLocation' => '仁保','StateID' => '5','TotalVoters' => '65213','chinese' => '25.3','malay' => '60.1','indian' => '13','etc' => '1.6','winner' => 'BN'),
							  array('ID' => '128','ParliamentID' => 'P128','Location' => 'Seremban','ChineseLocation' => '芙蓉','StateID' => '5','TotalVoters' => '102305','chinese' => '41.1','malay' => '43.6','indian' => '13.5','etc' => '1.8','winner' => 'DAP'),
							  array('ID' => '129','ParliamentID' => 'P129','Location' => 'Kuala Pilah','ChineseLocation' => '瓜拉庇劳','StateID' => '5','TotalVoters' => '47671','chinese' => '16.88','malay' => '76.08','indian' => '5.01','etc' => '2.03','winner' => 'BN'),
							  array('ID' => '130','ParliamentID' => 'P130','Location' => 'Rasah','ChineseLocation' => '亚沙','StateID' => '5','TotalVoters' => '88403','chinese' => '48.34','malay' => '27.84','indian' => '22.16','etc' => '1.67','winner' => 'DAP'),
							  array('ID' => '131','ParliamentID' => 'P131','Location' => 'Rembau','ChineseLocation' => '林茂','StateID' => '5','TotalVoters' => '79661','chinese' => '12.39','malay' => '70.4','indian' => '16.39','etc' => '0.82','winner' => 'BN'),
							  array('ID' => '132','ParliamentID' => 'P132','Location' => 'Telok Kemang','ChineseLocation' => '直落甘望','StateID' => '5','TotalVoters' => '70524','chinese' => '33.81','malay' => '42.35','indian' => '21.41','etc' => '2.43','winner' => 'PKR'),
							  array('ID' => '133','ParliamentID' => 'P133','Location' => 'Tampin','ChineseLocation' => '淡边','StateID' => '5','TotalVoters' => '57268','chinese' => '24.06','malay' => '61.46','indian' => '12.65','etc' => '1.83','winner' => 'BN'),
							  array('ID' => '134','ParliamentID' => 'P134','Location' => 'Masjid Tanah','ChineseLocation' => '马日丹那','StateID' => '4','TotalVoters' => '45952','chinese' => '13.38','malay' => '81.86','indian' => '3.9','etc' => '0.86','winner' => 'BN'),
							  array('ID' => '135','ParliamentID' => 'P135','Location' => 'Alor Gajah','ChineseLocation' => '亚罗牙也','StateID' => '4','TotalVoters' => '63591','chinese' => '27.8','malay' => '58.49','indian' => '12.87','etc' => '0.85','winner' => 'BN'),
							  array('ID' => '136','ParliamentID' => 'P136','Location' => 'Tangga Batu','ChineseLocation' => '冬牙峇株','StateID' => '4','TotalVoters' => '73282','chinese' => '24.94','malay' => '68.07','indian' => '3.53','etc' => '3.46','winner' => 'BN'),
							  array('ID' => '137','ParliamentID' => 'P137','Location' => 'Bukit Katil','ChineseLocation' => '武吉卡迪','StateID' => '4','TotalVoters' => '99438','chinese' => '40.75','malay' => '52.79','indian' => '5.71','etc' => '0.75','winner' => 'PKR'),
							  array('ID' => '138','ParliamentID' => 'P138','Location' => 'Kota Melaka','ChineseLocation' => '马六甲市区','StateID' => '4','TotalVoters' => '92322','chinese' => '59.09','malay' => '35.73','indian' => '3.65','etc' => '1.54','winner' => 'DAP'),
							  array('ID' => '139','ParliamentID' => 'P139','Location' => 'Jasin','ChineseLocation' => '野新','StateID' => '4','TotalVoters' => '64455','chinese' => '18.14','malay' => '71.31','indian' => '10.16','etc' => '0.38','winner' => 'BN'),
							  array('ID' => '140','ParliamentID' => 'P140','Location' => 'Segamat','ChineseLocation' => '','StateID' => '1','TotalVoters' => '47009','chinese' => '45.64','malay' => '44.4','indian' => '0','etc' => '9.96','winner' => 'BN'),
							  array('ID' => '141','ParliamentID' => 'P141','Location' => 'Sekijang','ChineseLocation' => '','StateID' => '1','TotalVoters' => '43066','chinese' => '39.06','malay' => '56.31','indian' => '0','etc' => '4.63','winner' => 'BN'),
							  array('ID' => '142','ParliamentID' => 'P142','Location' => 'Labis','ChineseLocation' => '','StateID' => '1','TotalVoters' => '37714','chinese' => '46.6','malay' => '38.13','indian' => '0','etc' => '15.27','winner' => 'BN'),
							  array('ID' => '143','ParliamentID' => 'P143','Location' => 'Pagoh','ChineseLocation' => '','StateID' => '1','TotalVoters' => '46793','chinese' => '30.93','malay' => '65.15','indian' => '0','etc' => '3.92','winner' => 'BN'),
							  array('ID' => '144','ParliamentID' => 'P144','Location' => 'Ledang','ChineseLocation' => '','StateID' => '1','TotalVoters' => '69316','chinese' => '41.2','malay' => '53.97','indian' => '0','etc' => '4.82','winner' => 'BN'),
							  array('ID' => '145','ParliamentID' => 'P145','Location' => 'Bakri','ChineseLocation' => '','StateID' => '1','TotalVoters' => '67202','chinese' => '53.4','malay' => '44.24','indian' => '0','etc' => '2.36','winner' => 'DAP'),
							  array('ID' => '146','ParliamentID' => 'P146','Location' => 'Muar','ChineseLocation' => '','StateID' => '1','TotalVoters' => '48208','chinese' => '35.46','malay' => '62.91','indian' => '0','etc' => '1.63','winner' => 'BN'),
							  array('ID' => '147','ParliamentID' => 'P147','Location' => 'Parit Sulong','ChineseLocation' => '','StateID' => '1','TotalVoters' => '56896','chinese' => '22.54','malay' => '76.96','indian' => '0','etc' => '0.51','winner' => 'BN'),
							  array('ID' => '148','ParliamentID' => 'P148','Location' => 'Ayer Hitam','ChineseLocation' => '','StateID' => '1','TotalVoters' => '42913','chinese' => '38.04','malay' => '57.99','indian' => '0','etc' => '3.97','winner' => 'BN'),
							  array('ID' => '149','ParliamentID' => 'P149','Location' => 'Sri Gading','ChineseLocation' => '','StateID' => '1','TotalVoters' => '44816','chinese' => '33.68','malay' => '64.86','indian' => '0','etc' => '1.45','winner' => 'BN'),
							  array('ID' => '150','ParliamentID' => 'P150','Location' => 'Batu Pahat','ChineseLocation' => '','StateID' => '1','TotalVoters' => '88272','chinese' => '45.6','malay' => '52.87','indian' => '0','etc' => '1.46','winner' => 'PKR'),
							  array('ID' => '151','ParliamentID' => 'P151','Location' => 'Simpang Renggam','ChineseLocation' => '','StateID' => '1','TotalVoters' => '40143','chinese' => '33.19','malay' => '57.38','indian' => '0','etc' => '9.43','winner' => 'BN'),
							  array('ID' => '152','ParliamentID' => 'P152','Location' => 'Kluang','ChineseLocation' => '','StateID' => '1','TotalVoters' => '86732','chinese' => '49.34','malay' => '40.04','indian' => '0','etc' => '10.62','winner' => 'DAP'),
							  array('ID' => '153','ParliamentID' => 'P153','Location' => 'Sembrong','ChineseLocation' => '','StateID' => '1','TotalVoters' => '41588','chinese' => '31.03','malay' => '59.95','indian' => '0','etc' => '9.02','winner' => 'BN'),
							  array('ID' => '154','ParliamentID' => 'P154','Location' => 'Mersing','ChineseLocation' => '','StateID' => '1','TotalVoters' => '44497','chinese' => '15.92','malay' => '81.8','indian' => '0','etc' => '2.28','winner' => 'BN'),
							  array('ID' => '155','ParliamentID' => 'P155','Location' => 'Tenggara','ChineseLocation' => '','StateID' => '1','TotalVoters' => '39694','chinese' => '17.61','malay' => '74.16','indian' => '0','etc' => '8.23','winner' => 'BN'),
							  array('ID' => '156','ParliamentID' => 'P156','Location' => 'Kota Tinggi','ChineseLocation' => '','StateID' => '1','TotalVoters' => '41894','chinese' => '10.6','malay' => '87.21','indian' => '0','etc' => '2.19','winner' => 'BN'),
							  array('ID' => '157','ParliamentID' => 'P157','Location' => 'Pengerang','ChineseLocation' => '','StateID' => '1','TotalVoters' => '37999','chinese' => '10.13','malay' => '88.88','indian' => '0','etc' => '0.99','winner' => 'BN'),
							  array('ID' => '158','ParliamentID' => 'P158','Location' => 'Tebrau','ChineseLocation' => '','StateID' => '1','TotalVoters' => '90482','chinese' => '38.3','malay' => '47.99','indian' => '0','etc' => '13.71','winner' => 'BN'),
							  array('ID' => '159','ParliamentID' => 'P159','Location' => 'Pasir Gudang','ChineseLocation' => '','StateID' => '1','TotalVoters' => '101041','chinese' => '38.53','malay' => '49.99','indian' => '0','etc' => '13.71','winner' => 'BN'),
							  array('ID' => '160','ParliamentID' => 'P160','Location' => 'Johor Bahru','ChineseLocation' => '','StateID' => '1','TotalVoters' => '96321','chinese' => '42.65','malay' => '52.03','indian' => '0','etc' => '5.32','winner' => 'BN'),
							  array('ID' => '161','ParliamentID' => 'P161','Location' => 'Pulai','ChineseLocation' => '','StateID' => '1','TotalVoters' => '100490','chinese' => '41.13','malay' => '48.43','indian' => '0','etc' => '10.44','winner' => 'BN'),
							  array('ID' => '162','ParliamentID' => 'P162','Location' => 'Gelang Patah','ChineseLocation' => '','StateID' => '1','TotalVoters' => '106726','chinese' => '52.53','malay' => '34.7','indian' => '0','etc' => '12.77','winner' => 'DAP'),
							  array('ID' => '163','ParliamentID' => 'P163','Location' => 'Kulai','ChineseLocation' => '','StateID' => '1','TotalVoters' => '83991','chinese' => '56.2','malay' => '33.41','indian' => '0','etc' => '10.39','winner' => 'DAP'),
							  array('ID' => '164','ParliamentID' => 'P164','Location' => 'Pontian','ChineseLocation' => '','StateID' => '1','TotalVoters' => '49633','chinese' => '27.57','malay' => '71.48','indian' => '0','etc' => '0.95','winner' => 'BN'),
							  array('ID' => '165','ParliamentID' => 'P165','Location' => 'Tanjong Piai','ChineseLocation' => '','StateID' => '1','TotalVoters' => '51875','chinese' => '46.56','malay' => '52.32','indian' => '0','etc' => '1.13','winner' => 'BN'),
							  array('ID' => '166','ParliamentID' => 'P166','Location' => 'Labuan','ChineseLocation' => '','StateID' => '15','TotalVoters' => '24474','chinese' => '0','malay' => '0','indian' => '0','etc' => '0','winner' => 'BN'),
							  array('ID' => '167','ParliamentID' => 'P167','Location' => 'Kudat','ChineseLocation' => '','StateID' => '10','TotalVoters' => '47249','chinese' => '14','malay' => '53','indian' => '31','etc' => '1','winner' => 'BN'),
							  array('ID' => '168','ParliamentID' => 'P168','Location' => 'Kota Marudu','ChineseLocation' => '','StateID' => '10','TotalVoters' => '42197','chinese' => '3','malay' => '27','indian' => '69','etc' => '1','winner' => 'BN'),
							  array('ID' => '169','ParliamentID' => 'P169','Location' => 'Kota Belud','ChineseLocation' => '','StateID' => '10','TotalVoters' => '51467','chinese' => '2','malay' => '58','indian' => '38','etc' => '2','winner' => 'BN'),
							  array('ID' => '170','ParliamentID' => 'P170','Location' => 'Tuaran','ChineseLocation' => '','StateID' => '10','TotalVoters' => '48276','chinese' => '7','malay' => '43','indian' => '48','etc' => '2','winner' => 'BN'),
							  array('ID' => '171','ParliamentID' => 'P171','Location' => 'Sepanggar','ChineseLocation' => '','StateID' => '10','TotalVoters' => '53374','chinese' => '22','malay' => '48','indian' => '28','etc' => '2','winner' => 'BN'),
							  array('ID' => '172','ParliamentID' => 'P172','Location' => 'Kota Kinabalu','ChineseLocation' => '','StateID' => '10','TotalVoters' => '50516','chinese' => '79','malay' => '10','indian' => '8','etc' => '3','winner' => 'DAP'),
							  array('ID' => '173','ParliamentID' => 'P173','Location' => 'Putatan','ChineseLocation' => '','StateID' => '10','TotalVoters' => '37490','chinese' => '24','malay' => '62','indian' => '12','etc' => '2','winner' => 'BN'),
							  array('ID' => '174','ParliamentID' => 'P174','Location' => 'Penampang','ChineseLocation' => '','StateID' => '10','TotalVoters' => '44323','chinese' => '32','malay' => '11','indian' => '5','etc' => '2','winner' => 'PKR'),
							  array('ID' => '175','ParliamentID' => 'P175','Location' => 'Papar','ChineseLocation' => '','StateID' => '10','TotalVoters' => '38771','chinese' => '12','malay' => '62','indian' => '25','etc' => '1','winner' => 'BN'),
							  array('ID' => '176','ParliamentID' => 'P176','Location' => 'Kimanis','ChineseLocation' => '','StateID' => '10','TotalVoters' => '26628','chinese' => '6','malay' => '67','indian' => '25','etc' => '2','winner' => 'BN'),
							  array('ID' => '177','ParliamentID' => 'P177','Location' => 'Beaufort','ChineseLocation' => '','StateID' => '10','TotalVoters' => '30097','chinese' => '11','malay' => '62','indian' => '25','etc' => '2','winner' => 'BN'),
							  array('ID' => '178','ParliamentID' => 'P178','Location' => 'Sipitang','ChineseLocation' => '','StateID' => '10','TotalVoters' => '29177','chinese' => '5','malay' => '80','indian' => '13','etc' => '2','winner' => 'BN'),
							  array('ID' => '179','ParliamentID' => 'P179','Location' => 'Ranau','ChineseLocation' => '','StateID' => '10','TotalVoters' => '39053','chinese' => '3','malay' => '38','indian' => '58','etc' => '1','winner' => 'BN'),
							  array('ID' => '180','ParliamentID' => 'P180','Location' => 'Keningau','ChineseLocation' => '','StateID' => '10','TotalVoters' => '43691','chinese' => '11','malay' => '23','indian' => '64','etc' => '2','winner' => 'BN'),
							  array('ID' => '181','ParliamentID' => 'P181','Location' => 'Tenom','ChineseLocation' => '','StateID' => '10','TotalVoters' => '25304','chinese' => '17','malay' => '25','indian' => '57','etc' => '1','winner' => 'BN'),
							  array('ID' => '182','ParliamentID' => 'P182','Location' => 'Pensiangan','ChineseLocation' => '','StateID' => '10','TotalVoters' => '26194','chinese' => '2','malay' => '12','indian' => '85','etc' => '1','winner' => 'BN'),
							  array('ID' => '183','ParliamentID' => 'P183','Location' => 'Beluran','ChineseLocation' => '','StateID' => '10','TotalVoters' => '24688','chinese' => '2','malay' => '60','indian' => '37','etc' => '1','winner' => 'BN'),
							  array('ID' => '184','ParliamentID' => 'P184','Location' => 'Libaran','ChineseLocation' => '','StateID' => '10','TotalVoters' => '39772','chinese' => '23','malay' => '72','indian' => '4','etc' => '1','winner' => 'BN'),
							  array('ID' => '185','ParliamentID' => 'P185','Location' => 'Batu Sapi','ChineseLocation' => '','StateID' => '10','TotalVoters' => '30199','chinese' => '37','malay' => '60','indian' => '2','etc' => '1','winner' => 'BN'),
							  array('ID' => '186','ParliamentID' => 'P186','Location' => 'Sandakan','ChineseLocation' => '','StateID' => '10','TotalVoters' => '37058','chinese' => '60','malay' => '34','indian' => '4','etc' => '2','winner' => 'DAP'),
							  array('ID' => '187','ParliamentID' => 'P187','Location' => 'Kinabatangan','ChineseLocation' => '','StateID' => '10','TotalVoters' => '24748','chinese' => '1','malay' => '92','indian' => '5','etc' => '2','winner' => 'BN'),
							  array('ID' => '188','ParliamentID' => 'P188','Location' => 'Silam','ChineseLocation' => '','StateID' => '10','TotalVoters' => '51662','chinese' => '14','malay' => '72','indian' => '12','etc' => '2','winner' => 'BN'),
							  array('ID' => '189','ParliamentID' => 'P189','Location' => 'Semporna','ChineseLocation' => '','StateID' => '10','TotalVoters' => '41549','chinese' => '2','malay' => '92','indian' => '4','etc' => '2','winner' => 'BN'),
							  array('ID' => '190','ParliamentID' => 'P190','Location' => 'Tawau','ChineseLocation' => '','StateID' => '10','TotalVoters' => '51538','chinese' => '44','malay' => '50','indian' => '4','etc' => '2','winner' => 'BN'),
							  array('ID' => '191','ParliamentID' => 'P191','Location' => 'Kalabakan','ChineseLocation' => '','StateID' => '10','TotalVoters' => '46793','chinese' => '13','malay' => '77','indian' => '7','etc' => '3','winner' => 'BN'),
							  array('ID' => '192','ParliamentID' => 'P192','Location' => 'Mas Gading','ChineseLocation' => '','StateID' => '11','TotalVoters' => '25771','chinese' => '19.1','malay' => '12.7','indian' => '67.8','etc' => '0.3','winner' => 'BN'),
							  array('ID' => '193','ParliamentID' => 'P193','Location' => 'Santubong','ChineseLocation' => '','StateID' => '11','TotalVoters' => '37017','chinese' => '8.1','malay' => '93.1','indian' => '8.6','etc' => '0.1','winner' => 'BN'),
							  array('ID' => '194','ParliamentID' => 'P194','Location' => 'Petra Jaya','ChineseLocation' => '','StateID' => '11','TotalVoters' => '49750','chinese' => '12.3','malay' => '79.1','indian' => '7.8','etc' => '0.8','winner' => 'BN'),
							  array('ID' => '195','ParliamentID' => 'P195','Location' => 'Bandar Kuching','ChineseLocation' => '','StateID' => '11','TotalVoters' => '53336','chinese' => '90.9','malay' => '5.2','indian' => '3.3','etc' => '0.5','winner' => 'DAP'),
							  array('ID' => '196','ParliamentID' => 'P196','Location' => 'Stampin','ChineseLocation' => '','StateID' => '11','TotalVoters' => '84732','chinese' => '73.2','malay' => '12.8','indian' => '12.8','etc' => '1.2','winner' => 'DAP'),
							  array('ID' => '197','ParliamentID' => 'P197','Location' => 'Kota Samarahan','ChineseLocation' => '','StateID' => '11','TotalVoters' => '38158','chinese' => '12.1','malay' => '65','indian' => '22.3','etc' => '0.6','winner' => 'BN'),
							  array('ID' => '198','ParliamentID' => 'P198','Location' => 'Mambong','ChineseLocation' => '','StateID' => '11','TotalVoters' => '42344','chinese' => '26.7','malay' => '12.1','indian' => '60.7','etc' => '0.4','winner' => 'BN'),
							  array('ID' => '199','ParliamentID' => 'P199','Location' => 'Serian','ChineseLocation' => '','StateID' => '11','TotalVoters' => '33713','chinese' => '10.6','malay' => '14.5','indian' => '74.6','etc' => '0.3','winner' => 'BN'),
							  array('ID' => '200','ParliamentID' => 'P200','Location' => 'Batang Sadong','ChineseLocation' => '','StateID' => '11','TotalVoters' => '19839','chinese' => '5.6','malay' => '73.4','indian' => '20.8','etc' => '0.1','winner' => 'BN'),
							  array('ID' => '201','ParliamentID' => 'P201','Location' => 'Batang Lupar','ChineseLocation' => '','StateID' => '11','TotalVoters' => '27360','chinese' => '3.2','malay' => '76.7','indian' => '19.9','etc' => '0.1','winner' => 'BN'),
							  array('ID' => '202','ParliamentID' => 'P202','Location' => 'Sri Aman','ChineseLocation' => '','StateID' => '11','TotalVoters' => '29789','chinese' => '17','malay' => '20.3','indian' => '62.5','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '203','ParliamentID' => 'P203','Location' => 'Lubok Antu','ChineseLocation' => '','StateID' => '11','TotalVoters' => '19303','chinese' => '8.1','malay' => '18.3','indian' => '73.4','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '204','ParliamentID' => 'P204','Location' => 'Betong','ChineseLocation' => '','StateID' => '11','TotalVoters' => '26322','chinese' => '7.1','malay' => '50','indian' => '42.7','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '205','ParliamentID' => 'P205','Location' => 'Saratok','ChineseLocation' => '','StateID' => '11','TotalVoters' => '27562','chinese' => '6.9','malay' => '43.7','indian' => '49.3','etc' => '0.1','winner' => 'BN'),
							  array('ID' => '206','ParliamentID' => 'P206','Location' => 'Tanjong Manis','ChineseLocation' => '','StateID' => '11','TotalVoters' => '19215','chinese' => '5.4','malay' => '73.9','indian' => '20.2','etc' => '0.5','winner' => 'BN'),
							  array('ID' => '207','ParliamentID' => 'P207','Location' => 'Igan','ChineseLocation' => '','StateID' => '11','TotalVoters' => '17771','chinese' => '3.8','malay' => '81.2','indian' => '14.8','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '208','ParliamentID' => 'P208','Location' => 'Sarikei','ChineseLocation' => '','StateID' => '11','TotalVoters' => '36550','chinese' => '65.7','malay' => '11','indian' => '23.1','etc' => '0.2','winner' => 'DAP'),
							  array('ID' => '209','ParliamentID' => 'P209','Location' => 'Julau','ChineseLocation' => '','StateID' => '11','TotalVoters' => '22522','chinese' => '4.8','malay' => '12.2','indian' => '82.8','etc' => '0.1','winner' => 'BN'),
							  array('ID' => '210','ParliamentID' => 'P210','Location' => 'Kanowit','ChineseLocation' => '','StateID' => '11','TotalVoters' => '19433','chinese' => '12','malay' => '15.9','indian' => '71.9','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '211','ParliamentID' => 'P211','Location' => 'Lanang','ChineseLocation' => '','StateID' => '11','TotalVoters' => '57143','chinese' => '72.1','malay' => '10.1','indian' => '17.6','etc' => '0.1','winner' => 'DAP'),
							  array('ID' => '212','ParliamentID' => 'P212','Location' => 'Sibu','ChineseLocation' => '','StateID' => '11','TotalVoters' => '64601','chinese' => '64.6','malay' => '19.8','indian' => '15.3','etc' => '0.3','winner' => 'DAP'),
							  array('ID' => '213','ParliamentID' => 'P213','Location' => 'Mukah','ChineseLocation' => '','StateID' => '11','TotalVoters' => '26477','chinese' => '9.8','malay' => '74.3','indian' => '15.6','etc' => '0.3','winner' => 'BN'),
							  array('ID' => '214','ParliamentID' => 'P214','Location' => 'Selangau','ChineseLocation' => '','StateID' => '11','TotalVoters' => '25461','chinese' => '3.5','malay' => '13.3','indian' => '82.9','etc' => '0.3','winner' => 'BN'),
							  array('ID' => '215','ParliamentID' => 'P215','Location' => 'Kapit','ChineseLocation' => '','StateID' => '11','TotalVoters' => '26195','chinese' => '10.3','malay' => '21.7','indian' => '67.7','etc' => '0.3','winner' => 'BN'),
							  array('ID' => '216','ParliamentID' => 'P216','Location' => 'Hulu Rajang','ChineseLocation' => '','StateID' => '11','TotalVoters' => '21686','chinese' => '1.3','malay' => '20','indian' => '77.1','etc' => '1.6','winner' => 'BN'),
							  array('ID' => '217','ParliamentID' => 'P217','Location' => 'Bintulu','ChineseLocation' => '','StateID' => '11','TotalVoters' => '59893','chinese' => '27.9','malay' => '28.5','indian' => '43.5','etc' => '0.2','winner' => 'BN'),
							  array('ID' => '218','ParliamentID' => 'P218','Location' => 'Sibuti','ChineseLocation' => '','StateID' => '11','TotalVoters' => '28351','chinese' => '22.3','malay' => '33.2','indian' => '44.1','etc' => '0.4','winner' => 'BN'),
							  array('ID' => '219','ParliamentID' => 'P219','Location' => 'Miri','ChineseLocation' => '','StateID' => '11','TotalVoters' => '71170','chinese' => '57.4','malay' => '25.6','indian' => '16.5','etc' => '0.6','winner' => 'PKR'),
							  array('ID' => '220','ParliamentID' => 'P220','Location' => 'Baram','ChineseLocation' => '','StateID' => '11','TotalVoters' => '29385','chinese' => '9','malay' => '20.6','indian' => '69.9','etc' => '0.5','winner' => 'BN'),
							  array('ID' => '221','ParliamentID' => 'P221','Location' => 'Limbang','ChineseLocation' => '','StateID' => '11','TotalVoters' => '24278','chinese' => '19.3','malay' => '45','indian' => '35.3','etc' => '0.4','winner' => 'BN'),
							  array('ID' => '222','ParliamentID' => 'P222','Location' => 'Lawas','ChineseLocation' => '','StateID' => '11','TotalVoters' => '18845','chinese' => '9.6','malay' => '42.8','indian' => '47.1','etc' => '0.6','winner' => 'BN')
							);

		foreach ($seat_parliament as $row) {
			DB::table('parliament')->insert(
				array(
					'location'=>$row['Location'],
					'state_id'=>$row['StateID']
				)
			);
		}

		Schema::create('dm',function($table)
		{
			$table->increments('dm_id');
			$table->string('dm_name',50)->unique();
			// $table->string('dm_name',50);
			$table->string('dm_coordinates',10000);
			$table->unsignedInteger('parliament_id');
			$table->foreign('parliament_id')->references('parliament_id')->on('parliament');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dm');
		Schema::drop('parliament');
		Schema::drop('state');
	}

}
