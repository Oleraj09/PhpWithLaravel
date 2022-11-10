var task = document.querySelector('#task');
var todobtn = document.querySelector('#todo');
// function addtodo(){
//     console.log(task.value);
// }
todobtn.addEventListener('click',function(){
    // addtodo();
    if(localStorage.getItem('todo-list')==null){
        localStorage.setItem('todo-list','[]');   
        var todos = JSON.parse(localStorage.getItem('todo-list'));
        todos.push(task.value);
        localStorage.setItem('todo-list',JSON.stringify(todos));     
    }
    else{
        //JSON.parse is way to conversation string to array
        // localStorage.setItem('todo-list','[dfdfd]');
        var todos = JSON.parse(localStorage.getItem('todo-list'));
        todos.push(task.value);
        localStorage.setItem('todo-list',JSON.stringify(todos));
    }
});

for(var todo in todos){
    
}