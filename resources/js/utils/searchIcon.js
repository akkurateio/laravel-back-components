import arrayIcons from '../arrayIcons';

const searchIcon = str => {
    try {
        const strToSearch = str
            .replace(/[0-9]/g, '')
            .replace(/-/g, '(-+)')
            .replace(/ /g, '(-+)')
            .replace(/([a-z0-9])([A-Z])/g, '$1(-+)$2')
            .toLowerCase();
        const regex = new RegExp(`^${strToSearch}$`);
        return parseStr(arrayIcons.find(item => item.match(regex)));
    } catch (e) {
        return str;
    }
};
export default searchIcon;
const parseStr = str => {
    return str.replace(/-/g, '');
};
