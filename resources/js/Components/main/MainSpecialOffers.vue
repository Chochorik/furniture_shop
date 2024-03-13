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

<style lang="scss" scoped>
.special-offers {
    &__title {
        margin-bottom: 26px;
        grid-column: span 5;
        font-size: 32px;
        font-weight: 400;
        line-height: 32px;
        color: var(--dark-grey);
    }
}
</style>
