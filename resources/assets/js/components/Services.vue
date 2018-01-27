<template> 
<div class="row">
            
            <ul class="services-list clearfix padding-top-70"> 
                <li v-for="service in services">
                    <a href="#" title="">
                        <img v-bind:src="'http://homes.test/img/'+service.photo" alt="">
                    </a>
                    <h4 class="box-header"><a href="service_interior_renovation.html" title="Interior Renovation">{{ service.name }}</a></h4>
                    <p>{{ service.details }}</p>
                </li>
                </ul>
        </div>
</template>

<script>
    export default {
       data(){
            return {
                services: {
    
                    'name' : '',
                    'details':'',
                    'photo':''

                },
                errors: [],
                services: [],
                update_post: {}
            }
       },mounted()
            {
                console.log("mounted");
                this.readServices();
            },
        methods: {
            readServices()
            { 
                axios.get('http://homes.test/services')
                    .then(response => {
                        console.log(response.data);
                        this.services = response.data.data;
                    });
            }
        }
    }
</script>
