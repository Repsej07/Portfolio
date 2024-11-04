// Function to open GitHub profile in a new tab
function gitHublink() {
  window.open("https://github.com/Repsej07");
}

// Function to open Instagram profile in a new tab
function instaGramlink() {
  window.open("https://www.instagram.com/jesper.200704/");
}

// Function to open LinkedIn profile in a new tab
function linkedInlink() {
  window.open("https://www.linkedin.com/in/jesper-meuzelaar/");
}

// Function to navigate to different project pages based on the index
function link($index) {
  switch ($index) {
    case 1:
      // Navigate to Sony project page
      window.location.href = "/project/sony";
      break;
    case 2:
      // Navigate to MediaMarkt project page
      window.location.href = "/project/mediamarkt";
      break;
    case 3:
      // Navigate to Code project page
      window.location.href = "/project/code";
      break;
    case 4:
      // Navigate to BMD project page
      window.location.href = "/project/bmd";
      break;
    case 0:
      // Navigate to home page
      window.location.href = "/";
      break;
    default:
      // Do nothing for undefined index
      break;
  }
}