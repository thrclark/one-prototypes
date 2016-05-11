/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
angular.module('sharedDirectives', [])

.directive('sdTask', ['$http', function ($http) {
	return {
		restrict : 'A',
		templateUrl : contextPath + '../app/shared/directives/tile.html?ver=' + htmlTemplateVersion,
	    replace: true,
	    scope: {
	    	task: '=sdTask',
	    	taskCollection: '=',
	    	filter: '=',
	    	launchUrl: '@',
	    	detailsUrl: '@',
	    	marketsTitle: '@',
	    	marketMap: '=',
	    	removeFunction: '&',
	    	addFavoriteFunction: '&',
	    	removeFavoriteFunction: '&',
	    	newWindowPref: '=',
	    	transitionDelay: '@'
	    },
	    controller: ['$scope', '$element', '$attrs', '$http', '$timeout', '$animate', 'mobileService',
	                 function($scope, $element, $attrs, $http, $timeout, $animate, mobileService) { 
	    	
	    	$scope.selectedDataTileIndex = 0;
	    	$scope.mobileMenuPos = {left:0};
	    	$scope.focused = false;
	    	$scope.savePending = false;
	    	$scope.contextPath = contextPath;
	    	
	    	$scope.$watch('newWindowPref', function(newValue, oldValue) {
	    		if (typeof newValue != 'undefined' && newValue != null) {
	    			$scope.target =  ($scope.newWindowPref || $scope.task.openInNewWindow) ? '_blank' : '_self';
	    		}
	    	});
	    	
	    	$scope.setFocused = function(isFocused) {
	    		if (!mobileService.isMobile && $scope.taskCollection == null) {
	    			$scope.focused = isFocused;
	    		} 
	    	}
	    	
	    	$scope.widthStyle = function (percent) {
	    	    return { width: percent + '%' };
	    	};
	    	
	    	$scope.displayTaskMobileMenu = function(show) {
	    		if (mobileService.isMobile && $scope.taskCollection == null) {
	    			if (show) {
	    				var containerWidth = $element.width();
	    				var offset = containerWidth - 110; //110 is width of image specified in css
	    				$scope.mobileMenuPos.left = -offset;
	    			} else {
	    				$scope.mobileMenuPos.left = 0;
	    			}
	    		} 
	    	};
	    	
	    	$scope.remove = function() {
	    		$scope.removeFunction({'taskCollection': $scope.taskCollection, 'task': $scope.task});
	    	}
	    	
	    	$scope.addSingleFavorite = function() {
	    		$scope.savePending = true;
	    		$scope.addFavoriteFunction({'taskUid': $scope.task.uid, 'callback': addFavoriteCallback});
	    	};
	    	
	    	$scope.removeSingleFavorite = function() {
	    		$scope.savePending = true;
	    		$scope.removeFavoriteFunction({'taskUid': $scope.task.uid, 'callback': removeFavoriteCallback});
	    	};
	    	
	    	function addFavoriteCallback(success) {
	    		$scope.savePending = false;
	    		if (success) {
	    			$scope.task.favorite = true;
	    		}
	    	}
	    	
	    	function removeFavoriteCallback(success) {
	    		$scope.savePending = false;
	    		if (success) {
	    			$scope.task.favorite = false;
	    		}
	    	}
	    	
	    	var timer = null;
	    	$scope.liveData = [];
	    	if ($scope.task.activeContentUrl != null && $scope.task.activeContentUrl.length > 0) {
	    		try {
	    			var url = $scope.task.activeContentUrl;
	    			if (($scope.filter.roleUniqueKeys != null && $scope.filter.roleUniqueKeys.length > 0) || ($scope.filter.marketUniqueKey != null && $scope.filter.marketUniqueKey.length > 0)) {
	    				var separator = '?';
	    				var separatorUsed = false;
	    				if ($scope.task.activeContentUrl.indexOf('?') > 0) {
	    					separator = '&';
	    				}
	    				if ($scope.filter.roleUniqueKeys != null) {
	    					for (var index in $scope.filter.roleUniqueKeys) {
	    						if (!separatorUsed) {
	    							separatorUsed = true;
	    							url += separator;
	    						} else {
	    							url += '&';
	    						}
	    						url += 'roles[]=' + $scope.filter.roleUniqueKeys[index];
	    					}
	    				}
	    				if ($scope.filter.marketUniqueKey != null) {
    						if (!separatorUsed) {
    							separatorUsed = true;
    							url += separator;
    						} else {
    							url += '&';
    						}
    						url += 'market=' + $scope.filter.marketUniqueKey;
	    				}
	    			}
	    			
	    			
			    	$http({method: 'GET', url: url, timeout: 10000, cache: true}).success(function(data, status, headers, config) {
			    		if (typeof data.tileContent != 'undefined' && data.tileContent.length > 0) {
			    			if (data.tileContent.length > 5) {
			    				$scope.liveData = data.tileContent.splice(0, 5); //only take the first 5 if given more
			    			} else {
			    				$scope.liveData = data.tileContent;
			    			}
			    			for (var index in $scope.liveData) {
			    				var text = $scope.liveData[index].text;
			    				if (text instanceof Array) {
				    				if (text.length > 5) {
				    					$scope.liveData[index].text = text.splice(0, 4); //only take the first 4 lines
					    			}
			    				} else {
			    					$scope.liveData[index].text = null;
			    				}
			    			}
			    			
			    			if (typeof $scope.transitionDelay == 'undefined' ||  $scope.transitionDelay == null) {
			    				 $scope.transitionDelay = 5000;
			    			} else {
			    				$scope.transitionDelay = Number($scope.transitionDelay);
			    			}
			    			
				    		$animate.enabled(false);
				    		timer = $timeout(function() {
				    			timer = null;
			    				$animate.enabled(true);
			    				cycleTiles();
				    		}, 0);
				    	}
			        });
	    		} catch(e) {
	    			
	    		}
	    	}
	    	
	    	function cycleTiles() {
	    		timer = $timeout(function() {
	    			timer = null;
	    			$scope.selectedDataTileIndex++;
	    			if ($scope.selectedDataTileIndex >= $scope.liveData.length + 1) {
	    				$scope.selectedDataTileIndex = 0;
	    			}
	    			cycleTiles();
	    		}, $scope.transitionDelay);
	    	}
	    	
	    	$scope.$on('$destroy', function(event) {
	    		if (timer != null) {
	    			$timeout.cancel(timer);
	    		}
            });
	    	
	    	/* hide top layer on keyboard navigation */
	    	if ($scope.taskCollection == null) { //prevent top layer from fading when tabbing in edit mode
	    		//added a 100ms delay between blur/focus because this was creating duplicate dom entries for the "top layer" in firefox, preventing clicking tiles with mouse
	    		var focusTimeout = null;
	    		var blurTimeout = null;
		    	$element.focusin(function() {
		    		if (blurTimeout != null) {
		    			$timeout.cancel(blurTimeout);
		    			blurTimeout = null;
		    		} else {
		    			focusTimeout = $timeout(function() {
			    			$scope.setFocused(true);
			    			focusTimeout = null;
			    		}, 100);
		    		}
		    	});
		    	$element.focusout(function() {
		    		if (focusTimeout != null) {
		    			$timeout.cancel(focusTimeout);
		    			focusTimeout = null;
		    		} else {
			    		blurTimeout = $timeout(function() {
			    			$scope.setFocused(false);
			    			blurTimeout = null;
			    		}, 100);
		    		}
		    	});
	    	}
	    }]
	};
}])

