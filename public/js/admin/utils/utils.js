var utils = function () {
    this.filterUndefinedProperties = function(object) {
        var _clone = angular.copy(object);
        Object.keys(_clone).forEach(function (key) {
            if(typeof _clone[key] === 'undefined' || _clone[key] == null){
                delete _clone[key];
            }
        });
        return _clone;
    };

    this.objectIsNotEmpty = function(object) {
        return Object.keys(object).length !== 0;
    };

    this.setNullFilters = function(filters) {
        var _clonedFilters = angular.copy(filters);
        Object.keys(_clonedFilters).forEach(function (key) {
            _clonedFilters[key] = null;
        });
        return _clonedFilters;
    };

    this.hasActiveFilters = function (filters) {
        var _cleanFilters = this.filterUndefinedProperties(filters);
        return this.objectIsNotEmpty(_cleanFilters);
    };

    this.isObject = function (variable) {
        return variable !== null && typeof variable === 'object';
    };

    this.isNull = function (variable) {
        return variable === null;
    }
};