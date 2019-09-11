<template>
    <panel-item :field="field.mask"/>
</template>

<script>
    export default {
        props: ["resource", "resourceName", "resourceId", "field"]
    };
</script>
