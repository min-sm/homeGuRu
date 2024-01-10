"use strict";

const deleteItems = document.querySelectorAll(`a[name=delete]`);
console.log(deleteItems);
let confirmURL;
deleteItems.forEach(item=>{
    item.addEventListener("click",function(){
        document.getElementById('deleteModal').style.display = 'flex';
        
    })
});

const delete2Items = document.querySelectorAll(`a[name=delete2]`);
delete2Items.forEach(item=>{
    item.addEventListener("click",function(){
        document.getElementById('deleteModal2').style.display = 'flex';
        
    })
});






function confirmDelete(){
    window.location.href = confirmURL;
}

function confirmation(deleteURL){
    confirmURL = deleteURL;
  console.log(confirmURL);
}

function hideModal(){
    document.getElementById('deleteModal').style.display = 'none';
    document.getElementById('deleteModal2').style.display = 'none';

}
