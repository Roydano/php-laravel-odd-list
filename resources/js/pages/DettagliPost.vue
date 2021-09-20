<template>
  <div>
      <div class="card">
        <div class="card-header text-center">
          <h2>{{ dettaglio.title }}</h2>
          <h6 v-if="dettaglio.category">{{ dettaglio.category.name }}</h6>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center"><i>Post di {{ dettaglio.author }}</i></h5>
          <p class="card-text text-center">{{ dettaglio.description }}</p>
        </div>
        <div class="text-center" v-if="dettaglio.tags">
          <span class="badge bg-primary mx-3 my-2" v-for="tag in dettaglio.tags" :key="tag.id">
            {{tag.name}}
          </span>
        </div>
      </div>

  </div>
</template>

<script>
export default {
  name: 'DettagliPost',
  data(){
    return{
      dettaglio:[]
    }
  },

  mounted(){
    axios.get('/api/post/' + this.$route.params.slug)
      .then( response => {
        this.dettaglio = response.data.result;
        console.log(this.dettaglio);
      })
      .catch();
  }

}
</script>

<style lang="scss">
  .badge{
    color: white;
  }

</style>