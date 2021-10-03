 function init()
 {
	var map=new OpenLayers.Map("maparea");
	
	layer = new OpenLayers.Layer.OSM( "OpenStreetMap");
	map.addLayer(layer);
	var lonlat=new OpenLayers.LonLat(1361379,6771305);
	map.setCenter(lonlat,12);

	map.addControl(new OpenLayers.Control.LayerSwitcher());
	map.addControl(new OpenLayers.Control.OverviewMap());
	map.addControl(new OpenLayers.Control.ScaleLine());
	map.addControl(new OpenLayers.Control.NavToolbar());
	//map.addControl(new OpenLayers.Control.MousePosition());
	
	var institut = new OpenLayers.Layer.Vector("Institut für Geoinformation und Vermessung", 
	{
        projection: map.displayProjection,
        strategies: [new OpenLayers.Strategy.Fixed()],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/institut.kml",
        format: new OpenLayers.Format.KML({
			extractStyles: true,
            extractAttributes: true
            })
        })
    });
	
	var unterkuenfte = new OpenLayers.Layer.Vector("Übernachtungsmöglichkeiten", 
	{
        projection: map.displayProjection,
        strategies: [new OpenLayers.Strategy.Fixed()],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/unterkuenfte.kml",
        format: new OpenLayers.Format.KML({
			extractStyles: true,
            extractAttributes: true
            })
        })
    });	
	
	var social_events = new OpenLayers.Layer.Vector("Social Events", 
	{
        projection: map.displayProjection,
        strategies: [new OpenLayers.Strategy.Fixed()],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/social_events.kml",
        format: new OpenLayers.Format.KML({
			extractStyles: true,
            extractAttributes: true
            })
        })
    });
	
	var gastro_bars = new OpenLayers.Layer.Vector("Gastronomie & Bars", 
	{
        projection: map.displayProjection,
        strategies: [new OpenLayers.Strategy.Fixed()],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/gastro_bars.kml",
        format: new OpenLayers.Format.KML({
			extractStyles: true,
            extractAttributes: true
            })
        })
    });	
	
	map.addLayers([institut,unterkuenfte, social_events, gastro_bars]);
	
	select = new OpenLayers.Control.SelectFeature([institut,unterkuenfte,social_events,gastro_bars]);
            
    unterkuenfte.events.on({
        "featureselected": onFeatureSelect,
        "featureunselected": onFeatureUnselect
        });
	
	institut.events.on({
        "featureselected": onFeatureSelect,
        "featureunselected": onFeatureUnselect
        });
		
	social_events.events.on({
        "featureselected": onFeatureSelect,
        "featureunselected": onFeatureUnselect
        });
		
	gastro_bars.events.on({
        "featureselected": onFeatureSelect,
        "featureunselected": onFeatureUnselect
        });
          
    map.addControl(select);

    select.activate();   
	
    function onPopupClose(evt) 
	{
        select.unselectAll();
    }
	
    function onFeatureSelect(event)
	{
        var feature = event.feature;
        var content = "<h2>"+feature.attributes.name + "</h2>" + feature.attributes.description;
        if (content.search("<script") != -1)
		{
            content = "Content contained Javascript! Escaped content below.<br>" + content.replace(/</g, "&lt;");
        }
        popup = new OpenLayers.Popup.FramedCloud("chicken", 
        feature.geometry.getBounds().getCenterLonLat(),
        new OpenLayers.Size(100,100),
        content,
        null, true, onPopupClose);
        feature.popup = popup;
        map.addPopup(popup);
    }

    function onFeatureUnselect(event)
	{
        var feature = event.feature;
        if(feature.popup)
		{
            map.removePopup(feature.popup);
            feature.popup.destroy();
            delete feature.popup;
        }
    }
 }