$(document).ready(function(){

  
    $('#salvarImpo').click(function(event){
        event.preventDefault();
     
         var n= $('#contador').val()
         
       var descricao= $('#descricao').val()
       var percentagem = $('#percentagem').val()
      // $('#retorno').remove()

      if(descricao =='' || descricao==' ' || descricao=='   '){
          $('#alertdescricao').text('O campo de Descrição é Obrigatório')

      }else if(percentagem==''){
          $('#alertdescricao').text('O campo de percentagem é Obrigatório')


      }else{
        $.ajax({
            url:"cadastraImposto",
            data:$('form').serialize(),
            dataType:'text',
            success:function(mensagem){
          $("#alertdescricao").val('');  
      
                $('#tabela-imposto').append(`<tr>
                <td>${n}</td>
                <td>${descricao}</td>
                <td>${percentagem}</td>
                <td>  
                
 <a href="imposto/${n}" class='show-modal btn btn-info btn-sm'>
    <i class="fas fa-eye"></i>
    </a>
    <a href="imposto/${n}/edit" class="edit-modal btn btn-warning btn-sm">
    <i class="fas fa-pencil-alt"></i>
    </a>
   <a href="imposto/${n}" class="delete-modal btn btn-danger btn-sm">
  <i class="fas fa-trash"></i>
   </a>
                
                </td>
                
                
                </tr>`)
      
                $('#retorno').text(mensagem)
                
                $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
    
 
                           }

        })}
$('#descricao').val('')
 $('#percentagem').val('')
 $('#retorno').remove()              
   

    })
 
    $('#alterar-imposto').click(function(event){
        event.preventDefault();
      
        $.ajax({
            url:"/updateImposto",
            data:$('form').serialize(),
            dataType:'text',
            success:function(mensagem){
                $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)

                
            }

        })


    })
    
});