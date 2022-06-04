<template>
<div>
    <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-default">Buscar palabra</span>

        <input type="text" placeholder="Busqueda" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" v-model="keyword">
    </div>
    <div v-if="Datos.length" id="cartas" class="ml-auto px-3 my-3">
        <b-card v-for="dato in Datos" :key="dato.id" :title="`${dato.nameUsers}`" style="width: 18rem;">

            <b-card-text> <b>Titulo: </b> {{dato.title}}</b-card-text>

            <b-card-text> <b>Valoricion de Usuario:</b> {{dato.userRating}}</b-card-text>

            <b-card-text> <b>Descripccion:</b> {{dato.description}}</b-card-text>

            <b-card-text> <b>Id Post:</b> {{dato.idPost}}</b-card-text>

            <b-card-text> <b>Valoracion del post:</b> {{dato.postRating}}</b-card-text>
        </b-card>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            keyword: null,
            Datos: []
        };
    },
    watch: {
        keyword(after, before) {
            this.getResults();
        }
    },
    methods: {
        getResults() {
            axios.get('/livesearch', {
                    params: {
                        keyword: this.keyword
                    }
                })
                .then(res => this.Datos = res.data)
                .catch(error => {});
        }
    }
}
</script>

<style scoped>
#cartas {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: flex-start;
    gap: 2rem;
}
</style>