.directive('carousel', function () {
	return {
		restrict : 'A',
		scope: true,
		compile: function(tElement, tAttrs, tTransclude) {
			// Extract the children from this instance of the directive
			var children = tElement.children();

			// Wrap the chidren in our template
			var template = angular.element('<div class="ah-carousel" ng-style="perspective" ng-focus="pause()" ng-blur="resume()" ng-mouseover="pause()" ng-mouseleave="resume()" ng-swipe-left="next()" ng-swipe-right="prev()"></div>');
			var repeatTemplate = angular.element('<div ng-repeat="item in carouselItems" class="carousel-item" ng-style="getStyle($index)" style="opacity:0;" ng-click="selectIndex($index, $event)"></div>');
			template.append(repeatTemplate);
			repeatTemplate.append(children);

			// Append this new template to our compile element
			tElement.html('');
			tElement.append(template);
		},
		controller: ['$scope', '$element', '$attrs', '$timeout', '$window',
			function($scope, $element, $attrs, $timeout, $window) { 
				$scope.carouselItems = $scope.$eval($attrs.carousel);
				$scope.perspective = {};
				var positions = [];
				var currentIndex = 0;
				var currentTimeout = null;
			
				angular.element($window).bind('resize', function() {
					$timeout(function() {
						computePositions();
					}, 0);
				});
				
				
				var totalImages = 0;
				var imagesLoaded = 0;
				$timeout(function() { //wait for ng-repeat to expand
					var $imgElement = $('img', $element); //find all images in carousel
					totalImages = $imgElement.length;
					
					$imgElement.one('load', imageComplete).each(function() {
						if(this.complete) $(this).load();
					});
					
					//$imgElement.load(imageComplete); //wait for images to load so we can get the correct height
					$imgElement.error(imageComplete);
				}, 0);
				
				function imageComplete() {
					imagesLoaded++;
					if (imagesLoaded == totalImages) {
						setupCarousel();
						delete imagesLoaded;
						delete totalImages;
					}
				}
				
				function setupCarousel() {
					computePositions();
					stepCarousel();
				}
				
				function stepCarousel() {
					if(positions.length > 1) {
						currentTimeout = $timeout(function() {
							currentIndex++;
							if (currentIndex >= positions.length) {
								currentIndex = 0;
							}
							stepCarousel();
						}, Number($attrs.interval));
					}
				}
				
				$scope.pause = function() {
					if (currentTimeout) {
						$timeout.cancel(currentTimeout);
						currentTimeout = null;
					}
				}
				
				$scope.resume = function() {
					if (!currentTimeout) {
						stepCarousel();
					}
				}
				
				$scope.selectIndex = function(index, $event) {
					if (index != currentIndex) {
						currentIndex = index;
						$event.stopPropagation();
						$event.preventDefault();
					}
				}
				
				$scope.next = function() {
					$scope.pause();
					currentIndex++;
					if (currentIndex >= positions.length) {
						currentIndex = 0;
					}
					stepCarousel();
				}
				
				$scope.prev = function() {
					$scope.pause();
					currentIndex--;
					if (currentIndex < 0) {
						currentIndex = positions.length - 1;
					}
					stepCarousel();
				}
				
				$scope.getStyle = function (index) {
					var positionIndex = (index - currentIndex);
					if (positionIndex < 0) {
						positionIndex += positions.length;
					}
					var position = positions[positionIndex];
					if (position) {
						var transformValue = 'translate3d(' + position.x + 'px , 0,' + position.z + 'px)';

						var style = {
							'-ms-transform': transformValue,
							'-webkit-transform': transformValue,
							'transform': transformValue,
							'opacity': position.opacity,
							'z-index': position.zindex,
							'background-color': $scope.carouselItems[index].featuredTask.color || '#ffffff', //makes code not generic.
							'color': $scope.carouselItems[index].featuredTask.textColor || '#000000'
						};

						return style;
					} else {
						return {};
					}
				}
				
				function computePositions() {
					var bodyWidth = $('html').outerWidth();
					var flatMode = bodyWidth < 750;
					var carouselWrapper = $element.children(); //there's only 1 child element
					
					var buffer = 0.15;
					positions.length = 0;
					var containerWidth = carouselWrapper.outerWidth();
					var items = carouselWrapper.children();
					var itemWidth;
					
					carouselWrapper.css({'height': 'auto'});
					items.css({'height': 'auto'});
					items.css({'max-height': '236px'});
					
					var itemWidthFraction = (1.0 - (2.0 * buffer));

					if (flatMode) {
						itemWidth = containerWidth;
					} else {
						//itemWidth = items.outerWidth();
						itemWidth = Math.round(containerWidth * itemWidthFraction);
					}
					
					items.css({width:itemWidth});
					
					var maxHeight = 0;
					items.each(function() {
						var height = $(this).outerHeight();
						if (height > maxHeight) {
							maxHeight = height;
						}
					});
					carouselWrapper.css({'height': maxHeight+'px'});
					items.css({'height':  maxHeight+'px'});
					
					var circleRadius = ((containerWidth - itemWidth) / 2.0);
					var stepAngle = 2.0 * Math.PI / items.length;
					
					var minXShift = null;
					var minzShift = null;
					
					var maxZShift = -2 * circleRadius;
					
					if (!flatMode) {
						for (var i=0; i<items.length; i++) {
							var angle = i * stepAngle;
							var xShift = Math.round(Math.sin(angle) / itemWidthFraction * circleRadius + circleRadius);
							var zShift = Math.round((Math.cos(angle) - 1) * circleRadius);
							
							if (minXShift = null || xShift < minXShift) {
								minXShift = xShift;
								minZShift = zShift;
							}
							
							var dist = Math.abs(items.length / 2 - i);
							var zindex =  2 * dist;
							if (xShift < circleRadius) {
								zindex += 1;
							}
							
							var opacity;
							if (i == 0) {
								opacity = 1.0;
							} else {
								opacity = 1 - zShift/maxZShift;
							}
							
							positions[i] = {x: xShift, z: zShift, opacity: opacity, zindex: zindex};
						}
					} else {
						for (var i=0; i<items.length; i++) {
							var positionIndex = i
							if (positionIndex > items.length/2) {
								positionIndex -= items.length;
							}
							
							positions[i] = {x: positionIndex * containerWidth , z: 0, opacity: positionIndex == 0 ? 1.0 : 0.0, zindex: positionIndex == 0 ? 1 : 0};
						}
					}
					
					var pserspectiveValue = containerWidth;
					if (minXShift != null && minXShift < 0) {
						pserspectiveValue = Math.round(containerWidth / 2 * minZShift / minXShift); //correct perspective for varying number of elements so they always span the full width of the container
					}
					
					$scope.perspective = {
						'-webkit-perspective': pserspectiveValue+'px',
						'perspective': pserspectiveValue+'px'
					};
				}
			}
		]
	};
})

