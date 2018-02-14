var btnMenu = document.getElementById('btn-menu');
var nav = document.getElementById('nav');

btnMenu.addEventListener('click', function(){
	nav.classList.toggle('mostrarmenu');
});

$(document).ready(function() {
    $('#tableReception').filterTable(); // apply filterTable to all tables on this page
    tinymce.init({ selector:'textarea' });
});

/*$('.selectpicker').selectpicker({
  style: 'btn-default'  
});*/


new Vue({
	el: '#crud',
	created: function(){
		this.getClients();	
	}, 
	data: {
		clients: [],
		newClient: {
			'nombre': '', 'apellido': '', 'cedula': '', 'telefono': '', 'email': ''
		},		
		fillClient: {
			'id': '', 'nombre': '', 'apellido': '', 'cedula': '', 'telefono': '', 'email': ''
		},		
		errors: [],
		pagination: {
			'total': 0,
            'current_page': 0,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
		},	
		offset: 2
	},
	computed:{
		isActived: function(){
			return	this.pagination.current_page;
		},
		pagesNumber: function(){
			if(!this.pagination.to){
				return [];
			}

			var from = this.pagination.current_page - this.offset; 
			if( from < 1){
				from = 1;
			}

			var to = from + (this.offset * 2);

			if(to >= this.pagination.last_page){
				to = this.pagination.last_page;
			}

			var pageArray = [];
			while(from <= to){
				pageArray.push(from);
				from++;
			}
			return pageArray;
		}
	},
	methods: {
		//CLIENTES
		getClients: function(page){
			var urlClients = 'clients?page=' +page;
			axios.get(urlClients).then(response => {
				this.clients = response.data.clients.data,
				this.pagination = response.data.pagination
			});
		},
		showClient: function(client){				
			this.fillClient.nombre = client.nombre;
			this.fillClient.apellido = client.apellido;
			this.fillClient.cedula = client.cedula;
			this.fillClient.telefono = client.telefono;
			this.fillClient.email = client.email;
			$('#showModalClient').modal('show');
		},
		editClient: function(client){
			this.fillClient.id = client.id;
			this.fillClient.nombre = client.nombre;
			this.fillClient.apellido = client.apellido;
			this.fillClient.cedula = client.cedula;
			this.fillClient.telefono = client.telefono;
			this.fillClient.email = client.email;
			$('#edit').modal('show');
		},
		updateClient: function(id){
			var url = 'clients/' + id;
			axios.put(url, this.fillClient).then(response => {
				this.getClients();
				this.fillClient = {
					'id': '', 'nombre': '', 'apellido': '', 'cedula': '', 'telefono': '', 'email': ''
				};
				this.errors = [];
				$('#edit').modal('hide');
				toastr.success('El cliente fue actualizado correctamente');
			}).catch(error => {
				this.errors = error.response.data
			});
		},
		deleteClient: function(client){
			var url = 'clients/' + client.id;
			axios.delete(url).then(response => {
				this.getClients();
				toastr.success('El cliente ' + client.nombre + ' fue eliminado correctamente');
			});
		},
		createClient: function(){
			var url = 'clients';
			axios.post(url, {
				nombre: this.newClient.nombre,
				nombre: this.newClient.apellido,
				cedula: this.newClient.cedula,
				telefono: this.newClient.telefono,
				email: this.newClient.email
			}).then(response => {
				this.getClients();
				this.newClient.nombre = '';
				this.newClient.apellido = '';
				this.newClient.cedula = '';
				this.newClient.telefono = '';
				this.newClient.email = '';
				this.errors = [];
				$('#create').modal('hide');
				toastr.success('Cliente guardado correctamente');
			}).catch(error => {
				this.errors = error.response.data
			});

		},
		//paginacion
		changePage: function(page){
			this.pagination.current_page = page;
			this.getClients(page);			
		} 
	}
});

new Vue({
	el: '#crudtecnico',
	created: function(){
		this.getTechnicals();
	},
	data: {
		technicals: [],
		fillTechnical: {
			'id': '', 'nombre': ''
		},
		newTechnical: {
			'nombre': ''
		},	
		errors: [],
		pagination: {
			'total': 0,
            'current_page': 0,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
		},	
		offset: 2
	},
	computed:{
		isActived: function(){
			return	this.pagination.current_page;
		},
		pagesNumber: function(){
			if(!this.pagination.to){
				return [];
			}

			var from = this.pagination.current_page - this.offset; 
			if( from < 1){
				from = 1;
			}

			var to = from + (this.offset * 2);

			if(to >= this.pagination.last_page){
				to = this.pagination.last_page;
			}

			var pageArray = [];
			while(from <= to){
				pageArray.push(from);
				from++;
			}
			return pageArray;
		}
	},
	methods: {
		getTechnicals: function(page){
			var urlTechnicals = 'technicals?page=' +page;			
			axios.get(urlTechnicals).then(response => {
				this.technicals = response.data.technicals.data;
				this.pagination = response.data.pagination				
			});
		},
		showTechnical: function(technical){				
			this.fillTechnical.nombre = technical.nombre;			
			$('#showModalTechnical').modal('show');
		},
		editTechnical: function(client){
			this.fillTechnical.id = client.id;
			this.fillTechnical.nombre = client.nombre;			
			$('#editModalTechnical').modal('show');
		},
		updateTechnical: function(id){
			var url = 'technicals/' + id;
			axios.put(url, this.fillTechnical).then(response => {
				this.getTechnicals();
				this.fillTechnical = {
					'id': '', 'nombre': ''
				};
				this.errors = [];
				$('#editModalTechnical').modal('hide');
				toastr.success('El tecnico fue actualizado correctamente');
			}).catch(error => {
				this.errors = error.response.data
			});
		},
		deleteTechnical: function(technical){
			var url = 'technicals/' + technical.id;
			axios.delete(url).then(response => {
				this.getTechnicals();
				toastr.success('El tecnico ' + technical.nombre + ' fue eliminado correctamente');
			});
		},
		createTechnical: function(){
			var url = 'technicals';
			axios.post(url, {
				nombre: this.newTechnical.nombre				
			}).then(response => {
				this.getTechnicals();
				this.newTechnical.nombre = '';				
				this.errors = [];
				$('#createModalTechnical').modal('hide');
				toastr.success('El técnico fue guardado correctamente');
			}).catch(error => {
				this.errors = error.response.data
			});

		},
		//paginacion
		changePage: function(page){
			this.pagination.current_page = page;
			this.getTechnicals(page);
		} 
	}

});

/*new Vue({
	el: '#crudReception',
	created: function(){
		this.getReceptions();
	},
	data:{
		receptions: [],
		clients: [],
		technicals: []
	},
	methods:{
		getReceptions: function(){
			var urlReceptions = 'recepcion';
			axios.get(urlReceptions).then(response => {
				this.receptions = response.data;							
			});
		},
	}
});*/

var mySelect = new Select('#client_id',{
	filtered: 'auto',
	filter_placeholder: 'Seleccione el Cliente...',
	filter_threshold: 8
});