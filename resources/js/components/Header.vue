<template>
  <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                    <router-link :to="{ name: 'home' }" class="navbar-brand">Boolpress</router-link>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                            <li class="nav-item mx-5" v-for="(link, index) in navLink" :key="index">
                                <router-link class="nav-link active" aria-current="page" :to="{ name: link.routeName }">{{ link.label }}</router-link>
                            </li>
                            
                        </ul>
                    </div>
            </div>
        </nav>
  </header>
</template>

<script>
export default {
    name: 'Header',

    data(){
        return{
            navLink: [
                {
                    label: 'Home',
                    routeName: 'home'
                },
                {
                    label: 'Tutti i Post',
                    routeName: 'posts'
                },
                {
                    label: 'Contatti',
                    routeName: 'contatti'
                }
            ]
        }
    }

}
</script>

<style lang="scss" scoped>

</style>