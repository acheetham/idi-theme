var fluid_1_4=fluid_1_4||{};(function($,fluid){fluid.defaults("fluid.slidingPanel",{gradeNames:["fluid.viewComponent","autoInit"],selectors:{panel:".flc-slidingPanel-panel",toggleButton:".flc-slidingPanel-toggleButton"},strings:{showText:"+ Show Display Preferences",hideText:"- Hide"},events:{afterPanelHidden:null,afterPanelShown:null},finalInitFunction:"fluid.slidingPanel.finalInit",invokers:{hide:"fluid.slidingPanel.slideUp",show:"fluid.slidingPanel.slideDown"},hideByDefault:true});fluid.slidingPanel.slideUp=function(element,callback,duration){$(element).slideUp(duration||"400",callback)};fluid.slidingPanel.slideDown=function(element,callback,duration){$(element).slideDown(duration||"400",callback)};fluid.slidingPanel.finalInit=function(that){that.showPanel=function(){that.locate("toggleButton").text(that.options.strings.hideText);that.show(that.locate("panel"),that.events.afterPanelShown.fire)};that.hidePanel=function(){that.locate("toggleButton").text(that.options.strings.showText);that.hide(that.locate("panel"),that.events.afterPanelHidden.fire)};that.togglePanel=function(){if(that.locate("panel").is(":hidden")){that.showPanel()}else{that.hidePanel()}};that.locate("toggleButton").click(that.togglePanel);if(that.options.hideByDefault){that.locate("toggleButton").text(that.options.strings.showText);that.locate("panel").hide()}}})(jQuery,fluid_1_4);