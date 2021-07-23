$(document).ready(function(){
    $(function(){


        $("#elton").validate();
    
    }) 
        
var controlador=1;
    $('#tirar').click(function(){

        $('#tabela_ProdutosVenda').toggle();
    })
    let produtoId=[];
    let quantidadeV = [];
    let precoVendaV = [];  
    let idCliente =[]; 
    let n =1;
    let i =0
    var total =0;
    
$('#ajax').click(function(event) {

    $(function(){


        $("#elton").validate();
    
    })
    
    event.preventDefault();
    
    
    $.ajax({

        url:"vendaCarrinho",
        data:$('form').serialize(),
        dataType:'text',
        success:function(mensagem){
       var t = JSON.parse(mensagem)
       var preco;
       var quantidade = parseInt( $('#qtd').val());
       var cliente = $('#idCliente').val();    
         console.log(quantidade);  
       if(mensagem=='{}' || $('#id').val()==""){
           $('#alert').text('Nao existe Produto Com esse Codigo');
            $('#id').css('border','3px solid #FF0000')
        

        }
        else if (quantidade> t.quantidade){
        $('#qtd').css('border','3px solid #FF0000')
        $('#alert').text('Não temos essa quantidade Disponivel')

            
            }
            
            
            else if($('#qtd').val()=='' || $('#qtd').val() ==' ' || $('#qtd').val()== '  '){
            $('#qtd').css('border','3px solid #FF0000')

        }

        else{
            
            $('#carrinho2').append(`<tr id=t><td>${n}<td>${t.nome}</td><td>${t.marca}</td><td>${quantidade}</td><td>${t.precoVenda}</td></tr>`)
            produtoId.push($("#id").val());
            quantidadeV.push(quantidade);
           precoVendaV.push(t.precoVenda);
           idCliente.push($('#idCliente').val())
           i =i+ n 
           n=n+1
            
             preco =(t.prevoVenda) 
          var  a =t.precoVenda * quantidade
          total =total + a

            $('#total').text(`Total:${total}`)
            $("#id").val('');
            $("#qtd").val('');
        }
               
        
       
        }
       
       

       })
        

   

    
   

})

$("#Comprar").click(function(){
    event.preventDefault();
      var data = new Date()
    var  x,mes,ano,dia,mes2,tempo
ano = data.getFullYear()
mes= (data.getMonth()+1)
dia= data.getDate()

if(mes<10){
mes = '0'+mes

}
tempo = ano+'-'+mes+'-'+dia
    for (var t in produtoId){
controlador = controlador+ (parseInt(t));
x=controlador       
        
        $.ajax({
            url:"compra",
            data:{
                'idProduto':produtoId[t],
                'quantidade':quantidadeV[t],
                'preco':precoVendaV[t]*quantidadeV[t],
                'quantidade':quantidadeV[t],
                'data':tempo,
                'user_id':$('#user_id').val(),
            },
            dataType:'text',
            success:function(mensagem){
                
            
                
            }

        })


    }
     
    if(controlador == x){
        $('#r').remove()

        $('#alertCompra').append(`<div id=r class='btn btn-success'>Compra Efectuada Com Sucessp</div>`)
        $('#t').remove();  
       location.reload()  
    }else{

        $('#alertCompra').append(`<div id='r' class='btn btn-success'> A Compra Não Foi Efectuada Com Sucesso</div>`)

  
    }
        
        })
    
        $('#Imprimir').click(function(){
    
    alert('Imprimir')
    
        })
    
    //$('#tabela_ProdutosVenda tbody  a').css('background-color','red')
    

})