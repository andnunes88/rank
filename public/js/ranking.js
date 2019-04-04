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
				
				var posicao = 1;				

				$.each(data, function(key){

					retorno += "<tr>";

					retorno +=	"<td>";
					retorno +=   	posicao + 'º'; 		             
		            retorno += 	"</td>";
					
					retorno +=	"<td>";
					retorno += 		"<img src='"+ data[key].foto +"' class='img-ranking' alt='imagem do vendedor'>";
		            retorno +=   	data[key].name; 		             
		            retorno += 	"</td>";

		            retorno +=	"<td>";
					retorno +=   	data[key].uni_nome; 		             
		            retorno += 	"</td>";

					retorno +=	"<td>"
		            retorno +=      "<div class='progress progress-xs progress-striped active barra'>"
		            retorno +=        "<div class='progress-bar bg-light-blue' style='width:" + ((data[key].total_vendas / data[key].cat_meta)*100).toFixed(2)+"%'></div>"
		            retorno +=      "</div>"
		            retorno +=  "</td>"					     

			        retorno += "<td>";
			        retorno +=		"<span class='badge bg-light-blue'>" + ((data[key].total_vendas / data[key].cat_meta)*100).toFixed(2) + "</span>";
			        retorno += "</td>";

					retorno += "</tr>";
					
					i++;
					console.log(data[key]);
					posicao++;
				});
				
				$("#lista-vendedores").html(retorno);
			}
		});

	}

});


