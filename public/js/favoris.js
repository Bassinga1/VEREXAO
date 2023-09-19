$('.add-favori').off().on('click', function(event){
    let typeId = $(this).data('type-id');
    // On mémorise le button cliqué
    let button = $(this);
    // On analyse l'icone du button pour savoir si on ajoute le type aux favoris ou si on le supprime
    let action;
    if(button.find('i').hasClass('fa-regular')){
        action = "add";
    }else{
        action = "remove"
    }
    // On lance une requête Ajax vers le serveur
    $.ajax({
        url: '/favoris/add',
        method: 'POST',
        data: {
            idType: typeId,
            action: action,
        }
    }).done(function(response){
        // On vérifie si le button est porteur de la class from_user_profil auquel cas on supprime la card parent
        // sinon on change l'icone du button
        if(button.hasClass('from_user_profil')){
            button.closest('.parent-card').remove();
        }else{
            // On vérifie si l'icone de btn est plein ou vide et ou l'inverse
            if(button.find('i').hasClass('fa-regular')){
                button.find('i').removeClass('fa-regular').addClass('fa-solid')
            }else{
                button.find('i').removeClass('fa-solid').addClass('fa-regular')
            }
        }
    });
});