let CurrentPathToCSS = "css/darkTheme.css";
let AnotherPathToCSS = "css/lightTheme.css";
function switch_theme(){
    console.log("Hey)")
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