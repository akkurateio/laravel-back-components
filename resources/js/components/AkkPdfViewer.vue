<template>
    <AkkuratePdfViewer
            :class="wrapperClass"
            :src-pdf="srcPdf"></AkkuratePdfViewer>
</template>

<script>
import AkkuratePdfViewer from 'akkurate-pdf-viewer';
export default {
    name: 'AkkPdfViewer',
    props: ['srcPdf', 'wrapperClass'],
    methods: {
    },
};
</script>
