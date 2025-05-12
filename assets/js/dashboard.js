


let mesdiv = document.querySelectorAll('div.rounded-2xl');

mesdiv.forEach((div) => {

daddEventListener("click", handleClickOnDashboard)
  
    function handleClickOnDashboard(event){
        console.log("ceci est la div " + div);
    }
})

console.log(document);
