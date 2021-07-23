$(document).ready(function(){

    $('#salvar-funcionario').click(function(event){
        event.preventDefault();
            var nome=$('#nome').val()
            var genero=$('#genero').val()
            var funcao=$('#funcao').val()
            var nacionalidade=$('#nacionalidade').val()
            var nbi=$('#nbi').val()
            var inss=$('#inss').val()
            var iban=$('#iban').val()
            var name=$('#name').val()
            var email=$('#email').val()
            var password=$('#password').val()
            var n = $('#contador').val()
 if (nome =='' || nome==' ' || nome=='   '){
$('#alertnome').text('O campo nome deve ser preenchido')

 }else if (genero ==''){
$('#alertgenero').text('O campo genero deve ser preenchido')

 }else if (funcao ==''){
$('#alertfuncao').text('O campo função deve ser preenchido')

 }else if (nbi =='' || nbi==' ' || nbi=='   '){
$('#alertnbi').text('O campo numero de bilhete deve ser preenchido')

 }else if (inss =='' || inss==' ' || inss=='   '){
$('#alertinss').text('O campo inss deve ser preenchido')

 }else if (iban =='' || iban==' ' || iban=='   '){
$('#alertiban').text('O campo iban deve ser preenchido')
 }else if (name =='' || name==' ' || name=='   '){
$('#alertname').text('O campo Username deve ser preenchido')

 }else if (email =='' || email==' ' || email=='   '){
$('#alertemail').text('O campo email deve ser preenchido')

 }else{
     $('#retorno').val()

        $.ajax({
            url:"cadastrarFuncionario",
            data:$('form').serialize(),
            dataType:'text',
            success:function(mensagem){
                
                $('#tabela-funcionario').append(`
                <tr>
                <td>${n}</td>
                <td>${nome}</td>
                <td>${genero}</td>
                <td>${nacionalidade}</td>
                <td>${iban}</td>
                <td>



<a href="funcionario/${n}"> <button class='btn btn-info'><i class='fas fa-eye'> </i></button></a>
<a href="funcionario/${n}/edit"> <button class='btn btn-primary'><i class="fas fa-edit"></i></button></a>
<a  class="js-del" href="funcionario/${n}"> <button class='btn btn-danger'><i class="fas fa-trash"></i></button></a>


                </td>
                





                </tr>
                
                
                
                
                
                `)
                $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
                $('#nome').val('')
                $('#genero').val('')
                $('#funcao').val('')
                $('#nbi').val('')
                $('#inss').val('')
                $('#iban').val('')
                $('#name').val('')
                $('#email').val('')
                $('#password').val('')
                $('#departamento').val('')



                



               
            }

        })
}

    })
    


    });