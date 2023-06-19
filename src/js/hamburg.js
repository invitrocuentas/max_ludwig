((window)=>{
    document.addEventListener("DOMContentLoaded",()=>{
        const menu = document.querySelector(".hamburg")
        const navegacion = document.querySelector(".navegacion");
        const back = document.querySelector(".back");
        menu.addEventListener("click",e=>{
            menu.classList.toggle("active");
            navegacion.classList.toggle("active")
            back.classList.toggle("active");
            if(menu.classList.contains("active")){
                document.documentElement.style.overflow = "hidden"
            }else{
                document.documentElement.style.overflow = ""
            }
        })
        window.addEventListener("resize",()=>{
            const {documentElement: {clientWidth}} = document;
            if(clientWidth >= 1024){
                document.documentElement.style.overflow = ""
                back.classList.remove("active");
            }else{
                if(navegacion.classList.contains("active")){
                    document.documentElement.style.overflow = "hidden"
                    back.classList.add("active");
                }
            }
        });
    })
})(window)