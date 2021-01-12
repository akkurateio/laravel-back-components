const fs = require('fs');
const path = require('path');
const dir = fs.readdirSync(path.join(__dirname, 'node_modules', '@carbon', 'icons-vue', 'es'));
const js = `/* eslint-disable quotes */
export default ${JSON.stringify(dir, null, 4)};`;

fs.writeFileSync(path.join(__dirname, 'resources', 'js', 'arrayIcons.js' ), js);
