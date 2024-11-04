// Function to open the navigation overlay
function openNav() {
  // Set the overlay height to 100% to make it visible
  document.getElementById("overlay").style.height = "100%";
  
  // Change the menu icon to a close (X) icon
  document
    .getElementById("menu")
    .setAttribute(
      "d",
      "M21.3337 63.3334L16.667 58.6667L35.3337 40L16.667 21.3334L21.3337 16.6667L40.0003 35.3334L58.667 16.6667L63.3337 21.3334L44.667 40L63.3337 58.6667L58.667 63.3334L40.0003 44.6667L21.3337 63.3334Z"
    );
  
  // Prevent scrolling on the body
  document.querySelector("body").style.overflow = "hidden";
}

// Function to close the navigation overlay
function closeNav() {
  // Set the overlay height to 0% to hide it
  document.getElementById("overlay").style.height = "0%";
  
  // Change the menu icon back to the hamburger icon
  document
    .getElementById("menu")
    .setAttribute("d", "M10 40H70M10 20H70M10 60H70");

  // Allow scrolling on the body
  document.querySelector("body").style.overflow = "auto";
  
  // Add the hidden class to the overlay
  document.getElementById("overlay").classList.add("hidden");
}

// Function to toggle the navigation overlay
function Menu() {
  // Check if the overlay is currently open
  if (document.getElementById("overlay").style.height == "100%") {
    // If open, close the overlay
    closeNav();
  } else {
    // If closed, open the overlay
    openNav();
  }
}
