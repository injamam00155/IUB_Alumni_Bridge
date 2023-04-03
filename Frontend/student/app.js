const bookmarkBtn = document.getElementById("bookmark-btn");
  bookmarkBtn.addEventListener("click", function() {
    const bookmarkIcon = bookmarkBtn.querySelector("i");
    bookmarkIcon.classList.toggle("far");
    bookmarkIcon.classList.toggle("fas");
    
  });