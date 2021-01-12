<template>
    <component :is="component"></component>
</template>

<script>
import searchIcon from '../utils/searchIcon';
import filter24 from '@carbon/icons-vue/es/filter/24';
import time24 from '@carbon/icons-vue/es/time/24';
import time16 from '@carbon/icons-vue/es/time/16';
import branch24 from '@carbon/icons-vue/es/branch/24';
import stringtext24 from '@carbon/icons-vue/es/string-text/24';
import password24 from '@carbon/icons-vue/es/password/24';
import treeview24 from '@carbon/icons-vue/es/tree-view/24';
import chatbot24 from '@carbon/icons-vue/es/chat-bot/24';
import bookmark24 from '@carbon/icons-vue/es/bookmark/24';
import view16 from '@carbon/icons-vue/es/view/16';
import launch16 from '@carbon/icons-vue/es/launch/16';
import launch24 from '@carbon/icons-vue/es/launch/24';
import scan24 from '@carbon/icons-vue/es/scan/24';
import awake16 from '@carbon/icons-vue/es/awake/16';
import awake24 from '@carbon/icons-vue/es/awake/24';
import datashare24 from '@carbon/icons-vue/es/data-share/24';
import asleep24 from '@carbon/icons-vue/es/asleep/24';
import workspace24 from '@carbon/icons-vue/es/workspace/24';
import add24 from '@carbon/icons-vue/es/add/24';
import events24 from '@carbon/icons-vue/es/events/24';
import copy24 from '@carbon/icons-vue/es/copy/24';
import catalog24 from '@carbon/icons-vue/es/catalog/24';
import inventorymanagement24 from '@carbon/icons-vue/es/inventory-management/24';
import shareknowledge24 from '@carbon/icons-vue/es/share-knowledge/24';
import information16 from '@carbon/icons-vue/es/information/16';
import information24 from '@carbon/icons-vue/es/information/24';
import user24 from '@carbon/icons-vue/es/user/24';
import settings24 from '@carbon/icons-vue/es/settings/24';
import settingsadjust24 from '@carbon/icons-vue/es/settings--adjust/24';
import arrowleft24 from '@carbon/icons-vue/es/arrow--left/24';
import arrowright16 from '@carbon/icons-vue/es/arrow--right/16';
import arrowright24 from '@carbon/icons-vue/es/arrow--right/24';
import useridentification24 from '@carbon/icons-vue/es/user--identification/24';
import identification24 from '@carbon/icons-vue/es/identification/24';
import idea24 from '@carbon/icons-vue/es/idea/24';
import enterprise24 from '@carbon/icons-vue/es/enterprise/24';
import listbulleted24 from '@carbon/icons-vue/es/list--bulleted/24';
import category24 from '@carbon/icons-vue/es/category/24';
import product24 from '@carbon/icons-vue/es/product/24';
import receipt24 from '@carbon/icons-vue/es/receipt/24';
import locked16 from '@carbon/icons-vue/es/locked/16';
import locked24 from '@carbon/icons-vue/es/locked/24';
import locked32 from '@carbon/icons-vue/es/locked/32';
import unlocked16 from '@carbon/icons-vue/es/unlocked/16';
import unlocked24 from '@carbon/icons-vue/es/unlocked/24';
import unlocked32 from '@carbon/icons-vue/es/unlocked/32';
import useravatar24 from '@carbon/icons-vue/es/user--avatar/24';
import logout24 from '@carbon/icons-vue/es/logout/24';
import chevrondown24 from '@carbon/icons-vue/es/chevron--down/24';
import chevrondown16 from '@carbon/icons-vue/es/chevron--down/16';
import chevronleft24 from '@carbon/icons-vue/es/chevron--left/24';
import chevronright16 from '@carbon/icons-vue/es/chevron--right/16';
import chevronright24 from '@carbon/icons-vue/es/chevron--right/24';
import overflowmenuhorizontal24 from '@carbon/icons-vue/es/overflow-menu--horizontal/24';
import image24 from '@carbon/icons-vue/es/image/24';
import archive24 from '@carbon/icons-vue/es/archive/24';
import notebook24 from '@carbon/icons-vue/es/notebook/24';
import send24 from '@carbon/icons-vue/es/send/24';
import undo16 from '@carbon/icons-vue/es/undo/16';
import undo24 from '@carbon/icons-vue/es/undo/24';
import draggable16 from '@carbon/icons-vue/es/draggable/16';
import draggable24 from '@carbon/icons-vue/es/draggable/24';
import add32 from '@carbon/icons-vue/es/add/32';
import email24 from '@carbon/icons-vue/es/email/24';
import phone24 from '@carbon/icons-vue/es/phone/24';
import chat24 from '@carbon/icons-vue/es/chat/24';
import attachment24 from '@carbon/icons-vue/es/attachment/24';
import checkmark24 from '@carbon/icons-vue/es/checkmark/24';
import checkmarkfilled24 from '@carbon/icons-vue/es/checkmark--filled/24';
import checkmarkoutline24 from '@carbon/icons-vue/es/checkmark--outline/24';
import search24 from '@carbon/icons-vue/es/search/24';
import close16 from '@carbon/icons-vue/es/close/16';
import close24 from '@carbon/icons-vue/es/close/24';
import close32 from '@carbon/icons-vue/es/close/32';
import delete24 from '@carbon/icons-vue/es/delete/24';
import save24 from '@carbon/icons-vue/es/save/24';
import shoppingbag24 from '@carbon/icons-vue/es/shopping--bag/24';
import edit24 from '@carbon/icons-vue/es/edit/24';
import useravatarfilled24 from '@carbon/icons-vue/es/user--avatar--filled/24';
import grid24 from '@carbon/icons-vue/es/grid/24';
import table24 from '@carbon/icons-vue/es/table/24';
import apps24 from '@carbon/icons-vue/es/apps/24';
import download24 from '@carbon/icons-vue/es/download/24';
import subtract24 from '@carbon/icons-vue/es/subtract/24';
import dataOne24 from '@carbon/icons-vue/es/data--1/24';
import dataTwo24 from '@carbon/icons-vue/es/data--2/24';
import radiobutton24 from '@carbon/icons-vue/es/radio-button/24';
import radiobuttonchecked24 from '@carbon/icons-vue/es/radio-button--checked/24';
import radiobutton16 from '@carbon/icons-vue/es/radio-button/16';
import radiobuttonchecked16 from '@carbon/icons-vue/es/radio-button--checked/16';
import trophy24 from '@carbon/icons-vue/es/trophy/24';
import reminder24 from '@carbon/icons-vue/es/reminder/24';
import requestquote24 from '@carbon/icons-vue/es/request-quote/24';
import arrowdownright24 from '@carbon/icons-vue/es/arrow--down-right/24';
import arrowupright24 from '@carbon/icons-vue/es/arrow--up-right/24';
import chartpie24 from '@carbon/icons-vue/es/chart--pie/24';
import folder24 from '@carbon/icons-vue/es/folder/24';
import folder16 from '@carbon/icons-vue/es/folder/16';
import checkboxcheckedfilled24 from '@carbon/icons-vue/es/checkbox--checked--filled/24';
import checkbox24 from '@carbon/icons-vue/es/checkbox/24';
import blog24 from '@carbon/icons-vue/es/blog/24';
import help24 from '@carbon/icons-vue/es/help/24';
import upload24 from '@carbon/icons-vue/es/upload/24';
import link16 from '@carbon/icons-vue/es/link/16';
import link24 from '@carbon/icons-vue/es/link/24';
import list24 from '@carbon/icons-vue/es/list/24';
import misuseoutline24 from '@carbon/icons-vue/es/misuse--outline/24';
import trashcan24 from '@carbon/icons-vue/es/trash-can/24';
import code24 from '@carbon/icons-vue/es/code/24';
import activity24 from '@carbon/icons-vue/es/activity/24';
import generatepdf24 from '@carbon/icons-vue/es/generate-pdf/24';
import documentpdf24 from '@carbon/icons-vue/es/document--pdf/24';
import documentdownload24 from '@carbon/icons-vue/es/document--download/24';
import policy24 from '@carbon/icons-vue/es/policy/24';
import tablesplit24 from '@carbon/icons-vue/es/table--split/24';
import renew24 from '@carbon/icons-vue/es/renew/24';

