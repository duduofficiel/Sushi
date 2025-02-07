document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            sendData(form);
        });
    }
});

function sendData(form) {
    const xhr = new XMLHttpRequest();
    const formData = new FormData(form);
    const responseContainer = document.getElementById("formResponse");

    xhr.addEventListener("load", () => {
        if (xhr.status >= 400) {
            responseContainer.innerHTML = `<p class="text-danger">Request failed: ${xhr.status}</p>`;
            return;
        }

        const response = JSON.parse(xhr.responseText);
        
        if (response.status === "success") {
            responseContainer.innerHTML = `<p class="text-success">${response.message}</p>`;
            form.reset();
        } else {
            responseContainer.innerHTML = `<p class="text-danger">${response.message}</p>`;
        }
    });

    xhr.addEventListener("error", () => {
        responseContainer.innerHTML = `<p class="text-danger">Error occurred. Please try again later.</p>`;
    });

    xhr.open("POST", form.getAttribute("action"));
    xhr.send(formData);
}
