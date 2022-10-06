<style>

#input {
  width: 100%;
    outline: 0;
} 
.focus{
  flex-direction: column-reverse;
    display: flex;
}
#input:focus{
  border-bottom:2px solid rgba(6, 142, 208, 1) !important ;
}
 #input:focus~label{
  color:rgba(6, 142, 208, 1) !important ;
}
</style>


<div class="container-fluid">
        <form class="row p-4 justify-content-around mt-4" method="POST" action="crud/save.php" >
          <!--  -->
            <div class="col-md-5  p-4">
              <div class="focus">
                <input required type="text" name="name" class="border  mb-5 border-0  border-bottom" id="input"  placeholder="Ex.: Letícia Pacheco dos Santos">
                <label  class="form-label text-secondary fw-bold">Nome completo</label>
              </div>
              <div class="focus">

              <input required type="email" name="email" id="input" class=" border mb-5  border-0  border-bottom" placeholder="Ex.: leticia@gmail.com">
              <label class="form-label text-secondary fw-bold">Email</label>
              </div>
              <div class="focus">

                <input type="text" name="tel" id="input" class=" border mb-5  border-0  border-bottom" placeholder="Ex.: (11) 4033-2019">
                <label  class="form-label text-secondary fw-bold">Telefone para contato</label>
              </div>


              <div class="form-check mt-5 mb-5">
                <input class="form-check-input" name="whatsapp" value="sim" type="checkbox" id="gridCheck">
                <label class="form-check-label"  for="gridCheck">
                    Número de celular possui Whatsapp
                </label>
              </div>
              <div class="form-check mt-5 mb-5">
                <input class="form-check-input" name="sms" value="sim"  type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Enviar notificações por SMS
                </label>
              </div>
            </div> 
            <div class="col-md-5 p-4 ">
                <div class="focus">

                  <input required type="text" name="data" id="input" class=" border  mb-5 border-0  border-bottom" placeholder="Ex.: 03/10/2003">
                  <label  class="form-label text-secondary fw-bold">Data de nascimento</label>
                </div>

                <div class="focus">
                  <input type="text" name="job" id="input" class=" border mb-5  border-0  border-bottom" placeholder="Ex.: Desenvolvedora Web">
                  <label  class="form-label text-secondary fw-bold">Profissão</label>

                </div>
  
                <div class="focus">

                  <input type="text" name="cel"  id="input" class=" border mb-5  border-0  border-bottom" placeholder="Ex.: (11) 98493-2039">
                  <label  class="form-label text-secondary fw-bold">Celular para contato</label>
                </div>
  
  
                <div class="form-check mt-5 mb-5">
                  <input class="form-check-input" name="notificationEmail" value="sim"  type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Enviar notificações por E-mail
                  </label>
                </div>

              </div>
            <!--  -->
            <div class="col-12">
              
            </div>
            <div class="col-12 d-flex justify-content-end px-5" >
              <input type="submit" class="btn btn-primary save" value="Cadastrar contato"  />
            </div>
        </form>
    </div>