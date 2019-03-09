<?php
		function biodata() {
			$data = array(
				'name' => 'Ari Putra Nugraha',
				'address' => 'Jl. Pulau Seribu No. 5 Tabanan',
				'hobbies' => array('Fitness', 'Code', 'Game'),
				'is_married' => FALSE,
				'school' => array('highSchool'=>'SMAN 1 Tabanan', 'university'=>'Telkom University'),
				'skill' => array('CodeIgniter', 'C', 'PHP', 'Matlab'),
			);

			header('Content-Type: application/json');
			echo json_encode($data, JSON_PRETTY_PRINT);
		}

		biodata();
			
?>
