export const getParam = param =>
    unescape(
        window.location.search.replace(
            new RegExp(
                '^(?:.*[&\\?]' +
                    escape(param).replace(/[.+*]/g, '\\$&') +
                    '(?:\\=([^&]*))?)?.*$',
                'i'
            ),
            '$1'
        )
    );
