//
const activateSelectImage = (input) => {
    input.addEventListener('change', (e)=>{
        // On récupère l'index de l'image chargée dans l'input de type file
        let file = e.currentTarget.files[0];
        // On mémorise l'élement html qui q été changé
        let item = e.currentTarget; // C'est l'input de type file qui a changé
        // Si l'input est peuplé
        if(file){
            // On instancieun object fileReader
            let reader = new FileReader();
            reader.onload = function(){
                // On met en place l'image dans le DOM html
                // console.log(item.parentElement.previousElementSibling);
                // On crée une vars qui pointe sur le parent (div) dans laquelle on va mettre l'image
                let imgParent = item.parentElement.previousElementSibling;
                // On vérifie si le parent contient déjà la balise img recherchée
                if(imgParent.querySelector('.img-form-type')){
                    imgParent.querySelector('a').setAttribute("href", reader.result);
                    imgParent.querySelector('.img-form-type').setAttribute("src", reader.result);
                }else{
                    let link = document.createElement('a');
                    link.classList.add('d-block', 'me-3');
                    link.setAttribute("href", reader.result);
                    link.setAttribute("data-lightbox", Date.now());
                    let img = document.createElement('img');
                    img.classList.add('img-fluid', 'img-form-type');
                    img.setAttribute("src", reader.result);
                    // On ajoute l'image dans le lien
                    link.appendChild(img);
                    // On ajoute le lien dans le parent
                    imgParent.appendChild(link);
                }
            }
            // On lit le contenu du fichier
            reader.readAsDataURL(file);
        }
    })
}

// On récupère tous les inputs html de type file porteurs de la classe select-image
document.querySelectorAll('.select-image').forEach((item) =>{
    // On les active
    activateSelectImage(item);
})