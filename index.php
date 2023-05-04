<?php 
include("dbcn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script type="text/javascript"src="multiselect-dropdown.js"></script>
    
</head>
<body style="background-image: url('photos/bbb.jpg');  background-repeat: no-repeat;background-attachment: fixed;
  background-size: 100% 100%;">
    
    
  <section class="hedar"> 
    <br>
  <div class="container d-grid gap-2 col-1 mx-auto " style="float:right">
    <a class="btn btn-outline-success" target="_blank" href="signup.php">Signup</a>
    
    
    </div>
  <div>
    <br><br>
    <img style="height: 170px;"class="lgg" src="photos/logo.png" alt=""> <br><br><br><br><br>
  </div>
  
  </section>

    
    
    <section class="inform d-flex justify-content-center">
    <form class="pp" action="loginsub.php" method="post">
    <br>
    <label for="un"><b>Username</b></label>
    <input id="un" type="text" placeholder="Enter your username" name="username" required><br><br>
    <label for="ssid"><b>StudentID</b></label>
    <input id="ssid" type="text" placeholder="Enter your student id" name="ssid" required><br><br>
    <label for="pass"><b>Password</b></label>
    <input id="pass" type="password" placeholder="Enter your Password"  minlength="8" name="password" required><br><br>
    <label for="usertype"><b>Usertype</b></label>
    <select name="usertype" id="usertype" required>
      <option value="Admin">Admin</option>
      <option value="Student">Student</option>
    </select><br><br>
    <script>

  window.addEventListener("DOMContentLoaded", (e) => {

    

    const showHidePassword = (e) => {
      let input = e.target.previousElementSibling;
      input.type = input.classList.toggle("shown") ? "text" : "password";
    };

    document.querySelectorAll("input[type=password]").forEach((current) => {
      let showHideButton = document.createElement("div");
      showHideButton.className = "show-hide";
      showHideButton.addEventListener("click", showHidePassword);
      current.after(showHideButton);
    });

  });

</script>
<style>

  input + .show-hide {
    display: inline-block;
    margin-left: 10px;
    width: 22px;
    height: 12px;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyVpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDAyIDc5LjE2NDM2MCwgMjAyMC8wMi8xMy0wMTowNzoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjEgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTU2MjEzMDc3QzNBMTFFQzk2QkZDMkFDOTI3NEUzMTYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTU2MjEzMDg3QzNBMTFFQzk2QkZDMkFDOTI3NEUzMTYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFNTYyMTMwNTdDM0ExMUVDOTZCRkMyQUM5Mjc0RTMxNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFNTYyMTMwNjdDM0ExMUVDOTZCRkMyQUM5Mjc0RTMxNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ppk5kv4AAALrSURBVHjabFNPKORhGH5mjJkQOexhonVZY4w1GIakRZbLTKZtOShuymRqSvaiKZGLg0QrcdgDRfnT1rQXB2ouxBKWDGplTEM07UaRhmG8+37fNr/m4K2v3zfvn2fe93mfT7W2toazszMsLCzg+voa0WhUfjMyMrRPT0+fYrHYx5OTEzN/3+C//SkrKzuYnZ0N5Ofnm2pqauzhcDh1e3t7OD09fZjjEZGkQYKlpKTg5eVFd3Nz8yUQCLjY9TYeKy4uBoPj9PTUqNfrPxwdHcFms+H+/h6Xl5c/NRqNNw4qgYkI7ERaWhouLi5se3t7X9lvaG9vR15eHvg3JicnkZmZKQt4CmxubsLhcKCwsBAejwdNTU36urq6d11dXf5gMCiaA/b397G0tASr1drPdVRaWkobGxuUaByn5uZm4j+h4+Nj4o6pvLxcxm5vb8lgMJCoraqq6l9cXISgFzs7O2hoaBgTgc7OTgUsFAop98HBQeru7qaBgQEJMDQ0JP0dHR3E9Mi70+mUsfr6+rHd3V0gKyvrm3BMTEwoQD6fjywWCz08PNDU1BRdXV3R+Pi4LOzp6SGmTOYVFBTQysqKUicwRI7AVOMVE0viEaHT6VBZWYnW1la43W5MT09Dq9Wir69P5om7SqXCq7a1tQWWjKRCjCPs+fmZent7iZcgxxWxkZERZdz19XU6Pz+n7OxspVtBo4gJWgW98Pv9WF5ehiBeBFgJxFqWyTk5OWQymYh1TZxDjY2NymJra2uJ1SKXWVFRIUGFAIQQhCCkfIQ8xPijo6Of29ragvPz82Q0Gik3N5cODw/p7u5O6Yx1S3a7nZgmcrlcEpDP75KSEltLSwvm5uawurrKXtZxwrGw2H+xrqWcvF4vVVdXSxDWLPEjiQPFT4hfqIf3oGM1gCfCzMyMlFviy0vlzhxms9kguuZFfWf+g7zE94+Pj0VMmXzSSUlJf1m3B8nJyT61Wv2Da6K8E0QiEfly4/ZPgAEAdnYDAqEPWZcAAAAASUVORK5CYII=);
    background-size: contain;
    cursor: pointer;
  }
  input.shown + .show-hide {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyVpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDAyIDc5LjE2NDM2MCwgMjAyMC8wMi8xMy0wMTowNzoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjEgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTU2MjEzMDM3QzNBMTFFQzk2QkZDMkFDOTI3NEUzMTYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTU2MjEzMDQ3QzNBMTFFQzk2QkZDMkFDOTI3NEUzMTYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFNTYyMTMwMTdDM0ExMUVDOTZCRkMyQUM5Mjc0RTMxNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFNTYyMTMwMjdDM0ExMUVDOTZCRkMyQUM5Mjc0RTMxNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PnYNdPsAAAIqSURBVHjalFM7i1pREJ71iQgWIhaKhaAEhID4agIWi4022whaW2m72MdqY5MtLLTIDxDLNKIgNgqKICoLKisoGMv4QFHxsU5mLvFyEyJkBw7ncGa+794z3zd39XodJpMJFAoFWCwWcDwehV2n06lOp9PD29vb/Wg0+ki7ASjkcvlPu93+olQqqzKZ7Ptmsznq9XpQqVTAeyQSAavVCgqQhEajgcvlol4ul4/j8ThBV5Zrzul0Cnu32/0wHA4/0TFO6wf9QM5oND4T9iDlkiEiKBQK0Gq1MJ/Pg81m84WIn2KxmCWdTkM0GoXVagWdTkdYu90OQqEQqNVqSCQSlvV6/cQYxjIHczEn9Ho9KBaL4PF4PtOH0OVyYaPRQGmUSiUMh8NIH8FWqyXc+f1+zOVyOBgM0OfzIWOZg7mYE9rtNgQCgQwn4vG4SDadTsVzJpMRgNdFQJzNZmg2m8UaxnKOuZgTTCbTN77IZrNiUbVaRa/Xi+fzGVOpFCaTSbTZbCJxMBgU6txuN1YqFRHHHJxnzj/EuwY5AEhtdgCUy2Wg1sC741Yr+Jn8XH62tA3/3Yq/xWMhWBAWhgXiYMFYuHeJV6vVIJ/PC8Ymrwap4JWLyEpIlkKyFpLFxD/jM99xjmt+v+KVsczBXMx5J528/X4P2+1W3e/3H8mftwZE2klhQBwOxzN5+MAD9s/JY2JywsFgMHyh5Feawgcaa2GkifDmSBNGwDLxNX4JMACTUN1nilJXvgAAAABJRU5ErkJggg==);
  }

</style>
   
    <div class="d-grid gap-2">
    <input type="submit" value="Signin" name="Signin"  class="btn btn-success " >
    </div>

    
    <br>

    </section>

    
    

</form><br>







</body>
</html>