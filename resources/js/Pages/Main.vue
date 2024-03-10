<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import { Head } from '@inertiajs/vue3';
import MainHero from "@/Components/main/MainHero.vue";
import MainSpecialOffers from "@/Components/main/MainSpecialOffers.vue";
export default {
    name: "Main",
    components: {
        MainSpecialOffers,
        MainLayout,
        MainHero,
        Head,
    },
}
</script>

<template>
    <Head title="Главная" />

    <MainLayout>
        <MainHero />
        <MainSpecialOffers />
    </MainLayout>
</template>

<style scoped>

</style>
