<template>
  <header>
    <nav>
        <ul>
            <li>
                <router-link :to="{name: 'home'}">HOME</router-link>
            </li>
            <li>
                <router-link :to="{name: 'about'}">CHI SIAMO</router-link>
            </li>
            <li>
                <router-link :to="{name: 'blog'}">BLOG</router-link>
            </li>
            <li>
                <router-link :to="{name: 'contacts'}">CONTATTI</router-link>
            </li>
        </ul>
    </nav>
  </header>
</template>

<script>
export default {
    name: 'HeaderComponent'
}
</script>

<style lang="scss" scoped>

</style>