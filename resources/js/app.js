import './bootstrap';

document.getElementById('edit_a_user1').addEventListener('click', function(){
    document.getElementById('id').disabled = false;
})


document.getElementById('submit_btn').addEventListener('click', function(){
    document.getElementById('id').disabled = true;

})