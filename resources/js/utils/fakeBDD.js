import * as faker from 'faker/locale/fr';
import _ from 'lodash';
export const quote = _.range(faker.random.number({ min: 2, max: 10 })).map(
    () => ({
        uuid: faker.random.uuid(), // uuid
        title: faker.commerce.productName(),
        overview: 'Description de la section',
        total_excluded_tax: 0,
        total_included_tax: 0,
        margin_excluded_tax: 0,
        items: _.range(faker.random.number({ min: 2, max: 10 })).map(() => ({
            uuid: faker.random.uuid(), // uuid
            title: faker.commerce.productName(),
            overview: 'Description de item',
            quantity: faker.random.number(10),
            price_unit_excluded_tax: faker.commerce.price(1.0, 100.0, 2),
            discount: {
                id: faker.random.number(),
                type: 'percent',
                percen_value: faker.random.number(10),
            },
            tax: {
                uuid: faker.random.uuid(),
                value: 10.0,
            },
            total_excluded_tax: 80.0,
        })),
    })
);
