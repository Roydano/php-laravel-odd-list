<template>
  <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                    <a class="navbar-brand" href="#">Boolpress</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                            <li class="nav-item mx-5">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link" href="#">Contatti</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link" href="#">Scrivi un post</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
  </header>
</template>

<script>
export default {
    name: 'Header'

}
</script>

<style lang="scss" scoped>

</style>