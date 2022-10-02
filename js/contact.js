// declare variables
const form = document.querySelector("form");
const usend = form.querySelector('.usend');

form.onsubmit = (e)=>{
    e.preventDefault();

}

usend.addEventListener("click", ()=>{
    const h = new XMLHttpRequest();
    h.open('POST', 'views/action.php', true);

    h.onload = () =>{
        if (h.readyState === XMLHttpRequest.DONE) {
            if(h.status == 200){
                let data = h.response;
                console.log(data);
            }
        }
    }

    let formData = new FormData(form);
    h.send(formData);
    
});

