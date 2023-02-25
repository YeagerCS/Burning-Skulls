document.getElementById("form").addEventListener("submit", function(e){
    e.preventDefault();

    fetch("upload.php", {
        method: "POST",
        body: new FormData(e.target)
    }).then(result => result.json()).then(data => data);
    setTimeout(function(){
        location.reload();
    }, 100);
});