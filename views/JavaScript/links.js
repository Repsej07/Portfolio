user = "jesper";
function gitHublink() {
  window.open("https://github.com/Repsej07");
}
function instaGramlink() {
  window.open("https://www.instagram.com/jesper.200704/");
}
function linkedInlink() {
  window.open("https://www.linkedin.com/in/jesper-meuzelaar/");
}

function link($index){
    
  
  switch ($index) {
    case 1:
      window.location.href = "/project/sony";
      break;
    case 2:
      window.location.href = "/project/mediamarkt";
      break;
    case 3:
      window.location.href = "/project/code";
      break;
    case 4:
      window.location.href = "/project/bmd";
      break;
    case 0: 
    window.location.href = "/"
    default:
      break;
  }
}