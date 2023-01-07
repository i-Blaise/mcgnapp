let gallery_control_option = document.querySelectorAll('.gallery_control_option');
	let nature = document.querySelectorAll('.nature');
	let people = document.querySelectorAll('.people');
	let animals = document.querySelectorAll('.animals');
	let home = document.querySelectorAll('.home');
	let orientation=document.getElementById('orientation');
	let any = document.getElementById('any');
	let landscape=document.getElementById('landscape');
	let portrait = document.getElementById('portrait');
	let nature_landscape = document.querySelectorAll('.nature_landscape');
	let nature_portrait = document.querySelectorAll('.nature_portrait');
	let people_landscape = document.querySelectorAll('.people_landscape');
	let people_portrait = document.querySelectorAll('.people_portrait');
	let animals_landscape = document.querySelectorAll('.animals_landscape');
	let animals_portrait = document.querySelectorAll('.animals_portrait');
	let home_landscape = document.querySelectorAll('.home_landscape');
	let home_portrait = document.querySelectorAll('.home_portrait');
	let orientation_option_wrapper=document.getElementById('orientation_option_wrapper');
	let orientation_status=0;
	let orientation_option = document.querySelectorAll('.orientation_option');
	let check = document.querySelectorAll('.check');
	let current_display="nature";
	highlight_active(0,1,2,3);

	// gallery filter menu
	for(i=0;i< gallery_control_option.length;i++){
		gallery_control_option[0].onclick=function(){
			filter_gallery(nature,people,animals,home);
			highlight_active(0,1,2,3);
			current_display="nature";
			display_check(0,1,2);
			orientation_option_wrapper.style.display="none";
			orientation.style.color="#4a4a4a";
			orientation.innerHTML="Any Orientation";
		}
		gallery_control_option[1].onclick=function(){
			filter_gallery(people,nature,animals,home);
			highlight_active(1,0,2,3);
			current_display="people";
			display_check(0,1,2);
			orientation_option_wrapper.style.display="none";
			orientation.style.color="#4a4a4a";
			orientation.innerHTML="Any Orientation";
		}
		gallery_control_option[2].onclick=function(){
			filter_gallery(animals,nature,people,home);
			highlight_active(2,1,0,3);
			current_display="animals";
			display_check(0,1,2);
			orientation_option_wrapper.style.display="none";
			orientation.style.color="#4a4a4a";
			orientation.innerHTML="Any Orientation";
		}
		gallery_control_option[3].onclick=function(){
			filter_gallery(home,animals,nature,people);
			highlight_active(3,1,2,0);
			current_display="home";
			display_check(0,1,2);
			orientation_option_wrapper.style.display="none";
			orientation.style.color="#4a4a4a";
			orientation.innerHTML="Any Orientation";
		}
	}
	
	// display orientation dropdown
	orientation.onclick=function(){
		if (orientation_status==0) {
			orientation_status=1;
			orientation_option_wrapper.style.display="block";
		}else{
			orientation_status=0;
			orientation_option_wrapper.style.display="none";
		}
	}

	// orientation option default
	display_check(0,1,2);
	orientation.innerHTML="Any Orientation";
	
	// filter gallery
	function filter_gallery($display,$hide,$hide2,$hide3){
		for(i=0;i<$display.length;i++){
	 		$display[i].style.display="block";
	 	}
		for(i=0;i<$hide.length;i++){
			$hide[i].style.display="none";
		}
		for(i=0;i<$hide2.length;i++){
			$hide2[i].style.display="none";
	 	}
		for(i=0;i<$hide3.length;i++){
			$hide3[i].style.display="none";
	 	}
	}

	// highlight the current gallery filter in menu
	function highlight_active($a,$b,$c,$d){
		let arr=[$a,$b,$c,$d];
		for (e= 0;e < arr.length; e ++) {
			gallery_control_option[e].style.textDecoration="none";
			gallery_control_option[e].style.fontWeight="400";
			gallery_control_option[$a].style.textDecoration="underline";
			gallery_control_option[$a].style.fontWeight="700";
		}
	}

	// display the check icon before to the orientation option
	function display_check($a,$b,$c){
		for (e= 0;e < check.length; e ++) {
			check[$a].style.display="block";
			check[$b].style.display="none";
			check[$c].style.display="none";
		}
	}
	
	// filter gallery for landscape orientation
	landscape.onclick=function(){
		display_check(1,0,2);
		orientation.style.color="#000";
		orientation.innerHTML="Landscape";
		if (current_display=="nature") {
			for (i= 0;i < nature_landscape.length; i ++) {
				nature_landscape[i].style.display="block";
				
			}
			 for (i= 0;i < nature_portrait.length; i ++) {
			 	nature_portrait[i].style.display="none";
			 }
		}
		if (current_display=="people") {
			for (i= 0;i < people_landscape.length; i ++) {
				people_landscape[i].style.display="block";

			}
			for (i= 0;i < people_portrait.length; i ++) {
				people_portrait[i].style.display="none";
			}
		}
		if (current_display=="animals") {
			for (i= 0;i < animals_landscape.length; i ++) {
				animals_landscape[i].style.display="block";
			}
			for (i= 0;i < animals_portrait.length; i ++) {
				animals_portrait[i].style.display="none";
			}
		}
		if (current_display=="home") {
			for (i= 0;i < home_landscape.length; i ++) {
				home_landscape[i].style.display="block";
			}
			for (i= 0;i < home_portrait.length; i ++) {
				home_portrait[i].style.display="none";
			}
		}
	}

	// filter gallery for portrait orientation
	portrait.onclick=function(){
		display_check(2,1,0);
		orientation.style.color="#000";
		orientation.innerHTML="Portrait";
		if (current_display=="nature") {
			for (i= 0;i < nature_landscape.length; i ++) {
				nature_landscape[i].style.display="none";
			}
			 for (i= 0;i < nature_portrait.length; i ++) {
			 	nature_portrait[i].style.display="block";
			 }
		}
		if (current_display=="people") {
			for (i= 0;i < people_landscape.length; i ++) {
				people_landscape[i].style.display="none";
			}
			for (i= 0;i < people_portrait.length; i ++) {
				people_portrait[i].style.display="block";
			}
		}
		if (current_display=="animals") {
			for (i= 0;i < animals_landscape.length; i ++) {
				animals_landscape[i].style.display="none";
			}
			for (i= 0;i < animals_portrait.length; i ++) {
				animals_portrait[i].style.display="block";
			}
		}
		if (current_display=="home") {
			for (i= 0;i < home_landscape.length; i ++) {
				home_landscape[i].style.display="none";
			}
			for (i= 0;i < home_portrait.length; i ++) {
				home_portrait[i].style.display="block";
			}
		}
	}

	// filter gallery for any orientation
	any.onclick=function(){
		display_check(0,1,2);
		orientation.style.color="#000";
		orientation.innerHTML="Any Orientation";
		if (current_display=="nature") {
			filter_gallery(nature,people,animals,home);
		}
		if (current_display=="people") {
			filter_gallery(people,nature,animals,home);
		}
		if (current_display=="animals") {
			filter_gallery(animals,nature,people,home);
		}
		if (current_display=="home") {
			filter_gallery(home,nature,people,animals);
		}
	}