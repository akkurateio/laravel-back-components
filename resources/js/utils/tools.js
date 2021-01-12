export function inArray(needle, array) {
    return array.includes(needle);
}

export function keyExists(key, object) {
    const array = Object.keys(object);
    return inArray(key, array);
}

export function getBy(array, field, value, toReturn) {
    var i = 0,
        len = array.length;
    for (; i < len; i++) {
        if (array[i][field] == value) {
            return toReturn ? array[i][toReturn] : array[i];
        }
    }
    return null;
}

export function getIndexBy(array, field, value) {
    return array.filter((item) => item[field] === value) || null;
}

export function cleanObject(obj) {
    const str = JSON.stringify(obj);
    return JSON.parse(str);
}

export function truncate(value, wordwise, max, tail) {
    if (!value) return '';

    max = parseInt(max, 10);
    if (!max) return value;
    if (value.length <= max) return value;

    value = value.substr(0, max);
    if (wordwise) {
        var lastspace = value.lastIndexOf(' ');
        if (lastspace != -1) {
            //Also remove . and , so its gives a cleaner result.
            if (
                value.charAt(lastspace - 1) == '.' ||
                value.charAt(lastspace - 1) == ','
            ) {
                lastspace = lastspace - 1;
            }
            value = value.substr(0, lastspace);
        }
    }

    return value + (tail || ' …');
}

export function nl2br(msg, is_xhtml) {
    var is_xhtml = is_xhtml || true;
    var breakTag = is_xhtml ? '<br />' : '<br>';
    var msg = (msg + '').replace(
        /([^>\r\n]?)(\r\n|\n\r|\r|\n)/g,
        '$1' + breakTag + '$2'
    );
    return $sce.trustAsHtml(msg);
}

export const notificationMixin = {
    methods: {
        showNotification(title, body, link = '') {
            const notification = {
                title: title,
                options: {
                    body: body,
                    icon: '/images/brands/default/logo.svg',
                },
                events: {
                    onclick: function () {
                        if (link) {
                            window.open(link, '_blank').focus();
                        }
                    },
                },
            };

            this.$notification.show(
                notification.title,
                notification.options,
                notification.events
            );
        },
    },
};

export const getUuidOnUrl = () => {
    return location.pathname.split('/')[2];
}

export const objectToUrl = (params) => {

    let str = "";
    for (let key in params) {
        if (str !== "") {
            str += "&";
        }
        str += key + "=" + encodeURIComponent(params[key]);
    }

    return str;
}
