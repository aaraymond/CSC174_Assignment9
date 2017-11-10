var toggler = "toggler";
var toggled = "togglee";
var toggle_button = document.getElementById(toggler);
var toggle_element = document.getElementById(toggled);
toggle_element.style.display = 'none';
function toggleElement(id){ 
	var e = document.getElementById(id); 
	if (e.style.display == 'inline') {
		e.style.display = 'none'
	} else {
		e.style.display = 'inline'
	}
}; 
toggle_button.addEventListener("click", function(){
	toggleElement(toggled)
}, false);