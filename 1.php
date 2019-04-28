<?php
$data = ['name' => 'Nauval Al Zidane',
        'address' => 'Bandung Barat',
        'hobbies' => ['main papji','main ml'],
        'is_married' => false,
        'school' => [['highSchool'=>'Smk Tunas Bangsa Ngamprah','university'=>null]],
        'skills' => (object)['PHP','MYSQL']
        ];
function ubahkejson($data){
	return json_encode($data);
}
echo ubahkejson($data);
?>