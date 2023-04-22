<?php 
$text ="Formulario";
if(isset($_GET["edit"])){
    $id = htmlentities($_GET["edit"]);
    $edidatos = $dbh->prepare("SELECT * FROM formdatos where id_form=:id");
    $edidatos->execute(array(':id'=>$id));
    $edi = $edidatos->fetch(PDO::FETCH_ASSOC);
    $text = "<i class='fa fa-edit text-primary'></i> Editar";
} 
?>
<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <form id="formtest">
                <h1 id="register" class="text-info"><?php echo $text; ?></h1>
                <div class="all-steps" id="all-steps"> 
                    <span class="step rounded-circle" title="Nombre"><i class="fa fa-user"></i></span> 
                    <span class="step rounded-circle" title="Telefóno"><i class="fa fa-mobile-phone"></i></span> 
                    <span class="step rounded-circle" title="Email"><i class="fa fa-at"></i></span> </div>

                <div class="tab form">
                	<h6 class=" control-label">Nombre?</h6>
                	<div class="form-group">
    					<div class="col-12">
    						<input type="text" class="form-control input-ms" placeholder="Nombre..." value="<?php if (isset($edi['name'])) {echo $edi['name'];}?>" name="name">
    					</div>
					</div>
                </div>

                <div class="tab form">
                	<div class="row mb-3">
                    	<h6 class="col-12 control-label">Telenfóno?</h6>
	                    <div class="col-ms-12 col-md-4">
		                    <select name="code" class="form-control input-ms mt-0" required="" id="selectcode">
                                <?php echo selectcode(); ?>
							</select>
    					</div>
    					<div class="col-ms-12 col-md-8">
    						<input type="tlf" class="form-control input-ms" placeholder="Telenfóno" name="tlf" value="<?php if (isset($edi['phone'])) {echo substr($edi['phone'],-10);}?>" onkeyUp="return ValNumero(this);" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
    					</div>
					</div>
                </div>

                <div class="tab form">
                	<h6 class=" control-label">Email?</h6>
                	<div class="form-group">
    					<div class="col-12">
    						<input type="email" class="form-control input-ms" placeholder="Email..." value="<?php if (isset($edi['email'])) {echo $edi['email'];}?>" name="email">
    					</div>
					</div>
                </div>
                <input type="hidden" name="id" id="id_f" value="<?php if (isset($id)) {echo $id;}?>">
                <input type="hidden" name="pais" id="pais" value="<?php echo (!isset(code()["geoplugin_countryName"])) ? "Venezuela" : code()["geoplugin_countryName"]; ?>">
                <div class="thanks-message text-center" id="text-carga"> 
                    <i class="fa fa-check btn-success" aria-hidden="true"></i>
                    <?php if (isset($id)) {echo "<h3>¡Estamos Cargando la informacion editada!</h3> 
                    <span>Los datos editados conservan su fecha de creacion.</span>";}else{ echo "<h3>¡Gracias por confiar en nosotros!</h3> 
                    <span>Estamos gurdando su informacion.</span>";
                    }?>
                    
                    <div class="row">
                		<div class="col-12 d-flex justify-content-center">
                			<img src="<?php echo URL; ?>public/img/carga.gif" width="250" align="center" height="150">
                		</div>
                	</div>
                </div>

                 <div class="thanks-message text-center" id="text-message"> 
                    <img id="imgfinal" src="" alt="img" width="100" class="mb-4">
                    <span id="timsg"></span>
                    
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center" id="mensajes">
                            
                        </div>
                    </div>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;"> 
                    	<button type="button" class="btn btn-primary rounded-circle" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                    	<button type="button" class="btn btn-primary rounded-circle" id="nextBtn" onclick="nextPrev(1)"></button> 
                    </div>
                </div>
                <div id="error" class="col-12">
            	</div>
            </form>
        </div>
    </div>
</div>