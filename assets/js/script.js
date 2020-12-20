let openSidebar = function(e){
	let el = document.getElementsByClassName('sidebar');
	let er = document.getElementsByClassName('backdrop');
	el[0].style.transform = 'translateX(-320px)';
	er[0].style.display = 'block';
}

let closeSidebar = function(e){
	let el = document.getElementsByClassName('sidebar');
	let er = document.getElementsByClassName('backdrop');
	el[0].style.transform = 'translateX(320px)';
	er[0].style.display = 'none';
}