const bookmarkBtn = document.querySelector(".bookmark-btn");
bookmarkBtn.addEventListener("click", function() {
  const bookmarkIcon = bookmarkBtn.querySelector("i");
  bookmarkIcon.classList.toggle("far");
  bookmarkIcon.classList.toggle("fas");
});

