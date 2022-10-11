<template>
    <layout>
        <div>
            Olá, {{ user }} você está na Home
        </div>
    </layout>
</template>

<script>

import Layout from '../Layout';

export default {
    components: { Layout },
    props: {
            user: String,
        },
};
</script>