<?php

function biodata(){
	$biodata = [
		"name"			=>"Frengki Suwito",
		"addres"		=>"Jl.Swadaya, Lorong Sukadadrma V, Palembang",
		"hobbies"		=>["Gaming","koding"],
		"is_married"	=>false,
		"school"		=>(object)[
							"highschool" => "SMA Negeri 8 Palembang",
							"university" => "Universitas Bina Darma Palembang"
		],
		"skills"        =>(object)[
							"skill"				=> "html, css, php, jquery",
							"skill_framework"   =>"bootstrap, codeigniter newbie"
		]
	];
	return $biodata;
}
echo json_encode(biodata());

?>