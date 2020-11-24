<template>
    <button
        type="submit"
        class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none"
    >
        <slot />
    </button>
</template>

<script>
    export default {
        name: "Button"
    }
</script>
