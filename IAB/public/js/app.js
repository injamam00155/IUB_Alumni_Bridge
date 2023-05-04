const commentBtns = document.getElementsByClassName("comment-btn");
Array.from(commentBtns).forEach((btn) => {
    btn.addEventListener("click", () => {
        const commentSection = btn.parentNode.parentNode.nextElementSibling;
        commentSection.classList.toggle("d-none");
    });
});

// Get all the bookmark buttons
const bookmarkBtns = document.querySelectorAll(".bookmark-btn");

// Loop through each bookmark button and add a click event listener to it
bookmarkBtns.forEach((bookmarkBtn) => {
    bookmarkBtn.addEventListener("click", () => {
        // Get the font icon inside the bookmark button
        const icon = bookmarkBtn.querySelector("i");

        // Toggle the font icon weight
        icon.classList.toggle("far");
        icon.classList.toggle("fas");
    });
});
