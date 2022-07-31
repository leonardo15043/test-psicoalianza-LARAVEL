<template>
   <div class="col-md-12 mt-3 content-vue">
        <div class="row">
                <div class="col-md-6">
                    <label for="cityBirt" class="form-label">País de nacimiento</label>
                    <select class="form-select" id="cityBirt" @change="selectCity">
                        <option selected>Seleccionar un país</option>
                        <option v-for="(country,i) in countries" v-bind:key="i" v-bind:value="country.name">
                            {{ country.name }}
                        </option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="cityBirt" class="form-label">Ciudad de nacimiento</label>
                    <select class="form-select" id="cityBirt">
                        <option selected>Seleccionar una ciudad</option>
                        <option v-for="(city,i) in cities" v-bind:key="i" v-bind:value="i">
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
        data() {
            return {
                countries: [],
                cities:[]
            }
        },
        async created() {
            const contries = await allCountries();
            this.countries = contries.data.data;

            
        },
        methods:{
            async selectCity( event ){
                const cities = await getCities(event.target.value);
                this.cities = cities.data.data;
                console.log( cities.data.data );
            }
        }
    }
</script>