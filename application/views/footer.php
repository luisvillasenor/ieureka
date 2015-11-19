
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Latest compiled and minified JavaScript -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins)
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
Latest compiled and minified JavaScript  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/jquery-1.11.3.min.js" type="text/javascript"></script>  
-->
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/jquery-1.11.2.min.js" type="text/javascript"></script>  

<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/affix.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/alert.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/button.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/carousel.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/collapse.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/dropdown.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/modal.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/tooltip.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/popover.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/scrollspy.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/tab.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/transition.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/holder.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>jquery-ui-1.11.4/external/jquery/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>jquery-ui-1.11.4/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/validator.js" type="text/javascript"></script>



<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>


<script>

 $(function(){
  $( "#from" ).datepicker({
    dateFormat: "yy-mm-dd",
    defaultDate: "+0w",
    changeMonth: true,
    numberOfMonths:2,
    onClose: function( selectedDate ){
      $( "#to" ).datepicker( "option", "minDate", selectedDate );
    }
  });
  $( "#to" ).datepicker({
    dateFormat: "yy-mm-dd",
    defaultDate: "+0w",
    changeMonth: true,
    numberOfMonths:2,
    onClose: function( selectedDate ){
      $( "#from" ).datepicker( "option", "maxDate", selectedDate );
    }
  });

 });


 </script>

<script language="javascript">
  
  function ComponerListaPaises(idPais){
    document.forms.EditViewPerfil.pais.disable = true;
    document.forms.EditViewPerfil.estado.length = 0;
    document.forms.EditViewPerfil.municipio.length = 0;
    CargarEstadosEnlazados(idPais);
    document.form.EditViewPerfil.pais.disable = false;
  }

  function CargarEstadosEnlazados(idPais){
    var obj
    document.forms.EditViewPerfil.estado.disable = true;
    <?php foreach ($estados as $item) { ?>
      if (idPais == <?php echo $item->idpais;?>) {
        obj = document.createElement("option");
        obj.text = '<?php echo $item->estado;?>';
        obj.value = '<?php echo $item->idestado;?>';
        
        document.forms.EditViewPerfil.estado.options.add(obj);
      }      
    <?php } ?>
    document.forms.EditViewPerfil.estado.disable = false;
  }

  function ComponerListaEstados(idEstado){
    document.forms.EditViewPerfil.estado.disable = true;
    document.forms.EditViewPerfil.municipio.length = 0;
    CargarMunicipiosEnlazados(idEstado);
    document.forms.EditViewPerfil.estado.disable = false;
  }

  function CargarMunicipiosEnlazados(idEstado){
    var obj
    document.forms.EditViewPerfil.municipio.disable = true;
    <?php foreach ($municipios as $item) { ?>
      if (idEstado == <?php echo $item->idestado;?>) {
        obj = document.createElement("option");
        obj.text = '<?php echo $item->municipio;?>';
        obj.value = '<?php echo $item->idmunicipio;?>';
        document.forms.EditViewPerfil.municipio.options.add(obj);
      }      
    <?php } ?>
    document.forms.EditViewPerfil.municipio.disable = false;

  }

</script>


</body>
</html>