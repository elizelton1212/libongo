$(document).ready(function(){
    $('#salvar-fornecedor').click(function(event){
        event.preventDefault()
        var nome= $('#nome').val()
        var morada=$('#morada').val()
        var telefone=$('#telefone').val()
        var email=$('#email').val()
        var nif=$('#nif').val()
        var n = $('#contador').val()
        $('#retorno').remove()
       if(nome==''|| nome ==' ' || nome =='   '){
           $('#alertnome').text('Campo nome deve ser preenchido ')

       }
       if(morada==''|| morada ==' ' || morada =='   '){
           $('#alertmorada').text('Campo morada deve ser preenchido ')

       } else if(telefone==''|| telefone==' ' || telefone=='   '){
           $('#alerttelefone').text('Campo telefone deve ser preenchido ')

       }else if(email==''|| email ==' ' || email =='   '){
           $('#alertemail').text('Campo email deve ser preenchido ')

       }else if(nif==''|| nif ==' ' || nif =='   '){
           $('#alertnif').text('Campo nif deve ser preenchido ')

       }
       
       else{

        $.ajax({
       
        url:"cadastrarFornecedor",
        data:$('form').serialize(),
        dataType:'text',
        success:function(mensagem){
           // $('#retorno').text(mensagem)
       
            $('#tabela-fornecedor').append(`
            <tr>
            <td>${n}</td>
            <td>${nome}</td>
            <td>${morada}</td>
            <td>${telefone}</td>
            <td>${email}</td>
            <td>${nif}</td>
            <td>
            
            
    <a href="fornecedor/${n}" class='show-modal btn btn-info btn-sm'>
    <i class="fas fa-eye"></i>
    </a>
    <a href="fornecedor/${n}/edit" class="edit-modal btn btn-warning btn-sm">
    <i class="fas fa-pencil-alt"></i>
    </a>
   <a href="fornecedor/${n}" class="delete-modal btn btn-danger btn-sm">
  <i class="fas fa-trash"></i>
   </a>
            
            
            
            </td>



            
            </tr>
            
            `)
            $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
            $('#nome').val('')
            $('#morada').val('')
            $('#telefone').val('')
            $('#email').val('')
            $('#nif').val('')
            
           
        }

    })}



  })
   


  $('#alterar-fornecedor').click(function(event){
    event.preventDefault()
    $.ajax({
   
    url:"/update",
    data:$('form').serialize(),
    dataType:'text',
    success:function(mensagem){
       // $('#retorno').text(mensagem)
        $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
     
        
       
    }

})



})

    
});