.directive('datepicker', function(timeService) {
	return {
		restrict : 'A',
		require: 'ngModel',
		link: function(scope, element, attr, ngModel) {
			
			var options = {
				autoclose: true,
				maxView: 4,
				minView: (typeof attr.time !== 'undefined') ? 0 : 2,
				todayBtn: true,
				pickerPosition: "bottom-left",
				container: attr.datepicker
			};
			
			if (typeof attr.dateFormat !== 'undefined') {
				options.format = attr.dateFormat;
			} else {
				if (typeof attr.time !== 'undefined') {
					options.format = 'YYYY-MM-DD h:mm a'; //Date format is specified in Moment.js http://momentjs.com/docs/
				} else {
					options.format = 'YYYY-MM-DD';
				}
			}
			
			$(element).datetimepicker(options).on('changeDate', function() {
                scope.$apply(function(){
                	ngModel.$setViewValue(element.val());
                });
            });
			
			//formatters
			function fromUser(dateString) {
				if (dateString) {
					return timeService.parseTime(dateString, options.format);
				} else {
					return null;
				}
			}

			function toUser(millis) {
				if (millis) {
					return timeService.formatTime(millis, options.format);
				} else {
					return '';
				}
			}
			ngModel.$parsers.push(fromUser);
			ngModel.$formatters.push(toUser);
		}
	};
})

