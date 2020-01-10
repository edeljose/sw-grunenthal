<template>
	<div class="container ">
         <div class="row justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-6 ">
               <div class="account-wall box-content login-box-height space form-group " id="login">
                  <div class="justify-content-center">
                     <h1 class=" title-login m-b-md">Iniciar Sesión</h1>
                     <hr>
                  </div>	
                  <form novalidate @submit.prevent="validateBeforeSubmit"  class="form-signin" >
                     <div class="form-group">
                        <input id="email" type="email" v-model="email" class="form-control" name="email" placeholder="email" :class="{'has-errors': errors.has('email')}" required  v-validate="'required'" >
                        <i v-show="errors.has('email')" class="fa fa-warning"></i>
           				 <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                     </div>
                     <div>
                        <input id="password" type="password" v-model="password" class="form-control" name="password" placeholder="password" :class="{'has-errors': errors.has('password')}" required  v-validate="'required'">
                        <i v-show="errors.has('password')" class="fa fa-warning"></i>
            			<span v-show="errors.has('password')" class="help is-danger">{{ errors.first('password') }}</span>
                     </div>
                     <div class="form-group">
                        <button  class="btn btn-lg btn-primary btn-block btn-login">Iniciar Sesión</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
</template>
<script>
	export default {
		data: function(){
			return{
				email: "",
				password: "",	
			};
		},
		methods:{
			validateBeforeSubmit: function() {
				this.$validator.validateAll().then(result => {
					if (result >= 1) {
						this.UserLogin()
					}else {
						this.error("Error al intentar ingresar por favor intentelo de nuevo.")
					}
		        })
			},
			UserLogin () {   
				var allData = {
					email: this.email,
					password: this.password
				}     
	       		this.$http.post('/login', allData).then(function() {
	         		this.$parent.messageError = "Ingreso Satisfactoriamente."
			        this.$parent.showModalError = true
			        window.location.href = "/home"
			   	}, function(err){
					this.error("Error al intentar ingresar por favor intentelo de nuevo.")
			   	}) 	
		   	},
		    error(message){
	            this.$parent.alert = "error"
	            this.$parent.messageError = message
	            this.$parent.url = ""
	            this.$parent.showModalError = true
		    }
		}
	}
</script>