function addTask() {
    const taskInput = document.getElementById("taskInput");
    const taskText = taskInput.value.trim();
  
    if (taskText === "") {
      alert("Please enter a task.");
      return;
    }
  
    const li = document.createElement("li");
    li.textContent = taskText;
  
    li.onclick = function () {
      li.classList.toggle("done");
    };
  
    document.getElementById("taskList").appendChild(li);
    taskInput.value = "";
  }
  