.directive('unique', ['$http', function ($http) {
	return {
		restrict : 'A',
	    require: 'ngModel',
	    link: function (scope, elem, attrs, ngModel) {
	    	elem.bind('blur', function (e) {
	        	var val = elem.val();
	        	data = {value: val};
	        	
	        	var url = contextPath + attrs.unique;
	        	if (attrs.entityId) {
	        		data.entityId = Number(attrs.entityId);
	        	}
	        	
	        	if (attrs.uniqueData) {
	        		data.data = scope.$eval(attrs.uniqueData);
	        	}
	        	
	        	$http({method: 'POST', url: url, data: data})
	          	.success(function(data, status, headers, config) {
	          		ngModel.$setValidity('unique', true);
	          	})
	          	.error(function(data, status, headers, config) {
	          		ngModel.$setValidity('unique', false);
	          	});
		    });
	    }
	};
}])

.directive('validate', [
    function() {
        return {
            link: function(scope, element, attr) {
                var form = element.inheritedData('$formController');
                // no need to validate if form doesn't exists
                if (!form) return;
                // validation model
                var validate = attr.validate;
                // watch validate changes to display validation
                scope.$watch(validate, function(errors) {

                    // every server validation should reset others
                    // note that this is form level and NOT field level validation
                    form.$serverError = { };

                    // if errors is undefined or null just set invalid to false and return
                    if (!errors) {
                        form.$serverInvalid = false;
                        return;
                    }
                    // set $serverInvalid to true|false
                    form.$serverInvalid = (Object.keys(errors).length > 0);

                    // loop through errors
                    angular.forEach(errors, function(messages, field) {
                    	form.$serverError[field] = { $invalid: true, messages: messages};
                    });
                });
            }
        };
    }
])

