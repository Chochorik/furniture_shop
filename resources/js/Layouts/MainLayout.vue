<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import MainCart from "@/Components/main/MainCart.vue";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="page">
        <header class="header">
            <div class="header__background">
                <div class="header__container header__container-top container grid">
                    <a class="header__tel" href="tel:74958854547">
                        +7 (495) 885-45-47
                    </a>
                    <nav class="header__links">
                        <Link class="header__link-top" :href="route('main')">О&nbsp;компании</Link>
                        <Link class="header__link-top" :href="route('main')">Гарантия и&nbsp;возврат</Link>
                        <Link class="header__link-top" :href="route('main')">Корпоративным клиентам</Link>
                        <Link class="header__link-top" :href="route('main')">Дизайн-решение</Link>
                    </nav>
                </div>
            </div>
            <div class="header__bottom">
                <div class="header__container header__container-bottom container grid">
                    <Link class="header__logo" :href="route('main')">
                        <ApplicationLogo/>
                    </Link>
                    <nav class="header__nav">
                        <a class="header__main-link" href="#">
                            Каталог
                        </a>
                        <a class="header__main-link" href="#">
                            Магазины
                        </a>
                        <a class="header__main-link" href="#">
                            Шоу-рум
                        </a>
                        <a class="header__main-link" href="#">
                            Доставка и оплата
                        </a>
                        <a class="header__main-link" href="#">
                            Дисконт
                        </a>
                        <a class="header__main-link" href="#">
                            Контакты
                        </a>
                    </nav>
                </div>
            </div>
            <div class="header__search-container container grid">
                <div class="header__search-label">
                    <svg class="header__search-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.8187 16.0625L14.607 13.3156C15.5516 12.0945 16.0625 10.6016 16.0625 9.03125C16.0625 7.15156 15.3289 5.38906 14.0023 4.06016C12.6758 2.73125 10.9086 2 9.03125 2C7.15391 2 5.38672 2.73359 4.06016 4.06016C2.73125 5.38672 2 7.15156 2 9.03125C2 10.9086 2.73359 12.6758 4.06016 14.0023C5.38672 15.3312 7.15156 16.0625 9.03125 16.0625C10.6016 16.0625 12.0922 15.5516 13.3133 14.6094L16.5249 17.3539C16.5428 17.3718 16.564 17.3859 16.5873 17.3956C16.6106 17.4053 16.6356 17.4102 16.6609 17.4102C16.6861 17.4102 16.7111 17.4053 16.7344 17.3956C16.7578 17.3859 16.7789 17.3718 16.7968 17.3539L17.8187 16.3344C17.8365 16.3165 17.8507 16.2953 17.8604 16.272C17.87 16.2487 17.875 16.2237 17.875 16.1984C17.875 16.1732 17.87 16.1482 17.8604 16.1249C17.8507 16.1015 17.8365 16.0803 17.8187 16.0625ZM12.7438 12.7438C11.75 13.7352 10.4328 14.2812 9.03125 14.2812C7.62969 14.2812 6.3125 13.7352 5.31875 12.7438C4.32734 11.75 3.78125 10.4328 3.78125 9.03125C3.78125 7.62969 4.32734 6.31016 5.31875 5.31875C6.3125 4.32734 7.62969 3.78125 9.03125 3.78125C10.4328 3.78125 11.7523 4.325 12.7438 5.31875C13.7352 6.3125 14.2812 7.62969 14.2812 9.03125C14.2812 10.4328 13.7352 11.7523 12.7438 12.7438Z" fill="#999999"/>
                    </svg>
                    <input class="header__search" type="text" placeholder="Я хочу купить...">
                    <button class="header__search-button search-btn" type="button">
                        <svg class="search-btn__icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_10936_925)">
                                <path d="M14 11L19 16L14 21" stroke="#A65CF0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="16" cy="16" r="15" stroke="#A65CF0" stroke-width="2"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_10936_925">
                                    <rect width="32" height="32" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
                <div class="header__personal-block">
                    <button class="header__profile-button" type="button">
                        <svg class="header__profile-icon" width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.98 22.8503C24.3278 21.2785 23.3813 19.8508 22.1933 18.6467C21.0089 17.4392 19.6059 16.4764 18.0617 15.8116C18.0478 15.8045 18.034 15.801 18.0202 15.794C20.1742 14.2111 21.5744 11.6327 21.5744 8.72362C21.5744 3.90452 17.7367 0 13 0C8.26333 0 4.42559 3.90452 4.42559 8.72362C4.42559 11.6327 5.82585 14.2111 7.97982 15.7975C7.96599 15.8045 7.95216 15.808 7.93833 15.8151C6.38941 16.4799 4.99952 17.4332 3.80671 18.6503C2.61981 19.8553 1.67349 21.2827 1.02003 22.8538C0.37806 24.3918 0.0318323 26.0409 8.64563e-05 27.7116C-0.000836348 27.7491 0.00563604 27.7864 0.0191224 27.8214C0.0326088 27.8564 0.0528363 27.8882 0.0786128 27.9151C0.104389 27.942 0.135194 27.9633 0.16921 27.9779C0.203227 27.9925 0.239768 28 0.27668 28H2.35113C2.50326 28 2.62427 27.8769 2.62773 27.7256C2.69688 25.01 3.76868 22.4668 5.66335 20.5392C7.62371 18.5447 10.2271 17.4472 13 17.4472C15.7729 17.4472 18.3763 18.5447 20.3367 20.5392C22.2313 22.4668 23.3031 25.01 23.3723 27.7256C23.3757 27.8804 23.4967 28 23.6489 28H25.7233C25.7602 28 25.7968 27.9925 25.8308 27.9779C25.8648 27.9633 25.8956 27.942 25.9214 27.9151C25.9472 27.8882 25.9674 27.8564 25.9809 27.8214C25.9944 27.7864 26.0008 27.7491 25.9999 27.7116C25.9653 26.0301 25.6231 24.3945 24.98 22.8503ZM13 14.7739C11.413 14.7739 9.91943 14.1442 8.79577 13.001C7.67211 11.8578 7.05323 10.3382 7.05323 8.72362C7.05323 7.10905 7.67211 5.58945 8.79577 4.44623C9.91943 3.30301 11.413 2.67337 13 2.67337C14.587 2.67337 16.0806 3.30301 17.2042 4.44623C18.3279 5.58945 18.9468 7.10905 18.9468 8.72362C18.9468 10.3382 18.3279 11.8578 17.2042 13.001C16.0806 14.1442 14.587 14.7739 13 14.7739Z" fill="#A65CF0"/>
                        </svg>
                    </button>
                    <MainCart />
                </div>
            </div>
        </header>
        <main class="main">
            <slot />
        </main>
        <footer class="footer">
            <div class="footer__top">
                <div class="footer__container container grid">
                    <div class="footer__logo">
                        <Link class="header__logo" :href="route('main')">
                            <ApplicationLogo class="footer__logo-image" />
                        </Link>
                        <ul class="footer__socials">
                            <li class="footer__social">
                                <a class="footer__social-link" href="#">
                                    <svg class="footer__ok" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.8527 9.99062C12.8527 11.2273 13.8552 12.2299 15.0919 12.2299C16.3286 12.2299 17.3311 11.2273 17.3311 9.99062C17.3311 8.75396 16.3286 7.7514 15.0919 7.7514C13.8552 7.7514 12.8527 8.75396 12.8527 9.99062Z" fill="#999999"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71572 0 0 6.71573 0 15C0 23.2843 6.71572 30 15 30ZM9.67501 9.99055C9.67501 6.99892 12.1002 4.57364 15.0919 4.57364C18.0836 4.57364 20.5088 6.99892 20.5088 9.99055C20.5088 12.9822 18.0836 15.4077 15.0919 15.4077C12.1002 15.4077 9.67501 12.9822 9.67501 9.99055ZM20.5412 18.194C20.4724 18.2491 19.1729 19.2761 17.0043 19.7179L20.2777 22.9622C20.8534 23.5369 20.854 24.4695 20.2793 25.0451C19.7046 25.6207 18.7722 25.6216 18.1964 25.0467L15.0184 21.952L12.1319 25.0268C11.8429 25.3266 11.4575 25.4774 11.0716 25.4774C10.7035 25.4774 10.3351 25.3404 10.0493 25.0648C9.46372 24.5001 9.44677 23.5677 10.0114 22.9822L13.1185 19.735C10.8891 19.3036 9.53591 18.2499 9.46622 18.194C8.83165 17.6851 8.72971 16.7581 9.23862 16.1235C9.74746 15.4889 10.6744 15.387 11.3091 15.8958C11.3225 15.9067 12.7378 16.9699 15.0183 16.9715C17.2989 16.9699 18.6849 15.9067 18.6983 15.8958C19.333 15.387 20.2599 15.4889 20.7688 16.1235C21.2777 16.7581 21.1757 17.6851 20.5412 18.194Z" fill="#999999"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer__social">
                                <a class="footer__social-link" href="#">
                                    <svg class="footer__vk" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 0C6.71601 0 0 6.7157 0 15C0 23.2843 6.71601 30 15 30C23.284 30 30 23.2843 30 15C30 6.7157 23.284 0 15 0ZM22.6088 16.6223C23.3079 17.3052 24.0476 17.9478 24.6752 18.7013C24.9532 19.0346 25.2153 19.3792 25.4148 19.7669C25.6996 20.3196 25.4425 20.9257 24.9477 20.9586L21.8747 20.958C21.081 21.0236 20.4494 20.7035 19.9169 20.1609C19.4919 19.7285 19.0975 19.2666 18.6881 18.8194C18.5208 18.6359 18.3447 18.4631 18.1347 18.3272C17.7158 18.0546 17.3518 18.1381 17.1118 18.5758C16.8672 19.0211 16.8114 19.5146 16.788 20.0102C16.7546 20.7348 16.5361 20.9242 15.809 20.9583C14.2554 21.031 12.7814 20.7953 11.4114 20.0121C10.2028 19.3212 9.26731 18.3462 8.45217 17.2423C6.86486 15.0902 5.64921 12.7283 4.55693 10.2985C4.3111 9.7513 4.49095 9.45852 5.09463 9.44716C6.0976 9.42783 7.10056 9.43028 8.10353 9.44624C8.51171 9.45268 8.78179 9.68624 8.93862 10.0714C9.48061 11.4049 10.1451 12.6737 10.9777 13.8503C11.1996 14.1637 11.4261 14.4761 11.7486 14.6974C12.1047 14.9417 12.376 14.861 12.5438 14.4635C12.6513 14.2109 12.6976 13.9409 12.7209 13.6702C12.8007 12.743 12.8102 11.8162 12.6721 10.8927C12.5862 10.3148 12.2612 9.94158 11.6851 9.83233C11.3917 9.77678 11.4347 9.66813 11.5774 9.50056C11.8251 9.21084 12.0571 9.03161 12.5208 9.03161L15.9928 9.031C16.5401 9.13841 16.6628 9.38394 16.7371 9.93514L16.7402 13.7936C16.7337 14.0069 16.8473 14.6391 17.2303 14.7787C17.5372 14.88 17.7397 14.6339 17.9233 14.4396C18.7559 13.556 19.3492 12.5131 19.8804 11.4338C20.1149 10.9577 20.3171 10.4652 20.5136 9.97166C20.6596 9.60675 20.8868 9.42721 21.2986 9.43335L24.642 9.43734C24.7406 9.43734 24.8406 9.43826 24.9382 9.45514C25.5017 9.55151 25.6561 9.79396 25.4817 10.3436C25.2074 11.2073 24.6743 11.9266 24.1531 12.6479C23.5946 13.4201 22.9989 14.1652 22.4458 14.9408C21.9376 15.6497 21.9778 16.0066 22.6088 16.6223Z" fill="#999999"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__menu">
                        <ul class="footer__menu-list">
                            <li class="footer__menu-title">
                                О нас
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    О компании
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    Блог
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__menu-list">
                            <li class="footer__menu-title">
                                Услуги
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    Доставка
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    Рассрочка и кредит
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    Сборка и установка
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__menu-list">
                            <li class="footer__menu-title">
                                Связь с нами
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    Обратная связь
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__menu-list">
                            <li class="footer__menu-title">
                                Сотрудничество
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    Поставщикам
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    Оптовикам
                                </a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="#">
                                    Карьера
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__container container grid">
                    <p class="footer__redistribute">
                        SDP® 2011-2021
                    </p>
                </div>
            </div>
        </footer>
    </div>
</template>

<style scoped>

</style>
