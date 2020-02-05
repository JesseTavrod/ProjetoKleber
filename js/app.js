// validação de senha!
	function validarUsuario(){
		var pri_senha = form_usuario.senha.value;
		var seg_senha = form_usuario.senha_confirmacao.value;
		if(pri_senha != seg_senha ){
			alert("senha Diferentes");
			form_usuario.senha.focus();
			return false;
		}else{
			return true;
		}
	}

	function validarMedico(){
		var pri_senha = form_medico.senha.value;
		var seg_senha = form_medico.senha_confirmacao.value;


		if(pri_senha != seg_senha ){
			alert("senha Diferentes");
			form_medico.senha.focus();
			return false;
		}
		else{
			return true;
		}
	}

$(".menu-itens").click(function(){
	elemento =  $(this);
	if(elemento.children().hasClass("menu-mostrando")){
		elemento.find(".menu-escondido").removeClass("menu-mostrando");
	}else{
		if(elemento.parent().find(".menu-mostrando")){
			elemento.parent().find(".menu-mostrando").removeClass("menu-mostrando");
			elemento.find(".menu-escondido").addClass("menu-mostrando");
		}		
	}
})

var tamCarrosel = $(".carrosel-medico-conteudo .item").length;
var tamItem =  $(".carrosel-medico-conteudo .item").width() + 30;
var marginCarrosel = $(".carrosel-medico-conteudo").css("margin-left");

var ponteiro = 0;

function proximo(){
	if(ponteiro < tamCarrosel - 3){
		ponteiro++;
		$(".carrosel-medico-conteudo").css("margin-left", -(tamItem * ponteiro) )
	}
}
function anterior(){
	if(ponteiro >=  1){
		ponteiro--;
		$(".carrosel-medico-conteudo").css("margin-left", -(tamItem * ponteiro) )
	}
}