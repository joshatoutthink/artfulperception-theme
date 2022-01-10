(function ContactForm() {
    var form = document.getElementById('contact-form');
    var formMsg = document.getElementById('message');
    var submit = document.getElementById('contact-submit');
    var notificationDiv = document.getElementById("mail-message");

    function init() {
        attachEventListeners();
    }

    function attachEventListeners() {
        submit.addEventListener('click', function(e) {
            e.preventDefault();
            notificationDiv.classList.add('display-none');
            sendEmail();
        });
    }

    function sendEmail() {
        var successMessage = 'Sent. Thanks for contacting us!';
        var errorMessage = 'Failed to send. Please try again.';
        var data = new FormData(form);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            var sent = this.readyState === 4 && this.status === 200;

            if (sent) {
                notificationDiv.innerText = successMessage;
                notificationDiv.classList.add('success');
                form.email.disabled = true;
                form.name.disabled = true;
                formMsg.disabled = true;
                submit.disabled = true;
            } else {
                console.log(this.status);
                console.log(this.responseText);
                notificationDiv.innerText = errorMessage;
                notificationDiv.classList.add('failure');
            }
            notificationDiv.classList.remove('display-none');
        };

        xmlhttp.open("POST", "https://formspree.io/xoqdzlyp", true);
        xmlhttp.setRequestHeader("Accept", "application/json");
        xmlhttp.send(data);
    }

    init();

})();
