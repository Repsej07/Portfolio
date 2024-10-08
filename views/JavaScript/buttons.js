function openNav() {
    document.getElementById("overlay").style.height = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  }
function nav() {

  if (document.getElementById("overlay").style.height == "100%") {
    document.getElementById("overlay").style.height = 0;
    document.getElementById("nav-bar").style.display = "none";
    document
      .getElementById("menu")
      .setAttribute("d", "M10 40H70M10 20H70M10 60H70");
  } else if (document.getElementById("overlay").style.height == 0) {
      document.getElementById("nav-bar").style.display = "grid";
      document.getElementById("overlay").style.height = "100%";
      document
        .getElementById("menu")
        .setAttribute(
          "d",
          "M21.3337 63.3334L16.667 58.6667L35.3337 40L16.667 21.3334L21.3337 16.6667L40.0003 35.3334L58.667 16.6667L63.3337 21.3334L44.667 40L63.3337 58.6667L58.667 63.3334L40.0003 44.6667L21.3337 63.3334Z"
        );
  }
}
