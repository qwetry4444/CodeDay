let CurrentPathToCSS = "css/lightTheme.css";
let AnotherPathToCSS = "css/darkTheme.css";
function switch_theme(){
    let temp = CurrentPathToCSS;
    CurrentPathToCSS = AnotherPathToCSS;
    AnotherPathToCSS = temp;
    let link = document.getElementsByTagName('link')[0];
    let head = document.getElementsByTagName('head')[0];
    head.removeChild(link);
    let NewLink = document.createElement("link")
    NewLink.setAttribute("rel", "stylesheet");
    NewLink.setAttribute("href", CurrentPathToCSS);
    head.appendChild(NewLink);

}