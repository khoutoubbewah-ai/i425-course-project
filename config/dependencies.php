<?php
use DI\Container;
use RestaurantAPI\Controllers\RestaurantChainController;
use RestaurantAPI\Controllers\MenuCategoryController;
use RestaurantAPI\Controllers\AmenityController;
use RestaurantAPI\Controllers\LocationsController;
use RestaurantAPI\Controllers\UserController;

return function(Container $container) {

    $container->set('RestaurantChains', function() {
        return new RestaurantChainController();
    });

    $container->set('MenuCategory', function() {
        return new MenuCategoryController();
    });

    $container->set('Amenity', function() {
        return new AmenityController();
    });

    $container->set('Locations', function() {
        return new LocationsController();
    });

    // Set a dependency called "User"
    $container->set('User', function() {
        return new UserController();
    });
};
