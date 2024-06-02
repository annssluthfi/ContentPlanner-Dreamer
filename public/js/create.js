document.addEventListener("DOMContentLoaded", function () {
    // Get references to the cancel and save buttons
    var cancelButton = document.querySelector(".cancel-button");
    var saveButton = document.querySelector(".save-button");

    // Add event listener for the cancel button
    cancelButton.addEventListener("click", function () {
        // Your code to handle cancel button click
        console.log("Cancel button clicked");
    });

    // Add event listener for the save button
    saveButton.addEventListener("click", function () {
        // Your code to handle save button click
        console.log("Save button clicked");

        // You might also want to submit the form here
        // For example: document.querySelector('.form').submit();
    });
});