import akkurate24 from '@/vendor/icons/akkurate/24';
import subvitamine24 from '@/vendor/icons/subvitamine/24';
import inbox24 from '@/vendor/icons/inbox/24';
import inboxMany24 from '@/vendor/icons/inbox--many/24';
import documentsigned24 from '@/vendor/icons/document--signed/24';

export default {
    components: {
        filter24,
        time24,
        time16,
        branch24,
        stringtext24,
        password24,
        treeview24,
        chatbot24,
        bookmark24,
        blog24,
        help24,
        view16,
        launch16,
        launch24,
        scan24,
        awake16,
        awake24,
        datashare24,
        asleep24,
        workspace24,
        add24,
        events24,
        catalog24,
        copy24,
        inventorymanagement24,
        shareknowledge24,
        information16,
        information24,
        user24,
        settings24,
        settingsadjust24,
        arrowleft24,
        arrowright16,
        arrowright24,
        useridentification24,
        identification24,
        idea24,
        enterprise24,
        listbulleted24,
        category24,
        product24,
        receipt24,
        locked16,
        locked24,
        locked32,
        unlocked16,
        unlocked24,
        unlocked32,
        useravatar24,
        logout24,
        chevrondown24,
        chevrondown16,
        chevronleft24,
        chevronright16,
        chevronright24,
        overflowmenuhorizontal24,
        image24,
        download24,
        archive24,
        notebook24,
        send24,
        undo16,
        undo24,
        draggable16,
        draggable24,
        add32,
        email24,
        phone24,
        chat24,
        attachment24,
        checkmark24,
        checkmarkfilled24,
        checkmarkoutline24,
        search24,
        close16,
        close24,
        close32,
        delete24,
        save24,
        shoppingbag24,
        edit24,
        useravatarfilled24,
        grid24,
        table24,
        apps24,
        subtract24,
        'data--124': dataOne24,
        'data--224': dataTwo24,
        radiobutton24,
        radiobuttonchecked24,
        radiobutton16,
        radiobuttonchecked16,
        trophy24,
        reminder24,
        requestquote24,
        arrowdownright24,
        arrowupright24,
        chartpie24,
        folder24,
        folder16,
        checkboxcheckedfilled24,
        checkbox24,
        upload24,
        link16,
        link24,
        list24,
        misuseoutline24,
        trashcan24,
        code24,
        activity24,
        generatepdf24,
        documentpdf24,
        documentdownload24,
        policy24,
        tablesplit24,
        renew24,

        akkurate24,
        subvitamine24,
        inbox24,
        inboxMany24,
        documentsigned24,
    },
    props: {
        name: {
            type: String,
            required: true,
        },
        size: {
            type: String,
            default: '24',
        },
    },
    data() {
        return {};
    },
    mounted() {},
    computed: {
        component() {
            const { name, size } = this;
            const searchName = searchIcon(name);
            if (!searchName) {
                console.error(`icon ${name} not found`);
                return;
            }
            return searchName + size;
        },
    },
};
</script>
