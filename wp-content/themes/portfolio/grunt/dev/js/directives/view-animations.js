.directive('viewAnimations', function ($route) {

  return {

    restrict: 'A',
    link: function (scope, element) {

    	var animations = $route.current.animations;
      
        if (!animations) return;

        if (animations.enter) element.addClass(animations.enter);
        if (animations.leave) element.addClass(animations.leave);

    }

  }

})