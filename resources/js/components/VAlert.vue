<template>
    <div
        class="border border-red-light text-red-dark pl-4 pr-8 py-3 rounded relative"
        role="alert"
        :class="{'bg-green-600': type === 'success', 'bg-red-600': type === 'error'}"
    >
        <span class="block sm:inline text-white">{{ message }}</span>
    </div>
</template>

<script>
    export default {
        name: 'VAlert',
        props: {
            message: {
                type: String,
            },
            type: {
                required: true,
                type: String,
                validator: value => ['success', 'error'].includes(value),
            }
        }
    }
</script>
