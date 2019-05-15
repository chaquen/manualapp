 <script type="text/javascript">
   //funcion que extiende Js y serializa un formulario
  $.fn.serializarFormulario = function()
      {
      var o = {};
      console.log(this);

      if(this[0]!=undefined){
        var elementos=this[0].elements;
        for(var e in elementos){
          console.log(elementos[e].required);
          if(elementos[e].required==true && elementos[e].value ==""){
            elementos[e].style.borderColor="blue";
            return false;
          }else if(elementos[e].required!=undefined){
            elementos[e].style.borderColor="";
          }
        }

        var a = this.serializeArray();

        $.each(a, function() {


           if (o[this.name]) {


               if (!o[this.name].push) {
                   o[this.name] = [o[this.name]];
               }
                console.log(this.name);

               o[this.name].push(this.value || '');
           } else {

                o[this.name] = this.value || '';

           }


        });
        return o;
      }else{
        return false;
      }
  };
 </script>