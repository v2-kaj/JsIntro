document.addEventListener("DOMContentLoaded", function (){
 	const form = document.querySelector("form")
	const taskField = document.querySelector("#task")
	const taskList = document.querySelector("#taskList")

	form.onsubmit = addTask

	//Function that displays the task on the page
	function addTask (){
	const li = document.createElement("li")
	li.innerHTML = taskField.value
	taskList.append(li)
	
	return false
	} 
})

