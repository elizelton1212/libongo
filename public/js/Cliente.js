$(document).ready(function(){
    
    $('#salvar-cliente').click(function(event){
        event.preventDefault()
        $.ajax({
       
        url:"cadastrarCliente",
        data:$('form').serialize(),
        dataType:'text',
        success:function(mensagem){
           // $('#retorno').text(mensagem)
            $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
            $('#nome').val('')
            $('#morada').val('')
            $('#telefone').val('')
            $('#email').val('')
            $('#nif').val('')
            
           
        }

    })
    

    })


    $('#alterar-cliente').click(function(event){
        event.preventDefault()
        $.ajax({
       
        url:"/updateCliente",
        data:$('form').serialize(),
        dataType:'text',
        success:function(mensagem){
           // $('#retorno').text(mensagem)
            $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
         
           
        }

    })
    

    })



    


    
    
});