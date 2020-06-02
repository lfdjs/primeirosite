$(document).ready(function(){
    $("#cep").blur(function(e){
        if($.trim($("#cep").val()) != ""){
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){
                if(resultadoCEP["resultado"]=="1"){
                    $("#rua").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                    $("#bairro").val(unescape(resultadoCEP["bairro"]));
                    $("#cidade").val(unescape(resultadoCEP["cidade"]));
                    $("#uf").val(unescape(resultadoCEP["uf"]));
					$("#numero").focus();
					document.getElementById('salvar').disabled=false;
                }
				else{
					$("#rua").val("");
                    $("#bairro").val("");
                    $("#cidade").val("");
                    $("#uf").val("");
					$("#cep").focus();
					$("#cep").select();
					document.getElementById('salvar').disabled=true;
					alert("Não foi possivel encontrar o CEP\n\nInforme o CEP correto.");
             }
            });
        }
    })
});

function insere(){
	//alert("sucesso");
	
}
function decisao(){
	var dec = confirm("Deseja realmente cadastrar os dados?");
	if(dec ==true){
		return true;
	} else {
		return false;
	}
}
function decisao1(){
	
	if(!confirm("Deseja cadastrar os dados?")){
		return false;
	}
}