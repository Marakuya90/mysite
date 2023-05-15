let buttonActivateForm = document.querySelectorAll(".btn-activate");

let formAuthorization = document.querySelectorAll(".form_authorization");
function formActivator(e) {
    let classList = e.target.parentNode.classList;
    console.log(classList);
    console.log(formAuthorization);
    
    
    if (classList.contains('unhidden')) {
        formAuthorization.forEach(item => item.classList.toggle('unhidden'))
        classList.remove('unhidden');
        classList.add('hidden');
    }
}

buttonActivateForm.forEach(item => item.addEventListener('click',formActivator));
