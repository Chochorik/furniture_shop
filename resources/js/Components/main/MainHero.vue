<script>
export default {
    name: "MainHero"
}
</script>

<template>
    <section class="hero">
        <div class="hero__container container grid">
            <h2 class="hero__title">
                Скидка 15% на&nbsp;первую покупку
            </h2>
            <button class="hero__button">
                Получить!
            </button>
        </div>
    </section>
</template>

<style scoped>
.hero {
    height: 400px;
    margin-bottom: 70px;
    background-image: url("/storage/hero-baner.webp");
}

.hero__container {
    padding-top: 80px;
    padding-bottom: 80px;
    row-gap: 50px;
}

.hero__title {
    grid-column: 1/6;
    grid-row: span 1;
    font-size: 48px;
    font-weight: 700;
    line-height: 65px;
    color: var(--medium-grey);
}

.hero__button {
    grid-column:  1/3;
    align-self: center;
    justify-self: center;
    border-radius: 10px;
    padding: 22px 50px;
    background-color: var(--purple-color);
    font-size: 16px;
    font-weight: 700;
    line-height: 16px;
    color: var(--white-color);
    cursor: pointer;
}
</style>
