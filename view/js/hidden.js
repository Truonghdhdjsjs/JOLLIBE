const input = document.querySelector(".inputhiden");
const eyeopen = document.querySelector(".eyeopen");
const eyeclose = document.querySelector(".eyeclose");
eyeopen.addEventListener("click", function () {
    eyeopen.classList.add("hidden");
    eyeclose.classList.remove("hidden");
    input.setAttribute("type","password");
    
});
eyeclose.addEventListener("click",function () {
    eyeopen.classList.remove("hidden");
    eyeclose.classList.add("hidden");
    input.setAttribute("type","text");
    
});