.directive('permissions', function() {
	return {
	    restrict: 'A',
	    templateUrl : contextPath + '/app/shared/directives/permissions.html?ver=' + htmlTemplateVersion,
	    transclude : true,
	    replace: true,
	    scope: {
	    	permissions: '=',
	    	tenantId: '@'
	    },
	    controller: ['$scope', '$element', '$attrs', '$transclude', 'permissionService',
	                 function($scope, $element, $attrs, $transclude, permissionService) { 
	    	
	    	$scope.expressionTypes = permissionService.getPermissionTypes();
	    	
	    	$scope.attributeMappings = {};
	    	
	    	if (typeof $attrs.tenantId == 'undefined' || $attrs.tenantId.length == 0) {
	    		permissionService.getAttributes(null).success(function(data) {
    				$scope.attributeMappings = data;
    			});
	    	} else {
	    		var watcher2 = $scope.$watch('tenantId', function(newValue, oldValue) {
		    		if (newValue != null && newValue.length > 0) {
		    			watcher2();
		    			permissionService.getAttributes($scope.tenantId).success(function(data) {
		    				$scope.attributeMappings = data;
		    			});
		    		}
		    	});
	    	}
	    	

	    	$scope.selectedExpressionData = {};
	    	
	    	$scope.addExpression = function(parentExpression) {
	    		$('#permissionExpressionDialog').modal('show');
	    		$scope.selectedParentExpression = parentExpression;
	    	};
	    	
	    	$scope.removeExpression = function(expression, parentExpression) {
	    		if (parentExpression) {
	    			parentExpression.children.splice(parentExpression.children.indexOf(expression), 1);
	    		}
	    	};
	    	
	    	$scope.closeDialog = function() {
	    		$('#permissionExpressionDialog').modal('hide');
	    	};
	    	
	    	$scope.addSelectedPermission = function() {
	    		$('#permissionExpressionDialog').modal('hide');

	    		var newExpression = permissionService.buildExpression($scope.selectedExpression.type.value, $scope.selectedExpressionData);
	    		if (!$scope.selectedParentExpression.children) {
	    			$scope.selectedParentExpression.children = [];
	    		}
	    		$scope.selectedParentExpression.children.push(newExpression);
	    	};
	    	
	    	$scope.changeRootExpressionType = function(type) {
	    		var newRoot = permissionService.buildExpression(type);
	    		if($scope.permissions) {
	    			newRoot.children = $scope.permissions.children;
	    		}
	    		$scope.permissions = newRoot;
	    	};
	    	
	    	var watcher = $scope.$watch('permissions', function(newValue, oldValue) { 
	    		if (newValue != null) {
	    			$scope.permissions = permissionService.parseExpression($scope.permissions);
	    			watcher();
	    		}
	    	});
	    	
	    	$scope.isNonLeafExpression = function(variable) {
	    		return variable instanceof NonLeafExpression;
	    	};
	    	
	    	$scope.isNonLeafExpressionType = function(type) {
	    		return permissionService.buildExpression(type) instanceof NonLeafExpression;
	    	};
	    	
	    	$scope.resetFieldData = function() {
	    		$scope.selectedExpressionData = {};
	    	};
	    	
	    	$scope.validateForm = function() {
	    		var isValid = !!$scope.selectedExpression && !!$scope.selectedExpression.type;
	    		
	    		if (isValid) {
		    		for (var index in $scope.selectedExpression.type.fields) {
		    			var field = $scope.selectedExpression.type.fields[index];
		    			
		    			if (!$scope.selectedExpressionData[field.key]) {
		    				isValid = false;
		    				break;
		    			}
		    		}
		    	}
	    		
	    		return isValid;
	    	};
	    }]
	};
})

