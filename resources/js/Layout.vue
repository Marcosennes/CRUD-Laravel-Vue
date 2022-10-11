<template>
    <div>
        <Link href="/">Home</Link>
        <Link href="/about">Sobre</Link>
        <div>
            <slot />
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'
export default {
    components: {
        Link,
    }
};
</script>