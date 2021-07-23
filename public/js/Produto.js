$(document).ready(function(){
    
    $('#salvar-produto').click(function(event){
        event.preventDefault();
        var nome=$('#nome').val()
        var marca=$('#marca').val()
        var tipo=$('#tipo').val()
        var precovevenda=$('#precoVenda').val()
        var precocusto=$('#precoCusto').val()
        var validade=$('#validade').val()
        var qtd=$('#quantidade').val()
        var n = $('#contador').val()

if(nome=='' || nome==' '|| nome=='   '){
        $('#alertnome').text('O campo nome deve ser preenchido')



}else if(marca=='' || marca==' '|| marca=='   '){
        $('#alertmarca').text('O campo marca deve ser preenchido')



}else if(precovevenda=='' || precovevenda==' '|| precovevenda=='   '){
        $('#alertprecovenda').text('O campo preço deve ser preenchido')



}else if(precocusto=='' || precocusto==' '|| precocusto=='   '){
        $('#alertprecocusto').text('O campo preço do custo deve ser preenchido')



}else if(validade=='' || validade==' '|| validade=='   '){
        $('#alertvalidade').text('O campo validade deve ser preenchido')



}else if(qtd=='' || qtd==' '|| qtd=='   '){
        $('#alertnome').text('O campo validade deve ser preenchido')



}else{
$('#retorno').remove()
        $.ajax({
            url:"cadastrarProduto",
            data:$('form').serialize(),
            dataType:'text',
            success:function(mensagem){
             
                $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
                $('#nome').val('')
                $('#marca').val('')
                $('#tipo').val('')
                $('#precoVenda').val('')
                $('#precoCusto').val('')
                $('#validade').val('')
                $('#quantidade').val('')




               
            }

        })}


    })


    $('#alterar-produto').click(function(event){
        event.preventDefault();
        
        $.ajax({
            url:"/alterarProduto",
            data:$('form').serialize(),
            dataType:'text',
            success:function(mensagem){
            
                $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
           


               
            }

        })


    })

    
});