// from: https://gist.github.com/furf/4331090
.directive('tree', ['$compile', function ($compile) {
  'use strict';
  return {
    restrict: 'A',
    compile: function (tElement, tAttrs) {
 
      var branch = tElement.find('branch'),
          repeatExpr,
          childExpr,
          childrenExpr;
 
      if (!branch.length) {
        throw new Error('tree directive must contain a branch node.');
      }
 
      repeatExpr = (branch.attr('branch') || tAttrs.ngRepeat).match(/^(.*) in (?:.*\.)?(.*)$/);
      childExpr = repeatExpr[1];
      childrenExpr = repeatExpr[2];
      tElement.attr('ng-repeat', childExpr + ' in ' + childExpr + '.' + childrenExpr);
      
      return function link (scope, element) {
 
        scope.$depth = scope.$depth || 0;
        scope.$watch(childExpr, function(child) {
 
          var childScope = scope.$new();
 
          if (child) {
	          childScope[childrenExpr] = child[childrenExpr];
	          childScope.$depth = scope.$depth + 1;
	 
	          element.find('branch').replaceWith($compile(tElement.clone())(childScope));
          }
        });
      };
    }
  };
}])

.directive('colorpicker', function() {
    return {
        restrict: 'A',
        require: 'ngModel',
        scope: false,
        replace: true,
        template: "<span><input class='input-small' /></span>",
        link: function(scope, element, attrs, ngModel) {
            var input = element.find('input');
            var options = angular.extend({
                color: ngModel.$viewValue,
                change: function(color) {
                    scope.$apply(function() {
                      ngModel.$setViewValue(color.toHexString());
                    });
                }
            }, scope.$eval(attrs.options));
            
            ngModel.$render = function() {
              input.spectrum('set', ngModel.$viewValue || '');
            };
            
            input.spectrum(options);
        }
    };
})

.directive("fileupload", function() {
	return {
		restrict: "A",
		scope: {
			done: "&",
			progress: "&",
			fail: "&",
			uploadurl: "=",
			customdata: "&"
		},
		link: function(scope, elem, attrs) {
			var uploadOptions;
			uploadOptions = {
				url: scope.uploadurl,
				dataType: "json",
				acceptFileTypes: /(\.|\/)(jpe?g|png|ico)$/i,
				loadImageFileTypes: /^image\/(jpe?g|png)$/
			};
			if (scope.done) {
				uploadOptions.done = function(e, data) {
					return scope.$apply(function() {
						return scope.done({
							e: e,
							data: data
						});
					});
				};
			}
			if (scope.fail) {
				uploadOptions.fail = function(e, data) {
					return scope.$apply(function() {
						return scope.fail({
							e: e,
							data: data
						});
					});
				};
			}
			if (scope.progress) {
				uploadOptions.progress = function(e, data) {
					return scope.$apply(function() {
						return scope.progress({
							e: e,
							data: data
						});
					});
				};
			}
			return elem.fileupload(uploadOptions).bind("fileuploadsubmit", function(e, data) {
				return data.formData = {
					params: JSON.stringify(scope.customdata())
				};
			});
		}
    };
})

