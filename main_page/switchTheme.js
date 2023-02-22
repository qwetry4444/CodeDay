let CurrentPathToCSS = "css/main_light.css";
let AnotherPathToCSS = "css/main_Dark.css";

function switch_theme(){
    let temp = CurrentPathToCSS;
    CurrentPathToCSS = AnotherPathToCSS;
    AnotherPathToCSS = temp;
    let link = document.getElementsByTagName('link')[4];
    let head = document.getElementsByTagName('head')[0];
    head.removeChild(link);
    let NewLink = document.createElement("link")
    NewLink.setAttribute("rel", "stylesheet");
    NewLink.setAttribute("href", CurrentPathToCSS);
    head.appendChild(NewLink);

}
