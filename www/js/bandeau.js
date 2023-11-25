const bandeau = document.getElementById("bandeau");
setInterval(() => {
  if (bandeau.style.color === "rgb(230, 66, 156)") {
    bandeau.style.color = "white";
  } else {
    bandeau.style.color = "rgb(230, 66, 156)";
  }
}, 1000);