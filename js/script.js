const form = document.querySelector("form");
console.log(form);

form.addEventListener("submit", function(ev){
    ev.preventDefault();
    const formData = new FormData(form);

    fetch('send_email.php', {
        method: 'POST',
        body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById('message').textContent = data.message;
        })
})