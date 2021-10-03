 function init() {
  var geographic = new OpenLayers.Projection("EPSG:4326");
  var mercator = new OpenLayers.Projection("EPSG:900913");
  var map=new OpenLayers.Map("map");
  
  layer = new OpenLayers.Layer.OSM("OpenStreetMap");
  map.addLayer(layer);
  var lonlat=new OpenLayers.LonLat(1486537,6887098);
  map.setCenter(lonlat,10);

  map.addControl(new OpenLayers.Control.LayerSwitcher());
  // map.addControl(new OpenLayers.Control.OverviewMap());
  // map.addControl(new OpenLayers.Control.ScaleLine());
  // map.addControl(new OpenLayers.Control.NavToolbar());
  //map.addControl(new OpenLayers.Control.MousePosition());

var styleAirport = new OpenLayers.Style({
      externalGraphic: 'kml/airport.png',
      graphicWidth: "${elength}",
      graphicHeight: "${elength}"
  }, {
      context: {
          elength: function(feature) {
              return Math.min(feature.attributes.count, 7) + 18;
          }
      }
  });

  var airport = new OpenLayers.Layer.Vector("Flugh&auml;fen", 
  {
        projection: geographic,
        strategies: [new OpenLayers.Strategy.Fixed(),
                     new OpenLayers.Strategy.Cluster()
        ],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/airport.kml",
        format: new OpenLayers.Format.KML({
            extractStyles: true,
            extractAttributes: true
            })
        }),
        styleMap: new OpenLayers.StyleMap({
            "default": styleAirport,
            "select": {
                fillColor: "#8aeeef",
                strokeColor: "#32a8a9"
            }
        })
    });

  var styleBhf = new OpenLayers.Style({
      externalGraphic: 'kml/bhf.png',
      graphicWidth: "${elength}",
      graphicHeight: "${elength}"
  }, {
      context: {
          elength: function(feature) {
              return Math.min(feature.attributes.count, 7) + 18;
          }
      }
  });
  
  var bhf = new OpenLayers.Layer.Vector("Bahnh&ouml;fe", 
  {
        projection: geographic,
        strategies: [new OpenLayers.Strategy.Fixed(),
                     new OpenLayers.Strategy.Cluster()
        ],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/bhf.kml",
        format: new OpenLayers.Format.KML({
            extractStyles: true,
            extractAttributes: true
            })
        }),
        styleMap: new OpenLayers.StyleMap({
            "default": styleBhf,
            "select": {
                fillColor: "#8aeeef",
                strokeColor: "#32a8a9"
            }
        })
    });
  
  var styleEvent = new OpenLayers.Style({
    externalGraphic: 'kml/event.png',
    graphicWidth: "${elength}",
    graphicHeight: "${elength}"
  }, {
    context: {
      elength: function(feature) {
        return Math.min(feature.attributes.count, 7) + 44;
      }
    }
  });
  
  var event = new OpenLayers.Layer.Vector("Event", 
  {
        projection: geographic,
        strategies: [new OpenLayers.Strategy.Fixed(),
                     new OpenLayers.Strategy.Cluster()
        ],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/event.kml",
        format: new OpenLayers.Format.KML({
            extractStyles: true,
            extractAttributes: true
            })
        }),
        styleMap: new OpenLayers.StyleMap({
            "default": styleEvent,
            "select": {
                fillColor: "#8aeeef",
                strokeColor: "#32a8a9"
            }
        })
    });
  
  var styleGastro = new OpenLayers.Style({
      externalGraphic: 'kml/gastro.png',
      graphicWidth: "${elength}",
      graphicHeight: "${elength}"
  }, {
      context: {
          elength: function(feature) {
              return Math.min(feature.attributes.count, 7) + 18;
          }
    }
  });
  
  var gastro = new OpenLayers.Layer.Vector("Gastronomie", 
  {
        projection: geographic,
        strategies: [new OpenLayers.Strategy.Fixed(),
                     new OpenLayers.Strategy.Cluster()
        ],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/gastro.kml",
        format: new OpenLayers.Format.KML({
            extractStyles: true,
            extractAttributes: true
            })
        }),
        styleMap: new OpenLayers.StyleMap({
            "default": styleGastro,
            "select": {
                fillColor: "#8aeeef",
                strokeColor: "#32a8a9"
            }
        })
    });
  
  var styleSleep = new OpenLayers.Style({
      externalGraphic: 'kml/uebernachten.png',
      graphicWidth: "${elength}",
      graphicHeight: "${elength}"
  }, {
      context: {
          elength: function(feature) {
              return Math.min(feature.attributes.count, 7) + 18;
          }
      }
  });
  
  var uebernachten = new OpenLayers.Layer.Vector("&Uuml;bernachtungsm&ouml;glichkeiten", 
  {
        projection: geographic,
        strategies: [new OpenLayers.Strategy.Fixed(),
                     new OpenLayers.Strategy.Cluster()
        ],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/uebernachten.kml",
        format: new OpenLayers.Format.KML({
            extractStyles: true,
            extractAttributes: true
            })
        }),
        styleMap: new OpenLayers.StyleMap({
            "default": styleSleep,
            "select": {
                fillColor: "#8aeeef",
                strokeColor: "#32a8a9"
            }
        })
    });
  
  var styleTipps = new OpenLayers.Style({
    externalGraphic: 'kml/tipps.png',
    graphicWidth: "${elength}",
    graphicHeight: "${elength}"
    }, {
      context: {
        elength: function(feature) {
        return Math.min(feature.attributes.count, 7) + 18;}
      }
    }
  );
  
  var tipps = new OpenLayers.Layer.Vector("Tipps", 
  {
        projection: geographic,
        strategies: [new OpenLayers.Strategy.Fixed(),
                     new OpenLayers.Strategy.Cluster()
        ],
        protocol: new OpenLayers.Protocol.HTTP({
        url: "kml/tipps.kml",
        format: new OpenLayers.Format.KML({
            extractStyles: true,
            extractAttributes: true
            })
        }),
        styleMap: new OpenLayers.StyleMap({
            "default": styleTipps,
            "select": {
                fillColor: "#8aeeef",
                strokeColor: "#32a8a9"
            }
        })
    });
  
  map.addLayers([airport, bhf, gastro, uebernachten, event, tipps]);
  
  select = new OpenLayers.Control.SelectFeature([event, airport, bhf, uebernachten, gastro, tipps]);
  
  airport.events.on({
        "featureselected": onFeatureSelect,
        "featureunselected": onFeatureUnselect
        });
    
  bhf.events.on({
        "featureselected": onFeatureSelect,
        "featureunselected": onFeatureUnselect
        });

  event.events.on({
        "featureselected": onFeatureSelect,
        "featureunselected": onFeatureUnselect
        });
    
  gastro.events.on({
        "featureselected": onFeatureSelect,
        "featureunselected": onFeatureUnselect
        });

  uebernachten.events.on({
        "featureselected": onFeatureSelect,
        "featureunselected": onFeatureUnselect
        });

  tipps.events.on({
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
        var cluster = event.feature.cluster ? event.feature.cluster : [event.feature];
        var centerpoint;
        if (cluster.length == 1) {
        
          var feature = cluster[0];
          var content = "<h2>"+feature.attributes.name + "</h2>" + feature.attributes.description;
          if (content.search("<script") != -1)
          {
              content = "Content contained Javascript! Escaped content below.<br>" + content.replace(/</g, "&lt;");
          }
          centerpoint = feature.geometry.getBounds().getCenterLonLat();
        }
        else {
            var feature = event.feature.cluster[0];
            content = "Mehrere Ergebnisse. Bitte weiter hereinzoomen.";
            centerpoint = event.feature.cluster[0].geometry.getBounds().getCenterLonLat();
        }
        popup = new OpenLayers.Popup.FramedCloud("chicken", 
          centerpoint,
          new OpenLayers.Size(100,100),
          content,
          null, true, onPopupClose
        );
        feature.popup = popup;
        map.addPopup(popup);
    }
  
    function onFeatureUnselect(event)
  {
        var cluster = event.feature.cluster ? event.feature.cluster : [event.feature];
        var feature = cluster[0];
        if(feature.popup)
    {
            map.removePopup(feature.popup);
            feature.popup.destroy();
            delete feature.popup;
        }
    }

 }
