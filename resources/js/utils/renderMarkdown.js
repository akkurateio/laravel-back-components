import  hljs from 'highlight.js/lib/core.js';
import javascript from 'highlight.js/lib/languages/javascript';
import typescript from 'highlight.js/lib/languages/typescript';
import php from 'highlight.js/lib/languages/php';
import bash from 'highlight.js/lib/languages/bash';
import xml from 'highlight.js/lib/languages/xml';
import json from 'highlight.js/lib/languages/json';
import plaintext from 'highlight.js/lib/languages/plaintext';
hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('typescript', typescript);
hljs.registerLanguage('php', php);
hljs.registerLanguage('bash', bash);
hljs.registerLanguage('xml', xml);
hljs.registerLanguage('json', json);
hljs.registerLanguage('plaintext', plaintext);
import 'highlight.js/styles/atom-one-dark.css';
import marked from 'marked';
import variablesMD from '../../../variablesMD';

const renderer = new marked.Renderer();

let toc = [];
renderer.text = text => {
    const testRegexClasses = /\{(.*?)\}/g.exec(text);
    if (!testRegexClasses) return text;
    const [variable, classes] = testRegexClasses;
    return `<span class="${classes.split('.').join(' ')}">${text.replace(
        variable,
        ''
    )}</span>`;
};

const searchEl = (array, level) => {
    const arrayLength = array.length;
    for (let i = 0; i < arrayLength; i++) {
        const item = array[i];
        if (item.level >= level) {
            continue;
        }
        if (item.topics && item.topics.length > 0) {
            return searchEl(item.topics, level) || item;
        }
        return item;
    }
    return null;
};

renderer.heading = function(text, level, beforeRender) {
    const exec = /\{(.*?)\}/g.exec(beforeRender);
    let title = text;
    if (exec) {
        title = beforeRender.replace(exec[0], '').trim();
    }
    const slug = title
        .toLowerCase()
        .split(' ')
        .join('-');
    const el = {
        level,
        slug,
        title,
        topics: [],
    };
    const find = searchEl(toc, level);
    if (find) {
        find.topics.push(el);
    } else {
        toc.push(el);
    }
    return `<h${level} id="${slug}">${text}</h${level}>`;
};

renderer.code = (code, language) => {
    const validLanguage = hljs.getLanguage(language) ? language : 'plaintext';
    const highlighted = hljs.highlight(validLanguage, code);
    return `<pre><code class="hljs ${language || ''}">${
        highlighted.value
    }</code></pre>`;
};
export default function(str) {
    toc = [];
    const array = [...str.matchAll(/\{\{(.*?)\}\}/g)];
    const uniqueArray = Array.from(new Set(array.map(JSON.stringify))).map(
        JSON.parse
    );
    let html = str;
    for (let i = 0; i < uniqueArray.length; i++) {
        const [variable, name] = uniqueArray[i];
        html = html.split(variable).join(variablesMD(name.trim()));
    }
    const content = marked(html, {
        renderer,
    });
    return {
        content,
        toc,
    };
}
