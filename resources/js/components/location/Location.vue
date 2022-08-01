<template>
   <div class="col-md-12 mt-3 content-vue">
        <div class="row">
                <div class="col-md-6">
                    <label for="cityBirt" class="form-label">País de nacimiento</label> 
                    <select class="form-select" id="country" name="country" @change="selectCity" required>
                        <option value="">Seleccionar un país</option>
                        <option v-for="(country,i) in countries" v-bind:key="i" v-bind:value="country.name" :selected="employee.country === country.name">
                            {{ country.name }}
                        </option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="cityBirt" class="form-label">Ciudad de nacimiento</label>
                    <select class="form-select" id="cityBirth" name="cityBirth" required>
                        <option selected value="">Seleccionar una ciudad</option> 
                        <option v-for="(city,i) in cities" v-bind:key="i" v-bind:value="city" :selected="employee.cityBirth === city">
                            {{ city }}
                        </option>
                    </select>
                </div>
        </div> 
   </div> 
</template>

<script>
import { allCountries, getCities } from './services/LocationService';
    export default {
        props: ["employee"],
        data() {
            return {
                countries: [],
                cities:[]
            }
        },
        async created() {
            const contries = await allCountries();
            if (this.employee.cityBirth){
                const cities = await getCities( this.employee.country );
                this.cities = cities.data.data;
            } 
            this.countries = contries.data.data;
        },
        methods:{
            async selectCity( event ){
                const cities = await getCities(event.target.value);
                this.cities = cities.data.data;
            }
        }
    }
</script>