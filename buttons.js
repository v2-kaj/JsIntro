document.addEventListener("DOMContentLoaded", function(){
	const offBtn = document.querySelector('#offBtn')
	const onnBtn = document.querySelector('#onBtn')
	offBtn.onclick=switchOff
	onBtn.onclick=switchOn
})

function switchOff(){
	document.querySelector('body').style.background="black"
}
function switchOn(){
	document.querySelector('body').style.background="yellow"
}
