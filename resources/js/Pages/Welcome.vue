<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({

});
</script>

<template>
    <Head title="403 Forbidden" />
    <div class="text-center mt-48">
        <h1 class="text-8xl font-semibold">403</h1>
        <h1 class="text-2xl font-semibold">Forbidden</h1>
        <p>Access to this resource on the server is denied!</p>
    </div>
</template>
