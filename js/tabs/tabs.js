function TabbedPane(pane, tabs, args) {
	for (id in tabs) {
		Event.observe(id, 'click', function(e) {
			if (typeof(args.onClick) == 'function')
				args.onClick(e);
			
			for (id in tabs) $(id).removeClassName('active');
			Event.element(e).addClassName('active');
			
			new Ajax.Updater(pane, tabs[Event.element(e).id], $H({
					asynchronous: true, 
					method: 'get'
				}).merge(args));
			Event.stop(e);
		});
		
		if ($(id).hasClassName('active')) {
		    new Ajax.Updater(pane, tabs[id], $H({
			asynchronous: true,
			method: 'get'
			}).merge(args));
		}
	}
}