.directive('popover', function() {
	return {
		restrict: 'A',
		link: function(scope, elem, attrs) {
			var options = {
				title: attrs.content ? attrs.popover : '',
				content: '<small>' + (attrs.content ? attrs.content : attrs.popover) + '</small>',
				placement: (attrs.placement || 'auto bottom'),
				trigger: attrs.trigger || 'focus',
				container: attrs.container || null,
				html: true,
				delay: { show: 500, hide: 100 }
			};
			$(elem).popover(options);
		}
    };
})

.directive('colorbox', function() {
	return {   
		restrict: 'AC',    
		link: function (scope, element, attrs) { 
			var options = angular.extend({
				maxWidth: '90%',
                photo: true,
                top: '20px',
                rel:'group1'
            }, scope.$eval(attrs.colorbox));
    	
			$(element).colorbox(options);     
    	}
	};  
})

//this prevents angular from handling links, mostly for preventing it from breaking Bootstrap tabs
.directive('eatClick', function() {
    return function(scope, element, attrs) {
        $(element).click(function(event) {
            event.preventDefault();
        });
    };
})

.directive('ngTypeahead', function() {
	return {
		restrict : 'ACE',
		require: 'ngModel',
		link : function(scope, element, attr, ngModel) {
			//element.typeahead(scope.datasets);
			var ds = scope.$eval(attr.datasets);
			ds.limit = attr.limit;
			element.typeahead(ds);

			// Updates the ngModel binding when a value is
			// manually selected from the dropdown.
			// ToDo: Think about how the value could be updated
			// on user entry...
			element.bind('typeahead:selected', function(object, datum) {
				scope.$apply(function() {
					var url = contextPath + '/task/';
			    	if (datum.marketUniqueKey) {
			    		url += datum.marketUniqueKey + '/';
			    	}
			    	url += datum.uniqueKey;
			    	url += '?searchTerms=' + encodeURIComponent(ngModel.$modelValue);
			    	
			    	//scope.ngModel = datum.value;
					ngModel.$setViewValue(datum.value);
					//scope.$eval(attr.ngEnter);
					
					window.location = url;
				});
				
			});

			// Updates the ngModel binding when a query is
			// autocompleted.
			element.bind('typeahead:autocompleted', function(object, datum) {
				scope.$apply(function() {
					//scope.ngModel = datum.value;
					ngModel.$setViewValue(datum.value);
					scope.$eval(attr.ngEnter);
				});
			});

			element.bind('keydown', function(event) {
				if (event.which === 13) {
					/*scope.$apply(function() {
						scope.$eval(attr.ngEnter);
					});*/
					$('.tt-dropdown-menu').hide();
					
					if ($('#search-field .tt-is-under-cursor').length > 0) {
						event.preventDefault();
						event.stopPropagation();
					}
				}
			});
		}
	};
})

.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown", function (event) {
            if(event.which === 13 && !event.isDefaultPrevented()) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });

                event.preventDefault();
            }
        });
    };
})

.directive('getDimensions', function () {       
    return {
    	restrict: 'A',
        link: function(scope, element, attrs) {   
            element.bind("load" , function(event) {
            	var height = element[0].naturalHeight;
            	var width = element[0].naturalWidth;
                
            	scope[attrs.getDimensions].dimensions = {h: height, w: width};
            	scope.$apply();
            });
        }
    };
})

