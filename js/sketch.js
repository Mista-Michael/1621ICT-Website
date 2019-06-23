
function validateForm(event) {
    event.preventDefault();

    let form = document.forms["c-form"];
    let firstname = document.getElementById("first-name").value;
    let lastname = document.getElementById("last-name").value;
    let email = document.getElementById("email").value;
    let issue = "";
    
    if (document.getElementById('service').checked) {
        issue = document.getElementById('service').value;
    } else if (document.getElementById('food').checked) {
        issue = document.getElementById('food').value;
    } else if (document.getElementById('cleaniness').checked) {
        issue = document.getElementById('cleaniness').value;
    } else if (document.getElementById('other').checked) {
        issue = document.getElementById('other').value;
    }
    let message = document.getElementById("message").value;
    
    if (firstname === "" || lastname === "" || email === "" || issue === "" || message === "") {
        alert("Please fill out the form to submit.");
        return false;
    }
    form.submit();
}
