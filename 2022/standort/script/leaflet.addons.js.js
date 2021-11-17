(function () {
    "use strict";

    L.Control.AbstractAddon = L.Control.extend({
        _createButton: L.Control.Zoom.prototype._createButton
    });

    L.Control.PanTo = L.Control.AbstractAddon.extend({
        options: {
            position: "bottomright",
            views: {
                "Center": [0, 0]
            }
        },

        onAdd: function (map) {
            var options = this.options;
            var container = L.DomUtil.create("div", "leaflet-control-panto leaflet-bar");

            this._map = map;

            for (var key in options.views) {
                if (options.views.hasOwnProperty(key)) {
                    this._createButton(
                        key,
                        "Springe zu: " + key,
                        "leaflet-control-panto-btn",
                        container,
                        this.panTo.bind(this, options.views[key])
                    );
                }
            }
            return container;
        },

        panTo: function (position) {
            this._map.flyTo(position, 16);
        }
    });

    L.control.panTo = function (opts) {
        return new L.Control.PanTo(opts);
    };

    L.Control.Grow = L.Control.AbstractAddon.extend({
        options: {
            mapContainerQuery: "#map-container",
            position: "bottomleft",
            growSize: "90vh",
            growText: "???",
            growTitle: "Karte vergr&ouml;&szlig;ern",
            shrinkSize: "40vh",
            shrinkText: "???",
            shrinkTitle: "Karte verkleinern"
        },

        onAdd: function (map) {
            var options = this.options;
            var container = L.DomUtil.create("div", "leaflet-control-grow leaflet-bar");

            this._map = map;
            this._growBtn = this._createButton(
                options.growText,
                options.growTitle,
                "leaflet-control-grow-btn",
                container,
                this._grow
            );
            this._shrinkBtn = this._createButton(
                options.shrinkText,
                options.shrinkTitle,
                "leaflet-control-shrink-btn hidden",
                container,
                this._shrink
            );

            return container;
        },

        _grow: function () {
            var options = this.options;
            var mapContainer = document.querySelector(options.mapContainerQuery);
            var bounds = mapContainer.getBoundingClientRect();
            L.DomUtil.addClass(this._growBtn, "hidden");
            L.DomUtil.removeClass(this._shrinkBtn, "hidden");
            mapContainer.style.height = options.growSize;
            window.scrollTo(null, bounds.y - 25 + window.scrollY);
            this._map.invalidateSize();
        },

        _shrink: function () {
            var options = this.options;
            var mapContainer = document.querySelector(options.mapContainerQuery);
            L.DomUtil.removeClass(this._growBtn, "hidden");
            L.DomUtil.addClass(this._shrinkBtn, "hidden");
            mapContainer.style.height = options.shrinkSize;
            this._map.invalidateSize();
        }

    });

    L.control.grow = function (opts) {
        return new L.Control.Grow(opts);
    };
}());