.directive('tabSelection', function() {
	return {
	    restrict: 'A',
	    templateUrl : contextPath + '/app/shared/directives/publishingTabs.html?ver=' + htmlTemplateVersion,
	    transclude : true,
	    replace: true,
	    controller: ['$scope', '$location', '$rootScope', '$http',
	                 function($scope, $location, $rootScope, $http) { 
	    	$rootScope.tabSelection = null;
	    	var tabMap = {'': 'ts', 'tasks': 'ts', 'task': 'ts', 'featuredTasks': 'ts', 'featuredTask': 'ts', 'pendingTasks': 'ts', 'pendingTask': 'ts', 
	    			'support': 'ts', 'contacts': 'ts', 'contact': 'ts', 'images': 'ts', 'image': 'ts', 'resourceImages': 'as', 'tags': 'fs', 'tag': 'fs',
	    			'categories': 'fs', 'category': 'fs', 'roles': 'fs', 'role': 'fs', 'reports': 'ds', 'report': 'ds', 'recentComments': 'ds', 'feedback': 'ds', 
	    			'tenantSettings': 'as', 'tenantSetting': 'as', 'publishers': 'as', 'publisher': 'as', 'markets': 'as', 'market': 'as', 'restrict': 'as',
	    			'commentDetails':'ds', 'comment':'ds', 'commentsForTaskVersion':'ds', 'reviewCommentReplies':'ds'};
	    	$scope.$on('$locationChangeSuccess', function(event, newLoc, oldLoc) {
			    highlightTab();
			});
	    	function highlightTab() {
	    		var path = $location.path();
			    path = path.substring(1,path.length).split('/')[0];
			    if (path.length > 0 ||  $rootScope.tabSelection == null) {
			    	$rootScope.tabSelection = tabMap[path];
			    }
	    	}
	    	highlightTab();
	    	$scope.selectTab = function(tabName) {
	    		$rootScope.tabSelection = tabName;
	    		$location.path('/');
	    	};
	    	
	    	$scope.admin = false;
	    	$http({
	    		method : 'GET',
	    		url : contextPath + '/publish/pageData'
	    	}).success(function(data, status, headers, config) {
	    		$scope.admin = data.admin;
	    	});
	    }]
	};
})

.directive('commentReplyDialog', function() {
	return {
	    restrict: 'A',
	    templateUrl: contextPath + '/app/shared/directives/replyDialog.html?ver=' + htmlTemplateVersion,
	    replace: true,
	    scope: {
	    	commentReply: '=commentReplyDialog',
	    	comment: '=',
	    	successCallback: '&'
	    },
	    controller: ['$scope', 'commentReplyService', function($scope, commentReplyService) { 
	    	$scope.disableReplySubmit = false;
	    	$scope.submitReply = function() {
	    		if (!$scope.disableReplySubmit) {
	    			$scope.disableReplySubmit = true;
	    			
	    			commentReplyService.saveCommentReply($scope.commentReply)
	    				.success(function(data, status, headers, config) {
	    					$scope.comment.commentReply = data;
	    					$scope.disableReplySubmit = false;
	    					if (typeof $scope.successCallback != 'undefined' && $scope.successCallback != null) {
	    						$scope.successCallback({'commentId': data.commentId});
	    					}
	    					$('#replyModal').modal('hide');	
	    				}).error(function(data, status, headers, config) {
	    					$scope.replyErrors = data;
	    					$scope.disableReplySubmit = false;
	    				});
	    		}
	    	}
	    }]
	};
})

.filter('truncate', ['$sce', function ($sce) {
    
	function escapeText(text) {
		var div = document.createElement('div');
        div.appendChild(document.createTextNode(text));
        return div.innerHTML;
	}
	
	return function (text, length) {
    	if (isNaN(length))
            length = 10;
    	
        if (text == null || text.length == 0) {
        	return null;
        }
        
        if (text.length > length) {
        	text = escapeText(text.substring(0, length-3)) + '&hellip;';
        } else {
        	text = escapeText(text);
        }
        return $sce.trustAsHtml(text);
    };
}])

.filter('encodeURIComponent', function() {
    return window.encodeURIComponent;
})

.filter('range', function() {
	return function(arr, lower, upper) {
		for ( var i = lower; i <= upper; i++) {
			arr.push(i);
		}
		return arr;
	};
});