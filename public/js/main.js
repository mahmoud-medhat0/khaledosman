function toggle(div_id) {
    var el = document.getElementById(div_id);
    if (el.style.display == "none") {
      el.style.display = "block";
    } else {
      el.style.display = "none";
    }
  }
  function blanket_size(popUpDivVar) {
    if (typeof window.innerWidth != "undefined") {
      viewportheight = window.innerHeight;
    } else {
      viewportheight = document.documentElement.clientHeight;
    }
    if (
      viewportheight > document.body.parentNode.scrollHeight &&
      viewportheight > document.body.parentNode.clientHeight
    ) {
      blanket_height = viewportheight;
    } else {
      if (
        document.body.parentNode.clientHeight >
        document.body.parentNode.scrollHeight
      ) {
        blanket_height = document.body.parentNode.clientHeight;
      } else {
        blanket_height = document.body.parentNode.scrollHeight;
      }
    }
    var blanket = document.getElementById("blanket");
    blanket.style.height = "150%";
    var popUpDiv = document.getElementById(popUpDivVar);
    popUpDiv_height = blanket_height / 2 - 200; //200 is half popup's height
    popUpDiv.style.top = "164px";
  }
  function window_pos(popUpDivVar) {
    if (typeof window.innerWidth != "undefined") {
      viewportwidth = window.innerHeight;
    } else {
      viewportwidth = document.documentElement.clientHeight;
    }
    if (
      viewportwidth > document.body.parentNode.scrollWidth &&
      viewportwidth > document.body.parentNode.clientWidth
    ) {
      window_width = viewportwidth;
    } else {
      if (
        document.body.parentNode.clientWidth >
        document.body.parentNode.scrollWidth
      ) {
        window_width = document.body.parentNode.clientWidth;
      } else {
        window_width = document.body.parentNode.scrollWidth;
      }
    }
    var popUpDiv = document.getElementById(popUpDivVar);
    window_width = window_width / 2 - 200; //200 is half popup's width
    // popUpDiv.style.left = window_width + 'px';
  }
  function popup(windowname) {
    blanket_size(windowname);
    window_pos(windowname);
    toggle("blanket");
    toggle(windowname);
  }

let bgLoading = document.getElementById("bgLoading");
let bgLoadingCont = document.querySelector("#bgLoading .loader");
window.onload = () => {
  setTimeout(function () {
    bgLoadingCont.style.opacity = "0";
    bgLoading.style.backgroundColor = "transparent";
    bgLoading.style.pointerEvents = "none";
    bgLoading.style.backdropFilter = "blur(0px)";
    setTimeout(function () {
      bgLoadingCont.style.display = "none";
      bgLoading.style.display = "none";
    }, 2500);
  }, 3000);
};

