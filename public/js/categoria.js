$(document).ready(function(){
 //alert('Puta que apriu')
 $('#retorno').hide() 
    
  
   
 $('#salvarcategoria').click(function(event){
        event.preventDefault()
if($('#descricao').val()==""){
    $('#alertdescricao').text('Campo obrigatorio')
        $('#descricao').css('border','3px solid #FF0000')
    }
    else{
       var id = $('#contador').val()
       var descricao = $('#descricao').val()
        $.ajax({
       
        url:"cadastrarCategoria",
        data:$('form').serialize(),
        dataType:'text',
        success:function(mensagem){
           // $('#retorno').text(mensagem)
          
            $('#retorno').text(mensagem)
            $('#retorno').show();
            $('#tabela-categoria').append(`<tr><td>${id}</td><td>${descricao}</td>
            <td><a href='categoria/${id}' class="show-modal btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
            <a href="categoria/${id}/edit" class="edit-modal btn btn-warning btn-sm">
            <i class="fas fa-pencil-alt"></i>
            </a>
            <a href="categoria/${id}" class="delete-modal btn btn-danger btn-sm">
            <i class="fas fa-trash"></i>
            </a>
            
            </td>
            
            </td>`)
            $('#descricao').val('')
        
           
        }
     

      
    })
 $('#retorno').text('')
    $('#alertdescricao').text('')
    $('#descricao').css('border','')
}


  })
   
  $('#alterar-categoria').click(function(event){
    event.preventDefault()
    $.ajax({
   
    url:"/updateCategoria",
    data:$('form').serialize(),
    dataType:'text',
    success:function(mensagem){
       // $('#retorno').text(mensagem)
        $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
      
        
       
    }

})



})


});