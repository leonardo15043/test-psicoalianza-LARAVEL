import axios from 'axios';

export function allCountries() {
    return axios.get('https://countriesnow.space/api/v0.1/countries/capital');
}

export function getCities( country ) {
    return axios.post('https://countriesnow.space/api/v0.1/countries/cities',{
        "country": country
    });
}