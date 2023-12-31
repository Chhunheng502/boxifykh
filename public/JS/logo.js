function toggleMenu() {
    var menu = document.getElementById("menu");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
  }
  
  // Close the menu if the user clicks outside of it
  document.addEventListener("click", function(event) {
    var menu = document.getElementById("menu");
    if (event.target !== menu && !menu.contains(event.target)) {
      menu.style.display = "none";
    }
  });
  