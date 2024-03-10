<script>
import MainSpecialList from "@/Components/main/MainSpecialList.vue";

export default {
    name: "MainSpecialOffers",
    components: {
        MainSpecialList,
    },
}
</script>

<template>
    <section class="special-offers">
        <div class="special-offers__container container grid">
            <h3 class="special-offers__title">
                Специальные предложения
            </h3>
            <MainSpecialList />
        </div>
    </section>
</template>

<style scoped>

</style>
