$(function(){

	$("#select-categoria").change(function(){

		
		listaVendedores();

	});


	function listaVendedores(){

			var retorno = "";
			var i = 0;
			var id_categoria = $('#select-categoria').val();
			

			$.ajax({
			url: "ranking-json/" + id_categoria,
			type: "get",
			dataType: "Json",
			success: function(data){
				
				$.each(data, function(key){

					retorno += "<tr>";
					
					retorno +=	"<td>";
					retorno += 		"<img src='dist/img/user2-160x160.jpg' class='img-ranking' alt='imgagem do vendedor'>";
		            retorno +=   	data[key].ven_vendedor_nome; 		             
		            retorno += 	"</td>";

					retorno +=	"<td>"
		            retorno +=      "<div class='progress progress-xs progress-striped active'>"
		            retorno +=        "<div class='progress-bar bg-light-blue' style='width: 70%'></div>"
		            retorno +=      "</div>"
		            retorno +=  "</td>"
					
			        retorno += "<td>" + data[key].total_vendas + "</td>";
					retorno += "<td>";
					retorno += "</td></tr>";
					i++;
					//console.log(data[key].disciplina);
				});
				
				$("#lista-vendedores").html(retorno);
			}
		});

	}

});


