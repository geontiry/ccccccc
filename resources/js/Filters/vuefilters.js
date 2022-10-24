//add the Ksh sign in front of the price
Vue.filter('toKSh', function (value) {
    return `KSh. ${value}`;
});//toKSh

//limit a number to 2d.p.
Vue.filter('toFixed', function (price, limit) {
    return price.toFixed(limit);
});//toFixed(2)

//limit the length of a string to a given number of characters
Vue.filter('readMore', function (text, length, suffix) {
    return text.substring(0, length) + suffix;
}); //readMore(10, '...')

//Convert a JavaScript value to a JSON string
Vue.filter('json', function (value) {
    return JSON.stringify(value);
});//json

//Extracting a list of property values from an array of objects
Vue.filter('pluck', function (objects, key) {
    return objects.map(function(object) { 
        return object[key];
    });
});//pluck('last_name')

//Return the element at the given index
Vue.filter('at', function (value, index) {
    return value[index];
});//at(1)

//Return the minimum value in a given list
Vue.filter('min', function (values) {
    return Math.min(...values);
});//min 

//Return the first element of an array
Vue.filter('first', function (values) {
    if(Array.isArray(values)) {
        return values[0];
    }
    return values;
});//first 

//Return the last element of an array
Vue.filter('last', function (values) {
    if(Array.isArray(values)) {
        return values[values.length - 1];
    }
    return values;
});

//Remove duplicated elements in an array
Vue.filter('unique', function (values, unique) {
    return values.filter(function(element, index, self) {
        return index == self.indexOf(element);
    });
});//unique 

//Prepend text to a string
Vue.filter('prepend', function (string, prepend) {
    return `${string}${prepend}`;
});//prepend(' World!')
