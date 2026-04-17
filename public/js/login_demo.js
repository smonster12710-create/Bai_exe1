document.addEventListener("DOMContentLoaded", function () {
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    const messageBox = document.getElementById("messageBox");

    if (username) {
        username.focus();
    }

    [username, password].forEach(function(input){
        if (!input) return;

        input.addEventListener("input", function(){
            if (messageBox) {
                messageBox.innerHTML = "";
            }
        });
    });
});
