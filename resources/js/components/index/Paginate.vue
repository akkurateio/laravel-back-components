<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li
                class="page-item"
                :class="getClass(link)"
                v-for="(link, key) in links"
                :key="key"
            >
                <template v-if="key == 0">
                    <a
                        class="page-link"
                        href="#"
                        @click="$emit('requestPage', 'previous')"
                    >
                        <Icon name="ArrowLeft"></Icon>
                    </a>
                </template>
                <template v-else-if="key == links.length - 1">
                    <a
                        class="page-link"
                        href="#"
                        @click="$emit('requestPage', 'next')"
                    >
                        <Icon name="ArrowRight"></Icon>
                    </a>
                </template>
                <template v-else>
                    <span v-if="link.active" class="page-link">{{
                        link.label
                    }}</span>
                    <a
                        v-else
                        class="page-link"
                        href="#"
                        @click="$emit('requestPage', link.label)"
                        >{{ link.label }}</a
                    >
                </template>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'Paginate',
    props: ['links', 'currentPage'],
    methods: {
        getClass(link) {
            let wrapperClass = '';
            if (link.active) {
                wrapperClass += ' active';
            }
            if (!link.url) {
                wrapperClass += ' disabled';
            }
            return wrapperClass;
        },
    },
};
</script>

<style scoped></style>
