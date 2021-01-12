const getCookieName = () => {
    let query = window.location;
    return query.host;
};

export default getCookieName;
