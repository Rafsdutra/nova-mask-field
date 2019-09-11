<template>
    <span>{{ field.value.mask }}</span>
</template>

<script>
    export default {
        props: ["resourceName", "field"]
    };
</script>
